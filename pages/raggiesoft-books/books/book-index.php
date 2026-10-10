<?php
/**
 * RaggieSoft Architecture - Page Component
 * 
 * File: pages/raggiesoft-books/books/book-index.php
 * Component: Mini Table of Contents (Single Book)
 * Type: Routing / Navigation UI
 * 
 * Description:
 * Renders the chapter list for a specific book within a larger series.
 * Uses the global $katie (TOC JSON payload) to build the list dynamically.
 *
 * Maintenance Notes:
 * - Expects $katie, $bIndex, and $seriesSlug to be set by the calling script (viewer.php).
 * - Uses Web Awesome (wa-icon) web components for icons.
 */
// Mini TOC for a single Book

global $katie, $bIndex, $seriesSlug;

$book = $katie['books'][$bIndex] ?? [];
$bookTitle = $book['book_title'] ?? 'Book ' . ($bIndex + 1);
$chapters = $book['chapters'] ?? [];

$tocUrl = '/raggiesoft-books/books/' . $seriesSlug . '/toc';
?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold font-heading text-body-emphasis mb-3"><?php echo htmlspecialchars(html_entity_decode($bookTitle, ENT_QUOTES, 'UTF-8')); ?></h1>
            <p class="lead text-body-secondary mx-auto" style="max-width: 600px;">
                Chapters Index
            </p>
            <hr class="my-4 border-secondary opacity-50 w-25 mx-auto">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card bg-body-tertiary border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="list-group list-group-flush bg-transparent">
                        <?php if (!empty($chapters)): ?>
                            <?php foreach ($chapters as $cIndex => $chapter): ?>
                                <?php 
                                    $chapTitle = $chapter['chap_title'] ?? 'Chapter ' . ($cIndex + 1); 
                                    $chapUrl = $chapter['chap_url'] ?? '#';
                                ?>
                                <a href="<?php echo htmlspecialchars($chapUrl); ?>" class="list-group-item list-group-item-action bg-transparent border-0 px-3 py-3 rounded hover-bg-subtle transition-all d-flex align-items-center">
                                    <wa-icon name="bookmark" class="me-3 text-primary fs-4"></wa-icon>
                                    <h5 class="mb-0 fw-semibold text-body"><?php echo htmlspecialchars(html_entity_decode($chapTitle, ENT_QUOTES, 'UTF-8')); ?></h5>
                                </a>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-4">
                                <p class="text-muted mb-0">No chapters available in this book.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="<?php echo htmlspecialchars($tocUrl); ?>" class="btn btn-outline-secondary">
                    <wa-icon name="arrow-left" class="me-2"></wa-icon> Back to Series Index
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.hover-bg-subtle:hover {
    background-color: var(--bs-secondary-bg);
}
</style>
