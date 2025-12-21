<?php
// pages/about/michael-ragsdale/salary.php
// Interactive Salary Negotiator
// UPDATED: Now uses the unified 'recruiter-gate.js' engine for consistent logic.

$pageConfig = [
    'title' => 'Salary Requirements | Michael P. Ragsdale',
    'sidebar' => 'portfolio/sidebar-portfolio', 
    'scripts' => [
        // POINT THIS TO THE SUPERIOR SCRIPT
        'https://assets.raggiesoft.com/portfolio/js/recruiter-gate.js' 
    ]
];
?>

<div class="container py-5" style="max-width: 50rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Salary Requirements</h1>
            <p class="text-secondary mb-0">Transparent compensation alignment.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <div class="mb-5">
        <p class="lead">
            I believe in <strong>open communication</strong> from the very first interaction. 
        </p>
        <p>
            As a developer committed to efficiency, I provide this tool to help recruiters quickly determine if our expectations align. This saves us both the time of scheduling a screening call only to discover a mismatch in budget.
        </p>
    </div>
    
    <div id="gate-container" class="mb-5">
        <div class="text-center p-5 text-secondary">
            <div class="spinner-border text-primary mb-3" role="status"></div>
            <p>Loading Negotiator Logic...</p>
        </div>
    </div>

    <div class="alert alert-light border small text-muted">
        <i class="fa-solid fa-circle-info me-2"></i>
        <strong>Employment Type:</strong> This tool assumes a standard full-time role (W2) with typical benefits. 
        Please note that <strong>I do not accept Contract (1099) roles</strong>.
    </div>

</div>