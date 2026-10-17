<?php
/**
 * ============================================================================
 * Crimson Node - CCC Campus Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/crimson-node/sidebar-ccc.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Sidebar component for characters associated with the "CCC Campus" (Heather
 * and Hailey Bouchard) within the Crimson Node narrative universe, plus quick
 * navigation back to The Phalanx and other character directories.
 * ============================================================================
 */
$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');
?>
<wa-card class="border-0 shadow-sm mb-4">
    <div slot="header" class="fw-bold text-uppercase small" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/ccc" class="text-body-emphasis text-decoration-none d-block">
            <i class="fa-solid fa-arrow-left me-2 text-info"></i>CCC Campus
        </a>
    </div>
    <div class="d-flex flex-column gap-1">
        <wa-button appearance="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/ccc"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-graduation-cap"></i>Campus Overview
        </wa-button>
        <wa-button appearance="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc/heather-bouchard') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc/heather-bouchard') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/ccc/heather-bouchard"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-user-graduate"></i>Heather Bouchard
        </wa-button>
        <wa-button appearance="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc/hailey-bouchard') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($currentPath === '/engine-room/artists/crimson-node/characters/ccc/hailey-bouchard') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/ccc/hailey-bouchard"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-user-graduate"></i>Hailey Bouchard
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
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/northwood" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-school text-warning"></i>Northwood High
        </wa-button>
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/piedmont" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-building-columns text-primary"></i>University of the Piedmont
        </wa-button>
    </div>
</wa-card>
