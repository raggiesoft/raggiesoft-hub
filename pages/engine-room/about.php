<?php
// pages/engine-room/about.php
// The Manifesto: "The Fortress Built on a Kill Switch."
// Origin: The Friction Catastrophe (1992).
// Philosophy: Protection first, Profit second.

$pageTitle = "About Engine Room Records - The Fortress";
?>

<style>
    /* TIMELINE CONNECTOR */
    .timeline-connector {
        border-left: 2px dashed #6c757d;
        margin-left: 20px;
        padding-left: 30px;
        padding-bottom: 30px;
        position: relative;
    }
    .timeline-dot {
        width: 12px;
        height: 12px;
        background-color: #dc3545; /* Red for the Origin */
        border-radius: 50%;
        position: absolute;
        left: -7px;
        top: 0;
        box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
    }
    
    /* MANIFESTO CARD */
    .manifesto-card {
        background: linear-gradient(to bottom right, #212529, #000);
        border: 1px solid #333;
        color: #fff;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h1 class="display-3 fw-bold text-uppercase mb-3" style="font-family: 'Impact', sans-serif;">
                Built for Protection.
            </h1>
            <p class="lead text-muted font-monospace">
                Engine Room Records is not a traditional record label. It is a closed legal ecosystem designed to protect neurodivergent artists from the predatory mechanics of the music industry.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 bg-black d-flex align-items-center justify-content-center p-5">
                        <div class="text-center">
                            <h1 class="display-1 fw-bold text-danger mb-0">1992</h1>
                            <p class="text-white-50 text-uppercase letter-spacing-2">The Catalyst</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-5 bg-dark text-white">
                            <h3 class="h4 fw-bold text-uppercase text-danger mb-3">
                                <i class="fa-duotone fa-fire me-2"></i>Origin: The Friction Catastrophe
                            </h3>
                            <p class="text-white-50">
                                On October 14, 1992, our founders walked out of a warehouse in Los Angeles, leaving a major label contract in ashes.
                            </p>
                            <p class="text-white-50">
                                An executive named Julian Vance had attempted to coerce the band into a marketing campaign built on incestuous fabrication ("The Fatal Assumption") and ableist exploitation of lead singer Ryan O'Connell's recent paralysis.
                            </p>
                            <p class="text-white-50 mb-4">
                                Holly O'Connell (then a 23-year-old law student) intervened, citing "Solicitation of a Felony". The band didn't just fire their manager; they vowed to <strong>never</strong> let an outsider control their narrative again.
                            </p>
                            
                            <?php $props = [
                                'text' => 'Read the Full History', 
                                'href' => '/engine-room/history/friction', 
                                'variant' => 'outline-light', 
                                'size' => 'small',
                                'icon' => 'fa-duotone fa-history',
                                'iconPosition' => 'before'
                            ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="timeline-connector">
                <div class="timeline-dot"></div>
                <h4 class="fw-bold text-white text-uppercase mb-3">Protocol 92</h4>
                <p class="text-muted fs-5">
                    "No creative decision—no photo, no lyric, no tour date—is finalized without the affirmative consent of every member. If one person says no, the answer is no. There is no majority vote on safety."
                </p>
                <footer class="blockquote-footer mt-2">The Founding Charter, Article I</footer>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card bg-dark border-secondary shadow-lg">
                <div class="card-header bg-black border-bottom border-secondary py-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0 text-white text-uppercase"><i class="fa-duotone fa-sitemap me-2 text-primary"></i>The Infrastructure</h5>
                        <span class="badge bg-primary bg-opacity-25 text-primary border border-primary">Updated: 2025</span>
                    </div>
                </div>
                <div class="card-body bg-gradient-dark p-4">
                    <p class="text-center text-white-50 mb-5" style="max-width: 700px; margin: 0 auto;">
                        To the public, we are a small indie label in Blacksburg, VA. To the bank, we are a diversified conglomerate managing real estate, intellectual property, and venture capital. This structure exists for one reason: <strong>Independence requires capital.</strong>
                    </p>
                    
                    <?php
                    // FETCH AND RENDER THE ORG CHART
                    $jsonFile = ROOT_PATH . '/data/corporate-structure.json';
                    if (file_exists($jsonFile)) {
                        $jsonData = file_get_contents($jsonFile);
                        $rootNode = json_decode($jsonData, true);
                        if (json_last_error() === JSON_ERROR_NONE) {
                            include ROOT_PATH . '/includes/components/corporate/org-chart.php';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 text-center">
            <h3 class="h4 text-white text-uppercase mb-4">The Board of Directors</h3>
            <p class="text-muted mb-5">
                Engine Room Records is managed jointly by the five members of the O'Connell/Wright family. They do not report to shareholders. They report to each other.
            </p>
            
            <div class="row g-3 justify-content-center">
                <div class="col-md-2 col-4">
                    <a href="/engine-room/artists/stardust-engine/band/holly-oconnell" class="text-decoration-none">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/holly.jpg" class="img-fluid rounded-circle border border-2 border-primary mb-2 shadow-glow" alt="Holly">
                        <h6 class="text-white small fw-bold text-uppercase">Holly</h6>
                        <span class="d-block x-small text-muted">CEO / Legal</span>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="/engine-room/artists/stardust-engine/band/ryan-oconnell" class="text-decoration-none">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/ryan.jpg" class="img-fluid rounded-circle border border-2 border-warning mb-2" alt="Ryan">
                        <h6 class="text-white small fw-bold text-uppercase">Ryan</h6>
                        <span class="d-block x-small text-muted">Creative Dir.</span>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="/engine-room/artists/stardust-engine/band/cassidy-oconnell" class="text-decoration-none">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg" class="img-fluid rounded-circle border border-2 border-warning mb-2" alt="Cassidy">
                        <h6 class="text-white small fw-bold text-uppercase">Cassidy</h6>
                        <span class="d-block x-small text-muted">A&R / Design</span>
                    </a>
                </div>
                 <div class="col-md-2 col-4">
                    <a href="/engine-room/artists/stardust-engine/band/evan-wright" class="text-decoration-none">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/evan.jpg" class="img-fluid rounded-circle border border-2 border-secondary mb-2" alt="Evan">
                        <h6 class="text-white small fw-bold text-uppercase">Evan</h6>
                        <span class="d-block x-small text-muted">Operations / IT</span>
                    </a>
                </div>
                 <div class="col-md-2 col-4">
                    <a href="/engine-room/artists/stardust-engine/band/tyler-wright" class="text-decoration-none">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/tyler.jpg" class="img-fluid rounded-circle border border-2 border-secondary mb-2" alt="Tyler">
                        <h6 class="text-white small fw-bold text-uppercase">Tyler</h6>
                        <span class="d-block x-small text-muted">Logistics</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>