<?php
// pages/engine-room/history/nine-figure-refusal/the-counter-offer.php
// CHAPTER 2: THE TRAP (Part 3)
// The "Poison Pill" Letter. Holly rejects the $150M and triggers the collapse.

$pageTitle = "The Counter-Offer (Sept 14, 2018) - Engine Room History";
?>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-glow border border-warning">
                <i class="fa-duotone fa-envelope-open-text me-2"></i>Evidence Item #45-C
            </span>
            <h1 class="display-4 fw-bold text-dark mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                The "Kill Switch" Counter-Offer Letter
            </h1>
            <p class="lead text-muted font-monospace">
                "I didn't want to buy a company. I just wanted them to leave us alone. <br>Unfortunately, Mr. Frost forced me to pull the trigger."
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card bg-dark border-start border-4 border-warning shadow-lg mb-5">
                <div class="card-body p-4">
                    <h5 class="text-warning fw-bold text-uppercase mb-3"><i class="fa-solid fa-circle-info me-2"></i>Narrative Context</h5>
                    <p class="text-white-50 mb-3 small">
                        <strong>September 14, 2018 (09:00 AM):</strong> Following the discovery of the "LBO Clause" in the offer letter and the solvency issues in the forensic audit, Holly O'Connell drafts a counter-demand.
                    </p>
                    <div class="text-white-50 mb-0 small border-top border-secondary pt-2">
                        <p class="mb-2">
                            <strong class="text-white">The "Army of One" Bluff:</strong> Note the phrasing <em>"reviewed by our legal and financial teams."</em> Holly uses the corporate plural to project the image of a massive department. In reality, she <strong>is</strong> the legal team (J.D.) and she <strong>is</strong> the financial team (CFA/Cr.FA).
                        </p>
                        <p class="mb-0">
                            The letterhead below confirms this: she explicitly lists her "scary" credentials to prove she doesn't need to hire outside counsel to find their fraud.
                        </p>
                    </div>
                </div>
            </div>

            <?php 
                $letter_date = "September 14, 2018";
                
                // UPDATED: Addressing Frost by his REAL title (Stripping the "Private Wealth" lie)
                $letter_to = "Jameson Frost<br>Vice President of Acquisitions<br>Omni-Global Media Corp.";
                
                $letter_stamp = "REJECTED"; 
                $stamp_color = "danger";
                $letter_rotation = -1.5;

                // The Content of the Letter
                $letter_body = '
                <p>Dear Mr. Frost,</p>
                
                <p>We are in receipt of your unsolicited offer to acquire Engine Room Records, LLC for the sum of $150,000,000 (USD).</p>

                <p>After a thorough review of the proposed Purchase Agreement by <strong>our legal and financial teams</strong>, we must <strong>reject</strong> your offer in its entirety. We find the structure of the deal—specifically the Leveraged Buyout provisions outlined in Section 4.a—to be incompatible with the long-term stability of our assets.</p>

                <p>Furthermore, <strong>our due diligence</strong> has uncovered significant irregularities in Omni-Global\'s own balance sheet. Specifically, your "Goodwill" valuation appears to be leveraged against projected earnings that do not exist.</p>

                <h5 class="fw-bold text-uppercase mt-4 mb-3 text-decoration-underline">Our Counter-Demand</h5>
                
                <p>To avoid a protracted legal conflict that would require these financial irregularities to become public record, Engine Room Records, LLC proposes the following resolution:</p>

                <ol class="mb-4">
                    <li class="mb-2"><strong>Immediate Withdrawal:</strong> Omni-Global will publicly withdraw its hostile bid by 5:00 PM EST today.</li>
                    <li class="mb-2"><strong>Non-Compete:</strong> Omni-Global will agree to a 10-year moratorium on any future attempts to acquire Engine Room Records or its subsidiaries.</li>
                    <li><strong>Termination Fee:</strong> Omni-Global will pay a symbolic termination fee of <strong>$1.00</strong> to close this matter.</li>
                </ol>

                <p>If these terms are not met by the deadline, we will consider this a hostile action. As fiduciaries, we will be legally obligated to report our findings regarding your insolvency to the Securities and Exchange Commission (SEC) to protect our own credit rating.</p>

                <p>We await your prompt confirmation.</p>
                
                <p class="mt-4">Regards,</p>
                ';

                // Load the Letterhead Component (This contains the credentials)
                include ROOT_PATH . '/includes/components/corporate/letterhead.php'; 
            ?>

            <div class="row mt-5 g-4">
                <div class="col-md-6">
                    <div class="card bg-danger bg-opacity-10 border-danger h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger text-uppercase"><i class="fa-solid fa-xmark me-2"></i>The Rejection</h5>
                            <p class="small text-muted mb-0">
                                At 10:15 AM, Jameson Frost reportedly laughed at the letter, crumbled up a physical copy, and told his assistant to "tell the girl to go back to school." He did not withdraw the bid.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-success bg-opacity-10 border-success h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-success text-uppercase"><i class="fa-solid fa-check me-2"></i>The Consequence</h5>
                            <p class="small text-muted mb-0">
                                At 5:01 PM, Holly O'Connell uploaded the <em>Forensic Audit</em> to the SEC's whistleblower portal. By market open on Sept 15, Omni-Global stock had lost 94% of its value.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/the-offer-letter" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous: The Offer
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/the-trigger" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Trigger <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>