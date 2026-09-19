<?php
// includes/components/sidebars/sidebar-phalanx.php
$sidebar_uri = $_SERVER['REQUEST_URI'] ?? '/';

// Helper function to easily check active states
function is_active_phalanx($path, $current_uri) {
    return str_contains($current_uri, $path);
}
?>

<div class="list-group mb-4 shadow-sm border-0">
    <div class="list-group-item bg-dark text-white fw-bold text-uppercase" style="border-left: 4px solid #dc3545;">
        The Phalanx
    </div>
    
    <a href="/engine-room/artists/crimson-node/characters/family" class="list-group-item list-group-item-action <?php echo ($sidebar_uri === '/engine-room/artists/crimson-node/characters/family' || $sidebar_uri === '/engine-room/artists/crimson-node/characters/family/') ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-users"></i> Overview
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/matt-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/matt-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-microchip"></i> Matt Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/sarah-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/sarah-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-shield-halved"></i> Sarah Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/emily-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/emily-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-microphone"></i> Emily Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/jessica-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/jessica-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-wave-square"></i> Jessica Brooks
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/rachel-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/rachel-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-drum"></i> Rachel Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/shiloh-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/shiloh-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-guitar"></i> Shiloh Brooks
    </a>
    
    <a href="/engine-room/artists/crimson-node/characters/family/chloe-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/chloe-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-chess-knight"></i> Chloe Brooks
    </a>
    
    <!-- Unified Pelletier Twins Profile -->
    <a href="/engine-room/artists/crimson-node/characters/family/the-pelletier-twins" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/the-pelletier-twins', $sidebar_uri) ? 'active' : ''; ?>">
        <i slot="start" class="fa-solid fa-user-group"></i> Elise & Elodie Pelletier
    </a>
</div>
