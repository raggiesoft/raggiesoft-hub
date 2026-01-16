<?php
// pages/engine-room/corporate/leadership.php
// The Executive Office.
// "The Twin Protocol" - Zero Separation.

$pageTitle = "Executive Leadership - The Jessica Miller Center";
?>

<style>
    /* THEME: The "Dual-Core" Standard */
    .leadership-header {
        background: linear-gradient(135deg, #1c1c1c 0%, #2c3e50 100%);
        color: white;
        padding: 5rem 0;
        border-bottom: 4px solid #d4af37; /* Gold Line */
    }

    .twin-card {
        border: none;
        transition: transform 0.3s ease;
        overflow: hidden;
        height: 100%;
    }
    .twin-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .role-badge {
        font-family: 'Courier New', monospace;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.8rem;
        padding: 5px 10px;
        border-radius: 4px;
        display: inline-block;
        margin-bottom: 1rem;
    }
    
    .badge-front { background: rgba(25, 135, 84, 0.1); color: #198754; border: 1px solid #198754; }
    .badge-back { background: rgba(13, 202, 240, 0.1); color: #0dcaf0; border: 1px solid #0dcaf0; }

    .protocol-section {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
    }
    [data-bs-theme="dark"] .protocol-section {
        background-color: #111;
        border-color: #333;
    }

    .img-executive {
        width: 100%;
        height: 450px; 
        object-fit: cover;
        object-position: top center;
        border-bottom: 4px solid;
    }
</style>

<div class="container-fluid p-0">
    
    <div class="leadership-header text-center">
        <div class="container">
            <span class="text-gold text-uppercase letter-spacing-2 small">Aethelgard Holdings</span>
            <h1 class="display-3 fw-bold text-uppercase mt-2 mb-3">Executive Leadership</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">
                "We don't need a boardroom. We have a kitchen table."
            </p>
        </div>
    </div>

    <div class="protocol-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 rounded-3 transform-rotate-minus-2" style="z-index: 0;"></div>
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/justin-and-jessica-miller.jpg" 
                             class="img-fluid rounded-3 shadow-lg position-relative z-1 border border-secondary"
                             alt="Jessica and Justin Miller together">
                        <div class="position-absolute bottom-0 end-0 z-2 p-2">
                            <span class="badge bg-black bg-opacity-75 font-monospace small">THE MILLER UNIT</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="h3 fw-bold text-uppercase mb-3">The "Miller Unit"</h2>
                    
                    <div class="alert alert-dark border-info d-flex align-items-start mb-4">
                        <i class="fa-solid fa-link text-info fs-3 me-3 mt-1"></i>
                        <div>
                            <h5 class="alert-heading h6 fw-bold text-info text-uppercase mb-1">Operational Mandate: Zero Separation</h5>
                            <p class="small text-muted mb-0">
                                The Co-Directors operate under a strict <strong>Single-Unit Protocol</strong>. They do not hold separate meetings. They do not travel in separate vehicles. They share a single office suite.
                            </p>
                        </div>
                    </div>

                    <p class="text-secondary">
                        Born seven minutes apart, Jessica and Justin Miller function as a single executive organism. This proximity is not a preference; it is a neurological requirement for their optimal performance.
                    </p>
                    <ul class="list-unstyled text-muted small font-monospace mt-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Shared Commute:</strong> They arrive and depart together (via Fleet Unit 1).</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Shared Workspace:</strong> The "Quiet Floor" features a dual-desk command center.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Facility Design:</strong> All restrooms in the Center are "Family/Universal" style to ensure they never have to separate, even for biological necessities.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-5">
            
            <div class="col-lg-6">
                <div class="card twin-card shadow-sm bg-body-tertiary">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/jessica-miller.jpg" 
                         class="img-executive" 
                         style="border-color: #198754;"
                         alt="Jessica Miller">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="fw-bold mb-1">Jessica Miller</h3>
                                <div class="role-badge badge-front">The Executive Director</div>
                            </div>
                            <i class="fa-solid fa-microphone-lines fs-3 text-success opacity-50"></i>
                        </div>
                        <p class="card-text text-muted mb-4">
                            <strong>"The Front End."</strong> (Born 7 minutes first). Jessica manages the human element. She handles the artists, the lawyers, and the public image.
                        </p>
                        <ul class="list-unstyled small font-monospace text-body-secondary">
                            <li class="mb-2"><i class="fa-solid fa-wheelchair me-2 text-success"></i><strong>Mobility:</strong> Ambulatory Wheelchair User</li>
                            <li class="mb-2"><i class="fa-solid fa-brain me-2 text-success"></i><strong>Role:</strong> The "Safe Person" (Interpreter)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card twin-card shadow-sm bg-body-tertiary">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/corporate/justin-server-rom.jpg" 
                         class="img-executive" 
                         style="border-color: #0dcaf0;"
                         alt="Justin Miller in Server Room">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="fw-bold mb-1">Justin Miller</h3>
                                <div class="role-badge badge-back">Chief Systems Architect</div>
                            </div>
                            <i class="fa-solid fa-server fs-3 text-info opacity-50"></i>
                        </div>
                        <p class="card-text text-muted mb-4">
                            <strong>"The Back End."</strong> Justin manages the infrastructure. He controls the fleet logistics and "The Vault" database.
                        </p>
                        <ul class="list-unstyled small font-monospace text-body-secondary">
                            <li class="mb-2"><i class="fa-solid fa-comment-slash me-2 text-info"></i><strong>Comms:</strong> Non-Verbal (AAC / mPad)</li>
                            <li class="mb-2"><i class="fa-solid fa-anchor me-2 text-info"></i><strong>Role:</strong> The "Anchor" (Grounding)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>