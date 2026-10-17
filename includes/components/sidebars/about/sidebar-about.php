<?php
/**
 * RaggieSoft Hub - About/Mission Profile Sidebar
 * 
 * ARCHITECTURAL OVERVIEW:
 * This sidebar serves as the navigation hub for the "About" (Mission Profile) section.
 * It provides links to top-level organizational entities, legal documentation, and status.
 * 
 * LOGIC & CONSTRAINTS:
 * - Uses `$_SERVER['REQUEST_URI']` to determine the active navigation state via `str_contains()`.
 *   This is a simplistic but effective way to handle active states without complex routing logic.
 * - Relies on standard Bootstrap 5 `.nav-pills` and `.nav-link` classes.
 * - Iconography utilizes FontAwesome `fa-duotone` and `fa-solid` classes. Ensure these remain
 *   consistent with the site-wide icon sets.
 * 
 * File Info: includes/components/sidebars/about/sidebar-about.php
 * The central directory for RaggieSoft "Mission Profile" pages.
 */

$currentUri = $_SERVER['REQUEST_URI'];
?>

<div class="text-center mb-4 pt-3">
    <a href="/about" class="text-decoration-none">
        <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
             alt="RaggieSoft" 
             class="mb-3"
             style="width: 60px; height: 60px; object-fit: contain;">
        <h5 class="fw-bold text-uppercase mb-0 text-body letter-spacing-1">Mission Profile</h5>
        <p class="small  mb-0">Central Intelligence</p>
    </a>
</div>

<hr class="my-3 ">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2  text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Network Entities</span>
</h6>

<div class="d-flex flex-column gap-1 mb-4">
    <wa-button appearance="<?= str_contains($currentUri, '/michael-ragsdale') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/michael-ragsdale') ? 'brand' : 'neutral' ?>" href="https://michaelpragsdale.com" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-user-visor"></i> The Architect
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, '/family') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/family') ? 'brand' : 'neutral' ?>" href="/about/family" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-people-group"></i> The Family
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, '/engine-room') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/engine-room') ? 'brand' : 'neutral' ?>" href="/about/engine-room" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-solid fa-industry"></i> Engine Room Records
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, '/stardust-engine') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/stardust-engine') ? 'brand' : 'neutral' ?>" href="/about/stardust-engine" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-rocket-launch"></i> The Stardust Engine
    </wa-button>
    
    <wa-button appearance="<?= str_contains($currentUri, '/aethel') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/aethel') ? 'brand' : 'neutral' ?>" href="/about/aethel" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-sword"></i> Aethel Saga
    </wa-button>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Governance</span>
</h6>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="<?= str_contains($currentUri, '/license') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/license') ? 'brand' : 'neutral' ?>" href="/raggiesoft-media/licensing" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-scale-balanced"></i> Licenses (MIT/CC)
    </wa-button>
    <wa-button appearance="<?= str_contains($currentUri, '/privacy') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/privacy') ? 'brand' : 'neutral' ?>" href="/about/privacy" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-user-shield"></i> Privacy Policy
    </wa-button>
    <wa-button appearance="<?= str_contains($currentUri, '/terms') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/terms') ? 'brand' : 'neutral' ?>" href="/about/terms" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-scroll-old"></i> Terms of Service
    </wa-button>
    <wa-button appearance="<?= str_contains($currentUri, '/ai-disclaimer') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, '/ai-disclaimer') ? 'brand' : 'neutral' ?>" href="/about/ai-disclaimer" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-robot"></i> AI Disclaimer
    </wa-button>
</div>

<hr class="my-4 ">

<div class="small text-center ">
    <p class="mb-1"><i class="fa-duotone fa-globe me-1"></i> <strong>RaggieSoft.com</strong></p>
    <p class="mb-0 text-">System Status: <span class="text-success">Stable</span></p>
</div>