<?php 
// Load the logic
require_once __DIR__ . '/../../utils/nav-logic.php'; 

// Initialize navigation using the variable from index.php
// Default to empty if not set to prevent crashes
$sourceUrl = $bookJsonUrl ?? ''; 
$navData = getBookNavigation($sourceUrl);

// Extract variables for easy use in HTML
// ($prevLink, $nextLink, $upLink, $currentIndex, etc.)
extract($navData);
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link text-primary" href="/library/">Library</a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  text-secondary" href="#"    slot="trigger" appearance="plain">
      Aethel
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/library/aethel">Hub</wa-dropdown-item>
      <wa-dropdown-item href="/library/aethel/aethel-book">Book Index</wa-dropdown-item>
      <wa-dropdown-item href="/library/aethel/lore">Lore</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>
</li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  text-secondary" href="#"    slot="trigger" appearance="plain">
      <i class="fa-duotone fa-compass me-1"></i>Navigate
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="<?php echo $prevLink; ?>">
           <i class="fa-duotone fa-arrow-left me-2"></i>Back
        </wa-dropdown-item>
      
      <wa-dropdown-item>
            <i class="fa-duotone fa-arrow-up me-2"></i>Up
        </wa-dropdown-item>
      
      <wa-dropdown-item href="<?php echo $nextLink; ?>">
           Next<i class="fa-duotone fa-arrow-right ms-2"></i>
        </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>
</li>
  
  <li class="nav-item-dropdown">
    <wa-button class="nav-link  text-secondary" href="#"    slot="trigger" appearance="plain">
      RaggieSoft
    </wa-button>
    
      <wa-dropdown-item href="#">RaggieSoft.com</wa-dropdown-item>
      <wa-dropdown-item href="/" class="active">RaggieSoft Knox</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/contact">Contact Me</wa-dropdown-item>
    </wa-dropdown>
</li>
</ul>