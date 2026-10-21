<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Global Contact Hub Header (DaisyUI 5)
 * ============================================================================
 * File: includes/components/headers/header-contact.php
 * Purpose: Navigation specifically scoped for the global contact hub.
 *
 * Strategy & Implementation:
 * - Provides immediate escape hatches back to core network domains (Home, Engine Room).
 * - Uses semantic DaisyUI 5 `<details class="dropdown">` and Phosphor Duotone icons.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$isArchitect = str_starts_with($request_uri, '/about/michael-ragsdale');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <a href="/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-house me-1" aria-hidden="true"></i>Home
  </a>

  <!-- Architect Navigation: Consolidates resume and overview links for recruiters -->
  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isArchitect ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
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
        <a href="https://michaelpragsdale.com/#logistics">
          <i class="ph-duotone ph-identification-card" aria-hidden="true"></i>Recruiter Contact
        </a>
      </li>
    </ul>
  </details>

  <a href="https://engineroom.raggiesoft.com/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-factory me-1" aria-hidden="true"></i>Engine Room
  </a>

  <a href="/contact" class="btn btn-ghost active text-primary fw-bold">
    <i class="ph-duotone ph-envelope-open me-1" aria-hidden="true"></i>Contact
  </a>

</div>
