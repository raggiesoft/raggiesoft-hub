<?php
// pages/engine-room/jessica-miller-center/the-quiet-floor.php
// The Quiet Floor - Level 40 Sanctuary
// Context: Public amenity guide for tenants of The Jessica Miller Center.
// UPDATED: Zone C Reclamation & Stim Library Hygiene Policies

$pageTitle = "The Quiet Floor - Level 40 Sanctuary";
?>

<style>
    /* Custom "Soft" Theme for this page only */
    .quiet-card {
        background-color: #1a1e24; /* Soft Charcoal */
        border: 1px solid #2d333b;
        color: #aeb5bc;
    }
    .text-calm {
        color: #7dd3fc; /* Sky Blue */
    }
    .text-restore {
        color: #c4b5fd; /* Soft Lavender */
    }
    .feature-icon {
        background-color: rgba(255,255,255,0.05);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-secondary text-white rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-secondary">
                <i class="fa-solid fa-universal-access me-2"></i>Building-Wide Amenity
            </span>
            <h1 class="display-4 fw-light text-white mb-2" style="font-family: 'Helvetica Neue', sans-serif;">
                The Quiet Floor
            </h1>
            <p class="lead text-restore font-monospace">
                Level 40. No emails. No meetings. No hierarchy.
            </p>
            <p class="small text-muted mb-0">
                Managed by The Jessica Miller Center. Accessible to all tenants of 2000 Avenue of the Stars.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card quiet-card shadow-lg">
                <div class="card-body p-5 text-center">
                    <i class="fa-duotone fa-ear-muffs fa-3x text-calm mb-4"></i>
                    <h3 class="h4 text-white fw-light mb-4">"The world is loud. This floor is not."</h3>
                    <p class="mb-4" style="line-height: 1.8;">
                        Formerly an executive penthouse restricted to the elite few, Level 40 has been reimagined as a <strong>Sensory Regulation Zone</strong> for everyone. Whether you are neurodivergent and need to reset your nervous system, or simply an accountant having a stressful day, this space is for you.
                    </p>
                    <div class="d-flex justify-content-center gap-4 text-white-50 font-monospace small text-uppercase">
                        <span><i class="fa-solid fa-ban text-danger me-2"></i>No Talking</span>
                        <span><i class="fa-solid fa-ban text-danger me-2"></i>No Phone Calls</span>
                        <span><i class="fa-solid fa-ban text-danger me-2"></i>No Shoes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-6 col-lg-4">
            <div class="card quiet-card h-100">
                <div class="card-body p-4">
                    <div class="feature-icon">
                        <i class="fa-duotone fa-moon-stars fa-2x text-restore"></i>
                    </div>
                    <h5 class="text-white">Zone A: The Void</h5>
                    <p class="small text-muted mb-3">Zero-Lumen Rest Area</p>
                    <ul class="list-unstyled small text-white-50 mb-0">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Soundproof Nap Pods:</strong> Four "Metronaps" energy pods with active noise cancellation.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Blackout Curtains:</strong> Total darkness for migraine management.</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i><strong>Weighted Blankets:</strong> 15lb, 20lb, and 25lb options available (sanitized daily).</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card quiet-card h-100">
                <div class="card-body p-4">
                    <div class="feature-icon">
                        <i class="fa-duotone fa-hands-holding-circle fa-2x text-calm"></i>
                    </div>
                    <h5 class="text-white">Zone B: Deep Pressure</h5>
                    <p class="small text-muted mb-3">Proprioceptive Input Area</p>
                    <ul class="list-unstyled small text-white-50 mb-0">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Compression Canoes:</strong> Inflatable squeeze-chairs for deep pressure regulation.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Body Socks:</strong> Lycra resistance tunnels for kinesthetic feedback.</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i><strong>Rocking Chairs:</strong> Heavy-duty, silent-glide rockers for vestibular soothing.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card quiet-card h-100 border-success">
                <div class="card-body p-4 position-relative overflow-hidden">
                    
                    <div class="position-absolute top-0 end-0 p-2 text-success opacity-50 small fw-bold text-uppercase">
                        <i class="fa-solid fa-heart me-1"></i> Staff Favorite
                    </div>

                    <div class="feature-icon">
                        <i class="fa-duotone fa-trees fa-2x text-success"></i>
                    </div>
                    <h5 class="text-white">Zone C: The Biophilic Atrium</h5>
                    <p class="small text-muted mb-3">Nature & Light Therapy</p>
                    
                    <p class="small text-white-50 fst-italic mb-3">
                        "We took the office where they used to yell at us, removed the desk, and filled it with moss. It is very quiet here now."
                    </p>

                    <ul class="list-unstyled small text-white-50 mb-0">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Living Walls:</strong> Air-purifying moss and fern installations.</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i><strong>Circadian Lighting:</strong> Tunable LEDs that mimic the exact color temperature of the sun outside.</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i><strong>Spatial Audio:</strong> 360° generative ambient soundscapes.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-black border-secondary">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4 bg-dark p-4 text-center border-end border-secondary">
                        <i class="fa-duotone fa-cubes-stacked fa-4x text-muted mb-3"></i>
                        <h5 class="text-white mb-0">The Stim Library</h5>
                        <small class="text-muted">Located at Reception (Floor 38)</small>
                    </div>
                    <div class="col-md-8 p-4">
                        
                        <h6 class="text-success text-uppercase small letter-spacing-1 mb-2">Loaner Gear (Sanitized Daily)</h6>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary">Noise-Canceling Headphones (Sony/Bose)</span>
                            <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary">Weighted Lap Pads</span>
                            <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary">Mechanical Fidget Cubes</span>
                            <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary">Liquid Motion Bubblers</span>
                        </div>

                        <h6 class="text-warning text-uppercase small letter-spacing-1 mb-2">Complimentary (Yours to Keep)</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning">Chewelry (Food-Grade Silicone)</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning">Textured Tangles</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning">Aromatherapy Inhalers</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning">High-Fidelity Earplugs</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <p class="small text-muted mb-2 text-uppercase fw-bold letter-spacing-1">How to Access</p>
            <p class="text-white-50">
                Your standard building badge works on the 40th Floor elevators. <br>
                <strong>Operating Hours:</strong> Standard Building Hours (Mon-Fri).<br>
                <span class="small text-muted">Synced with Lobby Security to ensure access for early arrivals and late departures.</span><br>
                No reservation required.
            </p>
            <p class="text-restore fst-italic mt-4">
                "We built this because nobody should have to hide in a bathroom stall to catch their breath."
                <br>— Jessica Miller, Executive Director
            </p>
        </div>
    </div>

</div>