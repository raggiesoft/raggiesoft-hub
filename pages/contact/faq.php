<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/contact/faq.php
 * Role: Dedicated Contact & Solicitation FAQ View (`https://raggiesoft.com/contact/faq`)
 * Route Manifest: `/data/routes/core.json` -> `"/contact/faq"` (`headerMenu: "header-contact"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Gives `raggiesoft.com` a dedicated, shareable URL (`https://raggiesoft.com/contact/faq`)
 * for answering common contact questions and filtering out unsolicited marketing,
 * book promotion, playlist pitching, PR, SEO, and audit outreach across all three
 * pillars of Michael P. Ragsdale's work (books, music, and software):
 *   1. Standing No-Solicitation Policy (`#no-solicitation`) + One-Click Copyable
 *      Standard Reply (`navigator.clipboard.writeText` + `aria-live="polite"`).
 *   2. Accessible Native HTML5 `<details>` + `<summary>` FAQ Accordion (`#faq`)
 *      generated from the same `$contactFaqItems` PHP array that builds the
 *      Schema.org `FAQPage` JSON-LD payload (100% 1:1 lockstep).
 *   3. DRY Cross-Property Routing: Rather than duplicating the Employment Scam
 *      Advisory already maintained at `https://corporate.raggiesoft.com/careers`,
 *      recruiting and scam verification questions route straight to the canonical
 *      Hiring Hub (`michaelpragsdale.com/#logistics`) and `corporate.raggiesoft.com/careers`.
 *
 * INPUTS:
 * - `$cdnBaseUrl`: Global CDN root (`https://assets.raggiesoft.com`) from `amanda/elara.php`.
 * - `includes/utils/json-reader.php` -> `fetch_asset_json('common/json/hero-images.json')`.
 *
 * OUTPUT PRODUCED:
 * - Schema.org `FAQPage` + `WebPage` JSON-LD script, dark-cosmos glassmorphic
 *   surface with high-contrast typography, copyable standard reply card, and
 *   keyboard-accessible FAQ disclosures.
 * ============================================================================
 */

// Load rotating hero background paths from the CDN JSON manifest:
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

$startImage = (!empty($heroImages) && is_array($heroImages))
    ? $cdnBaseUrl . $heroImages[array_rand($heroImages)]
    : $cdnBaseUrl . '/common/patterns/stars-transparent.png';

$imagesJson = htmlspecialchars(json_encode(is_array($heroImages) ? $heroImages : []), ENT_QUOTES, 'UTF-8');

// ============================================================================
// SINGLE SOURCE OF TRUTH: STANDARD NO-SOLICITATION REPLY & FAQ ITEMS
// ============================================================================
$stockSolicitationReply = implode("\n\n", [
    "Thanks for reaching out. To save us both time, here is where I stand.",
    "I am not hiring marketing, promotion, playlisting, PR, SEO, or positioning services right now, at any price. That includes free audits, catalog or site reviews, and reduced-scope packages. RaggieSoft is an independent, self-contained studio and creative network, and I do not carry an outside marketing budget.",
    "If I ever choose to collaborate with someone down the road, I will only talk to people who have genuinely engaged with my work firsthand—whether that means reading a novel on https://books.raggiesoft.com, listening to an album on https://music.raggiesoft.com, or actually trying one of my applications on https://raggiesoft.com or https://raggiesoftstudio.com—and can speak specifically to what I build. That is my one requirement, and it isn't negotiable.",
    "Everything I publish is openly accessible on those sites without a paywall. Spend real time with the stories, the music, or the software first, and if we ever cross paths when I'm looking for outside help, we'll have something real to talk about.",
    "If that doesn't work for you, no hard feelings. I wish you well.",
    "https://raggiesoft.com/contact/faq"
]);

// Notice how each FAQ entry keeps `answerPlain` (for Schema.org `FAQPage` JSON-LD)
// and `answerHtml` (for the visible `<details>` accordion) paired in one array,
// while routing employment-scam verification DRY-style to `corporate.raggiesoft.com/careers`!
$contactFaqItems = [
    [
        'id' => 'faq-marketing',
        'icon' => 'ph-megaphone-simple',
        'question' => 'Do you hire book marketing, music promotion, playlist pitching, or web/SEO services (or accept free audits)?',
        'answerPlain' => 'No, not at any price. RaggieSoft is an independent, self-contained creative network and software studio with no outside marketing budget. That includes free audits, catalog or site reviews, playlist placement pitches, PR retainers, and reduced-scope packages. Everything we publish across books.raggiesoft.com, music.raggiesoft.com, raggiesoft.com, and raggiesoftstudio.com is openly accessible without a paywall; if we ever collaborate in the future, our one non-negotiable requirement is genuine firsthand engagement with our books, music, or software.',
        'answerHtml' => '<strong>No, not at any price.</strong> RaggieSoft is an independent, self-contained studio and creative network, and we do not carry an outside marketing budget. That includes <strong>free audits, catalog or listing reviews, playlist placement pitches, PR retainers, and reduced-scope packages</strong>. Every novel on <a href="https://books.raggiesoft.com" class="faq-inline-link">RaggieSoft Book Reader</a>, every album in <a href="https://music.raggiesoft.com" class="faq-inline-link">The Listening Room</a>, and every desktop tool on <a href="https://launcher.raggiesoft.com" class="faq-inline-link">RaggieSoft Launcher</a> and <a href="https://raggiesoftstudio.com" class="faq-inline-link">RaggieSoft Studio</a> is openly available without a paywall. If we ever look for outside help down the road, our one non-negotiable requirement is genuine firsthand engagement with the work itself.'
    ],
    [
        'id' => 'faq-submissions',
        'icon' => 'ph-prohibit',
        'question' => 'Does Engine Room Records or Ocean View Archives accept outside artist demos or book manuscripts?',
        'answerPlain' => 'No. Engine Room Records, Ocean View Archives, and RaggieSoft Story Crossroads are closed creative imprints of Michael P. Ragsdale dedicated exclusively to in-house storytelling and music projects. We do not sign external artists, represent outside authors, or review unsolicited demos or manuscripts.',
        'answerHtml' => '<strong>No.</strong> Engine Room Records, Ocean View Archives, and RaggieSoft Story Crossroads are closed creative imprints of Michael P. Ragsdale dedicated exclusively to in-house worlds and albums. We do not sign external recording artists, publish third-party manuscripts, or review unsolicited demos; unsolicited attachments are deleted unread and unlistened.'
    ],
    [
        'id' => 'faq-recruiters-and-careers',
        'icon' => 'ph-identification-badge',
        'question' => 'How do recruiters contact Michael P. Ragsdale—and does RaggieSoft hire staff?',
        'answerPlain' => 'Recruiters looking to hire Michael P. Ragsdale for Full-Stack Developer or Systems Architect roles should use the Hiring Hub at https://michaelpragsdale.com/#logistics. RaggieSoft itself is a solo entity and never hires employees or contractors; see our official Job Scam Advisory at https://corporate.raggiesoft.com/careers.',
        'answerHtml' => 'Recruiters and hiring managers looking to hire Michael P. Ragsdale for a <strong>Full-Stack Developer</strong> or <strong>Systems Architect</strong> role should use the <a href="https://michaelpragsdale.com/#logistics" class="faq-inline-link">Hiring Hub on michaelpragsdale.com</a> for immediate access to his resume, role logistics, and calendar. RaggieSoft itself is a single-person entity and never offers employment or freelance contracts&mdash;if someone contacted you claiming to hire for RaggieSoft, read our <a href="https://corporate.raggiesoft.com/careers" class="faq-inline-link">Official Job Scam Advisory on corporate.raggiesoft.com/careers</a>.'
    ],
    [
        'id' => 'faq-store',
        'icon' => 'ph-storefront',
        'question' => 'Who handles merchandise orders, shipping updates, and returns?',
        'answerPlain' => 'All physical merchandise orders on store.raggiesoft.com are fulfilled and supported directly by Fourthwall as Merchant of Record. For order tracking, address updates, replacements, or returns, contact Fourthwall support at https://store.raggiesoft.com/contact.',
        'answerHtml' => 'All merchandise orders placed at <a href="https://store.raggiesoft.com" class="faq-inline-link">store.raggiesoft.com</a> are fulfilled and supported directly by <strong>Fourthwall</strong> as our Merchant of Record. For shipping status, sizing questions, or replacements, reach out through <a href="https://store.raggiesoft.com/contact" class="faq-inline-link">Fourthwall Store Support</a> or check the <a href="https://store.raggiesoft.com/pages/returns-faq" class="faq-inline-link">Returns &amp; FAQ page</a>.'
    ],
    [
        'id' => 'faq-licensing-lore',
        'icon' => 'ph-scales',
        'question' => 'Can I share RaggieSoft music and stories, or message the bands and characters?',
        'answerPlain' => 'Our stories and original music are shared openly under Creative Commons Attribution-ShareAlike 4.0 (CC BY-SA 4.0), and commercial broadcast or sync licenses are available at https://corporate.raggiesoft.com/licensing/commercial. All bands on Engine Room Records and characters in Ocean View Archives are fictional creations and cannot reply to personal fan mail or grant in-character interviews.',
        'answerHtml' => 'Creative stories and music across RaggieSoft are published openly under <a href="https://corporate.raggiesoft.com/licensing" class="faq-inline-link">CC BY-SA 4.0</a> for everyday sharing (and code under the MIT License), while commercial broadcast, film, television, and game clearance is available through our <a href="https://corporate.raggiesoft.com/licensing/commercial" class="faq-inline-link">Commercial Licensing Portal</a>. All musical acts on Engine Room Records and all characters in Ocean View Archives are fictional works (<a href="/about/ai-disclaimer" class="faq-inline-link">read our AI &amp; Creative Disclaimer</a>), though readers, listeners, and app users are always welcome to write Michael directly at <a href="mailto:hello@michaelpragsdale.com?subject=RaggieSoft:%20Reader%20or%20Listener%20Note" class="faq-inline-link">hello@michaelpragsdale.com</a>!'
    ]
];

$faqSchemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'FAQPage',
            '@id' => 'https://raggiesoft.com/contact/faq#faqpage',
            'url' => 'https://raggiesoft.com/contact/faq',
            'name' => 'Contact & Solicitation FAQ | RaggieSoft',
            'description' => 'Standing no-solicitation policy and frequently asked questions for RaggieSoft stories, original music, desktop software, licensing, and recruiting.',
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
<?php echo json_encode($faqSchemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<style>
    /* =====================================================================
       COSMIC DARK-GLASS SURFACE & HIGH-CONTRAST ACCORDION STYLES
       Guarantees > 12:1 contrast for body copy and > 18:1 for headings over
       rotating cosmic/landscape hero imagery in both Light and Dark OS modes.
       ===================================================================== */
    .faq-text-light { color: #ffffff !important; }
    .faq-text-muted { color: #e2e8f0 !important; }

    .faq-glass-bg {
        background-color: rgba(6, 10, 20, 0.86) !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
    }

    .faq-border-default { border: 1px solid rgba(255, 255, 255, 0.18) !important; }
    .faq-border-warning { border: 1px solid rgba(251, 191, 36, 0.55) !important; }

    .faq-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.92), 0px 1px 3px rgba(0, 0, 0, 1) !important;
    }

    .faq-icon-info    { color: #38bdf8 !important; }
    .faq-icon-warning { color: #fbbf24 !important; }

    .faq-btn-amber {
        background-color: #fbbf24 !important;
        border-color: #fbbf24 !important;
        color: #111827 !important;
    }
    .faq-btn-amber:hover {
        background-color: #fcd34d !important;
        color: #030712 !important;
    }
    .faq-btn-ghost-outline {
        background-color: rgba(15, 23, 42, 0.85) !important;
        border: 1px solid rgba(255, 255, 255, 0.65) !important;
        color: #ffffff !important;
    }
    .faq-btn-ghost-outline:hover {
        background-color: #ffffff !important;
        border-color: #ffffff !important;
        color: #090d16 !important;
    }

    .faq-inline-link {
        color: #7dd3fc !important;
        text-decoration: underline;
        text-underline-offset: 3px;
        font-weight: 600;
    }
    .faq-inline-link:hover {
        color: #fde68a !important;
    }

    .faq-page-shell a:focus-visible,
    .faq-page-shell button:focus-visible,
    .faq-page-shell summary:focus-visible {
        outline: 2px solid #fbbf24 !important;
        outline-offset: 3px !important;
    }

    .faq-disclosure-item {
        background-color: rgba(15, 23, 42, 0.80);
        border: 1px solid rgba(255, 255, 255, 0.22);
        border-radius: 0.85rem;
        overflow: hidden;
        transition: border-color 0.2s ease, background-color 0.2s ease;
    }
    .faq-disclosure-item[open] {
        border-color: rgba(56, 189, 248, 0.65);
        background-color: rgba(15, 23, 42, 0.94);
    }

    .faq-disclosure-summary {
        list-style: none;
        cursor: pointer;
        min-height: 54px;
        padding: 1rem 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        color: #ffffff;
        font-weight: 700;
        user-select: none;
    }
    .faq-disclosure-summary::-webkit-details-marker {
        display: none;
    }
    .faq-disclosure-summary:hover {
        background-color: rgba(255, 255, 255, 0.06);
    }

    .faq-chevron {
        transition: transform 0.2s ease;
        flex-shrink: 0;
        color: #7dd3fc;
    }
    details[open] > summary .faq-chevron {
        transform: rotate(180deg);
    }

    .faq-disclosure-body {
        padding: 1rem 1.25rem 1.25rem 1.25rem;
        color: #e2e8f0;
        line-height: 1.7;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
    }

    .faq-stock-quote {
        background-color: rgba(2, 6, 23, 0.9);
        border-left: 4px solid #fbbf24;
        color: #f8fafc;
        white-space: pre-wrap;
        font-size: 0.96rem;
        line-height: 1.7;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-disclosure-item,
        .faq-chevron {
            transition: none !important;
        }
    }
</style>

<div class="immersive-container hero-rotator-container faq-page-shell py-5" data-images="<?php echo $imagesJson; ?>" data-theme="dark" data-bs-theme="dark">

    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo htmlspecialchars($startImage, ENT_QUOTES, 'UTF-8'); ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    <div class="hero-overlay"></div>

    <div class="content-wrapper container py-3" style="max-width: 960px;">

        <?php /* 1. Page Header + Back-to-Contact Breadcrumb */ ?>
        <div class="faq-glass-bg faq-border-default p-4 p-md-5 rounded-4 shadow-lg text-center mb-5">
            <nav aria-label="Breadcrumb" class="mb-3">
                <a href="/contact" class="btn faq-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                    <i class="ph-bold ph-arrow-left me-1" aria-hidden="true"></i>Back to Contact Channels
                </a>
            </nav>
            <p class="small text-uppercase fw-bold mb-1" style="color: #7dd3fc; letter-spacing: 0.08em;">
                RaggieSoft Network &bull; Books, Music &amp; Software
            </p>
            <h1 class="display-5 fw-bold text-uppercase faq-text-light faq-shadow-heavy mb-2" style="font-family: 'Audiowide', sans-serif;">
                Contact &amp; Solicitation FAQ
            </h1>
            <p class="lead faq-text-muted mx-auto mb-0" style="max-width: 720px;">
                Clear answers before reaching out&mdash;including our standing policy on unsolicited marketing, promotion, playlisting, SEO, and audits.
            </p>
        </div>

        <?php /* 2. Standing No-Solicitation Policy & Copyable Standard Reply (`#no-solicitation`) */ ?>
        <section id="no-solicitation" class="mb-5" aria-labelledby="no-solicitation-heading">
            <div class="faq-glass-bg faq-border-warning rounded-4 shadow-lg p-4 p-md-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="faq-icon-warning flex-shrink-0">
                        <i class="ph-duotone ph-megaphone-simple ph-3x" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="small text-uppercase fw-bold mb-1" style="color: #fde68a; letter-spacing: 0.08em;">
                            Standing Studio Policy &bull; Non-Negotiable
                        </p>
                        <h2 id="no-solicitation-heading" class="h3 fw-bold faq-text-light mb-0">
                            Standard Reply to Unsolicited Marketing &amp; Audit Outreach
                        </h2>
                    </div>
                </div>

                <p class="faq-text-muted mb-3" style="line-height: 1.7;">
                    Whether you found RaggieSoft through our novels on <a href="https://books.raggiesoft.com" class="faq-inline-link">RaggieSoft Book Reader</a>, our original albums in <a href="https://music.raggiesoft.com" class="faq-inline-link">The Listening Room</a>, or our desktop applications on <a href="https://launcher.raggiesoft.com" class="faq-inline-link">RaggieSoft Launcher</a> and <a href="https://raggiesoftstudio.com" class="faq-inline-link">RaggieSoft Studio</a>, here is our standing reply to cold promotional outreach:
                </p>

                <blockquote id="stock-solicitation-reply-text" class="faq-stock-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($stockSolicitationReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <button type="button" id="copy-stock-reply-btn" class="btn faq-btn-amber btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Standard Reply
                    </button>
                    <a href="/contact" class="btn faq-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-envelope-open me-1" aria-hidden="true"></i>View Direct Contact Channels
                    </a>
                    <span id="copy-stock-reply-status" class="small fw-semibold" style="color: #6ee7b7;" role="status" aria-live="polite"></span>
                </div>
            </div>
        </section>

        <?php /* 3. Frequently Asked Questions Accordion (`#faq`) */ ?>
        <section id="faq" aria-labelledby="contact-faq-heading">
            <div class="faq-glass-bg faq-border-default rounded-4 shadow-lg p-4 p-md-5">
                <div class="mb-4">
                    <p class="small text-uppercase fw-bold mb-1" style="color: #7dd3fc; letter-spacing: 0.08em;">
                        Quick Answers
                    </p>
                    <h2 id="contact-faq-heading" class="h3 fw-bold faq-text-light mb-1" style="font-family: 'Audiowide', sans-serif;">
                        Frequently Asked Questions
                    </h2>
                    <p class="faq-text-muted mb-0">
                        Select any question below to expand the full details and direct links.
                    </p>
                </div>

                <div class="d-flex flex-column gap-3">
                    <?php foreach ($contactFaqItems as $index => $faq): ?>
                        <details id="<?php echo htmlspecialchars($faq['id'], ENT_QUOTES, 'UTF-8'); ?>" class="faq-disclosure-item" <?php echo $index === 0 ? 'open' : ''; ?>>
                            <summary class="faq-disclosure-summary">
                                <span class="d-flex align-items-center gap-3 text-start">
                                    <i class="ph-duotone <?php echo htmlspecialchars($faq['icon'], ENT_QUOTES, 'UTF-8'); ?> fs-4 faq-icon-info flex-shrink-0" aria-hidden="true"></i>
                                    <span><?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </span>
                                <i class="ph-bold ph-caret-down faq-chevron" aria-hidden="true"></i>
                            </summary>
                            <div class="faq-disclosure-body">
                                <p class="mb-0"><?php echo $faq['answerHtml']; ?></p>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</div>

<script src="<?php echo htmlspecialchars($cdnBaseUrl, ENT_QUOTES, 'UTF-8'); ?>/common/js/hero-image.js"></script>
<script>
// ============================================================================
// ONE-CLICK CLIPBOARD HELPER FOR THE STANDARD NO-SOLICITATION REPLY
// Copies `#stock-solicitation-reply-text` via `navigator.clipboard.writeText`
// and announces completion inside an `aria-live="polite"` status region.
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
