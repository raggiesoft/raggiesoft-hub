<?php
// pages/engine-room/history/nine-figure-refusal/liquidation-auction.php
// The Yard Sale.
// Context: Selling off the "Ego" to pay the "Unsecured Creditors."
// Narrative Payoff: Showing the physical dismantling of the corporate culture.

$pageTitle = "Asset Disposal: Omni-Global Liquidation - Case 18-11492";
?>

<style>
    /* AUCTION THEME */
    .auction-tag {
        font-family: 'Courier New', monospace;
        background-color: #f8f9fa;
        border: 2px dashed #dc3545;
        color: #dc3545;
        transform: rotate(-2deg);
        display: inline-block;
        padding: 0.25rem 0.5rem;
        font-weight: bold;
        font-size: 0.9rem;
    }
    
    .sold-stamp {
        font-family: 'Black Ops One', cursive;
        text-transform: uppercase;
        color: #198754; /* Success Green */
        border: 3px solid #198754;
        padding: 5px 15px;
        transform: rotate(-10deg);
        display: inline-block;
        opacity: 0.8;
        font-size: 1.5rem;
        mask-image: url('https://assets.raggiesoft.com/common/images/grunge-texture.png');
        -webkit-mask-image: url('https://assets.raggiesoft.com/common/images/grunge-texture.png');
    }

    .lot-card {
        border-left: 4px solid #6c757d;
        transition: all 0.2s ease;
    }
    .lot-card:hover {
        background-color: rgba(255, 255, 255, 0.05);
        border-left-color: #dc3545;
    }
    
    /* Dark Mode Adjustments */
    [data-bs-theme="dark"] .auction-tag {
        background-color: #2c2c2c;
        border-color: #ff6b6b;
        color: #ff6b6b;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-secondary text-white rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1">
                <i class="fa-duotone fa-gavel me-2"></i>U.S. Bankruptcy Court (Delaware)
            </span>
            <h1 class="display-4 fw-bold text-uppercase mb-2" style="font-family: 'Impact', sans-serif;">
                Asset Liquidation
            </h1>
            <p class="lead text-muted font-monospace">
                Case No. 18-11492 (OGMCQ) // Disposition of Non-Essential Assets
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="alert alert-dark border-secondary d-flex align-items-center mb-5 shadow-sm">
                <i class="fa-duotone fa-dumpster-fire fs-2 me-4 text-danger"></i>
                <div class="small text-muted">
                    <strong>Financial Note:</strong> While Aethelgard Holdings acquired the <em>Secured Debt</em> (controlling the copyrights), the <em>Physical Assets</em> (furniture, art, vehicles) were auctioned to satisfy unsecured creditors (e.g., the catering company Frost never paid).
                </div>
            </div>

            <div class="card bg-dark border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 001</div>
                            <i class="fa-duotone fa-table-picnic fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-white text-uppercase mb-1">Executive Boardroom Table</h5>
                            <p class="text-white-50 small mb-2">
                                <strong>Spec:</strong> 24-Foot Honduran Mahogany. Custom inlay.
                                <br><strong>Providence:</strong> The surface where the $150M offer was rejected.
                            </p>
                            <p class="text-danger small fst-italic mb-0">
                                <i class="fa-solid fa-triangle-exclamation me-1"></i>Note: Contains minor scratch marks near "Seat 1" (Caused by VP Frost's watch during negotiation).
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp">SOLD</div>
                            <div class="small font-monospace text-success mt-2">$4,200.00</div>
                            <div class="tiny text-muted">Buyer: CPI Student Union</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-dark border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 044</div>
                            <i class="fa-duotone fa-chair-office fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-white text-uppercase mb-1">Herman Miller Aeron (Size C)</h5>
                            <p class="text-white-50 small mb-2">
                                <strong>Providence:</strong> Office of VP Jameson Frost (Penthouse).
                            </p>
                            <p class="text-white-50 small mb-0">
                                Fully adjustable lumbar support. Leather headrest upgrade.
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp" style="border-color: #dc3545; color: #dc3545; transform: rotate(5deg);">RECYCLED</div>
                            <div class="small font-monospace text-muted mt-2">Value: $0.00</div>
                            <div class="tiny text-muted">Reason: Biohazard (Coffee Stain)</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-dark border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 102</div>
                            <i class="fa-duotone fa-image-portrait fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-white text-uppercase mb-1">Corporate Art Collection (Bulk)</h5>
                            <p class="text-white-50 small mb-2">
                                <strong>Items:</strong> 12x "Motivational Synergy" Posters (Framed). 1x Oil Painting of Chairman Vane (4ft x 6ft).
                            </p>
                            <p class="text-white-50 small mb-0">
                                "Generic abstract shapes meant to inspire productivity."
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp">DONATED</div>
                            <div class="small font-monospace text-success mt-2">Tax Write-Off</div>
                            <div class="tiny text-muted">Recipient: Second Chance Community Thrift</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-black border-success shadow-lg mb-4 lot-card position-relative overflow-hidden">
                <div class="position-absolute top-0 end-0 p-2">
                    <i class="fa-duotone fa-lock-keyhole fa-5x text-success opacity-10"></i>
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2 text-success border-success">LOT 200</div>
                            <i class="fa-duotone fa-compact-disc fa-3x text-success opacity-75"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-success text-uppercase mb-1">The "Sun-Ray" Catalog</h5>
                            <p class="text-white-50 small mb-2">
                                <strong>Description:</strong> 5,000+ Master Recordings. The core IP of the Debtor.
                            </p>
                            <p class="text-white small mb-0 fst-italic">
                                "The Crown Jewels."
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="badge bg-danger text-uppercase px-3 py-2 shadow-sm mb-2" style="font-size: 0.9rem;">
                                WITHDRAWN
                            </div>
                            <p class="tiny text-white-50 mb-0 line-height-sm">
                                Acquired via Credit Bid<br>
                                <strong>Aethelgard Holdings, LLC</strong>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-success bg-opacity-10 border-0 mt-3 mb-0 p-2 small font-monospace">
                        <i class="fa-solid fa-check me-2"></i><strong>Outcome:</strong> Assets transferred to the "Engine Room Archives" for immediate repatriation to original artists.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Bus Ride <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>