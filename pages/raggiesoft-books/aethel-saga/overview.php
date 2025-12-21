<?php
// pages/raggiesoft-books/aethel-saga/overview.php
// The Main Library Hub for "The Silver Gauntlet of Aethel"
// Context: Landing page for the transmedia project (Book + Soundtrack).

$pageTitle = "The Silver Gauntlet of Aethel";

// Link to the Firelight Soundtrack on the CDN
$album_path_web = '/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'The Silver Gauntlet of Aethel Cover Art',
            'variant' => 'axiom' // Gold border for High Fantasy
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <div class="mb-2">
                <span class="badge bg-warning text-dark border border-warning shadow-sm">
                    <i class="fa-duotone fa-book-sparkles me-2"></i>RaggieSoft Original Saga
                </span>
                <span class="badge bg-dark border border-secondary text-secondary ms-2">
                    <i class="fa-duotone fa-music me-2"></i>Soundtrack Available
                </span>
            </div>
            
            <h1 class="display-3 fw-bold text-uppercase mb-1" style="font-family: 'Cinzel', serif; letter-spacing: 2px;">
                The Silver Gauntlet
            </h1>
            <h2 class="h4 text-secondary text-uppercase letter-spacing-4 mb-4">
                of Aethel
            </h2>
            
            <p class="lead">
                Two twins. One broken world. And a debt that must be paid in fire.
            </p>
            <p class="text-muted">
                <strong>The Silver Gauntlet of Aethel</strong> is a sprawling 80s-style fantasy adventure spanning four eras of myth, silence, tides, and iron. It follows the journey of <strong>Kaelan (The Sun)</strong> and <strong>Kaela (The Moon)</strong> as they battle to restart the heart of a dying planet.
            </p>
            
            <div class="mt-4 d-flex gap-3 flex-wrap">
                <a href="#read" class="btn btn-primary rounded-pill px-4 shadow-glow">
                    <i class="fa-duotone fa-book-open me-2"></i>Start Reading
                </a>
                <a href="#listen" class="btn btn-outline-warning rounded-pill px-4">
                    <i class="fa-duotone fa-music me-2"></i>Listen to Soundtrack
                </a>
            </div>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <div id="read" class="mb-5">
        <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-3 mb-4">
            <h3 class="h4 fw-bold text-uppercase mb-0 text-info">
                <i class="fa-duotone fa-timeline me-2"></i>The Saga Timeline
            </h3>
            <span class="small text-muted font-monospace">STATUS: IN PROGRESS</span>
        </div>

        <div class="row g-4">
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-dark border-warning shadow-sm">
                    <div class="card-header bg-black border-bottom border-warning text-warning fw-bold text-uppercase small text-center">
                        Era 1: Myth
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-white text-center font-serif">The Silver Sun</h5>
                        <p class="small text-white-50 text-center flex-grow-1">
                            The Architect's Lesson. The tuning of the flare and the betrayal that broke the sky.
                        </p>
                        <a href="/raggiesoft-books/aethel-saga/era-1/book-1/chapter-01" class="btn btn-sm btn-warning w-100 mt-3 fw-bold">
                            Read Prologue
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-dark border-info shadow-sm">
                    <div class="card-header bg-black border-bottom border-info text-info fw-bold text-uppercase small text-center">
                        Era 2: Silence
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-white text-center font-serif">The Silver Gauntlet</h5>
                        <p class="small text-white-50 text-center flex-grow-1">
                            The Sundering of Sunstead. The twins wake in a world without suns to fight the Iron Heart.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary w-100 mt-3 disabled">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-dark border-primary shadow-sm">
                    <div class="card-header bg-black border-bottom border-primary text-primary fw-bold text-uppercase small text-center">
                        Era 3: Tides
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-white text-center font-serif">The Glass Sea</h5>
                        <p class="small text-white-50 text-center flex-grow-1">
                            The journey across the endless ocean to find the Star-Eater and the Clockwork Ocean.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary w-100 mt-3 disabled">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-dark border-danger shadow-sm">
                    <div class="card-header bg-black border-bottom border-danger text-danger fw-bold text-uppercase small text-center">
                        Era 4: Iron
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-white text-center font-serif">The Magnetic North</h5>
                        <p class="small text-white-50 text-center flex-grow-1">
                            The final confrontation. The Wall, the Garden, and the payment of the debt.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary w-100 mt-3 disabled">Coming Soon</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="listen" class="mt-5 pt-5 border-top border-secondary border-opacity-50">
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center">
                     <div class="bg-warning text-dark rounded-circle p-3 me-3">
                        <i class="fa-duotone fa-compact-disc fa-2x"></i>
                     </div>
                     <div>
                         <h3 class="h3 fw-bold text-uppercase mb-0">Official Soundtrack</h3>
                         <p class="text-muted mb-0">Original Score by <strong>Firelight</strong></p>
                     </div>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <small class="text-muted fst-italic">
                    "Read with the music. The themes are woven into the text."
                </small>
            </div>
        </div>

        <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
    </div>

</div>