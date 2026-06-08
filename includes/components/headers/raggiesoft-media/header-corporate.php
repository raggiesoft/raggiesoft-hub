<?php
// includes/components/headers/raggiesoft-media/header-corporate.php
// The global B2B navigation for the RaggieSoft Media holding entity.
// Updated: Frutiger Aero Glass Navigation

$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-media';
$isHub = ($request_uri === '/raggiesoft-media');
$isLicensing = (str_starts_with($request_uri, '/raggiesoft-media/licensing'));
$isOpenSource = (str_starts_with($request_uri, '/raggiesoft-media/projects'));
?>

<style>
    /* Active Link Text Glows */
    .nav-link.active.text-primary { text-shadow: 0 0 8px rgba(0, 130, 230, 0.4); }
    .nav-link.active.text-warning { text-shadow: 0 0 8px rgba(255, 179, 0, 0.4); }
    .nav-link.active.text-info { text-shadow: 0 0 8px rgba(0, 195, 255, 0.4); }
    
    [data-bs-theme="dark"] .nav-link.active.text-primary { text-shadow: 0 0 10px var(--mpr-cyan-400); }
    
    /* Aero Glass Nav Dividers */
    .aero-nav-divider {
        border-left: 1px solid var(--raggie-glass-border) !important;
        box-shadow: -1px 0 0 rgba(0,0,0,0.05); /* Subtle depth indent */
    }
    
    /* Hover Glow for the Exit Link */
    .aero-exit-link { transition: all 0.2s ease; }
    .aero-exit-link:hover {
        color: var(--bs-primary) !important;
        text-shadow: 0 0 8px rgba(0, 130, 230, 0.4);
        transform: translateX(2px);
    }
</style>

<ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
  
  <li class="nav-item me-2">
    <a class="nav-link px-3 rounded-pill transition-all <?php echo $isHub ? 'active fw-bold text-primary bg-primary bg-opacity-10 border border-primary border-opacity-25' : ''; ?>" href="/raggiesoft-media">
        <i class="fa-duotone fa-building me-2" aria-hidden="true"></i>Corporate Hub
    </a>
  </li>

  <li class="nav-item me-2">
    <a class="nav-link px-3 rounded-pill transition-all <?php echo $isLicensing ? 'active fw-bold text-warning bg-warning bg-opacity-10 border border-warning border-opacity-25' : ''; ?>" href="/raggiesoft-media/licensing">
        <i class="fa-duotone fa-scale-balanced me-2" aria-hidden="true"></i>Master Licensing
    </a>
  </li>

  <li class="nav-item dropdown me-3">
    <a class="nav-link dropdown-toggle px-3 rounded-pill transition-all <?php echo $isOpenSource ? 'active fw-bold text-info bg-info bg-opacity-10 border border-info border-opacity-25' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-brands fa-osi me-2" aria-hidden="true"></i>Open Source
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/raggiesoft-media/projects"><i class="fa-duotone fa-network-wired fa-fw me-2 text-info" aria-hidden="true"></i>Projects Hub</a></li>
      <li><a class="dropdown-item" href="/raggiesoft-media/projects/stardust-engine-cms"><i class="fa-duotone fa-rocket-launch fa-fw me-2 text-primary" aria-hidden="true"></i>Stardust Engine CMS</a></li>
    </ul>
  </li>

  <li class="nav-item d-none d-md-block aero-nav-divider ps-3">
    <a class="btn btn-primary btn-sm rounded-pill px-4 py-2 font-monospace fw-bold text-uppercase shadow-sm" href="/raggiesoft-media/licensing/commercial">
        <i class="fa-solid fa-briefcase me-2" aria-hidden="true"></i>Commercial Portal
    </a>
  </li>

  <li class="nav-item aero-nav-divider ms-3 ps-3">
      <a class="nav-link text-body-secondary aero-exit-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i><span class="small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>