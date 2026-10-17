<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-story.php (Web Awesome v3.13.0)
 * ============================================================================
 * Context: Engine Room Records - Crimson Node "Story Mode" Header.
 * Narrative/Purpose: Distraction-free header used when reading Crimson Node
 * narrative chapters, providing Previous/Next chapter navigation and quick
 * escapes back to the main Crimson Node hub or Archives index.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$isArchives  = ($request_uri === '/raggiesoft-books/books/crimson-node');

$prevLink     = "#";
$prevDisabled = true;
$nextLink     = "#";
$nextDisabled = true;

if (str_ends_with($request_uri, '/chapter-01')) {
    $prevDisabled = true;
    $nextLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-02";
    $nextDisabled = false;
} elseif (str_ends_with($request_uri, '/chapter-02')) {
    $prevLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-01";
    $prevDisabled = false;
    $nextLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-03";
    $nextDisabled = false;
} elseif (str_ends_with($request_uri, '/chapter-03')) {
    $prevLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-02";
    $prevDisabled = false;
    $nextLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-04";
    $nextDisabled = false;
} elseif (str_ends_with($request_uri, '/chapter-04')) {
    $prevLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-03";
    $prevDisabled = false;
    $nextLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-05";
    $nextDisabled = false;
} elseif (str_ends_with($request_uri, '/chapter-05')) {
    $prevLink     = "/raggiesoft-books/books/crimson-node/book-01/chapter-04";
    $prevDisabled = false;
    $nextDisabled = true;
}
?>

<!-- START: Story Mode Navigation Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/artists/crimson-node">
    <i slot="start" class="fa-duotone fa-house-chimney-blank me-1" aria-hidden="true"></i> Node
  </wa-button>

  <div class="border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;"></div>

  <!-- Archives Up -->
  <wa-button appearance="plain" href="/raggiesoft-books/books/crimson-node" class="<?= $isArchives ? 'active text-danger fw-bold' : '' ?>">
    <i slot="start" class="fa-duotone fa-book-atlas me-1" aria-hidden="true"></i> Archives
  </wa-button>

  <div class="border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;"></div>

  <!-- START: Chapter Playback Controls -->
  <wa-button appearance="plain" href="<?= htmlspecialchars($prevLink) ?>" <?= $prevDisabled ? 'disabled' : '' ?> title="Previous Chapter">
    <i slot="start" class="fa-solid fa-backward-step" aria-hidden="true"></i> Prev
  </wa-button>

  <wa-button appearance="plain" href="<?= htmlspecialchars($nextLink) ?>" <?= $nextDisabled ? 'disabled' : '' ?> title="Next Chapter">
    Next <i slot="end" class="fa-solid fa-forward-step" aria-hidden="true"></i>
  </wa-button>

</div>
