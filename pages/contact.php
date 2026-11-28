<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/contact.php
 * Role: Global Contact Hub View (`https://raggiesoft.com/contact`)
 * Route Manifest: `/data/routes/core.json` -> `"/contact"` (`headerMenu: "header-contact"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the central communication directory for `raggiesoft.com` inside
 * `<main id="main-content">`, routing visitors cleanly to six specialized
 * channels while keeping extended policies DRY on their dedicated pages:
 *   1. General Inquiry (`mailto:hello@michaelpragsdale.com`)
 *   2. Store Support (`store.raggiesoft.com`, operated by Fourthwall as Merchant of Record)
 *   3. DSP & Industry (`engineroom.raggiesoft.com/dsp-verification` + closed-imprint notice)
 *   4. Hiring & Careers (`michaelpragsdale.com/#logistics` + `corporate.raggiesoft.com/careers` Scam Advisory)
 *   5. Sync & Licensing (`corporate.raggiesoft.com/licensing/commercial`)
 *   6. Fan Mail & Lore (`/about/ai-disclaimer` explaining fictional bands & characters)
 *
 * Below the 6-card directory, a concise Standing No-Solicitation & FAQ banner
 * (`#no-solicitation`) states clearly that RaggieSoft does not hire marketing,
 * promotion, playlisting, PR, or SEO services (or accept free audits) and routes
 * visitors to `/contact/faq` for the full FAQ and standard reply.
 *
 * INPUTS:
 * - `$cdnBaseUrl`: Global CDN origin (`https://assets.raggiesoft.com`) from `amanda/elara.php`.
 * - `includes/utils/json-reader.php` -> `fetch_asset_json('common/json/hero-images.json')`:
 *   Loads rotating hero background paths for `hero-image.js`.
 *
 * OUTPUT PRODUCED:
 * - Schema.org `ContactPage` JSON-LD script, dark-surface glassmorphism CSS
 *   with high-contrast text and visible keyboard focus rings, 6-channel contact
 *   grid, and `#no-solicitation` gateway to `/contact/faq`.
 * ============================================================================
 */

// Load the remote JSON reader helper and pull the list of hero background paths:
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

// Pick a random initial backdrop (`array_rand`) with a safe starfield fallback:
$startImage = (!empty($heroImages) && is_array($heroImages))
    ? $cdnBaseUrl . $heroImages[array_rand($heroImages)]
    : $cdnBaseUrl . '/common/patterns/stars-transparent.png';

// Serialize `$heroImages` to JSON and HTML-escape quotes (`ENT_QUOTES`) so `data-images="..."`
// is 100% safe against attribute breakout:
$imagesJson = htmlspecialchars(json_encode(is_array($heroImages) ? $heroImages : []), ENT_QUOTES, 'UTF-8');

// Schema.org `ContactPage` structured data linking `/contact` to `/contact/faq` and `corporate.raggiesoft.com/careers`:
$contactPageSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ContactPage',
            '@id' => 'https://raggiesoft.com/contact#webpage',
            'url' => 'https://raggiesoft.com/contact',
            'name' => 'Contact Channels | RaggieSoft',
            'description' => 'Central directory for contacting Michael P. Ragsdale, RaggieSoft, Engine Room Records, and Ocean View Archives. No unsolicited marketing pitches or employment offers.',
            'relatedLink' => [
                'https://raggiesoft.com/contact/faq',
                'https://corporate.raggiesoft.com/careers',
                'https://michaelpragsdale.com/#logistics'
            ]
        ]
    ]
];
?>
<script type="application/ld+json">
<?php echo json_encode($contactPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<style>
    /* =====================================================================
       HIGH-CONTRAST GLASSMORPHISM ARMOR (DARK SURFACE OVER DYNAMIC HERO ART)
       Locks `.contact-hero-shell` to dark-surface contrast (`>= 12:1` for
       body copy, `>= 18:1` for headings) regardless of OS Light/Dark Mode.
       ===================================================================== */
    .force-text-light {
        color: #ffffff !important;
    }
    .force-text-muted {
        color: #e2e8f0 !important;
    }
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

    /* Text Shadows */
    .force-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.92), 0px 1px 3px rgba(0, 0, 0, 1) !important;
    }
    .force-shadow-medium {
        text-shadow: 0px 2px 8px rgba(0, 0, 0, 0.9) !important;
    }

    /* High-Contrast Accent Icons */
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

    .contact-inline-link {
        color: #7dd3fc !important;
        text-decoration: underline;
        text-underline-offset: 3px;
        font-weight: 600;
    }
    .contact-inline-link:hover {
        color: #fde68a !important;
    }

    .contact-hero-shell a:focus-visible,
    .contact-hero-shell button:focus-visible {
        outline: 2px solid #fbbf24 !important;
        outline-offset: 3px !important;
    }
</style>

<?php /* `data-theme="dark" data-bs-theme="dark"` locks token contrast over the rotating cosmic/landscape backdrop */ ?>
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
                    Choose your communication channel below&mdash;or read our <a href="/contact/faq" class="contact-inline-link">Contact &amp; Solicitation FAQ</a> first.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="/contact/faq" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i>Read Contact &amp; Solicitation FAQ
                    </a>
                    <a href="/contact/faq#no-solicitation" class="btn contact-btn-amber btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-megaphone-simple me-1" aria-hidden="true"></i>No Unsolicited Marketing Policy
                    </a>
                </div>
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
                            <a href="/contact/faq#no-solicitation" class="btn contact-btn-ghost-outline btn-sm rounded-full fw-bold">
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

            <?php /* Card 4: Hiring & Careers (DRY links to michaelpragsdale.com/#logistics + corporate.raggiesoft.com/careers) */ ?>
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

        <?php /* 3. Concise Standing Policy & Gateway Card Routing to Dedicated `/contact/faq` */ ?>
        <section id="no-solicitation" class="mt-5 pt-2" aria-labelledby="solicitation-gateway-heading">
            <div class="force-glass-bg force-border-warning rounded-4 shadow-lg p-4 p-md-5">
                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
                    <div>
                        <p class="small text-uppercase fw-bold mb-1" style="color: #fde68a; letter-spacing: 0.08em;">
                            <i class="ph-duotone ph-megaphone-simple me-1" aria-hidden="true"></i>Standing Studio Policy &bull; Books, Music &amp; Software
                        </p>
                        <h2 id="solicitation-gateway-heading" class="h4 fw-bold force-text-light mb-2">
                            Not Hiring Marketing, Promotion, Playlisting, SEO, or Free Audits
                        </h2>
                        <p class="force-text-muted mb-0" style="max-width: 760px; line-height: 1.65;">
                            RaggieSoft is an independent, self-contained studio and creative network with no outside marketing budget. Before pitching paid promotion, catalog reviews, or reduced-scope packages, please read our standing policy and frequently asked questions.
                        </p>
                    </div>
                    <div class="d-flex flex-wrap gap-2 flex-shrink-0">
                        <a href="/contact/faq#no-solicitation" class="btn contact-btn-amber rounded-full fw-bold px-4">
                            <i class="ph-duotone ph-quotes me-1" aria-hidden="true"></i>Read Standard Reply
                        </a>
                        <a href="/contact/faq" class="btn contact-btn-ghost-outline rounded-full fw-bold px-4">
                            <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i>Open Contact FAQ
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php /* 4. Bottom Hiring Hub Note */ ?>
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
