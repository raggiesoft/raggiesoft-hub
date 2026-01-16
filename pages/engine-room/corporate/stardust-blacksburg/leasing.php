<?php
// pages/engine-room/corporate/stardust-blacksburg/leasing.php
// Context: Explaining the "Unit vs. Bed" pricing model.
// Theme: "Crucible" (Maroon & Orange) / Varsity.

$pageTitle = "Leasing Philosophy - Stardust Blacksburg";
?>


<style>
    .comparison-table th {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.85rem;
    }
    
    .price-tag {
        font-family: 'Courier New', monospace;
        font-weight: bold;
        color: var(--bs-success);
    }
    
    .signature-text {
        font-family: 'Herr Von Muellerhoff', cursive;
        font-size: 3rem;
        line-height: 1;
        color: var(--bs-primary);
        transform: rotate(-2deg);
        display: inline-block;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-3">Rent a Home, Not a Bunk</h1>
            <p class="lead text-body-secondary">
                We reject the "By-The-Bed" industry model. We treat you like adults, not campers.
            </p>
        </div>
    </div>

    <div class="row g-5 mb-5 align-items-center">
        <div class="col-lg-6">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-warning pb-2 mb-4">
                <i class="fa-duotone fa-house-user me-2 text-warning"></i>The Unit Lease Standard
            </h3>
            <p class="text-body-secondary">
                Most student housing complexes charge "By The Bed." This allows them to maximize profit by treating roommates as strangers and charging $900+ per person for a shared apartment.
            </p>
            <p class="text-body-emphasis fw-bold">
                At Stardust Blacksburg, we rent by the Unit.
            </p>
            <p class="text-body-secondary">
                When you sign a lease with us, you are renting the entire apartment (204, 205, etc.). You choose your roommates. You split the rent however you see fit. You are responsible for the collective space.
            </p>
            <div class="alert alert-light border-start border-4 border-primary shadow-sm">
                <small class="d-block text-muted text-uppercase fw-bold mb-1">The Result:</small>
                <span class="fst-italic text-primary">"Forgers take care of Forgers."</span> We empower you to build your own household, saving you thousands of dollars per semester compared to corporate dorms.
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white text-center text-uppercase fw-bold">
                    The Math: "Ironwood" vs. "The Mega-Complex"
                </div>
                <div class="table-responsive">
                    <table class="table table-striped comparison-table mb-0 text-center">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th class="text-danger">Corporate Complex</th>
                                <th class="text-success">Stardust (Ironwood)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start ps-3 fw-bold text-muted small">Lease Type</td>
                                <td>By The Bed</td>
                                <td><strong>By The Unit</strong></td>
                            </tr>
                            <tr>
                                <td class="text-start ps-3 fw-bold text-muted small">3-Bedroom Unit</td>
                                <td>$950 / person</td>
                                <td><strong>$1,800 / total</strong></td>
                            </tr>
                            <tr>
                                <td class="text-start ps-3 fw-bold text-muted small">Total Cost</td>
                                <td class="text-danger fw-bold">$2,850 / mo</td>
                                <td class="price-tag">$1,800 / mo</td>
                            </tr>
                            <tr>
                                <td class="text-start ps-3 fw-bold text-muted small">Savings</td>
                                <td>---</td>
                                <td class="text-success fw-bold">-$1,050 / mo</td>
                            </tr>
                            <tr>
                                <td class="text-start ps-3 fw-bold text-muted small">Roommates</td>
                                <td>Randomly Assigned</td>
                                <td><strong>Chosen by You</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-center mt-2 small text-muted fst-italic">
                *Figures based on 2024 Market Analysis of Blacksburg off-campus housing.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-0 p-4 shadow-sm">
                <div class="d-flex align-items-start">
                    <i class="fa-duotone fa-scale-balanced fa-3x text-secondary me-4 mt-1"></i>
                    <div>
                        <h4 class="fw-bold text-body-emphasis">The "Fair Market" Promise</h4>
                        <p class="text-body-secondary">
                            We are often asked why our rents are lower than the new construction downtown. 
                        </p>
                        <p class="text-body-secondary">
                            Our pricing strategy is deliberate. We price our units at approximately <strong>15% below the aggressive market cap</strong>.
                        </p>
                        <ul class="list-unstyled text-body-secondary small mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i><strong>Sustainable:</strong> We cover our costs, taxes, and maintenance without price-gouging students.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i><strong>Competitive:</strong> We maintain fair competition with other local landlords. We do not artificially deflate prices to "dump" the market; we simply refuse to inflate them for profit.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Alumni Focused:</strong> As a CPI Alumni-owned entity, we prioritize the accessibility of education over maximizing Yield-Per-Square-Foot.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center border-top pt-5">
            <p class="fs-5 fst-italic text-body-secondary mb-4">
                "We don't need to squeeze every dollar out of a student loan check. We just need to keep the lights on, the internet fast, and the roofs solid. The rest is an investment in the future of the Commonwealth."
            </p>
            
            <div class="mt-3">
                <div class="signature-text" aria-label="Signed: Holly O'Connell">
                    Holly O'Connell
                </div>
                <p class="small text-uppercase fw-bold text-muted mt-2 mb-0">Managing Member, Class of '91</p>
            </div>
        </div>
    </div>

</div>