<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Main Network Header (DaisyUI 5 + Phosphor)
 * ============================================================================
 * File: includes/components/headers/header-default.php
 * Purpose: Serves as the primary global navigation mechanism across the root
 *          RaggieSoft Hub domain (raggiesoft.com).
 *
 * Strategy & Implementation:
 * - Utilizes early URL evaluation mapping the current `$request_uri` to specific
 *   active state flags (`$isHome`, `$isArchitect`, `$isCreative`, `$isMedia`,
 *   `$isCaseStudies`, `$isAbout`, `$isContact`).
 * - Built with semantic DaisyUI 5 components (`<details class="dropdown">`,
 *   `<ul class="dropdown-content menu">`, `.btn`, `.btn-ghost`) and self-hosted
 *   Phosphor Duotone icons (`ph-duotone`).
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

  <a href="/" class="btn btn-ghost <?php echo $isHome ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i class="ph-duotone ph-house" aria-hidden="true"></i> Home
  </a>

  <!-- Architect Section Dropdown: Aggregates personal portfolio, DevOps family, and case studies -->
  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo ($isArchitect || $isCaseStudies) ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-user-focus" aria-hidden="true"></i> The Architect
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-72 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="https://michaelpragsdale.com">
          <i class="ph-duotone ph-user-gear text-primary" aria-hidden="true"></i> Executive Portfolio &amp; CV
        </a>
      </li>
      <li>
        <a href="https://michaelpragsdale.com/build-team">
          <i class="ph-duotone ph-users-three text-info" aria-hidden="true"></i> The Build Team (DevOps Family)
        </a>
      </li>
      <li>
        <a href="/case-studies">
          <i class="ph-duotone ph-file-magnifying-glass text-warning" aria-hidden="true"></i> Operational Case Studies
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li>
        <a href="/contact">
          <i class="ph-duotone ph-identification-card" aria-hidden="true"></i> Contact Card
        </a>
      </li>
    </ul>
  </details>

  <!-- Creative Works Dropdown: Links directly to Music, Literature, and Lore Subdomains -->
  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isCreative ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-stack" aria-hidden="true"></i> Creative Works
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-80 p-2 shadow-lg border border-base-300 mt-1">
      <li class="menu-title text-uppercase small fw-bold opacity-75">Multimedia &amp; Audio</li>
      <li>
        <a href="https://engineroom.raggiesoft.com/">
          <i class="ph-duotone ph-factory text-danger" aria-hidden="true"></i> Engine Room Records HQ
        </a>
      </li>
      <li>
        <a href="https://engineroom.raggiesoft.com/isrc">
          <i class="ph-duotone ph-barcode text-success" aria-hidden="true"></i> Official ISRC Registry (QTAHP)
        </a>
      </li>
      <li>
        <a href="https://stardust.raggiesoft.com/">
          <i class="ph-duotone ph-rocket-launch text-primary" aria-hidden="true"></i> The Stardust Engine
        </a>
      </li>
      <li>
        <a href="https://music.raggiesoft.com/">
          <i class="ph-duotone ph-vinyl-record text-warning" aria-hidden="true"></i> The Listening Room
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li class="menu-title text-uppercase small fw-bold opacity-75">Literature &amp; Lore</li>
      <li>
        <a href="https://books.raggiesoft.com/">
          <i class="ph-duotone ph-bank text-info" aria-hidden="true"></i> Ocean View Archives (Book Reader)
        </a>
      </li>
      <li>
        <a href="https://lore.raggiesoft.com/">
          <i class="ph-duotone ph-globe-hemisphere-west text-warning" aria-hidden="true"></i> RaggieSoft Lore Encyclopedia
        </a>
      </li>
      <li>
        <a href="https://nebulae.raggiesoft.com/">
          <i class="ph-duotone ph-planet text-primary" aria-hidden="true"></i> RaggieSoft Nebulae Observatory
        </a>
      </li>
    </ul>
  </details>

  <!-- RaggieSoft Media Dropdown: B2B Licensing and Open Source Architecture on corporate.raggiesoft.com -->
  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isMedia ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-building" aria-hidden="true"></i> RaggieSoft Media
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-72 p-2 shadow-lg border border-base-300 mt-1">
      <li class="menu-title text-uppercase small fw-bold opacity-75">B2B Operations</li>
      <li>
        <a href="https://corporate.raggiesoft.com/">
          <i class="ph-duotone ph-graph text-primary" aria-hidden="true"></i> Corporate Hub
        </a>
      </li>
      <li>
        <a href="https://corporate.raggiesoft.com/licensing">
          <i class="ph-duotone ph-scales text-warning" aria-hidden="true"></i> Master Licensing
        </a>
      </li>
      <li>
        <a href="https://corporate.raggiesoft.com/licensing/commercial">
          <i class="ph-duotone ph-briefcase text-success" aria-hidden="true"></i> Commercial Portal
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li class="menu-title text-uppercase small fw-bold opacity-75">Infrastructure &amp; Software</li>
      <li>
        <a href="https://corporate.raggiesoft.com/projects">
          <i class="ph-duotone ph-stack text-info" aria-hidden="true"></i> Open Source Projects Hub
        </a>
      </li>
      <li>
        <a href="https://corporate.raggiesoft.com/projects/stardust-engine-cms">
          <i class="ph-duotone ph-globe text-primary" aria-hidden="true"></i> Stardust Engine CMS (Elara)
        </a>
      </li>
      <li>
        <a href="https://storetrainer.raggiesoft.com/">
          <i class="ph-duotone ph-floppy-disk text-warning" aria-hidden="true"></i> RaggieSoft StoreTrainer
        </a>
      </li>
    </ul>
  </details>

  <a href="/about" class="btn btn-ghost <?php echo $isAbout ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i class="ph-duotone ph-info" aria-hidden="true"></i> Mission Profile
  </a>

  <a href="/contact" class="btn btn-ghost <?php echo $isContact ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i class="ph-duotone ph-envelope-open" aria-hidden="true"></i> Contact
  </a>

</div>
