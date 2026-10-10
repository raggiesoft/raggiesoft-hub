<?php
/**
 * Crimson Node - CCC Campus Sidebar
 * 
 * ARCHITECTURAL OVERVIEW:
 * This sidebar component is used within the Crimson Node narrative section, specifically
 * for characters associated with the "CCC Campus" (e.g., the Bouchard sisters).
 * It features a two-card layout: the primary directory for CCC characters, and a 
 * supplementary card linking back to the core "Phalanx" family directory.
 * 
 * LORE CONTEXT:
 * CCC Campus represents an antagonist/rival faction within the Crimson Node universe.
 * 
 * LOGIC & CONSTRAINTS:
 * - Active states are determined by comparing `$currentPath` (defined externally) 
 *   to exact string paths.
 * - Relies heavily on standard Bootstrap 5 `.card` and `.list-group` components.
 * 
 * File Info: includes/components/sidebars/engine-room/artists/crimson-node/sidebar-ccc.php
 */
?>
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-dark text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/ccc" class="text-white text-decoration-none d-block">
            <i slot="start" class="fa-solid fa-arrow-left"></i> CCC Campus
        </a>
    </div>
    <div class="list-group list-group-flush">
        <!-- 
          Active State Logic:
          Uses a simple ternary operator to check if `$currentPath` matches the hardcoded URL.
          If true, applies the Bootstrap 'active' class to highlight the character link.
        -->
        <a href="/engine-room/artists/crimson-node/characters/ccc/heather-bouchard" class="list-group-item list-group-item-action <?= ($currentPath == '/engine-room/artists/crimson-node/characters/ccc/heather-bouchard') ? 'active' : '' ?>">
            Heather Bouchard
        </a>
        <a href="/engine-room/artists/crimson-node/characters/ccc/hailey-bouchard" class="list-group-item list-group-item-action <?= ($currentPath == '/engine-room/artists/crimson-node/characters/ccc/hailey-bouchard') ? 'active' : '' ?>">
            Hailey Bouchard
        </a>
    </div>
</div>
<div class="card border-0 shadow-sm">
    <!-- Supplementary Card: Link to the main protagonist faction -->
    <div class="card-header bg-danger text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        The Phalanx
    </div>
    <div class="list-group list-group-flush">
        <a href="/engine-room/artists/crimson-node/characters/family" class="list-group-item list-group-item-action">
            View Family Directory
        </a>
    </div>
</div>
