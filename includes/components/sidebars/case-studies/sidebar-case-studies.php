<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/sidebars/case-studies/sidebar-case-studies.php
 * Role: Left-Hand Operational Archives Sidebar Navigation (`/case-studies/*`)
 * Domain: https://raggiesoft.com (Assigned via `data/routes/case-studies.json` `"common.sidebar"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the vertical sidebar menu across all `/case-studies/*` pages (both
 * inside the desktop `<aside>` and the mobile offcanvas drawer), highlighting
 * whichever report matches `$currentPath` (`===`) with DaisyUI's `.btn-primary`
 * active button style.
 *
 * INPUTS:
 * - `$_SERVER['REQUEST_URI']`: Normalized with `parse_url(..., PHP_URL_PATH)` and
 *   `rtrim(..., '/')` so `/case-studies/` and `/case-studies` compare identically.
 *
 * OUTPUT PRODUCED:
 * - Vertical navigation list for `/case-studies`, `cascade-protocol`,
 *   `shenandoah-valley`, `phys-100-report`, and a return button to `/`.
 * ============================================================================
 *
 * ARCHITECTURE & MAINTENANCE: Case Studies Sidebar Navigation (DaisyUI 5)
 * ============================================================================
 * File: raggiesoft.com/www/includes/components/sidebars/case-studies/sidebar-case-studies.php
 *
 * DESIGN INTENT:
 * - Provides navigation for the RaggieSoft Operational Archives ("Case Studies")
 *   including The Cascade Protocol, The Shenandoah Valley Gauntlet, and the
 *   PHYS 100 Technical Lab Report.
 * - Built with DaisyUI 5 (.btn, .divider) and Phosphor Duotone icons.
 * ============================================================================
 */
// Strip query strings and trailing slashes so exact `===` path comparisons never fail:
$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom text-body">Operational Archives</h5>
<div class="d-flex flex-column gap-1">
    <a
        href="/case-studies"
        class="btn btn-sm <?php echo ($currentPath === '/case-studies') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body'; ?> w-100 text-start justify-content-start"
        style="text-align: left;">
        <i class="ph-duotone ph-stack" aria-hidden="true"></i>Overview
    </a>
</div>

<?php /* Individual Case Study Links */ ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-body-secondary text-uppercase small fw-bold">
    <span>Incident &amp; Technical Reports</span>
</h6>
<div class="d-flex flex-column gap-1">
    <a
        href="/case-studies/cascade-protocol"
        class="btn btn-sm <?php echo ($currentPath === '/case-studies/cascade-protocol') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body'; ?> w-100 text-start justify-content-start"
        style="text-align: left;">
        <i class="ph-duotone ph-heartbeat" aria-hidden="true"></i>The Cascade Protocol
    </a>

    <a
        href="/case-studies/shenandoah-valley"
        class="btn btn-sm <?php echo ($currentPath === '/case-studies/shenandoah-valley') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body'; ?> w-100 text-start justify-content-start"
        style="text-align: left;">
        <i class="ph-duotone ph-path" aria-hidden="true"></i>Shenandoah Gauntlet
    </a>

    <a
        href="/case-studies/phys-100-report"
        class="btn btn-sm <?php echo ($currentPath === '/case-studies/phys-100-report') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body'; ?> w-100 text-start justify-content-start"
        style="text-align: left;">
        <i class="ph-duotone ph-atom" aria-hidden="true"></i>PHYS 100 Lab Report
    </a>
</div>

<hr class="divider my-4">

<?php /* Escape hatch back to the `raggiesoft.com` root Y-Junction */ ?>
<div class="d-flex flex-column gap-1">
    <a href="/" class="btn btn-ghost text-body btn-sm w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-arrow-left" aria-hidden="true"></i>Return to Main
    </a>
</div>
