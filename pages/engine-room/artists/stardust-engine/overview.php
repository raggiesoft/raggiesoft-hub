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
    <div class="bg-body-tertiary rounded shadow-sm p-4 p-md-5 border border-secondary border-opacity-50 text-center">
        <span class="badge bg-success mb-3 px-3 py-2 text-uppercase letter-spacing-1"><i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Now Streaming</span>
        <h2 class="display-5 fw-bold text-uppercase mb-3" style="font-family: 'Impact', sans-serif;">The Engine is Live</h2>
        <p class="lead text-body-secondary mb-4 mx-auto" style="max-width: 700px;">
            The complete, uncompromised discography of The Stardust Engine has officially cleared the global distribution network. Support the band and stream their entire catalog on your favorite platform.
        </p>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <?php
                // Dynamic store button component targeting the Artist profiles
                $storeProps = [
                    'type' => 'artist', 
                    'size' => 'large',
                    'spotify' => '7Lr6o5qOo1OgVQGumUjFFT', 
                    'apple'   => '1889194363',
                    //'amazon'  => 'YOUR_AMAZON_ID',
                    //'youtube' => 'YOUR_YOUTUBE_ID'
                ];
                include ROOT_PATH . '/includes/components/store-button.php';
            ?>
            <p class="small text-muted mt-3 mb-0" style="max-width: 350px;">
                <i class="fa-duotone fa-sliders-up me-1 text-secondary"></i> <strong>Pro Tip:</strong> Click the arrow next to the button to set your default streaming app.
            </p>
        </div>
    </div>
</div>

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