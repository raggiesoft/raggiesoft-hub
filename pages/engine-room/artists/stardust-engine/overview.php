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

<section class="bg-black text-white py-5 border-bottom border-danger border-5" aria-labelledby="hard-reset-launch">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 order-2 order-lg-1">
                <span class="badge bg-danger text-uppercase letter-spacing-2 mb-3 px-3 py-2 border border-danger">
                    <i class="fa-duotone fa-sparkles me-2"></i>Out Now
                </span>
                
                <h2 id="hard-reset-launch" class="display-3 fw-bold text-uppercase mb-1" style="font-family: 'Impact', sans-serif;">
                    Hard Reset
                </h2>
                <p class="h4 text-warning mb-4 fw-light">The 1997 Commercial Comeback.</p>
                
                <p class="lead text-white-75 mb-4">
                    Experience the album that broke the industry cartel. 16 tracks of pure, uncompromised space-rock. No corporate oversight. No safety nets. Just the Engine and the Galaxy.
                </p>
                
                <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
                    <a href="<?php echo $root; ?>/discography/1997-hard-reset" class="btn btn-danger btn-lg text-uppercase fw-bold px-4 rounded-pill shadow-lg">
                        <i class="fa-duotone fa-compact-disc me-2"></i> Listen & Download
                    </a>
                </div>
                
                <div class="d-flex align-items-center p-3 bg-dark bg-opacity-50 border border-secondary rounded">
                    <div class="me-3 text-white-50">
                        <i class="fa-brands fa-creative-commons fa-2x"></i>
                        <i class="fa-brands fa-creative-commons-by fa-2x mx-1"></i>
                        <i class="fa-brands fa-creative-commons-sa fa-2x"></i>
                    </div>
                    <div class="small font-monospace text-white-75">
                        <strong class="text-success text-uppercase">100% Free Download</strong><br>
                        All tracks released under <a href="/license" class="text-info text-decoration-none border-bottom border-info">CC BY-SA 4.0</a>.
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="position-relative d-inline-block">
                    <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 bg-danger rounded-circle" style="filter: blur(70px); opacity: 0.4; z-index: 0;"></div>
                    
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" 
                         alt="Hard Reset Album Art - The Stardust Engine" 
                         class="img-fluid rounded position-relative z-1 shadow-lg" 
                         style="max-width: 450px; border: 1px solid #333;">
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-primary"><i class="fa-duotone fa-users fa-3x"></i></div>
                    <h3 class="fw-bold text-white">The Band</h3>
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
                    <h3 class="fw-bold text-white">The Lore</h3>
                    <p class="text-secondary small">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of independence.
                    </p>
                    <a href="<?php echo $root; ?>/story" class="btn btn-outline-warning mt-auto rounded-pill">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-success"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-white">The Discography</h3>
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