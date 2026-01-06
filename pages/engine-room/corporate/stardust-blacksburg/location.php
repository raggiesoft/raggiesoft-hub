<?php
// pages/engine-room/corporate/stardust-blacksburg/location.php
// Context: Transit Integration (Blue Ridge Transit / CPI).
// Theme: Varsity.

$pageTitle = "Location & Transit - Stardust Blacksburg";
?>

<style>
    /* MAP PLACEHOLDER THEME */
    .transit-map-placeholder {
        background-color: #e9ecef;
        background-image: url('https://assets.raggiesoft.com/common/patterns/topography.png'); /* Subtle texture */
        height: 400px;
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
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-3">The 15-Minute Rule</h1>
            <p class="lead text-body-secondary">
                Every property in the Ironwood Collective is strategically located within a 15-minute transit or walking radius of the CPI Drillfield. 
            </p>
        </div>
    </div>

    <div class="row g-5 mb-5">
        
        <div class="col-lg-6">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-warning pb-2 mb-4">
                <i class="fa-duotone fa-bus me-2 text-warning"></i>Blue Ridge Transit (BRT)
            </h3>
            <p class="text-body-secondary">
                Your CPI Student ID is your pass. We have partnered with Blue Ridge Transit to ensure every property has a sheltered stop directly in front of the main entrance.
            </p>
            
            <div class="list-group shadow-sm">
                <div class="list-group-item d-flex justify-content-between align-items-center bg-body-tertiary">
                    <div>
                        <strong class="text-danger"><i class="fa-solid fa-circle me-2"></i>The Maroon Loop</strong>
                        <div class="small text-muted ms-4">Express to Newman Library</div>
                    </div>
                    <span class="badge bg-secondary">Every 10 Min</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center bg-body-tertiary">
                    <div>
                        <strong class="text-warning text-dark-emphasis"><i class="fa-solid fa-circle me-2"></i>The Gold Line</strong>
                        <div class="small text-muted ms-4">Downtown / Engineering Sector</div>
                    </div>
                    <span class="badge bg-secondary">Every 15 Min</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center bg-body-tertiary">
                    <div>
                        <strong class="text-success"><i class="fa-solid fa-circle me-2"></i>The Late Night Express</strong>
                        <div class="small text-muted ms-4">Safe Ride Home (Ends 2:30 AM)</div>
                    </div>
                    <span class="badge bg-secondary">Thurs-Sat</span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-primary pb-2 mb-4">
                <i class="fa-duotone fa-bicycle me-2 text-primary"></i>Active Commute
            </h3>
            <p class="text-body-secondary">
                Prefer to power yourself? We support active transit with dedicated infrastructure.
            </p>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="p-3 border rounded h-100 bg-body-tertiary text-center">
                        <i class="fa-duotone fa-person-walking fa-2x text-body-emphasis mb-2"></i>
                        <h6 class="fw-bold">The Huckleberry Trail</h6>
                        <p class="small text-muted mb-0">Direct spur access to the trail network connecting housing to campus.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded h-100 bg-body-tertiary text-center">
                        <i class="fa-duotone fa-lock-keyhole fa-2x text-body-emphasis mb-2"></i>
                        <h6 class="fw-bold">Secure Bike Storage</h6>
                        <p class="small text-muted mb-0">Indoor, camera-monitored bike lockers are free for all residents.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="transit-map-placeholder shadow-sm">
                <div class="text-center">
                    <i class="fa-duotone fa-map-location-dot fa-4x text-secondary opacity-50 mb-3"></i>
                    <h5 class="fw-bold text-body-secondary text-uppercase mb-1">Interactive Asset Map</h5>
                    <p class="small text-muted font-monospace">
                        [MAP DATA RESTRICTED - RESIDENT PORTAL LOGIN REQUIRED]
                    </p>
                    <span class="badge bg-danger">PUBLIC ACCESS DENIED</span>
                </div>
                
                <div class="position-absolute top-0 start-0 p-3 font-monospace small text-muted opacity-50">
                    LAT: 37.2296 N <br> LON: 80.4139 W
                </div>
            </div>
        </div>
    </div>

</div>