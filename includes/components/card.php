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
$badge = $props['badge'] ?? null;
$title = isset($props['title']) ? htmlspecialchars($props['title']) : 'Card Title';
$description = $props['description'] ?? 'Card description goes here.';
$buttonProps = $props['buttonProps'] ?? null;
$secondaryButtons = $props['secondaryButtons'] ?? [];
$variant = $buttonProps['variant'] ?? 'secondary';
$aspectRatio = $props['aspectRatio'] ?? '1:1';
$paddingTop = '100%';
if ($aspectRatio === '2:3') $paddingTop = '150%';
else if ($aspectRatio === '16:9') $paddingTop = '56.25%';
else if ($aspectRatio === '1:1') $paddingTop = '100%';
else $paddingTop = $aspectRatio;

$bgColor = '1e293b'; 

if ($variant === 'pact') $bgColor = '005A5A'; 
if ($variant === 'axiom') $bgColor = 'A8491A';
$textColor = 'FFFFFF';
$placeholderUrl = "https://placehold.co/600x400/{$bgColor}/{$textColor}?text=" . urlencode($fallbackText);
?>

<wa-card with-media <?php echo ($buttonProps || !empty($secondaryButtons)) ? 'with-footer' : ''; ?> class="constellation-wa-card" style="height: 100%; display: flex; flex-direction: column;">
  <?php if ($imgSrc): ?>
    <div slot="media" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>; overflow: hidden; background-color: #0b1120;">
      <img src="<?php echo htmlspecialchars($imgSrc); ?>"
           alt="<?php echo htmlspecialchars($imgAlt); ?>"
           loading="lazy"
           onerror="this.onerror=null;this.src='<?php echo $placeholderUrl; ?>';"
           style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
      <?php if (strpos($imgSrc, 'book-placeholder.jpg') !== false): ?>
          <img src="<?php echo (isset($cdnBaseUrl) ? $cdnBaseUrl : ''); ?>/raggiesoft-books/images/logos/oceanview-archives.svg" 
               alt=""
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70%; height: auto; pointer-events: none; opacity: 0.85;">
      <?php endif; ?>
    </div>
  <?php else: ?>
    <div slot="media" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>; overflow: hidden; background-color: #0b1120;">
      <img src="<?php echo $placeholderUrl; ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
  <?php endif; ?>

  <?php if ($badge): ?>
    <div class="mb-2">
      <span class="constellation-stack-badge"><?php echo htmlspecialchars($badge); ?></span>
    </div>
  <?php endif; ?>

  <h3 class="h5 mt-0 mb-2 fw-bold text-body">
    <?php echo $title; ?>
  </h3>
  <div class="text-body-secondary small mb-0">
    <?php echo $description; ?>
  </div>

  <?php if ($buttonProps || !empty($secondaryButtons)): ?>
    <div slot="footer" class="d-flex flex-column gap-2 w-100">
      <?php if ($buttonProps): ?>
        <?php
          $props = $buttonProps;
          include __DIR__ . '/button.php';
        ?>
      <?php endif; ?>
      <?php if (!empty($secondaryButtons)): ?>
        <div class="d-flex flex-wrap gap-2 w-100">
          <?php foreach ($secondaryButtons as $secBtn): ?>
            <wa-button href="<?php echo htmlspecialchars($secBtn['href'] ?? '#'); ?>"
                       variant="<?php echo htmlspecialchars($secBtn['variant'] ?? 'neutral'); ?>"
                       appearance="<?php echo htmlspecialchars($secBtn['appearance'] ?? 'outlined'); ?>"
                       size="<?php echo htmlspecialchars($secBtn['size'] ?? 'small'); ?>"
                       class="flex-grow-1">
              <?php if (!empty($secBtn['icon'])): ?>
                <i slot="start" class="<?php echo htmlspecialchars($secBtn['icon']); ?>"></i>
              <?php endif; ?>
              <?php echo htmlspecialchars($secBtn['text'] ?? 'Open'); ?>
            </wa-button>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</wa-card>

