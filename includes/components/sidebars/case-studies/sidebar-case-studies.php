<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE: Case Studies Sidebar Navigation
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/case-studies/sidebar-case-studies.php
 *
 * DESIGN INTENT:
 * - Provides navigation for the RaggieSoft Operational Archives ("Case Studies")
 *   including The Cascade Protocol, The Shenandoah Valley Gauntlet, and the
 *   PHYS 100 Technical Lab Report.
 * - Built strictly with Web Awesome v3.13.0 (<wa-button>, <wa-divider>) per
 *   llms-webawesome.txt.
 * ============================================================================
 */
$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom">Operational Archives</h5>
<div class="d-flex flex-column gap-1">
    <wa-button
        appearance="<?php echo ($currentPath === '/case-studies') ? 'filled' : 'plain'; ?>"
        variant="<?php echo ($currentPath === '/case-studies') ? 'brand' : 'neutral'; ?>"
        size="small"
        href="/case-studies"
        class="w-100 text-start justify-content-start"
        style="text-align: left;">
        <i slot="start" class="fa-duotone fa-layer-group" aria-hidden="true"></i>Overview
    </wa-button>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-body-secondary text-uppercase small fw-bold">
    <span>Incident &amp; Technical Reports</span>
</h6>
<div class="d-flex flex-column gap-1">
    <wa-button
        appearance="<?php echo ($currentPath === '/case-studies/cascade-protocol') ? 'filled' : 'plain'; ?>"
        variant="<?php echo ($currentPath === '/case-studies/cascade-protocol') ? 'brand' : 'neutral'; ?>"
        size="small"
        href="/case-studies/cascade-protocol"
        class="w-100 text-start justify-content-start"
        style="text-align: left;">
        <i slot="start" class="fa-duotone fa-heart-pulse" aria-hidden="true"></i>The Cascade Protocol
    </wa-button>

    <wa-button
        appearance="<?php echo ($currentPath === '/case-studies/shenandoah-valley') ? 'filled' : 'plain'; ?>"
        variant="<?php echo ($currentPath === '/case-studies/shenandoah-valley') ? 'brand' : 'neutral'; ?>"
        size="small"
        href="/case-studies/shenandoah-valley"
        class="w-100 text-start justify-content-start"
        style="text-align: left;">
        <i slot="start" class="fa-duotone fa-route" aria-hidden="true"></i>Shenandoah Gauntlet
    </wa-button>

    <wa-button
        appearance="<?php echo ($currentPath === '/case-studies/phys-100-report') ? 'filled' : 'plain'; ?>"
        variant="<?php echo ($currentPath === '/case-studies/phys-100-report') ? 'brand' : 'neutral'; ?>"
        size="small"
        href="/case-studies/phys-100-report"
        class="w-100 text-start justify-content-start"
        style="text-align: left;">
        <i slot="start" class="fa-duotone fa-atom" aria-hidden="true"></i>PHYS 100 Lab Report
    </wa-button>
</div>

<wa-divider class="my-4"></wa-divider>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-arrow-left" aria-hidden="true"></i>Return to Main
    </wa-button>
</div>