<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21.php
// Log Entry: Day 21
// Context: Atmospheric Re-entry. The "Hard Reset."
// UPDATED: Added prefers-reduced-motion check for alert animation.

$pageTitle = "Day 21: The Drop - Ad Astra Log";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-danger pb-3">
        <div>
            <span class="badge bg-danger text-white font-monospace mb-2">LOG: DAY 21</span>
            <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Audiowide';">The Drop</h1>
        </div>
        <div class="text-end text-white-50 font-monospace small">
            LOC: UPPER ATMOSPHERE<br>
            STATUS: BRAKING MANEUVER<br>
            TEMP: 3000&deg;F (EXTERNAL)
        </div>
    </div>

    <div class="card border-0 mb-5 overflow-hidden shadow-lg rounded-3 border-start border-danger border-4">
        <div class="position-relative">
            <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/re-entry.jpg" 
                 class="img-fluid w-100" 
                 alt="Chaos on stage. Red lights. Ryan shredding guitar amidst sparks.">
            
            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-black bg-opacity-75 d-flex justify-content-between align-items-center">
                <span class="text-danger font-monospace small"><i class="fa-duotone fa-triangle-exclamation me-2"></i>CAM_4C: HULL VIBRATION CRITICAL</span>
                <span class="badge bg-danger border border-white text-white rounded-0 blink-animation text-uppercase">Alert</span>
            </div>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <p class="lead text-light">
                    "All hands, prepare for the Drop."
                </p>
                <p class="text-white-50">
                    The ethereal synths of the Nebula are gone. The "Ship's Time" blue light is gone. The room is bathed in <strong>Emergency Red</strong>.
                </p>
                <p class="text-white-50">
                    To break FTL and re-enter the atmosphere, the <em>Aethelgard</em> has to execute a "Hard Reset"—a violent braking maneuver that turns the sky outside into fire. Sparks rain from the ceiling trusses as the ship fights the air friction.
                </p>
                <p class="text-white-50">
                    Ryan leans forward into his harness, fighting the deceleration. He isn't playing a melody anymore; he's shredding the grinding, industrial riff of <strong>"Hard Reset."</strong> It’s chaotic. It’s loud. It’s dangerous.
                </p>
                <p class="text-white-50">
                    But as the landing gear finally deploys with a massive mechanical <em>thud</em>—perfectly synced to Tyler’s snare drum—the message is clear: We went to the edge. And we came back.
                </p>
            </div>

            <div class="card terminal-card mb-5" style="border-color: var(--astra-danger);">
                <div class="card-header border-bottom border-danger text-danger fw-bold font-monospace" style="border-color: var(--astra-danger) !important;">
                    <i class="fa-duotone fa-radiation me-2"></i>AUDIO LOG: "HARD RESET"
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-danger rounded-circle me-3"><i class="fa-solid fa-play"></i></button>
                        <div class="flex-grow-1">
                            <div class="progress" style="height: 4px; background-color: #333;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 font-monospace small text-muted">
                                <span>04:12</span>
                                <span>Industrial Rock // Re-entry</span>
                                <span>04:12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            
            <div class="card glass-card mb-4" style="border-color: var(--astra-danger);">
                <div class="card-header text-danger fw-bold text-uppercase border-bottom border-secondary" style="border-color: var(--astra-danger) !important;">
                    <i class="fa-duotone fa-temperature-arrow-up me-2"></i>Critical Telemetry
                </div>
                <div class="card-body text-white-50 small">
                    <ul class="list-unstyled mb-0 font-monospace">
                        <li class="mb-2">> <strong>Deceleration:</strong> 2.5 G</li>
                        <li class="mb-2">> <strong>Hull Integrity:</strong> 64% (Dropping)</li>
                        <li class="mb-2">> <strong>Heat Shield:</strong> <span class="text-warning">ACTIVE</span></li>
                        <li class="mb-0">> <strong>Touchdown:</strong> T-Minus 90s</li>
                    </ul>
                </div>
            </div>

            <div class="card bg-black border-secondary mb-4">
                <div class="card-body">
                    <h6 class="text-secondary fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-file-check me-2"></i>Post-Flight Note
                    </h6>
                    <p class="small text-white-50 mb-0 fst-italic">
                        "I never want to do that again. When do we leave for the next one?" — Holly, 2 minutes after landing.
                    </p>
                </div>
            </div>

        </div>

    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10', 'label' => 'Day 10: The Drift'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => null // End of Journey
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>