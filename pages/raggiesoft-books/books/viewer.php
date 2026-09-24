<?php
/**
 * RaggieSoft Books - Markdown Viewer
 * Renders the dynamically mapped Markdown files from the RaggieSoft Assets CDN.
 */

// 1. Determine the path to the Markdown file on the CDN
$prefix = '/raggiesoft-books/books/';
$mdUrl = '';

if (str_starts_with($request_uri, $prefix)) {
    $relativePath = substr($request_uri, strlen($prefix));
    $parts = explode('/', $relativePath);
    $seriesSlug = $parts[0] ?? '';
    
    // Look up the actual file path in the Stardust Route JSON
    $routesDir = dirname(__DIR__, 4) . '/data/routes/raggiesoft-books/books';
    $routeFile = $routesDir . '/' . $seriesSlug . '.json';
    
    if (file_exists($routeFile)) {
        $routeData = json_decode(file_get_contents($routeFile), true);
        if (isset($routeData[$request_uri]['filePath'])) {
            $actualFilePath = $routeData[$request_uri]['filePath'];
            $mdUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $seriesSlug . '/' . $actualFilePath;
        }
    }
}

// Fallback to legacy extraction if not found
if (empty($mdUrl)) {
    if (str_starts_with($request_uri, $prefix)) {
        $relativePath = substr($request_uri, strlen($prefix));
    } else {
        $relativePath = ltrim($request_uri, '/');
    }
    $mdUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $relativePath . '.md';
}

// 2. Fetch Markdown Content
$mdContent = @file_get_contents($mdUrl);

if ($mdContent === false) {
    echo '<div class="container my-5">';
    echo '<wa-alert variant="danger" open>';
    echo '  <wa-icon slot="icon" name="exclamation-triangle"></wa-icon>';
    echo '  <strong>Error Loading Content</strong><br>';
    echo '  The requested chapter could not be found or loaded from the asset server.';
    echo '</wa-alert>';
    echo '</div>';
    return;
}

// 3. Parse YAML Frontmatter
$frontmatter = [];
if (preg_match('/^---\s*[
]+(.*?)[
]+---\s*[
]+/s', $mdContent, $matches)) {
    $rawFrontmatter = $matches[1];
    $mdContent = substr($mdContent, strlen($matches[0])); // Strip it from the content
    
    // Parse key-value pairs manually since php-yaml may not be available
    $lines = explode("\n", $rawFrontmatter);
    foreach ($lines as $line) {
        $line = trim($line);
        if (strpos($line, ':') !== false) {
            list($key, $val) = explode(':', $line, 2);
            $key = trim($key);
            $val = trim($val);
            $val = trim($val, '"\''); // remove surrounding quotes
            if ($val !== '') {
                $frontmatter[$key] = $val;
            }
        }
    }
}

// Support dynamic CDN variables in Markdown
$mdContent = str_replace('{{CDN}}', $cdnBaseUrl, $mdContent);

// 4. Render HTML
require_once ROOT_PATH . '/includes/classes/stardust-parsedown.php';
$Parsedown = new StardustParsedown();
$htmlContent = $Parsedown->text($mdContent);

// 4. Sequence Navigation (Provided by Elara Router auto-discovery)
$prevUrl = $config['prevUrl'] ?? null;
$nextUrl = $config['nextUrl'] ?? null;
$sequenceName = $config['sequenceName'] ?? null;

// Dynamically fetch the Book Name from katie.json to override the generic site name
$pathParts = explode('/', $relativePath);
if (count($pathParts) >= 2) {
    $bookSlug = $pathParts[0];
    $bookIdStr = $pathParts[1];
    
    if (str_starts_with($bookIdStr, 'b')) {
        $bookNum = (int)str_replace('b', '', $bookIdStr);
        $katieUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $bookSlug . '/katie.json';
        $katieJson = @file_get_contents($katieUrl);
        
        if ($katieJson) {
            $katieData = json_decode($katieJson, true);
            if (isset($katieData['books'])) {
                foreach ($katieData['books'] as $book) {
                    if (isset($book['book_num']) && $book['book_num'] == $bookNum) {
                        $sequenceName = $book['book_title'];
                        break;
                    }
                }
            }
        }
    }
}

// Determine Overview Link dynamically based on the directory structure
$overviewUrl = dirname($request_uri, 3); // Backs out of /b001/c001/p001
?>

<div id="book-container" class="container py-4" style="max-width: 800px; transition: max-width 0.3s ease-in-out;">
    <!-- Breadcrumbs & Settings -->
    <div class="mb-4 d-flex justify-content-end justify-content-md-between align-items-center">
        <div class="d-none d-md-block">
            <wa-breadcrumb>
                <wa-breadcrumb-item href="/">Home</wa-breadcrumb-item>
                <wa-breadcrumb-item href="/raggiesoft-books/books">Library</wa-breadcrumb-item>
                <?php if ($sequenceName): ?>
                    <wa-breadcrumb-item href="<?php echo htmlspecialchars($overviewUrl); ?>">
                        <?php echo htmlspecialchars($sequenceName); ?>
                    </wa-breadcrumb-item>
                <?php endif; ?>
                <wa-breadcrumb-item>
                    <?php echo htmlspecialchars($config['title'] ?? 'Chapter'); ?>
                </wa-breadcrumb-item>
            </wa-breadcrumb>
        </div>
        <wa-button id="open-settings-btn" size="small" variant="neutral" pill>
            <wa-icon name="gear" slot="prefix"></wa-icon>
            Settings
        </wa-button>
    </div>

    <!-- Main Content Reader -->
    <wa-card class="w-100 mb-4 border-0 shadow-sm overflow-hidden" style="--body-padding: 0;">
        <?php if (!empty($frontmatter['hero_image'])): 
            $heroSrc = str_replace('{{CDN}}', $cdnBaseUrl, $frontmatter['hero_image']);
        ?>
            <div class="w-100" style="height: 350px; background-image: url('<?php echo htmlspecialchars($heroSrc); ?>'); background-size: cover; background-position: center; border-bottom: 3px solid var(--bs-primary);"></div>
        <?php endif; ?>
        <div class="p-4 p-md-5 fs-5 lh-lg story-content bg-body-tertiary text-body">
            <!-- Title Header -->
            <div class="text-center mb-5 pb-3 border-bottom border-secondary-subtle">
                <h1 class="font-heading fw-bold mb-2"><?php echo htmlspecialchars($config['title'] ?? 'Untitled Chapter'); ?></h1>
                <?php if ($sequenceName): ?>
                    <div class="text-body-secondary small text-uppercase tracking-wider mb-3">
                        <?php echo htmlspecialchars($sequenceName); ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($frontmatter['date']) || !empty($frontmatter['start_time']) || !empty($frontmatter['pov']) || !empty($frontmatter['location'])): ?>
                    <div class="d-flex flex-wrap justify-content-center gap-3 text-body-secondary small fw-semibold">
                        <?php if (!empty($frontmatter['date'])): ?>
                            <span><wa-icon name="calendar-day" class="me-1"></wa-icon> <?php echo htmlspecialchars($frontmatter['date']); ?></span>
                        <?php endif; ?>
                        
                        <?php if (!empty($frontmatter['start_time'])): ?>
                            <span>
                                <wa-icon name="clock" class="me-1"></wa-icon> 
                                <?php echo htmlspecialchars($frontmatter['start_time']); ?>
                                <?php if (!empty($frontmatter['end_time'])): ?> - <?php echo htmlspecialchars($frontmatter['end_time']); ?><?php endif; ?>
                                <?php echo htmlspecialchars($frontmatter['timezone'] ?? ''); ?>
                            </span>
                        <?php endif; ?>
                        
                        <?php if (!empty($frontmatter['location'])): ?>
                            <span><wa-icon name="location-dot" class="me-1"></wa-icon> <?php echo htmlspecialchars($frontmatter['location']); ?></span>
                        <?php endif; ?>
                        
                        <?php if (!empty($frontmatter['pov'])): ?>
                            <span><wa-icon name="eye" class="me-1"></wa-icon> POV: <?php echo htmlspecialchars($frontmatter['pov']); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Parsedown Content -->
            <?php echo $htmlContent; ?>
        </div>
    </wa-card>
    
    <!-- Navigation Controls -->
    <div class="d-flex justify-content-between align-items-center mb-5 mt-4">
        <div>
            <?php if ($prevUrl): ?>
                <wa-button href="<?php echo htmlspecialchars($prevUrl); ?>" variant="neutral">
                    <wa-icon name="arrow-left" slot="prefix"></wa-icon>
                    Previous Part
                </wa-button>
            <?php else: ?>
                <wa-button disabled variant="neutral">
                    <wa-icon name="arrow-left" slot="prefix"></wa-icon>
                    Previous Part
                </wa-button>
            <?php endif; ?>
        </div>
        
        <div class="text-center d-none d-sm-block">
            <wa-button href="<?php echo htmlspecialchars($overviewUrl); ?>" variant="text" size="small" class="text-body-secondary">
                <wa-icon name="list" slot="prefix"></wa-icon>
                Index
            </wa-button>
        </div>

        <div>
            <?php if ($nextUrl): 
                $nextText = $config['nextText'] ?? 'Next Part';
            ?>
                <wa-button href="<?php echo htmlspecialchars($nextUrl); ?>" variant="brand">
                    <?php echo htmlspecialchars($nextText); ?>
                    <wa-icon name="arrow-right" slot="suffix"></wa-icon>
                </wa-button>
            <?php else: ?>
                <wa-button disabled variant="brand">
                    End of Series
                </wa-button>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Reader Settings Dialog -->
<wa-dialog id="reader-settings-dialog" class="reader-settings-dialog" label="Reader Settings" light-dismiss>
    <wa-tab-group>
        <wa-tab slot="nav" panel="layout">Layout</wa-tab>
        <wa-tab slot="nav" panel="typography">Typography</wa-tab>
        <wa-tab slot="nav" panel="theme">Theme</wa-tab>

        <!-- Layout Tab -->
        <wa-tab-panel name="layout" class="pt-3">
            <div class="mb-4">
                <h6 class="fw-bold mb-2">Page Width</h6>
                <wa-radio-group class="reader-setting-input" data-setting="width" value="800px">
                    <wa-radio value="800px">800px (Default)</wa-radio>
                    <wa-radio value="1000px">1000px (Wide)</wa-radio>
                    <wa-radio value="1200px">1200px (Extra Wide)</wa-radio>
                    <wa-radio value="100%">100% (Full Width)</wa-radio>
                </wa-radio-group>
            </div>
            <div class="mb-2">
                <h6 class="fw-bold mb-2">Line Spacing</h6>
                <wa-radio-group class="reader-setting-input" data-setting="spacing" value="normal">
                    <wa-radio value="tight">Tight</wa-radio>
                    <wa-radio value="normal">Normal (Default)</wa-radio>
                    <wa-radio value="relaxed">Relaxed</wa-radio>
                </wa-radio-group>
            </div>
        </wa-tab-panel>

        <!-- Typography Tab -->
        <wa-tab-panel name="typography" class="pt-3">
            <div class="mb-4">
                <h6 class="fw-bold mb-2">Font Family</h6>
                <wa-radio-group class="reader-setting-input" data-setting="font" value="sans">
                    <wa-radio value="sans">Sans-Serif (Default)</wa-radio>
                    <wa-radio value="serif">Serif (Classic Book)</wa-radio>
                    <wa-radio value="mono">Monospace</wa-radio>
                </wa-radio-group>
            </div>
            <div class="mb-2">
                <h6 class="fw-bold mb-2">Font Size</h6>
                <wa-radio-group class="reader-setting-input" data-setting="size" value="md">
                    <wa-radio value="sm">Small</wa-radio>
                    <wa-radio value="md">Medium (Default)</wa-radio>
                    <wa-radio value="lg">Large</wa-radio>
                    <wa-radio value="xl">Extra Large</wa-radio>
                </wa-radio-group>
            </div>
        </wa-tab-panel>

        <!-- Theme Tab -->
        <wa-tab-panel name="theme" class="pt-3">
            <div class="mb-2">
                <h6 class="fw-bold mb-2">Reading Theme</h6>
                <p class="text-body-secondary small mb-3">Overrides the system default theme to provide a custom reading experience.</p>
                <wa-radio-group class="reader-setting-input" data-setting="theme" value="auto">
                    <wa-radio value="auto">System Default</wa-radio>
                    <wa-radio value="light">Light Mode</wa-radio>
                    <wa-radio value="dark">Dark Mode</wa-radio>
                    <wa-radio value="sepia">Sepia (Eye Comfort)</wa-radio>
                </wa-radio-group>
            </div>
        </wa-tab-panel>
    </wa-tab-group>
    
    <wa-button slot="footer" variant="neutral" class="reset-settings-btn me-2">Reset to Default</wa-button>
    <wa-button slot="footer" variant="brand" class="close-settings-btn">Close</wa-button>
</wa-dialog>

<script>
(function() {
    // Because elara-spa.js keeps old pages in the DOM, we must target the latest injected elements
    const containers = document.querySelectorAll('#book-container');
    const container = containers[containers.length - 1];
    
    const storyContents = document.querySelectorAll('.story-content');
    const storyContent = storyContents[storyContents.length - 1];
    
    const dialogs = document.querySelectorAll('.reader-settings-dialog');
    const dialog = dialogs[dialogs.length - 1];
    
    const btnOpens = document.querySelectorAll('#open-settings-btn');
    const btnOpen = btnOpens[btnOpens.length - 1];
    
    // Default Settings
    const defaults = {
        width: '800px',
        spacing: 'normal',
        font: 'sans',
        size: 'md',
        theme: 'auto'
    };

    // Initialize Settings
    const applySetting = (key, value) => {
        if (!container || !storyContent) return;
        
        if (key === 'width') {
            container.style.maxWidth = value;
        } else {
            storyContent.setAttribute(`data-reader-${key}`, value);
        }
    };

    // Clean up legacy setting from earlier version
    if (localStorage.getItem('raggiesoft-reader-width')) {
        localStorage.removeItem('raggiesoft-reader-width');
    }

    // Load from LocalStorage
    const savedSettings = JSON.parse(localStorage.getItem('raggiesoft-reader-settings') || '{}');
    const currentSettings = { ...defaults, ...savedSettings };
    
    if (dialog) {
        // Find our specific radio groups inside the latest dialog
        const inputs = dialog.querySelectorAll('.reader-setting-input');
        
        inputs.forEach(input => {
            const settingKey = input.getAttribute('data-setting');
            const val = currentSettings[settingKey];
            
            // Apply visually
            applySetting(settingKey, val);
            
            // Set radio value after a tick for Web Awesome to hydrate
            setTimeout(() => { input.value = val; }, 0);
            
            // Listen for changes
            input.addEventListener('change', (e) => {
                const newValue = e.target.value;
                currentSettings[settingKey] = newValue;
                applySetting(settingKey, newValue);
                localStorage.setItem('raggiesoft-reader-settings', JSON.stringify(currentSettings));
            });
        });

        // Close Buttons
                const closeBtns = dialog.querySelectorAll('.close-settings-btn');
        closeBtns.forEach(btn => btn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            dialog.open = false;
            try { dialog.hide(); } catch(err) {}
        }));

        // Reset Buttons
        const resetBtns = dialog.querySelectorAll('.reset-settings-btn');
        resetBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                localStorage.removeItem('raggiesoft-reader-settings');
                
                inputs.forEach(input => {
                    const settingKey = input.getAttribute('data-setting');
                    const defaultVal = defaults[settingKey];
                    
                    input.value = defaultVal;
                    applySetting(settingKey, defaultVal);
                });
                
                                dialog.open = false; // Close it after resetting
                try { dialog.hide(); } catch(err) {}
            });
        });
    }
    
    // Open Dialog
        if (btnOpen && dialog) {
        btnOpen.addEventListener('click', (e) => {
            e.preventDefault();
            dialog.open = true;
            try { dialog.show(); } catch(err) {}
        });
    }
})();
</script>

<style>
/* Story Typeography & Formatting */
.story-content {
    /* Set max-width and center inside the card if needed, but card bounds it already */
}
.story-content p {
    margin-bottom: 1.5rem;
    text-indent: 2rem; /* Traditional book indentation */
}
/* Don't indent the first paragraph after a heading or break */
.story-content p:first-of-type,
.story-content h1 + p,
.story-content h2 + p,
.story-content h3 + p,
.story-content h4 + p,
.story-content hr + p {
    text-indent: 0;
}
.story-content hr {
    margin: 3rem auto;
    border: none;
    text-align: center;
    overflow: visible;
}
/* Classic asterism/scene break for horizontal rules */
.story-content hr::after {
    content: "⁂"; 
    display: inline-block;
    position: relative;
    top: -0.7em;
    font-size: 1.5rem;
    padding: 0 0.5rem;
    color: var(--bs-secondary-color);
}
.story-content blockquote {
    border-left: 4px solid var(--bs-primary);
    padding-left: 1.5rem;
    margin-left: 1.5rem;
    font-style: italic;
    color: var(--bs-secondary-color);
}
.story-content h1, 
.story-content h2, 
.story-content h3 {
    margin-top: 2.5rem;
    margin-bottom: 1.5rem;
    font-family: var(--bs-font-sans-serif);
}

/* -----------------------------
   READER SETTING OVERRIDES 
------------------------------ */
.story-content {
    transition: background-color 0.3s ease, color 0.3s ease, font-size 0.3s ease, line-height 0.3s ease;
}

/* Theme Overrides */
.story-content[data-reader-theme="sepia"] {
    background-color: #f4ecd8 !important;
    color: #433422 !important;
}
.story-content[data-reader-theme="dark"] {
    background-color: #121212 !important;
    color: #e0e0e0 !important;
}
.story-content[data-reader-theme="light"] {
    background-color: #ffffff !important;
    color: #212529 !important;
}

/* Typography Overrides */
.story-content[data-reader-font="serif"] {
    font-family: Georgia, 'Times New Roman', serif !important;
}
.story-content[data-reader-font="sans"] {
    font-family: var(--bs-font-sans-serif) !important;
}
.story-content[data-reader-font="mono"] {
    font-family: var(--bs-font-monospace) !important;
}

/* Font Size Overrides */
.story-content[data-reader-size="sm"] { font-size: 1rem !important; }
.story-content[data-reader-size="md"] { font-size: 1.25rem !important; }
.story-content[data-reader-size="lg"] { font-size: 1.5rem !important; }
.story-content[data-reader-size="xl"] { font-size: 1.75rem !important; }

/* Line Height Overrides */
.story-content[data-reader-spacing="tight"] { line-height: 1.4 !important; }
.story-content[data-reader-spacing="normal"] { line-height: 1.8 !important; }
.story-content[data-reader-spacing="relaxed"] { line-height: 2.2 !important; }

</style>

