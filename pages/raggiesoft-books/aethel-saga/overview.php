<?php
// pages/raggiesoft-books/aethel-saga/overview.php
// LANDING PAGE: aethelsaga.com
// Design: Cinematic / Immersive / microsite-style

$pageTitle = "The Silver Gauntlet of Aethel";

// ASSETS
$album_path_web = '/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel';
$cover_art = 'https://assets.raggiesoft.com/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';
?>

<div class="aethel-hero py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            
            <div class="col-md-5 text-center mb-4 mb-md-0 hero-content">
                <img src="<?php echo $cover_art; ?>" 
                     alt="The Silver Gauntlet of Aethel" 
                     class="img-fluid shadow-lg rounded"
                     style="max-width: 350px; border: 2px solid #d4af37; box-shadow: 0 0 30px rgba(212, 175, 55, 0.2);">
            </div>

            <div class="col-md-7 hero-content text-center text-md-start">
                <div class="mb-3">
                    <span class="badge bg-black border border-warning text-warning rounded-pill px-3 py-2 text-uppercase letter-spacing-1">
                        <i class="fa-duotone fa-book-sparkles me-2"></i>RaggieSoft Original Saga
                    </span>
                </div>
                
                <h1 class="display-3 fw-bold text-body-emphasis mb-0 cinzel-font">
                    The Silver Gauntlet
                </h1>
                <h2 class="display-6 text-warning mb-4 cinzel-font opacity-75">
                    of Aethel
                </h2>
                
                <p class="lead text-body mb-4" style="font-family: 'Georgia', serif; line-height: 1.8;">
                    <em>Two twins. One broken world. And a debt that must be paid in fire.</em>
                </p>
                
                <p class="text-secondary mb-5">
                    A sprawling 1980s-style fantasy adventure spanning four eras of myth, silence, tides, and iron. Follow the journey of <strong>Kaelan (The Sun)</strong> and <strong>Kaela (The Moon)</strong> as they battle to restart the heart of a dying planet.
                </p>

                <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                    <a href="#toc" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow-glow text-dark">
                        <i class="fa-duotone fa-book-open me-2"></i>Start Reading
                    </a>
                    <a href="#soundtrack" class="btn btn-outline-primary btn-lg rounded-pill px-4">
                        <i class="fa-duotone fa-music me-2"></i>Soundtrack
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="toc" class="py-5 border-top border-secondary border-opacity-25">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="h2 text-body cinzel-font border-bottom border-warning d-inline-block pb-2">
                The Saga Timeline
            </h3>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 era-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-warning"><i class="fa-duotone fa-sun-cloud fa-3x"></i></div>
                        <h5 class="card-title cinzel-font">Era 1: Myth</h5>
                        <hr class="border-secondary opacity-25">
                        <p class="small text-secondary">
                            The Architect's Lesson. The tuning of the flare and the betrayal that broke the sky.
                        </p>
                        <a href="/raggiesoft-books/aethel-saga/era-1/book-1/chapter-01" class="btn btn-sm btn-outline-warning w-100 mt-2">
                            Read Book I
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 era-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-info"><i class="fa-duotone fa-snowflake fa-3x"></i></div>
                        <h5 class="card-title cinzel-font">Era 2: Silence</h5>
                        <hr class="border-secondary opacity-25">
                        <p class="small text-secondary">
                            The Sundering of Sunstead. The twins wake in a world without suns to fight the Iron Heart.
                        </p>
                        <button class="btn btn-sm btn-outline-secondary w-100 mt-2" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 era-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-primary"><i class="fa-duotone fa-water fa-3x"></i></div>
                        <h5 class="card-title cinzel-font">Era 3: Tides</h5>
                        <hr class="border-secondary opacity-25">
                        <p class="small text-secondary">
                            The journey across the endless ocean to find the Star-Eater and the Clockwork Ocean.
                        </p>
                        <button class="btn btn-sm btn-outline-secondary w-100 mt-2" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 era-card">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-danger"><i class="fa-duotone fa-fire-burner fa-3x"></i></div>
                        <h5 class="card-title cinzel-font">Era 4: Iron</h5>
                        <hr class="border-secondary opacity-25">
                        <p class="small text-secondary">
                            The final confrontation. The Wall, the Garden, and the payment of the debt.
                        </p>
                        <button class="btn btn-sm btn-outline-secondary w-100 mt-2" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="soundtrack" class="bg-body-tertiary py-5 border-top border-secondary">
    <div class="container">
        
        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                 <h2 class="display-5 fw-bold text-body-emphasis mb-2 cinzel-font">The Soundtrack</h2>
                 <p class="text-secondary lead">
                     Original Score by <strong class="text-body">Firelight</strong>
                 </p>
                 <p class="text-secondary small mb-0">
                     Produced by Engine Room Records. Listen while you read.
                 </p>
            </div>
            <div class="col-md-4 text-end d-none d-md-block">
                <i class="fa-duotone fa-compact-disc fa-4x text-secondary opacity-25"></i>
            </div>
        </div>

        <div class="card bg-body border-secondary">
            <div class="card-body">
                <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
            </div>
        </div>

    </div>
</div>