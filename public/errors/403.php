<?php
// public/errors/403.php
// Theme: Knox / Industrial / Axiom
// Context: "Access Denied" / Security Breach

// Detect if loaded directly by Nginx or via Router
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /public/errors/ to get to project root
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set Headers
    http_response_code(403);
    
    // 3. Configure Page Variables
    $pageTitle = "403 Access Denied - The Stardust Engine";
    $pageTheme = "ad-astra"; 
    
    // 4. Load Header
    require_once ROOT_PATH . '/includes/header.php';
    
    // 5. Open Wrapper
    echo '<div class="container-fluid flex-grow-1 d-flex"><div class="row flex-grow-1"><main id="main-content" class="col-12 p-0">';
}
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container d-flex flex-column justify-content-center min-vh-75">
    
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            
            <div class="mb-4">
                <i class="fa-duotone fa-shield-xmark display-1 text-warning opacity-75"></i>
            </div>

            <h1 class="display-1 fw-bold text-warning text-shadow-warning mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                403
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-warning">>></span> AXIOM SECURITY PROTOCOL
            </h2>
            
            <div class="card terminal-card p-4 border-warning text-start mb-5 mx-auto" style="max-width: 600px;">
                <div class="terminal-header text-warning">
                    <i class="fa-duotone fa-fingerprint me-2"></i>
                    Security Violation // Port Telsus Grid
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>ACCESS RESTRICTED:</strong> You do not have the required clearance level to view this archive.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        Your IP address has been flagged by the <strong>Port Telsus Compliance Division</strong>. This incident has been added to your permanent record. If you are authorized, present your identification token at the nearest checkpoint immediately.
                    </p>
                </div>
            </div>
            
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-outline-light rounded-pill px-4">
                    <i class="fa-duotone fa-house me-2"></i>Return to Safety
                </a>
                <a href="/contact" class="btn btn-warning rounded-pill px-4 shadow-glow text-dark">
                    <i class="fa-duotone fa-id-card me-2"></i>Request Clearance
                </a>
            </div>

        </div>
    </div>
</div>

<?php
if ($is_standalone) {
    // 6. Close Wrapper & Load Footer
    echo '</main></div></div>';
    require_once ROOT_PATH . '/includes/footer.php';
}
?>