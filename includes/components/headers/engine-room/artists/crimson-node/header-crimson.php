<?php
// includes/components/headers/engine-room/artists/crimson-node/header-crimson.php
// Crimson Node Custom Header

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHome = str_starts_with($request_uri, '/engine-room/artists/crimson-node/overview') || $request_uri === '/engine-room/artists/crimson-node';
$isDisco = str_starts_with($request_uri, '/engine-room/artists/crimson-node/discography');
$isPhalanx = str_starts_with($request_uri, '/engine-room/artists/crimson-node/family') || str_starts_with($request_uri, '/engine-room/artists/crimson-node/band');
$isLore = str_starts_with($request_uri, '/engine-room/artists/crimson-node/story');
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
    <a class="nav-link <?php echo $isPhalanx ? 'active' : ''; ?>" href="/engine-room/artists/crimson-node/family">
        <i class="fa-duotone fa-users me-2" aria-hidden="true"></i>The Phalanx
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isLore ? 'active' : ''; ?>" href="/engine-room/artists/crimson-node/story">
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