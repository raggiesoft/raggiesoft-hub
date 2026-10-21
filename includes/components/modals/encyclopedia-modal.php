<?php
/**
 * ============================================================================
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
        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
                <i class="ph-duotone ph-book-bookmark me-2 opacity-75 fs-4" aria-hidden="true"></i>
                <h5 id="encyclopedia-modal-title" class="mb-0 fw-bold font-heading">Loading...</h5>
            </div>
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost" aria-label="Close modal">✕</button>
            </form>
        </div>

        <div id="encyclopedia-modal-body" class="story-content p-2">
            <!-- Content gets injected here by encyclopedia.js -->
            <div class="d-flex justify-content-center py-5">
                <span class="loading loading-spinner loading-lg text-primary"></span>
            </div>
        </div>

        <div class="modal-action d-flex justify-content-between align-items-center pt-3 border-top">
            <a href="#" id="encyclopedia-modal-read-more" class="text-decoration-none small fw-bold">
                Open Full Entry <i class="ph-duotone ph-arrow-right ms-1" aria-hidden="true"></i>
            </a>
            <button type="button" class="btn btn-outline btn-primary btn-sm close-encyclopedia-btn">Close</button>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
