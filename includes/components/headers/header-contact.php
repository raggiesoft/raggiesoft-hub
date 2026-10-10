<?php
// includes/components/headers/header-contact.php
// Navigation for the Global Contact Hub.
// UPDATED: Matches the new RaggieSoft Hub structure (Architect vs. Creative)

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Global Contact Hub Header
 * Purpose: Navigation specifically scoped for the global contact forms and associated routing.
 * 
 * Strategy & Implementation:
 * - Provides immediate escape hatches back to core network domains (Home, Engine Room).
 * - Implements Web Awesome dropdown `<wa-dropdown>` for nested recruiter/architect links to preserve screen real estate.
 * - The active state ($isArchitect) focuses on the Architect sub-domain given its proximity to contact operations.
 * 
 * Maintenance Recommendations:
 * - Ensure that paths provided in the `<wa-dropdown-item>` components reflect the canonical routes in the routing engine.
 * - Avoid bloating this header with too many external links; keep the focus on communication and professional inquiry.
 */

// Evaluate request path to determine if we are in the context of the Architect's profile
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isArchitect = (str_starts_with($request_uri, '/about/michael-ragsdale'));
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </wa-button>
  

  
  <!-- Architect Navigation: Consolidates resume and overview links for recruiters -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo $isArchitect ? 'active' : ''; ?>" slot="trigger" appearance="plain">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
     <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item value="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</wa-dropdown-item>
      <wa-dropdown-item value="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item value="/about/michael-ragsdale/contact"><i class="fa-duotone fa-address-card me-2"></i>Recruiter Contact</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/engine-room">
        <i slot="start" class="fa-solid fa-industry me-2" aria-hidden="true"></i>Engine Room
    </wa-button>
  

  
    <wa-button appearance="plain" href="/contact" class="active">
        <i slot="start" class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
    </wa-button>
  

</div>