<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Book Viewer Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/header-book.php
 * Purpose: Navigation bar for the book reader interface (e.g., Aethel Saga, KNOX,
 *          Contemporary Library). Dynamically generates Prev/Next/Up navigation
 *          links when `$bookJsonUrl` is configured.
 * ============================================================================
 */

require_once __DIR__ . '/../../utils/nav-logic.php';

$sourceUrl = $bookJsonUrl ?? '';
$navData   = getBookNavigation($sourceUrl);
extract($navData);
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="/raggiesoft-books" class="text-primary fw-bold">
    <i slot="start" class="fa-duotone fa-landmark me-2"></i>Ocean View Archives
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-sword me-2"></i>Aethel Saga
    </wa-button>
    <wa-dropdown-item value="/raggiesoft-books/aethel-saga">
      <i slot="icon" class="fa-duotone fa-book-sparkles text-warning"></i>Saga Overview
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-books/books/aethel">
      <i slot="icon" class="fa-duotone fa-book-open-cover"></i>Read The Book
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-books/aethel-saga/lore">
      <i slot="icon" class="fa-duotone fa-scroll-old"></i>Lore Hub
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-compass me-1"></i>Navigate
    </wa-button>
    <?php if (!empty($prevLink) && $prevLink !== '#'): ?>
      <wa-dropdown-item value="<?php echo htmlspecialchars($prevLink); ?>">
        <i slot="icon" class="fa-duotone fa-arrow-left"></i>Back
      </wa-dropdown-item>
    <?php endif; ?>
    <?php if (!empty($upLink) && $upLink !== '#'): ?>
      <wa-dropdown-item value="<?php echo htmlspecialchars($upLink); ?>">
        <i slot="icon" class="fa-duotone fa-arrow-up"></i>Up
      </wa-dropdown-item>
    <?php endif; ?>
    <?php if (!empty($nextLink) && $nextLink !== '#'): ?>
      <wa-dropdown-item value="<?php echo htmlspecialchars($nextLink); ?>">
        <i slot="icon" class="fa-duotone fa-arrow-right"></i>Next
      </wa-dropdown-item>
    <?php endif; ?>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/raggiesoft-books/books">
      <i slot="icon" class="fa-duotone fa-books"></i>All Books
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret>
      <i slot="start" class="fa-duotone fa-globe me-1"></i>RaggieSoft
    </wa-button>
    <wa-dropdown-item value="/">
      <i slot="icon" class="fa-duotone fa-house"></i>RaggieSoft Hub
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-books/knox">
      <i slot="icon" class="fa-duotone fa-planet-ringed text-success"></i>Project: KNOX
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <wa-dropdown-item value="/contact">
      <i slot="icon" class="fa-duotone fa-envelope"></i>Contact
    </wa-dropdown-item>
  </wa-dropdown>

</div>