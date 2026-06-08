<?php
// pages/raggiesoft-media/projects/stardust-engine-cms/overview.php
// The Promotional / Documentation Hub for the open-source CMS
// Updated: Frutiger Aero / Dark Aero Glass Architecture (Sidebar Compatible)

$pageTitle = "The Stardust Engine CMS | Open Source";
?>

<style>
    /* WCAG Focus */
    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-info) !important;
        outline-offset: 4px;
        border-radius: 50rem;
    }

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

    /* Inner Glass Box for Feature Grid */
    .aero-feature-box {
        background: rgba(0, 130, 230, 0.05);
        border: 1px solid rgba(0, 130, 230, 0.15);
        border-radius: 12px;
        padding: 1.5rem;
        height: 100%;
        transition: all 0.2s ease;
    }
    [data-bs-theme="dark"] .aero-feature-box {
        background: rgba(0, 229, 255, 0.05);
        border: 1px solid rgba(0, 229, 255, 0.15);
    }
    .aero-feature-box:hover {
        background: rgba(0, 130, 230, 0.1);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.4);
    }
    [data-bs-theme="dark"] .aero-feature-box:hover {
        background: rgba(0, 229, 255, 0.1);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }

    /* Custom Glass Info Button */
    .btn-glass-info {
        background: rgba(0, 195, 255, 0.1);
        border: 1px solid rgba(0, 195, 255, 0.4);
        color: var(--bs-info) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-info:hover {
        background: rgba(0, 195, 255, 0.2);
        box-shadow: 0 0 12px rgba(0, 195, 255, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }
</style>

<div class="container-fluid pb-5 pt-2">

    <div class="row mb-5">
        <div class="col-12">
            <div class="card bg-hud-blue border-0 shadow-sm p-4 p-md-5 overflow-hidden position-relative">
                <i class="fa-duotone fa-rocket-launch fa-10x position-absolute opacity-10 text-primary" style="right: -5%; bottom: -10%; transform: rotate(-15deg); filter: blur(2px);" aria-hidden="true"></i>
                
                <div class="position-relative z-1">
                    <div class="d-flex align-items-center mb-3 flex-wrap gap-2">
                        <span class="badge bg-info text-dark font-monospace text-uppercase rounded-pill shadow-sm px-3 py-2 fw-bold" style="box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);">
                            MIT License
                        </span>
                        <a href="https://github.com/raggiesoft" target="_blank" rel="noopener noreferrer" class="badge bg-body text-body-secondary text-decoration-none border font-monospace rounded-pill px-3 py-2 transition-all aero-hover-secondary">
                            <i class="fa-brands fa-github me-1" aria-hidden="true"></i> Public Repository
                        </a>
                    </div>
                    <h1 class="display-5 fw-bold text-uppercase mb-3 brand-font text-glow-primary" style="letter-spacing: 1px;">
                        <i class="fa-duotone fa-rocket-launch me-2 text-primary" aria-hidden="true"></i>The Stardust Engine CMS
                    </h1>
                    <p class="lead text-body-emphasis mb-0" style="max-width: 800px; text-shadow: 0 1px 1px rgba(255,255,255,0.4);">
                        A zero-database, flat-file content management system paired with a blazingly fast Vanilla JS routing engine. Built for independent creators who want enterprise speed without framework lock-in.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="h5 text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-4 text-secondary">Architecture Breakdown</h2>

    <div class="row g-4 mb-5">
        
        <div class="col-xl-4">
            <div class="card bg-hud-base h-100 border-0 shadow-sm p-4 hover-lift">
                <i class="fa-brands fa-php fa-3x text-secondary mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));"></i>
                <h3 class="h5 fw-bold mb-2 text-body-emphasis">The Engine (PHP 8.4)</h3>
                <p class="small text-body-secondary mb-0">
                    A strictly structural MVC routing layer. Uses a centralized JSON configuration to determine layouts, sidebars, and SEO schema injection. Zero SQL databases required; entirely flat-file architecture driven by PHP 8.4 arrays and includes.
                </p>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card h-100 border-0 shadow-sm p-4 hover-lift position-relative" style="background: linear-gradient(135deg, rgba(0, 195, 255, 0.1) 0%, rgba(0, 195, 255, 0.02) 100%); border: 1px solid rgba(0, 195, 255, 0.3) !important; border-left: 4px solid var(--bs-info) !important; backdrop-filter: blur(8px) saturate(120%); -webkit-backdrop-filter: blur(8px) saturate(120%); border-radius: 12px;">
                <i class="fa-brands fa-js fa-3x text-info mb-3" aria-hidden="true" style="filter: drop-shadow(0 0 8px rgba(0,195,255,0.6));"></i>
                <h3 class="h5 fw-bold mb-2 text-info text-uppercase tracking-wider" style="text-shadow: 0 0 8px rgba(0,195,255,0.3);">Elara SPA Router</h3>
                <p class="small text-body-emphasis mb-0">
                    The crown jewel. A Vanilla JavaScript listener that intercepts all internal clicks, aborts the hard refresh, and seamlessly fetches the next page. It dynamically diffs the `<head>`, swaps stylesheets, and updates the `<body>` elements, providing native-app speed.
                </p>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card bg-hud-base h-100 border-0 shadow-sm p-4 hover-lift">
                <i class="fa-solid fa-terminal fa-3x text-secondary mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));"></i>
                <h3 class="h5 fw-bold mb-2 text-body-emphasis">Jenna & Sarah (DevOps)</h3>
                <p class="small text-body-secondary mb-0">
                    Included bash automation scripts. 'Jenna' handles local deployment, enforcing WCAG accessibility checks before pushing code to GitHub and syncing static assets via `rclone`. 'Sarah' sits on your server, quietly pulling updates via `rsync` without requiring root permissions.
                </p>
            </div>
        </div>

    </div>

    <div class="card bg-hud-base border-0 shadow-sm mb-5 p-4 p-md-5" style="border-left: 4px solid var(--bs-primary) !important;">
        <h2 class="h4 fw-bold text-primary mb-4 text-uppercase border-bottom border-secondary-subtle pb-3">
            <i class="fa-solid fa-microchip me-2" aria-hidden="true"></i>Why Build The Stardust Engine?
        </h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="aero-feature-box">
                    <h3 class="h6 fw-bold text-uppercase text-body-emphasis"><i class="fa-solid fa-bolt me-2 text-primary" aria-hidden="true"></i>Edge-Cache Synergy</h3>
                    <p class="small text-body-secondary mb-0">
                        Because Elara fetches HTML payloads directly from the server via JavaScript, it synergizes perfectly with Cloudflare and Nginx edge-caching. The server simply hands off static rendered HTML, drastically reducing origin load.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aero-feature-box">
                    <h3 class="h6 fw-bold text-uppercase text-body-emphasis"><i class="fa-solid fa-universal-access me-2 text-primary" aria-hidden="true"></i>WCAG AAA Focus</h3>
                    <p class="small text-body-secondary mb-0">
                        The included Bootstrap 5 templates are heavily modified for contrast compliance and screen reader legibility. The deployment script explicitly refuses to push code if required alt-text fields are missing from your configuration.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aero-feature-box">
                    <h3 class="h6 fw-bold text-uppercase text-body-emphasis"><i class="fa-solid fa-music me-2 text-primary" aria-hidden="true"></i>Persistent Audio</h3>
                    <p class="small text-body-secondary mb-0">
                        By intercepting the hard refresh, Elara allows audio and video elements to continue playing uninterrupted across page loads, making it the perfect CMS for independent record labels, podcasters, and portfolio sites.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aero-feature-box">
                    <h3 class="h6 fw-bold text-uppercase text-body-emphasis"><i class="fa-solid fa-shield-halved me-2 text-primary" aria-hidden="true"></i>Scraper Immune</h3>
                    <p class="small text-body-secondary mb-0">
                        Features a built-in native email obfuscation pipeline. Contact details are broken apart in raw HTML data-attributes, rendering them invisible to automated bot scrapers, while remaining fully clickable for actual users.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-4 border-top border-secondary-subtle pt-5">
        <a href="https://github.com/raggiesoft" target="_blank" rel="noopener noreferrer" class="btn btn-glass-info btn-lg rounded-pill fw-bold text-uppercase shadow-sm px-5 py-3 transition-all">
            <i class="fa-brands fa-github me-2 fa-lg" aria-hidden="true"></i> View Source on GitHub
        </a>
        <p class="small text-body-secondary font-monospace mt-4">
            <i class="fa-solid fa-triangle-exclamation text-warning me-1" aria-hidden="true"></i> Repository documentation and boilerplate cleanup currently in progress.
        </p>
    </div>

</div>