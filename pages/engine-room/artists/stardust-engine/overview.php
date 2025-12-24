<?php
// pages/engine-room/artists/stardust-engine/overview.php
// The Band's "Home" Page

$root = '/engine-room/artists/stardust-engine';
?>

<div class="border-bottom border-primary border-opacity-50" style="
    position: relative;
    background-image: linear-gradient(rgba(13, 6, 26, 0.7), rgba(13, 6, 26, 0.7)), 
                      url('https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
">

    <div class="container-fluid text-center pt-5 pb-5">
        <div class="container pt-5 pb-4">
            
            <h1 class="display-2 text-uppercase text-glow-primary text-white" 
                style="font-family: 'Audiowide', sans-serif; letter-spacing: 2px;">
                <i class="fa-solid fa-rocket me-3"></i>The Stardust Engine
            </h1>
            
            <p class="lead fs-3 text-uppercase text-white" 
               style="font-family: 'Exo 2', sans-serif; font-weight: 300; letter-spacing: 4px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                A musical universe forged in the fires of CPI.
            </p>
            
            <div class="mt-4">
                <a href="<?php echo $root; ?>/discography" class="btn btn-primary btn-lg rounded-pill px-5 shadow-glow">
                    <i class="fa-duotone fa-play me-2"></i> Listen Now
                </a>
            </div>
            
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-primary"><i class="fa-duotone fa-users fa-3x"></i></div>
                    <h3 class="fw-bold">The Band</h3>
                    <p class="text-secondary small">
                        Meet the five family members who started it all: Cassidy, Ryan, Holly, Evan, and Tyler.
                    </p>
                    <a href="<?php echo $root; ?>/band" class="btn btn-outline-primary mt-auto rounded-pill">View Bios</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-warning"><i class="fa-duotone fa-book-atlas fa-3x"></i></div>
                    <h3 class="fw-bold">The Lore</h3>
                    <p class="text-secondary small">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of independence.
                    </p>
                    <a href="<?php echo $root; ?>/lore" class="btn btn-outline-warning mt-auto rounded-pill">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-success"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold">The Discography</h3>
                    <p class="text-secondary small">
                        Explore the full catalog, from the polished 80s pop to the raw, independent rock of their rebirth.
                    </p>
                    <a href="<?php echo $root; ?>/discography" class="btn btn-outline-success mt-auto rounded-pill">View Albums</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-lift { transition: transform 0.2s; }
.hover-lift:hover { transform: translateY(-5px); }
</style>