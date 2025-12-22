<?php
// pages/about/michael-ragsdale/overview.php
// The "Lobby" of your Digital Self.
// Accessed via: raggiesoft.com/about/michael-ragsdale

global $cdn_root;
?>

<section class="py-5 text-center">
    <div class="container py-4">
        <div class="mb-4 position-relative d-inline-block">
             <img src="<?php echo $cdn_root; ?>/common/images/mragsdale.jpg" 
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
                            A detailed record of my employment history, education, and technical certifications.
                        </p>
                        <span class="btn btn-outline-primary rounded-pill mt-2">View Resume</span>
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
                <a href="/about/michael-ragsdale/profile" class="card h-100 text-decoration-none shadow-sm hover-lift border-0 bg-body-tertiary">
                    <div class="card-body text-center p-5">
                        <div class="text-warning mb-3"><i class="fa-duotone fa-layer-group fa-3x"></i></div>
                        <h3 class="h4 fw-bold text-body-emphasis">Professional Profile</h3>
                        <p class="text-secondary small">
                            A technical timeline of my evolution from legacy coding to modern cloud architecture.
                        </p>
                        <span class="btn btn-outline-warning rounded-pill mt-2">View Skills & History</span>
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
    <div class="row mt-5">
            <div class="col-12">
                <h3 class="h6 text-uppercase text-secondary fw-bold mb-4 border-bottom pb-2">
                    <i class="fa-duotone fa-infinity me-2"></i>Beyond the Terminal
                </h3>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-dark text-white overflow-hidden position-relative">
                    <div class="card-body p-4 position-relative z-1">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-white text-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                <i class="fa-solid fa-terminal"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-0">The Architecture</h4>
                        </div>
                        <p class="card-text text-light opacity-75 mb-4">
                            This platform is not just a website; it is an ecosystem managed by <strong>Silas</strong>, my custom .NET 10 System Guardian. I build the tools that build the web.
                        </p>
                        <span class="badge border border-light rounded-pill px-3 py-2">
                            <i class="fa-brands fa-microsoft me-2"></i>Powered by .NET & MAUI
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-primary text-white overflow-hidden">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-white text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                <i class="fa-solid fa-book-sparkles"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-0">The Narrative</h4>
                        </div>
                        <p class="card-text text-white opacity-75 mb-4">
                            My technical logic is balanced by creative exploration. From <em>The Stardust Engine</em> to <em>Veridia Prime</em>, I construct fictional universes that explore resilience and family.
                        </p>
                        <a href="/fiction" class="btn btn-outline-light rounded-pill btn-sm stretched-link">
                            Explore the Library <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
.hover-lift { transition: transform 0.2s ease, box-shadow 0.2s ease; }
.hover-lift:hover { transform: translateY(-5px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; }
</style>