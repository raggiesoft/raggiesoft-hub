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

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-briefcase me-2"></i>Entities
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li><h6 class="dropdown-header">Operating Companies</h6></li>
        <li><a class="dropdown-item" href="/engine-room"><i class="fa-solid fa-record-vinyl me-2 text-danger"></i>Engine Room Records</a></li>
        <li><a class="dropdown-item" href="/engine-room/corporate/aethelgard"><i class="fa-solid fa-gavel me-2 text-secondary"></i>Aethelgard Holdings</a></li>
        <li><a class="dropdown-item" href="/pacific-rim"><i class="fa-solid fa-city me-2 text-primary"></i>Pacific Rim Properties</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><h6 class="dropdown-header">Philanthropy</h6></li>
        <li><a class="dropdown-item" href="/engine-room/corporate/leadership"><i class="fa-solid fa-hand-holding-heart me-2 text-success"></i>Jessica Miller Center</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-server me-2"></i>Ops
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-info">
        <li><h6 class="dropdown-header text-info">Internal Only</h6></li>
        <li><a class="dropdown-item" href="/engine-room/corporate/systems"><i class="fa-solid fa-terminal me-2"></i>Systems (Justin)</a></li>
        <li><a class="dropdown-item" href="/engine-room/corporate/fleet"><i class="fa-solid fa-bus me-2"></i>Fleet Command</a></li>
    </ul>
  </li>

  <li class="nav-item ms-3 border-start border-secondary ps-3">
    <a class="nav-link text-white-50" href="/engine-room">
        Exit to Public Site <i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
    </a>
  </li>

</ul>