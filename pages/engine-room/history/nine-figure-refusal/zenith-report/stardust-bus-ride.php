<?php
// pages/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride.php
// The Zenith Report Archives.
// Contains: "The $350 Million Bus Ride", "The Image That Broke Wall Street", AND "The Landlord's Statement"
// Context: Investigative reporting on the Omni-Global scandal.
// UPDATED: Added "Newsprint/Security Cam" CSS filters to the image & Narrative Stepper.

$pageTitle = "The Zenith Report: The Bus Ride & The Leak";
?>

<style>
    /* NEWSPAPER THEME - ADAPTIVE */
    .zenith-paper {
        background-color: #f9f9f9;
        color: #1a1a1a;
        transition: all 0.3s ease;
        border: 1px solid #d3d3d3;
    }
    
    /* Article 1 Tilt */
    .zenith-paper-1 { transform: rotate(1deg); }
    
    /* Article 2 Tilt */
    .zenith-paper-2 { transform: rotate(-1deg); }
    
    /* SECURITY FOOTAGE / NEWSPRINT FILTER */
    .security-footage-print {
        filter: grayscale(100%) contrast(150%) brightness(90%) sepia(20%);
        /* Optional: Add a subtle SVG noise overlay if supported, but high contrast grayscale does the job well */
        border: 4px solid #000;
        max-width: 100%;
        display: block;
    }

    /* Press Release (Formal - No Tilt) */
    /* FORCE LIGHT MODE STYLING EVEN IN DARK MODE (Skeuomorphic Paper) */
    .zenith-paper-3 { 
        transform: rotate(0deg); 
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.175) !important;
        background-color: #ffffff !important; 
        color: #212529 !important;
    }
    
    /* Force all child elements in the press release to use dark text */
    .zenith-paper-3 p,
    .zenith-paper-3 h4,
    .zenith-paper-3 h5,
    .zenith-paper-3 div,
    .zenith-paper-3 blockquote,
    .zenith-paper-3 .text-muted {
        color: #212529 !important;
    }
    
    /* Override specific bootstrap utilities inside the press release */
    .zenith-paper-3 .border-dark {
        border-color: #212529 !important;
    }
    .zenith-paper-3 .bg-light {
        background-color: #f8f9fa !important;
    }

    .zenith-header {
        background-color: #ffffff;
        border-bottom: 3px solid #000;
        font-family: 'Times New Roman', serif;
    }

    .zenith-body {
        font-family: 'Georgia', serif;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    /* DARK MODE OVERRIDES (For the Newspaper Articles only) */
    [data-bs-theme="dark"] .zenith-paper {
        background-color: #15171e; /* Dark slate */
        color: #e0e0e0;
        border-color: #444 !important;
    }

    [data-bs-theme="dark"] .zenith-header {
        background-color: #1c2029;
        border-bottom: 3px solid #e0e0e0;
    }

    [data-bs-theme="dark"] .zenith-header h2 {
        color: #e0e0e0 !important;
    }

    /* Keep the newspaper text readable in dark mode */
    [data-bs-theme="dark"] .zenith-paper .text-dark {
        color: #e0e0e0 !important;
    }
    
    [data-bs-theme="dark"] .zenith-paper .border-dark {
        border-color: #444 !important;
    }
    
    /* Highlight the "Pull Quotes" in Dark Mode */
    [data-bs-theme="dark"] .blockquote-custom {
        background-color: rgba(255, 255, 255, 0.05);
        border-left-color: #dc3545;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-secondary text-white rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-glow">
                <i class="fa-duotone fa-newspaper me-2"></i>Press Archive
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                The Public Record
            </h1>
            <p class="lead text-body-secondary font-monospace">
                Investigative coverage of the Omni-Global collapse.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5" id="bus-ride">
        <div class="col-lg-11">
            <div class="card border-1 border-dark shadow-lg zenith-paper zenith-paper-1">
                
                <div class="card-header zenith-header py-3">
                    <div class="d-flex justify-content-between align-items-end flex-wrap gap-2">
                        <h2 class="display-6 fw-bold mb-0 text-dark" style="letter-spacing: -1px;">The Zenith Report</h2>
                        <div class="text-end">
                            <span class="small font-monospace text-muted d-block">September 13, 2018 &bull; Vol. 88</span>
                            <span class="small font-monospace text-danger fw-bold text-uppercase">Investigative Exclusive</span>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5 text-dark">
                    <div class="row">
                        
                        <div class="col-md-9 border-end border-secondary-subtle pe-md-5">
                            <h5 class="text-uppercase fw-bold text-danger letter-spacing-2 small mb-2">Business / Culture</h5>
                            
                            <h3 class="display-5 fw-bold mb-3 text-dark" style="font-family: 'Georgia', serif;">
                                The $350 Million Bus Ride
                            </h3>
                            
                            <h4 class="h5 fst-italic text-muted mb-4" style="font-family: 'Georgia', serif; line-height: 1.6;">
                                How a "Visual Audit" of a Civic-Rapid bus stop caused Omni-Global executives to underestimate the most profitable indie band in Virginia.
                            </h4>

                            <div class="d-flex align-items-center mb-4 text-muted small font-monospace">
                                <span class="fw-bold text-dark me-2">By Sarah West</span> | <span class="ms-2">Investigative Desk</span>
                            </div>
                            
                            <div class="zenith-body">
                                <p>
                                    <span class="fw-bold text-uppercase">Century City —</span> At 8:45 AM yesterday, the valet stand outside 2000 Avenue of the Stars was, as usual, a parade of S-Class sedans and Bentleys. It is a building where perception is currency. <strong>Omni-Global Media Corp.</strong>, which leases the 38th, 39th, and 40th floors but lists the building as its "Headquarters," relies on this perception.
                                </p>
                                <p>
                                    Then came the <strong>Civic-Rapid 720</strong>.
                                </p>
                                <p>
                                    The 60-foot articulated bus hissed to a halt at the public stop located just thirty feet past the valet stand. The doors opened, the hydraulic ramp deployed, and the five owners of <strong>Engine Room Records</strong>—a company valued internally by Omni at $38 million—stepped out.
                                </p>
                                <p>
                                    To the casual observer, they looked like a family on a day trip. But to Omni-Global VP <strong>Jameson Frost</strong>, watching from his corner office window, they looked like prey.
                                </p>

                                <blockquote class="p-3 my-4 border-start border-4 border-danger bg-dark blockquote-custom">
                                    <p class="mb-2 fst-italic text-white">"He saw the bus pass. He saw the wheelchair. He turned to the room and said, 'Slash the offer. They're broke.'"</p>
                                    <footer class="blockquote-footer mt-1 text-white-50">Anonymous Source, <cite title="Source Title">Omni-Global M&A Team</cite></footer>
                                </blockquote>

                                <p>
                                    According to leaked documents obtained by <em>The Zenith Report</em>, Omni-Global's original algorithmic valuation of the band's catalog—assuming full exploitation rights—was <strong>$500 million</strong>. Upon performing a "Visual Audit"—corporate code for profiling—Frost unilaterally cut the offer to <strong>$150 million</strong>. He assumed that a family taking public transit would see nine figures as a "lottery win."
                                </p>
                                <p>
                                    He was wrong.
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 ps-md-4 d-none d-md-block">
                            <h6 class="fw-bold text-uppercase border-bottom border-dark pb-2 mb-3 text-dark">Market Watch</h6>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="fw-bold text-dark">OMGCQ (Omni)</span>
                                    <span class="text-danger fw-bold"><i class="fa-solid fa-caret-down"></i> -14.2%</span>
                                </div>
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
                                </div>
                                <small class="text-muted d-block mt-1 text-uppercase fw-bold">Trading Halted</small>
                            </div>

                            <div class="card bg-light border-0 p-3 mb-4">
                                <h6 class="fw-bold small text-uppercase mb-2 text-dark">Transit Log</h6>
                                <ul class="list-unstyled small font-monospace text-muted mb-0">
                                    <li class="mb-1"><strong>Route:</strong> Civic-Rapid 720</li>
                                    <li class="mb-1"><strong>Stop:</strong> Ave of Stars</li>
                                    <li class="mb-1"><strong>Fare:</strong> $1.75</li>
                                    <li class="text-danger fw-bold mt-2">Cost to Omni: $350,000,000</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="card-footer bg-white border-top border-dark text-center py-2">
                    <small class="text-muted font-monospace">Copyright &copy; 2018 The Zenith Report. All Rights Reserved.</small>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5" id="extraction-leak">
        <div class="col-lg-11">
            <div class="card border-1 border-dark shadow-lg zenith-paper zenith-paper-2">
                
                <div class="card-header zenith-header py-3">
                    <div class="d-flex justify-content-between align-items-end flex-wrap gap-2">
                        <h2 class="display-6 fw-bold mb-0 text-dark" style="letter-spacing: -1px;">The Zenith Report</h2>
                        <div class="text-end">
                            <span class="small font-monospace text-muted d-block">September 16, 2018 &bull; Vol. 88</span>
                            <span class="small font-monospace text-danger fw-bold text-uppercase">Exclusive</span>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5 text-dark">
                    <div class="row">
                        <div class="col-md-9 border-end border-secondary-subtle pe-md-5">
                            
                            <h5 class="text-uppercase fw-bold text-danger letter-spacing-2 small mb-2">Corporate Scandal</h5>
                            
                            <h3 class="display-5 fw-bold mb-3 text-dark" style="font-family: 'Georgia', serif;">
                                The Image That Broke Wall Street
                            </h3>
                            
                            <h4 class="h5 fst-italic text-muted mb-4" style="font-family: 'Georgia', serif; line-height: 1.6;">
                                Engine Room Records releases harrowing security footage of lead singer Cassidy O'Connell being carried out of the failed Omni-Global merger meeting.
                            </h4>

                            <div class="d-flex align-items-center mb-4 text-muted small font-monospace">
                                <span class="fw-bold text-dark me-2">By Sarah West</span> | <span class="ms-2">Media & Culture</span>
                            </div>
                            
                            <div class="zenith-body">
                                <p>
                                    <span class="fw-bold text-uppercase">Century City —</span> It is the photograph that has turned a bankruptcy case into a moral indictment.
                                </p>
                                <p>
                                    At 8:00 AM this morning, Engine Room Records released a high-definition still frame from the internal security cameras of 2000 Avenue of the Stars. The image, timestamped <strong>10:25:02 AM on Sept 14</strong>, depicts the immediate aftermath of the failed $150 million acquisition meeting with Omni-Global Media Corp. (OTC: OMGCQ).
                                </p>
                                
                                <div class="my-4 p-1 border border-dark bg-white shadow-sm">
                                    <img src="https://assets.raggiesoft.com/engine-room-records/images/omni-global/cassidy-extraction.jpg" 
                                         class="img-fluid security-footage-print" 
                                         alt="Grainy black and white security footage showing Evan and Tyler carrying Cassidy down the hallway, flanked by Ryan and Holly. Staff members look on in horror.">
                                    <div class="p-2 small font-monospace text-muted border-top border-secondary-subtle mt-1 text-center bg-light">
                                        <strong>Fig 1.</strong> "Code Carry." The hallway outside Suite 4000. (Source: Pacific Rim Properties)
                                    </div>
                                </div>

                                <p>
                                    "This wasn't a negotiation tactic," said a representative for the label. "This was a medical evacuation. The executives at Omni-Global knowingly triggered a severe sensory meltdown in a neurodivergent artist for leverage."
                                </p>

                                <h5 class="fw-bold mt-4 mb-3 text-dark">The Source of the Leak</h5>
                                <p>
                                    Questions immediately arose regarding how an indie record label obtained high-security surveillance footage from a building leased by a media conglomerate. Omni-Global's legal team initially threatened to sue for "corporate espionage."
                                </p>
                                <p>
                                    Those threats were silenced an hour later when the Landlord issued a statement confirming they authorized the release.
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 ps-md-4 d-none d-md-block">
                            <h6 class="fw-bold text-uppercase border-bottom border-dark pb-2 mb-3 text-dark">Stock Reaction</h6>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="fw-bold text-dark">OMGCQ</span>
                                    <span class="text-danger fw-bold">-22% (Today)</span>
                                </div>
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
                                </div>
                                <small class="text-muted d-block mt-1 text-uppercase fw-bold">Panic Selling</small>
                            </div>
                            
                            <h6 class="fw-bold text-uppercase border-bottom border-dark pb-2 mb-3 text-dark mt-4">Related</h6>
                            <ul class="list-unstyled small" style="font-family: 'Georgia', serif;">
                                <li class="mb-3"><a href="#bus-ride" class="text-dark text-decoration-none fw-bold">Coverage: The $350 Million Bus Ride</a></li>
                                <li class="mb-3"><a href="#press-release" class="text-dark text-decoration-none fw-bold">Statement: Pacific Rim Press Release</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5" id="press-release">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg zenith-paper-3">
                <div class="card-body p-5">
                    <?php
                    // CONFIGURATION FOR LETTERHEAD
                    $brand = 'pacific-rim'; // Triggers the Landlord styling
                    $letter_date = "September 16, 2018";
                    $letter_to = "<strong>FOR IMMEDIATE RELEASE</strong><br>Distributed via Business Wire / PR Newswire";
                    $letter_stamp = ""; // No stamp for press releases
                    
                    // LETTER BODY CONTENT
                    $letter_body = '
                        <div class="text-center border-bottom border-dark pb-3 mb-4">
                            <h4 class="fw-bold text-uppercase mb-1">Statement Regarding Security Footage Release</h4>
                            <p class="small mb-0 fst-italic">Ref: Incident Report #2000-SEC-18-914</p>
                        </div>

                        <p><strong>CENTURY CITY, CA —</strong> Pacific Rim Properties, LLC ("Landlord"), the owner and manager of the commercial property located at 2000 Avenue of the Stars, hereby issues the following statement regarding media inquiries surrounding the security footage released this morning by Engine Room Records.</p>

                        <p>We confirm the authenticity of the footage.</p>

                        <p>As the Property Owner, Pacific Rim Properties retains sole ownership of all building infrastructure, including but not limited to: HVAC systems, elevators, fiber optic cabling, and the internal security surveillance network ("The System").</p>

                        <p>Under <strong>Section 18.4 (Landlord Rights)</strong> of the Master Lease Agreement signed by Omni-Global Media Corp., the Tenant acknowledges that:</p>
                        
                        <blockquote class="border-start border-4 border-dark ps-3 py-2 my-3 fst-italic bg-light text-muted small">
                            "Landlord reserves the right to access, record, and review all common areas and corridors for security purposes. Such recordings remain the intellectual property of the Landlord."
                        </blockquote>

                        <p>The footage in question was recorded in the 40th Floor Executive Corridor, which is designated as a Common Area. It was retrieved via our Master Administrative Access panel by authorized personnel.</p>

                        <p>Pacific Rim Properties authorized the release of this footage to clarify the events of September 14, 2018. We do not require Tenant permission to access, review, or distribute data generated by our own hardware.</p>

                        <p>Any further inquiries regarding the eviction proceedings against Omni-Global Media Corp. should be directed to our legal counsel.</p>
                    ';

                    include ROOT_PATH . '/includes/components/corporate/letterhead.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Narrative Stepper Component
        $nav = [
            'prev' => ['url' => '/engine-room/history/nine-figure-refusal/liquidation-auction', 'label' => 'Liquidation Auction'],
            'overview' => ['url' => '/engine-room/history/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/history/nine-figure-refusal/the-jessica-miller-center', 'label' => 'The Legacy']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>