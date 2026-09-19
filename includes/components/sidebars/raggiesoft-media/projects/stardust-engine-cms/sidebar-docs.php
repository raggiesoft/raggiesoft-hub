<?php
// includes/components/sidebars/raggiesoft-media/projects/stardust-engine-cms/sidebar-docs.php
// Documentation navigation for the Stardust Engine CMS.
// Updated: Frutiger Aero Glass Navigation
?>

<style>
    /* Aero Glass Navigation Tabs (Reused & customized for Docs) */
    .aero-nav-link {
        border-radius: 50rem;
        padding: 0.5rem 1rem;
        margin-bottom: 0.25rem;
        transition: all 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: 1px solid transparent;
        font-weight: 500;
    }

    .aero-nav-link.nav-primary:hover, .aero-nav-link.nav-primary.active {
        background: rgba(0, 130, 230, 0.1);
        border: 1px solid rgba(0, 130, 230, 0.3);
        color: var(--bs-primary) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateX(4px);
    }
    
    [data-bs-theme="dark"] .aero-nav-link.nav-primary:hover,
    [data-bs-theme="dark"] .aero-nav-link.nav-primary.active {
        background: rgba(0, 229, 255, 0.15);
        border-color: rgba(0, 229, 255, 0.4);
        color: var(--mpr-cyan-400) !important;
        text-shadow: 0 0 8px rgba(0, 229, 255, 0.5);
    }

    /* Cyan Highlight specifically for Elara */
    .aero-nav-link.nav-info:hover, .aero-nav-link.nav-info.active {
        background: rgba(0, 195, 255, 0.1);
        border: 1px solid rgba(0, 195, 255, 0.3);
        color: var(--bs-info) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateX(4px);
    }

    /* Outer Glass Blocks for External Links */
    .aero-external-link {
        display: block;
        padding: 0.6rem 1rem;
        border-radius: 8px;
        background: rgba(0,0,0,0.02);
        border: 1px solid var(--raggie-glass-border);
        transition: all 0.2s ease;
    }
    [data-bs-theme="dark"] .aero-external-link {
        background: rgba(255,255,255,0.02);
    }
    .aero-external-link:hover {
        background: var(--raggie-glass-bg);
        border-color: var(--bs-primary);
        box-shadow: var(--raggie-glass-shadow);
        text-decoration: none;
        transform: translateY(-2px);
    }
</style>

<div class="card bg-hud-base border-0 shadow-sm mb-4">
    <div class="card-body p-3 p-xl-4">
        <h5 class="pb-2 mb-3 border-bottom border-secondary-subtle text-uppercase h6 fw-bold text-secondary">
            <i slot="start" class="fa-solid fa-book-open"></i> Documentation
        </h5>
        <div class="d-flex flex-column gap-1">
            
                <wa-button appearance="plain" href="/raggiesoft-media/projects/stardust-engine-cms" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
                    <i slot="start" class="fa-duotone fa-rocket-launch fa-fw me-2 text-primary" aria-hidden="true"></i> Overview
                </wa-button>
            
            
                <wa-button appearance="plain" href="/raggiesoft-media/projects/stardust-engine-cms/elara" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
                    <i slot="start" class="fa-brands fa-js fa-fw"></i> Elara SPA Router
                </wa-button>
            
            
                <wa-button appearance="plain" href="/raggiesoft-media/projects/stardust-engine-cms/configuration" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
                    <i slot="start" class="fa-solid fa-brackets-curly fa-fw"></i> JSON Routing
                </wa-button>
            
            
                <wa-button appearance="plain" href="/raggiesoft-media/projects/stardust-engine-cms/deployment" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
                    <i slot="start" class="fa-solid fa-terminal fa-fw"></i> Deploy: Jenna & Sarah
                </wa-button>
            
        </div>
    </div>
</div>

<div class="card border-0 bg-transparent">
    <div class="card-body p-0 p-xl-2">
        <h6 class="text-uppercase fw-bold text-body-secondary mb-3 small border-bottom border-secondary-subtle pb-2">
            <i slot="start" class="fa-brands fa-github"></i> Repository Links
        </h6>
        <div class="d-flex flex-column gap-1">
            
                <a class="aero-external-link link-secondary fw-bold" href="https://github.com/raggiesoft/stardust-engine-cms" target="_blank" rel="noopener noreferrer">
                    <span class="d-flex align-items-center justify-content-between">
                        <span><i slot="start" class="fa-solid fa-code-branch me-2 text-secondary" aria-hidden="true"></i> Source Code</span>
                        <i class="fa-solid fa-arrow-up-right-from-square small opacity-50" aria-hidden="true"></i>
                    </span>
                </wa-button>
            
            
                <a class="aero-external-link link-secondary fw-bold" href="https://github.com/raggiesoft/stardust-engine-cms/issues" target="_blank" rel="noopener noreferrer">
                    <span class="d-flex align-items-center justify-content-between">
                        <span><i slot="start" class="fa-solid fa-bug"></i> Report an Issue</span>
                        <i slot="start" class="fa-solid fa-arrow-up-right-from-square small opacity-50" aria-hidden="true"></i> </span>
                </wa-button>
            
        </div>
    </div>
</div>