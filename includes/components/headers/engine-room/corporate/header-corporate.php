<?php
// includes/components/headers/engine-room/corporate/header.php
// Context: The Corporate Intranet Navigation.
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0 font-monospace small text-uppercase">
  
  <li class="nav-item">
    <a class="nav-link" href="/engine-room/corporate">
        <i class="fa-duotone fa-building-columns me-2"></i>Dashboard
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room/corporate/structure">
        <i class="fa-duotone fa-sitemap me-2"></i>Structure
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-buttonclass="nav-link " href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-briefcase me-2"></i>Entities
    </wa-button>
    
        <li><h6 class="dropdown-header">Operating Companies</h6></li>
        <wa-dropdown-item href="/engine-room"><i class="fa-solid fa-record-vinyl me-2 text-danger"></i>Engine Room Records</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/corporate/aethelgard"><i class="fa-solid fa-gavel me-2 text-secondary"></i>Aethelgard Holdings</wa-dropdown-item>
        <wa-dropdown-item href="/pacific-rim"><i class="fa-solid fa-city me-2 text-primary"></i>Pacific Rim Properties</wa-dropdown-item>
        <wa-divider></wa-divider>
        <li><h6 class="dropdown-header">Philanthropy</h6></li>
        <wa-dropdown-item href="/engine-room/corporate/leadership"><i class="fa-solid fa-hand-holding-heart me-2 text-success"></i>Jessica Miller Center</wa-dropdown-item>
    </wa-dropdown>
</li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-buttonclass="nav-link " href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-server me-2"></i>Ops
    </wa-button>
    
        <li><h6 class="dropdown-header text-info">Internal Only</h6></li>
        <wa-dropdown-item href="/engine-room/corporate/systems"><i class="fa-solid fa-terminal me-2"></i>Systems (Justin)</wa-dropdown-item>
        <wa-dropdown-item href="/engine-room/corporate/fleet"><i class="fa-solid fa-bus me-2"></i>Fleet Command</wa-dropdown-item>
    </wa-dropdown>
</li>

  <li class="nav-item ms-3 border-start border-secondary ps-3">
    <a class="nav-link text-dark" href="/engine-room">
        Exit to Public Site <i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
    </a>
  </li>

</ul>