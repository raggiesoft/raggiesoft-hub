<?php
/**
 * ============================================================================
 * RaggieSoft Hub - About/Mission Profile Header (DaisyUI 5 + Phosphor)
 * ============================================================================
 * File: includes/components/headers/about/header-about.php
 * Navigation for the `/about/*` directory (Mission Profile).
 *
 * LOGIC & CONSTRAINTS:
 * - Active state logic (`$isGovernance`, `$isProfiles`) determines which dropdown
 *   menu appears active based on `$_SERVER['REQUEST_URI']`.
 * - Uses semantic DaisyUI 5 `<details class="dropdown">` and Phosphor Duotone icons.
 * ============================================================================
 */

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// Determine active section for dropdown highlighting
$isMemoriam   = ($uri === '/in-memoriam' || $uri === '/about/in-memoriam');
$isGovernance = (str_contains($uri, '/license') || str_contains($uri, '/privacy') || str_contains($uri, '/terms') || str_contains($uri, '/ai-disclaimer'));
$isProfiles   = (!$isGovernance && !$isMemoriam && $uri !== '/about');
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <a href="/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-house me-1" aria-hidden="true"></i>Home
  </a>

  <a href="/about" class="btn btn-ghost <?php echo ($uri === '/about') ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
    <i class="ph-duotone ph-info me-1" aria-hidden="true"></i>Mission Profile
  </a>

  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isGovernance ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-scales me-1" aria-hidden="true"></i>Governance
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-64 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="https://corporate.raggiesoft.com/licensing">
          <i class="ph-duotone ph-certificate text-primary" aria-hidden="true"></i>Licenses (MIT/CC)
        </a>
      </li>
      <li>
        <a href="/about/privacy">
          <i class="ph-duotone ph-shield-check text-success" aria-hidden="true"></i>Privacy Policy
        </a>
      </li>
      <li>
        <a href="/about/terms">
          <i class="ph-duotone ph-gavel text-warning" aria-hidden="true"></i>Terms of Service
        </a>
      </li>
      <li>
        <a href="/about/ai-disclaimer">
          <i class="ph-duotone ph-robot text-info" aria-hidden="true"></i>AI Disclaimer
        </a>
      </li>
    </ul>
  </details>

  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isProfiles ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-tree-structure me-1" aria-hidden="true"></i>Network Profiles
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-72 p-2 shadow-lg border border-base-300 mt-1">
      <li class="menu-title text-uppercase small fw-bold opacity-75">The Core</li>
      <li>
        <a href="https://michaelpragsdale.com">
          <i class="ph-duotone ph-user-focus" aria-hidden="true"></i>The Architect (Portfolio)
        </a>
      </li>
      <li>
        <a href="/about/family">
          <i class="ph-duotone ph-users-three" aria-hidden="true"></i>The Family (DevOps)
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li class="menu-title text-uppercase small fw-bold opacity-75">The Projects</li>
      <li>
        <a href="/about/engine-room">
          <i class="ph-duotone ph-factory" aria-hidden="true"></i>Engine Room Records
        </a>
      </li>
      <li>
        <a href="/about/stardust-engine">
          <i class="ph-duotone ph-rocket-launch" aria-hidden="true"></i>The Stardust Engine
        </a>
      </li>
      <li>
        <a href="/about/aethel">
          <i class="ph-duotone ph-sword" aria-hidden="true"></i>The Aethel Saga
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li>
        <a href="/in-memoriam">
          <i class="ph-duotone ph-shooting-star text-warning" aria-hidden="true"></i>In Memoriam (Ad Astra)
        </a>
      </li>
    </ul>
  </details>

  <a href="/in-memoriam" class="btn btn-ghost <?php echo $isMemoriam ? 'text-warning fw-bold' : 'text-body-secondary'; ?>">
    <i class="ph-duotone ph-shooting-star text-warning me-1" aria-hidden="true"></i>In Memoriam
  </a>

  <a href="/contact" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-envelope me-1" aria-hidden="true"></i>Contact
  </a>

</div>
