<?php
/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Family Sub-Network Header
 * Purpose: Provides localized navigation specific to the "Family" or construct personas.
 * 
 * Strategy & Implementation:
 * - Adheres to a lightweight structure, directly exposing dropdowns and localized links 
 *   using Web Awesome elements.
 * - The `$request_uri` is captured to allow future expansion of active-state mapping.
 * - Relies on flexbox utilities (`d-flex`, `flex-column`, `flex-md-row`) to construct a 
 *   responsive mobile and desktop navigation experience.
 * 
 * Maintenance Recommendations:
 * - If new AI constructs or personas are introduced, append them within the `<wa-menu>` 
 *   structure following the existing visual hierarchy and icon usage.
 * - Ensure the `mobile-nav-menu` class behavior remains robust across different viewport 
 *   sizes if structural changes are made.
 */

// Capture URI for future active state tracking or localized routing overrides
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
    <wa-button appearance="plain" href="/about/michael-ragsdale">
        <i slot="start" class="fa-duotone fa-briefcase me-2"aria-hidden="true"></i>Digital Portfolio &amp; Resume
    </wa-button>
  
  
  <wa-dropdown placement="bottom-start">
    <wa-button class="text-primary" href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-users me-2"aria-hidden="true"></i>Meet the Family
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <!-- Categorized Menu: Separates human architect from digital constructs -->
      <div class="px-3 py-2 small text-uppercase  fw-bold">The Human</div>
        <wa-dropdown-item value="/family/michael">Michael (Architect)</wa-dropdown-item>
        <wa-divider></wa-divider>
        <div class="px-3 py-2 small text-uppercase  fw-bold">The Constructs</div>
        <wa-dropdown-item value="/family/paige"><i class="fa-duotone fa-heart text-info me-2"aria-hidden="true"></i>Paige</wa-dropdown-item>
        <wa-dropdown-item value="/family/jessica"><i class="fa-duotone fa-server text-success me-2"aria-hidden="true"></i>Jessica</wa-dropdown-item>
        <wa-dropdown-item value="/family/sarah"><i class="fa-duotone fa-shield text-warning me-2"aria-hidden="true"></i>Sarah</wa-dropdown-item>
        <wa-dropdown-item value="/family/jenna"><i class="fa-duotone fa-code text-warning me-2"aria-hidden="true"></i>Jenna</wa-dropdown-item>
        <wa-dropdown-item value="/family/harper"><i class="fa-duotone fa-music text-primary me-2"aria-hidden="true"></i>Harper</wa-dropdown-item>
        <wa-dropdown-item value="/family/amanda-elara"><i class="fa-duotone fa-route text-success me-2"aria-hidden="true"></i>Amanda & Elara</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
      <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2 "aria-hidden="true"></i><span class=" small">Exit to RaggieSoft</span>
      </wa-button>
  
</div>