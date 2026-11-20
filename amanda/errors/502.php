<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/errors/502.php
 * Role: HTTP 502 Bad Gateway Error Page ("Relay Station Alpha Uplink Failed")
 * Domain: https://raggiesoft.com (Nginx `error_page 502` / Elara Error View)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * HTTP status `502 Bad Gateway` happens when a reverse proxy (like Nginx or
 * Cloudflare) talks to an upstream application process and receives an invalid
 * or broken response. This file displays a themed "Bad Gateway // Relay Station
 * Alpha" card with retry and contact buttons.
 *
 * INPUTS & DUAL-MODE EXECUTION:
 * - Checks `!defined('ROOT_PATH')` so it works both when invoked directly by
 *   Nginx's `error_page` directive and when included inside `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Full HTML5 `502` error response with DaisyUI 5 `.card` & `.btn` classes.
 * ============================================================================
 *
 * Stardust Engine - 502 Bad Gateway Error Page
 * 
 * ARCHITECTURAL OVERVIEW:
 * A custom error page designed to handle HTTP 502 (Bad Gateway) errors.
 * Features dual-mode execution for both standalone server loads and internal routing.
 * 
 * LORE CONTEXT:
 * Themed as "Network Glitch" or "Uplink Failed" for the Stardust universe.
 * 
 * LOGIC & CONSTRAINTS:
 * - Standalone Mode (`$is_standalone`): Ensures the header and footer are loaded 
 *   even if the main application router has failed to process the request.
 * 
 * File Info: public/errors/502.php
 * Theme: Knox / Industrial / Glitch
 * Context: "Bad Gateway" / Upstream Error
 */

// Detect if loaded directly by Nginx or via Router
// If ROOT_PATH is missing, this was triggered by the server's ErrorDocument directive.
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /amanda/errors/ to get to project root (`/www`)
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set HTTP 502 status header BEFORE any HTML output is sent
    http_response_code(502);
    
    // 3. Configure Page Variables consumed by `includes/header.php`
    $pageTitle = "502 Bad Gateway - The Stardust Engine";
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
            
            <?php /* Broadcast tower icon in amber warning color */ ?>
            <div class="mb-4">
                <i class="ph-duotone ph-broadcast display-1 text-warning opacity-75"></i>
            </div>

            <?php /* Primary `<h1>` 502 heading and `<h2>` subtitle */ ?>
            <h1 class="display-1 fw-bold text-warning text-shadow-warning mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                502
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-warning">>></span> BAD GATEWAY
            </h2>
            
            <?php /* DaisyUI 5 `.card` explaining the upstream gateway glitch in plain consumer language */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm terminal-card border-warning text-start mb-5 mx-auto w-100" style="max-width: 600px;">
<div class="card-body">

                <div class="terminal-header text-warning">
                    <i class="ph-duotone ph-warning me-2"></i>
                    Network Error // Relay Station Alpha
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>UPLINK FAILED:</strong> The main server received an invalid response from the upstream relay.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        This usually indicates a temporary glitch in the sub-space network. The signal is garbled. Please try refreshing your connection.
                    </p>
                </div>
            
</div>
</div>
            
            <?php /* Action buttons to retry `/` or contact `/contact` */ ?>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-neutral btn-outline rounded-full">
                    <i  class="ph-duotone fa-rotate-right"></i>Retry Uplink
                </a>
                <a href="/contact" class="btn btn-warning rounded-full shadow-glow">
                    <i  class="ph-duotone ph-envelope"></i>Contact Flight Control
                </a>
            </div>

        </div>
    </div>
</div>

<?php
// Close `<main>` and load `includes/footer.php` when running in standalone mode:
if ($is_standalone) {
    // 6. Close Wrapper & Load Footer
    echo '</main></div></div>';
    require_once ROOT_PATH . '/includes/footer.php';
}
?>