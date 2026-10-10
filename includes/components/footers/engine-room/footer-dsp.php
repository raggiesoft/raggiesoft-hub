<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: DSP Verification Footer (Engine Room Records)
 * ============================================================================
 * ROLE: A highly stripped-down, sterile administrative footer specifically 
 *       designed for Digital Service Provider (DSP) verification workflows 
 *       (e.g., Spotify, Apple Music, BMI/ASCAP clearance pages).
 * 
 * INTEGRATION: Swapped in dynamically by the router when rendering legal 
 *              compliance or DSP portal views where marketing overhead is 
 *              unnecessary.
 * 
 * MAINTENANCE: Keep this component absolutely minimal. Redundant global 
 *              copyright information is intentionally omitted here to defer 
 *              to the global legal band in `includes/footer.php`.
 * ============================================================================
 */
// includes/components/footers/engine-room/footer-dsp.php
// Sterile, administrative footer for DSP verifiers.
// Redundant copyright removed to defer to the global-legal-band in footer.php.
?>
<!-- [LAYOUT] Sterile Administrative Footer: Minimal branding for DSP compliance -->
<footer class="mt-auto bg-light text-body border-top border-secondary py-4">
    <div class="container text-center">
        <p class="small  mb-0">
            <strong>Engine Room Records</strong> is a wholly owned digital imprint of RaggieSoft.
        </p>
    </div>
</footer>