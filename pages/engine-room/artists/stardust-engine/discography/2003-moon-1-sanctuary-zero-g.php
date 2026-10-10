<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/discography/2003-moon-1-sanctuary-zero-g.php
 * 
 * 1. Lore Context:
 *    - "Sanctuary (Zero-G) [Moon 1]" is a mathematically precise atmospheric album 
 *      showcasing Cassidy O'Connell's "Cosmic Tidal Lock Sound."
 *    - It serves as the calm, atmospheric counterweight to the explosive "Mile Marker 98."
 * 
 * 2. Component Architecture:
 *    - Implements the shared `_album-art-header.php` component utilizing the 'info' 
 *      variant to convey a cool, stable visual tone.
 *    - Includes standard Bootstrap 5 grids and the `_tracklist-downloader.php` partial.
 * 
 * 3. Maintenance Rule:
 *    - DO NOT modify the HTML structure, Bootstrap 5 classes, or the 'info' variant flag.
 * ============================================================================
 */
// pages/engine-room/artists/stardust-engine/discography/2003-moon-1-sanctuary-zero-g.php
$pageTitle = "Sanctuary (Zero-G) [Moon 1] - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2003-sanctuary-zero-g';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Sanctuary (Zero-G) Album Art',
            'variant' => 'info' // Info border for Moon 1
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-info mb-0" style="font-family: 'Impact', sans-serif;">
                Sanctuary (Zero-G)
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                MOON 1
            </p>
            <p class="lead text-secondary">
                A zero-gravity atmospheric masterpiece showcasing the mathematically precise Cosmic Tidal Lock Sound™. A sanctuary built on unwavering loyalty in the endless black.
            </p>
            <p class="text-muted">
                Anchored by Cassidy O'Connell, this record represents the emotional stability and harmonic resonance of The Stardust Engine. It serves as the calm, atmospheric counterweight to its explosive sibling, Mile Marker 98. Thematically, this is a show being put on by the Engine Room Records Planetarium.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
</div>
