<?php
// pages/raggiesoft-media/projects/overview.php
// The Open Source Division Hub
// Updated: Frutiger Aero / Dark Aero Image Backgrounds + StoreTrainer Archive

$pageTitle = "Open Source Projects | RaggieSoft Media";
?>

<style>
    /* --- AERO HERO SECTION --- */
    .aero-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid var(--raggie-glass-border);
        box-shadow: 0 8px 32px rgba(0, 195, 255, 0.08);
        color: var(--bs-body-color);
        z-index: 1;
    }

    .aero-hero::before {
        content: '';
        position: absolute;
        top: -5%; left: -5%; right: -5%; bottom: -5%; 
        background-image: url('https://assets.raggiesoft.com/raggiesoft-media/images/hero/frutiger-aero.jpg');
        background-size: cover;
        background-position: center;
        z-index: -2;
        animation: aero-pan 40s linear infinite alternate;
    }

    .aero-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(120deg, rgba(244, 249, 253, 0.85) 0%, rgba(0, 195, 255, 0.1) 100%);
        z-index: -1;
    }

    [data-bs-theme="dark"] .aero-hero {
        box-shadow: 0 8px 32px rgba(0, 229, 255, 0.05);
    }
    [data-bs-theme="dark"] .aero-hero::before {
        background-image: url('https://assets.raggiesoft.com/raggiesoft-media/images/hero/dark-aero.jpg');
    }
    [data-bs-theme="dark"] .aero-hero::after {
        background: linear-gradient(120deg, rgba(7, 11, 20, 0.9) 0%, rgba(0, 229, 255, 0.08) 100%);
    }

    @keyframes aero-pan {
        0% { transform: scale(1) translate(0, 0); }
        100% { transform: scale(1.05) translate(-1.5%, -1.5%); }
    }

    @media (prefers-reduced-motion: reduce) {
        .aero-hero::before { animation: none; top: 0; left: 0; right: 0; bottom: 0; }
    }

    /* --- WIDE PROJECT GLASS CARDS --- */
    .aero-project-card {
        background: var(--raggie-glass-bg);
        backdrop-filter: blur(16px) saturate(120%);
        -webkit-backdrop-filter: blur(16px) saturate(120%);
        border: 1px solid var(--raggie-glass-border);
        box-shadow: var(--raggie-glass-shadow);
        border-radius: 16px;
        overflow: hidden;
        transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.3s ease;
    }
    .aero-project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 195, 255, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight);
    }
    [data-bs-theme="dark"] .aero-project-card:hover {
        box-shadow: 0 15px 35px rgba(0, 229, 255, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight);
    }

    /* Specific Hover for Legacy/Amber Cards */
    .aero-project-card.card-legacy:hover {
        box-shadow: 0 15px 35px rgba(255, 179, 0, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight);
    }

    /* Inner Glass Icon Panes */
    .aero-project-icon-pane {
        background: linear-gradient(135deg, rgba(0, 195, 255, 0.15) 0%, rgba(0, 195, 255, 0.02) 100%);
        border-right: 1px solid var(--raggie-glass-border);
    }
    [data-bs-theme="dark"] .aero-project-icon-pane {
        background: linear-gradient(135deg, rgba(0, 229, 255, 0.15) 0%, rgba(0, 229, 255, 0.02) 100%);
    }

    /* Legacy/Amber Icon Pane */
    .aero-project-icon-pane-legacy {
        background: linear-gradient(135deg, rgba(255, 179, 0, 0.15) 0%, rgba(255, 179, 0, 0.02) 100%);
        border-right: 1px solid var(--raggie-glass-border);
    }
    [data-bs-theme="dark"] .aero-project-icon-pane-legacy {
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.15) 0%, rgba(255, 193, 7, 0.02) 100%);
    }

    /* Custom GitHub Glass Button */
    .btn-glass-github {
        background: rgba(108, 117, 125, 0.1);
        border: 1px solid rgba(108, 117, 125, 0.3);
        color: var(--bs-body-color) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-github:hover, .btn-glass-github:focus {
        background: rgba(108, 117, 125, 0.2);
        box-shadow: 0 0 12px rgba(255, 255, 255, 0.1), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }

    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-info) !important;
        outline-offset: 4px;
        border-radius: 50rem;
    }
    
    [data-bs-theme="dark"] .aero-hero .lead {
        text-shadow: 0 1px 4px rgba(0,0,0,0.9), 0 0 10px rgba(0,0,0,0.5) !important;
    }
</style>

<div class="aero-hero py-5 mb-5">
    <div class="container text-center py-4">
        <i class="fa-brands fa-osi fa-4x text-info mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 8px rgba(0, 195, 255, 0.5));"></i>
        <h1 class="display-4 fw-bold text-uppercase mb-2 brand-font" style="letter-spacing: 2px;">
            <span class="text-glow-primary">Open Source</span>
        </h1>
        <p class="lead tech-font mb-0 mx-auto" style="max-width: 700px; text-shadow: 0 1px 2px rgba(255,255,255,0.9);">
            Infrastructure, architecture, and deployment tools built for the RaggieSoft network, released under the MIT License.
        </p>
    </div>
</div>

<div class="container pb-5 pt-2">
    
    <div class="row g-4 justify-content-center mb-5">
        
        <div class="col-lg-11 col-xl-10">
            <div class="aero-project-card">
                <div class="row g-0 h-100">
                    
                    <div class="col-md-4 aero-project-icon-pane d-flex flex-column justify-content-center align-items-center p-5 text-center">
                        <i class="fa-duotone fa-rocket-launch fa-4x text-info mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,195,255,0.4));"></i>
                        <h2 class="h5 fw-bold text-uppercase brand-font mb-0 text-glow-primary">The Stardust Engine</h2>
                    </div>
                    
                    <div class="col-md-8 p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                            <h3 class="h4 fw-bold mb-0 text-body-emphasis">Stardust Engine CMS & Elara SPA</h3>
                            <span class="badge bg-hud-green border border-success rounded-pill font-monospace text-uppercase shadow-sm py-2 px-3 text-success fw-bold">
                                v1.0 Stable
                            </span>
                        </div>
                        
                        <div class="d-inline-block px-3 py-2 rounded-3 mb-3" style="background: rgba(0,0,0,0.03); border: 1px solid var(--raggie-glass-border);">
                            <p class="text-body-secondary font-monospace small mb-0">PHP 8.4 <span class="mx-2 opacity-50">|</span> Vanilla JS <span class="mx-2 opacity-50">|</span> Flat-File JSON</p>
                        </div>
                        
                        <p class="text-body-emphasis mb-4 flex-grow-1">
                            A high-performance, zero-database web framework. Built natively for edge-cache synergy (Cloudflare/Nginx), featuring a lightning-fast Vanilla JS soft-routing engine (Elara) that mimics the speed of React without the heavy dependency overhead.
                        </p>
                        
                        <div class="mt-auto d-flex flex-wrap gap-2">
                            <a href="/raggiesoft-media/projects/stardust-engine-cms" class="btn btn-primary rounded-pill fw-bold text-uppercase px-4 shadow transition-all" style="background: linear-gradient(180deg, #00C3FF 0%, #009ce6 48%, #0087cc 52%, #0073b3 100%); border-color: #006099;">
                                View Documentation <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                            </a>
                            <a href="https://github.com/raggiesoft" target="_blank" rel="noopener noreferrer" class="btn btn-glass-github rounded-pill fw-bold px-4 transition-all">
                                <i class="fa-brands fa-github me-2" aria-hidden="true"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-11 col-xl-10 mt-4">
            <div class="aero-project-card card-legacy">
                <div class="row g-0 h-100">
                    
                    <div class="col-md-4 aero-project-icon-pane-legacy d-flex flex-column justify-content-center align-items-center p-5 text-center">
                        <i class="fa-duotone fa-floppy-disk fa-4x text-warning mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(255,179,0,0.4));"></i>
                        <h2 class="h5 fw-bold text-uppercase brand-font mb-0 text-warning" style="text-shadow: 0 0 8px rgba(255,179,0,0.4);">StoreTrainer</h2>
                    </div>
                    
                    <div class="col-md-8 p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                            <h3 class="h4 fw-bold mb-0 text-body-emphasis">StoreTrainer Archive</h3>
                            <span class="badge border border-warning rounded-pill font-monospace text-uppercase shadow-sm py-2 px-3 text-warning fw-bold" style="background: rgba(255, 179, 0, 0.1);">
                                <i class="fa-solid fa-box-archive me-1" aria-hidden="true"></i> Legacy
                            </span>
                        </div>
                        
                        <div class="d-inline-block px-3 py-2 rounded-3 mb-3" style="background: rgba(0,0,0,0.03); border: 1px solid var(--raggie-glass-border);">
                            <p class="text-body-secondary font-monospace small mb-0">Visual Basic 6.0 <span class="mx-2 opacity-50">|</span> NSIS <span class="mx-2 opacity-50">|</span> Win95+</p>
                        </div>
                        
                        <p class="text-body-emphasis mb-4 flex-grow-1">
                            A historical utility designed to store the locations of PC games and trainers in an easy-to-use interface. Notable for its extreme deployment architecture, utilizing a custom Nullsoft (NSIS) installer to dynamically detect and install the exact DCOM98, WSH, and VB6 runtimes required across decades of Windows hardware.
                        </p>
                        
                       <div class="mt-auto d-flex flex-wrap gap-2">
                            <a href="/raggiesoft-media/projects/storetrainer" class="btn btn-warning rounded-pill fw-bold text-uppercase px-4 shadow transition-all text-dark">
                                View Archive <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                            </a>
                            <a href="https://github.com/raggiesoft" target="_blank" rel="noopener noreferrer" class="btn btn-glass-github rounded-pill fw-bold px-4 transition-all">
                                <i class="fa-brands fa-github me-2" aria-hidden="true"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row col-lg-10 mx-auto">
        <div class="col-12 text-center pt-4">
            <div class="p-3 rounded-4" style="background: rgba(0,0,0,0.02); border: 1px solid var(--raggie-glass-border); box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);">
                <h3 class="h6 text-uppercase fw-bold text-secondary mb-2">
                    <i class="fa-solid fa-scale-balanced me-2 text-info opacity-75" aria-hidden="true"></i>Licensing Transparency
                </h3>
                <p class="small text-body-secondary font-monospace mb-0">
                    All source code hosted in the RaggieSoft Media public repositories is distributed under the <a href="/raggiesoft-media/licensing" class="text-info fw-bold text-decoration-none border-bottom border-info transition-all" style="text-shadow: 0 0 5px rgba(0, 195, 255, 0.3);">MIT License</a>. Narrative IP and audio Masters are strictly excluded.
                </p>
            </div>
        </div>
    </div>

</div>