<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Ad Astra Mission Control Header
 * ============================================================================
 * File: includes/components/headers/engine-room/artists/stardust-engine/story/header-ad-astra.php
 * Purpose: Provides thematic navigation (HUD-style) for the "Ad Astra" story simulation.
 *
 * Strategy & Implementation:
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>` without legacy `<wa-menu>`.
 * - Links to all 6 flight log chapters (Days 01, 02, 03, 10, 14, and 21).
 * ============================================================================
 */
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/ad-astra" class="text-uppercase">
    <i slot="start" class="fa-duotone fa-radar me-2"></i>Mission Hub
  </wa-button>

  <!-- Flight Logs Menu -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="text-uppercase" style="color: var(--astra-text) !important;" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-book-sparkles me-2"></i>Flight Logs
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Phase I: Departure</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01">
      <i slot="icon" class="fa-solid fa-shuttle-space"></i>Day 01: Ignition
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02">
      <i slot="icon" class="fa-solid fa-earth-americas"></i>Day 02: Stabilization
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03">
      <i slot="icon" class="fa-solid fa-clock"></i>Day 03: Ship's Time
    </wa-dropdown-item>

    <wa-divider></wa-divider>

    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Phase II: The Void</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10">
      <i slot="icon" class="fa-solid fa-stars"></i>Day 10: Harmonic Velocity
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-14">
      <i slot="icon" class="fa-solid fa-wind"></i>Day 14: Atmosphere (Life Support)
    </wa-dropdown-item>

    <wa-divider></wa-divider>

    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Phase III: Return</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21">
      <i slot="icon" class="fa-solid fa-meteor"></i>Day 21: Hard Reset
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra" class="text-uppercase">
    <i slot="start" class="fa-duotone fa-play me-2"></i>Transmission
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="text-uppercase text-info">
    <i slot="start" class="fa-duotone fa-satellite me-2"></i>Tidal Lock Sound&trade;
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine" class="text-uppercase small">
    <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2"></i>Exit Sim
  </wa-button>

</div>