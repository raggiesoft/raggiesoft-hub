<?php
// includes/components/sidebars/about/sidebar-about.php
// The central directory for RaggieSoft "Mission Profile" pages.

$currentUri = $_SERVER['REQUEST_URI'];
?>

<div class="text-center mb-4 pt-3">
    <a href="/about" class="text-decoration-none">
        <img src= $cdnBaseUrl . "/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
             alt="RaggieSoft" 
             class="mb-3"
             style="width: 60px; height: 60px; object-fit: contain;">
        <h5 class="fw-bold text-uppercase mb-0 text-body letter-spacing-1">Mission Profile</h5>
        <p class="small  mb-0">Central Intelligence</p>
    </a>
</div>

<hr class="my-3 ">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2  text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Network Entities</span>
</h6>

<nav class="nav flex-column nav-pills small gap-1 mb-4">
    
    <a href="/about/michael-ragsdale" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/michael-ragsdale')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-user-visor"></i> The Architect
    </a>

    <a href="/about/family" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/family')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-people-group"></i> The Family
    </a>

    <a href="/about/engine-room" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/engine-room')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-solid fa-industry"></i> Engine Room Records
    </a>

    <a href="/about/stardust-engine" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/stardust-engine')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-rocket-launch"></i> The Stardust Engine
    </a>
    
    <a href="/about/aethel" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/aethel')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-sword"></i> Aethel Saga
    </a>

</nav>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2  text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Governance</span>
</h6>

<nav class="nav flex-column nav-pills small gap-1">
    <a href="/raggiesoft-media/licensing" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/license')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-scale-balanced"></i> Licenses (MIT/CC)
    </a>
    <a href="/about/privacy" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/privacy')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-user-shield"></i> Privacy Policy
    </a>
    <a href="/about/terms" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/terms')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-scroll-old"></i> Terms of Service
    </a>
    <a href="/about/ai-disclaimer" class="nav-link d-flex align-items-center <?php echo (str_contains($currentUri, '/ai-disclaimer')) ? 'active' : 'link-body-emphasis'; ?>">
        <i slot="start" class="fa-duotone fa-robot"></i> AI Disclaimer
    </a>
</nav>

<hr class="my-4 ">

<div class="small text-center ">
    <p class="mb-1"><i class="fa-duotone fa-globe me-1"></i> <strong>RaggieSoft.com</strong></p>
    <p class="mb-0 text-">System Status: <span class="text-success">Stable</span></p>
</div>