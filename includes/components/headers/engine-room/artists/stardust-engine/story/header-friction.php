<?php
// includes/components/headers/engine-room/artists/stardust-engine/story/header-friction.php
// Dedicated navigation for the "Friction Catastrophe" (1992)
// Context: The "Cold War" Era.

$uri = $_SERVER['REQUEST_URI'] ?? '';
$isOverview = ($uri === '/engine-room/artists/stardust-engine/story/friction');
$isEvidence = str_contains($uri, '/the-lost-title-track');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

    <li class="nav-item">
        <a class="nav-link" href="/"><i class="fa-duotone fa-house me-2"></i>Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo $isOverview ? 'active fw-bold text-danger' : ''; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction">
            <i class="fa-duotone fa-file-contract me-2"></i>Overview
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isEvidence ? 'active fw-bold text-danger' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-folder-magnifying-glass me-2"></i>Evidence
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-danger">
            <li><h6 class="dropdown-header text-uppercase text-danger fw-bold">Restricted Assets</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track">
                    <i class="fa-duotone fa-ban me-2 text-danger"></i>The Lost Title Track
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-muted">Related Archives</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/artists/stardust-engine/discography/1992-friction">
                    <i class="fa-duotone fa-compact-disc me-2"></i>The Canceled Album
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item border-start ms-2 ps-2">
        <a class="nav-link" href="/engine-room/artists/stardust-engine/band/history">
            <i class="fa-duotone fa-arrow-turn-up me-2 text-secondary"></i><span class="text-secondary small">Return to Timeline</span>
        </a>
    </li>

</ul>