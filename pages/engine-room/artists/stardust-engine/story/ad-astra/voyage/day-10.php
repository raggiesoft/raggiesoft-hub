<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10.php
// Log Entry: Day 10
// Context: FTL Cruise / Zero-G / The Veil Nebula.

$pageTitle = "Day 10: Harmonic Velocity - Ad Astra Log";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-info pb-3">
        <div>
            <span class="badge bg-info text-dark font-monospace mb-2">LOG: DAY 10</span>
            <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Audiowide';">Harmonic Velocity</h1>
        </div>
        <div class="text-end text-white-50 font-monospace small">
            LOC: VEIL NEBULA<br>
            STATUS: FTL CRUISE<br>
            G-FORCE: 0.8
        </div>
    </div>

    <div class="card border-0 mb-5 overflow-hidden shadow-lg rounded-3 border-start border-info border-4">
        <div class="position-relative">
            <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/harmonic-velocity.jpg" 
                 class="img-fluid w-100" 
                 alt="The band performing in front of the open window, nebula visible">
            
            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-black bg-opacity-75 d-flex justify-content-between align-items-center">
                <span class="text-info font-monospace small"><i class="fa-duotone fa-camera me-2"></i>CAM_1B: BLAST SHIELDS RETRACTED</span>
                <span class="badge bg-black border border-info text-info rounded-0">LIVE FEED</span>
            </div>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <p class="lead text-light">
                    Ten days out. The constant vibration of the thrusters is gone. We have hit <strong>Harmonic Velocity</strong>—the point where the engines sync with the resonant frequency of the hull. The silence is deafening.
                </p>
                <p class="text-white-50">
                    The artificial gravity has been eased off to <strong>0.8G</strong> to reduce structural stress. It gives everything a dreamlike quality. Drumsticks float a fraction of a second longer in the air. Hair drifts like underwater grass.
                </p>
                <blockquote class="blockquote border-start border-3 border-info ps-4 my-4">
                    <p class="mb-1 text-light fst-italic display-6" style="font-family: 'Audiowide';">"I'm loved by the sun... I'm held by the void..."</p>
                </blockquote>
                <p class="text-white-50">
                    Evan tapped the shimmering low-C on his bass pedals, shaking the floorplates. That was the signal. Behind us, the massive blast shields began to groan and retract.
                </p>
                <p class="text-white-50">
                    The blackness of the void was gone. In its place was the <strong>Veil Nebula</strong>—a swirling cathedral of violet, gold, and crimson dust. The audience didn't scream. They didn't cheer. They just floated, suspended in the violet light of the cosmos.
                </p>
            </div>

            <div class="card terminal-card mb-5" style="border-color: var(--astra-primary);">
                <div class="card-header border-bottom border-primary text-primary fw-bold font-monospace" style="border-color: var(--astra-primary) !important;">
                    <i class="fa-duotone fa-stars me-2"></i>AUDIO LOG: "AD ASTRA" (PART III)
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-primary rounded-circle me-3"><i class="fa-solid fa-play"></i></button>
                        <div class="flex-grow-1">
                            <div class="progress" style="height: 4px; background-color: #333;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 font-monospace small text-muted">
                                <span>10:42</span>
                                <span>Progressive Suite // Zero-G</span>
                                <span>15:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            
            <div class="card glass-card mb-4" style="border-color: var(--astra-info);">
                <div class="card-header text-info fw-bold text-uppercase border-bottom border-secondary" style="border-color: var(--astra-info) !important;">
                    <i class="fa-duotone fa-globe-stand me-2"></i>Environmental
                </div>
                <div class="card-body text-white-50 small">
                    <ul class="list-unstyled mb-0 font-monospace">
                        <li class="mb-2">> <strong>Location:</strong> Cygnus Loop</li>
                        <li class="mb-2">> <strong>Shields:</strong> <span class="text-danger">OPEN</span></li>
                        <li class="mb-2">> <strong>Radiation:</strong> Nominal</li>
                        <li class="mb-0">> <strong>Gravity:</strong> 0.82 G</li>
                    </ul>
                </div>
            </div>

            <div class="card bg-black border-secondary mb-4">
                <div class="card-body">
                    <h6 class="text-secondary fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-message-code me-2"></i>Crew Note
                    </h6>
                    <p class="small text-white-50 mb-0 fst-italic">
                        "Playing guitar in 0.8G is weird. You have to anchor your elbow or your picking hand floats away from the strings. Ryan is lucky; he's already strapped down." — Tyler
                    </p>
                </div>
            </div>

        </div>

    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01', 'label' => 'Day 01: Ignition'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21', 'label' => 'Day 21: The Drop']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>