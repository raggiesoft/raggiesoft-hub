<?php
// Page data
$pageTitle = "Electric Color (1987) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1987-electric-color';

// Streaming Services IDs
$id_spotify = '1j58ruMuWa1DQ07aYQ3GMP';
$id_apple   = '1889498183';
$id_amazon  = 'B0GVGRYWH5';
$id_youtube = 'OLAK5uy_lsQ8F8UUgU5xAd_Hw5Q5hIcWceh8XrcmA';
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

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-3 border-bottom pb-2">
        <i class="fa-duotone fa-box-archive me-2"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="alert alert-dark border-secondary h-100 mb-0">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-cassette-tape text-secondary fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-secondary text-uppercase mb-1">The Rejected Demo: "Midnight Drivers"</h5>
                        <p class="mb-0 small text-muted">
                            Originally part of the band's early demo tape used to shop for labels, this darkwave track was flatly rejected by Apex executives for being "too melancholic" and "off-brand." It remained locked in the Engine Room vault until the 2007 <em>Lost Sounds</em> compilation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="alert alert-dark border-secondary h-100 mb-0">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-record-vinyl text-secondary fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-secondary text-uppercase mb-1">The Vinyl Cut: "Out of Time"</h5>
                        <p class="mb-0 small text-muted">
                            While included on the cassette and CD releases, Apex Records gleefully cut Ryan's 1:35 punk-inspired track from the physical LP, citing that Side B was "too long." They subsequently mastered the remaining rock tracks quietly to neuter their energy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>