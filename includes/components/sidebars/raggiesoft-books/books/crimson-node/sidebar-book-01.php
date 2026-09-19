<?php
// includes/components/sidebars/engine-room/artists/crimson-node/sidebar-story.php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<div class="list-group list-group-flush border-bottom mb-4">
    <a href="/raggiesoft-books/books/crimson-node" class="list-group-item list-group-item-action <?= ($request_uri == '/raggiesoft-books/books/crimson-node') ? 'active' : '' ?>">
        <i slot="start" class="fa-duotone fa-book-atlas"></i> Archives Index
    </wa-button>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
    <span>Book 1: The Illusion</span>
</h6>
<div class="list-group list-group-flush">
    <!-- Chapter 1 -->
    <a href="/raggiesoft-books/books/crimson-node/book-01/chapter-01" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-01') ? 'active' : '' ?>">
        Chapter 1: The Approach
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-01'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: Anomalies
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 2 -->
    <a href="/raggiesoft-books/books/crimson-node/book-01/chapter-02" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-02') ? 'active' : '' ?>">
        Chapter 2: The Core Ecosystem
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-02'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Commons
        </wa-button>
        <a href="#part-2" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: 6th Period Lunch
        </wa-button>
        <a href="#part-3" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: The Omni-Q Incident
        </wa-button>
        <a href="#part-4" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Fallout
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 3 -->
    <a href="/raggiesoft-books/books/crimson-node/book-01/chapter-03" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-03') ? 'active' : '' ?>">
        Chapter 3: The Triple Birthday
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-03'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Morning Routine
        </wa-button>
        <a href="#part-2" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: The Breakfast Spread
        </wa-button>
        <a href="#part-3" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: The Stadium Seating
        </wa-button>
        <a href="#part-4" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Majesty Express
        </wa-button>
        <a href="#part-5" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 5: The Simulation
        </wa-button>
        <a href="#part-6" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 6: Player Two
        </wa-button>
        <a href="#part-7" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 7: The Legal Baseline
        </wa-button>
        <a href="#part-8" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 8: The Triad
        </wa-button>
    <?php endif; ?>

    <!-- Chapter 4 -->
    <a href="/raggiesoft-books/books/crimson-node/book-01/chapter-04" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-04') ? 'active' : '' ?>">
        Chapter 4: The Failed Apology
    </wa-button>
    <?php if ($request_uri == '/raggiesoft-books/books/crimson-node/book-01/chapter-04'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 1: The Band Room Hallway
        </wa-button>
        <a href="#part-2" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 2: The Principal's Office
        </wa-button>
        <a href="#part-3" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 3: Interlude - The Phone Call
        </wa-button>
        <a href="#part-4" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 4: The Rumor Mill
        </wa-button>
        <a href="#part-5" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 5: The ISS Trailer
        </wa-button>
        <a href="#part-6" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 6: The Charlottesville Plan
        </wa-button>
        <a href="#part-7" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i slot="start" class="fa-solid fa-angle-right"></i> Part 7: The Final Transfer
        </wa-button>
    <?php endif; ?>
</div>
