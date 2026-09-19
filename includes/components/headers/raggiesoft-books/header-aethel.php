<?php
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

<div class=\"d-flex flex-wrap align-items-center gap-2 ms-auto\" style="letter-spacing: 1px;">
  
  
    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga" class="px-3 <?php echo $isOverview ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot=\"start\" class=\"fa-duotone fa-book-sparkles me-2\"></i>Overview
    </wa-button>
  

  
    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/lore/characters" class="px-3 <?php echo $isLore ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot=\"start\" class=\"fa-duotone fa-users-crown me-2\"></i>Characters
    </wa-button>
  

  
    <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga/soundtrack" class="px-3 <?php echo $isSoundtrack ? 'active text-warning fw-bold' : ' hover-text-white'; ?>">
       <i slot=\"start\" class=\"fa-duotone fa-compact-disc me-2\"></i>Soundtrack
    </wa-button>
  

  
    <span class="nav-link px-3  " style="cursor: not-allowed;" title="The Cartographer is still working...">
       <i class="fa-duotone fa-map-location-dot me-2"></i>Map <small class="ms-1" style="font-size: 0.6em; vertical-align: middle;">(LOCKED)</small>
    </span>
  

  
      <wa-button appearance="plain" href="/raggiesoft-books" class=" hover-text-warning small">
        <i slot=\"start\" class=\"fa-duotone fa-arrow-right-from-bracket\"></i>
      </wa-button>
  

</div>

<style>
    /* Aethel Specific Nav Micro-Interactions */
    .hover-text-white:hover { color: #fff !important; transition: color 0.3s ease; }
    
    /* Make the active link glow slightly in Gold */
    .nav-link.active {
        text-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
    }
</style>