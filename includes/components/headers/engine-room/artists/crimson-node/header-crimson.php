<?php
// includes/components/headers/engine-room/artists/crimson-node/header-crimson.php
// Crimson Node Custom Header

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

$isHome = str_starts_with($request_uri, '/engine-room/artists/crimson-node/overview') || $request_uri === '/engine-room/artists/crimson-node';
$isDisco = str_starts_with($request_uri, '/engine-room/artists/crimson-node/discography');
// Fully scrubbed the incorrect /band/ route
$isPhalanx = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/family');
$isCcc = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/ccc');
$isNorthwood = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/northwood');
$isPiedmont = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/piedmont');
$isLore = str_starts_with($request_uri, '/raggiesoft-books/books/crimson-node');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/engine-room/artists/crimson-node">
        <i class="fa-duotone fa-house me-2" aria-hidden="true"></i>The Garage
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isDisco ? 'active' : ''; ?>" href="/engine-room/artists/crimson-node/discography">
        <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Discography
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" class="nav-link  <?php echo ($isPhalanx || $isCcc || $isNorthwood || $isPiedmont) ? 'active' : '';?>">
        <i class="fa-duotone fa-users me-2" aria-hidden="true"></i>Characters <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;" aria-hidden="true"></i>
    </wa-button>
    
      <wa-dropdown-item href="/engine-room/artists/crimson-node/characters/family">
            <i class="fa-duotone fa-shield-halved me-2"></i>The Phalanx
        </wa-dropdown-item>
      <wa-dropdown-item href="/engine-room/artists/crimson-node/characters/ccc">
            <i class="fa-duotone fa-graduation-cap me-2"></i>CCC Campus
        </wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/engine-room/artists/crimson-node/characters/northwood">
            <i class="fa-duotone fa-school me-2"></i>Northwood High
        </wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/engine-room/artists/crimson-node/characters/piedmont">
            <i class="fa-duotone fa-building-columns me-2"></i>The University of the Piedmont
        </wa-dropdown-item>
    </wa-dropdown>
</li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isLore ? 'active' : ''; ?>" href="/raggiesoft-books/books/crimson-node">
        <i class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore
    </a>
  </li>

  <!-- Link back to the parent label -->
  <li class="nav-item border-start border-secondary ms-2 ps-2 d-none d-md-block"></li>
  <li class="nav-item">
    <a class="nav-link" href="/engine-room" title="Return to Engine Room Records">
        <i class="fa-duotone fa-industry me-2" aria-hidden="true"></i>Label Hub
    </a>
  </li>

</ul>
