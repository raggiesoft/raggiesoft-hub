<?php
// /pages/home.php
// This view is loaded with p-0 on main, so we use container-fluid for a full-width hero
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

    <div class="container-fluid text-center pt-5 pb-2">
        <div class="container pt-5 pb-1">
            
            <h1 class="display-2 text-uppercase text-glow-primary" 
                style="font-family: 'Audiowide', sans-serif; letter-spacing: 2px;">
                <i class="fa-solid fa-rocket me-3"></i>The Stardust Engine
            </h1>
            
            <p class="lead fs-3 text-uppercase text-white" 
               style="font-family: 'Exo 2', sans-serif; font-weight: 300; letter-spacing: 4px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                A musical universe forged in the fires of CPI.
            </p>
            
        </div>
    </div>

    <div class="container-fluid py-5 border-bottom border-secondary border-opacity-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <div class="alert border-warning-subtle bg-hud-blue" role="alert">
                        
                        <h4 class="alert-heading fw-bold" style="font-family: 'Audiowide'">
                            <i class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>Welcome to the Project! (Start Here)
                        </h4>
                        <p>
                            <strong>This is a real AI art project AND a fictional narrative, presented as one experience.</strong> 
                            By continuing, you understand that this is a "dual-world" website. We welcome you to <a href="/about">learn more about the project</a>.
                        </p>
                        <hr class="border-warning-subtle opacity-50">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <strong style="font-family: 'Audiowide'">
                                    <i class="fa-duotone fa-brackets-curly me-2" aria-hidden="true" aria-hidden="true"></i>The "Real World" (Meta):
                                </strong>
                                <p class="mb-0 small">
                                    This is a portfolio piece by Michael Ragsdale. All music, art, and lore are co-created in collaboration with generative AI tools (Gemini, Suno, and DALL-E 3).
                                </p>
                            </div>
                            <div class="col-md-6 border-start-md border-warning border-opacity-50">
                                <strong style="font-family: 'Audiowide'">
                                    <i class="fa-duotone fa-book-sparkles me-2" aria-hidden="true"></i>The "In-Universe" (Narrative):
                                </strong>
                                <p class="mb-0 small">
                                    This is the official archive of the fictional band "The Stardust Engine"—a family of CPI alumni who fought their label and won their freedom.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- === End New Section === -->


<!-- === Featured Discography Carousel === -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 class="display-5 fw-bold border-bottom pb-2 mb-4">Featured Discography</h2>
            <div class="shadow-lg border-glow">
                <?php
                // This component is defined in /includes/components/carousel.php
                // It uses the DO Spaces URLs for images
                // NOTE: This carousel component will need to be created
                if (file_exists(ROOT_PATH . '/includes/components/carousel.php')) {
                    include ROOT_PATH . '/includes/components/carousel.php';
                } else {
                    echo '<div class="alert alert-danger">Error: Carousel component not found.</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- === End New Section === -->


<!-- Featured Links -->
<div class="container pb-5">
    <div class="row g-4">
        <!-- The Band -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-duotone fa-users me-2" aria-hidden="true"></i>The Band</h3>
                    <p class="fs-5">
                        Meet the five family members who started it all: Cassidy, Ryan, Holly, Evan, and Tyler.
                    </p>
                    <a href="/band" class="btn btn-primary mt-auto">View Bios</a>
                </div>
            </div>
        </div>
        <!-- The History (Updated Link) -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore</h3>
                    <p class="fs-5">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of Engine Room Records.
                    </p>
                    <a href="/story" class="btn btn-primary mt-auto">Read the History</a>
                </div>
            </div>
        </div>
        <!-- The Store (Updated Link) -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-duotone fa-record-vinyl me-2" aria-hidden="true"></i>The Music</h3>
                    <p class="fs-5">
                        Explore the full discography, from the polished 80s pop to the raw, independent rock of their rebirth.
                    </p>
                    <a href="/discography" class="btn btn-primary mt-auto">View Discography</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AI Disclaimer (This is now removed from the bottom) -->