<?php
// pages/contact.php
// The Global Contact Hub
// Design: Full-Screen Immersive "Glass" UI

$pageTitle = "Contact Channels | Michael Ragsdale";

// 1. Fetch Hero Images
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

// 2. Pick Random Start Image
$startImage = !empty($heroImages) 
    ? "https://assets.raggiesoft.com" . $heroImages[array_rand($heroImages)] 
    : "https://assets.raggiesoft.com/common/patterns/stars-transparent.png";
?>

<style>
    /* 1. FULL PAGE CONTAINER */
    .immersive-container {
        position: relative;
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background-color: #000;
    }

    /* 2. BACKGROUND LAYERS */
    .hero-bg-layer {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: opacity 1.5s ease-in-out;
        z-index: 0;
    }

    /* 3. GLOBAL SCRIM (Subtle Tint) */
    /* Darkens/Lightens the image slightly to ensure the Glass Cards pop */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4); /* 40% Black tint for drama */
        z-index: 1;
    }
    /* In Light Mode, we might want a lighter tint, but dark usually looks better for 'immersive' */
    
    /* 4. GLASS CARDS */
    .glass-card {
        background: rgba(255, 255, 255, 0.1); /* Very transparent white */
        backdrop-filter: blur(12px);           /* The "Frosted Glass" effect */
        -webkit-backdrop-filter: blur(12px);   /* Safari support */
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        color: #fff;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    
    .glass-card:hover {
        transform: translateY(-5px);
        border-color: rgba(255, 255, 255, 0.5);
        background: rgba(255, 255, 255, 0.15);
    }

    /* Text shadows for readability against any background */
    .text-shadow {
        text-shadow: 0 2px 4px rgba(0,0,0,0.8);
    }
    
    /* Content Wrapper */
    .content-wrapper {
        position: relative;
        z-index: 10;
        width: 100%;
        padding: 4rem 0;
    }
</style>

<div class="immersive-container">
    
    <div id="hero-bg-1" class="hero-bg-layer" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div id="hero-bg-2" class="hero-bg-layer" style="background-image: url(''); opacity: 0;"></div>
    
    <div class="hero-overlay"></div>

    <div class="content-wrapper container">
        
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-uppercase text-white text-shadow mb-3" style="font-family: 'Audiowide', cursive;">
                Signal The Architect
            </h1>
            <p class="lead text-white-50 mx-auto text-shadow" style="max-width: 700px;">
                Choose your communication channel.
            </p>
        </div>

        <div class="row g-5 justify-content-center">
            
            <div class="col-lg-5">
                <div class="card glass-card h-100 p-4 text-center rounded-4">
                    <div class="card-body">
                        <div class="mb-4 text-info">
                            <i class="fa-duotone fa-microchip-ai fa-4x drop-shadow"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 text-white">Project Inquiry</h2>
                        <p class="text-white-50 mb-4">
                            Questions about the <strong>Stardust Engine</strong> architecture, 
                            the <strong>Elara</strong> router, or the <strong>Suno/Gemini</strong> workflow?
                        </p>
                        <div class="d-grid">
                            <a href="mailto:hireme@michaelpragsdale.com?subject=RaggieSoft: Project Inquiry" class="btn btn-info btn-lg rounded-pill fw-bold text-dark">
                                <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                            </a>
                        </div>
                        <div class="mt-3 small text-white-50">
                            Direct line. No filters.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card glass-card h-100 p-4 text-center rounded-4 border-danger">
                    <div class="card-body">
                        <div class="mb-4 text-danger">
                            <i class="fa-duotone fa-briefcase fa-4x drop-shadow"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 text-white">Hiring & Careers</h2>
                        <p class="text-white-50 mb-4">
                            Recruiters looking for a <strong>Systems Architect</strong> or <strong>Full-Stack Developer</strong>.
                        </p>
                        <div class="d-grid">
                            <a href="/about/michael-ragsdale/contact" class="btn btn-danger btn-lg rounded-pill fw-bold shadow-glow">
                                <i class="fa-duotone fa-id-card-clip me-2"></i>Access Hiring Hub
                            </a>
                        </div>
                        <div class="mt-3 small text-white-50">
                            Requires pre-screening.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <p class="small text-white-50 text-shadow">
                <i class="fa-solid fa-server me-2"></i>
                <strong>System Note:</strong> The Hiring Hub provides access to Resume, Salary, and Calendar.
            </p>
        </div>

    </div>
</div>

<script>
(function() {
    const images = <?php echo json_encode($heroImages); ?>;
    const cdnBase = "https://assets.raggiesoft.com";
    const intervalTime = 8000;
    
    if (!images || images.length < 2) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return; 

    let currentIndex = Math.floor(Math.random() * images.length);
    let activeLayer = 1;

    const bg1 = document.getElementById('hero-bg-1');
    const bg2 = document.getElementById('hero-bg-2');

    function rotateImage() {
        currentIndex = (currentIndex + 1) % images.length;
        // Check if image starts with http (absolute) or / (relative)
        const imgPath = images[currentIndex];
        const fullUrl = imgPath.startsWith('http') ? imgPath : cdnBase + imgPath;
        
        const nextImageUrl = `url('${fullUrl}')`;

        if (activeLayer === 1) {
            bg2.style.backgroundImage = nextImageUrl;
            bg2.style.opacity = '1';
            bg1.style.opacity = '0';
            activeLayer = 2;
        } else {
            bg1.style.backgroundImage = nextImageUrl;
            bg1.style.opacity = '1';
            bg2.style.opacity = '0';
            activeLayer = 1;
        }
    }

    setInterval(rotateImage, intervalTime);
})();
</script>