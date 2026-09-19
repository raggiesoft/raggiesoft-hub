<?php
// includes/components/headers/about/header-about.php
// Navigation for the /about/* directory (Mission Profile)

$uri = $_SERVER['REQUEST_URI'] ?? '/';

// Determine active section
$isGovernance = (str_contains($uri, '/license') || str_contains($uri, '/privacy') || str_contains($uri, '/terms') || str_contains($uri, '/ai-disclaimer'));
$isProfiles   = (!$isGovernance && $uri !== '/about'); // If not governance and not root about, assume it's a profile
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-house me-2"></i>Home
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo $isGovernance ? 'active' : ''; ? slot="trigger" appearance="plain">" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-scale-balanced me-2"></i>Governance
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/raggiesoft-media/licensing"><i class="fa-duotone fa-file-certificate me-2 text-primary"></i>Licenses (MIT/CC)</wa-dropdown-item>
      <wa-dropdown-item href="/about/privacy"><i class="fa-duotone fa-shield-check me-2 text-success"></i>Privacy Policy</wa-dropdown-item>
      <wa-dropdown-item href="/about/terms"><i class="fa-duotone fa-gavel me-2 text-warning"></i>Terms of Service</wa-dropdown-item>
      <wa-dropdown-item href="/about/ai-disclaimer"><i class="fa-duotone fa-robot me-2 text-info"></i>AI Disclaimer</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo $isProfiles ? 'active' : ''; ? slot="trigger" appearance="plain">" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-sitemap me-2"></i>Network Profiles
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase">The Core</div>
      <wa-dropdown-item href="/about/michael-ragsdale"><i class="fa-duotone fa-user-visor me-2"></i>The Architect (Portfolio)</wa-dropdown-item>
      <wa-dropdown-item href="/about/family"><i class="fa-duotone fa-people-group me-2"></i>The Family (DevOps)</wa-dropdown-item>
      
      <wa-divider></wa-divider>
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase">The Projects</div>
      <wa-dropdown-item href="/about/engine-room"><i class="fa-solid fa-industry me-2"></i>Engine Room Records</wa-dropdown-item>
      <wa-dropdown-item href="/about/stardust-engine"><i class="fa-duotone fa-rocket-launch me-2"></i>The Stardust Engine</wa-dropdown-item>
      <wa-dropdown-item href="/about/aethel"><i class="fa-duotone fa-sword me-2"></i>The Aethel Saga</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/contact">
        <i slot="start" class="fa-duotone fa-envelope me-2"></i>Contact
    </wa-button>
  

</div>