<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Engine Room Corporate Sidebar
 * ============================================================================
 * ROLE: Contextual navigation and status sidebar for the "Family Office" 
 *       narrative property. Uses sterile, corporate styling to simulate an
 *       internal intranet portal.
 * 
 * CORE FEATURES:
 * - Governance & Case Files: Links to in-universe corporate structures.
 * - System Status HUD: A dynamic-looking (but static) readout of internal
 *   server states (`TRUST_DB`, etc.).
 * 
 * MAINTENANCE: This sidebar is heavily narrative-focused. Maintain the 
 *              color coding (Dark for Governance, Danger for Cases, Info for
 *              Systems) to reinforce the internal tool aesthetic.
 * ============================================================================
 */
// includes/components/sidebars/engine-room/corporate/sidebar.php
// Context: Quick links for the Family Office.
?>

<!-- [LAYOUT] Governance Card: Links to internal trust and leadership structures -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-dark text-white fw-bold text-uppercase">
        <i slot="start" class="fa-duotone fa-shield-check"></i> Governance &amp; Holdings
    </div>
    <div class="list-group list-group-flush small">
        <a href="/engine-room/corporate/structure" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <span>The Trust Map (2015)</span>
            <i slot="start" class="fa-solid fa-chevron-right "></i> </a>
        <a href="/engine-room/corporate/leadership" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <span>Executive Leadership</span>
            <i slot="start" class="fa-solid fa-chevron-right "></i>
        </a>
        <a href="/engine-room/corporate/strategic-assets" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <span>Stardust Strategic Assets</span>
            <i slot="start" class="fa-solid fa-chevron-right "></i>
        </a>
        <a href="/engine-room/corporate/strategic-assets/the-iron-horse" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <span>The Iron Horse &amp; Fleet Archive</span>
            <i slot="start" class="fa-solid fa-chevron-right "></i>
        </a>
    </div>
</div>

<!-- [LAYOUT] Case Files Card: Archive of completed narrative operations -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-danger text-white fw-bold text-uppercase">
        <i slot="start" class="fa-duotone fa-box-archive"></i> Case Files
    </div>
    <div class="list-group list-group-flush small">
        <a href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="list-group-item list-group-item-action">
            <div class="fw-bold">Filing 15-0812-DE</div>
            <div class=" fst-italic">Re: The 2015 Delaware Migration</div>
            <span class="badge bg-info text-dark mt-1">SEALED / ACTIVE</span>
        </a>
        <a href="/engine-room/corporate/acquisition-plan" class="list-group-item list-group-item-action">
            <div class="fw-bold">Case 18-11492</div>
            <div class=" fst-italic">Re: Omni-Global Media</div>
            <span class="badge bg-success mt-1">CLOSED / ACQUIRED</span>
        </a>
    </div>
</div>

<!-- [UI COMPONENT] System Status HUD: Simulates a live infrastructure readout -->
<div class="card border-info bg-body-tertiary mb-4">
    <div class="card-body">
        <h6 class="card-title text-info fw-bold text-uppercase">
            <i slot="start" class="fa-duotone fa-signal-stream"></i> System Status
        </h6>
        <ul class="list-unstyled small mb-0 font-monospace">
            <li class="mb-1 text-success"><i slot="start" class="fa-solid fa-check me-2"></i> TRUST_DB: ONLINE</li>
            <li class="mb-1 text-success"><i class="fa-solid fa-check me-2"></i>FLEET_GPS: ACTIVE</li>
            <li class="mb-0 text-success"><i class="fa-solid fa-check me-2"></i>AETHEL_BOT: IDLE</li>
        </ul>
        <a href="/engine-room/corporate/systems" class="btn btn-outline-info btn-sm w-100 mt-3">Access Console</a>
    </div>
</div>