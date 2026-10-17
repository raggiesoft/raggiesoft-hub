<?php
/**
 * ============================================================================
 * Crimson Node - Northwood High Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/crimson-node/sidebar-northwood.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Sidebar component managing navigation for the "Northwood High" narrative
 * section within the Crimson Node universe. Uses Web Awesome v3.13.0 `<wa-card>`,
 * `<wa-details>`, and `<wa-button>` components to categorize characters into
 * "Students" and "Staff & Administration".
 * ============================================================================
 */
$request_uri = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');

$isStudentActive = str_contains($request_uri, '/students/');
$isStaffActive   = str_contains($request_uri, '/staff/');
?>

<wa-card class="border-0 shadow-sm mb-4">
    <div slot="header" class="fw-bold text-uppercase small" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/northwood" class="text-body-emphasis text-decoration-none d-block">
            <i class="fa-solid fa-arrow-left me-2 text-warning"></i>Northwood High
        </a>
    </div>

    <div class="d-flex flex-column gap-2">
        <wa-button appearance="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood') ? 'filled-outlined' : 'plain' ?>"
                   variant="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood') ? 'brand' : 'neutral' ?>"
                   href="/engine-room/artists/crimson-node/characters/northwood"
                   class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-school"></i>Directory Overview
        </wa-button>

        <wa-details summary="Students" <?= ($isStudentActive || !$isStaffActive) ? 'open' : '' ?>>
            <div class="d-flex flex-column gap-1">
                <wa-button appearance="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/students/courtney-evans') ? 'filled-outlined' : 'plain' ?>"
                           variant="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/students/courtney-evans') ? 'brand' : 'neutral' ?>"
                           href="/engine-room/artists/crimson-node/characters/northwood/students/courtney-evans"
                           class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-user"></i>Courtney Evans
                </wa-button>
            </div>
        </wa-details>

        <wa-details summary="Staff &amp; Administration" <?= $isStaffActive ? 'open' : '' ?>>
            <div class="d-flex flex-column gap-1">
                <wa-button appearance="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/arthur-vance') ? 'filled-outlined' : 'plain' ?>"
                           variant="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/arthur-vance') ? 'brand' : 'neutral' ?>"
                           href="/engine-room/artists/crimson-node/characters/northwood/staff/arthur-vance"
                           class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-user-tie"></i>Arthur Vance
                </wa-button>
                <wa-button appearance="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-demarco') ? 'filled-outlined' : 'plain' ?>"
                           variant="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-demarco') ? 'brand' : 'neutral' ?>"
                           href="/engine-room/artists/crimson-node/characters/northwood/staff/mrs-demarco"
                           class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-chalkboard-user"></i>Mrs. DeMarco
                </wa-button>
                <wa-button appearance="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-periwinkle') ? 'filled-outlined' : 'plain' ?>"
                           variant="<?= ($request_uri === '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-periwinkle') ? 'brand' : 'neutral' ?>"
                           href="/engine-room/artists/crimson-node/characters/northwood/staff/mrs-periwinkle"
                           class="w-100 text-start justify-content-start">
                    <i slot="start" class="fa-duotone fa-chalkboard-user"></i>Mrs. Periwinkle
                </wa-button>
            </div>
        </wa-details>
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
        <wa-button appearance="plain" variant="neutral" href="/engine-room/artists/crimson-node/characters/piedmont" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-building-columns text-primary"></i>University of the Piedmont
        </wa-button>
    </div>
</wa-card>
