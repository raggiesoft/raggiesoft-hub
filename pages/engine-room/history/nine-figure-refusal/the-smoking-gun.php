<?php
// pages/engine-room/history/nine-figure-refusal/the-smoking-gun.php
// EVIDENCE ITEM #00-C: The Fraudulent Prospectus (The "Smoking Gun")
// Context: The moment Jameson Frost tried to save $0.50 and lost $600 Million.
// UPDATED: Added "Postage Due" narrative arc & WCAG Compliance.

$pageTitle = "Evidence #00-C: The Smoking Gun - Engine Room History";
?>

<style>
    /* Prospectus Styling - Skeuomorphic (Always White Paper) */
    .prospectus-paper {
        background-color: #fcfcfc !important;
        background-image: linear-gradient(to bottom right, #ffffff, #f0f0f0);
        color: #333 !important;
        font-family: 'Times New Roman', serif;
        position: relative;
        overflow: visible; 
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.175)!important;
    }

    /* Postage Due Stamp */
    .stamp-postage-due {
        border: 3px double #dc3545;
        color: #dc3545;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px;
        transform: rotate(-15deg);
        opacity: 0.8;
        mix-blend-mode: multiply;
        font-size: 1.2rem;
        text-align: center;
        line-height: 1.2;
    }

    /* Hand-Drawn Annotations */
    .circle-sketch {
        border: 2px solid #d63384; /* Hot Pink Marker */
        border-radius: 50% 40% 60% 30% / 40% 50% 60% 50%; /* Organic Shape */
        position: absolute;
        top: -5px; left: -5px; right: -5px; bottom: -5px;
        pointer-events: none;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-danger rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-sm">
                <i class="fa-duotone fa-envelope-open-dollar me-2"></i>Evidence Item #00-C
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                The $0.50 Insult
            </h1>
            <p class="lead text-body-secondary font-monospace">
                Jameson Frost tried to buy a company for $150 Million. <br>But he refused to pay 50 cents for the stamp.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="prospectus-paper p-5 mx-auto" style="max-width: 800px; transform: rotate(-1deg);">
                
                <div class="position-absolute top-0 end-0 p-4">
                    <div class="border border-1 border-dark px-2 py-1 text-center small bg-white" style="width: 120px;">
                        PRESORT STANDARD<br>
                        <strong>US POSTAGE PAID</strong><br>
                        PERMIT NO. 441<br>
                        LOS ANGELES, CA
                    </div>
                </div>

                <div class="position-absolute" style="top: 20px; right: 140px;">
                    <div class="stamp-postage-due bg-white">
                        <i class="fa-solid fa-hand-holding-dollar me-2"></i>Postage Due<br>
                        $0.50<br>
                        <span style="font-size: 0.7em;">Single Piece / Invalid Bulk</span>
                    </div>
                </div>

                <div class="text-center border-bottom border-dark pb-4 mb-4">
                    <h2 class="fw-bold mb-1" style="letter-spacing: 2px;">OGM CAPITAL PARTNERS IV, L.P.</h2>
                    <p class="small text-muted text-uppercase mb-0">Confidential Private Placement Memorandum</p>
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <p class="mb-2"><strong>To:</strong> Tyler Wright (c/o Engine Room Records)</p>
                        <p class="mb-4"><strong>Date:</strong> September 12, 2018</p>
                        
                        <p>
                            This Prospectus relates to the offer to acquire 100% of the outstanding equity of 
                            <strong>Engine Room Records, LLC</strong> ("The Target") for a total consideration of 
                            $150,000,000 USD.
                        </p>
                    </div>

                    <div class="col-12 p-3 bg-light border mb-4 position-relative">
                        <h5 class="fw-bold border-bottom pb-2">Investment Thesis: Distressed Asset</h5>
                        <p class="mb-0">
                            "The Target is characterized by <span class="position-relative d-inline-block text-danger fw-bold">liquidity constraints<div class="circle-sketch"></div></span> and an inability to scale operations without significant capital infusion. This acquisition acts as a 'rescue financing' event..."
                        </p>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <p class="small text-muted fst-italic">
                            * This document contains forward-looking statements that involve risks and uncertainties.
                        </p>
                    </div>
                </div>

                <div class="position-absolute bg-warning p-3 shadow-lg rotate-2" 
                     style="bottom: 40px; left: -40px; width: 250px; font-family: 'Kalam', cursive; transform: rotate(-3deg); color: #000;">
                    <i class="fa-solid fa-paperclip position-absolute top-0 start-50 translate-middle-y text-muted"></i>
                    <p class="mb-0 fw-bold small">
                        "He used a Bulk Mail permit for a single letter. <br><br>
                        That's illegal (Postal Fraud). <br>
                        And I had to pay the mailman 50 cents to get this trash. <br><br>
                        <strong>Call the USPIS.</strong>"
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-danger shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px; min-width: 48px;">
                            <i class="fa-duotone fa-envelope-open-text fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold text-danger mb-0">The Casus Belli (Why This Started The War)</h3>
                    </div>
                    
                    <p class="text-body-secondary">
                        In 2018, the cost of a First-Class stamp was <strong>$0.50</strong>. 
                        Jameson Frost had a $150 Million acquisition budget, but he tried to save money by using a "Presort Standard" (Bulk Mail) permit on a single envelope.
                    </p>
                    
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <h6 class="fw-bold text-body-emphasis border-bottom pb-2">The Regulatory Violation</h6>
                            <p class="small text-body-secondary">
                                Bulk Mail rates require a minimum of 200 pieces. Mailing a single piece with a bulk indicia is a misuse of the permit. The USPS flagged it immediately.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold text-body-emphasis border-bottom pb-2">The Personal Insult</h6>
                            <p class="small text-body-secondary">
                                The letter didn't just arrive; it arrived <strong>"Postage Due."</strong> The mail carrier knocked on Holly's door and asked for 50 cents. Holly realized that Omni-Global respected them so little, they wouldn't even pay for a stamp.
                            </p>
                        </div>
                    </div>

                    <div class="alert alert-danger bg-danger-subtle border-danger mt-3 mb-0">
                        <i class="fa-solid fa-gavel me-2"></i>
                        <strong>The Result:</strong> Because the document contained financial lies *and* was sent via USPS, it triggered <strong>18 U.S.C. § 1341 (Mail Fraud)</strong>. This single envelope gave Holly federal jurisdiction.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/forensic-audit" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/frost-interview" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Interview <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>