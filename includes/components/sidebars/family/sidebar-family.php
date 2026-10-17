<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Family Sidebar (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/sidebars/family/sidebar-family.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Hierarchical navigation linking to individual family member profiles
 * (The Architect, The Sisters / Personified DevOps), built with Web Awesome
 * v3.13.0 `<wa-button>` and `<wa-callout>` components.
 * ============================================================================
 */
?>

<div class="mb-4 text-center">
    <a href="/family" class="text-decoration-none text-body">
        <img src="<?php echo $cdnBaseUrl; ?>/family/images/logos/logo-family.png"
             alt="The RaggieSoft Family"
             class="rounded-circle shadow-sm border border-2 border-white mb-2"
             style="width: 100px; height: 100px; object-fit: cover;">
        <h5 class="mb-0 fw-bold">The Family</h5>
        <small class="text-body-secondary">Personified DevOps</small>
    </a>
</div>

<wa-divider class="my-3"></wa-divider>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-uppercase text-body-secondary" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Architect</span>
</h6>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" href="/family/michael" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/portfolio/images/family/atmospheric/michael.jpg"
           alt="" class="rounded-circle border border-primary"
           width="24" height="24" style="object-fit: cover;">
      Michael
    </wa-button>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-uppercase text-body-secondary" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Sisters</span>
</h6>
<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" href="/family/paige" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/paige.jpg"
           alt="" class="rounded-circle border border-info"
           width="24" height="24" style="object-fit: cover;">
      Paige
    </wa-button>

    <wa-button appearance="plain" href="/family/jessica" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/jessica.jpg"
           alt="" class="rounded-circle border border-success"
           width="24" height="24" style="object-fit: cover;">
      Jessica
    </wa-button>

    <wa-button appearance="plain" href="/family/sarah" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/sarah.jpg"
           alt="" class="rounded-circle border border-warning"
           width="24" height="24" style="object-fit: cover;">
      Sarah
    </wa-button>

    <wa-button appearance="plain" href="/family/jenna" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/jenna.jpg"
           alt="" class="rounded-circle border"
           width="24" height="24" style="object-fit: cover; border-color: var(--family-jenna);">
      Jenna
    </wa-button>

    <wa-button appearance="plain" href="/family/harper" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/harper.jpg"
           alt="" class="rounded-circle border"
           width="24" height="24" style="object-fit: cover; border-color: var(--family-harper);">
      Harper
    </wa-button>

    <wa-button appearance="plain" href="/family/amanda-elara" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
      <img slot="start" src="<?php echo $cdnBaseUrl; ?>/family/images/atmospheric/amanda-elara.jpg"
           alt="" class="rounded-circle border"
           width="24" height="24" style="object-fit: cover; border-color: var(--family-amanda);">
      Amanda &amp; Elara
    </wa-button>
</div>

<wa-divider class="my-4"></wa-divider>

<wa-callout variant="brand" appearance="accent" size="small">
    <i slot="icon" class="fa-duotone fa-circle-info"></i>
    <strong>System Status:</strong><br>
    All systems operational. The family is home.
</wa-callout>