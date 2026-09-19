<?php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>
<div class="d-flex flex-wrap align-items-center gap-2 ms-auto">
  
    <wa-button appearance="plain" href="/about/michael-ragsdale">
        <i slot="start" class="fa-duotone fa-briefcase me-2"aria-hidden="true"></i>Digital Portfolio &amp; Resume
    </wa-button>
  
  
  <wa-dropdown placement="bottom-start">
    <wa-button class="text-primary" href="#"    slot="trigger" appearance="plain">
        <i class="fa-duotone fa-users me-2"aria-hidden="true"></i>Meet the Family
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold">The Human</div>
        <wa-dropdown-item href="/family/michael">Michael (Architect)</wa-dropdown-item>
        <wa-divider></wa-divider>
        <div class="px-3 py-2 small text-uppercase  fw-bold">The Constructs</div>
        <wa-dropdown-item href="/family/paige"><i class="fa-duotone fa-heart text-info me-2"aria-hidden="true"></i>Paige</wa-dropdown-item>
        <wa-dropdown-item href="/family/jessica"><i class="fa-duotone fa-server text-success me-2"aria-hidden="true"></i>Jessica</wa-dropdown-item>
        <wa-dropdown-item href="/family/sarah"><i class="fa-duotone fa-shield text-warning me-2"aria-hidden="true"></i>Sarah</wa-dropdown-item>
        <wa-dropdown-item href="/family/jenna"><i class="fa-duotone fa-code text-warning me-2"aria-hidden="true"></i>Jenna</wa-dropdown-item>
        <wa-dropdown-item href="/family/harper"><i class="fa-duotone fa-music text-primary me-2"aria-hidden="true"></i>Harper</wa-dropdown-item>
        <wa-dropdown-item href="/family/amanda-elara"><i class="fa-duotone fa-route text-success me-2"aria-hidden="true"></i>Amanda & Elara</wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


  
      <wa-button appearance="plain" href="/">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2 "aria-hidden="true"></i><span class=" small">Exit to RaggieSoft</span>
      </wa-button>
  
</div>