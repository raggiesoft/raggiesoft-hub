<section
  class="position-relative d-flex align-items-center justify-content-center text-center text-white p-4"
  style="background-image: url('https://assets.raggiesoft.com/stardust-engine/images/stardust-nebula.jpg'); background-size: cover; background-position: center center; min-height: 50vh;"
  aria-labelledby="hub-hero-title">

  <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="position-relative z-1 d-flex flex-column align-items-center">
    <h1 id="hub-hero-title" class="display-3 fw-bold text-uppercase brand-font" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">
      RaggieSoft
    </h1>
    <h2 class="mt-3 fs-4 fw-light" style="max-width: 40rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
      The Central Hub
    </h2>
    <p class="lead mt-2 mb-4">Code. Music. Narrative.</p>
    
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

<section
  class="position-relative d-flex align-items-center justify-content-center text-center text-white p-4"
  style="background-image: url('https://assets.raggiesoft.com/stardust-engine/images/stardust-nebula.jpg'); background-size: cover; background-position: center center; min-height: 50vh;"
  aria-labelledby="hub-hero-title">

  <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="position-relative z-1 d-flex flex-column align-items-center">
    <h1 id="hub-hero-title" class="display-3 fw-bold text-uppercase brand-font" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">
      RaggieSoft
    </h1>
    <h2 class="mt-3 fs-4 fw-light" style="max-width: 40rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
      The Central Hub
    </h2>
    <p class="lead mt-2 mb-4">Code. Music. Narrative.</p>
    
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

<section id="network-spokes" class="py-5 bg-body-tertiary" aria-labelledby="spokes-title">
  <div class="container-lg">
    
    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">

      <div class="col">
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

      <div class="col">
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

      <div class="col">
        <?php
          $props = [
            'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/logo/stardust-engine-logo.png',
            'imgAlt' => 'The Stardust Engine Band',
            'fallbackText' => 'Stardust Engine',
            'title' => 'The Stardust Engine',
            'description' => 'A multimedia narrative project centering on a fictional 80s synth-rock band. Explore their history, albums, and the corporate mystery behind them.',
            'buttonProps' => [
              'href' => '/engine-room/artists/stardust-engine',
              'text' => 'Enter The Engine Room',
              'variant' => 'dark', 
              'icon' => 'fa-duotone fa-rocket-launch',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

      <div class="col">
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

       <div class="col">
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