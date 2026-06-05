<?php
// pages/engine-room/artists/overview.php
// The Complete Roster.
// Access: /engine-room/artists

$pageTitle = "Artist Roster - Engine Room Records";
?>

<style>
    /* Boxed Header for Sidebar Layouts */
    .industrial-header {
        background-color: #fff;
        background-image: radial-gradient(circle at 50% 50%, #f8f8f8 0%, #e9ecef 100%);
        border-bottom: 4px solid var(--bs-primary);
        border-radius: 0; 
        color: #000;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .industrial-header {
        background-color: #0b0914; /* Tying into the deep dark theme */
        background-image: radial-gradient(circle at 50% 50%, #1a1c20 0%, #0d0f12 100%);
        border-bottom: 4px solid var(--bs-primary);
        color: #fff;
    }
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .card-industrial {
        border: 1px solid var(--bs-border-color);
        background-color: var(--bs-tertiary-bg);
        border-radius: 0;
        transition: all 0.3s ease;
    }
    .card-industrial:hover {
        border-color: var(--bs-primary);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transform: translateY(-4px);
    }
    [data-bs-theme="dark"] .card-industrial:hover {
        box-shadow: 0 10px 20px rgba(255, 107, 107, 0.15); /* Red hazard glow */
    }
    .badge-industrial {
        background-color: #1a1d20;
        color: #fff;
        font-family: var(--font-tech);
        border-radius: 0;
        border: 1px solid #444;
    }
    [data-bs-theme="dark"] .badge-industrial {
        background-color: #000;
        border-color: var(--bs-primary);
        color: var(--bs-primary);
    }
    
    /* IMAGE FIX: NO CROP */
    .artist-img-box {
        height: 250px; 
        display: flex; 
        align-items: center; 
        justify-content: center;
        background-color: #000;
        border-bottom: 1px solid var(--bs-border-color);
        padding: 20px;
    }
    .artist-img-box img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain; 
        filter: drop-shadow(0 0 10px rgba(255,255,255,0.1));
    }
</style>

<div class="container-fluid py-4">
    
    <div class="industrial-header p-4 p-md-5 mb-5 text-center shadow-sm">
        <h1 class="display-4 fw-bold text-stenciled mb-2">The Roster</h1>
        <p class="font-monospace opacity-75 mb-0">ENGINE ROOM RECORDS // OFFICIAL ARTIST ARCHIVE</p>
    </div>

    <div class="row g-4 mb-5">
        
        <!-- THE STARDUST ENGINE (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <div class="card card-industrial w-100">
                <div class="artist-img-box">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                         alt="The Stardust Engine">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge badge-industrial">ERR-001</span>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase">The Stardust Engine</h3>
                    <p class="card-text small flex-grow-1">
                        The founding artist. A family-owned progressive rock unit blending 80s synth-pop with industrial rock.
                    </p>
                    <a href="/engine-room/artists/stardust-engine" class="btn btn-outline-primary rounded-0 w-100 text-uppercase fw-bold mt-3 font-monospace">Access Archive</a>
                </div>
            </div>
        </div>

        <!-- FRACTURED PRISMS (OFFLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <div class="card card-industrial w-100">
                <div class="artist-img-box bg-dark">
                     <i class="fa-duotone fa-gem fa-5x text-secondary opacity-50"></i>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge badge-industrial">ERR-002</span>
                        <span class="led led-busy" title="Processing"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">Fractured Prisms</h3>
                    <p class="card-text small flex-grow-1">
                        The First Signing (1998). Discovered in a Maryland vault. Known for "Kaleidoscope Sun" and the "Safe Harbor" flute melody.
                    </p>
                    <button class="btn btn-secondary rounded-0 w-100 text-uppercase fw-bold mt-3 font-monospace" disabled>
                        <i class="fa-solid fa-lock me-2"></i>Decrypting Files...
                    </button>
                </div>
            </div>
        </div>

        <!-- THE PAPER WALL (OFFLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <div class="card card-industrial w-100">
                <div class="artist-img-box bg-dark">
                    <i class="fa-duotone fa-waveform-lines fa-5x text-secondary opacity-50"></i>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge badge-industrial">ERR-003</span>
                        <span class="led led-off" title="Offline"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">The Paper Wall</h3>
                    <p class="card-text small flex-grow-1">
                        Alternative Rock / Post-Grunge. The architects of <em>Static & Silence</em>.
                    </p>
                    <button class="btn btn-dark rounded-0 w-100 text-uppercase fw-bold mt-3 font-monospace border-secondary" disabled>
                        <i class="fa-solid fa-ban me-2"></i>Restricted Access
                    </button>
                </div>
            </div>
        </div>

        <!-- FIRELIGHT (OFFLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <div class="card card-industrial w-100">
                <div class="artist-img-box bg-black">
                     <i class="fa-duotone fa-fire-flame-curved fa-5x text-secondary opacity-50"></i>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge badge-industrial">ERR-004</span>
                        <span class="led led-off" title="Offline"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">Firelight</h3>
                    <p class="card-text small flex-grow-1">
                        Symphonic Rock / Fantasy. The musical voice of the <em>Aethel Saga</em>. Soaring vocals, heavy synths, and narrative depth.
                    </p>
                    <button class="btn btn-dark rounded-0 w-100 text-uppercase fw-bold mt-3 font-monospace border-secondary" disabled>
                        <i class="fa-solid fa-ban me-2"></i>Awaiting Transmission
                    </button>
                </div>
            </div>
        </div>

        <!-- THE WINTER PALACE (OFFLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <div class="card card-industrial w-100 opacity-75">
                <div class="artist-img-box bg-body-tertiary">
                    <i class="fa-duotone fa-snowflake fa-5x text-secondary opacity-50"></i>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge badge-industrial text-secondary border-secondary">ERR-005</span>
                        <span class="led led-off" title="Offline"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-secondary">The Winter Palace</h3>
                    <p class="card-text small flex-grow-1 text-muted">
                        Neoclassical / Atmospheric. Instrumental works and holiday arrangements. The quiet corner of the Engine Room.
                    </p>
                    <button class="btn btn-dark rounded-0 w-100 text-uppercase fw-bold mt-3 font-monospace border-secondary opacity-50" disabled>
                        <i class="fa-solid fa-snowflake me-2"></i>In Cold Storage
                    </button>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center pt-3 border-top border-secondary opacity-75">
        <a href="/engine-room" class="btn btn-link text-decoration-none text-uppercase fw-bold text-body font-monospace">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Headquarters
        </a>
    </div>

</div>