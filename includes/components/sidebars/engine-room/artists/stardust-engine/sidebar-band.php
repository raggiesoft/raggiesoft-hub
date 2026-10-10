<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Stardust Engine - The Band Sidebar
 * ============================================================================
 * ROLE: The central character navigation hub for the Stardust Engine lore. 
 *       Provides direct links to individual band member profiles (the O'Connells 
 *       and Wrights) and acts as an index for major historical story arcs.
 * 
 * INTEGRATION: Built entirely using Web Awesome (`<wa-button>`) to ensure
 *              consistent touch targets and accessibility across the lore pages.
 * 
 * MAINTENANCE: Keep the character list synchronized if new members are added 
 *              to the fictional roster. The "History & Lore" links must exactly
 *              match the routing definitions in the Elara Router JSON config.
 * ============================================================================
 */
?>
<!-- [LAYOUT] Character Roster Navigation: Links to individual band member biographies -->
<h5 class="pt-3 pb-2 mb-3 border-bottom">
    <i slot="start" class="fa-duotone fa-users"></i> The Band
</h5>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-users-viewfinder me-2"></i> Overview
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/ryan-oconnell" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-user-music"></i> Ryan O'Connell
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/cassidy-oconnell" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-user-music"></i> Cassidy O'Connell
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/holly-oconnell" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-user-tie"></i> Holly O'Connell
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/evan-wright" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-guitar"></i> Evan Wright
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/tyler-wright" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-drum"></i> Tyler Wright
    </wa-button>
  
</div>

<!-- [LAYOUT] Narrative Index: Cross-links to major story arcs and the full timeline -->
<h6 class="pt-3 pb-2 mb-3 border-bottom mt-4">
    <i slot="start" class="fa-duotone fa-book-open"></i> History & Lore
</h6>
<div class="d-flex flex-column gap-1">
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/history" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-timeline me-2"></i> Full Timeline
    </wa-button>
  
  
  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/ad-astra" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
    <i slot="start" class="fa-duotone fa-rocket-launch"></i> Ad Astra
  </wa-button>
  
  
  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/cpi" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
    <i slot="start" class="fa-duotone fa-school"></i> CPI & The Forgers
  </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-car-crash"></i> The Crash of '90
    </wa-button> 
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/friction" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-burst"></i> The Friction Scandal
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-handshake-slash"></i> The Nine-Figure Refusal
    </wa-button>
  
</div>