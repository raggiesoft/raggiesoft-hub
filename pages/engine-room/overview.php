<?php
// pages/engine-room/overview.php
// The Fan-Centric Hub of Engine Room Records.

$pageTitle = "Engine Room Records | Loud. Raw. Real.";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Engine Room Records",
      "parentOrganization": {
        "@type": "Organization",
        "name": "RaggieSoft Media"
      },
      "description": "An independent creative collective dedicated to narrative-driven rock, industrial soundscapes, and symphonic metal. Note: Engine Room Records is a closed private label; unsolicited submissions are not accepted."
    },
    {
      "@type": "CollectionPage",
      "name": "Engine Room Records Roster",
      "description": "Directory of active musical projects including The Stardust Engine, Mirage, and The Winter Palace."
    }
  ]
}
</script>

<style>
    /* FAN HUB STYLING */
    .engine-hero {
        background: linear-gradient(to bottom, rgba(13, 17, 23, 0.8), rgba(13, 17, 23, 0.95)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg') center/cover;
        border-bottom: 4px solid var(--bs-primary);
    }
    
    /* Force black logos to white on permanently dark backgrounds */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(100%);
    }

    /* Responsive Hero Logo */
    .hero-logo {
        height: 110px; /* Base size for mobile */
        opacity: 0.85;
        transition: height 0.3s ease-in-out;
    }

    @media (min-width: 768px) {
        .hero-logo {
            height: 150px; /* Tablet */
        }
    }

    @media (min-width: 992px) {
        .hero-logo {
            height: 190px; /* Desktop */
        }
    }

    .roster-card {
        background-color: #15181c;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .roster-card:hover {
        transform: translateY(-5px);
        border-color: var(--bs-primary); 
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); 
    }
    
    [data-bs-theme="light"] .roster-card {
        background-color: #ffffff;
        border: 1px solid var(--bs-border-color);
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    [data-bs-theme="light"] .roster-card:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.1); 
    }

    .b2b-routing-bar {
        background: repeating-linear-gradient(
            45deg,
            var(--bs-dark),
            var(--bs-dark) 10px,
            #1a1d20 10px,
            #1a1d20 20px
        );
        border-top: 2px solid var(--bs-secondary);
        border-bottom: 2px solid var(--bs-secondary);
    }
    
    /* Hover Helper */
    .hover-primary:hover {
        color: var(--bs-primary) !important;
    }
</style>

<div class="engine-hero py-5 mb-5 shadow-lg text-white">
    <div class="container text-center py-5">
        <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
             alt="Engine Room Records" 
             class="mb-4 logo-invert hero-logo">
             
        <h1 class="display-3 fw-bold text-uppercase mb-3 brand-font" style="letter-spacing: 2px;">
            Engine Room Records
        </h1>
        <p class="lead tech-font opacity-75 mb-4 mx-auto" style="max-width: 700px;">
            Loud. Raw. Real. An independent creative collective dedicated to narrative-driven rock, industrial soundscapes, and symphonic metal.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#latest-transmissions" class="btn btn-primary rounded-pill px-4 fw-bold text-uppercase tech-font">
                <i class="fa-solid fa-play me-2" aria-hidden="true"></i>Latest Transmissions
            </a>
            <a href="/engine-room/artists" class="btn btn-outline-light rounded-pill px-4 fw-bold text-uppercase tech-font">
                <i class="fa-solid fa-users me-2" aria-hidden="true"></i>The Roster
            </a>
        </div>
    </div>
</div>

<div class="container pb-5">
    
    <div class="row mb-4" id="latest-transmissions">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h4 text-uppercase fw-bold mb-0 text-body-emphasis">
                <i class="fa-duotone fa-satellite-dish me-2 text-primary"></i>Now Spinning
            </h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm bg-body-tertiary overflow-hidden">
                <div class="row g-0 h-100">
                    <div class="col-sm-5">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" 
                             class="img-fluid h-100 object-fit-cover border-end border-secondary-subtle" 
                             alt="Hard Reset Album Art">
                    </div>
                    <div class="col-sm-7 d-flex flex-column">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2 font-monospace">1997 / 2026 REMASTER</span>
                            <h3 class="h5 fw-bold text-uppercase mb-1">Hard Reset</h3>
                            <p class="text-primary small fw-bold text-uppercase mb-3">The Stardust Engine</p>
                            <p class="card-text small text-body-secondary mb-0">
                                The triumphant commercial comeback. A double-album featuring the relentless rock of "Terrestrial Velocity" and the zero-gravity progressive suite "Ad Astra."
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4 px-4 pt-0">
                            <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="btn btn-sm btn-outline-primary w-100 rounded-pill fw-bold">
                                <i class="fa-duotone fa-compact-disc me-2"></i>Explore Album
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm bg-body-tertiary overflow-hidden">
                <div class="row g-0 h-100">
                    <div class="col-sm-5">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                             class="img-fluid h-100 object-fit-cover border-end border-secondary-subtle" 
                             alt="Static and Silence Album Art">
                    </div>
                    <div class="col-sm-7 d-flex flex-column">
                        <div class="card-body p-4">
                            <span class="badge bg-danger mb-2 font-monospace">INDUSTRIAL ROCK OPERA</span>
                            <h3 class="h5 fw-bold text-uppercase mb-1">Static & Silence</h3>
                            <p class="text-danger small fw-bold text-uppercase mb-3">Mirage</p>
                            <p class="card-text small text-body-secondary mb-0">
                                A harrowing, autobiographical concept album detailing survival, escape, and the brutal journey to find a safe harbor. 
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4 px-4 pt-0">
                            <a href="/engine-room/artists/mirage/2001-static-and-silence" class="btn btn-sm btn-outline-danger w-100 rounded-pill fw-bold">
                                <i class="fa-duotone fa-compact-disc me-2"></i>Explore Album
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4 mt-5">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h4 text-uppercase fw-bold mb-0 text-body-emphasis">
                <i class="fa-duotone fa-users me-2 text-info"></i>The Collective
            </h2>
            <a href="/engine-room/artists" class="text-decoration-none text-muted small text-uppercase font-monospace fw-bold hover-primary">
                View Full Roster <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-4">
            <a href="/engine-room/artists/stardust-engine" class="text-decoration-none">
                <div class="card roster-card h-100 p-4 text-center">
                    <div class="mb-3">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                             alt="The Stardust Engine" style="height: 60px; object-fit: contain;">
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis text-uppercase mb-2">The Stardust Engine</h3>
                    <p class="text-body-secondary small mb-0">
                        80s Synth-Pop / Progressive Rock. The founding family unit that built the fortress.
                    </p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/engine-room/artists/mirage" class="text-decoration-none">
                <div class="card roster-card h-100 p-4 text-center">
                    <div class="mb-3">
                        <i class="fa-duotone fa-waveform-lines fa-4x text-danger opacity-75"></i>
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis text-uppercase mb-2">Mirage</h3>
                    <p class="text-body-secondary small mb-0">
                        Industrial / Alt-Metal. A heavy, cinematic exploration of trauma and survival.
                    </p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/engine-room/artists/the-winter-palace" class="text-decoration-none">
                <div class="card roster-card h-100 p-4 text-center">
                    <div class="mb-3">
                        <i class="fa-duotone fa-snowflake fa-4x text-info opacity-75"></i>
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis text-uppercase mb-2">The Winter Palace</h3>
                    <p class="text-body-secondary small mb-0">
                        Symphonic Rock / Neoclassical. Sweeping string arrangements meets heavy distortion.
                    </p>
                </div>
            </a>
        </div>

    </div>

</div>

<div class="b2b-routing-bar py-5 text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h3 class="h4 fw-bold text-uppercase text-warning mb-2">
                    <i class="fa-solid fa-briefcase me-2"></i>Industry & Licensing
                </h3>
                <p class="small text-white-75 mb-3" style="line-height: 1.6;">
                    Looking to clear a track for a film, game, or commercial broadcast? All commercial synchronization, master use clearances, and DSP verification operations are handled centrally by <strong>RaggieSoft Media</strong>. 
                </p>
                <div class="d-flex align-items-center bg-black bg-opacity-50 p-2 rounded border border-secondary border-opacity-50 d-inline-flex">
                    <i class="fa-solid fa-circle-info text-info me-2"></i>
                    <span class="small font-monospace text-white-50">Note: All commercial licenses are strictly <strong>Non-Exclusive</strong> due to AI-assisted audio generation guidelines.</span>
                </div>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="d-flex flex-column gap-3 align-items-lg-end">
                    <a href="/raggiesoft-media/licensing" class="btn btn-warning rounded-0 fw-bold text-uppercase px-4">
                        Master Licensing Portal <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                    <a href="/engine-room/dsp-verification" class="btn btn-outline-light rounded-0 fw-bold text-uppercase px-4">
                        DSP Verification Desk <i class="fa-solid fa-shield-check ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="alert alert-secondary bg-body-tertiary border-start border-4 border-secondary shadow-sm py-4">
                <div class="d-flex align-items-center mb-2">
                    <i class="fa-duotone fa-hand-palm text-secondary fs-3 me-3"></i>
                    <h5 class="fw-bold text-uppercase mb-0 text-body-emphasis">A Closed Collective</h5>
                </div>
                <p class="small text-body-secondary ms-5 mb-0">
                    Engine Room Records is a private, self-publishing imprint created by Michael P. Ragsdale to manage his generative AI music portfolio. <strong>We do not sign outside artists and we do not accept unsolicited demos or submissions.</strong> Any unsolicited media sent to our servers is automatically and permanently deleted unread.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover Helper */
    .hover-primary:hover {
        color: var(--bs-primary) !important;
    }
</style>