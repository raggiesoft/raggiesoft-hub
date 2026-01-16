<?php
// pages/engine-room/corporate/stardust-blacksburg/the-fortress.php
// Designation: PCC-01 (Primary Residence)
// Context: 512 Progress St NE. The family home since 1985.
// Status: "Grey Man" Residential Camouflage.

$pageTitle = "Property Profile: 512 Progress St NE (The Fortress)";
?>

<style>
    /* THE GREY MAN THEME */
    .blueprint-card {
        border-left: 4px solid var(--bs-secondary);
        background-color: var(--bs-body-tertiary);
    }
    
    /* Motion Control: Only animate if user hasn't requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .blueprint-card {
            transition: transform 0.2s ease;
        }
        .blueprint-card:hover {
            transform: translateX(5px);
            border-left-color: var(--bs-primary);
        }
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

    /* Timeline Styling */
    .renovation-log {
        border-left: 2px solid var(--bs-border-color);
        margin-left: 1rem;
        padding-left: 2rem;
    }
    .renovation-item {
        position: relative;
        margin-bottom: 2rem;
    }
    .renovation-item::before {
        content: "";
        position: absolute;
        left: -2.4rem;
        top: 0.25rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: var(--bs-primary);
        border: 2px solid var(--bs-body-bg);
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
            <div class="d-flex align-items-center mb-3">
                <span class="badge bg-secondary text-white border border-white rounded-pill px-3 py-2 me-3">
                    <i class="fa-solid fa-house-chimney me-2"></i>Private Residence
                </span>
                <span class="font-monospace text-muted small">Zone R-5</span>
            </div>
            <h1 class="display-4 fw-bold text-uppercase mb-2">The Fortress</h1>
            <p class="lead text-body-secondary font-monospace">
                512 Progress St NE, Blacksburg, VA.<br>
                To the street, it's a 1900s farmhouse. Inside, it is a purpose-built accessible sanctuary.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 overflow-hidden">
                <div class="card-header bg-black text-white border-bottom border-secondary py-3">
                    <h5 class="fw-bold text-uppercase mb-0"><i class="fa-duotone fa-ruler-combined me-2 text-warning"></i>Current Layout (2013 Refit)</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="ps-4">Level</th>
                                    <th>Designation</th>
                                    <th>Key Features</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 fw-bold font-monospace">Floor 2</td>
                                    <td>The Quarters</td>
                                    <td class="small">
                                        <strong>Holly's Room:</strong> King Bed (Configured for emergency co-regulation).<br>
                                        <strong>The Twins:</strong> Individual rooms for Tyler & Evan.<br>
                                        <span class="text-muted fst-italic">Note: Office relocated to Warehouse in 2013.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold font-monospace">Floor 1</td>
                                    <td>The Barracks</td>
                                    <td class="small">
                                        <strong>Primary Bedroom:</strong> Shared Queen Bed (Wall-anchored) for Ryan & Cassidy.<br>
                                        <strong>Hygiene:</strong> Zero-threshold roll-in wet room (Expanded into old pantry).<br>
                                        <strong>Common:</strong> Kitchen & Dining.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold font-monospace">Basement</td>
                                    <td>The Lounge</td>
                                    <td class="small">
                                        Finished living space. Sound-dampened media center.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 blueprint-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3"><i class="fa-solid fa-elevator"></i></div>
                                <h5 class="fw-bold mb-0">Vertical Transport</h5>
                            </div>
                            <p class="small text-body-secondary">
                                <strong>System:</strong> Custom Hydraulic Drive (3-Stop).<br>
                                <strong>Door Operation:</strong> Commercial-grade automatic sliding doors with pressure sensors. 
                                <br><strong>Safety:</strong> Buttons configured as "Constant Pressure" (Dead Man) switches per residential code.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 blueprint-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3"><i class="fa-solid fa-wheelchair"></i></div>
                                <h5 class="fw-bold mb-0">Exterior Access</h5>
                            </div>
                            <p class="small text-body-secondary">
                                <strong>The Ramp:</strong> Custom carpentry integrated into the wraparound porch. Painted to match existing trim. 
                                <br><strong>Stealth:</strong> Hidden from street view by mature holly bushes. 1:12 gradient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h4 class="fw-bold text-uppercase border-bottom pb-2 mb-4 text-body-secondary">Property History Log</h4>
            <div class="renovation-log">
                
                <div class="renovation-item">
                    <span class="badge bg-secondary mb-2">1985</span>
                    <h6 class="fw-bold">The Rental Era</h6>
                    <p class="small text-muted mb-0">
                        Rented from maternal aunt for $1/yr. Standard 3-bedroom configuration. Ryan occupies 2nd Floor bedroom.
                    </p>
                </div>

                <div class="renovation-item">
                    <span class="badge bg-warning text-dark mb-2">1990</span>
                    <h6 class="fw-bold">The Crash Retrofit</h6>
                    <p class="small text-muted mb-0">
                        Emergency install of exterior metal ramp. Ryan relocated to 1st Floor Parlor. Cassidy moves in as "Bed Rail."
                    </p>
                </div>

                <div class="renovation-item">
                    <span class="badge bg-success mb-2">1996</span>
                    <h6 class="fw-bold">Acquisition & Gut Renovation</h6>
                    <p class="small text-muted mb-0">
                        Holly purchases property. Interior gutted. First hydraulic elevator installed. Custom exterior ramp built.
                    </p>
                </div>

                <div class="renovation-item">
                    <span class="badge bg-primary mb-2">2013</span>
                    <h6 class="fw-bold">The "Industrial" Split</h6>
                    <p class="small text-muted mb-0">
                        Commercial operations moved to Warehouse. House optimized for living only. Elevator upgraded to modern automatic system. Holly's office converted to King Bedroom.
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>