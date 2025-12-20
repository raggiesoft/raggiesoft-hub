<?php
// includes/components/headers/engine-room/header-engine-room.php
// The Corporate Navigation. Stark. Functional.
// Used for: /engine-room/* pages

// 1. Determine Active States
$uri = $_SERVER['REQUEST_URI'] ?? '';

$isRoster = str_starts_with($uri, '/engine-room/artists');

// Operations: Physical Assets, Systems, Security
$isOperations = (
    str_contains($uri, '/corporate/facilities') || 
    str_contains($uri, '/corporate/fleet') || 
    str_contains($uri, '/corporate/systems') || 
    str_contains($uri, '/corporate/security')
);

// Governance: Structure, Leadership, HR, Compliance
$isGovernance = (
    str_contains($uri, '/corporate/structure') || 
    str_contains($uri, '/corporate/leadership') || 
    str_contains($uri, '/corporate/compliance') || 
    str_contains($uri, '/corporate/careers') ||
    str_contains($uri, '/corporate/financials')
);

// Archives: History, Legal Docs
$isHistory = (
    str_starts_with($uri, '/engine-room/history') || 
    str_contains($uri, '/acquisition-plan')
);
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-left me-2"></i>Return to The Stardust Engine
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isRoster ? 'active' : ''; ?>" href="/engine-room/artists">
        <i class="fa-duotone fa-users-viewfinder me-2"></i>The Roster
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isOperations ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-building-shield me-2"></i>Operations
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-primary fw-bold">Infrastructure</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/jessica-miller-center">
            <i class="fa-solid fa-building me-2 text-secondary"></i>The Jessica Miller Center
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/fleet">
            <i class="fa-solid fa-truck-ramp-box me-2 text-secondary"></i>Logistics Fleet
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/systems">
            <i class="fa-solid fa-server me-2 text-secondary"></i>Systems Status
          </a>
      </li>

      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-danger fw-bold">Safety & Protocols</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/security/sensory-scale">
            <i class="fa-solid fa-ear-listen me-2 text-danger"></i>Sensory Threat Scale
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/security/protocol-safe-harbor">
            <i class="fa-solid fa-person-to-door me-2 text-danger"></i>Protocol: Safe Harbor
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isGovernance ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-scale-balanced me-2"></i>Governance
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-dark fw-bold">Organization</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/structure">
            <i class="fa-solid fa-sitemap me-2 text-secondary"></i>Entity Structure
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/leadership">
            <i class="fa-solid fa-user-tie me-2 text-secondary"></i>Board of Directors
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/careers">
            <i class="fa-solid fa-briefcase me-2 text-secondary"></i>Human Capital (Careers)
          </a>
      </li>

      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-success fw-bold">Transparency</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/financials/transparency">
             <i class="fa-solid fa-chart-pie me-2 text-success"></i>Financial Breakdown
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/compliance/rider">
             <i class="fa-solid fa-file-signature me-2 text-success"></i>Standard Rider (Public)
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isHistory ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-box-archive me-2"></i>Archives
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-muted">Legal History</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/history">
            <i class="fa-solid fa-clock-rotate-left me-2"></i>Full Timeline
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/history/friction">
            <i class="fa-duotone fa-fire me-2 text-danger"></i>1992: Friction
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal">
            <i class="fa-duotone fa-handshake-slash me-2 text-success"></i>2018: The Refusal
          </a>
      </li>
      <li><hr class="dropdown-divider"></li>
      <li>
          <a class="dropdown-item" href="/engine-room/corporate/acquisition-plan">
             <i class="fa-solid fa-chess me-2"></i>The Acquisition Plan (2019)
          </a>
      </li>
    </ul>
  </li>

</ul>