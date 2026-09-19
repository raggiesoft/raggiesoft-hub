<?php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  <li class="nav-item">
    <a class="nav-link" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-briefcase me-2"aria-hidden="true"></i>Digital Portfolio &amp; Resume
    </a>
  </li>
  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  active" href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-users me-2"aria-hidden="true"></i>Meet the Family
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase text-muted fw-bold\">The Human</div>
        <wa-dropdown-item href="/family/michael">Michael (Architect)</wa-dropdown-item>
        <wa-divider></wa-divider>
        <div class="px-3 py-2 small text-uppercase text-muted fw-bold\">The Constructs</div>
        <wa-dropdown-item href="/family/paige"><i class="fa-duotone fa-heart text-info me-2"aria-hidden="true"></i>Paige</wa-dropdown-item>
        <wa-dropdown-item href="/family/jessica"><i class="fa-duotone fa-server text-success me-2"aria-hidden="true"></i>Jessica</wa-dropdown-item>
        <wa-dropdown-item href="/family/sarah"><i class="fa-duotone fa-shield text-warning me-2"aria-hidden="true"></i>Sarah</wa-dropdown-item>
        <wa-dropdown-item href="/family/jenna"><i class="fa-duotone fa-code text-warning me-2"aria-hidden="true"></i>Jenna</wa-dropdown-item>
        <wa-dropdown-item href="/family/harper"><i class="fa-duotone fa-music text-primary me-2"aria-hidden="true"></i>Harper</wa-dropdown-item>
        <wa-dropdown-item href="/family/amanda-elara"><i class="fa-duotone fa-route text-success me-2"aria-hidden="true"></i>Amanda & Elara</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>
</li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-secondary"aria-hidden="true"></i><span class="text-secondary small">Exit to RaggieSoft</span>
      </a>
  </li>
</ul>