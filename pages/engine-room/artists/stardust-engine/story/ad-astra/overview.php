<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/overview.php
// The Hub for the Ad Astra Narrative Arc
// Context: The "Magnum Opus" mission.

$pageTitle = "Ad Astra: The Mission - The Stardust Engine Lore";
$cardBackground = 'https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/ad-astra-siblings-bg.jpg';
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="position-relative d-flex align-items-center justify-content-center overflow-hidden border-bottom border-info" style="height: 60vh;">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
                <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/ad-astra-hero.jpg" 
             alt="The Stardust Engine performing in front of a massive window showing the Veil Nebula." 
             class="w-100 h-100 object-fit-cover"
             style="opacity: 0.95; filter: brightness(0.8);">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" 
             style="opacity: 0.3; background: linear-gradient(to bottom, transparent 0%, #050508 100%);"></div>
    </div>

    <div class="container position-relative text-center z-1 fade-in-up">
        <h1 class="display-1 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px; text-shadow: 0 0 30px rgba(0, 212, 255, 0.6);">
            Ad Astra
        </h1>
        <p class="lead text-warning font-monospace text-uppercase letter-spacing-2 mb-4">
            The Magnum Opus // The Escape Velocity
        </p>
    </div>
</div>

<div class="container py-5 glass-container" style="margin-top: -50px; position: relative; z-index: 2;">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card terminal-card border-info shadow-lg">
                <div class="card-header bg-info bg-opacity-10 border-bottom border-info text-info fw-bold">
                    <i class="fa-duotone fa-clipboard-list me-2"></i>MISSION MANIFEST: THE "DEEP DIVE"
                </div>
                <div class="card-body p-0">
                    
                    <div class="row g-0 border-bottom border-secondary border-opacity-25">
                        <div class="col-md-4 p-3 border-end border-secondary border-opacity-25">
                            <small class="text-secondary text-uppercase d-block font-monospace">Vessel</small>
                            <span class="text-light fw-bold">U.S.S. Aethelgard</span>
                        </div>
                        <div class="col-md-4 p-3 border-end border-secondary border-opacity-25">
                            <small class="text-secondary text-uppercase d-block font-monospace">Destination</small>
                            <span class="text-warning">The Veil Nebula</span>
                        </div>
                        <div class="col-md-4 p-3">
                            <small class="text-secondary text-uppercase d-block font-monospace">Duration</small>
                            <span class="text-info">21 Cycles</span>
                        </div>
                    </div>

                    <div class="p-3 bg-black bg-opacity-25">
                        <h6 class="text-secondary text-uppercase font-monospace mb-3 ps-2 border-start border-2 border-secondary">Entertainment Log</h6>
                        
                        <div class="row g-0 align-items-center mb-2 p-2 hover-bg-dark rounded">
                            <div class="col-3 col-md-2 text-warning fw-bold font-monospace">DAYS 1-3</div>
                            <div class="col-9 col-md-4 text-light text-uppercase fw-bold">
                                <i class="fa-duotone fa-shuttle-space me-2 text-secondary"></i>The Ascent
                            </div>
                            <div class="col-12 col-md-6 text-white-50 small mt-1 mt-md-0">
                                High-G atmospheric exit. <span class="text-info">Music: "Ignition" (High Energy Rock)</span>.
                            </div>
                        </div>

                        <div class="row g-0 align-items-center mb-2 p-2 hover-bg-dark rounded border-start border-4 border-info bg-info bg-opacity-10">
                            <div class="col-3 col-md-2 text-info fw-bold font-monospace">DAYS 4-17</div>
                            <div class="col-9 col-md-4 text-light text-uppercase fw-bold">
                                <i class="fa-duotone fa-stars me-2 text-info"></i>The Drift
                            </div>
                            <div class="col-12 col-md-6 text-white-50 small mt-1 mt-md-0">
                                Harmonic Velocity (FTL). Zero-G. <span class="text-info">Music: "Ad Astra" (Progressive Suite)</span>.
                            </div>
                        </div>

                        <div class="row g-0 align-items-center p-2 hover-bg-dark rounded">
                            <div class="col-3 col-md-2 text-danger fw-bold font-monospace">DAYS 18-21</div>
                            <div class="col-9 col-md-4 text-light text-uppercase fw-bold">
                                <i class="fa-duotone fa-meteor me-2 text-danger"></i>The Drop
                            </div>
                            <div class="col-12 col-md-6 text-white-50 small mt-1 mt-md-0">
                                Re-entry. Turbulence. <span class="text-info">Music: "Hard Reset" (Industrial)</span>.
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center g-4">
        
        <div class="col-lg-6">
            <div class="card h-100 bg-transparent border-info shadow-lg overflow-hidden position-relative group-hover-scale">
                <div class="position-absolute top-0 start-0 w-100 h-100" 
                     style="background: url('<?php echo $cardBackground; ?>') center/cover no-repeat;">
                </div>
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75"></div>
                
                <div class="card-body p-5 position-relative z-1 d-flex flex-column justify-content-center text-center">
                    <div class="mb-3">
                         <i class="fa-duotone fa-book-sparkles text-info display-4"></i>
                    </div>
                    <h2 class="h3 text-light fw-bold text-uppercase" style="font-family: 'Audiowide';">The Maiden Voyage</h2>
                    <p class="text-white-50 mb-4">
                        Read the official narrative of the "Concert at the Edge of the World." 
                        Experience the launch, the nebula, and the crash landing.
                    </p>
                    <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage" class="btn btn-outline-info rounded-pill px-4 stretched-link">
                        <i class="fa-duotone fa-book-open me-2"></i>Open Flight Log
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 bg-transparent border-warning shadow-lg overflow-hidden position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100" 
                     style="background: url('<?php echo $cardBackground; ?>') center/cover no-repeat; filter: hue-rotate(45deg);">
                </div>
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75"></div>
                
                <div class="card-body p-5 position-relative z-1 d-flex flex-column justify-content-center text-center">
                    <div class="mb-3">
                        <i class="fa-duotone fa-rocket-launch text-warning display-4"></i>
                    </div>
                    <h2 class="h3 text-light fw-bold text-uppercase" style="font-family: 'Audiowide';">The Transmission</h2>
                    <p class="text-white-50 mb-4">
                        Listen to the 15-minute progressive rock suite.
                        Four movements. One journey.
                    </p>
                    <a href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-outline-warning rounded-pill px-4 stretched-link">
                        <i class="fa-duotone fa-play me-2"></i>Listen Now
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>