<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the complex, deeply nested sidebar navigation for the "Crimson Node" story sections.
 * 
 * DESIGN INTENT:
 * - Similar to the book sidebars, this uses exact `REQUEST_URI` matching to expand the Table of Contents dynamically.
 * - When a user is on a specific chapter page, it reveals the intra-page anchor links (`#part-X`) for that chapter.
 * 
 * MAINTENANCE NOTES:
 * - This file contains duplicated/erroneous blocks (e.g., Chapter 5 appears at the top, middle, and bottom). This is a known legacy artifact resulting from rapid manual updates.
 * - To clean this up in the future, consider using a JSON-driven approach (like `nav-logic.php`) rather than hardcoding every single chapter and part into PHP conditionals.
 */
// includes/components/sidebars/engine-room/artists/crimson-node/sidebar-story.php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<div class="d-flex flex-column gap-1 border-bottom pb-3 mb-3">
    <wa-button appearance="<?= ($request_uri == '/raggiesoft-books/books/crimson-node') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($request_uri == '/raggiesoft-books/books/crimson-node') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-book-atlas"></i> Archives Index
    </wa-button>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-3 mb-2 text-uppercase">
    <span>Book 1: The Illusion</span>
</h6>
<div class="d-flex flex-column gap-1">
    <!-- Chapter 1 -->
    <wa-button appearance="<?= str_contains($request_uri, 'chapter-01') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($request_uri, 'chapter-01') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-1-the-illusion/chapter-1-the-approach/part-1-anomalies" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 1: The Approach
    </wa-button>

    <!-- Chapter 2 -->
    <wa-button appearance="<?= str_contains($request_uri, 'chapter-02') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($request_uri, 'chapter-02') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-1-the-illusion/chapter-2-the-core-ecosystem/part-1-the-commons" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 2: The Core Ecosystem
    </wa-button>

    <!-- Chapter 3 -->
    <wa-button appearance="<?= str_contains($request_uri, 'chapter-03') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($request_uri, 'chapter-03') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-1-the-illusion/chapter-3-the-triple-birthday/part-1-the-morning-routine" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 3: The Triple Birthday
    </wa-button>

    <!-- Chapter 4 -->
    <wa-button appearance="<?= str_contains($request_uri, 'chapter-04') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($request_uri, 'chapter-04') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-1-the-illusion/chapter-4-the-failed-apology/part-1-the-band-room-hallway" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 4: The Failed Apology
    </wa-button>

    <!-- Chapter 5 -->
    <wa-button appearance="<?= str_contains($request_uri, 'chapter-05') ? 'filled-outlined' : 'plain' ?>" variant="<?= str_contains($request_uri, 'chapter-05') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-1-the-illusion/chapter-5-interlude/part-1-the-new-hierarchy" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 5: Interlude
    </wa-button>
</div>