<?php
// pages/engine-room/artists/mirage.php
// Artist Profile: Mirage (The First Signing)
// "We're going to build an engine, too."

$pageTitle = "Mirage - Engine Room Records Roster";
?>

<style>
    .industrial-header {
        background-color: #fff;
        background-image: radial-gradient(circle at 50% 50%, #f8f8f8 0%, #e9ecef 100%);
        border-bottom: 4px solid #000;
        color: #000;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .industrial-header {
        background-color: #111;
        background-image: radial-gradient(circle at 50% 50%, #222 0%, #000 100%);
        border-bottom: 4px solid #333;
        color: #fff;
    }
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .card-industrial {
        border: 2px solid #333;
        background-color: #f4f4f4;
        color: #000;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .card-industrial {
        background-color: #1a1a1a;
        border-color: #555;
        color: #e0e0e0;
    }
    .badge-industrial {
        background-color: #000;
        color: #fff;
        border-radius: 0;
    }
    [data-bs-theme="dark"] .badge-industrial {
        background-color: #fff;
        color: #000;
    }
</style>

<div class="container-fluid p-0">
    
    <div class="industrial-header py-5">
        <div class="container py-5">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <span class="badge badge-industrial mb-3 p-2">ROSTER ID: ERR-002</span>
                    <h1 class="display-1 fw-bold text-stenciled mb-0">MIRAGE</h1>
                    <p class="lead font-monospace opacity-75 mt-2">
                        <i class="fa-solid fa-location-dot me-2"></i>ORIGIN: BLACKSBURG, VA
                        <span class="mx-3">|</span>
                        <i class="fa-solid fa-calendar me-2"></i>SIGNED: 2001
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="p-3 border border-2 border-dark d-inline-block bg-body">
                        <h6 class="text-uppercase fw-bold mb-1">Status:</h6>
                        <span class="text-success fw-bold font-monospace">
                            <i class="fa-solid fa-circle me-2 small"></i>ACTIVE / TOURING
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-7">
                    <h2 class="h3 fw-bold text-uppercase text-stenciled mb-4 border-bottom border-secondary pb-2">
                        The Mission Profile
                    </h2>
                    
                    <p class="lead">
                        Mirage is not just a band; it is a survival mechanism. Formed by <strong>Julian Croft</strong> and <strong>Maya Sterling</strong>, the collective blends the scale of cinematic rock opera with the raw grit of industrial metal.
                    </p>
                    
                    <div class="card card-industrial mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger text-uppercase mb-3">
                                <i class="fa-solid fa-file-contract me-2"></i>The "Paper Wall"
                            </h5>
                            <p class="card-text small">
                                Julian Croft (Lead Vocals) and Maya Sterling (Percussion) live as a married couple but remain legally single. Under current disability laws, marriage would strip Julian of his SSI and Medicaid—a death sentence for his care. 
                            </p>
                            <p class="card-text small fw-bold mb-0">
                                Engine Room Records does not just distribute their music. We fund the "Paper Wall" legal trust that protects their assets and independence.
                            </p>
                        </div>
                    </div>

                    <h3 class="h5 fw-bold text-uppercase mt-5 mb-3">The "Safe Harbor" Lineup</h3>
                    <ul class="list-group rounded-0">
                        <li class="list-group-item bg-transparent border-secondary d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Julian Croft ("Leo")</strong>
                                <br><small class="opacity-75">Lead Vocals / Composition</small>
                            </div>
                            <i class="fa-solid fa-wheelchair text-muted"></i>
                        </li>
                        <li class="list-group-item bg-transparent border-secondary d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Maya Sterling ("Olivia")</strong>
                                <br><small class="opacity-75">Percussion / Vocals / Care Partner</small>
                            </div>
                            <i class="fa-solid fa-heart text-danger"></i>
                        </li>
                        <li class="list-group-item bg-transparent border-secondary">
                            <strong>The Sisters (Luna, Stella, Charlie):</strong> 
                            <span class="opacity-75">Izzy, Bea, Charlotte Croft</span>
                        </li>
                        <li class="list-group-item bg-transparent border-secondary">
                            <strong>The Cousins (Enforcers):</strong> 
                            <span class="opacity-75">Diana Hale, Ellie Cross, Fiona Croft</span>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-body-tertiary border border-secondary h-100">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-database fa-2x me-3 text-secondary"></i>
                            <h3 class="h4 fw-bold text-uppercase mb-0">Archive: The Meeting</h3>
                        </div>
                        <p class="font-monospace small text-muted mb-4">
                            DATE: OCTOBER 2000<br>
                            LOC: CPI CAMPUS / NEWMAN HALL
                        </p>
                        
                        <p>
                            Julian Croft was 19, attempting to restart his life after escaping his abuser ("Vanessa"). He rolled into the back of Newman Hall during a CPI Orientation event, unsure if he belonged.
                        </p>
                        <p>
                            On stage, <strong>Ryan O'Connell</strong>—The Stardust Engine's T10 paraplegic frontman—was strapped into his chair, sweating, screaming, and dominating the room with the band's anthem, <em>Ignition (The Forger's Call)</em>.
                        </p>
                        <p>
                            Julian watched Ryan command 60,000 "Ironheads" without standing up. He watched the O'Connell siblings and Wright twins operate as a single, protective unit.
                        </p>
                        <p class="fst-italic border-start border-4 border-danger ps-3 my-4">
                            Julian grabbed Maya's hand. He realized he didn't need to be "cured" to be on stage. He turned to her and said:<br>
                            <strong class="text-danger">"We're going to build an engine, too."</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black text-white py-5 border-top border-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                         class="img-fluid border border-secondary shadow-glow" alt="Static & Silence Art">
                    
                    <div class="mt-4">
                        <button class="btn btn-outline-light rounded-0 w-100 mb-2 text-uppercase">
                            <i class="fa-solid fa-play me-2"></i>Stream Album
                        </button>
                        <button class="btn btn-danger rounded-0 w-100 text-uppercase fw-bold">
                            <i class="fa-solid fa-cart-shopping me-2"></i>Buy Physical (2xCD)
                        </button>
                    </div>
                </div>
                
                <div class="col-md-8 ps-md-5">
                    <h2 class="display-4 fw-bold text-stenciled mb-2">Static & Silence</h2>
                    <p class="lead text-white-50 mb-4">Released: 2001 // Rock Opera</p>
                    
                    <p class="mb-4">
                        A harrowing, autobiographical concept album detailing "Leo's" (Julian's) survival of abuse, his cross-country escape on a Greyhound bus, and his return to the "Safe Harbor."
                    </p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <h5 class="text-uppercase border-bottom border-secondary pb-2 mb-3">Disc 1: The Long Road West</h5>
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Nineteen and Invincible</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">A New Light</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Painted Smile</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">The Unspoken Word</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Westward, Broken</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Nashville</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">The Pasco Lock</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Shattered Voice, Silent Explosion</li>
                            </ol>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-uppercase border-bottom border-secondary pb-2 mb-3">Disc 2: The Journey Home</h5>
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item bg-transparent text-white border-secondary fw-bold">
                                    <i class="fa-solid fa-star text-danger me-2 small"></i>Curbstone, 4 AM
                                </li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">165 to Burien</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">A TTY Lifeline</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">The Anchor Holds</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Homeward on This Day</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Flight 1138</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Sanctuary</li>
                                <li class="list-group-item bg-transparent text-white-50 border-secondary">Haven City</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-tertiary py-4 text-center border-top border-secondary">
        <a href="/engine-room" class="btn btn-link text-decoration-none text-uppercase fw-bold text-body">
            <i class="fa-solid fa-arrow-left me-2"></i>Return to Roster
        </a>
    </div>

</div>