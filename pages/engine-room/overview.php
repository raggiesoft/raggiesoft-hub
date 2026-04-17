<?php
// pages/engine-room/overview.php
// The Front Door of Engine Room Records.
// Focus: Audio Validation, Roster Navigation, and B2B Licensing.

$pageTitle = "Engine Room Records - Independent Imprint";
?>

<style>
    /* ENGINE ROOM BRANDING: Industrial, Heavy, Stark */
    .engine-hero {
        background: linear-gradient(rgba(13, 17, 23, 0.95), rgba(13, 17, 23, 0.85)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg');
        background-size: cover;
        background-position: center;
        border-bottom: 4px solid var(--bs-danger);
    }
    
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Filters for adapting logos in different themes */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    /* Roster Card Hover Effects */
    .roster-card {
        transition: transform 0.2s ease, border-color 0.2s ease;
    }
    @media (prefers-reduced-motion: no-preference) {
        .roster-card:hover {
            transform: translateY(-5px);
            border-color: var(--bs-danger) !important;
        }
    }
</style>

<div class="engine-hero py-5 d-flex align-items-center" style="min-height: 65vh;" data-bs-theme="dark">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
                     alt="Engine Room Records Logo" 
                     class="img-fluid mb-4 logo-invert" 
                     style="max-width: 200px;">

                <h1 class="display-4 fw-bold text-stenciled text-body-emphasis mb-3">
                    Loud. Raw. Real.
                </h1>
                
                <p class="lead text-body mb-4">
                    The exclusive home of The Stardust Engine, Mirage, and Firelight. 100% independent.
                </p>

                <div class="p-4 bg-black bg-opacity-50 border border-secondary rounded shadow-sm">
                    <span class="badge bg-danger text-uppercase letter-spacing-1 mb-2 px-2 py-1">Latest Release</span>
                    <h2 class="h4 fw-bold text-body-emphasis mb-1">Space Rock: Essential Tracks</h2>
                    <p class="small text-body-secondary mb-3">The Stardust Engine &bull; Out Now</p>
                    
                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-danger text-uppercase fw-bold px-4">
                            <i class="fa-duotone fa-play me-2" aria-hidden="true"></i>Stream Now
                        </a>
                        <a href="/engine-room/artists/stardust-engine/discography" class="btn btn-outline-light text-uppercase fw-bold px-4">
                            <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Full Catalog
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" 
                     alt="Space Rock: Essential Tracks Album Cover" 
                     class="img-fluid rounded shadow-lg border border-secondary" 
                     style="max-width: 400px; width: 100%;">
            </div>

        </div>
    </div>
</div>

<div class="bg-body-tertiary border-bottom border-secondary-subtle py-4">
    <div class="container">
        <div class="alert alert-dark border-danger border-2 d-flex align-items-center shadow-sm mb-0" role="alert">
            <i class="fa-duotone fa-shield-xmark fa-2x text-danger me-3" aria-hidden="true"></i>
            <div>
                <h2 class="alert-heading h6 fw-bold mb-1 text-uppercase text-danger">Restricted Roster Policy</h2>
                <p class="mb-0 small text-body-secondary">
                    Engine Room Records is a closed, private imprint. <strong>We do not sign outside talent and do not accept unsolicited demos.</strong> Any unsolicited audio links or attachments sent to our servers are automatically deleted unread by our exchange transport rules.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-uppercase text-stenciled text-body-emphasis border-bottom border-secondary-subtle d-inline-block pb-2">
            Active Roster
        </h2>
    </div>

    <div class="row g-4 justify-content-center">
        
        <div class="col-md-6 col-lg-4">
            <a href="/engine-room/artists/stardust-engine" class="text-decoration-none">
                <div class="card h-100 bg-dark roster-card shadow-sm border-secondary" data-bs-theme="dark">
                    <div class="card-body text-center p-4 d-flex flex-column align-items-center">
                        <div class="bg-black rounded-circle p-3 mb-3 border border-secondary" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                                 alt="The Stardust Engine Logo" 
                                 class="img-fluid" style="max-height: 60px;">
                        </div>
                        <h3 class="h5 fw-bold text-body-emphasis text-uppercase mb-2">The Stardust Engine</h3>
                        <p class="small text-body-secondary mb-0">
                            80s Synth-Rock / Progressive Arena Rock. The founding artist of the Engine Room.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <a href="/raggiesoft-books/aethel-saga" class="text-decoration-none">
                <div class="card h-100 bg-dark roster-card shadow-sm border-warning" data-bs-theme="dark">
                    <div class="card-body text-center p-4 d-flex flex-column align-items-center">
                        <div class="bg-black rounded-circle p-3 mb-3 border border-warning" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <img src="https://assets.raggiesoft.com/engine-room-records/artists/firelight/band-logo.png" 
                                 alt="Firelight Logo" 
                                 class="img-fluid" style="max-height: 60px;">
                        </div>
                        <h3 class="h5 fw-bold text-warning text-uppercase mb-2">Firelight</h3>
                        <p class="small text-body-secondary mb-0">
                            Symphonic Rock. The official musical voice and composers of the <em>Aethel Saga</em>.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <a href="/engine-room/artists/mirage" class="text-decoration-none">
                <div class="card h-100 bg-dark roster-card shadow-sm border-danger" data-bs-theme="dark">
                    <div class="card-body text-center p-4 d-flex flex-column align-items-center">
                        <div class="bg-black rounded-circle p-3 mb-3 border border-danger" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-duotone fa-waveform-lines fa-3x text-danger opacity-75"></i>
                        </div>
                        <h3 class="h5 fw-bold text-danger text-uppercase mb-2">Mirage</h3>
                        <p class="small text-body-secondary mb-0">
                            Cinematic Rock Opera / Industrial Metal. The architects of <em>Static & Silence</em>.
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="/engine-room/artists" class="btn btn-outline-secondary rounded-pill px-4 font-monospace small text-uppercase">
            <i class="fa-duotone fa-folder-open me-2" aria-hidden="true"></i>View Full Historical Roster
        </a>
    </div>
</div>

<div class="bg-body-secondary border-top border-bottom border-secondary-subtle py-5">
    <div class="container text-center py-4">
        <div class="mb-3">
            <i class="fa-duotone fa-briefcase fa-3x text-primary opacity-75" aria-hidden="true"></i>
        </div>
        <h2 class="display-6 fw-bold text-uppercase text-stenciled text-body-emphasis mb-3">
            B2B & Commercial Licensing
        </h2>
        <p class="lead text-body-secondary mx-auto mb-4" style="max-width: 700px;">
            Engine Room Records controls 100% of the Master and Publishing rights for our entire active catalog. We offer rapid, one-stop clearance for <strong>Sync Placements</strong> and <strong>Direct Public Performance</strong> licenses.
        </p>
        <a href="/engine-room/commercial-licensing" class="btn btn-primary btn-lg text-uppercase fw-bold letter-spacing-1 px-5 rounded-pill shadow-sm">
            <i class="fa-duotone fa-handshake me-2" aria-hidden="true"></i>Access Licensing Portal
        </a>
    </div>
</div>

<div id="hq-status" class="py-5 bg-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="alert alert-light border border-secondary shadow-sm d-flex align-items-start" role="alert">
                    <i class="fa-duotone fa-robot-astromech fa-2x me-3 mt-1 text-info" aria-hidden="true"></i>
                    <div>
                        <h2 class="alert-heading h6 fw-bold mb-2 text-uppercase letter-spacing-1 text-body-emphasis">Transparency Notice</h2>
                        <p class="small text-body-secondary mb-2">
                            <strong>Engine Room Records</strong> serves as the real-world organizational publisher for Michael Ragsdale's generative music portfolio. All audio tracks are generated using a commercial-tier Suno Premium license, ensuring full commercial clearance. Lore, personas, and lyrics are co-written by human direction and Gemini.
                        </p>
                        <p class="small text-body-secondary mb-0">
                            To maintain the immersion of our fictional universes while complying with digital distribution standards, all catalog entries feature a fictional <em>Narrative Era</em> alongside their true <em>Real-World Release Date</em>.
                            <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info text-decoration-none border-bottom border-info ms-1">Read the full AI Disclaimer.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>