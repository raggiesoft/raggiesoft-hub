<?php
// pages/raggiesoft-media/licensing/commercial.php
// Commercial Sync & IP Clearances.
// Updated: Frutiger Aero / Dark Aero Glass Architecture

$pageTitle = "Commercial Licensing | RaggieSoft Media";
?>

<style>
    /* WCAG: Focus Outline for Keyboard Navigators */
    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-primary) !important;
        outline-offset: 4px;
        border-radius: 50rem; /* Matches pill shapes */
    }

    /* Tactile Hover Lift for Aero Cards */
    .hover-lift {
        transition: transform 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.2s ease;
    }
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 85, 150, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight) !important;
    }
    [data-bs-theme="dark"] .hover-lift:hover {
        box-shadow: 0 12px 28px rgba(0, 229, 255, 0.15), inset 0 1px 0 var(--raggie-gloss-highlight) !important;
    }

    /* Inner Glass Box for Legal Notice */
    .aero-inner-warning {
        background: rgba(255, 179, 0, 0.1);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 179, 0, 0.3);
        border-radius: 12px;
        box-shadow: inset 0 2px 4px rgba(255, 179, 0, 0.05);
    }
    [data-bs-theme="dark"] .aero-inner-warning {
        background: rgba(255, 179, 0, 0.15);
        border: 1px solid rgba(255, 179, 0, 0.4);
    }
</style>

<div class="container-fluid pb-5 pt-3">

    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-hud-blue border-0 p-4 shadow-sm">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center text-center text-md-start">
                    <i class="fa-duotone fa-file-signature fa-3x text-primary mb-3 mb-md-0 me-md-4" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.4));"></i>
                    <div>
                        <h1 class="h3 fw-bold text-uppercase mb-1 brand-font text-glow-primary" style="letter-spacing: 2px;">
                            Commercial Licensing
                        </h1>
                        <p class="mb-0 text-secondary small fw-bold text-uppercase font-monospace tracking-wider">
                            Non-Exclusive Synchronization & IP Clearance
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            
            <div class="card bg-hud-warning border-0 p-4 p-md-5 shadow-sm mb-5">
                <h2 class="h5 mb-4 text-warning fw-bold text-uppercase border-bottom border-warning border-opacity-25 pb-3">
                    <i class="fa-solid fa-scale-unbalanced me-2" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(255,179,0,0.4));"></i>
                    Transparency Notice: Non-Exclusive Licensing Only
                </h2>
                <div class="text-body-emphasis mb-4">
                    <p class="fs-6">
                        RaggieSoft Media and Engine Room Records operate strictly on a <strong>Non-Exclusive</strong> licensing model. We do not offer exclusive buyouts under any circumstances.
                    </p>
                </div>
                
                <div class="aero-inner-warning p-4">
                    <h3 class="h6 fw-bold mb-2 text-warning"><i class="fa-solid fa-gavel me-2" aria-hidden="true"></i>The Legal Framework</h3>
                    <p class="mb-0 small text-body-secondary">
                        Because our audio production workflow integrates commercial generative AI tools, current U.S. Copyright Office guidelines do not grant traditional copyright protection to the synthesized audio waveforms (the Masters). While we own 100% of the underlying composition, lyrics, and narrative lore, we cannot legally guarantee or enforce absolute exclusivity of the generated sound recording. To protect our clients from ambiguous legal liabilities, we only offer flat-fee, non-exclusive synchronization licenses. <em>We will never sell a promise we cannot legally enforce.</em>
                    </p>
                </div>
            </div>

            <h2 class="h5 text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-4 text-secondary">Clearance Categories</h2>
            
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card bg-hud-base h-100 p-4 text-center border-0 shadow-sm hover-lift">
                        <i class="fa-duotone fa-film fa-2x text-primary mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.3));"></i>
                        <h3 class="h6 fw-bold text-uppercase mb-1 text-body-emphasis">Film & Television</h3>
                        <p class="text-primary font-monospace small mb-3">Sync Clearance</p>
                        <p class="text-body-secondary small mb-0">Theatrical releases, streaming originals, and broadcast television.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-hud-base h-100 p-4 text-center border-0 shadow-sm hover-lift">
                        <i class="fa-duotone fa-gamepad-modern fa-2x text-primary mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.3));"></i>
                        <h3 class="h6 fw-bold text-uppercase mb-1 text-body-emphasis">Interactive Media</h3>
                        <p class="text-primary font-monospace small mb-3">In-Engine Audio</p>
                        <p class="text-body-secondary small mb-0">Video games, VR/AR experiences, and digital application environments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-hud-base h-100 p-4 text-center border-0 shadow-sm hover-lift">
                        <i class="fa-duotone fa-tower-broadcast fa-2x text-primary mb-3" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.3));"></i>
                        <h3 class="h6 fw-bold text-uppercase mb-1 text-body-emphasis">Broadcast Ad</h3>
                        <p class="text-primary font-monospace small mb-3">Global Campaign</p>
                        <p class="text-body-secondary small mb-0">Regional or global advertising across terrestrial and digital channels.</p>
                    </div>
                </div>
            </div>

            <div class="card bg-hud-base border-0 p-4 p-md-5 shadow-sm" style="border-left: 4px solid var(--bs-primary) !important;">
                <h2 class="text-primary fw-bold text-uppercase h5 mb-4 border-bottom border-secondary-subtle pb-3">
                    <i class="fa-solid fa-clipboard-list me-2" aria-hidden="true"></i>Clearance Request Protocol
                </h2>
                
                <p class="text-body-emphasis mb-4">
                    To request a non-exclusive quote, direct your inquiry to the synchronization desk at 
                    <code class="bg-body-secondary text-primary px-2 py-1 ms-1 rounded border border-secondary-subtle">sync@raggiesoftmedia.com</code>.
                </p>

                <div class="p-4 mb-4 rounded-3" style="background: rgba(0, 130, 230, 0.05); border: 1px solid rgba(0, 130, 230, 0.1);">
                    <p class="font-monospace text-primary small fw-bold mb-3 text-uppercase tracking-wider">Required Documentation:</p>
                    <ul class="list-unstyled mb-0 small text-body-secondary">
                        <li class="mb-2">
                            <i class="fa-solid fa-check-circle text-success me-2" aria-hidden="true"></i>
                            <strong class="text-body-emphasis">Asset Target:</strong> The specific audio track or narrative IP requested.
                        </li>
                        <li class="mb-2">
                            <i class="fa-solid fa-check-circle text-success me-2" aria-hidden="true"></i>
                            <strong class="text-body-emphasis">Project Synopsis:</strong> A brief description of the production or campaign.
                        </li>
                        <li>
                            <i class="fa-solid fa-check-circle text-success me-2" aria-hidden="true"></i>
                            <strong class="text-body-emphasis">Media & Territory:</strong> Requested scope (e.g., Worldwide Web, Regional Broadcast).
                        </li>
                    </ul>
                </div>

                <div class="text-md-end mt-4">
                    <a href="mailto:sync@raggiesoftmedia.com" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase shadow transition-all">
                        Initiate Request <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>