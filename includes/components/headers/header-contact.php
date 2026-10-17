<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Global Contact Hub Header
 * ============================================================================
 * File: includes/components/headers/header-contact.php
 * Purpose: Navigation specifically scoped for the global contact hub.
 *
 * Strategy & Implementation:
 * - Provides immediate escape hatches back to core network domains (Home, Engine Room).
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>` without legacy `<wa-menu>`.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$isArchitect = str_starts_with($request_uri, '/about/michael-ragsdale');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
  </wa-button>

  <!-- Architect Navigation: Consolidates resume and overview links for recruiters -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isArchitect ? 'active text-primary fw-bold' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </wa-button>
    <wa-dropdown-item value="https://michaelpragsdale.com">
      <i slot="icon" class="fa-duotone fa-id-card"></i>Overview
    </wa-dropdown-item>
    <wa-dropdown-item value="https://michaelpragsdale.com/#career">
      <i slot="icon" class="fa-duotone fa-file-user"></i>Resume / CV
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="https://michaelpragsdale.com/#logistics">
      <i slot="icon" class="fa-duotone fa-address-card"></i>Recruiter Contact
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room">
    <i slot="start" class="fa-solid fa-industry me-2" aria-hidden="true"></i>Engine Room
  </wa-button>

  <wa-button appearance="plain" href="/contact" class="active text-primary fw-bold">
    <i slot="start" class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
  </wa-button>

</div>