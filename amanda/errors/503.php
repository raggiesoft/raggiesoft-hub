<?php
// public/errors/503.php
// Theme: Knox / Industrial / Maintenance
// Context: "In The Studio" / Service Unavailable

// Detect if loaded directly by Nginx or via Router
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /public/errors/ to get to project root
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set Headers
    http_response_code(503);
    
    // 3. Configure Page Variables
    $pageTitle = "503 Service Unavailable - The Stardust Engine";
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
                <i class="fa-duotone fa-helmet-safety display-1 text-info opacity-75"></i>
            </div>

            <h1 class="display-1 fw-bold text-info text-shadow-info mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                503
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-info">>></span> SYSTEM MAINTENANCE
            </h2>
            
            <div class="card terminal-card p-4 border-info text-start mb-5 mx-auto" style="max-width: 600px;">
                <div class="terminal-header text-info">
                    <i class="fa-duotone fa-wrench me-2"></i>
                    Engineering Log // The Fortress
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>STATUS:</strong> The band is currently in the studio. The uplink has been temporarily suspended for system upgrades.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        Our engineers are calibrating the main transmitter. We will be back on the air shortly. Please standby.
                    </p>
                </div>
            </div>
            
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-outline-light rounded-pill px-4">
                    <i class="fa-duotone fa-rotate-right me-2"></i>Retry Connection
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