<?php
// pages/band/holly-oconnell.php
// The "Anchor" and the "Architect" of the Fortune.

$pageTitle = "Holly O'Connell - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container position-relative z-1">

    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Holly O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Manager (CEO, Engine Room Records, LLC)</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band" class="text-info">The Band</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Holly O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-white-75">
                The "Anchor". Holly (Age 18 in 1987) is the most formidable member of The Stardust Engine, and she has never played a note on stage. A child prodigy, she accelerated her education to start college at 16, allowing her to join her older siblings and cousins at CPI.
            </p>
            <p class="text-white-75">
                While still a student, she took on the role of the band's manager. Her official role was to act as the emotional peacemaker—famously pulling Ryan and Cassidy into a "three-way hug" when they argued over music, reminding them "You're both right. And you're both idiots."
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The Crash of '90: "The Gatekeeper"</h3>
            <p class="text-white-75">
                When Ryan was paralyzed in December 1990, Holly's role expanded from Business Manager to Medical Director. While Cassidy became Ryan's day-to-day "Safe Person," Holly built the infrastructure that kept him alive and working.
            </p>
            <p class="text-white-75">
                She holds <strong>Durable Power of Attorney</strong> for Ryan, giving her the legal authority to make medical decisions in an emergency. She carries signed, notarized HIPAA release forms in her briefcase at all times, allowing her to speak directly to his doctors and surgeons.
            </p>
            
            <h3 class="fw-bold mt-5 mb-3 text-white">The "Friction" Nuke</h3>
            <p class="text-white-75">
                Holly's true power was revealed during the 1992 "Friction" scandal. By this time, she was a 2L law student. When Julian Vance made his criminal demand, Holly transformed into "Holly the Shark". She secured the evidence that forced Apex Records to surrender the masters, using the freedom to found <strong>Engine Room Records, LLC</strong>.
            </p>

            <div class="card bg-dark bg-opacity-75 border-success shadow-lg mt-5 overflow-hidden">
                <div class="card-header bg-success bg-opacity-25 text-white fw-bold border-bottom border-success">
                    <i class="fa-duotone fa-money-bill-wave me-2"></i>CONFIDENTIAL: The "American Dream" Event
                </div>
                <div class="card-body p-4">
                    </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Holly O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/holly.jpg',
                    'imgAlt' => 'Headshot of Holly O\'Connell',
                    'variant' => 'neutral',
                    'description' => "<strong>Role:</strong> Manager, CEO, CFO<br>
                                      <strong>Age (in 1987):</strong> 18<br>
                                      <strong>Education:</strong> J.D., CFA, CTFA, M.S.<br>
                                      <strong>Status:</strong> The Architect (Unbroken)",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/engine-room/artists/stardust-engine/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
                
                <div class="card bg-black border-secondary mt-4 shadow-sm">
                    <div class="card-body p-3">
                        <small class="text-white-50 text-uppercase d-block mb-1">Assets Under Management</small>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h4 text-success font-monospace mb-0">$2.4 Billion</span>
                            <i class="fa-solid fa-lock text-secondary"></i>
                        </div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div>
                        <small class="text-white-50 d-block mt-2 fst-italic" style="font-size: 0.75rem;">
                            *Includes The Fortress, Fleet, and The Trust.
                        </small>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>