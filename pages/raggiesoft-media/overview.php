<?php
// pages/raggiesoft-media/overview.php
// The B2B Corporate Hub for RaggieSoft IP and Master Licensing
// Updated: Frutiger Aero / Dark Aero UI Overhaul (WCAG 2.1 Compliant)

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

<style>
    /* --- AERO HERO SECTION --- */
    .aero-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid var(--raggie-glass-border);
        box-shadow: 0 8px 32px rgba(0, 85, 150, 0.05);
        color: var(--bs-body-color);
        z-index: 1;
    }

    /* Animated "Water Reflection / Aurora" Effect */
    .aero-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(0, 130, 230, 0.05), rgba(255,255,255,0.4));
        background-size: 200% 200%;
        animation: aero-wash 12s ease infinite;
        z-index: -1;
    }

    /* Dark Aero Aurora */
    [data-bs-theme="dark"] .aero-hero {
        box-shadow: 0 8px 32px rgba(0, 229, 255, 0.05);
    }
    [data-bs-theme="dark"] .aero-hero::before {
        background: linear-gradient(120deg, rgba(7, 11, 20, 0.9), rgba(0, 229, 255, 0.08), rgba(7, 11, 20, 0.9));
        background-size: 200% 200%;
    }

    /* WCAG: Respect Prefers Reduced Motion */
    @media (prefers-reduced-motion: reduce) {
        .aero-hero::before {
            animation: none;
            background-position: center; /* Locks the gradient to a pleasant static state */
        }
    }

    /* --- AERO TYPOGRAPHY & LABELS --- */
    .aero-badge {
        background: var(--raggie-glass-bg);
        backdrop-filter: blur(12px) saturate(120%);
        -webkit-backdrop-filter: blur(12px) saturate(120%);
        border: 1px solid var(--raggie-glass-border);
        color: var(--bs-body-color);
        box-shadow: var(--raggie-glass-shadow);
    }
    
    .data-label {
        font-size: 0.75rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--bs-secondary);
        font-family: monospace;
    }

    /* WCAG: Focus Outline for Keyboard Navigators */
    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-primary) !important;
        outline-offset: 4px;
        border-radius: 4px; /* Prevents harsh square outlines on curved aero buttons */
    }
</style>

<div class="aero-hero py-5 mb-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold text-uppercase mb-3 brand-font text-glow-primary" style="letter-spacing: 3px;">
            RaggieSoft Media
        </h1>
        <p class="lead tech-font mb-4 mx-auto" style="max-width: 800px; text-shadow: 0 1px 2px rgba(255,255,255,0.8);">
            An independent multimedia asset management and distribution house based in Norfolk, Virginia. Specializing in automated audio engineering, custom web architecture, and open-source narrative lore.
        </p>
        <span class="badge aero-badge rounded-pill text-uppercase px-4 py-2 fs-6">
            <i class="fa-solid fa-server me-2 text-primary" aria-hidden="true"></i>Corporate Operations
        </span>
    </div>
</div>

<style>
    [data-bs-theme="dark"] .aero-hero .lead {
        text-shadow: 0 1px 3px rgba(0,0,0,0.8);
    }
</style>

<div class="container pb-5">
    
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h5 text-uppercase fw-bold mb-0 text-secondary">Intellectual Property Portfolio</h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-4">
            <div class="card bg-hud-blue h-100 p-4 border-0 d-flex flex-column">
                <i class="fa-duotone fa-waveform-lines fa-2x text-primary mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Audio & Music Production</h3>
                <p class="data-label mb-3">Engine Room Records</p>
                <p class="text-body-emphasis mb-4 small">
                    Management of 100% independent master recordings and publishing rights. Flagship catalogs include The Stardust Engine and active commercial releases.
                </p>
                <div class="mt-auto pt-3" style="border-top: 1px solid var(--raggie-glass-border);">
                    <a href="/raggiesoft-media/licensing/commercial" class="text-decoration-none text-uppercase fw-bold small">
                        Commercial Sync <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-hud-base h-100 p-4 border-0 d-flex flex-column" style="border-left: 4px solid var(--bs-info);">
                <i class="fa-duotone fa-code-merge fa-2x text-info mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Software Architecture</h3>
                <p class="data-label mb-3">Elara CMS & Infrastructure</p>
                <p class="text-body-emphasis mb-4 small">
                    Development of proprietary web frameworks, native SPA routing engines, and high-availability Nginx edge-delivery setups.
                </p>
                <div class="mt-auto pt-3" style="border-top: 1px solid var(--raggie-glass-border);">
                    <a href="/raggiesoft-media/projects/elara" class="text-decoration-none text-info text-uppercase fw-bold small">
                        Elara Open-Source Hub <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-hud-warning h-100 p-4 border-0 d-flex flex-column">
                <i class="fa-duotone fa-books fa-2x text-warning mb-3" aria-hidden="true"></i>
                <h3 class="h5 fw-bold text-uppercase mb-2">Narrative & Literary</h3>
                <p class="data-label mb-3">Ocean View Archives</p>
                <p class="text-body-emphasis mb-4 small">
                    Extensive world-building, scriptwriting, and character asset management governed entirely under progressive CC BY-SA 4.0 public licensing frameworks.
                </p>
                <div class="mt-auto pt-3" style="border-top: 1px solid var(--raggie-glass-border);">
                    <a href="/raggiesoft-books" class="text-decoration-none text-warning text-uppercase fw-bold small">
                        Explore Archives <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-4 mt-5">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h5 text-uppercase fw-bold mb-0 text-secondary">Global Communications Protocol</h2>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-12">
            <div class="card bg-hud-base border-0 p-4 p-md-5">
                <div class="row g-4">
                    
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
                            <i class="fa-solid fa-shield-exclamation me-1" aria-hidden="true"></i> Fraud Notice
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>