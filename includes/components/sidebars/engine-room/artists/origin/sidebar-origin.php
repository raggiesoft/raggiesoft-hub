<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Origin (Artist) Sidebar
 * ============================================================================
 * ROLE: The contextual navigation sidebar for the "Origin" artist profile 
 *       within the Engine Room Records lore. Connects their discography with 
 *       specific narrative events (e.g., The 1998 Signing).
 * 
 * INTEGRATION: Displayed only when rendering Origin-specific pages. Relies on 
 *              standard Bootstrap `list-group` styling to match the corporate
 *              record label aesthetic.
 * 
 * MAINTENANCE: Changes to the "Lore Archives" links should be coordinated 
 *              with the overarching Stardust Engine timeline to ensure 
 *              narrative continuity.
 * ============================================================================
 */
?>
<!-- [LAYOUT] Origin Identity Block: Main header identifying the artist -->
<div class="p-3">
    <div class="d-flex align-items-center mb-4 pb-3 border-bottom border-secondary">
        <i slot="start" class="fa-duotone fa-user-group fa-2x text-primary"></i> <div>
            <h6 class="text-uppercase fw-bold mb-0 text-body-emphasis" style="font-family: 'Oswald', sans-serif;">Origin</h6>
            <small class="text-body-secondary font-monospace" style="font-size: 0.75rem;">EST. 1982 // LONDON</small>
        </div>
    </div>
    
    <!-- [UI COMPONENT] Core Profile Navigation -->
    <div class="list-group list-group-flush mb-4">
        <a href="/engine-room/artists/origin" class="list-group-item list-group-item-action bg-transparent ps-0 border-0">
            <i slot="start" class="fa-duotone fa-id-card me-3 text-body-secondary"></i> Profile & Bio
        </a>
        <a href="/engine-room/artists/origin/discography" class="list-group-item list-group-item-action bg-transparent ps-0 border-0">
            <i slot="start" class="fa-duotone fa-compact-disc"></i> Discography
        </a>
    </div>

    <h6 class="text-uppercase fw-bold text-body-secondary mb-3 small" style="font-family: 'Oswald', sans-serif;">
        Lore Archives
    </h6>
    <!-- [UI COMPONENT] Lore Archives: Cross-linking to narrative events -->
    <div class="list-group list-group-flush">
         <a href="/engine-room/history/london-discovery" class="list-group-item list-group-item-action bg-transparent ps-0 border-0 small text-body-secondary">
            <i slot="start" class="fa-duotone fa-handshake"></i> The 1998 Signing
        </a>
         <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="list-group-item list-group-item-action bg-transparent ps-0 border-0 small text-body-secondary">
            <i slot="start" class="fa-duotone fa-shield-heart"></i> Protocol: Safe Harbor
        </a>
    </div>

    <div class="mt-5 pt-3 border-top border-secondary">
        <a href="/engine-room/artists" class="btn btn-outline-secondary btn-sm w-100 rounded-0">
            <i slot="start" class="fa-duotone fa-arrow-left"></i> Full Roster
        </a>
    </div>
</div>