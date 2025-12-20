<?php
// pages/engine-room/overview.php
// The Corporate Fortress. Stark. Industrial. Protective.
// v2.2 - Link Fix (Mirage)

$pageTitle = "Engine Room Records, LLC - Est. 1992";
?>

<style>
    /* INDUSTRIAL HEADER: ADAPTIVE */
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
    
    /* CARD INDUSTRIAL */
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
    .card-industrial:hover {
        border-color: #000;
        box-shadow: 10px 10px 0px rgba(0,0,0,0.2);
        transform: translateY(-5px);
    }
    [data-bs-theme="dark"] .card-industrial:hover {
        border-color: #fff;
        box-shadow: 10px 10px 0px rgba(255,255,255,0.1);
    }

    .badge-industrial {
        background-color: #000;
        color: #fff;
        font-family: monospace;
        border-radius: 0;
    }
    [data-bs-theme="dark"] .badge-industrial {
        background-color: #fff;
        color: #000;
    }
</style>

<div class="container-fluid p-0">
    
    <div class="industrial-header py-5">
        <div class="container py-5 text-center">
            
            <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.jpg" 
                 alt="Engine Room Records Official Seal" 
                 class="img-fluid rounded-circle mb-4 shadow-lg navbar-brand-corporate-img" 
                 style="max-width: 250px; border: 4px solid transparent;">
            
            <h1 class="display-3 fw-bold text-stenciled mb-2">Engine Room Records</h1>
            <p class="lead font-monospace opacity-75 mb-4">EST. 1992 // BLACKSBURG, VA</p>
            
            <div class="d-inline-block border border-2 border-dark p-3">
                <p class="mb-0 text-uppercase letter-spacing-1 small">
                    <i class="fa-solid fa-shield-halved me-2"></i>Mission Statement:
                </p>
                <p class="h5 fw-bold mb-0 mt-2">
                    "We do not own artists. We protect them."
                </p>
            </div>
        </div>
    </div>

    <div class="bg-body py-5">
        <div class="container">
            <div class="d-flex align-items-center mb-5 border-bottom border-secondary pb-3">
                <i class="fa-solid fa-users-viewfinder fa-2x me-3"></i>
                <h2 class="h3 fw-bold text-uppercase mb-0 text-stenciled">Active Roster</h2>
            </div>

            <div class="row g-5">
                
                <div class="col-lg-6">
                    <div class="card card-industrial h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 bg-black d-flex align-items-center justify-content-center p-4">
                                <img src="https://assets.raggiesoft.com/stardust-engine/images/logos/stardust-engine-logo.png" 
                                     class="img-fluid" alt="The Stardust Engine">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100">
                                    <h3 class="h4 fw-bold text-uppercase">The Stardust Engine</h3>
                                    <span class="badge badge-industrial align-self-start mb-3">FOUNDING ARTIST (1985)</span>
                                    <p class="card-text small">
                                        The architects of the "Independence Era." Known for their fusion of 80s synth-pop and industrial rock.
                                    </p>
                                    <ul class="list-unstyled small opacity-75 mb-4">
                                        <li><i class="fa-solid fa-compact-disc me-2"></i>Current Release: <em>Knox (O.S.T.)</em></li>
                                        <li><i class="fa-solid fa-location-dot me-2"></i>Origin: Blacksburg, VA</li>
                                    </ul>
                                    <div class="mt-auto">
                                        <a href="/" class="btn btn-dark w-100 rounded-0 text-uppercase fw-bold">View Archive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-industrial h-100 border-danger">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 bg-dark d-flex align-items-center justify-content-center p-0 overflow-hidden">
                                <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                                     class="img-fluid w-100 h-100 object-fit-cover opacity-75" alt="Mirage Album Art">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h3 class="h4 fw-bold text-uppercase text-danger">Mirage</h3>
                                        <i class="fa-solid fa-star text-warning"></i>
                                    </div>
                                    <span class="badge bg-danger rounded-0 align-self-start mb-3">SIGNED: 2001</span>
                                    <p class="card-text small">
                                        A cinematic rock opera collective led by <strong>Julian Croft</strong>. Their sound blends orchestral percussion, 80s pop, and industrial grit.
                                    </p>
                                    <div class="p-2 mb-3 small bg-body-tertiary border border-secondary">
                                        <i class="fa-solid fa-quote-left me-2 text-muted"></i>
                                        <em>"We're going to build an engine, too."</em><br>
                                        <span class="text-muted text-end d-block">- Julian Croft (2000)</span>
                                    </div>
                                    <div class="mt-auto">
                                        <a href="/engine-room/artists/mirage" class="btn btn-outline-danger w-100 rounded-0 text-uppercase fw-bold">
                                            View Artist Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-body-tertiary py-5 border-top border-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="position-relative shadow-lg border border-4 border-white">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                             class="img-fluid" alt="Static & Silence Cover Art">
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 fw-bold text-uppercase small">
                            New Release (2001)
                        </div>
                    </div>
                </div>
                <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
                    <h4 class="text-uppercase opacity-75 letter-spacing-2 mb-1">Catalog No. ERR-004</h4>
                    <h2 class="display-4 fw-bold text-stenciled mb-3 text-body-emphasis">Static & Silence</h2>
                    <h3 class="h4 text-danger mb-4">Mirage</h3>
                    
                    <p class="lead">
                        The defining masterpiece of the post-grunge era. A harrowing, autobiographical concept album detailing frontman Julian Croft's survival of abuse and his cross-country escape.
                    </p>
                    
                    <div class="row mt-4">
                        <div class="col-6">
                            <ul class="list-unstyled font-monospace small">
                                <li class="mb-2"><strong class="text-uppercase">Genre:</strong> Rock Opera / Industrial</li>
                                <li class="mb-2"><strong class="text-uppercase">Format:</strong> 2xCD / Vinyl</li>
                                <li class="mb-2"><strong class="text-uppercase">Centerpiece:</strong> "Curbstone, 4 AM"</li>
                            </ul>
                        </div>
                        <div class="col-6 border-start border-secondary ps-4">
                            <p class="small text-muted fst-italic">
                                "This album is a rootkit key. It opens the doors we were told to keep shut."
                                <br>— Holly O'Connell, CEO
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>