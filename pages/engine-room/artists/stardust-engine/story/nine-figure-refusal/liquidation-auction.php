<?php
// pages/engine-room/history/nine-figure-refusal/liquidation-auction.php
// The Yard Sale.
// Context: Selling off the "Ego" to pay the "Unsecured Creditors."
// UPDATED: Removed missing assets & Added 'prefers-reduced-motion' support.

$pageTitle = "Asset Disposal: Omni-Global Liquidation - Case 18-11492";
?>

<style>
    /* AUCTION THEME - Adaptive */
    .auction-tag {
        font-family: 'Courier New', monospace;
        background-color: var(--bs-body-bg);
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
        /* Missing grunge texture removed for stability and clarity */
    }

    /* Dark Mode Overrides for Stamp Visibility */
    [data-bs-theme="dark"] .auction-tag {
        color: #ff6b6b; /* Lighter Red */
        border-color: #ff6b6b;
        background-color: #2b3035;
    }
    [data-bs-theme="dark"] .sold-stamp {
        color: #75b798; /* Lighter Green */
        border-color: #75b798;
    }

    /* CARD INTERACTION STYLES */
    .lot-card {
        border-left: 4px solid #6c757d;
    }

    .lot-card:hover {
        /* Safe change: Color only */
        border-left-color: #dc3545;
    }

    /* ACCESSIBILITY: Only apply motion if the user hasn't requested reduced motion */
    @media (prefers-reduced-motion: no-preference) {
        .lot-card {
            transition: all 0.2s ease;
        }
        .lot-card:hover {
            transform: translateX(5px);
        }
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-secondary-subtle">
                <i class="fa-duotone fa-gavel me-2"></i>U.S. Bankruptcy Court (Delaware)
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis text-uppercase mb-2" style="font-family: 'Impact', sans-serif;">
                Asset Liquidation
            </h1>
            <p class="lead text-body-secondary font-monospace">
                Case No. 18-11492 (OGMCQ) // Disposition of Non-Essential Assets
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="alert alert-dark bg-body-tertiary border-secondary d-flex align-items-center mb-5 shadow-sm text-body-secondary">
                <i class="fa-duotone fa-dumpster-fire fs-2 me-4 text-danger"></i>
                <div class="small">
                    <strong>Financial Note:</strong> While Aethelgard Holdings acquired the <em>Secured Debt</em> (controlling the copyrights), the <em>Physical Assets</em> (furniture, art, vehicles) were auctioned to satisfy unsecured creditors (e.g., the catering company Frost never paid).
                </div>
            </div>

            <div class="card bg-body-tertiary border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 001</div>
                            <i class="fa-duotone fa-table-picnic fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-body-emphasis text-uppercase mb-1">Executive Boardroom Table</h5>
                            <p class="text-body-secondary small mb-2">
                                <strong>Spec:</strong> 24-Foot Honduran Mahogany. Custom inlay.
                                <br><strong>Providence:</strong> The surface where the $150M offer was rejected.
                            </p>
                            <p class="text-danger small fst-italic mb-0">
                                <i class="fa-solid fa-triangle-exclamation me-1"></i>Note: Contains minor scratch marks near "Seat 1" (Caused by VP Frost's watch during negotiation).
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp">SOLD</div>
                            <div class="small font-monospace text-success-emphasis mt-2">$4,200.00</div>
                            <div class="tiny text-body-secondary">Buyer: CPI Student Union</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-body-tertiary border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 044</div>
                            <i class="fa-duotone fa-chair-office fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-body-emphasis text-uppercase mb-1">Herman Miller Aeron (Size C)</h5>
                            <p class="text-body-secondary small mb-2">
                                <strong>Providence:</strong> Office of VP Jameson Frost (Penthouse).
                            </p>
                            <p class="text-body-secondary small mb-0">
                                Fully adjustable lumbar support. Leather headrest upgrade.
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp" style="border-color: #dc3545; color: #dc3545; transform: rotate(5deg);">RECYCLED</div>
                            <div class="small font-monospace text-body-secondary mt-2">Value: $0.00</div>
                            <div class="tiny text-body-secondary">Reason: Biohazard (Coffee Stain)</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-body-tertiary border-secondary shadow-lg mb-4 lot-card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="auction-tag mb-2">LOT 102</div>
                            <i class="fa-duotone fa-image-portrait fa-3x text-secondary opacity-50"></i>
                        </div>
                        <div class="col-md-7">
                            <h5 class="fw-bold text-body-emphasis text-uppercase mb-1">Corporate Art Collection (Bulk)</h5>
                            <p class="text-body-secondary small mb-2">
                                <strong>Items:</strong> 12x "Motivational Synergy" Posters (Framed). 1x Oil Painting of Chairman Vane (4ft x 6ft).
                            </p>
                            <p class="text-body-secondary small mb-0">
                                "Generic abstract shapes meant to inspire productivity."
                            </p>
                        </div>
                        <div class="col-md-3 text-center position-relative">
                            <div class="sold-stamp">DONATED</div>
                            <div class="small font-monospace text-success-emphasis mt-2">Tax Write-Off</div>
                            <div class="tiny text-body-secondary">Recipient: Second Chance Community Thrift</div>
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
                            <div class="auction-tag mb-2 text-success border-success bg-black">LOT 200</div>
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
                    
                    <div class="alert alert-success bg-opacity-10 border-0 mt-3 mb-0 p-2 small font-monospace text-light">
                        <i class="fa-solid fa-check me-2"></i><strong>Outcome:</strong> Assets transferred to the "Engine Room Archives" for immediate repatriation.
                        <br>
                        <span class="opacity-75 ms-4">>> Masters sold back to original artists for <strong>$1.00 USD</strong> (legal consideration).</span>
                        <br>
                        <span class="opacity-75 ms-4 text-warning">>> Exception: Disputed estates held in escrow pending mediation.</span>
                    </div>
                </div>
            </div>

            <?php
                $nav = [
                    'prev' => ['url' => '/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11', 'label' => 'Market Alert: Ch. 11'],
                    'overview' => ['url' => '/engine-room/history/nine-figure-refusal', 'label' => 'Overview'],
                    'next' => ['url' => '/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride', 'label' => 'The Bus Ride Article']
                ];
                include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>

</div>