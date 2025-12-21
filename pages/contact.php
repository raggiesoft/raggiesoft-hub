<?php
// pages/contact.php
// The Global Contact Hub
// Filters traffic: "Fans/Devs" -> Direct Email | "Recruiters" -> The Gate

$pageTitle = "Contact Channels | Michael Ragsdale";
?>

<style>
    /* SHARED ARCHITECT THEME */
    .contact-hero {
        background: linear-gradient(135deg, #0d1117 0%, #161b22 100%);
        color: #fff;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
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

<div class="contact-hero py-5 text-center">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-uppercase mb-3" style="font-family: 'Audiowide', cursive;">
            Signal The Architect
        </h1>
        <p class="lead text-white-50 mx-auto" style="max-width: 700px;">
            This website is a dual-layer reality: part creative portfolio, part technical showcase.
            Please select your communication channel below.
        </p>
    </div>
</div>

<div class="container py-5" style="margin-top: -3rem;">
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
                Unsolicited sales or marketing emails sent to the Project channel will be discarded.
            </p>
        </div>
    </div>

</div>