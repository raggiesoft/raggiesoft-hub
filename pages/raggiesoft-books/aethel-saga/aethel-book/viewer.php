<?php
// 1. Determine Context from Router Config
// $pageConfig['currentContext'] is passed from index.php
$bookId = $pageConfig['currentContext'][0] ?? '';
$chapId = $pageConfig['currentContext'][1] ?? '';
$partId = $pageConfig['currentContext'][2] ?? '';
$sceneId = $pageConfig['currentContext'][3] ?? '';

// 2. Locate the Asset
// URL: .../content/{book}/{chapter}/{part}/{scene}.md
$mdUrl = "https://assets.raggiesoft.com/aethel/content/{$bookId}/{$chapId}/{$partId}/{$sceneId}.md";
$rawMarkdown = @file_get_contents($mdUrl);

if ($rawMarkdown === false) {
    echo "<div class='container py-5'><div class='alert alert-danger'>Error: The scroll for this scene is missing.<br><small class='text-muted'>$mdUrl</small></div></div>";
    return;
}

// 3. Simple Markdown Parser
function parseMarkdown($text) {
    // Remove H1 headers (we handle title in PHP)
    $text = preg_replace('/^# (.*)$/m', '', $text); 
    // Remove H2 headers (often used for Scene Titles in docx)
    $text = preg_replace('/^## (.*)$/m', '<h3>$1</h3>', $text);

    // Styling
    $text = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $text);
    $text = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $text);
    
    // Paragraphs
    $paragraphs = explode("\n\n", $text);
    $html = "";
    foreach ($paragraphs as $p) {
        $p = trim($p);
        if (!empty($p)) {
            $html .= "<p>{$p}</p>\n";
        }
    }
    return $html;
}

$contentHtml = parseMarkdown($rawMarkdown);

// Helper to clean up slugs for display (e.g. "part-1-the-scholar" -> "The Scholar")
function cleanSlug($slug, $prefixToRemove) {
    // Removes "part-1-" from start
    $clean = preg_replace('/^' . $prefixToRemove . '-\d+-/', '', $slug);
    // Replace remaining dashes with spaces
    return ucwords(str_replace('-', ' ', $clean));
}
?>

<div class="<?php echo ($currentPageTheme === 'gloom') ? 'chapter-gloom' : 'aethel-theme'; ?> py-5 min-vh-100">
    <div class="container tome-container">
        
        <div class="text-center mb-5 pb-3 border-bottom border-secondary">
            <p class="h6 text-uppercase text-muted mb-1" style="letter-spacing: 2px;">
                <?php echo cleanSlug($chapId, 'chapter'); ?>
            </p>
            <p class="h5 text-uppercase text-warning" style="letter-spacing: 2px; font-family: 'Cinzel', serif;">
                <?php echo cleanSlug($partId, 'part'); ?>
            </p>
            
            <h1 class="display-4 mt-3" style="font-family: 'Cinzel', serif;">
                <?php echo $pageTitle; // Set by Router from JSON ?>
            </h1>
        </div>

        <div class="chapter-content fs-5" style="line-height: 1.8;">
            <?php echo $contentHtml; ?>
        </div>

        <div class="d-flex justify-content-between mt-5 pt-4 border-top border-secondary">
             <?php 
                require_once ROOT_PATH . '/includes/utils/nav-logic.php';
                $nav = getBookNavigation($pageConfig['bookJsonUrl']);
             ?>
             
             <a href="<?php echo $nav['prevLink']; ?>" class="btn btn-outline-secondary <?php echo ($nav['currentIndex'] <= 0) ? 'disabled' : ''; ?>">
                &larr; Previous
             </a>
             
             <a href="<?php echo $nav['upLink']; ?>" class="btn btn-outline-secondary">
                 <i class="fa-duotone fa-arrow-up"></i>
             </a>

             <a href="<?php echo $nav['nextLink']; ?>" class="btn btn-outline-dark <?php echo ($nav['nextLink'] === '#') ? 'disabled' : ''; ?>">
                Next &rarr;
             </a>
        </div>

    </div>
</div>