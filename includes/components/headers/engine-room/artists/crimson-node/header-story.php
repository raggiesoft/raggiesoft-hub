<?php
// includes/components/headers/engine-room/artists/crimson-node/header-story.php
// Custom Header for The Archives (Story Mode)

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isArchives = $request_uri === '/engine-room/artists/crimson-node/story';

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

<ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
  
  <li class="nav-item me-2">
    <a class="nav-link" href="/engine-room/artists/crimson-node" title="Return to Crimson Node">
        <i class="fa-duotone fa-house-chimney-blank me-1" aria-hidden="true"></i> Node
    </a>
  </li>

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;"></li>

  <!-- Archives Up -->
  <li class="nav-item">
    <a class="nav-link <?= $isArchives ? 'active' : '' ?>" href="/engine-room/artists/crimson-node/story" title="The Archives Index">
        <i class="fa-duotone fa-book-atlas me-1" aria-hidden="true"></i> Archives
    </a>
  </li>

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block" style="height: 24px;"></li>

  <!-- Playback Controls -->
  <li class="nav-item">
    <a class="nav-link <?= $prevDisabled ?>" href="<?= $prevLink ?>" aria-disabled="<?= $prevDisabled === 'disabled' ? 'true' : 'false' ?>">
        <i class="fa-solid fa-backward-step" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $nextDisabled ?>" href="<?= $nextLink ?>" aria-disabled="<?= $nextDisabled === 'disabled' ? 'true' : 'false' ?>">
        <i class="fa-solid fa-forward-step" aria-hidden="true"></i>
    </a>
  </li>

</ul>
