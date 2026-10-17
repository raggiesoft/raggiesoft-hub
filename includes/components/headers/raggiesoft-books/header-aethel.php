<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-aethel.php (Web Awesome v3.13.0)
 * ============================================================================
 * Context: RaggieSoft Books - Aethel Saga Navigation ("The Tome's Index").
 * Narrative/Purpose: Contextual navigation for the "Aethel Saga" high-fantasy
 * universe, styled like an index in an ancient tome with gold accents.
 *
 * Mechanics:
 * - Parses `$_SERVER['REQUEST_URI']` to highlight the current reading or lore section.
 * - Uses strict Web Awesome v3.13.0 `slot="start"` icon slots on `<wa-button>`.
 * ============================================================================
 */

// 1. Determine Active States
$request_uri = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');

$isOverview   = ($request_uri === '/raggiesoft-books/aethel-saga');
$isLoreHub    = ($request_uri === '/raggiesoft-books/aethel-saga/lore');
$isCharacters = str_contains($request_uri, '/lore/characters');
$isLocations  = str_contains($request_uri, '/lore/locations');
$isSoundtrack = str_contains($request_uri, '/soundtrack');
?>

<!-- START: Aethel Saga Navigation Container -->
<div class="d-flex flex-wrap align-items-center gap-2 ms-auto" style="letter-spacing: 1px;">

  <!-- START: Overview Link -->
  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga" class="px-3 <?php echo $isOverview ? 'active text-warning fw-bold' : 'hover-text-white'; ?>">
    <i slot="start" class="fa-duotone fa-book-sparkles me-2"></i>Overview
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/books/aethel" class="px-3 hover-text-white">
    <i slot="start" class="fa-duotone fa-book-open-cover me-2"></i>Read The Book
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore" class="px-3 <?php echo $isLoreHub ? 'active text-warning fw-bold' : 'hover-text-white'; ?>">
    <i slot="start" class="fa-duotone fa-scroll-old me-2"></i>Lore Hub
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore/characters" class="px-3 <?php echo $isCharacters ? 'active text-warning fw-bold' : 'hover-text-white'; ?>">
    <i slot="start" class="fa-duotone fa-users-crown me-2"></i>Characters
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore/locations" class="px-3 <?php echo $isLocations ? 'active text-warning fw-bold' : 'hover-text-white'; ?>">
    <i slot="start" class="fa-duotone fa-map-location-dot me-2"></i>Locations
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/soundtrack" class="px-3 <?php echo $isSoundtrack ? 'active text-warning fw-bold' : 'hover-text-white'; ?>">
    <i slot="start" class="fa-duotone fa-compact-disc me-2"></i>Soundtrack
  </wa-button>

  <!-- START: Exit to Books Hub -->
  <wa-button appearance="plain" href="/raggiesoft-books" class="hover-text-warning small" title="Return to Ocean View Archives">
    <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i>Archive
  </wa-button>

</div>

<!-- START: Aethel Thematic Styles -->
<style>
    /* Aethel Specific Nav Micro-Interactions */
    .hover-text-white:hover { color: #fff !important; transition: color 0.3s ease; }
    .nav-link.active {
        text-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
    }
</style>