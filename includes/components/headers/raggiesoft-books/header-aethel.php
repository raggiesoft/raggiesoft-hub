<?php
/**
 * ARCHITECTURE: header-aethel.php
 * 
 * Context: RaggieSoft Books - Aethel Saga Navigation ("The Tome's Index").
 * Narrative/Purpose: This provides contextual navigation exclusively for the "Aethel Saga" high-fantasy universe.
 * It's styled to feel like an index or table of contents within an ancient tome, with gold accents and Cinzel typography.
 * 
 * Mechanics:
 * - Parses `$_SERVER['REQUEST_URI']` to determine the current reading chapter or lore section.
 * - Uses Web Awesome buttons with custom FontAwesome duotone icons for thematic flavor.
 * - Includes a 'locked' state example (Map) to demonstrate disabled interactions within the narrative context.
 * - Inlines specific micro-interaction styles for active link glowing.
 */
// includes/components/headers/raggiesoft-books/header-aethel.php
// THE SAGA NAVIGATION: "The Tome's Index"
// Theme: Cinzel, Gold Accents, High Fantasy

// 1. Determine Active States
// We check the URL to see which "chapter" the user is currently reading.
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

// Exact match for the overview/home of the saga
$isOverview = ($request_uri === '/raggiesoft-books/aethel-saga' || $request_uri === '/raggiesoft-books/aethel-saga/');

// Sub-sections
$isLore       = str_contains($request_uri, '/lore');
$isSoundtrack = str_contains($request_uri, '/soundtrack');
$isMap        = str_contains($request_uri, '/map');
?>

<!-- START: Aethel Saga Navigation Container -->
<div class="d-flex flex-wrap align-items-center gap-2 ms-auto" style="letter-spacing: 1px;">
  
  
    <!-- START: Overview Link -->
    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga" class="px-3 <?php echo $isOverview ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot="prefix" class="fa-duotone fa-book-sparkles me-2"></i>Overview
    </wa-button>
  
    <wa-button appearance="plain" href="/raggiesoft-books/books/aethel" class="px-3 hover-text-white">
       <i slot="prefix" class="fa-duotone fa-book-open-cover me-2"></i>Read The Book
    </wa-button>

    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore/characters" class="px-3 <?php echo $isLore && !str_contains($request_uri, '/locations') ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot="prefix" class="fa-duotone fa-users-crown me-2"></i>Characters
    </wa-button>

    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore/locations" class="px-3 <?php echo str_contains($request_uri, '/locations') ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot="prefix" class="fa-duotone fa-map-location-dot me-2"></i>Locations
    </wa-button>

    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/soundtrack" class="px-3 <?php echo $isSoundtrack ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot="prefix" class="fa-duotone fa-compact-disc me-2"></i>Soundtrack
    </wa-button>

    <!-- START: Locked Feature Example -->
    <span class="nav-link px-3" style="cursor: not-allowed;" title="The Cartographer is still working...">
       <i class="fa-duotone fa-map me-2"></i>Map <small class="ms-1" style="font-size: 0.6em; vertical-align: middle;">(LOCKED)</small>
    </span>
  

  
      <!-- START: Exit to Books Hub -->
      <wa-button appearance="plain" href="/raggiesoft-books" class=" hover-text-warning small">
        <i slot="prefix" class="fa-duotone fa-arrow-right-from-bracket"></i>
      </wa-button>
  

</div>

<!-- START: Aethel Thematic Styles -->
<style>
    /* Aethel Specific Nav Micro-Interactions */
    .hover-text-white:hover { color: #fff !important; transition: color 0.3s ease; }
    
    /* Make the active link glow slightly in Gold */
    .nav-link.active {
        text-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
    }
</style>