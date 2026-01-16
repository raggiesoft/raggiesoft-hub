<?php
// public/errors/500.php
// Theme: Knox / Industrial / Critical Failure
// Context: "Engine Stall" / Server Error

// Detect if loaded directly by Nginx or via Router
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /public/errors/ to get to project root
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set Headers
    http_response_code(500);
    
    // 3. Configure Page Variables
    $pageTitle = "500 System Failure - The Stardust Engine";
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
                <i class="fa-duotone fa-car-battery display-1 text-danger opacity-75"></i>
            </div>

            <h1 class="display-1 fw-bold text-danger text-shadow-danger mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                500
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-danger">>></span> CRITICAL ENGINE STALL
            </h2>
            
            <div class="card terminal-card p-4 border-danger text-start mb-5 mx-auto" style="max-width: 600px;">
                <div class="terminal-header text-danger">
                    <i class="fa-duotone fa-triangle-exclamation me-2"></i>
                    System Failure // Main Reactor Core
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>FATAL EXCEPTION:</strong> We are experiencing a catastrophic feedback loop in the server architecture.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        Our engineers have been dispatched to the crash site. Please try refreshing the page in a few moments. We may have just blown a fuse during the guitar solo.
                    </p>
                </div>
            </div>
            
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-outline-secondary rounded-pill px-4">
                    <i class="fa-duotone fa-power-off me-2"></i>Manual Restart
                </a>
                <a href="/contact" class="btn btn-danger rounded-pill px-4 shadow-glow">
                    <i class="fa-duotone fa-bug me-2"></i>Report Malfunction
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