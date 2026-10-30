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
 * a responsive multi-column grid of DaisyUI 5 (`.card`) cards
 * consolidated to match the top-level RaggieSoft Network Menu (Nebulae, Books, Engine Room,
 * Lore, Corporate, StoreTrainer, Michael P. Ragsdale) plus The DevOps Family. Every card
 * displays the destination property's 16:9 OpenGraph (`og:image`) social preview banner.
 *
 * UI/UX & ACCESSIBILITY ARCHITECTURE (WCAG 2.1 AA / Section 508):
 * - Employs a `.split-hero-container` explicitly scoped with `data-theme="dark"` and `data-bs-theme="dark"`
 *   so that DaisyUI `.btn` components and text inside the dark hero panes always
 *   maintain >= 7:1 contrast regardless of whether the visitor's OS is in Light or Dark mode.
 * - Uses a discoverable, responsive 4-column desktop / 2-column tablet / 1-column mobile
 *   grid of `.card` components (replacing the retired horizontal scroll container).
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
    .split-hero-container .btn-outline {
        background-color: rgba(15, 23, 42, 0.85) !important;
        color: #ffffff !important;
        border-color: rgba(255, 255, 255, 0.75) !important;
    }

    .split-hero-container .btn-outline:hover {
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
     * 2. GLOBAL SUBDOMAIN CONSTELLATIONS (DaisyUI .card Responsive Grid)
     * ========================================================================== */
    .constellation-grid-row {
        --rg-gutter-x: 1.5rem;
        --rg-gutter-y: 1.5rem;
        row-gap: 1.5rem;
    }

    /* Ensure DaisyUI .card stretches cleanly to equal height across grid columns */
    .card.constellation-wa-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.2s ease;
    }

    .card.constellation-wa-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 58, 117, 0.14);
    }

    [data-bs-theme="dark"] .card.constellation-wa-card:hover {
        box-shadow: 0 12px 28px rgba(56, 189, 248, 0.14);
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
        .card.constellation-wa-card {
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
                <a href="https://michaelpragsdale.com" class="btn btn-primary btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="ph-duotone ph-user-focus" aria-hidden="true"></i> View Portfolio
                </a>
                <a href="https://corporate.raggiesoft.com/" class="btn btn-neutral btn-outline btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i class="ph-duotone ph-building" aria-hidden="true"></i> RaggieSoft Media
                </a>
            </div>
        </div>
    </div>

    <div class="split-pane bg-black">
        <div class="pane-bg" style="background-image: url('<?php echo $cdnBaseUrl; ?>/stardust-engine/images/stardust-nebula.jpg');"></div>
        <div class="pane-overlay"></div>
        
        <div class="pane-content d-flex flex-column align-items-center h-100 justify-content-center">
            <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-lore/family/images/logos/logo-family.png" alt="Michael and Paige" class="rounded-circle border border-danger border-3 pane-avatar mb-3">
            <h1 class="display-4 fw-bold text-uppercase brand-font hero-title mb-2">Creative Works</h1>
            <h2 class="h5 hero-subtitle-creative mb-4 text-uppercase">Music &amp; Narrative Lore</h2>
            <p class="lead hero-lead mb-4">
                100% independent audio production and CC BY-SA 4.0 literary universes managed via private imprints.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center mt-auto">
                <a href="https://engineroom.raggiesoft.com/" class="btn btn-error btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i  class="ph-duotone ph-disc"></i> Engine Room Records
                </a>
                <a href="https://books.raggiesoft.com/" class="btn btn-neutral btn-outline btn-lg rounded-0 fw-bold px-4 shadow-sm text-uppercase">
                    <i  class="ph-duotone ph-bank"></i> Ocean View Archives
                </a>
            </div>
        </div>
    </div>

</section>

<div class="container mt-4 mb-2">
    <?php
    /**
     * AUTO-EXPIRING 30-DAY IN MEMORIAM CALLOUT (Through November 28, 2026)
     * Automatically hides itself on 2026-11-29 and beyond even if not manually removed.
     */
    if (date('Y-m-d') <= '2026-11-28'):
    ?>
    <div class="card mb-3 border shadow-sm" style="background: linear-gradient(90deg, #040711 0%, #0b132b 50%, #040711 100%); border-color: rgba(251, 191, 36, 0.55) !important; color: #f8fafc;" data-bs-theme="dark">
        <div class="card-body py-3 px-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <div class="small fw-bold text-uppercase mb-1" style="color: #fde68a; letter-spacing: 0.06em;">
                    <i class="ph-duotone ph-shooting-star me-1" aria-hidden="true"></i> Second Star to the Right &bull; In Memoriam (1940&ndash;2026)
                </div>
                <p class="mb-0 small" style="color: #e2e8f0;">
                    Honoring <strong>Sir Patrick Stewart</strong> (July 13, 1940 &ndash; October 28, 2026)&mdash;the Captain of the <em>NCC-1701-D</em> who taught a kid watching weeknight television with his family to look up at the cosmos and wonder what is out there, inspiring <strong>The Stardust Engine</strong>, <em>&ldquo;Escape Velocity (Ad Astra),&rdquo;</em> and <em>The Twin Moons</em>.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="/in-memoriam" class="btn btn-warning btn-sm fw-bold text-nowrap">
                    <i class="ph-duotone ph-book-open-text me-1" aria-hidden="true"></i> Read Creator&rsquo;s Tribute
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div role="alert" class="alert alert-info shadow-sm rounded-0 d-flex align-items-start gap-3">
        <i class="ph-duotone ph-robot text-primary fs-3 shrink-0 mt-1" aria-hidden="true"></i>
        <div>
            <h2 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-body">Transparency Notice</h2>
            <p class="mb-0 small text-body">
                RaggieSoft&trade; is a multimedia storytelling and world-building project. Certain music, artwork, and narrative elements across this network are created with the assistance of Artificial Intelligence. 
                <a href="/about/ai-disclaimer" class="fw-bold text-primary border-bottom border-primary text-decoration-none">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<section id="network-spokes" class="py-5 bg-body text-body" aria-labelledby="spokes-title">
  <div class="container">
    
    <div class="text-center border-bottom pb-3 mb-4">
        <h2 id="spokes-title" class="h4 fw-bold text-uppercase text-body mb-1">
            <i class="ph-duotone ph-graph me-2 text-primary"></i>Global Subdomain Constellations
        </h2>
        <p class="small text-body-secondary mb-0">
            Direct routing across the RaggieSoft multi-stack ecosystem &mdash; aligned with the global network bar above.
        </p>
    </div>

    <?php
      /**
       * Global Subdomain Constellations Directory (Strictly 5 Core Pillars)
       * 1. Ocean View Archives (books.raggiesoft.com)
       * 2. Engine Room Records (engineroom.raggiesoft.com + Listening Room + Stardust Engine)
       * 3. RaggieSoft Media (corporate.raggiesoft.com)
       * 4. Michael P. Ragsdale (michaelpragsdale.com Executive Dossier)
       * 5. The DevOps Family (/family — Paige, Jessica, Harper, Jenna, Sarah, Amanda & Elara)
       *
       * Every card displays its official 16:9 OpenGraph (`og:image`) or hero artwork inside
       * a standard DaisyUI 5 `.card` component.
       */
      $constellations = [
        [
          'imgSrc' => $cdnBaseUrl . '/nebulae/images/og-ad-astra-landing.jpg',
          'imgAlt' => 'U.S.S. Aethelgard cargo hatch open onto Caelum-IV — Escape Velocity (Ad Astra) 16:9 OpenGraph Preview',
          'fallbackText' => 'RaggieSoft Nebulae (Ad Astra)',
          'aspectRatio' => '16:9',
          'badge' => 'PHP 8.5 • Caelum-IV Planetary Survey',
          'title' => 'Nebulae: Ad Astra (Caelum-IV)',
          'description' => 'The 1996 "Escape Velocity (Ad Astra)" interactive short film storyboard and Caelum-IV planetary survey—where Cassidy and her family land aboard the U.S.S. Aethelgard.',
          'buttonProps' => [
            'href' => 'https://nebulae.raggiesoft.com/',
            'text' => 'Explore Caelum-IV',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-planet',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://books.raggiesoft.com/ad-astra',
              'text' => 'Read Ad Astra Book',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-book-open-text'
            ],
            [
              'href' => 'https://music.raggiesoft.com/the-stardust-engine/1996-ad-astra-single?track=1-01-escape-velocity-ad-astra',
              'text' => 'Stream 15:33 Suite',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-headphones'
            ]
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-books/images/og/contemporary_v2.jpg',
          'imgAlt' => 'Ocean View Archives Book Reader 16:9 OpenGraph Preview',
          'fallbackText' => 'Ocean View Archives',
          'aspectRatio' => '16:9',
          'badge' => 'PHP 8.5 • Stardust Library SPA',
          'title' => 'Ocean View Archives',
          'description' => 'The literary imprint and accessible e-book reader preserving CC BY-SA 4.0 grounded novels and cosmic chronicles at books.raggiesoft.com.',
          'buttonProps' => [
            'href' => 'https://books.raggiesoft.com/',
            'text' => 'Read Novels',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-book-open',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://books.raggiesoft.com/ad-astra',
              'text' => 'Ad Astra (Stardate 49601)',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-planet'
            ],
            [
              'href' => 'https://books.raggiesoft.com/stardust-engine',
              'text' => 'Stardust Engine',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-rocket-launch'
            ]
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
            'icon' => 'ph-duotone ph-disc',
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
              'icon' => 'ph-duotone ph-headphones'
            ],
            [
              'href' => 'https://stardust.raggiesoft.com/',
              'text' => 'Stardust Engine',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-rocket-launch'
            ]
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
            'icon' => 'ph-duotone ph-bank',
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
            'text' => 'View Dossier',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-briefcase',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-lore/family/images/scenes/paige-michael-hug.jpg',
          'imgAlt' => 'Paige comforting Michael — The RaggieSoft DevOps Family',
          'fallbackText' => 'The DevOps Family',
          'aspectRatio' => '16:9',
          'badge' => 'PHP 8.5 • Bash • Rclone CI/CD',
          'title' => 'The DevOps Family',
          'description' => 'Our "Personified DevOps" build team—where Paige (paige.php, Literary Editor & Safe Person), Jessica (jessica.raggiesoft.com), Harper (harper.sh), Jenna (jenna-sync.sh), Sarah (sarah-deploy.sh), and Amanda & Elara power our entire pipeline.',
          'buttonProps' => [
            'href' => 'https://michaelpragsdale.com/build-team',
            'text' => 'Meet the Build Team',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-heartbeat',
            'iconPosition' => 'before',
            'fullWidth' => true
          ]
        ]
      ];
    ?>

    <div class="row constellation-grid-row justify-content-center">
      <?php foreach ($constellations as $cardProps): ?>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <?php
            $props = $cardProps;
            include __DIR__ . '/../includes/components/card.php';
          ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-5">
      <div class="card bg-base-200 border border-base-300 shadow-sm shadow-sm">
<div class="card-body">

        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 p-2">
          <div>
            <span class="constellation-stack-badge mb-2">Stardust Engine CMS (Elara) &bull; Open-Source MIT Framework</span>
            <h3 class="h5 fw-bold mb-1 text-body">Clone the Zero-Database CMS Powering This Hub</h3>
            <p class="mb-0 small text-body-secondary">
              The Stardust Engine CMS combines native PHP 8.5 flat-file JSON routing with the Elara Vanilla JS SPA router for instant page transitions and zero SQL surface area.
            </p>
          </div>
          <div class="flex-shrink-0 d-flex flex-wrap gap-2">
            <a href="https://github.com/raggiesoft/stardust-engine-cms" class="btn btn-primary">
              <i  class="ph-duotone ph-github-logo"></i> View on GitHub
            </a>
            <a href="https://corporate.raggiesoft.com/open-source/stardust-engine" class="btn btn-neutral btn-outline">
              <i  class="ph-duotone ph-book-open-text"></i> Architecture Docs
            </a>
            <a href="/in-memoriam" class="btn btn-neutral btn-outline">
              <i class="ph-duotone ph-shooting-star" aria-hidden="true"></i> Cosmic Dedication (Ad Astra)
            </a>
          </div>
        </div>
      
</div>
</div>
    </div>

  </div>
</section>