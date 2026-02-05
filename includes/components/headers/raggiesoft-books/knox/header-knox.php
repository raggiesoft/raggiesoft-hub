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

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo ($isLore || $isChars) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-planet-ringed me-2"></i>The Telsan Gap
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 shadow-sm">
      <li><h6 class="dropdown-header text-uppercase text-success fw-bold">The Reality</h6></li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-books/knox/characters">
            <i class="fa-solid fa-users me-2 text-body-secondary"></i>The Twins & Pip
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-books/knox/lore/aerie-hold">
            <i class="fa-solid fa-tree me-2 text-body-secondary"></i>Aerie-Hold
          </a>
      </li>

      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase text-danger fw-bold">The Threat</h6></li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-books/knox/lore/axiom-corp">
            <i class="fa-solid fa-building me-2 text-danger"></i>The Axiom
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/raggiesoft-books/knox/lore/port-telsus">
            <i class="fa-solid fa-industry-windows me-2 text-danger"></i>Port Telsus
          </a>
      </li>
    </ul>
  </li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-body-secondary"></i><span class="text-body-secondary small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>