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

<ul class="navbar-nav ms-auto mb-2 mb-md-0 cinzel-font" style="letter-spacing: 1px;">
  
  <li class="nav-item">
    <a class="nav-link px-3 <?php echo $isOverview ? 'active text-warning fw-bold' : 'text-secondary hover-text-white'; ?>" 
       href="/raggiesoft-books/aethel-saga">
       <i class="fa-duotone fa-book-sparkles me-2"></i>Overview
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link px-3 <?php echo $isLore ? 'active text-warning fw-bold' : 'text-secondary hover-text-white'; ?>" 
       href="/raggiesoft-books/aethel-saga/lore/characters">
       <i class="fa-duotone fa-users-crown me-2"></i>Characters
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link px-3 <?php echo $isSoundtrack ? 'active text-warning fw-bold' : 'text-secondary hover-text-white'; ?>" 
       href="/raggiesoft-books/aethel-saga/soundtrack">
       <i class="fa-duotone fa-compact-disc me-2"></i>Soundtrack
    </a>
  </li>

  <li class="nav-item">
    <span class="nav-link px-3 text-secondary opacity-25" style="cursor: not-allowed;" title="The Cartographer is still working...">
       <i class="fa-duotone fa-map-location-dot me-2"></i>Map <small class="ms-1" style="font-size: 0.6em; vertical-align: middle;">(LOCKED)</small>
    </span>
  </li>

  <li class="nav-item ms-lg-3 border-start border-secondary ps-lg-3 d-none d-lg-block">
      <a class="nav-link text-secondary hover-text-warning small" href="/raggiesoft-books" title="Return to RaggieSoft Books">
        <i class="fa-duotone fa-arrow-right-from-bracket"></i>
      </a>
  </li>

</ul>

<style>
    /* Aethel Specific Nav Micro-Interactions */
    .hover-text-white:hover { color: #fff !important; transition: color 0.3s ease; }
    
    /* Make the active link glow slightly in Gold */
    .nav-link.active {
        text-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
    }
</style>