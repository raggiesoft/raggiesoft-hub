<?php
$pageTitle = "Tales of the Solstice - The Winter Palace";
$pageTheme = "ad-astra"; 

// ASSETS
$hero_art = 'https://assets.raggiesoft.com/external/music/the-winter-palace/tales-of-the-solstice/julian-variant.jpg';
$original_art = 'https://assets.raggiesoft.com/external/music/the-winter-palace/tales-of-the-solstice/album-art.jpg';
// NOTE: Ensure this OGG file exists in your Spaces bucket!
$audio_src = 'https://assets.raggiesoft.com/external/music/the-winter-palace/upon-this-winters-night.ogg';
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-5 text-center">
            <div class="card bg-transparent border-info shadow-lg p-2 transform-rotate-minus-1">
                <img src="<?php echo $hero_art; ?>" 
                     class="img-fluid rounded border border-secondary" 
                     alt="A figure in a wheelchair moving down a candlelit hall toward a star-shaped window.">
                <div class="card-footer bg-transparent border-0 text-center pt-2">
                    <small class="font-monospace text-info opacity-75">
                        <i class="fa-duotone fa-eye me-2"></i>Subjective Memory Render: Nov 1998
                    </small>
                </div>
            </div>
        </div>
        
        <div class="col-md-7 ps-md-5">
            <span class="badge border border-secondary text-secondary rounded-pill mb-3 px-3">
                <i class="fa-duotone fa-box-archive me-2"></i>Safe Harbor Catalog
            </span>
            <h1 class="display-3 fw-bold text-light text-uppercase mb-1" style="font-family: 'Impact', sans-serif;">
                Upon This Winter's Night
            </h1>
            <h2 class="h4 text-secondary font-monospace mb-4">
                The Winter Palace
            </h2>
            
            <p class="lead text-white-50">
                The song that built the shield. 
            </p>
            <p class="text-secondary">
                Technically released in 1996, this track is canonized in Engine Room history as the "Sonic Armor" that saved <strong>Julian Croft</strong> (frontman of Mirage). Julian lived next door to The Fortress, and his survival story was deeply intertwined with the O'Connell family.
            </p>
            <p class="text-secondary">
                When Holly learned that this out-of-print song was the specific frequency that grounded him during his escape from Seattle in 1998, she didn't just buy a copy—she bought the company. She acquired the bankrupt Solstice Records catalog to ensure the song that saved her friend would never be deleted.
            </p>

            <div class="card border-secondary bg-dark bg-opacity-50 mt-4">
                <div class="card-body p-4 d-flex align-items-center">
                    <button class="btn btn-info rounded-circle p-3 me-4 shadow-glow" onclick="playExternalTrack()">
                        <i class="fa-duotone fa-play fa-2x ps-1"></i>
                    </button>
                    <div class="flex-grow-1">
                        <h5 class="text-light fw-bold mb-0">Upon This Winter's Night</h5>
                        <div class="text-secondary small font-monospace">The Winter Palace &bull; Tales of the Solstice</div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="text-end ms-4 d-none d-md-block">
                        <span class="text-white-50 font-monospace">04:31</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function playExternalTrack() {
        // Hooks into the global stardust-player.js if available
        const track = {
            title: "Upon This Winter's Night",
            artist: "The Winter Palace",
            album: "Tales of the Solstice",
            artwork: "<?php echo $hero_art; ?>",
            src: "<?php echo $audio_src; ?>"
        };
        
        if (typeof window.loadTrack === 'function') {
            // Direct load if supported, or custom event
            // For now, let's assume we can push it to the playlist or handle it
            console.log("Loading External Track:", track);
            // If you have a specific method in your player to play a single object:
            if (window.stardustPlayer) {
                 window.stardustPlayer.playSingle(track);
            }
        }
    }
</script>