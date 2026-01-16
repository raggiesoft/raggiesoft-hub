<?php
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
    // We look for $cdn_root (Header scope) or $cdnBaseUrl (Router scope)
    global $cdn_root, $cdnBaseUrl;
    $root = $cdn_root ?? $cdnBaseUrl ?? 'https://assets.raggiesoft.com';
    
    // 2. Clean the Path
    // Remove leading slashes to prevent double-slashing
    $cleanPath = ltrim($path, '/');
    
    // 3. Construct URL with "Jessica Sync" Cache Buster
    // We append time() to ensure we always get the latest version from the server,
    // bypassing Cloudflare/Browser caching during active development.
    $url = "{$root}/{$cleanPath}?v=" . time();
    
    // 4. Define Stream Context
    // Fail fast (2 seconds) if the asset server is unreachable, 
    // preventing the main site from hanging.
    $context = stream_context_create([
        'http' => [
            'timeout' => 2,
            'ignore_errors' => true // We handle errors manually
        ]
    ]);
    
    // 5. Fetch Content
    // @ suppresses PHP warnings in the logs if 404
    $jsonContent = @file_get_contents($url, false, $context);
    
    // 6. Validate Fetch
    if ($jsonContent === false) {
        // Optional: Log this error to a debug log if needed
        return [];
    }
    
    // 7. Decode
    $data = json_decode($jsonContent, true);
    
    // 8. Validate JSON Integrity
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [];
    }
    
    return $data;
}
?>