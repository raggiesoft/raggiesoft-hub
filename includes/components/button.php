<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Base Button Wrapper (DaisyUI 5 + Phosphor Icons)
 * ============================================================================
 * File: includes/components/button.php
 * Purpose:
 *     Renders a semantic `<a>` or `<button>` styled with DaisyUI 5 (`btn`,
 *     `btn-primary`, `btn-outline`, `btn-ghost`, `btn-sm`, `btn-lg`) and
 *     Phosphor Duotone Icons (`ph-duotone`).
 * ============================================================================
 */

$href = $props['href'] ?? '#';
$text = isset($props['text']) ? htmlspecialchars($props['text']) : 'Button';
$variantRaw = $props['variant'] ?? 'secondary';
$appearance = $props['appearance'] ?? 'accent';
$icon = $props['icon'] ?? null;
$iconPosition = $props['iconPosition'] ?? 'before';
$fullWidth = $props['fullWidth'] ?? false;
$size = $props['size'] ?? 'medium';

// Map semantic variants to DaisyUI 5 button classes
$btnClasses = ['btn'];
if (in_array($variantRaw, ['pact', 'primary', 'brand', 'info'])) {
    $btnClasses[] = 'btn-primary';
} elseif (in_array($variantRaw, ['axiom', 'warning'])) {
    $btnClasses[] = 'btn-warning';
} elseif ($variantRaw === 'danger') {
    $btnClasses[] = 'btn-error';
} elseif ($variantRaw === 'success') {
    $btnClasses[] = 'btn-success';
} else {
    $btnClasses[] = 'btn-neutral';
}

if ($appearance === 'plain') {
    $btnClasses[] = 'btn-ghost';
} elseif ($appearance === 'outlined' || $appearance === 'filled-outlined') {
    $btnClasses[] = 'btn-outline';
}

if ($size === 'small') {
    $btnClasses[] = 'btn-sm';
} elseif ($size === 'large') {
    $btnClasses[] = 'btn-lg';
}

if ($fullWidth) {
    $btnClasses[] = 'w-100';
}

$classAttr = implode(' ', $btnClasses);
?>
<a href="<?php echo htmlspecialchars($href); ?>" class="<?php echo htmlspecialchars($classAttr); ?>">
    <?php if ($iconPosition === 'before' && $icon): ?>
        <i class="<?php echo htmlspecialchars($icon); ?> me-1" aria-hidden="true"></i>
    <?php endif; ?>
    <span><?php echo $text; ?></span>
    <?php if ($iconPosition === 'after' && $icon): ?>
        <i class="<?php echo htmlspecialchars($icon); ?> ms-1" aria-hidden="true"></i>
    <?php endif; ?>
</a>
