<?php
/**
 * RaggieSoft Books - Single Chapter TOC (Mini-TOC)
 *
 * ARCHITECTURE & CONTEXT:
 * This script provides a granular, focused view of a single chapter's "Parts" (scenes).
 * It relies on global variables (`$katie`, `$bIndex`, `$cIndex`, `$seriesSlug`) populated
 * by the upstream router/parser to extract exactly the slice of the JSON manifest 
 * needed for this specific chapter.
 *
 * UI/UX ARCHITECTURE:
 * - Employs a clean, minimalist layout to reduce cognitive load compared to the full 
 *   Series TOC.
 * - Uses Bootstrap 5 cards to containerize the part links.
 * - Integrates Web Awesome (`<wa-icon name="file-lines">`) for distinct visual cues.
 * - Features a prominent "Back to Book" button utilizing `$bookUrl` for easy navigation 
 *   up the hierarchy.
 *
 * MAINTENANCE NOTES:
 * - This file is entirely dependent on the global state set by the Elara router.
 * - It strips `.md` extensions from file paths to generate clean SEO-friendly URLs.
 */

// pages/raggiesoft-books/books/chapter-index.php
// Mini TOC for a single Chapter

global $katie, $bIndex, $cIndex, $seriesSlug;

$book = $katie['books'][$bIndex] ?? [];
$bookTitle = $book['book_title'] ?? 'Book ' . ($bIndex + 1);
$bookUrl = $book['book_url'] ?? '#';

$chapter = $book['chapters'][$cIndex] ?? [];
$chapTitle = $chapter['chap_title'] ?? 'Chapter ' . ($cIndex + 1);
$parts = $chapter['parts'] ?? [];

?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-5 fw-bold font-heading text-body-emphasis mb-2"><?php echo htmlspecialchars(html_entity_decode($chapTitle, ENT_QUOTES, 'UTF-8')); ?></h1>
            <p class="lead text-body-secondary mx-auto" style="max-width: 600px;">
                from <em><?php echo htmlspecialchars(html_entity_decode($bookTitle, ENT_QUOTES, 'UTF-8')); ?></em>
            </p>
            <hr class="my-4 border-secondary opacity-50 w-25 mx-auto">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card bg-body-tertiary border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <?php if (!empty($parts)): ?>
                            <?php foreach ($parts as $part): ?>
                                <?php
                                    $partTitle = strip_tags($part['part_title'] ?? 'Part');
                                    $cleanPath = preg_replace('/\.md$/i', '', $part['file_path']);
                                    $partUrl = '/raggiesoft-books/books/' . $seriesSlug . '/' . $cleanPath;
                                ?>
                                <div class="col-12 col-sm-6">
                                    <a href="<?php echo htmlspecialchars($partUrl); ?>" class="text-decoration-none text-primary d-flex align-items-center p-3 rounded hover-bg-subtle transition-all h-100 border">
                                        <wa-icon name="file-lines" class="me-3 text-body-secondary fs-4"></wa-icon>
                                        <span class="fw-medium text-body"><?php echo htmlspecialchars(html_entity_decode($partTitle, ENT_QUOTES, 'UTF-8')); ?></span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center py-4">
                                <p class="text-muted mb-0">No parts available in this chapter.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="<?php echo htmlspecialchars($bookUrl); ?>" class="btn btn-outline-secondary">
                    <wa-icon name="arrow-left" class="me-2"></wa-icon> Back to <?php echo htmlspecialchars(html_entity_decode($bookTitle, ENT_QUOTES, 'UTF-8')); ?>
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
