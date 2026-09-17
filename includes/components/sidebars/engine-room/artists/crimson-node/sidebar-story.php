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
    <span>Narrative Logs</span>
</h6>
<div class="list-group list-group-flush">
    <a href="/engine-room/artists/crimson-node/story/log-01" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/story/log-01') ? 'active' : '' ?>">
        Log 01: The Illusion
    </a>
    <a href="/engine-room/artists/crimson-node/story/log-02" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/story/log-02') ? 'active' : '' ?>">
        Log 02: The 6th Period Ecosystem
    </a>
</div>
