<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Case Studies Header (DaisyUI 5 + Phosphor)
 * ============================================================================
 * File: includes/components/headers/case-studies/header-case-studies.php
 * Header for the Case Studies / Operational Archives section.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$isOverview  = str_starts_with($request_uri, '/case-studies');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <a href="/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-house me-1" aria-hidden="true"></i>Home
  </a>

  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isOverview ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-file-magnifying-glass me-1" aria-hidden="true"></i>Case Studies
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-80 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="/case-studies">
          <i class="ph-duotone ph-folder-open text-primary" aria-hidden="true"></i>Operational Archives Overview
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li>
        <a href="/case-studies/cascade-protocol">
          <i class="ph-duotone ph-shield-chevron text-danger" aria-hidden="true"></i>CS-001: The Cascade Protocol
        </a>
      </li>
      <li>
        <a href="/case-studies/shenandoah-valley">
          <i class="ph-duotone ph-truck text-warning" aria-hidden="true"></i>CS-002: The Shenandoah Gauntlet
        </a>
      </li>
      <li>
        <a href="/case-studies/phys-100-report">
          <i class="ph-duotone ph-atom text-info" aria-hidden="true"></i>CS-003: PHYS-100 Acoustic Telemetry
        </a>
      </li>
    </ul>
  </details>

  <details class="dropdown">
    <summary class="btn btn-ghost text-body-secondary">
      <i class="ph-duotone ph-user-focus me-1" aria-hidden="true"></i>The Architect
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-64 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="https://michaelpragsdale.com">
          <i class="ph-duotone ph-identification-card" aria-hidden="true"></i>Overview
        </a>
      </li>
      <li>
        <a href="https://michaelpragsdale.com/#career">
          <i class="ph-duotone ph-identification-badge" aria-hidden="true"></i>Resume / CV
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li>
        <a href="/contact">
          <i class="ph-duotone ph-envelope-open" aria-hidden="true"></i>Contact
        </a>
      </li>
    </ul>
  </details>

  <a href="/about" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-info me-1" aria-hidden="true"></i>Mission
  </a>

</div>
