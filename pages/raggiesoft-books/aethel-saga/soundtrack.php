<?php
// pages/raggiesoft-books/aethel-saga/soundtrack.php
// THE OST PAGE: "The Silver Gauntlet of Aethel"
// Design: 1980s Cinematic / A Tale of Two Cuts

$pageTitle = "Original Soundtrack - The Silver Gauntlet of Aethel";

// 1. ASSETS CONFIGURATION
$poster_bg = 'https://assets.raggiesoft.com/aethel/images/aethel-hero.jpg';
$label_logo = 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png';

// 1987 Assets
$path_1987 = '/engine-room-records/artists/firelight/1987-aethel-theatrical';
$art_1987 = 'https://assets.raggiesoft.com/aethel/images/aethel-poster-background.jpg'; // Using the concept art for the theatrical poster

// 2017 Assets
$path_2017 = '/engine-room-records/artists/firelight/2017-aethel-leviathan-cut';
$art_2017 = 'https://assets.raggiesoft.com/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';
?>

<style>
    .nav-tabs-aethel .nav-link {
        color: rgba(255,255,255,0.5);
        font-family: 'Cinzel', serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-bottom: 3px solid transparent;
        border-radius: 0;
        font-size: 1.2rem;
        padding: 1rem 2rem;
        transition: all 0.3s ease;
    }
    .nav-tabs-aethel .nav-link:hover {
        color: var(--bs-warning);
        border-bottom-color: rgba(255, 193, 7, 0.3);
    }
    .nav-tabs-aethel .nav-link.active {
        color: var(--bs-warning);
        background-color: transparent;
        border-bottom-color: var(--bs-warning);
        font-weight: bold;
    }
    
    .polaroid {
        background: #fff;
        padding: 10px 10px 25px 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        transform: rotate(-2deg);
        transition: transform 0.3s ease, z-index 0s;
        z-index: 1;
    }
    .polaroid:nth-child(even) { transform: rotate(3deg); }
    .polaroid:hover { transform: scale(1.05) rotate(0deg); z-index: 10; }
    .polaroid img { width: 100%; border: 1px solid #ddd; filter: sepia(30%) contrast(1.1); }
    .polaroid-caption { font-family: 'Kalam', cursive; color: #333; font-size: 1.1rem; margin-top: 10px; line-height: 1.2; }
</style>

<div class="aethel-hero py-5 text-center d-flex align-items-center" 
     style="min-height: 60vh; 
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8) 80%, #000000 100%), url('<?php echo $poster_bg; ?>'); 
            background-size: cover; 
            background-position: center top;">
    
    <div class="container relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-3">
                    <span class="badge bg-black border border-warning text-warning rounded-pill px-3 py-2 text-uppercase letter-spacing-2 shadow-lg">
                        <i class="fa-duotone fa-film-canister me-2"></i>Original Motion Picture Soundtracks
                    </span>
                </div>
                
                <h1 class="display-3 fw-bold text-white mb-2 cinzel-font text-shadow-lg">
                    THE SILVER GAUNTLET
                </h1>
                <h2 class="h3 text-warning mb-4 cinzel-font opacity-90 text-shadow-sm letter-spacing-2">
                    OF AETHEL
                </h2>
                
                <p class="lead text-light text-shadow-sm mb-0" style="font-family: 'Georgia', serif;">
                    Music Composed and Arranged by <strong class="text-white">Firelight</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-black text-white py-5 border-top border-warning border-3" style="min-height: 100vh;">
    <div class="container">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <p class="fs-5 text-white-75 mb-0">
                    A tale of two cuts. Explore the original, heavily compromised 1987 theatrical release that bombed at the box office, or experience the definitive 30th Anniversary 3-Disc "Leviathan Cut" that restored the saga's true glory.
                </p>
            </div>
        </div>

        <ul class="nav nav-tabs nav-tabs-aethel justify-content-center mb-5 border-bottom border-secondary" id="soundtrackTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cut-1987-tab" data-bs-toggle="tab" data-bs-target="#cut-1987" type="button" role="tab" aria-controls="cut-1987" aria-selected="true">
                    1987 Theatrical LP
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cut-2017-tab" data-bs-toggle="tab" data-bs-target="#cut-2017" type="button" role="tab" aria-controls="cut-2017" aria-selected="false">
                    2017 Leviathan Box Set
                </button>
            </li>
        </ul>

        <div class="tab-content" id="soundtrackTabsContent">
            
            <div class="tab-pane fade show active" id="cut-1987" role="tabpanel" aria-labelledby="cut-1987-tab">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="sticky-top" style="top: 100px; z-index: 1;">
                            <img src="<?php echo $art_1987; ?>" alt="1987 Soundtrack Cover" class="img-fluid rounded shadow-lg border border-secondary w-100 mb-4" style="filter: sepia(20%) contrast(1.1);">
                            
                            <div class="alert alert-dark bg-danger-subtle border-danger text-danger-emphasis mb-4">
                                <h5 class="fw-bold cinzel-font mb-2"><i class="fa-solid fa-scissors me-2"></i>Studio Sabotage</h5>
                                <p class="small mb-0">
                                    Truncated to fit a single 12" vinyl. The studio deleted the Endless Ocean and the Scouring of Sunstead entirely, forcing a "happily ever after" ending and splicing a generic pop ballad into the credits.
                                </p>
                            </div>

                            <div class="text-center">
                                <?php 
                                $storeProps = [
                                    'type'    => 'album',
                                    'size'    => 'medium',
                                    'spotify' => '1987_SPOTIFY_ID', // Replace later
                                    'apple'   => '1987_APPLE_ID',
                                    'vinyl'   => 'https://merch.aethelsaga.com/music/vinyl/1987-ost' // Cloudflare Route to elasticStage
                                ];
                                include ROOT_PATH . '/includes/components/store-button.php'; 
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5">
                        <div class="d-flex align-items-end justify-content-between mb-4 border-bottom border-danger pb-3">
                            <div>
                                <h3 class="cinzel-font text-white mb-1">Tracklist (1987)</h3>
                                <span class="text-secondary small text-uppercase letter-spacing-1">The Studio Cut</span>
                            </div>
                            <span class="badge bg-danger text-white">40 Min Runtime</span>
                        </div>
                        <?php 
                            $album_path_web = $path_1987; 
                            include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
                        ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="cut-2017" role="tabpanel" aria-labelledby="cut-2017-tab">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="sticky-top" style="top: 100px; z-index: 1;">
                            <div class="position-relative mb-4">
                                <img src="<?php echo $art_2017; ?>" alt="2017 Soundtrack Cover" class="img-fluid rounded shadow-lg border border-warning w-100">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded" style="background: linear-gradient(135deg, rgba(212,175,55,0.2) 0%, rgba(255,255,255,0) 50%); pointer-events: none;"></div>
                            </div>
                            
                            <div class="alert alert-dark bg-body-tertiary border-warning text-body-secondary mb-4">
                                <h5 class="fw-bold cinzel-font text-warning mb-2"><i class="fa-solid fa-gem me-2"></i>The Restoration</h5>
                                <p class="small mb-0">
                                    The definitive 3-disc continuous experience. Every atmospheric synth build, every nautical rock anthem, and the brutal, acoustic epilogue have been fully restored.
                                </p>
                            </div>

                            <div class="text-center">
                                <?php 
                                $storeProps = [
                                    'type'    => 'album',
                                    'size'    => 'medium',
                                    'spotify' => '2017_SPOTIFY_ID', // Replace later
                                    'apple'   => '2017_APPLE_ID',
                                    'cd'      => 'https://merch.aethelsaga.com/music/cd/leviathan-box-set' // Cloudflare Route to Kunaki/TrepStar
                                ];
                                include ROOT_PATH . '/includes/components/store-button.php'; 
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5">
                        <div class="d-flex align-items-end justify-content-between mb-4 border-bottom border-warning pb-3">
                            <div>
                                <h3 class="cinzel-font text-warning mb-1">Tracklist (2017)</h3>
                                <span class="text-secondary small text-uppercase letter-spacing-1">The 3-Disc Leviathan Cut</span>
                            </div>
                            <span class="badge bg-warning text-dark fw-bold">35 Tracks</span>
                        </div>
                        <?php 
                            $album_path_web = $path_2017; 
                            include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="bg-body-tertiary py-5 border-top border-secondary border-opacity-50">
    <div class="container py-4">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold text-body-emphasis cinzel-font mb-3">Practical Magic</h2>
                <p class="lead text-body-secondary">
                    Before CGI, weight mattered. Explore the unearthed polaroids from the 1986 creature shop, miniature stages, and the sweltering heat of the Iron Heart sets.
                </p>
                <a href="https://merch.aethelsaga.com/shirts/1986-creature-shop" target="_blank" class="btn btn-outline-dark rounded-pill mt-2 fw-bold">
                    <i class="fa-solid fa-shirt me-2 text-primary"></i>Get the '86 Crew Tee
                </a>
            </div>
        </div>

        <div class="row g-4 justify-content-center align-items-center">
            
            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="https://assets.raggiesoft.com/aethel/images/Gemini_Generated_Image_w9qi0lw9qi0lw9qi.jpg" alt="Miniature Shadowspire Set">
                    <div class="polaroid-caption text-center">
                        Shadowspire Miniature.<br>Stage 4. Forced perspective.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="https://assets.raggiesoft.com/aethel/images/Gemini_Generated_Image_vf0harvf0harvf0h.jpg" alt="Gloomwraith Suit">
                    <div class="polaroid-caption text-center">
                        Gloomwraith suit test.<br>110°F inside the rubber.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="https://assets.raggiesoft.com/aethel/images/Gemini_Generated_Image_wivr1zwivr1zwivr.jpg" alt="Optical Effects The Void">
                    <div class="polaroid-caption text-center">
                        The Void.<br>Pure optical double-exposure.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="https://assets.raggiesoft.com/aethel/images/Gemini_Generated_Image_9ojtk49ojtk49ojt.jpg" alt="The Iron Heart Set">
                    <div class="polaroid-caption text-center">
                        The Iron Heart.<br>Built from actual industrial scrap.
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>