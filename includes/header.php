<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/header.php
 * Role: Global Master HTML `<head>`, SEO/OpenGraph/JSON-LD Engine, Network Bar & Top Navbar
 * Domain: https://raggiesoft.com (Included by `amanda/elara.php` & standalone error pages)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Every web page on `raggiesoft.com` begins with this master header template.
 * Before the specific page content inside `<main id="main-content">` is ever
 * rendered, `includes/header.php` outputs:
 *   1. `<!doctype html>` and `<html lang="en">` with optional forced dark-mode
 *      attributes (`data-theme="dark" data-bs-theme="dark"`).
 *   2. `<head>` metadata: Google Analytics 4 (`gtag.js`), `<meta charset="utf-8">`,
 *      responsive viewport, `<meta name="color-scheme" content="light dark">`,
 *      `<title>`, OpenGraph (`og:*`) & Twitter Card (`twitter:*`) social preview
 *      tags, `<link rel="canonical">`, and a rich Schema.org JSON-LD `@graph`
 *      structured-data script for search engines.
 *   3. Stylesheet & Asset Queue: Self-hosted DaisyUI 5 (`daisyui.css`, `themes.css`),
 *      the Bootstrap-compatible layout polyfill (`raggiesoft-grid.css`), Phosphor
 *      Duotone icon font (`phosphor.min.css`), `<link rel="preload">` hints for
 *      above-the-fold brand logos, favicons, Google Fonts, and deferred SPA scripts
 *      (`elara-spa.js`, `hero-image.js`, `raggiesoft-network.js`, `cinema-carousel.js`).
 *      Note on Content Security Policy (CSP): Serving core UI frameworks (`daisyui.css`,
 *      `phosphor.min.css`, `elara-spa.js`) from RaggieSoft's own first-party CDN
 *      (`https://assets.raggiesoft.com`) avoids scattered third-party CDN script
 *      dependencies and aligns cleanly with strict CSP origin allowlists.
 *   4. Theme & Accessibility Shell (`<body>`):
 *      - Early inline `<script>` syncing `prefers-color-scheme` BEFORE paint to
 *        prevent a white Flash of Unstyled Content (FOUC) in Dark Mode.
 *      - WCAG 2.1 AA "Skip to Main Content" keyboard link (`href="#main-content"`).
 *      - Animated `#page-loader` overlay wired to `elara:navigating` / `elara:loaded`.
 *      - Cross-subdomain `.rs-network-bar` ecosystem switcher + auto-expiring
 *        30-day Sir Patrick Stewart `.rs-memoriam-bar` tribute ribbon (through
 *        `2026-11-28`).
 *      - Sticky `<header><nav class="navbar">` branding + dynamic `$currentHeaderMenu`
 *        partial (`header-default.php`, `header-about.php`, `header-contact.php`, etc.).
 *
 * INPUTS (INHERITED FROM `amanda/elara.php` GLOBAL SCOPE):
 * - `$settings`, `$pageConfig`, `$currentSite`, `$currentPageTheme`, `$cdnBaseUrl`,
 *   `$pageTitle`, `$ogTitle`, `$ogDescription`, `$ogImage`, `$ogUrl`,
 *   `$navbarBrandLogo`, `$navbarBrandLink`, `$currentHeaderMenu`, `$customPageAssets`,
 *   plus PHP superglobals `$_SERVER['REQUEST_URI']` and `$_SERVER['HTTP_HOST']`.
 * ============================================================================
 */
// includes/header.php
// v7.2.0 - RaggieSoft Production (SEO Schema Engine Active)
// Updated: Added Animated Hamburger Menu & JSON-LD Structured Data

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Global Master Header
 * Purpose: The foundational HTML `<head>` and top navigation shell for all RaggieSoft applications.
 * 
 * Strategy & Implementation:
 * - Employs extensive schema.org JSON-LD generation based on dynamic `$pageConfig` parameters to support SEO and 
 *   narrative metadata (MusicGroup, MusicAlbum, CreativeWorkSequence).
 * - Implements a robust "Loader" overlay that visually masks network latency and hydrates seamlessly into the 
 *   Elara SPA (Single Page Application) lifecycle.
 * - Handles theme resolution (`dark`, `light`, `corporate`, `ad-astra`) and dynamically builds the CSS queue 
 *   to ensure self-hosted DaisyUI 5, Phosphor Icons, and custom grid variables are loaded sequentially.
 * 
 * Maintenance Recommendations:
 * - The Hamburger Menu animation is driven by a vanilla JS fallback integrated within the HTML.
 * - Be extremely cautious when modifying the JSON-LD schema blocks, as Google Search Console will reject malformed outputs.
 */

// 1. Resolve Context
// Determine the current site identity and theme, falling back to 'raggiesoft' core defaults
$site  = $currentSite ?? 'raggiesoft';
$theme = $currentPageTheme ?? $site;

// Ensure CDN Root exists (populated from `data/settings.json` -> `https://assets.raggiesoft.com`)
$cdn_root = $cdnBaseUrl ?? $cdnBaseUrl; 

// Theme Reset Logic: If a sub-project specifies a custom `$site` without overriding `$theme`,
// match `$theme` to `$site` so its project-specific palette applies cleanly.
if ($site !== 'raggiesoft' && $theme === 'raggiesoft') {
    $theme = $site;
}

// --- FORCE DARK MODE LOGIC ---
// Certain sci-fi and industrial routes (`ad-astra`, `industrial`, `dark`) are designed
// exclusively for dark surfaces. Setting `$force_dark_mode = true` stamps `data-theme="dark"`
// and `data-bs-theme="dark"` directly onto `<html>` during PHP server-side rendering!
$force_dark_mode = ($theme === 'dark' || $theme === 'ad-astra' || $theme === 'industrial');

// --- 2. BRAND FONT LOGIC ---
// Converts a PHP array of font names (e.g., `["Audiowide", "sans-serif"]`) into a valid
// CSS `font-family` declaration (`'Audiowide', sans-serif`). Notice how generic CSS font
// keywords (`sans-serif`, `serif`, `monospace`) MUST NOT be wrapped in quotes in CSS,
// whereas custom font family names (`'Audiowide'`, `'Playfair Display'`) ARE quoted!
$font_stack = $pageConfig['brandFont'] ?? $settings['brandFont'] ?? ['sans-serif'];
if (!is_array($font_stack) || empty($font_stack)) { $font_stack = ['sans-serif']; }

$css_font_parts = array_map(function($font) {
    $generics = ['serif', 'sans-serif', 'monospace', 'cursive', 'fantasy', 'system-ui'];
    return in_array(strtolower($font), $generics) ? $font : "'$font'";
}, $font_stack);

$brand_font_css = implode(', ', $css_font_parts);

// 3. Path Definitions
$path_grid = $cdn_root . "/common/css/raggiesoft-grid.css";

// 4. Build CSS Queue (Self-Hosted DaisyUI 5 + RaggieSoft Grid & Network Bar)
// Loaded in strict cascade order so `raggiesoft-grid.css` and `raggiesoft-network.css`
// can build upon DaisyUI 5's base tokens and theme variables:
$css_load_queue = [
    $cdn_root . "/common/vendor/daisyui/daisyui.css",
    $cdn_root . "/common/vendor/daisyui/themes.css",
    $path_grid,
    $cdn_root . "/common/css/raggiesoft-logo.css",
    $cdn_root . "/common/css/raggiesoft-network.css?v=20261121e"
];

// 5. Critical Images (`<link rel="preload" as="image">`)
// Tells the browser to start downloading the navbar logo and any hero textures
// (`$customPageAssets`) immediately for faster Largest Contentful Paint (LCP).
$critical_images = [];
if (!empty($navbarBrandLogo)) $critical_images[] = $navbarBrandLogo;

if (!empty($pageConfig['navbarBrandLogoDark'])) $critical_images[] = $cdnBaseUrl . $pageConfig['navbarBrandLogoDark'];

if (isset($customPageAssets) && is_array($customPageAssets)) {
    $critical_images = array_merge($critical_images, $customPageAssets);
}
?>
<!doctype html>
<html lang="en" class="h-100" <?php echo $force_dark_mode ? 'data-theme="dark" data-bs-theme="dark"' : ''; ?>>
  <head>
    
    <?php 
    // Optional Google Analytics 4 (`gtag.js`) injection controlled via `data/settings.json`.
    // Notice `htmlspecialchars()` around `trackingId` to prevent attribute/script injection.
    if (
        isset($settings['analytics']['enabled']) && 
        $settings['analytics']['enabled'] === true &&
        !empty($settings['analytics']['trackingId'])
    ): 
    ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>');
        </script>
    <?php endif; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Modern Web Guidance (dark-mode): Declare support for both light and dark themes -->
    <meta name="color-scheme" content="light dark">
    
    <?php
    // =========================================================================
    // CANONICAL URL & OPENGRAPH / TWITTER SOCIAL METADATA SYNTHESIS
    // =========================================================================
    // When someone shares a `raggiesoft.com` link on iMessage, Discord, Slack,
    // LinkedIn, or X/Twitter, those apps scrape `<meta property="og:*">` and
    // `<meta name="twitter:*">` tags from `<head>`.
    // Below, we inspect `$_SERVER['REQUEST_URI']` and `$pageConfig` to resolve
    // clean fallbacks—including dedicated `article` metadata and custom 1200x630
    // social artwork when viewing `/in-memoriam` (Sir Patrick Stewart tribute).
    $resolvedPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $isMemoriamRoute = ($resolvedPath === '/in-memoriam' || $resolvedPath === '/about/in-memoriam' || (($pageConfig['schemaType'] ?? '') === 'MemorialTribute'));
    $resolvedCanonical = $ogUrl ?? ('https://' . ($_SERVER['HTTP_HOST'] ?? 'raggiesoft.com') . ($isMemoriamRoute ? '/in-memoriam' : $resolvedPath));
    $resolvedOgTitle = $ogTitle ?? $pageTitle ?? 'RaggieSoft';
    $resolvedOgDesc = !empty($ogDescription) ? $ogDescription : 'RaggieSoft is the independent creative storytelling, original music (Engine Room Records), and literary publishing (Ocean View Archives) network of Michael P. Ragsdale.';
    $resolvedOgImage = !empty($ogImage)
        ? $ogImage
        : ($isMemoriamRoute
            ? ($cdn_root . '/raggiesoft-corporate/images/og/in-memoriam-patrick-stewart-og.jpg')
            : ($cdn_root . '/raggiesoft-corporate/images/logo/raggiesoft-logo.png'));
    $resolvedOgImageAlt = $isMemoriamRoute
        ? 'Second Star to the Right • In Memoriam: Sir Patrick Stewart (July 13, 1940 – October 28, 2026) — Ad astra per aspera'
        : ($resolvedOgTitle . ' — RaggieSoft');
    $resolvedOgType = $isMemoriamRoute ? 'article' : 'website';
    ?>
    <?php /* Every dynamic string echoed into an HTML attribute or `<title>` is escaped with `htmlspecialchars()` to prevent XSS */ ?>
    <title><?php echo htmlspecialchars($pageTitle ?? 'RaggieSoft'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($resolvedOgDesc); ?>">
    <meta name="author" content="Michael P. Ragsdale">
    
    <!-- OpenGraph Protocol Metadata -->
    <meta property="og:type" content="<?php echo htmlspecialchars($resolvedOgType); ?>">
    <meta property="og:site_name" content="RaggieSoft">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?php echo htmlspecialchars($resolvedOgTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($resolvedOgDesc); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($resolvedOgImage); ?>">
    <meta property="og:image:secure_url" content="<?php echo htmlspecialchars($resolvedOgImage); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($resolvedOgImageAlt); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($resolvedCanonical); ?>">
    <?php if ($isMemoriamRoute): ?>
    <?php /* Additional OpenGraph `article:*` timestamps and topic tags emitted exclusively on `/in-memoriam` */ ?>
    <meta property="article:published_time" content="2026-10-29T00:00:00-04:00">
    <meta property="article:modified_time" content="2026-10-30T09:35:00-04:00">
    <meta property="article:author" content="https://michaelpragsdale.com">
    <meta property="article:section" content="In Memoriam &amp; Cosmic Tribute">
    <meta property="article:tag" content="Sir Patrick Stewart">
    <meta property="article:tag" content="Star Trek: The Next Generation">
    <meta property="article:tag" content="Second Star to the Right">
    <meta property="article:tag" content="Ad Astra Per Aspera">
    <meta property="article:tag" content="The Stardust Engine">
    <meta property="article:tag" content="Escape Velocity (Ad Astra)">
    <meta property="article:tag" content="The Twin Moons">
    <meta property="article:tag" content="Starfield Calibration">
    <?php endif; ?>

    <!-- Twitter / X Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@RaggieSoft">
    <meta name="twitter:creator" content="@RaggieSoft">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($resolvedOgTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($resolvedOgDesc); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($resolvedOgImage); ?>">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($resolvedOgImageAlt); ?>">

    <?php /* `<link rel="canonical">` prevents duplicate-content SEO penalties (e.g., `/about/in-memoriam` vs `/in-memoriam`) */ ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($resolvedCanonical); ?>">

    <?php
    // =========================================================================
    // GLOBAL RAGGIESOFT SCHEMA.ORG JSON-LD @GRAPH ENGINE
    // Connects Organization, WebSite, Person (Architect), WebPage, BreadcrumbList,
    // and specialized entities (including the Sir Patrick Stewart In Memoriam
    // cosmic dedication graph on /in-memoriam).
    //
    // TEACHING NOTE ON JSON-LD:
    // JSON-LD (`application/ld+json`) is machine-readable knowledge-graph data
    // for search engines. Using `@id` URIs (like `"https://raggiesoft.com/#organization"`)
    // lets multiple nodes cross-reference each other cleanly inside `@graph`!
    // =========================================================================
    $organizationNode = [
        "@type" => "Organization",
        "@id" => "https://raggiesoft.com/#organization",
        "name" => "RaggieSoft",
        "alternateName" => ["RaggieSoft Media", "Engine Room Records", "Ocean View Archives", "RaggieSoft Story Crossroads"],
        "url" => "https://raggiesoft.com",
        "logo" => [
            "@type" => "ImageObject",
            "url" => "https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png"
        ],
        "founder" => [
            "@id" => "https://michaelpragsdale.com/#michael-ragsdale"
        ],
        "location" => [
            "@type" => "Place",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Norfolk",
                "addressRegion" => "VA",
                "addressCountry" => "US"
            ]
        ],
        "sameAs" => [
            "https://raggiesoft.com",
            "https://nebulae.raggiesoft.com",
            "https://music.raggiesoft.com",
            "https://books.raggiesoft.com",
            "https://crossroads.raggiesoft.com",
            "https://cedarrun.raggiesoft.com",
            "https://stardust.raggiesoft.com",
            "https://engineroom.raggiesoft.com",
            "https://lore.raggiesoft.com",
            "https://corporate.raggiesoft.com",
            "https://storetrainer.raggiesoft.com",
            "https://backstage.raggiesoft.com",
            "https://waystation.raggiesoft.com",
            "https://jessica.raggiesoft.com",
            "https://michaelpragsdale.com",
            "https://github.com/raggiesoft"
        ]
    ];

    $architectNode = [
        "@type" => "Person",
        "@id" => "https://michaelpragsdale.com/#michael-ragsdale",
        "name" => "Michael P. Ragsdale",
        "givenName" => "Michael",
        "additionalName" => "P.",
        "familyName" => "Ragsdale",
        "jobTitle" => "Founder & Creative Director",
        "url" => "https://michaelpragsdale.com",
        "worksFor" => [
            "@id" => "https://raggiesoft.com/#organization"
        ]
    ];

    $websiteNode = [
        "@type" => "WebSite",
        "@id" => "https://raggiesoft.com/#website",
        "url" => "https://raggiesoft.com",
        "name" => "RaggieSoft Hub",
        "description" => "The central portal for RaggieSoft creative storytelling, Engine Room Records, Ocean View Archives, and The Stardust Engine.",
        "inLanguage" => "en-US",
        "publisher" => [
            "@id" => "https://raggiesoft.com/#organization"
        ]
    ];

    if ($isMemoriamRoute) {
        // Branch A: Specialized `/in-memoriam` Knowledge Graph linking Organization +
        // Architect + WebSite + Sir Patrick Stewart (`Person`) + `WebPage`/`AboutPage` +
        // `BreadcrumbList` + Childhood TV Schedule (`ItemList`) + `Article` + musical/book `mentions`:
        $schema = [
            "@context" => "https://schema.org",
            "@graph" => [
                $organizationNode,
                $architectNode,
                $websiteNode,
                [
                    "@type" => "Person",
                    "@id" => "https://raggiesoft.com/in-memoriam#sir-patrick-stewart",
                    "name" => "Sir Patrick Stewart",
                    "honorificPrefix" => "Sir",
                    "givenName" => "Patrick",
                    "familyName" => "Stewart",
                    "birthDate" => "1940-07-13",
                    "deathDate" => "2026-10-28",
                    "nationality" => [
                        "@type" => "Country",
                        "name" => "United Kingdom"
                    ],
                    "jobTitle" => [
                        "Actor",
                        "Shakespearean Stage Performer",
                        "Portrayer of Captain Jean-Luc Picard (U.S.S. Enterprise NCC-1701-D)"
                    ],
                    "description" => "Acclaimed British stage and screen actor whose portrayal of Captain Jean-Luc Picard aboard the U.S.S. Enterprise (NCC-1701-D) on Star Trek: The Next Generation taught a kid watching weeknight television with his family to look up at the night sky and wonder what is out there.",
                    "sameAs" => [
                        "https://en.wikipedia.org/wiki/Patrick_Stewart",
                        "https://www.wikidata.org/wiki/Q16296"
                    ],
                    "performerIn" => [
                        "@type" => "TVSeries",
                        "name" => "Star Trek: The Next Generation",
                        "character" => [
                            "@type" => "Person",
                            "name" => "Captain Jean-Luc Picard"
                        ]
                    ]
                ],
                [
                    "@type" => ["WebPage", "AboutPage"],
                    "@id" => "https://raggiesoft.com/in-memoriam#webpage",
                    "url" => "https://raggiesoft.com/in-memoriam",
                    "name" => "In Memoriam: Sir Patrick Stewart (1940–2026) — Second Star to the Right | RaggieSoft",
                    "description" => $resolvedOgDesc,
                    "inLanguage" => "en-US",
                    "datePublished" => "2026-10-29T00:00:00-04:00",
                    "dateModified" => "2026-10-30T09:35:00-04:00",
                    "isPartOf" => [
                        "@id" => "https://raggiesoft.com/#website"
                    ],
                    "about" => [
                        "@id" => "https://raggiesoft.com/in-memoriam#sir-patrick-stewart"
                    ],
                    "mainEntity" => [
                        "@id" => "https://raggiesoft.com/in-memoriam#article"
                    ],
                    "breadcrumb" => [
                        "@id" => "https://raggiesoft.com/in-memoriam#breadcrumb"
                    ],
                    "primaryImageOfPage" => [
                        "@type" => "ImageObject",
                        "url" => $resolvedOgImage,
                        "width" => 1200,
                        "height" => 630,
                        "caption" => $resolvedOgImageAlt
                    ]
                ],
                [
                    "@type" => "BreadcrumbList",
                    "@id" => "https://raggiesoft.com/in-memoriam#breadcrumb",
                    "itemListElement" => [
                        [
                            "@type" => "ListItem",
                            "position" => 1,
                            "name" => "RaggieSoft Hub",
                            "item" => "https://raggiesoft.com/"
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 2,
                            "name" => "Mission Profile",
                            "item" => "https://raggiesoft.com/about"
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 3,
                            "name" => "In Memoriam: Sir Patrick Stewart (1940–2026)",
                            "item" => "https://raggiesoft.com/in-memoriam"
                        ]
                    ]
                ],
                [
                    "@type" => "ItemList",
                    "@id" => "https://raggiesoft.com/in-memoriam#weeknight-television-schedule",
                    "name" => "Childhood Weekday Evening Family Television Schedule",
                    "description" => "The five-part Monday-through-Friday family television ritual that culminated aboard the U.S.S. Enterprise (NCC-1701-D) and sparked the cosmic imagination behind RaggieSoft.",
                    "numberOfItems" => 5,
                    "itemListOrder" => "https://schema.org/ItemListOrderAscending",
                    "itemListElement" => [
                        ["@type" => "ListItem", "position" => 1, "name" => "Local News"],
                        ["@type" => "ListItem", "position" => 2, "name" => "National News"],
                        ["@type" => "ListItem", "position" => 3, "name" => "Wheel of Fortune"],
                        ["@type" => "ListItem", "position" => 4, "name" => "Jeopardy!"],
                        ["@type" => "ListItem", "position" => 5, "name" => "Star Trek: The Next Generation — Aboard the NCC-1701-D"]
                    ]
                ],
                [
                    "@type" => "Article",
                    "@id" => "https://raggiesoft.com/in-memoriam#article",
                    "mainEntityOfPage" => [
                        "@id" => "https://raggiesoft.com/in-memoriam#webpage"
                    ],
                    "headline" => "In Memoriam: Sir Patrick Stewart (1940–2026) — Second Star to the Right",
                    "alternativeHeadline" => "Where to? Second star to the right, and straight on 'til morning! Ad astra per aspera, Captain.",
                    "description" => "A personal tribute from Michael P. Ragsdale honoring Sir Patrick Stewart (1940–2026), whose portrayal of the Captain of the NCC-1701-D on weeknight family television sparked the cosmic imagination behind RaggieSoft, The Stardust Engine, Escape Velocity (Ad Astra), The Twin Moons, Starfield Calibration, and Caelum-IV.",
                    "articleSection" => "Creator's Cosmic Tribute & In Memoriam",
                    "genre" => ["Memorial Tribute", "Personal Essay", "Cultural Attribution"],
                    "inLanguage" => "en-US",
                    "datePublished" => "2026-10-29T00:00:00-04:00",
                    "dateModified" => "2026-10-30T09:35:00-04:00",
                    "license" => "https://creativecommons.org/licenses/by-sa/4.0/",
                    "image" => [
                        "@type" => "ImageObject",
                        "url" => $resolvedOgImage,
                        "width" => 1200,
                        "height" => 630,
                        "caption" => $resolvedOgImageAlt
                    ],
                    "author" => [
                        "@id" => "https://michaelpragsdale.com/#michael-ragsdale"
                    ],
                    "publisher" => [
                        "@id" => "https://raggiesoft.com/#organization"
                    ],
                    "about" => [
                        ["@id" => "https://raggiesoft.com/in-memoriam#sir-patrick-stewart"],
                        ["@id" => "https://raggiesoft.com/in-memoriam#weeknight-television-schedule"]
                    ],
                    "keywords" => [
                        "Sir Patrick Stewart",
                        "In Memoriam",
                        "Captain Jean-Luc Picard",
                        "NCC-1701-D",
                        "Star Trek: The Next Generation",
                        "Second Star to the Right",
                        "Ad Astra Per Aspera",
                        "The Stardust Engine",
                        "Escape Velocity (Ad Astra)",
                        "The Twin Moons",
                        "Starfield Calibration",
                        "The Cosmic Tidal Lock Sound",
                        "Caelum-IV",
                        "RaggieSoft Nebulae"
                    ],
                    "mentions" => [
                        [
                            "@type" => "MusicGroup",
                            "@id" => "https://stardust.raggiesoft.com/#musicgroup",
                            "name" => "The Stardust Engine",
                            "url" => "https://stardust.raggiesoft.com"
                        ],
                        [
                            "@type" => "MusicRecording",
                            "name" => "Escape Velocity (Ad Astra)",
                            "isrcCode" => "QZW9K2547910",
                            "duration" => "PT15M33S",
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/1995-the-warehouse-tapes/escape-velocity-ad-astra"
                        ],
                        [
                            "@type" => "MusicRecording",
                            "name" => "Escape Velocity (Ad Astra) [Live at the Crucible]",
                            "isrcCode" => "QTAHP2600043",
                            "duration" => "PT13M3S",
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/2016-live-at-the-crucible/escape-velocity-ad-astra"
                        ],
                        [
                            "@type" => "MusicAlbum",
                            "name" => "Escape Velocity (Ad Astra) [1996 Album]",
                            "datePublished" => "1996-07-16",
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/1996-ad-astra-single"
                        ],
                        [
                            "@type" => "MusicAlbum",
                            "name" => "Sanctuary (Zero-G) — The Twin Moons: Moon 1",
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/2003-sanctuary-zero-g/moon-1-tidal-lock"
                        ],
                        [
                            "@type" => "MusicAlbum",
                            "name" => "Mile Marker 98 — The Twin Moons: Moon 2",
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/2003-mile-marker-98/moon-2-roche-limit"
                        ],
                        [
                            "@type" => "MusicAlbum",
                            "name" => "Starfield Calibration (Cosmic Tidal Lock Remixes)",
                            "datePublished" => "2011",
                            "numTracks" => 14,
                            "url" => "https://music.raggiesoft.com/the-stardust-engine/2011-starfield-calibration/the-stardust-engine"
                        ],
                        [
                            "@type" => "WebSite",
                            "name" => "RaggieSoft Nebulae — Caelum-IV Planetary Survey",
                            "url" => "https://nebulae.raggiesoft.com"
                        ],
                        [
                            "@type" => "BookSeries",
                            "name" => "Escape Velocity: Ad Astra (Stardate 49601 Chronicles)",
                            "url" => "https://books.raggiesoft.com/ad-astra"
                        ]
                    ]
                ]
            ]
        ];
    } elseif (isset($pageConfig['schemaType']) && $pageConfig['schemaType'] === 'MusicGroup') {
        // Branch B: `MusicGroup` schema linking The Stardust Engine to its verified Apple Music, Spotify, and YouTube Music profiles:
        $schema = [
            "@context" => "https://schema.org",
            "@graph" => [
                $organizationNode,
                $websiteNode,
                [
                    "@type" => "MusicGroup",
                    "@id" => "https://stardust.raggiesoft.com/#musicgroup",
                    "name" => "The Stardust Engine",
                    "genre" => "80s Arena Rock / Progressive Pop",
                    "url" => "https://stardust.raggiesoft.com/",
                    "image" => $resolvedOgImage,
                    "description" => $resolvedOgDesc,
                    "sameAs" => [
                        "https://music.apple.com/us/artist/the-stardust-engine/1889194363",
                        "https://open.spotify.com/artist/7Lr6o5qOo1OgVQGumUjFFT",
                        "https://music.youtube.com/channel/UCqtJNbYErxJ7ivveQXVS2mg"
                    ]
                ]
            ]
        ];
    } else {
        // Branch C: Default `WebPage` schema graph used by standard routes across `raggiesoft.com`:
        $schema = [
            "@context" => "https://schema.org",
            "@graph" => [
                $organizationNode,
                $architectNode,
                $websiteNode,
                [
                    "@type" => "WebPage",
                    "@id" => $resolvedCanonical . "#webpage",
                    "name" => $pageTitle ?? 'RaggieSoft',
                    "description" => $resolvedOgDesc,
                    "url" => $resolvedCanonical,
                    "inLanguage" => "en-US",
                    "isPartOf" => [
                        "@id" => "https://raggiesoft.com/#website"
                    ],
                    "about" => [
                        "@id" => "https://raggiesoft.com/#organization"
                    ]
                ]
            ]
        ];
    }
    ?>
    <?php /* Serialize the `$schema` PHP array into pretty-printed JSON-LD (`JSON_UNESCAPED_SLASHES` keeps URLs clean like `https://...` instead of `https:\/\/...`) */ ?>
    <script id="raggiesoft-head-jsonld" type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>

    <?php /* Sequential pagination `<link rel="prev/next">` tags injected automatically when `elara.php` sees `"isSequential": true` */ ?>
    <?php if (!empty($pageConfig['prevUrl'])): ?>
    <link rel="prev" href="https://<?php echo $_SERVER['HTTP_HOST'] . $pageConfig['prevUrl']; ?>">
    <?php endif; ?>
    <?php if (!empty($pageConfig['nextUrl'])): ?>
    <link rel="next" href="https://<?php echo $_SERVER['HTTP_HOST'] . $pageConfig['nextUrl']; ?>">
    <?php endif; ?>

    <?php /* Loop over `$css_load_queue` and append a cache-busting `?v=...` (or `&v=...` if a query string already exists) */ ?>
    <!-- Self-Hosted DaisyUI 5 & Phosphor Icons (Served via assets.raggiesoft.com) -->
    <?php foreach ($css_load_queue as $cssUrl): ?>
        <link href="<?php echo $cssUrl . (str_contains($cssUrl, '?') ? '&' : '?') . 'v=20261029h'; ?>" rel="stylesheet">
    <?php endforeach; ?>    

    <?php /* Self-hosted Phosphor Icons CSS providing `.ph-duotone`, `.ph-bold`, etc. without third-party script trackers */ ?>
    <link rel="stylesheet" href="<?php echo $cdn_root; ?>/fonts/phosphor/phosphor.min.css?v=20261029h">

    <?php /* Preload critical above-the-fold brand logos & hero textures to accelerate initial rendering */ ?>
    <?php foreach ($critical_images as $imgUrl): ?>
        <?php if($imgUrl): ?><link rel="preload" as="image" href="<?php echo $imgUrl; ?>"><?php endif; ?>
    <?php endforeach; ?>
    
    <?php /* Cross-platform Favicons, Web App Manifest, and OS browser chrome `theme-color` hints */ ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $cdn_root; ?>/common/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $cdn_root; ?>/common/images/favicons/site.webmanifest">
    
    <link rel="mask-icon" href="<?php echo $cdn_root; ?>/common/images/favicons/safari-pinned-tab.svg" color="#0d6efd">
    
    <link rel="shortcut icon" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon.ico">
    
    <meta name="msapplication-TileColor" content="#0d6efd">
    <meta name="msapplication-config" content="<?php echo $cdn_root; ?>/common/images/favicons/browserconfig.xml">
    
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0b0f19" media="(prefers-color-scheme: dark)">
    
    <?php /* Display & body web fonts used across corporate, sci-fi (`Audiowide`), and fantasy/editorial pages */ ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@400;700&family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">

    <?php /* `defer` downloads scripts in parallel without blocking HTML parsing, executing them once the DOM is built */ ?>
    <script src="<?php echo $cdnBaseUrl; ?>/common/js/elara-spa.js?v=<?php echo time(); ?>" defer></script>
    <script src="<?php echo $cdnBaseUrl; ?>/common/js/hero-image.js?v=20261029h" defer></script>
    <script src="<?php echo $cdnBaseUrl; ?>/common/js/raggiesoft-network.js?v=20261121e" defer></script>    
    <style>
        .brand-font { font-family: <?php echo $brand_font_css; ?> !important; }
        
        #page-loader {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: var(--bs-body-bg); color: var(--bs-body-color);
            z-index: 99999; display: flex; flex-direction: column; justify-content: center; align-items: center;
            opacity: 1; visibility: visible; transition: opacity 0.5s ease-in-out, visibility 0s 0s;
        }
        #page-loader.loader-hidden {
            opacity: 0; visibility: hidden; transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
        }
        .loader-progress-container {
            width: 300px; height: 4px; margin-top: 20px; position: relative; overflow: hidden;
            background-color: rgba(var(--bs-secondary-rgb), 0.2); 
        }
        .loader-progress-bar {
            height: 100%; width: 0%; transition: width 0.2s ease;
            background-color: var(--bs-primary); box-shadow: 0 0 10px var(--bs-primary);
        }
        
        /* Logo Filters */
        .navbar-brand-corporate-img { mix-blend-mode: multiply; }
        [data-bs-theme="dark"] .navbar-brand-corporate-img {
            filter: invert(1) grayscale(100%); mix-blend-mode: screen;
        }

        /* --- HAMBURGER MENU ANIMATION --- */
        .navbar-toggler { border: none; padding: 0.5rem; }
        
        @media (max-width: 767.98px) {
            #navbarCollapse .d-flex {
                flex-direction: column !important;
                align-items: flex-start !important;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }
        .navbar-toggler:focus { box-shadow: none; }
        
        .hamburger-icon {
            width: 28px;
            height: 20px;
            position: relative;
            transform: rotate(0deg);
            transition: .5s ease-in-out;
            cursor: pointer;
        }

        .hamburger-icon span {
            display: block;
            position: absolute;
            height: 2px;
            width: 100%;
            background: var(--bs-navbar-color); /* Matches theme text color */
            border-radius: 9px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        /* Bar Positions */
        .hamburger-icon span:nth-child(1) { top: 0px; }
        .hamburger-icon span:nth-child(2) { top: 9px; }
        .hamburger-icon span:nth-child(3) { top: 18px; }

        /* Transform to X when Open (aria-expanded="true") */
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(1) {
            top: 9px;
            transform: rotate(135deg);
        }
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(3) {
            top: 9px;
            transform: rotate(-135deg);
        }

        /* --- Global Theme Image Toggling --- */
        /* 1. Default State (Light) */
        .theme-img-light { display: inline-block !important; }
        .theme-img-dark { display: none !important; }

        /* 2. Explicit Dark Mode (Data Attribute) */
        [data-bs-theme="dark"] .theme-img-light { display: none !important; }
        [data-bs-theme="dark"] .theme-img-dark { display: inline-block !important; }

        /* 3. Native OS Dark Mode (Fires before JS sets the attribute) */
        @media (prefers-color-scheme: dark) {
            html:not([data-bs-theme="light"]) .theme-img-light { display: none !important; }
            html:not([data-bs-theme="light"]) .theme-img-dark { display: inline-block !important; }
        }
    </style>

    <script>
    // EARLY THEME SYNCHRONIZATION (Runs synchronously in `<head>` BEFORE `<body>` paints to prevent Flash of Unstyled Content / FOUC):
    // 1. If PHP already stamped `data-bs-theme="dark"` on `<html>` (`$force_dark_mode`), leave the server-forced dark theme untouched.
    // 2. Otherwise, query the visitor's OS preference via `window.matchMedia('(prefers-color-scheme: dark)')`, apply `data-theme`
    //    and `data-bs-theme` immediately, and subscribe to live OS Light/Dark transitions!
    (function() {
        // Check if PHP already forced a theme before JS takes over
        const isForcedByServer = document.documentElement.hasAttribute('data-bs-theme');
        
        const getPreferredTheme = () => {
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        
        const setTheme = theme => {
            // Only apply the dynamic theme if the server didn't explicitly force one
            if (!isForcedByServer) {
                document.documentElement.setAttribute('data-bs-theme', theme);
                document.documentElement.setAttribute('data-theme', theme);
            }
        };
        
        setTheme(getPreferredTheme());
        
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            setTheme(getPreferredTheme());
        });
    })();
    </script>
    <script src="<?php echo $cdnBaseUrl; ?>/common/js/cinema-carousel.js?v=2" defer></script>

    <style>
    /* Clean up DaisyUI buttons & dropdowns inside mobile nav */
    @media (max-width: 767.98px) {
        .mobile-nav-menu .btn {
            justify-content: flex-start !important;
            text-align: left !important;
        }
        .mobile-nav-menu details.dropdown, .mobile-nav-menu details.dropdown > summary.btn {
            width: 100%;
        }
    }

    /* Shrink navbar elements slightly on desktop to prevent wrapping */
    @media (min-width: 768px) {
        .navbar-brand .brand-font {
            font-size: 1.1rem !important;
        }
        .mobile-nav-menu .btn {
            font-size: 0.85rem !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .mobile-nav-menu {
            gap: 0.25rem !important;
        }
    }

    /* Missing responsive flex utilities from custom grid */
    @media (min-width: 768px) {
        .flex-md-row {
            flex-direction: row !important;
        }
        .align-items-md-center {
            align-items: center !important;
        }
        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .mobile-nav-menu {
            width: auto !important; /* Undo w-100 on desktop */
        }
    }

        
        /* Ensure navbar collapse breaks to a new line on mobile, and stays on the same row on desktop */
        @media (max-width: 767.98px) {
            #navbarCollapse:not(.show) {
                display: none !important;
            }
            #navbarCollapse.show {
                display: block !important;
                flex-basis: 100% !important;
                flex-grow: 1;
            }
        }
        @media (min-width: 768px) {
            #navbarCollapse {
                display: flex !important;
                width: auto !important;
                flex-basis: auto !important;
                flex-grow: 0 !important;
                margin-left: auto !important;
                overflow: visible !important;
            }
        }
    </style>
</head>
  
  <body class="d-flex flex-column min-vh-100">
    <?php /* Optional interactive canvas starfield (`glowing-galaxy.js`) when a route sets `"enableGalaxyBg": true` */ ?>
    <?php if (isset($pageConfig["enableGalaxyBg"]) && $pageConfig["enableGalaxyBg"] === true): ?>
        <div id="stardust-labs-bg" class="position-fixed w-100 h-100" style="z-index: -1; top: 0; left: 0;"></div>
        <script src="<?php echo $cdn_root; ?>/common/js/glowing-galaxy.js"></script>
    <?php endif; ?>
    <?php /* WCAG 2.1 AA Bypass Block (Criterion 2.4.1): Invisible until focused with the `Tab` key, letting keyboard & screen-reader users jump straight past the global navbars to `<main id="main-content">` */ ?>
    <a href="#main-content" class="visually-hidden-focusable p-3 m-2 bg-primary text-white rounded position-absolute start-0 top-0 z-3 text-decoration-none fw-bold">
        Skip to Main Content
    </a>
    
    <?php /* Full-viewport loading screen (`#page-loader`) that masks initial asset hydration and soft SPA route transitions */ ?>
    <div id="page-loader">
        <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h4 class="text-uppercase fw-bold brand-font" style="letter-spacing: 2px;">
            <?php 
                echo htmlspecialchars($pageConfig['siteName'] ?? $settings['siteName'] ?? 'Loading'); 
            ?>
        </h4>
        <div class="loader-progress-container">
            <div class="loader-progress-bar" id="loader-bar"></div>
        </div>
        <div class="text-secondary font-monospace small mt-2" id="loader-text">> INITIALIZING...</div>
    </div>
    
    <script>
    (function() {
        const loader = document.getElementById('page-loader');
        const bar = document.getElementById('loader-bar');
        const text = document.getElementById('loader-text');
        let progress = 0; let progressInterval;

        // 1. The Animation Loop (Asymptotic progress bar approaching 95% while waiting for DOM/network completion)
        function startHeartbeat() {
            if (progressInterval) clearInterval(progressInterval);
            progress = 10; 
            if(bar) { bar.style.width = '10%'; bar.style.opacity = '1'; }
            
            progressInterval = setInterval(() => {
                let step = (95 - progress) / 80; 
                if (step < 0.1) step = 0.1; 
                progress += step; 
                if (progress > 95) progress = 95; 
                
                if(bar) bar.style.width = progress + '%';
                
                if(text) {
                    if (progress < 30) text.innerText = "> ESTABLISHING UPLINK...";
                    else if (progress < 50) text.innerText = "> HANDSHAKING...";
                    else if (progress < 70) text.innerText = "> DECRYPTING STREAM...";
                    else text.innerText = "> AWAITING RESPONSE...";
                }
            }, 50);
        }

        function finishLoad() {
            if (progressInterval) clearInterval(progressInterval);
            if(bar) bar.style.width = '100%';
            if(text) text.innerText = "> CONNECTION ESTABLISHED.";
            
            setTimeout(() => { 
                if(loader) loader.classList.add('loader-hidden'); 
                
                setTimeout(() => { 
                    if(bar) { bar.style.width = '0%'; bar.style.opacity = '0'; }
                }, 500);
            }, 500);
        }

        // --- 3. ELARA SPA INTEGRATION ---
        // Custom DOM events dispatched by `elara-spa.js` when intercepting internal `<a>` clicks:
        document.addEventListener('elara:navigating', () => {
            if(loader) {
                loader.classList.remove('loader-hidden');
                if(text) text.innerText = "> INITIALIZING JUMP...";
                startHeartbeat();
            }
        });

        document.addEventListener('elara:loaded', () => {
            finishLoad();
        });

        // --- 4. BFCache Fix (Browser Back Button) ---
        // Handles cases where the browser restores the page state from memory (`event.persisted === true`)
        window.addEventListener('pageshow', (event) => {
            if (event.persisted) {
                if(loader) loader.classList.add('loader-hidden');
            }
        });

        // Fallback for hard refreshes
        document.addEventListener('DOMContentLoaded', () => {
            if (!loader.classList.contains('loader-hidden')) {
                startHeartbeat();
            }
        });
        
        window.addEventListener('load', finishLoad);

    })();
    </script>
    
    <?php /* Global Cross-Subdomain Ecosystem Bar (`<nav aria-label="RaggieSoft Ecosystem Network">`) — `aria-current="page"` announces the active property to screen readers */ ?>
    <nav class="rs-network-bar" aria-label="RaggieSoft Ecosystem Network">
      <div class="rs-network-bar-inner">
        <span class="rs-network-label">✦ RaggieSoft Network:</span>
        <ul class="rs-network-links">
          <li><a href="https://raggiesoft.com"<?php echo !$isMemoriamRoute ? ' aria-current="page" class="is-active"' : ''; ?>>🌐 Hub</a></li>
          <li><a href="https://launcher.raggiesoft.com">🚀 Launcher</a></li>
          <li><a href="https://jessica.raggiesoft.com">🛡️ Jessica</a></li>
          <li><a href="https://nebulae.raggiesoft.com">🌌 Nebulae</a></li>
          <li><a href="https://music.raggiesoft.com">🎧 Music</a></li>
          <li><a href="https://books.raggiesoft.com">📚 Books</a></li>
          <li><a href="https://crossroads.raggiesoft.com">🧭 Story Crossroads</a></li>
          <li><a href="https://cedarrun.raggiesoft.com">🌲 Cedar Run</a></li>
          <li><a href="https://backstage.raggiesoft.com">🎬 Backstage</a></li>
          <li><a href="https://stardust.raggiesoft.com">🚀 Stardust</a></li>
          <li><a href="https://engineroom.raggiesoft.com">⚙️ Engine Room</a></li>
          <li><a href="https://corporate.raggiesoft.com">🏢 Corporate</a></li>
          <li><a href="https://storetrainer.raggiesoft.com">💾 StoreTrainer</a></li>
          <li><a href="https://waystation.raggiesoft.com">🔮 Waystation</a></li>
          <li><a href="https://michaelpragsdale.com">👔 Portfolio &amp; Resume</a></li>
          <?php /* Auto-expiring top-bar pill active during the 30-day Sir Patrick Stewart memorial window (`<= 2026-11-28`) */ ?>
          <?php if (date('Y-m-d') <= '2026-11-28'): ?>
          <li><a href="/in-memoriam" class="rs-network-memoriam-pill<?php echo $isMemoriamRoute ? ' is-active' : ''; ?>"<?php echo $isMemoriamRoute ? ' aria-current="page"' : ''; ?>>✦ In Memoriam</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>

    <?php /* 30-Day "Second Star to the Right" Memorial Ribbon: Automatically sunsets after `2026-11-28` on both server (`date('Y-m-d')`) and client (`data-rs-memoriam-expires` read by `raggiesoft-network.js`), while `/in-memoriam` stays permanently archived */ ?>
    <?php if (date('Y-m-d') <= '2026-11-28'): ?>
    <div class="rs-memoriam-bar" data-rs-memoriam-expires="2026-11-28T23:59:59-05:00" role="region" aria-label="In Memoriam: Sir Patrick Stewart">
      <div class="rs-memoriam-inner">
        <p class="rs-memoriam-text">
          <span class="rs-memoriam-star" aria-hidden="true">✦</span>
          <strong class="rs-memoriam-label">In Memoriam: Sir Patrick Stewart (1940–2026)</strong>
          <span class="rs-memoriam-sep" aria-hidden="true">—</span>
          <span class="rs-memoriam-quote">&ldquo;Thank you for teaching a kid watching weeknight television with his family to look up at the cosmos and wonder what is out there. <em>Ad Astra.</em>&rdquo;</span>
        </p>
        <a href="/in-memoriam" class="rs-memoriam-link"<?php echo $isMemoriamRoute ? ' aria-current="page"' : ''; ?>>
          <span><?php echo $isMemoriamRoute ? 'Reading Creator&rsquo;s Tribute' : 'Read Creator&rsquo;s Tribute'; ?></span>
          <span aria-hidden="true"><?php echo $isMemoriamRoute ? '✦' : '→'; ?></span>
        </a>
      </div>
    </div>
    <?php endif; ?>

    <?php /* Semantic `<header>` landmark housing the sticky site-level `<nav class="navbar">` */ ?>
    <header>
      <nav class="navbar navbar-expand-md sticky-top border-bottom border-primary border-opacity-50 bg-body">
        <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
          
          <div class="d-flex align-items-center">
            <!-- Hamburger menu temporarily removed pending Stardust Engine migration -->
            
            <?php /* Brand link & dual light/dark logo switcher (`.theme-img-light` vs `.theme-img-dark`) */ ?>
            <a class="navbar-brand d-flex align-items-center" href="<?php echo htmlspecialchars($pageConfig['navbarBrandLink'] ?? $navbarBrandLink ?? '/'); ?>">
                
                <?php 
                // Directly query the array where we know the data lives
                $logoLight = $navbarBrandLogo ?? '';
                $logoDark  = (isset($pageConfig['navbarBrandLogoDark']) && !str_starts_with($pageConfig['navbarBrandLogoDark'], 'http') && $pageConfig['navbarBrandLogoDark'] !== '') ? $cdnBaseUrl . $pageConfig['navbarBrandLogoDark'] : ($pageConfig['navbarBrandLogoDark'] ?? '');
                ?>

                <?php if (!empty($logoLight) && !empty($logoDark)): ?>
                    <img src="<?php echo htmlspecialchars($logoLight); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo'); ?>" 
                        height="30" width="30"
                        class="theme-img-light me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                    
                    <img src="<?php echo htmlspecialchars($logoDark); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo Dark'); ?>" 
                        height="30" width="30"
                        class="theme-img-dark me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                        
                <?php elseif (!empty($logoLight)): ?>
                    <img src="<?php echo htmlspecialchars($logoLight); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo'); ?>" 
                        height="30" width="30"
                        class="me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                <?php endif; ?>
                
                <?php /* `strip_tags(..., '<span>')` allows responsive `<span class="d-none d-md-inline">` wrappers from route JSON while blocking `<script>` tags */ ?>
                <span class="fw-bold text-uppercase brand-font">
                <?php echo strip_tags($pageConfig['navbarBrandText'] ?? $settings['siteName'] ?? 'Elara Site', '<span>'); ?>
                </span>
            </a>
          </div>
                    
          <?php /* Mobile Hamburger Toggle Button (`d-block d-md-none`) updating `aria-expanded` for screen readers */ ?>
          <button class="navbar-toggler border-0 shadow-none d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ph-duotone ph-list fs-3 text-body-emphasis"></i>
          </button>
          
          <div class="navbar-collapse" id="navbarCollapse">
          <script>
            // Vanilla JS fallback for Mobile Hamburger Menu (since Bootstrap's JS bundle is retired)
            document.addEventListener('DOMContentLoaded', function() {
                const toggler = document.querySelector('.navbar-toggler');
                const target = document.getElementById('navbarCollapse');
                if (toggler && target) {
                    toggler.addEventListener('click', function() {
                        target.classList.toggle('show');
                        toggler.setAttribute('aria-expanded', target.classList.contains('show'));
                    });
                }
            });
            // Re-bind for Elara SPA soft navigations (`dataset.listenerAttached` prevents duplicate click listeners)
            document.addEventListener('elara:loaded', function() {
                const toggler = document.querySelector('.navbar-toggler');
                const target = document.getElementById('navbarCollapse');
                if (toggler && target && !toggler.dataset.listenerAttached) {
                    toggler.dataset.listenerAttached = 'true';
                    toggler.addEventListener('click', function() {
                        target.classList.toggle('show');
                        toggler.setAttribute('aria-expanded', target.classList.contains('show'));
                    });
                }
            });
            // Auto-close native HTML5 `<details class="dropdown">` menus when clicking outside them
            document.addEventListener('click', function(e) {
                document.querySelectorAll('details.dropdown[open]').forEach(function(d) {
                    if (!d.contains(e.target)) d.removeAttribute('open');
                });
            });
          </script>

            <?php 
                // Inject the route-resolved navigation bar (`header-default.php`, `about/header-about.php`, etc.):
                if (isset($currentHeaderMenu) && file_exists($currentHeaderMenu)) {
                    include $currentHeaderMenu;
                } else {
                    include ROOT_PATH . '/includes/components/headers/header-default.php';
                }
            ?>
          </div>
        </div>
      </nav>
    </header>