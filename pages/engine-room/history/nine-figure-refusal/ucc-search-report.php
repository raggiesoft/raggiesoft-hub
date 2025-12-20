<?php
// pages/engine-room/history/nine-figure-refusal/ucc-search-report.php
// EVIDENCE ITEM #12-C: The "Impossible" UCC Search
// Context: Proof of zero debt.
// UPDATED: Removed State Seal image. Updated Navigation flow.

$pageTitle = "UCC Search Report: Engine Room Records - Evidence #12-C";
?>

<style>
    /* STATE DOCUMENT THEME - TEXT BASED ONLY */
    .state-doc {
        font-family: 'Courier New', monospace;
        background-color: #fff;
        color: #000;
        border: 4px double #444; /* Heavy double border usually looks "official" */
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
    }
    .state-header {
        text-align: center;
        border-bottom: 2px solid #000;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }
    .watermark-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: 8rem;
        color: rgba(0,0,0,0.04);
        font-weight: bold;
        text-transform: uppercase;
        pointer-events: none;
        white-space: nowrap;
        font-family: sans-serif;
    }
    .search-row {
        border-bottom: 1px dotted #999;
        padding: 5px 0;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-secondary text-white rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-glow">
                <i class="fa-duotone fa-file-certificate me-2"></i>Due Diligence Item #12-C
            </span>
            <h1 class="display-4 fw-bold text-white mb-2" style="font-family: 'Impact', sans-serif;">
                THE "CLEAN" SHEET
            </h1>
            <p class="lead text-muted font-monospace">
                The document that broke the algorithm. A 30-year-old media company with absolutely zero debt.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="state-doc p-5">
                
                <div class="watermark-text">OFFICIAL RECORD</div>

                <div class="state-header">
                    <h5 class="fw-bold text-uppercase mb-1">Commonwealth of Virginia</h5>
                    <h4 class="fw-bold text-uppercase">State Corporation Commission</h4>
                    <p class="small mb-0">Office of the Clerk | Uniform Commercial Code Division</p>
                </div>

                <div class="row mb-4 small">
                    <div class="col-6">
                        <strong>Search ID:</strong> 2018-09-01-ERR-REQ<br>
                        <strong>Date:</strong> September 1, 2018<br>
                        <strong>Time:</strong> 08:42:15 EST
                    </div>
                    <div class="col-6 text-end">
                        <strong>Requestor:</strong> Omni-Global Media Corp.<br>
                        <strong>Ref:</strong> M&A_DUE_DILIGENCE
                    </div>
                </div>

                <div class="bg-light border p-3 mb-4">
                    <p class="mb-1"><strong>Debtor Name Search:</strong></p>
                    <h5 class="fw-bold mb-0">ENGINE ROOM RECORDS, LLC</h5>
                </div>

                <table class="table table-bordered border-dark small text-center mb-4">
                    <thead class="bg-light">
                        <tr>
                            <th>Filing No.</th>
                            <th>Date</th>
                            <th>Lapse Date</th>
                            <th>Secured Party</th>
                            <th>Collateral</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle" style="height: 100px;">
                            <td colspan="6" class="text-muted fst-italic py-4">
                                *** NO ACTIVE LIENS FOUND ***<br>
                                *** NO FINANCING STATEMENTS ON FILE ***
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-5 pt-4 border-top border-dark">
                    <div class="d-flex align-items-center">
                        <div class="display-1 text-success me-4 opacity-50">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                        <div>
                            <p class="small mb-1">I certify that the foregoing is a true and complete search of the records of the State Corporation Commission as of the date and time shown.</p>
                            <p class="fw-bold mb-0 font-serif">Joel H. Peck, Clerk</p>
                            <p class="small text-muted">State Corporation Commission</p>
                        </div>
                    </div>
                </div>

                <div class="position-absolute d-none d-md-block shadow-lg p-3 bg-warning text-dark font-monospace" 
                     style="top: 150px; right: -20px; width: 220px; transform: rotate(2deg); font-family: 'Kalam', cursive;">
                    <strong class="text-danger text-uppercase border-bottom border-dark pb-1 mb-2 d-block">Analyst Note:</strong>
                    "This is weird. No bank loans? No equipment leases? No tour bus financing?<br><br>
                    <strong>Conclusion:</strong> They are either a shell company with no assets, OR they pay cash for everything. <br>(Frost says assume shell company)."
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
            <a href="/engine-room/history/nine-figure-refusal/the-bus-memo" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Bus Memo <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>