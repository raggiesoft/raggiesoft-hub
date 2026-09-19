<?php
// includes/components/headers/engine-room/artists/stardust-engine/story/header-friction.php
// Dedicated navigation for the "Friction Catastrophe" (1992)
// Context: The "Cold War" Era.

$uri = $_SERVER['REQUEST_URI'] ?? '';
$isOverview = ($uri === '/engine-room/artists/stardust-engine/story/friction');
$isEvidence = str_contains($uri, '/the-lost-title-track');
?>

<div class="d-flex flex-wrap align-items-center gap-2 ms-auto">

    
        <wa-button appearance="plain" href="/"><i class="fa-duotone fa-house me-2">></i> Home</wa-button>
    

    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/friction" class="<?php echo $isOverview ? 'active fw-bold text-danger' : ''; ?>">
            <i slot="start" class="fa-duotone fa-file-contract me-2"></i>Overview
        </wa-button>
    

    
  <wa-dropdown placement="bottom-start">
    <wa-button class="nav-link  <?php echo $isEvidence ? 'active fw-bold text-danger' : ''; ? slot="trigger" appearance="plain">" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-folder-magnifying-glass me-2"></i>Evidence
        </wa-button>
    <wa-menu>
      <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase text-danger fw-bold">Restricted Assets</div>
            <wa-dropdown-item href="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track">
                    <i class="fa-duotone fa-ban me-2 text-danger"></i>The Lost Title Track
                </wa-dropdown-item>
            <wa-divider></wa-divider>
            <div class="px-3 py-2 small text-uppercase  fw-bold text-uppercase ">Related Archives</div>
            <wa-dropdown-item href="/engine-room/artists/stardust-engine/discography/1992-friction">
                    <i class="fa-duotone fa-compact-disc me-2"></i>The Canceled Album
                </wa-dropdown-item>
    </wa-menu>
  </wa-dropdown>


    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/band/history">
            <i slot="start" class="fa-duotone fa-arrow-turn-up me-2 "></i><span class=" small">Return to Timeline</span>
        </wa-button>
    

</div>