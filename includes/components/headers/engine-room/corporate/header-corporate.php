<?php
// includes/components/headers/engine-room/corporate/header.php
// Context: The Corporate Intranet Navigation.
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/engine-room/corporate">
        <i slot="start" class="fa-duotone fa-building-columns me-2"></i>Dashboard
    </wa-button>
  

  
    <wa-button appearance="plain" href="/engine-room/corporate/structure">
        <i slot="start" class="fa-duotone fa-sitemap me-2"></i>Structure
    </wa-button>
  

  
  <wa-dropdown placement="bottom-start">
    <wa-button  href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-briefcase me-2"></i>Entities
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold">Operating Companies</div>
        <wa-dropdown-item value="/engine-room"><i class="fa-solid fa-record-vinyl me-2 text-danger"></i>Engine Room Records</wa-dropdown-item>
        <wa-dropdown-item value="/engine-room/corporate/aethelgard"><i class="fa-solid fa-gavel me-2 "></i>Aethelgard Holdings</wa-dropdown-item>
        <wa-dropdown-item value="/pacific-rim"><i class="fa-solid fa-city me-2 text-primary"></i>Pacific Rim Properties</wa-dropdown-item>
        <wa-divider></wa-divider>
        <div class="px-3 py-2 small text-uppercase  fw-bold">Philanthropy</div>
        <wa-dropdown-item value="/engine-room/corporate/leadership"><i class="fa-solid fa-hand-holding-heart me-2 text-success"></i>Jessica Miller Center</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
  <wa-dropdown placement="bottom-start">
    <wa-button  href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-server me-2"></i>Ops
        <i slot="end" class="fa-solid fa-circle-caret-down ms-2 opacity-50" aria-hidden="true"></i>
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold text-info">Internal Only</div>
        <wa-dropdown-item value="/engine-room/corporate/systems"><i class="fa-solid fa-terminal me-2"></i>Systems (Justin)</wa-dropdown-item>
        <wa-dropdown-item value="/engine-room/corporate/fleet"><i class="fa-solid fa-bus me-2"></i>Fleet Command</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
    <wa-button appearance="plain" href="/engine-room" class="text-dark">
        Exit to Public Site <i slot="start" class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
    </wa-button>
  

</div>