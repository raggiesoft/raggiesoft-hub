<?php
// pages/engine-room/corporate/stardust-studios/overview.php
// Designation: Stardust Studios (The Warehouse)
// Context: Falling Branch Industrial Park, Blacksburg, VA.
// Configuration: 2013 Refit (Headquarters & Secure Living).

$pageTitle = "Stardust Studios - Corporate HQ & Production";
?>

<style>
    /* Motion Control: Only animate if user hasn't requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .sector-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .sector-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--bs-box-shadow-lg) !important;
            border-color: var(--bs-primary) !important;
        }
    }

    /* Blueprint Markers */
    .floor-badge {
        font-family: 'Courier New', monospace;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 0.35em 0.65em;
        font-size: 0.75em;
        border: 1px solid currentColor;
        border-radius: 4px;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
            <div class="d-flex align-items-center mb-3">
                <span class="badge bg-warning text-dark border border-dark rounded-pill px-3 py-2 me-3">
                    <i class="fa-duotone fa-warehouse me-2"></i>Commercial Zone
                </span>
                <span class="d-inline-flex gap-2 align-items-center border border-success text-success px-3 py-1 rounded-pill small fw-bold">
                    <i class="fa-solid fa-check-circle"></i> Live/Work Compliant
                </span>
            </div>
            <h1 class="display-4 fw-bold text-uppercase mb-2">Stardust Studios</h1>
            <p class="lead text-body-secondary font-monospace">
                Falling Branch Industrial Park, Blacksburg, VA.<br>
                The nerve center. Following the 2013 restructuring, all commercial operations and the family's emergency retreat were relocated here.
            </p>
        </div>
    </div>

    <div class="d-flex align-items-center mb-4 pb-2 border-bottom border-secondary-subtle">
        <span class="floor-badge text-primary me-3">Level 1</span>
        <h3 class="h5 text-uppercase text-body-emphasis mb-0">Commercial Operations</h3>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-6">
            <div class="card h-100 bg-body-tertiary border-secondary-subtle sector-card shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="p-3 bg-body-secondary rounded-circle">
                            <i class="fa-duotone fa-briefcase fa-2x text-primary"></i>
                        </div>
                        <i class="fa-solid fa-shield-check text-success fs-5" title="Secure Zone"></i>
                    </div>
                    <h4 class="card-title text-body-emphasis fw-bold">"The Bridge" (Admin)</h4>
                    <p class="card-text text-body-secondary">
                        Holly O'Connell's primary office. From this room, she manages the multi-billion dollar portfolio of the Trust.
                    </p>
                    <ul class="list-unstyled small text-body-secondary mb-0 border-top border-secondary-subtle pt-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i><strong>The War Board:</strong> Floor-to-ceiling tracking of global assets.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i><strong>Secure Comms:</strong> Hardlined data link to the house (The Fortress).</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>The Vault:</strong> Fireproof storage for master tapes and deeds.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 bg-body-tertiary border-secondary-subtle sector-card shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="p-3 bg-body-secondary rounded-circle">
                            <i class="fa-duotone fa-microphone-lines fa-2x text-warning"></i>
                        </div>
                    </div>
                    <h4 class="card-title text-body-emphasis fw-bold">Production Floor</h4>
                    <p class="card-text text-body-secondary">
                        A cavernous, acoustically-isolated space designed to replicate stadium conditions.
                    </p>
                    <ul class="list-unstyled small text-body-secondary mb-0 border-top border-secondary-subtle pt-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i><strong>Floating Slab:</strong> Concrete floor isolated on rubber to prevent seismic vibration.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i><strong>The Fleet Bay:</strong> Indoor parking/maintenance for the Tour Bus and accessible vans.</li>
                        <li><i class="fa-solid fa-check text-warning me-2"></i><strong>Power:</strong> 3-Phase industrial mains with battery backup.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center mb-4 pb-2 border-bottom border-danger-subtle">
        <span class="floor-badge text-danger me-3">Level 2</span>
        <h3 class="h5 text-uppercase text-body-emphasis mb-0">Restricted Quarters (The Loft)</h3>
    </div>

    <div class="card border-danger border-opacity-50 shadow-sm overflow-hidden mb-5">
        <div class="row g-0">
            <div class="col-md-4 bg-body-secondary d-flex align-items-center justify-content-center p-5">
                <div class="text-center">
                    <i class="fa-duotone fa-door-closed fa-5x text-danger opacity-50 mb-3"></i>
                    <h5 class="fw-bold text-body-emphasis text-uppercase">Access Restricted</h5>
                    <p class="small text-danger fw-bold font-monospace mb-0">TIER 1 PERSONNEL ONLY</p>
                </div>
            </div>
            <div class="col-md-8 p-4 p-lg-5 bg-body-tertiary">
                <p class="text-body-secondary mb-4">
                    Hidden behind a nondescript door labeled "Mechanical Storage" lies a fully furnished, luxury apartment. This space serves as an emergency retreat and long-term rehearsal residency. Access is via a biometric keypad or the freight elevator.
                </p>
                
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-3 border border-secondary-subtle rounded h-100 bg-body">
                            <h6 class="fw-bold text-body-emphasis text-uppercase small mb-2">Bedroom A (The Family)</h6>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-duotone fa-bed-front text-secondary me-2"></i>
                                <span class="fw-bold">1x King Bed</span>
                            </div>
                            <p class="small text-body-secondary mb-0">
                                Configured for Ryan, Cassidy, and Holly. Features reinforced frame and adjacent medical supply storage.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="p-3 border border-secondary-subtle rounded h-100 bg-body">
                            <h6 class="fw-bold text-body-emphasis text-uppercase small mb-2">Bedroom B (The Twins)</h6>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-duotone fa-bed-empty text-secondary me-2"></i>
                                <span class="fw-bold">2x Full Beds</span>
                            </div>
                            <p class="small text-body-secondary mb-0">
                                Sleeping quarters for Evan and Tyler Wright. Sound-dampened walls.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 p-3 bg-body rounded border border-warning-subtle">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-universal-access text-warning mt-1 me-3"></i>
                        <div>
                            <strong class="text-body-emphasis text-uppercase small">Accessibility Note:</strong>
                            <p class="small text-body-secondary mb-0">
                                The second floor is accessible via a heavy-duty freight elevator (2,500lb capacity) capable of transporting Ryan's power chair and equipment simultaneously.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="alert alert-secondary d-flex align-items-center p-4 rounded shadow-sm border-0 bg-body-secondary text-body-emphasis">
                <i class="fa-duotone fa-bolt fa-3x me-4 text-warning"></i>
                <div>
                    <h5 class="fw-bold text-uppercase mb-1">Off-Grid Capability</h5>
                    <p class="mb-0 small opacity-75">
                        The facility is backed by an industrial telecom-grade battery bank and a natural gas generator. In the event of a regional power failure, Stardust Studios can operate independently for 14 days.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>