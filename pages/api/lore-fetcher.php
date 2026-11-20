<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/api/lore-fetcher.php
 * Role: JSON REST API Endpoint for Encyclopedia Lore (`GET /api/lore?entry=...`)
 * Route Manifest: `/data/routes/core.json` -> `"/api/lore"` (`"isApi": true`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Unlike every other file in `/pages/` (which produces HTML for humans), this
 * script is a machine-readable JSON API endpoint consumed by `encyclopedia.js`
 * (`includes/components/modals/encyclopedia-modal.php`).
 * Given a query parameter like `?entry=characters/ashley-raybourn`:
 *   1. Sets `header('Content-Type: application/json')` so the browser knows the
 *      HTTP response body is JSON rather than HTML.
 *   2. Reads `$_GET['entry']` and blocks **Directory Traversal Attacks** (`../`)
 *      with HTTP `400 Bad Request`.
 *   3. Locates the matching `.md` Markdown file inside `raggiesoft-assets/raggiesoft-books/encyclopedia/`
 *      using `realpath()` (returning HTTP `404` JSON if missing).
 *   4. Calls `StardustLoreParser::parse($filePath)` to extract YAML frontmatter,
 *      convert Markdown to HTML, and build a Table of Contents (`toc`), then
 *      outputs `json_encode($data)` (or HTTP `500` JSON on parse failure).
 *
 * CRITICAL PHP HEADER NOTE:
 * Line 1 MUST start with `<?php` with zero preceding spaces or HTML comments so
 * `header('Content-Type: application/json')` and `http_response_code(...)` never
 * trigger a "Headers already sent" fatal warning!
 * ============================================================================
 *
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

// ARCHITECTURE: Establish RESTful JSON response headers BEFORE any output bytes are sent
header('Content-Type: application/json');

// Elara usually defines `ROOT_PATH`, but if Nginx invokes `/pages/api/lore-fetcher.php`
// directly, fall back two levels up (`__DIR__ . '/../../'`) to `/www`:
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
}

// Load the Markdown + YAML Frontmatter + TOC parser class:
require_once ROOT_PATH . '/includes/classes/stardust-lore-parser.php';

// Read the `entry` query parameter from PHP's `$_GET` superglobal (e.g., `/api/lore?entry=foo` -> `'foo'`):
$entry = $_GET['entry'] ?? '';

// SECURITY GUARD (Path Traversal Prevention):
// Without this check, an attacker could request `?entry=../../../../etc/passwd` to
// climb out of the `encyclopedia/` directory! Rejecting empty values and any `..`
// substring with HTTP `400 Bad Request` stops path traversal immediately.
// ARCHITECTURE: Critical Security Check - Prevent path traversal exploits
if (empty($entry) || preg_match('/\.\./', $entry)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid entry ID']);
    exit;
}

// Resolve the canonical `.md` file path on disk (checking both `../raggiesoft-assets`
// and `../../raggiesoft-assets` so local monorepo and deployed directory layouts both work).
// Note: `realpath()` returns `false` if the file does not exist on disk!
$filePath = realpath(ROOT_PATH . '/../raggiesoft-assets/raggiesoft-books/encyclopedia/' . $entry . '.md')
    ?: realpath(ROOT_PATH . '/../../raggiesoft-assets/raggiesoft-books/encyclopedia/' . $entry . '.md');

// Return HTTP 404 Not Found JSON if the requested lore file doesn't exist:
if (!$filePath || !file_exists($filePath)) {
    http_response_code(404);
    echo json_encode(['error' => 'Lore entry not found']);
    exit;
}

// ARCHITECTURE: Delegate raw markdown processing to the custom Lore Parser class
$data = StardustLoreParser::parse($filePath);

// Return HTTP 500 Internal Server Error JSON if parsing failed unexpectedly:
if (!$data) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to parse lore entry']);
    exit;
}

// Success (HTTP 200 OK): Serialize `['metadata' => ..., 'html' => ..., 'toc' => ...]` as JSON:
echo json_encode($data);
