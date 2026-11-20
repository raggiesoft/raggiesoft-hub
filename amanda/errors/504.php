<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/errors/504.php
 * Role: HTTP 504 Gateway Timeout Error Page ("Deep Space Network Latency")
 * Domain: https://raggiesoft.com (Nginx `error_page 504` / Timeout Handler)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * HTTP status `504 Gateway Timeout` happens when Nginx waits too long for an
 * upstream script or external API to finish responding. This page renders a
 * themed "Gateway Timeout // Deep Space Network" card so the visitor understands
 * the request timed out and can click "Re-Establish Link" (`/`).
 *
 * INPUTS & DUAL-MODE EXECUTION:
 * - `!defined('ROOT_PATH')` detects standalone Nginx execution vs. inclusion by
 *   `amanda/elara.php`, sending `http_response_code(504)` prior to HTML output.
 *
 * OUTPUT PRODUCED:
 * - Full HTML5 `504` response styled with DaisyUI 5 `.card` & `.btn` classes.
 * ============================================================================
 *
 * Stardust Engine - 504 Gateway Timeout Error Page
 * 
 * ARCHITECTURAL OVERVIEW:
 * A custom error page designed to handle HTTP 504 (Gateway Timeout) errors. 
 * It features dual-mode execution: it can be loaded independently by the web server (Nginx/Apache) 
 * or included dynamically via the application router.
 * 
 * LORE CONTEXT:
 * Themed as "Deep Space Network Latency" to fit the Stardust Engine sci-fi aesthetic.
 * 
 * LOGIC & CONSTRAINTS:
 * - Standalone Mode (`$is_standalone`): If `ROOT_PATH` is not defined, it assumes it was loaded 
 *   directly by the web server. It then defines paths, sends the 504 header, and manually 
 *   requires the global header/footer to ensure the page renders correctly outside the router.
 * - Relies on `glass-container` and `terminal-card` global CSS classes for styling.
 * 
 * File Info: public/errors/504.php
 * Theme: Knox / Industrial / Timeout
 * Context: "Gateway Timeout" / Connection Lost
 */

// Detect if loaded directly by Nginx or via Router
// If ROOT_PATH is missing, this was triggered by the server's ErrorDocument directive.
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from /amanda/errors/ to get to project root (`/www`)
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set HTTP 504 status header BEFORE any HTML output
    http_response_code(504);
    
    // 3. Configure Page Variables consumed by `includes/header.php`
    $pageTitle = "504 Gateway Timeout - The Stardust Engine";
    $pageTheme = "ad-astra"; 
    
    // 4. Load Header manually since the router didn't do it
    require_once ROOT_PATH . '/includes/header.php';
    
    // 5. Open Wrapper to match the router's standard DOM structure and `<main>` landmark
    echo '<div class="container-fluid flex-grow-1 d-flex"><div class="row flex-grow-1"><main id="main-content" class="col-12 p-0">';
}
?>

<?php /* Decorative CSS starfield background */ ?>
<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container d-flex flex-column justify-content-center min-vh-75">
    
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            
            <?php /* Hourglass icon representing request timeout */ ?>
            <div class="mb-4">
                <i class="ph-duotone ph-hourglass display-1 text-secondary opacity-75"></i>
            </div>

            <?php /* Primary `<h1>` 504 code and `<h2>` Gateway Timeout label */ ?>
            <h1 class="display-1 fw-bold text-secondary text-shadow-white mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                504
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-secondary">>></span> GATEWAY TIMEOUT
            </h2>
            
            <?php /* DaisyUI 5 `.card` explaining the timeout in consumer-friendly sci-fi prose */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm terminal-card border-secondary text-start mb-5 mx-auto w-100" style="max-width: 600px;">
<div class="card-body">

                <div class="terminal-header text-secondary">
                    <i class="ph-duotone ph-timer me-2"></i>
                    Connection Latency // Deep Space Network
                </div>
                <div class="terminal-text text-light">
                    <p class="mb-2">
                        <strong>TIMEOUT:</strong> The upstream server failed to respond within the allowed window.
                    </p>
                    <p class="mb-0 text-white-50 small">
                        The request has drifted into the void. The server is taking too long to reply. This may be due to high traffic or a stalled process in the Engine Room.
                    </p>
                </div>
            
</div>
</div>
            
            <?php /* Action link back to `/` */ ?>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-neutral btn-outline rounded-full">
                    <i  class="ph-duotone fa-rotate-right"></i>Re-Establish Link
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