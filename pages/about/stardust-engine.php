<?php
// pages/about/stardust-engine.php
// "Mission Profile" - The Project Overview
// Location: Global About Hub

$pageTitle = "Project: The Stardust Engine | RaggieSoft";
$pageTheme = "ad-astra"; 

// ASSET MERGE
$customPageAssets = [
    'Starfield Texture' => 'https://assets.raggiesoft.com/common/patterns/stars-transparent.png'
];
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex align-items-center justify-content-between mb-5 border-bottom border-secondary pb-4">
        <div>
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Audiowide', cursive;">
                Mission Profile
            </h1>
            <p class="lead text-info mb-0">Project: The Stardust Engine</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm rounded-pill">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Portfolio Hub
        </a>
    </div>

    <div class="row g-5 mb-5">
        
        <div class="col-lg-6">
            <div class="card glass-card h-100 border-secondary">
                <div class="card-header bg-transparent border-secondary text-warning fw-bold text-uppercase py-3">
                    <i class="fa-duotone fa-planet-ringed me-2"></i> Layer 1: The Universe
                </div>
                <div class="card-body text-light">
                    <h3 class="h4 text-light mb-3" style="font-family: 'Audiowide', cursive;">In-Universe Archive</h3>
                    <p>
                        You are viewing the official data archive of <strong>The Stardust Engine</strong>, a synth-rock band originating from the Class of '89 at CPI.
                    </p>
                    <p>
                        The narrative follows their struggle against the corporate monolith <strong>Apex Records</strong>, their retreat to the "Fortress," and their eventual broadcast from <strong>Port Telsus</strong>.
                    </p>
                    <a href="/engine-room/artists/stardust-engine/band" class="btn btn-sm btn-outline-warning mt-2">
                        <i class="fa-duotone fa-book-open me-2"></i>Enter The Archive
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card glass-card h-100 border-info shadow-glow">
                <div class="card-header bg-transparent border-info text-info fw-bold text-uppercase py-3">
                    <i class="fa-duotone fa-code-branch me-2"></i> Layer 2: The Project
                </div>
                <div class="card-body text-light">
                    <h3 class="h4 text-light mb-3" style="font-family: 'Audiowide', cursive;">AI Collaboration</h3>
                    <p>
                        In reality, this entire universe—the music, the art, the code, and the history—was generated in 2025 as a collaboration between a human director and a suite of generative AI tools.
                    </p>
                    <p>
                        It serves as a portfolio piece demonstrating how AI can be used not just to generate assets, but to build cohesive, emotionally resonant worlds.
                    </p>
                    <a href="/about/michael-ragsdale/contact" class="btn btn-sm btn-outline-info mt-2">
                        <i class="fa-duotone fa-id-card me-2"></i>Contact the Director
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="mb-5">
        <h2 class="display-6 fw-bold text-uppercase text-light border-bottom border-secondary pb-3 mb-4">
            <i class="fa-duotone fa-users-viewfinder me-3 text-secondary"></i>Crew Manifest
        </h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            
            <div class="col">
                <div class="card glass-card h-100 text-center p-4 border-info border-opacity-50">
                    <div class="mb-3">
                        <i class="fa-duotone fa-user-astronaut fa-5x text-info"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Michael Ragsdale</h4>
                    <div class="badge bg-info text-dark mb-2">FLIGHT DIRECTOR</div>
                    <p class="small mb-0">
                        Concept, Direction, Coding, & Curation. The human element that guides the machine.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="card glass-card h-100 text-center p-4 border-secondary">
                    <div class="mb-3">
                        <i class="fa-duotone fa-brain-circuit fa-5x text-primary"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Google Gemini</h4>
                    <div class="badge bg-primary mb-2">NAV & VISUALS</div>
                    <p class="small mb-0">
                        Lore Generation, Code Assistance, and Historical Photography (via Nano Banana).
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="card glass-card h-100 text-center p-4 border-secondary">
                    <div class="mb-3">
                        <i class="fa-duotone fa-waveform-lines fa-5x text-warning"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Suno AI</h4>
                    <div class="badge bg-warning text-dark mb-2">ENGINE CORE</div>
                    <p class="small mb-0">
                        Audio Synthesis, Composition, and Vocal Performance.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="card glass-card h-100 text-center p-4 border-secondary">
                    <div class="mb-3">
                        <i class="fa-duotone fa-palette fa-5x text-danger"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">DALL-E 3</h4>
                    <div class="badge bg-danger mb-2">ART DEPT</div>
                    <p class="small mb-0">
                        Album Artwork, Conceptual Design, and Atmospheric Visuals.
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>