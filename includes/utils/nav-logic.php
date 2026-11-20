<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/utils/nav-logic.php
 * Role: Tree-to-Linear Book Pagination Utility (`getBookNavigation()`)
 * Domain: https://raggiesoft.com (Legacy Narrative Reader Engine Helper)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Multi-level books are naturally stored as nested trees (`Book -> Chapter -> Part -> Scene`),
 * which is great for a Table of Contents, but awkward when a reader clicks "Next Scene"
 * at the end of Part 1 and needs to jump seamlessly into Part 2's first scene!
 * `getBookNavigation($jsonUrl)` solves that classic data-structures problem by:
 *   1. Loading the nested JSON hierarchy from `$jsonUrl`,
 *   2. Flattening the 4-level tree into a 1-dimensional `$flatList` array in reading order,
 *   3. Parsing `$_SERVER['REQUEST_URI']` to find the reader's current `$currentIndex`, and
 *   4. Computing `$prevLink` (`$currentIndex - 1`), `$nextLink` (`$currentIndex + 1`),
 *      and `$upLink` (back to `$basePath`).
 *
 * INPUTS:
 * - `$jsonUrl` (string): Path or URL to a v4 book structure JSON manifest.
 * - `$_SERVER['REQUEST_URI']`: Current URL path used to identify active book/chapter/part/scene slugs.
 *
 * OUTPUT PRODUCED:
 * - Returns an associative array containing `error`, `bookData`, `flatList`,
 *   `prevLink`, `nextLink`, `upLink`, and current 4-level IDs.
 * ============================================================================
 *
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This script (`nav-logic.php`) contains the core navigation engine for the Narrative/Book reader interface.
 * 
 * DESIGN INTENT:
 * - Parses a hierarchical JSON structure representing the book's contents (Book -> Chapter -> Part -> Scene).
 * - "Flattens" this hierarchy into a single linear array (`$flatList`) to easily determine "Previous" and "Next" scene links.
 * - Analyzes the current URL (`$_SERVER['REQUEST_URI']`) to locate the user's current position within the flattened structure.
 * 
 * MAINTENANCE NOTES:
 * - The deep nesting `foreach` loops (4 levels deep) are computationally light but visually messy.
 * - Relies heavily on exact URL structure matching. Changes to `.htaccess` or routing rules will break the `parse_url` logic here.
 * - Fails gracefully by returning empty/hash links (`#`) if the JSON data cannot be fetched or parsed.
 */
// includes/utils/nav-logic.php
// v4.0 - Universal Narrative Engine (Scene-Aware)

function getBookNavigation($jsonUrl) {
    // 1. Fetch Data (`@` suppresses warnings if `$jsonUrl` is missing; we check `=== false` right below)
    $jsonData = @file_get_contents($jsonUrl);

    // Safe fallback structure so calling templates never crash on missing array keys:
    if ($jsonData === false) {
        return [
            'error' => true,
            'bookData' => ['structure' => [], 'base_path' => ''],
            'prevLink' => '#',
            'nextLink' => '#',
            'upLink' => '#',
            'currentBookId' => '',
            'currentChapId' => '',
            'currentPartId' => '',
            'currentSceneId' => '',
            'flatList' => []
        ];
    }

    // LEGACY DATA PARSING: Assumes JSON is well-formed. No explicit error handling for JSON syntax errors is present.
    $bookData = json_decode($jsonData, true);

    // 2. Analyze Current URL (4 Levels Deep)
    // Strip `$basePath` from the current request URL path, then split (`explode`) by `/`
    // to extract `[0 => bookId, 1 => chapterId, 2 => partId, 3 => sceneId]`.
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $basePath = $bookData['base_path'] ?? '/'; 
    $relativePath = str_replace($basePath, '', $currentPath);
    $pathSegments = explode('/', trim($relativePath, '/'));

    // IDs based on v4 Hierarchy (`?? ''` prevents undefined-offset warnings on shorter URLs)
    $currentBookId = $pathSegments[0] ?? '';
    $currentChapId = $pathSegments[1] ?? '';
    $currentPartId = $pathSegments[2] ?? '';
    $currentSceneId = $pathSegments[3] ?? '';

    // LEGACY NAVIGATION ALGORITHM: Converts the tree structure into a flat array to simplify index-based previous/next calculation.
    // 3. Flatten Structure for Linear Navigation (Depth-First Traversal across 4 nested `foreach` loops)
    $flatList = [];

    if (!empty($bookData['structure'])) {
        foreach ($bookData['structure'] as $book) {
            if (!empty($book['chapters'])) {
                foreach ($book['chapters'] as $chapter) {
                    if (!empty($chapter['parts'])) {
                        foreach ($chapter['parts'] as $part) {
                            if (!empty($part['scenes'])) {
                                foreach ($part['scenes'] as $scene) {
                                    $flatList[] = [
                                        // URL: .../book/chap/part/scene
                                        'url' => "{$basePath}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}",
                                        'title' => $scene['title'],
                                        // Context helps in search/debug: "The Weaver's Lesson - Scene 1"
                                        'context_title' => "{$part['title']} - {$scene['title']}", 
                                        'book_id' => $book['id'],
                                        'chapter_id' => $chapter['id'],
                                        'part_id' => $part['id'],
                                        'scene_id' => $scene['id'],
                                        'theme' => $scene['theme'] ?? null 
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    // 4. Find Current Position via linear search across `$flatList`
    $currentIndex = -1;
    foreach ($flatList as $index => $item) {
        if ($item['book_id'] === $currentBookId && 
            $item['chapter_id'] === $currentChapId && 
            $item['part_id'] === $currentPartId &&
            $item['scene_id'] === $currentSceneId) {
            $currentIndex = $index;
            break;
        }
    }

    // 5. Calculate Prev / Next / Up Links from `$currentIndex`
    // Previous: If on the very first scene (`$currentIndex === 0`), step back to `$basePath` (Book Index)
    if ($currentIndex > 0) {
        $prevLink = $flatList[$currentIndex - 1]['url'];
    } else {
        $prevLink = $basePath; // Fallback to Index
    }

    // Next: Advance to `$currentIndex + 1` unless already at the final scene of the book
    if ($currentIndex > -1 && $currentIndex < count($flatList) - 1) {
        $nextLink = $flatList[$currentIndex + 1]['url'];
    } else {
        $nextLink = '#'; // End of Book
    }

    // Up - Return to the Book Index
    $upLink = $basePath; 

    return [
        'error' => false,
        'bookData' => $bookData,
        'flatList' => $flatList,
        'currentIndex' => $currentIndex,
        'prevLink' => $prevLink,
        'nextLink' => $nextLink,
        'upLink' => $upLink,
        'currentBookId' => $currentBookId,
        'currentChapId' => $currentChapId,
        'currentPartId' => $currentPartId,
        'currentSceneId' => $currentSceneId
    ];
}
?>