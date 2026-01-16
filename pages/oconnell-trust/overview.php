<?php
/**
 * PAGE: O'Connell Trust Hub
 * ROUTE: /oconnell-trust
 * CONTEXT: The "Parent Company" landing page.
 * STATUS: Dark Mode Ready (Adapts to 'Dark Luxury' aesthetic)
 */
// JENNA: Draft
?>

<style>
    /* TRUST-SPECIFIC OVERRIDES */
    .trust-hero {
        /* Adapts from Light Gray to Dark Charcoal */
        background: linear-gradient(to bottom, var(--bs-tertiary-bg), var(--bs-body-bg));
        border-bottom: 1px solid var(--bs-border-color);
        padding: 8rem 0 6rem;
    }
    
    .trust-font {
        font-family: 'Playfair Display', serif;
    }
    
    .stat-card {
        background-color: var(--bs-body-bg); /* Dynamic Background */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-color: var(--bs-border-color) !important;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        /* Subtle glow in dark mode, shadow in light mode */
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        z-index: 2;
    }
    
    /* Dark Mode Specific Adjustments */
    [data-bs-theme="dark"] .stat-card:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;
        background-color: var(--bs-tertiary-bg);
    }

    [data-bs-theme="dark"] .text-dark {
        color: var(--bs-light) !important;
    }
    
    /* Invert the "Private Access" lock icon for visibility */
    [data-bs-theme="dark"] .opacity-50 {
        opacity: 0.6 !important;
    }
</style>

<div class="trust-hero text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-3 text-secondary text-uppercase letter-spacing-2 small fw-bold">Est. 2012 &bull; Wilmington, Delaware</div>
                
                <h1 class="display-3 fw-bold trust-font text-body mb-4">
                    The O'Connell Family<br>Revocable Trust
                </h1>
                
                <p class="lead text-secondary font-monospace fs-6 w-75 mx-auto">
                    A private wealth management vehicle dedicated to the preservation of capital, the stewardship of artistic legacy, and the strategic acquisition of distressed assets.
                </p>
                
                <div class="mt-5 d-flex justify-content-center gap-3">
                    <a href="/oconnell-trust/structure" class="btn btn-outline-secondary rounded-0 px-4 py-2 text-uppercase letter-spacing-1 small">
                        Governance Structure
                    </a>
                    <a href="#portfolio" class="btn btn-primary rounded-0 px-4 py-2 text-uppercase letter-spacing-1 small">
                        View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="bg-body py-5">
    <div class="container py-5">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-secondary fw-bold letter-spacing-2 mb-3">Asset Allocation</h6>
                <h2 class="trust-font mb-0 text-body">Diversified Holdings</h2>
            </div>
        </div>

        <div class="row g-0 align-items-center border shadow-sm rounded-1 overflow-hidden">
            
            <div class="col-lg-4 p-5 border-end stat-card position-relative">
                <div class="mb-4 text-danger">
                    <i class="fa-duotone fa-record-vinyl fa-3x"></i>
                </div>
                <h3 class="trust-font fw-bold text-body">Engine Room Records</h3>
                <p class="text-secondary small text-uppercase mb-3">Intellectual Property & Archives</p>
                <p class="text-secondary mb-4">
                    The founding entity of the portfolio. Manages the copyrights, trademarks, and master recordings of the O'Connell family's creative output.
                </p>
                <a href="/engine-room" class="icon-link icon-link-hover text-danger fw-bold text-decoration-none text-uppercase small letter-spacing-1">
                    Visit Archive <i class="fa-solid fa-arrow-right bi"></i>
                </a>
            </div>

            <div class="col-lg-4 p-5 border-end stat-card position-relative">
                <div class="mb-4 text-primary">
                    <i class="fa-duotone fa-city fa-3x"></i>
                </div>
                <h3 class="trust-font fw-bold text-body">Pacific Rim Properties</h3>
                <p class="text-secondary small text-uppercase mb-3">Commercial Real Estate</p>
                <p class="text-secondary mb-4">
                    A diversified portfolio of Class-A office space, student housing (Stardust Blacksburg), and mixed-use developments across North America.
                </p>
                <a href="/pacific-rim" class="icon-link icon-link-hover text-primary fw-bold text-decoration-none text-uppercase small letter-spacing-1">
                    Investor Relations <i class="fa-solid fa-arrow-right bi"></i>
                </a>
            </div>

            <div class="col-lg-4 p-5 stat-card position-relative">
                <div class="mb-4 text-body-emphasis">
                    <i class="fa-duotone fa-gavel fa-3x"></i>
                </div>
                <h3 class="trust-font fw-bold text-body">Aethelgard Holdings</h3>
                <p class="text-secondary small text-uppercase mb-3">Strategic Acquisitions</p>
                <p class="text-secondary mb-4">
                    Special situations investment arm focused on distressed asset liquidation, rights enforcement, and supply chain security.
                </p>
                <span class="text-secondary text-uppercase small letter-spacing-1 cursor-not-allowed opacity-50">
                    <i class="fa-solid fa-lock me-1"></i> Private Access Only
                </span>
            </div>

        </div>
    </div>
</div>

<div class="bg-body-tertiary py-5 border-top">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-2 text-center text-md-start mb-3 mb-md-0">
                <i class="fa-duotone fa-hands-holding-heart fa-4x text-success opacity-75"></i>
            </div>
            <div class="col-md-7 text-center text-md-start">
                <h4 class="trust-font fw-bold mb-1 text-body">The Jessica Miller Center</h4>
                <p class="text-secondary mb-0">
                    The philanthropic arm of the Trust, dedicated to arts education and mental health support for touring musicians. 
                    <span class="fst-italic">Managed by Artists First Management, LLC.</span>
                </p>
            </div>
            <div class="col-md-3 text-center text-md-end mt-3 mt-md-0">
                <a href="/engine-room/corporate/jessica-miller-center" class="btn btn-outline-success rounded-pill px-4">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-body py-4 border-top">
    <div class="container text-center">
        <p class="small text-muted font-monospace mb-0">
            &copy; <?php echo date("Y"); ?> The O'Connell Family Revocable Trust. All Rights Reserved.<br>
            <span class="opacity-50">Legal Counsel: Holly O'Connell, Esq. | 100% Privately Held.</span>
        </p>
    </div>
</div>