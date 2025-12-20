<?php
// includes/components/headers/header-default.php
// UPDATED: Dynamic Discography loading from CDN JSON

// 1. Determine Active States
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHome = ($request_uri === '/');
$isDiscography = (str_starts_with($request_uri, '/discography') || $request_uri === '/discography');
$isBand = (str_starts_with($request_uri, '/band'));
$isLore = (str_starts_with($request_uri, '/story') || str_starts_with($request_uri, '/engine-room/history')); 
$isAbout = (str_starts_with($request_uri, '/about'));
$isContact = ($request_uri === '/contact');
$isRadio = ($request_uri === '/radio');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/"><i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isDiscography ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-list-music me-2" aria-hidden="true"></i>Discography
    </a>
    <ul class="dropdown-menu dropdown-menu-end scrollable-menu" style="max-height: 500px; overflow-y: auto;">
       <?php 
       // Configuration
       $jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/albums.json';
       $discographyData = null;

       // Fetch JSON with a timeout to prevent page hang
       $context = stream_context_create([
            'http' => ['timeout' => 2] // 2 second timeout
       ]);

       // Attempt fetch
       $jsonData = @file_get_contents($jsonUrl, false, $context);

       if ($jsonData) {
           $discographyData = json_decode($jsonData, true);
       }

       // Render Menu
       if ($discographyData) {
           $eraCount = 0;
           $totalEras = count($discographyData);

           foreach ($discographyData as $eraKey => $eraData) {
               $eraCount++;
               
               // Era Label
               echo '<li><h6 class="dropdown-header text-uppercase text-muted small fw-bold mt-2">' . htmlspecialchars($eraData['label']) . '</h6></li>';
               
               // Albums Loop
               if (!empty($eraData['albums'])) {
                   foreach ($eraData['albums'] as $album) {
                       $extraBadge = $album['extra'] ?? '';
                       echo '<li>
                               <a class="dropdown-item" href="' . htmlspecialchars($album['url']) . '">
                                   <i class="fa-solid fa-compact-disc me-2 text-secondary"></i>' . htmlspecialchars($album['title']) . $extraBadge . '
                               </a>
                             </li>';
                   }
               }

               // Divider (only if not the last item)
               if ($eraCount < $totalEras) {
                   echo '<li><hr class="dropdown-divider"></li>';
               }
           }
       } else {
           // Fallback if CDN fails
           echo '<li><a class="dropdown-item" href="/discography">View All Albums</a></li>';
           echo '<li><small class="dropdown-item text-muted">Unable to load catalog.</small></li>';
       }
       ?>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isBand ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-music-magnifying-glass me-2" aria-hidden="true"></i>The Band
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/band"><i class="fa-duotone fa-users me-2" aria-hidden="true"></i>Overview</a></li>
      <li><a class="dropdown-item" href="/band/history"><i class="fa-duotone fa-clock-rotate-left me-2" aria-hidden="true"></i>Band History</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/band/ryan-oconnell"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Ryan O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/cassidy-oconnell"><i class="fa-duotone fa-person-dress me-2" aria-hidden="true"></i>Cassidy O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/holly-oconnell"><i class="fa-duotone fa-person-dress me-2" aria-hidden="true"></i>Holly O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/evan-wright"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Evan Wright</a></li>
      <li><a class="dropdown-item" href="/band/tyler-wright"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Tyler Wright</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isLore ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/story"><i class="fa-duotone fa-book-open me-2" aria-hidden="true"></i>Full Narrative</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase">Key Events</h6></li>
      
      <li><a class="dropdown-item" href="/story/ad-astra"><i class="fa-duotone fa-rocket-launch me-2" aria-hidden="true"></i>Ad Astra: The Mission</a></li>
      <li><a class="dropdown-item" href="/story/crash-of-90"><i class="fa-duotone fa-car-crash me-2" aria-hidden="true"></i>The Crash of '90</a></li>
      
      <li><a class="dropdown-item" href="/engine-room/history/friction"><i class="fa-duotone fa-fire me-2" aria-hidden="true"></i>The Friction Catastrophe</a></li>
      <li><a class="dropdown-item" href="/story/cpi"><i class="fa-duotone fa-users-gear me-2" aria-hidden="true"></i>CPI & The Forgers</a></li>
      
      <li><a class="dropdown-item" href="/engine-room/history/nine-figure-refusal"><i class="fa-duotone fa-handshake-simple-slash me-2" aria-hidden="true"></i>Nine-Figure Refusal</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-network-wired me-2" aria-hidden="true"></i>Network
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="/about"><i class="fa-duotone fa-info-circle me-2 text-muted"></i>About This Project</a></li>
        <li><a class="dropdown-item" href="/contact"><i class="fa-duotone fa-envelope me-2" aria-hidden="true"></i>Contact</a>
        <li><a class="dropdown-item" href="/license"><i class="fa-duotone fa-file-contract me-2" aria-hidden="true"></i>License</a></li>
        <li><hr class="dropdown-divider"></li>  
        <li>
            <a class="dropdown-item fw-bold text-uppercase" href="/engine-room">
                <i class="fa-solid fa-industry me-2 text-danger"></i>Engine Room Records
            </a>
        </li>
        </ul>
  </li>

</ul>