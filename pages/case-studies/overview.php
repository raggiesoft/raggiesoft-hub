<?php
// pages/case-studies/index.php
// The Case Study Dashboard

$pageTitle = "Case Studies: Operational Overview";
?>

<div class="container py-5">
    
    <div class="border-bottom pb-4 mb-5">
        <h1 class="display-4 fw-bold mb-2">Operational Archives</h1>
        <p class="lead text-body-secondary">
            A repository of incident reports, logistical audits, and systems architecture analyses. 
            These files demonstrate the application of "Personified DevOps" to real-world scenarios.
        </p>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-6">
            <div class="card h-100 border-danger shadow-sm">
                <div class="card-header bg-danger bg-opacity-10 text-danger fw-bold text-uppercase d-flex justify-content-between align-items-center">
                    <span><i class="fa-duotone fa-heart-pulse me-2"></i>Incident Response</span>
                    <span class="badge bg-danger text-white">Critical</span>
                </div>
                <div class="card-body">
                    <h3 class="card-title fw-bold">The Cascade Protocol</h3>
                    <p class="card-text text-body-secondary mb-3">
                        <strong>Subject:</strong> 2004-CS-02<br>
                        A forensic breakdown of a Level 5 Sensory Meltdown. This study details the manual override protocols ("The Ground Wire") used to stabilize the system after a catastrophic visual trigger.
                    </p>
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="badge bg-body-tertiary text-body-secondary border">Crisis Management</span>
                        <span class="badge bg-body-tertiary text-body-secondary border">Neurodiversity</span>
                    </div>
                    <a href="/case-studies/cascade-protocol" class="btn btn-outline-danger w-100 stretched-link">
                        Access File <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 border-primary shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 text-primary fw-bold text-uppercase d-flex justify-content-between align-items-center">
                    <span><i class="fa-duotone fa-route me-2"></i>Logistics & Routing</span>
                    <span class="badge bg-primary text-white">Analysis</span>
                </div>
                <div class="card-body">
                    <h3 class="card-title fw-bold">The Shenandoah Gauntlet</h3>
                    <p class="card-text text-body-secondary mb-3">
                        <strong>Subject:</strong> 2004-LOG-01<br>
                        An analysis of the I-81 corridor vs. US-11. This study demonstrates "Legacy System Verification" and risk-averse routing algorithms to maintain asset integrity during transport.
                    </p>
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="badge bg-body-tertiary text-body-secondary border">Route Optimization</span>
                        <span class="badge bg-body-tertiary text-body-secondary border">Temporal Auditing</span>
                    </div>
                    <a href="/case-studies/shenandoah-valley" class="btn btn-outline-primary w-100 stretched-link">
                        Access File <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>