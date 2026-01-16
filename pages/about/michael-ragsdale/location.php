<?php
// pages/about/michael-ragsdale/location.php
// Location Preferences & Logistics

require_once ROOT_PATH . '/includes/utils/json-reader.php';
$locations = fetch_asset_json('portfolio/json/locations.json');

// LOGIC: Find the "Home" base dynamically from the JSON
// This ensures we follow DRY. If you move, update the JSON, and this text updates.
$homeBase = "Unknown Location"; 
foreach ($locations as $loc) {
    if (isset($loc['is_home']) && $loc['is_home'] === true) {
        // Strip "In-Office: " prefix for cleaner display if present
        $homeBase = str_replace('In-Office: ', '', $loc['label']);
        break;
    }
}
?>

<div class="container py-5" style="max-width: 45rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Location & Availability</h1>
            <p class="text-secondary mb-0">Logistics for hiring.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <div class="card bg-body-tertiary mb-5 shadow-sm border-0">
        <div class="card-body p-5 text-center">
            <div class="text-primary mb-3">
                <i class="fa-duotone fa-house-chimney fa-4x"></i>
            </div>
            <h2 class="h3 fw-bold">Based in <?php echo htmlspecialchars($homeBase); ?></h2>
            <p class="mb-0 text-secondary">
                Ready for hybrid, on-site, or remote workflows.
            </p>
        </div>
    </div>

    <h3 class="h5 fw-bold mb-3">Work Preference Zones</h3>
    <div class="list-group shadow-sm mb-5">
        <?php foreach ($locations as $loc): ?>
            <?php 
                // Style logic based on value
                $icon = 'fa-building';
                $class = 'list-group-item-action';
                
                // Highlight Home Base
                if (isset($loc['is_home']) && $loc['is_home']) {
                    $icon = 'fa-house-user';
                    $class .= ' list-group-item-primary fw-bold';
                } 
                elseif (strpos($loc['value'], 'remote') !== false) {
                    $icon = 'fa-laptop-house';
                } 
                elseif (strpos($loc['value'], 'relocate') !== false) {
                    $icon = 'fa-truck-fast';
                    $class .= ' list-group-item-info'; // Highlight relocation
                }
            ?>
            <div class="list-group-item <?php echo $class; ?> py-3 d-flex align-items-center">
                <div class="me-3 text-secondary" style="width: 24px; text-align: center;">
                    <i class="fa-solid <?php echo $icon; ?> fa-lg"></i>
                </div>
                <div class="fw-medium">
                    <?php echo htmlspecialchars($loc['label']); ?>
                </div>
                <?php if (isset($loc['is_home']) && $loc['is_home']): ?>
                    <span class="badge bg-primary ms-auto">Current Residence</span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="alert alert-light border shadow-sm">
        <h4 class="h6 fw-bold mb-2"><i class="fa-solid fa-graduation-cap text-primary me-2"></i>Note on Relocation</h4>
        <p class="small text-secondary mb-0">
            I am open to relocation within the <strong>Commonwealth of Virginia</strong>. 
            This restriction ensures I can maintain In-State Tuition status while completing my Associate of Science degree at the local Community College system.
        </p>
    </div>

</div>