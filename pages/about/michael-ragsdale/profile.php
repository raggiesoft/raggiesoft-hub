<?php
// pages/about/michael-ragsdale/profile.php
// The Recruiter-Friendly "Mission Profile"
// Translates the immersive About page into a clean, scannable professional timeline.

$pageTitle = "Professional Profile | Michael Ragsdale";
?>

<div class="container py-5" style="max-width: 60rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Professional Profile</h1>
            <p class="text-secondary mb-0">Technical competencies and evolutionary timeline.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <div class="row mb-5">
        <div class="col-lg-10">
            <p class="lead text-dark">
                I am a <strong>Systems Architect</strong> bridging the gap between legacy infrastructure and modern cloud reliability.
            </p>
            <p class="text-secondary">
                My career is defined by a continuous evolution from self-taught scripting (1997) to enterprise-grade cloud migration (2025). I build accessible, narrative-driven web experiences using robust full-stack solutions.
            </p>
        </div>
    </div>

    <div class="card shadow-sm border-0 mb-5">
        <div class="card-header bg-primary bg-opacity-10 border-bottom border-primary-subtle py-3">
            <h2 class="h5 fw-bold text-primary mb-0"><i class="fa-duotone fa-microchip me-2"></i>Technical Arsenal</h2>
        </div>
        <div class="card-body p-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <h3 class="h6 text-uppercase text-muted fw-bold mb-3">Core Infrastructure</h3>
                    <div class="d-flex flex-wrap">
                        <span class="skill-pill">PHP 8.4 (MVC)</span>
                        <span class="skill-pill">C# / .NET</span>
                        <span class="skill-pill">DigitalOcean</span>
                        <span class="skill-pill">Cloudflare</span>
                        <span class="skill-pill">Nginx</span>
                        <span class="skill-pill">Linux (Bash/ZSH)</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="h6 text-uppercase text-muted fw-bold mb-3">Frontend & Accessibility</h3>
                    <div class="d-flex flex-wrap">
                        <span class="skill-pill">HTML5</span>
                        <span class="skill-pill">Bootstrap 5</span>
                        <span class="skill-pill">WCAG 2.1 AA</span>
                        <span class="skill-pill">Section 508</span>
                        <span class="skill-pill">JavaScript (ES6+)</span>
                        <span class="skill-pill">Hotwire / Turbo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="h4 fw-bold mb-4 border-start border-4 border-warning ps-3">Evolutionary Timeline</h3>
    
    <div class="timeline-container ps-2 border-start border-2 border-secondary border-opacity-10 ms-2">
        
        <div class="ms-4 mb-5 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-warning rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-warning text-dark mb-2">2025</div>
            <h4 class="h5 fw-bold">Cloud Migration & Modernization</h4>
            <p class="text-muted small mb-0">
                Migrated the entire RaggieSoft infrastructure from legacy Shared Hosting to <strong>DigitalOcean</strong> cloud droplets. 
                Implemented <strong>Cloudflare</strong> for global CDN, strict SSL, and DDoS protection. 
                Deployed the "Elara" MVC Router to production.
            </p>
        </div>

        <div class="ms-4 mb-5 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-secondary rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-secondary mb-2">2022</div>
            <h4 class="h5 fw-bold">Full-Stack Commitment</h4>
            <p class="text-muted small mb-0">
                Shifted professional focus to modern web standards. Adopted <strong>Bootstrap 5</strong> as a core framework and integrated <strong>WCAG/Accessibility</strong> compliance as a non-negotiable standard in all development projects.
            </p>
        </div>

        <div class="ms-4 mb-5 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-secondary rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-secondary mb-2">2021</div>
            <h4 class="h5 fw-bold">Systems Programming (C#)</h4>
            <p class="text-muted small mb-0">
                Expanded toolset beyond web scripting into desktop and backend logic using C# and .NET, strengthening understanding of object-oriented programming principles.
            </p>
        </div>

        <div class="ms-4 mb-5 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-secondary rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-secondary mb-2">2010</div>
            <h4 class="h5 fw-bold">The Server-Side Era</h4>
            <p class="text-muted small mb-0">
                Began learning <strong>PHP</strong> for server automation and dynamic content generation. 
                Earned Certificate in <em>Business & Information Technology</em> from Wilson Workforce & Rehabilitation Center.
            </p>
        </div>

        <div class="ms-4 mb-5 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-secondary rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-secondary mb-2">2008</div>
            <h4 class="h5 fw-bold">Founding of RaggieSoft</h4>
            <p class="text-muted small mb-0">
                Established personal brand domain. Driven by the need for a publishing platform for narrative fiction (started in 2007), RaggieSoft became the sandbox for testing new web technologies.
            </p>
        </div>

        <div class="ms-4 mb-3 position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-x bg-secondary rounded-circle border border-white" style="width: 16px; height: 16px; left: -1.6rem;"></div>
            <div class="badge bg-secondary mb-2">1997 - 1998</div>
            <h4 class="h5 fw-bold">The Foundation</h4>
            <p class="text-muted small mb-0">
                Wrote first lines of <strong>HTML</strong> (1997) and <strong>Visual Basic 6.0</strong> (1998). 
                Sparked a lifelong passion for systems logic, interface design, and digital architecture.
            </p>
        </div>

    </div>

    <div class="mt-5 text-center p-4 bg-body-tertiary rounded-4 border">
        <h3 class="h5 fw-bold text-secondary mb-3">Aligns with your needs?</h3>
        <a href="/about/michael-ragsdale/contact" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
            <i class="fa-duotone fa-calendar-check me-2"></i>Check Availability & Salary
        </a>
    </div>

</div>