<?php
// pages/raggiesoft-media/projects/overview.php
// The Open Source Division Hub
// Updated: Frutiger Aero / Dark Aero Image Backgrounds + Architect Portfolio Integration

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
        top: -50%; left: -50%; width: 200%; height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
        background-image: url('https://assets.raggiesoft.com/raggiesoft-corporate/images/hero/frutiger-aero.jpg');
        pointer-events: none;
        z-index: 0;
    }

    [data-bs-theme="dark"] .aero-hero::before {
        background: radial-gradient(circle, rgba(0,229,255,0.05) 0%, transparent 60%);
        background-image: url('https://assets.raggiesoft.com/raggiesoft-corporate/images/hero/dark-aero.jpg');
    }

    .aero-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.9) 100%);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        z-index: -1;
    }

    [data-bs-theme="dark"] .aero-hero::after {
        background: linear-gradient(135deg, rgba(7, 11, 20, 0.7) 0%, rgba(7, 11, 20, 0.95) 100%);
    }

    @keyframes aero-pan {
        0% { transform: scale(1) translate(0, 0); }
        100% { transform: scale(1.1) translate(-2%, -2%); }
    }

    .aero-content { position: relative; z-index: 1; }

    /* Tactile Hover Lift for Aero Cards */
    .hover-lift {
        transition: transform 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.2s ease;
    }
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 85, 150, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight) !important;
    }
    [data-bs-theme="dark"] .hover-lift:hover {
        box-shadow: 0 12px 28px rgba(0, 229, 255, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight) !important;
    }
    
    .btn-glass-github {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid var(--raggie-glass-border);
        color: var(--bs-body-color);
    }
    .btn-glass-github:hover {
        background: rgba(255, 255, 255, 0.4);
        color: var(--bs-primary);
    }
    [data-bs-theme="dark"] .btn-glass-github {
        background: rgba(0, 0, 0, 0.4);
    }
    [data-bs-theme="dark"] .btn-glass-github:hover {
        background: rgba(0, 229, 255, 0.2);
        color: #fff;
        border-color: var(--mpr-cyan-400);
        box-shadow: 0 0 15px rgba(0, 229, 255, 0.3);
    }
</style>

<div class="aero-hero py-5">
    <div class="container py-5 aero-content text-center">
        <i class="fa-brands fa-osi fa-4x text-info mb-4" aria-hidden="true" style="filter: drop-shadow(0 0 15px rgba(0,195,255,0.4));"></i>
        <h1 class="display-4 fw-bold text-uppercase mb-3 brand-font text-glow-primary">Open Source Division</h1>
        <p class="lead text-secondary mx-auto mb-0" style="max-width: 800px;">
            RaggieSoft Media is committed to the open web. We build and maintain MIT-licensed infrastructure, frameworks, and tools designed to democratize narrative publishing and web accessibility.
        </p>
    </div>
</div>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="h4 text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-4 text-secondary">
                Live Projects & Infrastructure
            </h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-6">
            <a href="/raggiesoft-media/projects/stardust-engine-cms" class="card bg-hud-blue border-0 shadow-sm h-100 text-decoration-none hover-lift">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-rocket-launch fa-3x text-primary me-4" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.4));"></i>
                        <div>
                            <h3 class="h5 fw-bold text-body-emphasis mb-1">Stardust Engine CMS</h3>
                            <p class="small text-primary font-monospace mb-0 text-uppercase tracking-wider">Active Framework</p>
                        </div>
                    </div>
                    <p class="text-body-secondary mb-4">
                        The flagship, file-based PHP MVC framework powering the entire RaggieSoft network. Features the "Elara" Vanilla JS SPA Router, dynamic structured data, and native dark mode logic.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-auto">
                        <span class="badge bg-primary-subtle text-primary-emphasis border border-primary-subtle">PHP 8.4</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">Vanilla JS</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">JSON Shards</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6">
            <a href="#" class="card bg-hud-orange border-0 shadow-sm h-100 text-decoration-none hover-lift">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-books fa-3x text-warning me-4" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(255,179,0,0.4));"></i>
                        <div>
                            <h3 class="h5 fw-bold text-body-emphasis mb-1">RaggieSoft Books Engine</h3>
                            <p class="small text-warning font-monospace mb-0 text-uppercase tracking-wider">In Development</p>
                        </div>
                    </div>
                    <p class="text-body-secondary mb-4">
                        A dedicated, accessible reading environment designed to ingest structured JSON manuscript data and render customizable, user-friendly reading experiences.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-auto">
                        <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">WCAG 2.1 AA</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">Python Ingestion</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/about/michael-ragsdale" class="card bg-hud-green border-0 shadow-sm h-100 text-decoration-none hover-lift">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-user-tie fa-3x text-success me-4" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(56, 229, 77, 0.4));"></i>
                        <div>
                            <h3 class="h5 fw-bold text-body-emphasis mb-1">Architect Portfolio</h3>
                            <p class="small text-success font-monospace mb-0 text-uppercase tracking-wider">Professional Dashboard</p>
                        </div>
                    </div>
                    <p class="text-body-secondary mb-4">
                        The interactive, JSON-driven professional dashboard detailing systems architecture, full-stack experience, and automated hiring logistics for Michael Ragsdale.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-auto">
                        <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle">Resume</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">ATS Optimized</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">Logistics</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/raggiesoft-media/projects/storetrainer" class="card bg-hud-base border-0 shadow-sm h-100 text-decoration-none hover-lift">
                <div class="card-body p-4 p-md-5 d-flex flex-column">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-floppy-disk fa-3x text-secondary me-4" aria-hidden="true"></i>
                        <div>
                            <h3 class="h5 fw-bold text-body-emphasis mb-1">StoreTrainer</h3>
                            <p class="small text-secondary font-monospace mb-0 text-uppercase tracking-wider">Legacy / Active</p>
                        </div>
                    </div>
                    <p class="text-body-secondary mb-4">
                        A Windows utility from the 9x era built in Visual Basic 6.0 that orchestrates complex launch sequences for video game memory trainers. It generates custom <code>.STF</code> (INI-formatted) shortcuts to manage execution orders and working directories.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-auto">
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">VB6</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">Win32 API</span>
                        <span class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle">.STF / INI Parser</span>
                    </div>
                </div>
            </a>
        </div>
        
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card bg-hud-blue border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="mb-4 mb-md-0 text-center text-md-start">
                            <h3 class="h4 fw-bold text-body-emphasis mb-2">View the Source Code</h3>
                            <p class="text-secondary mb-0">The Stardust Engine CMS and supporting infrastructure are available for review.</p>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="/raggiesoft-media/projects/stardust-engine-cms" class="btn btn-primary rounded-pill fw-bold px-4 shadow-sm transition-all">
                                Read the Docs <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
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
                    All source code hosted in the RaggieSoft Media public repositories is distributed under the <a href="/raggiesoft-media/licensing" class="text-info fw-bold text-decoration-none border-bottom border-info transition-all" style="text-shadow: 0 0 5px rgba(0, 195, 255, 0.3);">MIT License</a>. Narrative universe bibles and IP lore are strictly governed under <a href="/raggiesoft-media/licensing" class="text-info fw-bold text-decoration-none border-bottom border-info transition-all" style="text-shadow: 0 0 5px rgba(0, 195, 255, 0.3);">CC BY-SA 4.0</a> unless explicitly stated otherwise.
                </p>
            </div>
        </div>
    </div>
</div>