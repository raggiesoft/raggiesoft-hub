<?php
// includes/components/headers/header-contact.php
// Navigation for the Global Contact Hub.
// Directs users back to the main pillars of the site.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-house me-2"></i>Home
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-user-visor me-2"></i>The Architect
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room">
        <i class="fa-solid fa-industry me-2"></i>Engine Room
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="/contact">
        <i class="fa-duotone fa-envelope-open me-2"></i>Contact
    </a>
  </li>

</ul>