<?php
// includes/components/headers/engine-room/artists/stardust-engine/header-stardust.php
// Dedicated navigation for The Stardust Engine artist sub-site.
// UPDATED: Corrected Dropdown Labels (O'Connells vs Wrights) to reflect that everyone is kin.
// UPDATED: Added Official Storefront routing.
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/engine-room/artists/stardust-engine">
        <i class="fa-duotone fa-house me-2"></i>Home
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room/artists/stardust-engine/story">
        <i class="fa-duotone fa-book-atlas me-2"></i>Story
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room/artists/stardust-engine/discography">
        <i class="fa-duotone fa-compact-disc me-2"></i>Discography
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-warning" href="/engine-room/radio">
        <i class="fa-duotone fa-signal-stream me-2"></i>Radio
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link " href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-users me-2"></i>The Band
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/band">Overview</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/history">History & Lore</wa-dropdown-item>
        
        <wa-divider></wa-divider>
        
        <div class="px-3 py-2 small text-uppercase text-muted fw-bold text-uppercase small opacity-75\">The O'Connells</div>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/ryan-oconnell"><i class="fa-duotone fa-wheelchair me-2 opacity-50"></i>Ryan O'Connell</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/cassidy-oconnell"><i class="fa-duotone fa-microphone me-2 opacity-50"></i>Cassidy O'Connell</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/holly-oconnell"><i class="fa-duotone fa-briefcase me-2 opacity-50"></i>Holly O'Connell</wa-dropdown-item>
        
        <wa-divider></wa-divider>
        
        <div class="px-3 py-2 small text-uppercase text-muted fw-bold text-uppercase small opacity-75\">The Wrights</div>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/evan-wright"><i class="fa-duotone fa-guitar me-2 opacity-50"></i>Evan Wright</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/artists/stardust-engine/band/tyler-wright"><i class="fa-duotone fa-drum me-2 opacity-50"></i>Tyler Wright</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>
</li>

  <li class="nav-item">
    <a class="nav-link" href="/contact">
        <i class="fa-duotone fa-envelope me-2"></i>Contact
    </a>
  </li>

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block"></li>

  <li class="nav-item">
      <a class="nav-link text-info fw-bold" href="https://store.raggiesoft.com/pages/the-stardust-engine" target="_blank" rel="noopener">
        <i class="fa-solid fa-bag-shopping me-2"></i>Official Store
      </a>
  </li>

  <li class="nav-item">
      <a class="nav-link text-secondary" href="/engine-room">
        <i class="fa-solid fa-arrow-turn-up me-2"></i>Engine Room HQ
      </a>
  </li>

</ul>