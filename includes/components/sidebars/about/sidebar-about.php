<?php
/**
 * ============================================================================
 * RaggieSoft Hub - About/Mission Profile Sidebar (DaisyUI 5 + Phosphor)
 * ============================================================================
 * File: includes/components/sidebars/about/sidebar-about.php
 * The central directory for RaggieSoft "Mission Profile" pages.
 *
 * ARCHITECTURAL OVERVIEW:
 * This sidebar serves as the navigation hub for the "About" (Mission Profile) section.
 * It provides links to top-level organizational entities, legal documentation, and status.
 *
 * LOGIC & CONSTRAINTS:
 * - Uses `$_SERVER['REQUEST_URI']` to determine the active navigation state via `str_contains()`.
 * - Uses DaisyUI 5 `.btn` / `.btn-ghost` / `.btn-primary` classes and Phosphor Duotone icons.
 * ============================================================================
 */

$currentUri = $_SERVER['REQUEST_URI'] ?? '';
?>

<div class="text-center mb-4 pt-3">
    <a href="/about" class="text-decoration-none">
        <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
             alt="RaggieSoft" 
             class="mb-3 mx-auto"
             style="width: 60px; height: 60px; object-fit: contain;">
        <h5 class="fw-bold text-uppercase mb-0 text-body letter-spacing-1">Mission Profile</h5>
        <p class="small text-body-secondary mb-0">Central Intelligence</p>
    </a>
</div>

<hr class="divider my-3">

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-body-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Network Entities</span>
</h6>

<div class="d-flex flex-column gap-1 mb-4">
    <a href="https://michaelpragsdale.com" class="btn btn-sm <?= str_contains($currentUri, '/michael-ragsdale') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-user-focus" aria-hidden="true"></i> The Architect
    </a>

    <a href="/about/family" class="btn btn-sm <?= str_contains($currentUri, '/family') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-users-three" aria-hidden="true"></i> The Family
    </a>

    <a href="/about/engine-room" class="btn btn-sm <?= str_contains($currentUri, '/engine-room') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-factory" aria-hidden="true"></i> Engine Room Records
    </a>

    <a href="/about/stardust-engine" class="btn btn-sm <?= str_contains($currentUri, '/stardust-engine') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-rocket-launch" aria-hidden="true"></i> The Stardust Engine
    </a>

    <a href="https://nebulae.raggiesoft.com" class="btn btn-sm btn-ghost text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-planet" aria-hidden="true"></i> Caelum-IV (Nebulae)
    </a>
    
    <a href="/about/aethel" class="btn btn-sm <?= str_contains($currentUri, '/aethel') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-sword" aria-hidden="true"></i> Aethel Saga
    </a>

    <a href="/in-memoriam" class="btn btn-sm <?= str_contains($currentUri, '/in-memoriam') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-shooting-star" aria-hidden="true"></i> In Memoriam (NCC-1701-D)
    </a>
</div>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mb-2 text-body-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
  <span>Governance</span>
</h6>

<div class="d-flex flex-column gap-1">
    <a href="https://corporate.raggiesoft.com/licensing" class="btn btn-sm <?= str_contains($currentUri, '/license') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-scales" aria-hidden="true"></i> Licenses (MIT/CC)
    </a>
    <a href="/about/privacy" class="btn btn-sm <?= str_contains($currentUri, '/privacy') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-shield-check" aria-hidden="true"></i> Privacy Policy
    </a>
    <a href="/about/terms" class="btn btn-sm <?= str_contains($currentUri, '/terms') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-scroll" aria-hidden="true"></i> Terms of Service
    </a>
    <a href="/about/ai-disclaimer" class="btn btn-sm <?= str_contains($currentUri, '/ai-disclaimer') ? 'btn-primary text-white fw-bold' : 'btn-ghost text-body' ?> w-100 text-start justify-content-start" style="text-align: left;">
        <i class="ph-duotone ph-robot" aria-hidden="true"></i> AI Disclaimer
    </a>
</div>

<hr class="divider my-4">

<div class="small text-center text-body-secondary">
    <p class="mb-1"><i class="ph-duotone ph-globe me-1" aria-hidden="true"></i> <strong>RaggieSoft.com</strong></p>
    <p class="mb-0">System Status: <span class="text-success">Stable</span></p>
</div>
