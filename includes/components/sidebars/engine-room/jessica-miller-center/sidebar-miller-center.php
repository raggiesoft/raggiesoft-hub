<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the sidebar navigation for the Jessica Miller Center section of the Engine Room site.
 * 
 * DESIGN INTENT:
 * - Functions as a faux "Directory/Wayfinding" kiosk UI for the philanthropic center.
 * - Simulates live building data (Air Quality, Noise Floor) using a static card with a bootstrap spinner to enhance the immersive, in-universe feel.
 * - WCAG AAA Compliant by design: high contrast text (`text-body-secondary`), clear focus states via Web Awesome Pro.
 * 
 * MAINTENANCE NOTES:
 * - The `active` states are not dynamically calculated here; the links are mostly static or point to `#` placeholders for future development.
 * - The "System Status" card is hardcoded HTML, not pulling from any actual sensor API.
 */
// includes/components/sidebars/engine-room/jessica-miller-center/sidebar-miller-center.php
// Sidebar for The Jessica Miller Center
// WCAG STATUS: AAA Compliant (Adaptive Web Awesome Pro)
?>

<div class="mb-4">
    <h6 class="text-uppercase text-body-secondary fw-bold letter-spacing-1 mb-3" style="font-size: 0.75rem;">
        Center Directory
    </h6>
    <!-- LEGACY UI COMPONENT: Standard Bootstrap list-group modified with `bg-transparent` to blend into the parent container's background. -->
    <div class="list-group list-group-flush border-bottom border-secondary-subtle">
        <a href="/engine-room/jessica-miller-center" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-secondary-subtle px-0">
            <i slot="start" class="fa-solid fa-map-location-dot"></i> Campus Map
        </a>
        <a href="/engine-room/jessica-miller-center/the-quiet-floor" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-secondary-subtle px-0">
            <i slot="start" class="fa-solid fa-universal-access"></i> The Quiet Floor <span class="badge bg-body-secondary text-body-secondary ms-2 rounded-pill border" style="font-size: 0.6em;">BUILDING HOURS</span>
        </a>
        <a href="/engine-room/jessica-miller-center/destination-dispatch-elevators" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-secondary-subtle px-0">
            <i slot="start" class="fa-solid fa-elevator"></i> Destination Dispatch
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-secondary-subtle px-0">
            <i slot="start" class="fa-solid fa-calendar-check"></i> Book a Room
        </a>
    </div>
</div>

<div class="mb-4">
    <h6 class="text-uppercase text-body-secondary fw-bold letter-spacing-1 mb-3" style="font-size: 0.75rem;">
        Administration
    </h6>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-0 px-0 py-1">
            <small><i slot="start" class="fa-solid fa-user-tie"></i> Exec. Dir. J. Miller</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-0 px-0 py-1">
            <small><i slot="start" class="fa-solid fa-building"></i> Facilities Mgmt</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-body-secondary border-0 px-0 py-1">
            <small><i slot="start" class="fa-solid fa-shield-check"></i> Security (Lobby)</small>
        </a>
    </div>
</div>

<!-- LEGACY IMMERSION: Faux live data dashboard simulating building management systems. -->
<div class="card bg-body-tertiary border-success shadow-sm mt-4">
    <div class="card-body p-3">
        <div class="d-flex align-items-center mb-2">
            <div class="spinner-grow text-success spinner-grow-sm me-2" role="status"></div>
            <span class="text-success-emphasis small text-uppercase fw-bold letter-spacing-1">Active System Status</span>
        </div>
        <p class="text-body-secondary small mb-0">
            <strong>Air Quality:</strong> 98% (HEPA)<br>
            <strong>Noise Floor:</strong> 32dB<br>
            <strong>Lighting:</strong> Circadian Sync
        </p>
    </div>
</div>