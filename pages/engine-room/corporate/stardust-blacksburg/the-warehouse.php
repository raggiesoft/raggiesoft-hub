<?php
// pages/engine-room/corporate/stardust-studios/overview.php
// Designation: The Warehouse / "Fortress of Sound"
// Context: Industrial Park, Blacksburg Outskirts.
// Theme: "Heavy Metal" (Concrete, Steel, Acoustic Foam).

$pageTitle = "Stardust Studios - Production & Fleet Maintenance";
?>

<style>
    /* INDUSTRIAL THEME */
    .warehouse-header {
        background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), 
                    repeating-linear-gradient(45deg, #212529 0, #212529 10px, #2c3034 10px, #2c3034 20px);
        color: white;
        padding: 6rem 0;
        border-bottom: 4px solid var(--bs-warning);
    }
    
    .bay-card {
        background-color: var(--bs-body-tertiary);
        border: 1px solid var(--bs-border-color);
        transition: transform 0.2s;
    }
    .bay-card:hover {
        transform: translateY(-3px);
        border-color: var(--bs-primary);
    }
</style>

<div class="warehouse-header text-center">
    <div class="container">
        <i class="fa-duotone fa-container-storage fa-4x text-white opacity-50 mb-3"></i>
        <h1 class="display-4 fw-bold text-uppercase letter-spacing-2">Stardust Studios</h1>
        <p class="lead font-monospace text-warning mb-0">
            <i class="fa-solid fa-location-dot me-2"></i>Falling Branch Industrial Park
        </p>
    </div>
</div>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <p class="fs-5 text-body-secondary">
                A 12,000 sq. ft. converted distribution center. <br>
                Soundproofed to <span class="fw-bold text-body-emphasis">STC-60 standards</span>. <br>
                The only place in Virginia loud enough to hold The Stardust Engine.
            </p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-6">
            <div class="card h-100 shadow border-0 overflow-hidden">
                <div class="card-header bg-black text-white border-bottom border-warning py-3">
                    <h5 class="fw-bold text-uppercase mb-0"><i class="fa-duotone fa-microphone-lines me-2 text-warning"></i>The Live Room</h5>
                </div>
                <div class="card-body p-4 bg-dark text-light">
                    <p class="small text-white-50 mb-4">
                        A massive open floor designed to replicate the acoustics of The Crucible. This is where "Ignition" was perfected.
                    </p>
                    <ul class="list-group list-group-flush list-group-dark">
                        <li class="list-group-item bg-transparent text-white border-secondary">
                            <i class="fa-solid fa-check text-success me-2"></i><strong>Floating Floor:</strong> Concrete slab isolated on rubber pucks to prevent seismic transmission.
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary">
                            <i class="fa-solid fa-check text-success me-2"></i><strong>The Rig:</strong> Permanently set up 360-degree drum kit (Tyler) and Ryan's "Engine" pedalboard.
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary">
                            <i class="fa-solid fa-check text-success me-2"></i><strong>Power:</strong> 3-Phase Industrial Power (400 Amps) to run the touring light rig.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 shadow border-0 overflow-hidden">
                <div class="card-header bg-secondary text-white border-bottom border-light py-3">
                    <h5 class="fw-bold text-uppercase mb-0"><i class="fa-duotone fa-wrench me-2"></i>Fleet Maintenance</h5>
                </div>
                <div class="card-body p-4 bg-body-tertiary">
                    <p class="small text-body-secondary mb-4">
                        We don't trust mechanics we don't know. The band maintains their own fleet in-house.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="bay-card p-3 text-center rounded">
                                <i class="fa-solid fa-van-shuttle fa-2x text-primary mb-2"></i>
                                <h6 class="fw-bold small text-uppercase">Bay 1: The Van</h6>
                                <small class="text-muted d-block">Ryan's Custom Sprinter</small>
                                <span class="badge bg-success mt-2">Hydraulics: OK</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bay-card p-3 text-center rounded">
                                <i class="fa-solid fa-bus fa-2x text-danger mb-2"></i>
                                <h6 class="fw-bold small text-uppercase">Bay 2: The Bus</h6>
                                <small class="text-muted d-block">1998 Prevost H3-45</small>
                                <span class="badge bg-warning text-dark mt-2">Service Due</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="alert alert-dark d-flex align-items-center p-4 rounded shadow-sm">
        <i class="fa-duotone fa-lock-keyhole fa-3x me-4 text-secondary"></i>
        <div>
            <h5 class="fw-bold text-uppercase mb-1">Security Protocol</h5>
            <p class="mb-0 small text-white-50">
                This facility is not open to the public. It is surrounded by an 8-foot privacy fence and monitored by a local, closed-circuit security system (No cloud uploads). 
                <br><strong>Note for Delivery Drivers:</strong> Leave packages at the gate box. Do not honk.
            </p>
        </div>
    </div>

</div>