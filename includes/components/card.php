<?php
/**
 * ============================================================================
 * RaggieSoft Hub - Reusable Card Component (DaisyUI 5 + Phosphor Icons)
 * ============================================================================
 * File: includes/components/card.php
 * Purpose:
 *     Renders a responsive image card using DaisyUI 5 (`.card`, `.card-body`,
 *     `.card-actions`) and semantic HTML5.
 * ============================================================================
 */

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

<div class="card bg-base-200 border border-base-300 shadow-sm constellation-wa-card h-100 d-flex flex-column overflow-hidden">
  <figure class="mb-0" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>; overflow: hidden; background-color: #0b1120;">
    <?php if ($imgSrc): ?>
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
    <?php else: ?>
      <img src="<?php echo $placeholderUrl; ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    <?php endif; ?>
  </figure>

  <div class="card-body d-flex flex-column flex-grow-1 p-4">
    <?php if ($badge): ?>
      <div class="mb-2">
        <span class="badge badge-primary badge-outline constellation-stack-badge"><?php echo htmlspecialchars($badge); ?></span>
      </div>
    <?php endif; ?>

    <h3 class="card-title h5 mt-0 mb-2 fw-bold text-body">
      <?php echo $title; ?>
    </h3>
    <div class="text-body-secondary small mb-3 flex-grow-1">
      <?php echo $description; ?>
    </div>

    <?php if ($buttonProps || !empty($secondaryButtons)): ?>
      <div class="card-actions d-flex flex-column gap-2 w-100 mt-auto pt-2">
        <?php if ($buttonProps): ?>
          <?php
            $props = $buttonProps;
            include __DIR__ . '/button.php';
          ?>
        <?php endif; ?>
        <?php if (!empty($secondaryButtons)): ?>
          <div class="d-flex flex-wrap gap-2 w-100">
            <?php foreach ($secondaryButtons as $secBtn): ?>
              <a href="<?php echo htmlspecialchars($secBtn['href'] ?? '#'); ?>"
                 class="btn btn-outline btn-sm flex-grow-1">
                <?php if (!empty($secBtn['icon'])): ?>
                  <i class="<?php echo htmlspecialchars($secBtn['icon']); ?> me-1" aria-hidden="true"></i>
                <?php endif; ?>
                <?php echo htmlspecialchars($secBtn['text'] ?? 'Open'); ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
