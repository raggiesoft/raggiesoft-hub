<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES: Family Sub-Network Header
 * ============================================================================
 * File: includes/components/headers/family/header-family.php
 * Purpose: Localized navigation specific to "The Family" (Personified DevOps)
 *          personas.
 *
 * Strategy & Implementation:
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>` without legacy `<wa-menu>`.
 * ============================================================================
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/family" class="<?php echo ($request_uri === '/family') ? 'text-primary fw-bold' : ''; ?>">
    <i slot="start" class="fa-duotone fa-house-user me-2" aria-hidden="true"></i>Family Hub
  </wa-button>

  <wa-button appearance="plain" href="https://michaelpragsdale.com">
    <i slot="start" class="fa-duotone fa-briefcase me-2" aria-hidden="true"></i>Digital Portfolio &amp; Resume
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button class="text-primary" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-users me-2" aria-hidden="true"></i>Meet the Family
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">The Human</div>
    <wa-dropdown-item value="/family/michael">
      <i slot="icon" class="fa-duotone fa-user-visor text-primary" aria-hidden="true"></i>Michael (Architect)
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">The Constructs</div>
    <wa-dropdown-item value="/family/paige">
      <i slot="icon" class="fa-duotone fa-heart text-info" aria-hidden="true"></i>Paige
    </wa-dropdown-item>
    <wa-dropdown-item value="/family/jessica">
      <i slot="icon" class="fa-duotone fa-server text-success" aria-hidden="true"></i>Jessica
    </wa-dropdown-item>
    <wa-dropdown-item value="/family/sarah">
      <i slot="icon" class="fa-duotone fa-shield text-warning" aria-hidden="true"></i>Sarah
    </wa-dropdown-item>
    <wa-dropdown-item value="/family/jenna">
      <i slot="icon" class="fa-duotone fa-code text-warning" aria-hidden="true"></i>Jenna
    </wa-dropdown-item>
    <wa-dropdown-item value="/family/harper">
      <i slot="icon" class="fa-duotone fa-music text-primary" aria-hidden="true"></i>Harper
    </wa-dropdown-item>
    <wa-dropdown-item value="/family/amanda-elara">
      <i slot="icon" class="fa-duotone fa-route text-success" aria-hidden="true"></i>Amanda &amp; Elara
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i><span class="small">Exit to RaggieSoft</span>
  </wa-button>

</div>