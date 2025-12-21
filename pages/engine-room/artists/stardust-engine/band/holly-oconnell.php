<?php
// pages/band/holly-oconnell.php
// The "Anchor" and the "Architect" of the Fortune.

$pageTitle = "Holly O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Holly O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Manager (CEO, Engine Room Records, LLC)</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Holly O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The "Anchor". Holly (Age 18 in 1987) is the most formidable member of The Stardust Engine, and she has never played a note on stage. A child prodigy, she accelerated her education to start college at 16, allowing her to join her older siblings and cousins at CPI.
            </p>
            <p class="text-muted">
                While still a student, she took on the role of the band's manager. Her official role was to act as the emotional peacemaker—famously pulling Ryan and Cassidy into a "three-way hug" when they argued over music, reminding them "You're both right. And you're both idiots."
            </p>

            <h3 class="fw-bold mt-5 mb-3">The Crash of '90: "The Gatekeeper"</h3>
            <p class="text-muted">
                When Ryan was paralyzed in December 1990, Holly's role expanded from Business Manager to Medical Director. While Cassidy became Ryan's day-to-day "Safe Person," Holly built the infrastructure that kept him alive and working.
            </p>
            <p class="text-muted">
                She holds **Durable Power of Attorney** for Ryan, giving her the legal authority to make medical decisions in an emergency. She carries signed, notarized HIPAA release forms in her briefcase at all times, allowing her to speak directly to his doctors and surgeons.
            </p>
            
            <h3 class="fw-bold mt-5 mb-3">The "Friction" Nuke</h3>
            <p class="text-muted">
                Holly's true power was revealed during the 1992 "Friction" scandal. By this time, she was a 2L law student. When Julian Vance made his criminal demand, Holly transformed into "Holly the Shark". She secured the evidence that forced Apex Records to surrender the masters, using the freedom to found <strong>Engine Room Records, LLC</strong>.
            </p>

            <div class="card bg-dark border-success shadow-lg mt-5 overflow-hidden">
                <div class="card-header bg-success bg-opacity-25 text-white fw-bold border-bottom border-success">
                    <i class="fa-duotone fa-money-bill-wave me-2"></i>CONFIDENTIAL: The "American Dream" Event
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="text-success fw-bold">The $2.04 Billion Secret</h4>
                            <p class="text-light small">
                                In 2012, <strong>Cassidy O'Connell</strong> purchased a single lottery ticket at a gas station in Daleville, VA. She matched all numbers, including the "Dream Ball."
                            </p>
                            <p class="text-light small">
                                The family chose the "Lump Sum" option ($997 Million post-tax). Instead of buying mansions, Cassidy handed the check to Holly and said, <em>"Make us safe."</em>
                            </p>
                            <p class="text-light small mb-0">
                                Holly didn't just bank it. She went back to school. Over the next decade, she acquired a staggering arsenal of financial credentials to ensure that no label, no bank, and no medical crisis could ever threaten her family again.
                            </p>
                        </div>
                        <div class="col-md-4 text-end d-none d-md-block">
                            <i class="fa-duotone fa-vault fa-5x text-success opacity-50"></i>
                        </div>
                    </div>

                    <hr class="border-secondary opacity-50 my-4">

                    <div>
                        <h5 class="text-white fw-bold mb-2"><i class="fa-solid fa-chart-line-up me-2 text-success"></i>Financial & Fiduciary Armor</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-pill" title="1994: The Seal"><i class="fa-solid fa-stamp me-1"></i>Notary Public ('94)</span>
                            <span class="skill-pill" title="1996: Defense against IRS"><i class="fa-solid fa-file-invoice-dollar me-1"></i>Enrolled Agent ('96)</span>
                            <span class="skill-pill" title="1998: Advanced Tax Law"><i class="fa-solid fa-scale-balanced me-1"></i>LL.M. Taxation ('98)</span>
                            <span class="skill-pill" title="2003: Architect of the Trust"><i class="fa-solid fa-landmark me-1"></i>CTFA ('03)</span>
                            <span class="skill-pill" title="2005: Managing the surplus"><i class="fa-solid fa-briefcase me-1"></i>CFA Charterholder ('05)</span>
                            <span class="skill-pill" title="2009: Hedging against Recession"><i class="fa-solid fa-graduation-cap me-1"></i>M.S. Quant Finance ('09)</span>
                            <span class="skill-pill" title="2014: Auditing royalties"><i class="fa-solid fa-magnifying-glass-dollar me-1"></i>Cr.FA (Forensic) ('14)</span>
                            <span class="skill-pill" title="2016: The Bankruptcy Expert"><i class="fa-solid fa-tombstone me-1"></i>CIRA (Insolvency) ('16)</span>
                        </div>
                    </div>

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
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
                
                <div class="card bg-black border-secondary mt-4 shadow-sm">
                    <div class="card-body p-3">
                        <small class="text-muted text-uppercase d-block mb-1">Assets Under Management</small>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h4 text-success font-monospace mb-0">$2.4 Billion</span>
                            <i class="fa-solid fa-lock text-secondary"></i>
                        </div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div>
                        <small class="text-muted d-block mt-2 fst-italic" style="font-size: 0.75rem;">
                            *Includes The Fortress, Fleet, and The Trust.
                        </small>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>