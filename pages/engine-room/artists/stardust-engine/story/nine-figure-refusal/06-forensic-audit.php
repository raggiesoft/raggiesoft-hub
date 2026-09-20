<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/forensic-audit.php
// EVIDENCE ITEM #00-B: Holly's "Homework" & The Federal "Triple Tap"
// Context: The moment Holly realized she could drop a nuclear bomb on Omni-Global.
// UPDATED: Added Narrative Stepper Component.

$pageTitle = "Forensic Audit: Omni-Global Media - Engine Room History";
?>

<style>
    /* FEDERAL FORMS: Forced "Paper" Look (Skeuomorphic) */
    /* These remain White/Black regardless of theme to look like physical scans */
    .federal-form {
        background-color: #ffffff !important;
        color: #000000 !important;
        border: 1px solid #ccc;
    }
    .federal-form .text-muted {
        color: #6c757d !important;
    }
    .federal-form .bg-dark {
        background-color: #212529 !important;
        color: #ffffff !important;
    }
    .federal-form .border-dark {
        border-color: #000000 !important;
    }
    
    /* Sticky Note: Always Yellow/Black */
    .sticky-note {
        background-color: #ffeb3b !important;
        color: #000000 !important;
    }

    /* Rotate stamps slightly for realism */
    .stamp-rotate {
        transform: rotate(-12deg);
        opacity: 0.8;
        mix-blend-mode: multiply;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-sm border border-primary-subtle">
                <i class="fa-duotone fa-magnifying-glass-dollar me-2"></i>Evidence Item #00-B
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                Holly's Homework
            </h1>
            <p class="lead text-body-secondary font-monospace">
                "They thought they were the smartest guys in the room. They forgot that I read the footnotes."
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="d-flex justify-content-end mb-n4 position-relative" style="z-index: 10; margin-right: 2rem;">
                <div class="sticky-note p-4 shadow-lg rotate-1" style="max-width: 320px; font-family: 'Kalam', cursive; font-size: 1.1rem; transform: rotate(2deg);">
                    <i class="fa-solid fa-thumbtack text-danger position-absolute top-0 start-50 translate-middle"></i>
                    <p class="mb-2 fw-bold">Ryan,</p>
                    <p class="mb-0">
                        They are pulling an Enron. See Section 4. 
                        <br><br>
                        They hid $400M of debt in shell companies to keep their stock price high. It's technically "legal" under SOX... until they run out of cash.
                        <br><br>
                        By my math, they bounce a check next Tuesday.
                        <br><br>
                        - H
                    </p>
                </div>
            </div>

            <div class="card bg-body-tertiary shadow-lg border-0 overflow-hidden mb-5">
                
                <div class="card-header bg-body-tertiary border-bottom border-secondary py-4">
                    <div class="row align-items-end">
                        <div class="col-md-8">
                            <h4 class="fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Arial', sans-serif;">Consolidated Balance Sheet (Restated)</h4>
                            <div class="text-body-secondary small text-uppercase letter-spacing-1">Omni-Global Media Corp. (FY 2017)</div>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <div class="border border-2 border-danger text-danger px-3 py-1 d-inline-block fw-bold text-uppercase" 
                                 style="font-family: 'Courier New', monospace; transform: rotate(-5deg); font-size: 0.9rem;">
                                INTERNAL FAMILY BRIEFING<br>"PLAIN ENGLISH" VERSION
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0" style="font-family: 'Courier New', monospace;">
                            <thead class="border-bottom border-secondary">
                                <tr>
                                    <th class="p-3 bg-body-secondary text-body-emphasis">Line Item</th>
                                    <th class="p-3 text-end bg-body-secondary text-body-emphasis">What They Claim</th>
                                    <th class="p-3 text-end text-danger border-start border-danger border-2 bg-danger-subtle">The Truth</th>
                                    <th class="p-3 text-danger border-start border-danger border-2 bg-danger-subtle" style="width: 300px;">Holly's Translation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-3 fw-bold text-body-emphasis">Cash on Hand</td>
                                    <td class="p-3 text-end text-body-secondary">$45,000,000</td>
                                    <td class="p-3 text-end text-danger border-start border-danger border-2 fw-bold">$12,000,000</td>
                                    <td class="p-3 small text-danger fst-italic border-start border-danger border-2">
                                        They can't touch most of this cash. It's locked in escrow accounts for lawsuits they are losing.
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="p-3 fw-bold text-body-emphasis">
                                        Projected Revenue<br>
                                        <span class="small fw-normal text-body-secondary">Syndication Deals (2018-2028)</span>
                                    </td>
                                    <td class="p-3 text-end fw-bold text-body-secondary">$350,000,000</td>
                                    <td class="p-3 text-end fw-bold text-danger border-start border-danger border-2">$0</td>
                                    <td class="p-3 small text-danger fw-bold border-start border-danger border-2">
                                        FAKE MONEY. They are counting profits from TV shows they haven't even filmed yet. 
                                        <span class="d-block mt-2 fst-italic text-body-emphasis">(Note: They are a MUSIC company. They don't even have a TV division.)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-3 fw-bold text-body-emphasis">Global Headquarters</td>
                                    <td class="p-3 text-end text-body-secondary">$120,000,000</td>
                                    <td class="p-3 text-end text-danger border-start border-danger border-2 fw-bold">$0</td>
                                    <td class="p-3 small text-danger fst-italic border-start border-danger border-2">
                                        <strong>They don't own the building.</strong> They rent it from Pacific Rim Properties. They just paid for the sign on the roof. If they miss rent next month, they get evicted.
                                    </td>
                                </tr>
                                
                                <tr class="table-dark border-top border-secondary border-3">
                                    <td class="p-3 fw-bold h5 mb-0">TOTAL REAL ASSETS</td>
                                    <td class="p-3 text-end fw-bold h5 mb-0">$515,000,000</td>
                                    <td class="p-3 text-end fw-bold h5 mb-0 text-danger border-start border-danger border-2">$12,000,000</td>
                                    <td class="p-3 border-start border-danger border-2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <div class="position-relative mt-5">
        <div class="text-center mb-5">
            <h2 class="h4 text-body-emphasis text-uppercase fw-bold border-bottom border-secondary d-inline-block pb-2">
                <i class="fa-solid fa-gavel me-2 text-warning"></i>The Triple Tap
            </h2>
            <p class="text-body-secondary small mt-2 mx-auto" style="max-width: 600px;">
                Holly knew a lawsuit would take years. So she called the agencies that don't need a warrant to freeze your assets. She submitted three forms at 5:01 PM.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Times New Roman', serif;">
                    <div class="card-header bg-white border-bottom border-2 border-dark py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-building-columns fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">Securities & Exchange Commission</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM TCR</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">B. Subject of Complaint</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Entity:</span> Omni-Global Media Corp.
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Allegation:</span> <span class="text-danger">Material Misstatement of Financials (Ponzi Scheme)</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small" style="min-height: 80px;">
                            <p class="mb-0"><strong>Details:</strong> Registrant is using "OGM Capital Partners IV" (SPV) to conceal $400M in toxic debt from shareholders. Insolvency imminent.</p>
                        </div>
                        
                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-danger text-danger p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace;">
                                 RECEIVED<br>SEC ENFORCEMENT
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Helvetica', sans-serif;">
                    <div class="card-header bg-white border-bottom border-2 border-dark py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-scale-balanced fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">Dept of the Treasury - IRS</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM 3949-A</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">1. Taxpayer Information</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Name:</span> Omni-Global Media Corp.
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Violation:</span> <span class="text-danger">False Documents / Failure to Pay Tax</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small" style="min-height: 80px;">
                            <p class="mb-0"><strong>Comments:</strong> Taxpayer has claimed depreciation on assets (Real Estate) they do not legally own. See Lease Agreement "Exhibit B."</p>
                        </div>

                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-primary text-primary p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace;">
                                 IRS-CI<br>REFERRAL ACTIVE
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Courier New', monospace;">
                    <div class="card-header bg-white border-bottom border-2 border-dark py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-envelopes-bulk fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">U.S. Postal Inspection Service</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM 8165</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">Nature of Complaint</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Type:</span> 18 U.S.C. § 1341 (Mail Fraud)
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Method:</span> <span class="text-danger">USPS First Class Mail</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small" style="min-height: 80px;">
                            <p class="mb-0"><strong>Narrative:</strong> Subject mailed a Prospectus for "OGM Capital" to my residence. The document contains proven material lies. Using the US Mail to execute a swindle is a federal felony.</p>
                        </div>

                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-dark text-dark p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace; border-style: double !important;">
                                 USPIS<br>CASE OPENED
                             </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report', 'label' => 'UCC Search Report'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-smoking-gun', 'label' => 'The Smoking Gun']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>