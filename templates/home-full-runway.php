<section id="network-spokes" class="py-5 bg-body text-body" aria-labelledby="spokes-title">
  <div class="container-fluid px-0"> <div class="mb-5">
        <div class="d-flex justify-content-between align-items-end mb-3 px-4 px-xxl-5">
            <h2 class="h5 fw-bold text-uppercase text-secondary mb-0">
                <i class="fa-duotone fa-network-wired me-2"></i>Global Directory
            </h2>
        </div>
        <div class="horizontal-scroll-wrapper">
          
          <div class="scroll-card">
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

          <div class="scroll-card theme-invert">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png',
                'imgAlt' => 'Engine Room Records',
                'fallbackText' => 'Engine Room Records',
                'title' => 'Engine Room Records',
                'description' => 'The independent personal brand and label managing my active musical catalogs.',
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

          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/raggiesoft-books/images/logos/oceanview-archives.svg',
                'imgAlt' => 'Ocean View Archives',
                'fallbackText' => 'Archives',
                'title' => 'Ocean View Archives',
                'description' => 'The literary imprint preserving grounded narratives, sci-fi lore, and fantasy sagas.',
                'buttonProps' => [
                  'href' => '/raggiesoft-books',
                  'text' => 'Explore Lore',
                  'variant' => 'warning', 
                  'icon' => 'fa-duotone fa-landmark',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

           <div class="scroll-card">
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

    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-end mb-3 px-4 px-xxl-5">
            <h2 class="h5 fw-bold text-uppercase text-secondary mb-0">
                <i class="fa-duotone fa-guitars me-2"></i>Engine Room Roster
            </h2>
            <a href="/engine-room/artists" class="text-decoration-none text-muted small text-uppercase font-monospace fw-bold hover-primary">
                View All Artists <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="horizontal-scroll-wrapper">
          
          <div class="scroll-card theme-invert">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png', // Or an album cover
                'imgAlt' => 'The Stardust Engine',
                'fallbackText' => 'Stardust',
                'title' => 'The Stardust Engine',
                'description' => '80s Synth-Pop and Progressive Rock pushing the boundaries of the digital frontier.',
                'buttonProps' => [
                  'href' => '/engine-room/artists/stardust-engine',
                  'text' => 'Listen Now',
                  'variant' => 'danger', 
                  'icon' => 'fa-solid fa-rocket-launch',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/placeholder.jpg',
                'imgAlt' => 'Fractured Prisms',
                'fallbackText' => 'Prisms',
                'title' => 'Fractured Prisms',
                'description' => 'A dynamic exploration of sound, blending retro nostalgia with driving modern rhythms.',
                'buttonProps' => [
                  'href' => '/engine-room/artists/fractured-prisms',
                  'text' => 'Listen Now',
                  'variant' => 'info', 
                  'icon' => 'fa-duotone fa-waveform-lines',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-paper-wall/placeholder.jpg',
                'imgAlt' => 'The Paper Wall',
                'fallbackText' => 'Paper Wall',
                'title' => 'The Paper Wall',
                'description' => 'Stripped-down, resonant rock that builds walls of sound from the ground up.',
                'buttonProps' => [
                  'href' => '/engine-room/artists/the-paper-wall',
                  'text' => 'Listen Now',
                  'variant' => 'dark', 
                  'icon' => 'fa-duotone fa-guitar-electric',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

        </div>
    </div>

    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-end mb-3 px-4 px-xxl-5">
            <h2 class="h5 fw-bold text-uppercase text-secondary mb-0">
                <i class="fa-duotone fa-book-open-cover me-2"></i>Active Lore & Collections
            </h2>
            <a href="/raggiesoft-books" class="text-decoration-none text-muted small text-uppercase font-monospace fw-bold hover-primary">
                View Archive <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="horizontal-scroll-wrapper">
          
          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/raggiesoft-books/images/covers/contemporary-placeholder.jpg',
                'imgAlt' => 'Contemporary Fiction',
                'fallbackText' => 'Contemporary',
                'title' => 'Contemporary Fiction',
                'description' => 'Grounded narratives set in coastal Virginia, chronicling fierce loyalty and found families.',
                'buttonProps' => [
                  'href' => '#',
                  'text' => 'Status: Typesetting',
                  'variant' => 'secondary', 
                  'icon' => 'fa-duotone fa-file-dashed-line',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg',
                'imgAlt' => 'Project: KNOX',
                'fallbackText' => 'KNOX',
                'title' => 'Project: KNOX',
                'description' => 'A sprawling sci-fi universe. A family hunts a phantom while evading the Axiom Archival Division.',
                'buttonProps' => [
                  'href' => '/raggiesoft-books/knox',
                  'text' => 'Access Files',
                  'variant' => 'success', 
                  'icon' => 'fa-duotone fa-planet-ringed',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

          <div class="scroll-card">
            <?php
              $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png',
                'imgAlt' => 'The Silver Gauntlet of Aethel',
                'fallbackText' => 'Aethel',
                'title' => 'The Silver Gauntlet of Aethel',
                'description' => 'A love letter to 1980s fantasy adventure. Join the journey of twins Kaelan and Kaela.',
                'buttonProps' => [
                  'href' => '/raggiesoft-books/aethel-saga',
                  'text' => 'Read Saga',
                  'variant' => 'primary', 
                  'icon' => 'fa-duotone fa-sword',
                  'fullWidth' => true
                ]
              ];
              include __DIR__ . '/../includes/components/card.php';
            ?>
          </div>

        </div>
    </div>

  </div>
</section>