<?php
// pages/engine-room/corporate/pacific-rim/overview.php
// Context: The "Boring" Real Estate Holding Company.
// Location: Avenue of the Stars, Los Angeles.

$pageTitle = "Pacific Rim Properties - Commercial Real Estate";
?>

<style>
    /* THEME: "Corporate Beige" */
    .pac-rim-body {
        background-color: #f8f9fa;
        color: #333;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .pac-rim-header {
        background-color: #ffffff;
        border-bottom: 4px solid #003366; /* Navy Blue */
        padding: 40px 0;
    }
    .pac-btn {
        background-color: #003366;
        color: white;
        border-radius: 0;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }
    .pac-btn:hover { background-color: #002244; color: white; }
    
    .property-card {
        border: 1px solid #ddd;
        background: white;
        transition: box-shadow 0.3s ease;
    }
    .property-card:hover { box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
</style>

<div class="pac-rim-body">

    <div class="position-relative" style="height: 400px; overflow: hidden;">
        <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/pacific-rim-hero.jpg" 
             class="w-100 h-100 object-fit-cover" 
             style="filter: grayscale(80%); opacity: 0.8;"
             alt="Glass Skyscraper on Avenue of the Stars">
        <div class="position-absolute top-50 start-50 translate-middle text-center bg-white bg-opacity-90 p-5 shadow-sm" style="min-width: 60%;">
            <h1 class="display-5 fw-bold text-uppercase text-secondary mb-3">Pacific Rim Properties</h1>
            <p class="lead text-muted mb-4">Century City's Premier Commercial Management.</p>
            <a href="/pacific-rim/tenant-portal" class="btn pac-btn px-4 py-2">Access Tenant Portal</a>
        </div>
    </div>

    <div class="container py-5">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="h4 text-uppercase text-primary mb-3" style="color: #003366 !important;">Stability. Security. Service.</h2>
                <p class="text-muted">
                    Pacific Rim Properties, LLC is a privately held real estate investment firm based in Los Angeles. We specialize in Class-A office towers and provide white-glove management services. While our ownership is based in Virginia, our dedicated Los Angeles staff ensures daily operational excellence from our headquarters on the 3rd Floor.
                </p>
                <div class="alert alert-light border shadow-sm mt-4 text-start d-inline-block">
                    <small class="fw-bold text-uppercase text-muted"><i class="fa-solid fa-circle-info me-2"></i>Management Update (2018)</small>
                    <p class="mb-0 small text-muted">
                        Please note: All accounts receivable are now managed by <strong>Aethelgard Holdings</strong>. Late payments are subject to immediate legal review.
                    </p>
                </div>
            </div>
        </div>

        <h3 class="h5 text-uppercase border-bottom pb-2 mb-4" style="color: #003366; border-color: #003366 !important;">Featured Properties</h3>
        
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card property-card h-100">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/omni-building.jpg" class="card-img-top" alt="The Omni Tower">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #003366;">1999 Avenue of the Stars</h5>
                        <p class="card-text text-muted small">Los Angeles, CA (Century City)</p>
                        <ul class="list-unstyled small text-secondary mb-3">
                            <li><strong>Type:</strong> Class-A High Rise (40 Stories)</li>
                            <li><strong>Management:</strong> On-Site (Floor 3)</li>
                            <li><strong>Anchor Tenant:</strong> Omni-Global Media, Inc.</li>
                        </ul>
                        <div class="d-grid">
                            <span class="badge bg-danger rounded-0 text-uppercase">Account Delinquent</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card property-card h-100">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/blacksburg-housing.jpg" class="card-img-top" alt="CPI Student Housing">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #003366;">The Ironwood Collective</h5>
                        <p class="card-text text-muted small">Blacksburg, VA</p>
                        <ul class="list-unstyled small text-secondary mb-3">
                            <li><strong>Type:</strong> Multi-Family Residential</li>
                            <li><strong>Units:</strong> 240</li>
                            <li><strong>Status:</strong> 100% Occupied (CPI Students)</li>
                        </ul>
                        <div class="d-grid">
                            <span class="badge bg-success rounded-0 text-uppercase">Good Standing</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card property-card h-100">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/la-warehouse.jpg" class="card-img-top" alt="Warehouse Conversion">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #003366;">The Arts District Terminal</h5>
                        <p class="card-text text-muted small">Los Angeles, CA</p>
                        <ul class="list-unstyled small text-secondary mb-3">
                            <li><strong>Type:</strong> Industrial / Creative</li>
                            <li><strong>Sq Ft:</strong> 85,000</li>
                            <li><strong>Tenant:</strong> Stardust Studios (Private)</li>
                        </ul>
                        <div class="d-grid">
                            <span class="badge bg-secondary rounded-0 text-uppercase">Owner Occupied</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>