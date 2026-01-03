<?php
// pages/engine-room/history/nine-figure-refusal/the-smoking-gun.php
// EVIDENCE ITEM #00-C: The Letter (The "Smoking Gun")
// Context: The moment Jameson Frost tried to save $0.50 and lost $600 Million.
// UPDATED: Fixed Sticky Note positioning on large screens (moved further down/right to clear text).

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

    /* Corporate Letterhead Styling */
    .letterhead-logo {
        font-family: 'Helvetica', sans-serif;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: -1px;
        border-bottom: 4px solid #000;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }

    /* Holly's Note - Adjusted for Large Screens */
    .holly-note {
        position: absolute;
        bottom: -30px;     /* Hangs off the bottom edge */
        right: -85px;      /* Hangs off the right edge */
        width: 280px; 
        background-color: #ffeb3b; 
        color: #000;
        padding: 1.25rem;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.2);
        transform: rotate(-3deg);
        z-index: 10;
        transition: transform 0.3s ease;
        font-family: 'Kalam', cursive;
    }

    .holly-note:hover {
        transform: scale(1.05) rotate(0deg);
        z-index: 20;
    }

    /* Mobile Adjustment for Note */
    @media (max-width: 992px) {
        .holly-note {
            position: relative;
            bottom: auto;
            right: auto;
            left: 0;
            width: 100%;
            margin-top: 40px;
            transform: rotate(0deg);
        }
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

                <div class="letterhead-logo">
                    <i class="fa-solid fa-globe me-2"></i>Omni-Global Media
                    <span class="float-end fw-normal small text-muted mt-2" style="font-family: 'Times New Roman', serif; letter-spacing: 0;">Office of Acquisitions</span>
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <p class="mb-0">September 12, 2018</p>
                    </div>

                    <div class="col-12 mb-4">
                        <p class="mb-0"><strong>Mr. Tyler Wright</strong></p>
                        <p class="mb-0">c/o Engine Room Records, LLC</p>
                        <p class="mb-0">Blacksburg, VA 24060</p>
                    </div>

                    <div class="col-12">
                        <p>Dear Mr. Wright,</p>
                        
                        <p>We have been monitoring the... <em>spirited</em> independence of your outfit for some time. It is rare to see a "mom and pop" operation survive this long in a market dominated by giants like us. We admire your grit.</p>

                        <p>However, we also recognize the reality of your balance sheet. Maintaining aging equipment and financing tour logistics on a credit card is unsustainable.</p>

                        <p><strong>We are prepared to offer you a way out.</strong></p>

                        <div class="bg-light border p-4 my-4 text-center">
                            <h3 class="fw-bold mb-1">CASH OFFER: $150,000,000 USD</h3>
                            <p class="small text-muted mb-0 fst-italic">Subject to standard audit and liquidation of redundant personnel.</p>
                        </div>

                        <p>This is a life-changing amount of capital. It will allow you to finally retire the high-interest debt on your buses, upgrade your production gear to industry standards, and perhaps secure a comfortable retirement for your disabled family members.</p>

                        <p>Let's be realistic: You are an analog band in a digital world. Take the win.</p>

                        <p class="mt-5">Sincerely,</p>
                        
                        <div style="font-family: 'Nothing You Could Do', cursive; font-size: 1.5rem; color: #000080;">Jameson Frost</div>
                        <p class="fw-bold border-top border-dark d-inline-block pt-1 mt-1">
                            Jameson Frost<br>
                            <span class="fw-normal small">Vice President, Acquisitions</span>
                        </p>
                    </div>
                </div>

                <div class="holly-note">
                    <i class="fa-solid fa-paperclip position-absolute top-0 start-50 translate-middle-y text-muted opacity-50"></i>
                    <p class="mb-2 fw-bold small border-bottom border-dark pb-1">Holly's Notes:</p>
                    <ul class="list-unstyled small mb-0 fw-bold" style="line-height: 1.4;">
                        <li class="mb-2">1. Addressed to <u>Tyler</u>? (Sexist. He assumes the man runs it.)</li>
                        <li class="mb-2">2. "Retire debt"? We have ZERO debt. (Lazy Research).</li>
                        <li class="mb-2 text-danger">3. HE DIDN'T PAY FOR THE STAMP.</li>
                    </ul>
                    <p class="mt-2 mb-0 small text-danger fw-bold border-top border-danger pt-2">
                        He used a Bulk Permit for one letter. That is Mail Fraud (18 USC § 1341). I paid 50 cents for this insult. <br>CALL THE USPIS.
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