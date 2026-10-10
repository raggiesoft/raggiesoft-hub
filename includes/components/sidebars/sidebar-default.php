<?php
/**
 * RaggieSoft Hub - Default Sidebar Navigation
 * 
 * ARCHITECTURAL OVERVIEW:
 * This is a standard HTML partial used to render the default navigation sidebar across
 * the hub. It utilizes Web Awesome (<wa-button>) components for interactive navigation 
 * buttons, providing a consistent UI feel aligned with the broader application.
 * 
 * CONSTRAINTS & MAINTENANCE:
 * - Do NOT alter the Web Awesome `<wa-button>` tags or attributes (`appearance="plain"`, etc.)
 *   as these are necessary for the hub's custom design system.
 * - Iconography is powered by FontAwesome (via `fa-duotone` classes). When updating, 
 *   ensure the `slot="start"` attribute remains intact for proper component slotting.
 * - This file does not contain a PHP opening tag initially; this block is intentionally
 *   self-contained at the top.
 */
?>
<h5 class="pt-3 pb-2 mb-3 border-bottom">Navigation</h5>
<div class="d-flex flex-column gap-1">
  
    <!-- Primary Navigation: Home -->
    <wa-button appearance="plain" href="/" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-home"></i> Home
    </wa-button>
  
  
  
    <!-- Stardust Engine Section: Discography & Band -->
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-record-vinyl"></i> Discography
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-users"></i> The Band
    </wa-button>
  
  
    <!-- Stardust Engine Section: Lore -->
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/lore/" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-book-atlas"></i> The Lore
    </wa-button>
  

  
    <!-- Stardust Engine Section: Info Links -->
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/about" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-circle-info"></i> About
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/contact" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <i slot="start" class="fa-duotone fa-paper-plane"></i> Contact
    </wa-button>
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/license" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
       <i slot="start" class="fa-duotone fa-file-contract"></i> License
    </wa-button>
  
</div>