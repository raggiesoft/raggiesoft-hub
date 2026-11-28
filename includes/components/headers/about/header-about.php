<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/headers/about/header-about.php
 * Role: Section-Scoped Top Navigation Menu for `/about/*` & `/in-memoriam`
 * Domain: https://raggiesoft.com (Assigned via `data/routes/about.json` & `core.json`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Replaces the root navbar links with a Mission Profile navigation menu whenever
 * a visitor explores `/about`, `/about/family`, `/about/engine-room`,
 * `/about/stardust-engine`, `/about/aethel`, `/about/privacy`, `/about/terms`,
 * `/about/ai-disclaimer`, or `/in-memoriam`. Groups legal policies under a
 * "Governance" dropdown and studio/worldbuilding pages under "Network Profiles".
 *
 * INPUTS:
 * - `$_SERVER['REQUEST_URI']`: Checked with PHP 8's `str_contains()` to highlight
 *   the active dropdown (`$isGovernance`, `$isProfiles`, `$isMemoriam`).
 *
 * OUTPUT PRODUCED:
 * - Responsive DaisyUI 5 `.mobile-nav-menu` flex menu inside `#navbarCollapse`.
 * ============================================================================
 *
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

// Extract clean request path without query parameters:
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// Determine active section for dropdown highlighting using PHP 8 `str_contains()`
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

  <?php /* Governance Dropdown: Licensing, Privacy Policy, Terms of Service, and AI Disclaimer */ ?>
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
          <i class="ph-duotone ph-robot text-info" aria-hidden="true"></i>AI &amp; Creative Process
        </a>
      </li>
      <li>
        <a href="/about/ai-disclaimer/craft-vs-slop">
          <i class="ph-duotone ph-sliders text-primary" aria-hidden="true"></i>Craft vs. &ldquo;AI Slop&rdquo;
        </a>
      </li>
      <li>
        <a href="/about/ai-disclaimer/zero-budget-reality">
          <i class="ph-duotone ph-piggy-bank text-success" aria-hidden="true"></i>Zero-Budget Reality
        </a>
      </li>
      <li>
        <a href="/about/ai-disclaimer/history-of-tools">
          <i class="ph-duotone ph-clock-counter-clockwise text-warning" aria-hidden="true"></i>History of Tools
        </a>
      </li>
    </ul>
  </details>

  <?php /* Network Profiles Dropdown: Creator portfolio, Studio Family, and flagship creative universes */ ?>
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

  <?php /* Contact Dropdown: Consistent quick access to Contact Channels, FAQ, and No-Solicitation Policy */ ?>
  <details class="dropdown dropdown-end">
    <summary class="btn btn-ghost text-body-secondary">
      <i class="ph-duotone ph-envelope me-1" aria-hidden="true"></i>Contact
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-64 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="/contact">
          <i class="ph-duotone ph-envelope-open text-info" aria-hidden="true"></i>Contact Channels
        </a>
      </li>
      <li>
        <a href="/contact/faq">
          <i class="ph-duotone ph-chats-circle text-primary" aria-hidden="true"></i>Contact FAQ
        </a>
      </li>
      <li>
        <a href="/contact/no-solicitation">
          <i class="ph-duotone ph-megaphone-simple text-warning" aria-hidden="true"></i>No-Solicitation Policy
        </a>
      </li>
    </ul>
  </details>

</div>
