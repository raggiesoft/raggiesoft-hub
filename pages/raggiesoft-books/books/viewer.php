<?php
/**
 * RaggieSoft Books - Markdown Viewer
 * Renders the dynamically mapped Markdown files from the RaggieSoft Assets CDN.
 */

// 1. Determine the path to the Markdown file on the CDN
$prefix = '/raggiesoft-books/books/';
if (str_starts_with($request_uri, $prefix)) {
    $relativePath = substr($request_uri, strlen($prefix));
} else {
    $relativePath = ltrim($request_uri, '/');
}

$mdUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $relativePath . '.md';

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
<wa-dialog id="reader-settings-dialog" label="Reader Settings">
    <div class="mb-3">
        <h6 class="fw-bold mb-2">Page Width</h6>
        <p class="text-body-secondary small mb-4">Adjust the width of the reading column. Wider columns allow for larger images, but can make reading long paragraphs more difficult on large displays.</p>
        
        <wa-radio-group id="page-width-setting" value="800px">
            <wa-radio value="800px">800px (Default - Best Readability)</wa-radio>
            <wa-radio value="1000px">1000px (Wide)</wa-radio>
            <wa-radio value="1200px">1200px (Extra Wide)</wa-radio>
            <wa-radio value="100%">100% (Full Width)</wa-radio>
        </wa-radio-group>
    </div>
    
    <wa-button slot="footer" variant="neutral" id="reset-settings-btn" class="me-2">Reset to Default</wa-button>
    <wa-button slot="footer" variant="brand" onclick="document.getElementById('reader-settings-dialog').hide()">Close</wa-button>
</wa-dialog>

<script>
(function() {
    const container = document.getElementById('book-container');
    const dialog = document.getElementById('reader-settings-dialog');
    const btnOpen = document.getElementById('open-settings-btn');
    const btnReset = document.getElementById('reset-settings-btn');
    const radioGroup = document.getElementById('page-width-setting');
    
    // Load preference from local storage immediately
    const savedWidth = localStorage.getItem('raggiesoft-reader-width');
    if (savedWidth && container && radioGroup) {
        container.style.maxWidth = savedWidth;
        // The radio group might not be fully upgraded by Web Awesome yet, so set it after a tick
        setTimeout(() => { radioGroup.value = savedWidth; }, 0);
    }
    
    // Open Dialog
    if (btnOpen && dialog) {
        btnOpen.addEventListener('click', () => dialog.show());
    }
    
    // Listen for setting change (Web Awesome uses 'change' natively)
    if (radioGroup && container) {
        radioGroup.addEventListener('change', (e) => {
            const newWidth = e.target.value;
            container.style.maxWidth = newWidth;
            localStorage.setItem('raggiesoft-reader-width', newWidth);
        });
    }
    
    // Reset to Default
    if (btnReset && radioGroup && container) {
        btnReset.addEventListener('click', () => {
            const defaultWidth = '800px';
            radioGroup.value = defaultWidth;
            container.style.maxWidth = defaultWidth;
            localStorage.removeItem('raggiesoft-reader-width');
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
</style>

