<?php
// pages/engine-room/artists/stardust-engine/band/holly-oconnell.php
// The "Anchor" and the "Architect" of the Fortune.
// UPDATED: Added Dynamic Modals for Financial Credentials.

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
            
            <h3 class="fw-bold mt-5 mb-3 text-white">The "Friction" Nuke (1992)</h3>
            <p class="text-white-75">
                Holly's true power was revealed during the 1992 "Friction" scandal. By this time, she was a 2L law student. When Julian Vance made his criminal demand, Holly transformed into "Holly the Shark". She secured the evidence that forced Apex Records to surrender the masters, using the freedom to found <strong>Engine Room Records, LLC</strong>.
            </p>

            <div class="card bg-dark bg-opacity-75 border-success shadow-lg mt-5 overflow-hidden">
                <div class="card-header bg-success bg-opacity-25 text-white fw-bold border-bottom border-success">
                    <i class="fa-duotone fa-money-bill-wave me-2"></i>CONFIDENTIAL: The "American Dream" Event (1996)
                </div>
                <div class="card-body p-4">
                    <h4 class="text-success fw-bold">The Financial Architect</h4>
                    <p class="text-white-75">
                        In 1996, when Cassidy handed her the winning lottery ticket worth <strong>$2.04 Billion</strong>, Holly didn't celebrate. She went to work.
                    </p>
                    <p class="text-white-75">
                        "Money destroys families," she famously said. To prevent that, she spent the next two decades armoring herself with every financial certification available. She created the <strong>Forger Nation Trust</strong>, a structure that renders the band members "penniless" on paper—protecting them from lawsuits and predators—while the Trust manages their empire.
                    </p>
                    
                    <hr class="border-success opacity-50 my-4">
                    
                    <h5 class="text-white fw-bold mb-3"><i class="fa-solid fa-shield-check me-2 text-success"></i>Fiduciary Armor (Click to Inspect)</h5>
                    <div class="d-flex flex-wrap gap-2">
                        
                        <button type="button" class="btn badge rounded-pill bg-black border border-secondary text-white p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="Notary Public (1994)"
                                data-desc="A public officer constituted by law to serve the public in non-contentious matters."
                                data-lore="Holly became a Notary so no outsider would ever witness the family's signatures. Every contract, medical release, and NDA is sealed in-house."
                                data-color="secondary"
                                data-icon="fa-stamp">
                            <i class="fa-solid fa-stamp me-1 text-secondary"></i>Notary Public ('94)
                        </button>
                        
                        <button type="button" class="btn badge rounded-pill bg-black border border-secondary text-white p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="Enrolled Agent (1996)"
                                data-desc="A federally-authorized tax practitioner empowered to represent taxpayers before the IRS."
                                data-lore="Obtained immediately after the Lottery win. Holly represented the Trust directly before the IRS to ensure the $2.04B windfall was taxed perfectly, preventing any audits."
                                data-color="secondary"
                                data-icon="fa-file-invoice-dollar">
                            <i class="fa-solid fa-file-invoice-dollar me-1 text-secondary"></i>Enrolled Agent ('96)
                        </button>
                        
                        <button type="button" class="btn badge rounded-pill bg-black border border-secondary text-white p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="LL.M. in Taxation (1999)"
                                data-desc="An advanced law degree specializing in the complexities of tax law."
                                data-lore="The architect's blueprint. This degree allowed Holly to build the 'Forger Nation Trust' structure, turning a rock band into a sovereign economic state."
                                data-color="secondary"
                                data-icon="fa-scale-balanced">
                            <i class="fa-solid fa-scale-balanced me-1 text-secondary"></i>LL.M. Taxation ('99)
                        </button>

                        <button type="button" class="btn badge rounded-pill bg-black border border-success text-success p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="Certified Trust & Fiduciary Advisor (2003)"
                                data-desc="The standard of excellence for trust and wealth management professionals."
                                data-lore="Holly doesn't hire trustees; she *is* the trustee. This certification allows her to legally manage the family's generational wealth without third-party oversight."
                                data-color="success"
                                data-icon="fa-landmark">
                            <i class="fa-solid fa-landmark me-1"></i>CTFA (Trusts) ('03)
                        </button>

                        <button type="button" class="btn badge rounded-pill bg-black border border-success text-success p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="CFA Charterholder (2006)"
                                data-desc="Chartered Financial Analyst. The gold standard for investment analysis and portfolio management."
                                data-lore="Managing a $2.4B surplus requires Wall Street-level skill. Holly trades the family's portfolio herself, ensuring the 'Loss Leader' band never runs out of ammo."
                                data-color="success"
                                data-icon="fa-briefcase">
                            <i class="fa-solid fa-briefcase me-1"></i>CFA Charterholder ('06)
                        </button>

                        <button type="button" class="btn badge rounded-pill bg-black border border-primary text-info p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="M.S. Quantitative Finance (2009)"
                                data-desc="The application of mathematical models to financial markets and risk management."
                                data-lore="Obtained after the 2008 crash. Holly built custom algorithmic hedges to ensure the family fortune would be 'Recession-Proof' forever."
                                data-color="info"
                                data-icon="fa-chart-line">
                            <i class="fa-solid fa-chart-line me-1"></i>M.S. Quant Finance ('09)
                        </button>

                        <button type="button" class="btn badge rounded-pill bg-black border border-danger text-danger p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="Certified Forensic Accountant (2014)"
                                data-desc="Specialists in detecting financial fraud and auditing complex records."
                                data-lore="The Weapon. Holly uses this to audit streaming services and legacy labels. If you steal a penny of royalties from The Stardust Engine, she *will* find it."
                                data-color="danger"
                                data-icon="fa-magnifying-glass-dollar">
                            <i class="fa-solid fa-magnifying-glass-dollar me-1"></i>Cr.FA (Forensic) ('14)
                        </button>

                        <button type="button" class="btn badge rounded-pill bg-black border border-danger text-danger p-2 credential-btn" 
                                data-bs-toggle="modal" data-bs-target="#credentialModal"
                                data-title="Certified Insolvency & Restructuring Advisor (2016)"
                                data-desc=" experts in corporate bankruptcy and turnaround management."
                                data-lore="The Cleanup Crew. When a rival company or venue fails (often because they crossed Holly), she uses this expertise to buy their distressed assets for pennies on the dollar."
                                data-color="danger"
                                data-icon="fa-tombstone">
                            <i class="fa-solid fa-tombstone me-1"></i>CIRA (Insolvency) ('16)
                        </button>
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
                    'description' => "<div class='text-white-75'>
                                        <strong>Role:</strong> Manager, CEO, CFO<br>
                                        <strong>Age (in 1987):</strong> 18<br>
                                        <strong>Top Credential:</strong> CIRA (Insolvency)<br>
                                        <strong>Status:</strong> The Architect (Unbroken)
                                      </div>",
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

<div class="modal fade" id="credentialModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white border-2" id="modalContent">
            <div class="modal-header border-bottom-0" id="modalHeader">
                <h5 class="modal-title fw-bold" id="credentialTitle">
                    <i class="fa-solid fa-circle-info me-2"></i>Credential
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <h6 class="text-uppercase small opacity-75 mb-2">Technical Definition</h6>
                <p id="credentialDesc" class="text-white-50 mb-4">Description goes here.</p>
                
                <div class="alert bg-black bg-opacity-50 border-start border-4" id="loreAlert" style="border-color: currentColor;">
                    <h6 class="text-uppercase small fw-bold mb-1"><i class="fa-duotone fa-shield-check me-2"></i>Application to The Family</h6>
                    <p id="credentialLore" class="mb-0 small fst-italic text-white">Lore goes here.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var credentialModal = document.getElementById('credentialModal');
    credentialModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        
        // Extract info from data-* attributes
        var title = button.getAttribute('data-title');
        var desc = button.getAttribute('data-desc');
        var lore = button.getAttribute('data-lore');
        var color = button.getAttribute('data-color');
        var icon = button.getAttribute('data-icon');

        // Update the modal's content
        var modalTitle = credentialModal.querySelector('#credentialTitle');
        var modalDesc = credentialModal.querySelector('#credentialDesc');
        var modalLore = credentialModal.querySelector('#credentialLore');
        var modalHeader = credentialModal.querySelector('#modalHeader');
        var modalContent = credentialModal.querySelector('#modalContent');
        var loreAlert = credentialModal.querySelector('#loreAlert');

        modalTitle.innerHTML = '<i class="fa-solid ' + icon + ' me-2"></i>' + title;
        modalDesc.textContent = desc;
        modalLore.textContent = lore;

        // Reset classes
        modalHeader.className = 'modal-header border-bottom-0 text-white';
        modalContent.className = 'modal-content bg-dark text-white border-2';
        loreAlert.className = 'alert bg-black bg-opacity-50 border-start border-4 text-white';

        // Apply new color theme
        // Bootstrap colors: success, danger, info, secondary
        modalHeader.classList.add('bg-' + color);
        modalContent.classList.add('border-' + color);
        loreAlert.classList.add('border-' + color);
    });
});
</script>