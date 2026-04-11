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

<style>
    /* =====================================================================
       BRUTE FORCE READABILITY ARMOR
       These classes ensure the hero section text, backgrounds, and borders
       remain highly visible over the rotating background images, completely 
       ignoring any global dark/light mode CSS inversion rules.
       ===================================================================== */
    .force-text-light {
        color: #ffffff !important;
    }
    .force-text-muted {
        color: rgba(255, 255, 255, 0.75) !important;
    }
    
    /* The Dark Glass Core */
    .force-glass-bg {
        background-color: rgba(0, 0, 0, 0.65) !important;
        backdrop-filter: blur(8px) !important;
    }

    /* Brute-Forced Borders to preserve themes in any mode */
    .force-border-default { border: 1px solid rgba(255, 255, 255, 0.1) !important; }
    .force-border-info { border: 1px solid rgba(13, 202, 240, 0.4) !important; }
    .force-border-success { border: 1px solid rgba(25, 135, 84, 0.4) !important; }
    .force-border-danger { border: 1px solid rgba(220, 53, 69, 0.4) !important; }

    /* Shadow Stacking */
    .force-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0,0,0,0.9), 0px 1px 3px rgba(0,0,0,1) !important;
    }
    .force-shadow-medium {
        text-shadow: 0px 2px 8px rgba(0,0,0,0.9) !important;
    }
    
    /* Icon Brute Forcing */
    .force-icon-info { color: #0dcaf0 !important; }
    .force-icon-success { color: #198754 !important; }
    .force-icon-danger { color: #dc3545 !important; }
</style>

<div class="immersive-container hero-rotator-container" data-images="<?php echo $imagesJson; ?>">
    
    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    <div class="hero-overlay"></div>

    <div class="content-wrapper container">
        
        <div class="text-center mb-5 d-flex justify-content-center">
            <div class="force-glass-bg force-border-default p-4 rounded-4 shadow-lg">
                <h1 class="display-3 fw-bold text-uppercase force-text-light force-shadow-heavy mb-2" style="font-family: 'Audiowide', cursive;">
                    Signal The Architect
                </h1>
                <p class="lead force-text-light fw-semibold force-shadow-medium mx-auto mb-0" style="max-width: 700px;">
                    Choose your communication channel.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-lg-4">
                <div class="card force-glass-bg force-border-info h-100 p-4 text-center rounded-4 shadow-lg">
                    <div class="card-body">
                        <div class="mb-4 force-icon-info">
                            <i class="fa-duotone fa-microchip-ai fa-4x drop-shadow"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Project Inquiry</h2>
                        <p class="force-text-muted mb-4">
                            Questions about the <strong>Stardust Engine</strong> architecture, 
                            the <strong>Elara</strong> router, or the <strong>Suno/Gemini</strong> workflow?
                        </p>
                        <div class="d-grid mt-auto">
                            <a href="mailto:hireme@michaelpragsdale.com?subject=RaggieSoft: Project Inquiry" class="btn btn-info btn-lg rounded-pill fw-bold text-dark">
                                <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card force-glass-bg force-border-success h-100 p-4 text-center rounded-4 shadow-lg">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-4 force-icon-success">
                            <i class="fa-duotone fa-tower-broadcast fa-4x drop-shadow"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">DSP & Industry</h2>
                        <p class="force-text-muted mb-4">
                            For <strong>Digital Service Providers</strong> (Spotify, Apple, Amazon) and artist profile verification support.
                        </p>
                        <div class="d-grid mt-auto">
                            <a href="mailto:dsp.operations@engineroom-records.com?subject=Engine Room Records: DSP / Artist Profile Inquiry" class="btn btn-success btn-lg rounded-pill fw-bold shadow-glow force-text-light">
                                <i class="fa-solid fa-envelope me-2"></i>Contact Label
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-3 d-flex justify-content-center">
                        <div class="force-border-danger px-4 py-2 rounded-pill shadow-sm" style="background-color: rgba(220, 53, 69, 0.15) !important;">
                            <p class="small force-text-light mb-0">
                                <i class="fa-solid fa-ban me-2 force-text-danger"></i>
                                <strong>Submission Policy:</strong> Engine Room Records is a closed private label. We do not sign artists and do not accept unsolicited demos. Unsolicited audio will be deleted.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
            

            <div class="col-lg-4">
                <div class="card force-glass-bg force-border-danger h-100 p-4 text-center rounded-4 shadow-lg">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-4 force-icon-danger">
                            <i class="fa-duotone fa-briefcase fa-4x drop-shadow"></i>
                        </div>
                        <h2 class="h3 fw-bold mb-3 force-text-light">Hiring & Careers</h2>
                        <p class="force-text-muted mb-4">
                            Recruiters looking for a <strong>Systems Architect</strong> or <strong>Full-Stack Developer</strong>.
                        </p>
                        <div class="d-grid mt-auto">
                            <a href="/about/michael-ragsdale/contact" class="btn btn-danger btn-lg rounded-pill fw-bold shadow-glow force-text-light">
                                <i class="fa-duotone fa-id-card-clip me-2"></i>Access Hiring Hub
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5 d-flex justify-content-center">
            <div class="force-glass-bg force-border-default px-4 py-2 rounded-pill shadow-sm">
                <p class="small force-text-light force-shadow-medium mb-0">
                    <i class="fa-solid fa-server me-2 force-text-muted"></i>
                    <strong>System Note:</strong> The Hiring Hub provides access to Resume, Salary, and Calendar.
                </p>
            </div>
        </div>

    </div>
</div>

<script src="https://assets.raggiesoft.com/common/js/hero-image.js"></script>