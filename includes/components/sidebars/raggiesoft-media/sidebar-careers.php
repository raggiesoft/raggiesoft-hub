<?php
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

<div class="card bg-hud-red border-0 shadow-sm mb-4">
    <div class="card-body p-3 p-xl-4">
        <h5 class="pb-2 mb-3 border-bottom border-danger border-opacity-25 text-danger fw-bold text-uppercase h6" style="filter: drop-shadow(0 1px 2px rgba(220,53,69,0.3));">
            <i class="fa-solid fa-magnifying-glass me-2" aria-hidden="true"></i>Anatomy of the Scam
        </h5>
        
        <ul class="nav flex-column mb-0 small">
          <li class="nav-item mb-2">
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-1 fa-fw me-1 text-danger" aria-hidden="true"></i>Unsolicited Contact</strong>
                They reach out via WhatsApp, Telegram, or spoofed email.
            </div>
          </li>
          <li class="nav-item mb-2">
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-2 fa-fw me-1 text-danger" aria-hidden="true"></i>The "Interview"</strong>
                You are asked to fill out a text-based questionnaire instead of a video call.
            </div>
          </li>
          <li class="nav-item mb-2">
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-3 fa-fw me-1 text-danger" aria-hidden="true"></i>The Fake Check</strong>
                They promise to send a check for "home office equipment" from a specific vendor.
            </div>
          </li>
          <li class="nav-item">
            <div class="aero-step-box text-body-secondary">
                <strong class="d-block text-body-emphasis mb-1"><i class="fa-solid fa-4 fa-fw me-1 text-danger" aria-hidden="true"></i>The Theft</strong>
                Their check bounces, but the money you sent to their "vendor" is gone forever.
            </div>
          </li>
        </ul>
    </div>
</div>

<div class="card bg-hud-base border-0 shadow-sm">
    <div class="card-body p-3 p-xl-4">
        <h5 class="pb-2 mb-3 border-bottom border-secondary-subtle text-uppercase h6 fw-bold text-body-emphasis">
            <i class="fa-solid fa-building-shield me-2 text-secondary" aria-hidden="true"></i>Report Fraud
        </h5>
        <div class="d-grid gap-2">
            <a class="btn btn-glass-danger-sidebar btn-sm rounded-pill text-start fw-bold" href="https://www.ic3.gov/" target="_blank" rel="noopener noreferrer">
              <i class="fa-solid fa-building-columns me-2 fa-fw" aria-hidden="true"></i>FBI IC3 Portal <i class="fa-solid fa-arrow-up-right-from-square float-end mt-1 small opacity-75" aria-hidden="true"></i>
            </a>
            <a class="btn btn-glass-danger-sidebar btn-sm rounded-pill text-start fw-bold" href="https://reportfraud.ftc.gov/" target="_blank" rel="noopener noreferrer">
              <i class="fa-solid fa-scale-balanced me-2 fa-fw" aria-hidden="true"></i>FTC Fraud Report <i class="fa-solid fa-arrow-up-right-from-square float-end mt-1 small opacity-75" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>