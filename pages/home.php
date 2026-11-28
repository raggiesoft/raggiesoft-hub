<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/home.php
 * Role: Root Homepage View ("The Global Y-Junction" — `https://raggiesoft.com/`)
 * Route Manifest: `/data/routes/core.json` -> `"/"` (`"view": "pages/home"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Serves the front door of the entire RaggieSoft ecosystem (`https://raggiesoft.com/`)
 * inside `<main id="main-content">`:
 *   1. Y-Junction Split Hero (`<section class="split-hero-container">`): Lets
 *      visitors immediately choose between Michael P. Ragsdale's professional
 *      engineering portfolio ("The Architect" -> `michaelpragsdale.com`) and
 *      the independent music & book universe ("Creative Works" -> Engine Room
 *      Records & Ocean View Archives).
 *   2. Timezone-Aware Seasonal Callout (`America/New_York` Eastern Time):
 *      - Through `2026-11-28`: Displays the 30-day **Sir Patrick Stewart (1940–2026)
 *        In Memoriam** callout card linking to `/in-memoriam`.
 *      - Starting `2026-11-29` (the day after the memorial sunsets, honoring a
 *        respectful 2026 Black Friday exception) through New Year's Day (`Jan 1`):
 *        Automatically transitions to the **Winter Symphonic Spotlight** for
 *        *The Arctic Symphony Project* (previewable anytime via `?holiday=preview`).
 *   3. AI Transparency Notice (`role="alert"`): Prominent disclosure linking to
 *      `/about/ai-disclaimer`.
 *   4. Global Subdomain Constellations Grid (`<section id="network-spokes">`):
 *      Loops through `$constellations` with `foreach` and passes each entry as
 *      `$props` into the reusable `includes/components/card.php` component!
 *
 * INPUTS:
 * - `$cdnBaseUrl` (from `amanda/elara.php`).
 * - Optional `$_GET['holiday']` / `$_GET['rs_holiday']` query parameter (`preview` / `off`).
 *
 * OUTPUT PRODUCED:
 * - WCAG 2.1 AA high-contrast homepage HTML fragment + Schema.org JSON-LD.
 * ============================================================================
 *
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
        "@id": "https://michaelpragsdale.com/#michael-ragsdale",
        "name": "Michael P. Ragsdale",
        "url": "https://michaelpragsdale.com"
      },
      "sameAs": [
        "https://launcher.raggiesoft.com",
        "https://a11y.raggiesoft.com",
        "https://music.raggiesoft.com",
        "https://books.raggiesoft.com",
        "https://crossroads.raggiesoft.com",
        "https://cedarrun.raggiesoft.com",
        "https://stardust.raggiesoft.com",
        "https://engineroom.raggiesoft.com",
        "https://lore.raggiesoft.com",
        "https://backstage.raggiesoft.com",
        "https://nebulae.raggiesoft.com",
        "https://corporate.raggiesoft.com",
        "https://storetrainer.raggiesoft.com",
        "https://waystation.raggiesoft.com",
        "https://jessica.raggiesoft.com",
        "https://michaelpragsdale.com"
      ]
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

    /* WCAG 2.1 AA High-Contrast Category Pill Badge (>= 8.5:1 in both Light & Dark Mode).
       `height: auto !important` overrides DaisyUI 5's fixed 24px `.badge` height so wrapped
       or zoomed labels never spill outside the pill border! */
    .constellation-stack-badge {
        display: inline-flex;
        align-items: center;
        height: auto !important;
        min-height: 1.65rem;
        max-width: 100%;
        padding: 0.28rem 0.7rem;
        font-size: 0.72rem;
        font-weight: 700;
        line-height: 1.35;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        white-space: normal;
        text-align: left;
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

<?php /* SECTION 1: Y-Junction Split Hero (`aria-label="Main Navigation Routing"` names this `<section>` region for screen readers; `data-bs-theme="dark"` locks >= 7:1 dark-surface contrast even when OS Light Mode is active) */ ?>
<section class="split-hero-container w-100 wa-dark" data-bs-theme="dark" aria-label="Main Navigation Routing">
    
    <?php /* Left/Top Pane: "The Architect" -> Professional Engineering Portfolio & RaggieSoft Media */ ?>
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

    <?php /* Right/Bottom Pane: "Creative Works" -> Engine Room Records & Ocean View Archives */ ?>
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
     * EASTERN TIME (`America/New_York`) SEASONAL SCHEDULE:
     * 1. Sir Patrick Stewart 30-Day In Memoriam Callout: Active through `2026-11-28`.
     * 2. Yearly Holiday Season Spotlight:
     *    - Standard Go-Live: Black Friday (`fourth Thursday of November + 1 day`)
     *    - 2026 Respectful Exception: Goes live `2026-11-29` after the tribute sunsets
     *    - Pack-Away: `January 2` at `00:00 EST` (active all day New Year's Day `Jan 1`)
     *    - Supports `?holiday=preview` (`1`/`on`) for live previewing at any time.
     *
     * TEACHING NOTE ON `DateTimeImmutable` & `DateTimeZone`:
     * Servers in the cloud often run in `UTC` time, which rolls over to "tomorrow"
     * at 7:00 PM EST! Explicitly passing `new DateTimeZone('America/New_York')` to
     * `DateTimeImmutable` guarantees that the `2026-11-28` midnight sunset happens
     * at exact Eastern Time regardless of the Linux server's system clock timezone.
     */
    $rsEasternTz = new DateTimeZone('America/New_York');
    $rsEasternNow = new DateTimeImmutable('now', $rsEasternTz);
    $rsEasternYmd = $rsEasternNow->format('Y-m-d');
    $rsEasternYear = (int) $rsEasternNow->format('Y');
    $rsEasternMonth = (int) $rsEasternNow->format('n');
    $rsEasternDay = (int) $rsEasternNow->format('j');

    // Read optional `$_GET['holiday']` URL query parameter for developer previewing (`?holiday=preview` or `?holiday=off`):
    // Notice `in_array(..., true)` uses strict comparison (`===`) against a fixed allowlist, never echoing raw `$_GET` to HTML!
    $rsHolidayParam = strtolower((string) ($_GET['holiday'] ?? $_GET['rs_holiday'] ?? ''));
    $rsHolidayPreviewOn = in_array($rsHolidayParam, ['1', 'true', 'on', 'preview'], true);
    $rsHolidayPreviewOff = in_array($rsHolidayParam, ['0', 'false', 'off', 'normal'], true);

    // Sir Patrick Stewart's 30-day memorial callout takes precedence through `2026-11-28`:
    $rsMemoriamActive = ($rsEasternYmd <= '2026-11-28') && !$rsHolidayPreviewOn;

    // PHP's natural-language date parser computes U.S. Thanksgiving (`fourth thursday of november`) dynamically for any year!
    $rsBlackFriday = new DateTimeImmutable("fourth thursday of november {$rsEasternYear}", $rsEasternTz);
    $rsBlackFridayDay = ((int) $rsBlackFriday->format('j')) + 1;

    $rsHolidayDateMatch =
        ($rsEasternMonth === 12) ||
        ($rsEasternMonth === 1 && $rsEasternDay === 1) ||
        ($rsEasternMonth === 11 && $rsEasternDay >= $rsBlackFridayDay);

    // Because `&& !$rsMemoriamActive` is required, in November 2026 the Holiday banner
    // waits respectfully until `2026-11-29` (the day after the 30-day tribute sunsets):
    $rsHolidayActive = $rsHolidayPreviewOff
        ? false
        : ($rsHolidayPreviewOn || (!$rsMemoriamActive && $rsHolidayDateMatch));

    if ($rsMemoriamActive):
    ?>
    <?php /* Branch 1 (`<= 2026-11-28` EST): 30-Day Sir Patrick Stewart In Memoriam Spotlight Card */ ?>
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
    <?php elseif ($rsHolidayActive): ?>
    <?php /* Branch 2 (`2026-11-29` through `Jan 1`, or `?holiday=preview`): Winter Symphonic Spotlight Card */ ?>
    <div class="card mb-3 border shadow-sm" style="background: linear-gradient(90deg, #071e16 0%, #143d2b 42%, #4a121b 82%, #071e16 100%); border-color: rgba(251, 191, 36, 0.6) !important; color: #f8fafc;" data-bs-theme="dark">
        <div class="card-body py-3 px-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <div class="small fw-bold text-uppercase mb-1" style="color: #fde68a; letter-spacing: 0.06em;">
                    <i class="ph-duotone ph-snowflake me-1" aria-hidden="true"></i> Happy Holidays from RaggieSoft &bull; Winter Symphonic Spotlight
                </div>
                <p class="mb-0 small" style="color: #f1f5f9;">
                    Celebrate the holiday season in <strong>The Listening Room</strong> with progressive winter symphonies from <strong>The Arctic Symphony Project</strong>&mdash;featuring <em>A Symphony of Snow</em> (1996) and the 31-song holiday rock-orchestra opus <em>Tales from the Solstice</em> (2007).
                </p>
            </div>
            <div class="d-flex flex-wrap gap-2 flex-shrink-0">
                <a href="https://music.raggiesoft.com/#holiday-music-showcase-heading" class="btn btn-warning btn-sm fw-bold text-nowrap">
                    <i class="ph-duotone ph-headphones me-1" aria-hidden="true"></i> Stream Holiday Music
                </a>
                <a href="https://storetrainer.raggiesoft.com/" class="btn btn-outline-light btn-sm fw-bold text-nowrap">
                    <i class="ph-duotone ph-desktop-tower me-1" aria-hidden="true"></i> Quantum OS 98 Holiday
                </a>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php /* Accessible `role="alert"` Transparency Notice linking directly to `/about/ai-disclaimer` */ ?>
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
            <i class="ph-duotone ph-compass me-2 text-primary" aria-hidden="true"></i>Start Exploring RaggieSoft
        </h2>
        <p class="small text-body-secondary mb-0">
            Jump straight into our books, original music, or desktop apps&mdash;or visit our single Global Directory and Behind-the-Scenes Story Guide below.
        </p>
    </div>

    <?php
      /**
       * DRY Front-Door Homepage Pillars (4 Focused Entry Doors -> 1 Clean Row of 4 on XL Desktop):
       * Instead of duplicating the 16-property A-Z directory here, `raggiesoft.com` serves as
       * a clean, welcoming front door with 4 core pillars + 2 dedicated DRY gateways:
       *   - Global Directory & 404 Wayfinder -> `https://waystation.raggiesoft.com/realms`
       *   - The Story Behind Every Project   -> `https://jessica.raggiesoft.com`
       */
      $constellations = [
        [
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-books/images/og/contemporary_v2.jpg',
          'imgAlt' => 'Ocean View Archives Book Reader and RaggieSoft Story Crossroads',
          'fallbackText' => 'Novels & Story Crossroads',
          'aspectRatio' => '16:9',
          'badge' => 'Books & Interactive Fiction',
          'title' => 'Read Novels & Crossroads',
          'description' => 'Read full-length contemporary and cosmic novels in Ocean View Archives or choose your own coequal path in RaggieSoft Story Crossroads—always free and ad-free.',
          'buttonProps' => [
            'href' => 'https://books.raggiesoft.com/',
            'text' => 'Open Book Reader',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-book-open',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://crossroads.raggiesoft.com/',
              'text' => 'Story Crossroads',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-signpost'
            ],
            [
              'href' => 'https://backstage.raggiesoft.com/',
              'text' => 'Backstage Extras',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-film-slate'
            ]
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/engine-room-records/images/og/engine-room-og.jpg',
          'imgAlt' => 'Engine Room Records and The Listening Room',
          'fallbackText' => 'Engine Room Records',
          'aspectRatio' => '16:9',
          'badge' => 'Original Music & Lyrics',
          'title' => 'Stream Music & Lyrics',
          'description' => 'Stream full albums across seven original bands—from 1980s synth-rock to acoustic folk and winter symphonies—with synchronized sing-along lyrics in The Listening Room.',
          'buttonProps' => [
            'href' => 'https://music.raggiesoft.com/',
            'text' => 'Open Listening Room',
            'variant' => 'danger',
            'icon' => 'ph-duotone ph-headphones',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://engineroom.raggiesoft.com/',
              'text' => 'Meet All 7 Bands',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-disc'
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
          'imgSrc' => $cdnBaseUrl . '/raggiesoft-launcher/images/og-launcher.jpg',
          'imgAlt' => 'RaggieSoft Launcher — One calm home for Book Reader, The Listening Room, Backstage, and StoreTrainer',
          'fallbackText' => 'RaggieSoft Launcher',
          'aspectRatio' => '16:9',
          'badge' => 'Desktop App Suite',
          'title' => 'RaggieSoft Launcher',
          'description' => 'Enjoy Book Reader, The Listening Room, Backstage, and StoreTrainer offline on your computer from one calm, account-free desktop home with easy one-click updates.',
          'buttonProps' => [
            'href' => 'https://launcher.raggiesoft.com/',
            'text' => 'Explore Desktop Apps',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-rocket-launch',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://a11y.raggiesoft.com/',
              'text' => 'Accessibility Studio',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-code-block'
            ],
            [
              'href' => 'https://storetrainer.raggiesoft.com/',
              'text' => 'StoreTrainer',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-game-controller'
            ]
          ]
        ],
        [
          'imgSrc' => $cdnBaseUrl . '/common/images/mragsdale-social.jpg',
          'imgAlt' => 'Michael P. Ragsdale Portfolio and RaggieSoft Media Licensing',
          'fallbackText' => 'Portfolio & Licensing',
          'aspectRatio' => '16:9',
          'badge' => 'Portfolio & Open Culture',
          'title' => 'Portfolio & Licensing',
          'description' => 'Explore founder Michael P. Ragsdale’s professional portfolio and resume alongside Creative Commons open-culture and commercial licensing details.',
          'buttonProps' => [
            'href' => 'https://michaelpragsdale.com',
            'text' => 'Creator Portfolio',
            'variant' => 'brand',
            'icon' => 'ph-duotone ph-briefcase',
            'iconPosition' => 'before',
            'fullWidth' => true
          ],
          'secondaryButtons' => [
            [
              'href' => 'https://corporate.raggiesoft.com/',
              'text' => 'RaggieSoft Media',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-bank'
            ],
            [
              'href' => '/about/family',
              'text' => 'Studio Family',
              'variant' => 'neutral',
              'appearance' => 'outlined',
              'size' => 'small',
              'icon' => 'ph-duotone ph-heartbeat'
            ]
          ]
        ]
      ];
    ?>

    <?php /* Render the 4 Core Front-Door Pillars in one balanced 4-column desktop grid */ ?>
    <div class="row constellation-grid-row justify-content-center">
      <?php foreach ($constellations as $cardProps): ?>
        <div class="col-12 col-md-6 col-xl-3-constellation d-flex">
          <?php
            $props = $cardProps;
            include __DIR__ . '/../includes/components/card.php';
          ?>
        </div>
      <?php endforeach; ?>
    </div>

    <?php /* Dedicated DRY Gateways: Waystation = Global Directory | Jessica = Story Behind Every Project */ ?>
    <div class="row constellation-grid-row mt-4">
      <div class="col-12 col-lg-6 d-flex">
        <div class="card constellation-wa-card bg-base-200 border border-base-300 shadow-sm w-100">
          <div class="card-body d-flex flex-column justify-content-between gap-3">
            <div>
              <span class="constellation-stack-badge mb-2">Global Directory &bull; Search All 17 Portals</span>
              <h3 class="h5 fw-bold mb-2 text-body">
                <i class="ph-duotone ph-compass-rose me-1 text-primary" aria-hidden="true"></i>The Uncharted Waystation (Global Directory)
              </h3>
              <p class="small text-body-secondary mb-0">
                Looking for every destination across RaggieSoft&mdash;including <em>Cedar Run</em>, <em>Nebulae: Caelum-IV</em>, the <em>Lore Encyclopedia</em>, <em>The Stardust Engine</em>, and more? Visit Nolan &amp; Gwen Lennox&rsquo;s searchable portal map in one central place.
              </p>
            </div>
            <div class="d-flex flex-wrap gap-2">
              <a href="https://waystation.raggiesoft.com/realms" class="btn btn-primary fw-bold">
                <i class="ph-duotone ph-map-trifold me-1" aria-hidden="true"></i> Browse Global Directory
              </a>
              <a href="https://books.raggiesoft.com/waystation" class="btn btn-neutral btn-outline">
                <i class="ph-duotone ph-book-open-text me-1" aria-hidden="true"></i> Read Waystation Novel
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6 d-flex">
        <div class="card constellation-wa-card bg-base-200 border border-base-300 shadow-sm w-100">
          <div class="card-body d-flex flex-column justify-content-between gap-3">
            <div>
              <span class="constellation-stack-badge mb-2">Behind the Scenes &bull; Why Each Project Exists</span>
              <h3 class="h5 fw-bold mb-2 text-body">
                <i class="ph-duotone ph-shield-check me-1 text-primary" aria-hidden="true"></i>Jessica&rsquo;s Study (The Story Behind the Projects)
              </h3>
              <p class="small text-body-secondary mb-0">
                Curious about the personal story behind every book, band, and desktop app? Meet Michael&rsquo;s big sister Jessica&mdash;who shares the November 2006 rescue &amp; studio origin, explains why each project was created, and shows how Rachel (&ldquo;Bug&rdquo;) tests every page beside him.
              </p>
            </div>
            <div class="d-flex flex-wrap gap-2">
              <a href="https://jessica.raggiesoft.com/directory" class="btn btn-primary fw-bold">
                <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i> Read Stories Behind the Projects
              </a>
              <a href="https://jessica.raggiesoft.com/seed-story" class="btn btn-neutral btn-outline">
                <i class="ph-duotone ph-plant me-1" aria-hidden="true"></i> Nov 2006 Seed Story
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php /* Open-Culture CC BY-SA 4.0 & MIT Callout Card at the bottom of the Constellation directory */ ?>
    <div class="mt-5">
      <div class="card bg-base-200 border border-base-300 shadow-sm shadow-sm">
<div class="card-body">

        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 p-2">
          <div>
            <span class="constellation-stack-badge mb-2">Open Culture &bull; CC BY-SA 4.0 &amp; MIT Licensed</span>
            <h3 class="h5 fw-bold mb-1 text-body">Free to Read, Stream, and Share</h3>
            <p class="mb-0 small text-body-secondary">
              Every novel, song, and open-source project across the RaggieSoft network is published freely for readers, listeners, and fellow creators to enjoy.
            </p>
          </div>
          <div class="flex-shrink-0 d-flex flex-wrap gap-2">
            <a href="https://books.raggiesoft.com/" class="btn btn-primary">
              <i  class="ph-duotone ph-book-open"></i> Read Novels
            </a>
            <a href="https://music.raggiesoft.com/" class="btn btn-neutral btn-outline">
              <i  class="ph-duotone ph-headphones"></i> Listen to Music
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