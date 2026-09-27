<?php
require_once ROOT_PATH . '/includes/classes/stardust-lore-parser.php';

$entry = $_GET['entry'] ?? '';

if (empty($entry) || preg_match('/\.\./', $entry)) {
    die("Invalid Entry");
}

$filePath = realpath(ROOT_PATH . '/../raggiesoft-assets/raggiesoft-books/encyclopedia/' . $entry . '.md');
if (!$filePath || !file_exists($filePath)) {
    // 404
    header("HTTP/1.0 404 Not Found");
    require ROOT_PATH . '/amanda/errors/404.php';
    exit;
}

$loreData = StardustLoreParser::parse($filePath);
$metadata = $loreData['metadata'];
$html = $loreData['html'];
$toc = $loreData['toc'];

// If theme specified in frontmatter, override the page theme dynamically!
if (!empty($metadata['theme'])) {
    $force_dark_mode = ($metadata['theme'] === 'ad-astra' || $metadata['theme'] === 'dark');
    $currentPageTheme = $metadata['theme'];
    echo "<script>document.documentElement.setAttribute('data-bs-theme', '" . ($force_dark_mode ? 'dark' : 'light') . "');</script>";
}
?>

<div class="container py-5">
    <div class="row">
        <!-- Sidebar Navigation (TOC) -->
        <div class="col-lg-3 d-none d-lg-block">
            <div class="sticky-top" style="top: 100px;">
                <h5 class="fw-bold font-heading mb-3">Contents</h5>
                <ul class="nav flex-column border-start ps-3" style="font-size: 0.9em;">
                    <?php foreach ($toc as $item): ?>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-body-secondary p-0 <?php echo $item['level'] === 3 ? 'ms-3' : ''; ?>" 
                               href="#<?php echo htmlspecialchars($item['id']); ?>">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Main Lore Content -->
        <div class="col-lg-8 offset-lg-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2 small">
                    <li class="breadcrumb-item"><a href="/encyclopedia">Civilopedia</a></li>
                    <li class="breadcrumb-item text-capitalize"><?php echo htmlspecialchars($metadata['type'] ?? 'Lore'); ?></li>
                </ol>
            </nav>
            
            <h1 class="display-4 fw-bold font-heading mb-4 pb-3 border-bottom">
                <?php echo htmlspecialchars($metadata['title'] ?? 'Archive Record'); ?>
            </h1>

            <div class="story-content fs-5" style="line-height: 1.8;">
                <?php echo $html; ?>
            </div>
        </div>
    </div>
</div>
