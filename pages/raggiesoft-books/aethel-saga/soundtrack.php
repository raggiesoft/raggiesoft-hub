<?php
/**
 * RaggieSoft Architecture - Page Component
 * 
 * File: pages/raggiesoft-books/aethel-saga/soundtrack.php
 * Component: Aethel OST Store & Player
 * Type: Audio Portfolio / eCommerce Gateway
 * 
 * Description:
 * Showcases the "two cuts" of the Aethel soundtrack (1987 LP vs 2017 Box Set).
 * Integrates dynamic tracklists via the `_tracklist-downloader.php` partial.
 * Also includes a "Practical Magic" polaroid gallery using CSS transforms.
 *
 * Maintenance Notes:
 * - Uses Web Awesome v3.13.0 <wa-tab-group> to toggle between the two album versions.
 * - Relies on $album_path_web being re-assigned before including the tracklist component.
 * - Check `store-button.php` parameters if changing merchandising links.
 */
// THE OST PAGE: "The Silver Gauntlet of Aethel"
// Design: 1980s Cinematic / A Tale of Two Cuts

$pageTitle = "Original Soundtrack - The Silver Gauntlet of Aethel";

// 1. ASSETS CONFIGURATION
$poster_bg = $cdnBaseUrl . '/aethel/images/aethel-hero.jpg';
$label_logo = $cdnBaseUrl . '/engine-room-records/images/logos/engine-room-records-logo.png';

// 1987 Assets
$path_1987 = '/engine-room-records/artists/firelight/1987-aethel-theatrical';
$art_1987 = $cdnBaseUrl . '/aethel/images/aethel-poster-background.jpg'; // Using the concept art for the theatrical poster

// 2017 Assets
$path_2017 = '/engine-room-records/artists/firelight/2017-aethel-leviathan-cut';
$art_2017 = $cdnBaseUrl . '/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';
?>

<style>
    .aethel-tab-group::part(tabs) {
        justify-content: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.25);
        margin-bottom: 2.5rem;
    }
    .aethel-tab-group wa-tab {
        font-family: 'Cinzel', serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 1.2rem;
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
                    <wa-badge variant="warning" appearance="outlined" pill class="px-3 py-2 text-uppercase letter-spacing-2 shadow-lg">
                        <i class="fa-duotone fa-film-canister me-2"></i>Original Motion Picture Soundtracks
                    </wa-badge>
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

        <wa-tab-group class="aethel-tab-group">
            <wa-tab slot="nav" panel="cut-1987">1987 Theatrical LP</wa-tab>
            <wa-tab slot="nav" panel="cut-2017">2017 Leviathan Box Set</wa-tab>

            <wa-tab-panel name="cut-1987">
                <div class="row pt-4">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="sticky-top" style="top: 100px; z-index: 1;">
                            <img src="<?php echo $art_1987; ?>" alt="1987 Soundtrack Cover" class="img-fluid rounded shadow-lg border border-secondary w-100 mb-4" style="filter: sepia(20%) contrast(1.1);">
                            
                            <wa-callout variant="danger" appearance="accent" class="mb-4 d-block">
                                <i slot="icon" class="fa-solid fa-scissors"></i>
                                <h5 class="fw-bold cinzel-font mb-2">Studio Sabotage</h5>
                                <p class="small mb-0">
                                    Truncated to fit a single 12" vinyl. The studio deleted the Endless Ocean and the Scouring of Sunstead entirely, forcing a "happily ever after" ending and splicing a generic pop ballad into the credits.
                                </p>
                            </wa-callout>

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
                            <wa-badge variant="danger" appearance="accent">40 Min Runtime</wa-badge>
                        </div>
                        <?php 
                            $album_path_web = $path_1987; 
                            include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
                        ?>
                    </div>
                </div>
            </wa-tab-panel>

            <wa-tab-panel name="cut-2017">
                <div class="row pt-4">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="sticky-top" style="top: 100px; z-index: 1;">
                            <div class="position-relative mb-4">
                                <img src="<?php echo $art_2017; ?>" alt="2017 Soundtrack Cover" class="img-fluid rounded shadow-lg border border-warning w-100">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded" style="background: linear-gradient(135deg, rgba(212,175,55,0.2) 0%, rgba(255,255,255,0) 50%); pointer-events: none;"></div>
                            </div>
                            
                            <wa-callout variant="warning" appearance="accent" class="mb-4 d-block">
                                <i slot="icon" class="fa-solid fa-gem"></i>
                                <h5 class="fw-bold cinzel-font text-warning mb-2">The Restoration</h5>
                                <p class="small mb-0">
                                    The definitive 3-disc continuous experience. Every atmospheric synth build, every nautical rock anthem, and the brutal, acoustic epilogue have been fully restored.
                                </p>
                            </wa-callout>

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
                            <wa-badge variant="warning" appearance="accent" class="fw-bold">35 Tracks</wa-badge>
                        </div>
                        <?php 
                            $album_path_web = $path_2017; 
                            include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
                        ?>
                    </div>
                </div>
            </wa-tab-panel>
        </wa-tab-group>

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
                <wa-button href="https://merch.aethelsaga.com/shirts/1986-creature-shop" target="_blank" variant="neutral" appearance="outlined" pill class="mt-2 fw-bold">
                    <i slot="start" class="fa-solid fa-shirt text-primary"></i>Get the '86 Crew Tee
                </wa-button>
            </div>
        </div>

        <div class="row g-4 justify-content-center align-items-center">
            
            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="<?php echo $cdnBaseUrl; ?>/aethel/images/Gemini_Generated_Image_w9qi0lw9qi0lw9qi.jpg" alt="Miniature Shadowspire Set">
                    <div class="polaroid-caption text-center">
                        Shadowspire Miniature.<br>Stage 4. Forced perspective.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="<?php echo $cdnBaseUrl; ?>/aethel/images/Gemini_Generated_Image_vf0harvf0harvf0h.jpg" alt="Gloomwraith Suit">
                    <div class="polaroid-caption text-center">
                        Gloomwraith suit test.<br>110°F inside the rubber.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="<?php echo $cdnBaseUrl; ?>/aethel/images/Gemini_Generated_Image_wivr1zwivr1zwivr.jpg" alt="Optical Effects The Void">
                    <div class="polaroid-caption text-center">
                        The Void.<br>Pure optical double-exposure.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="polaroid">
                    <img src="<?php echo $cdnBaseUrl; ?>/aethel/images/Gemini_Generated_Image_9ojtk49ojtk49ojt.jpg" alt="The Iron Heart Set">
                    <div class="polaroid-caption text-center">
                        The Iron Heart.<br>Built from actual industrial scrap.
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>