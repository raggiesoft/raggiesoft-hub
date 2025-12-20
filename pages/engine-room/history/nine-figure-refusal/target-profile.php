<?php
// pages/engine-room/history/nine-figure-refusal/target-profile.php
// The Enemy's Playbook.
// UPDATED: Navigational flow updated to point to UCC Search.

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
    [data-bs-theme="dark"] .bg-white { background-color: #15171e !important; }
    [data-bs-theme="dark"] .bg-light { background-color: #1c2029 !important; }
    [data-bs-theme="dark"] .table { --bs-table-bg: transparent; --bs-table-color: #e0e0e0; border-color: #333; }
</style>

<div class="omni-doc min-vh-100 position-relative">
    
    <div class="watermark">CONFIDENTIAL</div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        
        <div class="row align-items-end omni-header">
            <div class="col-md-8">
                <h1 class="h3 fw-bold text-uppercase mb-0" style="color: #0d6efd; letter-spacing: -0.5px;">Omni-Global Media Corp.</h1>
                <small class="text-muted">Mergers & Acquisitions Division // North America</small>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="badge bg-danger text-uppercase px-3 py-2">Internal Use Only</div>
                <div class="small font-monospace mt-2 text-muted">ID: M&A-2018-ERR-001</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="h5 text-uppercase border-bottom border-primary pb-2 mb-4 fw-bold">Automated Valuation Report</h2>
                <div class="bg-white p-4 border shadow-sm rounded-0">
                    
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-4 fw-bold text-secondary text-uppercase">Algorithmic Output:</div>
                        <div class="col-md-8">
                            <span class="display-6 fw-bold text-success">$505,400,000</span>
                            <span class="badge bg-warning text-dark ms-2 align-middle">FLAGGED FOR REVIEW</span>
                        </div>
                    </div>

                    <div class="alert alert-light border border-secondary small">
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
                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                    <span>Masters Ownership:</span>
                                    <strong>100% (Confirmed)</strong>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                    <span>Publishing Rights:</span>
                                    <strong>100% (Confirmed)</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush small font-monospace">
                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                    <span>External Debt:</span>
                                    <strong class="text-danger">NOT FOUND</strong>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                    <span>Implied Margin:</span>
                                    <strong class="text-success">98.2% (Unlikely)</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-3 p-3 bg-light border-start border-4 border-primary">
                        <p class="mb-0 small fst-italic text-muted">
                            <strong>Analyst Note:</strong> "The machine is hallucinating. No indie band has $500M in equity. They must be hiding debt in a shell company, or the metadata is broken. I recommend a manual adjustment before the offer."
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-warning bg-opacity-10 border border-warning p-3 h-100 position-relative">
                    <div class="position-absolute top-0 end-0 p-2 opacity-25">
                        <i class="fa-solid fa-user-tie fa-4x text-warning"></i>
                    </div>
                    
                    <h6 class="text-uppercase fw-bold text-warning-emphasis mb-3 border-bottom border-warning pb-2">
                        VP Override (Pending)
                    </h6>
                    
                    <p class="small text-muted mb-2">
                        <strong>Jameson Frost</strong> has flagged the $500M figure as "Absurd."
                    </p>
                    <p class="small text-muted mb-3">
                        He is currently waiting by the window to conduct a "Visual Audit" of the arriving party to determine their <em>actual</em> socioeconomic status.
                    </p>
                    
                    <div class="alert alert-light border border-warning small shadow-sm">
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
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Target Profile: The Board
                </h2>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-light">
                            <tr class="text-uppercase small font-monospace">
                                <th width="20%">Stakeholder</th>
                                <th width="20%">Role</th>
                                <th>Psychological Profile (Preliminary)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Holly O'Connell</td>
                                <td>CEO / Legal</td>
                                <td>
                                    <span class="badge bg-danger mb-1">THE OBSTACLE</span><br>
                                    Public records show zero debt. This implies she is either a genius or hiding insolvency.
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Ryan O'Connell</td>
                                <td>Founder / Creative</td>
                                <td>
                                    <span class="badge bg-secondary mb-1">THE WILDCARD</span><br>
                                    Wheelchair user. Likely risk-averse due to medical costs.
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Tyler & Evan Wright</td>
                                <td>The "Muscle"</td>
                                <td>
                                    <span class="badge bg-success mb-1">THE WEAK LINK</span><br>
                                    University records (CPI) suggest engineering backgrounds, but they function as roadies. Likely susceptible to a "lump sum" buyout to escape the grind.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
            <div class="col-4">
                <button class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">
                    <i class="fa-solid fa-arrow-left me-2"></i>Previous
                </button>
            </div>
            <div class="col-4 text-center">
                <a href="/engine-room/history/nine-figure-refusal/overview" class="btn btn-outline-primary rounded-pill">
                    <i class="fa-duotone fa-list-tree me-2"></i>Overview
                </a>
            </div>
            <div class="col-4 text-end">
                <a href="/engine-room/history/nine-figure-refusal/ucc-search-report" class="btn btn-primary rounded-pill shadow-sm">
                    Next: The UCC Report <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

    </div>
    
    <div class="bg-light border-top py-3 text-center small text-muted font-monospace mt-5">
        Generated: August 30, 2018 // Omni-Global Secure Server // Scout-AI v4.2
    </div>

</div>