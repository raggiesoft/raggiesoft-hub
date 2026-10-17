<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Friction Lore Arc Sidebar
 * ============================================================================
 * ROLE: The specific chapter navigation for "The Friction Scandal" story arc.
 *       Allows users to step through individual narrative documents (e.g., 
 *       demos, legal depositions) while highlighting the active page.
 * 
 * INTEGRATION: Uses PHP string evaluation (`str_contains` on `$currentUri`)
 *              to dynamically apply active CSS states (`active fw-bold text-danger`).
 * 
 * MAINTENANCE: The "Legal Outcome" box at the bottom is a critical piece of 
 *              environmental storytelling. Do not remove it. If adding new 
 *              parts to the Friction arc, ensure the URI checks are robust enough
 *              to prevent false-positive active states.
 * ============================================================================
 */
// includes/components/sidebars/engine-room/artists/stardust-engine/story/sidebar-friction.php
// Sidebar for the Friction Lore Arc

$currentUri = $_SERVER['REQUEST_URI'] ?? '';
?>

<!-- [LAYOUT] Chapter Navigation: Dynamic links that highlight based on the current URI -->
<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1 text-danger">
    <i class="fa-duotone fa-triangle-exclamation me-2" aria-hidden="true"></i>Case File: 1992
</h5>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="<?= ($currentUri === '/engine-room/artists/stardust-engine/story/friction') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($currentUri === '/engine-room/artists/stardust-engine/story/friction') ? 'danger' : 'neutral' ?>" href="/engine-room/artists/stardust-engine/story/friction" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-book-open"></i> Overview
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, 'the-lost-title-track') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, 'the-lost-title-track') ? 'danger' : 'neutral' ?>" href="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-file-audio"></i> The Lost Title Track
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, 'atmosphere') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, 'atmosphere') ? 'danger' : 'neutral' ?>" href="/engine-room/artists/stardust-engine/story/friction/atmosphere" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-cloud-showers-heavy"></i> The Atmosphere Demo
    </wa-button>

    <wa-button appearance="<?= str_contains($currentUri, 'kevin-deposition') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($currentUri, 'kevin-deposition') ? 'danger' : 'neutral' ?>" href="/engine-room/artists/stardust-engine/story/friction/kevin-deposition" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-scale-balanced"></i> The Mitchell Deposition
    </wa-button>
</div>

<!-- [UI COMPONENT] Contextual Anchors: Links to preceding and succeeding albums/events -->
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
    <span>Related Context</span>
</h6>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-compact-disc"></i> 1989: Neon Hearts
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-car-burst"></i> The Crash of 1990
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-compact-disc"></i> 1995: Warehouse Tapes
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/2011-starfield-calibration" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-satellite"></i> 2011: Starfield Calibration
    </wa-button>
</div>

<!-- [UI COMPONENT] Environmental Storytelling: Static legal outcome summary -->
<wa-callout variant="danger" appearance="accent" size="small" class="mt-4">
    <i slot="icon" class="fa-solid fa-gavel"></i>
    <strong class="d-block text-uppercase mb-1">Legal Outcome</strong>
    Contract voided with prejudice. Apex Records surrendered all master tapes to avoid prosecution for Solicitation of a Felony.
</wa-callout>

<div class="mt-auto pt-4 border-top">
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/history" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-arrow-left"></i> Back to Full History
    </wa-button>
</div>