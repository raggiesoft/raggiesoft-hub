<style>
/* Dark Mode Override for Logos */
    [data-bs-theme="dark"] .theme-invert img {
        /* 1. Invert colors: Turns black pixels to white */
        filter: invert(1) grayscale(100%) !important; 
        
        /* 2. Reset Blend Mode: 'Multiply' hides white, so we must switch to 'Normal' or 'Screen' */
        mix-blend-mode: normal !important; 
        
        /* 3. Optional: Bump opacity slightly for better contrast on dark backgrounds */
        opacity: 0.9 !important; 
    }
</style>
<section
  class="position-relative d-flex align-items-center justify-content-center text-center text-white p-4"
  style="background-image: url('https://assets.raggiesoft.com/stardust-engine/images/stardust-nebula.jpg'); background-size: cover; background-position: center center; min-height: 50vh;"
  aria-labelledby="hub-hero-title">

  <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="position-relative z-1 d-flex flex-column align-items-center">
    
    <h1 id="hub-hero-title" class="display-3 fw-bold text-uppercase brand-font" 
        style="text-shadow: 2px 2px 4px rgba(0,0,0,0.6); color: #ffffff !important;">
      RaggieSoft
    </h1>
    
    <h2 class="mt-3 fs-4 fw-light" 
        style="max-width: 40rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.8); color: #ffffff !important;">
      The Central Hub
    </h2>
    
    <p class="lead mt-2 mb-4" style="color: #ffffff !important;">
        Code. Music. Narrative.
    </p>
    
    <div>
        <?php
        $props = [
          'href' => '#network-spokes',
          'text' => 'Enter the Network',
          'variant' => 'primary', 
          'icon' => 'fa-duotone fa-arrow-down',
          'iconPosition' => 'before',
          'size' => 'large'
        ];
        include __DIR__ . '/../includes/components/button.php';
      ?>
    </div>
  </div>
</section>
<section class="bg-black text-white py-5 border-bottom border-danger border-5" aria-labelledby="hard-reset-launch">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 order-2 order-lg-1">
                <span class="badge bg-danger text-uppercase letter-spacing-2 mb-3 px-3 py-2 border border-danger">
                    <i class="fa-duotone fa-sparkles me-2"></i>Out Now
                </span>
                
                <h2 id="hard-reset-launch" class="display-3 fw-bold text-uppercase mb-1" style="font-family: 'Impact', sans-serif;">
                    Hard Reset
                </h2>
                <p class="h4 text-warning mb-4 fw-light">The 1997 Commercial Comeback.</p>
                
                <p class="lead text-white-75 mb-4">
                    Experience the album that broke the industry cartel. 16 tracks of pure, uncompromised space-rock. No corporate oversight. No safety nets. Just the Engine and the Galaxy.
                </p>
                
                <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
                    <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="btn btn-danger btn-lg text-uppercase fw-bold px-4 rounded-pill shadow-lg">
                        <i class="fa-duotone fa-compact-disc me-2"></i> Listen & Download
                    </a>
                </div>
                
                <div class="d-flex align-items-center p-3 bg-dark bg-opacity-50 border border-secondary rounded">
                    <div class="me-3 text-white-50">
                        <i class="fa-brands fa-creative-commons fa-2x"></i>
                        <i class="fa-brands fa-creative-commons-by fa-2x mx-1"></i>
                        <i class="fa-brands fa-creative-commons-sa fa-2x"></i>
                    </div>
                    <div class="small font-monospace text-white-75">
                        <strong class="text-success text-uppercase">100% Free Download</strong><br>
                        All tracks released under <a href="/about/license" class="text-info text-decoration-none border-bottom border-info">CC BY-SA 4.0</a>.
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="position-relative d-inline-block">
                    <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 bg-danger rounded-circle" style="filter: blur(70px); opacity: 0.4; z-index: 0;"></div>
                    
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" 
                         alt="Hard Reset Album Art - The Stardust Engine" 
                         class="img-fluid rounded position-relative z-1 shadow-lg" 
                         style="max-width: 450px; border: 1px solid #333;">
                </div>
            </div>

        </div>
    </div>
</section>
<section id="network-spokes" class="py-5 bg-body-tertiary" aria-labelledby="spokes-title">
  <div class="container-fluid px-4 px-xxl-5">
    
    <div class="row g-4 row-cols-1 row-cols-md-2 justify-content-center mb-4">

      <div class="col" style="max-width: 600px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/portfolio/images/logos/logo-michael.png',
            'imgAlt' => 'Michael P. Ragsdale',
            'fallbackText' => 'Portfolio',
            'title' => 'Michael P. Ragsdale',
            'description' => 'Digital Portfolio & Resume. Full Stack Development, Project Management, and Creative Writing. The professional face of RaggieSoft.',
            'buttonProps' => [
              'href' => '/about/michael-ragsdale',
              'text' => 'View Portfolio',
              'variant' => 'secondary', 
              'icon' => 'fa-duotone fa-briefcase',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

      <div class="col" style="max-width: 600px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/family/images/logos/logo-family.png',
            'imgAlt' => 'The RaggieSoft Family',
            'fallbackText' => 'Family',
            'title' => 'The RaggieSoft Family',
            'description' => 'A "Personified DevOps" ecosystem where every server and script has a name, a face, and a purpose. Meet the constructs who run the code.',
            'buttonProps' => [
              'href' => '/family',
              'text' => 'Meet the Family',
              'variant' => 'info', // Matches Paige/Safe Person vibe
              'icon' => 'fa-duotone fa-people-group',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>
      
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
      <div class="col theme-invert" style="max-width: 500px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png',
            'imgAlt' => 'Engine Room Records',
            'fallbackText' => 'Engine Room Records',
            'title' => 'Engine Room Records',
            'description' => 'A fictional record label that hosts multiple bands.',
            'buttonProps' => [
              'href' => '/engine-room',
              'text' => 'Enter The Engine Room',
              'variant' => 'dark', 
              'icon' => 'fa-duotone fa-rocket-launch',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>    
      <div class="col" style="max-width: 500px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png',
            'imgAlt' => 'The Stardust Engine Band',
            'fallbackText' => 'Stardust Engine',
            'title' => 'The Stardust Engine',
            'description' => 'A multimedia narrative project centering on a fictional 80s synth-rock band. Explore their history, albums, and the corporate mystery behind them.',
            'buttonProps' => [
              'href' => '/engine-room/artists/stardust-engine',
              'text' => 'Go on a Space Flight Journey',
              'variant' => 'dark', 
              'icon' => 'fa-duotone fa-rocket-launch',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

      <div class="col" style="max-width: 500px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png', 
            'imgAlt' => 'The Silver Gauntlet of Aethel',
            'fallbackText' => 'Aethel',
            'title' => 'The Silver Gauntlet of Aethel',
            'description' => 'A love letter to 1980s fantasy adventure. Follow the journey of twins Kaelan and Kaela in a world of magic, danger, and retro nostalgia.',
            'buttonProps' => [
              'href' => '/raggiesoft-books/aethel-saga',
              'text' => 'Read the Saga',
              'variant' => 'primary',
              'icon' => 'fa-duotone fa-sword',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

       <div class="col" style="max-width: 500px;">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg',
            'imgAlt' => 'Knox Universe',
            'fallbackText' => 'Knox',
            'title' => 'Project: KNOX',
            'description' => 'A sci-fi narrative universe. On a planet of crushing gravity, a family hunts a phantom while evading the monolithic Axiom corporation.',
            'buttonProps' => [
              'href' => '/raggiesoft-books/knox',
              'text' => 'Explore Knox',
              'variant' => 'success', 
              'icon' => 'fa-duotone fa-leaf',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

    </div>
  </div>
</section>

<section class="py-5" aria-labelledby="about-hub-title">
  <div class="container" style="max-width: 45rem;">
    <div class="text-center">
        <h2 id="about-hub-title" class="display-6 fw-bold mb-4">
        About the Network
        </h2>
        <p class="fs-5 mb-3 text-body-secondary">
        <strong>RaggieSoft.com</strong> serves as the central junction for the creative and professional works of Michael P. Ragsdale. 
        </p>
        <p class="fs-5 text-body-secondary">
        Whether you are here to audit the corporate records of the <strong>Stardust Engine</strong>, explore the gravity-crushed jungles of <strong>Knox</strong>, or review professional qualifications, all paths start here.
        </p>
    </div>
  </div>
</section>