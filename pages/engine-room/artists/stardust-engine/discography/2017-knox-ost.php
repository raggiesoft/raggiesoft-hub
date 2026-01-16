<?php
// Page data
$pageTitle = "Knox (Original Soundtrack) (2017) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2017-knox-ost';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Knox Soundtrack Album Art',
            'variant' => 'axiom' // Orange/Industrial theme for Port Telsus
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Knox (O.S.T.)
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2017 Original Soundtrack
            </p>
            <p class="lead text-secondary">
                The band's first foray into film scoring. An atmospheric, industrial-rock soundscape composed for the sci-fi epic <em>Knox</em>.
            </p>
            <p class="text-muted">
                Departing from their arena-rock roots, this album explores the dualities of the <em>Knox</em> universe: the rusting, neon-lit oppression of <strong>Port Telsus</strong> (The Axiom) and the bioluminescent, ethereal danger of <strong>The Weave</strong> (The Canopy). It features heavy use of found-sound percussion, analog synthesis, and the band's signature "Engine" grit re-contextualized for a dystopian future.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php // include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="alert alert-dark border-info bg-opacity-10 py-4">
        <div class="d-flex align-items-center">
            <div class="me-4">
                 <i class="fa-duotone fa-wave-pulse text-info fa-3x"></i>
            </div>
            <div>
                <h4 class="alert-heading h5 fw-bold text-info text-uppercase mb-1">
                    Audio Archives: Decrypting...
                </h4>
                <p class="mb-0 text-muted">
                    The tracklist for this archive is currently being recovered from the Axiom data grid. 
                    Please check back soon for the full audio logs and liner notes.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h3 class="h5 fw-bold text-warning border-bottom border-warning pb-2 mb-3">The Axiom Sound</h3>
            <p class="text-muted small">
                To capture the oppressive atmosphere of Port Telsus, Ryan and Tyler built custom percussion rigs using scrap metal and industrial piping. The guitar tones are heavily processed, mimicking the "grinding gears" of the city.
            </p>
        </div>
        <div class="col-md-6">
            <h3 class="h5 fw-bold text-success border-bottom border-success pb-2 mb-3">The Weave Sound</h3>
            <p class="text-muted small">
                For the jungle sequences, Cassidy utilized "organic" synthesizers and woodwinds (including the famous "2:22 Flute" leitmotif) to create a sound that felt alive, breathing, and dangerous.
            </p>
        </div>
    </div>

</div>