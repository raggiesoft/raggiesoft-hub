<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01.php
// Log Entry: Day 01
// Context: The physical reality of leaving Earth.

$pageTitle = "Day 01: Ignition - Ad Astra Log";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-warning pb-3">
        <div>
            <span class="badge bg-warning text-dark font-monospace mb-2">LOG: DAY 01</span>
            <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Audiowide';">Ignition</h1>
        </div>
        <div class="text-end text-white-50 font-monospace small">
            ALT: 120km<br>
            VEL: MACH 24<br>
            G-FORCE: 1.5
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <p class="lead text-light">
                    The audience thinks the rumble is the bass guitar. It isn't. It's the <strong>Main Thrusters</strong> of the <em>Aethelgard</em> pushing 40 million pounds of titanium off the surface of the earth.
                </p>
                <p class="text-white-50">
                    We are strapped in. Not metaphorically. <strong>Cargo straps</strong>. 
                </p>
                <p class="text-white-50">
                    Ryan is locked to the deck plates with industrial webbing rated for 5 tons. His wheelchair isn't just a seat today; it's a crash couch. The 5-point harness digs into his chest as the G-forces climb past 1.2.
                </p>
                <p class="text-white-50">
                    "T-minus 10 seconds," Holly says in our in-ears. Her voice is calm, professional. She's not a bassist right now; she's Flight Ops.
                </p>
                <p class="text-white-50">
                    Tyler counts us in on the snare. <em>Crack. Crack. Crack-Crack.</em>
                </p>
                <p class="text-white-50">
                    We hit the opening chord of "Ignition" exactly as the primary boosters light. The sound is deafening, even through the monitors. We aren't playing *over* the engine roar; we are harmonizing with it.
                </p>
            </div>

            <div class="card terminal-card mb-5">
                <div class="card-header border-bottom border-success text-success fw-bold font-monospace">
                    <i class="fa-duotone fa-waveform-lines me-2"></i>AUDIO LOG: "IGNITION" (LIVE)
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-success rounded-circle me-3"><i class="fa-solid fa-play"></i></button>
                        <div class="flex-grow-1">
                            <div class="progress" style="height: 4px; background-color: #333;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 35%"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 font-monospace small text-muted">
                                <span>01:12</span>
                                <span>High Energy Rock // 160 BPM</span>
                                <span>03:45</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            
            <div class="card glass-card mb-4">
                <div class="card-header text-warning fw-bold text-uppercase border-bottom border-secondary">
                    <i class="fa-duotone fa-sensor-on me-2"></i>Sensory Data
                </div>
                <div class="card-body text-white-50 small">
                    <ul class="list-unstyled mb-0 font-monospace">
                        <li class="mb-2">> <strong>Vibration:</strong> 40Hz (Constant)</li>
                        <li class="mb-2">> <strong>Visuals:</strong> Amber Emergency Strobes</li>
                        <li class="mb-2">> <strong>Smell:</strong> Ozone, Hydraulic Fluid</li>
                        <li class="mb-0">> <strong>Physical:</strong> Chest compression, difficulty breathing</li>
                    </ul>
                </div>
            </div>

            <div class="card bg-black border-danger mb-4">
                <div class="card-body">
                    <h6 class="text-danger fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-triangle-exclamation me-2"></i>Safety Protocol
                    </h6>
                    <p class="small text-white-50 mb-0">
                        In the event of a launch abort, the stage module is designed to detach and deploy parachutes. The band continues playing until the "Safe" light illuminates.
                    </p>
                </div>
            </div>

        </div>

    </div>

    <?php
        $nav = [
            'prev' => null, // First Chapter
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10', 'label' => 'Day 10: The Drift']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>