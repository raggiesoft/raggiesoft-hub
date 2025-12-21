<?php
// pages/about/michael-ragsdale/overview.php
// The "Lobby" of your Digital Self.
// Accessed via: raggiesoft.com/about/michael-ragsdale

global $cdn_root;
?>

<section class="py-5 text-center">
    <div class="container py-4">
        <div class="mb-4 position-relative d-inline-block">
             <img src="<?php echo $cdn_root; ?>/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                  alt="Michael P. Ragsdale" 
                  class="rounded-circle shadow-lg border border-4 border-white"
                  style="width: 180px; height: 180px; object-fit: cover;">
        </div>
        
        <h1 class="display-4 fw-bold text-body-emphasis mb-2">Michael P. Ragsdale</h1>
        <p class="fs-4 text-primary mb-4 fw-light">
            Architecting accessible, resilient systems since 1997.
        </p>
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <p class="lead text-secondary">
                    I am a <strong>Systems Administrator</strong> and <strong>Full-Stack Developer</strong> driven by a philosophy of "Empathetic Engineering." Whether I am automating Linux infrastructure with Bash or auditing Section 508 compliance, my goal is to build technology that works for everyone.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-6">
                <a href="/about/michael-ragsdale/resume" class="card h-100 text-decoration-none shadow-sm hover-lift border-0 bg-body-tertiary">
                    <div class="card-body text-center p-5">
                        <div class="text-primary mb-3"><i class="fa-duotone fa-file-user fa-3x"></i></div>
                        <h3 class="h4 fw-bold text-body-emphasis">The Resume</h3>
                        <p class="text-secondary small">
                            A detailed timeline of my engineering experience, education, and technical certifications.
                        </p>
                        <span class="btn btn-outline-primary rounded-pill mt-2">View CV</span>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/about/michael-ragsdale/location" class="card h-100 text-decoration-none shadow-sm hover-lift border-0 bg-body-tertiary">
                    <div class="card-body text-center p-5">
                        <div class="text-success mb-3"><i class="fa-duotone fa-map-location-dot fa-3x"></i></div>
                        <h3 class="h4 fw-bold text-body-emphasis">Location</h3>
                        <p class="text-secondary small">
                            Relocation preferences, remote work availability, and office logistics for Virginia.
                        </p>
                        <span class="btn btn-outline-success rounded-pill mt-2">Check Availability</span>
                    </div>
                </a>
            </div>

             <div class="col-md-6">
                <a href="/portfolio" class="card h-100 text-decoration-none shadow-sm hover-lift border-0 bg-body-tertiary">
                    <div class="card-body text-center p-5">
                        <div class="text-warning mb-3"><i class="fa-duotone fa-code-branch fa-3x"></i></div>
                        <h3 class="h4 fw-bold text-body-emphasis">Engineering</h3>
                        <p class="text-secondary small">
                            Deep dive into the RaggieSoft Stack: Elara, Jessica, and the Stardust Engine.
                        </p>
                        <span class="btn btn-outline-warning rounded-pill mt-2">View Projects</span>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/about/michael-ragsdale/contact" class="card h-100 text-decoration-none shadow-sm hover-lift border-0 bg-body-tertiary">
                    <div class="card-body text-center p-5">
                        <div class="text-danger mb-3"><i class="fa-duotone fa-calendar-check fa-3x"></i></div>
                        <h3 class="h4 fw-bold text-body-emphasis">Schedule Interview</h3>
                        <p class="text-secondary small">
                            Ready to discuss a role? Complete a quick pre-screening check to access my <strong>Microsoft Bookings</strong> calendar.
                        </p>
                        <span class="btn btn-outline-danger rounded-pill mt-2">Open Scheduler</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<style>
/* Simple hover effect for the cards */
.hover-lift { transition: transform 0.2s ease, box-shadow 0.2s ease; }
.hover-lift:hover { transform: translateY(-5px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; }
</style>