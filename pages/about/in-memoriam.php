<?php
/**
 * ============================================================================
 * In Memoriam: Sir Patrick Stewart (July 13, 1940 – October 28, 2026)
 * Second Star to the Right — A Cosmic Tribute from RaggieSoft
 * ============================================================================
 * File: pages/about/in-memoriam.php
 * Routes:
 *   - https://raggiesoft.com/in-memoriam (Primary canonical tribute URL)
 *   - https://raggiesoft.com/about/in-memoriam (Mission Profile alias)
 *
 * ARCHITECTURAL & EDITORIAL PURPOSE:
 * 1. Serves as the permanent creator's dedication and memorial page written in
 *    the personal voice of Michael P. Ragsdale (Founder & Systems Architect of
 *    RaggieSoft), honoring the life and legacy of Sir Patrick Stewart
 *    (July 13, 1940 – October 28, 2026).
 * 2. Preserves the childhood family memory that sparked the entire cosmic
 *    aesthetic of the RaggieSoft network: watching weekday evening television
 *    as a family (Local News -> National News -> Wheel of Fortune -> Jeopardy!
 *    -> Star Trek: The Next Generation) and learning from the Captain of the
 *    NCC-1701-D to look up at the night sky and wonder what is out there.
 * 3. Traces how that childhood sense of cosmic wonder directly inspired:
 *    - The Stardust Engine (https://stardust.raggiesoft.com)
 *    - "Escape Velocity (Ad Astra)" (https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes?track=1-06-escape-velocity-ad-astra)
 *    - The Twin Moons: Sanctuary (Zero-G) & Mile Marker 98 (https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g?track=1-01-moon-1-tidal-lock)
 *    - Ocean View Archives & RaggieSoft Book Reader (https://books.raggiesoft.com)
 *    - The RaggieSoft Nebulae Observatory (https://nebulae.raggiesoft.com)
 *
 * LIFECYCLE & AUTO-EXPIRING BANNER COORDINATION:
 * - For 30 days following October 28, 2026 (through November 28, 2026 at
 *   23:59:59 EST), `raggiesoft-network.js` automatically displays a top-of-site
 *   `.rs-memoriam-bar` ribbon across all RaggieSoft properties linking here.
 * - After November 28, 2026, the temporary top ribbon sunsets automatically,
 *   while this page (`/in-memoriam`) remains permanently in the RaggieSoft
 *   Mission Profile archive alongside the permanent Creator's Dedication cards
 *   on `stardust.raggiesoft.com` and `nebulae.raggiesoft.com`.
 *
 * WCAG 2.1 AA / SECTION 508 & COPYRIGHT COMPLIANCE:
 * - 100% original typography and CSS starfield/nebula gradients—uses zero
 *   third-party studio trademarks, logos, or copyrighted celebrity photographs.
 * - Enforces >= 7.0:1 text contrast across both Light Mode (`[data-bs-theme="light"]`)
 *   and Dark Mode (`[data-bs-theme="dark"]`), with `text-wrap: balance` on
 *   headings and `text-wrap: pretty` on narrative paragraphs.
 * - Respects `@media (prefers-reduced-motion: reduce)`.
 * ============================================================================
 */

$pageTitle = "In Memoriam: Sir Patrick Stewart (1940–2026) | RaggieSoft";
$pageTheme = "raggiesoft";

// Check whether the 30-day active mourning window (through November 28, 2026) is currently active
$memoriamRibbonActive = (date('Y-m-d') <= '2026-11-28');
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "@id": "https://raggiesoft.com/in-memoriam#sir-patrick-stewart",
      "name": "Sir Patrick Stewart",
      "honorificPrefix": "Sir",
      "givenName": "Patrick",
      "familyName": "Stewart",
      "birthDate": "1940-07-13",
      "deathDate": "2026-10-28",
      "nationality": {
        "@type": "Country",
        "name": "United Kingdom"
      },
      "jobTitle": [
        "Actor",
        "Shakespearean Stage Performer",
        "Portrayer of Captain Jean-Luc Picard (U.S.S. Enterprise NCC-1701-D)"
      ],
      "description": "Acclaimed British stage and screen actor whose portrayal of Captain Jean-Luc Picard aboard the U.S.S. Enterprise (NCC-1701-D) on Star Trek: The Next Generation taught a kid watching weeknight television with his family to look up at the night sky and wonder what is out there.",
      "sameAs": [
        "https://en.wikipedia.org/wiki/Patrick_Stewart",
        "https://www.wikidata.org/wiki/Q16296"
      ],
      "performerIn": {
        "@type": "TVSeries",
        "name": "Star Trek: The Next Generation",
        "character": {
          "@type": "Person",
          "name": "Captain Jean-Luc Picard"
        }
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://raggiesoft.com/in-memoriam#weeknight-television-schedule",
      "name": "Childhood Weekday Evening Family Television Schedule",
      "description": "The five-part Monday-through-Friday family television ritual that culminated aboard the U.S.S. Enterprise (NCC-1701-D) and sparked the cosmic imagination behind RaggieSoft.",
      "numberOfItems": 5,
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Local News" },
        { "@type": "ListItem", "position": 2, "name": "National News" },
        { "@type": "ListItem", "position": 3, "name": "Wheel of Fortune" },
        { "@type": "ListItem", "position": 4, "name": "Jeopardy!" },
        { "@type": "ListItem", "position": 5, "name": "Star Trek: The Next Generation — Aboard the NCC-1701-D" }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://raggiesoft.com/in-memoriam#article",
      "headline": "In Memoriam: Sir Patrick Stewart (1940–2026) — Second Star to the Right",
      "alternativeHeadline": "Where to? Second star to the right, and straight on 'til morning! Ad astra per aspera, Captain.",
      "articleSection": "Creator's Cosmic Tribute & In Memoriam",
      "genre": ["Memorial Tribute", "Personal Essay", "Cultural Attribution"],
      "inLanguage": "en-US",
      "datePublished": "2026-10-29T00:00:00-04:00",
      "dateModified": "2026-10-29T21:25:00-04:00",
      "license": "https://creativecommons.org/licenses/by-sa/4.0/",
      "image": "https://assets.raggiesoft.com/raggiesoft-corporate/images/og/in-memoriam-patrick-stewart-og.jpg",
      "author": {
        "@type": "Person",
        "@id": "https://michaelpragsdale.com/#michael-ragsdale",
        "name": "Michael P. Ragsdale",
        "url": "https://michaelpragsdale.com"
      },
      "publisher": {
        "@type": "Organization",
        "@id": "https://raggiesoft.com/#organization",
        "name": "RaggieSoft",
        "url": "https://raggiesoft.com"
      },
      "about": [
        { "@id": "https://raggiesoft.com/in-memoriam#sir-patrick-stewart" },
        { "@id": "https://raggiesoft.com/in-memoriam#weeknight-television-schedule" }
      ],
      "description": "A personal tribute from Michael P. Ragsdale honoring Sir Patrick Stewart (1940–2026), whose portrayal of the Captain of the NCC-1701-D on weeknight family television sparked the cosmic imagination behind RaggieSoft, The Stardust Engine, Escape Velocity (Ad Astra), The Twin Moons, and Caelum-IV.",
      "mentions": [
        {
          "@type": "MusicGroup",
          "@id": "https://stardust.raggiesoft.com/#musicgroup",
          "name": "The Stardust Engine",
          "url": "https://stardust.raggiesoft.com"
        },
        {
          "@type": "MusicRecording",
          "name": "Escape Velocity (Ad Astra)",
          "isrcCode": "QZW9K2547910",
          "duration": "PT15M33S",
          "url": "https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes?track=1-06-escape-velocity-ad-astra"
        },
        {
          "@type": "MusicRecording",
          "name": "Escape Velocity (Ad Astra) [Live at the Crucible]",
          "isrcCode": "QTAHP2600043",
          "duration": "PT13M3S",
          "url": "https://music.raggiesoft.com/the-stardust-engine/2016-live-at-the-crucible?track=2-01-escape-velocity-ad-astra"
        },
        {
          "@type": "MusicAlbum",
          "name": "Escape Velocity (Ad Astra) [1996 Album]",
          "datePublished": "1996-07-16",
          "url": "https://music.raggiesoft.com/the-stardust-engine/1996-ad-astra-single"
        },
        {
          "@type": "MusicAlbum",
          "name": "Sanctuary (Zero-G) — The Twin Moons: Moon 1",
          "url": "https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g?track=1-01-moon-1-tidal-lock"
        },
        {
          "@type": "MusicAlbum",
          "name": "Mile Marker 98 — The Twin Moons: Moon 2",
          "url": "https://music.raggiesoft.com/the-stardust-engine/2003-mile-marker-98?track=1-01-moon-2-roche-limit"
        },
        {
          "@type": "WebSite",
          "name": "RaggieSoft Nebulae — Caelum-IV Planetary Survey",
          "url": "https://nebulae.raggiesoft.com"
        },
        {
          "@type": "BookSeries",
          "name": "Escape Velocity: Ad Astra (Stardate 49601 Chronicles)",
          "url": "https://books.raggiesoft.com/ad-astra"
        }
      ]
    }
  ]
}
</script>

<style>
  /* ==========================================================================
   * IN MEMORIAM COSMIC TRIBUTE STYLES (WCAG 2.1 AA Light & Dark Mode Safe)
   * ========================================================================== */
  /* Deep-Space "Second Star to the Right" Page Backdrop (Dark & Light Safe) */
  #main-content:has(.memoriam-page-shell),
  .memoriam-cosmic-backdrop {
    background-image:
      linear-gradient(180deg, rgba(248, 250, 252, 0.88) 0%, rgba(241, 245, 249, 0.92) 100%),
      url('https://assets.raggiesoft.com/raggiesoft-corporate/images/og/in-memoriam-deep-space-bg.jpg');
    background-size: cover;
    background-position: center top;
    background-attachment: fixed;
  }

  [data-bs-theme="dark"] #main-content:has(.memoriam-page-shell),
  [data-theme="dark"] #main-content:has(.memoriam-page-shell),
  [data-bs-theme="dark"] .memoriam-cosmic-backdrop,
  [data-theme="dark"] .memoriam-cosmic-backdrop {
    background-image:
      linear-gradient(180deg, rgba(4, 7, 17, 0.52) 0%, rgba(6, 10, 24, 0.68) 100%),
      url('https://assets.raggiesoft.com/raggiesoft-corporate/images/og/in-memoriam-deep-space-bg.jpg') !important;
    background-size: cover;
    background-position: center top;
    background-attachment: fixed;
  }

  @media (prefers-color-scheme: dark) {
    :root:not([data-bs-theme="light"]):not([data-theme="light"]) #main-content:has(.memoriam-page-shell),
    :root:not([data-bs-theme="light"]):not([data-theme="light"]) .memoriam-cosmic-backdrop {
      background-image:
        linear-gradient(180deg, rgba(4, 7, 17, 0.52) 0%, rgba(6, 10, 24, 0.68) 100%),
        url('https://assets.raggiesoft.com/raggiesoft-corporate/images/og/in-memoriam-deep-space-bg.jpg') !important;
      background-size: cover;
      background-position: center top;
      background-attachment: fixed;
    }
  }

  .memoriam-page-shell {
    --mem-surface: rgba(255, 255, 255, 0.96);
    --mem-surface-elevated: #f8fafc;
    --mem-border: #cbd5e1;
    --mem-border-gold: #b45309;
    --mem-text: #0f172a;
    --mem-text-secondary: #334155;
    --mem-accent-gold: #854d0e;
    --mem-accent-cyan: #0369a1;
    --mem-badge-bg: #fef3c7;
    --mem-badge-text: #78350f;
    --mem-quote-bg: #f1f5f9;
    color: var(--mem-text);
  }

  [data-bs-theme="dark"] .memoriam-page-shell,
  [data-theme="dark"] .memoriam-page-shell {
    --mem-surface: rgba(9, 13, 24, 0.9);
    --mem-surface-elevated: rgba(15, 23, 42, 0.92);
    --mem-border: rgba(148, 163, 184, 0.35);
    --mem-border-gold: rgba(251, 191, 36, 0.6);
    --mem-text: #f8fafc;
    --mem-text-secondary: #cbd5e1;
    --mem-accent-gold: #fbbf24;
    --mem-accent-cyan: #38bdf8;
    --mem-badge-bg: rgba(251, 191, 36, 0.16);
    --mem-badge-text: #fde68a;
    --mem-quote-bg: rgba(15, 23, 42, 0.95);
  }

  @media (prefers-color-scheme: dark) {
    :root:not([data-bs-theme="light"]):not([data-theme="light"]) .memoriam-page-shell {
      --mem-surface: rgba(9, 13, 24, 0.9);
      --mem-surface-elevated: rgba(15, 23, 42, 0.92);
      --mem-border: rgba(148, 163, 184, 0.35);
      --mem-border-gold: rgba(251, 191, 36, 0.6);
      --mem-text: #f8fafc;
      --mem-text-secondary: #cbd5e1;
      --mem-accent-gold: #fbbf24;
      --mem-accent-cyan: #38bdf8;
      --mem-badge-bg: rgba(251, 191, 36, 0.16);
      --mem-badge-text: #fde68a;
      --mem-quote-bg: rgba(15, 23, 42, 0.95);
    }
  }

  /* Modern Web Guidance: improve-text-layout-and-legibility */
  .memoriam-page-shell h1,
  .memoriam-page-shell h2,
  .memoriam-page-shell h3,
  .memoriam-page-shell h4 {
    text-wrap: balance;
  }

  .memoriam-page-shell p,
  .memoriam-page-shell blockquote,
  .memoriam-page-shell li {
    text-wrap: pretty;
  }

  /* Permanent Deep-Space Memorial Hero (Second Star to the Right Vista) */
  .memoriam-hero {
    position: relative;
    background:
      linear-gradient(90deg, rgba(4, 7, 17, 0.88) 0%, rgba(7, 12, 28, 0.72) 55%, rgba(4, 7, 17, 0.55) 100%),
      url('https://assets.raggiesoft.com/raggiesoft-corporate/images/og/in-memoriam-deep-space-bg.jpg') center/cover no-repeat;
    color: #f8fafc !important;
    border: 1.5px solid rgba(251, 191, 36, 0.65);
    border-radius: 1rem;
    padding: 3rem 2rem;
    box-shadow: 0 24px 55px rgba(0, 0, 0, 0.65);
    overflow: hidden;
  }

  .memoriam-hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    padding: 0.32rem 0.85rem;
    border-radius: 999px;
    background-color: rgba(251, 191, 36, 0.16);
    border: 1px solid rgba(251, 191, 36, 0.6);
    color: #fde68a !important;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 0.76rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 1.15rem;
  }

  .memoriam-hero-title {
    color: #ffffff !important;
    font-family: 'Audiowide', system-ui, sans-serif;
    letter-spacing: 0.03em;
    margin-bottom: 0.5rem;
  }

  .memoriam-hero-dates {
    color: #fbbf24 !important;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 1.05rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 1.25rem;
  }

  .memoriam-hero-lead {
    color: #e2e8f0 !important;
    max-width: 72ch;
    margin: 0 auto;
    font-size: 1.1rem;
    line-height: 1.7;
  }

  /* High-Contrast Hero & Card Secondary Buttons (WCAG 2.1 AA >= 14.5:1) */
  .memoriam-btn-hero-secondary {
    background-color: rgba(15, 23, 42, 0.92) !important;
    color: #ffffff !important;
    border: 1.5px solid rgba(248, 250, 252, 0.85) !important;
    font-weight: 700 !important;
    transition: background-color 0.15s ease, color 0.15s ease, border-color 0.15s ease;
  }

  .memoriam-btn-hero-secondary:hover,
  .memoriam-btn-hero-secondary:focus-visible {
    background-color: #ffffff !important;
    color: #090d16 !important;
    border-color: #ffffff !important;
  }

  .memoriam-btn-card-secondary {
    background-color: var(--mem-surface-elevated) !important;
    color: var(--mem-text) !important;
    border: 1.5px solid var(--mem-border-gold) !important;
    font-weight: 600 !important;
    transition: background-color 0.15s ease, color 0.15s ease, border-color 0.15s ease;
  }

  .memoriam-btn-card-secondary:hover,
  .memoriam-btn-card-secondary:focus-visible {
    background-color: #fbbf24 !important;
    color: #090d16 !important;
    border-color: #fbbf24 !important;
  }

  /* Narrative & Pillar Cards */
  .memoriam-card {
    background-color: var(--mem-surface);
    color: var(--mem-text);
    border: 1px solid var(--mem-border);
    border-radius: 0.85rem;
    padding: 1.75rem;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    height: 100%;
  }

  .memoriam-card-gold {
    border-color: var(--mem-border-gold);
  }

  .memoriam-section-eyebrow {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--mem-accent-gold);
    display: block;
    margin-bottom: 0.35rem;
  }

  /* Weekday Evening TV Schedule Timeline List */
  .tv-schedule-list {
    list-style: none;
    padding: 0;
    margin: 1.25rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.65rem;
  }

  .tv-schedule-item {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    padding: 0.75rem 1rem;
    border-radius: 0.65rem;
    background-color: var(--mem-surface-elevated);
    border: 1px solid var(--mem-border);
    font-weight: 600;
  }

  .tv-schedule-item.is-highlight {
    border-color: var(--mem-border-gold);
    background-color: var(--mem-badge-bg);
    color: var(--mem-badge-text);
    font-weight: 700;
  }

  .tv-schedule-step {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    border-radius: 999px;
    background-color: var(--mem-accent-cyan);
    color: #ffffff;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 0.78rem;
    font-weight: 800;
    flex-shrink: 0;
  }

  .tv-schedule-item.is-highlight .tv-schedule-step {
    background-color: #d97706;
    color: #ffffff;
  }

  .memoriam-blockquote {
    background-color: var(--mem-quote-bg);
    border-left: 4px solid var(--mem-border-gold);
    border-radius: 0 0.75rem 0.75rem 0;
    padding: 1.25rem 1.5rem;
    margin: 1.5rem 0;
    color: var(--mem-text);
    font-size: 1.05rem;
    line-height: 1.7;
  }

  .memoriam-pill-badge {
    display: inline-block;
    padding: 0.22rem 0.65rem;
    border-radius: 999px;
    background-color: var(--mem-badge-bg);
    color: var(--mem-badge-text);
    border: 1px solid var(--mem-border-gold);
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 0.65rem;
  }

  .memoriam-page-shell a:focus-visible,
  .memoriam-page-shell .btn:focus-visible {
    outline: 3px solid var(--mem-accent-cyan);
    outline-offset: 2px;
  }
</style>

<div class="container py-4 py-md-5 memoriam-page-shell">

  <!-- =====================================================================
       1. HERO MONUMENT: SECOND STAR TO THE RIGHT
       ===================================================================== -->
  <header class="memoriam-hero text-center mb-5" data-theme="dark" data-bs-theme="dark">
    <div class="memoriam-hero-eyebrow">
      <span aria-hidden="true">✦</span>
      <span>Second Star to the Right &bull; Creator&rsquo;s Cosmic Tribute</span>
    </div>
    <h1 class="display-5 fw-bold memoriam-hero-title">
      In Memoriam: Sir Patrick Stewart
    </h1>
    <p class="memoriam-hero-dates">
      July 13, 1940 &ndash; October 28, 2026
    </p>
    <p class="memoriam-hero-lead">
      To the Captain of the <em>NCC-1701-D</em> who taught a kid watching weeknight television with his family to look up at the night sky, wonder what is out there, and believe that humanity&rsquo;s finest frontier is reached through curiosity, empathy, and imagination.
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
      <a href="https://stardust.raggiesoft.com" class="btn btn-warning fw-bold">
        <i class="ph-duotone ph-rocket-launch me-1" aria-hidden="true"></i> Visit The Stardust Engine
      </a>
      <a href="https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes?track=1-06-escape-velocity-ad-astra" class="btn memoriam-btn-hero-secondary">
        <i class="ph-duotone ph-headphones me-1" aria-hidden="true"></i> Listen to &ldquo;Escape Velocity (Ad Astra)&rdquo;
      </a>
      <a href="https://nebulae.raggiesoft.com" class="btn memoriam-btn-hero-secondary">
        <i class="ph-duotone ph-planet me-1" aria-hidden="true"></i> Explore Caelum-IV (Nebulae)
      </a>
      <a href="/about" class="btn memoriam-btn-hero-secondary">
        <i class="ph-duotone ph-arrow-left me-1" aria-hidden="true"></i> Mission Profile
      </a>
    </div>
  </header>

  <!-- =====================================================================
       2. PERSONAL LETTER FROM MICHAEL P. RAGSDALE: WEEKNIGHT TELEVISION
       ===================================================================== -->
  <div class="row g-4 mb-5">
    <div class="col-lg-7">
      <article class="memoriam-card memoriam-card-gold" aria-labelledby="living-room-heading">
        <span class="memoriam-section-eyebrow">A Personal Note from Michael P. Ragsdale</span>
        <h2 id="living-room-heading" class="h3 fw-bold mb-3">
          Five Shows Every Weeknight, and the Hour That Opened the Universe
        </h2>

        <p>
          When I was a kid, weekday evening television in our house wasn&rsquo;t background noise&mdash;it was a shared family ritual. Every Monday through Friday evening, sitting together in the living room, our television schedule always followed the exact same five-part cadence:
        </p>

        <ol class="tv-schedule-list" role="list" aria-label="Childhood weekday evening family television schedule">
          <li class="tv-schedule-item">
            <span class="tv-schedule-step" aria-hidden="true">1</span>
            <span>Local News</span>
          </li>
          <li class="tv-schedule-item">
            <span class="tv-schedule-step" aria-hidden="true">2</span>
            <span>National News</span>
          </li>
          <li class="tv-schedule-item">
            <span class="tv-schedule-step" aria-hidden="true">3</span>
            <span><em>Wheel of Fortune</em></span>
          </li>
          <li class="tv-schedule-item">
            <span class="tv-schedule-step" aria-hidden="true">4</span>
            <span><em>Jeopardy!</em></span>
          </li>
          <li class="tv-schedule-item is-highlight">
            <span class="tv-schedule-step" aria-hidden="true">5</span>
            <span><em>Star Trek: The Next Generation</em> &mdash; Aboard the <em>NCC-1701-D</em></span>
          </li>
        </ol>

        <p>
          The news anchored us in the real world of the day; <em>Wheel of Fortune</em> and <em>Jeopardy!</em> got everyone in the room calling out letters and answers together. And then, right after <em>Jeopardy!</em> wrapped up, the living room quieted down as the brass fanfare swelled, the stars streaked past the screen, and a steady, unmistakable voice invited us to explore the unknown.
        </p>

        <blockquote class="memoriam-blockquote">
          <p class="mb-2 fw-semibold">
            &ldquo;If we didn&rsquo;t watch <em>Star Trek: The Next Generation</em> as a family when I was little, I never would&rsquo;ve had the mind to want to wonder what is out there. And if I never wondered what was out there, I never would&rsquo;ve had the imagination to build a network of websites, songs, and stories themed to the cosmos.&rdquo;
          </p>
          <footer class="small opacity-75">
            &mdash; <strong>Michael P. Ragsdale</strong>, Founder &amp; Architect of RaggieSoft
          </footer>
        </blockquote>

        <p class="mb-0">
          As the Captain of the <em>NCC-1701-D</em>, Sir Patrick Stewart showed a kid watching weeknight television that leadership didn&rsquo;t mean being the loudest voice in the room. It meant listening closely, defending the dignity of others, treating science and art as twin halves of the human spirit, and looking out at a vast, intimidating universe with calm curiosity instead of fear.
        </p>
      </article>
    </div>

    <div class="col-lg-5">
      <aside class="memoriam-card d-flex flex-column justify-content-between" aria-labelledby="legacy-compass-heading">
        <div>
          <span class="memoriam-section-eyebrow">The Moral &amp; Creative Compass</span>
          <h2 id="legacy-compass-heading" class="h4 fw-bold mb-3">
            Why the Bridge of the <em>1701-D</em> Matters Here
          </h2>
          <p>
            Every creative universe has a point of ignition&mdash;an early memory that quietly shapes everything built decades later. Across the RaggieSoft network, our recurring themes trace straight back to those weeknights in front of the family television:
          </p>
          <ul class="ps-3 mb-4">
            <li class="mb-2">
              <strong>The Cosmos as a Sanctuary:</strong> Space in our stories isn&rsquo;t a cold void; it is a place of wonder, mathematical harmony, and refuge.
            </li>
            <li class="mb-2">
              <strong>Dignity &amp; Principle Over Profit:</strong> Whether it is <a href="https://stardust.raggiesoft.com/story/nine-figure-refusal">The Stardust Engine walking away from a predatory corporate contract</a> or keeping our code and creative archives open under MIT and CC BY-SA 4.0 licenses, integrity always comes first.
            </li>
            <li class="mb-0">
              <strong>No One Left Behind:</strong> Every ship, stage, and web application we build is engineered around accessibility (WCAG 2.1 AA / Section 508) and chosen family.
            </li>
          </ul>
        </div>

        <div class="p-3 rounded-3 border" style="background-color: var(--mem-surface-elevated); border-color: var(--mem-border) !important;">
          <div class="small fw-bold text-uppercase mb-1" style="color: var(--mem-accent-gold);">
            <i class="ph-duotone ph-calendar-Star me-1" aria-hidden="true"></i> Network Observatory Status
          </div>
          <?php if ($memoriamRibbonActive): ?>
            <p class="small mb-0" style="color: var(--mem-text-secondary);">
              <strong>30-Day Network-Wide Tribute Active (Oct 28 &ndash; Nov 28, 2026):</strong> All RaggieSoft properties currently carry the top-of-site <em>&ldquo;Second Star to the Right&rdquo;</em> memorial ribbon. After November 28, 2026, the top ribbon will sunset automatically while this dedication page remains permanently in the archive.
            </p>
          <?php else: ?>
            <p class="small mb-0" style="color: var(--mem-text-secondary);">
              <strong>Permanent Archival Dedication:</strong> Following our 30-day network-wide mourning ribbon (Oct 28 &ndash; Nov 28, 2026), this page stands permanently in the RaggieSoft Mission Profile archive in gratitude for a lifetime of inspiration.
            </p>
          <?php endif; ?>
        </div>
      </aside>
    </div>
  </div>

  <!-- =====================================================================
       3. THE COSMIC LINEAGE: HOW THAT SPARK BUILT THIS NETWORK
       ===================================================================== -->
  <section class="mb-5" aria-labelledby="cosmic-lineage-heading">
    <div class="border-bottom pb-3 mb-4" style="border-color: var(--mem-border) !important;">
      <span class="memoriam-section-eyebrow">From the Living Room to the Stars</span>
      <h2 id="cosmic-lineage-heading" class="h3 fw-bold mb-1">
        Where That Childhood Wonder Lives Across RaggieSoft
      </h2>
      <p class="mb-0" style="color: var(--mem-text-secondary);">
        Every cosmic title, progressive rock suite, and star-chart on this network carries a piece of that weeknight television inspiration.
      </p>
    </div>

    <div class="row g-4">
      <!-- Card 1: The Stardust Engine -->
      <div class="col-md-6">
        <article class="memoriam-card d-flex flex-column justify-content-between">
          <div>
            <span class="memoriam-pill-badge">1. The Band &amp; The Cosmic Portal</span>
            <h3 class="h5 fw-bold mb-2">
              <a href="https://stardust.raggiesoft.com" class="text-decoration-none" style="color: var(--mem-text);">
                The Stardust Engine (<code>stardust.raggiesoft.com</code>)
              </a>
            </h3>
            <p class="small" style="color: var(--mem-text-secondary);">
              In our lore, when siblings Ryan and Cassidy O&rsquo;Connell and their twin cousins Evan and Tyler Wright formed their band at CPI in 1986, they named it after the very first song they wrote together&mdash;<a href="https://music.raggiesoft.com/the-stardust-engine/1987-electric-color?track=the-stardust-engine-1987-electric-color-1-13"><strong>&ldquo;The Stardust Engine&rdquo;</strong></a>&mdash;celebrating their shared love of the cosmos (<em>&ldquo;Stardust&rdquo;</em>) and the rockets to get you there (<em>&ldquo;Engine&rdquo;</em>). That title only exists because a kid grew up looking toward the stars at 7:00 PM on weeknights.
            </p>
          </div>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <a href="https://stardust.raggiesoft.com" class="btn btn-sm btn-primary text-white fw-bold">
              <i class="ph-duotone ph-rocket-launch me-1" aria-hidden="true"></i> Explore Stardust Portal
            </a>
            <a href="https://books.raggiesoft.com/stardust-engine" class="btn btn-sm memoriam-btn-card-secondary">
              <i class="ph-duotone ph-book-open me-1" aria-hidden="true"></i> Read Band Novel
            </a>
          </div>
        </article>
      </div>

      <!-- Card 2: Escape Velocity (Ad Astra) -->
      <div class="col-md-6">
        <article class="memoriam-card d-flex flex-column justify-content-between">
          <div>
            <span class="memoriam-pill-badge">2. The 15:33 Four-Movement Suite</span>
            <h3 class="h5 fw-bold mb-2">
              <a href="https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes?track=1-06-escape-velocity-ad-astra" class="text-decoration-none" style="color: var(--mem-text);">
                &ldquo;Escape Velocity (Ad Astra)&rdquo; (1995 / 2016)
              </a>
            </h3>
            <p class="small" style="color: var(--mem-text-secondary);">
              Cassidy O&rsquo;Connell&rsquo;s four-movement progressive rock autobiography&mdash;known to fans simply as <strong>&ldquo;Ad Astra&rdquo;</strong>&mdash;charts a literal voyage from terrestrial confinement into weightless deep space (<em>Movement III: The Cosmos</em>) before landing on a new exoplanet horizon (<em>Movement IV: Re-entry &mdash; The New World</em>). Both the 15:33 studio master on <em>The Warehouse Tapes</em> and the 13:03 live stadium performance on <em>Live at the Crucible</em> are love letters to cosmic exploration.
            </p>
          </div>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <a href="https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes?track=1-06-escape-velocity-ad-astra" class="btn btn-sm btn-primary text-white fw-bold">
              <i class="ph-duotone ph-headphones me-1" aria-hidden="true"></i> Stream 1995 Studio Suite (15:33)
            </a>
            <a href="https://music.raggiesoft.com/the-stardust-engine/2016-live-at-the-crucible?track=2-01-escape-velocity-ad-astra" class="btn btn-sm memoriam-btn-card-secondary">
              <i class="ph-duotone ph-waveform me-1" aria-hidden="true"></i> Stream 2016 Crucible Live (13:03)
            </a>
          </div>
        </article>
      </div>

      <!-- Card 3: The Twin Moons -->
      <div class="col-md-6">
        <article class="memoriam-card d-flex flex-column justify-content-between">
          <div>
            <span class="memoriam-pill-badge">3. Dual Planetarium Concept Albums</span>
            <h3 class="h5 fw-bold mb-2">
              <a href="https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g?track=1-01-moon-1-tidal-lock" class="text-decoration-none" style="color: var(--mem-text);">
                <em>The Twin Moons</em>: <em>Sanctuary (Zero-G)</em> &amp; <em>Mile Marker 98</em>
              </a>
            </h3>
            <p class="small" style="color: var(--mem-text-secondary);">
              Classic science fiction taught us that astrophysical phenomena&mdash;synchronous tidal locks, periapsis slingshots, the Goldilocks zone, and the Roche limit&mdash;are also mirrors for human loyalty and survival. Our 2003 dual planetarium project pairs Cassidy&rsquo;s zero-gravity <em>Cosmic Tidal Lock Sound&trade;</em> on <a href="https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g?track=1-01-moon-1-tidal-lock"><em>Sanctuary (Zero-G)</em></a> with Ryan&rsquo;s heavy-rock orbital rescue on <a href="https://music.raggiesoft.com/the-stardust-engine/2003-mile-marker-98?track=1-01-moon-2-roche-limit"><em>Mile Marker 98</em></a>, uniting on <a href="https://music.raggiesoft.com/the-stardust-engine/2003-mile-marker-98?track=1-10-twin-moons-touchdown"><em>&ldquo;Twin Moons: Touchdown.&rdquo;</em></a>
            </p>
          </div>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <a href="https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g?track=1-01-moon-1-tidal-lock" class="btn btn-sm btn-primary text-white fw-bold">
              <i class="ph-duotone ph-planet me-1" aria-hidden="true"></i> Moon 1: Sanctuary (Zero-G)
            </a>
            <a href="https://music.raggiesoft.com/the-stardust-engine/2003-mile-marker-98?track=1-01-moon-2-roche-limit" class="btn btn-sm memoriam-btn-card-secondary">
              <i class="ph-duotone ph-meteor me-1" aria-hidden="true"></i> Moon 2: Mile Marker 98
            </a>
          </div>
        </article>
      </div>

      <!-- Card 4: Nebulae (Caelum-IV) & Escape Velocity: Ad Astra Chronicles -->
      <div class="col-md-6">
        <article class="memoriam-card d-flex flex-column justify-content-between">
          <div>
            <span class="memoriam-pill-badge">4. The New World &amp; Star Date Chronicles</span>
            <h3 class="h5 fw-bold mb-2">
              <a href="https://nebulae.raggiesoft.com" class="text-decoration-none" style="color: var(--mem-text);">
                RaggieSoft Nebulae (Caelum-IV) &amp; <em>Escape Velocity: Ad Astra</em>
              </a>
            </h3>
            <p class="small" style="color: var(--mem-text-secondary);">
              During Movement IV of <em>&ldquo;Escape Velocity (Ad Astra),&rdquo;</em> Cassidy and her family set down aboard the <em>U.S.S. Aethelgard</em> on <strong>Caelum-IV</strong> (<a href="https://nebulae.raggiesoft.com"><code>nebulae.raggiesoft.com</code></a>)&mdash;a tidally locked, purple-ocean moon orbiting the ringed super-Jovian Vespera (<em>Kepler-442c</em>) where the living biosphere pulses at 120.0 BPM. Follow their exploration in the <a href="https://books.raggiesoft.com/ad-astra"><strong><em>Escape Velocity: Ad Astra</em></strong></a> book series (logged at <code>Stardate 49601.0</code>) alongside <a href="https://books.raggiesoft.com/knox"><strong><em>Project: KNOX</em></strong></a>.
            </p>
          </div>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <a href="https://nebulae.raggiesoft.com" class="btn btn-sm btn-primary text-white fw-bold">
              <i class="ph-duotone ph-planet me-1" aria-hidden="true"></i> Explore Caelum-IV (Nebulae)
            </a>
            <a href="https://books.raggiesoft.com/ad-astra" class="btn btn-sm memoriam-btn-card-secondary">
              <i class="ph-duotone ph-book-open-text me-1" aria-hidden="true"></i> Read Ad Astra (Stardate 49601)
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       4. CLOSING BENEDICTION & LEGAL / FICTITIOUS ENTITIES DISCLAIMER
       ===================================================================== -->
  <section class="memoriam-card memoriam-card-gold text-center mb-4" aria-labelledby="closing-tribute-heading">
    <span class="memoriam-section-eyebrow">Ad Astra Per Aspera (To the Stars Through Hardships)</span>
    <h2 id="closing-tribute-heading" class="h4 fw-bold mb-2">
      &ldquo;Where to? Second star to the right, and straight on &rsquo;til morning!&rdquo;
    </h2>
    <p class="mx-auto mb-2" style="max-width: 68ch; color: var(--mem-text-secondary);">
      Whenever someone visits a RaggieSoft property, streams a cosmic synth-rock suite in <a href="https://music.raggiesoft.com">The Listening Room</a>, explores <a href="https://nebulae.raggiesoft.com">Caelum-IV on Nebulae</a>, or reads a chapter in the <a href="https://books.raggiesoft.com">RaggieSoft Book Reader</a>, a quiet part of that experience owes its existence to a family sitting together in the living room after <em>Jeopardy!</em> and looking out at the stars from the bridge of the <em>NCC-1701-D</em>.
    </p>
    <p class="mb-0 fw-bold" style="color: var(--mem-accent-gold);">
      <em>Ad astra per aspera</em>, Captain. Thank you for the stars.
    </p>
  </section>

  <div class="p-3 rounded-3 border small" style="background-color: var(--mem-surface-elevated); border-color: var(--mem-border) !important; color: var(--mem-text-secondary);" role="note" aria-label="Editorial and Fictitious Entities Disclaimer">
    <strong>Editorial Tribute &amp; Fictitious Entities Notice:</strong> This page is a non-commercial, personal creator&rsquo;s tribute written by <strong>Michael P. Ragsdale</strong> honoring the life and cultural impact of <strong>Sir Patrick Stewart (1940–2026)</strong>. <em>Star Trek: The Next Generation</em> and <em>NCC-1701-D</em> are referenced strictly for historical commentary and personal attribution; RaggieSoft is wholly independent and is not affiliated with or endorsed by Paramount Global. All RaggieSoft narrative characters, bands (including <em>The Stardust Engine</em>), universities (including <em>Commonwealth Polytechnic Institute / CPI</em>, <em>The Forgers</em>, and <em>The Crucible</em>), corporations (including <em>OmniCorp</em>, <em>Apex Records</em>, <em>Prairie Coachworks</em>, and <em>Sainte-Claire</em>), transit agencies (<em>Blue Ridge Transit</em>), in-universe legal filings, and any entity with <strong>&ldquo;LLC&rdquo;</strong> in its name (including <em>Engine Room Records, LLC</em>) are works of fiction. Any resemblance to actual persons (living or dead), businesses, institutions, or events is purely coincidental.
  </div>

</div>

