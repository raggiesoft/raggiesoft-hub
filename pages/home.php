<?php
/**
 * RaggieSoft.com - The Global Y-Junction (Root Domain)
 *
 * ARCHITECTURE & CONTEXT:
 * This is the central hub for the entire RaggieSoft network. It acts as a "Y-Junction",
 * forcing the user to choose between the professional/technical side (The Architect) 
 * and the creative/narrative side (Creative Works).
 * 
 * It includes a global directory represented as a horizontal scroll carousel, linking 
 * to major network spokes (Engine Room Records, The Stardust Engine, Crimson Node, 
 * Ocean View Archives, The DevOps Family).
 *
 * UI/UX ARCHITECTURE:
 * - Employs a custom `.split-hero-container` utilizing Flexbox to create two dynamic,
 *   hover-expanding panes on desktop, which stack vertically on mobile.
 * - Uses responsive `.scroll-card` elements in a `.horizontal-scroll-wrapper` to 
 *   create a Netflix-style horizontal sliding carousel for network spokes.
 * - Respects `prefers-reduced-motion` for accessibility, disabling the split-pane 
 *   animations for sensitive users.
 * - Includes a Schema.org JSON-LD payload for SEO organization and website linking.
 *
 * MAINTENANCE NOTES:
 * - When adding a new "Spoke" to the network, append a new `.scroll-card` block 
 *   in the `#network-spokes` section using the `card.php` component include.
 * - Ensure `$cdnBaseUrl` is properly configured to serve background images and avatars.
 * - Do NOT alter the AI transparency notice without legal/policy review.
 */

// pages/home.php
// The RaggieSoft Global Y-Junction (Root Domain)

$pageTitle = "RaggieSoft&trade; | The Central Hub";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://raggiesoft.com/#organization",
      "name": "RaggieSoft",
      "url": "https://raggiesoft.com/",
      "logo": "<?php echo $cdnBaseUrl; ?>/common/logos/raggiesoft-logo.png",
      "description": "The central hub for the code, music, and narrative universes of Michael P. Ragsdale.",
      "founder": {
        "@type": "Person",
        "name": "Michael P. Ragsdale"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://raggiesoft.com/#website",
      "url": "https://raggiesoft.com/",
      "name": "RaggieSoft",
      "publisher": {"@id": "https://raggiesoft.com/#organization"}
    }
  ]
}
</script>

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
        color: #ffffff !important;
        padding: 3rem 1.5rem;
        max-width: 600px;
    }

    /* Avatar Styling */
    .pane-avatar {
        width: 130px;
        height: 130px;
        object-fit: cover;
        box-shadow: 0 8px 20px rgba(0,0,0,0.8);
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

    /* Accessibility: Reduced Motion Override */
    @media (prefers-reduced-motion: reduce) {
        .split-pane, .pane-bg, .pane-overlay {
            transition: none !important;
            transform: none !important;
        }
        @media (min-width: 992px) {
            .split-pane:hover { flex: 1 !important; }
            .split-pane:hover .pane-bg { transform: none !important; }
        }
    }

    .hero-title { text-shadow: 0px 4px 15px rgba(0,0,0,0.9), 0px 1px 3px rgba(0,0,0,1); }
    .hero-text { text-shadow: 0px 2px 8px rgba(0,0,0,0.9); }

    /* Dark Mode Override for Logos in the Directory */
    [data-bs-theme="dark"] .theme-invert img {
        filter: invert(1) grayscale(100%) !important; 
        mix-blend-mode: normal !important; 
        opacity: 0.9 !important; 
    }

    /* --- HORIZONTAL SCROLL CAROUSEL (The Netflix UI) --- */
    .horizontal-scroll-wrapper {
        display: flex;
        overflow-x: auto;
        gap: 1.5rem;
        padding-bottom: 2rem;
        padding-left: 1rem;
        padding-right: 1rem;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Hide scrollbar Firefox */
    }
    
    .horizontal-scroll-wrapper::-webkit-scrollbar {
        display: none; /* Hide scrollbar Chrome/Safari/Edge */
    }

    .scroll-card {
        flex: 0 0 85%; /* Shows 85% of card on mobile, forcing the next card to peek */
        scroll-snap-align: center;
        max-width: 400px;
    }

    @media (min-width: 768px) {
        .scroll-card { flex: 0 0 45%; }
    }

    @media (min-width: 992px) {
        .scroll-card { flex: 0 0 30%; }
        .horizontal-scroll-wrapper { padding-left: 0; padding-right: 0; justify-content: center; } /* Centers on large screens if items fit */
    }
</style>

<section class="split-hero-container w-100" aria-label="Main Navigation Routing">
    
    <div class="split-pane bg-dark">
        <div class="pane-bg" style="background-image: url('<?php echo $cdnBaseUrl; ?>/common/patterns/stars-transparent.png'); background-color: #0a0e14; background-size: auto;"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logos/logo-michael.png" alt="Michael P. Ragsdale" class="rounded-circle border border-primary border-3 pane-avatar mb-3">
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">The Architect</h1>
            <h2 class="h5 fw-light text-primary mb-4 hero-text text-uppercase letter-spacing-1">Infrastructure & Operations</h2>
            <p class="lead hero-text text-white-75 mb-4">
                Systems architecture, open-source development, and the professional portfolio of Michael P. Ragsdale.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center mt-auto">
                <wa-button variant="brand" appearance="accent" size="large" href="https://michaelpragsdale.com" class="rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i slot="start" class="fa-duotone fa-user-visor"></i> View Portfolio
                </wa-button>
                <wa-button variant="neutral" appearance="outlined" size="large" href="https://corporate.raggiesoft.com/" class="rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i slot="start" class="fa-solid fa-building"></i> RaggieSoft Media
                </wa-button>
            </div>
        </div>
    </div>

    <div class="split-pane bg-black">
        <div class="pane-bg" style="background-image: url('<?php echo $cdnBaseUrl; ?>/stardust-engine/images/stardust-nebula.jpg');"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <img src="<?php echo $cdnBaseUrl; ?>/family/images/logos/logo-family.png" alt="Michael and Paige" class="rounded-circle border border-danger border-3 pane-avatar mb-3">
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">Creative Works</h1>
            <h2 class="h5 fw-light text-danger mb-4 hero-text text-uppercase letter-spacing-1">Music & Narrative Lore</h2>
            <p class="lead hero-text text-white-75 mb-4">
                100% independent audio production and CC BY-SA 4.0 literary universes managed via private imprints.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center mt-auto">
                <wa-button variant="danger" appearance="accent" size="large" href="https://engineroom.raggiesoft.com/" class="rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i slot="start" class="fa-solid fa-compact-disc"></i> Engine Room Records
                </wa-button>
                <wa-button variant="neutral" appearance="outlined" size="large" href="https://books.raggiesoft.com/" class="rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i slot="start" class="fa-solid fa-landmark"></i> Ocean View Archives
                </wa-button>
            </div>
        </div>
    </div>

</section>

<div class="container mt-4 mb-2">
    <wa-callout variant="neutral" appearance="accent" class="shadow-sm rounded-0 d-block">
        <i slot="icon" class="fa-duotone fa-robot-astromech text-info"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-body-emphasis">Transparency Notice</h4>
            <p class="mb-0 small text-body">
                RaggieSoft&trade; is a multimedia storytelling and world-building project. Certain music, artwork, and narrative elements across this network are created with the assistance of Artificial Intelligence. 
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </wa-callout>
</div>

<section id="network-spokes" class="py-5 bg-body text-body" aria-labelledby="spokes-title">
  <div class="container-fluid px-xxl-5">
    
    <div class="text-center border-bottom border-secondary-subtle pb-3 mb-5 px-4">
        <h2 id="spokes-title" class="h4 fw-bold text-uppercase text-secondary letter-spacing-1">
            <i class="fa-duotone fa-network-wired me-2"></i>Global Subdomain Constellations
        </h2>
    </div>

    <div class="horizontal-scroll-wrapper">
      
      <div class="scroll-card">
        <?php
          $props = [
            'imgSrc' => $cdnBaseUrl . '/raggiesoft-corporate/images/logos/logo-michael.png',
            'imgAlt' => 'Michael P. Ragsdale',
            'fallbackText' => 'Portfolio',
            'title' => 'Michael P. Ragsdale',
            'description' => 'Executive Systems Architect & Section 508 Compliance Dossier at michaelpragsdale.com.',
            'buttonProps' => [
              'href' => 'https://michaelpragsdale.com',
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
            'imgSrc' => $cdnBaseUrl . '/engine-room-records/images/logos/engine-room-records-logo.png',
            'imgAlt' => 'Engine Room Records',
            'fallbackText' => 'Engine Room Records',
            'title' => 'Engine Room Records',
            'description' => 'The standalone Astro 6 record label portal & corporate dossier at engineroom.raggiesoft.com.',
            'buttonProps' => [
              'href' => 'https://engineroom.raggiesoft.com/',
              'text' => 'Enter Label',
              'variant' => 'dark', 
              'icon' => 'fa-duotone fa-compact-disc',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>    

      <!-- THE STARDUST ENGINE -->
      <div class="scroll-card">
        <?php
          $props = [
            'imgSrc' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/band-logo.png',
            'imgAlt' => 'The Stardust Engine',
            'fallbackText' => 'Stardust Engine',
            'title' => 'The Stardust Engine',
            'description' => 'The standalone Nuxt 4 + Vue 3 cosmic band archive & legal vault at stardust.raggiesoft.com.',
            'buttonProps' => [
              'href' => 'https://stardust.raggiesoft.com/',
              'text' => 'Access Archive',
              'variant' => 'primary', 
              'icon' => 'fa-duotone fa-turntable',
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>

      <!-- THE LISTENING ROOM -->
      <div class="scroll-card">
        <?php
          $props = [
            'imgSrc' => $cdnBaseUrl . '/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg',
            'imgAlt' => 'The Listening Room',
            'fallbackText' => 'Listening Room',
            'title' => 'The Listening Room',
            'description' => 'SvelteKit 2 + Svelte 5 Runes gapless audio streaming & CC BY-SA 4.0 downloads at music.raggiesoft.com.',
            'buttonProps' => [
              'href' => 'https://music.raggiesoft.com/',
              'text' => 'Stream Catalog',
              'variant' => 'danger', 
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
            'imgSrc' => $cdnBaseUrl . '/raggiesoft-books/images/logos/oceanview-archives.svg',
            'imgAlt' => 'Ocean View Archives',
            'fallbackText' => 'Archives',
            'title' => 'Ocean View Archives',
            'description' => 'The literary imprint & book reader preserving grounded narratives and fantasy sagas at books.raggiesoft.com.',
            'buttonProps' => [
              'href' => 'https://books.raggiesoft.com/',
              'text' => 'Read Novels',
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
            'imgSrc' => $cdnBaseUrl . '/family/images/logos/logo-family.png',
            'imgAlt' => 'The RaggieSoft Family',
            'fallbackText' => 'Family',
            'title' => 'The DevOps Family',
            'description' => 'A "Personified DevOps" ecosystem where every script has a name and a face, powered by Elara.',
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

    <div class="container mt-4">
      <wa-card class="shadow-sm border-0">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 p-2">
          <div>
            <span class="badge bg-primary text-uppercase mb-2">Stardust Engine CMS (Elara) &bull; Web Awesome Pro</span>
            <h3 class="h5 fw-bold mb-1">Explore All 9 Constellations in the RaggieSoft Nebulae Observatory</h3>
            <p class="mb-0 small text-body-secondary">
              View the interactive multi-stack network topology mapping PHP 8.5, SvelteKit 2, Astro 6, Nuxt 4, Next.js 16, Angular 19, Bootstrap 5.3.8, and Vanilla TypeScript across <code>*.raggiesoft.com</code>.
            </p>
          </div>
          <div class="flex-shrink-0">
            <wa-button variant="brand" appearance="accent" href="https://nebulae.raggiesoft.com/">
              <i slot="start" class="fa-duotone fa-galaxy"></i> Launch Nebulae Sitemap
            </wa-button>
          </div>
        </div>
      </wa-card>
    </div>
  </div>
</section>