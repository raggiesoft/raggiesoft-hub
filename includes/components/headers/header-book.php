<?php 
/**
 * RaggieSoft Hub - Book Viewer Header
 * 
 * ARCHITECTURAL OVERVIEW:
 * This component serves as the navigation bar for the book reader interface (e.g., Aethel Saga).
 * It dynamically generates navigation links (Prev, Next, Up) based on an external JSON index.
 * 
 * LOGIC & CONSTRAINTS:
 * - Depends on `nav-logic.php` to fetch and parse the JSON book index.
 * - Variables like `$bookJsonUrl` must be set in the parent scope (e.g., `index.php`) before
 *   this file is included.
 * - `extract($navData)` injects variables (`$prevLink`, `$nextLink`, `$upLink`) into the local scope.
 *   Ensure `nav-logic.php` always returns these array keys to prevent undefined variable errors.
 * - Uses Web Awesome `<wa-dropdown>` components for the navigation menus.
 * 
 * File Info: includes/components/headers/header-book.php
 */

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
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item value="/library/aethel">Hub</wa-dropdown-item>
      <wa-dropdown-item value="/library/aethel/aethel-book">Book Index</wa-dropdown-item>
      <wa-dropdown-item value="/library/aethel/lore">Lore</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  " href="#"    slot="trigger" appearance="plain">
      <i class="fa-duotone fa-compass me-1"></i>Navigate
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <!-- 
        Dynamic Book Navigation:
        These values are extracted from the `$navData` array returned by `getBookNavigation()`.
      -->
      <wa-dropdown-item value="<?php echo $prevLink; ?>">
           <i class="fa-duotone fa-arrow-left me-2"></i>Back
        </wa-dropdown-item>
      
      <wa-dropdown-item>
            <i class="fa-duotone fa-arrow-up me-2"></i>Up
        </wa-dropdown-item>
      
      <wa-dropdown-item value="<?php echo $nextLink; ?>">
           Next<i class="fa-duotone fa-arrow-right ms-2"></i>
        </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>

  
  
    <wa-button class="nav-link  " href="#"    slot="trigger" appearance="plain">
      RaggieSoft
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    
      <wa-dropdown-item value="#">RaggieSoft.com</wa-dropdown-item>
      <wa-dropdown-item value="/" class="active">RaggieSoft Knox</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item value="/engine-room/artists/stardust-engine/contact">Contact Me</wa-dropdown-item>
    </wa-dropdown>

</div>