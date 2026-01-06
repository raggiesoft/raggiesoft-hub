<?php
// pages/engine-room/corporate/stardust-blacksburg/overview.php
// Context: The "Ironhead" Residential Project & Property Management.
// Theme: "Crucible" (Maroon & Orange).
// Role: Subsidized housing for CPI students & HQ Management.

$pageTitle = "Stardust Blacksburg - The Ironwood Collective";
?>

<style>
    /* PAGE-SPECIFIC OVERRIDES */
    /* We use the theme variables, but enforce specific "Varsity" styling */
    
    .hero-section {
        /* Maroon Gradient Overlay */
        background: linear-gradient(rgba(99, 0, 49, 0.85), rgba(26, 5, 13, 0.9)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/corporate/blacksburg-housing.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 8rem 0;
        border-bottom: 4px solid var(--bs-warning); /* Orange Line */
    }

    .stat-card {
        border: 2px solid var(--bs-border-color);
        transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        border-color: var(--bs-warning); /* Orange Glow on hover */
    }

    /* Property Cards */
    .property-card {
        background-color: var(--bs-body-tertiary);
        border-left: 4px solid var(--bs-secondary);
        transition: transform 0.2s ease;
    }
    
    /* Motion Control for Property Cards */
    @media (prefers-reduced-motion: no-preference) {
        .property-card:hover {
            transform: translateX(5px);
            border-left-color: var(--bs-warning);
        }
    }
</style>

<div class="hero-section text-center">
    <div class="container">
        <div class="mb-3">
            <i class="fa-solid fa-graduation-cap fa-4x text-warning"></i>
        </div>
        <h1 class="display-3 fw-bold text-uppercase letter-spacing-1 mb-3">The Ironwood Collective</h1>
        <p class="lead text-white-50 mx-auto fs-4" style="max-width: 800px; font-family: 'Georgia', serif;">
            "We don't just rent apartments. We build future alumni."
        </p>
        <div class="mt-4 d-flex justify-content-center gap-3">
            <span class="badge bg-warning text-dark border border-white fw-bold px-3 py-2">
                <i class="fa-solid fa-clipboard-check me-2"></i>WAITLIST OPEN: CLASS OF '26
            </span>
            <span class="badge bg-transparent border border-warning text-warning fw-bold px-3 py-2">
                <i class="fa-solid fa-user-graduate me-2"></i>ALUMNI OWNED & OPERATED
            </span>
        </div>
    </div>
</div>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h2 class="text-primary fw-bold text-uppercase mb-3">The Mission</h2>
            <p class="fs-5 text-body-secondary fst-italic">
                Stardust Blacksburg, LLC was founded in 2003 with a simple mandate: To ensure that no CPI student ever has to choose between safety and tuition.
            </p>
            <hr class="w-25 mx-auto border-warning opacity-100 my-4" style="height: 3px;">
            <p>
                We are not a typical property management company. We are a locally-managed subsidiary of the <strong>O'Connell Family Trust</strong>. Our units are renovated to modern standards but priced <strong>15% below market rate</strong> for qualifying full-time students. We view this shortfall not as a loss, but as an investment in the Commonwealth.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h3 class="h5 text-uppercase text-body-secondary border-bottom pb-2 mb-4">Strategic Holdings</h3>
            <div class="row g-4">
                
                <div class="col-md-6">
                    <a href="/engine-room/corporate/stardust-blacksburg/the-fortress" class="text-decoration-none">
                        <div class="card h-100 property-card shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-3 bg-body-secondary rounded me-3">
                                        <i class="fa-duotone fa-house-chimney fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-body-emphasis mb-0">The Fortress</h5>
                                        <small class="font-monospace text-muted">ID: PCC-01</small>
                                    </div>
                                </div>
                                <p class="card-text text-body-secondary small">
                                    512 Progress St NE. The original O'Connell residence. Maintained as a private sanctuary and historical asset.
                                </p>
                                <div class="mt-3">
                                    <span class="badge bg-secondary text-white border border-white">Residential Zone</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="/engine-room/corporate/stardust-studios" class="text-decoration-none">
                        <div class="card h-100 property-card shadow-sm" style="border-left-color: var(--bs-warning);">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-3 bg-body-secondary rounded me-3">
                                        <i class="fa-duotone fa-warehouse fa-2x text-warning"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-body-emphasis mb-0">Stardust Studios</h5>
                                        <small class="font-monospace text-muted">Falling Branch Ind. Park</small>
                                    </div>
                                </div>
                                <p class="card-text text-body-secondary small">
                                    12,000 sq. ft. commercial facility. Houses the corporate headquarters, production floor, and fleet maintenance.
                                </p>
                                <div class="mt-3">
                                    <span class="badge bg-warning text-dark border border-dark">Commercial Zone</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-4">
            <div class="card h-100 stat-card shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="fa-duotone fa-wifi fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold text-uppercase">Fiber Internet</h5>
                    <p class="small text-body-secondary mb-0">
                        Included in rent. Because we know you're compiling code at 3 AM.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 stat-card shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="fa-duotone fa-bus fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold text-uppercase">PolyPass Integrated</h5>
                    <p class="small text-body-secondary mb-0">
                        Every property is located on a <strong>Blue Ridge Transit</strong> route or within walking distance of the Quad. Your CPI ID is your fare. No car required.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 stat-card shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="fa-duotone fa-shield-cat fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold text-uppercase">Quiet Hours</h5>
                    <p class="small text-body-secondary mb-0">
                        Strictly enforced during Finals Week. We protect your GPA as fiercely as we protect the building.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="alert bg-body-tertiary border border-primary border-opacity-25 p-4 rounded-0 shadow-sm">
        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <i class="fa-solid fa-scale-balanced fa-2x text-primary opacity-50"></i>
            </div>
            <div class="col-md-11">
                <h6 class="fw-bold text-uppercase text-primary small mb-1">Corporate Transparency</h6>
                <p class="small text-body-secondary mb-0 font-monospace">
                    <strong>Stardust Blacksburg, LLC</strong> is a limited liability company organized under the laws of the <strong>State of Delaware</strong>. It is a wholly-owned subsidiary of Stardust Properties, LLC.
                </p>
            </div>
        </div>
    </div>

</div>