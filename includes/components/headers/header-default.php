<?php
// includes/components/headers/header-default.php
// UPDATED: Main RaggieSoft Network Header
// Serves as the global navigation for the root domain

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHome = ($request_uri === '/');
$isArchitect = (str_starts_with($request_uri, '/about/michael-ragsdale') || str_starts_with($request_uri, '/portfolio'));
$isCreative = (str_starts_with($request_uri, '/raggiesoft-books') || str_starts_with($request_uri, '/engine-room'));
$isAbout = ($request_uri === '/about');
$isContact = ($request_uri === '/contact');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/">
        <i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isArchitect ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</a></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</a></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/profile"><i class="fa-duotone fa-user-gear me-2"></i>Skills & Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/contact"><i class="fa-duotone fa-address-card me-2"></i>Contact Card</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isCreative ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-layer-group me-2" aria-hidden="true"></i>Creative Works
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><h6 class="dropdown-header text-uppercase">Multimedia</h6></li>
      <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine"><i class="fa-duotone fa-rocket-launch me-2 text-primary"></i>The Stardust Engine</a></li>
      
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase">Literature</h6></li>
      <li><a class="dropdown-item" href="/raggiesoft-books/aethel-saga"><i class="fa-duotone fa-sword me-2 text-warning"></i>The Silver Gauntlet of Aethel</a></li>
      <li><a class="dropdown-item" href="/raggiesoft-books/knox"><i class="fa-duotone fa-leaf me-2 text-success"></i>Project: KNOX</a></li>
      
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/engine-room"><i class="fa-solid fa-industry me-2 text-secondary"></i>Engine Room Records</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isAbout ? 'active' : ''; ?>" href="/about">
        <i class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>Mission Profile
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isContact ? 'active' : ''; ?>" href="/contact">
        <i class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
    </a>
  </li>

</ul>