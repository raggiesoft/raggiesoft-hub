<?php
// includes/components/headers/portfolio/header-portfolio.php
// Dedicated navigation for the Michael P. Ragsdale mini-site.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHub      = ($request_uri === '/about/michael-ragsdale');
$isResume   = (str_starts_with($request_uri, '/about/michael-ragsdale/resume'));
$isProfile  = (str_starts_with($request_uri, '/about/michael-ragsdale/profile'));
$isEducation = (str_starts_with($request_uri, '/about/michael-ragsdale/education'));
$isFamily   = (str_starts_with($request_uri, '/family')); // NEW
$isLocation = (str_starts_with($request_uri, '/about/michael-ragsdale/location'));
$isSalary   = (str_starts_with($request_uri, '/about/michael-ragsdale/salary'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHub ? 'active' : ''; ?>" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-house-user me-2"></i>Hub
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isProfile ? 'active' : ''; ?>" href="/about/michael-ragsdale/profile">
        <i class="fa-duotone fa-layer-group me-2"></i>Profile
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isResume ? 'active' : ''; ?>" href="/about/michael-ragsdale/resume">
        <i class="fa-duotone fa-file-user me-2"></i>Resume
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isEducation ? 'active' : ''; ?>" href="/about/michael-ragsdale/education">
        <i class="fa-duotone fa-graduation-cap me-2"></i>Education
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isFamily ? 'active' : ''; ?>" href="/family">
        <i class="fa-duotone fa-people-group me-2"></i>Family
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo ($isLocation || $isSalary) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-briefcase me-2"></i>Hiring Logistics
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
      <li><a class="dropdown-item" href="/about/michael-ragsdale/location"><i class="fa-duotone fa-map-location-dot me-2"></i>Location & Availability</a></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/salary"><i class="fa-duotone fa-sack-dollar me-2"></i>Salary Requirements</a></li>
      <li><a class="dropdown-item" href="/about/michael-ragsdale/contact"><i class="fa-duotone fa-envelope me-2"></i>Contact Information</a></li>
    </ul>
  </li>

  <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-secondary"></i><span class="text-secondary small">Exit to RaggieSoft</span>
      </a>
  </li>

</ul>