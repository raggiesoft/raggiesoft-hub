<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Stardust Engine Timeline Sidebar
 * ============================================================================
 * ROLE: Contextual navigation sidebar used specifically within the Stardust 
 *       Engine "History/Timeline" lore pages. Allows quick jumping between 
 *       eras via anchor links (`#origins`, etc.) and links to related lore.
 * 
 * INTEGRATION: Relies entirely on Web Awesome Web Components (`<wa-button>`) 
 *              for semantic, accessible routing.
 * 
 * MAINTENANCE: Ensure the anchor links (`href="#..."`) match the actual IDs
 *              defined in the parent timeline document. Keep the "Related Lore"
 *              links updated if new narrative hubs are published.
 * ============================================================================
 */
?>
<!-- [LAYOUT] Timeline Anchor Links: Jump navigation for the historical timeline -->
<h5 class="pt-3 pb-2 mb-3 border-bottom">
    <i slot="start" class="fa-duotone fa-timeline"></i> Timeline
</h5>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-chevron-up me-2"></i> Go Up
    </wa-button>
  
  
    <wa-button appearance="plain" href="#origins" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-graduation-cap"></i> Origins (CPI)
    </wa-button>
  
  
    <wa-button appearance="plain" href="#apex-years" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-hand-fist"></i> The Apex "Cold War"
    </wa-button>
  
  
    <wa-button appearance="plain" href="#independence" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-flag"></i> Independence (1992)
    </wa-button>
  
  
    <wa-button appearance="plain" href="#freedom-era" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-dove"></i> The Freedom Era
    </wa-button>
  
  
    <wa-button appearance="plain" href="#hiatus" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-moon"></i> The Long Hiatus
    </wa-button>
  
  
    <wa-button appearance="plain" href="#homecoming" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-fire"></i> Re-Ignition & Legacy
    </wa-button>
  
</div>

<!-- [LAYOUT] Related Lore Links: Cross-linking to other narrative properties -->
<h6 class="pt-3 pb-2 mb-3 border-bottom mt-4">Related Lore</h6>
<div class="d-flex flex-column gap-1">
  
  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/lore/ad-astra" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
    <i slot="start" class="fa-duotone fa-rocket-launch"></i> Ad Astra
  </wa-button>
  
   
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/lore/cpi" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-school"></i> About CPI & The Forgers
    </wa-button>
   
   
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-users"></i> Band Bios
    </wa-button>
   
</div>