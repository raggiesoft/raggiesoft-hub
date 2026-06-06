<?php
// includes/components/headers/raggiesoft-media/header-corporate.php
// The global B2B navigation for the RaggieSoft Media holding entity.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-media';
$isHub = ($request_uri === '/raggiesoft-media');
$isLicensing = (str_starts_with($request_uri, '/raggiesoft-media/licensing'));
$isOpenSource = (str_starts_with($request_uri, '/raggiesoft-media/projects'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
  
  <li class="nav-item me-2">
    <a class="nav-link <?php echo $isHub ? 'active fw-bold text-primary' : ''; ?>" href="/raggiesoft-media">
        <i class="fa-duotone fa-building me-2" aria-hidden="true"></i>Corporate Hub
    </a>
  </li>

  <li class="nav-item me-2">
    <a class="nav-link <?php echo $isLicensing ? 'active fw-bold text-warning' : ''; ?>" href="/raggiesoft-media/licensing">
        <i class="fa-duotone fa-scale-balanced me-2" aria-hidden="true"></i>Master Licensing
    </a>
  </li>

  <li class="nav-item me-3">
    <a class="nav-link <?php echo $isOpenSource ? 'active fw-bold text-info' : ''; ?>" href="/raggiesoft-media/projects/elara">
        <i class="fa-brands fa-osi me-2" aria-hidden="true"></i>Open Source
    </a>
  </li>

  <li class="nav-item d-none d-md-block border-start border-secondary-subtle ps-3">
    <a class="btn btn-outline-primary btn-sm rounded-0 px-3 py-2 font-monospace fw-bold text-uppercase" href="/raggiesoft-media/licensing/commercial">
        <i class="fa-solid fa-briefcase me-2" aria-hidden="true"></i>Commercial Portal
    </a>
  </li>

  <li class="nav-item border-start border-secondary-subtle ms-3 ps-3">
      <a class="nav-link text-body-secondary hover-text-primary" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i><span class="small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>