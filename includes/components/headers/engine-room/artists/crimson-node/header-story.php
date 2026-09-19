<?php
// includes/components/headers/engine-room/artists/crimson-node/header-story.php
// Custom Header for The Archives (Story Mode)

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isArchives = $request_uri === '/raggiesoft-books/books/crimson-node';

// Logic to determine Previous and Next based on current URL
// (This can be expanded as more chapters are added)
$prevLink = "#";
$prevDisabled = "disabled";
$nextLink = "#";
$nextDisabled = "disabled";

if ($request_uri === '/engine-room/artists/crimson-node/story/chapter-01') {
    $prevDisabled = "disabled";
    $nextLink = "/engine-room/artists/crimson-node/story/chapter-02";
    $nextDisabled = "";
} elseif ($request_uri === '/engine-room/artists/crimson-node/story/chapter-02') {
    $prevLink = "/engine-room/artists/crimson-node/story/chapter-01";
    $prevDisabled = "";
    $nextLink = "/engine-room/artists/crimson-node/story/chapter-03";
    $nextDisabled = "";
} elseif ($request_uri === '/engine-room/artists/crimson-node/story/chapter-03') {
    $prevLink = "/engine-room/artists/crimson-node/story/chapter-02";
    $prevDisabled = "";
    $nextDisabled = "disabled";
}
?>

<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center py-3 py-md-0 gap-2 ms-auto">
  
  
    <wa-button appearance="plain" href="/engine-room/artists/crimson-node">
        <i slot="start" class="fa-duotone fa-house-chimney-blank me-1" aria-hidden="true"></i> Node
    </wa-button>
  

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;">

  <!-- Archives Up -->
  
    <wa-button appearance="plain" href="/raggiesoft-books/books/crimson-node" class="<?= $isArchives ? 'active' : '' ?>">
        <i slot="start" class="fa-duotone fa-book-atlas me-1" aria-hidden="true"></i> Archives
    </wa-button>
  

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;">

  <!-- Playback Controls -->
  
    <wa-button appearance="plain" href="<?= $prevLink ?>" class="<?= $prevDisabled ?>">">
        <i slot="start" class="fa-solid fa-backward-step" aria-hidden="true"></i>
    </wa-button>
  
  
    <wa-button appearance="plain" href="<?= $nextLink ?>" class="<?= $nextDisabled ?>">">
        <i slot="start" class="fa-solid fa-forward-step" aria-hidden="true"></i>
    </wa-button>
  

</div>
