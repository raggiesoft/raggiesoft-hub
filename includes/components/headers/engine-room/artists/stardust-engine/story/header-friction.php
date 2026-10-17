<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Friction Catastrophe Story Header
 * ============================================================================
 * File: includes/components/headers/engine-room/artists/stardust-engine/story/header-friction.php
 * Purpose: Dedicated navigation for the 1992 "Friction" lore event, utilizing a
 *          "Cold War" classified-evidence aesthetic.
 *
 * Strategy & Implementation:
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>` without legacy `<wa-menu>`.
 * - Links to all 3 Friction evidence exhibits (`the-lost-title-track`, `atmosphere`,
 *   and `kevin-deposition`) plus the canceled album and 2011 redemption.
 * ============================================================================
 */

$uri        = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$isOverview = ($uri === '/engine-room/artists/stardust-engine/story/friction');
$isEvidence = (
    str_contains($uri, '/the-lost-title-track') ||
    str_contains($uri, '/atmosphere') ||
    str_contains($uri, '/kevin-deposition')
);
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-house me-2"></i>Home
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/friction" class="<?php echo $isOverview ? 'active fw-bold text-danger' : ''; ?>">
    <i slot="start" class="fa-duotone fa-file-contract me-2"></i>Overview
  </wa-button>

  <!-- Evidence Locker Dropdown -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isEvidence ? 'active fw-bold text-danger' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-folder-magnifying-glass me-2"></i>Evidence Locker
    </wa-button>
    <div class="px-3 py-2 small text-uppercase text-danger fw-bold">Restricted Assets (1992)</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track">
      <i slot="icon" class="fa-duotone fa-ban text-danger"></i>The Lost Title Track ("Friction")
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/friction/atmosphere">
      <i slot="icon" class="fa-duotone fa-cloud-showers-heavy text-warning"></i>The "Atmosphere" Rough Demo
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/friction/kevin-deposition">
      <i slot="icon" class="fa-duotone fa-scale-balanced text-info"></i>The Kevin Mitchell Deposition
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Related Archives</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/discography/1992-friction">
      <i slot="icon" class="fa-duotone fa-compact-disc"></i>1992: Friction (The Canceled Album)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/discography/2011-starfield-calibration">
      <i slot="icon" class="fa-duotone fa-satellite text-info"></i>2011: Starfield Calibration (Atmosphere Finalized)
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/history">
    <i slot="start" class="fa-duotone fa-arrow-turn-up me-2"></i><span class="small">Return to Timeline</span>
  </wa-button>

</div>