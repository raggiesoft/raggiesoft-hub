<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/card.php
 * Role: Reusable Responsive Media Card Component (DaisyUI 5 + Aspect-Ratio Box)
 * Domain: https://raggiesoft.com (Used by `pages/home.php` Constellation Grid)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders a uniform-height (`h-100 d-flex flex-column`) DaisyUI 5 `.card`
 * displaying:
 *   1. An intrinsic-aspect-ratio `<figure>` (`16:9` -> `56.25%` `padding-top`,
 *      `2:3` -> `150%`, `1:1` -> `100%`) so images never cause Cumulative Layout
 *      Shift (CLS) while loading lazily (`loading="lazy"`), plus an automatic
 *      `onerror` fallback placeholder if an image fails to load.
 *   2. An optional pill `.badge` category label.
 *   3. A semantic `<h3 class="card-title">` heading and flexible description.
 *   4. Bottom-pinned `.card-actions` (`mt-auto`) rendering a primary button via
 *      `includes/components/button.php` and optional `.btn-outline` secondary links.
 *
 * INPUTS:
 * - `$props` (array): `imgSrc`, `imgAlt`, `fallbackText`, `badge`, `title`,
 *   `description`, `buttonProps`, `secondaryButtons`, `aspectRatio`.
 * - `$cdnBaseUrl` (optional global string) for SVG watermark overlay on book placeholders.
 *
 * OUTPUT PRODUCED:
 * - Semantic `<div class="card ...">` HTML fragment.
 * ============================================================================
 *
 * RaggieSoft Hub - Reusable Card Component (DaisyUI 5 + Phosphor Icons)
 * ============================================================================
 * File: includes/components/card.php
 * Purpose:
 *     Renders a responsive image card using DaisyUI 5 (`.card`, `.card-body`,
 *     `.card-actions`) and semantic HTML5.
 * ============================================================================
 */

// 1. Extract `$props` with sensible defaults and XSS escaping on `$title`:
$imgSrc = $props['imgSrc'] ?? null;
$imgAlt = $props['imgAlt'] ?? 'Card image';
$fallbackText = $props['fallbackText'] ?? 'Image';
$badge = $props['badge'] ?? null;
$title = isset($props['title']) ? htmlspecialchars($props['title']) : 'Card Title';
$description = $props['description'] ?? 'Card description goes here.';
$buttonProps = $props['buttonProps'] ?? null;
$secondaryButtons = $props['secondaryButtons'] ?? [];
$variant = $buttonProps['variant'] ?? 'secondary';

// 2. CSS Percentage `padding-top` Aspect-Ratio Box Calculation:
// In CSS, vertical `padding-top` percentages are calculated relative to the
// element's WIDTH! So `56.25%` ($9 \div 16 = 0.5625$) reserves an exact 16:9 box
// before the `<img>` downloads a single byte.
$aspectRatio = $props['aspectRatio'] ?? '1:1';
$paddingTop = '100%';
if ($aspectRatio === '2:3') $paddingTop = '150%';
else if ($aspectRatio === '16:9') $paddingTop = '56.25%';
else if ($aspectRatio === '1:1') $paddingTop = '100%';
else $paddingTop = $aspectRatio;

// 3. Build a fallback placeholder image URL in case `$imgSrc` is missing or returns 404:
$bgColor = '1e293b'; 
if ($variant === 'pact') $bgColor = '005A5A'; 
if ($variant === 'axiom') $bgColor = 'A8491A';
$textColor = 'FFFFFF';
$placeholderUrl = "https://placehold.co/600x400/{$bgColor}/{$textColor}?text=" . urlencode($fallbackText);
?>

<div class="card bg-base-200 border border-base-300 shadow-sm constellation-wa-card h-100 d-flex flex-column overflow-hidden">
  <?php /* Aspect-ratio `<figure>` frame with lazy-loaded image and one-shot `this.onerror=null` fallback */ ?>
  <figure class="mb-0" style="position: relative; width: 100%; padding-top: <?php echo $paddingTop; ?>; overflow: hidden; background-color: #0b1120;">
    <?php if ($imgSrc): ?>
      <img src="<?php echo htmlspecialchars($imgSrc); ?>"
           alt="<?php echo htmlspecialchars($imgAlt); ?>"
           loading="lazy"
           onerror="this.onerror=null;this.src='<?php echo $placeholderUrl; ?>';"
           style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
      <?php if (strpos($imgSrc, 'book-placeholder.jpg') !== false): ?>
          <?php /* Decorative SVG watermark (`alt=""` marks it decorative for screen readers) */ ?>
          <img src="<?php echo (isset($cdnBaseUrl) ? $cdnBaseUrl : ''); ?>/raggiesoft-books/images/logos/oceanview-archives.svg" 
               alt=""
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70%; height: auto; pointer-events: none; opacity: 0.85;">
      <?php endif; ?>
    <?php else: ?>
      <img src="<?php echo $placeholderUrl; ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    <?php endif; ?>
  </figure>

  <?php /* Flex-grow `.card-body` so `.card-actions` (`mt-auto`) always aligns flush at the bottom of every card in a row */ ?>
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
            // Delegate primary CTA rendering to `includes/components/button.php`:
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
