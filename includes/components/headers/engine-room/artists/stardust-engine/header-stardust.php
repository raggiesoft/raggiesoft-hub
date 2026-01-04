<?php
// includes/components/headers/engine-room/artists/stardust-engine/header-stardust.php
// Dedicated navigation for The Stardust Engine artist sub-site.
// UPDATED: Corrected Dropdown Labels (O'Connells vs Wrights) to reflect that everyone is kin.
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/engine-room/artists/stardust-engine">
        <i class="fa-duotone fa-house me-2"></i>Home
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room/artists/stardust-engine/discography">
        <i class="fa-duotone fa-compact-disc me-2"></i>Discography
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-users me-2"></i>The Band
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-secondary">
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band">Overview</a></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/history">History & Lore</a></li>
        
        <li><hr class="dropdown-divider"></li>
        
        <li><h6 class="dropdown-header text-uppercase small opacity-75">The O'Connells</h6></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/ryan-oconnell"><i class="fa-duotone fa-wheelchair me-2 opacity-50"></i>Ryan O'Connell</a></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/cassidy-oconnell"><i class="fa-duotone fa-microphone me-2 opacity-50"></i>Cassidy O'Connell</a></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/holly-oconnell"><i class="fa-duotone fa-briefcase me-2 opacity-50"></i>Holly O'Connell</a></li>
        
        <li><hr class="dropdown-divider"></li>
        
        <li><h6 class="dropdown-header text-uppercase small opacity-75">The Wrights</h6></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/evan-wright"><i class="fa-duotone fa-guitar me-2 opacity-50"></i>Evan Wright</a></li>
        <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/band/tyler-wright"><i class="fa-duotone fa-drum me-2 opacity-50"></i>Tyler Wright</a></li>
    </ul>
  </li>

  <li class="nav-item border-start border-secondary mx-2 d-none d-md-block"></li>

  <li class="nav-item">
      <a class="nav-link text-secondary" href="/engine-room">
        <i class="fa-solid fa-arrow-turn-up me-2"></i>Engine Room HQ
      </a>
  </li>

</ul>