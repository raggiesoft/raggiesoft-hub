<?php
// pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03.php
// Log Entry: Day 03
// Context: Living arrangements and the Day/Night cycle.

$pageTitle = "Day 03: Ship's Time - Ad Astra Log";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-light pb-3" style="border-color: var(--astra-text) !important;">
        <div>
            <span class="badge bg-light text-dark font-monospace mb-2">LOG: DAY 03</span>
            <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Audiowide';">Ship's Time</h1>
        </div>
        <div class="text-end text-white-50 font-monospace small">
            LOC: TRANS-LUNAR<br>
            CYCLE: 2200 HOURS (NIGHT)<br>
            G-FORCE: 1.0 (ARTIFICIAL)
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <p class="lead text-light">
                    The hardest part of space travel isn't the G-force. It's the clock.
                </p>
                <p class="text-white-50">
                    To keep us from losing our minds in the eternal void, the <em>Aethelgard</em> runs a strict circadian simulation. At 0600, the panels blast us with blue-white light. At 2000, they shift to amber. Now, at 2200, the corridors are dim red, and the ceiling of our quarters has gone transparent—or at least, the screens <em>look</em> transparent. We are sleeping under a digital projection of the stars we're flying through.
                </p>
                
                <h3 class="h4 text-uppercase text-light fw-bold mt-5 mb-3" style="font-family: 'Audiowide';">Suite 4B: "The Hab"</h3>
                <p class="text-white-50">
                    Our quarters are essentially a high-tech efficiency apartment bolted to a bulkhead. It's tight, utilitarian, and surprisingly comfortable. Everything is magnetic—coffee cups, data pads, even the pillows have weak mag-strips to keep them from drifting if the gravity fluctuating.
                </p>
                
                <div class="card terminal-card mt-4 border-light" style="border-color: var(--astra-secondary) !important;">
                    <div class="card-header border-bottom border-secondary text-secondary fw-bold font-monospace">
                        <i class="fa-duotone fa-bed-bunk me-2"></i>BERTHING MANIFEST
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item bg-transparent text-white-50 border-bottom border-secondary border-opacity-25">
                                <strong class="text-light d-block text-uppercase mb-1">Primary Berthing (King Module)</strong>
                                <div class="row">
                                    <div class="col-md-4"><i class="fa-solid fa-user me-2 text-info"></i>Holly</div>
                                    <div class="col-md-4"><i class="fa-solid fa-user-wheelchair me-2 text-warning"></i>Ryan (Center)</div>
                                    <div class="col-md-4"><i class="fa-solid fa-user me-2 text-info"></i>Cassidy</div>
                                </div>
                                <small class="d-block mt-2 text-white-50 fst-italic">
                                    *Note: Center positioning mandatory for R. O'Connell (T-10 Paraplegic). Flanking crew members serve as stabilization rails during gravity fluctuations.
                                </small>
                            </li>
                            <li class="list-group-item bg-transparent text-white-50">
                                <strong class="text-light d-block text-uppercase mb-1">Secondary Berthing (Fold-Out Module)</strong>
                                <div class="row">
                                    <div class="col-md-4"><i class="fa-solid fa-drum me-2 text-secondary"></i>Tyler</div>
                                    <div class="col-md-4"><i class="fa-solid fa-guitar-electric me-2 text-secondary"></i>Evan</div>
                                </div>
                                <small class="d-block mt-2 text-white-50 fst-italic">
                                    *Note: Rhythm section. Snoring protocols active.
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card glass-card mb-4">
                <div class="card-header text-light fw-bold text-uppercase border-bottom border-secondary">
                    <i class="fa-duotone fa-clock me-2"></i>Cycle Status
                </div>
                <div class="card-body text-white-50 small">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-moon fa-2x text-primary me-3"></i>
                        <div>
                            <span class="d-block fw-bold text-light">BETA SHIFT</span>
                            <span class="font-monospace">2200 - 0600</span>
                        </div>
                    </div>
                    <ul class="list-unstyled mb-0 font-monospace">
                        <li class="mb-2">> <strong>Lighting:</strong> Low (Red/Amber)</li>
                        <li class="mb-2">> <strong>Noise:</strong> Restricted</li>
                        <li class="mb-2">> <strong>Venue:</strong> Closed</li>
                        <li class="mb-0">> <strong>Gravity:</strong> Stable (1.0)</li>
                    </ul>
                </div>
            </div>

            <div class="card bg-black border-secondary mb-4">
                <div class="card-body">
                    <h6 class="text-secondary fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-mug-hot me-2"></i>Personal Log
                    </h6>
                    <p class="small text-white-50 mb-0 fst-italic">
                        "The couch isn't bad, actually. Better than the tour bus bunk in '93. But looking out the window and seeing... nothing? That takes some getting used to." — Evan
                    </p>
                </div>
            </div>

        </div>

    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02', 'label' => 'Day 02: Stabilization'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10', 'label' => 'Day 10: The Drift']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>