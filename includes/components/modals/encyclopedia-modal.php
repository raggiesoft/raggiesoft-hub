<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/modals/encyclopedia-modal.php
 * Role: Global Encyclopedia Quick-Preview Modal (`<dialog id="encyclopedia-modal">`)
 * Domain: https://raggiesoft.com (Included once per page inside `includes/footer.php`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Outputs an empty, accessible native HTML5 `<dialog>` shell at the bottom of
 * `includes/footer.php`. When `encyclopedia.js` intercepts a lore preview trigger,
 * it calls `/api/lore?entry=...` (`pages/api/lore-fetcher.php`) and populates:
 *   - `#encyclopedia-modal-title`: Entry heading from YAML frontmatter.
 *   - `#encyclopedia-modal-body`: Parsed Markdown HTML (replacing the DaisyUI
 *     `.loading-spinner` placeholder).
 *   - `#encyclopedia-modal-read-more`: Link to the full Encyclopedia entry.
 *
 * INPUTS:
 * - Pure HTML template (no PHP variables required); hydrated client-side by `encyclopedia.js`.
 *
 * OUTPUT PRODUCED:
 * - Native `<dialog id="encyclopedia-modal">` with keyboard-accessible `<form method="dialog">`
 *   close button (`aria-label="Close modal"`) and click-outside backdrop dismissal.
 * ============================================================================
 *
 * ARCHITECTURAL DOCBLOCK: Encyclopedia Modal (DaisyUI 5 + Native <dialog>)
 * ============================================================================
 * File: includes/components/modals/encyclopedia-modal.php
 * Purpose:
 *     Renders a native HTML5 `<dialog>` modal styled with DaisyUI 5 (`.modal`,
 *     `.modal-box`) populated asynchronously by `encyclopedia.js`.
 * ============================================================================
 */
?>
<!-- Encyclopedia Modal -->
<dialog id="encyclopedia-modal" class="modal encyclopedia-modal">
    <div class="modal-box max-w-2xl">
        <?php /* Modal Header: Title + native `<form method="dialog">` close button */ ?>
        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
                <i class="ph-duotone ph-book-bookmark me-2 opacity-75 fs-4" aria-hidden="true"></i>
                <h5 id="encyclopedia-modal-title" class="mb-0 fw-bold font-heading">Loading...</h5>
            </div>
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost" aria-label="Close modal">✕</button>
            </form>
        </div>

        <?php /* Modal Body: Shows DaisyUI `.loading-spinner` until `encyclopedia.js` injects the fetched HTML */ ?>
        <div id="encyclopedia-modal-body" class="story-content p-2">
            <!-- Content gets injected here by encyclopedia.js -->
            <div class="d-flex justify-content-center py-5">
                <span class="loading loading-spinner loading-lg text-primary"></span>
            </div>
        </div>

        <?php /* Modal Footer Actions */ ?>
        <div class="modal-action d-flex justify-content-between align-items-center pt-3 border-top">
            <a href="#" id="encyclopedia-modal-read-more" class="text-decoration-none small fw-bold">
                Open Full Entry <i class="ph-duotone ph-arrow-right ms-1" aria-hidden="true"></i>
            </a>
            <button type="button" class="btn btn-outline btn-primary btn-sm close-encyclopedia-btn">Close</button>
        </div>
    </div>
    <?php /* Clicking outside `.modal-box` submits this backdrop `<form method="dialog">`, closing the modal natively */ ?>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
