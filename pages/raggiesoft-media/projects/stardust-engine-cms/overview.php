<?php
// pages/raggiesoft-media/projects/stardust-engine-cms/overview.php
// The Promotional / Documentation Hub for the open-source CMS

$pageTitle = "The Stardust Engine CMS | Open Source";
?>

<div class="mb-5 border-bottom border-secondary-subtle bg-dark text-white p-4 p-md-5">
    <div class="d-flex align-items-center mb-3">
        <span class="badge bg-info text-dark font-monospace text-uppercase me-2 border border-dark">MIT License</span>
        <span class="text-white-50 small font-monospace"><i class="fa-brands fa-github me-1"></i> Public Repository</span>
    </div>
    <h1 class="display-5 fw-bold text-uppercase mb-3 brand-font text-info" style="letter-spacing: 1px;">
        <i class="fa-duotone fa-rocket-launch me-2" aria-hidden="true"></i>The Stardust Engine CMS
    </h1>
    <p class="lead text-white-75 mb-0" style="max-width: 800px;">
        A zero-database, flat-file content management system paired with a blazingly fast Vanilla JS routing engine. Built for independent creators who want enterprise speed without framework lock-in.
    </p>
</div>

<div class="container-fluid pb-5">
    
    <h2 class="h5 text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-4">Architecture Breakdown</h2>

    <div class="row g-4 mb-5">
        
        <div class="col-xl-4">
            <div class="card h-100 border-0 bg-body-tertiary shadow-sm rounded-0 p-4">
                <i class="fa-brands fa-php fa-3x text-secondary mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold mb-2">The Engine (PHP 8.4)</h3>
                <p class="small text-body-secondary mb-0">
                    A strictly structural MVC routing layer. Uses a centralized JSON configuration to determine layouts, sidebars, and SEO schema injection. Zero SQL databases required; entirely flat-file architecture driven by PHP 8.4 arrays and includes.
                </p>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card h-100 border-info border-opacity-50 bg-info bg-opacity-10 shadow-sm rounded-0 p-4">
                <i class="fa-brands fa-js fa-3x text-info mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold mb-2 text-info">Elara SPA Router</h3>
                <p class="small text-body-emphasis mb-0">
                    The crown jewel. A Vanilla JavaScript listener that intercepts all internal clicks, aborts the hard refresh, and seamlessly fetches the next page. It dynamically diffs the `<head>`, swaps stylesheets, and updates the `<body>` elements, providing native-app speed.
                </p>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card h-100 border-0 bg-body-tertiary shadow-sm rounded-0 p-4">
                <i class="fa-solid fa-terminal fa-3x text-secondary mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold mb-2">Jenna & Sarah (DevOps)</h3>
                <p class="small text-body-secondary mb-0">
                    Included bash automation scripts. 'Jenna' handles local deployment, enforcing WCAG accessibility checks before pushing code to GitHub and syncing static assets via `rclone`. 'Sarah' sits on your server, quietly pulling updates via `rsync` without requiring root permissions.
                </p>
            </div>
        </div>

    </div>

    <div class="card bg-dark text-white rounded-0 shadow-sm mb-5 p-4 p-md-5">
        <h2 class="h4 fw-bold text-info mb-4">Why Build The Stardust Engine?</h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase text-white-50"><i class="fa-solid fa-bolt me-2"></i>Edge-Cache Synergy</h3>
                <p class="small text-white-75 mb-0">
                    Because Elara fetches HTML payloads directly from the server via JavaScript, it synergizes perfectly with Cloudflare and Nginx edge-caching. The server simply hands off static rendered HTML, drastically reducing origin load.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase text-white-50"><i class="fa-solid fa-universal-access me-2"></i>WCAG AAA Focus</h3>
                <p class="small text-white-75 mb-0">
                    The included Bootstrap 5 templates are heavily modified for contrast compliance and screen reader legibility. The deployment script explicitly refuses to push code if required alt-text fields are missing from your configuration.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase text-white-50"><i class="fa-solid fa-music me-2"></i>Persistent Audio</h3>
                <p class="small text-white-75 mb-0">
                    By intercepting the hard refresh, Elara allows audio and video elements to continue playing uninterrupted across page loads, making it the perfect CMS for independent record labels, podcasters, and portfolio sites.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase text-white-50"><i class="fa-solid fa-shield-halved me-2"></i>Scraper Immune</h3>
                <p class="small text-white-75 mb-0">
                    Features a built-in native email obfuscation pipeline. Contact details are broken apart in raw HTML data-attributes, rendering them invisible to automated bot scrapers, while remaining fully clickable for actual users.
                </p>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <a href="https://github.com/raggiesoft" class="btn btn-primary btn-lg rounded-0 fw-bold text-uppercase shadow-sm px-5">
            <i class="fa-brands fa-github me-2" aria-hidden="true"></i> View Source on GitHub
        </a>
        <p class="small text-body-secondary mt-3">
            *Repository documentation and boilerplate cleanup currently in progress.
        </p>
    </div>

</div>