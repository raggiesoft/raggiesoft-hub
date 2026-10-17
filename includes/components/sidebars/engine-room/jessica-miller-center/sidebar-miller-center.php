<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE: The Jessica Miller Center Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/jessica-miller-center/sidebar-miller-center.php
 *
 * DESIGN INTENT:
 * - Functions as the Directory & Wayfinding kiosk UI for The Jessica Miller Center
 *   (Stardust West, 2000 Avenue of the Stars, Century City, CA).
 * - Built strictly with Web Awesome v3.13.0 (<wa-card>, <wa-button>, <wa-badge>,
 *   <wa-divider>) per llms-webawesome.txt.
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>

<nav aria-label="The Jessica Miller Center Directory" class="mb-4">
    <wa-card class="shadow-sm mb-4">
        <div slot="header" class="d-flex align-items-center justify-content-between">
            <span class="text-uppercase fw-bold small letter-spacing-1">
                <i class="fa-duotone fa-building-heart me-2 text-success" aria-hidden="true"></i>Center Directory
            </span>
            <wa-badge variant="success" pill>501(c)(3)</wa-badge>
        </div>

        <div class="d-flex flex-column gap-1">
            <wa-button
                appearance="<?php echo ($currentPath === '/engine-room/corporate/jessica-miller-center' || $currentPath === '/engine-room/jessica-miller-center') ? 'filled' : 'plain'; ?>"
                variant="<?php echo ($currentPath === '/engine-room/corporate/jessica-miller-center' || $currentPath === '/engine-room/jessica-miller-center') ? 'brand' : 'neutral'; ?>"
                size="small"
                href="/engine-room/corporate/jessica-miller-center"
                class="w-100 text-start justify-content-start"
                style="text-align: left;">
                <i slot="start" class="fa-solid fa-map-location-dot" aria-hidden="true"></i>Campus Overview
            </wa-button>

            <wa-button
                appearance="<?php echo str_ends_with($currentPath, '/the-quiet-floor') ? 'filled' : 'plain'; ?>"
                variant="<?php echo str_ends_with($currentPath, '/the-quiet-floor') ? 'brand' : 'neutral'; ?>"
                size="small"
                href="/engine-room/corporate/jessica-miller-center/the-quiet-floor"
                class="w-100 text-start justify-content-start"
                style="text-align: left;">
                <i slot="start" class="fa-solid fa-universal-access" aria-hidden="true"></i>The Quiet Floor (13F)
            </wa-button>

            <wa-button
                appearance="<?php echo str_ends_with($currentPath, '/destination-dispatch-elevators') ? 'filled' : 'plain'; ?>"
                variant="<?php echo str_ends_with($currentPath, '/destination-dispatch-elevators') ? 'brand' : 'neutral'; ?>"
                size="small"
                href="/engine-room/corporate/jessica-miller-center/destination-dispatch-elevators"
                class="w-100 text-start justify-content-start"
                style="text-align: left;">
                <i slot="start" class="fa-solid fa-elevator" aria-hidden="true"></i>Destination Dispatch
            </wa-button>
        </div>

        <wa-divider class="my-3"></wa-divider>

        <div class="px-2 mb-2">
            <span class="text-uppercase text-body-secondary fw-bold" style="font-size: 0.72rem; letter-spacing: 0.08em;">
                Origin &amp; Governance
            </span>
        </div>

        <div class="d-flex flex-column gap-1">
            <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-jessica-miller-center" class="w-100 text-start justify-content-start" style="text-align: left;">
                <i slot="start" class="fa-duotone fa-file-invoice-dollar" aria-hidden="true"></i>The 2018 Acquisition Story
            </wa-button>
            <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/corporate/leadership" class="w-100 text-start justify-content-start" style="text-align: left;">
                <i slot="start" class="fa-solid fa-user-tie" aria-hidden="true"></i>Exec. Dir. Jessica Miller
            </wa-button>
            <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/corporate/security/sensory-scale" class="w-100 text-start justify-content-start" style="text-align: left;">
                <i slot="start" class="fa-solid fa-shield-heart" aria-hidden="true"></i>Sensory Scale Protocol
            </wa-button>
        </div>
    </wa-card>

    <!-- Faux live building telemetry card -->
    <wa-card class="shadow-sm">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <span class="text-success-emphasis small text-uppercase fw-bold letter-spacing-1">
                <i class="fa-solid fa-circle-check text-success me-1" aria-hidden="true"></i>Active System Status
            </span>
            <wa-badge variant="success" pill>NOMINAL</wa-badge>
        </div>
        <p class="text-body-secondary small mb-0 font-monospace">
            <strong>Air Quality:</strong> 98% (HEPA)<br>
            <strong>Noise Floor:</strong> 32dB<br>
            <strong>Lighting:</strong> Circadian Sync
        </p>
    </wa-card>
</nav>