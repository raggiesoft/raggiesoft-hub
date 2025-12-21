<?php
// pages/engine-room/overview.php
// The HQ of the Musical Universe.
// Context: Real World (Suno Portfolio) + Narrative (Holly's Empire).

$pageTitle = "Engine Room Records - The Fortress";
?>

<style>
    /* ENGINE ROOM BRANDING: Industrial, Heavy, Stark */
    .engine-hero {
        background: linear-gradient(rgba(13, 17, 23, 0.9), rgba(13, 17, 23, 0.8)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg');
        background-size: cover;
        background-position: center;
        border-bottom: 4px solid #dc3545; /* Brand Red */
    }
    
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .roster-card {
        transition: transform 0.3s ease, border-color 0.3s ease;
        border-left: 4px solid #6c757d;
    }
    .roster-card:hover {
        transform: translateY(-5px);
        border-left-color: #dc3545;
    }
</style>

<div class="engine-hero py-5 text-center text-white">
    <div class="container py-5">
        <div class="mb-4">
            <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
                 alt="Engine Room Records Official Seal" 
                 class="rounded-circle shadow-lg border border-4 border-dark"
                 style="width: 120px; height: 120px; filter: grayscale(20%);">
        </div>
        <h1 class="display-3 fw-bold text-stenciled mb-2">Engine Room Records</h1>
        <p class="lead font-monospace text-uppercase text-danger fw-bold letter-spacing-2">
            Est. 1992 // Blacksburg, VA
        </p>
        <p class="text-white-50 mx-auto" style="max-width: 700px;">
            "We do not own artists. We protect them."
        </p>
    </div>
</div>

<div class="container py-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-dark border-secondary shadow-lg">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="h4 text-white text-uppercase fw-bold mb-3">
                                <i class="fa-duotone fa-fire me-2 text-danger"></i>Forged in Fire
                            </h3>
                            <p class="text-white-50">
                                Engine Room Records was founded in 1992 by <strong>Holly O'Connell</strong> (Age 23) in the aftermath of the "Friction Catastrophe."
                            </p>
                            <p class="text-white-50">
                                After escaping a predatory contract with Apex Records that attempted to exploit her brother Ryan's paralysis and fabricate an incestuous marketing narrative, Holly vowed to build a "Fortress." She created a label designed with a single directive: <strong>The Artist holds the keys. Always.</strong>
                            </p>
                            <div class="mt-4">
                                <a href="/engine-room/history/friction" class="btn btn-outline-danger rounded-pill btn-sm">
                                    <i class="fa-duotone fa-file-contract me-2"></i>Read the Case File
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mt-4 mt-md-0 border-start border-secondary ps-md-4">
                            <div class="p-3 bg-black rounded border border-secondary">
                                <small class="text-muted text-uppercase d-block mb-2">Founder & CEO</small>
                                <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/holly.jpg" 
                                     class="img-fluid rounded-circle border border-secondary mb-3" 
                                     style="width: 80px; height: 80px; object-fit: cover;" 
                                     alt="Holly O'Connell">
                                <h5 class="text-white h6 fw-bold mb-0">Holly O'Connell</h5>
                                <div class="small text-secondary font-monospace mt-1" style="font-size: 0.7rem;">
                                    J.D. | CFA | Cr.FA | CIRA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="alert alert-dark border-success d-flex align-items-start shadow-sm" role="alert">
                <i class="fa-duotone fa-vault text-success fs-1 me-4 mt-1"></i>
                <div>
                    <h4 class="alert-heading h5 fw-bold text-success text-uppercase">The $2.04 Billion Secret</h4>
                    <p class="small text-white-50 mb-2">
                        To the public, Engine Room is a scrappy indie label. To the IRS, it is a loss-leader subsidiary of <strong>The O'Connell Family Revocable Trust</strong>.
                    </p>
                    <p class="small text-white-50 mb-0">
                        Following Cassidy O'Connell's historic lottery win in 2012, the family integrated the label into a massive asset protection structure. This allows them to sign artists based on <strong>artistic merit</strong>, not market trends. They don't need the albums to sell. They just need them to exist.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-3 mb-4">
            <h2 class="h3 text-uppercase fw-bold text-dark mb-0"><i class="fa-duotone fa-users-viewfinder me-2"></i>Active Roster</h2>
            <span class="badge bg-secondary">Suno AI Collection</span>
        </div>

        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="card h-100 bg-dark text-white border-secondary roster-card">
                    <div class="row g-0 h-100">
                        <div class="col-4 bg-black d-flex align-items-center justify-content-center p-3">
                            <img src="https://assets.raggiesoft.com/stardust-engine/images/logos/stardust-engine-logo.png" 
                                 class="img-fluid" alt="Stardust Engine Logo">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">The Stardust Engine</h5>
                                <span class="badge bg-danger mb-2">Legacy Artist</span>
                                <p class="card-text small text-white-50">
                                    The founding family. Architects of the "Ironhead" sound. Blending 80s synth-pop with industrial rock.
                                </p>
                                <a href="/engine-room/artists/stardust-engine" class="btn btn-sm btn-light fw-bold rounded-pill stretched-link">
                                    View Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-white text-dark border-secondary roster-card">
                    <div class="row g-0 h-100">
                        <div class="col-4 bg-light d-flex align-items-center justify-content-center p-3 border-end">
                            <i class="fa-duotone fa-masks-theater fa-3x text-secondary"></i>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">Mirage</h5>
                                <span class="badge bg-dark mb-2">Rock Opera</span>
                                <p class="card-text small text-muted">
                                    Cinematic storytelling and symphonic metal. Led by Julian Croft. Known for the album <em>Static & Silence</em>.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-dark fw-bold rounded-pill disabled">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-white text-dark border-secondary roster-card">
                    <div class="row g-0 h-100">
                        <div class="col-4 bg-light d-flex align-items-center justify-content-center p-3 border-end">
                            <i class="fa-duotone fa-flute fa-3x text-secondary"></i>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">Origin</h5>
                                <span class="badge bg-info text-dark mb-2">Art Rock</span>
                                <p class="card-text small text-muted">
                                    Progressive pop featuring complex flute arrangements and "Safe Harbor" themes. Signed in London, 1998.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-dark fw-bold rounded-pill disabled">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-white text-dark border-secondary roster-card">
                    <div class="row g-0 h-100">
                        <div class="col-4 bg-light d-flex align-items-center justify-content-center p-3 border-end">
                            <i class="fa-duotone fa-snowflake fa-3x text-secondary"></i>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">The Winter Palace</h5>
                                <span class="badge bg-secondary mb-2">Neoclassical</span>
                                <p class="card-text small text-muted">
                                    Atmospheric instrumental works and holiday arrangements. The quiet corner of the Engine Room.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-dark fw-bold rounded-pill disabled">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center pt-5 border-top border-secondary">
        <p class="text-muted small mb-0">
            <i class="fa-duotone fa-microchip me-2"></i>
            <strong>Meta Context:</strong> This label serves as the organizational hub for Michael Ragsdale's AI-generated music portfolio.
            All tracks are produced using <strong>Suno AI</strong> with lyrics and lore co-written by <strong>Gemini</strong>.
        </p>
    </div>

</div>