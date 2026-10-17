<?php
/**
 * ============================================================================
 * Stardust Engine - Ad Astra Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/sidebar-ad-astra.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Dedicated sidebar component for the "Ad Astra" narrative section, linking to
 * the mission overview, maiden voyage, Cosmic Tidal Lock Sound™, and related
 * audio transmissions.
 * ============================================================================
 */
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom text-info">
    <i class="fa-duotone fa-rocket-launch me-2" aria-hidden="true"></i>Mission Control
</h5>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-radar" aria-hidden="true"></i>Mission Overview
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/the-voyage" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-book-sparkles" aria-hidden="true"></i>The Maiden Voyage
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-satellite" aria-hidden="true"></i>Cosmic Tidal Lock Sound™
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="https://music.raggiesoft.com/the-stardust-engine/1995-ad-astra" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-play-circle" aria-hidden="true"></i>Stream Ad Astra (1995)
    </wa-button>
</div>

<h6 class="pt-3 pb-2 mb-3 border-bottom mt-4">
    <i class="fa-duotone fa-database me-2" aria-hidden="true"></i>Related Archives
</h6>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="https://music.raggiesoft.com/the-stardust-engine/2011-starfield-calibration" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-compact-disc" aria-hidden="true"></i>Starfield Calibration (2011)
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-file-invoice-dollar" aria-hidden="true"></i>The $150M Refusal
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-chevron-left" aria-hidden="true"></i>Return to Story Hub
    </wa-button>
</div>