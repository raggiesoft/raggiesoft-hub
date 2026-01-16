<?php
// Page data
$pageTitle = "Lost Sounds (2007) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2007-lost-sounds';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Lost Sounds Album Art',
            'variant' => 'neutral' // Grey border for archival release
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-secondary mb-0" style="font-family: 'Impact', sans-serif;">
                Lost Sounds
            </h1>
            <p class="h4 text-muted fw-bold mb-3">
                The 2007 Archival Compilation
            </p>
            <p class="lead text-body">
                Released during the band's "Burnout Hiatus" (2008-2014), this collection was a gift to the fans who had kept the flame alive.
            </p>
            <p class="text-muted">
                It collects the "Lost Gems" of the Apex era—polished demos, B-sides, and controversial tracks that the studio buried. For decades, these songs existed only as bootlegs traded by the "Forger Nation." Now, they are officially part of the canon.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Track-by-Track Lore</h3>

        <div class="list-group list-group-flush bg-transparent">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. The Promise (1989 "Sermon" Demo)</strong>
                    <span class="badge bg-danger">The Banned Track</span>
                </div>
                <p class="mb-0">
                    The most famous "lost song" in the band's history. Apex demanded a "religious pop" song to compete with <strong>Cydele's</strong> upcoming <em>Sermon</em> album. When the <em>Sermon</em> video controversy broke (with its "burning crosses"), the label panicked and buried this demo deep in the vault.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. Atmosphere (1992 Demo)</strong></div>
                <p class="mb-0">
                    The "Lost Gem" from the canceled <em>Friction</em> sessions. The band wrote it about a literal space shuttle re-entry ("Here comes the friction / Feel the fire"), but the "rogue" executive Julian Vance misinterpreted it as a sexual metaphor. This is the raw, unpolished 1992 recording.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">3. Midnight Drivers</strong></div>
                <p class="mb-0">
                    Cut from <em>Electric Color</em> (1987). A "darkwave" synth track that Apex rejected for being "too melancholic" and not a "Top 40" hit like "Light Up the Night." It remains a cult favorite for its moody, driving bassline.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">4. I'll Be Your Home</strong></div>
                <p class="mb-0">
                    A beautiful, minimalist "Stardust" ballad sung by Cassidy. The studio dismissed it as "filler" and cut it to save runtime on the vinyl release, prioritizing the "epic duet" formula instead.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">5. Harbor in the Storm</strong></div>
                <p class="mb-0">
                    The 6-minute epic rock ballad that lost the battle for a spot on the debut album. Apex chose "My Anchor Holds" instead because it was shorter and featured both vocalists. This track showcases Ryan's "Engine" power in a way the studio tried to suppress.
                </p>
            </div>
            
             <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">6. We Own the Night (Pre-1987 Demo)</strong>
                    <span class="badge bg-secondary">The Lost Anthem</span>
                </div>
                <p class="mb-0">
                    Written in 1986 as a potential entrance anthem for the CPI Forgers football team. The band ultimately submitted "Ignition" instead, but this raw, "Queen-style" chant song remains a fascinating glimpse into their early "stadium rock" ambitions.
                </p>
            </div>

        </div>
    </div>

</div>