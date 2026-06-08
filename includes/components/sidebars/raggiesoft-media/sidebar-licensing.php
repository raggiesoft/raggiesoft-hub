<?php
// includes/components/sidebars/raggiesoft-media/licensing/sidebar-licensing.php
// Contextual navigation for the Master Licensing portal.
// Updated: Frutiger Aero Glass Navigation
?>

<style>
    /* Aero Glass Navigation Tabs */
    .aero-nav-link {
        border-radius: 50rem; /* Pill shape */
        padding: 0.5rem 1rem;
        margin-bottom: 0.25rem;
        transition: all 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: 1px solid transparent;
        font-weight: 500;
    }
    
    /* Individual Hover States based on Brand Colors */
    .aero-nav-link.nav-primary:hover, .aero-nav-link.nav-primary:focus {
        background: rgba(0, 130, 230, 0.1);
        border: 1px solid rgba(0, 130, 230, 0.3);
        color: var(--bs-primary) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateX(4px);
    }
    [data-bs-theme="dark"] .aero-nav-link.nav-primary:hover {
        background: rgba(0, 229, 255, 0.15);
        border-color: rgba(0, 229, 255, 0.4);
        color: var(--mpr-cyan-400) !important;
        text-shadow: 0 0 8px rgba(0, 229, 255, 0.5);
    }

    .aero-nav-link.nav-warning:hover, .aero-nav-link.nav-warning:focus {
        background: rgba(255, 179, 0, 0.1);
        border: 1px solid rgba(255, 179, 0, 0.3);
        color: var(--bs-warning) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateX(4px);
    }
    
    .aero-nav-link.nav-info:hover, .aero-nav-link.nav-info:focus {
        background: rgba(0, 195, 255, 0.1);
        border: 1px solid rgba(0, 195, 255, 0.3);
        color: var(--bs-info) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateX(4px);
    }

    /* Monospace Email Hover Blocks */
    .aero-mail-link {
        display: block;
        padding: 0.5rem;
        border-radius: 8px;
        background: var(--bs-tertiary-bg);
        border: 1px solid var(--bs-border-color);
        transition: all 0.2s ease;
    }
    .aero-mail-link:hover {
        background: var(--raggie-glass-bg);
        border-color: var(--raggie-glass-border);
        box-shadow: var(--raggie-glass-shadow);
        text-decoration: none;
    }
</style>

<div class="card bg-hud-base border-0 shadow-sm mb-4">
    <div class="card-body p-3 p-xl-4">
        <h5 class="pb-2 mb-3 border-bottom border-secondary-subtle text-uppercase h6 fw-bold text-secondary">
            <i class="fa-solid fa-folder-tree me-2" aria-hidden="true"></i>IP Portfolio
        </h5>
        <ul class="nav flex-column small">
            <li class="nav-item">
                <a class="nav-link aero-nav-link nav-primary link-body-emphasis" href="/raggiesoft-media/licensing">
                    <i class="fa-duotone fa-house fa-fw me-2 text-secondary" aria-hidden="true"></i>Licensing Overview
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link aero-nav-link nav-primary link-body-emphasis" href="/raggiesoft-media/licensing/commercial">
                    <i class="fa-duotone fa-briefcase fa-fw me-2 text-primary" aria-hidden="true"></i>Commercial Sync
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link aero-nav-link nav-warning link-body-emphasis" href="/raggiesoft-media/licensing#cc-by-sa">
                    <i class="fa-brands fa-creative-commons fa-fw me-2 text-warning" aria-hidden="true"></i>Creative Commons
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link aero-nav-link nav-info link-body-emphasis" href="/raggiesoft-media/projects/elara">
                    <i class="fa-brands fa-github fa-fw me-2 text-info" aria-hidden="true"></i>MIT Architecture
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="card border-0 bg-transparent">
    <div class="card-body p-0 p-xl-2">
        <h6 class="text-uppercase fw-bold text-body-secondary mb-3 small border-bottom border-secondary-subtle pb-2">
            <i class="fa-solid fa-envelope me-2" aria-hidden="true"></i>Direct Desks
        </h6>
        <ul class="nav flex-column small">
            <li class="nav-item mb-2">
                <a class="aero-mail-link link-secondary font-monospace text-break" href="mailto:sync@raggiesoftmedia.com">
                    <span class="d-block text-primary small fw-bold mb-1">SYNC DESK</span>
                    sync@raggiesoftmedia.com
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="aero-mail-link link-secondary font-monospace text-break" href="mailto:licensing@raggiesoftmedia.com">
                    <span class="d-block text-warning small fw-bold mb-1">RIGHTS DESK</span>
                    licensing@raggiesoftmedia.com
                </a>
            </li>
            <li class="nav-item">
                <a class="aero-mail-link link-secondary font-monospace text-break" href="mailto:ops@raggiesoftmedia.com">
                    <span class="d-block text-info small fw-bold mb-1">INFRASTRUCTURE</span>
                    ops@raggiesoftmedia.com
                </a>
            </li>
        </ul>
    </div>
</div>