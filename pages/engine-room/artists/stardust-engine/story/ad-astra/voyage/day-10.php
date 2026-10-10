<?php
/**
 * ============================================================================
 * FILE: day-10.php
 * PATH: /pages/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10.php
 * MODULE: Stardust Engine - Ad Astra - Voyage Logs
 * 
 * DESCRIPTION:
 * This file renders the Day 10 log entry for the Ad Astra voyage narrative.
 * It documents the "Harmonic Velocity" phase, the Veil Nebula reveal, 
 * and includes an Audio Log simulation component.
 *
 * ARCHITECTURAL NOTES:
 * - Theme: Uses `.wa-theme-dark` with dark UI aesthetics.
 * - Media: Includes a responsive hero image with embedded `.badge` tags.
 * - Audio Player: The Audio Log card is structural HTML; functional JS would 
 *   be bound externally via classes or ID if implemented.
 * 
 * MAINTENANCE INSTRUCTIONS:
 * - Preserve the layout hierarchy (Header -> Hero Image -> Main Content / Sidebar).
 * - Maintain Bootstrap utility classes for proper responsive behavior.
 * - Narrative stepper variables should be updated if new story paths are added.
 * ============================================================================
 */
// Log Entry: Day 10
// Context: FTL Cruise / Zero-G / The Veil Nebula.

$pageTitle = "Day 10: Harmonic Velocity - Ad Astra Log";
?>

<div class="wa-theme-dark w-100" data-bs-theme="dark">
<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <!-- BEGIN: Log Header -->
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
    <!-- END: Log Header -->

    <!-- BEGIN: Hero Image Card -->
    <wa-card class="card border-0 mb-5 overflow-hidden shadow-lg rounded-3 border-start border-info border-4 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
        <div class="position-relative">
            <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/story/ad-astra/harmonic-velocity.jpg" 
                 class="img-fluid w-100" 
                 alt="The band performing in front of the open window, nebula visible">
            
            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-black bg-opacity-75 d-flex justify-content-between align-items-center">
                <span class="text-info font-monospace small"><i class="fa-duotone fa-camera me-2"></i>CAM_1B: BLAST SHIELDS RETRACTED</span>
                <span class="badge bg-black border border-info text-info rounded-0">LIVE FEED</span>
            </div>
        </div>
    </wa-card>
    <!-- END: Hero Image Card -->

    <!-- BEGIN: Main Layout -->
    <div class="row g-5">
        
        <!-- BEGIN: Main Content Area -->
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

            <!-- BEGIN: Audio Log Card -->
            <wa-card class="card terminal-card mb-5 w-100" style="border-color: var(--astra-primary); --body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div slot="header" class=" border-bottom border-primary text-primary fw-bold font-monospace p-3" style="border-color: var(--astra-primary) !important;">
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
            </wa-card>
            <!-- END: Audio Log Card -->

        </div>
        <!-- END: Main Content Area -->

        <!-- BEGIN: Sidebar Layout -->
        <div class="col-lg-4">
            
            <!-- BEGIN: Environmental Card -->
            <wa-card class="card glass-card mb-4 w-100" style="border-color: var(--astra-info); --body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div slot="header" class=" text-info fw-bold text-uppercase border-bottom border-secondary p-3" style="border-color: var(--astra-info) !important;">
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
            </wa-card>
            <!-- END: Environmental Card -->

            <!-- BEGIN: Crew Note Card -->
            <wa-card class="card bg-black border-secondary mb-4 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-body">
                    <h6 class="text-secondary fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-message-code me-2"></i>Crew Note
                    </h6>
                    <p class="small text-white-50 mb-0 fst-italic">
                        "Playing guitar in 0.8G is weird. You have to anchor your elbow or your picking hand floats away from the strings. Ryan is lucky; he's already strapped down." — Tyler
                    </p>
                </div>
            </wa-card>
            <!-- END: Crew Note Card -->

        </div>
        <!-- END: Sidebar Layout -->

    </div>
    <!-- END: Main Layout -->

    <!-- BEGIN: Narrative Stepper Navigation -->
    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01', 'label' => 'Day 01: Ignition'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage', 'label' => 'Flight Log'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21', 'label' => 'Day 21: The Drop']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>
    <!-- END: Narrative Stepper Navigation -->

</div>
</div> <!-- End dark theme wrap -->
