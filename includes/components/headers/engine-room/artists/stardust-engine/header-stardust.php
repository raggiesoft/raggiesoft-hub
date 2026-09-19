<?php
// includes/components/headers/engine-room/artists/stardust-engine/header-stardust.php
// Dedicated navigation for The Stardust Engine artist sub-site.
// UPDATED: Corrected Dropdown Labels (O'Connells vs Wrights) to reflect that everyone is kin.
// UPDATED: Added Official Storefront routing.
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine">
        <i slot="start" class="fa-duotone fa-house me-2"></i>Home
    </wa-button>
  

  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story">
        <i slot="start" class="fa-duotone fa-book-atlas me-2"></i>Story
    </wa-button>
  

  
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography">
        <i slot="start" class="fa-duotone fa-compact-disc me-2"></i>Discography
    </wa-button>
  

  
    <wa-button appearance="plain" href="/engine-room/radio" class="text-warning">
        <i slot="start" class="fa-duotone fa-signal-stream me-2"></i>Radio
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start" hoist>
    <wa-button slot="trigger" appearance="plain">
        <i class="fa-duotone fa-users me-2"></i>The Band
        <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
    </wa-button>
        <wa-menu>
      <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band')">Overview</wa-dropdown-item>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/history')">History & Lore</wa-dropdown-item>
        
        <wa-divider></wa-divider>
        
        <div class="px-3 py-2 small text-uppercase fw-bold text-uppercase small">The Kin</div>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/ryan-oconnell')"><i class="fa-duotone fa-microphone me-2"></i>Ryan O'Connell</wa-dropdown-item>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/cassidy-oconnell')"><i class="fa-duotone fa-guitar me-2"></i>Cassidy O'Connell</wa-dropdown-item>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/holly-oconnell')"><i class="fa-duotone fa-scale-balanced me-2"></i>Holly O'Connell</wa-dropdown-item>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/evan-wright')"><i class="fa-duotone fa-drum me-2"></i>Evan Wright</wa-dropdown-item>
        <wa-dropdown-item onclick="navigateTo('/engine-room/artists/stardust-engine/band/tyler-wright')"><i class="fa-duotone fa-guitar-electric me-2"></i>Tyler Wright</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/contact">
        <i slot="start" class="fa-duotone fa-envelope me-2"></i>Contact
    </wa-button>
  

  

  
      <wa-button appearance="plain" href="https://store.raggiesoft.com/pages/the-stardust-engine" class="text-info fw-bold">
        <i slot="start" class="fa-solid fa-bag-shopping me-2"></i>Official Store
      </wa-button>
  

  
      <wa-button appearance="plain" href="/engine-room" class="">
        <i slot="start" class="fa-solid fa-arrow-turn-up me-2"></i>Engine Room HQ
      </wa-button>
  

</div>