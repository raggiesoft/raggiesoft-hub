<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/errors/404.php
 * Role: HTTP 404 Not Found Error Page ("Signal Lost" — Amanda Edge Error View)
 * Domain: https://raggiesoft.com (Nginx `error_page 404` / Standalone Handler)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * When a visitor requests a missing static asset or Nginx triggers its server-level
 * 404 handler directly inside `/amanda/errors/404.php` (as opposed to Elara's
 * default view `/errors/404.php`), this template renders a sci-fi "Signal Lost"
 * screen with an HTTP `404` status code and safe navigation links home.
 *
 * INPUTS & DUAL-MODE EXECUTION:
 * - Uses `!defined('ROOT_PATH')` to check whether `amanda/elara.php` already
 *   bootstrapped the page. When loaded standalone by Nginx, it defines `ROOT_PATH`,
 *   sets `http_response_code(404)` BEFORE any HTML output, and loads `header.php`
 *   and `footer.php`.
 *
 * OUTPUT PRODUCED:
 * - Full HTML5 `404 Not Found` page using DaisyUI 5 `.card` & `.btn` utilities
 *   and layered Phosphor Duotone icons (`ph-broadcast` + `ph-prohibit`).
 * ============================================================================
 *
 * ARCHITECTURE: 404.php
 * 
 * Context: Amanda/Stardust Engine - Error Handling.
 * Narrative/Purpose: A heavily themed 404 Error page designed to immerse the user in the "Project: KNOX" / 
 * "Stardust Engine" universe when a route is not found. It portrays the error as a "Signal Lost" event 
 * within the narrative's sci-fi setting.
 * 
 * Mechanics:
 * - Detects if it's being loaded standalone by Nginx or via the PHP router (`$is_standalone`).
 * - Dynamically defines `ROOT_PATH` and bootstraps the standard header/footer if loaded independently.
 * - Utilizes CSS terminal themes and glitch icons to reinforce the narrative aesthetic.
 */
// public/errors/404.php
// Theme: Knox / Industrial / Glitch
// Context: "Signal Lost"

// Detect if loaded directly by Nginx (`true`) or included via `amanda/elara.php` (`false`)
$is_standalone = !defined('ROOT_PATH');

if ($is_standalone) {
    // Fix Path: Resolve `/www` root two directories above `/amanda/errors/`
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
    
    // 2. Set HTTP 404 status header BEFORE outputting any HTML bytes
    http_response_code(404);
    
    // 3. Configure Page Variables read by `includes/header.php`
    $pageTitle = "404 Signal Lost - The Stardust Engine";
    $pageTheme = "ad-astra"; 
    
    // 4. Load Global Header (`<!doctype html>`, `<head>`, network bar, navbar)
    require_once ROOT_PATH . '/includes/header.php';
    
    // 5. Open Flexbox Layout Wrapper & `<main id="main-content">` accessibility landmark
    echo '<div class="container-fluid flex-grow-1 d-flex"><div class="row flex-grow-1"><main id="main-content" class="col-12 p-0">';
}
?>

<?php /* Decorative CSS starfield background */ ?>
<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<!-- START: 404 Error Main Container -->
<div class="container py-5 glass-container d-flex flex-column justify-content-center min-vh-75">
    
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            
            <?php /* Composite icon stack: `position-absolute` overlays `ph-prohibit` on top of `ph-broadcast` */ ?>
            <!-- The Glitch Icon -->
            <div class="mb-4 position-relative d-inline-block">
                <i class="ph-duotone ph-broadcast ph-5x text-danger opacity-50"></i>
                <i class="ph-duotone ph-prohibit ph-5x text-light position-absolute top-0 start-0 opacity-75"></i>
            </div>

            <?php /* Semantic `<h1>` + `<h2>` heading hierarchy announcing the 404 status */ ?>
            <!-- The Error Code -->
            <h1 class="display-1 fw-bold text-danger text-shadow-danger mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">
                404
            </h1>
            <h2 class="h3 text-uppercase text-light font-monospace mb-4">
                <span class="text-danger">>></span> SIGNAL LOST
            </h2>

            <?php /* DaisyUI 5 `.card` explaining the missing URL in-universe */ ?>
            <!-- START: 404 Terminal Narrative Context -->
            <!-- The Narrative Context -->
            <div class="card bg-base-200 border border-base-300 shadow-sm terminal-card border-danger text-start mb-5 mx-auto w-100" style="max-width: 600px;">
<div class="card-body">

                <div class="terminal-header text-danger">
                    <i class="ph-duotone ph-warning me-2"></i>
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
</div>

            <?php /* Recovery buttons guiding visitors back to `/` or the Stardust discography (301-routed via Elara) */ ?>
            <!-- START: 404 Safe Escape Actions -->
            <!-- The "Safe" Options -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/" class="btn btn-neutral btn-outline rounded-full">
                    <i  class="ph-duotone ph-broadcast"></i>Return to Base
                </a>
                <a href="/engine-room/artists/stardust-engine/discography" class="btn btn-error rounded-full shadow-glow">
                    <i  class="ph-duotone ph-disc"></i>Access Audio Archives
                </a>
            </div>

        </div>
    </div>

</div>

<?php
// Close standalone layout tags and inject the global footer when invoked directly by Nginx:
if ($is_standalone) {
    // 6. Close Wrapper & Load Footer
    echo '</main></div></div>';
    require_once ROOT_PATH . '/includes/footer.php';
}
?>