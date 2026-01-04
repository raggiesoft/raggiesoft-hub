<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/overview.php
// Context: The Chapter Select screen for the Ad Astra narrative.
// UPDATED: Added Day 03 (Ship's Time)

$pageTitle = "Flight Log: Overview - Ad Astra";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="position-relative min-vh-50 d-flex align-items-center justify-content-center overflow-hidden border-bottom border-info">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/band-ready.jpg" 
             alt="The Stardust Engine strapped in for launch." 
             class="w-100 h-100 object-fit-cover"
             style="filter: brightness(0.6);">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" 
             style="opacity: 0.5; background: linear-gradient(to bottom, transparent 0%, #050508 100%);"></div>
    </div>
    <div class="container position-relative text-center z-1 fade-in-up">
        <span class="badge bg-black border border-warning text-warning rounded-pill px-3 py-2 shadow-glow mb-4">
            <i class="fa-duotone fa-book-sparkles me-2"></i>Mission Archive
        </span>
        <h1 class="display-1 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif;">
            Flight Log
        </h1>
        <p class="lead text-white-50 font-monospace text-uppercase letter-spacing-2">
            U.S.S. Aethelgard // Mission Timeline
        </p>
    </div>
</div>

<div class="container py-5 glass-container" style="margin-top: -50px; position: relative; z-index: 2;">
    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card terminal-card mb-5">
                <div class="card-header bg-success bg-opacity-10 text-success fw-bold font-monospace border-bottom border-success">
                    <i class="fa-duotone fa-list-check me-2"></i>SELECT MISSION PHASE
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        
                        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01" class="list-group-item list-group-item-action bg-transparent p-4 border-bottom border-secondary border-opacity-25 hover-bg-dark">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="h5 text-warning fw-bold text-uppercase mb-1">
                                        <i class="fa-duotone fa-rocket-launch me-2"></i>Day 01: Ignition
                                    </h4>
                                    <p class="mb-0 text-white-50 small font-monospace">Atmospheric Exit // 1.5G Ascent // Music: "Ignition"</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-secondary"></i>
                            </div>
                        </a>

                        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03" class="list-group-item list-group-item-action bg-transparent p-4 border-bottom border-secondary border-opacity-25 hover-bg-dark">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="h5 text-light fw-bold text-uppercase mb-1">
                                        <i class="fa-duotone fa-clock me-2"></i>Day 03: Ship's Time
                                    </h4>
                                    <p class="mb-0 text-white-50 small font-monospace">Living Quarters // Circadian Cycle // 1.0G (Artificial)</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-secondary"></i>
                            </div>
                        </a>

                        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10" class="list-group-item list-group-item-action bg-transparent p-4 border-bottom border-secondary border-opacity-25 hover-bg-dark">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="h5 text-info fw-bold text-uppercase mb-1">
                                        <i class="fa-duotone fa-stars me-2"></i>Day 10: The Drift
                                    </h4>
                                    <p class="mb-0 text-white-50 small font-monospace">The Veil Nebula // Zero-G Concert // Music: "Ad Astra"</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-secondary"></i>
                            </div>
                        </a>

                        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21" class="list-group-item list-group-item-action bg-transparent p-4 hover-bg-dark">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="h5 text-danger fw-bold text-uppercase mb-1">
                                        <i class="fa-duotone fa-meteor me-2"></i>Day 21: The Drop
                                    </h4>
                                    <p class="mb-0 text-white-50 small font-monospace">Atmospheric Re-entry // Braking Maneuver // Music: "Hard Reset"</p>
                                </div>
                                <i class="fa-solid fa-chevron-right text-secondary"></i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/engine-room/artists/stardust-engine/story/ad-astra" class="btn btn-outline-secondary rounded-pill text-uppercase font-monospace small">
                    <i class="fa-solid fa-arrow-left me-2"></i>Back to Mission Control
                </a>
            </div>

        </div>
    </div>
</div>