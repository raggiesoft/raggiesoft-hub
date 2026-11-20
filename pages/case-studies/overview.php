<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/case-studies/overview.php
 * Role: Operational Archives Landing Dashboard (`https://raggiesoft.com/case-studies`)
 * Route Manifest: `/data/routes/case-studies.json` -> `"/case-studies"`
 *                 (Never linked as `/case-studies/overview`—clean directory URL!)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Serves as the index dashboard for the RaggieSoft Operational Archives,
 * displaying equal-height (`h-100`) summary cards for *The Cascade Protocol*
 * (`/case-studies/cascade-protocol`) and *The Shenandoah Gauntlet*
 * (`/case-studies/shenandoah-valley`), alongside the persistent left-hand
 * `sidebar-case-studies.php` menu (which also links to `/case-studies/phys-100-report`).
 *
 * CSS STRETCHED-LINK NOTE:
 * Notice `stretched-link` on each card's `<a>` button: in CSS, `.stretched-link::after`
 * expands an invisible clickable overlay across the nearest `position: relative`
 * parent `.card`, making the entire card clickable with both mouse and keyboard!
 *
 * INPUTS:
 * - Static SSR view partial; sets `$pageTitle`.
 *
 * OUTPUT PRODUCED:
 * - 2-column (`col-lg-6`) DaisyUI 5 `.card` index rendered inside `<main id="main-content">`.
 * ============================================================================
 *
 * RaggieSoft Architecture - Page Component
 * 
 * File: pages/case-studies/overview.php
 * Component: Case Study Dashboard
 * Type: Index / Overview
 * 
 * Description:
 * A repository dashboard listing incident reports and systems architecture analyses.
 * Demonstrates the application of "Personified DevOps" to real-world scenarios.
 *
 * Maintenance Notes:
 * - Static index mapping to individual case studies.
 * - Uses Bootstrap grid and badge components for visual hierarchy.
 */
// pages/case-studies/index.php
// The Case Study Dashboard

$pageTitle = "Case Studies: Operational Overview";
?>

<div class="container py-5">
    
    <?php /* Dashboard Header (`<h1>Operational Archives</h1>`) */ ?>
    <div class="border-bottom pb-4 mb-5">
        <h1 class="display-4 fw-bold mb-2">Operational Archives</h1>
        <p class="lead text-body-secondary">
            A repository of incident reports, logistical audits, and systems architecture analyses. 
            These files demonstrate the application of "Personified DevOps" to real-world scenarios.
        </p>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-6">
            <div class="card bg-base-200 border border-base-300 h-100 border-danger shadow-sm w-100" style="--body-padding: 0; --header-padding: 0;">

                <div class="card-header bg-danger bg-opacity-10 text-danger fw-bold text-uppercase d-flex justify-content-between align-items-center p-3">
                    <span><i class="ph-duotone ph-heartbeat me-2"></i>Incident Response</span>
                    <span class="badge badge-error">Critical</span>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title fw-bold">The Cascade Protocol</h3>
                    <p class="card-text text-body-secondary mb-3">
                        <strong>Subject:</strong> 2004-CS-02<br>
                        A forensic breakdown of a Level 5 Sensory Meltdown. This study details the manual override protocols ("The Ground Wire") used to stabilize the system after a catastrophic visual trigger.
                    </p>
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="badge badge-neutral badge-outline text-body-secondary">Crisis Management</span>
                        <span class="badge badge-neutral badge-outline text-body-secondary">Neurodiversity</span>
                    </div>
                    <a href="/case-studies/cascade-protocol" class="btn btn-error btn-outline w-100 stretched-link">
                        Access File <i  class="ph-duotone ph-arrow-right"></i>
                    </a>
                </div>
            
</div>
        </div>

        <div class="col-lg-6">
            <div class="card bg-base-200 border border-base-300 h-100 border-primary shadow-sm w-100" style="--body-padding: 0; --header-padding: 0;">

                <div class="card-header bg-primary bg-opacity-10 text-primary fw-bold text-uppercase d-flex justify-content-between align-items-center p-3">
                    <span><i class="ph-duotone ph-path me-2"></i>Logistics & Routing</span>
                    <span class="badge badge-primary">Analysis</span>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title fw-bold">The Shenandoah Gauntlet</h3>
                    <p class="card-text text-body-secondary mb-3">
                        <strong>Subject:</strong> 2004-LOG-01<br>
                        An analysis of the I-81 corridor vs. US-11. This study demonstrates "Legacy System Verification" and risk-averse routing algorithms to maintain asset integrity during transport.
                    </p>
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="badge badge-neutral badge-outline text-body-secondary">Route Optimization</span>
                        <span class="badge badge-neutral badge-outline text-body-secondary">Temporal Auditing</span>
                    </div>
                    <a href="/case-studies/shenandoah-valley" class="btn btn-primary btn-outline w-100 stretched-link">
                        Access File <i  class="ph-duotone ph-arrow-right"></i>
                    </a>
                </div>
            
</div>
        </div>

    </div>
</div>