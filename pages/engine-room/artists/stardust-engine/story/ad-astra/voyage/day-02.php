<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02.php
// Log Entry: Day 02
// Context: Post-Launch Recovery. First view of Earth.

$pageTitle = "Day 02: Stabilization - Ad Astra Log";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-success pb-3">
        <div>
            <span class="badge bg-success text-dark font-monospace mb-2">LOG: DAY 02</span>
            <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Audiowide';">Stabilization</h1>
        </div>
        <div class="text-end text-white-50 font-monospace small">
            LOC: HIGH ORBIT<br>
            STATUS: SPIN-UP COMPLETE<br>
            G-FORCE: 0.9 (STABILIZING)
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <p class="lead text-light">
                    The roar is gone. That's the first thing you notice. For 12 hours, the <em>Aethelgard</em> was a screaming metal tube fighting gravity. Now, it's a library.
                </p>
                <p class="text-white-50">
                    We spent the night in the "Crash Couches"—medical recliners designed to absorb the ascent. Nobody slept well. The G-force hangover is real; it feels like having the flu, but deep in your bones.
                </p>
                <p class="text-white-50">
                    <strong>Ryan</strong> took the brunt of it. His spine, already fused and fragile, didn't appreciate the 1.5G push. Holly and Cassidy spent the morning helping him transfer from the crash couch to his chair. It was a slow process, quiet and practiced. This is the reality of our "glamorous" space voyage: ice packs, muscle relaxers, and the slow click-clack of a wheelchair engaging its magnetic locks on the deck plates.
                </p>
                
                <div class="card terminal-card mt-5 border-success">
                    <div class="card-header border-bottom border-success text-success fw-bold font-monospace">
                        <i class="fa-duotone fa-earth-americas me-2"></i>VISUAL LOG: THE BLUE MARBLE
                    </div>
                    <div class="card-body">
                        <p class="card-text text-light">
                            Tyler opened the viewports in the mess hall at 0800.
                        </p>
                        <p class="card-text text-white-50">
                            You see pictures of it. You see movies. But seeing Earth as a sphere, hanging suspended in absolute nothingness? It stops your heart. It's too bright. It hurts your eyes.
                        </p>
                        <blockquote class="blockquote border-start border-2 border-success ps-3 my-3">
                            <p class="mb-0 text-success font-monospace small">"It looks fragile. Like if I tapped the glass, it would shatter." — Cassidy</p>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card glass-card mb-4">
                <div class="card-header text-success fw-bold text-uppercase border-bottom border-secondary">
                    <i class="fa-duotone fa-notes-medical me-2"></i>Medical Status
                </div>
                <div class="card-body text-white-50 small">
                    <ul class="list-unstyled mb-0 font-monospace">
                        <li class="mb-2">> <strong>Crew Stress:</strong> Elevated</li>
                        <li class="mb-2">> <strong>Hydration:</strong> Mandatory Protocol Active</li>
                        <li class="mb-2">> <strong>R. O'Connell:</strong> Spine inflammation detected. 12hr Rest ordered.</li>
                        <li class="mb-0">> <strong>Meds:</strong> Ibuprofen (800mg) dispensed.</li>
                    </ul>
                </div>
            </div>

            <div class="card bg-black border-secondary mb-4">
                <div class="card-body">
                    <h6 class="text-secondary fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-coffee-pot me-2"></i>Galley Note
                    </h6>
                    <p class="small text-white-50 mb-0 fst-italic">
                        "The coffee machine works in Zero-G, but the taste is... metallic. Evan is trying to hack the temperature settings. I give it 24 hours before he voids the warranty." — Holly
                    </p>
                </div>
            </div>

        </div>

    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01', 'label' => 'Day 01: Ignition'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03', 'label' => 'Day 03: Ship\'s Time']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>