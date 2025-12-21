<?php
// pages/engine-room/overview.php
// The HQ of the Musical Universe.
// Context: Real World (Suno Portfolio) + Narrative (Holly's Empire).

$pageTitle = "Engine Room Records - The Fortress";
?>

<style>
    /* ENGINE ROOM BRANDING: Industrial, Heavy, Stark */
    .engine-hero {
        /* Permanently Dark Background (Studio Aesthetic) */
        background: linear-gradient(rgba(13, 17, 23, 0.95), rgba(13, 17, 23, 0.85)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg');
        background-size: cover;
        background-position: center;
        border-bottom: 4px solid #dc3545; /* Brand Red */
        color: white; /* Force text to be white */
    }
    
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Card Hover Effects */
    .roster-card {
        transition: transform 0.3s ease, border-color 0.3s ease;
        border-left: 4px solid #6c757d;
    }
    .roster-card:hover {
        transform: translateY(-5px);
        border-left-color: #dc3545;
    }

    /* LOGO FIX: Force the black logo to become white */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(200%);
    }
</style>

<div class="engine-hero py-5 text-center d-flex align-items-center" style="min-height: 70vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
                     alt="Engine Room Records" 
                     class="img-fluid mb-4 logo-invert" 
                     style="max-width: 250px;">

                <h1 class="display-4 fw-bold text-stenciled text-white mb-3">
                    The Signal Starts Here
                </h1>
                
                <p class="lead text-secondary mb-5" style="font-family: 'Roboto Mono', monospace;">
                    // AUDIT_ID: 1995-ERR-001 // STATUS: OPERATIONAL
                </p>

                <div class="d-flex justify-content-center gap-3">
                    <a href="#roster" class="btn btn-danger btn-lg rounded-0 fw-bold px-4 text-uppercase">
                        <i class="fa-duotone fa-users-viewfinder me-2"></i>Artist Roster
                    </a>
                    <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-light btn-lg rounded-0 fw-bold px-4 text-uppercase">
                        <i class="fa-duotone fa-file-contract me-2"></i>The History
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="roster" class="py-5 bg-body">
    <div class="container">
        
        <div class="row mb-5 align-items-end border-bottom border-secondary pb-3">
            <div class="col-md-8">
                <h2 class="display-5 fw-bold text-uppercase mb-0 industrial-font">Active Roster</h2>
            </div>
            <div class="col-md-4 text-md-end text-muted font-monospace small">
                // SYNC_STATUS: UPDATED
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-6">
                <div class="card h-100 roster-card bg-body-tertiary">
                    <div class="row g-0 h-100">
                        <div class="col-4 position-relative">
                            <img src="https://assets.raggiesoft.com/engine-room/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="Firelight">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">Firelight</h5>
                                <span class="badge bg-warning text-dark mb-2">Cinematic Rock</span>
                                <p class="card-text small text-muted">
                                    The symphonic rock project behind the "Aethel" saga. Soaring vocals, heavy synths, and narrative depth.
                                </p>
                                <a href="/raggiesoft-books/aethel-saga" class="btn btn-sm btn-outline-primary fw-bold rounded-pill stretched-link">
                                    View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 roster-card bg-body-tertiary">
                    <div class="row g-0 h-100">
                        <div class="col-4 bg-dark d-flex align-items-center justify-content-center">
                            <img src="https://assets.raggiesoft.com/stardust-engine/images/logo/stardust-engine-logo.png" 
                                 class="img-fluid p-3" 
                                 alt="The Stardust Engine">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">The Stardust Engine</h5>
                                <span class="badge bg-danger mb-2">Legendary</span>
                                <p class="card-text small text-muted">
                                    The band that built the building. From the 1989 "Crash" to the 2016 "Crucible" reunion.
                                </p>
                                <a href="/engine-room/artists/stardust-engine" class="btn btn-sm btn-outline-danger fw-bold rounded-pill stretched-link">
                                    Enter Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 roster-card bg-body-tertiary">
                    <div class="row g-0 h-100">
                        <div class="col-4 position-relative">
                            <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="Mirage">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-uppercase">Mirage</h5>
                                <span class="badge bg-info text-dark mb-2">Alt-Rock / Grunge</span>
                                <p class="card-text small text-muted">
                                    The raw, unpolished sound of the early 2000s. Featuring "Static & Silence."
                                </p>
                                <a href="/engine-room/artists/mirage" class="btn btn-sm btn-outline-info fw-bold rounded-pill stretched-link">
                                    View Discography
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 roster-card bg-body-tertiary opacity-75">
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

    <div class="text-center pt-5 border-top border-secondary mt-5">
        <p class="text-muted small mb-0 font-monospace">
            <i class="fa-duotone fa-microchip me-2"></i>
            <strong>[SYSTEM MESSAGE]:</strong> This label serves as the organizational hub for Michael Ragsdale's AI-generated music portfolio.
            All tracks produced using <strong>Suno AI</strong>. Lore co-written by <strong>Gemini</strong>.
        </p>
    </div>

</div>