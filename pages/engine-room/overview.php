<?php
// includes/components/sidebars/engine-room/history/sidebar-history.php
// The Navigation Panel for the Historical Archives
?>

<div class="sticky-top" style="top: 100px;">
    
    <!-- DIRECTORY NAVIGATION -->
    <div class="card rounded-0 border-secondary mb-4 bg-body-tertiary shadow-sm">
        <div class="card-header bg-dark text-white fw-bold text-uppercase border-bottom border-danger font-monospace small">
            <i class="fa-solid fa-folder-tree me-2" aria-hidden="true"></i>Archive Directory
        </div>
        <div class="list-group list-group-flush font-monospace small">
            <a href="/engine-room" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-house-building me-2 w-20px text-center" aria-hidden="true"></i>HQ Overview
            </a>
            <a href="/engine-room/history" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" aria-current="page">
                <i class="fa-duotone fa-list-timeline me-2 w-20px text-center" aria-hidden="true"></i>Full Timeline
            </a>
        </div>
    </div>

    <!-- DECLASSIFIED CASE FILES -->
    <div class="card rounded-0 border-secondary mb-4 bg-transparent shadow-sm">
        <div class="card-header bg-transparent text-body-emphasis fw-bold text-uppercase border-bottom border-secondary font-monospace small">
            <i class="fa-solid fa-folder-open me-2" aria-hidden="true"></i>Case Files
        </div>
        <div class="list-group list-group-flush font-monospace small">
            <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-car-crash me-2 w-20px text-center text-warning" aria-hidden="true"></i>1990: The Crash
            </a>
            <a href="/engine-room/artists/stardust-engine/story/friction" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-fire me-2 w-20px text-center text-danger" aria-hidden="true"></i>1992: Friction
            </a>
            <a href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="list-group-item list-group-item-action bg-transparent text-body">
                <i class="fa-duotone fa-gavel me-2 w-20px text-center text-success" aria-hidden="true"></i>2018: The Refusal
            </a>
        </div>
    </div>

    <!-- SECURITY REMINDER -->
    <div class="alert alert-dark border-secondary bg-black text-white-50 p-3 font-monospace" style="font-size: 0.75rem;">
        <i class="fa-solid fa-shield-halved text-danger mb-2 d-block fs-5" aria-hidden="true"></i>
        Historical records and case files are maintained for internal reference and DSP compliance. Access to these documents is logged.
    </div>

</div>

<style>
    /* Helper for icon alignment in the sidebar */
    .w-20px {
        width: 20px;
        display: inline-block;
    }
</style>