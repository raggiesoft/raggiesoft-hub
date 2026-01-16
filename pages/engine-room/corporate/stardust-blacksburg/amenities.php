<?php
// pages/engine-room/corporate/stardust-blacksburg/amenities.php
// Context: Selling the "Academic Advantage" & Strict Lease Terms.
// Theme: "Crucible" (Maroon & Orange) / Varsity.

$pageTitle = "Amenities - The Ironwood Standard";
?>

<style>
    /* VARSITY THEME OVERRIDES */
    .amenity-hero {
        background: linear-gradient(rgba(44, 48, 52, 0.9), rgba(44, 48, 52, 0.95)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/corporate/study-lounge.jpg');
        background-size: cover;
        background-position: center;
        padding: 5rem 0;
        border-bottom: 4px solid var(--bs-warning);
        color: white;
    }

    .feature-icon-box {
        width: 64px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--bs-body-tertiary);
        border: 2px solid var(--bs-border-color);
        border-radius: 12px;
        margin-bottom: 1.5rem;
        color: var(--bs-primary); /* Maroon */
        transition: transform 0.2s ease, border-color 0.2s ease;
    }

    /* Hover effect for feature cards */
    .feature-col:hover .feature-icon-box {
        transform: scale(1.1);
        border-color: var(--bs-warning); /* Orange */
        color: var(--bs-warning);
    }
</style>

<div class="amenity-hero text-center mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold text-uppercase letter-spacing-1 mb-2">Built for the Dean's List</h1>
        <p class="lead text-white-50 mx-auto" style="max-width: 700px; font-family: 'Georgia', serif;">
            Most student housing is built for parties. We built ours for performance.
        </p>
    </div>
</div>

<div class="container pb-5">
    
    <div class="row mb-5">
        <div class="col-12 mb-4 border-bottom pb-2">
            <h3 class="h4 text-uppercase text-body-emphasis fw-bold">
                <i class="fa-duotone fa-server me-2 text-warning"></i>Infrastructure
            </h3>
        </div>

        <div class="col-md-6 col-lg-4 feature-col mb-4">
            <div class="feature-icon-box shadow-sm">
                <i class="fa-duotone fa-wifi fa-2x"></i>
            </div>
            <h5 class="fw-bold text-body-emphasis">Gigabit Symmetric</h5>
            <p class="small text-body-secondary">
                We don't use standard residential cable. Every Ironwood building is connected to the <strong>Stardust Dark Fiber Loop</strong>. 1Gbps Up/Down per unit. Zero lag during course registration.
            </p>
        </div>

        <div class="col-md-6 col-lg-4 feature-col mb-4">
            <div class="feature-icon-box shadow-sm">
                <i class="fa-duotone fa-ear-muffs fa-2x"></i>
            </div>
            <h5 class="fw-bold text-body-emphasis">Studio-Grade Silence</h5>
            <p class="small text-body-secondary">
                Leveraging our experience building recording studios, all shared walls are rated <strong>STC-55</strong> or higher. You will not hear your neighbor's bass drop while you are studying for Thermodynamics.
            </p>
        </div>

        <div class="col-md-6 col-lg-4 feature-col mb-4">
            <div class="feature-icon-box shadow-sm">
                <i class="fa-duotone fa-bolt fa-2x"></i>
            </div>
            <h5 class="fw-bold text-body-emphasis">Redundant Power</h5>
            <p class="small text-body-secondary">
                Storms happen. Exams don't wait. Our buildings feature natural gas generator backups for common areas and Wi-Fi routers. The lights might go out in town, but your connection stays up.
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 mb-4 border-bottom pb-2">
            <h3 class="h4 text-uppercase text-body-emphasis fw-bold">
                <i class="fa-duotone fa-mug-hot me-2 text-primary"></i>Lifestyle
            </h3>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm bg-body-tertiary">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-book-open-reader fa-2x text-primary me-3"></i>
                        <h5 class="fw-bold text-body-emphasis mb-0">The 24/7 Study Hall</h5>
                    </div>
                    <p class="card-text text-body-secondary small">
                        Every complex features a secure, access-controlled study lounge with commercial printers, whiteboard walls, and free coffee during Finals Week. It's like the library, but you can wear your pajamas.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm bg-body-tertiary">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-duotone fa-wrench fa-2x text-primary me-3"></i>
                        <h5 class="fw-bold text-body-emphasis mb-0">The "O'Connell" Maintenance Guarantee</h5>
                    </div>
                    <p class="card-text text-body-secondary small">
                        We are locally owned. If something breaks, we fix it within 24 hours. Emergency HVAC or plumbing issues are addressed immediately, 24/7/365. No absentee landlords.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 mb-4 border-bottom pb-2">
            <h3 class="h4 text-uppercase text-body-emphasis fw-bold">
                <i class="fa-duotone fa-gavel me-2 text-danger"></i>The Ironwood Covenant
            </h3>
        </div>
        
        <div class="col-lg-6 mb-4">
            <div class="alert alert-light border border-secondary shadow-sm h-100">
                <div class="d-flex">
                    <i class="fa-solid fa-ban-smoking fa-2x text-danger me-3 mt-1"></i>
                    <div>
                        <h5 class="alert-heading fw-bold text-uppercase small text-danger">Strictly Smoke-Free</h5>
                        <p class="small mb-0 text-body-secondary">
                            Stardust Blacksburg maintains a <strong>Total Clean Air</strong> policy. Smoking, vaping, and the use of tobacco products are prohibited anywhere on the property—indoors AND outdoors. This includes parking lots and balconies.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="alert alert-light border border-secondary shadow-sm h-100">
                <div class="d-flex">
                    <i class="fa-solid fa-glass-citrus-empty fa-2x text-danger me-3 mt-1"></i>
                    <div>
                        <h5 class="alert-heading fw-bold text-uppercase small text-danger">Substance-Free Zone (Dry Property)</h5>
                        <p class="small mb-0 text-body-secondary">
                            We operate 100% Dry Properties. The possession or consumption of alcohol is prohibited on all premises, <strong>regardless of the resident's age</strong>. We provide a sanctuary for focus, not a venue for nightlife.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-secondary d-flex align-items-center p-3 small shadow-sm">
        <i class="fa-solid fa-circle-info me-3 text-secondary fs-4"></i>
        <div>
            <strong>Applicant Note:</strong> We do not offer "Party Packages." Stardust Blacksburg strictly enforces a "Scholar First" lease agreement. Violations of the Alcohol or Smoking covenants are grounds for immediate lease termination. We protect the quiet.
        </div>
    </div>

</div>