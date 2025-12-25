<?php
// includes/components/headers/about/header-about.php
// Navigation for the /about/* directory (Mission Profile)

$uri = $_SERVER['REQUEST_URI'] ?? '/';

// Determine active section
$isGovernance = (str_contains($uri, '/license') || str_contains($uri, '/privacy') || str_contains($uri, '/terms'));
$isProfiles   = (!$isGovernance && $uri !== '/about'); // If not governance and not root about, assume it's a profile
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-house me-2"></i>Home
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isGovernance ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-scale-balanced me-2"></i>Governance
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
      <li><a class="dropdown-item" href="/about/license"><i class="fa-duotone fa-file-certificate me-2 text-primary"></i>Licenses (MIT/CC)</a></li>
      <li><a class="dropdown-item" href="/about/privacy"><i class="fa-duotone fa-shield-check me-2 text-success"></i>Privacy Policy</a></li>
      <li><a class="dropdown-item" href="/about/terms"><i class="fa-duotone fa-gavel me-2 text-warning"></i>Terms of Service</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isProfiles ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-sitemap me-2"></i>Network Profiles
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
      <li><h6 class="dropdown-header text-uppercase">The Core</h6></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale"><i class="fa-duotone fa-user-visor me-2"></i>The Architect (Portfolio)</a></li>
      <li><a class="dropdown-item" href="/about/family"><i class="fa-duotone fa-people-group me-2"></i>The Family (DevOps)</a></li>
      
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase">The Projects</h6></li>
      <li><a class="dropdown-item" href="/about/engine-room"><i class="fa-solid fa-industry me-2"></i>Engine Room Records</a></li>
      <li><a class="dropdown-item" href="/about/stardust-engine"><i class="fa-duotone fa-rocket-launch me-2"></i>The Stardust Engine</a></li>
      <li><a class="dropdown-item" href="/about/aethel"><i class="fa-duotone fa-sword me-2"></i>The Aethel Saga</a></li>
    </ul>
  </li>

  <li class="nav-item ms-2">
    <a class="nav-link" href="/contact">
        <i class="fa-duotone fa-envelope me-2"></i>Contact
    </a>
  </li>

</ul>