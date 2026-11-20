<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /errors/404.php
 * Role: Default Routed 404 View Partial (Fallback `view` in `data/settings.json`)
 * Domain: https://raggiesoft.com (Rendered inside `amanda/elara.php` `<main>`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * In `/data/settings.json`, `"defaults": { "view": "errors/404" }` tells the
 * Elara router (`amanda/elara.php`) to load THIS partial whenever a visitor
 * types a URL on `raggiesoft.com` that matches neither a JSON route manifest
 * nor an auto-discovered file in `/pages/`.
 *
 * INPUTS & COMPONENT PROPS:
 * - Unlike `/amanda/errors/404.php` (which can run standalone), this file is
 *   purely a `<main>` view partial: `amanda/elara.php` has ALREADY called
 *   `http_response_code(404)` and rendered `includes/header.php` before including
 *   this file, and will render `includes/footer.php` immediately afterward.
 * - Demonstrates PHP's "Component Props via Scoped Array" pattern: it populates
 *   an associative array `$props` and calls `include .../button.php` to render
 *   a reusable DaisyUI 5 + Phosphor Duotone "Return Home" button.
 *
 * OUTPUT PRODUCED:
 * - Centered HTML fragment (`<h1>404</h1>`, description, and `button.php` CTA)
 *   injected into `<main id="main-content">`.
 * ============================================================================
 *
 * RaggieSoft Hub - 404 Not Found Page
 * 
 * ARCHITECTURAL OVERVIEW:
 * A simple 404 error page displayed when a route cannot be matched. 
 * This file is likely rendered within the context of a broader layout/router, 
 * as it does not include `header.php` or `footer.php` directly.
 * 
 * LOGIC & CONSTRAINTS:
 * - Uses Tailwind CSS utility classes (`max-w-3xl`, `text-5xl`, etc.) for styling.
 * - Dynamically includes the central `button.php` component for the "Return Home" action.
 * 
 * File Info: errors/404.php
 */
?>
<?php /* Centered container holding the primary `<h1>` 404 message and recovery CTA */ ?>
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
    <h1 class="text-5xl font-extrabold text-heading">404</h1>
    <p class="mt-4 text-2xl font-semibold text-body">
      Page Not Found
    </p>
    <p class="mt-2 text-lg text-body-muted">
      The page you were looking for could not be found.
    </p>
    <div class="mt-8">
      <?php
        // --- Use the button component ---
        // HOW PHP COMPONENT INCLUSION WORKS:
        // In PHP, `include` shares the current variable scope with the included file.
        // By setting `$props` right before `include .../button.php`, `button.php`
        // reads `$props['href']`, `$props['text']`, `$props['icon']`, etc. just like
        // props passed to a React or Svelte component!
        // `__DIR__` always points to `/www/errors`, so `/../includes/components/button.php`
        // resolves reliably to `/www/includes/components/button.php`.
        $props = [
          'href' => '/',
          'text' => 'Return Home',
          'variant' => 'pact',
          'icon' => 'ph-duotone ph-house',
          'iconPosition' => 'before',
          'size' => 'large'
        ];
        include __DIR__ . '/../includes/components/button.php';
      ?>
    </div>
</div>

