<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: The Stardust Engine Artist Header
 * ============================================================================
 * File: includes/components/headers/engine-room/artists/stardust-engine/header-stardust.php
 * Purpose: Dedicated global navigation for "The Stardust Engine" band sub-site.
 *
 * Strategy & Implementation:
 * - Uses strict Web Awesome v3.13.0 `<wa-button>`, `<wa-dropdown>`, `<wa-dropdown-item>`,
 *   and `<wa-divider>` components without legacy `<wa-menu>` wrappers.
 * - Provides both `value="/..."` (for `piper-sullivan.js` `wa-select` handling)
 *   and `onclick="navigateTo('/...')"` for immediate SPA soft-routing.
 * ============================================================================
 */
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine">
    <i slot="start" class="fa-duotone fa-house me-2"></i>Home
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story">
    <i slot="start" class="fa-duotone fa-book-atlas me-2"></i>Story
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography">
    <i slot="start" class="fa-duotone fa-compact-disc me-2"></i>Album Lore
  </wa-button>

  <wa-button appearance="plain" href="https://music.raggiesoft.com/the-stardust-engine" class="text-warning fw-bold">
    <i slot="start" class="fa-duotone fa-turntable me-2"></i>Listening Room
  </wa-button>

  <!-- Band Roster Dropdown: Utilizes client-side routing for lore pages -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-users me-2"></i>The Band
    </wa-button>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band">
      <i slot="icon" class="fa-duotone fa-users-viewfinder"></i>Overview
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/history">
      <i slot="icon" class="fa-duotone fa-timeline"></i>History &amp; Lore
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound">
      <i slot="icon" class="fa-duotone fa-satellite text-info"></i>Cosmic Tidal Lock Sound&trade;
    </wa-dropdown-item>

    <wa-divider></wa-divider>

    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">The Kin</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/ryan-oconnell">
      <i slot="icon" class="fa-duotone fa-microphone"></i>Ryan O'Connell
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/cassidy-oconnell">
      <i slot="icon" class="fa-duotone fa-guitar"></i>Cassidy O'Connell
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/holly-oconnell">
      <i slot="icon" class="fa-duotone fa-scale-balanced"></i>Holly O'Connell
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/evan-wright">
      <i slot="icon" class="fa-duotone fa-drum"></i>Evan Wright
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/band/tyler-wright">
      <i slot="icon" class="fa-duotone fa-guitar-electric"></i>Tyler Wright
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/contact">
    <i slot="start" class="fa-duotone fa-envelope me-2"></i>Contact
  </wa-button>

  <!-- External Storefront: Links directly to commerce platform -->
  <wa-button appearance="plain" href="https://store.raggiesoft.com/pages/the-stardust-engine" class="text-info fw-bold">
    <i slot="start" class="fa-solid fa-bag-shopping me-2"></i>Official Store
  </wa-button>

  <wa-button appearance="plain" href="/engine-room">
    <i slot="start" class="fa-solid fa-arrow-turn-up me-2"></i>Engine Room HQ
  </wa-button>

</div>