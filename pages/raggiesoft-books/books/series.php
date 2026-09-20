<?php
// pages/raggiesoft-books/books/series.php
// Series Overview (Table of Contents)

$prefix = '/raggiesoft-books/books/';
$seriesSlug = '';
if (str_starts_with($request_uri, $prefix)) {
    $relativePath = substr($request_uri, strlen($prefix));
    $parts = explode('/', $relativePath);
    $seriesSlug = $parts[0] ?? '';
}

$katie = [];
if (!empty($seriesSlug)) {
    $manifestUrl = $cdnBaseUrl . '/raggiesoft-books/books/' . $seriesSlug . '/katie.json';
    $manifestContent = @file_get_contents($manifestUrl);
    if ($manifestContent !== false) {
        $katie = json_decode($manifestContent, true) ?? [];
    }
}

$books = $katie['books'] ?? $katie;
$seriesTitle = $katie['series_title'] ?? 'Series Overview';
?>
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold font-heading text-body-emphasis mb-3"><?php echo htmlspecialchars($seriesTitle); ?></h1>
            <p class="lead text-body-secondary mx-auto" style="max-width: 600px;">
                Table of Contents
            </p>
            <hr class="my-4 border-secondary opacity-50 w-25 mx-auto">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <?php if (!empty($books) && is_array($books)): ?>
                <?php foreach ($books as $bIndex => $book): ?>
                    <?php 
                        $bookTitle = $book['book_title'] ?? 'Book ' . ($bIndex + 1); 
                        $chapters = $book['chapters'] ?? [];
                    ?>
                    <div class="card bg-body-tertiary border-0 shadow-sm mb-4">
                        <div class="card-header bg-transparent border-bottom-0 pt-4 pb-0">
                            <h3 class="h4 fw-bold text-body-emphasis mb-0"><?php echo htmlspecialchars(html_entity_decode($bookTitle, ENT_QUOTES, 'UTF-8')); ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush bg-transparent">
                                <?php foreach ($chapters as $cIndex => $chapter): ?>
                                    <?php 
                                        $chapTitle = $chapter['chap_title'] ?? 'Chapter ' . ($cIndex + 1); 
                                        $parts = $chapter['parts'] ?? [];
                                    ?>
                                    <div class="list-group-item bg-transparent border-0 px-0 pt-3 pb-2">
                                        <h5 class="fw-semibold text-body mb-3 pb-2 border-bottom"><?php echo htmlspecialchars(html_entity_decode($chapTitle, ENT_QUOTES, 'UTF-8')); ?></h5>
                                        
                                        <div class="row g-2 ps-3">
                                            <?php foreach ($parts as $part): ?>
                                                <?php
                                                    $partTitle = strip_tags($part['part_title'] ?? 'Part');
                                                    $cleanPath = preg_replace('/\.md$/i', '', $part['file_path']);
                                                    $partUrl = '/raggiesoft-books/books/' . $seriesSlug . '/' . $cleanPath;
                                                ?>
                                                <div class="col-12 col-sm-6">
                                                    <a href="<?php echo htmlspecialchars($partUrl); ?>" class="text-decoration-none text-primary d-flex align-items-center p-2 rounded hover-bg-subtle transition-all">
                                                        <wa-icon name="file-lines" class="me-2 text-body-secondary"></wa-icon>
                                                        <span><?php echo htmlspecialchars(html_entity_decode($partTitle, ENT_QUOTES, 'UTF-8')); ?></span>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center py-5">
                    <wa-icon name="circle-info" style="font-size: 3rem; color: var(--bs-secondary);"></wa-icon>
                    <h3 class="mt-3 text-muted">No Chapters Found</h3>
                    <p>The chapters for this book could not be loaded.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
.hover-bg-subtle:hover {
    background-color: var(--bs-secondary-bg);
}
</style>
