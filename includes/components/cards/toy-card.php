<?php
// Props: $name, $type, $effect, $axiom_designation
$toyName = $name ?? "Unknown Toy";
$toyType = $type ?? "Kinetic";
$toyEffect = $effect ?? "Makes a small boom.";
$axiomCode = $axiom_designation ?? "ANOMALY-UNKNOWN";
?>

<div class="card h-100 toy-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="font-monospace fw-bold text-uppercase d-none d-md-inline" data-bs-theme-value="light">
            <i class="fa-duotone fa-pencil me-2"></i>Schematic: <?php echo $toyName; ?>
        </span>
        <span class="font-monospace fw-bold text-danger text-uppercase d-none d-md-inline" data-bs-theme-value="dark">
            <i class="fa-solid fa-triangle-exclamation me-2"></i>Evidence: <?php echo $axiomCode; ?>
        </span>
    </div>
    
    <div class="card-body position-relative overflow-hidden">
        <div class="text-center py-4 text-body-secondary opacity-50">
            <i class="fa-duotone fa-microchip fa-4x"></i>
        </div>

        <h4 class="card-title mt-3 font-monospace"><?php echo $toyName; ?></h4>
        
        <div class="mb-3">
            <span class="skill-pill border-primary text-primary"><?php echo $toyType; ?></span>
            <span class="skill-pill border-secondary text-body-secondary">Kael-Made</span>
        </div>

        <p class="card-text small font-monospace">
            <?php echo $toyEffect; ?>
        </p>
    </div>

    <div class="card-footer bg-transparent border-top border-secondary small text-muted font-monospace">
        <span class="d-dark-none">
            <i class="fa-duotone fa-leaf me-1"></i> Origin: Scavenged / Organic
        </span>
        <span class="d-light-none text-danger">
            <i class="fa-solid fa-crosshairs me-1"></i> Origin: MILITARY GRADE (Assumed)
        </span>
    </div>
</div>

<style>
/* CSS to handle the content switching based on theme */
[data-bs-theme="light"] .d-light-none { display: none !important; }
[data-bs-theme="dark"] .d-dark-none { display: none !important; }

[data-bs-theme="dark"] .toy-card {
    border-color: var(--bs-danger) !important;
    background-image: linear-gradient(45deg, rgba(220, 53, 69, 0.05) 25%, transparent 25%, transparent 50%, rgba(220, 53, 69, 0.05) 50%, rgba(220, 53, 69, 0.05) 75%, transparent 75%, transparent);
    background-size: 20px 20px;
}
</style>