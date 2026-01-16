<?php
// pages/engine-room/jessica-miller-center/overview.php
// The Homepage for The Jessica Miller Center
// Context: Universal Design Showcase.
// WCAG STATUS: AAA Compliant (Adaptive Bootstrap 5.3)

$pageTitle = "The Jessica Miller Center - Universal Design & Workplace Equity";
?>

<style>
    /* JMC Branding - Functional Styles Only */
    .icon-box {
        width: 64px;
        height: 64px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    /* Signature Font - Adaptive Color */
    .signature-text {
        font-family: 'Mrs Saint Delafield', cursive;
        font-size: 2.5rem;
        line-height: 1;
        transform: rotate(-3deg);
        display: inline-block;
        color: var(--bs-body-color); /* Matches text color of current mode */
        opacity: 0.75;
    }

    /* Motion: Only animate if user hasn't requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .card { transition: transform 0.3s ease; }
        .card:hover { transform: translateY(-5px); }
    }
</style>

<div class="bg-body-tertiary py-5 mb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-lg-7">
                <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1">
                    <i class="fa-solid fa-check me-2" aria-hidden="true"></i>Est. 2019
                </span>
                
                <h1 class="display-4 fw-bold text-body-emphasis mb-3 font-serif">
                    Work without friction.
                </h1>
                
                <p class="lead text-body-secondary mb-4" style="max-width: 600px;">
                    The Jessica Miller Center is a research hub and corporate headquarters dedicated to <strong>Universal Design</strong>. We prove that accessibility isn't an "accommodation"—it's the foundation of high performance.
                </p>
                
                <div class="d-flex gap-3 flex-wrap">
                    <a href="/engine-room/jessica-miller-center/the-quiet-floor" class="btn btn-success rounded-pill px-4" aria-label="Visit the Quiet Floor Information Page">
                        <i class="fa-duotone fa-ear-muffs me-2" aria-hidden="true"></i>Visit The Quiet Floor
                    </a>
                    <a href="#mission" class="btn btn-outline-secondary rounded-pill px-4">
                        Our Mission
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center" aria-hidden="true">
                <i class="fa-duotone fa-building-columns fa-10x text-body opacity-25"></i>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-sm overflow-hidden border-0 bg-body-tertiary">
                <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/jessica-miller.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             alt="Jessica Miller, Executive Director, sitting in a wheelchair at an adjustable desk overlooking the Hollywood Hills.">
                        
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <div class="text-white mb-0 fw-bold h6">Jessica Miller</div>
                            <small class="text-white opacity-75 text-uppercase letter-spacing-1" style="font-size: 0.75rem;">Executive Director</small>
                        </div>
                    </div>
                    <div class="col-md-8 p-4 p-lg-5 d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-quote-left fa-2x text-success opacity-50 mb-3" aria-hidden="true"></i>
                            
                            <h2 class="h4 font-serif fst-italic mb-4 text-body-emphasis">
                                "We don't fix people. We fix environments."
                            </h2>
                            
                            <p class="text-body-secondary mb-4">
                                For too long, corporate spaces were built for a single prototype of a human: neurotypical, able-bodied, and willing to endure discomfort for a paycheck. 
                                When we took over the 38th floor, we didn't just change the logo. We ripped out the marble that caused glare. We silenced the HVAC hum. We built a workplace where your nervous system isn't fighting the architecture.
                            </p>
                            <div class="signature-text mt-2" aria-hidden="true">Jessica Miller</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5" id="mission">
        <div class="col-12 text-center mb-4">
            <h2 class="h3 fw-bold text-uppercase letter-spacing-1 text-body-emphasis">Our Core Pillars</h2>
        </div>
        <div class="col-md-4">
            <div class="card h-100 p-4 shadow-sm border">
                <div class="card-body">
                    <div class="icon-box bg-primary-subtle text-primary-emphasis">
                        <i class="fa-duotone fa-eye-slash fa-2x" aria-hidden="true"></i>
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis">Sensory Equity</h3>
                    <p class="text-body-secondary small">
                        Lighting, sound, and texture are not aesthetic choices—they are access issues. We maintain strict "Low-Sensory" zones across all three floors.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 p-4 shadow-sm border">
                <div class="card-body">
                    <div class="icon-box bg-success-subtle text-success-emphasis">
                        <i class="fa-duotone fa-wheelchair-move fa-2x" aria-hidden="true"></i>
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis">Physical Autonomy</h3>
                    <p class="text-body-secondary small">
                        From "Sit/Stand/Wheel" desks to automated doors, our goal is simple: You should never have to ask for help to enter a room.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 p-4 shadow-sm border">
                <div class="card-body">
                    <div class="icon-box bg-warning-subtle text-warning-emphasis">
                        <i class="fa-duotone fa-users-medical fa-2x" aria-hidden="true"></i>
                    </div>
                    <h3 class="h5 fw-bold text-body-emphasis">Cognitive Respect</h3>
                    <p class="text-body-secondary small">
                        We normalize flexible hours, asynchronous communication, and the right to disconnect. Burnout is a system failure, not a personal one.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card border-info shadow overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8 p-5">
                        <h2 class="h4 text-info fw-bold text-uppercase mb-3">
                            <i class="fa-duotone fa-elevator me-2" aria-hidden="true"></i>System Spotlight: Destination Dispatch
                        </h2>
                        <p class="text-body-secondary mb-4">
                            We have replaced standard elevator banks with intelligent, group-based dispatching. 
                            Features include <strong>Badge-Based Home Floor</strong> assignment and a discreet <strong>ADA Mode</strong> for extended dwell times and audio guidance.
                        </p>
                        <a href="/engine-room/jessica-miller-center/destination-dispatch-elevators" class="btn btn-outline-info rounded-pill px-4">
                            View User Guide
                        </a>
                    </div>
                    <div class="col-md-4 bg-body-tertiary text-center p-5 d-none d-md-block" aria-hidden="true">
                        <i class="fa-duotone fa-signs-post fa-5x text-info opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card border shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-7 p-5">
                        <h2 class="h4 text-uppercase letter-spacing-2 mb-4 text-body-emphasis">Campus Overview</h2>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3 mt-1 text-success"><i class="fa-solid fa-location-dot fa-xl" aria-hidden="true"></i></div>
                            <div>
                                <strong class="d-block text-body-emphasis">2000 Avenue of the Stars</strong>
                                <span class="text-body-secondary small">Century City, Los Angeles, CA</span>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <div class="p-3 border rounded bg-body-tertiary h-100">
                                    <span class="d-block text-body-secondary small text-uppercase fw-bold">Floor 38</span>
                                    <span class="text-body-emphasis">Main Lobby & Intake</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="p-3 border rounded bg-body-tertiary h-100">
                                    <span class="d-block text-body-secondary small text-uppercase fw-bold">Floor 39</span>
                                    <span class="text-body-emphasis">Operations & Exec</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="p-3 border border-success rounded bg-success-subtle h-100">
                                    <span class="d-block text-success-emphasis small text-uppercase fw-bold"><i class="fa-solid fa-star me-1" aria-hidden="true"></i>Floor 40</span>
                                    <span class="text-success-emphasis">The Quiet Floor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 bg-body-tertiary border-start p-5 d-flex flex-column justify-content-center">
                        <h3 class="h6 text-body-secondary text-uppercase fw-bold mb-3">Live Building Status (PST)</h3>
                        
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-body-emphasis"><i class="fa-solid fa-sun me-2 text-warning" aria-hidden="true"></i>Circadian Lighting</span>
                            <span class="badge bg-warning text-dark" id="lighting-badge">4500K (Daylight)</span>
                        </div>
                        <div class="progress mb-3 bg-secondary-subtle" style="height: 4px;" role="progressbar" aria-label="Current Lighting Color Temperature">
                            <div class="progress-bar bg-warning" id="lighting-progress" style="width: 70%"></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-body-emphasis"><i class="fa-solid fa-volume-xmark me-2 text-success" aria-hidden="true"></i>Ambient Noise</span>
                            <span class="badge bg-success" id="noise-badge">32dB (Library)</span>
                        </div>
                        <div class="progress mb-3 bg-secondary-subtle" style="height: 4px;" role="progressbar" aria-label="Current Ambient Noise Level">
                            <div class="progress-bar bg-success" id="noise-progress" style="width: 20%"></div>
                        </div>

                        <div class="alert alert-secondary mt-3 mb-0 py-2 px-3 small" id="status-alert">
                            <i class="fa-solid fa-circle-info text-info-emphasis me-2" aria-hidden="true"></i>
                            <span id="quiet-hour-text">Next "Quiet Hour" begins at <strong>2:00 PM PST</strong>.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /**
     * Building Telemetry Simulation
     * Adjusts the UI based on Pacific Standard Time to simulate 
     * the Jessica Miller Center's automated environmental controls.
     */
    document.addEventListener("DOMContentLoaded", function() {
        
        // 1. Get Current Time in Los Angeles (PST/PDT)
        // We use IANA timezone 'America/Los_Angeles' to handle DST automatically
        const laString = new Date().toLocaleString("en-US", {timeZone: "America/Los_Angeles"});
        const laTime = new Date(laString);
        const hour = laTime.getHours();

        // Elements
        const lightingBadge = document.getElementById('lighting-badge');
        const lightingBar = document.getElementById('lighting-progress');
        const noiseBadge = document.getElementById('noise-badge');
        const noiseBar = document.getElementById('noise-progress');
        const quietText = document.getElementById('quiet-hour-text');

        // State Defaults
        let lightK = "4500K";
        let lightLabel = "(Daylight)";
        let lightPct = 70;
        let noiseDB = "32dB";
        let noiseLabel = "(Library)";
        let noisePct = 20;
        let alertMsg = 'Next "Quiet Hour" begins at <strong>2:00 PM PST</strong>.';

        // 2. Determine State based on LA Hour (0-23)
        if (hour >= 20 || hour < 6) {
            // NIGHT MODE (8PM - 6AM)
            lightK = "2200K";
            lightLabel = "(Amber/Night)";
            lightPct = 20;
            noiseDB = "25dB";
            noiseLabel = "(Silent)";
            noisePct = 5;
            alertMsg = 'Building in <strong>Night Mode</strong>. Badge access required.';
        } 
        else if (hour >= 6 && hour < 9) {
            // MORNING RAMP-UP (6AM - 9AM)
            lightK = "3500K";
            lightLabel = "(Warm White)";
            lightPct = 50;
            noiseDB = "45dB";
            noiseLabel = "(Arrivals)";
            noisePct = 40;
            alertMsg = 'Next "Quiet Hour" begins at <strong>2:00 PM PST</strong>.';
        }
        else if (hour >= 12 && hour < 14) {
            // LUNCH / SOCIAL (12PM - 2PM)
            lightK = "5000K";
            lightLabel = "(Bright)";
            lightPct = 80;
            noiseDB = "50dB";
            noiseLabel = "(Social)";
            noisePct = 55;
            alertMsg = 'Quiet Hours are suspended until <strong>2:00 PM PST</strong>.';
        }
        else if (hour >= 17 && hour < 20) {
            // EVENING WIND-DOWN (5PM - 8PM)
            lightK = "3000K";
            lightLabel = "(Warm)";
            lightPct = 40;
            noiseDB = "35dB";
            noiseLabel = "(Library)";
            noisePct = 25;
            alertMsg = 'Building entering <strong>Evening Mode</strong>.';
        }
        else {
            // STANDARD WORK DAY (9AM-12PM, 2PM-5PM)
            lightK = "4500K";
            lightLabel = "(Daylight)";
            lightPct = 70;
            noiseDB = "38dB";
            noiseLabel = "(Focus)";
            noisePct = 30;
            
            if (hour >= 14) {
                 alertMsg = 'Current Status: <strong>Quiet Hour (Active)</strong>';
            } else {
                 alertMsg = 'Next "Quiet Hour" begins at <strong>2:00 PM PST</strong>.';
            }
        }

        // 3. Apply Updates
        lightingBadge.innerText = `${lightK} ${lightLabel}`;
        lightingBar.style.width = `${lightPct}%`;
        
        noiseBadge.innerText = `${noiseDB} ${noiseLabel}`;
        noiseBar.style.width = `${noisePct}%`;
        
        quietText.innerHTML = alertMsg;

        // Log for debugging
        console.log(`JMC Telemetry: Local LA Time is ${hour}:00. Mode Updated.`);
    });
</script>