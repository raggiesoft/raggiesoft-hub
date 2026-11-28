<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/contact/no-solicitation.php
 * Role: Dedicated Standing No-Solicitation Policy & Standard Reply View
 *       (`https://raggiesoft.com/contact/no-solicitation`)
 * Route Manifest: `/data/routes/core.json` -> `"/contact/no-solicitation"`
 *                 (`headerMenu: "header-contact"`)
 *
 * WHY THIS IS A STANDALONE PAGE INSTEAD OF AN `#anchor`:
 * Social networks (Facebook, LinkedIn, Discord, Slack, X/Twitter) strip `#hash`
 * fragments before scraping OpenGraph (`og:*`) metadata, and mobile in-app
 * browsers frequently fail to jump accurately to mid-page `#hash` anchors when
 * images and fonts finish loading. Giving `/contact/no-solicitation` its own
 * clean URL ensures:
 *   1. Dropping `https://raggiesoft.com/contact/no-solicitation` into a social
 *      thread or DM renders its own dedicated cosmic OpenGraph card
 *      (`no-solicitation-og.jpg`).
 *   2. Visitors land immediately at scroll position `0` with the standing policy
 *      and copyable standard reply front and center—while `id="no-solicitation"`
 *      is preserved on `<section>` for harmless backward compatibility.
 *
 * INPUTS:
 * - `$cdnBaseUrl`: Global CDN root (`https://assets.raggiesoft.com`) from `amanda/elara.php`.
 * - `includes/utils/json-reader.php` -> `fetch_asset_json('common/json/hero-images.json')`.
 *
 * OUTPUT PRODUCED:
 * - Schema.org `WebPage` JSON-LD script, dark-cosmos glassmorphic surface,
 *   standing policy across books, music, and software, and one-click clipboard
 *   copy button (`navigator.clipboard.writeText` + `aria-live="polite"`).
 * ============================================================================
 */

require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

$startImage = (!empty($heroImages) && is_array($heroImages))
    ? $cdnBaseUrl . $heroImages[array_rand($heroImages)]
    : $cdnBaseUrl . '/common/patterns/stars-transparent.png';

$imagesJson = htmlspecialchars(json_encode(is_array($heroImages) ? $heroImages : []), ENT_QUOTES, 'UTF-8');

$stockSolicitationReply = <<<'REPLY'
Thanks for reaching out. To save us both time, here is where I stand.

I am not hiring marketing, promotion, playlisting, PR, SEO, or positioning services right now, at any price. That includes free audits, catalog or site reviews, and reduced-scope packages. RaggieSoft is an independent, self-contained studio and creative network, and I do not carry an outside marketing budget.

If I ever choose to collaborate with someone down the road, I will only talk to people who have genuinely engaged with my work firsthand—whether that means reading a novel on https://books.raggiesoft.com, listening to an album on https://music.raggiesoft.com, or actually trying one of my applications on https://raggiesoft.com or https://raggiesoftstudio.com—and can speak specifically to what I build. That is my one requirement, and it isn't negotiable.

Everything I publish is openly accessible on those sites without a paywall. Spend real time with the stories, the music, or the software first, and if we ever cross paths when I'm looking for outside help, we'll have something real to talk about.

If that doesn't work for you, no hard feelings. I wish you well.

https://raggiesoft.com/contact/no-solicitation
REPLY;

$noSolicitationSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => 'https://raggiesoft.com/contact/no-solicitation#webpage',
            'url' => 'https://raggiesoft.com/contact/no-solicitation',
            'name' => 'No-Solicitation Policy | RaggieSoft',
            'description' => 'Standing studio policy for RaggieSoft books, music, and software: no paid marketing, promotion, playlisting, SEO, or free audits at any price.',
            'isPartOf' => [
                '@id' => 'https://raggiesoft.com/#website'
            ]
        ]
    ]
];
?>
<script type="application/ld+json">
<?php echo json_encode($noSolicitationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<style>
    .ns-text-light { color: #ffffff !important; }
    .ns-text-muted { color: #e2e8f0 !important; }

    .ns-glass-bg {
        background-color: rgba(6, 10, 20, 0.86) !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
    }

    .ns-border-default { border: 1px solid rgba(255, 255, 255, 0.18) !important; }
    .ns-border-warning { border: 1px solid rgba(251, 191, 36, 0.55) !important; }

    .ns-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.92), 0px 1px 3px rgba(0, 0, 0, 1) !important;
    }

    .ns-icon-warning { color: #fbbf24 !important; }
    .ns-icon-info    { color: #38bdf8 !important; }

    .ns-btn-amber {
        background-color: #fbbf24 !important;
        border-color: #fbbf24 !important;
        color: #111827 !important;
    }
    .ns-btn-amber:hover {
        background-color: #fcd34d !important;
        color: #030712 !important;
    }
    .ns-btn-ghost-outline {
        background-color: rgba(15, 23, 42, 0.85) !important;
        border: 1px solid rgba(255, 255, 255, 0.65) !important;
        color: #ffffff !important;
    }
    .ns-btn-ghost-outline:hover {
        background-color: #ffffff !important;
        border-color: #ffffff !important;
        color: #090d16 !important;
    }

    .ns-inline-link {
        color: #7dd3fc !important;
        text-decoration: underline;
        text-underline-offset: 3px;
        font-weight: 600;
    }
    .ns-inline-link:hover {
        color: #fde68a !important;
    }

    .ns-page-shell a:focus-visible,
    .ns-page-shell button:focus-visible {
        outline: 2px solid #fbbf24 !important;
        outline-offset: 3px !important;
    }

    .ns-stock-quote {
        background-color: rgba(2, 6, 23, 0.92);
        border-left: 4px solid #fbbf24;
        color: #f8fafc;
        white-space: pre-wrap;
        font-size: 0.98rem;
        line-height: 1.72;
    }
</style>

<div class="immersive-container hero-rotator-container ns-page-shell py-5" data-images="<?php echo $imagesJson; ?>" data-theme="dark" data-bs-theme="dark">

    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo htmlspecialchars($startImage, ENT_QUOTES, 'UTF-8'); ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    <div class="hero-overlay"></div>

    <div class="content-wrapper container py-3" style="max-width: 920px;">

        <?php /* 1. Page Header */ ?>
        <div class="ns-glass-bg ns-border-default p-4 p-md-5 rounded-4 shadow-lg text-center mb-4">
            <p class="small text-uppercase fw-bold mb-1" style="color: #fde68a; letter-spacing: 0.08em;">
                Standing Studio Policy &bull; Books, Music &amp; Software
            </p>
            <h1 class="display-5 fw-bold text-uppercase ns-text-light ns-shadow-heavy mb-2" style="font-family: 'Audiowide', sans-serif;">
                No-Solicitation Policy
            </h1>
            <p class="lead ns-text-muted mx-auto mb-3" style="max-width: 720px;">
                Our standing position on unsolicited marketing, promotion, playlist pitching, PR, SEO, and free audit outreach across RaggieSoft.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="/contact" class="btn ns-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                    <i class="ph-duotone ph-envelope-open me-1" aria-hidden="true"></i>Contact Channels
                </a>
                <a href="/contact/faq" class="btn ns-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                    <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i>Contact FAQ
                </a>
            </div>
        </div>

        <?php /* 2. Standing Policy + Copyable Standard Reply (`id="no-solicitation"` kept as a harmless anchor alias) */ ?>
        <section id="no-solicitation" aria-labelledby="standard-reply-heading">
            <div class="ns-glass-bg ns-border-warning rounded-4 shadow-lg p-4 p-md-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="ns-icon-warning flex-shrink-0">
                        <i class="ph-duotone ph-megaphone-simple ph-3x" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="small text-uppercase fw-bold mb-1" style="color: #7dd3fc; letter-spacing: 0.08em;">
                            Direct &amp; Non-Negotiable
                        </p>
                        <h2 id="standard-reply-heading" class="h3 fw-bold ns-text-light mb-0">
                            Standard Reply to Cold Promotional Outreach
                        </h2>
                    </div>
                </div>

                <p class="ns-text-muted mb-3" style="line-height: 1.7;">
                    Whether you came across our novels on <a href="https://books.raggiesoft.com" class="ns-inline-link">RaggieSoft Book Reader</a>, our original albums in <a href="https://music.raggiesoft.com" class="ns-inline-link">The Listening Room</a>, or our desktop applications on <a href="https://launcher.raggiesoft.com" class="ns-inline-link">RaggieSoft Launcher</a> and <a href="https://raggiesoftstudio.com" class="ns-inline-link">RaggieSoft Studio</a>, here is our standing reply to unsolicited marketing and audit pitches:
                </p>

                <blockquote id="stock-solicitation-reply-text" class="ns-stock-quote p-3 p-md-4 rounded-3 mb-4"><?php echo htmlspecialchars($stockSolicitationReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <button type="button" id="copy-stock-reply-btn" class="btn ns-btn-amber rounded-full fw-bold px-4">
                        <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Standard Reply
                    </button>
                    <a href="https://books.raggiesoft.com" class="btn ns-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-book-open me-1" aria-hidden="true"></i>Explore Books
                    </a>
                    <a href="https://music.raggiesoft.com" class="btn ns-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-headphones me-1" aria-hidden="true"></i>Explore Music
                    </a>
                    <a href="https://launcher.raggiesoft.com" class="btn ns-btn-ghost-outline btn-sm rounded-full fw-bold px-3">
                        <i class="ph-duotone ph-rocket-launch me-1" aria-hidden="true"></i>Explore Apps
                    </a>
                    <span id="copy-stock-reply-status" class="small fw-semibold" style="color: #6ee7b7;" role="status" aria-live="polite"></span>
                </div>
            </div>
        </section>

    </div>
</div>

<script src="<?php echo htmlspecialchars($cdnBaseUrl, ENT_QUOTES, 'UTF-8'); ?>/common/js/hero-image.js"></script>
<script>
// ============================================================================
// ONE-CLICK CLIPBOARD HELPER FOR THE STANDARD NO-SOLICITATION REPLY
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
