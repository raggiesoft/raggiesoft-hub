<?php
// pages/about/aethel.php
// Theme: Onyx (Fantasy/Gold)
?>

<div class="position-relative p-5 text-center bg-black border-bottom border-warning border-opacity-50 shadow-sm overflow-hidden" 
     style="min-height: 60vh;">
     
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background-image: url('https://assets.raggiesoft.com/aethel/images/scenes/aethel-ruins-bg.jpg'); 
                background-size: cover; background-position: center; opacity: 0.4;">
    </div>
    
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: radial-gradient(circle, rgba(0,0,0,0.2) 0%, rgba(0,0,0,1) 90%);">
    </div>

    <div class="position-relative col-lg-8 mx-auto my-5 py-5 text-white">
        <img src="https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png" 
             alt="The Silver Gauntlet" 
             class="mb-4 drop-shadow-glow" 
             style="max-width: 150px; opacity: 0.9;">
             
        <h1 class="display-3 fw-bold mb-3 cinzel-font text-warning" style="text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);">
            The Silver Gauntlet
        </h1>
        <p class="lead mb-4 fs-4 cinzel-font text-light opacity-75 letter-spacing-1">
            Of Aethel
        </p>
        <div class="d-flex justify-content-center gap-3">
            <span class="badge bg-transparent border border-secondary text-secondary rounded-0 px-3 py-2 text-uppercase letter-spacing-2">Est. 1989 (In Spirit)</span>
            <span class="badge bg-transparent border border-warning text-warning rounded-0 px-3 py-2 text-uppercase letter-spacing-2">High Fantasy</span>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="text-center mb-5">
                <p class="fs-4 fst-italic text-muted mb-4" style="font-family: 'Georgia', serif;">
                    "Two twins. One broken world. And a debt that must be paid in fire."
                </p>
                <hr class="w-25 mx-auto border-warning opacity-50 my-4">
                <p class="lead text-secondary">
                    <em>The Silver Gauntlet of Aethel</em> is a love letter to the golden age of 1980s fantasy adventure. It combines the structured magic systems of classic RPGs with a character-driven narrative about sibling bonds, grief, and the cost of power.
                </p>
            </div>

            <div class="row g-4 mb-5">
                
                <div class="col-md-6">
                    <div class="card h-100 bg-black border border-secondary text-white shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-warning fs-1">
                                <i class="fa-duotone fa-people-arrows"></i>
                            </div>
                            <h4 class="cinzel-font fw-bold text-uppercase mb-3">The Twins</h4>
                            <p class="text-secondary small">
                                <strong>Kaelan & Kaela.</strong> Separated by fate, bound by blood. They represent the duality of the world—Steel and Spirit. Their journey is not just to save the world, but to find each other again.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 bg-black border border-secondary text-white shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-warning fs-1">
                                <i class="fa-duotone fa-hand-holding-magic"></i>
                            </div>
                            <h4 class="cinzel-font fw-bold text-uppercase mb-3">The Gauntlet</h4>
                            <p class="text-secondary small">
                                An ancient relic of the <strong>Iron Era</strong>. It grants the wielder immense power over the physical world, but it feeds on the user's memories. To use it is to forget why you fight.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card bg-body-tertiary border-0 border-start border-4 border-warning shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="cinzel-font fw-bold mb-3 text-dark">The Author's Intent</h3>
                            <p class="text-muted">
                                I grew up in the era of <em>The Legend of Zelda</em>, <em>Dragonlance</em>, and Saturday morning cartoons. There was a specific texture to fantasy back then—a mix of wonder and danger that felt tangible.
                            </p>
                            <p class="text-muted mb-0">
                                <strong>Aethel</strong> is my attempt to recapture that feeling. It is a world built on "Video Game Logic" applied to a serious narrative. Dungeons have keys, bosses have patterns, but the characters feel pain, loss, and joy in real-time.
                            </p>
                        </div>
                        <div class="col-lg-4 text-center mt-4 mt-lg-0">
                            <img src="https://assets.raggiesoft.com/portfolio/images/logos/logo-michael.png" 
                                 class="rounded-circle border border-warning shadow-sm" 
                                 width="120" 
                                 alt="Michael Ragsdale">
                            <p class="small text-uppercase fw-bold text-warning mt-2 letter-spacing-2">Michael Ragsdale</p>
                            <span class="badge bg-dark text-secondary border border-secondary">Lorekeeper</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center pt-4">
                <a href="/raggiesoft-books/aethel-saga" class="btn btn-outline-dark btn-lg rounded-0 px-5 py-3 border-2 cinzel-font fw-bold hover-warning">
                    <i class="fa-duotone fa-book-open-reader me-2"></i>Open The Tome
                </a>
                <div class="mt-3">
                    <a href="/about/license" class="small text-muted text-decoration-none">
                        Content licensed under CC BY-SA 4.0
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Aethel Specific Typography overrides */
    .cinzel-font { font-family: 'Cinzel', serif; }
    .letter-spacing-1 { letter-spacing: 1px; }
    .letter-spacing-2 { letter-spacing: 2px; }
    
    .hover-warning:hover {
        background-color: #d4af37 !important;
        border-color: #d4af37 !important;
        color: #000 !important;
    }
    
    .drop-shadow-glow {
        filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.5));
    }
</style>