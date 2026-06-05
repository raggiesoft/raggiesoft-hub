<?php
// pages/about/engine-room.php
// Theme: Industrial (Dark, Gritty, Red Accents)
// Layout: Sidebar-Compatible (Contained Header)

$pageTitle = "About Engine Room Records";
?>

<style>
    /* LOGO FIX: Force the black logo to become white */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(200%);
    }
</style>

<div class="card bg-black text-white border-danger mb-5 shadow-sm overflow-hidden">
    <div class="card-body p-5 text-center">
        <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
             alt="Engine Room Records" 
             class="rounded-circle border border-danger border-3 mb-4 shadow logo-invert"
             width="100" height="100">
             
        <h1 class="display-5 fw-bold mb-2 text-uppercase font-monospace" style="letter-spacing: -1px;">
            Engine Room Records
        </h1>
        <p class="fs-5 text-danger font-monospace mb-3 text-uppercase">
            Loud. Raw. Real.
        </p>
        <div class="d-inline-block border-top border-secondary pt-2">
            <p class="text-secondary small text-uppercase letter-spacing-2 mb-0">
                Est. 2026 &bull; Norfolk, VA &bull; Independent
            </p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11">
        
        <!-- Corporate History Narrative -->
        <div class="mb-5">
            <h2 class="h3 fw-bold text-danger mb-4 border-bottom border-secondary pb-2 font-monospace">
                <i class="fa-solid fa-industry me-2" aria-hidden="true"></i>Corporate History
            </h2>
            <p class="lead text-body-emphasis">
                Founded in Norfolk, Virginia, <strong>Engine Room Records</strong> began as a total rejection of the polished, over-produced corporate pop machine.
            </p>
            <p class="text-body-secondary">
                We specialize in <strong>Industrial Rock, Synthwave, and Dark Ambient</strong> architectural soundscapes. Our artists don't just write hooks; they manipulate analog frequencies. They weld sonic environments.
            </p>
        </div>

        <!-- Philosophy and Roster Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 bg-dark text-white border-danger shadow-sm">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h3 class="h5 fw-bold text-danger mb-3 font-monospace"><i class="fa-solid fa-gavel me-2" aria-hidden="true"></i>The Philosophy</h3>
                        <p class="small text-white-50 mb-0 fst-italic">
                            "If it doesn't sound like it was recorded inside a running turbine, we don't want it."
                        </p>
                        <p class="small text-secondary mt-2 mb-0 text-end">- The Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 bg-dark text-white border-secondary shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 fw-bold text-white mb-3 font-monospace"><i class="fa-solid fa-users me-2" aria-hidden="true"></i>The Roster</h3>
                        <ul class="list-unstyled small text-white-50 mb-0">
                            <li class="mb-2"><i class="fa-solid fa-bolt text-warning me-2" aria-hidden="true"></i>The Stardust Engine</li>
                            <li class="mb-2"><i class="fa-solid fa-gem text-info me-2" aria-hidden="true"></i>Fractured Prisms</li>
                            <li class="text-muted"><i class="fa-solid fa-lock text-secondary me-2" aria-hidden="true"></i>[ Next Entry Pending ]</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- REALITY CHECK NOTIFICATION -->
        <div class="card border-secondary bg-body-tertiary mb-5 shadow-sm shadow-sm">
            <div class="card-body d-flex align-items-start p-4">
                <i class="fa-solid fa-circle-info text-danger fs-4 me-3 mt-1" aria-hidden="true"></i>
                <div>
                    <h4 class="h6 fw-bold text-body-emphasis mb-1">Reality Check</h4>
                    <p class="small text-body-secondary mb-0">
                        Engine Room Records is a fictional entity created by Michael Ragsdale to organize his multimedia audio portfolios. It serves strictly as the "Publisher" metadata container across all global digital music distribution channels.
                    </p>
                </div>
            </div>
        </div>

        <!-- RETURN LINK CONTAINER -->
        <div class="text-center border-top border-secondary border-opacity-25 pt-4">
            <a href="/engine-room" class="btn btn-outline-danger font-monospace text-uppercase fw-bold rounded-0 px-4">
                <i class="fa-solid fa-chevron-left me-2" aria-hidden="true"></i>Return to HQ
            </a>
        </div>

    </div>
</div>