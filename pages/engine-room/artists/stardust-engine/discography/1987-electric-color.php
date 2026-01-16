<?php
// Page data
$pageTitle = "Electric Color (1987) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1987-electric-color';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Electric Color Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Electric Color
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1987 Debut Album
            </p>
            <p class="lead text-secondary">
                The debut album from The Stardust Engine, released in 1987. While a commercial success, its creation was defined by the "cold war" between the band and their label, Apex Records.
            </p>
            <p class="text-muted">
                The album is a sonic battlefield. Apex Records wanted a polished "Stardust" synth-pop record to compete on the charts. The band wanted to unleash their "Engine" rock energy. The result is a fascinating mix of studio-mandated pop and the band's own "malicious compliance" tracks.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="alert alert-dark border-secondary mt-5">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-scissors text-secondary fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-secondary text-uppercase mb-1">The Cut Track: "Midnight Drivers"</h5>
                <p class="mb-0 small text-muted">
                    Originally slated for Side B, the darkwave track "Midnight Drivers" was cut by Apex executives for being "too melancholic" and "off-brand." It remained unreleased until the 2007 <em>Lost Sounds</em> compilation.
                </p>
            </div>
        </div>
    </div>

</div>