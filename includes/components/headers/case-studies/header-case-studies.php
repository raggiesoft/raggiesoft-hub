<?php
// includes/components/headers/case-studies/header-case-studies.php
// Header for the Case Studies / Operational Archives section

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isOverview = ($request_uri === '/case-studies');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </wa-button>
  

  
    <wa-button appearance="plain" href="/case-studies" class="active">
        <i slot="start" class="fa-duotone fa-file-magnifying-glass me-2" aria-hidden="true"></i>Case Studies
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button  href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</wa-dropdown-item>
      <wa-dropdown-item href="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/contact"><i class="fa-duotone fa-envelope-open me-2"></i>Contact</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/about">
        <i slot="start" class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>Mission
    </wa-button>
  

</div>