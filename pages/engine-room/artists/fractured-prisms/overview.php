<?php
// pages/engine-room/artists/fractured-prisms/overview.php
// The Band's "Home" Page
// Vibe: 1883 Gothic / 1983 Art Rock / Fog / The Hollow Square

$root = '/engine-room/artists/fractured-prisms';

// Fetch and decode the Albums JSON for Fractured Prisms
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/albums.json';
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

<style>
    /* Fractured Prisms Specific Overrides */
    .gothic-font {
        font-family: 'Playfair Display', serif;
    }
    .text-glow-prism {
        text-shadow: 0 0 15px rgba(177, 156, 217, 0.6), 0 0 30px rgba(177, 156, 217, 0.4);
        color: #e6e6fa !important; /* Lavender/Ghostly white */
    }
    .border-prism {
        border-color: rgba(177, 156, 217, 0.5) !important;
    }
    .bg-prism-dark {
        background-color: #0b0914 !important; /* Very dark purple-black */
    }
</style>

<div class="border-bottom border-prism" style="
    position: relative;
    background-image: linear-gradient(rgba(11, 9, 20, 0.8), rgba(11, 9, 20, 0.9)), 
                      url('https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/hero-bg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
">
    <div class="container-fluid text-center pt-5 pb-5">
        <div class="container pt-5 pb-4">
            <h1 class="display-2 text-uppercase text-glow-prism gothic-font" 
                style="letter-spacing: 4px;">
                <i class="fa-duotone fa-gem me-3 opacity-75"></i>Fractured Prisms
            </h1>
            <p class="lead fs-3 text-uppercase text-white-50 mt-3" 
               style="font-family: 'Courier New', monospace; letter-spacing: 3px;">
                1883 <span class="mx-2 text-secondary">||</span> 1983
            </p>
            <p class="fs-5 text-light fst-italic mt-2" style="font-family: 'Georgia', serif;">
                "You are standing on The Hollow Square."
            </p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <div class="alert alert-dark bg-prism-dark border-secondary shadow-sm d-flex align-items-center" role="alert">
        <i class="fa-duotone fa-robot-astromech fa-3x me-3 text-secondary d-none d-md-block"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-light"><i class="fa-duotone fa-robot-astromech me-2 text-secondary d-inline-block d-md-none"></i>Transparency & Timeline Notice</h4>
            <p class="mb-2 small text-white-50 border-bottom border-secondary pb-2">
                <strong>Fractured Prisms</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
            </p>
            <p class="mb-0 small text-white-50">
                <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 1883/1983) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-light border-bottom border-light text-decoration-none ms-1">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="bg-body-tertiary rounded shadow-sm border border-prism">
        <div class="row g-0 align-items-center">
            
            <div class="col-lg-6 d-none d-lg-block position-relative h-100">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25 rounded-start"></div>
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/1983-fractured-prisms/album-art.jpg" 
                     alt="The Hollow Square - London Street" 
                     class="img-fluid h-100 object-fit-cover rounded-start"
                     style="min-height: 400px; filter: contrast(1.1) brightness(0.9);">
            </div>

            <div class="col-lg-6 p-4 p-md-5 text-center text-lg-start bg-prism-dark text-light rounded-end">
                <span class="badge bg-dark text-light mb-3 px-3 py-2 text-uppercase letter-spacing-1 border border-secondary shadow-sm">
                    <i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Transmission Live
                </span>
                <h2 class="display-5 fw-bold text-uppercase mb-3 gothic-font">The Gates Are Open</h2>
                <p class="lead text-white-50 mb-4 font-monospace small">
                    The 9-track debut album is officially streaming. Step into the gaslamp fog and experience the 100-year echo.
                </p>
                
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/1983-fractured-prisms/album-art.jpg" 
                     alt="Fractured Prisms Art" 
                     class="img-fluid rounded mb-4 d-block d-lg-none shadow-sm border border-secondary">

                <style>
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
                    .btn-facebook svg { width: 1.25rem; height: 1.25rem; }
                </style>

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <?php
                            $storeProps = [
                                'type' => 'artist', 
                                'size' => 'large',
                                'spotify' => '', // Will populate when DistroKid updates
                                'apple'   => '',
                                'amazon'  => '',
                                'youtube' => ''
                            ];
                            include ROOT_PATH . '/includes/components/store-button.php';
                        ?>

                        <a href="https://www.facebook.com/The.Fractured.Prisms" target="_blank" class="btn btn-facebook btn-lg shadow-sm px-4 fw-bold d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                            Join the Hollow Square
                        </a>
                    </div>
                    <p class="small text-muted mt-3 mb-0 font-monospace">
                        <i class="fa-duotone fa-sliders-up me-1 text-secondary"></i> Select your preferred listening device.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php if (!empty($allAlbums)): ?>
<div class="container py-5 border-bottom border-secondary border-opacity-25">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-uppercase text-body-emphasis gothic-font">The Archives</h2>
        <p class="text-body-secondary font-monospace small">Browse the recovered master tapes.</p>
    </div>

    <div id="discographyCarousel" class="carousel slide carousel-fade bg-prism-dark rounded shadow-sm border border-prism p-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($allAlbums as $index => $album): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-5 text-center mb-3 mb-sm-0">
                            <img src="<?php echo htmlspecialchars($album['img']); ?>" class="img-fluid rounded shadow border border-secondary" alt="<?php echo htmlspecialchars($album['title']); ?>" style="max-height: 250px;">
                        </div>
                        <div class="col-sm-6 text-center text-sm-start text-light">
                            <span class="text-secondary fw-bold font-monospace small text-uppercase"><?php echo htmlspecialchars($album['era_label']); ?></span>
                            <h3 class="fw-bold mb-1 gothic-font"><?php echo htmlspecialchars($album['title']); ?></h3>
                            <p class="text-white-50 mb-3 font-monospace small">Recovered: <?php echo htmlspecialchars($album['year']); ?> <?php echo isset($album['extra']) ? $album['extra'] : ''; ?></p>
                            
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-start">
                                <a href="<?php echo htmlspecialchars($album['url']); ?>" class="btn btn-outline-light rounded-pill px-4">
                                    <i class="fa-duotone fa-compact-disc me-2"></i>Inspect Record
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
            <i class="fa-solid fa-chevron-left text-light fs-3" aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#discographyCarousel" data-bs-slide="next" style="width: 5%;">
            <i class="fa-solid fa-chevron-right text-light fs-3" aria-hidden="true"></i>
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
                    <div class="mb-3 text-secondary"><i class="fa-duotone fa-ghost fa-3x"></i></div>
                    <h3 class="fw-bold text-body-emphasis gothic-font">The Residents</h3>
                    <p class="text-secondary small">
                        Meet the brooding architects of the underground art-rock movement living in the shadows.
                    </p>
                    <a href="<?php echo $root; ?>/band" class="btn btn-outline-secondary mt-auto rounded-pill font-monospace small">View Bios</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-secondary"><i class="fa-duotone fa-book-journal-whills fa-3x"></i></div>
                    <h3 class="fw-bold text-body-emphasis gothic-font">The Lore</h3>
                    <p class="text-secondary small">
                        Uncover the mystery of the 100-year time slip between the gaslamps of 1883 and the analog tape machines of 1983.
                    </p>
                    <a href="<?php echo $root; ?>/story" class="btn btn-outline-secondary mt-auto rounded-pill font-monospace small">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-secondary"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-body-emphasis gothic-font">The Discography</h3>
                    <p class="text-secondary small">
                        From the 1983 debut to the live concert tours of 1985-1986. Explore the complete, uncompromised catalog.
                    </p>
                    <a href="<?php echo $root; ?>/discography" class="btn btn-outline-secondary mt-auto rounded-pill font-monospace small">View Albums</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-lift { transition: transform 0.2s; }
.hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.4; }
    100% { opacity: 1; }
}
.pulse-icon {
    animation: pulse 2s infinite;
    color: #b19cd9; /* Lavender */
}

/* --- CAROUSEL DROPDOWN FIX --- */
#discographyCarousel {
    position: relative;
    z-index: 1040; 
}
#discographyCarousel .carousel-inner {
    overflow: visible; 
}
</style>