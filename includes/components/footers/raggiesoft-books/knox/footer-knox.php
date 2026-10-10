<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the specialized footer for the "K.N.O.X." book/lore hub.
 * 
 * DESIGN INTENT:
 * - Delivers a stark, brutalist, and terminal-like aesthetic.
 * - Relies heavily on monospace fonts and minimal styling to mimic a classified intelligence dossier or mainframe interface.
 * - Utilizes standard Bootstrap 5 utility classes (`bg-body-tertiary`, `text-body`) to automatically adapt to the user's Dark/Light mode preference.
 * 
 * MAINTENANCE NOTES:
 * - Extremely lightweight by design. Do not add complex graphics or multi-column layouts here; it contradicts the thematic minimalism.
 * - The `hover-underline` class must be defined in the parent page's CSS, as no inline styles are provided in this component.
 */
// includes/components/footers/raggiesoft-books/footer-knox.php
// Adaptive Footer for Knox Landing Page
?>
<footer class="mt-auto bg-body-tertiary text-body border-top border-secondary py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            
            <!-- LEGACY BRANDING: Explicit inline font overrides used here to enforce the 'terminal' look independent of the global typography settings. -->
            <div class="col-md-4 text-center text-md-start">
                <div class="text-uppercase fw-bold text-body" style="font-family: 'Courier New', monospace; letter-spacing: -1px; font-size: 1.5rem;">
                    K.N.O.X.
                </div>
                <div class="small text-body-secondary mt-2">
                    Kinetic Null Operative: X
                </div>
            </div>

            <div class="col-md-4 text-center">
                <ul class="list-unstyled mb-0" style="font-family: 'Courier New', monospace;">
                    <li class="mb-2">
                        <a href="/raggiesoft-books/knox/chapters" class="text-decoration-none text-body hover-underline">
                            > START READING
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/raggiesoft-books/knox/lore" class="text-decoration-none text-body hover-underline">
                            > WORLD DATA
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="/raggiesoft-books/knox/characters" class="text-decoration-none text-body hover-underline">
                            > OPERATIVES
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>