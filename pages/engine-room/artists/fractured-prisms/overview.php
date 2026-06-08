<?php
// pages/engine-room/artists/fractured-prisms/overview.php
// The Band's "Home" Page

$root = '/engine-room/artists/fractured-prisms';

// Fetch and decode the Albums JSON
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
                Fractured Prisms
            </h1>
            <p class="lead fs-3 text-uppercase text-white-50 mt-3" 
               style="font-family: var(--font-tech); letter-spacing: 3px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                1883 <span class="mx-2 text-secondary">||</span> 1983
            </p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <div class="alert bg-prism-dark border-secondary shadow-sm d-flex align-items-center" role="alert">
        <i class="fa-duotone fa-robot-astromech fa-3x me-3 text-secondary d-none d-md-block"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1 text-light"><i class="fa-duotone fa-robot-astromech me-2 text-secondary d-inline-block d-md-none"></i>Transparency & Timeline Notice</h4>
            <p class="mb-2 small text-white-50 border-bottom border-secondary pb-2">
                <strong>Fractured Prisms</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
            </p>
            <p class="mb-0 small text-white-50">
                <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 1983) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-primary border-bottom border-primary text-decoration-none ms-1">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="bg-body-tertiary rounded shadow-sm border border-prism">
        <div class="row g-0 align-items-center">
            
            <div class="col-lg-6 d-none d-lg-block">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/1983-carnaby-street/album-art.jpg" 
                     alt="Claire and Rhys Manning at The Hollow Square" 
                     class="img-fluid h-100 object-fit-cover rounded-start"
                     style="min-height: 400px; filter: grayscale(20%) contrast(1.1);">
            </div>

            <div class="col-lg-6 p-4 p-md-5 text-center text-lg-start bg-prism-dark text-light rounded-end">
                <span class="badge border border-prism text-primary mb-3 px-3 py-2 text-uppercase font-monospace">
                    <i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Now Streaming
                </span>
                <h2 class="display-5 fw-bold text-uppercase mb-3 gothic-font">The Gates Are Open</h2>
                <p class="lead text-white-50 mb-4 font-monospace small">
                    The complete, uncompromised discography of Fractured Prisms has officially cleared the global distribution network. Step into the gaslamp fog and experience the 100-year echo.
                </p>
                
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/1983-carnaby-street/album-art.jpg" 
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
                                'spotify' => '', 
                                'apple'   => '',
                                'amazon'  => '',
                                'youtube' => ''
                            ];
                            include ROOT_PATH . '/includes/components/store-button.php';
                        ?>

                        <a href="https://facebook.com/The.Fractured.Prisms" target="_blank" class="btn btn-facebook btn-lg shadow-sm px-4 fw-bold d-inline-flex align-items-center font-monospace small">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.58-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                            Join the Square
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="text-center mb-5">
        <span class="badge bg-transparent border border-secondary text-white-50 px-3 py-2 text-uppercase font-monospace mb-3">
            <i class="fa-duotone fa-landmark me-2"></i>Historical Archives
        </span>
        <h2 class="display-5 fw-bold text-uppercase text-light mb-3 gothic-font text-glow-prism">
            The 1985 Phenomenon
        </h2>
        <p class="lead text-white-75 mx-auto" style="max-width: 800px;">
            Backed by immense generational wealth and a distribution-only record deal, Fractured Prisms bypassed the traditional club circuit entirely. Their mythos was cemented by two monumental events.
        </p>
    </div>

    <div class="row g-5 justify-content-center">
        
        <div class="col-md-6 col-lg-5">
            <div class="card h-100 border-secondary bg-prism-dark hover-lift overflow-hidden">
                <div class="card-body p-4 text-center d-flex flex-column border-top border-prism">
                    <h3 class="h4 text-primary fw-bold text-uppercase mb-1 gothic-font">1883 (The Rock Opera)</h3>
                    <p class="small text-white-50 font-monospace mb-3">Released: 1984 // 2-Disc Concept Album</p>
                    <p class="text-white-75 small mb-0">
                        Following the massive success of <em>Carnaby Street</em>, Rhys and Claire plunged fully into their psychological sanctuary. The result was a sprawling, 2-disc rock opera set entirely within the gaslamp-lit halls of the Victorian-era Hollow Square, bringing the rest of their deceased family "back to life" through complex synthesiser arrangements.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-5">
            <div class="card h-100 border-secondary bg-prism-dark hover-lift overflow-hidden">
                <div class="card-body p-4 text-center d-flex flex-column border-top border-prism">
                    <h3 class="h4 text-primary fw-bold text-uppercase mb-1 gothic-font">Live at Independence Stadium</h3>
                    <p class="small text-white-50 font-monospace mb-3">Philadelphia, PA // 1985</p>
                    <p class="text-white-75 small mb-0">
                        Their very first live performance was not in a pub or a theater, but a sold-out, 90,000-seat stadium. With no opening act, they rented the venue directly. The concert was a masterclass in controlled sensory environments, allowing Claire to perform safely while delivering a legendary, once-in-a-lifetime physical manifestation of their studio sound.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php if (!empty($allAlbums)): ?>
<div class="container py-5 border-bottom border-secondary border-opacity-25">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-uppercase text-light gothic-font">The Vault</h2>
        <p class="text-white-50 font-monospace small">Swipe through the historical discography of Fractured Prisms.</p>
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
                            <span class="text-primary fw-bold font-monospace small text-uppercase"><?php echo htmlspecialchars($album['era_label']); ?></span>
                            <h3 class="fw-bold mb-1 gothic-font"><?php echo htmlspecialchars($album['title']); ?></h3>
                            <p class="text-white-50 mb-3 font-monospace small">Released: <?php echo htmlspecialchars($album['year']); ?> <?php echo isset($album['extra']) ? $album['extra'] : ''; ?></p>
                            
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-start">
                                <a href="<?php echo htmlspecialchars($album['url']); ?>" class="btn btn-outline-light rounded-pill px-4 font-monospace small">
                                    <i class="fa-duotone fa-compact-disc me-2"></i>Explore Record
                                </a>
                                
                                <?php 
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
                    <h3 class="fw-bold text-primary gothic-font">The Residents</h3>
                    <p class="text-white-75 small">
                        Meet Claire and Rhys Manning: the surviving siblings who built a mechanical sanctuary to resurrect their family's sound.
                    </p>
                    <a href="<?php echo $root; ?>/band" class="btn btn-outline-primary mt-auto rounded-pill font-monospace small">View Bios</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-secondary"><i class="fa-duotone fa-book-journal-whills fa-3x"></i></div>
                    <h3 class="fw-bold text-primary gothic-font">The Lore</h3>
                    <p class="text-white-75 small">
                        Uncover the tragedy of the 1981 Shap Fell disaster, the transatlantic escape to Maryland, and the 100-year time slip.
                    </p>
                    <a href="<?php echo $root; ?>/story" class="btn btn-outline-primary mt-auto rounded-pill font-monospace small">Read History</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-secondary bg-transparent hover-lift">
                <div class="card-body d-flex flex-column text-center p-4">
                    <div class="mb-3 text-secondary"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-primary gothic-font">The Discography</h3>
                    <p class="text-white-75 small">
                        From the 1983 mechanical resurrection of <em>Carnaby Street</em> to the sprawling 2-disc rock opera of <em>1883</em>. Explore their catalog.
                    </p>
                    <a href="<?php echo $root; ?>/discography" class="btn btn-outline-primary mt-auto rounded-pill font-monospace small">View Albums</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-lift { transition: transform 0.2s; }
.hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.4); }

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.4; }
    100% { opacity: 1; }
}
.pulse-icon {
    animation: pulse 2s infinite;
    color: #b19cd9; /* Lavender glow */
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