<?php
// pages/about/michael-ragsdale/resume-printable.php
// Print-Optimized Resume View
// Context: Integrated into Elara but overrides styles for printing.

$pageConfig = [
    'title' => 'Resume - Michael P. Ragsdale',
    'showSidebar' => false // Disable sidebar to maximize width
];
?>

<style>
    /* 1. SCREEN STYLES (What you see in the browser) */
    .resume-container {
        max-width: 8.5in;
        margin: 0 auto;
        background: #fff;
        color: #000;
        padding: 40px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .resume-header { border-bottom: 2px solid #000; padding-bottom: 15px; margin-bottom: 20px; }
    .resume-name { font-size: 2.5rem; font-weight: 700; line-height: 1; text-transform: uppercase; }
    .resume-role { font-size: 1.1rem; color: #444; font-weight: 300; margin-top: 5px; }
    
    .resume-section-title {
        font-size: 1.1rem;
        font-weight: 700;
        text-transform: uppercase;
        border-bottom: 1px solid #ccc;
        margin-top: 25px;
        margin-bottom: 15px;
        color: #0d6efd; /* Blue for screen */
    }

    .job-header { display: flex; justify-content: space-between; align-items: baseline; }
    .company { font-weight: 700; font-size: 1.1rem; }
    .job-title { font-style: italic; color: #333; }
    .dates { font-family: 'JetBrains Mono', monospace; font-size: 0.9rem; color: #666; text-align: right; }
    
    .tech-tag {
        display: inline-block;
        border: 1px solid #dee2e6;
        background-color: #f8f9fa;
        padding: 2px 6px;
        font-size: 0.85rem;
        border-radius: 4px;
        margin-right: 4px;
        margin-bottom: 4px;
        font-family: 'JetBrains Mono', monospace;
    }

    .resume-list { padding-left: 18px; margin-bottom: 10px; }
    .resume-list li { margin-bottom: 4px; line-height: 1.4; }

    /* 2. PRINT STYLES (What happens when you hit CTRL+P) */
    @media print {
        /* HIDE ELARA UI ELEMENTS */
        header, footer, .navbar, #page-loader, .btn-print-controls { 
            display: none !important; 
        }
        
        /* RESET CONTAINER */
        body, main, .container, .container-fluid { 
            background: #fff !important; 
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
        }

        /* FORCE BLACK TEXT */
        .resume-section-title { color: #000 !important; border-bottom: 1px solid #000 !important; }
        .tech-tag { border: 1px solid #aaa !important; background-color: transparent !important; color: #000 !important; }
        a { text-decoration: none !important; color: #000 !important; }
        
        @page { margin: 0.5in; size: letter; }
    }
</style>

<div class="container py-3 mb-4 border-bottom btn-print-controls">
    <div class="d-flex justify-content-between align-items-center">
        <a href="/engine-room/artists/stardust-engine/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm rounded-pill">
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
                <span class="tech-tag">PHP 8+</span>
                <span class="tech-tag">JavaScript (ES6+)</span>
                <span class="tech-tag">Bash / Shell</span>
                <span class="tech-tag">HTML5</span>
                <span class="tech-tag">CSS3 / SCSS</span>
                <span class="tech-tag">Python</span>
            </div>
            
            <div class="col-md-3 fw-bold small">Infrastructure & Cloud:</div>
            <div class="col-md-9">
                <span class="tech-tag">DigitalOcean</span>
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
                <li><strong>Cloud Architecture (2025):</strong> Executed a complete infrastructure migration to a cloud-native DigitalOcean environment. Hardened security via custom Nginx server blocks, utilizing non-standard entry points and directory obfuscation to mitigate automated bot targeting. Implemented Cloudflare for edge-cached DNS and strict SSL encryption.</li>
                <li><strong>Full-Stack Engineering (2022–Present):</strong> Architected "The Stardust Engine," a PHP-based CMS with a custom router ("Elara") and accessibility-focused frontend. Engineered <code>transcode-all.sh</code> to automate media processing pipelines using Bash and FFmpeg.</li>
                <li><strong>Systems Administration (2008–2022):</strong> Managed domain lifecycles, DNS records, and web hosting environments for personal and client portfolios, maintaining 99.9% uptime across varying traffic loads.</li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="job-header">
                <div class="company">Virginia Beach Parks & Recreation</div>
                <div class="dates">May 2023 – Present</div>
            </div>
            <div class="job-title small mb-1">Lead Front Desk Support & Technical Trainer | Virginia Beach, VA</div>
            <ul class="resume-list">
                <li><strong>Workflow Optimization:</strong> Developed a custom workflow to generate accessible, Section 508 compliant, and printer-friendly documents from a legacy system not originally designed for such outputs.</li>
                <li><strong>Systems Training:</strong> Serve as the primary technical trainer for new employees on the ActiveNet Customer Relationship Management (CRM) system, ensuring data integrity and operational consistency.</li>
                <li><strong>Technical Operations:</strong> Supervise front desk operations, making independent technical decisions to resolve patron account issues and secure payment processing.</li>
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
                <li><strong>Remediation & Testing:</strong> Remediated web pages and documents, verifying student code and utilizing tools like Deque axe for detailed reporting.</li>
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
                <li><strong>Digital Administration:</strong> Administered the organization’s Google Workspace for Education environment, re-architecting a disorganized legacy file structure into a streamlined hierarchy that optimized workflow for the executive board.</li>
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