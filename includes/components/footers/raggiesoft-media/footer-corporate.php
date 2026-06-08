<?php
// includes/components/footers/raggiesoft-media/footer-corporate.php
// The authoritative B2B footer for the holding entity.
// Updated: Frutiger Aero / Dark Aero Master Glass
?>

<footer class="mt-auto py-5">
    <div class="container relative-z1">
        <div class="row gy-4">
            
            <div class="col-lg-4 col-md-6 text-center text-md-start">
                <div class="text-uppercase fw-bold fs-4 mb-2 brand-font text-glow-primary" style="letter-spacing: 1px;">
                    RaggieSoft Media
                </div>
                <p class="small text-body-secondary mb-3">
                    Independent multimedia asset management, open-source architecture, and master licensing administration.
                </p>
                <p class="small text-body-emphasis mb-0 font-monospace py-1 px-2 d-inline-block rounded border border-secondary-subtle" style="background: rgba(0,0,0,0.03);">
                    <i class="fa-solid fa-location-dot me-2 text-primary" aria-hidden="true" style="filter: drop-shadow(0 2px 2px rgba(0,130,230,0.4));"></i>HQ: Norfolk, Virginia
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h6 class="text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-3 text-secondary">Operations Directory</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/raggiesoft-media/licensing/commercial" class="text-decoration-none text-body-secondary aero-hover-primary transition-all">
                            <i class="fa-solid fa-briefcase fa-fw me-2 text-primary opacity-75" aria-hidden="true"></i>Commercial Sync Portal
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/raggiesoft-media/projects" class="text-decoration-none text-body-secondary aero-hover-info transition-all">
                            <i class="fa-brands fa-osi fa-fw me-2 text-info opacity-75" aria-hidden="true"></i>Open Source Projects
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/raggiesoft-media/projects/stardust-engine-cms" class="text-decoration-none text-body-secondary aero-hover-info transition-all">
                            <i class="fa-solid fa-rocket-launch fa-fw me-2 text-info opacity-75" aria-hidden="true"></i>Stardust Engine CMS
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="/raggiesoft-media/licensing" class="text-decoration-none text-body-secondary aero-hover-warning transition-all">
                            <i class="fa-solid fa-scale-balanced fa-fw me-2 text-warning opacity-75" aria-hidden="true"></i>Copyright & Clearances
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <h6 class="text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-3 text-secondary">Security & Legal</h6>
                <ul class="list-unstyled small mb-3">
                    <li class="mb-2">
                        <a href="/about/terms" class="text-decoration-none text-body-secondary aero-hover-secondary transition-all">Terms of Service</a>
                    </li>
                    <li class="mb-0">
                        <a href="/about/privacy" class="text-decoration-none text-body-secondary aero-hover-secondary transition-all">Privacy Policy</a>
                    </li>
                </ul>
                
                <div class="aero-footer-alert p-3 small text-start mb-0" role="alert">
                    <strong class="d-block mb-1 text-uppercase font-monospace text-body-emphasis">
                        <i class="fa-solid fa-shield-check me-2 text-success" aria-hidden="true" style="filter: drop-shadow(0 0 4px rgba(56,229,77,0.5));"></i>Employment Notice
                    </strong>
                    <span class="text-body-secondary">RaggieSoft Media is a single-person entity and is not hiring.</span>
                    <a href="/raggiesoft-media/careers" class="text-danger fw-bold text-decoration-none d-block mt-2 transition-all aero-hover-danger">
                        Verify Fraud Alerts <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>

<style>
    /* Inner Glass Alert Box for Footer */
    .aero-footer-alert {
        background: rgba(0, 0, 0, 0.02);
        border: 1px solid var(--raggie-glass-border);
        border-radius: 8px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255,255,255,0.5);
    }
    [data-bs-theme="dark"] .aero-footer-alert {
        background: rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255,255,255,0.05);
    }

    /* Glossy Glowing Hovers */
    .aero-hover-primary:hover { 
        color: var(--bs-primary) !important; 
        text-shadow: 0 0 8px rgba(0, 130, 230, 0.4);
    }
    .aero-hover-warning:hover { 
        color: var(--bs-warning) !important; 
        text-shadow: 0 0 8px rgba(255, 179, 0, 0.4);
    }
    .aero-hover-info:hover { 
        color: var(--bs-info) !important; 
        text-shadow: 0 0 8px rgba(0, 195, 255, 0.4);
    }
    .aero-hover-secondary:hover { 
        color: var(--bs-body-color) !important; 
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    }
    .aero-hover-danger:hover {
        color: #ff4d5e !important;
        text-shadow: 0 0 8px rgba(220, 53, 69, 0.5);
    }
</style>