<?php
/**
 * ============================================================================
 * Stardust Engine - "Nine-Figure Refusal" Case File Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/engine-room/artists/stardust-engine/story/header-nine-figure-refusal.php
 * Purpose: Dedicated navigation for the 2018 "Accidental Empire / Nine-Figure Refusal"
 *          case file archive.
 *
 * Strategy & Implementation:
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>`, `<wa-dropdown-item>`, and `<wa-divider>`
 *   directly in the default slot of `<wa-dropdown>` so keyboard navigation and `piper-sullivan.js`
 *   `wa-select` routing work reliably across all chapters and exhibits.
 * ============================================================================
 */

// 1. Determine Active States
$uri        = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$isOverview = ($uri === '/engine-room/artists/stardust-engine/story/nine-figure-refusal');

$ch1And2Files = [
    'the-approach', 'target-profile', 'ucc-search-report', 'the-bus-memo',
    'forensic-audit', 'the-smoking-gun', 'the-offer-letter', 'the-counter-offer'
];
$ch3And4Files = [
    'the-trigger', 'the-autopsy', 'the-extraction',
    'omni-global-chapter-11', 'chapter-7-conversion-order', 'liquidation-auction',
    'sun-ray-catalog-transfer', 'staff-retention', 'stardust-bus-ride'
];

$isCh1And2 = false;
foreach ($ch1And2Files as $file) {
    if (str_contains($uri, $file)) {
        $isCh1And2 = true;
        break;
    }
}

$isCh3And4 = false;
foreach ($ch3And4Files as $file) {
    if (str_contains($uri, $file)) {
        $isCh3And4 = true;
        break;
    }
}

$isAssets   = (str_contains($uri, '/the-jessica-miller-center') || str_contains($uri, '/the-non-profit-model') || str_contains($uri, '/frost-interview'));
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/">
    <i slot="start" class="fa-duotone fa-house me-2"></i>Home
  </wa-button>

  <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="<?php echo $isOverview ? 'active fw-bold text-primary' : ''; ?>">
    <i slot="start" class="fa-duotone fa-chart-network me-2"></i>Case Overview
  </wa-button>

  <!-- Chapters 1 & 2 Dropdown: The Setup & The Trap -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isCh1And2 ? 'active fw-bold text-primary' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-chess-knight me-2"></i>Ch 1&ndash;2: The Setup &amp; Trap
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Ch 1: The Setup</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-approach">
      <i slot="icon" class="fa-duotone fa-plane-arrival text-info"></i>1. The Approach
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile">
      <i slot="icon" class="fa-duotone fa-crosshairs text-danger"></i>2. Target Profile
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report">
      <i slot="icon" class="fa-duotone fa-file-certificate"></i>3. UCC Search Report
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo">
      <i slot="icon" class="fa-duotone fa-envelope-open-text text-warning"></i>4. The Bus Memo
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Ch 2: The Trap</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/forensic-audit">
      <i slot="icon" class="fa-duotone fa-magnifying-glass-dollar text-primary"></i>5. Holly's Homework (Audit)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-smoking-gun">
      <i slot="icon" class="fa-duotone fa-envelope text-danger"></i>6. The Smoking Gun
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-offer-letter">
      <i slot="icon" class="fa-duotone fa-file-contract"></i>7. The Offer Letter
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-counter-offer">
      <i slot="icon" class="fa-duotone fa-envelope-circle-check text-warning"></i>8. The Counter-Offer
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- Chapters 3 & 4 Dropdown: The Event & The Fallout -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isCh3And4 ? 'active fw-bold text-danger' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-chess-queen me-2"></i>Ch 3&ndash;4: Event &amp; Fallout
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Ch 3: The Event</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-trigger">
      <i slot="icon" class="fa-duotone fa-bolt text-danger"></i>9. The Trigger (Slide 14)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-autopsy">
      <i slot="icon" class="fa-duotone fa-laptop-code text-success"></i>10. The Autopsy
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-extraction">
      <i slot="icon" class="fa-duotone fa-person-to-door text-info"></i>11. The Extraction
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Ch 4: The Fallout</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/omni-global-chapter-11">
      <i slot="icon" class="fa-duotone fa-newspaper"></i>12. Market Alert: Ch. 11
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/chapter-7-conversion-order">
      <i slot="icon" class="fa-duotone fa-scale-unbalanced-flip text-danger"></i>13. Ch. 7 Conversion Order
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction">
      <i slot="icon" class="fa-duotone fa-gavel text-danger"></i>14. The Liquidation Auction
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/sun-ray-catalog-transfer">
      <i slot="icon" class="fa-duotone fa-compact-disc text-warning"></i>15. Sun-Ray Catalog Transfer
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/staff-retention">
      <i slot="icon" class="fa-duotone fa-users-gear text-success"></i>16. Operation: Lifeboat (Staff)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/stardust-bus-ride">
      <i slot="icon" class="fa-duotone fa-bus text-warning"></i>17. The Bus Ride Article
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- Legacy & Epilogue Dropdown -->
  <wa-dropdown placement="bottom-start">
    <wa-button class="<?php echo $isAssets ? 'active fw-bold text-success' : ''; ?>" slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-building me-2"></i>Legacy &amp; Epilogue
    </wa-button>
    <div class="px-3 py-2 small text-uppercase text-success fw-bold">Real Estate &amp; Philanthropy</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-jessica-miller-center">
      <i slot="icon" class="fa-duotone fa-building-columns text-success"></i>The Jessica Miller Center
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-non-profit-model">
      <i slot="icon" class="fa-duotone fa-hand-holding-box text-primary"></i>The Non-Profit Model
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase text-info fw-bold">Epilogue</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal/frost-interview">
      <i slot="icon" class="fa-duotone fa-clipboard-question text-info"></i>Frost Interview
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-button appearance="plain" href="/engine-room">
    <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2"></i><span class="small">Engine Room HQ</span>
  </wa-button>

</div>