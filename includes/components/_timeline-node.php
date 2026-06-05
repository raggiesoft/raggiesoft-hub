<?php
// includes/components/_timeline-node.php
// Expected $props array variables:
// 'color'      => Bootstrap color (info, primary, warning, danger, success, secondary, dark)
// 'year'       => String (e.g., "1987")
// 'title'      => String (e.g., "Electric Color")
// 'subtitle'   => String (e.g., "APEX RECORDS // THE GILDED CAGE")
// 'image'      => String URL (Optional)
// 'icon'       => String FontAwesome class (Optional, used if image is not provided)
// 'content'    => String (HTML paragraphs and alerts)
// 'btnUrl'     => String URL
// 'btnText'    => String
// 'btnIcon'    => String FontAwesome class
// 'reverse'    => Boolean (true to swap image to the right side)

$color = $props['color'] ?? 'secondary';
$textColor = ($color === 'warning' || $color === 'info') ? 'text-dark' : 'text-white';
$reverseClass = !empty($props['reverse']) ? 'flex-lg-row-reverse' : '';
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
    <div class="card border-secondary <?php echo ($color === 'secondary' || $color === 'warning' || $color === 'success') ? 'bg-body-tertiary' : 'bg-dark text-white'; ?> shadow-sm">
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
                    <?php 
                    // Wrap the content in a div to handle text colors based on card background
                    $contentClass = ($color === 'secondary' || $color === 'warning' || $color === 'success') ? 'text-body-secondary' : 'text-light opacity-75';
                    ?>
                    <div class="<?php echo $contentClass; ?>">
                        <?php echo $props['content']; // Output raw HTML paragraphs ?>
                    </div>
                    
                    <a href="<?php echo htmlspecialchars($props['btnUrl']); ?>" class="btn btn-outline-<?php echo $color; ?> <?php echo ($color === 'warning' || $color === 'info') ? 'text-dark' : ''; ?> btn-sm text-uppercase fw-bold font-monospace mt-4">
                        <i class="<?php echo htmlspecialchars($props['btnIcon']); ?> me-2" aria-hidden="true"></i><?php echo htmlspecialchars($props['btnText']); ?>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>