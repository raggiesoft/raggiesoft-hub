<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo.php
// EVIDENCE ITEM #44-B: The Document That Killed a Corporation
// UPDATED: Dark Mode "Red Pen" visibility improvements.

$pageTitle = "The 'Bus Memo' - Evidence Item #44-B";
?>
<style>
    /* Hand-drawn circle effect */
    .circled-text {
        position: relative;
        display: inline-block;
        padding: 0 4px;
    }
    .circled-text::after {
        content: "";
        position: absolute;
        top: -10%;
        left: -5%;
        width: 110%;
        height: 120%;
        border: 3px solid #dc3545; 
        border-radius: 50% 60% 40% 70% / 50% 50% 60% 50%;
        transform: rotate(-2deg);
        pointer-events: none;
        opacity: 0.9;
    }

    /* Hand-Drawn Underline Effect */
    .hand-underline {
        position: relative;
        display: inline-block;
        text-decoration: none !important;
    }
    .hand-underline::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        width: 100%;
        height: 3px;
        background-color: #dc3545; 
        transform: rotate(-1.5deg);
        border-radius: 255px 15px 225px 15px / 15px 225px 15px 255px;
        opacity: 0.85;
    }
    
    /* DARK MODE OVERRIDES FOR ANNOTATIONS */
    /* Ensures the red pen marks pop against dark backgrounds */
    [data-bs-theme="dark"] .circled-text::after {
        border-color: #ff6b6b; /* Salmon Pink */
    }
    [data-bs-theme="dark"] .hand-underline::after {
        background-color: #ff6b6b;
    }
    [data-bs-theme="dark"] .annotation-arrow path {
        stroke: #ff6b6b !important;
    }
    [data-bs-theme="dark"] .annotation-arrow polygon {
        fill: #ff6b6b !important;
    }

    /* The Sticky Note - Skeuomorphic Elements retain specific colors for realism */
    .sticky-note-container {
        position: absolute;
        top: 20%; 
        right: -30px; 
        width: 240px; 
        background-color: #ffeb3b; /* Keep Yellow */
        color: #000; /* Force Black Text for AAA Contrast on Yellow */
        padding: 20px; 
        transform: rotate(3deg); 
        box-shadow: var(--bs-box-shadow);
        z-index: 10;
        transition: transform 0.3s ease;
        border: 1px solid #e6db55;
    }
    
    .sticky-note-container:hover {
        transform: scale(1.05) rotate(0deg); 
        z-index: 20;
    }

    .handwritten-text {
        font-family: 'Kalam', cursive; 
        font-size: 1.15rem;
        line-height: 1.3;
    }
    
    @media (max-width: 992px) {
        .sticky-note-container {
            position: relative;
            top: 0;
            right: 0;
            width: 100%;
            margin-top: 20px;
            transform: rotate(0deg);
        }
        .annotation-arrow {
            display: none;
        }
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-warning">
                <i class="fa-duotone fa-gavel me-2"></i>Plaintiff's Exhibit A
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                THE "BUS MEMO"
            </h1>
            <p class="lead text-body-secondary font-monospace">
                The internal email that transformed a business dispute into a Civil Rights violation.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg position-relative bg-body-tertiary" style="transform: rotate(1deg);">
                
                <div class="position-absolute top-0 end-0 p-4 opacity-25">
                    <div class="border border-4 border-danger text-danger p-2 fw-bold text-uppercase fs-2" 
                         style="font-family: 'Black Ops One', cursive; transform: rotate(15deg);">
                        Discovery<br>Item 44-B
                    </div>
                </div>

                <div class="card-body p-5 font-monospace text-body-emphasis">
                    <div class="border-bottom border-secondary pb-3 mb-4">
                        <div class="row">
                            <div class="col-2 fw-bold text-uppercase text-body-secondary">From:</div>
                            <div class="col-10">Frost, Jameson (VP Acquisitions)</div>
                        </div>
                        <div class="row">
                            <div class="col-2 fw-bold text-uppercase text-body-secondary">To:</div>
                            <div class="col-10">Thorne, Marcus (General Counsel)</div>
                        </div>
                        <div class="row">
                            <div class="col-2 fw-bold text-uppercase text-body-secondary">Date:</div>
                            <div class="col-10">September 12, 2018 (09:36 AM PST)</div>
                        </div>
                        <div class="row">
                            <div class="col-2 fw-bold text-uppercase text-body-secondary">Subject:</div>
                            <div class="col-10">RE: Revised Valuation - Engine Room Records</div>
                        </div>
                    </div>

                    <div class="ps-md-2">
                        <p>Marcus,</p>
                        <p>Hold the $500M offer sheet. Slash it to $150M. I want the new papers on the table before they get upstairs.</p>
                        
                        <div class="bg-warning-subtle p-3 border-start border-warning border-4 position-relative my-4 text-body-emphasis">
                            I just watched them get off a city bus. The <span class="circled-text fw-bold text-danger">cripple</span> is in a manual chair and the girl is using it like a walker. 
                            <br><br>
                            And the "security"? Two kids in faded university gym t-shirts. No suits. No handlers. It's pathetic. They are liquidating dignity for bus fare.
                            
                            <svg class="annotation-arrow position-absolute" style="top: 15px; right: -50px; width: 60px; height: 50px; overflow: visible; z-index: 5;">
                                <path d="M -10,15 Q 20,5 55,35" stroke="#dc3545" stroke-width="2" fill="none" marker-end="url(#arrowhead)" />
                                <defs>
                                    <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                                      <polygon points="0 0, 10 3.5, 0 7" fill="#dc3545" />
                                    </marker>
                                </defs>
                            </svg>
                        </div>

                        <p>They are desperate. We don't need to pay a premium for a charity case. Cut the number. They'll take whatever crumbs we give them because they need to pay for the ramps and buy some decent clothes.</p>

                        <p>Make sure the "Cash" offer is prominent. They won't read the fine print about the leverage.</p>

                        <p>- JF</p>
                    </div>
                </div>

                <div class="sticky-note-container">
                    <div class="handwritten-text">
                        <span class="text-danger fw-bold text-uppercase hand-underline">Here It Is:</span><br>
                        This word triggers <strong class="text-dark">ADA Title III</strong> violations.<br>
                        <span class="d-block mt-2">Malice = <strong>Punitive Damages</strong>.</span>
                        <span class="d-block mt-2 fw-bold text-danger text-center" style="transform: rotate(-2deg); font-size: 1.4rem;">GAME OVER.</span>
                    </div>
                    <div class="position-absolute bg-danger rounded-circle shadow-sm" style="width: 12px; height: 12px; top: -5px; left: 50%; transform: translateX(-50%); border: 1px solid rgba(0,0,0,0.2);"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 class="h4 fw-bold text-danger border-bottom border-danger pb-2 mb-4">
                The Legal Autopsy
            </h3>
            
            <div class="row g-4">
                <div class="col-12">
                    <div class="card h-100 border-info-subtle bg-info-subtle">
                        <div class="card-body">
                            <h5 class="fw-bold text-info-emphasis"><i class="fa-solid fa-bus me-2"></i>Context: Why the City Bus?</h5>
                            <p class="card-text text-body-secondary">
                                Frost saw "poverty." He missed the logistics.
                            </p>
                            <p class="card-text small text-body-secondary mb-0">
                                Ryan O'Connell uses a rigid-frame manual wheelchair. Transferring into a hired sedan requires disassembling the chair (wheels off), transferring the body, and reassembling it upon arrival. <strong class="text-info-emphasis">City buses have a deployable ramp.</strong> Ryan could roll on and roll off without assistance. It wasn't about money; it was about <strong>autonomy</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 bg-body-tertiary border-secondary shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger"><i class="fa-solid fa-1 me-2"></i>Predatory Intent</h5>
                            <p class="text-body-secondary small mb-0">
                                In contract law, "hardball" is legal. However, proving that an offer was lowered specifically because a target belonged to a <strong>Protected Class</strong> (disability) moves the case from Contract Law to <strong>Civil Rights Law</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 bg-body-tertiary border-secondary shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger"><i class="fa-solid fa-2 me-2"></i>The "Malice" Multiplier</h5>
                            <p class="text-body-secondary small mb-0">
                                The phrase "charity case" and the mockery of their attire proved <strong>Malice</strong>. This allowed Holly to seek <strong>Punitive Damages</strong> (designed to punish), which can be 3x to 9x the actual damages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-dark border-start border-success border-4 mt-4 bg-body-tertiary text-body-emphasis">
                <h5 class="alert-heading text-success fw-bold">The Checkmate</h5>
                <p class="mb-0">
                    When Holly presented this email to the Creditor Committee, the Senior Lenders realized they were defending a hate crime, not a business deal. They voted to remove the Board immediately to stop Holly from showing this document to a jury.
                </p>
            </div>
        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report', 'label' => 'UCC Search Report'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/forensic-audit', 'label' => 'Forensic Audit']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>