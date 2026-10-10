<?php
// includes/components/headers/raggiesoft-books/header-books.php
// Global navigation for the Ocean View Archives imprint.
// Updated: Web Awesome Components

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Archive Search Header Navigation
 * Purpose: Provides global navigation for the Ocean View Archives imprint, with a focus on deep search capabilities.
 * 
 * Strategy & Implementation:
 * - Employs URL parsing (`$request_uri`) to determine which literary project or section is active.
 * - Variables ($isHub, $isKnox, $isAethel, $isBooks) define explicit truth states mapped directly to visual classes.
 * - Utilizes Web Awesome `<wa-button>` components alongside FontAwesome duotone icons for a consistent UI.
 * 
 * Maintenance Recommendations:
 * - When introducing new literary IPs or projects, register a new boolean active state check at the top.
 * - Keep inline style logic (`style="<?php echo $isHub...`) minimal; favor CSS classes where possible to maintain separation of concerns.
 */

// Capture active route for deterministic navigation highlighting
$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-books';
// Strictly evaluate if the user is on the main archive hub
$isHub = ($request_uri === '/raggiesoft-books');
$isKnox = (str_starts_with($request_uri, '/raggiesoft-books/knox'));
$isAethel = (str_starts_with($request_uri, '/raggiesoft-books/aethel-saga'));
$isBooks = (str_starts_with($request_uri, '/raggiesoft-books/books'));
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
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

  <!-- Deep Search Action: Highlighted specifically to encourage archive exploration -->
  <wa-button appearance="plain" href="/raggiesoft-books/search" class="text-warning fw-bold">
    <i slot="start" class="fa-duotone fa-magnifying-glass"></i> Deep Search
  </wa-button>

  <div class="ms-2 ps-2 border-start border-secondary border-">
      <wa-button appearance="plain" variant="neutral" href="/raggiesoft-media" class="text-body-secondary">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> RaggieSoft Media
      </wa-button>
  </div>

</div>
