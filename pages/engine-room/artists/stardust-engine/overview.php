<?php
// pages/engine-room/artists/stardust-engine/overview.php
// The Band's "Home" Page

$root = '/engine-room/artists/stardust-engine';

// Fetch and decode the Albums JSON
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/albums.json';
$jsonData = @file_get_contents($jsonUrl); // @ suppresses warnings if the fetch fails
$eras = $jsonData ? json_decode($jsonData, true) : [];

// Flatten the albums into a single array for the carousel
$allAlbums = [];
if ($eras) {
    foreach ($eras as $eraKey => $eraData) {
        foreach ($eraData['albums'] as $album) {
            $album['era_label'] = $eraData['label'];
            $allAlbums[] = $album;
        }
    }
}
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
    <div class="container-fluid text-center pt-5 pb-5">
        <div class="container pt-5 pb-4">
            <h1 class="display-2 text-uppercase text-glow-primary text-white" 
                style="font-family: 'Audiowide', sans-serif; letter-spacing: 2px;">
                <i class="fa-solid fa-rocket me-3"></i>The Stardust Engine
            </h1>
            <p class="lead fs-3 text-uppercase text-white" 
               style="font-family: 'Exo 2', sans-serif; font-weight: 300; letter-spacing: 4px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                A musical universe forged in the fires of CPI.
            </p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <div class="alert alert-secondary border-secondary shadow-sm d-flex align-items-center" role="alert">
        <i class="fa-duotone fa-robot-astromech fa-3x me-3 text-info d-none d-md-block"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1"><i class="fa-duotone fa-robot-astromech me-2 text-info d-inline-block d-md-none"></i>Transparency & Timeline Notice</h4>
            <p class="mb-2 small text-body-secondary border-bottom border-secondary-subtle pb-2">
                <strong>The Stardust Engine</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
            </p>
            <p class="mb-0 small text-body-secondary">
                <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 1987) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none ms-1">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="bg-body-tertiary rounded shadow-sm border border-secondary border-opacity-50">
        <div class="row g-0 align-items-center">
            
            <div class="col-lg-6 d-none d-lg-block">
                <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/family-portraits/artist-header-oconnell.jpg" 
                     alt="Ryan, Cassidy, and Holly O'Connell in the studio" 
                     class="img-fluid h-100 object-fit-cover rounded-start"
                     style="min-height: 400px;">
            </div>

            <div class="col-lg-6 p-4 p-md-5 text-center text-lg-start">
                <span class="badge bg-success-subtle text-success-emphasis mb-3 px-3 py-2 text-uppercase letter-spacing-1" style="border: 1px solid var(--bs-success-border-subtle);">
                    <i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Now Streaming
                </span>
                <h2 class="display-5 fw-bold text-uppercase mb-3" style="font-family: 'Impact', sans-serif;">The Engine is Live</h2>
                <p class="lead text-body-secondary mb-4">
                    The complete, uncompromised discography of The Stardust Engine has officially cleared the global distribution network. Support the family and stream their entire catalog.
                </p>
                
                <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/family-portraits/artist-header-oconnell.jpg" 
                     alt="The O'Connell Family" 
                     class="img-fluid rounded mb-4 d-block d-lg-none shadow-sm border border-secondary">

                <style>
                    /* Official Meta Brand Colors */
                    .btn-facebook {
                        background-color: #1877F2;
                        color: #ffffff;
                        border: 1px solid #1877F2;
                        transition: all 0.2s ease-in-out;
                    }
                    .btn-facebook:hover, .btn-facebook:focus {
                        background-color: #166FE5;
                        color: #ffffff;
                        border-color: #166FE5;
                    }
                    /* Ensure the SVG icon scales correctly */
                    .btn-facebook svg {
                        width: 1.25rem;
                        height: 1.25rem;
                    }
                </style>

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <?php
                            $storeProps = [
                                'type' => 'artist', 
                                'size' => 'large',
                                'spotify' => '7Lr6o5qOo1OgVQGumUjFFT', 
                                'apple'   => '1889194363',
                                'amazon'  => 'B0GVGL5RS7',
                                'youtube' => 'UCqtJNbYErxJ7ivveQXVS2mg'
                            ];
                            include ROOT_PATH . '/includes/components/store-button.php';
                        ?>

                        <a href="https://facebook.com/TheStardustEngine" target="_blank" class="btn btn-facebook btn-lg shadow-sm px-4 fw-bold d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                            Find us on Facebook
                        </a>
                    </div>
                    <p class="small text-muted mt-3 mb-0">
                        <i class="fa-duotone fa-sliders-up me-1 text-secondary"></i> <strong>Pro Tip:</strong> Click the arrow next to the button to set your default streaming app.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- NEW BLOCK: THE TWIN MOONS PROJECT         -->
<!-- ========================================== -->
<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="text-center mb-5">
        <span class="badge bg-warning text-dark px-3 py-2 text-uppercase letter-spacing-1 shadow-glow mb-3 border border-warning">
            <i class="fa-duotone fa-satellite-dish me-2 pulse-icon"></i>Upcoming 2026 Release
        </span>
        <h2 class="display-5 fw-bold text-uppercase text-body-emphasis mb-3" style="font-family: 'Impact', sans-serif;">
            The Twin Moons Project
        </h2>
        <!-- SEO Target Sentence: Explicitly answers the AI search query -->
        <p class="lead text-body-secondary mx-auto" style="max-width: 800px;">
            The next album from The Stardust Engine is an ambitious dual-release project arriving in 2026. Two distinct perspectives. Two gravitational pulls. One shared universe.
        </p>
    </div>

    <div class="row g-5 justify-content-center">
        
        <!-- Moon 1: Cassidy's Orbit -->
        <div class="col-md-6 col-lg-5">
            <div class="card glass-card h-100 border-info shadow-glow hover-lift overflow-hidden">
                <div class="position-relative">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2003-sanctuary-zero-g/album-art.jpg" 
                         class="card-img-top border-bottom border-info" 
                         alt="Sanctuary (Zero-G) Album Art - The Stardust Engine">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-black bg-opacity-75 text-info border border-info font-monospace">MOON 1</span>
                    </div>
                </div>
                <div class="card-body p-4 text-center d-flex flex-column">
                    <h3 class="h4 text-info fw-bold text-uppercase mb-1">Sanctuary (Zero-G)</h3>
                    <p class="small text-white-50 font-monospace mb-3">The Anchor // Cassidy O'Connell</p>
                    <p class="text-white-75 small mb-0">
                        A zero-gravity atmospheric masterpiece showcasing the mathematically precise <strong>Cosmic Tidal Lock Sound&trade;</strong>. A sanctuary built on unwavering loyalty in the endless black.
                    </p>
                </div>
            </div>
        </div>

        <!-- Moon 2: Ryan's Orbit -->
        <div class="col-md-6 col-lg-5">
            <div class="card glass-card h-100 border-danger shadow-glow hover-lift overflow-hidden">
                <div class="position-relative">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2003-mile-marker-98/album-art.jpg" 
                         class="card-img-top border-bottom border-danger" 
                         alt="Mile Marker 98 Album Art - The Stardust Engine">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-black bg-opacity-75 text-danger border border-danger font-monospace">MOON 2</span>
                    </div>
                </div>
                <div class="card-body p-4 text-center d-flex flex-column">
                    <h3 class="h4 text-danger fw-bold text-uppercase mb-1">Mile Marker 98</h3>
                    <p class="small text-white-50 font-monospace mb-3">The Engine // Ryan O'Connell</p>
                    <p class="text-white-75 small mb-0">
                        Blistering, distorted electric guitars and aggressive rock energy. A visceral, high-friction confrontation with the trauma of 
                        <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="text-danger fw-bold border-bottom border-danger text-decoration-none hover-text-white transition-all">The Crash of '90</a>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ========================================== -->

<?php if (!empty($allAlbums)): ?>
<div class="container py-5 border-bottom border-secondary border-opacity-25">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-uppercase text-body-emphasis">The Archives</h2>
        <p class="text-body-secondary">Swipe through the historical discography of The Stardust Engine.</p>
    </div>

    <div id="discographyCarousel" class="carousel slide carousel-fade bg-body-tertiary rounded shadow-sm border border-secondary border-opacity-50 p-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($allAlbums as $index => $album): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-5 text-center mb-3 mb-sm-0">
                            <img src="<?php echo htmlspecialchars($album['img']); ?>" class="img-fluid rounded shadow border border-dark" alt="<?php echo htmlspecialchars($album['title']); ?>" style="max-height: 250px;">
                        </div>
                        <div class="col-sm-6 text-center text-sm-start">
                            <span class="text-primary fw-bold font-monospace small text-uppercase"><?php echo htmlspecialchars($album['era_label']); ?></span>
                            <h3 class="fw-bold mb-1"><?php echo htmlspecialchars($album['title']); ?></h3>
                            <p class="text-muted mb-3">Released: <?php echo htmlspecialchars($album['year']); ?> <?php echo isset($album['extra']) ? $album['extra'] : ''; ?></p>
                            
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-start">
                                <a href="<?php echo htmlspecialchars($album['url']); ?>" class="btn btn-outline-primary rounded-pill px-4">
                                    <i class="fa-duotone fa-compact-disc me-2"></i>Explore Vault
                                </a>
                                
                                <?php 
                                // Check if any DSP IDs exist for this specific album
                                $hasStores = !empty($album['spotifyId']) || !empty($album['appleId']) || !empty($album['amazonId']) || !empty($album['youtubeId']);
                                
                                if ($hasStores) {
                                    $storeProps = [
                                        'type' => 'album',
                                        'size' => 'normal',
                                        'spotify' => $album['spotifyId'] ?? '',
                                        'apple'   => $album['appleId'] ?? '',
                                        'amazon'  => $album['amazonId'] ?? '',
                                        'youtube' => $album['youtubeId'] ?? ''
                                    ];
                                    // Inject the dynamic DSP buttons
                                    include ROOT_PATH . '/includes/components/store-button.php';
                                }
                                ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#discographyCarousel" data-bs-slide="prev" style="width: 5%;">
            <i class="fa-solid fa-chevron-left text-body-emphasis fs-3" aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#discographyCarousel" data-bs-slide="next" style="width: 5%;">
            <i class="fa-solid fa-chevron-right text-body-emphasis fs-3" aria-hidden="true"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php endif; ?>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-primary"><i class="fa-duotone fa-users fa-3x"></i></div>
                    <h3 class="fw-bold text-primary">The Band</h3>
                    <p class="text-secondary small">
                        Meet the five family members who started it all: Cassidy, Ryan, Holly, Evan, and Tyler.
                    </p>
                    <a href="<?php echo $root; ?>/band" class="btn btn-outline-primary mt-auto rounded-pill">View Bios</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-danger"><i class="fa-duotone fa-book-atlas fa-3x"></i></div>
                    <h3 class="fw-bold text-danger">The Lore</h3>
                    <p class="text-secondary small">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of independence.
                    </p>
                    <a href="<?php echo $root; ?>/story" class="btn btn-outline-danger mt-auto rounded-pill">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-success"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-success">The Discography</h3>
                    <p class="text-secondary small">
                        Explore the full catalog, from the polished 80s pop to the raw, independent rock of their rebirth.
                    </p>
                    <a href="<?php echo $root; ?>/discography" class="btn btn-outline-success mt-auto rounded-pill">View Albums</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-lift { transition: transform 0.2s; }
.hover-lift:hover { transform: translateY(-5px); }

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.4; }
    100% { opacity: 1; }
}
.pulse-icon {
    animation: pulse 2s infinite;
}

/* --- CAROUSEL DROPDOWN FIX --- */
#discographyCarousel {
    position: relative;
    z-index: 1040; /* Ensures the dropdown renders above the 3 cards below the carousel */
}
#discographyCarousel .carousel-inner {
    overflow: visible; /* Removes the clipping box so the menu can drop down freely */
}
</style>