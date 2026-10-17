<?php
/**
 * Project: The Stardust Engine - Mission Profile
 *
 * ARCHITECTURE & CONTEXT:
 * This page serves as an overarching explanation of "The Stardust Engine" project.
 * It explicitly breaks down the project into two layers:
 * 1. The In-Universe Lore (the fictional 1980s synth-rock band fighting a corporate monolith).
 * 2. The AI Collaboration Reality (the actual generative AI tools used to create the media).
 * 
 * It acts as a bridge between the immersive narrative and the technical portfolio of the creator.
 *
 * UI/UX ARCHITECTURE:
 * - Employs an "ad-astra" specific theme (`$pageTheme = "ad-astra"`), triggering
 *   custom global CSS for a space/sci-fi aesthetic (e.g., `Audiowide` font).
 * - Utilizes custom CSS classes like `.glass-card` and `.starfield-container` for 
 *   atmospheric, translucent layering over dynamic backgrounds.
 * - Displays a "Crew Manifest" grid explicitly detailing the human director and AI 
 *   tools (Gemini, Suno, DALL-E) as co-creators.
 *
 * MAINTENANCE NOTES:
 * - Ensure `$customPageAssets` merges correctly with the global router to load the
 *   required starfield texture.
 * - If the AI toolchain changes, update the "Crew Manifest" cards accordingly.
 */

// pages/about/stardust-engine.php
// "Mission Profile" - The Project Overview
// Location: Global About Hub

$pageTitle = "Project: The Stardust Engine | RaggieSoft";
$pageTheme = "ad-astra"; 

// ASSET MERGE
$customPageAssets = [
    'Starfield Texture' => $cdnBaseUrl . '/common/patterns/stars-transparent.png'
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
        <wa-button variant="neutral" appearance="outlined" size="small" pill href="https://michaelpragsdale.com">
            <i slot="start" class="fa-solid fa-arrow-left"></i>Back to Portfolio Hub
        </wa-button>
    </div>

    <div class="row g-5 mb-5">
        
        <div class="col-lg-6">
            <wa-card class="card glass-card h-100 border-secondary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-header bg-transparent border-secondary text-warning fw-bold text-uppercase py-3">
                    <i class="fa-duotone fa-planet-ringed me-2"></i> Layer 1: The Universe
                </div>
                <div class="card-body text-light p-4">
                    <h3 class="h4 text-light mb-3" style="font-family: 'Audiowide', cursive;">In-Universe Archive</h3>
                    <p>
                        You are viewing the official data archive of <strong>The Stardust Engine</strong>, a synth-rock band originating from the Class of '89 at CPI.
                    </p>
                    <p>
                        The narrative follows their struggle against the corporate monolith <strong>Apex Records</strong>, their retreat to the "Fortress," and their eventual broadcast from <strong>Port Telsus</strong>.
                    </p>
                    <wa-button variant="warning" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/band" class="mt-2">
                        <i slot="start" class="fa-duotone fa-book-open"></i>Enter The Archive
                    </wa-button>
                </div>
            </wa-card>
        </div>

        <div class="col-lg-6">
            <wa-card class="card glass-card h-100 border-info shadow-glow w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-header bg-transparent border-info text-info fw-bold text-uppercase py-3">
                    <i class="fa-duotone fa-code-branch me-2"></i> Layer 2: The Project
                </div>
                <div class="card-body text-light p-4">
                    <h3 class="h4 text-light mb-3" style="font-family: 'Audiowide', cursive;">AI Collaboration</h3>
                    <p>
                        In reality, this entire universe—the music, the art, the code, and the history—was generated in 2025 as a collaboration between a human director and a suite of generative AI tools.
                    </p>
                    <p>
                        It serves as a portfolio piece demonstrating how AI can be used not just to generate assets, but to build cohesive, emotionally resonant worlds.
                    </p>
                    <wa-button variant="brand" appearance="outlined" size="small" href="https://michaelpragsdale.com/#logistics" class="mt-2">
                        <i slot="start" class="fa-duotone fa-id-card"></i>Contact the Director
                    </wa-button>
                </div>
            </wa-card>
        </div>

    </div>

    <div class="mb-5">
        <h2 class="display-6 fw-bold text-uppercase text-light border-bottom border-secondary pb-3 mb-4">
            <i class="fa-duotone fa-users-viewfinder me-3 text-secondary"></i>Crew Manifest
        </h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            
            <div class="col">
                <wa-card class="card glass-card h-100 text-center p-4 border-info border-opacity-50 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                    <div class="mb-3">
                        <i class="fa-duotone fa-user-astronaut fa-5x text-info"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Michael Ragsdale</h4>
                    <wa-badge variant="brand" appearance="accent" class="mb-2">FLIGHT DIRECTOR</wa-badge>
                    <p class="small mb-0">
                        Concept, Direction, Coding, & Curation. The human element that guides the machine.
                    </p>
                </wa-card>
            </div>

            <div class="col">
                <wa-card class="card glass-card h-100 text-center p-4 border-secondary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                    <div class="mb-3">
                        <i class="fa-duotone fa-brain-circuit fa-5x text-primary"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Google Gemini</h4>
                    <wa-badge variant="brand" appearance="accent" class="mb-2">NAV & VISUALS</wa-badge>
                    <p class="small mb-0">
                        Lore Generation, Code Assistance, and Historical Photography (via Nano Banana).
                    </p>
                </wa-card>
            </div>

            <div class="col">
                <wa-card class="card glass-card h-100 text-center p-4 border-secondary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                    <div class="mb-3">
                        <i class="fa-duotone fa-waveform-lines fa-5x text-warning"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">Suno AI</h4>
                    <wa-badge variant="warning" appearance="accent" class="mb-2">ENGINE CORE</wa-badge>
                    <p class="small mb-0">
                        Audio Synthesis, Composition, and Vocal Performance.
                    </p>
                </wa-card>
            </div>

            <div class="col">
                <wa-card class="card glass-card h-100 text-center p-4 border-secondary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                    <div class="mb-3">
                        <i class="fa-duotone fa-palette fa-5x text-danger"></i>
                    </div>
                    <h4 class="h5 text-light fw-bold">DALL-E 3</h4>
                    <wa-badge variant="danger" appearance="accent" class="mb-2">ART DEPT</wa-badge>
                    <p class="small mb-0">
                        Album Artwork, Conceptual Design, and Atmospheric Visuals.
                    </p>
                </wa-card>
            </div>

        </div>
    </div>

</div>