<?php
// includes/components/alerts/smartscreen-bypass.php
// A reusable card explaining the "Microsoft Tax" and how to bypass SmartScreen.
// Usage: Set $props['appName'] (optional) before including.

$appName = $props['appName'] ?? 'this software';
$hashLink = $props['hashLink'] ?? null; 
?>

<div class="card border-warning shadow-sm mb-4">
    <div class="card-header bg-warning bg-opacity-10 text-warning-emphasis fw-bold text-uppercase d-flex align-items-center">
        <i class="fa-duotone fa-shield-xmark me-2 fs-4"></i>
        Windows SmartScreen Notice
    </div>
    <div class="card-body p-4">
        
        <h5 class="fw-bold text-body-emphasis mb-3">Why is Windows blocking this?</h5>
        <p class="text-body-secondary small">
            Microsoft's SmartScreen filter automatically flags executables that lack an Extended Validation (EV) Authenticode Certificate. Obtaining this certificate requires paying hundreds of dollars in recurring annual fees and passing a corporate business identity verification.
        </p>
        
        <div class="alert alert-dark bg-body-tertiary border-start border-4 border-warning shadow-sm my-3 p-3">
            <p class="small text-body-emphasis mb-0">
                <strong>Transparency Note:</strong> As an independent, open-source developer releasing free software under the MIT License, I am not a registered corporation. I do not monetize this project, and I refuse to pay the "Microsoft Tax" just to make a blue warning box disappear.
            </p>
        </div>

        <h5 class="fw-bold text-body-emphasis mt-4 mb-3">How to safely run <?php echo htmlspecialchars($appName); ?>:</h5>
        <ol class="text-body-secondary small mb-0 font-monospace" style="line-height: 1.8;">
            <li>When the blue <strong>"Windows protected your PC"</strong> window appears, ignore the main warning.</li>
            <li>Click the <strong class="text-info text-decoration-underline">More info</strong> link located directly below the text.</li>
            <li>A new button will appear at the bottom of the window. Click <strong class="text-success border border-success px-2 py-1 rounded mx-1">Run anyway</strong>.</li>
        </ol>

    </div>
    
    <?php if ($hashLink): ?>
    <div class="card-footer bg-body-tertiary border-top border-warning border-opacity-25 p-3 text-center small font-monospace">
        <i class="fa-solid fa-lock me-2 text-success"></i>Trust Math, Not Corporations: 
        <a href="<?php echo htmlspecialchars($hashLink); ?>" class="text-decoration-none text-primary fw-bold hover-underline">Verify the SHA-256 Checksums</a>
    </div>
    <?php endif; ?>
</div>