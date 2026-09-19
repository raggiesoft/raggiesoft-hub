<?php
// includes/components/headers/case-studies/header-case-studies.php
// Header for the Case Studies / Operational Archives section

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isOverview = ($request_uri === '/case-studies');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="/case-studies">
        <i class="fa-duotone fa-file-magnifying-glass me-2" aria-hidden="true"></i>Case Studies
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-buttonclass="nav-link " href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </wa-button>
    
      <wa-dropdown-item href="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</wa-dropdown-item>
      <wa-dropdown-item href="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/contact"><i class="fa-duotone fa-envelope-open me-2"></i>Contact</wa-dropdown-item>
    </wa-dropdown>
</li>

  <li class="nav-item">
    <a class="nav-link" href="/about">
        <i class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>Mission
    </a>
  </li>

</ul>