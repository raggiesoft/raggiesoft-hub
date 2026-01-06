<?php
// pages/engine-room/corporate/stardust-blacksburg/location.php
// Context: Transit Integration (Blue Ridge Transit, RVT, Bluewater).
// Theme: Varsity / Logistics.

$pageTitle = "Location & Transit - Stardust Blacksburg";
?>

<style>
    /* MAP PLACEHOLDER THEME */
    .transit-map-placeholder {
        background-color: #e9ecef;
        background-image: url('https://assets.raggiesoft.com/common/patterns/topography.png');
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--bs-border-color);
        border-radius: 8px;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="dark"] .transit-map-placeholder {
        background-color: #212529;
        border-color: #495057;
    }

    .transit-badge {
        font-family: 'Courier New', monospace;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-3">The 15-Minute Rule</h1>
            <p class="lead text-body-secondary">
                Stardust Blacksburg properties are strategically located along the "Spine," ensuring you are never more than a 15-minute ride from Alumni Mall.
            </p>
            <div class="d-inline-flex align-items-center bg-warning bg-opacity-10 border border-warning rounded-pill px-4 py-2 mt-2">
                <i class="fa-solid fa-id-card text-warning me-2"></i>
                <span class="fw-bold text-warning text-uppercase small letter-spacing-1">CPI PolyPass Accepted Here</span>
            </div>
        </div>
    </div>

    <div class="row g-5 mb-5">
        
        <div class="col-lg-7">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-warning pb-2 mb-4">
                <i class="fa-duotone fa-bus me-2 text-warning"></i>Local Network: Blue Ridge Transit
            </h3>
            <p class="text-body-secondary mb-4">
                Your CPI ID is your fare. Our properties are clustered around the high-frequency corridors of the <strong>Blue Ridge Transit</strong> network, ensuring you never have to fight for a parking spot on campus.
            </p>
            
            <div class="list-group shadow-sm mb-4">
                
                <div class="list-group-item bg-body-tertiary">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong class="text-primary"><i class="fa-solid fa-route me-2"></i>Route 1: The Spine</strong>
                        <span class="badge bg-secondary">Every 15 Min</span>
                    </div>
                    <p class="small text-muted mb-1">
                        <strong>Corridor:</strong> Pepper Plaza <i class="fa-solid fa-arrow-right mx-1" style="font-size: 0.7em;"></i> Downtown <i class="fa-solid fa-arrow-right mx-1" style="font-size: 0.7em;"></i> Alumni Mall.
                    </p>
                    <p class="small text-muted mb-0 fst-italic">
                        The heavy lifter. Direct access to Christiansburg shopping and the Uptown Mall. 60-foot articulated buses deployed during peak hours.
                    </p>
                </div>

                <div class="list-group-item bg-body-tertiary">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong class="text-success"><i class="fa-solid fa-route me-2"></i>Route 3: The Radford Link</strong>
                        <span class="badge bg-secondary">Every 30 Min</span>
                    </div>
                    <p class="small text-muted mb-0">
                        <strong>Corridor:</strong> Pepper Plaza <i class="fa-solid fa-arrow-right mx-1" style="font-size: 0.7em;"></i> McConnell Transit Center (Radford Univ).
                        <br>Perfect for dual-enrolled students or visiting friends at RU.
                    </p>
                </div>

                <div class="list-group-item bg-body-tertiary">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong class="text-warning text-dark-emphasis"><i class="fa-solid fa-route me-2"></i>Route 8: The Riner Run</strong>
                        <span class="badge bg-secondary">Hourly</span>
                    </div>
                    <p class="small text-muted mb-0">
                        <strong>Corridor:</strong> Pepper Plaza <i class="fa-solid fa-arrow-right mx-1" style="font-size: 0.7em;"></i> Riner.
                        <br>Connection to rural medical services.
                    </p>
                </div>

            </div>
        </div>

        <div class="col-lg-5">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-primary pb-2 mb-4">
                <i class="fa-duotone fa-globe-americas me-2 text-primary"></i>Regional Connections
            </h3>
            <p class="text-body-secondary small mb-3">
                Need to leave the bubble? The <strong>PolyPass</strong> works on regional partners too.
            </p>

            <div class="card border-0 bg-body-tertiary shadow-sm mb-3">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center mb-2">
                        <span class="transit-badge text-danger border border-danger px-2 rounded me-2">BT</span>
                        <h6 class="fw-bold text-body-emphasis mb-0">The Maroon Express (Bluewater)</h6>
                    </div>
                    <p class="card-text small text-body-secondary">
                        <strong>Route:</strong> Bluewater <i class="fa-solid fa-left-right mx-1"></i> CPI via Falling Branch.
                        <br>Luxury coach service. A cultural phenomenon for students from Carroll County.
                    </p>
                </div>
            </div>

            <div class="card border-0 bg-body-tertiary shadow-sm mb-3">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center mb-2">
                        <span class="transit-badge text-success border border-success px-2 rounded me-2">RVT</span>
                        <h6 class="fw-bold text-body-emphasis mb-0">Roanoke Valley Transit</h6>
                    </div>
                    <p class="card-text small text-body-secondary">
                        <strong>Route:</strong> CPI <i class="fa-solid fa-left-right mx-1"></i> Roanoke (Campbell Court).
                        <br>Direct connection to the airport and downtown Roanoke internships.
                    </p>
                </div>
            </div>

            <div class="card border-0 bg-dark text-white shadow-sm mt-4">
                <div class="card-body p-3 text-center">
                    <i class="fa-duotone fa-bicycle fa-2x mb-2 text-warning"></i>
                    <h6 class="fw-bold text-uppercase mb-1">Active Commute</h6>
                    <p class="small text-white-50 mb-0">
                        Direct spur access to the <strong>Huckleberry Trail</strong>. Bike to class in 20 minutes, traffic-free.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="transit-map-placeholder shadow-sm">
                <div class="text-center position-relative z-1">
                    <i class="fa-duotone fa-map-location-dot fa-4x text-secondary opacity-50 mb-3"></i>
                    <h5 class="fw-bold text-body-secondary text-uppercase mb-1">Live Transit Grid</h5>
                    <p class="small text-muted font-monospace">
                        [RESIDENT LOGIN REQUIRED FOR REAL-TIME TRACKING]
                    </p>
                    <span class="badge bg-danger">PUBLIC ACCESS DENIED</span>
                </div>
                
                <div class="position-absolute bottom-0 end-0 p-3 text-end opacity-50 d-none d-md-block">
                    <span class="font-monospace small text-muted d-block">HUB: ALUMNI MALL</span>
                    <span class="font-monospace small text-muted d-block">ZONE: BLUE RIDGE TRANSIT</span>
                </div>
            </div>
            <p class="text-center mt-3 small text-muted fst-italic">
                *Stardust Blacksburg is not affiliated with the Town of Blacksburg or Blue Ridge Transit. Route schedules subject to change.
            </p>
        </div>
    </div>

</div>