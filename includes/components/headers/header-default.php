<?php
// includes/components/headers/header-default.php
// UPDATED: Main RaggieSoft Network Header (Web Awesome Edition)
// Serves as the global navigation for the root domain

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHome = ($request_uri === '/');
$isArchitect = (str_starts_with($request_uri, '/about/michael-ragsdale') || str_starts_with($request_uri, '/portfolio'));
$isCreative = (str_starts_with($request_uri, '/raggiesoft-books') || str_starts_with($request_uri, '/engine-room'));
$isMedia = str_starts_with($request_uri, '/raggiesoft-media');
$isAbout = ($request_uri === '/about');
$isContact = ($request_uri === '/contact');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  <wa-button appearance="plain" href="/" class="<?php echo $isHome ? 'text-primary' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-house"></i> Home
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isArchitect ? 'text-primary' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-user-visor"></i> The Architect
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item value="/about/michael-ragsdale">
      <i slot="start" class="fa-duotone fa-id-card"></i> Overview
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/michael-ragsdale/resume">
      <i slot="start" class="fa-duotone fa-file-user"></i> Resume / CV
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/michael-ragsdale/profile">
      <i slot="start" class="fa-duotone fa-user-gear"></i> Skills & Profile
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/about/michael-ragsdale/contact">
      <i slot="start" class="fa-duotone fa-address-card"></i> Contact Card
    </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isCreative ? 'text-primary' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-layer-group"></i> Creative Works
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase fw-bold ">Multimedia</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine">
      <i slot="start" class="fa-duotone fa-rocket-launch text-primary"></i> The Stardust Engine
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/radio">
      <i slot="start" class="fa-duotone fa-signal-stream text-warning"></i> Engine Room Radio
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold ">Literature</div>
    <wa-dropdown-item value="/raggiesoft-books/aethel-saga">
      <i slot="start" class="fa-duotone fa-sword text-warning"></i> The Silver Gauntlet of Aethel
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-books/knox">
      <i slot="start" class="fa-duotone fa-leaf text-success"></i> Project: KNOX
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/engine-room">
      <i slot="start" class="fa-solid fa-industry "></i> Engine Room Records
    </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isMedia ? 'text-primary' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-building"></i> RaggieSoft Media
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase fw-bold ">B2B Operations</div>
    <wa-dropdown-item value="/raggiesoft-media">
      <i slot="start" class="fa-duotone fa-network-wired text-primary"></i> Corporate Hub
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-media/licensing">
      <i slot="start" class="fa-duotone fa-scale-balanced text-warning"></i> Master Licensing
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-media/licensing/commercial">
      <i slot="start" class="fa-solid fa-briefcase "></i> Commercial Portal
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold ">Infrastructure</div>
    <wa-dropdown-item value="/raggiesoft-media/projects/elara">
      <i slot="start" class="fa-brands fa-osi text-info"></i> Open Source (Elara)
    </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>

  <wa-button appearance="plain" href="/about" class="<?php echo $isAbout ? 'text-primary' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-circle-info"></i> Mission Profile
  </wa-button>

  <wa-button appearance="plain" href="/contact" class="<?php echo $isContact ? 'text-primary' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-envelope-open"></i> Contact
  </wa-button>

</div>
