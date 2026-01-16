<?php
// Page data
$pageTitle = "Re-Ignition (2015) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2015-re-ignition';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Re-Ignition Album Art',
            'variant' => 'axiom' // Orange/Cyan to represent the Fire/Engine
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Re-Ignition
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2015 Reunion Album
            </p>
            <p class="lead text-secondary">
                The silence is broken. After the seven-year "Burnout Hiatus" (2008-2014), The Stardust Engine returned to the studio to light the fires once more.
            </p>
            <p class="text-muted">
                *Re-Ignition* is widely considered a massive return to form. It sheds the weariness of the *Long Way Home* era and recaptures the dual identity that defined them: the soaring "Stardust" melodies of Cassidy's synths and the raw "Engine" power of Ryan's guitar, finally balanced in perfect harmony.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>
        
        <div class="card border-warning bg-transparent mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa-duotone fa-shuttle-space text-warning fs-2 me-3"></i>
                    <h4 class="card-title text-warning fw-bold mb-0">The 23-Year Echo: "Re-Ignition"</h4>
                </div>
                <p class="card-text text-muted">
                    The title track is a piece of history reclaimed. In 1992, during the disastrous sessions for the canceled <em>Friction</em> album, the band wrote a heavy, driving instrumental riff intended to simulate the shaking of a spacecraft during re-entry.
                </p>
                <p class="card-text text-muted">
                    Because of the scandal with executive Julian Vance, that song was never recorded. For 23 years, the riff existed only in the band's memory. For this reunion, they finally dusted it off, stripped away the trauma of the past, and recorded it as it was always intended: a song about surviving the fire and coming home.
                </p>
            </div>
        </div>

        <div class="list-group list-group-flush bg-transparent">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. Re-Ignition</strong>
                    <span class="badge bg-danger">The Title Track</span>
                </div>
                <p class="mb-0">
                    "We are the cosmos, we are the fire!" The opening explosion of the album. It serves as a mission statement for their return: they didn't burn out; they just needed to refuel.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. The Longest Night</strong></div>
                <p class="mb-0">
                    A haunting synth-rock ballad led by Cassidy. It addresses the "Hiatus Years" directly, describing the feeling of "floating in the void" without the music that had defined their lives since they were teenagers.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">3. Iron & Dust</strong></div>
                <p class="mb-0">
                    A rhythmic, bass-heavy track featuring Evan and Tyler. It pays homage to their "Ironhead" roots at CPI, using industrial percussion samples to create a "foundry" atmosphere that recalls their 1986 anthem "Ignition."
                </p>
            </div>

        </div>
    </div>

</div>