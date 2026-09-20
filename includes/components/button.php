<?php
// --- Component: button.php ---
// Updated: Web Awesome Components

$href = $props['href'] ?? '#';
$text = isset($props['text']) ? htmlspecialchars($props['text']) : 'Button';
$variantRaw = $props['variant'] ?? 'secondary';
$icon = $props['icon'] ?? null;
$iconPosition = $props['iconPosition'] ?? 'after';
$fullWidth = $props['fullWidth'] ?? false;
$size = $props['size'] ?? 'medium';

// Map variants to Web Awesome variants
$waVariant = 'neutral';
if (in_array($variantRaw, ['pact', 'primary', 'brand'])) $waVariant = 'brand';
if (in_array($variantRaw, ['axiom', 'warning'])) $waVariant = 'warning';
if ($variantRaw === 'danger') $waVariant = 'danger';
if ($variantRaw === 'success') $waVariant = 'success';

$iconHtml = '';
if ($icon) {
    $slot = ($iconPosition === 'before') ? 'prefix' : 'suffix';
    $iconHtml = "<i slot=\"{$slot}\" class=\"" . htmlspecialchars($icon) . "\"></i>";
}

$widthClass = $fullWidth ? 'w-100' : '';
?>

<wa-button href="<?php echo htmlspecialchars($href); ?>" 
           variant="<?php echo $waVariant; ?>" 
           size="<?php echo htmlspecialchars($size); ?>"
           class="<?php echo $widthClass; ?>">
    <?php if ($iconPosition === 'before' && $icon) echo $iconHtml; ?>
    <?php echo $text; ?>
    <?php if ($iconPosition === 'after' && $icon) echo $iconHtml; ?>
</wa-button>
