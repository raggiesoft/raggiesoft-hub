<?php
// pages/contact.php
// The Global Contact Hub
// Filters traffic: "Fans/Devs" -> Direct Email | "Recruiters" -> The Gate

$pageTitle = "Contact Channels | Michael Ragsdale";

// 1. Fetch Hero Images
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');

// 2. Pick Random Start Image (Server-Side Fallback)
$startImage = !empty($heroImages) 
    ? "https://assets.raggiesoft.com" . $heroImages[array_rand($heroImages)] 
    : "https://assets.raggiesoft.com/common/patterns/stars-transparent.png";
?>

<style>
    /* DYNAMIC HERO STYLES */
    .hero-container {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        background-color: #f8f9fa; 
    }

    /* The Background Image Layer */
    .hero-bg-layer {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        
        /* CHANGED: 'contain' prevents cropping, 'center' keeps it in middle */
        background-size: contain; 
        background-repeat: no-repeat;
        background-position: center;
        
        /* Dark background behind the image so 'empty' space isn't jarring */
        background-color: #000; 
        
        z-index: 0;
        transition: opacity 1.5s ease-in-out;
        opacity: 1; 
    }

    /* The "Wash Out" Scrim Layer - CLEARER */
    .hero-scrim {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        /* 60% White Overlay - enough to fade the image but keep it visible */
        background-color: rgba(255, 255, 255, 0.60); 
        /* REMOVED: Blur (as requested) */
        z-index: 1;
    }

    /* The Content Layer */
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    /* Text Protection: Halo Effect */
    .hero-text-protected {
        color: #000 !important;
        /* Stronger halo since we removed the blur */
        text-shadow: 0 0 15px rgba(255, 255, 255, 0.9), 
                     0 0 5px rgba(255, 255, 255, 1);
    }

    /* Card Styles */
    .channel-card {
        background: #fff;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .channel-card {
        background: #212529;
        border-color: #495057;
    }
    .channel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .channel-icon {
        width: 80px; height: 80px;
        display: flex; align-items: center; justify-content: center;
        border-radius: 50%;
        margin-bottom: 1.5rem;
    }
</style>

<div class="hero-container py-5 text-center">
    
    <div id="hero-bg-1" class="hero-bg-layer" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div id="hero-bg-2" class="hero-bg-layer" style="background-image: url(''); opacity: 0;"></div>
    
    <div class="hero-scrim"></div>

    <div class="container py-4 hero-content">
        <h1 class="display-4 fw-bold text-uppercase mb-3 hero-text-protected" style="font-family: 'Audiowide', cursive;">
            Signal The Architect
        </h1>
        <p class="lead mx-auto fw-bold hero-text-protected" style="max-width: 700px;">
            This website is a dual-layer reality: part creative portfolio, part technical showcase.
            Please select your communication channel below.
        </p>
    </div>
</div>

<div class="container py-5" style="margin-top: -3rem; position: relative; z-index: 3;">
    <div class="row g-4 justify-content-center">
        
        <div class="col-lg-5">
            <div class="card channel-card h-100 p-4 text-center">
                <div class="card-body">
                    <div class="channel-icon bg-primary bg-opacity-10 text-primary mx-auto">
                        <i class="fa-duotone fa-microchip-ai fa-3x"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3">Project Inquiry</h2>
                    <p class="text-secondary mb-4">
                        Curious about the <strong>Stardust Engine</strong> architecture? 
                        Want to discuss the <strong>Elara</strong> router, the <strong>Suno/Gemini</strong> workflow, or just send feedback on the fiction?
                    </p>
                    <div class="alert alert-light border small text-muted mb-4">
                        <i class="fa-solid fa-comment-dots me-2"></i>
                        <strong>Best for:</strong> Developers, Musicians, and Readers.
                    </div>
                    
                    <a href="mailto:hireme@michaelpragsdale.com?subject=RaggieSoft: Project Inquiry" class="btn btn-outline-primary rounded-pill w-100 fw-bold">
                        <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card channel-card h-100 p-4 text-center border-danger">
                <div class="card-body">
                    <div class="channel-icon bg-danger bg-opacity-10 text-danger mx-auto">
                        <i class="fa-duotone fa-briefcase fa-3x"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3">Hiring & Careers</h2>
                    <p class="text-secondary mb-4">
                        Are you a recruiter looking to hire the <strong>Systems Architect</strong> who built this platform?
                    </p>
                    <div class="alert alert-danger bg-opacity-10 border-danger small text-danger mb-4">
                        <i class="fa-solid fa-shield-check me-2"></i>
                        <strong>Protocol:</strong> Requires pre-screening for Salary & Location alignment.
                    </div>
                    
                    <a href="/about/michael-ragsdale/contact" class="btn btn-danger rounded-pill w-100 fw-bold shadow-sm">
                        <i class="fa-duotone fa-id-card-clip me-2"></i>Access Hiring Hub
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center">
            <p class="small text-muted">
                <i class="fa-solid fa-server me-2"></i>
                <strong>System Note:</strong> 
                The "Hiring Hub" provides access to my Resume, Salary Requirements, and Microsoft Bookings calendar.
                Unsolicited sales emails sent to the Project channel will be discarded.
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

    // Respect user motion preferences
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return; 

    let currentIndex = Math.floor(Math.random() * images.length);
    let activeLayer = 1;

    const bg1 = document.getElementById('hero-bg-1');
    const bg2 = document.getElementById('hero-bg-2');

    function rotateImage() {
        currentIndex = (currentIndex + 1) % images.length;
        const nextImageUrl = `url('${cdnBase}${images[currentIndex]}')`;

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