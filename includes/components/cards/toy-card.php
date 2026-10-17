<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Toy / Anomaly Card Component
 * ============================================================================
 * ROLE: A dynamic UI card used within the "Family" and "Ad Astra" lore scopes
 *       to display "Toys" (anomalous kinetic or energy objects).
 * 
 * CORE FEATURES:
 * - Theme Reactive: The aesthetic changes dramatically between Light and Dark
 *   mode (Light = 'Schematic' view, Dark = 'Evidence/Anomaly' view) via CSS
 *   overrides and data-bs-theme attribute targeting.
 * - Dynamic Props: Injects variables (`$name`, `$type`, `$effect`, `$axiom_designation`)
 *   into a standardized grid.
 * 
 * MAINTENANCE: The CSS block handles theme-specific gradient backgrounds and
 *   conditional rendering of text nodes using `.d-light-none` and `.d-dark-none`.
 *   Do not remove these display utilities, as they allow the card to shift
 *   narrative context without reloading the page.
 * ============================================================================
 */
// Props: $name, $type, $effect, $axiom_designation
$toyName = $name ?? "Unknown Toy";
$toyType = $type ?? "Kinetic";
$toyEffect = $effect ?? "Makes a small boom.";
$axiomCode = $axiom_designation ?? "ANOMALY-UNKNOWN";
?>

<!-- [LAYOUT] Main Card Wrapper: Maintains consistent height in grid systems -->
<wa-card class="h-100 toy-card">
    <!-- [UI COMPONENT] Theme-Reactive Header: Toggles narrative context based on Light/Dark mode -->
    <div slot="header" class="d-flex justify-content-between align-items-center w-100">
        <span class="font-monospace fw-bold text-uppercase d-none d-md-inline" data-bs-theme-value="light">
            <i class="fa-duotone fa-pencil me-2"></i>Schematic: <?php echo $toyName; ?>
        </span>
        <span class="font-monospace fw-bold text-danger text-uppercase d-none d-md-inline" data-bs-theme-value="dark">
            <i class="fa-solid fa-triangle-exclamation me-2"></i>Evidence: <?php echo $axiomCode; ?>
        </span>
    </div>
    
    <div class="position-relative overflow-hidden">
        <div class="text-center py-4 text-body-secondary opacity-50">
            <i class="fa-duotone fa-microchip fa-4x"></i>
        </div>

        <h4 class="h5 fw-bold mt-3 font-monospace"><?php echo $toyName; ?></h4>
        
        <div class="mb-3 d-flex flex-wrap gap-2">
            <wa-badge variant="brand" appearance="outlined" pill><?php echo $toyType; ?></wa-badge>
            <wa-badge variant="neutral" appearance="outlined" pill>Kael-Made</wa-badge>
        </div>

        <p class="small font-monospace mb-0">
            <?php echo $toyEffect; ?>
        </p>
    </div>

    <div slot="footer" class="small text-body-secondary font-monospace">
        <span class="d-dark-none">
            <i class="fa-duotone fa-leaf me-1"></i> Origin: Scavenged / Organic
        </span>
        <span class="d-light-none text-danger">
            <i class="fa-solid fa-crosshairs me-1"></i> Origin: MILITARY GRADE (Assumed)
        </span>
    </div>
</wa-card>

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