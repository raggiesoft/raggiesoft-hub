<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/navigation/ai-disclaimer-subnav.php
 * Role: Shared 4-Tab Pill Navigation & Copy-to-Clipboard Helper for `/about/ai-disclaimer/*`
 * Domain: https://raggiesoft.com
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Included near the top of all four pages in the AI & Creative Process family:
 *   1. `/about/ai-disclaimer`                     ("Overview & Workflow")
 *   2. `/about/ai-disclaimer/craft-vs-slop`       ("Craft vs. 'AI Slop'")
 *   3. `/about/ai-disclaimer/zero-budget-reality` ("Zero-Budget Reality")
 *   4. `/about/ai-disclaimer/history-of-tools`    ("2,400 Years of Tools")
 *
 * Renders a responsive `<nav aria-label="AI and Creative Process Sections">`
 * pill bar with `aria-current="page"` on the active tab, plus a shared CSS
 * stylesheet (Light + Dark mode high-contrast safe!) and delegated JavaScript
 * clipboard handler (`[data-copy-target]`) so every page's "Copy Standard Reply"
 * button works with zero duplicated JS!
 *
 * INPUTS:
 * - `$_SERVER['REQUEST_URI']`: Normalized to highlight the active pill tab.
 *
 * OUTPUT PRODUCED:
 * - Scoped Light/Dark CSS variables, 4-tab pill navigation bar, and `[data-copy-target]`
 *   clipboard event listener.
 * ============================================================================
 */

$rawAiUri = parse_url($_SERVER['REQUEST_URI'] ?? '/about/ai-disclaimer', PHP_URL_PATH) ?: '/about/ai-disclaimer';
$activeAiPath = strlen($rawAiUri) > 1 ? rtrim($rawAiUri, '/') : $rawAiUri;

$aiSuiteTabs = [
    [
        'url'   => '/about/ai-disclaimer',
        'icon'  => 'ph-robot',
        'label' => 'Overview & Workflow',
    ],
    [
        'url'   => '/about/ai-disclaimer/craft-vs-slop',
        'icon'  => 'ph-sliders',
        'label' => 'Craft vs. “AI Slop”',
    ],
    [
        'url'   => '/about/ai-disclaimer/zero-budget-reality',
        'icon'  => 'ph-piggy-bank',
        'label' => 'Zero-Budget Reality',
    ],
    [
        'url'   => '/about/ai-disclaimer/history-of-tools',
        'icon'  => 'ph-clock-counter-clockwise',
        'label' => '2,400 Years of Tools',
    ],
];
?>
<style>
    /* =====================================================================
       SHARED AI & CREATIVE PROCESS SUITE STYLES (LIGHT & DARK MODE SAFE)
       Uses semantic CSS custom properties tuned for >= 7:1 contrast in both
       Light Mode and Dark Mode across `/about/ai-disclaimer` and sub-pages.
       ===================================================================== */
    .ai-suite-shell {
        --ai-quote-bg: #f1f5f9;
        --ai-quote-text: #0f172a;
        --ai-quote-border: #b45309;
        --ai-link: #0369a1;
        --ai-link-hover: #1d4ed8;
        --ai-status-ok: #047857;
    }

    [data-bs-theme="dark"] .ai-suite-shell,
    [data-theme="dark"] .ai-suite-shell {
        --ai-quote-bg: rgba(15, 23, 42, 0.92);
        --ai-quote-text: #f8fafc;
        --ai-quote-border: #fbbf24;
        --ai-link: #7dd3fc;
        --ai-link-hover: #fde68a;
        --ai-status-ok: #6ee7b7;
    }

    @media (prefers-color-scheme: dark) {
        :root:not([data-bs-theme="light"]):not([data-theme="light"]) .ai-suite-shell {
            --ai-quote-bg: rgba(15, 23, 42, 0.92);
            --ai-quote-text: #f8fafc;
            --ai-quote-border: #fbbf24;
            --ai-link: #7dd3fc;
            --ai-link-hover: #fde68a;
            --ai-status-ok: #6ee7b7;
        }
    }

    .ai-suite-inline-link {
        color: var(--ai-link) !important;
        text-decoration: underline;
        text-underline-offset: 3px;
        font-weight: 600;
    }
    .ai-suite-inline-link:hover {
        color: var(--ai-link-hover) !important;
    }

    .ai-reply-quote {
        background-color: var(--ai-quote-bg);
        color: var(--ai-quote-text);
        border-left: 4px solid var(--ai-quote-border);
        white-space: pre-wrap;
        font-size: 0.96rem;
        line-height: 1.7;
    }

    .ai-copy-status {
        color: var(--ai-status-ok);
        font-weight: 600;
    }

    .ai-suite-subnav {
        background-color: var(--bs-tertiary-bg, rgba(148, 163, 184, 0.12));
    }

    /* High-contrast 3-column role header banners on `/about/ai-disclaimer` (`>= 7.18:1` AAA
       in BOTH Light Mode and Dark Mode—never relying on `opacity-75` or pastel dark-mode tokens!):
       - Writer & Builder: `#065f46` deep emerald + `#ffffff` (`7.68:1`) / `#ecfdf5` (`7.18:1`)
       - The Co-Writer:    `#1e40af` deep cobalt  + `#ffffff` (`8.72:1`) / `#dbeafe` (`7.43:1`)
       - The Studio:       `#fbbf24` warm amber   + `#0f172a` (`11.58:1`) / `#1e293b` (`9.65:1`) */
    .ai-role-banner--writer {
        background-color: #065f46 !important;
        color: #ffffff !important;
    }
    .ai-role-banner--writer .ai-role-title,
    .ai-role-banner--writer i {
        color: #ffffff !important;
    }
    .ai-role-banner--writer .ai-role-sub {
        color: #ecfdf5 !important;
    }

    .ai-role-banner--cowriter {
        background-color: #1e40af !important;
        color: #ffffff !important;
    }
    .ai-role-banner--cowriter .ai-role-title,
    .ai-role-banner--cowriter i {
        color: #ffffff !important;
    }
    .ai-role-banner--cowriter .ai-role-sub {
        color: #dbeafe !important;
    }

    .ai-role-banner--studio {
        background-color: #fbbf24 !important;
        color: #0f172a !important;
    }
    .ai-role-banner--studio .ai-role-title,
    .ai-role-banner--studio i {
        color: #0f172a !important;
    }
    .ai-role-banner--studio .ai-role-sub {
        color: #1e293b !important;
    }

    /* Superscript inline citation links (`[1]`, `[2]`, ...) & `:target` bibliography highlight:
       - Gives keyboard and touch users a comfortable click area without breaking line-height.
       - Highlights the targeted `<li id="source-N">` row when jumped to from the article body,
         with `scroll-margin-top` so sticky site headers never cover the cited source! */
    .ai-cite-sup {
        font-size: 0.78em;
        line-height: 0;
        margin-left: 0.12rem;
    }
    .ai-cite-ref {
        color: var(--ai-link) !important;
        font-weight: 700;
        text-decoration: none;
        padding: 0.08rem 0.22rem;
        border-radius: 0.25rem;
    }
    .ai-cite-ref:hover {
        color: var(--ai-link-hover) !important;
        text-decoration: underline;
    }

    .ai-sources-list {
        padding-left: 1.4rem;
        margin-bottom: 0;
    }
    .ai-sources-list li {
        padding: 0.75rem 0.95rem;
        margin-bottom: 0.5rem;
        border-radius: 0.5rem;
        border-left: 3px solid transparent;
        scroll-margin-top: 6.5rem;
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .ai-sources-list li:last-child {
        margin-bottom: 0;
    }
    .ai-sources-list li:target {
        background-color: var(--ai-quote-bg);
        color: var(--ai-quote-text);
        border-left-color: var(--ai-quote-border);
    }

    .ai-cite-backlink {
        color: var(--ai-link) !important;
        font-weight: 600;
        text-decoration: none;
        margin-left: 0.35rem;
        white-space: nowrap;
    }
    .ai-cite-backlink:hover {
        color: var(--ai-link-hover) !important;
        text-decoration: underline;
    }

    .ai-suite-shell a:focus-visible,
    .ai-suite-shell button:focus-visible {
        outline: 2px solid #0284c7;
        outline-offset: 3px;
    }
</style>

<nav class="ai-suite-subnav p-2 rounded-4 border border-base-300 shadow-sm mb-5" aria-label="AI and Creative Process Sections">
    <div class="d-flex flex-wrap justify-content-center gap-2">
        <?php foreach ($aiSuiteTabs as $tab):
            $isActiveTab = ($activeAiPath === $tab['url']);
        ?>
            <a href="<?php echo htmlspecialchars($tab['url'], ENT_QUOTES, 'UTF-8'); ?>"
               class="btn btn-sm rounded-full <?php echo $isActiveTab ? 'btn-primary text-white fw-bold shadow-sm' : 'btn-ghost text-body'; ?>"
               <?php echo $isActiveTab ? 'aria-current="page"' : ''; ?>>
                <i class="ph-duotone <?php echo htmlspecialchars($tab['icon'], ENT_QUOTES, 'UTF-8'); ?> me-1" aria-hidden="true"></i>
                <?php echo htmlspecialchars($tab['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<script>
// ============================================================================
// SHARED DELEGATED CLIPBOARD HANDLER FOR `[data-copy-target]` REPLY BUTTONS
// Attaches once on `window.__rsAiCopyBound` so SPA transitions never duplicate
// click listeners across `/about/ai-disclaimer/*` sub-pages.
// ============================================================================
(function () {
    if (window.__rsAiCopyBound) {
        return;
    }
    window.__rsAiCopyBound = true;

    document.addEventListener('click', function (event) {
        const btn = event.target && event.target.closest ? event.target.closest('[data-copy-target]') : null;
        if (!btn) {
            return;
        }

        const targetId = btn.getAttribute('data-copy-target');
        const statusId = btn.getAttribute('data-copy-status');
        const sourceEl = targetId ? document.getElementById(targetId) : null;
        const statusEl = statusId ? document.getElementById(statusId) : null;

        if (!sourceEl) {
            return;
        }

        const text = sourceEl.textContent ? sourceEl.textContent.trim() : '';
        if (!text || !navigator.clipboard || typeof navigator.clipboard.writeText !== 'function') {
            if (statusEl) {
                statusEl.textContent = 'Select the reply text above and press Copy.';
            }
            return;
        }

        navigator.clipboard.writeText(text).then(function () {
            if (statusEl) {
                statusEl.textContent = 'Standard reply copied to clipboard.';
                window.setTimeout(function () {
                    statusEl.textContent = '';
                }, 4000);
            }
        }).catch(function () {
            if (statusEl) {
                statusEl.textContent = 'Select the reply text above and press Copy.';
            }
        });
    });
})();
</script>
