<?php
/**
 * ARCHITECTURE: api.php
 * 
 * Context: RaggieSoft Hub - Amanda Headless CMS API.
 * Narrative/Purpose: Amanda ("The Headless CMS Gatekeeper") acts as the secure API bridge between the file-based 
 * JSON data store and the frontend applications. It prevents unauthorized access, strips extensions to protect the 
 * underlying file structure, and recursively searches for content.
 * 
 * Mechanics:
 * - Direct human (browser) access is redirected to a 404 "Signal Lost" page.
 * - API requests must provide a 'zone' (e.g., routes, settings) and a 'file' (slug).
 * - Utilizes PHP's `RecursiveDirectoryIterator` to locate requested files within the permitted zone, regardless 
 *   of subdirectory depth or case-sensitivity, returning the raw JSON.
 */
// amanda/api.php
// The Headless CMS Gatekeeper (Recursive Edition v2)
// Updated: Case-Insensitive Search & Auto-Extension Stripping

// 1. GHOST PROTOCOL: Handling Direct Access
// We check if the request is missing the required "keys" (zone/file)
if (empty($_GET['zone']) || empty($_GET['file'])) {
    
    // A. Is this a Human? (Browser requesting HTML)
    // If so, redirect them to the visual "Signal Lost" page.
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'text/html') !== false) {
        http_response_code(404);
        header("Location: /signal-lost"); 
        exit;
    }

    // B. Is this a Bot/App? (Expecting JSON)
    // Give them a strict, unhelpful 404.
    header('Content-Type: application/json');
    http_response_code(404);
    echo json_encode([
        'error' => 'Uplink connection refused.',
        'code' => 404
    ]);
    exit;
}

// --- If we survive the check, proceed as normal ---
header('Content-Type: application/json');

// Define Root relative to this file (assuming /amanda/api.php)
define('ROOT_PATH', dirname(__DIR__));

// 1. SECURITY: Strict Allow-List
$allowed_zones = ['routes', 'settings'];

// 2. INPUT VALIDATION
$zone = $_GET['zone'] ?? ''; 
$file = $_GET['file'] ?? ''; 

if (!in_array($zone, $allowed_zones)) {
    http_response_code(403);
    echo json_encode(['error' => 'Restricted Data Zone']);
    exit;
}

// TWEAK 1: Extension & Path Sanitization
// basename($file, '.json') will strip '.json' IF it exists, 
// but leave the string alone if it's already just a slug.
$safeFileSlug = basename($file, '.json'); 

// 3. RECURSIVE SEARCH LOGIC
$targetPath = '';

if ($zone === 'settings') {
    // Settings is a fixed location
    $targetPath = ROOT_PATH . '/data/settings.json';
} 
elseif ($zone === 'routes') {
    // We start at /data/routes and drill down into ALL subfolders
    $directory = new RecursiveDirectoryIterator(ROOT_PATH . '/data/routes');
    $iterator = new RecursiveIteratorIterator($directory);
    
    // We look for any file that matches "slug.json"
    foreach ($iterator as $info) {
        // TWEAK 2: Case-Insensitive Comparison
        // strcasecmp returns 0 if strings match regardless of case.
        // This handles "Aethel.json" on disk vs "aethel" in request.
        if ($info->isFile() && strcasecmp($info->getFilename(), $safeFileSlug . '.json') === 0) {
            $targetPath = $info->getPathname();
            break; // Found it! Stop searching.
        }
    }
}

// 4. SERVE CONTENT
if ($targetPath && file_exists($targetPath)) {
    // Success: We found the file
    readfile($targetPath);
} else {
    http_response_code(404);
    echo json_encode([
        'error' => 'Resource not found',
        'searched_for' => $safeFileSlug
    ]);
}