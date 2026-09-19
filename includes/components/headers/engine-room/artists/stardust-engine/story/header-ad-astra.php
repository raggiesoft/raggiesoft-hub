<?php
// includes/components/headers/engine-room/artists/stardust-engine/story/header-ad-astra.php
// Header: Ad Astra Mission Control
// Theme: HUD / Sci-Fi / High Contrast
// CONTEXT: The navigation HUD for the spaceship simulation.
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/ad-astra" class="text-uppercase">
        <i slot="start" class="fa-duotone fa-radar me-2"></i>Mission Hub
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  text-uppercase" href="#"    style="color: var(--astra-text) !important;" slot="trigger" appearance="plain">
      <i class="fa-duotone fa-book-sparkles me-2"></i>Flight Logs
        <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase ">Phase I: Departure</div>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01">
            <i class="fa-solid fa-shuttle-space me-2"></i>Day 01: Ignition
          </wa-dropdown-item>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02">
            <i class="fa-solid fa-earth-americas me-2"></i>Day 02: Stabilization
          </wa-dropdown-item>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03">
            <i class="fa-solid fa-clock me-2"></i>Day 03: Ship's Time
          </wa-dropdown-item>
      
      <wa-divider></wa-divider>
      
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase ">Phase II: The Void</div>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10">
            <i class="fa-solid fa-stars me-2"></i>Day 10: Harmonic Velocity
          </wa-dropdown-item>
      
      <wa-divider></wa-divider>
      
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase ">Phase III: Return</div>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21">
            <i class="fa-solid fa-meteor me-2"></i>Day 21: Hard Reset
          </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra" class="text-uppercase">
        <i slot="start" class="fa-duotone fa-play me-2"></i>Transmission
    </wa-button>
  

  
      <wa-button appearance="plain" href="/engine-room/artists/stardust-engine" class="text-uppercase small">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2"></i>Exit Sim
      </wa-button>
  

</div>