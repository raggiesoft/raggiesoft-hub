<?php
// public/errors/404.php
// Theme: Knox / Industrial / Glitch
// Context: "Signal Lost"

// Detect if loaded directly by Nginx or via Router
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /public/errors/ to get to project root
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set Headers
    http_response_code(404);
    
    // 3. Configure Page Variables
    $pageTitle = "404 Signal Lost - The Stardust Engine";
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
            
            <!-- The Glitch Icon -->
            <div class="mb-4 position-relative d-inline-block">
                <i class="fa-duotone fa-satellite-dish fa-5x text-danger opacity-50"></i>
                <i class="fa-duotone fa-slash fa-5x text-light position-absolute top-0 start-0 opacity-75"></i>
            </div>

            <!-- The Error Code -->
            <h1 class="display-1 fw-bold text-danger text-shadow-danger mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                404
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-danger">>></span> SIGNAL LOST
            </h2>

            <!-- The Narrative Context -->
            <div class="card terminal-card p-4 border-danger text-start mb-5 mx-auto" style="max-width: 600px;">
                <div class="terminal-header text-danger">
                    <i class="fa-duotone fa-triangle-exclamation me-2"></i>
                    System Alert // Uplink Failed
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>ERROR:</strong> The requested coordinates exist outside the known chart.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        This could be a result of Axiom censorship, a corrupted navigation buffer, or the page you are looking for has simply drifted into the Weave.
                    </p>
                </div>
            </div>

            <!-- The "Safe" Options -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-outline-secondary rounded-pill px-4">
                    <i class="fa-duotone fa-radar me-2"></i>Return to Base
                </a>
                <a href="/discography" class="btn btn-danger rounded-pill px-4 shadow-glow">
                    <i class="fa-duotone fa-compact-disc me-2"></i>Access Audio Archives
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