<?php
// includes/components/headers/raggiesoft-books/header-knox.php
// Adapted from Engine Room Records template.
// Context: Navigation for the specific book "Knox".
// Theme: Stark, Functional, Adaptive Colors.

$uri = $_SERVER['REQUEST_URI'] ?? '';

// Determine active states
$isChapters = str_contains($uri, '/chapters');
$isLore     = str_contains($uri, '/lore');
$isChars    = str_contains($uri, '/characters');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

  <li class="nav-item">
    <a class="nav-link <?php echo $isChapters ? 'active' : ''; ?>" href="/raggiesoft-books/knox/chapters">
        <i class="fa-duotone fa-book-open-reader me-2"></i>Read the Story
    </a>
  </li>

  <li class="nav-item">
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo ($isLore || $isChars) ? 'active' : ''; ? slot="trigger" appearance="plain">" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-planet-ringed me-2"></i>The Telsan Gap
    </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase text-muted fw-bold text-uppercase text-success fw-bold\">The Reality</div>
      <wa-dropdown-item href="/raggiesoft-books/knox/characters">
            <i class="fa-solid fa-users me-2 text-body-secondary"></i>The Twins & Pip
          </wa-dropdown-item>
      <wa-dropdown-item href="/raggiesoft-books/knox/lore/aerie-hold">
            <i class="fa-solid fa-tree me-2 text-body-secondary"></i>Aerie-Hold
          </wa-dropdown-item>

      <wa-divider></wa-divider>
      <div class="px-3 py-2 small text-uppercase text-muted fw-bold text-uppercase text-danger fw-bold\">The Threat</div>
      <wa-dropdown-item href="/raggiesoft-books/knox/lore/axiom-corp">
            <i class="fa-solid fa-building me-2 text-danger"></i>The Axiom
          </wa-dropdown-item>
      <wa-dropdown-item href="/raggiesoft-books/knox/lore/port-telsus">
            <i class="fa-solid fa-industry-windows me-2 text-danger"></i>Port Telsus
          </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>
</li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-body-secondary"></i><span class="text-body-secondary small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>