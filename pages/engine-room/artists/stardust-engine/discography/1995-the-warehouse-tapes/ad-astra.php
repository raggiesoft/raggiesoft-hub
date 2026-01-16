<?php
// pages/discography/1995-the-warehouse-tapes/ad-astra.php
// The Magnum Opus. The song they went to war for.

$pageTitle = "Ad Astra (Escape Velocity) - The Stardust Engine";

// Pointing to the Single folder
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1995-ad-astra-single';
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container pb-5 glass-container">
    
    <div style="background: linear-gradient(to bottom right, rgba(5, 5, 8, 0.8), rgba(5, 5, 8, 0.6)), url('https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/harmonic-velocity.jpg') center/cover no-repeat;">
        <div class="text-center mb-5 fade-in-up">
            <span class="badge rounded-pill border border-warning text-warning mb-3 px-3 py-2 shadow-glow">
                <i class="fa-duotone fa-stars me-2"></i>The Magnum Opus
            </span>
            <h1 class="display-1 fw-bold text-uppercase text-glow-primary mb-0" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px;">
                Ad Astra
            </h1>
            <p class="h5 text-info fw-light text-uppercase mt-2" style="font-family: 'Exo 2', sans-serif; letter-spacing: 2px;">
                (Officially: "Escape Velocity")
            </p>
        </div>

        <div class="row justify-content-center align-items-center mb-5 p-4 p-md-5 rounded-4 shadow-lg border border-info border-opacity-25">
            <div class="col-md-5 mb-4 mb-md-0">
                <?php $props = [
                    'path' => $album_path_web, 
                    'alt' => 'Ad Astra Single Art',
                    'variant' => 'pact' // Violet border
                ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
            </div>

            <div class="col-md-7">
                <div class="card border-primary shadow-lg h-100" style="background: rgba(10, 5, 20, 0.5); backdrop-filter: blur(20px);">
                    <div class="card-body p-5 text-center d-flex flex-column justify-content-center">
                        
                        <p class="lead text-white mb-4">
                            The 15-minute progressive rock suite that defined the band's freedom.
                            <br><span class="text-info small fst-italic">"The moment the 'Engine' ignited and the 'Stardust' took over."</span>
                        </p>

                        <button class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-glow mb-3" 
                                id="btn-launch-mission"
                                style="font-family: 'Audiowide'; letter-spacing: 1px;">
                            <i class="fa-duotone fa-rocket-launch me-2"></i> Launch Mission (15:33)
                        </button>
                        
                        <div class="small text-white">
                            <i class="fa-duotone fa-compact-disc me-2"></i>Full Single &bull; 4 Tracks
                        </div>
                        
                        <div class="mt-4">
                            <a href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="btn btn-outline-danger btn-sm rounded-pill px-4 me-2">
                                <i class="fa-duotone fa-shield-halved me-2"></i>The 2018 Defense
                            </a>
                            <a href="/engine-room/artists/stardust-engine/story/ad-astra" class="btn btn-outline-info btn-sm rounded-pill px-4">
                                <i class="fa-duotone fa-book-sparkles me-2"></i>Mission Log
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card terminal-card p-4 border-start border-info border-4">
                <div class="terminal-header">
                    <i class="fa-duotone fa-satellite-dish me-2"></i>
                    Secure Transmission Log // Port Telsus // The Ironworks
                </div>
                <div class="small opacity-75 mb-3">
                    > SOURCE: H. O'Connell (Designation: "The Fixer")<br>
                    > LOCATION: Lower Decks / Sector 7 (Decommissioned Engine Chamber)<br>
                    > STATUS: BROADCASTING<br>
                    > ENCRYPTION: Glimmer-Key Alpha
                </div>
                <div class="terminal-text">
                    <p>
                        <strong>LOG ENTRY:</strong> The Ticks are swarming the upper promenade again. Compliance checks. They don't like coming down here to the rust and the rot. The magnetic interference from the old engines messes with their comms. Good.
                    </p>
                    <p>
                        We're playing "Ad Astra" tonight. It's not just a song. It's a map. Embedded in the sequencer track of Part II are the navigational coordinates for the safe hyperspace tributary through the Telsan Gap. If there are any free ships listening out there... this is your way home.
                    </p>
                </div>
                <p class="mb-0 text-end fw-bold blink-text">
                    // END TRANSMISSION //
                </p>
            </div>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <div class="row g-5">
        
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">
                <h3 class="h4 text-primary fw-bold text-uppercase border-bottom border-primary pb-2 mb-4">
                    Mission Data
                </h3>
                <p class="text-white">
                    Written in the aftermath of the 1994 <em>Friction</em> trial, this suite is Cassidy O'Connell's autobiographical journey from trauma to transcendence.
                </p>
                
                <div class="alert alert-dark border-warning mt-4 bg-opacity-50">
                    <i class="fa-duotone fa-microchip text-warning me-2"></i>
                    <strong class="text-warning">Production Note:</strong>
                    <p class="small text-white mb-0 mt-1">
                        The "mechanical cutoff" sound at <strong>06:58</strong> is Ryan O'Connell physically pulling the plug on his guitar amplifier to simulate a rocket's Main Engine Cutoff (MECO).
                    </p>
                </div>

                <div class="alert alert-dark border-danger mt-3 bg-opacity-25">
                    <i class="fa-duotone fa-user-shield text-danger me-2"></i>
                    <strong class="text-danger">The "Section C" Incident:</strong>
                    <p class="small text-white mb-0 mt-1">
                        In 2018, Omni-Global attempted to cut <strong>Part III: The Cosmos</strong> (07:00-12:00) to "optimize" the track. This attempt triggered the <a href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="alert-link text-white text-decoration-underline">$150M refusal meeting</a>. The band considers this section "sacred ground."
                    </p>
                </div>

                <div class="mt-5">
                    <?php $props = [
                        'text' => 'Back to The Warehouse Tapes', 
                        'href' => '/discography/1995-the-warehouse-tapes', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-arrow-left', 
                        'iconPosition' => 'before'
                    ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            
            <div class="card border-secondary bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(0)" role="button">
                        <span class="badge bg-secondary me-3"><i class="fa-duotone fa-play me-1"></i>00:00</span>
                        <h4 class="text-secondary text-uppercase fw-bold mb-0 timestamp-link">Part I: The Cage</h4>
                    </div>
                    <div class="ps-5">
                        <p class="font-monospace text-white opacity-75 mb-0 small fst-italic">"The walls are cold, the air is thin..."</p>
                        <p class="small text-muted mt-2">
                            The slow, claustrophobic opening represents the "Cold War" period (1992-1994) under Apex Records.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card border-warning bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(180)" role="button">
                        <span class="badge bg-warning text-dark me-3"><i class="fa-duotone fa-play me-1"></i>03:00</span>
                        <h4 class="text-warning text-uppercase fw-bold mb-0 timestamp-link">Part II: Ignition</h4>
                    </div>
                    <div class="ps-5">
                        <p class="font-monospace text-white opacity-75 mb-0 small fst-italic">"The sequencer starts. The Engine roars."</p>
                        <p class="small text-muted mt-2">
                            The tempo jumps to 140 BPM. This is the escape. The driving sequencer represents the launch vehicle clearing the tower.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card border-primary bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(440)" role="button">
                        <span class="badge bg-primary me-3"><i class="fa-duotone fa-play me-1"></i>07:20</span>
                        <h4 class="text-primary text-uppercase fw-bold mb-0 timestamp-link">Part III: The Cosmos</h4>
                    </div>
                    <div class="ps-5">
                        <span class="badge bg-danger mb-2 small">DO NOT EDIT</span>
                        <p class="font-monospace text-white opacity-75 mb-0 small fst-italic">"I'm floating now, the engine's off..."</p>
                        <p class="small text-muted mt-2">
                            Zero Gravity. The silence after MECO. This is the section Omni-Global called "churn valley." To Cassidy, it is the moment the abuse stops and the healing begins.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card border-success bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(715)" role="button">
                        <span class="badge bg-success me-3"><i class="fa-duotone fa-play me-1"></i>11:55</span>
                        <h4 class="text-success text-uppercase fw-bold mb-0 timestamp-link">Part IV: Re-entry</h4>
                    </div>
                    <div class="ps-5">
                        <p class="font-monospace text-white opacity-75 mb-0 small fst-italic">"The walls are gone, the air is clear..."</p>
                        <p class="small text-muted mt-2">
                            The safe landing. The band touches down in the "New World" (Independence).
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Wait for DOM
    document.addEventListener('DOMContentLoaded', () => {
        
        // 1. Find the index of "Full Suite" in the playlist
        let suiteIndex = 0;
        if(typeof window.STARDUST_PLAYLIST !== 'undefined') {
            window.STARDUST_PLAYLIST.forEach((track, index) => {
                if(track.title.toLowerCase().includes('full suite')) {
                    suiteIndex = index;
                }
            });
        }

        // 2. Bind the big Launch button
        const launchBtn = document.getElementById('btn-launch-mission');
        if(launchBtn) {
            launchBtn.onclick = () => {
                if(window.loadTrack) window.loadTrack(suiteIndex);
            };
        }

        // 3. Global Seek Helper for timestamps
        window.seekTo = function(seconds) {
            if (typeof window.STARDUST_PLAYLIST === 'undefined') return;
            const audio = document.getElementById('main-audio-element');
            
            // Check if we are currently playing the suite
            const suiteSrc = window.STARDUST_PLAYLIST[suiteIndex].src;
            const currentSrc = audio.getAttribute('src');

            if (!currentSrc || !currentSrc.includes(suiteSrc)) {
                window.loadTrack(suiteIndex, true);
                audio.addEventListener('loadedmetadata', function onLoaded() {
                    audio.currentTime = seconds;
                    audio.removeEventListener('loadedmetadata', onLoaded);
                }, { once: true });
            } else {
                audio.currentTime = seconds;
                audio.play();
            }
        };
    });
</script>