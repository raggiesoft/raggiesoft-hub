<?php
// pages/engine-room/corporate/stardust-blacksburg/the-fortress.php
// Designation: PCC-01 (Primary Command Center)
// Context: 512 Progress St NE. The "Grey Man" House.
// Theme: "Camouflage" (Boring Exterior / High-Tech Interior).

$pageTitle = "Property Profile: 512 Progress St NE (The Fortress)";
?>

<style>
    /* THE GREY MAN THEME */
    .blueprint-card {
        border-left: 4px solid var(--bs-secondary);
        background-color: var(--bs-body-tertiary);
    }
    
    .blueprint-card .icon-box {
        width: 48px; 
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--bs-secondary-bg);
        border-radius: 8px;
        color: var(--bs-body-color);
    }

    /* Floorplan Marker */
    .marker-badge {
        font-family: 'Courier New', monospace;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
            <div class="d-flex align-items-center mb-3">
                <span class="badge bg-secondary text-white border border-white rounded-pill px-3 py-2 me-3">
                    <i class="fa-solid fa-house-chimney me-2"></i>Residential Zone R-5
                </span>
                <span class="font-monospace text-muted small">ID: PCC-01</span>
            </div>
            <h1 class="display-4 fw-bold text-uppercase mb-2">The Fortress</h1>
            <p class="lead text-body-secondary font-monospace">
                512 Progress St NE, Blacksburg, VA.<br>
                To the neighbors, it's a quiet rental. To the Trust, it is the Capital City.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 position-relative">
                        <div class="h-100 bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center text-center p-5">
                            <div>
                                <i class="fa-duotone fa-house fa-5x text-secondary opacity-50 mb-3"></i>
                                <p class="small text-muted font-monospace fst-italic">
                                    IMG_EXT_01: White Vinyl Siding.<br>Standard Shingle Roof.<br>Invisible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 p-4 p-lg-5">
                        <h3 class="h5 fw-bold text-uppercase border-bottom pb-2 mb-4">Strategic Overview</h3>
                        
                        <div class="d-flex align-items-start mb-4">
                            <i class="fa-duotone fa-shield-check text-success fs-3 me-3 mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-1">The "Grey Man" Strategy</h5>
                                <p class="small text-body-secondary mb-0">
                                    Located 0.1 miles from the CPI campus. The constant foot traffic of students provides natural cover for the band's movements. A tour bus parked out front is dismissed as "Move-In Day."
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="fa-duotone fa-network-wired text-primary fs-3 me-3 mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-1">Tier 1 Connectivity</h5>
                                <p class="small text-body-secondary mb-0">
                                    Connected directly to the university's internet backbone via private dark fiber buried under the backyard. Latency to the London Exchange: 72ms.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="fa-duotone fa-wheelchair-move text-warning fs-3 me-3 mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-1">Stealth Accessibility</h5>
                                <p class="small text-body-secondary mb-0">
                                    No industrial ramps. The wraparound porch <em>is</em> the ramp, graded perfectly to code but disguised with traditional carpentry and holly bushes.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 class="h5 text-uppercase text-body-secondary border-bottom pb-2 mb-4">Internal Layout (Restricted)</h3>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 blueprint-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="icon-box"><i class="fa-solid fa-layer-group"></i></div>
                                <span class="marker-badge text-primary">Floor 1</span>
                            </div>
                            <h5 class="fw-bold">Operations & Quarters</h5>
                            <ul class="list-unstyled small text-body-secondary mt-3 mb-0">
                                <li class="mb-2"><strong>The Bullpen (Living Room):</strong> Tactical meeting space. Touch-screen coffee table for logistics.</li>
                                <li class="mb-2"><strong>The War Room (Dining Room):</strong> Holly's Office. Wall-to-wall whiteboards. Concealed lift access.</li>
                                <li><strong>The Barracks (Parlor):</strong> Ryan & Cassidy's room. Positioned 15ft from the exit for rapid extraction.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 blueprint-card shadow-sm" style="border-left-color: #dc3545;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="icon-box" style="background-color: rgba(220, 53, 69, 0.1); color: #dc3545;"><i class="fa-solid fa-server"></i></div>
                                <span class="marker-badge text-danger">Basement</span>
                            </div>
                            <h5 class="fw-bold">The Engine Room</h5>
                            <ul class="list-unstyled small text-body-secondary mt-3 mb-0">
                                <li class="mb-2"><strong>Server Farm:</strong> Self-hosted architecture. No cloud dependencies.</li>
                                <li class="mb-2"><strong>Power Vault:</strong> Victron/NorthStar AGM Battery Bank (72hr Silent Run).</li>
                                <li><strong>Climate Control:</strong> 5-Ton Industrial HVAC disguised as residential unit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>