<?php
/**
 * RaggieSoft.com - The Global Y-Junction (Root Domain)
 *
 * ARCHITECTURE & CONTEXT:
 * This is the central hub for the entire RaggieSoft network. It acts as a "Y-Junction",
 * allowing the visitor to route between the professional/technical side (The Architect)
 * and the creative/narrative side (Creative Works).
 *
 * Below the Y-Junction split hero, the "Global Subdomain Constellations" directory renders
 * a responsive multi-column grid of Web Awesome (`<wa-card with-media with-footer>`) cards
 * consolidated to match the top-level RaggieSoft Network Menu (Nebulae, Books, Engine Room,
 * Lore, Corporate, StoreTrainer, Michael P. Ragsdale) plus The DevOps Family. Every card
 * displays the destination property's 16:9 OpenGraph (`og:image`) social preview banner.
 *
 * UI/UX & ACCESSIBILITY ARCHITECTURE (WCAG 2.1 AA / Section 508):
 * - Employs a `.split-hero-container` explicitly scoped with `wa-dark` and `data-bs-theme="dark"`
 *   so that Web Awesome `<wa-button>` components and text inside the dark hero panes always
 *   maintain >= 7:1 contrast regardless of whether the visitor's OS is in Light or Dark mode.
 * - Uses a discoverable, responsive 4-column desktop / 2-column tablet / 1-column mobile
 *   grid of `<wa-card>` components (replacing the retired horizontal scroll container).
 * - Respects `prefers-reduced-motion: reduce`, disabling hover zoom, flex expansion, and card
 *   lift animations when reduced motion is requested.
 * - Includes a Schema.org JSON-LD payload for SEO organization and website linking.
 */

$pageTitle = "RaggieSoft™ | The Central Hub";
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
    /* ==========================================================================
     * 1. THE Y-JUNCTION SPLIT HERO (WCAG 2.1 AA High-Contrast Dark Surface)
     * ========================================================================== */
    .split-hero-container {
        min-height: 76vh;
        display: flex;
        flex-direction: column;
        background-color: #070b14;
        color: #ffffff;
    }

    .split-pane {
        position: relative;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.16);
    }

    .pane-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.8s ease;
        z-index: 0;
    }

    .pane-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* 82% opacity guarantees >= 7:1 AAA contrast for foreground text over nebula/starfield art */
        background-color: rgba(4, 7, 14, 0.82);
        transition: background-color 0.5s ease;
        z-index: 1;
    }

    .pane-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #ffffff !important;
        padding: 3rem 1.5rem;
        max-width: 620px;
    }

    /* High-contrast subtitles calibrated specifically for dark hero panes (>= 9.8:1 contrast) */
    .hero-subtitle-architect {
        color: #7dd3fc !important; /* Sky-300: 11.8:1 on #04070e */
        font-weight: 600 !important;
        letter-spacing: 0.08em;
    }

    .hero-subtitle-creative {
        color: #fda4af !important; /* Rose-300: 10.1:1 on #04070e */
        font-weight: 600 !important;
        letter-spacing: 0.08em;
    }

    .hero-lead {
        color: #f1f5f9 !important; /* Slate-100: 17.1:1 on #04070e */
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.95);
    }

    /* High-contrast outlined hero buttons on permanent dark background */
    .split-hero-container wa-button[appearance="outlined"]::part(base),
    .split-hero-container wa-button[appearance="outlined"]::part(button) {
        background-color: rgba(15, 23, 42, 0.85) !important;
        color: #ffffff !important;
        border-color: rgba(255, 255, 255, 0.75) !important;
    }

    .split-hero-container wa-button[appearance="outlined"]:hover::part(base),
    .split-hero-container wa-button[appearance="outlined"]:hover::part(button) {
        background-color: #ffffff !important;
        color: #090d16 !important;
        border-color: #ffffff !important;
    }

    /* Avatar Styling */
    .pane-avatar {
        width: 130px;
        height: 130px;
        object-fit: cover;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.85);
    }

    /* Desktop Hover Dynamics */
    @media (min-width: 992px) {
        .split-hero-container {
            flex-direction: row;
        }
        .split-pane {
            border-bottom: none;
            border-right: 1px solid rgba(255, 255, 255, 0.16);
        }
        .split-pane:last-child {
            border-right: none;
        }
        .split-pane:hover {
            flex: 1.2;
        }
        .split-pane:hover .pane-overlay {
            background-color: rgba(4, 7, 14, 0.72);
        }
        .split-pane:hover .pane-bg {
            transform: scale(1.04);
        }
    }

    .hero-title {
        color: #ffffff !important;
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.95), 0px 1px 3px rgba(0, 0, 0, 1);
    }

    /* ==========================================================================
     * 2. GLOBAL SUBDOMAIN CONSTELLATIONS (<wa-card> Responsive Grid)
     * ========================================================================== */
    .constellation-grid-row {
        --rg-gutter-x: 1.5rem;
        --rg-gutter-y: 1.5rem;
        row-gap: 1.5rem;
    }

    /* Ensure Web Awesome <wa-card> stretches cleanly to equal height across grid columns */
    wa-card.constellation-wa-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.2s ease;
    }

    wa-card.constellation-wa-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 58, 117, 0.14);
    }

    [data-bs-theme="dark"] wa-card.constellation-wa-card:hover {
        box-shadow: 0 12px 28px rgba(56, 189, 248, 0.14);
    }

    wa-card.constellation-wa-card::part(body) {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }

    wa-card.constellation-wa-card::part(footer) {
        margin-top: auto;
    }

    /* WCAG 2.1 AA High-Contrast Tech Stack Pill Badge (>= 8.5:1 in both Light & Dark Mode) */
    .constellation-stack-badge {
        display: inline-block;
        padding: 0.28rem 0.65rem;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        border-radius: 999px;
        background-color: #004a94;
        color: #ffffff;
        border: 1px solid rgba(0, 74, 148, 0.3);
    }

    [data-bs-theme="dark"] .constellation-stack-badge {
        background-color: #162a45;
        color: #bae6fd;
        border-color: rgba(56, 189, 248, 0.35);
    }

    @media (prefers-color-scheme: dark) {
        :root:not([data-bs-theme="light"]) .constellation-stack-badge {
            background-color: #162a45;
            color: #bae6fd;
            border-color: rgba(56, 189, 248, 0.35);
        }
    }

    /* Responsive 4-column XL layout for the 8 Constellation Cards (2 clean rows of 4 on desktop) */
    @media (min-width: 1200px) {
        .col-xl-3-constellation {
            flex: 0 0 auto;
            width: 25%;
        }
    }

    /* Accessibility: Reduced Motion Override */
    @media (prefers-reduced-motion: reduce) {
        .split-pane,
        .pane-bg,
        .pane-overlay,
        wa-card.constellation-wa-card {
            transition: none !important;
            transform: none !important;
        }
        @media (min-width: 992px) {
            .split-pane:hover {
                flex: 1 !important;
            }
            .split-pane:hover .pane-bg {
                transform: none !important;
            }
        }
    }
</style>

<section class="split-hero-container w-100 wa-dark" data-bs-theme="dark" aria-label="Main Navigation Routing">
    
    <div class="split-pane bg-dark">
        <div class="pane-bg" style="background-image: url('<?php echo $cdnBaseUrl; ?>/common/patterns/stars-transparent.png'); background-color: #0a0e14; background-size: auto;"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logos/logo-michael.png" alt="Michael P. Ragsdale" class="rounded-circle border border-primary border-3 pane-avatar mb-3">
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">The Architect</h1>
            <h2 class="h5 hero-subtitle-architect mb-4 text-uppercase">Infrastructure &amp; Operations</h2>
            <p class="lead hero-lead mb-4">
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
            <h2 class="h5 hero-subtitle-creative mb-4 text-uppercase">Music &amp; Narrative Lore</h2>
            <p class="lead hero-lead mb-4">
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
    <wa-callout variant="brand" appearance="outlined" class="shadow-sm rounded-0 d-block">
        <i slot="icon" class="fa-duotone fa-robot-astromech text-primary"></i>
        <div>
            <h2 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-body">Transparency Notice</h2>
            <p class="mb-0 small text-body">
                RaggieSoft&trade; is a multimedia storytelling and world-building project. Certain music, artwork, and narrative elements across this network are created with the assistance of Artificial Intelligence. 
                <a href="/about/ai-disclaimer" class="fw-bold text-primary border-bottom border-primary text-decoration-none">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </wa-callout>
</div>

<section id="network-spokes" class="py-5 bg-body text-body" aria-labelledby="spokes-title">
  <div class="container">
    
    <div class="text-center border-bottom pb-3 mb-4">
        <h2 id="spokes-title" class="h4 fw-bold text-uppercase text-body mb-1">
            <i class="fa-duotone fa-network-wired me-2 text-primary"></i>Global Subdomain Constellations
        </h2>
        <p class="small text-body-secondary mb-0">
            Direct routing across the RaggieSoft multi-stack ecosystem &mdash; aligned with the global network bar above.
        </p>
    </div>

    <?php
      /**
       * Consolidated Network Constellations Directory
       * Mirrors the top-level RaggieSoft Network Menu + The DevOps Family,
       * displaying each property's official 16:9 OpenGraph (`og:image`) artwork inside
       * a standard Web Awesome `<wa-card with-media with-footer>` component.
       */
      $constellations = [
        [
          'imgSrc' => $cdnBaseUrl . '/stardust-engine/images/stardust-engine-hero.jpg',
          'imgAlt' => 'RaggieSoft Nebulae Observatory 16:9 OpenGraph Preview',
          'fallbackText' => 'Nebulae Observatory',
          'aspectRatio' => '16:9',
          'badge' => 'Vanilla TS • Interactive Map',
          'title' => 'Nebulae Observatory',
          'description' => 'Interactive 9-constellation topology mapping every subdomain, tech stack, and decoupled vault at nebulae.raggiesoft.com.',
          'buttonProps' => [
            'href' => 'https://nebulae.raggiesoft.com/',
            'text' => 'Explore Nebulae',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-galaxy',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-books/images/og/library-og.jpg',
          'imgAlt' => 'Ocean View Archives Book Reader 16:9 OpenGraph Preview',
          'fallbackText' => 'Ocean View Archives',
          'aspectRatio' => '16:9',
          'badge' => 'PHP 8.5 • Stardust Library SPA',
          'title' => 'Ocean View Archives',
          'description' => 'The literary imprint and accessible e-book reader preserving CC BY-SA 4.0 grounded novels and fantasy sagas at books.raggiesoft.com.',
          'buttonProps' => [
            'href' => 'https://books.raggiesoft.com/',
            'text' => 'Read Novels',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-book-open-cover',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/engine-room-records/images/og/engine-room-og.jpg',
          'imgAlt' => 'Engine Room Records 16:9 OpenGraph Preview',
          'fallbackText' => 'Engine Room Records',
          'aspectRatio' => '16:9',
          'badge' => 'Astro 6 • SvelteKit 2 • Nuxt 4',
          'title' => 'Engine Room Records',
          'description' => 'The record label portal, studio engineering documentation, and artist roster—plus gapless streaming in The Listening Room and The Stardust Engine archive.',
          'buttonProps' => [
            'href' => 'https://engineroom.raggiesoft.com/',
            'text' => 'Enter Label Portal',
            'variant' => 'danger',
            'icon' => 'fa-duotone fa-compact-disc',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://music.raggiesoft.com/',
              'text' => 'Listening Room',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'fa-duotone fa-headphones'
            ],
            [
              'href' => 'https://stardust.raggiesoft.com/',
              'text' => 'Stardust Engine',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'fa-duotone fa-rocket-launch'
            ]
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-lore/images/og/default-og.jpg',
          'imgAlt' => 'RaggieSoft Lore Encyclopedia 16:9 OpenGraph Preview',
          'fallbackText' => 'Lore Encyclopedia',
          'aspectRatio' => '16:9',
          'badge' => 'Next.js 16 • React 19 • Tailwind v4',
          'title' => 'Lore Encyclopedia',
          'description' => 'Cross-referenced narrative encyclopedia indexing characters, universities (CPI), transit agencies, and timelines at lore.raggiesoft.com.',
          'buttonProps' => [
            'href' => 'https://lore.raggiesoft.com/',
            'text' => 'Browse Encyclopedia',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-scroll-old',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-corporate/images/og/raggiesoft-corporate-og.jpg',
          'imgAlt' => 'RaggieSoft Media Corporate Hub 16:9 OpenGraph Preview',
          'fallbackText' => 'RaggieSoft Media',
          'aspectRatio' => '16:9',
          'badge' => 'Bootstrap 5.3.8 • Static SSG',
          'title' => 'RaggieSoft Media',
          'description' => 'Real-world B2B corporate hub housing master & commercial sync licensing, open-source project portals, and IP governance at corporate.raggiesoft.com.',
          'buttonProps' => [
            'href' => 'https://corporate.raggiesoft.com/',
            'text' => 'Corporate Portal',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-building-columns',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-corporate/images/projects/code-architecture-dark-aero.jpg',
          'imgAlt' => 'RaggieSoft StoreTrainer 16:9 OpenGraph Preview',
          'fallbackText' => 'StoreTrainer',
          'aspectRatio' => '16:9',
          'badge' => 'VB6 • .NET • NSIS Win32 Utility',
          'title' => 'RaggieSoft StoreTrainer',
          'description' => 'Hand-written Win32 desktop utility built in Windows 2000 SP4 to index and launch PC games alongside their trainers and CLI switches (Win95–Win11).',
          'buttonProps' => [
            'href' => 'https://storetrainer.raggiesoft.com/',
            'text' => 'View StoreTrainer',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-floppy-disk',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => 'https://michaelpragsdale.com/og-image.jpg',
          'imgAlt' => 'Michael P. Ragsdale Executive Portfolio 16:9 OpenGraph Preview',
          'fallbackText' => 'Michael P. Ragsdale',
          'aspectRatio' => '16:9',
          'badge' => 'Angular 19 • Zoneless Signals',
          'title' => 'Michael P. Ragsdale',
          'description' => 'Executive Systems Architect & Section 508 Compliance Engineer portfolio, multi-stack architecture matrix, and technical dossier at michaelpragsdale.com.',
          'buttonProps' => [
            'href' => 'https://michaelpragsdale.com',
            'text' => 'View Portfolio',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-briefcase',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/family/images/wide-angle/amanda-elara-atmospheric-wide-angle.jpg',
          'imgAlt' => 'The RaggieSoft DevOps Family 16:9 Preview',
          'fallbackText' => 'The DevOps Family',
          'aspectRatio' => '16:9',
          'badge' => 'PHP 8.5 • Bash • Rclone CI/CD',
          'title' => 'The DevOps Family',
          'description' => 'Our "Personified DevOps" engineering ecosystem—where Amanda, Elara, Jenna, Sarah, and Harper automate routing, builds, and CDN deployments.',
          'buttonProps' => [
            'href' => '/family',
            'text' => 'Meet the Bots',
            'variant' => 'brand',
            'icon' => 'fa-duotone fa-microchip-ai',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ]
      ];
    ?>

    <div class="row constellation-grid-row">
      <?php foreach ($constellations as $cardProps): ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3-constellation d-flex">
          <?php
            $props = $cardProps;
            include __DIR__ . '/../includes/components/card.php';
          ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-5">
      <wa-card appearance="outlined" class="shadow-sm">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 p-2">
          <div>
            <span class="constellation-stack-badge mb-2">Stardust Engine CMS (Elara) &bull; Open-Source MIT Framework</span>
            <h3 class="h5 fw-bold mb-1 text-body">Clone the Zero-Database CMS Powering This Hub</h3>
            <p class="mb-0 small text-body-secondary">
              The Stardust Engine CMS combines native PHP 8.5 flat-file JSON routing with the Elara Vanilla JS SPA router for instant page transitions and zero SQL surface area.
            </p>
          </div>
          <div class="flex-shrink-0 d-flex flex-wrap gap-2">
            <wa-button variant="brand" appearance="accent" href="https://github.com/raggiesoft/stardust-engine-cms">
              <i slot="start" class="fa-brands fa-github"></i> View on GitHub
            </wa-button>
            <wa-button variant="neutral" appearance="outlined" href="https://corporate.raggiesoft.com/open-source/stardust-engine">
              <i slot="start" class="fa-duotone fa-book-sparkles"></i> Architecture Docs
            </wa-button>
          </div>
        </div>
      </wa-card>
    </div>

  </div>
</section>