<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/errors/403.php
 * Role: HTTP 403 Forbidden Error Page ("Axiom Security Protocol")
 * Domain: https://raggiesoft.com (Nginx `error_page 403` / Elara Error View)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Whenever Nginx blocks access to a restricted directory or protected server
 * resource on `raggiesoft.com`, it serves HTTP status `403 Forbidden`. Instead
 * of showing an ugly white server error screen, this PHP template renders an
 * in-universe sci-fi security alert ("Axiom Security Protocol // Port Telsus Grid")
 * with clear navigation buttons back to the homepage (`/`) or `/contact`.
 *
 * INPUTS & DUAL-MODE EXECUTION:
 * - Checks `!defined('ROOT_PATH')` to detect HOW it was invoked:
 *   1. Standalone Mode (`$is_standalone === true`): Invoked directly by Nginx's
 *      `error_page 403 /amanda/errors/403.php` rule, bypassing `amanda/elara.php`.
 *      In this case, the file defines `ROOT_PATH`, sends `http_response_code(403)`,
 *      and manually wraps itself in `includes/header.php` + `<main id="main-content">`
 *      + `includes/footer.php`.
 *   2. Routed Mode (`$is_standalone === false`): Included inside `amanda/elara.php`,
 *      where `ROOT_PATH`, the header, `<main>`, and the footer are already handled.
 *
 * OUTPUT PRODUCED:
 * - An HTTP `403` HTML5 response styled with DaisyUI 5 `.card` / `.btn` classes,
 *   Phosphor Duotone icons (`ph-duotone`), and WCAG-safe escape links.
 * ============================================================================
 *
 * ARCHITECTURE: 403.php
 * 
 * Context: Amanda/Stardust Engine - Error Handling.
 * Narrative/Purpose: A themed 403 Forbidden page portraying an "Access Denied" event in the Knox universe. 
 * The user is treated as having violated an "Axiom Security Protocol", blending technical error handling 
 * with immersive storytelling.
 * 
 * Mechanics:
 * - Functions similarly to 404.php, detecting standalone vs routed invocation to bootstrap the UI.
 * - Uses specific warning/amber styling typical of secure or restricted systems.
 */
// public/errors/403.php
// Theme: Knox / Industrial / Axiom
// Context: "Access Denied" / Security Breach

// Detect if loaded directly by Nginx or via Router:
// `defined('ROOT_PATH')` returns `true` ONLY when `amanda/elara.php` ran first.
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Go up 2 levels from `/amanda/errors/` (`__DIR__`) to reach `/www`
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set Headers: Must be called BEFORE `require_once header.php` outputs HTML!
    http_response_code(403);
    
    // 3. Configure Page Variables consumed by `includes/header.php`
    $pageTitle = "403 Access Denied - The Stardust Engine";
    $pageTheme = "ad-astra"; 
    
    // 4. Load Global `<head>` and Top Navigation Bar
    require_once ROOT_PATH . '/includes/header.php';
    
    // 5. Open Wrapper matching `elara.php`'s flex layout and `<main id="main-content">` landmark
    echo '<div class="container-fluid flex-grow-1 d-flex"><div class="row flex-grow-1"><main id="main-content" class="col-12 p-0">';
}
?>

<?php /* Decorative animated CSS starfield background layer */ ?>
<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<?php /* Centered Flexbox Hero Container (`min-vh-75` keeps the error card vertically centered) */ ?>
<!-- START: 403 Error Main Container -->
<div class="container py-5 glass-container d-flex flex-column justify-content-center min-vh-75">
    
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            
            <?php /* Decorative Phosphor Duotone shield-slash icon reinforcing restricted access */ ?>
            <div class="mb-4">
                <i class="ph-duotone ph-shield-slash display-1 text-warning opacity-75"></i>
            </div>

            <?php /* Primary `<h1>` heading announcing HTTP 403 + `<h2>` subtitle */ ?>
            <h1 class="display-1 fw-bold text-warning text-shadow-warning mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                403
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-warning">>></span> AXIOM SECURITY PROTOCOL
            </h2>
            
            <?php /* DaisyUI 5 `.card` styled as an in-universe Port Telsus security terminal */ ?>
            <!-- START: 403 Terminal Narrative Context -->
            <div class="card bg-base-200 border border-base-300 shadow-sm terminal-card border-warning text-start mb-5 mx-auto w-100" style="max-width: 600px;">
<div class="card-body">

                <div class="terminal-header text-warning">
                    <i class="ph-duotone ph-fingerprint me-2"></i>
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
</div>
            
            <?php /* Actionable recovery links styled with DaisyUI `.btn` utility classes */ ?>
            <!-- START: 403 Safe Escape Actions -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-neutral btn-outline rounded-full">
                    <i  class="ph-duotone ph-house"></i>Return to Safety
                </a>
                <a href="/contact" class="btn btn-warning rounded-full shadow-glow">
                    <i  class="ph-duotone ph-identification-card"></i>Request Clearance
                </a>
            </div>

        </div>
    </div>
</div>

<?php
// If Nginx invoked this error page directly without `elara.php`, close `<main>`
// and append the global master footer (`includes/footer.php`) to complete valid HTML5.
if ($is_standalone) {
    // 6. Close Wrapper & Load Footer
    echo '</main></div></div>';
    require_once ROOT_PATH . '/includes/footer.php';
}
?>