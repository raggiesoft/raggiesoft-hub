<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-crimson.php (Web Awesome v3.13.0)
 * ============================================================================
 * Context: Engine Room Records - Crimson Node Global Navigation.
 * Narrative/Purpose: Primary navigation for the Crimson Node artist hub.
 * Manages routing between the main garage, discography, character factions
 * (Phalanx, CCC, Northwood, Piedmont), and the RaggieSoft Books integration.
 * ============================================================================
 */

// 1. Determine Active States
$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

$isHome      = str_starts_with($request_uri, '/engine-room/artists/crimson-node/overview') || $request_uri === '/engine-room/artists/crimson-node';
$isDisco     = str_starts_with($request_uri, '/engine-room/artists/crimson-node/discography');
$isPhalanx   = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/family');
$isCcc       = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/ccc');
$isNorthwood = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/northwood');
$isPiedmont  = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/piedmont');
$isLore      = str_starts_with($request_uri, '/raggiesoft-books/books/crimson-node');
?>

<!-- START: Crimson Node Navigation Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/artists/crimson-node" class="<?php echo $isHome ? 'active text-danger fw-bold' : ''; ?>">
    <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>The Garage
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/crimson-node/discography" class="<?php echo $isDisco ? 'active text-danger fw-bold' : ''; ?>">
    <i slot="start" class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Album Lore
  </wa-button>

  <wa-button appearance="plain" href="https://music.raggiesoft.com/crimson-node" class="text-warning fw-bold">
    <i slot="start" class="fa-duotone fa-turntable me-2" aria-hidden="true"></i>Listening Room
  </wa-button>

  <!-- START: Character Factions Dropdown -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo ($isPhalanx || $isCcc || $isNorthwood || $isPiedmont) ? 'active text-danger fw-bold' : ''; ?>">
      <i slot="start" class="fa-duotone fa-users me-2" aria-hidden="true"></i>Characters
    </wa-button>
    <wa-dropdown-item value="/engine-room/artists/crimson-node/characters/family">
      <i slot="icon" class="fa-duotone fa-shield-halved text-danger"></i>The Phalanx (Family Directory)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/crimson-node/characters/ccc">
      <i slot="icon" class="fa-duotone fa-graduation-cap text-info"></i>CCC Campus
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/engine-room/artists/crimson-node/characters/northwood">
      <i slot="icon" class="fa-duotone fa-school text-warning"></i>Northwood High
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/engine-room/artists/crimson-node/characters/piedmont">
      <i slot="icon" class="fa-duotone fa-building-columns text-primary"></i>The University of the Piedmont
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/raggiesoft-books/books/crimson-node" class="<?php echo $isLore ? 'active text-danger fw-bold' : ''; ?>">
    <i slot="start" class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore
  </wa-button>

  <!-- START: Exit to Label Hub -->
  <wa-button appearance="plain" href="/engine-room">
    <i slot="start" class="fa-duotone fa-industry me-2" aria-hidden="true"></i>Label Hub
  </wa-button>

</div>
