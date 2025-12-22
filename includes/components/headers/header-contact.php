<?php
// includes/components/headers/header-contact.php
// Navigation for the Global Contact Hub.
// UPDATED: Matches the new RaggieSoft Hub structure (Architect vs. Creative)

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isArchitect = (str_starts_with($request_uri, '/about/michael-ragsdale'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isArchitect ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-user-visor me-2" aria-hidden="true"></i>The Architect
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/about/michael-ragsdale"><i class="fa-duotone fa-id-card me-2"></i>Overview</a></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/resume"><i class="fa-duotone fa-file-user me-2"></i>Resume / CV</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/contact"><i class="fa-duotone fa-address-card me-2"></i>Recruiter Contact</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/engine-room">
        <i class="fa-solid fa-industry me-2" aria-hidden="true"></i>Engine Room
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="/contact" aria-current="page">
        <i class="fa-duotone fa-envelope-open me-2" aria-hidden="true"></i>Contact
    </a>
  </li>

</ul>