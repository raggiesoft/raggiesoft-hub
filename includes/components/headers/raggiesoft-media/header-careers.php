<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-careers.php (Web Awesome v3.13.0)
 * ============================================================================
 * Context: RaggieSoft Media - Careers Quarantine Header.
 * Narrative/Purpose: Specialized, restrictive header designed specifically for
 * the careers section during an "Active Fraud Alert". Strips away normal global
 * navigation to focus the user's attention on the security notice.
 * ============================================================================
 */
?>

<!-- START: Quarantine Header Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <!-- START: Active Fraud Alert Indicator -->
  <wa-badge variant="danger" appearance="accent" pill class="text-uppercase px-3 py-2 shadow-sm">
    <i class="fa-solid fa-circle-dot fa-fade me-2" aria-hidden="true"></i>Active Fraud Alert
  </wa-badge>

  <!-- START: Quarantine Exit Action -->
  <wa-button appearance="outlined" variant="neutral" size="small" pill href="/raggiesoft-media" class="fw-bold">
    <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i>Exit to RaggieSoft Media
  </wa-button>

</div>