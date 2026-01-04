<?php
// pages/engine-room/jessica-miller-center/overview.php
// The Homepage for The Jessica Miller Center
// Context: Universal Design Showcase.
// WCAG STATUS: AAA Compliant (Native Bootstrap 5.3 Utilities)

$pageTitle = "The Jessica Miller Center - Universal Design & Workplace Equity";
?>

<style>
    /* JMC Branding Overrides */
    .icon-box {
        width: 64px;
        height: 64px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    .signature-text {
        font-family: 'Mrs Saint Delafield', cursive;
        font-size: 2.5rem;
        line-height: 1;
        transform: rotate(-3deg);
        display: inline-block;
    }

    /* Motion: Only animate if user hasn't requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .card { transition: transform 0.3s ease; }
        .card:hover { transform: translateY(-5px); }
    }
</style>

<div class="bg-secondary text-light py-5 mb-5 border-bottom border-secondary">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-lg-7">
                <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1">
                    <i class="fa-solid fa-check me-2" aria-hidden="true"></i>Est. 2019
                </span>
                
                <h1 class="display-4 fw-bold text-light mb-3 font-serif">
                    Work without friction.
                </h1>
                
                <p class="lead text-light text-opacity-75 mb-4" style="max-width: 600px;">
                    The Jessica Miller Center is a research hub and corporate headquarters dedicated to <strong>Universal Design</strong>. We prove that accessibility isn't an "accommodation"—it's the foundation of high performance.
                </p>
                
                <div class="d-flex gap-3 flex-wrap">
                    <a href="/engine-room/jessica-miller-center/the-quiet-floor" class="btn btn-success rounded-pill px-4" aria-label="Visit the Quiet Floor Information Page">
                        <i class="fa-duotone fa-ear-muffs me-2" aria-hidden="true"></i>Visit The Quiet Floor
                    </a>
                    <a href="#mission" class="btn btn-outline-light rounded-pill px-4">
                        Our Mission
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center" aria-hidden="true">
                <i class="fa-duotone fa-building-columns fa-10x text-secondary opacity-25"></i>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/jessica-miller.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             alt="Jessica Miller, Executive Director, sitting in a wheelchair at an adjustable desk overlooking the Hollywood Hills.">
                        
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="text-white mb-0 fw-bold h6">Jessica Miller</div>
                            <small class="text-white-50 text-uppercase letter-spacing-1" style="font-size: 0.75rem;">Executive Director</small>
                        </div>
                    </div>
                    <div class="col-md-8 p-4 p-lg-5 d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-quote-left fa-2x text-success opacity-25 mb-3" aria-hidden="true"></i>
                            
                            <h2 class="h4 font-serif fst-italic mb-4 text-body-emphasis">
                                "We don't fix people. We fix environments."
                            </h2>
                            
                            <p class="text-body-secondary mb-4">
                                For too long, corporate spaces were built for a single prototype of a human: neurotypical, able-bodied, and willing to endure discomfort for a paycheck. 
                                When we took over the 38th floor, we didn't just change the logo. We ripped out the marble that caused glare. We silenced the HVAC hum. We built a workplace where your nervous system isn't fighting the architecture.
                            </p>
                            <div class="signature-text text-body-tertiary mt-2" aria-hidden="true">Jessica Miller</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5" id="mission">
        <div class="col-12 text-center mb-4">
            <h2 class="h3 fw-bold text-uppercase letter-spacing-1 text-body">Our Core Pillars</h2>
        </div>
        <div class="col-md-4">
            <div class="card h-100 p-4 shadow-sm border-0 bg-body-tertiary">
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
            <div class="card h-100 p-4 shadow-sm border-0 bg-body-tertiary">
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
            <div class="card h-100 p-4 shadow-sm border-0 bg-body-tertiary">
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
            <div class="card bg-dark text-light border-info shadow overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8 p-5">
                        <h2 class="h4 text-info fw-bold text-uppercase mb-3">
                            <i class="fa-duotone fa-elevator me-2" aria-hidden="true"></i>System Spotlight: Destination Dispatch
                        </h2>
                        <p class="text-light text-opacity-75 mb-4">
                            We have replaced standard elevator banks with intelligent, group-based dispatching. 
                            Features include <strong>Badge-Based Home Floor</strong> assignment and a discreet <strong>ADA Mode</strong> for extended dwell times and audio guidance.
                        </p>
                        <a href="/engine-room/jessica-miller-center/destination-dispatch-elevators" class="btn btn-outline-info rounded-pill px-4">
                            View User Guide
                        </a>
                    </div>
                    <div class="col-md-4 bg-black text-center p-5 opacity-50 d-none d-md-block" aria-hidden="true">
                        <i class="fa-duotone fa-signs-post fa-5x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card bg-black text-light border-secondary overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-7 p-5">
                        <h2 class="h4 text-uppercase letter-spacing-2 mb-4 text-light">Campus Overview</h2>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3 mt-1 text-success"><i class="fa-solid fa-location-dot fa-xl" aria-hidden="true"></i></div>
                            <div>
                                <strong class="d-block text-light">2000 Avenue of the Stars</strong>
                                <span class="text-light text-opacity-50 small">Century City, Los Angeles, CA</span>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <div class="p-3 border border-secondary rounded bg-dark h-100">
                                    <span class="d-block text-secondary small text-uppercase fw-bold">Floor 38</span>
                                    <span class="text-light">Main Lobby & Intake</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="p-3 border border-secondary rounded bg-dark h-100">
                                    <span class="d-block text-secondary small text-uppercase fw-bold">Floor 39</span>
                                    <span class="text-light">Operations & Exec</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="p-3 border border-success rounded bg-success bg-opacity-10 h-100">
                                    <span class="d-block text-success small text-uppercase fw-bold"><i class="fa-solid fa-star me-1" aria-hidden="true"></i>Floor 40</span>
                                    <span class="text-light">The Quiet Floor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 bg-dark border-start border-secondary p-5 d-flex flex-column justify-content-center">
                        <h3 class="h6 text-secondary text-uppercase fw-bold mb-3">Live Building Status</h3>
                        
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-light"><i class="fa-solid fa-sun me-2 text-warning" aria-hidden="true"></i>Circadian Lighting</span>
                            <span class="badge bg-warning text-dark">4500K (Daylight)</span>
                        </div>
                        <div class="progress mb-3 bg-secondary bg-opacity-25" style="height: 4px;" role="progressbar" aria-label="Current Lighting Color Temperature" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-light"><i class="fa-solid fa-volume-xmark me-2 text-success" aria-hidden="true"></i>Ambient Noise</span>
                            <span class="badge bg-success">32dB (Library)</span>
                        </div>
                        <div class="progress mb-3 bg-secondary bg-opacity-25" style="height: 4px;" role="progressbar" aria-label="Current Ambient Noise Level" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 20%"></div>
                        </div>

                        <div class="alert alert-dark border-secondary mt-3 mb-0 py-2 px-3 small text-light">
                            <i class="fa-solid fa-circle-info text-info me-2" aria-hidden="true"></i>
                            Next "Quiet Hour" begins at <strong>2:00 PM PST</strong>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>