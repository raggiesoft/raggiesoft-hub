<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/button.php
 * Role: Reusable Server-Side Button Component (DaisyUI 5 + Phosphor Icons)
 * Domain: https://raggiesoft.com (Included by `errors/404.php` & `components/card.php`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Acts like a server-side UI component: a parent template sets a `$props`
 * associative array (`href`, `text`, `variant`, `appearance`, `icon`,
 * `iconPosition`, `fullWidth`, `size`) and calls `include .../button.php`.
 * This script translates those semantic prop names into DaisyUI 5 CSS utility
 * classes (`btn`, `btn-primary`, `btn-warning`, `btn-error`, `btn-outline`,
 * `btn-ghost`, `btn-sm`, `btn-lg`, `w-100`) and echoes a single accessible
 * `<a>` link with optional decorative Phosphor icons (`aria-hidden="true"`).
 *
 * INPUTS:
 * - `$props` (array): Component properties passed via shared PHP `include` scope.
 *
 * OUTPUT PRODUCED:
 * - XSS-escaped `<a href="..." class="btn ...">` HTML element.
 * ============================================================================
 *
 * RaggieSoft Hub - Base Button Wrapper (DaisyUI 5 + Phosphor Icons)
 * ============================================================================
 * File: includes/components/button.php
 * Purpose:
 *     Renders a semantic `<a>` or `<button>` styled with DaisyUI 5 (`btn`,
 *     `btn-primary`, `btn-outline`, `btn-ghost`, `btn-sm`, `btn-lg`) and
 *     Phosphor Duotone Icons (`ph-duotone`).
 * ============================================================================
 */

// 1. Unpack component `$props` with safe default fallbacks (`??`) and XSS escaping:
$href = $props['href'] ?? '#';
$text = isset($props['text']) ? htmlspecialchars($props['text']) : 'Button';
$variantRaw = $props['variant'] ?? 'secondary';
$appearance = $props['appearance'] ?? 'accent';
$icon = $props['icon'] ?? null;
$iconPosition = $props['iconPosition'] ?? 'before';
$fullWidth = $props['fullWidth'] ?? false;
$size = $props['size'] ?? 'medium';

// 2. Map semantic RaggieSoft design variants (`pact`, `axiom`, `brand`, `danger`, etc.)
// to DaisyUI 5 color tokens (`btn-primary`, `btn-warning`, `btn-error`, `btn-success`, `btn-neutral`):
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

// 3. Apply fill vs. outline vs. ghost button styling:
if ($appearance === 'plain') {
    $btnClasses[] = 'btn-ghost';
} elseif ($appearance === 'outlined' || $appearance === 'filled-outlined') {
    $btnClasses[] = 'btn-outline';
}

// 4. Apply button size (`btn-sm` or `btn-lg`) and full-width (`w-100`) modifiers:
if ($size === 'small') {
    $btnClasses[] = 'btn-sm';
} elseif ($size === 'large') {
    $btnClasses[] = 'btn-lg';
}

if ($fullWidth) {
    $btnClasses[] = 'w-100';
}

// Join the `$btnClasses` array into a single space-separated HTML `class` string:
$classAttr = implode(' ', $btnClasses);
?>
<?php /* Render the `<a>` element; `aria-hidden="true"` hides decorative icon glyphs from screen readers so only `$text` is spoken */ ?>
<a href="<?php echo htmlspecialchars($href); ?>" class="<?php echo htmlspecialchars($classAttr); ?>">
    <?php if ($iconPosition === 'before' && $icon): ?>
        <i class="<?php echo htmlspecialchars($icon); ?> me-1" aria-hidden="true"></i>
    <?php endif; ?>
    <span><?php echo $text; ?></span>
    <?php if ($iconPosition === 'after' && $icon): ?>
        <i class="<?php echo htmlspecialchars($icon); ?> ms-1" aria-hidden="true"></i>
    <?php endif; ?>
</a>
