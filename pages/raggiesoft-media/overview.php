<?php
// pages/raggiesoft-media/overview.php
// The B2B Corporate Hub for RaggieSoft IP and Master Licensing
// Updated: Frutiger Aero / Dark Aero Image Backgrounds

$pageTitle = "RaggieSoft Media | IP & Asset Management";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "RaggieSoft Media",
      "parentOrganization": {
        "@type": "Organization",
        "name": "RaggieSoft"
      },
      "description": "An independent multimedia asset management and distribution house based in Norfolk, Virginia. Specializing in automated audio engineering, custom web architecture, and open-source narrative lore.",
      "location": {
        "@type": "Place",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Norfolk",
          "addressRegion": "VA"
        }
      }
    },
    {
      "@type": "CollectionPage",
      "name": "Intellectual Property Portfolio",
      "description": "Directory of RaggieSoft Media divisions including Engine Room Records, Elara CMS & Infrastructure, and Ocean View Archives."
    }
  ]
}
</script>

<div class="aero-hero py-5">
    <div class="container py-4 aero-content text-center">
        <i class="fa-duotone fa-globe-pointer fa-4x text-primary mb-4" aria-hidden="true" style="filter: drop-shadow(0 0 15px rgba(0,130,230,0.4));"></i>
        <h1 class="display-4 fw-bold text-uppercase mb-3 brand-font text-glow-primary">RaggieSoft Media</h1>
        <p class="lead text-secondary mx-auto mb-5" style="max-width: 800px;">
            An independent multimedia asset management and distribution house. We specialize in automated audio engineering, custom web architecture, and comprehensive licensing administration.
        </p>
        
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
            <a href="/raggiesoft-media/licensing/commercial" class="btn btn-primary rounded-pill fw-bold text-uppercase px-4 me-md-3 mb-3 mb-md-0 shadow-sm">
                Commercial Sync Portal <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
            </a>
            <a href="/raggiesoft-media/projects" class="btn btn-glass rounded-pill fw-bold text-uppercase px-4 me-md-3 mb-3 mb-md-0 shadow-sm">
                Open Source Projects <i class="fa-solid fa-code ms-2" aria-hidden="true"></i>
            </a>
            <a href="/about/michael-ragsdale" class="btn btn-glass rounded-pill fw-bold text-uppercase px-4 shadow-sm border-opacity-50">
                Architect Portfolio <i class="fa-solid fa-user-tie ms-2" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>

<div class="container py-5">

    <div class="row mb-5">
        <div class="col-12">
            <h2 class="h4 text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-4 text-secondary">IP Portfolio & Divisions</h2>
        </div>
        
        <div class="col-lg-4 mb-4 mb-lg-0">
            <a href="/engine-room" class="card bg-hud-base border-0 h-100 shadow-sm hover-lift text-decoration-none">
                <div class="aero-card-img-container">
                    <img src="https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg" alt="Engine Room Records Studio Equipment">
                    <div class="aero-card-img-overlay"></div>
                    <i class="fa-solid fa-record-vinyl position-absolute bottom-0 start-0 m-3 text-white fs-4" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.8));"></i>
                </div>
                <div class="card-body p-4">
                    <h3 class="h5 fw-bold text-body-emphasis mb-2">Engine Room Records</h3>
                    <p class="small text-secondary mb-0">
                        The independent label managing the distribution, royalties, and narrative lore of our generative AI music portfolio. Features an active catalog and automated DSP integration.
                    </p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <a href="/raggiesoft-media/projects/stardust-engine-cms" class="card bg-hud-base border-0 h-100 shadow-sm hover-lift text-decoration-none">
                <div class="aero-card-img-container">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/projects/code-architecture-frutiger-aero.jpg" 
                        alt="Elara CMS Code Architecture" 
                        class="theme-img-light">
                        
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/projects/code-architecture-dark-aero.jpg" 
                        alt="Elara CMS Code Architecture" 
                        class="theme-img-dark">
                        
                    <div class="aero-card-img-overlay"></div>
                    <i class="fa-solid fa-microchip position-absolute bottom-0 start-0 m-3 text-white fs-4" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.8));"></i>
                </div>
                <div class="card-body p-4">
                    <h3 class="h5 fw-bold text-body-emphasis mb-2">Stardust Engine CMS</h3>
                    <p class="small text-secondary mb-0">
                        The open-source (MIT) infrastructure division. We design lightweight, high-performance PHP frameworks and Vanilla JS SPA routers (like Elara) to replace bloated legacy systems.
                    </p>
                </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="/raggiesoft-books" class="card bg-hud-base border-0 h-100 shadow-sm hover-lift text-decoration-none">
                <div class="aero-card-img-container">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/projects/ocean-vault-light.jpg" 
                        alt="Ocean View Archives Light Mode" 
                        class="theme-img-light">
                        
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/projects/ocean-vault-dark.jpg" 
                        alt="Ocean View Archives Dark Mode" 
                        class="theme-img-dark">
                        
                    <div class="aero-card-img-overlay"></div>
                    
                    <i class="fa-solid fa-vault position-absolute bottom-0 start-0 m-3 text-white fs-4" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.8));"></i>
                </div>
                <div class="card-body p-4">
                    <h3 class="h5 fw-bold text-body-emphasis mb-2">Ocean View Archives</h3>
                    <p class="small text-secondary mb-0">
                        The narrative rights management division. Responsible for the CC BY-SA 4.0 licensing of all creative fiction, universe bibles, and story assets within the RaggieSoft ecosystem.
                    </p>
                </div>
            </a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card bg-hud-blue border-0 shadow-sm hover-lift">
                <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="d-flex align-items-center mb-4 mb-md-0">
                        <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logos/logo-michael.png" alt="Michael Ragsdale" class="rounded-circle border border-2 border-primary shadow-sm me-4" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <h3 class="h4 fw-bold text-body-emphasis mb-1">Looking to hire the Architect?</h3>
                            <p class="text-secondary mb-0">Review qualifications, logistics, and schedule a screening interview.</p>
                        </div>
                    </div>
                    <a href="/about/michael-ragsdale" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-sm text-uppercase text-nowrap">
                        View Professional Portfolio <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card bg-hud-base border-0 p-4 p-md-5 shadow-sm">
                <h2 class="h5 mb-4 text-primary fw-bold text-uppercase border-bottom border-secondary-subtle pb-3">
                    <i class="fa-solid fa-address-book me-2" aria-hidden="true"></i>Corporate Directory & Direct Access
                </h2>
                <div class="row g-4 text-body-secondary small">
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Commercial Media Licensing</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="sync" data-d="raggiesoftmedia" data-t="com">Email Sync Desk</a>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Rights & Attributions</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="licensing" data-d="raggiesoftmedia" data-t="com">Email Licensing Team</a>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Infrastructure & Engineering</p>
                        <a href="#" class="elara-secure-mail text-decoration-none fw-bold fs-6" data-u="ops" data-d="raggiesoftmedia" data-t="com">Email Operations</a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <p class="data-label mb-1">Employment Verification</p>
                        <a href="/raggiesoft-media/careers" class="text-decoration-none text-danger fw-bold fs-6" style="text-shadow: 0 0 8px rgba(230, 57, 70, 0.4);">
                            <i class="fa-solid fa-shield-exclamation me-1" aria-hidden="true"></i>Scam Warning
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>