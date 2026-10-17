<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Origin / Fractured Prisms Legacy Sidebar
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/origin/sidebar-origin.php
 * ROLE: Contextual navigation sidebar for legacy `/engine-room/artists/origin`
 *       routes, forwarding cleanly to Fractured Prisms and the 1999 London
 *       Discovery lore archive using Web Awesome v3.13.0 components.
 * ============================================================================
 */
?>
<div class="p-3">
    <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom border-secondary">
        <i class="fa-duotone fa-gem fa-2x text-info"></i>
        <div>
            <h6 class="text-uppercase fw-bold mb-0 text-body-emphasis" style="font-family: 'Oswald', sans-serif;">Fractured Prisms</h6>
            <small class="text-body-secondary font-monospace" style="font-size: 0.75rem;">EST. 1982 // LONDON</small>
        </div>
    </div>

    <div class="d-flex flex-column gap-1 mb-4">
        <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-id-card"></i> Profile &amp; Bio
        </wa-button>
        <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms/discography" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-compact-disc"></i> Discography
        </wa-button>
        <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms/band" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-users"></i> Claire &amp; Rhys Manning
        </wa-button>
    </div>

    <h6 class="text-uppercase fw-bold text-body-secondary mb-2 small" style="font-family: 'Oswald', sans-serif;">
        Lore Archives
    </h6>
    <div class="d-flex flex-column gap-1">
        <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms/story/the-hollow-square" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-chess-rook"></i> The Hollow Square
        </wa-button>
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/hard-reset/hard-reset-tour/london-discovery" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-handshake"></i> The 1999 London Discovery
        </wa-button>
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="w-100 text-start justify-content-start">
            <i slot="start" class="fa-duotone fa-shield-heart"></i> Protocol: Safe Harbor
        </wa-button>
    </div>

    <div class="mt-4 pt-3 border-top border-secondary">
        <wa-button appearance="outlined" variant="neutral" size="small" href="/engine-room/artists" class="w-100">
            <i slot="start" class="fa-duotone fa-arrow-left"></i> Full Roster
        </wa-button>
    </div>
</div>