<?php
// includes/components/headers/portfolio/header-portfolio.php
// Dedicated navigation for the Michael P. Ragsdale mini-site.

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$isHub = ($request_uri === '/about/michael-ragsdale');
?>

<div class=\"d-flex flex-wrap align-items-center gap-2 ms-auto\" style="letter-spacing: 0.5px;">
  
  
    <wa-button appearance="plain" href="/about/michael-ragsdale" class="<?php echo $isHub ? 'active' : ''; ?>">
        <i slot=\"start\" class=\"fa-duotone fa-house-user me-2\"></i>Dashboard
    </wa-button>
  

  
    <wa-button appearance="plain" href="/about/michael-ragsdale#hiring-logistics">
        <i slot=\"start\" class=\"fa-duotone fa-clipboard-check me-2\"></i>Hiring Logistics
    </wa-button>
  

  
    <wa-button appearance="plain" href="https://assets.raggiesoft.com/portfolio/documents/resume/mragsdale-resume.pdf" class="text-primary">
        <i slot=\"start\" class=\"fa-solid fa-file-pdf me-2\"></i>Resume (PDF)
    </wa-button>
  

  
      <wa-button appearance="plain" href="/raggiesoft-media" class=" hover-opacity">
        <i slot=\"start\" class=\"fa-duotone fa-arrow-right-from-bracket me-2\"></i><span class="small">RaggieSoft Media</span>
      </wa-button>
  

</div>