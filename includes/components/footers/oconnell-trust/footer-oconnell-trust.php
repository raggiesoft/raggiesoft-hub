<!--
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the standardized, minimalist footer for the "O'Connell Family Trust" public-facing pages.
 * 
 * DESIGN INTENT:
 * - Embodies "Old Money" minimalism: white background (`bg-white`), dark text (`text-dark`), and a single, elegant icon (`fa-scale-balanced`).
 * - Intentionally lacks navigation links, emphasizing the private, exclusive nature of the fictional Trust.
 * 
 * MAINTENANCE NOTES:
 * - This footer is meant to be stark. Do not add complex navigation or promotional links.
 * - The `gap-3` class requires Bootstrap 5 flexbox support.
 -->
<footer class="mt-auto bg-white border-top py-5 text-dark">
    <!-- LEGACY LAYOUT: A simple, centered container lacking the multi-column structure found in standard corporate footers. -->
    <div class="container">
        <div class="text-center mb-4">
            <div class="text-uppercase small fw-bold  mb-2" style="letter-spacing: 2px;">
                The O'Connell Family Revocable Trust
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3 ">
                <i class="fa-light fa-scale-balanced fa-lg"></i>
            </div>
        </div>

        
    </div>
</footer>