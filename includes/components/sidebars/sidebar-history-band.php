<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Stardust Engine Timeline Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/sidebar-history-band.php
 *
 * ROLE:
 * Contextual navigation sidebar used within The Stardust Engine "History/Timeline"
 * lore pages. Allows quick jumping between eras via anchor links and cross-links
 * to valid narrative hubs.
 * ============================================================================
 */
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom">
    <i class="fa-duotone fa-timeline me-2" aria-hidden="true"></i>Timeline
</h5>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/band" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-chevron-up" aria-hidden="true"></i>Go Up
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#origins" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-graduation-cap" aria-hidden="true"></i>Origins (CPI)
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#apex-years" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-hand-fist" aria-hidden="true"></i>The Apex "Cold War"
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#independence" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-flag" aria-hidden="true"></i>Independence (1992)
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#freedom-era" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-dove" aria-hidden="true"></i>The Freedom Era
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#hiatus" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-moon" aria-hidden="true"></i>The Long Hiatus
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="#homecoming" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-fire" aria-hidden="true"></i>Re-Ignition &amp; Legacy
    </wa-button>
</div>

<h6 class="pt-3 pb-2 mb-3 border-bottom mt-4">Related Lore</h6>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-rocket-launch" aria-hidden="true"></i>Ad Astra
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-satellite" aria-hidden="true"></i>Cosmic Tidal Lock Sound™
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/cpi" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-school" aria-hidden="true"></i>About CPI &amp; The Forgers
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/band" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-users" aria-hidden="true"></i>Band Bios
    </wa-button>
</div>