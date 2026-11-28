<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/contact.php
 * Role: Global Contact Hub, No-Solicitation Policy & FAQ View (`https://raggiesoft.com/contact`)
 * Route Manifest: `/data/routes/core.json` -> `"/contact"` (`headerMenu: "header-contact"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the central communication directory for `raggiesoft.com` inside
 * `<main id="main-content">` (after `amanda/elara.php` has already output
 * `includes/header.php` with `<title>`, OpenGraph tags, and top navigation).
 * Visitors are routed cleanly across three structured sections:
 *   1. Six Specialized Contact Cards:
 *      - General Inquiry (`mailto:hello@michaelpragsdale.com`)
 *      - Store Support (`store.raggiesoft.com`, operated by Fourthwall as Merchant of Record)
 *      - DSP & Industry (`engineroom.raggiesoft.com/dsp-verification` + closed-label notice)
 *      - Hiring & Careers (`michaelpragsdale.com/#logistics` + Job Scam Warning)
 *      - Sync & Licensing (`corporate.raggiesoft.com/licensing/commercial`)
 *      - Fan Mail & Lore (`/about/ai-disclaimer` explaining fictional bands & characters)
 *   2. Unsolicited Marketing, Promotion & Audit Policy (`#no-solicitation`):
 *      - Clear, calm boundary covering all three pillars of RaggieSoft's work
 *        (books, music, and software): no hired marketing, playlisting, PR, SEO,
 *        audits, or reduced-scope packages, plus a collapsible standard reply
 *        with one-click clipboard copy (`navigator.clipboard.writeText`).
 *   3. Frequently Asked Questions Accordion (`#faq`):
 *      - Native HTML5 `<details>` + `<summary>` disclosures generated from the
 *        exact same `$contactFaqItems` PHP array that builds the Schema.org
 *        `FAQPage` JSON-LD structured data block, keeping search-engine metadata
 *        and visible page copy in 1:1 lockstep automatically.
 *
 * INPUTS:
 * - `$cdnBaseUrl`: Global CDN origin (`https://assets.raggiesoft.com`) provided by `amanda/elara.php`.
 * - `includes/utils/json-reader.php` -> `fetch_asset_json('common/json/hero-images.json')`:
 *   Loads an array of atmospheric hero backdrop paths for `hero-image.js`.
 *
 * OUTPUT PRODUCED:
 * - Schema.org `ContactPage` + `FAQPage` JSON-LD script, dark-surface CSS armor
 *   with high-contrast text and keyboard focus rings, 6-channel contact grid,
 *   `#no-solicitation` boundary banner, and `#faq` accordion.
 * ============================================================================
 */

// Load the shared JSON reader helper so we can pull the rotating hero image list:
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

// Pick a random initial hero backdrop on each server render (`array_rand` returns a random key
// from `$heroImages`), falling back safely to `stars-transparent.png` if the JSON list is empty:
$startImage = (!empty($heroImages) && is_array($heroImages))
    ? $cdnBaseUrl . $heroImages[array_rand($heroImages)]
    : $cdnBaseUrl . '/common/patterns/stars-transparent.png';

// SECURITY & SERIALIZATION NOTE:
// To pass a PHP array into an HTML `data-images="..."` attribute safely, we first convert
// the PHP array into a JSON string (`json_encode`) and THEN escape quotes (`ENT_QUOTES`)
// with `htmlspecialchars(..., ENT_QUOTES, 'UTF-8')` so double quotes inside JSON become
// `&quot;` and can never break out of the HTML attribute:
$imagesJson = htmlspecialchars(json_encode(is_array($heroImages) ? $heroImages : []), ENT_QUOTES, 'UTF-8');

// ============================================================================
// SINGLE SOURCE OF TRUTH: STANDARD NO-SOLICITATION REPLY & FAQ ITEMS
// ============================================================================
// Defining the stock reply and FAQ entries in PHP variables FIRST means we never
// duplicate text between HTML markup and Schema.org JSON-LD (`application/ld+json`).
$stockSolicitationReply = implode("\n\n", [
    "Thanks for reaching out. To save us both time, here is where I stand.",
    "I am not hiring marketing, promotion, playlisting, PR, SEO, or positioning services right now, at any price. That includes free audits, catalog or site reviews, and reduced-scope packages. RaggieSoft is an independent, self-contained studio and creative network, and I do not carry an outside marketing budget.",
    "If I ever choose to collaborate with someone down the road, I will only talk to people who have genuinely engaged with my work firsthand—whether that means reading a novel on https://books.raggiesoft.com, listening to an album on https://music.raggiesoft.com, or actually trying one of my applications on https://raggiesoft.com or https://raggiesoftstudio.com—and can speak specifically to what I build. That is my one requirement, and it isn't negotiable.",
    "Everything I publish is openly accessible on those sites without a paywall. Spend real time with the stories, the music, or the software first, and if we ever cross paths when I'm looking for outside help, we'll have something real to talk about.",
    "If that doesn't work for you, no hard feelings. I wish you well.",
    "https://raggiesoft.com/contact#no-solicitation"
]);

// Each FAQ entry holds:
// - `id`         : Anchor slug so visitors can deep-link directly (e.g., `/contact#faq-marketing`).
// - `icon`       : Domain-specific Phosphor Duotone icon class (zero sparkle shorthand icons).
// - `question`   : Human-readable question rendered inside `<summary>` AND Schema.org `Question.name`.
// - `answerPlain`: Clean plain-text summary emitted into Schema.org `Answer.text` via `json_encode()`.
// - `answerHtml` : Rich accessible HTML answer with clickable first-party links rendered on the page.
$contactFaqItems = [
    [
        'id' => 'faq-marketing',
        'icon' => 'ph-megaphone-simple',
        'question' => 'Do you hire book marketing, music promotion, playlist pitching, or web/SEO agencies (or accept free audits)?',
        'answerPlain' => 'No. RaggieSoft is an independent, self-contained creative network and software studio with no outside marketing budget. We do not hire marketing, book promotion, playlisting, PR, or SEO services at any price—including free audits, listing reviews, and reduced-scope packages. Everything we create across books.raggiesoft.com, music.raggiesoft.com, raggiesoft.com, and raggiesoftstudio.com is openly accessible without a paywall; if we ever collaborate in the future, we only speak with people who have genuinely read our books, streamed our albums, or used our apps firsthand.',
        'answerHtml' => '<strong>No, not at any price.</strong> RaggieSoft is an independent, self-contained studio and creative network, and we do not carry an outside marketing budget. That includes <strong>free audits, catalog or site reviews, playlist placement pitches, PR retainers, and reduced-scope packages</strong>. Every novel on <a href="https://books.raggiesoft.com" class="contact-inline-link">RaggieSoft Book Reader</a>, every album in <a href="https://music.raggiesoft.com" class="contact-inline-link">The Listening Room</a>, and every desktop tool on <a href="https://launcher.raggiesoft.com" class="contact-inline-link">RaggieSoft Launcher</a> and <a href="https://raggiesoftstudio.com" class="contact-inline-link">RaggieSoft Studio</a> is openly available without a paywall. If we ever look for outside help down the road, our one non-negotiable requirement is genuine firsthand engagement with the work itself.'
    ],
    [
        'id' => 'faq-submissions',
        'icon' => 'ph-prohibit',
        'question' => 'Does Engine Room Records or Ocean View Archives accept outside artist demos or book manuscripts?',
        'answerPlain' => 'No. Engine Room Records, Ocean View Archives, and RaggieSoft Story Crossroads are closed creative imprints of Michael P. Ragsdale dedicated exclusively to in-house storytelling and music projects. We do not sign external artists, represent outside authors, or review unsolicited demos or manuscripts.',
        'answerHtml' => '<strong>No.</strong> Engine Room Records, Ocean View Archives, and RaggieSoft Story Crossroads are closed creative imprints of Michael P. Ragsdale dedicated exclusively to in-house worlds and albums. We do not sign external recording artists, publish third-party manuscripts, or review unsolicited demos; unsolicited attachments are deleted unread and unlistened.'
    ],
    [
        'id' => 'faq-hiring',
        'icon' => 'ph-shield-warning',
        'question' => 'Is RaggieSoft hiring employees, freelancers, or remote contractors?',
        'answerPlain' => 'No. RaggieSoft and RaggieSoft Media are solo creative imprints operated by Michael P. Ragsdale. We do not hire employees, contractors, voice actors, illustrators, or virtual assistants. Any unsolicited job offer or chat interview claiming to represent RaggieSoft is an impersonation scam.',
        'answerHtml' => '<strong>No.</strong> RaggieSoft and RaggieSoft Media are solo creative imprints operated by Michael P. Ragsdale. We do not hire staff, contractors, or remote assistants. Any unsolicited message offering paid employment or conducting a chat interview in RaggieSoft&rsquo;s name is fraudulent&mdash;please review our <a href="https://corporate.raggiesoft.com/careers" class="contact-inline-link">Job Scam Warning</a> for details.'
    ],
    [
        'id' => 'faq-recruiters',
        'icon' => 'ph-identification-badge',
        'question' => 'How do recruiters or hiring managers contact Michael P. Ragsdale about software engineering roles?',
        'answerPlain' => 'Recruiters and hiring teams looking to hire Michael P. Ragsdale for Full-Stack Developer or Systems Architect roles should use the pre-screening Hiring Hub at https://michaelpragsdale.com/#logistics to view his resume, role logistics, and scheduling details.',
        'answerHtml' => 'Recruiters and hiring managers looking to hire Michael P. Ragsdale for a <strong>Full-Stack Developer</strong> or <strong>Systems Architect</strong> role should visit the <a href="https://michaelpragsdale.com/#logistics" class="contact-inline-link">Hiring Hub on michaelpragsdale.com</a>, which provides immediate access to his current resume, compensation parameters, and scheduling logistics.'
    ],
    [
        'id' => 'faq-store',
        'icon' => 'ph-storefront',
        'question' => 'Who handles merchandise orders, shipping updates, and returns?',
        'answerPlain' => 'All physical merchandise orders on store.raggiesoft.com are fulfilled and supported directly by Fourthwall as Merchant of Record. For order tracking, address updates, replacements, or returns, contact Fourthwall support at https://store.raggiesoft.com/contact.',
        'answerHtml' => 'All merchandise orders placed at <a href="https://store.raggiesoft.com" class="contact-inline-link">store.raggiesoft.com</a> are fulfilled and supported directly by <strong>Fourthwall</strong> as our Merchant of Record. For shipping status, sizing questions, or replacements, reach out through <a href="https://store.raggiesoft.com/contact" class="contact-inline-link">Fourthwall Store Support</a> or check the <a href="https://store.raggiesoft.com/pages/returns-faq" class="contact-inline-link">Returns &amp; FAQ page</a>.'
    ],
    [
        'id' => 'faq-licensing-lore',
        'icon' => 'ph-scales',
        'question' => 'Can I share RaggieSoft music and stories, or message the bands and characters?',
        'answerPlain' => 'Our stories and original music are shared openly under Creative Commons Attribution-ShareAlike 4.0 (CC BY-SA 4.0), and commercial broadcast or sync licenses are available at https://corporate.raggiesoft.com/licensing/commercial. All bands on Engine Room Records and characters in Ocean View Archives are fictional creations and cannot reply to personal fan mail or grant in-character interviews.',
        'answerHtml' => 'Creative stories and music across RaggieSoft are published openly under <a href="https://corporate.raggiesoft.com/licensing" class="contact-inline-link">CC BY-SA 4.0</a> for everyday sharing, while commercial broadcast, film, television, and game clearance is available through our <a href="https://corporate.raggiesoft.com/licensing/commercial" class="contact-inline-link">Commercial Licensing Portal</a>. Please note that all musical acts on Engine Room Records and all characters in Ocean View Archives are fictional works (<a href="/about/ai-disclaimer" class="contact-inline-link">read our AI &amp; Creative Disclaimer</a>), though readers and listeners are always welcome to email Michael directly at <a href="mailto:hello@michaelpragsdale.com?subject=RaggieSoft:%20Reader%20or%20Listener%20Note" class="contact-inline-link">hello@michaelpragsdale.com</a>!'
    ]
];

// Build the Schema.org `@graph` array in PHP and serialize with `json_encode()`.
// WHY THIS IS SAFER THAN HAND-TYPING JSON: `json_encode()` escapes quotes and
// special characters automatically, guaranteeing 100% valid JSON-LD for search engines!
$contactSchemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ContactPage',
            '@id' => 'https://raggiesoft.com/contact#webpage',
            'url' => 'https://raggiesoft.com/contact',
            'name' => 'Contact & FAQ | RaggieSoft',
            'description' => 'Central communication directory, no-solicitation policy, and frequently asked questions for Michael P. Ragsdale, RaggieSoft, Engine Room Records, and Ocean View Archives.'
        ],
        [
            '@type' => 'FAQPage',
            '@id' => 'https://raggiesoft.com/contact#faq-schema',
            'mainEntity' => array_map(function ($item) {
                return [
                    '@type' => 'Question',
                    'name' => $item['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $item['answerPlain']
                    ]
                ];
            }, $contactFaqItems)
        ]
    ]
];
?>
<script type="application/ld+json">
<?php echo json_encode($contactSchemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<style>
    /* =====================================================================
       HIGH-CONTRAST GLASSMORPHISM ARMOR (DARK SURFACE OVER DYNAMIC HERO ART)
       Because `/contact` renders over full-bleed rotating landscape artwork,
       we lock the surface inside `.contact-hero-shell` to dark-mode tokens
       (`data-theme="dark"`) with an 82% deep-navy glass backing so foreground
       text maintains > 12:1 contrast whether the visitor's OS uses Light Mode
       or Dark Mode.
       ===================================================================== */
    .force-text-light {
        color: #ffffff !important;
    }
    .force-text-muted {
        color: #e2e8f0 !important; /* Slate-200: > 13:1 contrast on rgba(6, 10, 20, 0.84) */
    }

    /* Deep Navy Glass Core */
    .force-glass-bg {
        background-color: rgba(6, 10, 20, 0.84) !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
    }

    /* Semantic Accent Borders */
    .force-border-default   { border: 1px solid rgba(255, 255, 255, 0.18) !important; }
    .force-border-info      { border: 1px solid rgba(56, 189, 248, 0.5) !important; }
    .force-border-success   { border: 1px solid rgba(52, 211, 153, 0.5) !important; }
    .force-border-danger    { border: 1px solid rgba(248, 113, 113, 0.5) !important; }
    .force-border-warning   { border: 1px solid rgba(251, 191, 36, 0.55) !important; }
    .force-border-secondary { border: 1px solid rgba(203, 213, 225, 0.4) !important; }
    .force-border-primary   { border: 1px solid rgba(96, 165, 250, 0.55) !important; }

    /* Readable Text Shadows over Hero Imagery */
    .force-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.92), 0px 1px 3px rgba(0, 0, 0, 1) !important;
    }
    .force-shadow-medium {
        text-shadow: 0px 2px 8px rgba(0, 0, 0, 0.9) !important;
    }

    /* High-Contrast Accent Icons on Dark Glass */
    .force-icon-info      { color: #38bdf8 !important; }
    .force-icon-primary   { color: #60a5fa !important; }
    .force-icon-success   { color: #34d399 !important; }
    .force-icon-danger    { color: #f87171 !important; }
    .force-icon-warning   { color: #fbbf24 !important; }
    .force-icon-secondary { color: #cbd5e1 !important; }

    /* High-Contrast Action Buttons Guaranteed Across OS Light & Dark Themes */
    .contact-btn-sky {
        background-color: #38bdf8 !important;
        border-color: #38bdf8 !important;
        color: #06121e !important;
    }
    .contact-btn-sky:hover {
        background-color: #7dd3fc !important;
        border-color: #7dd3fc !important;
        color: #040b14 !important;
    }
    .contact-btn-blue {
        background-color: #1d4ed8 !important;
        border-color: #3b82f6 !important;
        color: #ffffff !important;
    }
    .contact-btn-blue:hover {
        background-color: #2563eb !important;
        color: #ffffff !important;
    }
    .contact-btn-emerald {
        background-color: #047857 !important;
        border-color: #10b981 !important;
        color: #ffffff !important;
    }
    .contact-btn-emerald:hover {
        background-color: #059669 !important;
        color: #ffffff !important;
    }
    .contact-btn-crimson {
        background-color: #b91c1c !important;
        border-color: #ef4444 !important;
        color: #ffffff !important;
    }
    .contact-btn-crimson:hover {
        background-color: #dc2626 !important;
        color: #ffffff !important;
    }
    .contact-btn-amber {
        background-color: #fbbf24 !important;
        border-color: #fbbf24 !important;
        color: #111827 !important;
    }
    .contact-btn-amber:hover {
        background-color: #fcd34d !important;
        color: #030712 !important;
    }
    .contact-btn-ghost-outline {
        background-color: rgba(15, 23, 42, 0.85) !important;
        border: 1px solid rgba(255, 255, 255, 0.65) !important;
        color: #ffffff !important;
    }
    .contact-btn-ghost-outline:hover {
        background-color: #ffffff !important;
        border-color: #ffffff !important;
        color: #090d16 !important;
    }

    /* High-Contrast Inline Links inside Policy & FAQ Copy */
    .contact-inline-link {
        color: #7dd3fc !important;
        text-decoration: underline;
        text-underline-offset: 3px;
        font-weight: 600;
    }
    .contact-inline-link:hover {
        color: #fde68a !important;
    }

    /* Accessible Keyboard Focus Ring Across All Interactive Controls */
    .contact-hero-shell a:focus-visible,
    .contact-hero-shell button:focus-visible,
    .contact-hero-shell summary:focus-visible {
        outline: 2px solid #fbbf24 !important;
        outline-offset: 3px !important;
    }

    /* =====================================================================
       NO-SOLICITATION STANDARD REPLY DISCLOSURE & FAQ ACCORDION (`<details>`)
       Native `<details>` + `<summary>` works with zero framework JS, supports
       Enter/Space keyboard toggling out of the box, and exposes open/closed
       state automatically to assistive technologies.
       ===================================================================== */
    .contact-stock-details,
    .contact-faq-item {
        background-color: rgba(15, 23, 42, 0.78);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 0.85rem;
        overflow: hidden;
        transition: border-color 0.2s ease, background-color 0.2s ease;
    }
    .contact-faq-item[open],
    .contact-stock-details[open] {
        border-color: rgba(56, 189, 248, 0.65);
        background-color: rgba(15, 23, 42, 0.92);
    }

    .contact-faq-summary,
    .contact-stock-summary {
        list-style: none;
        cursor: pointer;
        min-height: 52px;
        padding: 1rem 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        color: #ffffff;
        font-weight: 700;
        user-select: none;
    }
    /* Hide the default browser disclosure triangle so we can render a crisp chevron icon */
    .contact-faq-summary::-webkit-details-marker,
    .contact-stock-summary::-webkit-details-marker {
        display: none;
    }
    .contact-faq-summary:hover,
    .contact-stock-summary:hover {
        background-color: rgba(255, 255, 255, 0.06);
    }

    .contact-chevron {
        transition: transform 0.2s ease;
        flex-shrink: 0;
        color: #7dd3fc;
    }
    details[open] > summary .contact-chevron {
        transform: rotate(180deg);
    }

    .contact-faq-body {
        padding: 0 1.25rem 1.25rem 1.25rem;
        color: #e2e8f0;
        line-height: 1.65;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        padding-top: 1rem;
    }

    .contact-stock-quote {
        background-color: rgba(2, 6, 23, 0.88);
        border-left: 4px solid #fbbf24;
        color: #f8fafc;
        white-space: pre-wrap;
        font-size: 0.95rem;
        line-height: 1.65;
    }

    /* Respect OS "Reduce Motion" accessibility preference */
    @media (prefers-reduced-motion: reduce) {
        .contact-faq-item,
        .contact-stock-details,
        .contact-chevron {
            transition: none !important;
        }
    }
</style>

<?php /* `data-theme="dark" data-bs-theme="dark"` keeps button and surface tokens locked to dark-surface contrast over the hero backdrop */ ?>
<div class="immersive-container hero-rotator-container contact-hero-shell py-5" data-images="<?php echo $imagesJson; ?>" data-theme="dark" data-bs-theme="dark">

    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo htmlspecialchars($startImage, ENT_QUOTES, 'UTF-8'); ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    <div class="hero-overlay"></div>

    <div class="content-wrapper container py-3">

        <?php /* 1. Page Header Banner */ ?>
        <div class="text-center mb-5 d-flex justify-content-center">
            <div class="force-glass-bg force-border-default p-4 rounded-4 shadow-lg" style="max-width: 820px;">
                <h1 class="display-4 fw-bold text-uppercase force-text-light force-shadow-heavy mb-2" style="font-family: 'Audiowide', sans-serif;">
                    Signal The Architect
                </h1>
                <p class="lead force-text-light fw-semibold force-shadow-medium mx-auto mb-3" style="max-width: 680px;">
                    Choose the right channel for stories, music, software, store support, licensing, or recruiting&mdash;or jump to our <a href="#no-solicitation" class="contact-inline-link">No-Solicitation Policy</a> and <a href="#faq" class="contact-inline-link">FAQ</a> below.
                </p>
            </div>
        </div>

        <?php /* 2. Responsive 3-Column Grid of 6 Specialized Contact Channels */ ?>
        <div class="row g-4 justify-content-center" aria-label="Contact Channels">

            <?php /* Card 1: General Inquiry */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-info h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-info">
                            <i class="ph-duotone ph-envelope-open ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">General Inquiry</h2>
                        <p class="force-text-muted mb-3">
                            Reader, listener, or user notes about our <strong>stories</strong>, <strong>original music</strong>, or <strong>desktop apps</strong>?
                        </p>
                        <p class="small force-text-light fw-semibold mb-4">
                            hello@michaelpragsdale.com
                        </p>
                        <div class="d-grid mt-auto gap-2">
                            <a href="mailto:hello@michaelpragsdale.com?subject=RaggieSoft:%20Project%20Inquiry" class="btn contact-btn-sky btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-paper-plane-tilt me-1" aria-hidden="true"></i>Send Message
                            </a>
                            <a href="#no-solicitation" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
                                <i class="ph-duotone ph-megaphone-simple me-1" aria-hidden="true"></i>No Marketing Pitches
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Card 2: Store Support (Fourthwall Merchant of Record) */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-primary h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-primary">
                            <i class="ph-duotone ph-storefront ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Store Support</h2>
                        <p class="force-text-muted mb-4">
                            Questions about physical merchandise, order status, shipping details, or returns?
                        </p>
                        <div class="d-grid mt-auto gap-2">
                            <a href="https://store.raggiesoft.com/contact" class="btn contact-btn-blue btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-headset me-1" aria-hidden="true"></i>Contact Fourthwall
                            </a>
                            <a href="https://store.raggiesoft.com/pages/returns-faq" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
                                <i class="ph-duotone ph-question me-1" aria-hidden="true"></i>View Returns &amp; FAQ
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-2 d-flex justify-content-center">
                        <div class="force-border-primary px-3 py-2 rounded-3 shadow-sm" style="background-color: rgba(29, 78, 216, 0.22) !important;">
                            <p class="small force-text-muted mb-0" style="font-size: 0.82rem;">
                                <strong>Merchant of Record:</strong> Merchandise fulfillment and order support are operated directly by Fourthwall.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Card 3: DSP & Industry */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-success h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-success">
                            <i class="ph-duotone ph-broadcast ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">DSP &amp; Industry</h2>
                        <p class="force-text-muted mb-4">
                            For <strong>Digital Service Providers</strong> (Spotify, Apple, Amazon) and catalog rights verification.
                        </p>
                        <div class="d-grid mt-auto">
                            <a href="https://engineroom.raggiesoft.com/dsp-verification" class="btn contact-btn-emerald btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-shield-check me-1" aria-hidden="true"></i>Access DSP Portal
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-2 d-flex justify-content-center">
                        <div class="force-border-danger px-3 py-2 rounded-3 shadow-sm" style="background-color: rgba(185, 28, 28, 0.25) !important;">
                            <p class="small force-text-light mb-0" style="font-size: 0.82rem;">
                                <i class="ph-duotone ph-prohibit me-1 force-icon-danger" aria-hidden="true"></i>
                                <strong>Closed Imprint:</strong> Engine Room Records does not sign outside artists or accept unsolicited demos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Card 4: Hiring & Careers */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-danger h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-danger">
                            <i class="ph-duotone ph-briefcase ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Hiring &amp; Careers</h2>
                        <p class="force-text-muted mb-4">
                            Recruiters looking to hire Michael P. Ragsdale as a <strong>Systems Architect</strong> or <strong>Full-Stack Developer</strong>.
                        </p>
                        <div class="d-grid mt-auto gap-2">
                            <a href="https://michaelpragsdale.com/#logistics" class="btn contact-btn-crimson btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-identification-badge me-1" aria-hidden="true"></i>Access Hiring Hub
                            </a>
                            <a href="https://corporate.raggiesoft.com/careers" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
                                <i class="ph-duotone ph-shield-warning me-1" aria-hidden="true"></i>Job Scam Warning
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Card 5: Sync & Licensing */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-warning h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-warning">
                            <i class="ph-duotone ph-signature ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Sync &amp; Licensing</h2>
                        <p class="force-text-muted mb-4">
                            Looking to clear a master recording for film, television, gaming, or commercial broadcast?
                        </p>
                        <div class="d-grid mt-auto gap-2">
                            <a href="https://corporate.raggiesoft.com/licensing/commercial" class="btn contact-btn-amber btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-signature me-1" aria-hidden="true"></i>Commercial Portal
                            </a>
                            <a href="https://corporate.raggiesoft.com/licensing" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
                                <i class="ph-duotone ph-scales me-1" aria-hidden="true"></i>Open-Culture Rights
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Card 6: Fan Mail & Lore */ ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card force-glass-bg force-border-secondary h-100 p-4 text-center rounded-4 shadow-lg w-100">
                    <div class="card-body d-flex flex-column p-3">
                        <div class="mb-3 force-icon-secondary">
                            <i class="ph-duotone ph-mask-happy ph-4x drop-shadow" aria-hidden="true"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Fan Mail &amp; Lore</h2>
                        <p class="force-text-muted mb-4">
                            All musical artists on Engine Room Records and all characters in Ocean View Archives are fictional creations.
                        </p>
                        <div class="d-grid mt-auto">
                            <a href="/about/ai-disclaimer" class="btn contact-btn-ghost-outline btn-lg rounded-full fw-bold">
                                <i class="ph-duotone ph-robot me-1" aria-hidden="true"></i>Read AI Disclaimer
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-2 d-flex justify-content-center">
                        <div class="force-border-secondary px-3 py-2 rounded-3 shadow-sm" style="background-color: rgba(255, 255, 255, 0.08) !important;">
                            <p class="small force-text-muted mb-0" style="font-size: 0.82rem;">
                                Fictional bands and characters cannot reply in character, grant interviews, or sign autographs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php /* 3. Unsolicited Marketing, Promotion & Audit Policy (`#no-solicitation`) */ ?>
        <section id="no-solicitation" class="mt-5 pt-2" aria-labelledby="no-solicitation-heading">
            <div class="force-glass-bg force-border-warning rounded-4 shadow-lg p-4 p-md-5">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="force-icon-warning flex-shrink-0">
                            <i class="ph-duotone ph-megaphone-simple ph-3x" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="small text-uppercase fw-bold mb-1" style="color: #fde68a; letter-spacing: 0.08em;">
                                Standing Studio Policy &bull; Books, Music &amp; Software
                            </p>
                            <h2 id="no-solicitation-heading" class="h3 fw-bold force-text-light mb-0">
                                Unsolicited Marketing, Promotion &amp; Audit Policy
                            </h2>
                        </div>
                    </div>
                </div>

                <p class="force-text-muted mb-3" style="line-height: 1.7;">
                    To save everyone time: <strong>we are not hiring marketing, book promotion, playlist pitching, PR, SEO, or positioning services right now, at any price.</strong> That includes free audits, catalog or listing reviews, and reduced-scope packages. RaggieSoft is an independent, self-contained studio and creative network, and we do not carry an outside marketing budget.
                </p>
                <p class="force-text-muted mb-4" style="line-height: 1.7;">
                    Everything we publish is openly available without a paywall across <a href="https://books.raggiesoft.com" class="contact-inline-link">RaggieSoft Book Reader</a>, <a href="https://music.raggiesoft.com" class="contact-inline-link">The Listening Room</a>, <a href="https://launcher.raggiesoft.com" class="contact-inline-link">RaggieSoft Launcher</a>, and <a href="https://raggiesoftstudio.com" class="contact-inline-link">RaggieSoft Studio</a>. If we ever seek outside help down the road, we will talk <strong>only</strong> with people who have genuinely read our books, listened to our albums, or tried our software firsthand&mdash;never cold outreach.
                </p>

                <?php /* Collapsible stock reply with one-click copy button and `aria-live="polite"` feedback */ ?>
                <details class="contact-stock-details">
                    <summary class="contact-stock-summary">
                        <span>
                            <i class="ph-duotone ph-quotes me-2 force-icon-warning" aria-hidden="true"></i>Read our standard reply to unsolicited outreach
                        </span>
                        <i class="ph-bold ph-caret-down contact-chevron" aria-hidden="true"></i>
                    </summary>
                    <div class="contact-faq-body">
                        <blockquote id="stock-solicitation-reply-text" class="contact-stock-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($stockSolicitationReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <button type="button" id="copy-stock-reply-btn" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
                                <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Standard Reply
                            </button>
                            <span id="copy-stock-reply-status" class="small fw-semibold" style="color: #6ee7b7;" role="status" aria-live="polite"></span>
                        </div>
                    </div>
                </details>
            </div>
        </section>

        <?php /* 4. Frequently Asked Questions Accordion (`#faq`) — Synced 1:1 with `FAQPage` JSON-LD */ ?>
        <section id="faq" class="mt-5 pt-2" aria-labelledby="contact-faq-heading">
            <div class="force-glass-bg force-border-default rounded-4 shadow-lg p-4 p-md-5">
                <div class="text-center mb-4">
                    <p class="small text-uppercase fw-bold mb-1" style="color: #7dd3fc; letter-spacing: 0.08em;">
                        Quick Answers Before You Write
                    </p>
                    <h2 id="contact-faq-heading" class="h2 fw-bold force-text-light mb-2" style="font-family: 'Audiowide', sans-serif;">
                        Frequently Asked Questions
                    </h2>
                    <p class="force-text-muted mb-0 mx-auto" style="max-width: 680px;">
                        Common questions about inquiries, merchandise orders, recruiting, licensing, and creative submissions across RaggieSoft.
                    </p>
                </div>

                <div class="d-flex flex-column gap-3">
                    <?php foreach ($contactFaqItems as $index => $faq): ?>
                        <details id="<?php echo htmlspecialchars($faq['id'], ENT_QUOTES, 'UTF-8'); ?>" class="contact-faq-item" <?php echo $index === 0 ? 'open' : ''; ?>>
                            <summary class="contact-faq-summary">
                                <span class="d-flex align-items-center gap-3 text-start">
                                    <i class="ph-duotone <?php echo htmlspecialchars($faq['icon'], ENT_QUOTES, 'UTF-8'); ?> fs-4 force-icon-info flex-shrink-0" aria-hidden="true"></i>
                                    <span><?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </span>
                                <i class="ph-bold ph-caret-down contact-chevron" aria-hidden="true"></i>
                            </summary>
                            <div class="contact-faq-body">
                                <p class="mb-0"><?php echo $faq['answerHtml']; ?></p>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php /* 5. Bottom Hiring Hub Note */ ?>
        <div class="text-center mt-5 d-flex justify-content-center">
            <div class="force-glass-bg force-border-default px-4 py-2 rounded-pill shadow-sm">
                <p class="small force-text-light force-shadow-medium mb-0">
                    <i class="ph-duotone ph-hard-drives me-2 force-icon-secondary" aria-hidden="true"></i>
                    <strong>Recruiter Note:</strong> The <a href="https://michaelpragsdale.com/#logistics" class="contact-inline-link">Hiring Hub</a> provides immediate access to Michael&rsquo;s Resume, Role Logistics, and Calendar.
                </p>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo htmlspecialchars($cdnBaseUrl, ENT_QUOTES, 'UTF-8'); ?>/common/js/hero-image.js"></script>
<script>
// ============================================================================
// ONE-CLICK CLIPBOARD HELPER FOR THE STANDARD NO-SOLICITATION REPLY
// Uses the modern asynchronous Clipboard API (`navigator.clipboard.writeText`)
// and updates an `aria-live="polite"` status span so screen reader and sighted
// users alike receive immediate confirmation without a disruptive popup alert.
// ============================================================================
(function () {
    const copyBtn = document.getElementById('copy-stock-reply-btn');
    const replyBlock = document.getElementById('stock-solicitation-reply-text');
    const statusSpan = document.getElementById('copy-stock-reply-status');

    if (!copyBtn || !replyBlock || !statusSpan) {
        return;
    }

    copyBtn.addEventListener('click', function () {
        const textToCopy = replyBlock.textContent ? replyBlock.textContent.trim() : '';
        if (!textToCopy || !navigator.clipboard || typeof navigator.clipboard.writeText !== 'function') {
            statusSpan.textContent = 'Select the reply text above and press Copy.';
            return;
        }

        navigator.clipboard.writeText(textToCopy).then(function () {
            statusSpan.textContent = 'Standard reply copied to clipboard.';
            window.setTimeout(function () {
                statusSpan.textContent = '';
            }, 4000);
        }).catch(function () {
            statusSpan.textContent = 'Select the reply text above and press Copy.';
        });
    });
})();
</script>
