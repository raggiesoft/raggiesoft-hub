<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Corporate Header Navigation (RaggieSoft Media)
 * ============================================================================
 * File: includes/components/headers/raggiesoft-media/header-corporate.php
 * Purpose: Global B2B navigation for the RaggieSoft Media holding entity.
 *
 * Strategy & Implementation:
 * - Evaluates `$request_uri` to drive declarative active state rendering.
 * - Uses strict Web Awesome v3.13.0 `<wa-button>` and `<wa-dropdown>` components
 *   without legacy `<wa-menu>` wrappers.
 * ============================================================================
 */

$request_uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/raggiesoft-media', PHP_URL_PATH) ?: '/raggiesoft-media';
$isHub        = ($request_uri === '/raggiesoft-media');
$isLicensing  = str_starts_with($request_uri, '/raggiesoft-media/licensing');
$isOpenSource = (str_starts_with($request_uri, '/raggiesoft-media/projects') || str_starts_with($request_uri, '/products'));
$isPortfolio  = str_starts_with($request_uri, '/about/michael-ragsdale');
?>

<div class="d-flex flex-wrap align-items-center gap-2 ms-auto text-uppercase fw-bold" style="letter-spacing: 0.5px;">

  <wa-button href="/raggiesoft-media" pill
    variant="<?php echo $isHub ? 'brand' : 'neutral'; ?>"
    appearance="<?php echo $isHub ? 'filled-outlined' : 'plain'; ?>">
    <i slot="start" class="fa-duotone fa-house-building"></i> Hub
  </wa-button>

  <wa-button href="/raggiesoft-media/licensing" pill
    variant="<?php echo $isLicensing ? 'warning' : 'neutral'; ?>"
    appearance="<?php echo $isLicensing ? 'filled-outlined' : 'plain'; ?>">
    <i slot="start" class="fa-duotone fa-file-signature"></i> Master Licensing
  </wa-button>

  <!-- Open Source & Enterprise Projects Dropdown -->
  <wa-dropdown placement="bottom-end">
    <wa-button slot="trigger" with-caret pill
      variant="<?php echo $isOpenSource ? 'brand' : 'neutral'; ?>"
      appearance="<?php echo $isOpenSource ? 'filled-outlined' : 'plain'; ?>">
      <i slot="start" class="fa-brands fa-osi"></i> Projects
    </wa-button>
    <wa-dropdown-item value="/raggiesoft-media/projects">
      <i slot="icon" class="fa-duotone fa-network-wired text-info"></i> Projects Hub
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-media/projects/stardust-engine-cms">
      <i slot="icon" class="fa-duotone fa-rocket-launch text-primary"></i> Stardust Engine CMS (Elara)
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-media/projects/storetrainer">
      <i slot="icon" class="fa-duotone fa-graduation-cap text-warning"></i> StoreTrainer LMS
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button href="https://michaelpragsdale.com" pill
    variant="<?php echo $isPortfolio ? 'success' : 'neutral'; ?>"
    appearance="<?php echo $isPortfolio ? 'filled-outlined' : 'plain'; ?>"
    class="me-3">
    <i slot="start" class="fa-duotone fa-user-tie <?php echo !$isPortfolio ? 'text-success' : ''; ?>"></i> Architect Portfolio
  </wa-button>

  <div class="d-none d-md-flex align-items-center ps-3" style="border-left: 1px solid var(--wa-color-neutral-border-quiet); opacity: 0.8;">
    <wa-button href="/raggiesoft-media/licensing/commercial" variant="brand" appearance="filled" pill>
      <i slot="start" class="fa-solid fa-briefcase"></i> Commercial Portal
    </wa-button>
  </div>

  <div class="ms-2 ps-2 border-start border-secondary">
    <wa-button appearance="plain" variant="neutral" href="/" class="text-body-secondary">
      <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> Exit to RaggieSoft
    </wa-button>
  </div>

</div>
