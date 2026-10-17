<?php
/**
 * Pathfinder West Strategy Guide - Hail Mary Overview
 * 
 * ARCHITECTURAL OVERVIEW:
 * This page serves as the Table of Contents/Overview for the "Pasco Hail Mary" 
 * Golden Ending strategy guide in the Pathfinder West narrative section.
 * 
 * LORE CONTEXT:
 * Details a high-stakes fictional journey across the United States within the 
 * RaggieSoft Games universe.
 * 
 * LOGIC & CONSTRAINTS:
 * - Includes standard `header.php` and `footer.php` for page layout.
 * - Utilizes the `narrative-stepper.php` component at the bottom to generate 
 *   Prev/Next navigation links.
 * - Variables `$pageTitle` and `$metaDescription` must be defined before the header 
 *   inclusion for proper SEO and `<title>` rendering.
 * 
 * File Info: /pages/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary-pasco/overview.php
 */

$pageTitle = "Strategy Guide: The Pasco Hail Mary | Pathfinder West";
$metaDescription = "The complete narrative strategy guide for achieving the Pasco Hail Mary Golden Ending in Pathfinder West.";
?>

<div class="container my-5 strategy-guide-overview">
    <header class="mb-5 pb-3 border-bottom border-secondary-subtle">
        <wa-badge variant="warning" appearance="accent" class="mb-2">Golden Ending Walkthrough</wa-badge>
        <h1 class="display-4 fw-bold">The Pasco Hail Mary</h1>
        <h2 class="text-body-secondary fs-4">Pathfinder West: Official Narrative Strategy Guide</h2>
        
        <wa-card class="mt-4 shadow-sm">
            <div slot="header" class="fw-bold text-uppercase tracking-wider">
                <i class="fa-duotone fa-sliders me-2 text-primary"></i>Run Parameters
            </div>
            <ul class="mb-0 lh-lg">
                <li><strong>Ending Category:</strong> The Golden Ending</li>
                <li><strong>Party Composition:</strong> The Full Band (Roxy, Allison, Alanna)</li>
                <li><strong>Starting Budget:</strong> $1,500 (Band Tour Fund)</li>
                <li><strong>Target Intercept:</strong> Pasco Intermodal Terminal (Pre-Assault Threshold)</li>
            </ul>
        </wa-card>
    </header>

    <section class="table-of-contents mb-5">
        <h3 class="mb-3 fw-bold">Table of Contents</h3>
        <p class="lead text-body-secondary">Follow Roxy's journey as she balances the grueling reality of a cross-country sprint against the invisible ticking clock of the Pathfinder schedule. This guide details the exact route, financial risks, and dialogue choices required to secure the Pasco Hail Mary intercept.</p>

        <div class="d-flex flex-column gap-3 mt-4">
            <wa-card class="shadow-sm">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1 h5 fw-bold">Chapter 1: The False Start</h4>
                        <p class="mb-0 text-body-secondary small">Hampton Roads, VA &mdash; Navigating the Newport decoy and mitigating the Chesapeake Bay Bridge-Tunnel toll trap.</p>
                    </div>
                    <wa-button href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-01" variant="brand" appearance="outlined" size="small">
                        Read Chapter 1 <i slot="end" class="fa-solid fa-arrow-right"></i>
                    </wa-button>
                </div>
            </wa-card>
            
            <wa-card class="shadow-sm">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1 h5 fw-bold">Chapter 2: The Cipher</h4>
                        <p class="mb-0 text-body-secondary small">Appalachia to the Midwest &mdash; Decoding the <em>Static &amp; Silence</em> CD and executing the I-85 Southern Cut.</p>
                    </div>
                    <wa-button href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-02" variant="brand" appearance="outlined" size="small">
                        Read Chapter 2 <i slot="end" class="fa-solid fa-arrow-right"></i>
                    </wa-button>
                </div>
            </wa-card>
            
            <wa-card class="shadow-sm opacity-75">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1 h5 fw-bold">Chapter 3: The Engine's Toll</h4>
                        <p class="mb-0 text-body-secondary small">The Great Plains to the Rockies &mdash; Managing the Check Engine Light, combating the Kansas Turnpike, and bypassing the Denver gouge.</p>
                    </div>
                    <wa-badge variant="neutral" appearance="outlined">In Archive Prep</wa-badge>
                </div>
            </wa-card>
            
            <wa-card class="shadow-sm opacity-75">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1 h5 fw-bold">Chapter 4: The Speed Trap</h4>
                        <p class="mb-0 text-body-secondary small">The High Desert &mdash; Pushing the speed slider, surviving the 3-second radar mini-game, and managing thermal overload.</p>
                    </div>
                    <wa-badge variant="neutral" appearance="outlined">In Archive Prep</wa-badge>
                </div>
            </wa-card>
            
            <wa-card class="shadow-sm opacity-75">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1 h5 fw-bold">Chapter 5: The Hail Mary</h4>
                        <p class="mb-0 text-body-secondary small">Pasco, WA &mdash; The final chokepoint. Stalling the bus and executing the "Line of Sight" physical extraction on the tarmac.</p>
                    </div>
                    <wa-badge variant="neutral" appearance="outlined">In Archive Prep</wa-badge>
                </div>
            </wa-card>
        </div>
    </section>

    <?php 
    // SETUP THE NARRATIVE STEPPER
    $nav = [
        'prev' => null,
        'overview' => [
            'url' => '/raggiesoft-games/pathfinder-west', 
            'label' => 'Pathfinder West Hub'
        ],
        'next' => [
            'url' => '/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-01', 
            'label' => 'Begin Chapter 1'
        ]
    ];
    include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php'; 
    ?>
</div>