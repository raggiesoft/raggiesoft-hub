<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Default Sidebar Navigation
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/sidebar-default.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Standard HTML partial used to render the default navigation sidebar across
 * the hub using Web Awesome v3.13.0 (<wa-button>) components.
 * ============================================================================
 */
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom">Navigation</h5>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-home" aria-hidden="true"></i>Home
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/discography" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-record-vinyl" aria-hidden="true"></i>Discography
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/band" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-users" aria-hidden="true"></i>The Band
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-book-atlas" aria-hidden="true"></i>The Lore
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/about" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-circle-info" aria-hidden="true"></i>About
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/contact" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-paper-plane" aria-hidden="true"></i>Contact
    </wa-button>

    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/license" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-file-contract" aria-hidden="true"></i>License
    </wa-button>
</div>