<?php
// pages/about/engine-room.php
// Theme: Industrial (Dark, Gritty, Red Accents)
// Layout: Sidebar-Compatible (Contained Header)
?>
<style>
/* LOGO FIX: Force the black logo to become white */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(200%);
    }
</style>
<div class="card bg-black text-white border-danger mb-5 shadow-sm overflow-hidden position-relative">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background-image: url('https://assets.raggiesoft.com/common/patterns/grid-noise.png'); opacity: 0.2; pointer-events: none;">
    </div>

    <div class="card-body p-5 text-center position-relative" style="z-index: 2;">
        <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
             alt="Engine Room Records" 
             class="rounded-circle border border-danger border-3 mb-4 shadow logo-invert"
             width="100" height="100">
             
        <h1 class="display-5 fw-bold mb-2 text-uppercase" style="font-family: 'Courier New', monospace; letter-spacing: -1px;">
            Engine Room Records
        </h1>
        <p class="fs-5 text-danger font-monospace mb-3 text-uppercase">
            Loud. Raw. Real.
        </p>
        <div class="d-inline-block border-top border-secondary pt-2">
            <p class="text-secondary small text-uppercase letter-spacing-2 mb-0">
                Est. 1992 &bull; Blacksburg, VA &bull; Independent
            </p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11">
        
        <div class="mb-5">
            <h3 class="fw-bold text-danger mb-4 border-bottom border-secondary pb-2" style="font-family: 'Courier New', monospace;">
                <i class="fa-solid fa-industry me-2"></i>Corporate History
            </h3>
            <p class="lead text-dark">
                Founded in a converted warehouse in the industrial district of Blacksburg, <strong>Engine Room Records</strong> began as a rejection of the polished, over-produced pop of the early 90s.
            </p>
            <p class="text-muted">
                We specialize in <strong>Industrial Rock, Synthwave, and Dark Ambient</strong>. Our artists don't just play instruments; they build machines. They weld soundscapes.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 bg-dark text-white border-danger shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-danger mb-3"><i class="fa-solid fa-gavel me-2"></i>The Philosophy</h5>
                        <p class="small text-white-50 mb-0 fst-italic">
                            "If it doesn't sound like it was recorded inside a running turbine, we don't want it."
                        </p>
                        <p class="small text-secondary mt-2 mb-0 text-end">- The Founder, 1993</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 bg-dark text-white border-secondary shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-white mb-3"><i class="fa-solid fa-users me-2"></i>The Roster</h5>
                        <ul class="list-unstyled small text-white-50 mb-0">
                            <li class="mb-2"><i class="fa-solid fa-bolt text-warning me-2"></i>The Stardust Engine</li>
                            <li class="mb-2"><i class="fa-solid fa-fire text-danger me-2"></i>Firelight</li>
                            <li><i class="fa-solid fa-microchip text-info me-2"></i>System Override</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-light border border-secondary d-flex align-items-start shadow-sm" role="alert">
            <i class="fa-solid fa-circle-info text-danger fs-5 me-3 mt-1"></i>
            <div class="small text-muted">
                <strong>Reality Check:</strong> Engine Room Records is a fictional entity created by Michael Ragsdale to organize his musical projects. It serves as the "Publisher" metadata for all distributed tracks.
            </div>
        </div>

    </div>
</div>