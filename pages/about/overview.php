<?php
// pages/about/overview.php
// "Mission Profile" - The Central Hub & Narrative Overview
// Merged: User's Hero Rotator + Directory Structure

$pageTitle = "Mission Profile - RaggieSoft";

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
    
    <div class="hero-overlay" style="background: rgba(0,0,0,0.7);"></div>

    <div class="content-wrapper container py-5">
        
        <div class="text-center mb-5">
            <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                alt="RaggieSoft" 
                class="mb-3 opacity-75 logo-white-glow"
                style="width: 80px; height: 80px; object-fit: contain;">
            <h1 class="display-3 fw-bold text-uppercase text-white text-shadow mb-3" style="font-family: 'Audiowide', cursive;">
                Mission Profile
            </h1>
            <p class="lead text-white-50 mx-auto text-shadow" style="max-width: 800px;">
                The central junction where <strong class="text-info">Systems Architecture</strong> meets <strong class="text-warning">Creative Narrative</strong>.
            </p>
            <div class="small text-uppercase fw-bold text-white-50 opacity-75 letter-spacing-2 mt-2">
                Norfolk, VA &bull; Est. 2008 &bull; Status: Online
            </div>
        </div>

        <div class="row g-5 justify-content-center mb-5">
            
            <div class="col-lg-5">
                <div class="card glass-card h-100 border-secondary">
                    <div class="card-header bg-transparent border-secondary text-warning fw-bold text-uppercase py-3">
                        <i class="fa-duotone fa-history me-2"></i> Layer 1: The Origin
                    </div>
                    <div class="card-body">
                        <div class="small text-white-50">
                            <div class="d-flex mb-2">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">1997</span>
                                <span>I first started learning HTML.</span>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">1998</span>
                                <span>I first started learning Visual Basic 6.0.</span>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">2007</span>
                                <span>I first started writing narrative fiction.</span>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">2008</span>
                                <span><strong class="text-white">RaggieSoft.com</strong> is born.</span>
                            </div>
                            <div class="d-flex mb-2">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">2022</span>
                                <span>I started to get serious about full-stack web development.</span>
                            </div>
                            <div class="d-flex">
                                <span class="fw-bold text-warning me-3" style="min-width: 40px;">2025</span>
                                <span>Migrated to DigitalOcean cloud infrastructure.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card glass-card h-100 border-primary">
                    <div class="card-header bg-transparent border-primary text-primary fw-bold text-uppercase py-3">
                        <i class="fa-duotone fa-code-branch me-2"></i> Layer 2: The Engine
                    </div>
                    <div class="card-body">
                        <p class="small text-white-50">
                            A portfolio of Full-Stack Architecture and Generative AI integration.
                            This website serves as the production environment for testing new concepts in UX.
                        </p>
                        <hr class="border-primary opacity-50">
                        <ul class="list-unstyled small text-white-50 mb-0">
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>PHP 8.4 MVC Router (Elara)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>Suno AI (Audio Generation)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>Gemini (Lore & Code Assist)</li>
                            <li class="mb-1"><i class="fa-duotone fa-check text-primary me-2"></i>DigitalOcean (Cloud Hosting)</li>
                            <li><i class="fa-duotone fa-check text-primary me-2"></i>Cloudflare Security</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h6 class="text-uppercase text-white-50 fw-bold letter-spacing-2 border-bottom border-secondary pb-2 mb-4 d-inline-block">
                    <i class="fa-duotone fa-network-wired me-2"></i>Layer 3: Network Entities
                </h6>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            
            <div class="col-lg-3 col-md-6">
                <a href="/about/family" class="card glass-card h-100 text-decoration-none hover-lift border-info transition-all">
                    <div class="card-body text-center">
                        <img src="https://assets.raggiesoft.com/family/images/logos/logo-family.png" 
                             class="rounded-circle mb-3 border border-info shadow-sm" width="60" height="60" alt="Family">
                        <h5 class="fw-bold text-white mb-2">The Family</h5>
                        <p class="small text-white-50 mb-0">Personified DevOps & Emotional Support Constructs.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="/about/stardust-engine" class="card glass-card h-100 text-decoration-none hover-lift border-primary transition-all">
                    <div class="card-body text-center">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/logo/stardust-engine-logo.png" 
                             class="mb-3" width="60" height="60" style="object-fit: contain;" alt="Stardust">
                        <h5 class="fw-bold text-white mb-2">Stardust Engine</h5>
                        <p class="small text-white-50 mb-0">80s Synth-Rock Narrative Universe.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="/about/aethel" class="card glass-card h-100 text-decoration-none hover-lift border-warning transition-all">
                    <div class="card-body text-center">
                        <img src="https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png" 
                             class="mb-3" width="60" height="60" style="object-fit: contain;" alt="Aethel">
                        <h5 class="fw-bold text-warning mb-2">Aethel Saga</h5>
                        <p class="small text-white-50 mb-0">High Fantasy Adventure Series.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="/about/engine-room" class="card glass-card h-100 text-decoration-none hover-lift border-danger transition-all">
                    <div class="card-body text-center">
                        <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.jpg" 
                             class="rounded-circle mb-3 border border-danger shadow-sm" width="60" height="60" alt="Engine Room">
                        <h5 class="fw-bold text-danger mb-2">Engine Room</h5>
                        <p class="small text-white-50 mb-0">Fictional Industrial Record Label.</p>
                    </div>
                </a>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card glass-card border-secondary">
                    <div class="card-body p-4 d-flex flex-column flex-md-row justify-content-around align-items-center text-center">
                        
                        <div class="mb-3 mb-md-0">
                            <h6 class="text-white fw-bold mb-1"><i class="fa-duotone fa-scale-balanced me-2"></i>Governance</h6>
                            <span class="small text-white-50">Compliance & Legal</span>
                        </div>

                        <div class="d-flex gap-3 gap-md-4">
                            <a href="/about/license" class="text-white-50 text-decoration-none hover-text-white transition-all">
                                <i class="fa-solid fa-file-certificate me-1"></i> Licenses
                            </a>
                            <a href="/about/privacy" class="text-white-50 text-decoration-none hover-text-white transition-all">
                                <i class="fa-solid fa-user-shield me-1"></i> Privacy
                            </a>
                            <a href="/about/terms" class="text-white-50 text-decoration-none hover-text-white transition-all">
                                <i class="fa-solid fa-gavel me-1"></i> Terms
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://assets.raggiesoft.com/common/js/hero-image.js"></script>

<style>
    /* CRITICAL: Immersive Container Logic 
       This positions the background images absolutely behind the content.
    */
    .immersive-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        background-color: #000; /* Fallback */
    }

    .hero-bg-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* Smooth fade transition handled here */
        transition: opacity 2s ease-in-out; 
        z-index: 0;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        /* Gradient fade for readability */
        background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.8));
    }

    .content-wrapper {
        position: relative;
        z-index: 2; /* Ensures content sits above the image */
    }

    /* Glass Cards */
    .glass-card {
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
    }
    
    .hover-lift:hover { 
        transform: translateY(-5px); 
        background: rgba(0, 0, 0, 0.8);
    }
    
    .hover-text-white:hover { color: #fff !important; }
    .transition-all { transition: all 0.3s ease; }
    
    .text-shadow { text-shadow: 2px 2px 4px rgba(0,0,0,0.8); }
</style>