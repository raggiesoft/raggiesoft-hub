<?php
// includes/components/sidebars/engine-room/artists/crimson-node/sidebar-story.php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<div class="list-group list-group-flush border-bottom mb-4">
    <a href="/engine-room/artists/crimson-node/story" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/story') ? 'active' : '' ?>">
        <i class="fa-duotone fa-book-atlas me-2"></i>Archives Index
    </a>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
    <span>Book 1: The Illusion</span>
</h6>
<div class="list-group list-group-flush">
    <!-- Chapter 1 -->
    <a href="/engine-room/artists/crimson-node/story/book-1/chapter-01" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/engine-room/artists/crimson-node/story/chapter-01') ? 'active' : '' ?>">
        Chapter 1: The Approach
    </a>
    <?php if ($request_uri == '/engine-room/artists/crimson-node/story/chapter-01'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 1: Anomalies
        </a>
    <?php endif; ?>

    <!-- Chapter 2 -->
    <a href="/engine-room/artists/crimson-node/story/book-1/chapter-02" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/engine-room/artists/crimson-node/story/chapter-02') ? 'active' : '' ?>">
        Chapter 2: The Core Ecosystem
    </a>
    <?php if ($request_uri == '/engine-room/artists/crimson-node/story/chapter-02'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 1: The Commons
        </a>
        <a href="#part-2" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 2: 6th Period Lunch
        </a>
        <a href="#part-3" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 3: The Omni-Q Incident
        </a>
        <a href="#part-4" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 4: The Fallout
        </a>
    <?php endif; ?>
</div>

    <!-- Chapter 3 -->
    <a href="/engine-room/artists/crimson-node/story/book-1/chapter-03" class="list-group-item list-group-item-action fw-bold <?= ($request_uri == '/engine-room/artists/crimson-node/story/chapter-03') ? 'active' : '' ?>">
        Chapter 3: The Triple Birthday
    </a>
    <?php if ($request_uri == '/engine-room/artists/crimson-node/story/chapter-03'): ?>
        <a href="#part-1" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 1: The Morning Routine
        </a>
        <a href="#part-2" class="list-group-item list-group-item-action ps-4 py-2 border-0 text-secondary" style="font-size: 0.9em; background-color: rgba(0,0,0,0.02);">
            <i class="fa-solid fa-angle-right me-2 text-danger"></i>Part 2: The Breakfast Spread
        </a>
    <?php endif; ?>
