<!--
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the specialized footer for the "Ad Astra" lore section of The Stardust Engine.
 * 
 * DESIGN INTENT:
 * - Maintains the stark, space-faring aesthetic defined by the `--astra-primary` (usually a deep gold or orange) and `--astra-text` CSS variables.
 * - Minimalist design (`font-monospace`, `small`) to mimic an archival read-out or mission log UI.
 * 
 * MAINTENANCE NOTES:
 * - Highly dependent on CSS custom properties (`var(--astra-*)`) defined in the parent page's `<style>` block. If those variables are missing, this footer will render with default/fallback colors.
 -->
<footer class="mt-auto py-4 border-top" style="background-color: #000; border-color: var(--astra-primary) !important;">
    <!-- LEGACY STYLING: Enforces monospace typography globally within the footer to maintain the "mission control" aesthetic. -->
    <div class="container font-monospace small">
        <div class="row align-items-center">
            
            <div class="col-md-6 text-center text-md-start">
                <span class="text-uppercase" style="color: var(--astra-primary); letter-spacing: 1px;">
                    <i class="fa-duotone fa-planet-ringed me-2"></i>The Stardust Engine
                </span>
                <span class="mx-2 ">|</span>
                <span style="color: var(--astra-text);">Ad Astra Mission Archive</span>
            </div>
            
        </div>
    </div>
</footer>