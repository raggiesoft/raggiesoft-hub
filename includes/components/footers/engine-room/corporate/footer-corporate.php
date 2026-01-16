<?php
// includes/components/footers/engine-room/corporate/footer.php
// Context: The Footer for the Family Office / Trust Intranet.
// Theme: Corporate, Legal, Serious.
?>
<footer class="mt-auto bg-black text-white-50 border-top border-secondary border-opacity-25 py-5">
    <div class="container">
        <div class="row gy-4">
            
            <div class="col-md-4 text-center text-md-start">
                <div class="mb-3">
                    <i class="fa-duotone fa-shield-halved fa-2x text-light"></i>
                </div>
                <h5 class="text-white text-uppercase letter-spacing-1 fw-bold mb-1" style="font-family: 'Playfair Display', serif;">
                    The O'Connell Family Trust
                </h5>
                <p class="small font-monospace text-secondary mb-0">
                    Est. 1996 | Blacksburg, Virginia
                </p>
                <div class="mt-3 small text-muted fst-italic">
                    "Stewardship. Sovereignty. Silence."
                </div>
            </div>

            <div class="col-md-4 text-center">
                <h6 class="text-uppercase fw-bold text-white-50 mb-3 small">Governance</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/engine-room/corporate/structure" class="text-decoration-none text-secondary hover-text-white">
                            Organizational Structure
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/engine-room/corporate/aethelgard" class="text-decoration-none text-secondary hover-text-white">
                            Aethelgard Holdings
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/engine-room/corporate/leadership" class="text-decoration-none text-secondary hover-text-white">
                            Executive Leadership
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="/engine-room/corporate/systems" class="text-decoration-none text-info hover-text-white">
                            <i class="fa-solid fa-lock me-1"></i>Internal Systems
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 text-center text-md-end">
                <h6 class="text-uppercase fw-bold text-white-50 mb-3 small">Operating Entities</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/engine-room" class="text-decoration-none text-secondary hover-text-white">
                            Engine Room Records, LLC
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/pacific-rim" class="text-decoration-none text-secondary hover-text-white">
                            Pacific Rim Properties, LLC
                        </a>
                    </li>
                    <li class="mb-0">
                        <span class="text-secondary opacity-50 cursor-not-allowed">
                            Stardust Studios (Restricted)
                        </span>
                    </li>
                </ul>
            </div>

        </div>
        
        <div class="row mt-5 pt-3 border-top border-secondary border-opacity-10 align-items-center">
            
            <div class="col-md-6 text-center text-md-start small font-monospace">
                <p class="mb-0">
                    &copy; 1996-<?php echo date("Y"); ?> The O'Connell Family Revocable Trust.
                </p>
            </div>
            
            <div class="col-md-6 text-center text-md-end small">
                 <div class="d-inline-block px-2 border-end border-secondary border-opacity-25">
                     <span class="text-danger"><i class="fa-solid fa-triangle-exclamation me-1"></i>CONFIDENTIAL</span>
                 </div>
                 <div class="d-inline-block px-2">
                     <a href="/engine-room" class="text-reset text-decoration-none hover-text-white">
                         Exit to Public Site <i class="fa-solid fa-arrow-right-from-bracket ms-1"></i>
                     </a>
                 </div>
            </div>

        </div>
    </div>
</footer>

<style>
    /* Footer Specific Hovers */
    footer a.hover-text-white:hover { color: #fff !important; transition: color 0.2s ease; }
</style>