<?php
/**
 * RaggieSoft Architecture - Page Component
 * 
 * File: pages/raggiesoft-books/books/landing.php
 * Component: Series Landing Page
 * Type: Portal / Entry Point
 * 
 * Description:
 * Renders the landing page for a book series (e.g. Aethel Saga), displaying
 * the cover image and series description extracted from the $katie TOC object.
 *
 * Maintenance Notes:
 * - Relies on $katie, $cdnBaseUrl, and $seriesSlug injected from viewer.php.
 * - Uses Web Awesome (wa-icon) web components.
 */
// Series Landing Page

global $katie, $cdnBaseUrl, $seriesSlug;

$seriesTitle = $katie['series_title'] ?? 'Book Series';
$seriesDescription = $katie['series_description'] ?? 'No description available.';
$seriesImage = $katie['series_image'] ?? '';
$tocUrl = '/raggiesoft-books/books/' . $seriesSlug . '/toc';

?>
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold font-heading text-body-emphasis mb-3"><?php echo htmlspecialchars($seriesTitle); ?></h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <?php if (!empty($seriesImage)): ?>
                <img src="<?php echo htmlspecialchars($cdnBaseUrl . $seriesImage); ?>" alt="Cover for <?php echo htmlspecialchars($seriesTitle); ?>" class="img-fluid rounded shadow-lg" />
            <?php else: ?>
                <div class="bg-secondary rounded shadow-lg d-flex align-items-center justify-content-center" style="aspect-ratio: 2/3;">
                    <wa-icon name="book" style="font-size: 5rem; color: rgba(255,255,255,0.5);"></wa-icon>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-7">
            <h2 class="text-primary border-bottom border-primary pb-2 mb-4"><wa-icon name="circle-info" class="me-2"></wa-icon> About this Series</h2>
            <p class="lead mb-4"><?php echo nl2br(htmlspecialchars($seriesDescription)); ?></p>
            
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-start mt-4">
                <a href="<?php echo htmlspecialchars($tocUrl); ?>" class="btn btn-primary btn-lg px-4 gap-3">
                    <wa-icon name="book-open"></wa-icon> Table of Contents
                </a>
            </div>
        </div>
    </div>
</div>
