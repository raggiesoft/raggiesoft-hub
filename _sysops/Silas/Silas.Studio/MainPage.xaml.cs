using System.Collections.ObjectModel;
using System.Text.Json;
using Silas.Studio.Models;

namespace Silas.Studio;

// VIEW MODELS
public class FileItem
{
    public string FileName { get; set; }
    public string FolderPath { get; set; }
    public string FullPath { get; set; }
}

public class UnifiedItem
{
    public string Key { get; set; }
    public string Type { get; set; } // "ROUTE", "COMMON", "SETTINGS"
    public string StatusColor { get; set; }

    public RouteDefinition RouteData { get; set; }
    public CommonDefinition CommonData { get; set; }
    public SiteSettings SettingsData { get; set; }
}

public partial class MainPage : ContentPage
{
    private string _repoRoot;
    private string _currentFilePath;
    private bool _isLoading = false;
    private UnifiedItem _activeItem;

    public ObservableCollection<FileItem> Files { get; set; } = new();
    public ObservableCollection<UnifiedItem> UnifiedList { get; set; } = new();

    public MainPage()
    {
        InitializeComponent();
        FileListComponent.ItemsSource = Files;
        RouteListComponent.ItemsSource = UnifiedList;

        // AUTO-LOAD: Check persistence on startup
        string savedPath = Preferences.Default.Get("HubPath", string.Empty);
        if (!string.IsNullOrEmpty(savedPath) && Directory.Exists(savedPath))
        {
            _repoRoot = savedPath;
            LoadFilesRecursive();
        }
    }

    // =========================================================================
    // 1. REPO SETTINGS & PERSISTENCE
    // =========================================================================

    private async void OnSettingsClicked(object sender, EventArgs e)
    {
        // Allow user to change the hub location manually
        string result = await DisplayPromptAsync("Hub Location", "Enter full path to 'raggiesoft-hub':", initialValue: _repoRoot);

        if (!string.IsNullOrWhiteSpace(result) && Directory.Exists(result))
        {
            _repoRoot = result;
            Preferences.Default.Set("HubPath", _repoRoot); // SAVE TO MEMORY
            LoadFilesRecursive();
            await DisplayAlert("Success", "Hub location updated and saved.", "OK");
        }
    }

    private void LoadFilesRecursive()
    {
        if (string.IsNullOrEmpty(_repoRoot)) return;

        var dataRoot = Path.Combine(_repoRoot, "data");
        var routesPath = Path.Combine(dataRoot, "routes");

        if (!Directory.Exists(dataRoot)) return;

        Files.Clear();

        // 1. Root Files (settings.json)
        var rootFiles = Directory.GetFiles(dataRoot, "*.json", SearchOption.TopDirectoryOnly);
        foreach (var file in rootFiles)
        {
            Files.Add(new FileItem
            {
                FileName = Path.GetFileName(file),
                FullPath = file,
                FolderPath = "ROOT"
            });
        }

        // 2. Route Shards (Unlimited Depth)
        if (Directory.Exists(routesPath))
        {
            var routeFiles = Directory.GetFiles(routesPath, "*.json", SearchOption.AllDirectories);
            foreach (var file in routeFiles)
            {
                Files.Add(new FileItem
                {
                    FileName = Path.GetFileName(file),
                    FullPath = file,
                    FolderPath = Path.GetDirectoryName(file).Replace(routesPath, "").TrimStart(Path.DirectorySeparatorChar)
                });
            }
        }
    }

    // =========================================================================
    // 2. FILE COMMANDER (Create / Delete Files)
    // =========================================================================

    private async void OnNewFileClicked(object sender, EventArgs e)
    {
        if (string.IsNullOrEmpty(_repoRoot))
        {
            await DisplayAlert("Error", "Please define Hub Location in Settings first.", "OK");
            return;
        }

        // Step 1: Get Folder
        string folder = await DisplayPromptAsync("New Shard", "Enter subfolder (e.g. 'engine-room/artists'). Leave empty for root.");
        if (folder == null) return; // Cancelled

        // Step 2: Get Filename
        string filename = await DisplayPromptAsync("New Shard", "Enter filename (e.g. 'new-band.json'):");
        if (string.IsNullOrWhiteSpace(filename)) return;

        if (!filename.EndsWith(".json")) filename += ".json";

        // Step 3: Construct Path
        string targetDir = Path.Combine(_repoRoot, "data", "routes", folder);
        if (!Directory.Exists(targetDir)) Directory.CreateDirectory(targetDir);

        string targetPath = Path.Combine(targetDir, filename);

        // Step 4: Write Empty Template
        var emptyDict = new Dictionary<string, object>();
        string json = JsonSerializer.Serialize(emptyDict);
        await File.WriteAllTextAsync(targetPath, json);

        // Reload
        LoadFilesRecursive();
    }

    private async void OnDeleteFileClicked(object sender, EventArgs e)
    {
        if (FileListComponent.SelectedItem is FileItem selectedFile)
        {
            bool confirm = await DisplayAlert("Delete Shard", $"Permanently delete '{selectedFile.FileName}'?", "Yes", "No");
            if (confirm)
            {
                File.Delete(selectedFile.FullPath);
                UnifiedList.Clear();
                FormContainer.IsEnabled = false;
                EditorHeader.Text = "Select a File";
                LoadFilesRecursive();
            }
        }
        else
        {
            await DisplayAlert("Selection", "Select a file to delete first.", "OK");
        }
    }


    // =========================================================================
    // 3. PARSING & SELECTION (Existing Logic Preserved)
    // =========================================================================

    private async void OnFileSelected(object sender, SelectionChangedEventArgs e)
    {
        if (e.CurrentSelection.FirstOrDefault() is FileItem selectedFile)
        {
            _currentFilePath = selectedFile.FullPath;
            EditorHeader.Text = selectedFile.FileName.ToUpper();
            UnifiedList.Clear();
            _activeItem = null;
            FormContainer.IsEnabled = false;

            var options = new JsonSerializerOptions { PropertyNameCaseInsensitive = true, ReadCommentHandling = JsonCommentHandling.Skip, AllowTrailingCommas = true };

            try
            {
                string jsonContent = await File.ReadAllTextAsync(_currentFilePath);

                if (selectedFile.FileName.Equals("settings.json", StringComparison.OrdinalIgnoreCase))
                {
                    var settingsObj = JsonSerializer.Deserialize<SiteSettings>(jsonContent, options);
                    UnifiedList.Add(new UnifiedItem { Key = "[GLOBAL CONFIG]", Type = "SETTINGS", StatusColor = "#ffc107", SettingsData = settingsObj ?? new SiteSettings() });
                }
                else
                {
                    var rawData = JsonSerializer.Deserialize<Dictionary<string, JsonElement>>(jsonContent, options);
                    if (rawData != null)
                    {
                        foreach (var kvp in rawData)
                        {
                            if (kvp.Key.Equals("common", StringComparison.OrdinalIgnoreCase))
                            {
                                var commonObj = JsonSerializer.Deserialize<CommonDefinition>(kvp.Value.GetRawText(), options);
                                UnifiedList.Add(new UnifiedItem { Key = "[COMMON SETTINGS]", Type = "COMMON", StatusColor = "#0dcaf0", CommonData = commonObj });
                            }
                            else
                            {
                                var routeObj = JsonSerializer.Deserialize<RouteDefinition>(kvp.Value.GetRawText(), options);
                                routeObj.RouteKey = kvp.Key; // Temporary store key

                                string fullPath = Path.Combine(_repoRoot, routeObj.ViewPath + ".php");
                                string color = File.Exists(fullPath) ? "#198754" : "#dc3545";

                                UnifiedList.Add(new UnifiedItem { Key = kvp.Key, Type = "ROUTE", StatusColor = color, RouteData = routeObj });
                            }
                        }
                    }
                }
                FormContainer.IsEnabled = true;
            }
            catch (Exception ex)
            {
                await DisplayAlert("Error", ex.Message, "OK");
            }
        }
    }

    private void OnRouteSelected(object sender, SelectionChangedEventArgs e)
    {
        if (e.CurrentSelection.FirstOrDefault() is UnifiedItem item)
        {
            _activeItem = item;
            _isLoading = true;

            SectionRoute.IsVisible = false;
            SectionCommon.IsVisible = false;
            SectionSettings.IsVisible = false;
            LblViewStatus.Text = "";

            if (item.Type == "ROUTE")
            {
                SectionRoute.IsVisible = true;
                var r = item.RouteData;
                EntryTitle.Text = r.PageTitle;
                EntryView.Text = r.ViewPath;
                EntryTheme.Text = r.Theme;
                EntryContext.Text = r.SiteContext;
                CheckSidebar.IsChecked = r.ShowSidebar;
                EntrySidebar.Text = r.SidebarMenu;
                EntryHeader.Text = r.HeaderMenu;
                ValidateViewPath(r.ViewPath);
            }
            else if (item.Type == "COMMON")
            {
                SectionCommon.IsVisible = true;
                var c = item.CommonData;
                EntryBrandText.Text = c.NavbarBrandText;
                EntryBrandLogo.Text = c.NavbarBrandLogo;
                EntryFont.Text = c.PrimaryFont;
                EntryContext.Text = c.SiteContext;
                CheckSidebar.IsChecked = c.ShowSidebar;
                EntrySidebar.Text = c.SidebarMenu;
                EntryHeader.Text = c.HeaderMenu;
            }
            else if (item.Type == "SETTINGS")
            {
                SectionSettings.IsVisible = true;
                var s = item.SettingsData;
                EntrySiteName.Text = s.SiteName;
                EntrySlug.Text = s.ProjectSlug;
                EntryCdn.Text = s.CdnBaseUrl;
                EntryDefTheme.Text = s.DefaultTheme;
                CheckAnalytics.IsChecked = s.Analytics.Enabled;
                EntryTrackingId.Text = s.Analytics.TrackingId;
            }
            _isLoading = false;
        }
    }

    // =========================================================================
    // 4. ROUTE COMMANDER (Add / Remove Routes)
    // =========================================================================

    private async void OnAddRouteClicked(object sender, EventArgs e)
    {
        if (UnifiedList.Count > 0 && UnifiedList[0].Type == "SETTINGS")
        {
            await DisplayAlert("Info", "Cannot add routes to settings.json.", "OK");
            return;
        }

        if (string.IsNullOrEmpty(_currentFilePath)) return;

        string routeKey = await DisplayPromptAsync("New Route", "Enter Route Path (e.g. '/contact'):");
        if (string.IsNullOrWhiteSpace(routeKey)) return;

        if (!routeKey.StartsWith("/")) routeKey = "/" + routeKey;

        // Check for duplicates
        if (UnifiedList.Any(x => x.Key == routeKey))
        {
            await DisplayAlert("Error", "Route already exists.", "OK");
            return;
        }

        // Create new definition
        var newRoute = new RouteDefinition
        {
            RouteKey = routeKey,
            PageTitle = "New Page",
            ViewPath = "pages/",
            Theme = "light"
        };

        // Add to UI List
        UnifiedList.Add(new UnifiedItem
        {
            Key = routeKey,
            Type = "ROUTE",
            StatusColor = "#dc3545", // Red because view file likely doesn't exist yet
            RouteData = newRoute
        });

        // Scroll to it
        RouteListComponent.ScrollTo(UnifiedList.Last());
    }

    private async void OnRemoveRouteClicked(object sender, EventArgs e)
    {
        if (RouteListComponent.SelectedItem is UnifiedItem item)
        {
            bool confirm = await DisplayAlert("Delete", $"Remove '{item.Key}'?", "Yes", "No");
            if (confirm)
            {
                UnifiedList.Remove(item);
                // Clear Form
                _activeItem = null;
                SectionRoute.IsVisible = false;
                SectionCommon.IsVisible = false;
            }
        }
    }

    // =========================================================================
    // 5. LIVE EDITING & SAVING
    // =========================================================================

    private void OnFormChanged(object sender, EventArgs e)
    {
        if (_isLoading || _activeItem == null) return;

        if (_activeItem.Type == "ROUTE")
        {
            var r = _activeItem.RouteData;
            r.PageTitle = EntryTitle.Text;
            r.ViewPath = EntryView.Text;
            r.Theme = EntryTheme.Text;
            r.SiteContext = EntryContext.Text;
            r.ShowSidebar = CheckSidebar.IsChecked;
            r.SidebarMenu = EntrySidebar.Text;
            r.HeaderMenu = EntryHeader.Text;
            ValidateViewPath(r.ViewPath);
            _activeItem.StatusColor = File.Exists(Path.Combine(_repoRoot, r.ViewPath + ".php")) ? "#198754" : "#dc3545";
        }
        else if (_activeItem.Type == "COMMON")
        {
            var c = _activeItem.CommonData;
            c.NavbarBrandText = EntryBrandText.Text;
            c.NavbarBrandLogo = EntryBrandLogo.Text;
            c.SiteContext = EntryContext.Text;
            c.ShowSidebar = CheckSidebar.IsChecked;
            c.SidebarMenu = EntrySidebar.Text;
            c.HeaderMenu = EntryHeader.Text;
        }
        else if (_activeItem.Type == "SETTINGS")
        {
            var s = _activeItem.SettingsData;
            s.SiteName = EntrySiteName.Text;
            s.ProjectSlug = EntrySlug.Text;
            s.CdnBaseUrl = EntryCdn.Text;
            s.DefaultTheme = EntryDefTheme.Text;
            s.Analytics.Enabled = CheckAnalytics.IsChecked;
            s.Analytics.TrackingId = EntryTrackingId.Text;
        }
    }

    private void ValidateViewPath(string viewPath)
    {
        string fullPath = Path.Combine(_repoRoot, (viewPath ?? "") + ".php");
        LblViewStatus.Text = File.Exists(fullPath) ? "✅" : "❌";
    }

    private async void OnSaveClicked(object sender, EventArgs e)
    {
        if (UnifiedList.Count == 0 || string.IsNullOrEmpty(_currentFilePath)) return;

        var options = new JsonSerializerOptions { WriteIndented = true };
        string newJson = "";

        if (UnifiedList.FirstOrDefault(x => x.Type == "SETTINGS") is UnifiedItem sItem)
        {
            newJson = JsonSerializer.Serialize(sItem.SettingsData, options);
        }
        else
        {
            var exportDict = new Dictionary<string, object>();
            foreach (var item in UnifiedList)
            {
                if (item.Type == "COMMON")
                {
                    if (!string.IsNullOrEmpty(EntryFont.Text)) item.CommonData.BrandFont = new[] { EntryFont.Text, "sans-serif" };
                    exportDict.Add("common", item.CommonData);
                }
                else
                {
                    // Use the Key from the UI list as the Dictionary Key
                    exportDict.Add(item.Key, item.RouteData);
                }
            }
            newJson = JsonSerializer.Serialize(exportDict, options);
        }

        await File.WriteAllTextAsync(_currentFilePath, newJson);
        await DisplayAlert("Saved", "Shard updated successfully.", "OK");
    }
}