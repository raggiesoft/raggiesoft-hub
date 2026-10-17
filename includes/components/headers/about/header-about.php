<?php
/**
 * ============================================================================
 * RaggieSoft Hub - About/Mission Profile Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/about/header-about.php
 * Navigation for the `/about/*` directory (Mission Profile).
 *
 * LOGIC & CONSTRAINTS:
 * - Active state logic (`$isGovernance`, `$isProfiles`) determines which dropdown
 *   menu appears active based on `$_SERVER['REQUEST_URI']`.
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>` without legacy `<wa-menu>`.
 * ============================================================================
 */

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// Determine active section for dropdown highlighting
$isGovernance = (str_contains($uri, '/license') || str_contains($uri, '/privacy') || str_contains($uri, '/terms') || str_contains($uri, '/ai-disclaimer'));
$isProfiles   = (!$isGovernance && $uri !== '/about');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-house me-2"></i>Home
  </wa-button>

  <wa-button appearance="plain" href="/about" class="<?php echo ($uri === '/about') ? 'text-primary fw-bold' : ''; ?>">
    <i slot="start" class="fa-duotone fa-circle-info me-2"></i>Mission Profile
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isGovernance ? 'text-primary fw-bold' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-scale-balanced me-2"></i>Governance
    </wa-button>
    <wa-dropdown-item value="/raggiesoft-media/licensing">
      <i slot="icon" class="fa-duotone fa-file-certificate text-primary"></i>Licenses (MIT/CC)
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/privacy">
      <i slot="icon" class="fa-duotone fa-shield-check text-success"></i>Privacy Policy
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/terms">
      <i slot="icon" class="fa-duotone fa-gavel text-warning"></i>Terms of Service
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/ai-disclaimer">
      <i slot="icon" class="fa-duotone fa-robot text-info"></i>AI Disclaimer
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isProfiles ? 'text-primary fw-bold' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-sitemap me-2"></i>Network Profiles
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">The Core</div>
    <wa-dropdown-item value="https://michaelpragsdale.com">
      <i slot="icon" class="fa-duotone fa-user-visor"></i>The Architect (Portfolio)
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/family">
      <i slot="icon" class="fa-duotone fa-people-group"></i>The Family (DevOps)
    </wa-dropdown-item>

    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">The Projects</div>
    <wa-dropdown-item value="/about/engine-room">
      <i slot="icon" class="fa-solid fa-industry"></i>Engine Room Records
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/stardust-engine">
      <i slot="icon" class="fa-duotone fa-rocket-launch"></i>The Stardust Engine
    </wa-dropdown-item>
    <wa-dropdown-item value="/about/aethel">
      <i slot="icon" class="fa-duotone fa-sword"></i>The Aethel Saga
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/contact">
    <i slot="start" class="fa-duotone fa-envelope me-2"></i>Contact
  </wa-button>

</div>