<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Professional Portfolio Sidebar
 * ============================================================================
 * ROLE: The primary navigation spine for the "Michael P. Ragsdale" portfolio 
 *       hub. Connects formal resume data with the broader narrative properties.
 * 
 * INTEGRATION: Relies on `$cdnBaseUrl` to load the primary headshot. Used 
 *              exclusively within the `/about/michael-ragsdale` route tree.
 * 
 * MAINTENANCE: The layout uses standard Bootstrap navigation pills (`.nav-pills`).
 *              Ensure the "Engine Room" section remains intact as it serves as
 *              the bridge between professional and creative identities.
 * ============================================================================
 */
// includes/components/sidebars/portfolio/sidebar-portfolio.php
// The main navigation sidebar for the professional portfolio.
$root = 'https://michaelpragsdale.com';
?>

<!-- [LAYOUT] Professional Identity Block: Contains headshot and primary title -->
<div class="text-center mb-4 pt-3">
    <a href="<?php echo $root; ?>">
        <img src="<?php echo $cdnBaseUrl; ?>/portfolio/images/logos/logo-michael.png" 
             alt="Michael P. Ragsdale Headshot" 
             class="rounded-circle shadow-glow border border-2 border-white mb-3"
             style="width: 80px; height: 80px; object-fit: cover;">
    </a>
    <h5 class="fw-bold mb-0">Michael P. Ragsdale</h5>
    <p class="small  mb-0">Systems Architect</p>
</div>

<hr class="my-3">

<!-- [UI COMPONENT] Primary Navigation: Web Awesome buttons for portfolio sections -->
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" href="<?php echo $root; ?>" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-house"></i> Home Lobby
    </wa-button>
    
    <wa-button appearance="plain" href="<?php echo $root; ?>/profile" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-layer-group"></i> Professional Profile
    </wa-button>

    <wa-button appearance="plain" href="<?php echo $root; ?>/resume" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-file-user"></i> Resume &amp; Skills
    </wa-button>
    <wa-button appearance="plain" href="<?php echo $root; ?>/education" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-graduation-cap"></i> Education
    </wa-button>
    
    <wa-button appearance="plain" href="/family" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-people-group"></i> The RaggieSoft Family
    </wa-button>
    
    <wa-button appearance="plain" href="<?php echo $root; ?>/location" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-map-location-dot"></i> Location &amp; Logistics
    </wa-button>
    <wa-button appearance="plain" href="<?php echo $root; ?>/contact" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-clipboard-check"></i> Hiring Inquiries
    </wa-button>
</div>

<hr class="my-4">

<!-- [UI COMPONENT] Creative Bridge: Links to the Engine Room narrative properties -->
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-body-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Engine Room</span>
</h6>

<div class="d-flex flex-column gap-1 mb-4">
    <wa-button appearance="plain" href="/engine-room" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-solid fa-industry"></i> Engine Room HQ
    </wa-button>
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-solid fa-rocket-launch"></i> The Stardust Engine
    </wa-button>
</div>

<div class="small text-center  mt-auto pt-3 border-top">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> Michael P. Ragsdale.</p>
    <p class="mb-0">Built with <i class="fa-solid fa-heart text-danger"></i> in Norfolk, VA.</p>
</div>