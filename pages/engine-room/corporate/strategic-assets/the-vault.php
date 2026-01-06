<?php
// pages/engine-room/corporate/strategic-assets/the-vault.php
// Designation: The Engine Room Archives ("The Vault").
// Location: Subterranean Level, Sector C (Beneath the Studio).
// Access Level: RESTRICTED (Biometric + Two-Key).

$pageTitle = "The Vault - Master Archives";
?>

<style>
    /* THEME: "Cold Storage" */
    .vault-hero {
        /* High contrast text overlay background */
        background: linear-gradient(rgba(13, 20, 30, 0.9), rgba(13, 20, 30, 0.95)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/corporate/server-room.jpg');
        background-size: cover;
        background-position: center;
        padding: 5rem 0;
        border-bottom: 4px solid var(--bs-info); /* Cyan Line for "Cold" */
        color: white;
    }

    .spec-card {
        border-left: 4px solid var(--bs-secondary);
        background-color: var(--bs-body-tertiary);
    }
    
    /* MOTION CONTROL: Only animate if user has not requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .spec-card {
            transition: transform 0.2s ease, border-color 0.2s ease;
        }
        
        .spec-card:hover {
            transform: translateX(5px);
            border-left-color: var(--bs-info);
        }
    }

    .sun-ray-badge {
        font-family: 'Courier New', monospace;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>

<div class="vault-hero text-center mb-5">
    <div class="container">
        <div class="mb-3">
            <i class="fa-duotone fa-vault fa-4x text-info"></i>
        </div>
        <h1 class="display-4 fw-bold text-uppercase letter-spacing-1 mb-2">The Engine Room Archives</h1>
        <p class="lead text-light mx-auto" style="max-width: 700px; font-family: 'Georgia', serif;">
            "The memory of the music is fragile. We built a fortress to protect it."
        </p>
        <div class="mt-4">
            <span class="badge bg-danger text-white border border-danger fw-bold px-3 py-2">
                <i class="fa-solid fa-lock me-2"></i>ACCESS RESTRICTED
            </span>
            <span class="badge bg-transparent border border-info text-info fw-bold px-3 py-2 ms-2">
                <i class="fa-solid fa-temperature-arrow-down me-2"></i>CLIMATE CONTROLLED
            </span>
        </div>
    </div>
</div>

<div class="container pb-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h3 class="h4 text-uppercase text-body-emphasis fw-bold border-bottom pb-2 mb-4">
                <i class="fa-duotone fa-layer-group me-2 text-primary"></i>The Collections
            </h3>
            
            <div class="card mb-4 border-0 shadow-sm bg-body-tertiary">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa-solid fa-star text-warning me-3 fs-3"></i>
                        <h5 class="fw-bold text-body-emphasis mb-0">Collection A: The Family Trust</h5>
                    </div>
                    <p class="text-body-secondary ms-5 mb-0">
                        The complete analog master reels (2-inch tape) for every album recorded by <em>The Stardust Engine</em>, <em>Mirage</em>, and <em>Origin</em>. Includes multitrack sessions, mix-downs, and unreleased demos dating back to 1994.
                    </p>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow-sm bg-body-tertiary border-start border-4 border-success">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-hands-holding-circle text-success me-3 fs-3"></i>
                            <h5 class="fw-bold text-body-emphasis mb-0">Collection B: The Sun-Ray Repatriation</h5>
                        </div>
                        <span class="sun-ray-badge badge bg-success-subtle text-success-emphasis border border-success-subtle">
                            STATUS: SAFE HARBOR
                        </span>
                    </div>
                    <p class="text-body-secondary ms-5 mb-3">
                        Following the 2019 acquisition of Omni-Global Media's distressed assets, The Vault serves as the secure holding facility for the <strong>Sun-Ray Catalog</strong>.
                    </p>
                    <div class="ms-5 p-3 bg-white border rounded">
                        <p class="small text-dark mb-0">
                            <strong>Inventory:</strong> Master recordings for 14 "Legacy" bands previously held as collateral by predatory lenders.
                            <br><strong>Protocol:</strong> These assets are stored at zero cost to the artists until they can be legally repatriated to their creators for the symbolic fee of $1.00. We are keeping them safe until they come home.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row g-5 mb-5">
        <div class="col-lg-12">
            <h3 class="h4 text-uppercase text-body-emphasis fw-bold border-bottom pb-2 mb-4">
                <i class="fa-duotone fa-shield-check me-2 text-danger"></i>Preservation Infrastructure
            </h3>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 spec-card shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold text-uppercase text-info mb-2">
                        <i class="fa-solid fa-snowflake me-2"></i>Cold Storage
                    </h6>
                    <p class="small text-body-secondary mb-0">
                        <strong>Temp:</strong> 55°F (13°C) Constant.<br>
                        <strong>Humidity:</strong> 35% RH (+/- 2%).<br>
                        This specific micro-climate prevents "Sticky Shed Syndrome" (binder hydrolysis), ensuring analog tapes from the 90s remain playable for decades.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 spec-card shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold text-uppercase text-danger mb-2">
                        <i class="fa-solid fa-fire-extinguisher me-2"></i>Fire Suppression
                    </h6>
                    <p class="small text-body-secondary mb-0">
                        <strong>System:</strong> Novec 1230 (Clean Agent).<br>
                        Traditional water sprinklers destroy tape. In the event of a thermal anomaly, the room is flooded with inert gas that extinguishes fire instantly without damaging the magnetic media.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 spec-card shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold text-uppercase text-secondary mb-2">
                        <i class="fa-solid fa-magnet me-2"></i>Faraday Shielding
                    </h6>
                    <p class="small text-body-secondary mb-0">
                        <strong>Protection:</strong> Class-A EMF Shielding.<br>
                        The vault walls are lined with copper mesh to create a Faraday Cage, protecting the magnetic integrity of the tapes from solar flares or electromagnetic pulses (EMP).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card bg-dark text-white border-warning shadow">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="flex-shrink-0 me-4">
                        <i class="fa-duotone fa-key fa-3x text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-uppercase text-warning mb-1">The "Two-Key" Security Protocol</h5>
                        <p class="text-white-50 mb-3">
                            Access to the physical Master Vault is impossible for a single individual. The blast door utilizes a dual-lock mechanism. Opening the vault requires the simultaneous presence and physical keys of:
                        </p>
                        <div class="d-flex gap-4 font-monospace small">
                            <div>
                                <i class="fa-solid fa-user-shield me-2 text-warning"></i>
                                <strong>The Trustee</strong> (Holly O'Connell)
                            </div>
                            <div>
                                <i class="fa-solid fa-user-music me-2 text-warning"></i>
                                <strong>The Principal</strong> (Ryan O'Connell)
                            </div>
                        </div>
                        <p class="mt-3 small text-white-50 fst-italic mb-0">
                            *This ensures that no "Remastered" albums or "Greatest Hits" compilations can ever be released without the direct consent of the artist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>