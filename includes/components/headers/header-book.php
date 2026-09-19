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

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/library/" class="text-primary">Library</wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  " href="#"    slot="trigger" appearance="plain">
      Aethel
        <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/library/aethel">Hub</wa-dropdown-item>
      <wa-dropdown-item href="/library/aethel/aethel-book">Book Index</wa-dropdown-item>
      <wa-dropdown-item href="/library/aethel/lore">Lore</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  " href="#"    slot="trigger" appearance="plain">
      <i class="fa-duotone fa-compass me-1"></i>Navigate
        <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
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

  
  
    <wa-button class="nav-link  " href="#"    slot="trigger" appearance="plain">
      RaggieSoft
        <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
    </wa-button>
    
      <wa-dropdown-item href="#">RaggieSoft.com</wa-dropdown-item>
      <wa-dropdown-item href="/" class="active">RaggieSoft Knox</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/engine-room/artists/stardust-engine/contact">Contact Me</wa-dropdown-item>
    </wa-dropdown>

</div>