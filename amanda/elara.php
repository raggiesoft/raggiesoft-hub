<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /amanda/elara.php
 * Role: Protected Single Front-Controller Router ("Elara Router v5.7")
 * Domain: https://raggiesoft.com (RaggieSoft Hub — PHP 8.5 SSR)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * In a traditional beginner PHP website, visiting `https://example.com/contact`
 * might look for a literal `/contact.php` file in the web root, or route
 * through `/index.php`. On `raggiesoft.com`, Nginx uses a "Front Controller"
 * pattern hidden inside `/amanda/elara.php` (`try_files $uri $uri/ /amanda/elara.php?$query_string`).
 * Every dynamic page request on `raggiesoft.com` enters through THIS single PHP
 * file first!
 *
 * INPUTS THAT FEED INTO THIS ROUTER:
 * 1. PHP Superglobals from Nginx:
 *    - `$_SERVER['REQUEST_URI']`: The URL path + query string the visitor asked
 *      for (e.g., `/about/in-memoriam` or `/apps/cipher?mode=stealth`).
 *    - `$_SERVER['QUERY_STRING']`: Everything after `?` in the URL, preserved
 *      across `301` redirects.
 *    - `$_SERVER['HTTP_HOST']`: The active domain name (`raggiesoft.com`), used
 *      to synthesize canonical OpenGraph URLs (`og:url`).
 *    - `$_COOKIE['elara_site_override']` & `$_COOKIE['elara_theme_override']`:
 *      Optional browser cookies allowing theme/site overrides.
 * 2. JSON Manifests on Disk (Zero SQL Database):
 *    - `/data/settings.json`: Global site name, CDN root (`https://assets.raggiesoft.com`),
 *      Google Analytics ID, default OpenGraph metadata, and path-based header,
 *      sidebar, and footer inheritance maps (`headerMap`, `sidebarMap`, `footerMap`).
 *    - `/data/routes/** /*.json`: Every `.json` route manifest recursively
 *      discovered inside `/data/routes/` (`core.json`, `about.json`,
 *      `case-studies.json`, `apps/cipher.json`, `raggiesoft-games/pathfinder-west.json`).
 *
 * OUTPUT PRODUCED BY THIS ROUTER:
 * - Either an immediate HTTP `301 Moved Permanently` redirect header sending
 *   legacy paths (like `/raggiesoft-books` or `/engine-room`) to their modern
 *   dedicated `*.raggiesoft.com` subdomains, OR
 * - A complete, WCAG 2.1 AA accessible HTML5 document assembled in four layers:
 *   1. `includes/header.php` (`<!doctype html>`, `<head>`, SEO/OpenGraph/JSON-LD, top nav)
 *   2. `#elara-layout-wrapper` (optional desktop `<aside>` + mobile drawer sidebar)
 *   3. `<main id="main-content">` containing the resolved `pages/.../*.php` view
 *   4. `includes/footer.php` (visual footer, legal/fictitious disclaimer band, JS hooks)
 * ============================================================================
 */

// Turn on PHP Output Buffering immediately on Line 1 of execution.
// WHY THIS MATTERS: In HTTP, status codes (`http_response_code(404)`) and
// `header('Location: ...')` redirects MUST be sent BEFORE a single byte of HTML
// reaches the browser. `ob_start()` holds all `echo` / HTML output in server RAM
// until `ob_end_flush()` at the very bottom of this file, preventing "Headers
// already sent" crashes even if a template echoes markup before an error check.
ob_start(); 
// RaggieSoft Elara Router v5.7
// Fix v5.7: Added Recursive Route Discovery (Subfolders) & JSON Error Logging

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Elara Router (Core Application Engine)
 * Purpose: The central front-controller and routing engine for the RaggieSoft Hub.
 * 
 * Strategy & Implementation:
 * - Uses a recursive JSON discovery system (scanning `data/routes/`) to build a master route table dynamically.
 * - Implements a "DRY" inheritance model where a `common` config block cascades settings down to all sibling routes within a file.
 * - Features "Smart Router Logic": If a route isn't explicitly defined, it attempts to resolve the view via filesystem 
 *   auto-discovery (`pages/path/to/view.php`) or falls back to the dynamic narrative reader (`Katie.json`).
 * - Injects the global Header, resolves Sidebar visibility, buffers the View content, and caps with the Global Footer.
 * 
 * Maintenance Recommendations:
 * - Performance Note: The recursive `RecursiveDirectoryIterator` runs on every request. If route files grow significantly, 
 *   consider implementing a cached (compiled) routing table in production.
 * - Do NOT remove `ob_start()` and `ob_end_flush()`. They are necessary to prevent header already sent errors and allow 
 *   for clean error handling.
 * - Ensure the `elara-layout-wrapper` ID remains intact, as the client-side SPA (`elara-spa.js`) specifically targets 
 *   this element for DOM replacement during PJAX navigations.
 */

// Define a global constant `ROOT_PATH` pointing to `/www` (one directory up from
// `/www/amanda`). Every included header, sidebar, footer, and page view uses
// `ROOT_PATH` so file paths never break regardless of URL nesting depth.
define('ROOT_PATH', dirname(__DIR__));

// Extract ONLY the URL path (stripping any `?key=value` query string) from PHP's
// `$_SERVER['REQUEST_URI']` superglobal. For example, `/about?ref=nav` -> `/about`.
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize trailing slashes to ensure consistent key matching against the JSON route table.
// We keep `/` intact when `strlen($request_uri) === 1` (the homepage), but turn
// `/contact/` into `/contact` so both URLs match the exact same JSON key.
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 0. SUBDOMAIN SPIN-OFF 301 REDIRECTS (StoreTrainer, Corporate, Books, Lore, Engine Room & Stardust Engine) ---
// As RaggieSoft grew from one monolithic PHP site into specialized subdomains
// (`books.raggiesoft.com`, `engineroom.raggiesoft.com`, `stardust.raggiesoft.com`,
// `corporate.raggiesoft.com`, `lore.raggiesoft.com`, `storetrainer.raggiesoft.com`),
// old bookmarks and search engine links still hit `raggiesoft.com/...`.
// Below, we check for those legacy URL prefixes and issue an HTTP `301 Moved
// Permanently` redirect (`header('Location: ...', true, 301)`) followed by `exit`
// so browsers and search engines update their links automatically.

// Preserve any incoming query parameters (e.g., ?artist=fractured-prisms&album=...&track=... for DSP verification)
// `$_SERVER['QUERY_STRING']` holds the raw string after `?` in the incoming URL.
$qs = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';

// Redirect legacy DSP verification paths to the Engine Room Records subdomain:
if ($request_uri === '/dsp-verification' || $request_uri === '/dsp-verification.php' || $request_uri === '/pages/engine-room/dsp-verification.php') {
    header('Location: https://engineroom.raggiesoft.com/dsp-verification' . $qs, true, 301);
    exit;
}
// `strpos($haystack, $needle) === 0` checks if `$request_uri` STARTS WITH that prefix.
// Redirect legacy `/products/storetrainer` URLs to `storetrainer.raggiesoft.com`:
if (strpos($request_uri, '/products/storetrainer') === 0) {
    header('Location: https://storetrainer.raggiesoft.com/' . $qs, true, 301);
    exit;
}
// Redirect `/raggiesoft-media/...` to `corporate.raggiesoft.com/...`, slicing off
// the `/raggiesoft-media` prefix with `substr()` so deep links like
// `/raggiesoft-media/licensing/commercial` land on `corporate.raggiesoft.com/licensing/commercial`:
if (strpos($request_uri, '/raggiesoft-media') === 0) {
    $sub = ltrim(substr($request_uri, strlen('/raggiesoft-media')), '/');
    header('Location: https://corporate.raggiesoft.com/' . $sub . $qs, true, 301);
    exit;
}
// Redirect `/raggiesoft-books/...` to the RaggieSoft Book Reader (`books.raggiesoft.com`):
if (strpos($request_uri, '/raggiesoft-books') === 0) {
    if (strpos($request_uri, '/raggiesoft-books/ocean-view-archives') === 0) {
        header('Location: https://books.raggiesoft.com/' . $qs, true, 301);
        exit;
    }
    $bookSubPath = ltrim(substr($request_uri, strlen('/raggiesoft-books')), '/');
    header('Location: https://books.raggiesoft.com/' . $bookSubPath . $qs, true, 301);
    exit;
}
// Redirect `/family` (technical DevOps roster) to Michael's engineering portfolio (`michaelpragsdale.com/build-team`),
// whereas `/about/family` stays on `raggiesoft.com` as the consumer-friendly origin story!
if (strpos($request_uri, '/family') === 0) {
    $sub = ltrim(substr($request_uri, strlen('/family')), '/');
    header('Location: https://michaelpragsdale.com/build-team' . ($sub !== '' ? '/' . $sub : '') . $qs, true, 301);
    exit;
}
// Redirect `/encyclopedia` to the Next.js Lore Encyclopedia (`lore.raggiesoft.com`):
if (strpos($request_uri, '/encyclopedia') === 0) {
    header('Location: https://lore.raggiesoft.com/' . $qs, true, 301);
    exit;
}
// Redirect in-universe O'Connell Trust & soundstage lore routes to `engineroom.raggiesoft.com`:
if (strpos($request_uri, '/oconnell-trust') === 0) {
    $sub = ltrim(substr($request_uri, strlen('/oconnell-trust')), '/');
    header('Location: https://engineroom.raggiesoft.com/oconnell-trust' . ($sub !== '' ? '/' . $sub : '') . $qs, true, 301);
    exit;
}
if (strpos($request_uri, '/stardust-blacksburg') === 0) {
    header('Location: https://engineroom.raggiesoft.com/stardust-blacksburg' . $qs, true, 301);
    exit;
}
if (strpos($request_uri, '/pacific-rim') === 0) {
    header('Location: https://engineroom.raggiesoft.com/pacific-rim' . $qs, true, 301);
    exit;
}
// Redirect `/engine-room/...` routes: Stardust Engine artist/record subpaths go to
// `stardust.raggiesoft.com`, while general label routes go to `engineroom.raggiesoft.com`:
if (strpos($request_uri, '/engine-room') === 0) {
    if (preg_match('#^/engine-room/artists/(?:the-)?stardust-engine(?:/(.*))?$#', $request_uri, $m)) {
        $sub = isset($m[1]) && $m[1] !== '' ? ltrim($m[1], '/') : '';
        header('Location: https://stardust.raggiesoft.com/' . $sub . $qs, true, 301);
        exit;
    }
    if (preg_match('#^/engine-room/records/stardust-engine(?:/(.*))?$#', $request_uri, $m)) {
        $sub = isset($m[1]) && $m[1] !== '' ? '/' . ltrim($m[1], '/') : '';
        header('Location: https://stardust.raggiesoft.com/records/stardust-engine' . $sub . $qs, true, 301);
        exit;
    }
    if ($request_uri === '/engine-room/licensing') {
        header('Location: https://engineroom.raggiesoft.com/commercial-licensing' . $qs, true, 301);
        exit;
    }
    if ($request_uri === '/engine-room/dsp-verification' || $request_uri === '/engine-room/dsp-verification.php') {
        header('Location: https://engineroom.raggiesoft.com/dsp-verification' . $qs, true, 301);
        exit;
    }
    $sub = ltrim(substr($request_uri, strlen('/engine-room')), '/');
    header('Location: https://engineroom.raggiesoft.com/' . $sub . $qs, true, 301);
    exit;
}


// --- 1. LOAD GLOBAL SETTINGS ---
// Read `/data/settings.json` from disk and decode it into a PHP associative array
// (`true` as the second argument to `json_decode` returns an array `['key' => 'val']`
// instead of a PHP `stdClass` object).
$settingsFile = ROOT_PATH . '/data/settings.json';

if (!file_exists($settingsFile)) {
    die('Critical Error: Configuration file (data/settings.json) missing.');
}

$settings = json_decode(file_get_contents($settingsFile), true);

// `json_last_error()` checks whether `settings.json` had a syntax mistake (like a trailing comma).
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Critical Error: Invalid JSON in settings.json');
}

// Extract Core Globals (with hardened fallback for cdnBaseUrl so missing/empty keys never break CSS/asset resolution)
// Note: PHP's null-coalescing operator `??` means "use the left side if it exists and is not null; otherwise use the right fallback."
$siteName = $settings['siteName'] ?? 'RaggieSoft'; 
$projectSlug = $settings['projectSlug'] ?? 'raggiesoft-corporate'; 
$cdnBaseUrl = !empty($settings['cdnBaseUrl']) ? rtrim($settings['cdnBaseUrl'], '/') : 'https://assets.raggiesoft.com';
$defaultTheme = $settings['defaultTheme'] ?? 'light'; 

// Build Defaults Array:
// Start from `$settings['defaults']` (which defaults `view` to `errors/404` and
// `showSidebar` to `false`) and compute full absolute URLs for `ogImage`, `ogUrl`,
// and `navbarBrandLogo` so every page has valid social-sharing tags out of the box.
$defaults = array_merge($settings['defaults'], [
    'title' => $siteName, 
    'theme' => $defaultTheme,
    'site' => $projectSlug,
    'ogImage' => $cdnBaseUrl . ($settings['defaults']['ogImage'] ?? ''),
    'ogUrl' => "https://" . $_SERVER['HTTP_HOST'] . $request_uri,
    'navbarBrandLogo' => $cdnBaseUrl . ($settings['defaults']['navbarBrandLogo'] ?? '')
]);

// --- 2. LOAD & MERGE ROUTE FILES (RECURSIVE) ---
// Instead of hardcoding hundreds of URLs in PHP, Elara walks every subfolder inside
// `/data/routes/` using PHP's SPL iterators (`RecursiveDirectoryIterator` +
// `RecursiveIteratorIterator` + `RegexIterator`) and merges every `.json` file into
// one `$masterRoutes` lookup table keyed by URL path (e.g., `"/about/privacy"`).
$masterRoutes = [];

// SCAN: Recursively find ALL .json files inside /data/routes/
$routeFiles = [];
$directory = new RecursiveDirectoryIterator(ROOT_PATH . '/data/routes');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.json$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $file) {
    $routeFiles[] = $file[0];
}
foreach ($routeFiles as $file) {
    $jsonContent = file_get_contents($file);
    $fileData = json_decode($jsonContent, true);

    // FIX: Log JSON errors so they aren't silent
    // If one route file has a typo, log it to the server error log and skip ONLY
    // that broken file rather than crashing the entire website.
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("Elara Error: Invalid JSON in " . basename($file) . " - " . json_last_error_msg());
        continue; // Skip bad file
    }

    if (is_array($fileData)) {
        
        // --- 2A. INHERITANCE LOGIC (The "DRY" Fix) ---
        // "DRY" = Don't Repeat Yourself. A route JSON file can declare a top-level
        // `"common"` object (e.g., setting `"headerMenu": "about/header-about"` and
        // `"sidebar": "about/sidebar-about"` once for all `/about/*` pages).
        // Each individual route in that file inherits `"common"` automatically,
        // while still being able to override any property for itself via `array_merge()`.
        if (isset($fileData['common'])) {
            $commonConfig = $fileData['common'];
            unset($fileData['common']); // Remove 'common' key so `"common"` isn't treated as a URL path

            // --- INJECT SEQUENCE DATA (PREV/NEXT) ---
            // When `"isSequential": true` is set in `"common"`, Elara automatically links
            // the routes in file order so `includes/header.php` can output `<link rel="prev">`
            // and `<link rel="next">` tags for serialized chapters or timelines.
            $isSequential = !empty($commonConfig['isSequential']);
            $urls = $isSequential ? array_keys($fileData) : [];
            $urlCount = count($urls);
            $seqIndex = 1;

            foreach ($fileData as $routeKey => $routeConfig) {
                // Merge: Specific settings (`$routeConfig`) overwrite Common settings (`$commonConfig`)
                $merged = array_merge($commonConfig, $routeConfig);
                
                if ($isSequential) {
                    $merged['schemaType'] = 'CreativeWorkSequence';
                    $merged['sequenceIndex'] = $seqIndex;
                    $merged['sequenceName'] = $commonConfig['siteName'] ?? 'Story Sequence';
                    
                    if ($seqIndex > 1) {
                        $merged['prevUrl'] = $urls[$seqIndex - 2];
                    }
                    if ($seqIndex < $urlCount) {
                        $merged['nextUrl'] = $urls[$seqIndex];
                    }
                    $seqIndex++;
                }
                
                $fileData[$routeKey] = $merged;
            }
        }
        // ---------------------------------------------

        // Fold this file's routes into the master `$masterRoutes` dictionary:
        $masterRoutes = array_merge($masterRoutes, $fileData);
    }
}

// --- HELPER: RESOLVE ASSET INHERITANCE ---
// Walks UP the URL directory tree from most-specific to least-specific until it
// finds a matching prefix in `$map` (such as `headerMap`, `sidebarMap`, or `footerMap`).
// Example: for `/case-studies/cascade-protocol`, it checks `/case-studies/cascade-protocol`,
// then `/case-studies`, and finally `/` so child pages inherit section layouts automatically.
function resolveAsset($map, $currentUri) {
    $path = rtrim(parse_url($currentUri, PHP_URL_PATH), '/');
    while ($path !== '' && $path !== '.' && $path !== '/') {
        if (isset($map[$path])) return $map[$path];
        $path = dirname($path);
        $path = str_replace('\\', '/', $path);
    }
    if (isset($map['/'])) return $map['/'];
    return null;
}

// --- HELPER: SLUGIFY STRINGS FOR URL MATCHING ---
// Converts arbitrary display text (like `"The Stardust Engine!"`) into a clean,
// URL-safe lowercase slug (`"the-stardust-engine"`).
function slugify($string) {
    // Replace non-letter/number characters with a dash, convert to lowercase
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    // Remove duplicate dashes
    return preg_replace('/-+/', '-', $slug);
}

// --- 3. SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration
// Look up the normalized `$request_uri` inside `$masterRoutes`. If found, `$pageConfig`
// receives that route's `view`, `title`, `ogDescription`, `headerMenu`, `sidebar`, etc.
$pageConfig = $masterRoutes[$request_uri] ?? [];

// B. Auto-Discovery Logic (Zero-Config Filesystem Fallback)
// If no JSON route explicitly set `"view"`, Elara checks whether a matching `.php`
// view file exists inside `/pages/`. Notice how directory URLs check for `overview.php`
// or `home.php` instead of `index.php`—part of RaggieSoft's convention where folder
// landing pages are named `overview.php` and linked by their clean folder path.
if (!isset($pageConfig['view'])) {
    $potentialPath = 'pages' . $request_uri;
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } elseif (is_dir(ROOT_PATH . '/' . $potentialPath)) {
        if (file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
            $pageConfig['view'] = $potentialPath . '/overview';
            $isIndexPage = true;
        } elseif (file_exists(ROOT_PATH . '/' . $potentialPath . '/home.php')) {
            $pageConfig['view'] = $potentialPath . '/home';
            $isIndexPage = true;
        }
    }
}

// C. Sidebar Intelligence
// Resolves structural layout: Determines if a sidebar should be rendered based on configuration maps or context
if (isset($pageConfig['view'])) {
    $sidebarMap = $settings['sidebarMap'] ?? [];
    
    if (!isset($pageConfig['sidebar'])) {
        $resolvedSidebar = resolveAsset($sidebarMap, $request_uri);
        if ($resolvedSidebar) $pageConfig['sidebar'] = $resolvedSidebar;
    }

    if (!isset($pageConfig['showSidebar'])) {
        if (isset($pageConfig['sidebar']) && $pageConfig['sidebar'] !== 'sidebar-default') {
             $pageConfig['showSidebar'] = true;
        } elseif (isset($isIndexPage) && $isIndexPage) {
            $pageConfig['showSidebar'] = false;
        }
    }

    // Auto-Title: If neither JSON nor the page specified a `<title>`, humanize the URL slug
    // (e.g., `cascade-protocol` -> `Cascade Protocol - RaggieSoft`).
    if (!isset($pageConfig['title'])) {
        $slug = basename($request_uri);
        $pageConfig['title'] = ($slug === '' || $slug === 'index.php') ? 'Home - ' . $siteName : ucwords(str_replace('-', ' ', $slug)) . ' - ' . $siteName;
    }
}

// --- 4. RENDER ---
// Combine `$defaults` (from `settings.json`) with `$pageConfig` (from the matched
// route or auto-discovery). Any key in `$pageConfig` overrides `$defaults`.
// If no route matched AND no file was auto-discovered, `$defaults['view']` is `'errors/404'`.
$config = array_merge($defaults, $pageConfig);

// Intercept routes configured with a canonical external/cross-subdomain 301 redirect
// (e.g., streamable discography routes consolidated into https://music.raggiesoft.com)
if (!empty($config['redirect'])) {
    header('Location: ' . $config['redirect'], true, 301);
    ob_end_flush();
    exit;
}

// Apply Global Site/Theme Overrides from settings-dialog.php
// SECURITY NOTE (XSS Escaping): Cookie values come from the user's browser and
// cannot be trusted! Wrapping `$_COOKIE[...]` in `htmlspecialchars()` converts
// dangerous HTML characters (`<`, `>`, `"`, `'`, `&`) into safe HTML entities
// so a crafted cookie can never inject a `<script>` tag into the page.
if (!empty($_COOKIE['elara_site_override'])) {
    $config['site'] = htmlspecialchars($_COOKIE['elara_site_override']);
}
if (!empty($_COOKIE['elara_theme_override'])) {
    $config['theme'] = htmlspecialchars($_COOKIE['elara_theme_override']);
}

// Send the proper HTTP status code when rendering an error view so search engines
// don't index a missing page as HTTP 200 OK ("Soft 404"):
if ($config['view'] === 'errors/500') {
    http_response_code(500);
} elseif ($config['view'] === 'errors/404') {
    http_response_code(404);
}

// Extract variables into the global scope so `includes/header.php`, the view file,
// and `includes/footer.php` can read them directly as simple PHP variables.
// Relative asset paths (like `/raggiesoft-corporate/...`) are prefixed with `$cdnBaseUrl`,
// while full `https://...` URLs are left untouched.
$pageTitle = $config['title'];
$currentPageTheme = $config['theme'];
$showSidebar = $config['showSidebar'];
$currentSite = $config['site'];
$ogTitle = $config['ogTitle'];
$ogDescription = $config['ogDescription'];
$ogImage = (isset($config['ogImage']) && !str_starts_with($config['ogImage'], 'http') && $config['ogImage'] !== '') ? $cdnBaseUrl . $config['ogImage'] : $config['ogImage'];
// Optional descriptive alt text for OpenGraph (`og:image:alt`) and Twitter (`twitter:image:alt`)
// social preview cards so blind and low-vision users on Discord, Slack, LinkedIn, and Mastodon
// hear a meaningful description of the link preview artwork:
$ogImageAlt = $config['ogImageAlt'] ?? '';
$ogUrl = $config['ogUrl'];
$navbarBrandLogo = (isset($config['navbarBrandLogo']) && !str_starts_with($config['navbarBrandLogo'], 'http') && $config['navbarBrandLogo'] !== '') ? $cdnBaseUrl . $config['navbarBrandLogo'] : $config['navbarBrandLogo'];
$navbarBrandText = $config['navbarBrandText'];
$navbarBrandLink = $config['navbarBrandLink'];
$navbarBrandAlt = $config['navbarBrandAlt'];
$navbarBrandClass = $config['navbarBrandClass'];

// --- HEADER RESOLUTION ---
// Pick the section-specific top navigation menu (e.g., `about/header-about.php`,
// `case-studies/header-case-studies.php`, `header-contact.php`), falling back to `header-default.php`.
if (isset($pageConfig['headerMenu'])) {
    $headerFile = $pageConfig['headerMenu'];
} else {
    $headerMap = $settings['headerMap'] ?? [];
    $headerFile = resolveAsset($headerMap, $request_uri) ?? 'header-default';
}
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/' . $headerFile . '.php';

// Sidebar Resolution: Compute the filesystem path to the requested sidebar partial.
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . $config['sidebar'] . '.php';

// Render Layer 1: Output `<!doctype html>`, `<head>` metadata, network bar, and `<header>` navbar.
require_once ROOT_PATH . '/includes/header.php';

// Render Layer 2: Open `#elara-layout-wrapper`.
// WHY THIS ID MATTERS: Client-side soft navigation (`elara-spa.js`) swaps `#elara-layout-wrapper`
// during SPA link transitions so the browser doesn't have to reload CSS/JS from scratch.
// ADD THE ID HERE: id="elara-layout-wrapper"
echo '<div id="elara-layout-wrapper" class="container-fluid flex-grow-1 d-flex p-0">';
echo '  <div class="row flex-grow-1 m-0 w-100">';

// If this route uses a sidebar AND the sidebar PHP file exists on disk:
// - Render a persistent `<aside>` column on tablet/desktop (`d-none d-md-block`)
// - Render a collapsible mobile drawer (`d-md-none`) for small screens
// - Open `<main id="main-content" tabindex="-1">` (WCAG 2.1 AA primary landmark target
//   for the "Skip to Main Content" keyboard shortcut link in `includes/header.php`).
if ($showSidebar && file_exists($currentSidebar)) {
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    
    echo '    <div class="offcanvas offcanvas-start d-md-none bg-body-tertiary" tabindex="-1" id="mobileSidebarDrawer" aria-labelledby="mobileSidebarDrawerLabel">';
    echo '      <div class="offcanvas-header border-bottom py-3 px-4">';
    echo '        <h5 class="offcanvas-title fw-bold font-heading mb-0" id="mobileSidebarDrawerLabel">Navigation</h5>';
    echo '        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>';
    echo '      </div>';
    echo '      <div class="offcanvas-body p-3">';
    // Note: `require` (instead of `require_once`) is intentional here because `$currentSidebar`
    // was already included once inside `<aside>` above, and we want a second copy inside the mobile drawer!
    require $currentSidebar;
    echo '      </div>';
    echo '    </div>';
    
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4" tabindex="-1" style="outline:none;">';
} else {
    // Full-width layout when no sidebar is active (e.g., `/`, `/contact`, `/in-memoriam`):
    echo '    <main id="main-content" class="col-12 p-0" tabindex="-1" style="outline:none;">'; 
}

// Render Layer 3: Inject the resolved page view (`pages/.../*.php` or `errors/404.php`).
// If the configured view file is missing on disk, send HTTP 404 and fall back cleanly.
if (file_exists(ROOT_PATH . '/' . $config['view'] . '.php')) {
    require_once ROOT_PATH . '/' . $config['view'] . '.php';
} else {
    http_response_code(404);
    if(file_exists(ROOT_PATH . '/pages/errors/404.php')) {
        require_once ROOT_PATH . '/pages/errors/404.php';
    } else {
        echo "404 Not Found";
    }
}

// Close `<main>`, `.row`, and `#elara-layout-wrapper`:
echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

// Render Layer 4: Output the visual footer, global legal/fictitious disclaimer band,
// Encyclopedia `<dialog>`, and SPA JavaScript lifecycle listeners, then flush the
// buffered HTTP response (`ob_end_flush()`) to Nginx and the visitor's browser!
require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush();
?>