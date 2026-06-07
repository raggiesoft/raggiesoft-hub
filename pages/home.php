<?php
// pages/home.php
// The RaggieSoft Global Y-Junction (Root Domain)

$pageTitle = "RaggieSoft | The Central Hub";
?>

<style>
    /* --- THE Y-JUNCTION SPLIT HERO --- */
    .split-hero-container {
        min-height: 80vh;
        display: flex;
        flex-direction: column;
    }
    
    .split-pane {
        position: relative;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .pane-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.8s ease;
        z-index: 0;
    }

    .pane-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.75);
        transition: background-color 0.5s ease;
        z-index: 1;
    }

    .pane-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #ffffff !important; /* Brute-force contrast */
        padding: 3rem 1.5rem;
        max-width: 600px;
    }

    /* Desktop Hover Dynamics */
    @media (min-width: 992px) {
        .split-hero-container { flex-direction: row; }
        .split-pane { border-bottom: none; border-right: 1px solid rgba(255, 255, 255, 0.1); }
        .split-pane:last-child { border-right: none; }
        
        .split-pane:hover { flex: 1.25; }
        .split-pane:hover .pane-overlay { background-color: rgba(0, 0, 0, 0.5); }
        .split-pane:hover .pane-bg { transform: scale(1.05); }
    }

    /* Brute-force text overrides for the Hero */
    .hero-title { text-shadow: 0px 4px 15px rgba(0,0,0,0.9), 0px 1px 3px rgba(0,0,0,1); }
    .hero-text { text-shadow: 0px 2px 8px rgba(0,0,0,0.9); }

    /* Dark Mode Override for Logos in the Directory */
    [data-bs-theme="dark"] .theme-invert img {
        filter: invert(1) grayscale(100%) !important; 
        mix-blend-mode: normal !important; 
        opacity: 0.9 !important; 
    }
</style>

<section class="split-hero-container w-100" aria-label="Main Navigation Routing">
    
    <div class="split-pane bg-dark">
        <div class="pane-bg" style="background-image: url('https://assets.raggiesoft.com/common/patterns/stars-transparent.png'); background-color: #0a0e14; background-size: auto;"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <i class="fa-duotone fa-server fa-3x text-primary mb-3 drop-shadow"></i>
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">The Architect</h1>
            <h2 class="h5 fw-light text-primary mb-4 hero-text text-uppercase letter-spacing-1">Infrastructure & Operations</h2>
            <p class="lead hero-text text-white-75 mb-4">
                Systems architecture, open-source development, B2B media licensing, and the professional portfolio of Michael P. Ragsdale.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center mt-auto">
                <a href="/about/michael-ragsdale" class="btn btn-primary btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="fa-duotone fa-user-visor me-2"></i> View Portfolio
                </a>
                <a href="/raggiesoft-media" class="btn btn-outline-light btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="fa-solid fa-building me-2"></i> Corporate Hub
                </a>
            </div>
        </div>
    </div>

    <div class="split-pane bg-black">
        <div class="pane-bg" style="background-image: url('https://assets.raggiesoft.com/stardust-engine/images/stardust-nebula.jpg');"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <i class="fa-duotone fa-compact-disc fa-3x text-danger mb-3 drop-shadow"></i>
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">Creative Works</h1>
            <h2 class="h5 fw-light text-danger mb-4 hero-text text-uppercase letter-spacing-1">Music & Narrative Lore</h2>
            <p class="lead hero-text text-white-75 mb-4">
                100% independent audio production from Engine Room Records, and CC BY-SA 4.0 literary universes including Project: KNOX.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center mt-auto">
                <a href="/engine-room/artists/stardust-engine" class="btn btn-danger btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="fa-solid fa-rocket-launch me-2"></i> Stardust Engine
                </a>
                <a href="/engine-room" class="btn btn-outline-light btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="fa-solid fa-industry me-2"></i> Label Archives
                </a>
            </div>
        </div>
    </div>

</section>

<div class="container mt-4 mb-2">
    <div class="alert alert-secondary border-secondary shadow-sm d-flex align-items-center rounded-0" role="alert">
        <i class="fa-duotone fa-robot-astromech fa-2x me-3 text-info"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-body-emphasis">Transparency Notice</h4>
            <p class="mb-0 small text-body">
                RaggieSoft is a multimedia storytelling and world-building project. Certain music, artwork, and narrative elements across this network are created with the assistance of Artificial Intelligence. 
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<section id="network-spokes" class="py-5 bg-body text-body" aria-labelledby="spokes-title">
  <div class="container-fluid px-4 px-xxl-5">
    
    <div class="text-center border-bottom border-secondary-subtle pb-3 mb-5">
        <h2 id="spokes-title" class="h4 fw-bold text-uppercase text-secondary letter-spacing-1">
            <i class="fa-duotone fa-network-wired me-2"></i>Global Directory
        </h2>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-4 justify-content-center">
      
      <div class="col" style="max-width: 400px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/portfolio/images/logos/logo-michael.png',
            'imgAlt' => 'Michael P. Ragsdale',
            'fallbackText' => 'Portfolio',
            'title' => 'Michael P. Ragsdale',
            'description' => 'Digital Portfolio & Resume. Full Stack Development and Systems Architecture.',
            'buttonProps' => [
              'href' => '/about/michael-ragsdale',
              'text' => 'View Portfolio',
              'variant' => 'primary', 
              'icon' => 'fa-duotone fa-briefcase',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

      <div class="col theme-invert" style="max-width: 400px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png',
            'imgAlt' => 'Engine Room Records',
            'fallbackText' => 'Engine Room Records',
            'title' => 'Engine Room Records',
            'description' => 'The independent record label managing The Stardust Engine and active catalogs.',
            'buttonProps' => [
              'href' => '/engine-room',
              'text' => 'Enter Label',
              'variant' => 'dark', 
              'icon' => 'fa-duotone fa-compact-disc',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>    

      <div class="col" style="max-width: 400px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg',
            'imgAlt' => 'Knox Universe',
            'fallbackText' => 'Knox',
            'title' => 'Literary Universes',
            'description' => 'Explore the sci-fi world of Project: KNOX and the 1980s fantasy of Aethel.',
            'buttonProps' => [
              'href' => '/raggiesoft-books/knox',
              'text' => 'Explore Lore',
              'variant' => 'success', 
              'icon' => 'fa-duotone fa-books',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

       <div class="col" style="max-width: 400px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/family/images/logos/logo-family.png',
            'imgAlt' => 'The RaggieSoft Family',
            'fallbackText' => 'Family',
            'title' => 'The DevOps Family',
            'description' => 'A "Personified DevOps" ecosystem where every script has a name and a face.',
            'buttonProps' => [
              'href' => '/family',
              'text' => 'Meet the Bots',
              'variant' => 'info', 
              'icon' => 'fa-duotone fa-microchip-ai',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

    </div>
  </div>
</section>