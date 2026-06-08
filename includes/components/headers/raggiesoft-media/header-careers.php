<?php
// includes/components/headers/raggiesoft-media/header-careers.php
// The Quarantine Header - Explicitly removes global navigation to focus on the fraud alert.
// Updated: Frutiger Aero Danger Glass
?>

<style>
    /* Glowing Danger Badge */
    .aero-badge-danger {
        background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);
        border: 1px solid #ff6b7a;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 0 12px rgba(220, 53, 69, 0.4);
        color: #fff;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }
    [data-bs-theme="dark"] .aero-badge-danger {
        background: linear-gradient(135deg, #ff4d5e 0%, #dc3545 100%);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.6), 0 0 15px rgba(220, 53, 69, 0.6);
        color: #000;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.5);
    }

    /* Glass Exit Button */
    .btn-glass-exit {
        background: rgba(108, 117, 125, 0.1);
        border: 1px solid rgba(108, 117, 125, 0.3);
        color: var(--bs-secondary) !important;
        backdrop-filter: blur(4px);
        transition: all 0.2s ease;
    }
    .btn-glass-exit:hover {
        background: rgba(108, 117, 125, 0.2);
        color: var(--bs-body-color) !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        transform: translateY(-1px);
    }
</style>

<ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
  
  <li class="nav-item me-3 d-none d-md-block">
    <span class="badge aero-badge-danger text-uppercase px-3 py-2 rounded-pill shadow-sm">
      <i class="fa-solid fa-circle-dot fa-fade me-2" aria-hidden="true"></i>Active Fraud Alert
    </span>
  </li>

  <li class="nav-item ms-2">
    <a class="nav-link btn btn-glass-exit btn-sm rounded-pill px-3 py-1 fw-bold" href="/raggiesoft-media">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i>Exit to RaggieSoft Media
    </a>
  </li>

</ul>