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
        border-color: var(--bs-primary); /* Uses the new hazard red */
        box-shadow: 0 0 15px rgba(255, 107, 107, 0.15); /* Matches the header glow */
    }

    .incinerator-warning {
        background-color: #15181c; /* Matches dark mode card bg */
        border-left: 4px solid var(--bs-primary);
    }
    
    [data-bs-theme="light"] .incinerator-warning {
        background-color: #e9ecef;
        border-left: 4px solid var(--bs-primary);
        border: 1px solid var(--bs-border-color);
        border-left-width: 4px;
    }
</style>

<!-- THE FRONT GATE (HERO) -->
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
    
    <!-- THE ROSTER DIRECTORY LINK -->
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

    <!-- THE PERIMETER WALL (SECURITY NOTICES) -->
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