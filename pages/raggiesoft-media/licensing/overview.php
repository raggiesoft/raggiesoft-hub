<?php
// pages/raggiesoft-media/licensing/overview.php
// Master gateway for MIT, CC BY-SA 4.0, and Commercial clearances.

$pageTitle = "Master Licensing Portal | RaggieSoft Media";
?>

<style>
    .license-card {
        background-color: #15181c;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: border-color 0.2s ease, transform 0.2s ease;
    }
    .license-card.mit:hover { border-color: var(--bs-info); transform: translateY(-2px); }
    .license-card.cc:hover { border-color: var(--bs-warning); transform: translateY(-2px); }
</style>

<div class="border-bottom border-secondary-subtle pb-4 mb-5 pt-3 text-center text-md-start">
    <h1 class="display-5 fw-bold brand-font text-uppercase mb-3" style="letter-spacing: 2px;">Licensing & Copyright</h1>
    <p class="lead text-body-secondary tech-font" style="max-width: 800px;">
        RaggieSoft Media operates under a hybrid licensing model. We enforce open-source software and shared creative culture for independent use, while offering streamlined commercial clearances for enterprise productions.
    </p>
</div>

<div class="row g-4 mb-5">
    
    <div class="col-md-6">
        <div class="card license-card mit h-100 rounded-0 shadow-sm" data-bs-theme="dark">
            <div class="card-header bg-info bg-opacity-10 border-bottom border-info border-opacity-25 py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-github fa-2x me-3 text-info" aria-hidden="true"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-info text-uppercase">The Architecture</h2>
                        <span class="d-block opacity-75 text-body-secondary font-monospace small">Code, Scripts, & Systems</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
                <span class="badge bg-info text-dark align-self-start mb-3 rounded-0 font-monospace border border-info">MIT License</span>
                <p class="card-text text-body-emphasis mb-3">
                    All source code, proprietary routing scripts (Elara CMS), and web architecture patterns developed by RaggieSoft are distributed open-source.
                </p>
                <p class="card-text small text-body-secondary flex-grow-1">
                    You are free to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the software, provided the original copyright notice is included.
                </p>
                <button type="button" class="btn btn-outline-info btn-sm mt-auto rounded-0 fw-bold" data-bs-toggle="modal" data-bs-target="#mitLicenseModal">
                    <i class="fa-solid fa-file-contract me-2" aria-hidden="true"></i>Read Full MIT License
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card license-card cc h-100 rounded-0 shadow-sm" data-bs-theme="dark">
            <div class="card-header bg-warning bg-opacity-10 border-bottom border-warning border-opacity-25 py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-creative-commons fa-2x me-3 text-warning" aria-hidden="true"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-warning text-uppercase">The Narrative</h2>
                        <span class="d-block opacity-75 text-body-secondary font-monospace small">Stories, Music, & Worldbuilding</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
                <span class="badge bg-warning text-dark align-self-start mb-3 rounded-0 font-monospace border border-warning">CC BY-SA 4.0</span>
                <p class="card-text text-body-emphasis mb-3">
                    All creative writing, fictional universes (<em>The Stardust Engine, Knox, Aethel</em>), and lore documentation are licensed under Creative Commons.
                </p>
                <ul class="list-unstyled small text-body-secondary mb-4 flex-grow-1">
                    <li class="mb-2"><i class="fa-solid fa-check text-success me-2" aria-hidden="true"></i><strong>Share & Adapt:</strong> You may redistribute and remix the material.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>Attribution:</strong> You must explicitly credit <em>RaggieSoft Media</em>.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>ShareAlike:</strong> Derivative works must use the same license.</li>
                </ul>
                <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener" class="btn btn-outline-warning btn-sm mt-auto rounded-0 fw-bold">
                    <i class="fa-solid fa-external-link me-2" aria-hidden="true"></i>View CC BY-SA 4.0 Deed
                    <span class="visually-hidden">(opens in a new tab)</span>
                </a>
            </div>
        </div>
    </div>

</div>

<div class="card border-0 shadow-sm bg-body-tertiary rounded-0 mb-5 border-start border-primary border-4">
    <div class="card-body p-4 p-lg-5 text-center text-md-start d-md-flex align-items-center justify-content-between">
        <div class="mb-4 mb-md-0 me-md-4">
            <h2 class="h4 fw-bold mb-2 text-uppercase text-primary">Commercial Media Clearances</h2>
            <p class="text-body-secondary mb-0 small">
                Require Engine Room Records audio for a commercial film? Adapting RaggieSoft narrative IP for a monetized product without ShareAlike restrictions? Commercial synchronization and clearance waivers are negotiated directly via our B2B portal.
            </p>
        </div>
        <div class="flex-shrink-0">
            <a href="/raggiesoft-media/licensing/commercial" class="btn btn-primary rounded-0 fw-bold text-uppercase">
                <i class="fa-duotone fa-briefcase me-2" aria-hidden="true"></i>Commercial Portal
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="mitLicenseModal" tabindex="-1" aria-labelledby="mitLicenseModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-0 bg-dark border-info" data-bs-theme="dark">
      <div class="modal-header border-secondary-subtle">
        <h2 class="modal-title h5 fw-bold text-info" id="mitLicenseModalTitle">
            <i class="fa-brands fa-github me-2" aria-hidden="true"></i>The MIT License
        </h2>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 text-body-secondary font-monospace small">
        <p class="fw-bold text-light">Copyright &copy; <?php echo date("Y"); ?> Michael P. Ragsdale / RaggieSoft Media</p>
        <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction...</p>
        <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
        <p class="text-uppercase fw-bold text-danger border-top border-secondary-subtle pt-3 mt-3">
            The Software is provided "as is", without warranty of any kind...
        </p>
      </div>
    </div>
  </div>
</div>