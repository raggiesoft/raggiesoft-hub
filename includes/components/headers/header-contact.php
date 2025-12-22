<?php
// includes/components/headers/header-contact.php
// Navigation for the Global Contact Hub.
// Directs users back to the main pillars of the site.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room">
        <i class="fa-solid fa-industry me-2" aria-hidden="true"></i>Engine Room
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/contact">
        <i class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/about">
        <i class="fa-duotone fa-circle-info me-2" aria-hidden="true"></i>About 
  </li>

</ul>