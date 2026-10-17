<?php
/**
 * ============================================================================
 * Engine Room - Jessica Miller Center Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/engine-room/jessica-miller-center/header-miller-center.php
 * Purpose: Horizontal navigation specifically for the "Jessica Miller Center"
 *          philanthropic and universal design sub-section.
 * ============================================================================
 */
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/engine-room/jessica-miller-center">
    <i slot="start" class="fa-duotone fa-building-columns me-2"></i>Overview
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/jessica-miller-center/the-quiet-floor">
    <i slot="start" class="fa-duotone fa-ear-muffs me-2"></i>The Quiet Floor
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-wheelchair me-2"></i>The Standard
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Universal Design</div>
    <wa-dropdown-item value="/engine-room/jessica-miller-center/the-quiet-floor">
      <i slot="icon" class="fa-solid fa-volume-xmark text-info"></i>Acoustic Zoning &amp; Quiet Floor
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/jessica-miller-center/destination-dispatch-elevators">
      <i slot="icon" class="fa-solid fa-elevator text-primary"></i>Destination Dispatch Elevators
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Origin Case File</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-jessica-miller-center">
      <i slot="icon" class="fa-solid fa-book-open text-success"></i>The Acquisition Archive
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-non-profit-model">
      <i slot="icon" class="fa-solid fa-hand-holding-heart text-warning"></i>The Non-Profit Model
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room/corporate">
    <i slot="start" class="fa-duotone fa-sitemap me-2"></i>Corporate Portal
  </wa-button>

  <wa-button appearance="plain" href="/engine-room">
    <i slot="start" class="fa-solid fa-arrow-turn-up me-2"></i>Engine Room HQ
  </wa-button>

</div>