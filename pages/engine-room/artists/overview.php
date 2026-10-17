<?php
/**
 * ARCHITECTURE & LORE SYSTEM
 * -------------------------------------------------------------------------
 * File: overview.php
 * Component Type: Artist Index / Hub
 * Purpose: Displays the complete roster of Engine Room Records artists (both active and inactive).
 * 
 * DESIGN CONSTRAINTS:
 * - Uses an "Industrial" theme variant with heavy stenciled text (`.text-stenciled`) and sharp, borderless cards (`.card-industrial`).
 * - Employs custom CSS for image containment (`.artist-img-box`) to ensure band logos are never cropped, regardless of aspect ratio.
 * - Simulates hardware status LEDs (`.led-on`, `.led-off`, `.led-busy`) for narrative immersion.
 * 
 * MAINTENANCE NOTES:
 * - Offline or "encrypted" bands must maintain the disabled button states (`disabled` attribute) to enforce the narrative rollout.
 * - Ensure `$cdnBaseUrl` is defined globally, as it is required for all artist logos.
 */
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
        
        <!-- ERR-001: THE STARDUST ENGINE (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                         alt="The Stardust Engine">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-001</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase">The Stardust Engine</h3>
                    <p class="card-text small flex-grow-1">
                        The founding artist. A family-owned progressive rock unit blending 80s synth-pop with industrial and stadium rock.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/stardust-engine" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i> Lore Archive
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/the-stardust-engine" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-002: FRACTURED PRISMS (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/fractured-prisms/band-logo.jpg" 
                         alt="Fractured Prisms">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-002</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">Fractured Prisms</h3>
                    <p class="card-text small flex-grow-1">
                        British Synth-Pop and gaslamp-lit rock operas from the Maryland sanctuary. Known for <em>Carnaby Street</em>, <em>1883</em>, and the "Safe Harbor" flute melody.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/fractured-prisms" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i> Lore Archive
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/fractured-prisms" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-003: THE PAPER WALL (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-paper-wall/band-logo.jpg" 
                         alt="The Paper Wall">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-003</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">The Paper Wall</h3>
                    <p class="card-text small flex-grow-1">
                        Literary Rock Operas / Alternative Rock. Formed by Julian Croft and Maya Sterling, and the architects of <em>Static &amp; Silence</em>.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/the-paper-wall" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i> Lore Archive
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/the-paper-wall" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-004: MANA CANVAS (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/mana-canvas/band-logo.jpg" 
                         alt="Mana Canvas">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-004</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">Mana Canvas</h3>
                    <p class="card-text small flex-grow-1">
                        Symphonic Fantasy Rock &amp; 16-bit Acoustic Alchemy. The musical voice of the <em>Aethel Saga</em>, featuring <em>Songs of the Untethered</em>.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/raggiesoft-books/aethel-saga" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-sparkles"></i> Saga Lore
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/mana-canvas" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-005: THE ARCTIC SYMPHONY PROJECT (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-arctic-symphony-project/band-logo.jpg" 
                         alt="The Arctic Symphony Project">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-005</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase text-body-emphasis">The Arctic Symphony Project</h3>
                    <p class="card-text small flex-grow-1">
                        Holiday Symphonic Rock / Neoclassical Metal. Creators of <em>Tales from the Solstice</em> and the Safe Harbor anthem <em>"Upon This Winter's Night."</em>
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/the-arctic-symphony-project" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i> Lore Archive
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/the-arctic-symphony-project" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>
        
        <!-- ERR-006: CRIMSON NODE (ONLINE) -->
        <div class="col-xl-6 col-lg-12 d-flex align-items-stretch">
            <wa-card class="card card-industrial w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="artist-img-box">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/crimson-node/band-logo.jpg" 
                         alt="Crimson Node">
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <wa-badge variant="neutral" appearance="accent" class="badge-industrial">ERR-006</wa-badge>
                        <span class="led led-on" title="System Online"></span>
                    </div>
                    <h3 class="h4 fw-bold text-uppercase">Crimson Node</h3>
                    <p class="card-text small flex-grow-1">
                        1980s progressive rock and stadium synth-pop. The unstoppable musical phalanx of the Miller and Brooks family operating out of the Kids House.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/crimson-node" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i> Lore Archive
                        </wa-button>
                        <wa-button variant="brand" appearance="accent" href="https://music.raggiesoft.com/crimson-node" target="_blank" rel="noopener" class="rounded-0 flex-grow-1 text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-headphones"></i> Listening Room
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

    </div>

    <div class="text-center pt-3 border-top border-secondary opacity-75">
        <wa-button variant="neutral" appearance="plain" href="/engine-room" class="text-uppercase fw-bold text-body font-monospace">
            <i slot="start" class="fa-solid fa-arrow-left"></i>Back to Headquarters
        </wa-button>
    </div>

</div>