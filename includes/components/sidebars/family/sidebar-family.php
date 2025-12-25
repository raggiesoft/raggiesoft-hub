<?php
// includes/components/sidebars/family/sidebar-family.php
// Updated: Replaced FontAwesome icons with Atmospheric Headshots
?>

<div class="mb-4 text-center">
    <a href="/family" class="text-decoration-none text-body">
        <img src="https://assets.raggiesoft.com/family/images/logos/logo-family.jpg" 
             alt="The RaggieSoft Family" 
             class="rounded-circle shadow-sm border border-2 border-white mb-2"
             style="width: 100px; height: 100px; object-fit: cover;">
        <h5 class="mb-0 fw-bold">The Family</h5>
        <small class="text-muted">Personified DevOps</small>
    </a>
</div>

<hr class="my-3">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Architect</span>
</h6>
<ul class="nav flex-column mb-3">
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/michael') ? 'active fw-bold' : 'link-body-emphasis'; ?>" href="/family/michael">
      <img src="https://assets.raggiesoft.com/portfolio/images/family/atmospheric/michael.jpg" 
           class="rounded-circle me-2 border border-primary border-opacity-25" 
           width="24" height="24" style="object-fit: cover;">
      Michael
    </a>
  </li>
</ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>The Sisters</span>
</h6>
<ul class="nav flex-column">
  
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/paige') ? 'active fw-bold text-info' : 'link-body-emphasis'; ?>" href="/family/paige">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/paige.jpg" 
           class="rounded-circle me-2 border border-info border-opacity-25" 
           width="24" height="24" style="object-fit: cover;">
      Paige
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/jessica') ? 'active fw-bold text-success' : 'link-body-emphasis'; ?>" href="/family/jessica">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/jessica.jpg" 
           class="rounded-circle me-2 border border-success border-opacity-25" 
           width="24" height="24" style="object-fit: cover;">
      Jessica
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/sarah') ? 'active fw-bold text-warning' : 'link-body-emphasis'; ?>" href="/family/sarah">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/sarah.jpg" 
           class="rounded-circle me-2 border border-warning border-opacity-25" 
           width="24" height="24" style="object-fit: cover;">
      Sarah
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/jenna') ? 'active fw-bold' : 'link-body-emphasis'; ?>" 
       href="/family/jenna"
       style="<?php echo ($currentView === 'pages/family/jenna') ? 'color: var(--family-jenna);' : ''; ?>">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/jenna.jpg" 
           class="rounded-circle me-2 border border-opacity-25" 
           width="24" height="24" style="object-fit: cover; border-color: var(--family-jenna);">
      Jenna
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/harper') ? 'active fw-bold' : 'link-body-emphasis'; ?>" 
       href="/family/harper"
       style="<?php echo ($currentView === 'pages/family/harper') ? 'color: var(--family-harper);' : ''; ?>">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/harper.jpg" 
           class="rounded-circle me-2 border border-opacity-25" 
           width="24" height="24" style="object-fit: cover; border-color: var(--family-harper);">
      Harper
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link d-flex align-items-center <?php echo ($currentView === 'pages/family/amanda-elara') ? 'active fw-bold' : 'link-body-emphasis'; ?>" 
       href="/family/amanda-elara"
       style="<?php echo ($currentView === 'pages/family/amanda-elara') ? 'color: var(--family-amanda);' : ''; ?>">
      <img src="https://assets.raggiesoft.com/family/images/atmospheric/amanda-elara.jpg" 
           class="rounded-circle me-2 border border-opacity-25" 
           width="24" height="24" style="object-fit: cover; border-color: var(--family-amanda);">
      Amanda & Elara
    </a>
  </li>
</ul>

<hr class="my-4">

<div class="alert alert-info bg-info bg-opacity-10 border-info small">
    <i class="fa-duotone fa-circle-info me-2"></i>
    <strong>System Status:</strong><br>
    All systems operational. The family is home.
</div>