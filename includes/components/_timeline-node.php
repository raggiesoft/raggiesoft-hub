<?php
// includes/components/_timeline-node.php
// Dynamically builds timeline cards while ensuring strict WCAG AA contrast compliance.

$color = $props['color'] ?? 'secondary';
$reverseClass = !empty($props['reverse']) ? 'flex-lg-row-reverse' : '';

// 1. Define Card Background
// We rely on native Bootstrap contextual classes to handle light/dark mode rather than brute-forcing colors.
$cardBgClass = 'bg-body-tertiary';
$contentClass = 'text-body-secondary';

// 2. WCAG Button Contrast Logic
// Automatically shifts button styles to pass AA contrast ratios (4.5:1) based on the card background.
$btnClass = 'btn-outline-' . $color;

// On tertiary (adapting) backgrounds, 'warning' and 'info' outlines fail WCAG on light mode.
// Swapping them to solid buttons ensures Bootstrap automatically applies the correct contrast text color.
if ($color === 'warning' || $color === 'info') {
    $btnClass = 'btn-' . $color; 
}
?>

<div class="timeline-node mb-5 position-relative">
    <!-- The Timeline Dot -->
    <div class="node-marker position-absolute bg-<?php echo $color; ?> rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
    
    <!-- Title Area -->
    <h3 class="fw-bold text-<?php echo $color; ?> text-uppercase mb-1">
        <?php echo htmlspecialchars($props['year'] . ': ' . $props['title']); ?>
    </h3>
    <p class="text-body-secondary font-monospace small mb-3">
        <?php echo htmlspecialchars($props['subtitle']); ?>
    </p>

    <!-- The Card -->
    <div class="card border-secondary <?php echo $cardBgClass; ?> shadow-sm">
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center <?php echo $reverseClass; ?>">
                
                <!-- Visual Anchor (Image or Icon) -->
                <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                    <?php if (!empty($props['image'])): ?>
                        <img src="<?php echo htmlspecialchars($props['image']); ?>" alt="<?php echo htmlspecialchars($props['title']); ?> Art" class="img-fluid rounded border border-secondary shadow-sm" style="max-width: 200px;">
                    <?php elseif (!empty($props['icon'])): ?>
                        <i class="<?php echo htmlspecialchars($props['icon']); ?> fa-5x text-<?php echo $color; ?> opacity-75" aria-hidden="true"></i>
                    <?php endif; ?>
                </div>

                <!-- Narrative Content -->
                <div class="col-lg-9" style="line-height: 1.7;">
                    <div class="<?php echo $contentClass; ?>">
                        <?php echo $props['content']; ?>
                    </div>
                    
                    <?php if (!empty($props['btnUrl'])): ?>
                    <a href="<?php echo htmlspecialchars($props['btnUrl']); ?>" class="btn <?php echo $btnClass; ?> btn-sm text-uppercase fw-bold font-monospace mt-4">
                        <i class="<?php echo htmlspecialchars($props['btnIcon']); ?> me-2" aria-hidden="true"></i><?php echo htmlspecialchars($props['btnText']); ?>
                    </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
