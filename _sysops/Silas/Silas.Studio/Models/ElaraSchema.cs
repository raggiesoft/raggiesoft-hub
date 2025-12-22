using System.Text.Json.Serialization;
using System.Collections.Generic;

namespace Silas.Studio.Models;

// ==========================================
// 1. GLOBAL SETTINGS (settings.json)
// ==========================================
public class SiteSettings
{
    [JsonPropertyName("siteName")]
    public string SiteName { get; set; } = "";

    [JsonPropertyName("projectSlug")]
    public string ProjectSlug { get; set; } = "";

    [JsonPropertyName("cdnBaseUrl")]
    public string CdnBaseUrl { get; set; } = "";

    [JsonPropertyName("defaultTheme")]
    public string DefaultTheme { get; set; } = "light";

    // Analytics Sub-Object
    [JsonPropertyName("analytics")]
    public AnalyticsConfig Analytics { get; set; } = new();

    // Default Site Configs (Re-using CommonDefinition)
    [JsonPropertyName("defaults")]
    public CommonDefinition Defaults { get; set; } = new();

    // Mapping Dictionaries
    [JsonPropertyName("sidebarMap")]
    public Dictionary<string, string> SidebarMap { get; set; } = new();

    [JsonPropertyName("headerMap")]
    public Dictionary<string, string> HeaderMap { get; set; } = new();

    [JsonPropertyName("footerMap")]
    public Dictionary<string, string> FooterMap { get; set; } = new();
}

public class AnalyticsConfig
{
    [JsonPropertyName("provider")]
    public string Provider { get; set; } = "google";

    [JsonPropertyName("trackingId")]
    public string TrackingId { get; set; } = "";

    [JsonPropertyName("enabled")]
    public bool Enabled { get; set; } = true;
}

// ==========================================
// 2. COMMON SETTINGS (Common Blocks)
// ==========================================
public class CommonDefinition
{
    // Shared Navigation
    [JsonPropertyName("headerMenu")]
    public string HeaderMenu { get; set; } = "";

    [JsonPropertyName("sidebar")]
    public string SidebarMenu { get; set; } = "";

    [JsonPropertyName("showSidebar")]
    public bool ShowSidebar { get; set; } = true;

    [JsonPropertyName("site")]
    public string SiteContext { get; set; } = "portfolio";

    // Branding
    [JsonPropertyName("navbarBrandText")]
    public string NavbarBrandText { get; set; } = "";

    [JsonPropertyName("navbarBrandLink")]
    public string NavbarBrandLink { get; set; } = "";

    [JsonPropertyName("navbarBrandLogo")]
    public string NavbarBrandLogo { get; set; } = "";

    [JsonPropertyName("brandFont")]
    public string[] BrandFont { get; set; } = Array.Empty<string>();

    [JsonPropertyName("ogImage")]
    public string OgImage { get; set; } = "";

    // UI Helper
    [JsonIgnore]
    public string PrimaryFont => BrandFont.Length > 0 ? BrandFont[0] : "";
}

// ==========================================
// 3. ROUTES (Individual Page Routes)
// ==========================================
public class RouteDefinition
{
    // We store the Dictionary Key here for UI display
    [JsonIgnore]
    public string RouteKey { get; set; } = "";

    [JsonPropertyName("view")]
    public string ViewPath { get; set; } = "";

    [JsonPropertyName("title")]
    public string PageTitle { get; set; } = "";

    [JsonPropertyName("site")]
    public string SiteContext { get; set; } = "portfolio";

    [JsonPropertyName("theme")]
    public string Theme { get; set; } = "light";

    [JsonPropertyName("showSidebar")]
    public bool ShowSidebar { get; set; } = false;

    [JsonPropertyName("sidebar")]
    public string SidebarMenu { get; set; } = "";

    [JsonPropertyName("headerMenu")]
    public string HeaderMenu { get; set; } = "";

    // SEO Meta
    [JsonPropertyName("ogTitle")]
    public string? OgTitle { get; set; }

    [JsonPropertyName("ogDescription")]
    public string? OgDescription { get; set; }
}