<?php
/**
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/includes/components/modals/encyclopedia-modal.php
 * Path: /includes/components/modals/encyclopedia-modal.php
 * 
 * CORE RESPONSIBILITY:
 * Reusable UI Component: Encyclopedia Modal.
 * Renders an empty Web Awesome `<wa-dialog>` scaffold designed to be populated 
 * asynchronously via AJAX/JavaScript when a user clicks an in-universe lore term.
 * 
 * LORE CONTEXT:
 * - Powers the interactive "Stardust Encyclopedia" feature across narrative pages.
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Employs `<wa-dialog>` for the modal container.
 * - Includes a default `<wa-spinner>` loading state while content is fetched.
 * - Features a dynamic "Open Full Entry" footer link for deep-diving into specific lore.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Relies entirely on an external JavaScript controller (`encyclopedia.js`) to fetch
 *   content and inject it into `#encyclopedia-modal-body`.
 * - Requires Web Awesome and FontAwesome.
 * 
 * MAINTENANCE NOTES:
 * - Do not alter the IDs (`#encyclopedia-modal`, `#encyclopedia-modal-title`, 
 *   `#encyclopedia-modal-body`, `#encyclopedia-modal-read-more`) without simultaneously
 *   updating the `encyclopedia.js` controller.
 * - This file is a static HTML partial executing within a PHP environment.
 */
?>
<!-- Encyclopedia Modal -->
<wa-dialog id="encyclopedia-modal" class="encyclopedia-modal" label="Stardust Encyclopedia" light-dismiss>
    <!-- Header override for custom themes -->
    <div slot="label" class="d-flex align-items-center w-100">
        <i class="fa-solid fa-book-journal-whills me-2 opacity-50"></i>
        <h5 id="encyclopedia-modal-title" class="mb-0 fw-bold font-heading">Loading...</h5>
    </div>
    
    <div id="encyclopedia-modal-body" class="story-content p-2">
        <!-- Content gets injected here by encyclopedia.js -->
        <div class="d-flex justify-content-center py-5">
            <wa-spinner class="fs-1"></wa-spinner>
        </div>
    </div>

    <div slot="footer" class="d-flex justify-content-between align-items-center">
        <a href="#" id="encyclopedia-modal-read-more" class="text-decoration-none small fw-bold">
            Open Full Entry <i class="fa-solid fa-arrow-right-long ms-1"></i>
        </a>
        <wa-button variant="brand" outline class="close-encyclopedia-btn">Close</wa-button>
    </div>
</wa-dialog>
