<?php
// pages/contact.php
// "Subspace Relay" - The connection to the Real World.

$pageTitle = "Contact Flight Control - The Stardust Engine";
$pageTheme = "ad-astra"; 

$album_path_web = '/stardust-engine/music/1995-ad-astra-single';

// Special Asset Merge for the "High Tech" feel
$customPageAssets = [
    'Starfield' => 'https://assets.raggiesoft.com/common/patterns/stars-transparent.png'
];

?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5" style="min-height: 80vh; display: flex; align-items: center;">
    <div class="row justify-content-center w-100">
        
        <div class="col-lg-8 col-xl-6">
            
            <div class="text-center mb-5">
                <div class="d-inline-block border border-info text-info rounded-pill px-3 py-1 mb-3 font-monospace small shadow-glow">
                    <i class="fa-duotone fa-signal-stream me-2 blink"></i>UPLINK ACTIVE
                </div>
                <h1 class="display-4 fw-bold text-glow-primary text-uppercase" style="font-family: 'Audiowide', cursive;">
                    Subspace Relay
                </h1>
                <p class="lead text-secondary font-monospace">
                    Frequency: 104.2 // Channel: Real-World-Direct
                </p>
            </div>

            <div class="card glass-card border-0 shadow-lg">
                <div class="card-body p-5 text-center">
                    
                    <div class="mb-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png" 
                             alt="Stardust Insignia" 
                             class="img-fluid rounded-circle border border-secondary p-1 shadow-lg mb-4"
                             style="width: 100px; height: 100px;">
                    </div>

                    <h2 class="h3 text-light fw-bold mb-3">Contact The Director</h2>
                    
                    <p class="text-secondary mb-4">
                        The Stardust Engine is an automated narrative archive. 
                        To reach the creator, <strong>Michael Ragsdale</strong>, regarding this project, 
                        AI collaboration, or web development, please use the primary secure channel below.
                    </p>

                    <a href="https://www.linkedin.com/in/michael-ragsdale-raggiesoft/" 
                       target="_blank" 
                       class="btn btn-lg btn-outline-info rounded-pill px-5 py-3 w-100 shadow-glow mb-3">
                        <i class="fa-brands fa-linkedin me-2 fs-4 align-middle"></i>
                        <span class="align-middle">Open Hailing Frequencies</span>
                    </a>
                    
                    <p class="small text-muted font-monospace mt-3">
                        <i class="fa-duotone fa-lock me-1"></i> CONNECTION SECURE (HTTPS)
                    </p>

                </div>
                
                <div class="card-footer bg-dark bg-opacity-50 border-top border-secondary p-3">
                    <div class="row g-0 font-monospace small text-muted">
                        <div class="col-6 text-start">
                            <span class="text-success">●</span> SYSTEM: NOMINAL
                        </div>
                        <div class="col-6 text-end">
                            NODE: RAGGIESOFT_MAIN
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

