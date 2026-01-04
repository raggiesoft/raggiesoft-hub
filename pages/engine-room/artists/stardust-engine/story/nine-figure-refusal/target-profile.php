<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile.php
// The Enemy's Playbook.
// UPDATED: Clarified the "Algorithmic Estimate" logic (How Frost "knows" the financials).

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
                            The <strong>Omni-Scout™ Algorithm</strong> scraped public metadata from streaming platforms (Spotify, Apple Music) and global tour manifests.
                        </p>
                        <p class="mb-0">
                            <strong>The Anomaly:</strong> The target shows 30 years of catalog activity with <span class="text-danger fw-bold">zero visible "Label Share" deductions</span>. The algorithm mistakenly assumes the Artist retains 100% of Net Revenue.
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
                    <div class="alert alert-light border border-warning small shadow-sm text-dark">
                        <strong>Hypothesis:</strong> "If they show up in a rented limo, we offer $300M. If they show up in a taxi, we offer $150M. The algorithm doesn't know how to read shoes."
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h5 text-uppercase border-bottom border-primary pb-2 mb-4 fw-bold">
                    <i class="fa-solid fa-crosshairs me-2"></i>Strategic IP Focus
                </h2>
                <div class="card-bg-adaptive bg-white p-4 border border-primary border-opacity-50 shadow-sm">
                    <div class="row">
                        <div class="col-md-3 text-center border-end border-secondary border-opacity-25">
                            <i class="fa-duotone fa-compact-disc fa-4x text-secondary mb-3"></i>
                            <h5 class="fw-bold text-primary">Escape Velocity</h5>
                            <small class="text-muted">(aka "Ad Astra")</small>
                            <div class="mt-2 badge bg-secondary">1995 Master</div>
                        </div>
                        <div class="col-md-9 ps-md-4">
                            <h6 class="fw-bold text-uppercase text-danger mb-2">The "Efficiency" Opportunity</h6>
                            
                            <div class="row small text-body-secondary mb-3 g-2">
                                <div class="col-md-4">
                                    <div class="p-2 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                                        <strong>Revenue (Actual):</strong><br>
                                        <span class="text-muted">Sources: SoundScan / Streaming API</span><br>
                                        <span class="text-danger fw-bold">LOW Volume</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-2 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                                        <strong>Cost (Inferred):</strong><br>
                                        <span class="text-muted">Source: Sonic Heuristic Analysis</span><br>
                                        <span class="text-danger fw-bold">HIGH Production Value*</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-2 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                                        <strong>Result (ROI):</strong><br>
                                        <span class="text-muted">Commercial Viability</span><br>
                                        <span class="text-danger fw-bold">NEGATIVE (Critical)</span>
                                    </div>
                                </div>
                                <div class="col-12 mt-1">
                                    <small class="fst-italic opacity-75">*Note: Algorithm assumes standard studio rental rates ($200/hr) for a 15-minute complex arrangement. It assumes this asset is a "Sunk Cost" drain on the LLC.</small>
                                </div>
                            </div>
                            
                            <div class="p-3 bg-body-secondary border-start border-4 border-success">
                                <h6 class="fw-bold text-success small text-uppercase mb-1">Proposed Action Plan (Slide 14):</h6>
                                <ul class="list-unstyled small mb-0 font-monospace text-body-secondary">
                                    <li>1. <strong>Isolate Vocals:</strong> Extract the female vocal hook (High clarity).</li>
                                    <li>2. <strong>Discard Instrumental:</strong> Delete the 9-minute guitar/synth solo (Non-commercial).</li>
                                    <li>3. <strong>Remix:</strong> Re-package as a 3:30 Radio Edit.</li>
                                    <li>4. <strong>License:</strong> Sell "Rocket" samples to Automotive/Tech sectors.</li>
                                </ul>
                            </div>
                            <p class="mt-2 mb-0 small fst-italic text-muted text-end">
                                "We strip the parts to build something that actually sells." — J. Frost
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="h5 text-uppercase border-bottom border-danger pb-2 mb-4 fw-bold text-danger">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Target Profile: The Board
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
                                    Public records show zero debt. Frost believes she is a "Paper Tiger" hiding insolvency behind creative accounting.
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-body-emphasis">Ryan O'Connell</td>
                                <td>Founder / Creative</td>
                                <td>
                                    <span class="badge bg-secondary mb-1">THE WILDCARD</span><br>
                                    Wheelchair user. Likely risk-averse due to medical costs. <strong>Primary Target for Lowball Offer.</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-body-emphasis">Tyler & Evan Wright</td>
                                <td>The "Muscle"</td>
                                <td>
                                    <span class="badge bg-success mb-1">THE WEAK LINK</span><br>
                                    Likely susceptible to a "lump sum" buyout to escape the grind.
                                </td>
                            </tr>
                            <tr class="bg-body-tertiary">
                                <td class="fw-bold text-body-emphasis text-opacity-50">Cassidy O'Connell</td>
                                <td>Operations / Member</td>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-50 text-body-tertiary mb-1">IRRELEVANT</span><br>
                                    <span class="fst-italic opacity-75">"Just the singer."</span> No business footprint. Likely trails the brothers' lead. <strong>Strategy: Ignore.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
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