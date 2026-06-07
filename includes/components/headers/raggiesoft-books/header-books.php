<?php
// includes/components/headers/raggiesoft-books/header-books.php
// Global navigation for the Ocean View Archives imprint.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/raggiesoft-books';
$isHub = ($request_uri === '/raggiesoft-books');
$isKnox = (str_starts_with($request_uri, '/raggiesoft-books/knox'));
$isAethel = (str_starts_with($request_uri, '/raggiesoft-books/aethel-saga'));
$isContemporary = (str_starts_with($request_uri, '/raggiesoft-books/contemporary'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
  
  <li class="nav-item me-2">
    <a class="nav-link <?php echo $isHub ? 'active fw-bold' : ''; ?>" href="/raggiesoft-books" style="<?php echo $isHub ? 'color: #E3B27C !important;' : ''; ?>">
        <i class="fa-duotone fa-landmark me-2" aria-hidden="true"></i>The Archive
    </a>
  </li>

  <li class="nav-item me-2">
    <a class="nav-link <?php echo $isContemporary ? 'active fw-bold text-info' : ''; ?>" href="/raggiesoft-books/contemporary">
        <i class="fa-duotone fa-books me-2" aria-hidden="true"></i>Contemporary Fiction
    </a>
  </li>

  <li class="nav-item me-2">
    <a class="nav-link <?php echo $isKnox ? 'active fw-bold text-success' : ''; ?>" href="/raggiesoft-books/knox">
        <i class="fa-duotone fa-planet-ringed me-2" aria-hidden="true"></i>Project: KNOX
    </a>
  </li>

  <li class="nav-item me-3">
    <a class="nav-link <?php echo $isAethel ? 'active fw-bold text-primary' : ''; ?>" href="/raggiesoft-books/aethel-saga">
        <i class="fa-duotone fa-sword me-2" aria-hidden="true"></i>Aethel Saga
    </a>
  </li>

  <li class="nav-item border-start border-secondary-subtle ms-3 ps-3">
      <a class="nav-link text-body-secondary hover-text-primary" href="/raggiesoft-media">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2" aria-hidden="true"></i><span class="small">RaggieSoft Media</span>
      </a>
  </li>

</ul>