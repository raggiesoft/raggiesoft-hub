<?php
// pages/engine-room/overview.php
// The Corporate Front Gate of Engine Room Records, LLC.

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
    
    <!-- THE ROSTER (2x2 GRID) -->
    <div class="row mb-5">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary pb-2 mb-4">
            <h2 class="h4 text-uppercase fw-bold mb-0">
                Active Projects
            </h2>
            <span class="tech-font text-secondary">
                Capacity: <span class="text-body-emphasis fw-bold">4/5</span>
            </span>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
        
        <!-- Slot 1: The Stardust Engine -->
        <div class="col">
            <div class="card studio-card containment-unit h-100 p-4">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <h3 class="h5 fw-bold text-uppercase mb-0">The Stardust Engine</h3>
                    <span title="Status: Online" class="mt-1"><span class="led led-on"></span></span>
                </div>
                <p class="tech-font text-body-secondary mb-3">Est. 1992 | Rock / Space Rock</p>
                <p class="text-body-emphasis mb-4">The flagship entity. Unapologetic, high-friction, arena-scale rock engineered for maximum seismic impact.</p>
                <div class="mt-auto">
                    <a href="/engine-room/artists/stardust-engine" class="btn btn-outline-secondary btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font">
                        Access Files <i class="fa-solid fa-chevron-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slot 2: Fractured Prisms -->
        <div class="col">
            <div class="card studio-card containment-unit h-100 p-4">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <h3 class="h5 fw-bold text-uppercase mb-0">Fractured Prisms</h3>
                    <span title="Status: Processing" class="mt-1"><span class="led led-busy"></span></span>
                </div>
                <p class="tech-font text-body-secondary mb-3">Active File | Electronic / Synth</p>
                <p class="text-body-emphasis mb-4">A sonic exploration of digital distortion and neon-soaked synthesis. Artificial rhythms for a modern grid.</p>
                <div class="mt-auto">
                    <a href="/engine-room/artists/fractured-prisms" class="btn btn-outline-secondary btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font">
                        Access Files <i class="fa-solid fa-chevron-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slot 3: Mirage -->
        <div class="col">
            <div class="card studio-card containment-unit h-100 p-4">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <h3 class="h5 fw-bold text-uppercase mb-0">Mirage</h3>
                    <span title="Status: Processing" class="mt-1"><span class="led led-busy"></span></span>
                </div>
                <p class="tech-font text-body-secondary mb-3">Active File | Alternative / Ambient</p>
                <p class="text-body-emphasis mb-4">Atmospheric textures and shifting audio landscapes. An auditory illusion built from the ground up.</p>
                <div class="mt-auto">
                    <a href="/engine-room/artists/mirage" class="btn btn-outline-secondary btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font">
                        Access Files <i class="fa-solid fa-chevron-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slot 4: The Winter Palace -->
        <div class="col">
            <div class="card studio-card containment-unit h-100 p-4">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <h3 class="h5 fw-bold text-uppercase mb-0">The Winter Palace</h3>
                    <span title="Status: Processing" class="mt-1"><span class="led led-busy"></span></span>
                </div>
                <p class="tech-font text-body-secondary mb-3">Active File | Instrumental / Cinematic</p>
                <p class="text-body-emphasis mb-4">Sweeping, cold-weather orchestrations and classical foundations fused with modern production.</p>
                <div class="mt-auto">
                    <a href="/engine-room/artists/the-winter-palace" class="btn btn-outline-secondary btn-sm rounded-0 text-uppercase fw-bold w-100 tech-font">
                        Access Files <i class="fa-solid fa-chevron-right ms-2"></i>
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