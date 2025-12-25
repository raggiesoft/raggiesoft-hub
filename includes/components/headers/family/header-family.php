<?php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  <li class="nav-item">
    <a class="nav-link" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-briefcase me-2"aria-hidden="true"></i>Digital Portfolio &amp; Resume
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-users me-2"aria-hidden="true"></i>Meet the Family
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><h6 class="dropdown-header">The Human</h6></li>
        <li><a class="dropdown-item" href="/family/michael">Michael (Architect)</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><h6 class="dropdown-header">The Constructs</h6></li>
        <li><a class="dropdown-item" href="/family/paige"><i class="fa-duotone fa-heart text-info me-2"aria-hidden="true"></i>Paige</a></li>
        <li><a class="dropdown-item" href="/family/jessica"><i class="fa-duotone fa-server text-success me-2"aria-hidden="true"></i>Jessica</a></li>
        <li><a class="dropdown-item" href="/family/sarah"><i class="fa-duotone fa-shield text-warning me-2"aria-hidden="true"></i>Sarah</a></li>
        <li><a class="dropdown-item" href="/family/jenna"><i class="fa-duotone fa-code text-warning me-2"aria-hidden="true"></i>Jenna</a></li>
        <li><a class="dropdown-item" href="/family/harper"><i class="fa-duotone fa-music text-primary me-2"aria-hidden="true"></i>Harper</a></li>
        <li><a class="dropdown-item" href="/family/amanda-elara"><i class="fa-duotone fa-route text-success me-2"aria-hidden="true"></i>Amanda & Elara</a></li>
    </ul>
  </li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-secondary"aria-hidden="true"></i><span class="text-secondary small">Exit to RaggieSoft</span>
      </a>
  </li>
</ul>