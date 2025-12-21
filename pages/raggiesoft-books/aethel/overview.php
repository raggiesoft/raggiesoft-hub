<?php
// pages/raggiesoft-books/aethel-saga/overview.php
// The Landing Page for "The Silver Gauntlet of Aethel"
// Context: A multimedia experience connecting Text + Audio.

$pageTitle = "The Silver Gauntlet of Aethel";

// LINK TO THE SOUNDTRACK (Firelight)
// This tells the tracklist component where to find the JSONs
$album_path_web = '/engine-room/artists/firelight/2025-silver-gauntlet-of-aethel';
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'The Silver Gauntlet of Aethel Cover Art',
            'variant' => 'axiom' // Gold/Orange border for the Fantasy theme
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <span class="badge bg-warning text-dark border border-warning mb-2 shadow-glow">
                <i class="fa-duotone fa-book-sparkles me-2"></i>RaggieSoft Original Saga
            </span>
            <h1 class="display-3 fw-bold text-uppercase text-glow-primary mb-1" style="font-family: 'Cinzel', serif; letter-spacing: 2px;">
                The Silver Gauntlet
            </h1>
            <h2 class="h4 text-secondary text-uppercase letter-spacing-4 mb-4">
                of Aethel
            </h2>
            <p class="lead text-light">
                A sprawling 1980s fantasy-adventure spanning four eras of myth, silence, tides, and iron.
            </p>
            <p class="text-white-50 small">
                <strong>Audio Experience:</strong> This saga is accompanied by an original orchestral-rock soundtrack performed by <strong>Firelight</strong>, commissioned exclusively by Engine Room Records.
            </p>
            
            <div class="mt-4 d-flex gap-3">
                <a href="#read" class="btn btn-primary rounded-pill px-4">
                    <i class="fa-duotone fa-book-open me-2"></i>Read The Saga
                </a>
                <a href="#listen" class="btn btn-outline-warning rounded-pill px-4">
                    <i class="fa-duotone fa-music me-2"></i>Listen to Soundtrack
                </a>
            </div>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <div id="read" class="mb-5">
        <h3 class="h4 fw-bold text-uppercase text-light mb-4 border-bottom border-secondary pb-2">
            <i class="fa-duotone fa-timeline me-2 text-info"></i>The Saga Timeline
        </h3>

        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="card h-100 bg-dark border-secondary shadow-sm">
                    <div class="card-header bg-black border-bottom border-secondary text-warning fw-bold text-uppercase">
                        Era 1: The Age of Myth
                    </div>
                    <div class="card-body">
                        <h5 class="text-light">Book I: The Silver Sun</h5>
                        <p class="small text-muted">
                            The origin story of Solas and Lunara. The tuning of the flare, the betrayal of the Architect, and the fall of the Silver Temple.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary disabled w-100">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-dark border-secondary shadow-sm">
                    <div class="card-header bg-black border-bottom border-secondary text-info fw-bold text-uppercase">
                        Era 2: The Age of Silence
                    </div>
                    <div class="card-body">
                        <h5 class="text-light">Book I: The Silver Gauntlet</h5>
                        <p class="small text-muted">
                            The twins Kaelan and Kaela wake in a world without suns. The story of the Sundering of Sunstead and the rise of the Iron Heart.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary disabled w-100">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-dark border-secondary shadow-sm">
                    <div class="card-header bg-black border-bottom border-secondary text-primary fw-bold text-uppercase">
                        Era 3: The Age of Tides
                    </div>
                    <div class="card-body">
                        <h5 class="text-light">Book I: The Glass Sea</h5>
                        <p class="small text-muted">
                            The journey across the endless ocean. The encounter with the Star-Eater and the battle for the Clockwork Ocean.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary disabled w-100">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 bg-dark border-secondary shadow-sm">
                    <div class="card-header bg-black border-bottom border-secondary text-danger fw-bold text-uppercase">
                        Era 4: The Iron Heart
                    </div>
                    <div class="card-body">
                        <h5 class="text-light">Book I: The Magnetic North</h5>
                        <p class="small text-muted">
                            The final confrontation. The Garden, the Wall, and the ultimate payment of the debt between the Sun and the Moon.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary disabled w-100">Coming Soon</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="listen" class="mt-5 pt-5 border-top border-secondary border-opacity-50">
        <div class="d-flex align-items-center mb-4">
             <i class="fa-duotone fa-compact-disc fa-3x text-warning me-3"></i>
             <div>
                 <h3 class="h3 fw-bold text-uppercase text-light mb-0">Official Soundtrack</h3>
                 <p class="text-muted mb-0">Performed by <strong>Firelight</strong> // Produced by Engine Room Records</p>
             </div>
        </div>

        <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
    </div>

</div>