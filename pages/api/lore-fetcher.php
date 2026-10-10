<?php
/**
 * ============================================================================
 * ARCHITECTURE & API ENDPOINT (LORE FETCHER):
 * This file serves as a JSON API endpoint to fetch and parse Markdown lore
 * files dynamically. It acts as the bridge between raw Markdown storage
 * and frontend client-side rendering (e.g., dynamic modals).
 * 
 * Future Maintenance:
 * - Strict directory traversal protection (`preg_match('/\.\./')`) must remain
 *   intact to prevent unauthorized file access.
 * - The script assumes `StardustLoreParser::parse()` handles the heavy lifting
 *   of converting Frontmatter/Markdown to JSON.
 * ============================================================================
 */
// API Endpoint for fetching parsed Lore
// Route: /api/lore?entry=ashley-raybourn

// ARCHITECTURE: Establish RESTful JSON response headers
header('Content-Type: application/json');

// Elara usually wraps this, but if called directly we need ROOT_PATH
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
}

require_once ROOT_PATH . '/includes/classes/stardust-lore-parser.php';

$entry = $_GET['entry'] ?? '';

// Prevent directory traversal attacks
// ARCHITECTURE: Critical Security Check - Prevent path traversal exploits
if (empty($entry) || preg_match('/\.\./', $entry)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid entry ID']);
    exit;
}

// Find the lore file. We support nested paths if hyphens are used or explicitly passed
// E.g., characters/ashley-raybourn
$filePath = realpath(ROOT_PATH . '/../raggiesoft-assets/raggiesoft-books/encyclopedia/' . $entry . '.md');

if (!$filePath || !file_exists($filePath)) {
    http_response_code(404);
    echo json_encode(['error' => 'Lore entry not found']);
    exit;
}

// ARCHITECTURE: Delegate raw markdown processing to the custom Lore Parser class
$data = StardustLoreParser::parse($filePath);

if (!$data) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to parse lore entry']);
    exit;
}

echo json_encode($data);
