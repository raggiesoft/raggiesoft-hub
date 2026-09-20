<?php
// includes/components/headers/raggiesoft-media/header-corporate.php
// The global B2B navigation for the RaggieSoft Media holding entity.
// Updated: Web Awesome Components

$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-media';
$isHub = ($request_uri === '/raggiesoft-media');
$isLicensing = (str_starts_with($request_uri, '/raggiesoft-media/licensing'));
$isOpenSource = (str_starts_with($request_uri, '/raggiesoft-media/projects'));
$isPortfolio = (str_starts_with($request_uri, '/about/michael-ragsdale'));
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

  <wa-dropdown placement="bottom-end">
    <wa-button slot="trigger" with-caret pill
      variant="<?php echo $isOpenSource ? 'neutral' : 'neutral'; ?>" 
      appearance="<?php echo $isOpenSource ? 'filled-outlined' : 'plain'; ?>">
      <i slot="start" class="fa-brands fa-osi"></i> Open Source
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/raggiesoft-media/projects">
      <i slot="start" class="fa-duotone fa-network-wired text-info"></i> Projects Hub
    </wa-dropdown-item>
    <wa-dropdown-item href="/raggiesoft-media/projects/stardust-engine-cms">
      <i slot="start" class="fa-duotone fa-rocket-launch text-primary"></i> Stardust Engine CMS
    </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>

  <wa-button href="/about/michael-ragsdale" pill
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

  <div class="ms-2 ps-2 border-start border-secondary border-">
      <wa-button appearance="plain" variant="neutral" href="/" class="text-body-secondary">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> Exit to RaggieSoft
      </wa-button>
  </div>

</div>
