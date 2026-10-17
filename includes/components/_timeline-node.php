<?php
/**
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/includes/components/_timeline-node.php
 * Path: /includes/components/_timeline-node.php
 * 
 * CORE RESPONSIBILITY:
 * Reusable UI Component: Timeline Node.
 * Dynamically builds vertically-aligned timeline cards for chronological narrative sections.
 * Implements strict accessibility logic to ensure WCAG AA contrast compliance.
 * 
 * LORE CONTEXT:
 * - Used heavily in history/lore sections (e.g., Engine Room Records history).
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Uses Bootstrap 5 cards and grid layout to structure the node.
 * - Relies on pseudo-elements (implied by `.timeline-node`) or custom parent CSS for the
 *   vertical connecting line, while managing its own `.node-marker` dot.
 * - Supports alternating layouts via the `$props['reverse']` flexbox flag.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Expects a `$props` array containing: `color`, `reverse`, `year`, `title`, `subtitle`,
 *   `content`, `image` (or `icon`), `btnUrl`, `btnText`, `btnIcon`.
 * 
 * MAINTENANCE NOTES:
 * - Contrast Logic: Buttons dynamically switch between `btn-outline-*` and solid `btn-*` 
 *   classes. Specifically, 'warning' and 'info' colors fail WCAG on light backgrounds
 *   when used as outlines, so they are forced to solid buttons. Do not remove this check.
 * - This component relies heavily on Web Awesome Pro contextual classes adapting to 
 *   the `$cardBgClass` (`bg-body-tertiary`).
 */
// includes/components/_timeline-node.php
// Dynamically builds timeline cards while ensuring strict WCAG AA contrast compliance.

$color = $props['color'] ?? 'secondary';
$reverseClass = !empty($props['reverse']) ? 'flex-lg-row-reverse' : '';

// 1. Define Card Background
// We rely on native Web Awesome Pro contextual classes to handle light/dark mode rather than brute-forcing colors.
$cardBgClass = 'bg-body-tertiary';
$contentClass = 'text-body-secondary';

// 2. Map Bootstrap color to Web Awesome 3.13.0 variant
$waVariant = 'neutral';
if (in_array($color, ['primary', 'info', 'brand'])) $waVariant = 'brand';
elseif ($color === 'success') $waVariant = 'success';
elseif ($color === 'warning') $waVariant = 'warning';
elseif ($color === 'danger') $waVariant = 'danger';

// On tertiary (adapting) backgrounds, 'warning' and 'info' outlines fail WCAG on light mode.
$waAppearance = ($color === 'warning' || $color === 'info') ? 'accent' : 'outlined';
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
    <wa-card class="border-secondary <?php echo $cardBgClass; ?> shadow-sm w-100">
        <div class="p-3 p-md-4">
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
                    <wa-button href="<?php echo htmlspecialchars($props['btnUrl']); ?>" variant="<?php echo $waVariant; ?>" appearance="<?php echo $waAppearance; ?>" size="small" class="text-uppercase fw-bold font-monospace mt-4">
                        <i slot="start" class="<?php echo htmlspecialchars($props['btnIcon']); ?>" aria-hidden="true"></i><?php echo htmlspecialchars($props['btnText']); ?>
                    </wa-button>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </wa-card>
</div>
