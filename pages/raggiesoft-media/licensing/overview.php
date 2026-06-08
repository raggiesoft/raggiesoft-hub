<?php
// pages/raggiesoft-media/licensing/overview.php
// Master gateway for MIT, CC BY-SA 4.0, and Commercial clearances.
// Updated: Frutiger Aero / Dark Aero Glass Architecture

$pageTitle = "Master Licensing Portal | RaggieSoft Media";
?>

<style>
    /* WCAG: Focus Outline for Keyboard Navigators */
    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-primary) !important;
        outline-offset: 4px;
        border-radius: 50rem; /* Matches pill shapes */
    }

    /* Custom Glass Buttons for Secondary Actions */
    .btn-glass-info {
        background: rgba(0, 195, 255, 0.1);
        border: 1px solid rgba(0, 195, 255, 0.4);
        color: var(--bs-info) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-info:hover, .btn-glass-info:focus {
        background: rgba(0, 195, 255, 0.2);
        box-shadow: 0 0 12px rgba(0, 195, 255, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }

    .btn-glass-warning {
        background: rgba(255, 179, 0, 0.1);
        border: 1px solid rgba(255, 179, 0, 0.4);
        color: var(--bs-warning) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-warning:hover, .btn-glass-warning:focus {
        background: rgba(255, 179, 0, 0.2);
        box-shadow: 0 0 12px rgba(255, 179, 0, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }

    /* Aero Modal Window */
    .aero-modal-content {
        background-color: var(--raggie-glass-bg) !important;
        backdrop-filter: blur(24px) saturate(150%);
        -webkit-backdrop-filter: blur(24px) saturate(150%);
        border: 1px solid var(--raggie-glass-border) !important;
        border-radius: 12px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.3), inset 0 1px 0 var(--raggie-gloss-highlight);
        color: var(--bs-body-color) !important;
    }

    [data-bs-theme="dark"] .aero-modal-content {
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.5), inset 0 1px 0 var(--raggie-gloss-highlight), 0 0 20px rgba(0, 229, 255, 0.15);
    }
</style>

<div class="border-bottom border-secondary-subtle pb-4 mb-5 pt-3 text-center text-md-start">
    <h1 class="display-5 fw-bold brand-font text-uppercase mb-3 text-glow-primary" style="letter-spacing: 2px;">Licensing & Copyright</h1>
    <p class="lead text-body-secondary tech-font" style="max-width: 800px;">
        RaggieSoft Media operates under a hybrid licensing model. We enforce open-source software and shared creative culture for independent use, while offering streamlined commercial clearances for enterprise productions.
    </p>
</div>

<div class="row g-4 mb-5">
    
    <div class="col-md-6">
        <div class="card bg-hud-blue h-100 border-0 shadow-sm d-flex flex-column transition-base hover-lift">
            <div class="p-4 border-bottom" style="border-color: var(--raggie-glass-border) !important;">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-github fa-2x me-3 text-primary" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.4));"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-uppercase text-body-emphasis">The Architecture</h2>
                        <span class="d-block text-secondary font-monospace small">Code, Scripts, & Systems</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
                <span class="badge bg-primary text-white align-self-start mb-3 rounded-pill font-monospace shadow-sm">MIT License</span>
                <p class="card-text text-body-emphasis mb-3">
                    All source code, proprietary routing scripts (Elara CMS), and web architecture patterns developed by RaggieSoft are distributed open-source.
                </p>
                <p class="card-text small text-body-secondary flex-grow-1">
                    You are free to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the software, provided the original copyright notice is included.
                </p>
                <button type="button" class="btn btn-glass-info btn-sm mt-auto rounded-pill fw-bold transition-all" data-bs-toggle="modal" data-bs-target="#mitLicenseModal">
                    <i class="fa-solid fa-file-contract me-2" aria-hidden="true"></i>Read Full MIT License
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card bg-hud-warning h-100 border-0 shadow-sm d-flex flex-column transition-base hover-lift">
            <div class="p-4 border-bottom" style="border-color: var(--raggie-glass-border) !important;">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-creative-commons fa-2x me-3 text-warning" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(255,179,0,0.4));"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-uppercase text-body-emphasis">The Narrative</h2>
                        <span class="d-block text-secondary font-monospace small">Stories, Music, & Worldbuilding</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
                <span class="badge bg-warning text-dark align-self-start mb-3 rounded-pill font-monospace shadow-sm">CC BY-SA 4.0</span>
                <p class="card-text text-body-emphasis mb-3">
                    All creative writing, fictional universes (<em>The Stardust Engine, Knox, Aethel</em>), and lore documentation are licensed under Creative Commons.
                </p>
                <ul class="list-unstyled small text-body-secondary mb-4 flex-grow-1">
                    <li class="mb-2"><i class="fa-solid fa-check text-success me-2" aria-hidden="true"></i><strong>Share & Adapt:</strong> You may redistribute and remix the material.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>Attribution:</strong> You must explicitly credit <em>RaggieSoft Media</em>.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>ShareAlike:</strong> Derivative works must use the same license.</li>
                </ul>
                <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener" class="btn btn-glass-warning btn-sm mt-auto rounded-pill fw-bold transition-all">
                    <i class="fa-solid fa-external-link me-2" aria-hidden="true"></i>View CC BY-SA 4.0 Deed
                    <span class="visually-hidden">(opens in a new tab)</span>
                </a>
            </div>
        </div>
    </div>

</div>

<div class="card bg-hud-base border-0 shadow-sm mb-5 p-2">
    <div class="card-body p-4 p-lg-5 text-center text-md-start d-md-flex align-items-center justify-content-between">
        <div class="mb-4 mb-md-0 me-md-4">
            <h2 class="h4 fw-bold mb-2 text-uppercase text-glow-primary">Commercial Media Clearances</h2>
            <p class="text-body-secondary mb-0 small" style="max-width: 700px;">
                Require Engine Room Records audio for a commercial film? Adapting RaggieSoft narrative IP for a monetized product without ShareAlike restrictions? Commercial synchronization and clearance waivers are negotiated directly via our B2B portal.
            </p>
        </div>
        <div class="flex-shrink-0 mt-3 mt-md-0">
            <a href="/raggiesoft-media/licensing/commercial" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase shadow">
                <i class="fa-duotone fa-briefcase me-2" aria-hidden="true"></i>Commercial Portal
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="mitLicenseModal" tabindex="-1" aria-labelledby="mitLicenseModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content aero-modal-content">
      <div class="modal-header border-bottom" style="border-color: var(--raggie-glass-border) !important;">
        <h2 class="modal-title h5 fw-bold text-primary" id="mitLicenseModalTitle">
            <i class="fa-brands fa-github me-2" aria-hidden="true"></i>The MIT License
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 text-body-secondary font-monospace small">
        <p class="fw-bold text-body-emphasis">Copyright &copy; <?php echo date("Y"); ?> Michael P. Ragsdale / RaggieSoft Media</p>
        <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
        <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
        <div class="p-3 mt-4 rounded-3" style="background: rgba(220, 53, 69, 0.1); border: 1px solid rgba(220, 53, 69, 0.2);">
            <p class="text-uppercase fw-bold text-danger mb-0 text-center" style="letter-spacing: 0.5px;">
                The Software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement.
            </p>
        </div>
      </div>
    </div>
  </div>
</div>