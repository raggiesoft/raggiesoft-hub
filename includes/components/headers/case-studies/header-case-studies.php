<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Case Studies Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/case-studies/header-case-studies.php
 * Header for the Case Studies / Operational Archives section.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$isOverview  = str_starts_with($request_uri, '/case-studies');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isOverview ? 'active text-primary fw-bold' : ''; ?>">
      <i slot="start" class="fa-duotone fa-file-magnifying-glass me-2" aria-hidden="true"></i>Case Studies
    </wa-button>
    <wa-dropdown-item value="/case-studies">
      <i slot="icon" class="fa-duotone fa-folder-open text-primary"></i>Operational Archives Overview
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/case-studies/cascade-protocol">
      <i slot="icon" class="fa-duotone fa-shield-halved text-danger"></i>CS-001: The Cascade Protocol
    </wa-dropdown-item>
    <wa-dropdown-item value="/case-studies/shenandoah-valley">
      <i slot="icon" class="fa-duotone fa-truck-fast text-warning"></i>CS-002: The Shenandoah Gauntlet
    </wa-dropdown-item>
    <wa-dropdown-item value="/case-studies/phys-100-report">
      <i slot="icon" class="fa-duotone fa-atom text-info"></i>CS-003: PHYS-100 Acoustic Telemetry
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </wa-button>
    <wa-dropdown-item value="https://michaelpragsdale.com">
      <i slot="icon" class="fa-duotone fa-id-card"></i>Overview
    </wa-dropdown-item>
    <wa-dropdown-item value="https://michaelpragsdale.com/#career">
      <i slot="icon" class="fa-duotone fa-file-user"></i>Resume / CV
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/contact">
      <i slot="icon" class="fa-duotone fa-envelope-open"></i>Contact
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/about">
    <i slot="start" class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>Mission
  </wa-button>

</div>