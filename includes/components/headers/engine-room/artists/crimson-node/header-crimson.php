<?php
// includes/components/headers/engine-room/artists/crimson-node/header-crimson.php
// Crimson Node Custom Header

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

$isHome = str_starts_with($request_uri, '/engine-room/artists/crimson-node/overview') || $request_uri === '/engine-room/artists/crimson-node';
$isDisco = str_starts_with($request_uri, '/engine-room/artists/crimson-node/discography');
// Fully scrubbed the incorrect /band/ route
$isPhalanx = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/family');
$isCcc = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/ccc');
$isNorthwood = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/northwood');
$isPiedmont = str_starts_with($request_uri, '/engine-room/artists/crimson-node/characters/piedmont');
$isLore = str_starts_with($request_uri, '/raggiesoft-books/books/crimson-node');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/engine-room/artists/crimson-node" class="<?php echo $isHome ? 'active' : ''; ?>">
        <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>The Garage
    </wa-button>
  

  
    <wa-button appearance="plain" href="/engine-room/artists/crimson-node/discography" class="<?php echo $isDisco ? 'active' : ''; ?>">
        <i slot="start" class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Discography
    </wa-button>
  

  
  


  
    <wa-button appearance="plain" href="/raggiesoft-books/books/crimson-node" class="<?php echo $isLore ? 'active' : ''; ?>">
        <i slot="start" class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore
    </wa-button>
  

  <!-- Link back to the parent label -->
  
  
    <wa-button appearance="plain" href="/engine-room">
        <i slot="start" class="fa-duotone fa-industry me-2" aria-hidden="true"></i>Label Hub
    </wa-button>
  

</div>
