<?php
/**
 * ARCHITECTURE: header-books.php
 * 
 * Context: RaggieSoft Books - Ocean View Archives Global Navigation.
 * Narrative/Purpose: This serves as the primary navigation header for the 'RaggieSoft Books' vertical.
 * It provides wayfinding between the main hub (The Archive), the contemporary library, and specific 
 * sub-brands or universes like 'Project: KNOX' and the 'Aethel Saga'.
 * 
 * Mechanics:
 * - Uses `$_SERVER['REQUEST_URI']` to determine the current section for active state highlighting.
 * - Implements `wa-button` components from Web Awesome for consistent UI elements.
 * - Utilizes Bootstrap flex utility classes for responsive mobile/desktop layout adaptation.
 */
// includes/components/headers/raggiesoft-books/header-books.php
// Global navigation for the Ocean View Archives imprint.
// Updated: Web Awesome Components

$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-books';
$isHub = ($request_uri === '/raggiesoft-books');
$isKnox = (str_starts_with($request_uri, '/raggiesoft-books/knox'));
$isAethel = (str_starts_with($request_uri, '/raggiesoft-books/aethel-saga'));
$isBooks = (str_starts_with($request_uri, '/raggiesoft-books/books'));
?>

<!-- START: Books Global Navigation Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  <!-- START: Archive Hub Link -->
  <wa-button appearance="plain" href="/raggiesoft-books" style="<?php echo $isHub ? 'color: #E3B27C !important; font-weight: bold;' : ''; ?>" class="<?php echo $isHub ? '' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-landmark"></i> The Archive
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/books" class="<?php echo $isBooks ? 'text-info fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-books"></i> Contemporary Library
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/knox" class="<?php echo $isKnox ? 'text-success fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-planet-ringed"></i> Project: KNOX
  </wa-button>

  <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga" class="<?php echo $isAethel ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i slot="start" class="fa-duotone fa-sword"></i> Aethel Saga
  </wa-button>

  <!-- START: Global Exit Link -->
  <div class="ms-2 ps-2 border-start border-secondary border-">
      <wa-button appearance="plain" variant="neutral" href="/raggiesoft-media" class="text-body-secondary">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> RaggieSoft Media
      </wa-button>
  </div>

</div>
