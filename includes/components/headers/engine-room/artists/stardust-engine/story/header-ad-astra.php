<?php
// includes/components/headers/engine-room/artists/stardust-engine/story/header-ad-astra.php
// Header: Ad Astra Mission Control
// Theme: HUD / Sci-Fi / High Contrast
// CONTEXT: The navigation HUD for the spaceship simulation.
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0 font-monospace">
  
  <li class="nav-item">
    <a class="nav-link text-uppercase" href="/engine-room/artists/stardust-engine/story/ad-astra" style="color: var(--astra-info) !important;">
        <i class="fa-duotone fa-radar me-2"></i>Mission Hub
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-buttonclass="nav-link  text-uppercase" href="#"    style="color: var(--astra-text) !important;" slot="trigger" appearance="plain">
      <i class="fa-duotone fa-book-sparkles me-2"></i>Flight Logs
    </wa-button>
    
      
      <li><h6 class="dropdown-header text-uppercase text-secondary">Phase I: Departure</h6></li>
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
      
      <li><h6 class="dropdown-header text-uppercase text-secondary">Phase II: The Void</h6></li>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10">
            <i class="fa-solid fa-stars me-2"></i>Day 10: Harmonic Velocity
          </wa-dropdown-item>
      
      <wa-divider></wa-divider>
      
      <li><h6 class="dropdown-header text-uppercase text-secondary">Phase III: Return</h6></li>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21">
            <i class="fa-solid fa-meteor me-2"></i>Day 21: Hard Reset
          </wa-dropdown-item>
    </wa-dropdown>
</li>

  <li class="nav-item">
    <a class="nav-link text-uppercase" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra" style="color: var(--astra-warning) !important;">
        <i class="fa-duotone fa-play me-2"></i>Transmission
    </a>
  </li>

  <li class="nav-item border-start border-secondary ms-2 ps-2">
      <a class="nav-link text-uppercase small" href="/engine-room/artists/stardust-engine" style="color: var(--astra-secondary) !important; opacity: 0.7;">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2"></i>Exit Sim
      </a>
  </li>

</ul>