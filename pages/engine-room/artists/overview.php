<?php
// pages/engine-room/artists/overview.php
// The Complete Roster.
// Access: /engine-room/artists
// UPDATED: Added Firelight & Winter Palace to the grid.

$pageTitle = "Artist Roster - Engine Room Records, LLC";
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
            <h1 class="display-3 fw-bold text-stenciled mb-2">The Roster</h1>
            <p class="lead font-monospace opacity-75 mb-4">ENGINE ROOM RECORDS // OFFICIAL ARTIST ARCHIVE</p>
        </div>
    </div>

    <div class="bg-body py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card card-industrial w-100">
                        <div class="bg-black p-4 text-center border-bottom border-secondary" style="height: 250px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png" 
                                 class="img-fluid" style="max-height: 150px;" alt="The Stardust Engine">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <span class="badge badge-industrial align-self-start mb-2">ERR-001</span>
                            <h3 class="h4 fw-bold text-uppercase">The Stardust Engine</h3>
                            <p class="card-text small flex-grow-1">
                                The founding artist. A family-owned progressive rock unit blending 80s synth-pop with industrial rock.
                            </p>
                            <a href="/engine-room/artists/stardust-engine" class="btn btn-dark rounded-0 w-100 text-uppercase fw-bold mt-3">View Archive</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card card-industrial w-100 border-danger">
                        <div class="bg-dark p-0 border-bottom border-secondary overflow-hidden position-relative" style="height: 250px;">
                            <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                                 class="img-fluid w-100 h-100 object-fit-cover opacity-75" alt="Mirage">
                            <div class="position-absolute bottom-0 start-0 bg-danger text-white px-2 py-1 small fw-bold text-uppercase">Active</div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <span class="badge badge-industrial align-self-start mb-2">ERR-002</span>
                            <h3 class="h4 fw-bold text-uppercase text-danger">Mirage</h3>
                            <p class="card-text small flex-grow-1">
                                Cinematic rock opera led by Julian Croft. Known for the "Paper Wall" legal trust and the album <em>Static & Silence</em>.
                            </p>
                            <a href="/engine-room/artists/mirage" class="btn btn-outline-danger rounded-0 w-100 text-uppercase fw-bold mt-3">View Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card card-industrial w-100 border-warning">
                        <div class="bg-black p-0 border-bottom border-secondary overflow-hidden position-relative" style="height: 250px;">
                             <img src="https://assets.raggiesoft.com/engine-room-records/artists/firelight/band-logo.png" 
                                 class="img-fluid w-100 h-100 object-fit-cover opacity-90" alt="Firelight">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <span class="badge badge-industrial align-self-start mb-2">ERR-003</span>
                            <h3 class="h4 fw-bold text-uppercase text-warning">Firelight</h3>
                            <p class="card-text small flex-grow-1">
                                Symphonic Rock / Fantasy. The musical voice of the <em>Aethel Saga</em>. Soaring vocals, heavy synths, and narrative depth.
                            </p>
                            <a href="/raggiesoft-books/aethel-saga" class="btn btn-outline-warning rounded-0 w-100 text-uppercase fw-bold mt-3 text-dark">View Saga</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card card-industrial w-100 opacity-75" style="border-style: solid;">
                        <div class="bg-body-tertiary p-4 text-center border-bottom border-secondary" style="height: 250px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-duotone fa-snowflake fa-5x text-secondary opacity-50"></i>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <span class="badge bg-secondary rounded-0 align-self-start mb-2">ERR-004</span>
                            <h3 class="h4 fw-bold text-uppercase text-secondary">The Winter Palace</h3>
                            <p class="card-text small flex-grow-1 text-muted">
                                Neoclassical / Atmospheric. Instrumental works and holiday arrangements. The quiet corner of the Engine Room.
                            </p>
                            <a href="/engine-room/artists/the-winter-palace" class="btn btn-outline-secondary rounded-0 w-100 text-uppercase fw-bold mt-3">View Archive</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-body-tertiary py-4 text-center border-top border-secondary">
        <a href="/engine-room" class="btn btn-link text-decoration-none text-uppercase fw-bold text-body">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Headquarters
        </a>
    </div>

</div>