<?php
// pages/raggiesoft-books/overview.php
// The Main Landing Hub for Ocean View Archives

$pageTitle = "Ocean View Archives | RaggieSoft Media";

// We establish a dedicated theme for the Archives to override the global Bootstrap variables locally
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Publisher",
      "name": "Ocean View Archives",
      "parentOrganization": {
        "@type": "Organization",
        "name": "RaggieSoft Media"
      },
      "description": "The official literary and archival imprint of RaggieSoft Media, preserving extensive narrative universes and family histories."
    },
    {
      "@type": "CollectionPage",
      "name": "The Archives",
      "description": "Directory of literary works, including Project: KNOX, The Silver Gauntlet of Aethel, and The Virginia Chronicles."
    }
  ]
}
</script>

<style>
    /* --- OCEAN VIEW ARCHIVES: THEME OVERRIDES --- */
    .ova-hero {
        background-color: #0F4C5C; /* Deep Coastal Teal */
        position: relative;
        overflow: hidden;
        border-bottom: 4px solid #E3B27C; /* Metallic Bronze */
    }
    
    .ova-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-image: url('https://assets.raggiesoft.com/common/patterns/noise-subtle.png');
        opacity: 0.4;
        mix-blend-mode: overlay;
        z-index: 1;
    }

    .ova-text-bronze {
        color: #E3B27C !important;
    }

    .ova-serif {
        font-family: 'Playfair Display', Georgia, serif;
    }

    /* Elegant hover states for the Archive links */
    .ova-link-bronze {
        color: #E3B27C;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .ova-link-bronze:hover {
        color: #ffffff;
    }
</style>

<section class="ova-hero py-5 text-center shadow-lg" aria-label="Ocean View Archives Introduction">
    <div class="container position-relative z-2 py-4">
        
        <img src="https://assets.raggiesoft.com/raggiesoft-books/images/logos/oceanview-archive.svg" 
             alt="Ocean View Archives Crest" 
             class="img-fluid mb-4 drop-shadow" 
             style="max-width: 220px;">
             
        <h1 class="display-3 fw-bold ova-serif ova-text-bronze mb-3" style="letter-spacing: 2px;">
            Ocean View Archives
        </h1>
        
        <p class="lead text-white opacity-75 mx-auto mb-4" style="max-width: 700px;">
            The official literary imprint of RaggieSoft Media. A grounded, unshakeable sanctuary built to preserve and bind the history of the pack.
        </p>

    </div>
</section>

<section class="py-5 bg-body text-body" aria-labelledby="vault-directory-title">
    <div class="container-fluid px-4 px-xxl-5">
        
        <div class="text-center border-bottom border-secondary-subtle pb-3 mb-5">
            <h2 id="vault-directory-title" class="h4 fw-bold text-uppercase text-secondary letter-spacing-1">
                <i class="fa-duotone fa-books me-2"></i>Active Collections
            </h2>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">

            <div class="col" style="max-width: 500px;">
                <?php
                $props = [
                    'imgSrc' => 'https://assets.raggiesoft.com/raggiesoft-books/images/covers/base-camp.jpg', // Placeholder
                    'imgAlt' => 'The Virginia Chronicles',
                    'fallbackText' => 'Base Camp',
                    'title' => 'The Virginia Chronicles',
                    'description' => 'A deeply grounded, multi-volume history of survival and fierce loyalty. Follow Toby, Samantha, Michael, Rachel, Alex, and Chloé as they build impenetrable perimeters against an unforgiving world.',
                    'buttonProps' => [
                        'href' => '/raggiesoft-books/virginia-chronicles',
                        'text' => 'Enter Base Camp',
                        'variant' => 'dark', 
                        'icon' => 'fa-duotone fa-house-lock',
                        'fullWidth' => true
                    ]
                ];
                include ROOT_PATH . '/includes/components/card.php';
                ?>
            </div>

            <div class="col" style="max-width: 500px;">
                <?php
                $props = [
                    'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg',
                    'imgAlt' => 'Project: KNOX',
                    'fallbackText' => 'KNOX',
                    'title' => 'Project: KNOX',
                    'description' => 'A sprawling sci-fi narrative universe. On a planet crushed by intense gravity, a family hunts a phantom while evading the monolithic Axiom Archival Division.',
                    'buttonProps' => [
                        'href' => '/raggiesoft-books/knox',
                        'text' => 'Access Axiom Files',
                        'variant' => 'success', 
                        'icon' => 'fa-duotone fa-planet-ringed',
                        'fullWidth' => true
                    ]
                ];
                include ROOT_PATH . '/includes/components/card.php';
                ?>
            </div>

            <div class="col" style="max-width: 500px;">
                <?php
                $props = [
                    'imgSrc' => 'https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png', 
                    'imgAlt' => 'The Silver Gauntlet of Aethel',
                    'fallbackText' => 'Aethel',
                    'title' => 'The Silver Gauntlet of Aethel',
                    'description' => 'A love letter to 1980s fantasy adventure. Follow the journey of twins Kaelan and Kaela in a world of magic, danger, and retro nostalgia.',
                    'buttonProps' => [
                        'href' => '/raggiesoft-books/aethel-saga',
                        'text' => 'Read the Saga',
                        'variant' => 'primary',
                        'icon' => 'fa-duotone fa-sword',
                        'fullWidth' => true
                    ]
                ];
                include ROOT_PATH . '/includes/components/card.php';
                ?>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-body-tertiary border-top border-secondary-subtle">
    <div class="container" style="max-width: 50rem;">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center text-md-end">
                <i class="fa-duotone fa-typewriter fa-4x text-secondary opacity-50"></i>
            </div>
            <div class="col-md-9 text-center text-md-start">
                <h3 class="h5 fw-bold mb-2">Automated Typesetting via The Stardust Engine</h3>
                <p class="text-body mb-0">
                    Ocean View Archives utilizes a custom Git-backed pipeline. Raw manuscript files (<code>.docx</code>) are ingested, parsed into structured JSON by internal CI/CD constructs, and dynamically rendered into accessible, responsive web chapters to ensure the lore is eternally preserved.
                </p>
            </div>
        </div>
    </div>
</section>