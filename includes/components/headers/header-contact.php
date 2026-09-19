<?php
// includes/components/headers/header-contact.php
// Navigation for the Global Contact Hub.
// UPDATED: Matches the new RaggieSoft Hub structure (Architect vs. Creative)

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isArchitect = (str_starts_with($request_uri, '/about/michael-ragsdale'));
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo $isArchitect ? 'active' : ''; ?>" slot="trigger" appearance="plain">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
     <i slot="suffix" class="fa-solid fa-circle-caret-down ms-2 opacity-50"></i>
    </wa-button>
    <wa-menu>
      <wa-dropdown-item href="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</wa-dropdown-item>
      <wa-dropdown-item href="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</wa-dropdown-item>
      <wa-divider></wa-divider>
      <wa-dropdown-item href="/about/michael-ragsdale/contact"><i class="fa-duotone fa-address-card me-2"></i>Recruiter Contact</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/engine-room">
        <i slot="start" class="fa-solid fa-industry me-2" aria-hidden="true"></i>Engine Room
    </wa-button>
  

  
    <wa-button appearance="plain" href="/contact" class="active">
        <i slot="start" class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
    </wa-button>
  

</div>