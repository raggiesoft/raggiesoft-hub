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
    
    <a href="/engine-room/artists/crimson-node/family" class="list-group-item list-group-item-action <?php echo ($sidebar_uri === '/engine-room/artists/crimson-node/family' || $sidebar_uri === '/engine-room/artists/crimson-node/family/') ? 'active' : ''; ?>">
        <i class="fa-solid fa-users me-2 <?php echo ($sidebar_uri === '/engine-room/artists/crimson-node/family' || $sidebar_uri === '/engine-room/artists/crimson-node/family/') ? 'text-white' : 'text-secondary'; ?>"></i> Overview
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/matt-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/matt-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-microchip me-2 <?php echo is_active_phalanx('/matt-miller', $sidebar_uri) ? 'text-white' : 'text-danger'; ?>"></i> Matt Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/sarah-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/sarah-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-shield-halved me-2 <?php echo is_active_phalanx('/sarah-miller', $sidebar_uri) ? 'text-white' : 'text-primary'; ?>"></i> Sarah Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/emily-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/emily-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-microphone me-2 <?php echo is_active_phalanx('/emily-miller', $sidebar_uri) ? 'text-white' : 'text-warning'; ?>"></i> Emily Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/jessica-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/jessica-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-wave-square me-2 <?php echo is_active_phalanx('/jessica-brooks', $sidebar_uri) ? 'text-white' : 'text-info'; ?>"></i> Jessica Brooks
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/rachel-miller" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/rachel-miller', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-drum me-2 <?php echo is_active_phalanx('/rachel-miller', $sidebar_uri) ? 'text-white' : 'text-success'; ?>"></i> Rachel Miller
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/shiloh-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/shiloh-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-guitar me-2 <?php echo is_active_phalanx('/shiloh-brooks', $sidebar_uri) ? 'text-white' : 'text-primary'; ?>"></i> Shiloh Brooks
    </a>
    
    <a href="/engine-room/artists/crimson-node/family/chloe-brooks" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/chloe-brooks', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-chess-knight me-2 <?php echo is_active_phalanx('/chloe-brooks', $sidebar_uri) ? 'text-white' : 'text-secondary'; ?>"></i> Chloe Brooks
    </a>
    
    <!-- Unified Pelletier Twins Profile -->
    <a href="/engine-room/artists/crimson-node/family/the-pelletier-twins" class="list-group-item list-group-item-action <?php echo is_active_phalanx('/the-pelletier-twins', $sidebar_uri) ? 'active' : ''; ?>">
        <i class="fa-solid fa-user-group me-2 <?php echo is_active_phalanx('/the-pelletier-twins', $sidebar_uri) ? 'text-white' : 'text-dark'; ?>"></i> Elise & Elodie Pelletier
    </a>
</div>
