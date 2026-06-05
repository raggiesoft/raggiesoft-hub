<?php
// includes/components/sidebars/engine-room/artists/sidebar-artists.php
// The Navigation Panel for the Artist Directory
?>

<div class="sticky-top" style="top: 100px;">
    
    <!-- DIRECTORY NAVIGATION -->
    <div class="card rounded-0 border-secondary mb-4 bg-body-tertiary shadow-sm">
        <div class="card-header bg-dark text-white fw-bold text-uppercase border-bottom border-primary font-monospace small">
            <i class="fa-solid fa-folder-tree me-2"></i>System Directory
        </div>
        <div class="list-group list-group-flush font-monospace small">
            <a href="/engine-room" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-house-building me-2 w-20px text-center"></i>HQ Overview
            </a>
            <a href="/engine-room/artists" class="list-group-item list-group-item-action bg-transparent text-primary fw-bold">
                <i class="fa-duotone fa-users me-2 w-20px text-center"></i>Active Roster
            </a>
            <a href="/engine-room/history" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-clock-rotate-left me-2 w-20px text-center"></i>Event Log
            </a>
        </div>
    </div>

    <!-- ACTIVE SLOTS WIDGET -->
    <div class="card rounded-0 border-secondary mb-4 bg-transparent shadow-sm">
        <div class="card-header bg-transparent text-body-emphasis fw-bold text-uppercase border-bottom border-secondary font-monospace small">
            <i class="fa-solid fa-server me-2"></i>Unit Status
        </div>
        <div class="card-body p-3 font-monospace small">
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary border-opacity-25">
                <span class="text-body-emphasis">ERR-001</span>
                <span class="text-success"><i class="fa-solid fa-circle-check me-1 small"></i> Online</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary border-opacity-25">
                <span class="text-body-emphasis">ERR-002</span>
                <span class="text-warning"><i class="fa-solid fa-spinner fa-spin me-1 small"></i> Syncing</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary border-opacity-25">
                <span class="text-body-emphasis">ERR-003</span>
                <span class="text-secondary"><i class="fa-solid fa-circle-minus me-1 small"></i> Standby</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom border-secondary border-opacity-25">
                <span class="text-body-emphasis">ERR-004</span>
                <span class="text-secondary"><i class="fa-solid fa-circle-minus me-1 small"></i> Standby</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-body-emphasis">ERR-005</span>
                <span class="text-secondary"><i class="fa-solid fa-circle-minus me-1 small"></i> Standby</span>
            </div>
        </div>
    </div>

    <!-- SECURITY REMINDER -->
    <div class="alert alert-dark border-secondary bg-black text-white-50 p-3 font-monospace" style="font-size: 0.75rem;">
        <i class="fa-solid fa-lock text-primary mb-2 d-block fs-5"></i>
        Access to proprietary audio files and narrative assets is restricted to authorized protocols. Unauthorized scraping is monitored.
    </div>

</div>

<style>
    /* Helper for icon alignment in the sidebar */
    .w-20px {
        width: 20px;
        display: inline-block;
    }
</style>