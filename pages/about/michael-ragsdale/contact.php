<?php
// pages/about/michael-ragsdale/contact.php
// The Recruiter Gate (Pre-Screening Tool)

$pageConfig = [
    'title' => 'Contact & Hiring | Michael P. Ragsdale',
    'sidebar' => 'portfolio/sidebar-portfolio', 
    'scripts' => [
        'https://assets.raggiesoft.com/portfolio/js/recruiter-gate.js' 
    ]
];
?>

<div class="container py-5" style="max-width: 55rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Hiring Inquiries</h1>
            <p class="text-secondary mb-0">Automated pre-screening to ensure alignment.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <p class="lead">
                I prioritize <strong>transparency</strong> and <strong>efficiency</strong>. 
            </p>
            <p class="text-secondary">
                To access my direct contact information, please answer three quick questions. 
                This ensures we are aligned on the fundamentals (Qualifications, Location, and Compensation) 
                before we invest time in a meeting.
            </p>
        </div>
    </div>

    <div id="gate-container" class="mb-5" style="min-height: 400px;">
        <div class="text-center p-5 text-secondary">
            <div class="spinner-border text-primary mb-3" role="status"></div>
            <p>Initializing Pre-Screening Protocols...</p>
        </div>
    </div>

    <div class="text-center small text-muted mt-5">
        <i class="fa-solid fa-shield-check me-1"></i> 
        No data is stored. This check runs entirely in your browser.
    </div>

</div>

<style>
    .fade-in-up { animation: fadeInUp 0.5s ease-out; }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>