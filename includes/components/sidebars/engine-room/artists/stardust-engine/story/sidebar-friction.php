<?php
// includes/components/sidebars/engine-room/artists/stardust-engine/story/sidebar-friction.php
// Sidebar for the Friction Lore Arc

$currentUri = $_SERVER['REQUEST_URI'] ?? '';
?>

<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1 text-danger">
    <i class="fa-duotone fa-triangle-exclamation me-2"></i>Case File: 1992
</h5>

<ul class="nav flex-column mb-3">
    <li class="nav-item">
        <a class="nav-link <?php echo ($currentUri === '/engine-room/artists/stardust-engine/story/friction') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction">
            <i class="fa-duotone fa-book-open me-2"></i>Overview
        </a>
    </li>
    <li class="nav-item mt-1">
        <a class="nav-link <?php echo str_contains($currentUri, 'the-lost-title-track') ? 'active fw-bold text-danger' : 'link-secondary'; ?>" 
           href="/engine-room/artists/stardust-engine/story/friction/the-lost-title-track">
            <i class="fa-duotone fa-file-audio me-2"></i>The Lost Title Track
        </a>
    </li>
</ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
    <span>Related Context</span>
</h6>

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link link-secondary" href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts">
            <i class="fa-duotone fa-compact-disc me-2 opacity-50"></i>1989: Neon Hearts
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link link-secondary" href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes">
            <i class="fa-duotone fa-compact-disc me-2 opacity-50"></i>1995: Warehouse Tapes
        </a>
    </li>
</ul>

<div class="mt-4 p-3 bg-body-tertiary border border-danger rounded border-opacity-25">
    <h6 class="text-danger text-uppercase small fw-bold mb-2"><i class="fa-solid fa-gavel me-2"></i>Legal Outcome</h6>
    <p class="text-secondary small mb-0">
        Contract voided with prejudice. Apex Records surrendered all master tapes to avoiding prosecution for Solicitation of a Felony.
    </p>
</div>

<div class="mt-auto pt-4 border-top">
    <a href="/engine-room/artists/stardust-engine/band/history" class="nav-link link-secondary">
        <i class="fa-duotone fa-arrow-left me-2"></i>Back to Full History
    </a>
</div>