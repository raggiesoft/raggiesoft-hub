<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the sidebar navigation for the "Case Studies" section of the Hub.
 * 
 * DESIGN INTENT:
 * - Uses Web Awesome buttons (`<wa-button appearance="plain">`) styled as full-width list items to align with the site's modern component architecture.
 * - Categorizes links into logical groupings (Operational Archives, Incident Reports, System) using standard HTML heading tags (`h5`, `h6`) and utility borders.
 * 
 * MAINTENANCE NOTES:
 * - Links are hardcoded. If new case studies are added, they must be manually appended to the appropriate flex container in this file.
 * - The inline style `style="text-align: left;"` on Web Awesome components is often necessary to override default shadow-DOM button centering.
 */
// includes/components/sidebars/case-studies/sidebar-case-studies.php
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom">Operational Archives</h5>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/case-studies" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-layer-group"></i> Overview
    </wa-button>
  
</div>

<!-- LEGACY UI COMPONENT: Sub-section heading styled to resemble a standard Bootstrap dashboard sidebar. -->
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
  <span>Incident Reports</span>
</h6>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/case-studies/cascade-protocol" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-heart-pulse"></i> The Cascade Protocol
    </wa-button>
  
  
    <wa-button appearance="plain" href="/case-studies/shenandoah-valley" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-route"></i> Shenandoah Gauntlet
    </wa-button>
  
</div>

<h5 class="pt-3 pb-2 mb-3 mt-5 border-bottom">System</h5>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-arrow-left"></i> Return to Main
    </wa-button>
  
</div>