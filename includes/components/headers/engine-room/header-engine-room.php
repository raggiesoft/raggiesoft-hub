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

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

  <li class="nav-item">
    <a class="nav-link <?php echo $isRadio ? 'active fw-bold text-warning' : ''; ?>" href="/engine-room/artists/stardust-engine/radio">
        <i class="fa-duotone fa-signal-stream me-2"></i>Engine Room Radio
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isRoster ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-compact-disc me-2"></i>The Roster
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><a class="dropdown-item" href="/engine-room/artists">View Full Roster</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-primary fw-bold">Active Artists</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/artists/stardust-engine">
            <i class="fa-solid fa-rocket-launch me-2 text-primary"></i>The Stardust Engine
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/artists/mirage">
            <i class="fa-solid fa-waveform-lines me-2 text-danger"></i>Mirage
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/artists/the-winter-palace">
            <i class="fa-solid fa-snowflake me-2 text-info"></i>The Winter Palace
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-books/aethel-saga">
            <i class="fa-solid fa-sword me-2 text-warning"></i>Firelight
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isArchives ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-box-archive me-2"></i>The Archives
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-muted fw-bold">Company History</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/history">
            <i class="fa-solid fa-clock-rotate-left me-2 text-secondary"></i>Full Timeline
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/about">
            <i class="fa-solid fa-industry me-2 text-secondary"></i>About The Fortress
          </a>
      </li>
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-muted fw-bold">Declassified Case Files</h6></li>
      <li>
          <a class="dropdown-item" href="/engine-room/artists/stardust-engine/story/friction">
            <i class="fa-duotone fa-fire me-2 text-danger"></i>1992: The Friction Scandal
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal">
            <i class="fa-duotone fa-ban me-2 text-success"></i>2018: The $150M Refusal
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-body-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-briefcase me-2"></i>Industry
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-muted fw-bold">B2B Operations</h6></li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-media/licensing">
            <i class="fa-solid fa-handshake me-2 text-primary"></i>Master Licensing Portal
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/dsp-verification">
            <i class="fa-solid fa-shield-check me-2 text-success"></i>DSP Verification Desk
          </a>
      </li>
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-muted fw-bold">Media Contacts</h6></li>
      <li>
          <a class="dropdown-item font-monospace small" href="mailto:sync@raggiesoftmedia.com">
            <i class="fa-solid fa-file-audio me-2 text-warning"></i>sync@raggiesoftmedia.com
          </a>
      </li>
      <li>
          <a class="dropdown-item font-monospace small" href="mailto:ops@raggiesoftmedia.com">
            <i class="fa-solid fa-envelope me-2 text-secondary"></i>ops@raggiesoftmedia.com
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link text-body-secondary hover-text-primary" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2"></i><span class="small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>