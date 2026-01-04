<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile.php
// The Enemy's Playbook.
// UPDATED: Added Cassidy O'Connell (The "Invisible" Board Member).

$pageTitle = "Confidential Brief: Project GOLDEN GOOSE - Omni-Global";
?>

<style>
    /* OMNI-GLOBAL THEME: Sterile, Corporate */
    .omni-doc {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background-color: #f8f9fa; 
        color: #333;
        border-top: 5px solid #0d6efd; 
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .omni-header {
        border-bottom: 2px solid #ccc;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .watermark {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: clamp(4rem, 10vw, 8rem);
        color: rgba(0,0,0,0.05);
        font-weight: bold;
        text-transform: uppercase;
        z-index: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    /* DARK MODE OVERRIDES */
    [data-bs-theme="dark"] .omni-doc {
        background-color: #0b0c10;
        color: #e0e0e0;
        border-top-color: #0d6efd;
    }
    [data-bs-theme="dark"] .omni-header { border-bottom-color: #333; }
    [data-bs-theme="dark"] .watermark { color: rgba(255, 255, 255, 0.03); }
    /* Force card backgrounds to dark in dark mode */
    [data-bs-theme="dark"] .card-bg-adaptive { background-color: #15171e !important; border-color: #333 !important; }
</style>

<div class="omni-doc min-vh-100 position-relative">
    
    <div class="watermark">CONFIDENTIAL</div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        
        <div class="row align-items-end omni-header">
            <div class="col-md-8">
                <h1 class="h3 fw-bold text-uppercase mb-0" style="color: #0d6efd; letter-spacing: -0.5px;">Omni-Global Media Corp.</h1>
                <small class="text-body-secondary">Mergers & Acquisitions Division // North America</small>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="badge bg-danger text-uppercase px-3 py-2">Internal Use Only</div>
                <div class="small font-monospace mt-2 text-body-secondary">ID: M&A-2018-ERR-001</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="h5 text-uppercase border-bottom border-primary pb-2 mb-4 fw-bold">Automated Valuation Report</h2>
                <div class="card-bg-adaptive bg-white p-4 border shadow-sm rounded-0">
                    
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-4 fw-bold text-body-secondary text-uppercase">Algorithmic Output:</div>
                        <div class="col-md-8">
                            <span class="display-6 fw-bold text-success">$505,400,000</span>
                            <span class="badge bg-warning text-dark ms-2 align-middle">FLAGGED FOR REVIEW</span>
                        </div>
                    </div>

                    <div class="alert alert-secondary border border-secondary small">
                        <h6 class="fw-bold text-uppercase mb-2"><i class="fa-solid fa-robot me-2 text-primary"></i>Methodology (The "Black Box"):</h6>
                        <p class="mb-2">
                            The <strong>Omni-Scout™ Algorithm</strong> scraped public metadata from streaming platforms and global tour manifests for the entity "The Stardust Engine."
                        </p>
                        <p class="mb-0">
                            <strong>The Anomaly:</strong> The target shows 30 years of catalog activity with <span class="text-danger fw-bold">zero visible "Label Share" deductions</span>. The algorithm cannot find a record label taking a cut. It mistakenly assumes the Artist retains 100% of Net Revenue with 0% Overhead.
                        </p>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush small font-monospace">
                                <li class="list-group-item bg-transparent d-flex justify-content-between text-body">
                                    <span>Masters Ownership:</span>
                                    <strong>100% (Confirmed)</strong>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between text-body">
                                    <span>Publishing Rights:</span>
                                    <strong>100% (Confirmed)</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush small font-monospace">
                                <li class="list-group-item bg-transparent d-flex justify-content-between text-body">
                                    <span>External Debt:</span>
                                    <strong class="text-danger">NOT FOUND</strong>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between text-body">
                                    <span>Implied Margin:</span>
                                    <strong class="text-success">98.2% (Unlikely)</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-3 p-3 bg-body-secondary border-start border-4 border-primary">
                        <p class="mb-0 small fst-italic text-body-secondary">
                            <strong>Analyst Note:</strong> "The machine is hallucinating. No indie band has $500M in equity. They must be hiding debt in a shell company, or the metadata is broken. I recommend a manual adjustment before the offer."
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-warning-subtle border border-warning p-3 h-100 position-relative">
                    <div class="position-absolute top-0 end-0 p-2 opacity-25">
                        <i class="fa-solid fa-user-tie fa-4x text-warning-emphasis"></i>
                    </div>
                    
                    <h6 class="text-uppercase fw-bold text-warning-emphasis mb-3 border-bottom border-warning pb-2">
                        VP Override (Pending)
                    </h6>
                    
                    <p class="small text-body-secondary mb-2">
                        <strong>Jameson Frost</strong> has flagged the $500M figure as "Absurd."
                    </p>
                    <p class="small text-body-secondary mb-3">
                        He is currently waiting by the window to conduct a "Visual Audit" of the arriving party to determine their <em>actual</em> socioeconomic status.
                    </p>
                    
                    <div class="alert alert-light border border-warning small shadow-sm text-dark">
                        <strong>Hypothesis:</strong> "If they show up in a rented limo, we offer $300M. If they show up in a taxi, we offer $150M. The algorithm doesn't know how to read shoes."
                    </div>

                    <p class="small text-danger fw-bold mt-3 text-uppercase">
                        <i class="fa-solid fa-clock me-2"></i>Status: Waiting for Arrival...
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="h5 text-uppercase border-bottom border-danger pb-2 mb-4 fw-bold text-danger">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Target Profile: The Board (5 Seats)
                </h2>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle border-secondary">
                        <thead class="bg-body-secondary">
                            <tr class="text-uppercase small font-monospace text-body-emphasis">
                                <th width="20%">Stakeholder</th>
                                <th width="20%">Role</th>
                                <th>Psychological Profile (Preliminary)</th>
                            </tr>
                        </thead>
                        <tbody class="text-body-secondary">
                            <tr>
                                <td class="fw-bold text-body-emphasis">Holly O'Connell</td>
                                <td>CEO / Legal</td>
                                <td>
                                    <span class="badge bg-danger mb-1">THE OBSTACLE</span><br>
                                    Public records show zero debt. This implies she is either a genius or hiding insolvency. Frost believes she is a "Paper Tiger."
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-body-emphasis">Ryan O'Connell</td>
                                <td>Founder / Creative</td>
                                <td>
                                    <span class="badge bg-secondary mb-1">THE WILDCARD</span><br>
                                    Wheelchair user. Likely risk-averse due to projected medical costs. <strong>Primary Target for Lowball Offer.</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-body-emphasis">Tyler & Evan Wright</td>
                                <td>The "Muscle"</td>
                                <td>
                                    <span class="badge bg-success mb-1">THE WEAK LINK</span><br>
                                    University records (CPI) suggest engineering backgrounds, but they function as roadies. Likely susceptible to a "lump sum" buyout to escape the grind.
                                </td>
                            </tr>
                            <tr class="bg-body-tertiary">
                                <td class="fw-bold text-body-emphasis text-opacity-50">Cassidy O'Connell</td>
                                <td>Operations / Member</td>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-50 text-body-tertiary mb-1">IRRELEVANT</span><br>
                                    <span class="fst-italic opacity-75">"Just the sister."</span> No significant business footprint. Likely trails the brothers' lead. <strong>Strategy: Ignore.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-2 text-end">
                    <small class="text-danger fst-italic fw-bold">*Note: VP Frost advises focusing negotiations exclusively on male board members.</small>
                </div>
            </div>
        </div>

        <?php
            // UPDATED NAVIGATION LOGIC
            $nav = [
                'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-approach', 'label' => 'The Approach'],
                'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
                'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report', 'label' => 'UCC Search Report']
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
        ?>

    </div>
    
    <div class="border-top border-secondary py-3 text-center small text-body-secondary font-monospace mt-5">
        Generated: August 30, 2018 // Omni-Global Secure Server // Scout-AI v4.2
    </div>

</div>