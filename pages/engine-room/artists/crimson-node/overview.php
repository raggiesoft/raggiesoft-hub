<?php
// pages/engine-room/artists/crimson-node/overview.php
// The Band's "Home" Page

$pageTitle = "Crimson Node - Engine Room Records";
$root = '/engine-room/artists/crimson-node';

// Fetch and decode the Albums JSON (Future-proofed for when more albums are added)
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/albums.json';
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
    background-image: linear-gradient(rgba(13, 13, 13, 0.85), rgba(13, 13, 13, 0.85)), 
                      url('https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
">
    <div class="container-fluid text-center pt-5 pb-5">
        <div class="container pt-5 pb-4">
            <h1 class="display-2 text-uppercase text-glow-primary text-white brand-font" style="letter-spacing: 2px;">
                <i class="fa-duotone fa-waveform-lines me-3 text-primary"></i>Crimson Node
            </h1>
            <p class="lead fs-3 text-uppercase text-white" 
               style="font-family: 'Exo 2', sans-serif; font-weight: 300; letter-spacing: 4px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                The Albemarle County Garage Sessions.
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
                <strong>Crimson Node</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
            </p>
            <p class="mb-0 small text-body-secondary">
                <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 2000) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none ms-1">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="bg-body-tertiary rounded shadow-sm border border-secondary border-opacity-50">
        <div class="row g-0 align-items-center">
            
            <div class="col-lg-6 d-none d-lg-block">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg" 
                     alt="Crimson Node Debut Album" 
                     class="img-fluid h-100 object-fit-cover rounded-start border-end border-secondary border-opacity-50"
                     style="min-height: 400px;">
            </div>

            <div class="col-lg-6 p-4 p-md-5 text-center text-lg-start">
                <span class="badge bg-success-subtle text-success-emphasis mb-3 px-3 py-2 text-uppercase letter-spacing-1" style="border: 1px solid var(--bs-success-border-subtle);">
                    <i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Now Streaming
                </span>
                <h2 class="display-5 fw-bold text-uppercase mb-3 brand-font">The Sessions Are Live</h2>
                <p class="lead text-body-secondary mb-4">
                    The 15-track debut album has officially cleared the global distribution network. Featuring the massive stadium synth-prog of "The Flight Path" and the relentless energy of "Quality of Service."
                </p>
                
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg" 
                     alt="Crimson Node Debut Album" 
                     class="img-fluid rounded mb-4 d-block d-lg-none shadow-sm border border-secondary">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <a href="/engine-room/artists/crimson-node/discography/2002-crimson-node" class="btn btn-primary btn-lg shadow-sm px-4 fw-bold d-inline-flex align-items-center border-glow">
                            <i class="fa-duotone fa-compact-disc me-2"></i>Enter the Archives
                        </a>
                        
                        <?php
                            // The DSP buttons component natively checks for valid IDs
                            $storeProps = [
                                'type' => 'artist', 
                                'size' => 'large',
                                'spotify' => '', 
                                'apple'   => '',
                                'amazon'  => '',
                                'youtube' => ''
                            ];
                            include ROOT_PATH . '/includes/components/store-button.php';
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-uppercase text-body-emphasis mb-3 brand-font">
            The Vanguard Architecture
        </h2>
        <p class="lead text-body-secondary mx-auto" style="max-width: 800px;">
            Crimson Node wasn't engineered in a commercial studio. It was built in a sound-dampened garage by a family dedicated to maintaining an impenetrable, joyful, and highly clinical ecosystem.
        </p>
    </div>

    <div class="row g-5 justify-content-center">
        
        <!-- Card 1: The Manager -->
        <div class="col-md-6 col-lg-5">
            <div class="card bg-hud-red h-100 border-primary shadow-glow hover-lift overflow-hidden">
                <div class="card-body p-4 text-center d-flex flex-column">
                    <div class="mb-3"><i class="fa-duotone fa-laptop-code fa-3x opacity-75"></i></div>
                    
                    <!-- Stripped text-white, letting the HUD class dictate the safe color -->
                    <h3 class="h4 fw-bold text-uppercase mb-1">The Manager</h3>
                    
                    <!-- Replaced text-white-50 with opacity-50 -->
                    <p class="small font-monospace opacity-50 mb-3">Matt Miller // The Crimson Node</p>
                    
                    <!-- Replaced text-white-75 with opacity-75 -->
                    <p class="small opacity-75 mb-0">
                        Functionally non-verbal and operating from a manual wheelchair, Matt acts as the band's brilliant, systems-oriented producer. From his Tactile Command Rig, he oversees the digital track routing and manages the band's entire operation without speaking a single word.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: The Rotating Vocalist -->
        <div class="col-md-6 col-lg-5">
            <div class="card bg-hud-blue h-100 border-info shadow-glow hover-lift overflow-hidden">
                <div class="card-body p-4 text-center d-flex flex-column">
                    <div class="mb-3"><i class="fa-duotone fa-microphone-stand fa-3x opacity-75"></i></div>
                    
                    <!-- Stripped text-white -->
                    <h3 class="h4 fw-bold text-uppercase mb-1">The Rotating Vocalist</h3>
                    
                    <!-- Replaced text-white-50 with opacity-50 -->
                    <p class="small font-monospace opacity-50 mb-3">Emily, Jessica, Rachel, & Shiloh</p>
                    
                    <!-- Replaced text-white-75 with opacity-75 -->
                    <p class="small opacity-75 mb-0">
                        The band rejects the concept of a single lead singer. Instead, the women of the Albemarle compound seamlessly rotate through the vocal booth, trading powerhouse stadium belts, aggressive punk energy, and melodic power-ballads to match the emotional weight of each track.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php if (!empty($allAlbums)): ?>
<div class="container py-5 border-bottom border-secondary border-opacity-25">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-uppercase text-body-emphasis brand-font">The Archives</h2>
        <p class="text-body-secondary">Swipe through the historical discography of Crimson Node.</p>
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
                    <h3 class="fw-bold text-primary brand-font">The Phalanx</h3>
                    <p class="text-secondary small">
                        Meet the family ecosystem: Matt, Sarah, Shiloh, Rachel, Emily, and Jessica.
                    </p>
                    <a href="<?php echo $root; ?>/family" class="btn btn-outline-primary mt-auto rounded-pill">View Roster</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-danger"><i class="fa-duotone fa-book-atlas fa-3x"></i></div>
                    <h3 class="fw-bold text-danger brand-font">The Lore</h3>
                    <p class="text-secondary small">
                        Explore the architecture of the Kids House, the Trent Ejection, and the CCC Crash.
                    </p>
                    <a href="<?php echo $root; ?>/story" class="btn btn-outline-danger mt-auto rounded-pill">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-info"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-info brand-font">The Discography</h3>
                    <p class="text-secondary small">
                        Explore the full catalog of master tapes produced in the Albemarle garage.
                    </p>
                    <a href="<?php echo $root; ?>/discography" class="btn btn-outline-info mt-auto rounded-pill">View Albums</a>
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
    z-index: 1040; 
}
#discographyCarousel .carousel-inner {
    overflow: visible; 
}
</style>