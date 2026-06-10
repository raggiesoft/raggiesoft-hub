<?php
// includes/components/headers/portfolio/header-portfolio.php
// Dedicated navigation for the Michael P. Ragsdale mini-site.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHub = ($request_uri === '/about/michael-ragsdale');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0 fw-bold text-uppercase" style="letter-spacing: 0.5px;">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHub ? 'active' : ''; ?>" href="/about/michael-ragsdale">
        <i class="fa-duotone fa-house-user me-2"></i>Dashboard
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/about/michael-ragsdale#hiring-logistics">
        <i class="fa-duotone fa-clipboard-check me-2"></i>Hiring Logistics
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-primary" href="https://assets.raggiesoft.com/portfolio/documents/resume/mragsdale-resume.pdf" target="_blank">
        <i class="fa-solid fa-file-pdf me-2"></i>Resume (PDF)
    </a>
  </li>

  <li class="nav-item border-start ms-lg-3 ps-lg-3 mt-2 mt-lg-0">
      <a class="nav-link text-secondary hover-opacity" href="/">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2"></i><span class="small">RaggieSoft Media</span>
      </a>
  </li>

</ul>