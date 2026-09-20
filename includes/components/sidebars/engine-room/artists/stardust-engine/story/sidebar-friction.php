<?php
// includes/components/sidebars/engine-room/artists/stardust-engine/story/sidebar-friction.php
// Sidebar for the Friction Lore Arc

$currentUri = $_SERVER['REQUEST_URI'] ?? '';
?>

<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1 text-danger">
    <i slot="start" class="fa-duotone fa-triangle-exclamation"></i> Case File: 1992
</h5>

<div class="d-flex flex-column gap-1">
    
        <a class="nav-link <?php echo ($currentUri === '/engine-room/artists/stardust-engine/story/friction') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction">
            <i slot="start" class="fa-duotone fa-book-open me-2"></i> Overview
        </a>
    
    
        <a class="nav-link <?php echo str_contains($currentUri, 'the-lost-title-track') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track">
            <i slot="start" class="fa-duotone fa-file-audio"></i> The Lost Title Track
        </a>
    

        <a class="nav-link <?php echo str_contains($currentUri, 'atmosphere') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction/atmosphere">
            <i slot="start" class="fa-duotone fa-cloud-showers-heavy me-2"></i> The Atmosphere Demo
        </a>
    
        <a class="nav-link <?php echo str_contains($currentUri, 'kevin-deposition') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction/kevin-deposition">
            <i slot="start" class="fa-duotone fa-scale-balanced me-2"></i> The Mitchell Deposition
        </a>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2  text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
    <span>Related Context</span>
</h6>

<div class="d-flex flex-column gap-1">
    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-compact-disc"></i> 1989: Neon Hearts
        </wa-button>
    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-car-burst"></i> The Crash of 1990
        </wa-button>
    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-compact-disc"></i> 1995: Warehouse Tapes
        </wa-button>
    
</div>

<div class="mt-4 p-3 bg-body-tertiary border border-danger rounded border-">
    <h6 class="text-danger text-uppercase small fw-bold mb-2"><i slot="start" class="fa-solid fa-gavel"></i> Legal Outcome</h6>
    <p class=" small mb-0">
        Contract voided with prejudice. Apex Records surrendered all master tapes to avoiding prosecution for Solicitation of a Felony.
    </p>
</div>

<div class="mt-auto pt-4 border-top">
    <a href="/engine-room/artists/stardust-engine/band/history" class="nav-link link-secondary">
        <i slot="start" class="fa-duotone fa-arrow-left me-2"></i> Back to Full History
    </a>
</div>