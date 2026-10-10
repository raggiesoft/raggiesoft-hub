<?php
/**
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/includes/components/card.php
 * Path: /includes/components/card.php
 * 
 * CORE RESPONSIBILITY:
 * Reusable UI Component: Card.
 * Renders a standard, responsive image card using the Web Awesome (`<wa-card>`) custom element.
 * Provides fallback image generation and dynamic aspect ratio calculations.
 * 
 * LORE CONTEXT:
 * - Supports specific lore-based theme variants (e.g., 'pact' -> '#005A5A', 'axiom' -> '#A8491A')
 *   for fallback image generation.
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Replaces traditional Bootstrap cards with Web Awesome's `<wa-card>` component.
 * - Uses inline CSS for responsive image aspect ratios (`padding-top` trick).
 * - Implements a smart fallback system utilizing `placehold.co` when images fail to load.
 * - Includes a hardcoded visual overlay (`oceanview-archives.svg`) for specific book placeholders.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Expects a `$props` array containing: `imgSrc`, `imgAlt`, `fallbackText`, `title`, 
 *   `description`, `aspectRatio`, and `buttonProps`.
 * - Includes `button.php` component if `buttonProps` is provided.
 * - Requires Web Awesome component library to be loaded in the DOM.
 * 
 * MAINTENANCE NOTES:
 * - The inline script `onerror="this.onerror=null;this.src=..."` prevents infinite loops
 *   if the placeholder itself fails to load. Do not remove `this.onerror=null`.
 * - Ensure changes to `$props` are backward compatible with existing layout templates.
 */
// --- Component: card.php ---
// Updated: Web Awesome Components

$imgSrc = $props['imgSrc'] ?? null;
$imgAlt = $props['imgAlt'] ?? 'Card image';
$fallbackText = $props['fallbackText'] ?? 'Image';
$title = isset($props['title']) ? htmlspecialchars($props['title']) : 'Card Title';
$description = $props['description'] ?? 'Card description goes here.';
$buttonProps = $props['buttonProps'] ?? null;
$variant = $buttonProps['variant'] ?? 'secondary';
$aspectRatio = $props['aspectRatio'] ?? '1:1';
$paddingTop = '100%';
if ($aspectRatio === '2:3') $paddingTop = '150%';
else if ($aspectRatio === '1:1') $paddingTop = '100%';
else $paddingTop = $aspectRatio;

$bgColor = '6c757d'; 

if ($variant === 'pact') $bgColor = '005A5A'; 
if ($variant === 'axiom') $bgColor = 'A8491A';
$textColor = 'FFFFFF';
$placeholderUrl = "https://placehold.co/600x400/{$bgColor}/{$textColor}?text=" . urlencode($fallbackText);
?>

<wa-card style="height: 100%; display: flex; flex-direction: column;">
  <?php if ($imgSrc): ?>
    <div slot="media" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>;">
      <img src="<?php echo htmlspecialchars($imgSrc); ?>"
           alt="<?php echo htmlspecialchars($imgAlt); ?>"
           onerror="this.onerror=null;this.src='<?php echo $placeholderUrl; ?>';"
           style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
      <?php if (strpos($imgSrc, 'book-placeholder.jpg') !== false): ?>
          <img src="<?php echo (isset($cdnBaseUrl) ? $cdnBaseUrl : ''); ?>/raggiesoft-books/images/logos/oceanview-archives.svg" 
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70%; height: auto; pointer-events: none; opacity: 0.85;">
      <?php endif; ?>
    </div>
  <?php else: ?>
    <div slot="media" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>;">
      <img src="<?php echo $placeholderUrl; ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
  <?php endif; ?>

  <h3 class="h5 mt-0 mb-2 fw-bold text-body">
    <?php echo $title; ?>
  </h3>
  <div class="text-body-secondary mb-0">
    <?php echo $description; ?>
  </div>

  <?php if ($buttonProps): ?>
    <div slot="footer">
      <?php
        $props = $buttonProps;
        include __DIR__ . '/button.php';
      ?>
    </div>
  <?php endif; ?>
</wa-card>
