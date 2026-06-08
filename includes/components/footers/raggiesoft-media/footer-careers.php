<?php
// includes/components/footers/raggiesoft-media/footer-careers.php
// The Silent Footer - Strips out audio players and promotional links.
// Updated: Frutiger Aero Danger Glass
?>

<footer class="mt-auto py-5 aero-danger-footer">
    <div class="container relative-z1">
        <div class="row gy-4 align-items-center">
            
            <div class="col-md-6 text-center text-md-start">
                <div class="text-uppercase fw-bold fs-4 mb-2 brand-font text-danger" style="letter-spacing: 1px; text-shadow: 0 0 10px rgba(220,53,69,0.3);">
                    RaggieSoft Media
                </div>
                <p class="small text-body-secondary mb-0">
                    An independent multimedia asset management house.
                </p>
                <div class="d-inline-block mt-3 px-3 py-2 aero-inner-danger rounded-pill small fw-bold text-danger shadow-sm">
                    <i class="fa-solid fa-shield-xmark me-1" aria-hidden="true"></i> Not an employer. Not hiring.
                </div>
            </div>

            <div class="col-md-6 text-center text-md-end">
                <h6 class="text-uppercase fw-bold border-bottom border-danger border-opacity-25 pb-2 mb-3 d-inline-block text-danger">Official Verification</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/raggiesoft-media" class="text-decoration-none text-body-secondary aero-hover-primary transition-all">
                            <i class="fa-solid fa-server me-2 text-primary opacity-75" aria-hidden="true"></i>Corporate Operations Hub
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="mailto:ops@raggiesoftmedia.com" class="text-decoration-none text-body-secondary aero-hover-warning transition-all">
                            <i class="fa-solid fa-envelope me-2 text-warning opacity-75" aria-hidden="true"></i>ops@raggiesoftmedia.com
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<style>
    /* Specific Danger Glass Override for this footer */
    .aero-danger-footer {
        border-top: 1px solid rgba(220, 53, 69, 0.4) !important;
        box-shadow: 0 -8px 32px rgba(220, 53, 69, 0.08) !important;
    }
    [data-bs-theme="dark"] .aero-danger-footer {
        box-shadow: 0 -8px 32px rgba(220, 53, 69, 0.15) !important;
    }

    /* Inner Glass Pill */
    .aero-inner-danger {
        background: rgba(220, 53, 69, 0.05);
        border: 1px solid rgba(220, 53, 69, 0.2);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    [data-bs-theme="dark"] .aero-inner-danger {
        background: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.3);
    }

    /* Glossy Hover Links */
    .aero-hover-primary:hover { 
        color: var(--bs-primary) !important; 
        text-shadow: 0 0 8px rgba(0, 130, 230, 0.4);
    }
    .aero-hover-warning:hover { 
        color: var(--bs-warning) !important; 
        text-shadow: 0 0 8px rgba(255, 179, 0, 0.4);
    }
</style>