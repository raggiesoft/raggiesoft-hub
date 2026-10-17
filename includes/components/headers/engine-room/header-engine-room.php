<?php
/**
 * ============================================================================
 * Engine Room Records - Main Navigation Header (Web Awesome v3.13.0)
 * ============================================================================
 * File: includes/components/headers/engine-room/header-engine-room.php
 *
 * ARCHITECTURAL OVERVIEW:
 * Primary navigation component for the "Engine Room Records" imprint.
 * Connects active roster artists, historical archives, corporate trust entities,
 * and B2B licensing/DSP verification portals.
 *
 * LOGIC & CONSTRAINTS:
 * - Evaluates `$_SERVER['REQUEST_URI']` to highlight active dropdown triggers.
 * - Uses strict Web Awesome v3.13.0 `<wa-dropdown>`, `<wa-dropdown-item>`,
 *   and `<wa-divider>` directly without legacy `<wa-menu>` wrappers.
 * - Preserves `.elara-secure-mail` obfuscation data attributes (`data-u`,
 *   `data-d`, `data-t`) for `elara-spa.js`.
 * ============================================================================
 */

// 1. Determine Active States
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';

$isRoster = str_starts_with($uri, '/engine-room/artists');
$isRadio  = str_contains($uri, '/radio');
$isArchives = (
    str_starts_with($uri, '/engine-room/history') ||
    str_starts_with($uri, '/engine-room/about') ||
    str_contains($uri, '/corporate') ||
    str_contains($uri, '/story')
);
?>

<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

  <wa-button appearance="plain" href="https://music.raggiesoft.com" class="text-warning fw-bold">
    <i slot="start" class="fa-duotone fa-turntable"></i> The Listening Room
  </wa-button>

  <!-- Active Roster Dropdown -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isRoster ? 'text-primary fw-bold' : ''; ?>">
      <i slot="start" class="fa-duotone fa-compact-disc"></i> The Roster
    </wa-button>
    <wa-dropdown-item value="/engine-room/artists">
      <i slot="icon" class="fa-duotone fa-users-viewfinder text-primary"></i> View Full Roster (Lore Hub)
    </wa-dropdown-item>
    <wa-dropdown-item value="https://music.raggiesoft.com/discography">
      <i slot="icon" class="fa-duotone fa-record-vinyl text-warning"></i> Master Discography (Listening Room)
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase text-primary fw-bold">Active Roster</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine">
      <i slot="icon" class="fa-solid fa-rocket-launch text-primary"></i> The Stardust Engine
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/fractured-prisms">
      <i slot="icon" class="fa-solid fa-gem text-info"></i> Fractured Prisms
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/the-paper-wall">
      <i slot="icon" class="fa-solid fa-book-open text-warning"></i> The Paper Wall
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/crimson-node">
      <i slot="icon" class="fa-solid fa-waveform-lines text-danger"></i> Crimson Node
    </wa-dropdown-item>
    <wa-dropdown-item value="/raggiesoft-books/aethel-saga">
      <i slot="icon" class="fa-solid fa-palette text-success"></i> Mana Canvas
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/the-arctic-symphony-project">
      <i slot="icon" class="fa-solid fa-snowflake text-info"></i> The Arctic Symphony Project
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- Archives & Corporate Lore Dropdown -->
  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isArchives ? 'text-primary fw-bold' : ''; ?>">
      <i slot="start" class="fa-duotone fa-box-archive"></i> The Archives
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Company History</div>
    <wa-dropdown-item value="/engine-room/history">
      <i slot="icon" class="fa-solid fa-clock-rotate-left"></i> Full Timeline
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/about">
      <i slot="icon" class="fa-solid fa-industry"></i> About The Fortress
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/structure">
      <i slot="icon" class="fa-solid fa-sitemap text-info"></i> Corporate Structure (2015 Trust Map)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/stardust-blacksburg">
      <i slot="icon" class="fa-solid fa-building-user text-primary"></i> Stardust Blacksburg (Ironwood)
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/corporate/strategic-assets/the-iron-horse">
      <i slot="icon" class="fa-solid fa-bus text-warning"></i> The Iron Horse &amp; Fleet Archive
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Declassified Case Files</div>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/friction">
      <i slot="icon" class="fa-duotone fa-fire text-danger"></i> 1992: The Friction Scandal
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound">
      <i slot="icon" class="fa-duotone fa-satellite text-info"></i> 2011: Cosmic Tidal Lock Sound&trade;
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/2015-delaware-migration">
      <i slot="icon" class="fa-duotone fa-file-signature text-primary"></i> 2015: The Delaware Migration
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/nine-figure-refusal">
      <i slot="icon" class="fa-duotone fa-ban text-success"></i> 2018: The $150M Refusal
    </wa-dropdown-item>
  </wa-dropdown>

  <!-- Industry & B2B Dropdown -->
  <wa-dropdown placement="bottom-end">
    <wa-button slot="trigger" appearance="plain" with-caret class="text-body-secondary">
      <i slot="start" class="fa-duotone fa-briefcase"></i> Industry
    </wa-button>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">B2B Operations</div>
    <wa-dropdown-item value="/raggiesoft-media/licensing">
      <i slot="icon" class="fa-solid fa-handshake text-primary"></i> Master Licensing Portal
    </wa-dropdown-item>
    <wa-dropdown-item value="/engine-room/dsp-verification">
      <i slot="icon" class="fa-solid fa-shield-check text-success"></i> DSP Verification Desk
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase fw-bold text-body-secondary">Media Contacts</div>
    <wa-dropdown-item class="elara-secure-mail font-monospace" value="#" data-u="sync" data-d="raggiesoftmedia" data-t="com">
      <i slot="icon" class="fa-solid fa-file-audio text-warning"></i> sync@raggiesoftmedia.com
    </wa-dropdown-item>
    <wa-dropdown-item class="elara-secure-mail font-monospace" value="#" data-u="ops" data-d="raggiesoftmedia" data-t="com">
      <i slot="icon" class="fa-solid fa-envelope"></i> ops@raggiesoftmedia.com
    </wa-dropdown-item>
  </wa-dropdown>

  <div class="ms-2 ps-2 border-start border-secondary">
    <wa-button appearance="plain" variant="neutral" href="/" class="text-body-secondary">
      <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> Exit to RaggieSoft
    </wa-button>
  </div>

</div>
