<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/utils/json-reader.php
 * Role: Remote CDN JSON Fetcher Utility (`fetch_asset_json()`)
 * Domain: https://raggiesoft.com (Used by `/pages/contact.php` & `/pages/about/overview.php`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Because `raggiesoft.com` follows a Zero-Database Flat-File architecture,
 * shared lists—such as the rotating background hero artwork manifest
 * (`common/json/hero-images.json`)—live on the static asset CDN
 * (`https://assets.raggiesoft.com`). This helper function downloads a JSON
 * file from the CDN with a strict 2-second timeout, parses it into a PHP
 * array, and safely returns an empty array `[]` if the network is slow or
 * the JSON is malformed (so the page still renders gracefully!).
 *
 * INPUTS:
 * - `$path` (string): Relative asset path on the CDN (e.g., `'common/json/hero-images.json'`).
 * - Global variables `$cdn_root` / `$cdnBaseUrl` (defined by `header.php` / `amanda/elara.php`).
 *
 * OUTPUT PRODUCED:
 * - Returns a decoded PHP associative/indexed `array` on success, or `[]` on failure.
 *   Produces zero direct HTML output.
 * ============================================================================
 *
 * ARCHITECTURE & DESIGN: JSON Asset Reader
 * ============================================================================
 * ROLE: Acts as the primary Data Layer Connector for the Elara Framework. 
 *       Fetches, parses, and validates JSON data payloads from the RaggieSoft 
 *       Asset CDN (Jessica), bypassing caches during development.
 * 
 * INTEGRATION: Relies on global CDN routing variables (`$cdn_root`, `$cdnBaseUrl`).
 *              Provides data to UI components that need dynamic state or configuration
 *              without relying on a local database (e.g., Portfolio projects, narratives).
 * 
 * MAINTENANCE: The stream context timeout is intentionally short (2 seconds) 
 *              to enforce the "fail fast" methodology. Do not increase this timeout
 *              without considering the cascading latency effect on the frontend.
 * ============================================================================
 */
// includes/utils/json-reader.php
// v1.0 - Data Layer Connector
// Part of the RaggieSoft "Elara" Framework
// Usage: $data = fetch_asset_json('portfolio/json/projects.json');

/**
 * Fetches and decodes a JSON file from the RaggieSoft Assets CDN (Jessica).
 * * @param string $path The relative path to the JSON file (e.g., 'portfolio/json/projects.json')
 * @return array The decoded associative array, or an empty array on failure.
 */
function fetch_asset_json($path) {
    // 1. Resolve Access to the CDN Root
    // TEACHING NOTE ON PHP FUNCTION SCOPE:
    // Unlike JavaScript or Python, variables declared outside a function in PHP
    // are NOT automatically visible inside the function! The `global` keyword
    // imports `$cdn_root` (from `header.php`) and `$cdnBaseUrl` (from `elara.php`)
    // into this function's local scope.
    global $cdn_root, $cdnBaseUrl;
    $root = $cdn_root ?? $cdnBaseUrl ?? $cdnBaseUrl;
    
    // 2. Clean the Path
    // `ltrim($path, '/')` strips any accidental leading `/` so `"{$root}/{$cleanPath}"`
    // never produces a double slash like `https://assets.raggiesoft.com//common/...`.
    $cleanPath = ltrim($path, '/');
    
    // 3. Construct URL with "Jessica Sync" Cache Buster
    // `time()` returns the current Unix timestamp in seconds, ensuring fresh JSON
    // during active deployments without waiting for CDN cache expiration.
    $url = "{$root}/{$cleanPath}?v=" . time();
    
    // 4. Define Stream Context ("Fail-Fast" Network Guard)
    // `stream_context_create()` configures PHP's built-in HTTP client so if the CDN
    // takes longer than 2 seconds, PHP aborts immediately and renders fallback art
    // instead of hanging the visitor's browser tab for 30+ seconds.
    $context = stream_context_create([
        'http' => [
            'timeout' => 2,
            'ignore_errors' => true // Return body even on HTTP 4xx/5xx so we check manually below
        ]
    ]);
    
    // 5. Fetch Content
    // The `@` error-control operator suppresses noisy PHP runtime warnings if a
    // network socket fails, allowing us to check `$jsonContent === false` cleanly.
    $jsonContent = @file_get_contents($url, false, $context);
    
    // 6. Validate Fetch
    if ($jsonContent === false) {
        // Graceful degradation: callers like `contact.php` check `!empty($heroImages)`
        // and fall back to a static starfield pattern when `[]` is returned.
        return [];
    }
    
    // 7. Decode JSON string into a PHP associative array (`true` = array mode)
    $data = json_decode($jsonContent, true);
    
    // 8. Validate JSON Integrity (e.g., if an upstream 404 HTML page came back instead of JSON)
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [];
    }
    
    return $data;
}
?>