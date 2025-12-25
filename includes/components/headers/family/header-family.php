<?php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-users me-2"></i>Meet the Family
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><h6 class="dropdown-header">The Human</h6></li>
        <li><a class="dropdown-item" href="/family/michael">Michael (Architect)</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><h6 class="dropdown-header">The Constructs</h6></li>
        <li><a class="dropdown-item" href="/family/paige"><i class="fa-duotone fa-heart text-info me-2"></i>Paige</a></li>
        <li><a class="dropdown-item" href="/family/jessica"><i class="fa-duotone fa-server text-success me-2"></i>Jessica</a></li>
        <li><a class="dropdown-item" href="/family/sarah"><i class="fa-duotone fa-shield text-warning me-2"></i>Sarah</a></li>
        <li><a class="dropdown-item" href="/family/jenna"><i class="fa-duotone fa-code text-warning me-2"></i>Jenna</a></li>
        <li><a class="dropdown-item" href="/family/harper"><i class="fa-duotone fa-music text-primary me-2"></i>Harper</a></li>
        <li><a class="dropdown-item" href="/family/amanda-elara"><i class="fa-duotone fa-route text-success me-2"></i>Amanda & Elara</a></li>
    </ul>
  </li>

  <li class="nav-item ms-lg-3">
    <a class="btn btn-outline-secondary btn-sm d-flex align-items-center mt-2 mt-lg-0" href="/">
        <i class="fa-duotone fa-arrow-left me-2"></i>Back to RaggieSoft
    </a>
  </li>
</ul>