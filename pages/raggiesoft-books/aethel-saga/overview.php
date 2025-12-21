<?php
// pages/raggiesoft-books/aethel-saga/overview.php
// LANDING PAGE: aethelsaga.com
// Design: 1980s Fantasy Cinema / Immersive

$pageTitle = "The Silver Gauntlet of Aethel";

// ASSETS
$poster_bg = 'https://assets.raggiesoft.com/aethel/images/aethel-poster-background.jpg';
$album_art = 'https://assets.raggiesoft.com/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';

// FEATURED TRACKS (The ones you've already created)
$featured_tracks = [
    ["title" => "A Sister's Love (Main Theme)", "track" => "1-01", "desc" => "The bond that breaks the silence."],
    ["title" => "One Step at a Time", "track" => "1-09", "desc" => "The Gauntlet's path is never easy."],
    ["title" => "The Tyrant's Throne", "track" => "2-05", "desc" => "The Heart of Shadow beats."],
    ["title" => "I Can't Live Without You", "track" => "2-10", "desc" => "Kaela's Theme."]
];
?>

<div class="aethel-hero py-5 text-center text-md-start d-flex align-items-center" 
     style="min-height: 80vh; background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8)), url('<?php echo $poster_bg; ?>'); background-size: cover; background-position: center;">
    
    <div class="container relative z-2">
        <div class="row justify-content-center justify-content-md-start">
            <div class="col-lg-8">
                <div class="mb-4">
                    <span class="badge bg-warning text-dark border border-light rounded-pill px-3 py-2 text-uppercase letter-spacing-2 shadow-lg">
                        <i class="fa-solid fa-film me-2"></i>A RaggieSoft Original Saga
                    </span>
                </div>
                
                <h1 class="display-1 fw-bold text-white mb-0 cinzel-font text-shadow-lg" style="letter-spacing: -2px;">
                    THE SILVER<br>GAUNTLET
                </h1>
                <h2 class="display-5 text-warning mb-4 cinzel-font opacity-90 text-shadow-sm" style="font-weight: 300;">
                    OF AETHEL
                </h2>
                
                <p class="lead text-light mb-5 fs-4" style="font-family: 'Georgia', serif; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
                    Two twins. One broken world.<br>
                    <span class="text-white-50">And a debt that must be paid in fire.</span>
                </p>

                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center justify-content-md-start">
                    <a href="#prologue" class="btn btn-warning btn-xl rounded-pill px-5 py-3 fw-bold shadow-glow text-dark text-uppercase">
                        <i class="fa-duotone fa-book-open me-2"></i>Begin The Journey
                    </a>
                    <a href="#soundtrack" class="btn btn-outline-light btn-xl rounded-pill px-5 py-3 text-uppercase backdrop-blur">
                        <i class="fa-duotone fa-play me-2"></i>Listen
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="prologue" class="bg-body py-5 border-bottom border-secondary border-opacity-25">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-2 text-center text-warning opacity-50 d-none d-md-block">
                <i class="fa-duotone fa-stars fa-4x"></i>
            </div>
            <div class="col-md-8">
                <h3 class="text-uppercase text-secondary letter-spacing-2 fs-6 mb-3">Prologue: The Solar Garden</h3>
                <blockquote class="blockquote fs-4" style="font-family: 'Crimson Text', serif; border-left: 4px solid var(--bs-warning); padding-left: 1.5rem;">
                    "The Solar Garden did not smell of flowers; it smelled of ozone and potential. 
                    Solas stood in the center of the tuning ring... He was not a boy of flesh and blood here; 
                    he was a construct of pure, radiant energy, his skin glowing with the heat of a young star."
                </blockquote>
                <div class="text-end mt-4">
                    <a href="/raggiesoft-books/aethel-saga/era-1/book-1/chapter-01" class="icon-link icon-link-hover text-body-emphasis text-decoration-none">
                        Read "The Architect's Lesson"
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="toc" class="py-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="h2 text-body cinzel-font border-bottom border-warning d-inline-block pb-2">
                The Four Eras
            </h3>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 era-card border-warning">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-warning"><i class="fa-duotone fa-sun-cloud fa-3x"></i></div>
                        <h5 class="card-title cinzel-font">Era 1: Myth</h5>
                        <p class="small text-secondary mt-3">The Architect's Lesson. The tuning of the flare and the betrayal that broke the sky.</p>
                        <a href="/raggiesoft-books/aethel-saga/era-1" class="btn btn-sm btn-outline-warning w-100 mt-2">Enter Era I</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 opacity-75">
                <div class="card h-100 era-card grayscale">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-secondary"><i class="fa-duotone fa-snowflake fa-3x"></i></div>
                        <h5 class="card-title cinzel-font text-muted">Era 2: Silence</h5>
                        <p class="small text-secondary mt-3">The twins wake in a world without suns to fight the Iron Heart.</p>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>

<div id="soundtrack" class="bg-black text-white py-5 border-top border-warning border-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="position-relative">
                    <img src="<?php echo $album_art; ?>" alt="Soundtrack Cover" class="img-fluid rounded shadow-lg border border-secondary">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-75 backdrop-blur rounded-bottom">
                        <small class="text-uppercase text-warning letter-spacing-1 d-block">Now Streaming</small>
                        <strong class="fs-5">Original Score</strong>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button class="btn btn-outline-light btn-sm w-100"><i class="fa-brands fa-spotify me-2"></i>Spotify</button>
                </div>
            </div>

            <div class="col-md-8 ps-md-5">
                <h2 class="cinzel-font text-warning mb-4">Selected Tracks</h2>
                <div class="list-group list-group-flush bg-transparent">
                    
                    <?php foreach($featured_tracks as $song): ?>
                    <div class="list-group-item bg-transparent text-white border-secondary d-flex align-items-center justify-content-between py-3 px-0">
                        <div>
                            <span class="badge bg-secondary me-3 text-dark"><?php echo $song['track']; ?></span>
                            <span class="fs-5 fw-bold font-monospace"><?php echo $song['title']; ?></span>
                            <p class="small text-secondary mb-0 mt-1 fst-italic"><?php echo $song['desc']; ?></p>
                        </div>
                        <button class="btn btn-icon btn-outline-warning rounded-circle">
                            <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                    <?php endforeach; ?>

                </div>
                
                
            </div>
        </div>
    </div>
</div>