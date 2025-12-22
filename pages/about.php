<?php
// pages/about.php
// "Mission Profile" - Explaining the Meta & The Lore
// Updated to use the shared Immersive Hero template

$pageTitle = "Mission Profile - The Stardust Engine";

// 1. Fetch Hero Images for the rotator
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

// 2. Pick Random Start Image
$startImage = !empty($heroImages) 
    ? "https://assets.raggiesoft.com" . $heroImages[array_rand($heroImages)] 
    : "https://assets.raggiesoft.com/common/patterns/stars-transparent.png";

// 3. Prepare JSON for JS
$imagesJson = htmlspecialchars(json_encode($heroImages), ENT_QUOTES, 'UTF-8');
?>

<div class="immersive-container hero-rotator-container" data-images="<?php echo $imagesJson; ?>">
    
    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    
    <div class="hero-overlay"></div>

    <div class="content-wrapper container">
        
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-uppercase text-white text-shadow mb-3" style="font-family: 'Audiowide', cursive;">
                Mission Profile
            </h1>
            <p class="lead text-white-50 mx-auto text-shadow" style="max-width: 800px;">
                <strong class="text-info">The Stardust Engine</strong> is a "Dual-Layer" reality: 
                part technical experiment, part narrative art project.
            </p>
        </div>

        <div class="row g-5 justify-content-center">
            
            <div class="col-lg-5">
                <div class="card glass-card h-100 border-secondary">
                    <div class="card-header bg-transparent border-secondary text-warning fw-bold text-uppercase py-3">
                        <i class="fa-duotone fa-planet-ringed me-2"></i> Layer 1: The Universe
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold text-white mb-3">The Narrative</h3>
                        <p class="small text-white-50">
                            A fully realized fictional timeline spanning 1987-2017. 
                            It documents the rise, fall, and rebirth of a rock band that never existed,
                            fighting a corporate music industry that was all too real.
                        </p>
                        <hr class="border-secondary opacity-50">
                        <ul class="list-unstyled small text-white-50 mb-0">
                            <li class="mb-1"><i class="fa-duotone fa-check text-warning me-2"></i>Lore-driven Discography</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-warning me-2"></i>Legal Thriller Subplot</li>
                            <li><i class="fa-duotone fa-check text-warning me-2"></i>Character Wikis</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card glass-card h-100 border-primary">
                    <div class="card-header bg-transparent border-primary text-primary fw-bold text-uppercase py-3">
                        <i class="fa-duotone fa-code-branch me-2"></i> Layer 2: The Engine
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold text-white mb-3">The Technology</h3>
                        <p class="small text-white-50">
                            A portfolio of Full-Stack Architecture and Generative AI integration.
                            This website serves as the production environment for testing new concepts in UX and Content Delivery.
                        </p>
                        <hr class="border-primary opacity-50">
                        <ul class="list-unstyled small text-white-50 mb-0">
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>PHP 8.4 MVC Router (Elara)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>Suno AI (Audio Generation)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>Gemini (Lore & Code Assist)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>DigitalOcean (Cloud Hosting)</li>
                            <li><i class="fa-duotone fa-check text-primary me-2"></i>Cloudflare</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row g-4 mt-4 justify-content-center">
            <div class="col-auto">
                <div class="badge rounded-pill bg-black bg-opacity-50 border border-secondary p-3 d-flex align-items-center">
                    <i class="fa-duotone fa-user-visor text-white me-2"></i>
                    <span class="text-white-50 small me-1">Architect:</span>
                    <span class="fw-bold text-white">Michael Ragsdale</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="badge rounded-pill bg-black bg-opacity-50 border border-secondary p-3 d-flex align-items-center">
                    <i class="fa-duotone fa-sparkles text-info me-2"></i>
                    <span class="text-white-50 small me-1">Co-Pilot:</span>
                    <span class="fw-bold text-info">Gemini</span>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://assets.raggiesoft.com/common/js/hero-image.js"></script>