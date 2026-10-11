<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/discography/1989-neon-hearts.php
 * 
 * 1. Lore Context:
 *    - The 1989 "Panic" Album. Created under intense studio pressure from Apex Records 
 *      following the Cydele "Sermon" controversy.
 *    - Represents a clash of "Studio Overcorrection" vs. "Artist Rebellion," famously 
 *      featuring the canceled track "The Promise."
 * 
 * 2. Component Architecture:
 *    - Uses shared `_album-art-header.php` component with the 'pact' variant (pink border) 
 *      to visually signal Apex Records' oppressive contractual control.
 *    - Uses standard Bootstrap 5 container and grid layouts, along with `_tracklist-downloader.php`.
 * 
 * 3. Maintenance Rule:
 *    - DO NOT alter the Bootstrap 5 DOM layout or the 'pact' variant designation.
 * ============================================================================
 */
// Page data
$pageTitle = "Neon Hearts (1989) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1989-neon-hearts';


?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Neon Hearts Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Neon Hearts
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1989 "Panic" Album
            </p>
            <p class="lead text-secondary">
                The band's sophomore album, released in 1989. Its creation was defined by Apex Records' sheer panic following the <strong>Cydele</strong> "Sermon" controversy.
            </p>
            <p class="text-muted">
                Terrified of controversy, the studio demanded the "safest," most polished synth-pop album possible. The result is a fascinating document of "Studio Overcorrection" vs. "Artist Rebellion," featuring some of the band's safest pop hits alongside their angriest rock protests.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="alert alert-dark border-primary mt-5">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-ban text-primary fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-primary text-uppercase mb-1">The Canceled Track: "The Promise"</h5>
                <p class="mb-0 small text-muted">
                    Apex originally demanded a "religious pop" song to compete with <strong>Cydele's</strong> upcoming <em>Sermon</em> album. When the <em>Sermon</em> video controversy broke (with its "burning crosses"), the label panicked and buried the demo. It wouldn't be heard until the 2007 <em>Lost Sounds</em> compilation.
                </p>
            </div>
        </div>
    </div>

    <div class="alert alert-dark border-info mt-4">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-microphone-stand text-info fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-info text-uppercase mb-1">The Acoustic Sketch</h5>
                <p class="mb-0 small text-muted">
                    Before Apex Records drowned the title track in heavy synth-pop gloss, "Neon Hearts" was originally written as a tender, intimate ballad by Ryan and Cassidy. You can hear this rare early version (just a brother and sister jamming with a piano and acoustic guitar) on the 
                    <a href="/engine-room/artists/stardust-engine/discography/2007-lost-sounds" class="alert-link fw-bold text-decoration-underline text-info-emphasis">2007 Lost Sounds</a> 
                    archival compilation.
                </p>
            </div>
        </div>
    </div>

</div>