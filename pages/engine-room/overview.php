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
                    <a href="/engine-room/artists" class="btn btn-danger btn-lg rounded-0 fw-bold px-4 text-uppercase shadow-sm">
                        <i class="fa-duotone fa-users-viewfinder me-2"></i>Artist Roster
                    </a>
                    <a href="/engine-room/history" class="btn btn-outline-light btn-lg rounded-0 fw-bold px-4 text-uppercase shadow-sm">
                        <i class="fa-duotone fa-file-contract me-2"></i>The History
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="hq-status" class="py-5 bg-body">
    <div class="container">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="alert alert-secondary border-secondary shadow-sm d-flex align-items-center" role="alert">
                    <i class="fa-duotone fa-robot-astromech fa-2x me-3 text-info"></i>
                    <div>
                        <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1">Transparency Notice</h4>
                        <p class="mb-0 small text-body-secondary">
                            <strong>Engine Room Records</strong> serves as the real-world organizational hub for Michael Ragsdale's AI-generated music portfolio. All audio tracks are generated using a commercial-tier Suno Premium license. Lore, personas, and lyrics are co-written by human direction and Gemini.
                            <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none ms-1">Read the full AI Disclaimer.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center py-4">
            <div class="col-md-8">
                <i class="fa-duotone fa-server fa-3x text-secondary mb-3 opacity-75"></i>
                <h2 class="display-6 fw-bold text-uppercase text-stenciled text-body-emphasis mb-3">Central Database</h2>
                <p class="lead text-body-secondary mb-4">
                    The active roster—including <strong>The Stardust Engine</strong>, <strong>Firelight</strong>, and <strong>Mirage</strong>—has been consolidated into the central artist directory. 
                </p>
                <a href="/engine-room/artists" class="btn btn-outline-danger btn-lg text-uppercase fw-bold letter-spacing-1 px-5 rounded-pill">
                    <i class="fa-duotone fa-folder-open me-2"></i>Access Artist Roster
                </a>
            </div>
        </div>

    </div>
</div>