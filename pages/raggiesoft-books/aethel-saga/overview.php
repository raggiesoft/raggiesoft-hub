<?php
// pages/raggiesoft-books/aethel-saga/overview.php
// LANDING PAGE: aethelsaga.com
// Design: 1980s Fantasy Cinema / Immersive

$pageTitle = "The Silver Gauntlet of Aethel";

// 1. ASSETS CONFIGURATION
$album_path_web = '/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel';

// NEW: Updated Hero Poster
$poster_bg = 'https://assets.raggiesoft.com/aethel/images/aethel-hero.jpg';

$cover_art = 'https://assets.raggiesoft.com/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';
?>

<div class="aethel-hero py-5 text-center text-md-start d-flex align-items-center" 
     style="min-height: 85vh; 
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6) 80%, #000000 100%), url('<?php echo $poster_bg; ?>'); 
            background-size: cover; 
            background-position: center top;">
    
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
            <div class="col-lg-3 col-md-6 opacity-75">
                <div class="card h-100 era-card grayscale">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-secondary"><i class="fa-duotone fa-water fa-3x"></i></div>
                        <h5 class="card-title cinzel-font text-muted">Era 3: Tides</h5>
                        <p class="small text-secondary mt-3">The journey across the endless ocean to find the Star-Eater.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 opacity-75">
                <div class="card h-100 era-card grayscale">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 text-secondary"><i class="fa-duotone fa-fire-burner fa-3x"></i></div>
                        <h5 class="card-title cinzel-font text-muted">Era 4: Iron</h5>
                        <p class="small text-secondary mt-3">The final confrontation. The Wall, the Garden, and the debt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>