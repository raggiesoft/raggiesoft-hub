<?php
/**
 * RaggieSoft Architecture - Page Component / Controller
 * 
 * File: pages/raggiesoft-books/books/viewer.php
 * Component: Markdown Content Viewer (The Reader)
 * Type: Dynamic Controller / Renderer
 * 
 * Description:
 * Renders dynamically mapped Markdown files from the RaggieSoft Assets CDN.
 * Also acts as a mini-controller intercepting specific paths (__SERIES_LANDING__, 
 * __TOC__, __BOOK_TOC__) to serve specialized index UI templates.
 * 
 * Maintenance Notes:
 * - Relies on StardustParsedown for Markdown-to-HTML conversion.
 * - Manually parses basic YAML frontmatter.
 * - Hydrates global "$katie" from toc.json for the sidebar/TOC.
 */

// 1. Determine the path to the Markdown file on the CDN
$prefix = '/raggiesoft-books/books/';
$mdUrl = '';
$specialPageType = null;
$specialPageIndex1 = null;
$specialPageIndex2 = null;

if (str_starts_with($request_uri, $prefix)) {
    $relativePath = substr($request_uri, strlen($prefix));
    $parts = explode('/', $relativePath);
    $seriesSlug = $parts[0] ?? '';
    
    // Look up the actual file path in the Stardust Route JSON
    $routesDir = ROOT_PATH . '/data/routes/raggiesoft-books/books';
    $routeFile = $routesDir . '/' . $seriesSlug . '.json';
    
    if (file_exists($routeFile)) {
        $routeData = json_decode(file_get_contents($routeFile), true);
        if (isset($routeData[$request_uri]['filePath'])) {
            $actualFilePath = $routeData[$request_uri]['filePath'];
            if ($actualFilePath === '__SERIES_LANDING__') {
                $specialPageType = 'landing';
            } elseif ($actualFilePath === '__TOC__') {
                $specialPageType = 'toc';
            } elseif (str_starts_with($actualFilePath, '__BOOK_TOC__|')) {
                $p = explode('|', $actualFilePath);
                $specialPageType = 'book_toc';
                $specialPageIndex1 = $p[1] ?? 0;
            } elseif (str_starts_with($actualFilePath, '__CHAP_TOC__|')) {
                $p = explode('|', $actualFilePath);
                $specialPageType = 'chap_toc';
                $specialPageIndex1 = $p[1] ?? 0;
                $specialPageIndex2 = $p[2] ?? 0;
            } else {
                $mdUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $seriesSlug . '/' . $actualFilePath;
            }
        }
    }
}

// Intercept Special Pages
if ($specialPageType !== null) {
    if ($specialPageType === 'landing') {
        require __DIR__ . '/landing.php';
    } elseif ($specialPageType === 'toc') {
        require __DIR__ . '/series.php';
    } elseif ($specialPageType === 'book_toc') {
        $bIndex = $specialPageIndex1;
        require __DIR__ . '/book-index.php';
    } elseif ($specialPageType === 'chap_toc') {
        $bIndex = $specialPageIndex1;
        $cIndex = $specialPageIndex2;
        require __DIR__ . '/chapter-index.php';
    }
    return;
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

// Fetch the manifest (toc.json) to make $katie available to oliver.php and sidebar.php
$katie = [];
$pathParts = explode('/', $relativePath);
if (count($pathParts) >= 1) {
    $seriesSlug = $pathParts[0];
    $katieUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $seriesSlug . '/toc.json';
    $katieJson = @file_get_contents($katieUrl);
    if ($katieJson) {
        $katie = json_decode($katieJson, true);
    }
}

// Dynamically fetch the Book Name from toc.json to override the generic site name
if (count($pathParts) >= 2) {
    $bookIdStr = $pathParts[1];
    
    if (preg_match('/^book-(\d+)/', $bookIdStr, $m)) {
        $bookNum = (int)$m[1];
        if (!empty($katie) && isset($katie['books'])) {
            foreach ($katie['books'] as $book) {
                if (isset($book['book_num']) && $book['book_num'] == $bookNum) {
                    $sequenceName = $book['book_title'];
                    break;
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

<!-- Mobile TOC Toggle FAB -->
<div class="position-fixed bottom-0 end-0 p-3 mb-4 d-md-none" style="z-index: 1040;">
    <button id="mobile-toc-toggle-btn" class="btn btn-primary rounded-circle shadow-lg d-flex justify-content-center align-items-center" 
            type="button" 
            style="width: 60px; height: 60px; transition: transform 0.2s; background-color: var(--bs-primary); border: none;">
        <wa-icon name="list" style="font-size: 1.5rem; color: white;"></wa-icon>
    </button>
</div>


<script>
(function() {
    // Open Mobile TOC Drawer
    const tocBtns = document.querySelectorAll('#mobile-toc-toggle-btn');
    const tocBtn = tocBtns[tocBtns.length - 1];
    
    if (tocBtn) {
        tocBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // VERY IMPORTANT: Prevents Web Awesome from immediately closing it due to outside click!
            const drawer = document.getElementById('mobileSidebarDrawer');
            if (drawer) {
                drawer.open = true;
                try { drawer.show(); } catch(err) {}
            }
        });
    }
})();
</script>

<style>
/* Story Typeography & Formatting */
.story-content {
}
.story-content p {
    margin-bottom: 1.5rem;
    text-indent: 2rem; /* Traditional book indentation */
}
</style>
