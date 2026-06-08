<?php
// pages/engine-room/artists/fractured-prisms/discography/1983-carnaby-street.php
// Page data
$pageTitle = "Carnaby Street (1983) - Fractured Prisms";
$album_path_web = '/engine-room-records/artists/fractured-prisms/1983-carnaby-street';

?>

<div class="container py-5 bg-prism-dark">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Carnaby Street Album Art',
            'variant' => 'mod-revival' 
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase gothic-font text-glow-prism mb-0">
                Carnaby Street
            </h1>
            <p class="h4 text-secondary fw-bold mb-3" style="font-family: var(--font-tech);">
                The 1983 Debut Album
            </p>
            <p class="lead">
                The masterpiece that defined an era. Blending atmospheric progressive rock with sharp, melodic pop sensibilities, this 1983 release cemented Fractured Prisms as architects of the modern rock landscape.
            </p>
            <p class="text-muted mb-3">
                Following the 1981 Shap Fell disaster that claimed the lives of four family members, Rhys and Claire Manning retreated to a heavily modified, soundproofed ranch house in Williamsport, Maryland. Refusing to hire session musicians, the two siblings sequenced sprawling progressive rock arrangements entirely on analog synthesizers and early drum machines to fill the silence left by their orchestra.
            </p>
            <p class="text-muted border-start border-prism ps-3 py-1" style="background: rgba(177, 156, 217, 0.05);">
                <strong class="text-primary" style="font-family: var(--font-gothic); letter-spacing: 1px;">A TRIBUTE TO THE MISSING FOUR:</strong><br>
                Originally intended to be a self-titled record, the siblings renamed it <em>Carnaby Street</em> as a heartbreaking homage. It commemorates the final, perfect day the six family members spent together shopping for records in Soho, just twenty-four hours before the train derailment shattered their world.
            </p>
        </div>
    </div>

    <hr class="border-prism opacity-50 mb-5">

    <?php 
    // This will grab the exact track list using the JSON reader
    include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
    ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-4 border-bottom border-prism pb-2" style="font-family: var(--font-tech);">
        <i class="fa-duotone fa-box-archive me-2 pulse-icon"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5 align-items-stretch">
        
        <div class="col-md-5">
            <div class="card h-100 lore-card rounded-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <i class="fa-duotone fa-file-invoice-dollar fs-3 text-primary"></i>
                        <h5 class="card-title h6 fw-bold text-uppercase ms-3 mb-0 align-self-center" style="font-family: var(--font-tech);">The Cost of Isolation</h5>
                    </div>
                    <p class="card-text small mb-0">
                        Because <em>Carnaby Street</em> was technically produced, mixed, and mastered across a hybrid corporate structure (Rhys's logistics company in Delaware and the physical studio in Maryland), the album's massive commercial success inadvertently created a financial disaster. The complex, multi-state royalty distribution bypassed standard band accounting, accidentally triggering a massive, unexpected IRS tax bill for the isolated, grieving siblings.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 artifact-paper rounded-0 p-3">
                <h5 class="h6 fw-bold text-uppercase mb-2">
                    <i class="fa-duotone fa-music-note me-2"></i>The Relics: Gwen's Flute
                </h5>
                <p class="mb-0 small artifact-text-muted">
                    There are no hired session musicians on <em>Carnaby Street</em>. When a traditional instrument cuts through the icy synthesisers, it is a holy relic pulled from the 1981 wreckage. When the piercing, organic breath of the flute anchors tracks like "Mirrors of Yesterday," it is Claire physically holding and playing her deceased cousin's wooden flute to keep her "Safe Harbor" melody alive in the room.
                </p>
            </div>
        </div>

        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <div class="polaroid-prism">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/1983-carnaby-street/archive-1883.jpg" alt="Claire and Rhys with the salvaged flute and cables" style="max-width: 100%; height: auto;">
                <div class="polaroid-caption text-center mt-2" style="font-family: 'Shadows Into Light', cursive; font-size: 0.9rem; color: #333;">
                    Williamsport, MD (1983)
                </div>
            </div>
        </div>

    </div>
</div>