<?php
/**
 * ============================================================================
 * Engine Room Records - Active Roster Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/sidebar-artists.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Primary sidebar navigation for the main Engine Room "Active Roster" (Artists)
 * directory. Features a `sticky-top` layout, system directory links, an
 * interactive Unit Status roster widget (`ERR-001` through `ERR-006`), and a
 * `<wa-callout>` security notice.
 * ============================================================================
 */
?>

<div class="sticky-top" style="top: 100px;">

    <!-- DIRECTORY NAVIGATION -->
    <wa-card class="border-secondary mb-4 shadow-sm">
        <div slot="header" class="fw-bold text-uppercase font-monospace small">
            <i class="fa-solid fa-folder-tree me-2 text-primary"></i> System Directory
        </div>
        <div class="d-flex flex-column gap-1 font-monospace small">
            <wa-button appearance="plain" href="/engine-room" class="w-100 text-start justify-content-start">
                <i slot="start" class="fa-duotone fa-house-building"></i> HQ Overview
            </wa-button>
            <wa-button appearance="filled-outlined" variant="brand" href="/engine-room/artists" class="w-100 text-start justify-content-start fw-bold">
                <i slot="start" class="fa-duotone fa-users"></i> Active Roster
            </wa-button>
            <wa-button appearance="plain" href="https://music.raggiesoft.com" target="_blank" class="w-100 text-start justify-content-start text-info">
                <i slot="start" class="fa-duotone fa-headphones"></i> The Listening Room
            </wa-button>
            <wa-button appearance="plain" href="/engine-room/history" class="w-100 text-start justify-content-start">
                <i slot="start" class="fa-duotone fa-clock-rotate-left"></i> Event Log
            </wa-button>
        </div>
    </wa-card>

    <!-- ACTIVE SLOTS WIDGET -->
    <wa-card class="border-secondary mb-4 shadow-sm">
        <div slot="header" class="fw-bold text-uppercase font-monospace small">
            <i class="fa-solid fa-server me-2 text-info"></i> Unit Status
        </div>
        <div class="font-monospace small">
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary">
                <a href="/engine-room/artists/stardust-engine" class="text-body-emphasis text-decoration-none" title="The Stardust Engine">ERR-001 // Stardust</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary">
                <a href="/engine-room/artists/fractured-prisms" class="text-body-emphasis text-decoration-none" title="Fractured Prisms">ERR-002 // Prisms</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary">
                <a href="/engine-room/artists/the-paper-wall" class="text-body-emphasis text-decoration-none" title="The Paper Wall">ERR-003 // Paper Wall</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary">
                <a href="/raggiesoft-books/aethel-saga" class="text-body-emphasis text-decoration-none" title="Mana Canvas">ERR-004 // Mana Canvas</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary">
                <a href="/engine-room/artists/the-arctic-symphony-project" class="text-body-emphasis text-decoration-none" title="The Arctic Symphony Project">ERR-005 // Arctic</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="/engine-room/artists/crimson-node" class="text-body-emphasis text-decoration-none" title="Crimson Node">ERR-006 // Crimson</a>
                <wa-badge variant="success" appearance="filled-outlined" pill>Online</wa-badge>
            </div>
        </div>
    </wa-card>

    <!-- SECURITY REMINDER -->
    <wa-callout variant="neutral" appearance="outlined" size="small" class="font-monospace" style="font-size: 0.75rem;">
        <i slot="icon" class="fa-solid fa-lock text-primary"></i>
        Access to proprietary audio files and narrative assets is restricted to authorized protocols. Full-fidelity masters and lyrics are served via The Listening Room.
    </wa-callout>

</div>