<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Engine Room Corporate Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/corporate/sidebar-corporate.php
 *
 * ROLE:
 * Contextual navigation and status sidebar for the "O'Connell Family Trust" &
 * "Family Office" narrative property. Connects all corporate holdings,
 * real estate divisions (Pacific Rim Properties, The Stardust Blacksburg,
 * The Jessica Miller Center), strategic assets, and case files.
 *
 * TECHNICAL NOTES:
 * - Refactored from legacy Bootstrap cards/badges/buttons to Web Awesome v3.13.0
 *   (<wa-card>, <wa-button>, <wa-badge>, <wa-divider>) per llms-webawesome.txt.
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>

<!-- [LAYOUT] Governance & Holdings Card -->
<wa-card class="shadow-sm mb-4">
    <div slot="header" class="d-flex align-items-center justify-content-between">
        <span class="fw-bold text-uppercase small letter-spacing-1">
            <i class="fa-duotone fa-shield-check me-2 text-primary" aria-hidden="true"></i>Governance &amp; Holdings
        </span>
    </div>

    <div class="d-flex flex-column gap-1">
        <wa-button appearance="<?php echo ($currentPath === '/engine-room/corporate') ? 'filled' : 'plain'; ?>" variant="<?php echo ($currentPath === '/engine-room/corporate') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-building-columns" aria-hidden="true"></i>Corporate Gateway
        </wa-button>
        <wa-button appearance="<?php echo ($currentPath === '/engine-room/corporate/structure') ? 'filled' : 'plain'; ?>" variant="<?php echo ($currentPath === '/engine-room/corporate/structure') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/structure" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-sitemap" aria-hidden="true"></i>The Trust Map (2015)
        </wa-button>
        <wa-button appearance="<?php echo ($currentPath === '/engine-room/corporate/leadership') ? 'filled' : 'plain'; ?>" variant="<?php echo ($currentPath === '/engine-room/corporate/leadership') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/leadership" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-users-crown" aria-hidden="true"></i>Executive Leadership
        </wa-button>
        <wa-button appearance="<?php echo str_starts_with($currentPath, '/engine-room/corporate/strategic-assets') ? 'filled' : 'plain'; ?>" variant="<?php echo str_starts_with($currentPath, '/engine-room/corporate/strategic-assets') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/strategic-assets" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-vault" aria-hidden="true"></i>Stardust Strategic Assets
        </wa-button>
        <wa-button appearance="<?php echo ($currentPath === '/engine-room/corporate/fleet' || $currentPath === '/engine-room/corporate/strategic-assets/the-iron-horse') ? 'filled' : 'plain'; ?>" variant="<?php echo ($currentPath === '/engine-room/corporate/fleet' || $currentPath === '/engine-room/corporate/strategic-assets/the-iron-horse') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/strategic-assets/the-iron-horse" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-bus" aria-hidden="true"></i>The Iron Horse &amp; Fleet
        </wa-button>
        <wa-button appearance="<?php echo str_starts_with($currentPath, '/engine-room/corporate/pacific-rim') ? 'filled' : 'plain'; ?>" variant="<?php echo str_starts_with($currentPath, '/engine-room/corporate/pacific-rim') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/pacific-rim" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-city" aria-hidden="true"></i>Pacific Rim Properties
        </wa-button>
        <wa-button appearance="<?php echo str_starts_with($currentPath, '/engine-room/corporate/stardust-blacksburg') ? 'filled' : 'plain'; ?>" variant="<?php echo str_starts_with($currentPath, '/engine-room/corporate/stardust-blacksburg') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/stardust-blacksburg" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-building-user" aria-hidden="true"></i>The Stardust Blacksburg
        </wa-button>
        <wa-button appearance="<?php echo str_starts_with($currentPath, '/engine-room/corporate/jessica-miller-center') || str_starts_with($currentPath, '/engine-room/jessica-miller-center') ? 'filled' : 'plain'; ?>" variant="<?php echo str_starts_with($currentPath, '/engine-room/corporate/jessica-miller-center') || str_starts_with($currentPath, '/engine-room/jessica-miller-center') ? 'brand' : 'neutral'; ?>" size="small" href="/engine-room/corporate/jessica-miller-center" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-hand-holding-heart" aria-hidden="true"></i>Jessica Miller Center
        </wa-button>
        <wa-button appearance="<?php echo ($currentPath === '/oconnell-trust') ? 'filled' : 'plain'; ?>" variant="<?php echo ($currentPath === '/oconnell-trust') ? 'brand' : 'neutral'; ?>" size="small" href="/oconnell-trust" class="w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-scale-balanced" aria-hidden="true"></i>O'Connell Family Trust
        </wa-button>
    </div>
</wa-card>

<!-- [LAYOUT] Case Files Card -->
<wa-card class="shadow-sm mb-4">
    <div slot="header" class="d-flex align-items-center justify-content-between">
        <span class="fw-bold text-uppercase small letter-spacing-1 text-danger">
            <i class="fa-duotone fa-box-archive me-2" aria-hidden="true"></i>Case Files &amp; Filings
        </span>
    </div>

    <div class="d-flex flex-column gap-3">
        <div class="p-2 rounded bg-body-tertiary border border-secondary-subtle">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-bold small">Filing 15-0812-DE</span>
                <wa-badge variant="brand" pill>SEALED / ACTIVE</wa-badge>
            </div>
            <div class="small fst-italic text-body-secondary mb-2">Re: The 2015 Delaware Migration</div>
            <wa-button appearance="outlined" variant="brand" size="small" href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="w-100">
                Inspect Filing
            </wa-button>
        </div>

        <div class="p-2 rounded bg-body-tertiary border border-secondary-subtle">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-bold small">Case 18-11492</span>
                <wa-badge variant="success" pill>ACQUIRED</wa-badge>
            </div>
            <div class="small fst-italic text-body-secondary mb-2">Re: Omni-Global Media Liquidation</div>
            <wa-button appearance="outlined" variant="success" size="small" href="/engine-room/corporate/acquisition-plan" class="w-100">
                Inspect Case File
            </wa-button>
        </div>
    </div>
</wa-card>

<!-- [UI COMPONENT] System Status HUD -->
<wa-card class="shadow-sm mb-4">
    <div slot="header" class="d-flex align-items-center justify-content-between">
        <span class="fw-bold text-uppercase small letter-spacing-1 text-info">
            <i class="fa-duotone fa-signal-stream me-2" aria-hidden="true"></i>System Status
        </span>
        <wa-badge variant="success" pill>ONLINE</wa-badge>
    </div>

    <ul class="list-unstyled small mb-3 font-monospace">
        <li class="mb-1 text-success"><i class="fa-solid fa-check me-2" aria-hidden="true"></i>TRUST_DB: ONLINE</li>
        <li class="mb-1 text-success"><i class="fa-solid fa-check me-2" aria-hidden="true"></i>FLEET_GPS: ACTIVE</li>
        <li class="mb-0 text-success"><i class="fa-solid fa-check me-2" aria-hidden="true"></i>AETHEL_BOT: IDLE</li>
    </ul>
    <wa-button appearance="outlined" variant="brand" size="small" href="/engine-room/corporate/systems" class="w-100">
        <i slot="start" class="fa-duotone fa-terminal" aria-hidden="true"></i>Access Intranet Console
    </wa-button>
</wa-card>