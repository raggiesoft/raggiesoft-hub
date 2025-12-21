<?php
// pages/contact.php
// The Global Contact Hub
// Updated to use the shared Immersive Hero template

$pageTitle = "Contact Channels | Michael Ragsdale";

require_once ROOT_PATH . '/includes/utils/json-reader.php';
$heroImages = fetch_asset_json('common/json/hero-images.json');
$startImage = !empty($heroImages) 
    ? "https://assets.raggiesoft.com" . $heroImages[array_rand($heroImages)] 
    : "https://assets.raggiesoft.com/common/patterns/stars-transparent.png";
$imagesJson = htmlspecialchars(json_encode($heroImages), ENT_QUOTES, 'UTF-8');
?>

<div class="immersive-container hero-rotator-container" data-images="<?php echo $imagesJson; ?>">
    
    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
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

<script src="https://assets.raggiesoft.com/common/js/hero-image.js"></script>