<?php
// includes/components/headers/engine-room/header-engine-room.php
// The Official Imprint Navigation. 
// Fan-Centric Focus with Corporate Routing to RaggieSoft Media.

// 1. Determine Active States
$uri = $_SERVER['REQUEST_URI'] ?? '';

$isRoster = str_starts_with($uri, '/engine-room/artists');
$isRadio = str_contains($uri, '/radio');
$isArchives = (
    str_starts_with($uri, '/engine-room/history') || 
    str_contains($uri, '/corporate') ||
    str_contains($uri, '/story')
);
?>

<div class="d-flex flex-wrap align-items-center gap-2 ms-auto">

  <wa-button appearance="plain" href="/engine-room/radio" class="<?php echo $isRadio ? 'text-warning' : ''; ?>">
    <i slot="start" class="fa-duotone fa-signal-stream"></i> Engine Room Radio
  </wa-button>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isRoster ? 'text-primary' : ''; ?>">
      <i slot="start" class="fa-duotone fa-compact-disc"></i> The Roster
    </wa-button>
    <wa-dropdown-item href="/engine-room/artists">View Full Roster</wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase text-primary fw-bold">Active Artists</div>
    <wa-dropdown-item href="/engine-room/artists/stardust-engine">
      <i slot="start" class="fa-solid fa-rocket-launch text-primary"></i> The Stardust Engine
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/artists/crimson-node">
      <i slot="start" class="fa-solid fa-waveform-lines text-danger"></i> Crimson Node
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/artists/fractured-prisms">
      <i slot="start" class="fa-solid fa-gem text-secondary"></i> Fractured Prisms
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/artists/the-paper-wall">
      <i slot="start" class="fa-solid fa-waveform-lines text-danger"></i> The Paper Wall
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/artists/the-winter-palace">
      <i slot="start" class="fa-solid fa-snowflake text-info"></i> The Winter Palace
    </wa-dropdown-item>
    <wa-dropdown-item href="/raggiesoft-books/aethel-saga">
      <i slot="start" class="fa-solid fa-sword text-warning"></i> Firelight
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-start">
    <wa-button slot="trigger" appearance="plain" with-caret class="<?php echo $isArchives ? 'text-primary' : ''; ?>">
      <i slot="start" class="fa-duotone fa-box-archive"></i> The Archives
    </wa-button>
    <div class="px-3 py-2 small text-uppercase text-muted fw-bold">Company History</div>
    <wa-dropdown-item href="/engine-room/history">
      <i slot="start" class="fa-solid fa-clock-rotate-left text-secondary"></i> Full Timeline
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/about">
      <i slot="start" class="fa-solid fa-industry text-secondary"></i> About The Fortress
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase text-muted fw-bold">Declassified Case Files</div>
    <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/friction">
      <i slot="start" class="fa-duotone fa-fire text-danger"></i> 1992: The Friction Scandal
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/nine-figure-refusal">
      <i slot="start" class="fa-duotone fa-ban text-success"></i> 2018: The $150M Refusal
    </wa-dropdown-item>
  </wa-dropdown>

  <wa-dropdown placement="bottom-end">
    <wa-button slot="trigger" appearance="plain" with-caret class="text-body-secondary">
      <i slot="start" class="fa-duotone fa-briefcase"></i> Industry
    </wa-button>
    <div class="px-3 py-2 small text-uppercase text-muted fw-bold">B2B Operations</div>
    <wa-dropdown-item href="/raggiesoft-media/licensing">
      <i slot="start" class="fa-solid fa-handshake text-primary"></i> Master Licensing Portal
    </wa-dropdown-item>
    <wa-dropdown-item href="/engine-room/dsp-verification">
      <i slot="start" class="fa-solid fa-shield-check text-success"></i> DSP Verification Desk
    </wa-dropdown-item>
    <wa-divider></wa-divider>
    <div class="px-3 py-2 small text-uppercase text-muted fw-bold">Media Contacts</div>
    <wa-dropdown-item class="elara-secure-mail font-monospace" href="#" data-u="sync" data-d="raggiesoftmedia" data-t="com">
      <i slot="start" class="fa-solid fa-file-audio text-warning"></i> sync@raggiesoftmedia.com
    </wa-dropdown-item>
    <wa-dropdown-item class="elara-secure-mail font-monospace" href="#" data-u="ops" data-d="raggiesoftmedia" data-t="com">
      <i slot="start" class="fa-solid fa-envelope text-secondary"></i> ops@raggiesoftmedia.com
    </wa-dropdown-item>
  </wa-dropdown>

  <div class="ms-2 ps-2 border-start border-secondary border-opacity-50">
      <wa-button appearance="plain" variant="neutral" href="/" class="text-body-secondary">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket"></i> Exit to RaggieSoft
      </wa-button>
  </div>

</div>
