<?php
// includes/components/sidebars/about/sidebar-about.php
// The central directory for RaggieSoft "Mission Profile" pages.

$currentUri = $_SERVER['REQUEST_URI'];
?>

<div class="text-center mb-4 pt-3">
    <a href="/about" class="text-decoration-none">
        <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
             alt="RaggieSoft" 
             class="mb-3"
             style="width: 60px; height: 60px; object-fit: contain;">
        <h5 class="fw-bold text-uppercase mb-0 text-body letter-spacing-1">Mission Profile</h5>
        <p class="small text-muted mb-0">Central Intelligence</p>
    </a>
</div>

<hr class="my-3 opacity-25">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Network Entities</span>
</h6>

<nav class="nav flex-column nav-pills small gap-1 mb-4">
    
    <a href="/about/michael-ragsdale" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/michael-ragsdale')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-user-visor me-2 opacity-75"></i> The Architect
    </a>

    <a href="/about/family" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/family')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-people-group me-2 opacity-75"></i> The Family
    </a>

    <a href="/about/engine-room" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/engine-room')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-solid fa-industry me-2 opacity-75"></i> Engine Room Records
    </a>

    <a href="/about/stardust-engine" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/stardust-engine')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-rocket-launch me-2 opacity-75"></i> The Stardust Engine
    </a>
    
    <a href="/about/aethel" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/aethel')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-sword me-2 opacity-75"></i> Aethel Saga
    </a>

</nav>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Governance</span>
</h6>

<nav class="nav flex-column nav-pills small gap-1">
    <a href="/about/license" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/license')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-scale-balanced me-2 opacity-75"></i> Licenses (MIT/CC)
    </a>
    <a href="/about/privacy" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/privacy')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-user-shield me-2 opacity-75"></i> Privacy Policy
    </a>
    <a href="/about/terms" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/terms')) ? 'active' : 'link-body-emphasis'; ?>">
        <i class="fa-duotone fa-scroll-old me-2 opacity-75"></i> Terms of Service
    </a>
</nav>

<hr class="my-4 opacity-25">

<div class="small text-center text-muted">
    <p class="mb-1"><i class="fa-duotone fa-globe me-1"></i> <strong>RaggieSoft.com</strong></p>
    <p class="mb-0 text-opacity-75">System Status: <span class="text-success">Stable</span></p>
</div>