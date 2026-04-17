<?php
// pages/engine-room/commercial-licensing.php
// The B2B Front Door for Engine Room Records.
// Clarifies Commercial Sync vs. Open Source (CC BY-SA 4.0) usage.

$pageTitle = "Commercial Licensing & Sync - Engine Room Records";
?>

<style>
    .industrial-header {
        background: linear-gradient(rgba(13, 17, 23, 0.95), rgba(13, 17, 23, 0.85)), 
                    url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg');
        background-size: cover;
        background-position: center;
        border-bottom: 4px solid var(--bs-primary);
    }
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
</style>

<div class="industrial-header py-5 text-center" data-bs-theme="dark">
    <div class="container py-5">
        <span class="badge bg-primary text-uppercase letter-spacing-2 mb-3 px-3 py-2 border border-primary">
            <i class="fa-duotone fa-briefcase me-2" aria-hidden="true"></i>B2B Portal
        </span>
        <h1 class="display-3 fw-bold text-stenciled text-body-emphasis mb-3">Commercial Licensing</h1>
        <p class="lead text-body font-monospace mb-0">
            SYNC PLACEMENTS // DIRECT PERFORMANCE // CLEARANCE
        </p>
    </div>
</div>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <h2 class="h3 fw-bold text-uppercase border-bottom border-secondary-subtle pb-2 mb-3">
                One-Stop Clearance
            </h2>
            <p class="lead text-body-secondary">
                Engine Room Records is an independent imprint operated by RaggieSoft. We control <strong>100% of the master recordings and publishing rights</strong> for our entire active roster. 
            </p>
            <p class="text-body-secondary">
                Because we own our catalog outright, we guarantee immediate clearance and rapid deployment of high-fidelity audio assets for your commercial projects. No red tape. No waiting on third-party publishers.
            </p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-6">
            <div class="card h-100 bg-body-tertiary border-primary shadow-sm hover-lift">
                <div class="card-header bg-primary bg-opacity-10 text-primary-emphasis fw-bold text-uppercase border-bottom border-primary-subtle py-3">
                    <i class="fa-duotone fa-film me-2" aria-hidden="true"></i>Synchronization (Sync)
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <p class="card-text text-body-secondary small mb-4">
                        For film, television, video games, trailers, and promotional media. Whether you need the driving 80s arena rock of <em>The Stardust Engine</em> or the cinematic, orchestral scope of <em>Firelight</em>, we provide high-resolution, broadcast-ready WAV files cleared for immediate deployment upon contract execution.
                    </p>
                    <div class="mt-auto">
                        <a href="mailto:licensing@engineroom-records.com?subject=Sync Placement Inquiry" class="btn btn-outline-primary w-100 fw-bold text-uppercase">
                            <i class="fa-solid fa-envelope me-2" aria-hidden="true"></i>Request Sync Clearance
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 bg-body-tertiary border-success shadow-sm hover-lift">
                <div class="card-header bg-success bg-opacity-10 text-success-emphasis fw-bold text-uppercase border-bottom border-success-subtle py-3">
                    <i class="fa-duotone fa-speakers me-2" aria-hidden="true"></i>Direct Public Performance
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <p class="card-text text-body-secondary small mb-4">
                        For retail environments, hospitality venues, cafes, and commercial spaces. By securing a Direct Performance License, you receive direct, secure downloads of our high-fidelity WAV catalog. This ensures total legal compliance for your venue without the need for expensive blanket PRO licenses (ASCAP/BMI).
                    </p>
                    <div class="mt-auto">
                        <a href="mailto:licensing@engineroom-records.com?subject=Direct Performance License Inquiry" class="btn btn-outline-success w-100 fw-bold text-uppercase">
                            <i class="fa-solid fa-envelope me-2" aria-hidden="true"></i>Request Venue License
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card border-secondary shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-dark text-white d-flex flex-column justify-content-center align-items-center p-4 text-center" data-bs-theme="dark">
                        <i class="fa-duotone fa-scale-balanced fa-4x text-warning mb-3" aria-hidden="true"></i>
                        <h3 class="h5 fw-bold text-uppercase mb-0">The Dual-License Model</h3>
                    </div>
                    <div class="col-md-8 p-4 p-lg-5 bg-body">
                        <p class="text-body-secondary mb-4">
                            Engine Room Records operates under a unique hybrid model. While we license our music exclusively for commercial brands and film, we actively support the open-source community and independent creators.
                        </p>
                        
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start">
                                    <i class="fa-brands fa-creative-commons fa-2x text-warning me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h4 class="h6 fw-bold text-body-emphasis mb-1">Creative Content (CC BY-SA 4.0)</h4>
                                        <p class="small text-body-secondary mb-0">
                                            Our narrative lore, world-building, and music tracks are available for non-commercial remixing and sharing, provided you attribute Engine Room Records and share your adaptations under the same terms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start">
                                    <i class="fa-brands fa-github fa-2x text-secondary me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h4 class="h6 fw-bold text-body-emphasis mb-1">System Architecture (MIT)</h4>
                                        <p class="small text-body-secondary mb-0">
                                            The underlying PHP routing infrastructure (Elara) and CMS code that powers this website are fully open-source under the MIT License.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 border-top border-secondary-subtle">
                            <a href="/about/license" class="btn btn-link text-decoration-none px-0 fw-bold">
                                Read Full Licensing Details <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="alert alert-dark bg-body-tertiary border-danger border-2 d-flex flex-column flex-md-row align-items-center justify-content-between shadow-sm p-4" role="alert">
                <div class="mb-3 mb-md-0 me-md-4">
                    <h4 class="h5 fw-bold text-uppercase text-danger mb-2">
                        <i class="fa-solid fa-shield-halved me-2" aria-hidden="true"></i>Copyright & Legal Affairs
                    </h4>
                    <p class="small text-body-secondary mb-0">
                        For DMCA takedown notices, formal ISRC (International Standard Recording Code) verifications, or other legal matters regarding the Engine Room Records catalog, please contact our copyright administration desk.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <a href="mailto:legal@engineroom-records.com" class="btn btn-danger fw-bold px-4 rounded-pill shadow-sm">
                        Contact Legal
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .hover-lift { transition: transform 0.2s ease, box-shadow 0.2s ease; }
    @media (prefers-reduced-motion: no-preference) {
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
    }
</style>