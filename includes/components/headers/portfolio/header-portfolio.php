<?php
// includes/components/headers/portfolio/header-portfolio.php
// Dedicated navigation for the Michael P. Ragsdale mini-site.

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Architect Portfolio Header
 * Purpose: Dedicated navigation for the Michael P. Ragsdale personal mini-site / resume.
 * 
 * Strategy & Implementation:
 * - Extremely lightweight structure utilizing flexbox for horizontal alignment.
 * - Relies on the `$cdnBaseUrl` global variable (expected to be defined upstream) to serve static assets like PDFs.
 * - Features direct anchor links (e.g., `#hiring-logistics`) to facilitate quick jumps within the single-page application structure.
 * 
 * Maintenance Recommendations:
 * - Always ensure `$cdnBaseUrl` is safely initialized prior to including this component to prevent undefined variable warnings.
 * - If the portfolio grows into a multi-page site, expand the URL parsing logic to handle active states dynamically.
 */

// Track current URI to apply active states on the portfolio dashboard
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
// Evaluate strict match for the portfolio root
$isHub = ($request_uri === '/about/michael-ragsdale');
?>

<div class="d-flex flex-wrap align-items-center gap-2 ms-auto" style="letter-spacing: 0.5px;">
  
  
    <wa-button appearance="plain" href="/about/michael-ragsdale" class="<?php echo $isHub ? 'active' : ''; ?>">
        <i slot="start" class="fa-duotone fa-house-user me-2"></i>Dashboard
    </wa-button>
  

  
    <wa-button appearance="plain" href="/about/michael-ragsdale#hiring-logistics">
        <i slot="start" class="fa-duotone fa-clipboard-check me-2"></i>Hiring Logistics
    </wa-button>
  

  
    <!-- Direct PDF Download: Relies on external CDN base URL parameter to resolve correctly -->
    <wa-button appearance="plain" href="<?php echo $cdnBaseUrl; ?>/portfolio/documents/resume/mragsdale-resume.pdf" class="text-primary">
        <i slot="start" class="fa-solid fa-file-pdf me-2"></i>Resume (PDF)
    </wa-button>
  

  
      <wa-button appearance="plain" href="/raggiesoft-media" class=" hover-opacity">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket me-2"></i><span class="small">RaggieSoft Media</span>
      </wa-button>
  

</div>