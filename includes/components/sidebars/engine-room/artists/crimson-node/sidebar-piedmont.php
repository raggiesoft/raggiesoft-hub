<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the specialized sidebar for the "Piedmont" character subset within the Crimson Node lore.
 * 
 * DESIGN INTENT:
 * - Uses contrasting Bootstrap cards (Dark vs. Danger headers) to visually separate "Piedmont Directory" characters from the antagonistic "The Phalanx" family tree.
 * - Implements simple active state checking based on a presumed `$currentPath` variable.
 * 
 * MAINTENANCE NOTES:
 * - `$currentPath` is NOT defined within this file. It relies on the parent template establishing this variable before including the sidebar. This is a potential source of undefined variable warnings.
 * - Extremely minimal right now; designed to expand as more character profiles are added to these factions.
 */
// sidebar-piedmont.php
?>
<!-- LEGACY LAYOUT: Primary faction grouping card. Uses standard dark header styling. -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-dark text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/piedmont" class="text-white text-decoration-none d-block">
            <i slot="start" class="fa-solid fa-arrow-left"></i> Piedmont Directory
        </a>
    </div>
    <div class="list-group list-group-flush">
        <a href="/engine-room/artists/crimson-node/characters/piedmont/trent-montgomery" class="list-group-item list-group-item-action <?= ($currentPath == '/engine-room/artists/crimson-node/characters/piedmont/trent-montgomery') ? 'active' : '' ?>">
            Trent Montgomery
        </a>
    </div>
</div>
<div class="card border-0 shadow-sm">
    <div class="card-header bg-danger text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        The Phalanx
    </div>
    <div class="list-group list-group-flush">
        <a href="/engine-room/artists/crimson-node/characters/family" class="list-group-item list-group-item-action">
            View Family Directory
        </a>
    </div>
</div>
