<?php
// pages/story/ad-astra/voyage.php
// Lore Entry: The in-universe narrative of the "Ad Astra" concert experience.
// Context: A digital excerpt from "Echoes of the Ironworks" (Official Band Biography).

$pageTitle = "The Maiden Voyage - The Stardust Engine Lore";

// Using the "Band Ready" image as the page hero to set the stage
$customPageAssets = [
    'Hero' => 'https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/band-ready.jpg'
];
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="position-relative min-vh-50 d-flex align-items-center justify-content-center overflow-hidden border-bottom border-info">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/band-ready.jpg" 
             alt="The Stardust Engine on stage in the Monolith Room, strapped in for launch." 
             class="w-100 h-100 object-fit-cover"
             style="filter: brightness(0.6);">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" 
             style="opacity: 0.5; background: linear-gradient(to bottom, transparent 0%, #050508 100%);"></div>
    </div>

    <div class="container position-relative text-center z-1 fade-in-up">
        <span class="badge bg-black border border-warning text-warning rounded-pill px-3 py-2 shadow-glow mb-4">
            <i class="fa-duotone fa-book-sparkles me-2"></i>Mission Archive
        </span>
        <h1 class="display-1 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px; text-shadow: 0 0 30px rgba(255, 165, 0, 0.5);">
            The Deep Dive
        </h1>
        <p class="lead text-white-50 font-monospace text-uppercase letter-spacing-2">
            Flight Log: U.S.S. Aethelgard // 21-Day Cycle
        </p>
    </div>
</div>

<div class="container py-5 glass-container" style="margin-top: -50px; position: relative; z-index: 2;">
    
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="card glass-card border-secondary mb-5">
                <div class="card-body p-4 d-flex align-items-start">
                    <i class="fa-duotone fa-circle-info text-secondary fs-3 me-3 mt-1"></i>
                    <div>
                        <h5 class="card-title text-light fw-bold">From the Archives</h5>
                        <p class="card-text text-white-50 small">
                            The following is an excerpt from <em>"Echoes of the Ironworks,"</em> detailing the band's residency aboard the star-cruiser <em>Aethelgard</em>. Unlike the Axiom Corporation's "Generation Ships," the <em>Aethelgard</em> promised a return trip. The band was hired to provide the soundtrack for the 21-day round-trip voyage to the Veil Nebula.
                        </p>
                    </div>
                </div>
            </div>

            <div class="book-content px-md-2">
                
                <div class="mb-5 fade-in">
                    <div class="d-flex align-items-center mb-4 border-bottom border-warning border-opacity-25 pb-2">
                        <span class="display-4 fw-bold text-warning me-3">01</span>
                        <div>
                            <h2 class="h4 text-light fw-bold text-uppercase mb-0">The Iron Dome</h2>
                            <small class="text-warning font-monospace">DAY 1 // ATMOSPHERIC EXIT // 1.5G</small>
                        </div>
                    </div>

                    <p class="text-light fs-5 lh-lg">
                        The main performance hall, known as <strong>"The Monolith Room,"</strong> was dominated by a massive blast shield. Currently shuttered, it stood like a dark metal sentinel, framing the stage in amber emergency lighting.
                    </p>
                    
                    <div class="card border-0 mb-4 overflow-hidden shadow-lg rounded-3 border-start border-warning border-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/band-ready.jpg" 
                             class="img-fluid w-100" 
                             alt="Ryan O'Connell strapped into his wheelchair on stage">
                        <div class="card-footer bg-dark text-center border-top border-secondary small text-muted font-monospace">
                            <i class="fa-duotone fa-camera me-2"></i>CAM_2A: FLIGHT CHECK. NOTE CARGO STRAPS ON LEAD GUITAR.
                        </div>
                    </div>

                    <p class="text-white-50">
                        <strong>Ryan O’Connell</strong> sat center stage. His rig was modified for high-G maneuvers—heavy-duty cargo straps locked his wheelchair to the deck plates, and a 5-point harness was secured over his chest. To his left, <strong>Cassidy</strong> braced herself against her synth rack, watching the telemetry monitor.
                    </p>
                    <p class="text-white-50">
                        "T-minus two minutes to main engine ignition," <strong>Holly’s</strong> voice crackled in their in-ear monitors. "Playing 'Ignition' during an actual ignition. Don't rush the tempo, Tyler."
                    </p>
                    <p class="text-white-50">
                        When the thrusters hit, the floorplates vibrated at 40Hz. Tyler didn't fight the rumble—he matched it. The band kicked into the driving rhythm of "Ignition," turning the physical G-force of the ascent into a wall of sound.
                    </p>
                </div>

                <div class="mb-5 fade-in">
                    <div class="d-flex align-items-center mb-4 border-bottom border-info border-opacity-25 pb-2">
                        <span class="display-4 fw-bold text-info me-3">02</span>
                        <div>
                            <h2 class="h4 text-light fw-bold text-uppercase mb-0">Harmonic Velocity</h2>
                            <small class="text-info font-monospace">DAY 10 // FTL CRUISE // 0.8G</small>
                        </div>
                    </div>

                    <p class="text-light fs-5 lh-lg">
                        Ten days out. The ship had reached FTL—a state the crew called "Harmonic Velocity." The artificial gravity was eased off to 0.8G to reduce hull stress, giving everything a dreamlike, floating quality.
                    </p>
                    <p class="text-white-50">
                        It was time for the main event. Slowly, <strong>Evan Wright</strong> tapped a shimmering note on his bass pedals. The massive blast shields behind the stage began to retract.
                    </p>

                    <div class="card border-0 mb-4 overflow-hidden shadow-lg rounded-3 border-start border-info border-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/harmonic-velocity.jpg" 
                             class="img-fluid w-100" 
                             alt="The band performing in front of the open window, nebula visible">
                        <div class="card-footer bg-dark text-center border-top border-secondary small text-muted font-monospace">
                            <i class="fa-duotone fa-camera me-2"></i>CAM_1B: THE VEIL NEBULA. SHIELDS OPEN.
                        </div>
                    </div>

                    <p class="text-white-50">
                        The blackness of the void was gone. In its place was the <strong>Veil Nebula</strong>—a swirling cathedral of violet, gold, and crimson dust.
                    </p>
                    <blockquote class="blockquote border-start border-3 border-info ps-4 my-4">
                        <p class="mb-0 text-light fst-italic">"I'm loved by the sun... I'm held by the void..."</p>
                    </blockquote>
                    <p class="text-white-50">
                        Cassidy’s hair drifted gently in the low gravity as she played. Ryan, still securely strapped in, leaned back and let a soaring guitar solo float out into the room. For 15 minutes, the <strong>"Ad Astra"</strong> suite wasn't just a song; it was the atmosphere. The audience didn't dance. They floated, suspended in the violet light of the cosmos.
                    </p>
                </div>

                <div class="mb-5 fade-in">
                    <div class="d-flex align-items-center mb-4 border-bottom border-danger border-opacity-25 pb-2">
                        <span class="display-4 fw-bold text-danger me-3">03</span>
                        <div>
                            <h2 class="h4 text-light fw-bold text-uppercase mb-0">The Hard Reset</h2>
                            <small class="text-danger font-monospace">DAY 21 // RE-ENTRY // TURBULENCE</small>
                        </div>
                    </div>

                    <p class="text-light fs-5 lh-lg">
                        "All hands, prepare for the Drop."
                    </p>
                    <p class="text-white-50">
                        The return trip is never as smooth as the exit. To break FTL and re-enter Telsus atmosphere, the ship had to execute a "Hard Reset"—a violent braking maneuver that turned the sky to fire.
                    </p>
                    <p class="text-white-50">
                        The ethereal synths of the nebula were gone. The room was bathed in <strong>Emergency Red</strong>.
                    </p>

                    <div class="card border-0 mb-4 overflow-hidden shadow-lg rounded-3 border-start border-danger border-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/re-entry.jpg" 
                             class="img-fluid w-100" 
                             alt="Chaos on stage. Red lights. Ryan shredding guitar amidst sparks.">
                        <div class="card-footer bg-dark text-center border-top border-secondary small text-muted font-monospace">
                            <i class="fa-duotone fa-camera me-2"></i>CAM_4C: BRAKING MANEUVER. HULL TEMP CRITICAL.
                        </div>
                    </div>

                    <p class="text-white-50">
                        Sparks rained from the ceiling trusses as the ship fought the atmosphere. Ryan leaned forward into his harness, fighting the deceleration, shredding the grinding, industrial riff of <strong>"Hard Reset."</strong>
                    </p>
                    <p class="text-white-50">
                        It was chaotic. It was loud. It was dangerous. But as the landing gear finally deployed with a massive mechanical <em>thud</em> perfectly synced to Tyler’s snare drum, the message was clear:
                    </p>
                    <p class="text-white fw-bold text-center fs-4 mt-4">
                        We went to the edge. And we came back.
                    </p>
                </div>

            </div>

            <div class="text-center mt-5">
                <hr class="border-secondary opacity-25 mb-5">
                <p class="text-muted mb-4">Experience the soundtrack to the voyage.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-outline-info rounded-pill px-4 shadow-glow">
                        <i class="fa-duotone fa-play me-2"></i>Play "Ad Astra"
                    </a>
                    <a href="/discography/1997-hard-reset" class="btn btn-outline-danger rounded-pill px-4 shadow-glow">
                        <i class="fa-duotone fa-play me-2"></i>Play "Hard Reset"
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>