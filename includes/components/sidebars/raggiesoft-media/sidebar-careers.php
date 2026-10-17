<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Careers Sidebar (Scam Warning)
 * ============================================================================
 * ROLE: A critical security UI component serving as a secondary sidebar on 
 *       the Careers/Employment pages of RaggieSoft Media. It warns users about
 *       ongoing employment scams and guides victims to official reporting channels.
 * 
 * CORE FEATURES:
 * - Frutiger Aero Danger HUD: Custom CSS overrides standard danger colors with 
 *   a glassy, high-urgency aesthetic (`.aero-step-box`, `.btn-glass-danger-sidebar`).
 * - Narrative Validation: Breaks down the "Anatomy of the Scam" step-by-step
 *   to help victims recognize their situation without shame.
 * 
 * MAINTENANCE: Keep the external links to IC3 and the FTC updated. Do NOT 
 *              remove the step breakdown; it is designed specifically for 
 *              vulnerable users in a panic state.
 * ============================================================================
 */
// includes/components/sidebars/raggiesoft-media/sidebar-careers.php
// The Anatomy of a Scam - Validates the victim's experience and provides exit links.
// Updated: Frutiger Aero Danger HUD
?>

<style>
    /* Inner Glass Steps for the Scam Breakdown */
    .aero-step-box {
        background: rgba(220, 53, 69, 0.05);
        border: 1px solid rgba(220, 53, 69, 0.15);
        border-radius: 8px;
        padding: 0.75rem;
        transition: all 0.2s ease;
    }
    [data-bs-theme="dark"] .aero-step-box {
        background: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.3);
    }
    .aero-step-box:hover {
        background: rgba(220, 53, 69, 0.15);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
        transform: translateX(4px); /* Slides right slightly on hover */
    }

    /* Glossy Sidebar Buttons */
    .btn-glass-danger-sidebar {
        background: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.4);
        color: var(--bs-danger) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        transition: all 0.2s ease;
    }
    .btn-glass-danger-sidebar:hover, .btn-glass-danger-sidebar:focus {
        background: var(--bs-danger);
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4), inset 0 1px 0 rgba(255,255,255,0.4);
        transform: translateY(-1px);
    }
</style>

<!-- [LAYOUT] Scam Breakdown Card: Red-tinted HUD explaining the scam vector -->
<wa-card class="bg-hud-red border-0 shadow-sm mb-4 w-100">
    <div class="p-1 p-xl-2">
        <h5 class="pb-2 mb-3 border-bottom border-danger text-danger fw-bold text-uppercase h6" style="filter: drop-shadow(0 1px 2px rgba(220,53,69,0.3));">
            <i class="fa-solid fa-magnifying-glass me-2" aria-hidden="true"></i>Anatomy of the Scam
        </h5>
        
        <div class="d-flex flex-column gap-1">
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-1 fa-fw me-1 text-danger" aria-hidden="true"></i>Unsolicited Contact</strong>
                They reach out via WhatsApp, Telegram, or spoofed email.
            </div>
          
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-2 fa-fw me-1 text-danger" aria-hidden="true"></i>The "Interview"</strong>
                You are asked to fill out a text-based questionnaire instead of a video call.
            </div>
          
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-3 fa-fw me-1 text-danger" aria-hidden="true"></i>The Fake Check</strong>
                They promise to send a check for "home office equipment" from a specific vendor.
            </div>
          
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-4 fa-fw me-1 text-danger" aria-hidden="true"></i>The Theft</strong>
                Their check bounces, but the money you sent to their "vendor" is gone forever.
            </div>
        </div>
    </div>
</wa-card>

<!-- [LAYOUT] Reporting Hub Card: Contains primary external action links for victims -->
<wa-card class="bg-hud-base border-0 shadow-sm w-100">
    <div class="p-1 p-xl-2">
        <h5 class="pb-2 mb-3 border-bottom border-secondary-subtle text-uppercase h6 fw-bold text-body-emphasis">
            <i class="fa-solid fa-building-shield me-2" aria-hidden="true"></i>Report Fraud
        </h5>
        <div class="d-grid gap-2">
            <wa-button variant="danger" appearance="outlined" size="small" pill href="https://www.ic3.gov/" target="_blank" rel="noopener noreferrer" class="w-100">
                <i slot="start" class="fa-solid fa-building-columns fa-fw" aria-hidden="true"></i>FBI IC3 Portal
                <i slot="end" class="fa-solid fa-arrow-up-right-from-square small" aria-hidden="true"></i>
            </wa-button>
            <wa-button variant="danger" appearance="outlined" size="small" pill href="https://reportfraud.ftc.gov/" target="_blank" rel="noopener noreferrer" class="w-100">
                <i slot="start" class="fa-solid fa-scale-balanced fa-fw" aria-hidden="true"></i>FTC Fraud Report
                <i slot="end" class="fa-solid fa-arrow-up-right-from-square small" aria-hidden="true"></i>
            </wa-button>
        </div>
    </div>
</wa-card>