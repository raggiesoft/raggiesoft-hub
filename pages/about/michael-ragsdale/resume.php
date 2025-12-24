<?php
// pages/about/michael-ragsdale/resume-printable.php
// Print-Optimized Resume View
// Context: Integrated into Elara but overrides styles for printing.
?>

<style>
    /* 1. SCREEN STYLES (What you see in the browser) */
    .resume-container {
        max-width: 8.5in;
        margin: 0 auto;
        /* UPDATED: Use Bootstrap variables for theme compatibility */
        background: var(--bs-body-bg);
        color: var(--bs-body-color);
        padding: 40px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border: 1px solid var(--bs-border-color); /* Adds definition in Dark Mode */
    }

    /* Use body-color (black/white) for the main header underline to keep it bold */
    .resume-header { border-bottom: 2px solid var(--bs-body-color); padding-bottom: 15px; margin-bottom: 20px; }
    
    .resume-name { font-size: 2.5rem; font-weight: 700; line-height: 1; text-transform: uppercase; }
    
    /* Use secondary-color for subtitle */
    .resume-role { font-size: 1.1rem; color: var(--bs-secondary-color); font-weight: 300; margin-top: 5px; }
    
    .resume-section-title {
        font-size: 1.1rem;
        font-weight: 700;
        text-transform: uppercase;
        /* Use generic border color and primary theme color */
        border-bottom: 1px solid var(--bs-border-color);
        margin-top: 25px;
        margin-bottom: 15px;
        color: var(--bs-primary); 
    }

    .job-header { display: flex; justify-content: space-between; align-items: baseline; }
    .company { font-weight: 700; font-size: 1.1rem; }
    
    .job-title { font-style: italic; color: var(--bs-body-color); opacity: 0.9; }
    .dates { font-family: 'JetBrains Mono', monospace; font-size: 0.9rem; color: var(--bs-secondary-color); text-align: right; }
    
    .tech-tag {
        display: inline-block;
        border: 1px solid var(--bs-border-color);
        background-color: var(--bs-secondary-bg); /* Slight contrast background */
        color: var(--bs-body-color);
        padding: 2px 6px;
        font-size: 0.85rem;
        border-radius: 4px;
        margin-right: 4px;
        margin-bottom: 4px;
        font-family: 'JetBrains Mono', monospace;
    }

    .resume-list { padding-left: 18px; margin-bottom: 10px; }
    .resume-list li { margin-bottom: 4px; line-height: 1.4; }
    
    /* NESTED LIST STYLES */
    .resume-list .resume-list {
        list-style-type: circle;
        margin-top: 4px;
        margin-bottom: 8px;
    }

    /* 2. PRINT STYLES (What happens when you hit CTRL+P) */
    @media print {
        /* HIDE ELARA UI ELEMENTS */
        header, footer, .navbar, #page-loader, .btn-print-controls { 
            display: none !important; 
        }
        
        /* RESET CONTAINER - Force White/Black regardless of Dark Mode */
        body, main, .container, .container-fluid { 
            background: #fff !important;
            color: #000 !important; 
            margin: 0 !important; 
            padding: 0 !important; 
            width: 100% !important; 
            max-width: 100% !important; 
            box-shadow: none !important;
        }

        .resume-container {
            width: 100% !important;
            max-width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            box-shadow: none !important;
            border: none !important;
            background: #fff !important;
            color: #000 !important;
        }

        /* FORCE BLACK TEXT & BORDERS */
        .resume-section-title { color: #000 !important; border-bottom: 1px solid #000 !important; }
        .resume-header { border-bottom: 2px solid #000 !important; }
        .resume-role, .job-title, .dates, .company { color: #000 !important; }
        
        .tech-tag { border: 1px solid #aaa !important; background-color: transparent !important; color: #000 !important; }
        a { text-decoration: none !important; color: #000 !important; }
        
        @page { margin: 0.5in; size: letter; }
    }
</style>

<div class="container py-3 mb-4 border-bottom border-secondary-subtle btn-print-controls">
    <div class="d-flex justify-content-between align-items-center">
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm rounded-pill">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Hub
        </a>
        <div class="d-flex gap-2">
            <a href="https://assets.raggiesoft.com/portfolio/documents/resume/mragsdale-resume.pdf" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                <i class="fa-solid fa-file-pdf me-2"></i>Download PDF
            </a>
            <button onclick="window.print()" class="btn btn-primary btn-sm rounded-pill shadow-sm">
                <i class="fa-solid fa-print me-2"></i>Print This Page
            </button>
        </div>
    </div>
</div>

<div class="resume-container">
    
    <div class="resume-header row">
        <div class="col-8">
            <div class="resume-name">Michael P. Ragsdale</div>
            <div class="resume-role">Systems Architect | Full-Stack Developer | Accessibility Specialist</div>
        </div>
        <div class="col-4 text-end small">
            <div>Norfolk, VA <i class="fa-solid fa-location-dot ms-1 text-secondary"></i></div>
            <div>michaelpragsdale.com <i class="fa-solid fa-globe ms-1 text-secondary"></i></div>
            <div>github.com/raggiesoft <i class="fa-brands fa-github ms-1 text-secondary"></i></div>
        </div>
    </div>

    <div class="mb-4">
        <div class="resume-section-title mt-0">Professional Summary</div>
        <p>
            Systems Administrator and Developer with a philosophy of "Empathetic Engineering." 
            Specializing in building resilient, JSON-driven web architectures and automating complex media pipelines. 
            Committed to WCAG 2.1 / Section 508 compliance and creating technology that respects the user's nervous system.
        </p>
    </div>

    <div class="mb-4">
        <div class="resume-section-title">Technical Arsenal</div>
        <div class="row g-2">
            <div class="col-md-3 fw-bold small">Languages & Scripting:</div>
            <div class="col-md-9">
                <span class="tech-tag">C# / .net 10</span>
                <span class="tech-tag">PHP 8+</span>
                <span class="tech-tag">JavaScript (ES6+)</span>
                <span class="tech-tag">Bash / Shell</span>
                <span class="tech-tag">HTML5</span>
                <span class="tech-tag">CSS3 / SCSS</span>
                <span class="tech-tag">Python</span>
            </div>
            
            <div class="col-md-3 fw-bold small">Infrastructure & Cloud:</div>
            <div class="col-md-9">
                <span class="tech-tag">DigitalOcean (Droplets/Spaces)</span>
                <span class="tech-tag">Nginx</span>
                <span class="tech-tag">Cloudflare</span>
                <span class="tech-tag">Certbot</span>
                <span class="tech-tag">Linux (Ubuntu/Debian)</span>
            </div>

            <div class="col-md-3 fw-bold small">Compliance & Tools:</div>
            <div class="col-md-9">
                <span class="tech-tag">WCAG 2.1 AA</span>
                <span class="tech-tag">Section 508</span>
                <span class="tech-tag">Deque axe</span>
                <span class="tech-tag">ActiveNet CRM</span>
                <span class="tech-tag">Git</span>
                <span class="tech-tag">Microsoft 365</span>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <div class="resume-section-title">Relevant Technical Experience</div>
        
        <div class="mb-3">
            <div class="job-header">
                <div class="company">RaggieSoft (Personal Brand & Projects)</div>
                <div class="dates">Est. 2008 – Present</div>
            </div>
            <div class="job-title small mb-1">Founder & Systems Architect | Norfolk, VA</div>
            
            <ul class="resume-list">
                <li>
                    <strong>Personified DevOps Ecosystem (Bash/Shell):</strong> Architected "The Family," a decoupled CI/CD pipeline designed for security through isolation on the production server ("Jessica").
                    <ul class="resume-list">
                        <li><strong>"Jenna" (Dev-Side):</strong> A local synchronization agent (<code>jenna-sync.sh</code>) that manages version control and pushes encrypted assets to <strong>DigitalOcean Spaces</strong> via <strong>rclone</strong>.</li>
                        <li><strong>"Sarah" (Server-Side):</strong> An autonomous deployment guardian (<code>sarah-deploy.sh</code>) that performs hash-based integrity checks against GitHub and executes "sudo-less" atomic updates, strictly enforcing <strong>SetGID</strong> permissions to mitigate privilege escalation.</li>
                    </ul>
                </li>
                <li>
                    <strong>Security & Routing Topology:</strong> Engineered a non-standard web architecture to mitigate automated bot attacks.
                    <ul class="resume-list">
                        <li><strong>"Amanda" (The Fortress):</strong> Configured <strong>Nginx</strong> to serve from an obfuscated directory (<code>/amanda</code>) rather than standard public paths, protecting core assets from scraping.</li>
                        <li><strong>"Elara" (The Gatekeeper):</strong> Developed a custom <strong>PHP 8</strong> single-entry router (<code>elara.php</code>) that intercepts and sanitizes 100% of incoming traffic before dispatching to view controllers.</li>
                    </ul>
                </li>
                <li><strong>Systems Engineering:</strong> Engineered <strong>"Silas,"</strong> a proprietary <strong>.NET 10</strong> ecosystem comprising a server-side integrity guardian and a <strong>MAUI</strong> desktop architect, providing a strictly typed GUI for managing complex JSON data shards, eliminating manual syntax errors.</li>
                <li>
                    <strong>Creative Automation (Python/FFmpeg):</strong> Developed specialized processing agents to manage the "Stardust" narrative universe.
                    <ul class="resume-list">
                        <li><strong>"Paige" (Literary Editor):</strong> A <strong>Python</strong> utility (<code>process_book.py</code>) that ingests raw Docx manuscripts and compiles them into structured JSON for the WCAG-compliant web reader.</li>
                        <li><strong>"Harper" (Studio Engineer):</strong> A <strong>Bash</strong>-based audio pipeline (<code>transcode-all.sh</code>) that recursively scans master recordings and automates <strong>FFmpeg</strong> transcoding for web-optimized streaming.</li>
                    </ul>
                </li>
                <li><strong>Empathetic Engineering:</strong> Developed <strong>"Lyra"</strong> (<code>lyra.sh</code>), a "Silent Safety" data sanitization engine that preemptively prunes user-defined trigger terms from imported datasets, ensuring a psychologically safe workflow for neurodivergent users.</li>
                <li><strong>Full-Stack Development:</strong> Architected "The Stardust Engine," a JSON-driven media platform featuring a <strong>Hotwire Turbo</strong> "No-Build" frontend and a persistent, event-driven audio player.</li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="job-header">
                <div class="company">Virginia Beach Parks & Recreation</div>
                <div class="dates">May 2023 – Present</div>
            </div>
            <div class="job-title small mb-1">Operations Support & Technical Lead | Virginia Beach, VA</div>
            <ul class="resume-list">
                <li><strong>Legacy Data Normalization & Compliance:</strong> Developed a manual ETL (Extract-Transform-Load) process to bridge gaps in a legacy municipal reservation system. Converts raw scheduling data into <strong>Section 508 compliant</strong>, accessible operational documents, enriching the output with cross-facility resource availability to optimize staff decision-making.</li>
                <li><strong>Technical Training & Onboarding:</strong> Serves as the primary trainer for the <strong>ActiveNet CRM</strong>, instructing new staff on data integrity protocols, payment processing security, and complex account management to ensure operational consistency.</li>
                <li><strong>Operational Leadership:</strong> Functions as a rotating Shift Supervisor, overseeing financial reconciliation for high-volume transactions (memberships, private rentals, and POS). Acts as the primary escalation point for resolving complex patron account issues and facility logistical conflicts.</li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="job-header">
                <div class="company">ODU Online (Old Dominion University)</div>
                <div class="dates">Nov 2019 – Jul 2022</div>
            </div>
            <div class="job-title small mb-1">Section 508 Compliance Specialist | Norfolk, VA</div>
            <ul class="resume-list">
                <li><strong>Accessibility Compliance:</strong> Ensured WCAG 2.1 AA & Section 508 compliance for online courses, serving as a critical checkpoint before content publication.</li>
                <li><strong>Remediation & Testing:</strong> Remediated web pages and documents, verifying student code and utilizing tools like <strong>Deque axe</strong> for detailed reporting.</li>
                <li><strong>Migration Support:</strong> Provided technical support to instructional designers during a large-scale migration to the Canvas LMS.</li>
                <li><strong>Standardization:</strong> Designed and developed a universal, accessible template for the University Policies section of the syllabus, streamlining the workflow for faculty.</li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="job-header">
                <div class="company">Residence Hall Association (ODU)</div>
                <div class="dates">Sep 2015 – May 2017</div>
            </div>
            <div class="job-title small mb-1">Director of Administration | Norfolk, VA</div>
            <ul class="resume-list">
                <li><strong>Digital Administration:</strong> Administered the organization’s <strong>Google Workspace for Education</strong> environment, re-architecting a disorganized legacy file structure into a streamlined hierarchy that optimized workflow for the executive board.</li>
                <li><strong>Leadership:</strong> Elected by the student body to manage all administrative functions, ensuring the accurate retention of official minutes, legislation, and organizational history.</li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="job-header">
                <div class="company">Dominion Enterprises</div>
                <div class="dates">Sep 2012 – Dec 2012</div>
            </div>
            <div class="job-title small mb-1">Mobile Applications Developer Intern | Norfolk, VA</div>
            <ul class="resume-list">
                <li><strong>Mobile Development:</strong> Gained hands-on experience in cross-platform mobile development for Android & iOS using the Titanium SDK.</li>
                <li><strong>App Creation:</strong> Developed and deployed a "Real Estate Dictionary" mobile application to demonstrate proficiency with the SDK and mobile architecture.</li>
            </ul>
        </div>
    </div>

    <div class="mb-4">
        <div class="resume-section-title">Education</div>
        
        <div class="job-header mb-1">
            <div class="company">Tidewater Community College</div>
            <div class="dates">Expected Dec 2026</div>
        </div>
        <div class="small mb-2">Associate of Science, Information Technology <span class="text-muted">| Focus: Software Engineering & Web Dev</span></div>

        <div class="job-header mb-1">
            <div class="company">Old Dominion University</div>
            <div class="dates">In Progress</div>
        </div>
        <div class="small mb-2">Bachelor of Science, Customized Studies in Leadership <span class="text-muted">| Focus: Org Leadership & Project Mgmt</span></div>

        <div class="job-header mb-1">
            <div class="company">Wilson Workforce & Rehabilitation Center</div>
            <div class="dates">2011</div>
        </div>
        <div class="small">Certificate, Business & Information Technology</div>
    </div>

</div>