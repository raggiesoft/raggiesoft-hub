<?php
// pages/engine-room/history/nine-figure-refusal/ucc-search-report.php
// EVIDENCE ITEM #12-C: The "Impossible" UCC Search
// Context: Proof of zero debt.
// UPDATED: WCAG Compliance & Dark Mode Support

$pageTitle = "UCC Search Report: Engine Room Records - Evidence #12-C";
?>

<style>
    /* STATE DOCUMENT THEME - ADAPTIVE */
    .state-doc {
        font-family: 'Courier New', monospace;
        background-color: var(--bs-body-tertiary); /* Adaptive Paper */
        color: var(--bs-body-color);
        border: 4px double var(--bs-border-color); /* Official "Double Border" look, adapted */
        box-shadow: var(--bs-box-shadow);
        position: relative;
        overflow: hidden;
    }
    .state-header {
        text-align: center;
        border-bottom: 2px solid var(--bs-border-color);
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }
    .watermark-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: 8rem;
        color: var(--bs-secondary);
        opacity: 0.05; /* Subtle in both modes */
        font-weight: bold;
        text-transform: uppercase;
        pointer-events: none;
        white-space: nowrap;
        z-index: 0;
    }
    
    /* Ensure text sits above watermark */
    .doc-content {
        position: relative;
        z-index: 1;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="state-doc p-5">
                <div class="watermark-text">NO RECORDS FOUND</div>
                
                <div class="doc-content">
                    <div class="state-header">
                        <h2 class="h4 fw-bold text-uppercase mb-1">State Corporation Commission</h2>
                        <p class="small text-uppercase letter-spacing-2 mb-0">Uniform Commercial Code (UCC) Search Division</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Search Reference:</p>
                            <p class="font-monospace">REQ-2018-09-12-0044</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Date Processed:</p>
                            <p class="font-monospace">September 12, 2018</p>
                        </div>
                    </div>

                    <div class="border p-3 mb-4 bg-body border-secondary-subtle">
                        <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Entity Name:</p>
                        <p class="fw-bold fs-5 mb-0">ENGINE ROOM RECORDS, LLC</p>
                        <p class="small font-monospace mb-0">ID: S554920-9</p>
                    </div>

                    <h5 class="fw-bold border-bottom border-secondary pb-2 mb-3">Search Results: Debtor Index</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless font-monospace small mb-0" style="color: inherit;">
                            <thead class="border-bottom border-secondary">
                                <tr>
                                    <th scope="col" class="text-uppercase">Filing Type</th>
                                    <th scope="col" class="text-uppercase">Filing Number</th>
                                    <th scope="col" class="text-uppercase">Date</th>
                                    <th scope="col" class="text-uppercase">Secured Party</th>
                                    <th scope="col" class="text-uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center py-4 fst-italic text-body-secondary">
                                        *** NO RECORDS FOUND ***<br>
                                        The search of the records of the Commission reflects no active UCC financing statements.<br>
                                        This entity has zero registered secured debt.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-5 pt-4 border-top border-secondary text-center small text-body-secondary">
                        <p class="mb-0">CERTIFIED COPY - COMMONWEALTH OF VIRGINIA</p>
                        <p class="font-monospace">End of Report</p>
                    </div>
                </div>

                <div class="position-absolute bg-body shadow p-3 border border-danger border-2" 
                     style="top: 150px; right: -20px; width: 220px; transform: rotate(2deg); font-family: 'Kalam', cursive; z-index: 2;">
                    <strong class="text-danger text-uppercase border-bottom border-danger-subtle pb-1 mb-2 d-block">Analyst Note:</strong>
                    <p class="small mb-2 text-body-emphasis">
                        "This is weird. No bank loans? No equipment leases? No tour bus financing?
                    </p>
                    <p class="small mb-0 text-body-emphasis">
                        <strong>Conclusion:</strong> They are either a shell company with no assets, OR they pay cash for everything. <br>
                        <span class="text-body-secondary fst-italic">(Frost says assume shell company)."</span>
                    </p>
                </div>

            </div>

        </div>
    </div>

    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/target-profile" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/the-bus-memo" class="btn btn-outline-secondary rounded-pill">
                Next Evidence<i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>