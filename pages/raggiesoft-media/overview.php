<?php
// pages/raggiesoft-media/overview.php
// The B2B Corporate Hub for RaggieSoft IP and Master Licensing

$pageTitle = "RaggieSoft Media | IP & Asset Management";
?>

<style>
    /* B2B Corporate Overrides */
    .corporate-hero {
        background: linear-gradient(180deg, #121212 0%, #1a1c20 100%);
        border-bottom: 1px solid var(--bs-secondary-bg);
        color: #ffffff; /* WCAG Fix: Force white text for the dark gradient */
    }

    /* WCAG Fix: Adaptive Light Mode Hero */
    [data-bs-theme="light"] .corporate-hero {
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        color: var(--bs-body-color);
        border-bottom: 1px solid var(--bs-border-color);
    }
    
    .division-card {
        background-color: #15181c;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: border-color 0.2s ease, transform 0.2s ease;
    }
    
    .division-card:hover {
        border-color: var(--bs-primary);
        transform: translateY(-2px);
    }
    
    [data-bs-theme="light"] .division-card {
        background-color: #ffffff;
        border: 1px solid var(--bs-border-color);
    }
    
    .data-label {
        font-size: 0.75rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--bs-secondary);
        font-family: monospace;
    }
</style>

<div class="corporate-hero py-5 mb-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold text-uppercase mb-3 brand-font" style="letter-spacing: 3px;">
            RaggieSoft Media
        </h1>
        <p class="lead tech-font opacity-75 mb-4 mx-auto" style="max-width: 800px;">
            An independent multimedia asset management and distribution house based in Norfolk, Virginia. Specializing in automated audio engineering, custom web architecture, and open-source narrative lore.
        </p>
        <span class="badge bg-secondary text-uppercase px-3 py-2 fs-6 border border-dark shadow-sm font-monospace text-white">
            <i class="fa-solid fa-server me-2" aria-hidden="true"></i>Corporate Operations
        </span>
    </div>
</div>

<div class="container pb-5">
    
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary pb-2">
            <h2 class="h5 text-uppercase fw-bold mb-0 text-secondary">Intellectual Property Portfolio</h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-4">
            <div class="card division-card h-100 p-4 shadow-sm d-flex flex-column rounded-0">
                <i class="fa-duotone fa-waveform-lines fa-2x text-primary mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Audio & Music Production</h3>
                <p class="data-label mb-3">Engine Room Records</p>
                <p class="text-body-emphasis mb-4 small">
                    Management of 100% independent master recordings and publishing rights. Flagship catalogs include The Stardust Engine and active commercial releases.
                </p>
                <div class="mt-auto border-top border-secondary-subtle pt-3">
                    <a href="/raggiesoft-media/licensing/commercial" class="text-decoration-none text-uppercase fw-bold small">
                        Commercial Sync <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card division-card h-100 p-4 shadow-sm d-flex flex-column rounded-0">
                <i class="fa-duotone fa-code-merge fa-2x text-info mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Software Architecture</h3>
                <p class="data-label mb-3">Elara CMS & Infrastructure</p>
                <p class="text-body-emphasis mb-4 small">
                    Development of proprietary web frameworks, native SPA routing engines, and high-availability Nginx edge-delivery setups.
                </p>
                <div class="mt-auto border-top border-secondary-subtle pt-3">
                    <a href="/raggiesoft-media/projects/elara" class="text-decoration-none text-info text-uppercase fw-bold small">
                        Elara Open-Source Hub <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card division-card h-100 p-4 shadow-sm d-flex flex-column rounded-0">
                <i class="fa-duotone fa-books fa-2x text-warning mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Narrative & Literary</h3>
                <p class="data-label mb-3">Open-Source Lore</p>
                <p class="text-body-emphasis mb-4 small">
                    Extensive world-building, scriptwriting, and character asset management governed entirely under progressive public licensing frameworks.
                </p>
                <div class="mt-auto border-top border-secondary-subtle pt-3">
                    <a href="/raggiesoft-media/licensing" class="text-decoration-none text-warning text-uppercase fw-bold small">
                        CC BY-SA 4.0 Clearances <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-4 mt-5">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary pb-2">
            <h2 class="h5 text-uppercase fw-bold mb-0 text-secondary">Global Communications Protocol</h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-12">
            <div class="card division-card p-4 p-md-5 rounded-0 shadow-sm">
                <div class="row g-4">
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Commercial Media Licensing</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="sync" data-d="raggiesoftmedia" data-t="com">Email Sync Desk</a>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Rights & Attributions</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="licensing" data-d="raggiesoftmedia" data-t="com">Email Licensing Team</a>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Infrastructure & Engineering</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="ops" data-d="raggiesoftmedia" data-t="com">Email Operations</a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Employment Verification</p>
                        <a href="/raggiesoft-media/careers" class="text-decoration-none text-danger fw-bold fs-6">
                            <i class="fa-solid fa-shield-exclamation me-1"></i> Fraud Notice
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>