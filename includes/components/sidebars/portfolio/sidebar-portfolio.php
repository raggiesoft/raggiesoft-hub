<?php
// includes/components/sidebars/portfolio/sidebar-portfolio.php
// The main navigation sidebar for the professional portfolio.
$root = '/about/michael-ragsdale';
?>

<div class="text-center mb-4 pt-3">
    <a href="<?php echo $root; ?>">
        <img src="https://assets.raggiesoft.com/common/images/mragsdale.jpg" 
             alt="Michael P. Ragsdale Headshot" 
             class="rounded-circle shadow-glow border border-2 border-white mb-3"
             style="width: 80px; height: 80px; object-fit: cover;">
    </a>
    <h5 class="fw-bold mb-0">Michael P. Ragsdale</h5>
    <p class="small text-secondary mb-0">Systems Architect</p>
</div>

<hr class="my-3">

<nav class="nav flex-column nav-pills small gap-1">
    <a href="<?php echo $root; ?>" class="nav-link link-body-emphasis">
        <i class="fa-duotone fa-house me-2"></i> Home Lobby
    </a>
    <a href="<?php echo $root; ?>/resume" class="nav-link link-body-emphasis">
        <i class="fa-duotone fa-file-user me-2"></i> Resume & Skills
    </a>
    <a href="/portfolio" class="nav-link link-body-emphasis">
        <i class="fa-duotone fa-code-branch me-2"></i> Engineering Projects
    </a>
    <a href="<?php echo $root; ?>/location" class="nav-link link-body-emphasis">
        <i class="fa-duotone fa-map-location-dot me-2"></i> Location & Logistics
    </a>
    <a href="<?php echo $root; ?>/contact" class="nav-link link-body-emphasis">
        <i class="fa-duotone fa-clipboard-check me-2"></i> Hiring Inquiries
    </a>
</nav>

<hr class="my-4">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-body-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Engine Room</span>
</h6>

<nav class="nav flex-column nav-pills small gap-1 mb-4">
    <a href="/engine-room" class="nav-link link-body-emphasis">
        <i class="fa-solid fa-industry me-2 text-danger"></i> Engine Room HQ
    </a>
    <a href="/engine-room/artists/the-stardust-engine" class="nav-link link-body-emphasis">
        <i class="fa-solid fa-rocket-launch me-2 text-warning"></i> The Stardust Engine
    </a>
</nav>

<div class="small text-center text-muted mt-auto pt-3 border-top">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> Michael P. Ragsdale.</p>
    <p class="mb-0">Built with <i class="fa-solid fa-heart text-danger"></i> in Norfolk, VA.</p>
</div>