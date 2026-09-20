<?php
/**
 * RaggieSoft Books - Sidebar Table of Contents
 * Fetches the specific book's katie.json from the CDN and builds a Web Awesome Tree
 */

$prefix = '/raggiesoft-books/books/';
$seriesSlug = '';
if (str_starts_with($request_uri, $prefix)) {
    $relativePath = substr($request_uri, strlen($prefix));
    $parts = explode('/', $relativePath);
    $seriesSlug = $parts[0] ?? '';
}

// Ensure we have a valid slug before attempting to fetch
$katie = [];
if (!empty($seriesSlug)) {
    $manifestUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $seriesSlug . '/katie.json';
    $manifestContent = @file_get_contents($manifestUrl);
    if ($manifestContent !== false) {
        $katie = json_decode($manifestContent, true) ?? [];
    }
}

$books = $katie['books'] ?? $katie;
$seriesTitle = $katie['series_title'] ?? $config['sequenceName'] ?? 'Narrative Table of Contents';
?>

<div class="sidebar-wrapper">
    <div class="mb-4 pb-3 border-bottom px-2">
        <h5 class="fw-bold mb-1 font-heading text-body-emphasis"><?php echo htmlspecialchars($seriesTitle); ?></h5>
        <div class="small text-body-secondary text-uppercase tracking-wider">Table of Contents</div>
    </div>
    
    <div class="book-toc">
        <?php if (!empty($books) && is_array($books)): ?>
            <wa-tree class="w-100 bg-transparent">
            <?php foreach ($books as $bIndex => $book): ?>
                <?php 
                    $bookTitle = $book['book_title'] ?? 'Book ' . ($bIndex + 1); 
                    $chapters = $book['chapters'] ?? [];
                    // Auto-expand if there's only one book in the series
                    $isBookExpanded = count($books) === 1 ? 'expanded' : ''; 
                ?>
                <wa-tree-item <?php echo $isBookExpanded; ?>>
                    <span class="fw-semibold text-body-emphasis d-block" style="cursor: pointer;" onclick="this.parentElement.expanded = !this.parentElement.expanded;"><?php echo htmlspecialchars(html_entity_decode($bookTitle, ENT_QUOTES, 'UTF-8')); ?></span>
                    
                    <?php foreach ($chapters as $cIndex => $chapter): ?>
                        <?php 
                            $chapTitle = $chapter['chap_title'] ?? 'Chapter ' . ($cIndex + 1); 
                            $parts = $chapter['parts'] ?? [];
                            
                            // Check if the current request URI matches any part in this chapter to auto-expand it
                            $isChapterActive = false;
                            foreach ($parts as $p) {
                                $cPath = preg_replace('/\.md$/i', '', $p['file_path']);
                                if ($request_uri === '/raggiesoft-books/books/' . $seriesSlug . '/' . $cPath) {
                                    $isChapterActive = true;
                                    break;
                                }
                            }
                        ?>
                        <wa-tree-item <?php echo $isChapterActive ? 'expanded' : ''; ?>>
                            <span class="text-body fw-medium d-block" style="cursor: pointer;" onclick="this.parentElement.expanded = !this.parentElement.expanded;"><?php echo htmlspecialchars(html_entity_decode($chapTitle, ENT_QUOTES, 'UTF-8')); ?></span>
                            
                            <?php foreach ($parts as $part): ?>
                                <?php
                                    $partTitle = strip_tags($part['part_title'] ?? 'Part');
                                    $cleanPath = preg_replace('/\.md$/i', '', $part['file_path']);
                                    $partUrl = '/raggiesoft-books/books/' . $seriesSlug . '/' . $cleanPath;
                                    $isActive = ($request_uri === $partUrl);
                                ?>
                                <wa-tree-item <?php echo $isActive ? 'selected' : ''; ?>>
                                    <a href="<?php echo htmlspecialchars($partUrl); ?>" class="text-decoration-none <?php echo $isActive ? 'text-primary fw-bold' : 'text-body-secondary'; ?> d-block py-1">
                                        <?php echo htmlspecialchars(html_entity_decode($partTitle, ENT_QUOTES, 'UTF-8')); ?>
                                    </a>
                                </wa-tree-item>
                            <?php endforeach; ?>
                        </wa-tree-item>
                    <?php endforeach; ?>
                </wa-tree-item>
            <?php endforeach; ?>
            </wa-tree>
        <?php else: ?>
            <div class="px-2 text-body-secondary small">
                <wa-icon name="circle-info" class="me-1"></wa-icon> Table of contents could not be loaded.
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.book-toc wa-tree {
    --indent-guide-width: 1px;
    --indent-guide-color: var(--bs-border-color);
}
.book-toc wa-tree-item {
    --indent-size: 1.25rem;
}
.book-toc a:hover {
    color: var(--bs-primary) !important;
}
</style>

