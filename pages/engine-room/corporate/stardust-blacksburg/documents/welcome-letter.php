<?php
// pages/engine-room/corporate/stardust-blacksburg/documents/welcome-letter.php
// Context: The official "Day 1" communication for new residents.
// Theme: Professional, Academic, and Firm.

$pageTitle = "Welcome to The Ironwood Collective";
?>



<style>
    .signature-text {
        font-family: 'Herr Von Muellerhoff', cursive;
        font-size: 3.5rem;
        line-height: 1;
        color: var(--bs-primary); /* Uses the Maroon theme color for "Ink" */
        transform: rotate(-2deg); /* Slight tilt for realism */
        display: inline-block;
        margin-top: 1rem;
    }

    /* Print-specific styles to ensure the letter looks official on paper */
    @media print {
        .signature-text {
            color: #000 !important; /* Force black ink for printing */
            text-shadow: none;
        }
        body {
            background: white;
        }
        .container {
            max-width: 100%;
        }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <div class="text-center mb-5 border-bottom border-warning pb-4">
                <div class="mb-3">
                    <i class="fa-solid fa-graduation-cap fa-3x text-primary"></i>
                </div>
                <h1 class="h3 fw-bold text-uppercase letter-spacing-2 mb-1">Stardust Blacksburg, LLC</h1>
                <p class="small font-monospace text-muted mb-0">DBA: THE IRONWOOD COLLECTIVE</p>
                <p class="small font-monospace text-muted">1200 Industrial Park Rd, Blacksburg, VA 24060</p>
            </div>

            <div class="mb-4">
                <p class="lead"><strong>Dear Resident,</strong></p>
                <p>
                    Welcome to your new home. Whether you are beginning your journey at CPI or finishing your dissertation, you have chosen to live in a community designed for one specific purpose: <strong>Your Success.</strong>
                </p>
                <p>
                    At Stardust Properties, our mission is simple: <em>To support your residential needs for academic excellence.</em> We believe that where you live should not be a distraction from your goals; it should be the foundation of them.
                </p>
            </div>

            <div class="card bg-light border-0 mb-5 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="text-primary fw-bold text-uppercase mb-3">
                        <i class="fa-solid fa-server me-2"></i>Your Academic Advantage
                    </h5>
                    <p class="small text-muted mb-3">
                        We have equipped your unit with the tools you need to perform at the highest level.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="fa-solid fa-check text-success me-2"></i><strong>Gigabit Fiber:</strong> You are connected to the Stardust Dark Fiber Loop. Your internet is symmetric (1Gbps Up/Down) and lag-free.
                        </li>
                        <li class="mb-2">
                            <i class="fa-solid fa-check text-success me-2"></i><strong>Zero-Friction Commute:</strong> Whether you are in a walking-distance unit or on the "Spine," your CPI PolyPass provides seamless, free access to the <strong>Blue Ridge Transit</strong> network right outside your door.
                        </li>
                        <li>
                            <i class="fa-solid fa-check text-success me-2"></i><strong>The "Quiet" Standard:</strong> Your walls are rated STC-55 for soundproofing. We have built a sanctuary for focus.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mb-5">
                <h5 class="text-danger fw-bold text-uppercase mb-3 border-bottom border-danger pb-2">
                    <i class="fa-solid fa-file-signature me-2"></i>The Ironwood Covenant
                </h5>
                <p class="text-muted">
                    To maintain this atmosphere of excellence, strict adherence to the Community Standards outlined in your lease is required. These are not suggestions; they are conditions of residency.
                </p>

                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <div class="p-3 border border-danger bg-white rounded h-100">
                            <strong class="text-danger d-block mb-2">1. The Dry Property Rule</strong>
                            <p class="small text-muted mb-0">
                                This is a <strong>Substance-Free Zone</strong>. The possession or consumption of alcohol is prohibited anywhere on the property. This applies to all residents and guests, <strong>regardless of age (21+)</strong>. We do not host parties; we host scholars.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 border border-danger bg-white rounded h-100">
                            <strong class="text-danger d-block mb-2">2. The Clean Air Rule</strong>
                            <p class="small text-muted mb-0">
                                We maintain a strict <strong>No Smoking / No Vaping</strong> policy. This includes cigarettes, e-cigarettes, and hookahs. This ban applies to <strong>all areas</strong>: indoors, outdoors, balconies, and parking lots.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-secondary mt-3 small">
                    <i class="fa-solid fa-circle-exclamation me-2"></i>
                    <strong>Lease Enforcement:</strong> Please be advised that violations of these covenants are considered a material breach of lease and are grounds for immediate termination. We protect the quiet of our community fiercely.
                </div>
            </div>

            <div class="mb-5">
                <h5 class="text-dark fw-bold text-uppercase mb-3">
                    <i class="fa-solid fa-wrench me-2"></i>The Maintenance Guarantee
                </h5>
                <p>
                    You are here to work. We are here to make sure your home works. If something breaks, submit a ticket through the Resident Portal immediately.
                </p>
                <p class="small text-muted">
                    <em>Our Promise: All routine maintenance is addressed within 24 hours. Emergency issues (Heat, Water, Power) are addressed immediately, 24/7/365.</em>
                </p>
            </div>

            <div class="mt-5 pt-4 border-top">
                <p class="mb-0 text-muted small text-uppercase letter-spacing-1">Authorized By:</p>
                
                <div class="signature-text" aria-label="Signed: Holly O'Connell">
                    Holly O'Connell
                </div>
                
                <p class="mb-0 fw-bold small text-uppercase">Principal & Managing Member</p>
                <p class="mb-0 text-muted small">Stardust Properties, LLC</p>
            </div>

        </div>
    </div>
</div>