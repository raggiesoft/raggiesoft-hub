<?php
/**
 * ============================================================================
 * Engine Room - History Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/engine-room/sidebar-engine-room-history.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Provides navigation for the "Historical Archives" section of Engine Room
 * Records using Web Awesome v3.13.0 `<wa-card>`, `<wa-button>`, and `<wa-callout>`.
 * ============================================================================
 */
?>

<div class="sticky-top" style="top: 100px;">

    <!-- DIRECTORY NAVIGATION -->
    <div class="mb-4 w-100">
        <wa-card class="border-secondary shadow-sm w-100">
            <div slot="header" class="fw-bold text-uppercase font-monospace small">
                <i class="fa-solid fa-folder-tree me-2 text-danger"></i> Archive Directory
            </div>
            <div class="d-flex flex-column gap-1 font-monospace small">
                <wa-button appearance="plain" href="/engine-room" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-house-building" aria-hidden="true"></i> HQ Overview
                </wa-button>
                <wa-button appearance="plain" href="/engine-room/about" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-industry" aria-hidden="true"></i> About The Fortress
                </wa-button>
                <wa-button appearance="filled-outlined" variant="danger" href="/engine-room/history" class="w-100 text-start justify-content-start fw-bold">
                    <i slot="start" class="fa-duotone fa-list-timeline"></i> Full Timeline
                </wa-button>
            </div>
        </wa-card>
    </div>

    <!-- DECLASSIFIED CASE FILES -->
    <div class="mb-4 w-100">
        <wa-card class="border-secondary shadow-sm w-100">
            <div slot="header" class="fw-bold text-uppercase font-monospace small">
                <i class="fa-solid fa-folder-open me-2 text-warning"></i> Case Files
            </div>
            <div class="d-flex flex-column gap-1 font-monospace small">
                <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-car-crash text-warning" aria-hidden="true"></i> 1990: The Crash
                </wa-button>
                <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/friction" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-fire text-danger"></i> 1992: Friction
                </wa-button>
                <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-satellite text-info"></i> 2011: Tidal Lock Sound&trade;
                </wa-button>
                <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-file-signature text-primary"></i> 2015: Delaware Migration
                </wa-button>
                <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-gavel text-success"></i> 2018: The Refusal
                </wa-button>
            </div>
        </wa-card>
    </div>

    <!-- SECURITY REMINDER -->
    <div class="w-100">
        <wa-callout variant="danger" appearance="outlined" size="small" class="font-monospace shadow-sm" style="font-size: 0.75rem;">
            <i slot="icon" class="fa-solid fa-shield-halved text-danger" aria-hidden="true"></i>
            Historical records and case files are maintained for internal reference and DSP compliance. Access to these documents is logged.
        </wa-callout>
    </div>

</div>
