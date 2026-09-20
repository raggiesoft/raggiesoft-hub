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

// 3. Render HTML
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

<div class="container py-4" style="max-width: 800px;">
    <!-- Breadcrumbs -->
    <div class="mb-4 d-none d-md-block">
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

    <!-- Main Content Reader -->
    <wa-card class="w-100 mb-4 border-0 shadow-sm" style="--body-padding: 0;">
        <div class="p-4 p-md-5 fs-5 lh-lg story-content bg-body-tertiary text-body">
            <!-- Title Header -->
            <div class="text-center mb-5 pb-3 border-bottom border-secondary-subtle">
                <h1 class="font-heading fw-bold mb-2"><?php echo htmlspecialchars($config['title'] ?? 'Untitled Chapter'); ?></h1>
                <?php if ($sequenceName): ?>
                    <div class="text-body-secondary small text-uppercase tracking-wider">
                        <?php echo htmlspecialchars($sequenceName); ?>
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
            <?php if ($nextUrl): ?>
                <wa-button href="<?php echo htmlspecialchars($nextUrl); ?>" variant="brand">
                    Next Part
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

