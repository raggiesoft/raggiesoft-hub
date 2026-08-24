<?php
// /pages/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary-pasco/overview.php

$pageTitle = "Strategy Guide: The Pasco Hail Mary | Pathfinder West";
$metaDescription = "The complete narrative strategy guide for achieving the Pasco Hail Mary Golden Ending in Pathfinder West.";

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
?>

<main class="container my-5 strategy-guide-overview">
    <header class="mb-5 pb-3 border-bottom">
        <h1 class="display-4 fw-bold">The Pasco Hail Mary</h1>
        <h2 class="text-light fs-4">Pathfinder West: Official Narrative Strategy Guide</h2>
        
        <div class="card mt-4 bg-dark border-0 shadow-sm">
            <div class="card-body">
                <h3 class="card-title h5 text-uppercase tracking-wider">Run Parameters</h3>
                <ul class="mb-0">
                    <li><strong>Ending Category:</strong> The Golden Ending</li>
                    <li><strong>Party Composition:</strong> The Full Band (Roxy, Allison, Alanna)</li>
                    <li><strong>Starting Budget:</strong> $1,500 (Band Tour Fund)</li>
                    <li><strong>Target Intercept:</strong> Pasco Intermodal Terminal (Pre-Assault Threshold)</li>
                </ul>
            </div>
        </div>
    </header>

    <section class="table-of-contents mb-5">
        <h3 class="mb-3">Table of Contents</h3>
        <p class="lead">Follow Roxy's journey as she balances the grueling reality of a cross-country sprint against the invisible ticking clock of the Pathfinder schedule. This guide details the exact route, financial risks, and dialogue choices required to secure the Pasco Hail Mary intercept.</p>

        <div class="list-group list-group-flush mt-4">
            <a href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-01" class="list-group-item list-group-item-action py-3">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1 h5">Chapter 1: The False Start</h4>
                </div>
                <p class="mb-1 text-muted">Hampton Roads, VA — Navigating the Newport decoy and mitigating the Chesapeake Bay Bridge-Tunnel toll trap.</p>
            </a>
            
            <a href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-02" class="list-group-item list-group-item-action py-3">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1 h5">Chapter 2: The Cipher</h4>
                </div>
                <p class="mb-1 text-muted">Appalachia to the Midwest — Decoding the <em>Static & Silence</em> CD and executing the I-85 Southern Cut.</p>
            </a>
            
            <a href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-03" class="list-group-item list-group-item-action py-3">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1 h5">Chapter 3: The Engine's Toll</h4>
                </div>
                <p class="mb-1 text-muted">The Great Plains to the Rockies — Managing the Check Engine Light, combating the Kansas Turnpike, and bypassing the Denver gouge.</p>
            </a>
            
            <a href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-04" class="list-group-item list-group-item-action py-3">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1 h5">Chapter 4: The Speed Trap</h4>
                </div>
                <p class="mb-1 text-muted">The High Desert — Pushing the speed slider, surviving the 3-second radar mini-game, and managing thermal overload.</p>
            </a>
            
            <a href="/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-05" class="list-group-item list-group-item-action py-3">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1 h5">Chapter 5: The Hail Mary</h4>
                </div>
                <p class="mb-1 text-muted">Pasco, WA — The final chokepoint. Stalling the bus and executing the "Line of Sight" physical extraction on the tarmac.</p>
            </a>
        </div>
    </section>

    <?php 
    // SETUP THE NARRATIVE STEPPER
    $nav = [
        'prev' => null, // Overview is the beginning, so 'prev' is null
        'overview' => [
            'url' => '/pages/raggiesoft-games/pathfinder-west/strategy-guide/overview.php', 
            'label' => 'All Guides Hub'
        ],
        'next' => [
            'url' => 'chapter-1.php', 
            'label' => 'Begin Chapter 1'
        ]
    ];
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/navigation/narrative-stepper.php'; 
    ?>
</main>

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; 
?>