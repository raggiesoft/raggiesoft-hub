<?php
// pages/engine-room/overview.php
// The Front Door of Engine Room Records.
// Focus: Music First, Output, B2B Licensing, and Entity SEO.

$pageTitle = "Engine Room Records - Independent Imprint";
?>

<!-- RECORD LABEL ENTITY SCHEMA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "RecordLabel",
  "name": "Engine Room Records",
  "alternateName": "ERR",
  "url": "https://engineroom-records.com",
  "logo": "https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png",
  "description": "An independent record label, music publisher, and B2B licensing imprint.",
  "founder": {
    "@type": "Person",
    "name": "Michael P. Ragsdale"
  },
  "parentOrganization": {
    "@type": "Organization",
    "name": "RaggieSoft",
    "url": "https://raggiesoft.com"
  },
  "genre": ["Alternative Rock", "Progressive Rock", "Synth-Pop", "Symphonic Rock"],
  "sameAs": [
    "https://raggiesoft.com/engine-room"
  ]
}
</script>

<style>
    /* Premium Indie Label Aesthetics */
    .hero-section {
        background-color: #050505;
        background-image: radial-gradient(circle at 70% 50%, #1a1a1a 0%, #050505 80%);
        border-bottom: 1px solid #333;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }
    
    .label-ethos {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        color: #888;
        font-size: 1.25rem;
    }

    .album-cover-showcase {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #333;
    }
    .album-cover-showcase:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.5);
        border-color: #666;
    }

    .b2b-section {
        background-color: #0a0a0a;
        border-top: 1px solid #222;
        border-bottom: 1px solid #222;
    }

    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
</style>

<!-- 1. THE HERO (Music First) -->
<div class="hero-section py-5" data-bs-theme="dark">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                <div class="mb-4 d-inline-block border border-secondary px-3 py-1 rounded small text-uppercase tracking-widest text-muted fw-bold">
                    Latest Release
                </div>
                
                <h1 class="display-3 fw-bold text-white mb-2" style="letter-spacing: -1px;">Hard Reset</h1>
                <h2 class="h4 text-white-50 mb-4 text-uppercase">The Stardust Engine</h2>
                
                <p class="lead text-secondary mb-5 pe-lg-4">
                    The defining space-rock opus. Featuring "Moon 1 (Tidal Lock)" and "Escape Velocity (Ad Astra)." High-fidelity masters now available globally.
                </p>
                
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="btn btn-light btn-lg text-uppercase fw-bold rounded-pill px-4">
                        <i class="fa-brands fa-spotify me-2"></i>Stream Now
                    </a>
                    <a href="/engine-room/artists/stardust-engine/discography" class="btn btn-outline-secondary btn-lg text-uppercase fw-bold rounded-pill px-4">
                        View Details
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" 
                         alt="Hard Reset Album Cover" 
                         class="img-fluid shadow-lg album-cover-showcase" 
                         style="max-width: 450px; width: 100%;">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 2. THE ETHOS & ROSTER LINK -->
<div class="bg-body py-5 border-bottom border-secondary-subtle">
    <div class="container py-4 text-center">
        <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
             alt="Engine Room Records Logo" 
             class="img-fluid mb-4" 
             style="max-width: 120px; filter: invert(1) grayscale(100%); mix-blend-mode: multiply;" data-bs-theme-filter="invert">
             
        <p class="label-ethos mb-4 mx-auto" style="max-width: 700px;">
            "Engine Room Records is a private creative collective and independent imprint. We are dedicated exclusively to the development, production, and global distribution of our in-house roster."
        </p>
        
        <div class="mt-5">
            <h3 class="h6 text-uppercase fw-bold text-muted letter-spacing-2 mb-3">Featuring Works By</h3>
            <div class="d-flex flex-wrap justify-content-center gap-4 mb-4 fw-bold">
                <span class="text-body-emphasis">The Stardust Engine</span>
                <span class="text-muted">&bull;</span>
                <span class="text-body-emphasis">Fractured Prisms</span>
                <span class="text-muted">&bull;</span>
                <span class="text-body-emphasis">The Paper Wall</span>
                <span class="text-muted">&bull;</span>
                <span class="text-body-emphasis">Firelight</span>
            </div>
            
            <a href="/engine-room/artists" class="btn btn-dark text-uppercase fw-bold px-5 rounded-0 shadow-sm">
                Explore the Full Roster
            </a>
        </div>
    </div>
</div>

<!-- 3. RECENT PRESSINGS (The Output) -->
<div class="bg-body-tertiary py-5 border-bottom border-secondary-subtle">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="h4 fw-bold text-uppercase text-stenciled mb-0">Recent Pressings</h2>
            <a href="/engine-room/artists" class="text-decoration-none text-uppercase small fw-bold text-muted">View Catalog <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
        
        <div class="row g-4">
            <!-- Hard Reset -->
            <div class="col-6 col-md-3">
                <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="text-decoration-none">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg" class="img-fluid mb-2 album-cover-showcase" alt="Hard Reset">
                    <h6 class="text-body-emphasis fw-bold mb-0 text-truncate">Hard Reset</h6>
                    <small class="text-muted text-uppercase">The Stardust Engine</small>
                </a>
            </div>
            <!-- Electric Color -->
            <div class="col-6 col-md-3">
                <a href="/engine-room/artists/stardust-engine/discography/1988-electric-color" class="text-decoration-none">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1988-electric-color/album-art.jpg" class="img-fluid mb-2 album-cover-showcase bg-dark" alt="Electric Color">
                    <h6 class="text-body-emphasis fw-bold mb-0 text-truncate">Electric Color</h6>
                    <small class="text-muted text-uppercase">The Stardust Engine</small>
                </a>
            </div>
            <!-- Static & Silence (The Paper Wall) -->
            <div class="col-6 col-md-3">
                <a href="/engine-room/artists/the-paper-wall" class="text-decoration-none">
                    <div class="ratio ratio-1x1 bg-dark mb-2 album-cover-showcase d-flex align-items-center justify-content-center border border-secondary">
                        <i class="fa-duotone fa-waveform-lines fa-3x text-secondary opacity-50"></i>
                    </div>
                    <h6 class="text-body-emphasis fw-bold mb-0 text-truncate">Static & Silence</h6>
                    <small class="text-muted text-uppercase">The Paper Wall</small>
                </a>
            </div>
            <!-- Origin / Fractured Prisms placeholder -->
            <div class="col-6 col-md-3">
                <a href="/engine-room/artists/fractured-prisms" class="text-decoration-none">
                    <div class="ratio ratio-1x1 bg-dark mb-2 album-cover-showcase d-flex align-items-center justify-content-center border border-secondary">
                        <i class="fa-duotone fa-compact-disc fa-3x text-secondary opacity-50"></i>
                    </div>
                    <h6 class="text-body-emphasis fw-bold mb-0 text-truncate">Kaleidoscope Sun</h6>
                    <small class="text-muted text-uppercase">Fractured Prisms</small>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 4. B2B LICENSING (The Business) -->
<div class="b2b-section py-5 text-white" data-bs-theme="dark">
    <div class="container py-4 text-center">
        <i class="fa-duotone fa-file-contract fa-3x text-secondary mb-3"></i>
        <h2 class="display-6 fw-bold text-uppercase text-stenciled mb-3">One-Stop Clearance</h2>
        <p class="lead text-secondary mx-auto mb-4" style="max-width: 650px;">
            Engine Room Records controls 100% of the Master and Publishing rights for our entire active catalog. We offer rapid, direct clearance for Sync Placements and Commercial Broadcasts.
        </p>
        <a href="/engine-room/commercial-licensing" class="btn btn-outline-light btn-lg text-uppercase fw-bold letter-spacing-1 px-5 rounded-0">
            Access Licensing Portal
        </a>
    </div>
</div>

<!-- 5. TRANSPARENCY & LEGAL FOOTER -->
<div class="py-4 bg-body text-center">
    <div class="container">
        <p class="small text-muted mb-0" style="max-width: 800px; margin: 0 auto;">
            <strong>Transparency Notice:</strong> Engine Room Records serves as the real-world publishing imprint for Michael P. Ragsdale's generative music portfolio. Audio is generated via Suno AI (Commercial Premium License). Lore, personas, and lyrics are human-directed with AI assistance. To preserve immersion, catalog entries feature narrative release eras alongside actual DSP data. 
            <a href="/about/ai-disclaimer" class="text-decoration-none text-body fw-bold border-bottom border-secondary ms-1">Read the full legal disclaimer.</a>
        </p>
    </div>
</div>

<script>
    // Theme logic for the logo invert if needed
    document.addEventListener('DOMContentLoaded', () => {
        const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
        const logo = document.querySelector('[data-bs-theme-filter="invert"]');
        if (logo && isDark) {
            logo.style.filter = 'invert(1) grayscale(100%) brightness(200%)';
            logo.style.mixBlendMode = 'screen';
        }
    });
</script>