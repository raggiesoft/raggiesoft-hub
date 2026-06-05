<?php
// pages/engine-room/overview.php
// The Corporate Front Gate of Engine Room Records.

$pageTitle = "Engine Room Records | The Gates Remain Closed";
?>

<style>
    /* IN-PAGE SPECIFIC OVERRIDES */
    .containment-unit {
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .containment-unit:hover {
        border-color: var(--bs-primary); 
        box-shadow: 0 0 15px rgba(255, 107, 107, 0.15); 
    }

    .incinerator-warning {
        background-color: #15181c; 
        border-left: 4px solid var(--bs-primary);
    }
    
    [data-bs-theme="light"] .incinerator-warning {
        background-color: #e9ecef;
        border-left: 4px solid var(--bs-primary);
        border: 1px solid var(--bs-border-color);
        border-left-width: 4px;
    }
    
    /* Dedicated B2B Card Hover */
    .b2b-card:hover {
        border-color: var(--bs-warning);
        box-shadow: 0 0 15px rgba(255, 184, 77, 0.15);
    }
</style>

<div class="engine-hero py-5 mb-5 shadow-lg">
    <div class="container text-center py-5">
        <i class="fa-duotone fa-building-shield fa-4x text-primary mb-4 opacity-75"></i>
        <h1 class="display-3 fw-bold text-uppercase mb-3 brand-font" style="letter-spacing: 2px;">
            Engine Room Records
        </h1>
        <p class="lead tech-font opacity-75 mb-4">
            A closed-ecosystem production facility.
        </p>
        <span class="badge bg-primary text-uppercase px-3 py-2 fs-6 border border-dark shadow-sm">
            <i class="fa-solid fa-lock me-2"></i>The Gates Remain Closed
        </span>
    </div>
</div>

<div class="container pb-5">
    
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card studio-card containment-unit p-4 p-md-5 text-center shadow-sm">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <span class="led led-on me-3"></span>
                    <h2 class="h3 fw-bold text-uppercase mb-0">Active Roster</h2>
                    <span class="led led-on ms-3"></span>
                </div>
                
                <p class="tech-font text-secondary mb-4">
                    System Capacity: <span class="text-body-emphasis fw-bold">4/5 Slots Filled</span>
                </p>
                
                <p class="text-body-emphasis mb-5 mx-auto" style="max-width: 600px;">
                    Engine Room Records currently manages a closed ecosystem of four active recording projects. Information regarding specific entities, complete discographies, and operational status has been centralized in the Artist Directory.
                </p>
                
                <div>
                    <a href="/engine-room/artists" class="btn btn-outline-secondary btn-lg rounded-0 text-uppercase fw-bold tech-font px-4 w-100 w-sm-auto">
                        Access Artist Directory <i class="fa-solid fa-chevron-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 mt-5">
        <div class="col-lg-10 mx-auto d-flex justify-content-between align-items-end border-bottom border-secondary pb-2">
            <h2 class="h4 text-uppercase fw-bold mb-0">Business & Licensing</h2>
        </div>
    </div>

    <div class="row g-4 mb-5 col-lg-10 mx-auto">
        <div class="col-md-6">
            <div class="card studio-card b2b-card h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa-duotone fa-handshake fa-2x text-warning me-3 opacity-75"></i>
                    <h3 class="h5 fw-bold text-uppercase mb-0">Commercial Sync</h3>
                </div>
                <p class="text-body-emphasis mb-4 small">
                    One-stop clearance for Film, TV, and Interactive placements. We control 100% of Master and Publishing rights for our catalog.
                </p>
                <div class="mt-auto">
                    <a href="/engine-room/commercial-licensing" class="btn btn-outline-warning btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font">
                        Licensing Portal <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card studio-card b2b-card h-100 p-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa-duotone fa-tower-broadcast fa-2x text-info me-3 opacity-75"></i>
                    <h3 class="h5 fw-bold text-uppercase mb-0">DSP Operations</h3>
                </div>
                <p class="text-body-emphasis mb-4 small">
                    Administrative portal for streaming platforms (Spotify, Apple, YouTube, etc.) to verify independent ownership and AI clearance metadata.
                </p>
                <div class="mt-auto">
                    <a href="/engine-room/dsp-verification" class="btn btn-outline-info btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font text-body-emphasis">
                        Verify Artists <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 pt-4">
        <div class="col-lg-10 mx-auto">
            <div class="incinerator-warning p-4 shadow-sm mb-4">
                <h4 class="text-primary fw-bold text-uppercase h5 mb-3">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Communications Protocol
                </h4>
                <p class="small mb-2 text-body-emphasis">
                    General inquiries may be directed to <code class="bg-dark text-light px-1">inquiries@engineroom-records.com</code>.
                </p>
                <p class="small fw-bold mb-0 text-body-secondary">
                    SECURITY NOTICE: Engine Room Records does not accept unsolicited material. Our Exchange Mail Flow rules are hard-coded at the transport layer to automatically and permanently delete any incoming email containing an attachment. You will not receive a bounce-back. The file is simply destroyed.
                </p>
            </div>
        </div>
    </div>

</div>