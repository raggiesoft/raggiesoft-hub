<?php
/**
 * ============================================================================
 * Engine Room - Corporate Intranet Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/engine-room/corporate/header-corporate.php
 * Context: The Corporate Intranet Navigation for O'Connell Family Trust,
 *          Aethelgard Holdings, Engine Room Records, and Operating Companies.
 *
 * LOGIC & CONSTRAINTS:
 * - Built using strict Web Awesome v3.13.0 components (`<wa-button>`,
 *   `<wa-dropdown>`, `<wa-dropdown-item>`, `<wa-divider>`).
 * - Links directly to all wired corporate, real estate, and fleet routes.
 * ============================================================================
 */
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/corporate">
    <i slot="start" class="fa-duotone fa-building-columns me-2"></i>Dashboard
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/corporate/structure">
    <i slot="start" class="fa-duotone fa-sitemap me-2"></i>Structure
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-briefcase me-2"></i>Entities
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Trust &amp; Operating Companies</div>
    <wa-dropdown-item value="/oconnell-trust">
      <i slot="icon" class="fa-solid fa-shield-halved text-primary"></i>O'Connell Family Trust
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room">
      <i slot="icon" class="fa-solid fa-record-vinyl text-danger"></i>Engine Room Records
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/strategic-assets">
      <i slot="icon" class="fa-solid fa-vault text-warning"></i>Stardust Strategic Assets
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/aethelgard">
      <i slot="icon" class="fa-solid fa-gavel text-secondary"></i>Aethelgard Holdings
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/pacific-rim">
      <i slot="icon" class="fa-solid fa-city text-primary"></i>Pacific Rim Properties
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/stardust-blacksburg">
      <i slot="icon" class="fa-solid fa-building-user text-info"></i>Stardust Blacksburg (Ironwood)
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Philanthropy</div>
    <wa-dropdown-item value="/engine-room/corporate/jessica-miller-center">
      <i slot="icon" class="fa-solid fa-hand-holding-heart text-success"></i>Jessica Miller Center
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-server me-2"></i>Ops
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-info">Internal Operations</div>
    <wa-dropdown-item value="/engine-room/corporate/systems">
      <i slot="icon" class="fa-solid fa-terminal"></i>Systems (Justin)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/fleet">
      <i slot="icon" class="fa-solid fa-satellite-dish"></i>Fleet Command (Telemetry)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/strategic-assets/the-iron-horse">
      <i slot="icon" class="fa-solid fa-bus text-warning"></i>The Iron Horse &amp; Fleet Archive
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room" class="text-body-secondary">
    <i slot="start" class="fa-solid fa-arrow-right-from-bracket me-2"></i>Exit to Public Site
  </wa-button>

</div>