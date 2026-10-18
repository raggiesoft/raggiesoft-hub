<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Main Network Header
 * ============================================================================
 * File: includes/components/headers/header-default.php
 * Purpose: Serves as the primary global navigation mechanism across the root
 *          RaggieSoft Hub domain (raggiesoft.com).
 *
 * Strategy & Implementation:
 * - Utilizes early URL evaluation mapping the current `$request_uri` to specific
 *   active state flags (`$isHome`, `$isArchitect`, `$isCreative`, `$isMedia`,
 *   `$isCaseStudies`, `$isAbout`, `$isContact`).
 * - Built with strict Web Awesome v3.13.0 components (`<wa-button>`, `<wa-dropdown>`,
 *   `<wa-dropdown-item>`, `<wa-divider>`). Note that in Web Awesome v3.13.0,
 *   `<wa-dropdown-item>` and `<wa-divider>` are direct children of `<wa-dropdown>`.
 * - Uses `slot="start"` for leading icons on `<wa-button>` and `<wa-dropdown-item>`.
 * ============================================================================
 */

// 1. Determine Active States
$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

$isHome        = ($request_uri === '/');
$isArchitect   = (str_starts_with($request_uri, '/about/michael-ragsdale') || str_starts_with($request_uri, '/portfolio') || str_starts_with($request_uri, '/family'));
$isCreative    = (str_starts_with($request_uri, '/raggiesoft-books') || str_starts_with($request_uri, '/engine-room') || str_starts_with($request_uri, '/raggiesoft-games'));
$isMedia       = (str_starts_with($request_uri, '/raggiesoft-media') || str_starts_with($request_uri, '/products'));
$isCaseStudies = str_starts_with($request_uri, '/case-studies');
$isAbout       = str_starts_with($request_uri, '/about') && !$isArchitect;
$isContact     = str_starts_with($request_uri, '/contact');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/" class="<?php echo $isHome ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-house"></i> Home
  </wa-button>

  <!-- Architect Section Dropdown: Aggregates personal portfolio, DevOps family, and case studies -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo ($isArchitect || $isCaseStudies) ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-user-visor"></i> The Architect
    </wa-button>
    <wa-dropdown-item value="https://michaelpragsdale.com">
      <i slot="icon" class="fa-duotone fa-user-gear text-primary"></i> Executive Portfolio &amp; CV
    </wa-dropdown-item>
    <wa-dropdown-item value="https://michaelpragsdale.com/build-team">
      <i slot="icon" class="fa-duotone fa-people-group text-info"></i> The Build Team (DevOps Family)
    </wa-dropdown-item>
    <wa-dropdown-item value="/case-studies">
      <i slot="icon" class="fa-duotone fa-file-magnifying-glass text-warning"></i> Operational Case Studies
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/contact">
      <i slot="icon" class="fa-duotone fa-address-card"></i> Contact Card
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- Creative Works Dropdown: Links directly to Music, Literature, and Lore Subdomains -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isCreative ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-layer-group"></i> Creative Works
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Multimedia &amp; Audio</div>
    <wa-dropdown-item value="https://engineroom.raggiesoft.com/">
      <i slot="icon" class="fa-solid fa-industry text-danger"></i> Engine Room Records HQ
    </wa-dropdown-item>
    <wa-dropdown-item value="https://stardust.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-rocket-launch text-primary"></i> The Stardust Engine
    </wa-dropdown-item>
    <wa-dropdown-item value="https://music.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-turntable text-warning"></i> The Listening Room
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Literature &amp; Lore</div>
    <wa-dropdown-item value="https://books.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-landmark text-info"></i> Ocean View Archives (Book Reader)
    </wa-dropdown-item>
    <wa-dropdown-item value="https://lore.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-book-atlas text-warning"></i> RaggieSoft Lore Encyclopedia
    </wa-dropdown-item>
    <wa-dropdown-item value="https://nebulae.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-galaxy text-primary"></i> RaggieSoft Nebulae Observatory
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- RaggieSoft Media Dropdown: B2B Licensing and Open Source Architecture on corporate.raggiesoft.com -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isMedia ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i slot="start" class="fa-duotone fa-building"></i> RaggieSoft Media
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">B2B Operations</div>
    <wa-dropdown-item value="https://corporate.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-network-wired text-primary"></i> Corporate Hub
    </wa-dropdown-item>
    <wa-dropdown-item value="https://corporate.raggiesoft.com/licensing">
      <i slot="icon" class="fa-duotone fa-scale-balanced text-warning"></i> Master Licensing
    </wa-dropdown-item>
    <wa-dropdown-item value="https://corporate.raggiesoft.com/licensing/commercial">
      <i slot="icon" class="fa-solid fa-briefcase text-success"></i> Commercial Portal
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Infrastructure &amp; Software</div>
    <wa-dropdown-item value="https://corporate.raggiesoft.com/projects">
      <i slot="icon" class="fa-duotone fa-boxes-stacked text-info"></i> Open Source Projects Hub
    </wa-dropdown-item>
    <wa-dropdown-item value="https://corporate.raggiesoft.com/projects/stardust-engine-cms">
      <i slot="icon" class="fa-brands fa-osi text-primary"></i> Stardust Engine CMS (Elara)
    </wa-dropdown-item>
    <wa-dropdown-item value="https://storetrainer.raggiesoft.com/">
      <i slot="icon" class="fa-duotone fa-floppy-disk text-warning"></i> RaggieSoft StoreTrainer
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/about" class="<?php echo $isAbout ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-circle-info"></i> Mission Profile
  </wa-button>

  <wa-button appearance="plain" href="/contact" class="<?php echo $isContact ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-envelope-open"></i> Contact
  </wa-button>

</div>

