<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the highly specific, deeply nested sidebar navigation for "Book 1: The Illusion" of the Crimson Node series.
 * 
 * DESIGN INTENT:
 * - Dynamically expands the Table of Contents based on the current `REQUEST_URI`.
 * - If a user is viewing a specific chapter (e.g., Chapter 2), the sidebar reveals the sub-parts for that specific chapter as anchor links (`#part-X`), while keeping other chapters collapsed.
 * - Uses standard Bootstrap 5 List Group classes for structure.
 * 
 * MAINTENANCE NOTES:
 * - Highly brittle. The `$request_uri` checks require exact string matches. If routing changes (e.g., trailing slashes are enforced, or query strings are added), the expanding logic will fail.
 * - Anchor links (`#part-1`) require corresponding `id` attributes on the target page's HTML elements to function correctly.
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
    <wa-button appearance="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-01') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-01') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-01/chapter-01" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 1: The Approach
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-01'): ?>
        <wa-button appearance="plain" size="small" href="#part-1" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: Anomalies
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 2 -->
    <wa-button appearance="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-02') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-02') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-01/chapter-02" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 2: The Core Ecosystem
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-02'): ?>
        <wa-button appearance="plain" size="small" href="#part-1" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Commons
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-2" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: 6th Period Lunch
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-3" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: The Omni-Q Incident
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-4" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Fallout
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 3 -->
    <wa-button appearance="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-03') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-03') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-01/chapter-03" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 3: The Triple Birthday
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-03'): ?>
        <wa-button appearance="plain" size="small" href="#part-1" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Morning Routine
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-2" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: The Breakfast Spread
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-3" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: The Stadium Seating
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-4" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Majesty Express
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-5" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 5: The Simulation
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-6" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 6: Player Two
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-7" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 7: The Legal Baseline
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-8" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 8: The Triad
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 4 -->
    <wa-button appearance="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-04') ? 'filled-outlined' : 'plain' ?>" variant="<?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-04') ? 'brand' : 'neutral' ?>" href="/raggiesoft-books/books/crimson-node/book-01/chapter-04" class="w-100 text-start justify-content-start fw-bold" style="text-align: left;">
        Chapter 4: The Failed Apology
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-04'): ?>
        <wa-button appearance="plain" size="small" href="#part-1" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Band Room Hallway
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-2" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: The Principal's Office
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-3" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: Interlude - The Phone Call
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-4" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Rumor Mill
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-5" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 5: The ISS Trailer
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-6" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 6: The Charlottesville Plan
        </wa-button>
        <wa-button appearance="plain" size="small" href="#part-7" class="w-100 text-start justify-content-start ps-3" style="text-align: left;">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 7: The Final Transfer
        </wa-button>
    <?php endif; ?>
</div>
