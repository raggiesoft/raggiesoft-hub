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

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Aethel
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/library/aethel">Hub</a></li>
      <li><a class="dropdown-item" href="/library/aethel/aethel-book">Book Index</a></li>
      <li><a class="dropdown-item" href="/library/aethel/lore">Lore</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-compass me-1"></i>Navigate
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li>
        <a class="dropdown-item <?php echo ($currentIndex <= 0 && !empty($currentSceneId)) ? 'disabled' : ''; ?>" 
           href="<?php echo $prevLink; ?>">
           <i class="fa-duotone fa-arrow-left me-2"></i>Back
        </a>
      </li>
      
      <li>
        <a class="dropdown-item" href="<?php echo $upLink; ?>">
            <i class="fa-duotone fa-arrow-up me-2"></i>Up
        </a>
      </li>
      
      <li>
        <a class="dropdown-item <?php echo ($nextLink === '#') ? 'disabled' : ''; ?>" 
           href="<?php echo $nextLink; ?>">
           Next<i class="fa-duotone fa-arrow-right ms-2"></i>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item-dropdown">
    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      RaggieSoft
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="#">RaggieSoft.com</a></li>
      <li><a class="dropdown-item active" href="/">RaggieSoft Knox</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/engine-room/artists/stardust-engine/contact">Contact Me</a></li>
    </ul>
  </li>
</ul>