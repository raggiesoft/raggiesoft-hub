<?php
// pages/engine-room/corporate/structure.php
// The Corporate Hierarchy (The "Iceberg" Model)
// Context: Visualizing how a $2.4B Trust hides behind a rock band.
// Theme: Corporate / Clean (No Starfield)

$pageTitle = "Organizational Structure - The O'Connell Family Revocable Trust";
?>

<style>
    /* WATERLINE (Page Specific) */
    .waterline {
        border-top: 2px dashed #0d6efd; /* Primary Blue for Trust */
        position: relative;
        margin: 50px 0;
        text-align: center;
    }
    .waterline span {
        background-color: var(--bs-body-bg); /* Matches theme bg */
        color: #0d6efd;
        padding: 0 15px;
        position: relative;
        top: -12px;
        font-family: 'Courier New', monospace;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
    }
    
    .catalyst-card {
        background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
        border-left: 5px solid #198754; /* Success Green for the Win */
    }
</style>

<div class="container py-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <h6 class="text-uppercase text-body-secondary fw-bold letter-spacing-2 mb-2">Governance & Oversight</h6>
            <h1 class="display-4 fw-bold text-primary mb-3" style="font-family: 'Playfair Display', serif;">
                The Architecture of Silence
            </h1>
            <p class="lead text-secondary">
                "We built a fortress so we could keep playing music."
            </p>
        </div>
    </div>

    <div class="card border shadow-sm mb-5">
        <div class="card-body overflow-auto bg-body-tertiary">
            <?php
            // 1. DEFINE PATH TO JSON DATA (CDN Link)
            $jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/json/corporate-structure.json';

            // 2. FETCH AND DECODE
            // Suppress errors (@) to handle network issues gracefully
            $jsonData = @file_get_contents($jsonUrl);

            if ($jsonData === false) {
                 echo '<div class="alert alert-danger"><i class="fa-solid fa-triangle-exclamation me-2"></i><strong>System Error:</strong> Unable to retrieve Corporate Structure data from Archives.</div>';
            } else {
                $rootNode = json_decode($jsonData, true);
                if (json_last_error() !== JSON_ERROR_NONE || $rootNode === null) { 
                    echo '<div class="alert alert-warning"><strong>Data Error:</strong> JSON Corruption Detected.</div>';
                } else {
                    // 3. RENDER THE CHART
                    include ROOT_PATH . '/includes/components/corporate/org-chart.php';
                }
            }
            ?>
        </div>
        <div class="card-footer bg-body-secondary text-center">
            <small class="text-body-secondary fst-italic">
                <i class="fa-solid fa-lock me-2"></i>CONFIDENTIAL: This structure is designed to compartmentalize liability.
            </small>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            
            <div class="card catalyst-card mb-5 shadow-lg">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-3 mb-md-0">
                            <i class="fa-duotone fa-ticket fa-4x text-success"></i>
                        </div>
                        <div class="col-md-10">
                            <h4 class="text-white text-uppercase fw-bold mb-2">The 1996 Catalyst</h4>
                            <p class="text-white-50 mb-0">
                                The sophisticated structure above did not exist in a vacuum. It was necessitated by a single event in Daleville, VA: <strong>The "American Dream" Jackpot of 1996.</strong> 
                            </p>
                            <p class="text-white-50 mt-3 mb-0">
                                When Cassidy O'Connell handed the winning ticket (Jackpot: <strong>$2.04 Billion</strong>) to her sister, the mission of Engine Room Records shifted. It was no longer about survival; it was about stewardship. The Trust was formed not just to manage wealth, but to protect the family's artistic identity from their own financial reality. Without this event, <em>The Stardust Engine</em> might have dissolved in the late 90s.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="waterline">
                <span>The Information Gap</span>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="h-100 p-4 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                        <h5 class="text-primary fw-bold mb-3">
                            <i class="fa-duotone fa-users-viewfinder me-2"></i>Public Perception
                        </h5>
                        <p class="text-muted small text-uppercase fw-bold mb-2">What the World Sees</p>
                        <p>
                            To the public, <strong>The Stardust Engine</strong> is simply a resilient legacy band that tours occasionally. 
                        </p>
                        <p>
                            Other entities like <strong>Mirage</strong> or <strong>Origin</strong> appear to be successful independent artists on their own labels. <strong>Pacific Rim Properties</strong> appears to be a boring, faceless Delaware corporation that owns office buildings. There is no obvious connecting thread.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-4 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                        <h5 class="text-danger fw-bold mb-3">
                            <i class="fa-duotone fa-file-contract me-2"></i>Legal Reality
                        </h5>
                        <p class="text-muted small text-uppercase fw-bold mb-2">What the IRS Sees</p>
                        <p>
                            Every entity flows up to <strong>The O'Connell Family Revocable Trust</strong>. The "Band" is legally a loss-leader asset, subsidized by the returns from the real estate portfolio and the liquidation arms (Aethelgard).
                        </p>
                        <p>
                            The separation is deliberate. A tenant renting Class-A office space in Los Angeles does not need to know their landlord is a drummer.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>