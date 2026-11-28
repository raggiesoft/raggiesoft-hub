<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/headers/header-contact.php
 * Role: Scoped Top Navigation Menu for `/contact`, `/contact/faq`, & `/contact/no-solicitation`
 * Domain: https://raggiesoft.com (Assigned via `data/routes/core.json` `"headerMenu": "header-contact"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the dedicated navigation bar inside `<header><nav>` across all three
 * routes of the RaggieSoft Contact Suite:
 *   - Home (`/`)
 *   - Explore Network (`<details class="dropdown">` linking to Books, Music,
 *     Desktop Apps, RaggieSoft Studio, Creator Portfolio & Hiring Hub,
 *     Commercial Licensing, and the Official Job Scam Warning)
 *   - Channels (`/contact`)
 *   - FAQ (`/contact/faq`)
 *   - No Solicitation (`/contact/no-solicitation`)
 *
 * TEACHING NOTE ON `aria-current="page"` & `<details class="dropdown">`:
 * - Native HTML5 `<details>` + `<summary>` gives keyboard and screen-reader users
 *   an accessible disclosure dropdown with zero external JS bundle needed.
 * - `aria-current="page"` tells assistive technologies (JAWS, NVDA, VoiceOver)
 *   which of the three Contact Suite tabs is currently active!
 *
 * INPUTS:
 * - `$_SERVER['REQUEST_URI']`: Current request URL path for active-link styling.
 *
 * OUTPUT PRODUCED:
 * - Responsive `.mobile-nav-menu` flex row/column inside `#navbarCollapse`.
 * ============================================================================
 */

// Normalize the request path (stripping query strings and trailing slashes):
$raw_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$request_uri = strlen($raw_uri) > 1 ? rtrim($raw_uri, '/') : $raw_uri;

$isContactHub     = ($request_uri === '/contact');
$isContactFaq     = ($request_uri === '/contact/faq');
$isNoSolicitation = ($request_uri === '/contact/no-solicitation');
?>

<?php /* Stacks vertically inside the mobile hamburger drawer (`flex-column`) and switches to a horizontal row (`flex-md-row`) at `>= 768px` */ ?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <a href="/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-house me-1" aria-hidden="true"></i>Home
  </a>

  <?php /* Explore Network Dropdown: Unified escape hatches across Books, Music, Software, Portfolio & Governance */ ?>
  <details class="dropdown">
    <summary class="btn btn-ghost text-body-secondary">
      <i class="ph-duotone ph-compass me-1" aria-hidden="true"></i>Explore Network
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-72 p-2 shadow-lg border border-base-300 mt-1">
      <li class="menu-title text-uppercase small fw-bold opacity-75">Stories, Music &amp; Apps</li>
      <li>
        <a href="https://books.raggiesoft.com">
          <i class="ph-duotone ph-book-open text-info" aria-hidden="true"></i>Read Novels (Book Reader)
        </a>
      </li>
      <li>
        <a href="https://music.raggiesoft.com">
          <i class="ph-duotone ph-headphones text-warning" aria-hidden="true"></i>Stream Music (Listening Room)
        </a>
      </li>
      <li>
        <a href="https://launcher.raggiesoft.com">
          <i class="ph-duotone ph-rocket-launch text-primary" aria-hidden="true"></i>Desktop Apps (Launcher)
        </a>
      </li>
      <li>
        <a href="https://raggiesoftstudio.com">
          <i class="ph-duotone ph-cube text-success" aria-hidden="true"></i>RaggieSoft Studio
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li class="menu-title text-uppercase small fw-bold opacity-75">Portfolio, Licensing &amp; Safety</li>
      <li>
        <a href="https://michaelpragsdale.com/#logistics">
          <i class="ph-duotone ph-identification-badge text-primary" aria-hidden="true"></i>Creator Portfolio &amp; Hiring Hub
        </a>
      </li>
      <li>
        <a href="https://corporate.raggiesoft.com/licensing">
          <i class="ph-duotone ph-scales text-warning" aria-hidden="true"></i>Licensing &amp; Commercial Sync
        </a>
      </li>
      <li>
        <a href="https://corporate.raggiesoft.com/careers">
          <i class="ph-duotone ph-shield-warning text-error" aria-hidden="true"></i>Job Scam Warning
        </a>
      </li>
    </ul>
  </details>

  <?php /* Three Sibling Contact Suite Tabs: Channels (`/contact`), FAQ (`/contact/faq`), and No Solicitation (`/contact/no-solicitation`) */ ?>
  <a href="/contact" class="btn btn-ghost <?php echo $isContactHub ? 'active text-primary fw-bold' : 'text-body-secondary'; ?>"<?php echo $isContactHub ? ' aria-current="page"' : ''; ?>>
    <i class="ph-duotone ph-envelope-open me-1" aria-hidden="true"></i>Channels
  </a>

  <a href="/contact/faq" class="btn btn-ghost <?php echo $isContactFaq ? 'active text-primary fw-bold' : 'text-body-secondary'; ?>"<?php echo $isContactFaq ? ' aria-current="page"' : ''; ?>>
    <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i>FAQ
  </a>

  <a href="/contact/no-solicitation" class="btn btn-ghost <?php echo $isNoSolicitation ? 'active text-warning fw-bold' : 'text-body-secondary'; ?>"<?php echo $isNoSolicitation ? ' aria-current="page"' : ''; ?>>
    <i class="ph-duotone ph-megaphone-simple me-1" aria-hidden="true"></i>No Solicitation
  </a>

</div>
