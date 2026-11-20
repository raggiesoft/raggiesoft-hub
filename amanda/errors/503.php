<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/errors/503.php
 * Role: HTTP 503 Service Unavailable Error Page ("System Maintenance")
 * Domain: https://raggiesoft.com (Nginx `error_page 503` / Maintenance Mode)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * HTTP status `503 Service Unavailable` tells both human visitors and search
 * engine crawlers that the server is temporarily offline for planned upgrades
 * (so Google should NOT de-index the website!). It frames maintenance playfully
 * as "The band is currently in the studio" inside The Fortress.
 *
 * INPUTS & DUAL-MODE EXECUTION:
 * - Uses `!defined('ROOT_PATH')` to self-bootstrap `ROOT_PATH`, send
 *   `http_response_code(503)` before any HTML output, and load `header.php` +
 *   `footer.php` when Nginx serves it directly.
 *
 * OUTPUT PRODUCED:
 * - Full HTML5 `503` maintenance response using DaisyUI 5 `.card` & `.btn` classes.
 * ============================================================================
 *
 * Stardust Engine - 503 Service Unavailable Error Page
 * 
 * ARCHITECTURAL OVERVIEW:
 * A custom error page designed to handle HTTP 503 (Service Unavailable) errors, 
 * typically triggered during planned maintenance or server overloads.
 * Features dual-mode execution (standalone via web server vs router).
 * 
 * LORE CONTEXT:
 * Themed as "In The Studio" or "System Maintenance" within the Fortress.
 * 
 * LOGIC & CONSTRAINTS:
 * - Standalone Mode (`$is_standalone`): Handles manual inclusion of the header/footer 
 *   if bypassed by the main router (e.g., during actual maintenance where the router is down).
 * 
 * File Info: public/errors/503.php
 * Theme: Knox / Industrial / Maintenance
 * Context: "In The Studio" / Service Unavailable
 */

// Detect if loaded directly by Nginx or via Router
// If ROOT_PATH is missing, this was triggered by the server's ErrorDocument directive.
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /amanda/errors/ to get to project root (`/www`)
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set HTTP 503 status header BEFORE outputting any HTML
    http_response_code(503);
    
    // 3. Configure Page Variables consumed by `includes/header.php`
    $pageTitle = "503 Service Unavailable - The Stardust Engine";
    $pageTheme = "ad-astra"; 
    
    // 4. Load Header manually since the router didn't do it
    require_once ROOT_PATH . '/includes/header.php';
    
    // 5. Open Wrapper to match the router's standard DOM structure and `<main>` landmark
    echo '<div class="container-fluid flex-grow-1 d-flex"><div class="row flex-grow-1"><main id="main-content" class="col-12 p-0">';
}
?>

<?php /* Decorative CSS starfield layer */ ?>
<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container d-flex flex-column justify-content-center min-vh-75">
    
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            
            <?php /* Hard-hat icon signaling scheduled engineering maintenance */ ?>
            <div class="mb-4">
                <i class="ph-duotone ph-hard-hat display-1 text-info opacity-75"></i>
            </div>

            <?php /* Primary `<h1>` 503 status and `<h2>` System Maintenance label */ ?>
            <h1 class="display-1 fw-bold text-info text-shadow-info mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                503
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-info">>></span> SYSTEM MAINTENANCE
            </h2>
            
            <?php /* DaisyUI 5 `.card` explaining temporary studio maintenance */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm terminal-card border-info text-start mb-5 mx-auto w-100" style="max-width: 600px;">
<div class="card-body">

                <div class="terminal-header text-info">
                    <i class="ph-duotone ph-wrench me-2"></i>
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
</div>
            
            <?php /* Retry button pointing back to `/` */ ?>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-neutral btn-outline rounded-full">
                    <i  class="ph-duotone fa-rotate-right"></i>Retry Connection
                </a>
            </div>

        </div>
    </div>
</div>

<?php
// Close `<main>` and load `includes/footer.php` when running standalone:
if ($is_standalone) {
    // 6. Close Wrapper & Load Footer
    echo '</main></div></div>';
    require_once ROOT_PATH . '/includes/footer.php';
}
?>