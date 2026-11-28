<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/headers/header-contact.php
 * Role: Scoped Top Navigation Menu for `/contact` and `/contact/faq`
 * Domain: https://raggiesoft.com (Assigned via `data/routes/core.json` `"headerMenu"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * When a visitor navigates to `https://raggiesoft.com/contact` or
 * `https://raggiesoft.com/contact/faq`, `core.json` assigns `"headerMenu": "header-contact"`.
 * `includes/header.php` injects THIS scoped navigation bar inside `#navbarCollapse`,
 * giving visitors and recruiters one-click links to Home (`/`), The Architect
 * dropdown (`michaelpragsdale.com`), Engine Room (`engineroom.raggiesoft.com`),
 * Contact Channels (`/contact`), and Contact FAQ (`/contact/faq`).
 *
 * TEACHING NOTE ON ACTIVE ROUTE HIGHLIGHTING:
 * By parsing `$_SERVER['REQUEST_URI']` with `parse_url(..., PHP_URL_PATH)` and
 * trimming any trailing slash via `rtrim()`, we can highlight `/contact` vs.
 * `/contact/faq` accurately AND stamp `aria-current="page"` on the active link
 * so screen reader users immediately know which page they are viewing!
 *
 * INPUTS:
 * - `$_SERVER['REQUEST_URI']`: Current request URL path for active-link styling.
 *
 * OUTPUT PRODUCED:
 * - Responsive `.mobile-nav-menu` flex row/column inside `<header><nav>`.
 * ============================================================================
 */

// Extract clean URL path from `$_SERVER['REQUEST_URI']` to compute active link classes:
$raw_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$request_uri = strlen($raw_uri) > 1 ? rtrim($raw_uri, '/') : $raw_uri;

$isArchitect  = str_starts_with($request_uri, '/about/michael-ragsdale');
$isContactHub = ($request_uri === '/contact');
$isContactFaq = ($request_uri === '/contact/faq');
?>

<?php /* Stacks vertically on mobile (`flex-column`) and switches to a horizontal row (`flex-md-row`) at `>= 768px` */ ?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <a href="/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-house me-1" aria-hidden="true"></i>Home
  </a>

  <?php /* Architect Navigation: Consolidates portfolio, resume, and recruiter hub links */ ?>
  <details class="dropdown">
    <summary class="btn btn-ghost <?php echo $isArchitect ? 'text-primary fw-bold' : 'text-body-secondary'; ?>">
      <i class="ph-duotone ph-user-focus me-1" aria-hidden="true"></i>The Architect
      <i class="ph-bold ph-caret-down small opacity-75" aria-hidden="true"></i>
    </summary>
    <ul class="dropdown-content menu bg-base-200 rounded-box z-50 w-64 p-2 shadow-lg border border-base-300 mt-1">
      <li>
        <a href="https://michaelpragsdale.com">
          <i class="ph-duotone ph-identification-card" aria-hidden="true"></i>Overview
        </a>
      </li>
      <li>
        <a href="https://michaelpragsdale.com/#career">
          <i class="ph-duotone ph-identification-badge" aria-hidden="true"></i>Resume / CV
        </a>
      </li>
      <li><hr class="my-1 border-base-300"></li>
      <li>
        <a href="https://michaelpragsdale.com/#logistics">
          <i class="ph-duotone ph-identification-card" aria-hidden="true"></i>Recruiter Contact
        </a>
      </li>
    </ul>
  </details>

  <a href="https://engineroom.raggiesoft.com/" class="btn btn-ghost text-body-secondary">
    <i class="ph-duotone ph-factory me-1" aria-hidden="true"></i>Engine Room
  </a>

  <?php /* Contact Channels (`/contact`) vs. Contact FAQ (`/contact/faq`) active state + `aria-current="page"` */ ?>
  <a href="/contact" class="btn btn-ghost <?php echo $isContactHub ? 'active text-primary fw-bold' : 'text-body-secondary'; ?>"<?php echo $isContactHub ? ' aria-current="page"' : ''; ?>>
    <i class="ph-duotone ph-envelope-open me-1" aria-hidden="true"></i>Contact
  </a>

  <a href="/contact/faq" class="btn btn-ghost <?php echo $isContactFaq ? 'active text-primary fw-bold' : 'text-body-secondary'; ?>"<?php echo $isContactFaq ? ' aria-current="page"' : ''; ?>>
    <i class="ph-duotone ph-chats-circle me-1" aria-hidden="true"></i>Contact FAQ
  </a>

</div>
