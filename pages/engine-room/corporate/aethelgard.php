<?php
// pages/engine-room/corporate/aethelgard.php
// Entity Profile: Aethelgard Holdings
// Function: The "Catch and Release" Liquidation Firm.
// Context: "We strip the furniture to liberate the art."

$pageTitle = "Aethelgard Holdings - Strategic Liquidation";
?>

<style>
    /* AETHELGARD BRANDING: Cold, Industrial, Precise */
    .aethel-header {
        background: linear-gradient(135deg, #0f1012 0%, #2b3035 100%);
        border-bottom: 4px solid #dc3545;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    .aethel-logo {
        font-family: 'Cinzel', serif; /* Or standard serif */
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #fff;
    }

    /* THE PROTOCOL CARD */
    /* Light Mode Default */
    .protocol-card {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-left: 5px solid #dc3545; /* Red for "Emergency/Important" */
        position: relative;
    }
    
    /* Dark Mode Override */
    [data-bs-theme="dark"] .protocol-card {
        background-color: #1a1a1a;
        border-color: #444;
    }

    /* THE DOLLAR BILL VISUAL */
    .dollar-frame {
        border: 4px double #198754;
        padding: 10px;
        display: inline-block;
        background: #f0fff4;
        color: #198754;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        transform: rotate(-3deg);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .dollar-frame:hover {
        transform: rotate(0deg) scale(1.05);
    }
</style>

<div class="aethel-header text-center">
    <div class="container">
        <div class="mb-3">
            <i class="fa-duotone fa-gavel fa-4x text-danger opacity-75"></i>
        </div>
        <h1 class="display-4 aethel-logo mb-2">Aethelgard Holdings</h1>
        <p class="lead text-light text-uppercase font-monospace letter-spacing-1 opacity-75">
            Distressed Asset Acquisition & Strategic Liquidation
        </p>
        <span class="badge bg-danger text-uppercase px-3 py-2 mt-3">
            Wholly Owned Subsidiary of The O'Connell Family Revocable Trust
        </span>
    </div>
</div>

<div class="container py-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="fs-5 text-muted fst-italic">
                        "We do not acquire companies to run them. We acquire them to liberate the assets trapped inside."
                    </p>
                </blockquote>
                <figcaption class="blockquote-footer mt-2">
                    Internal Memo, <cite title="Source Title">The O'Connell Family, LLC</cite>
                </figcaption>
            </figure>
            <hr class="w-25 mx-auto border-danger opacity-100 my-4">
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-6">
            <div class="card h-100 bg-dark border-secondary shadow-lg">
                <div class="card-header bg-black border-bottom border-secondary text-uppercase fw-bold text-white-50">
                    <i class="fa-solid fa-industry me-2"></i>The Liquidation Engine
                </div>
                <div class="card-body">
                    <p class="text-white-50 small mb-4">
                        Aethelgard is self-sustaining. When we acquire a bankrupt media conglomerate, we immediately strip and sell the "hard assets" to recoup our capital.
                    </p>
                    
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-building text-secondary me-2"></i>Corporate Real Estate</span>
                            <span class="badge bg-success rounded-pill">LIQUIDATED</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-server text-secondary me-2"></i>Server Farms / IT</span>
                            <span class="badge bg-success rounded-pill">LIQUIDATED</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-briefcase text-secondary me-2"></i>Executive Perks</span>
                            <span class="badge bg-success rounded-pill">LIQUIDATED</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-file-contract text-secondary me-2"></i>"Legacy" Life Insurance</span>
                            <span class="badge bg-success rounded-pill">CASHED OUT</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 protocol-card shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle p-3 me-3">
                            <i class="fa-solid fa-hand-holding-heart fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0 text-danger text-uppercase">Protocol 92</h4>
                            <small class="text-secondary font-monospace">The Repatriation Initiative</small>
                        </div>
                    </div>
                    
                    <p class="card-text text-secondary">
                        <strong>Policy:</strong> Any intellectual property (Masters, Copyrights, Trademarks) acquired by Aethelgard that belongs to a living artist or active band is immediately flagged for <strong>Return</strong>.
                    </p>
                    <p class="card-text text-secondary">
                        We contact the original creators and offer to sell their complete catalog back to them. We do not retain royalties. We do not ask for a percentage. We return the work to its architect.
                    </p>

                    <div class="mt-4 text-center">
                        <div class="dollar-frame">
                            PRICE: $1.00 (USD)*
                        </div>
                        <p class="small text-muted mt-2 mb-0 fst-italic">
                            *Nominal fee required for legal "Consideration" to ensure a binding contract.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="alert alert-secondary border-start border-4 border-dark bg-body-tertiary p-4 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <i class="fa-duotone fa-fire-burner fa-3x text-warning mb-3 mb-md-0"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 class="fw-bold text-uppercase mb-2 text-body">Case Study: The Omni-Global Collapse (2018)</h5>
                        <p class="mb-2 text-body">
                            When Omni-Global Media collapsed, Aethelgard Holdings acquired the catalogs of 47 mid-tier bands who had been "rolled up" by the predator Jameson Frost.
                        </p>
                        <p class="mb-0 text-body">
                            Within 90 days, <strong>45 of those catalogs were returned to the artists for $1 each</strong>. (The remaining 2 were disputed by the artists' estates and were placed in a blind trust until the legal heirs could be determined).
                        </p>
                        <hr>
                        <p class="small mb-0 text-muted fst-italic">
                            "I swore if I ever had the power to break a lock, I wouldn't just use a key. I'd use a bolt cutter." — Holly O'Connell
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/oconnell-trust/structure" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Trust Structure
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-home me-2"></i>Label Home
            </a>
        </div>
        <div class="col-4 text-end">
             </div>
    </div>

</div>