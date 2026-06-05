<?php
// pages/engine-room/commercial-licensing.php
// The B2B / Legal wing of Engine Room Records.

$pageTitle = "Commercial Licensing | Engine Room Records";
?>

<style>
    .licensing-card {
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .licensing-card:hover {
        border-color: var(--bs-warning); /* Amber warning color for legal/business */
        box-shadow: 0 0 15px rgba(255, 184, 77, 0.1);
    }
    .intake-protocol {
        background-color: #15181c;
        border-left: 4px solid var(--bs-warning);
    }
    [data-bs-theme="light"] .intake-protocol {
        background-color: #f4f4f6;
        border: 1px solid var(--bs-border-color);
        border-left: 4px solid var(--bs-warning);
    }
</style>

<!-- THE HERO -->
<div class="engine-hero py-5 mb-5 shadow-lg" style="border-bottom-color: var(--bs-warning);">
    <div class="container text-center py-5">
        <i class="fa-duotone fa-file-signature fa-4x text-warning mb-4 opacity-75"></i>
        <h1 class="display-3 fw-bold text-uppercase mb-3 brand-font" style="letter-spacing: 2px;">
            Commercial Licensing
        </h1>
        <p class="lead tech-font opacity-75 mb-4">
            Master use and synchronization clearances.
        </p>
        <span class="badge bg-warning text-dark text-uppercase px-3 py-2 fs-6 border border-dark shadow-sm">
            <i class="fa-solid fa-briefcase me-2"></i>B2B Operations Portal
        </span>
    </div>
</div>

<div class="container pb-5">
    
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto text-center">
            <h2 class="h4 text-uppercase fw-bold border-bottom border-secondary pb-3 mb-4">
                Catalog Clearance Categories
            </h2>
            <p class="text-body-emphasis mb-5">
                Engine Room Records controls 100% of the Master and Publishing rights for all artists on our active roster. We offer streamlined, "one-stop" clearance for commercial applications, ensuring rapid turnaround for production timelines.
            </p>
        </div>
    </div>

    <!-- CLEARANCE TIERS (3 COLUMNS) -->
    <div class="row g-4 mb-5 col-lg-10 mx-auto">
        
        <!-- Film & Television -->
        <div class="col-md-4">
            <div class="card studio-card licensing-card h-100 p-4 text-center">
                <i class="fa-duotone fa-film fa-3x text-secondary mb-3"></i>
                <h3 class="h6 fw-bold text-uppercase mb-2">Film & Television</h3>
                <p class="tech-font text-warning mb-3 small">Sync & Master</p>
                <p class="text-body-secondary small mb-0">
                    Clearances for theatrical releases, streaming platform original content (Netflix, Hulu, Amazon), and traditional network television broadcasts.
                </p>
            </div>
        </div>

        <!-- Interactive & Gaming -->
        <div class="col-md-4">
            <div class="card studio-card licensing-card h-100 p-4 text-center">
                <i class="fa-duotone fa-gamepad-modern fa-3x text-secondary mb-3"></i>
                <h3 class="h6 fw-bold text-uppercase mb-2">Interactive Media</h3>
                <p class="tech-font text-warning mb-3 small">In-Engine Audio</p>
                <p class="text-body-secondary small mb-0">
                    Licensing for AAA video games, independent interactive projects, immersive VR/AR experiences, and digital application environments.
                </p>
            </div>
        </div>

        <!-- Broadcast Advertising -->
        <div class="col-md-4">
            <div class="card studio-card licensing-card h-100 p-4 text-center">
                <i class="fa-duotone fa-tower-broadcast fa-3x text-secondary mb-3"></i>
                <h3 class="h6 fw-bold text-uppercase mb-2">Commercial / Ad</h3>
                <p class="tech-font text-warning mb-3 small">Global Broadcast</p>
                <p class="text-body-secondary small mb-0">
                    Audio rights for regional, national, or global advertising campaigns across terrestrial television, radio, and digital social channels.
                </p>
            </div>
        </div>

    </div>

    <!-- THE INTAKE PROTOCOL -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="intake-protocol p-4 p-md-5 shadow-sm">
                <h4 class="text-warning fw-bold text-uppercase h5 mb-4 border-bottom border-secondary border-opacity-25 pb-3">
                    <i class="fa-solid fa-clipboard-list me-2"></i>Clearance Request Protocol
                </h4>
                
                <p class="text-body-emphasis mb-4">
                    To request a quote and initiate the clearance process, direct your inquiry to <code class="bg-dark text-light px-2 py-1 ms-1">licensing@engineroom-records.com</code>.
                </p>

                <p class="tech-font text-body-secondary small fw-bold mb-2">REQUIRED DOCUMENTATION:</p>
                <ul class="list-group list-group-flush border-bottom border-secondary border-opacity-25 mb-4">
                    <li class="list-group-item bg-transparent text-body-secondary small border-secondary border-opacity-25">
                        <i class="fa-solid fa-check text-success me-2"></i><strong>Artist & Track Title:</strong> The specific audio asset requested.
                    </li>
                    <li class="list-group-item bg-transparent text-body-secondary small border-secondary border-opacity-25">
                        <i class="fa-solid fa-check text-success me-2"></i><strong>Project Synopsis:</strong> A brief description of the film, game, or campaign.
                    </li>
                    <li class="list-group-item bg-transparent text-body-secondary small border-secondary border-opacity-25">
                        <i class="fa-solid fa-check text-success me-2"></i><strong>Media & Territory:</strong> Requested rights (e.g., All Media, Worldwide, in Perpetuity).
                    </li>
                    <li class="list-group-item bg-transparent text-body-secondary small border-secondary border-opacity-25">
                        <i class="fa-solid fa-check text-success me-2"></i><strong>Usage Type:</strong> Background, featured, main title, or end credits.
                    </li>
                </ul>

                <div class="text-end">
                    <a href="mailto:licensing@engineroom-records.com" class="btn btn-warning fw-bold text-uppercase rounded-0 tech-font">
                        Initiate Request <i class="fa-solid fa-envelope-open-text ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>