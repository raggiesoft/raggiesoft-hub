<?php
/**
 * ============================================================================
 * Crimson Node - Piedmont Directory Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/crimson-node/sidebar-piedmont.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Specialized sidebar for the "University of the Piedmont" character subset
 * within the Crimson Node lore, built with Web Awesome v3.13.0 `<wa-card>` and
 * `<wa-button>` components.
 * ============================================================================
 */
$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>
<wa-card class="border-0 shadow-sm mb-4">
    <div slot="header" class="fw-bold text-uppercase small" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/piedmont" class="text-body-emphasis text-decoration-none d-block">
            <i class="fa-solid fa-arrow-left me-2 text-primary"></i>Piedmont Directory
        </a>
    </div>
    <div class="d-flex flex-column gap-1">
        <wa-button appearance="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/piedmont') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/piedmont') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/piedmont"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-building-columns"></i>Campus Overview
        </wa-button>
        <wa-button appearance="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/piedmont/trent-montgomery') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/piedmont/trent-montgomery') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/piedmont/trent-montgomery"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-user-Secret"></i>Trent Montgomery
        </wa-button>
    </div>
</wa-card>

<wa-card class="border-0 shadow-sm">
    <div slot="header" class="fw-bold text-uppercase small text-danger" style="letter-spacing: 1px;">
        <i class="fa-duotone fa-shield-halved me-2"></i>Character Factions
    </div>
    <div class="d-flex flex-column gap-1">
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/family" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-shield-halved text-danger"></i>The Phalanx Directory
        </wa-button>
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/ccc" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-graduation-cap text-info"></i>CCC Campus
        </wa-button>
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/northwood" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-school text-warning"></i>Northwood High
        </wa-button>
    </div>
</wa-card>
