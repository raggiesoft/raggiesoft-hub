<?php
// --- Component: card.php ---
// Updated: Web Awesome Components

$imgSrc = $props['imgSrc'] ?? null;
$imgAlt = $props['imgAlt'] ?? 'Card image';
$fallbackText = $props['fallbackText'] ?? 'Image';
$title = isset($props['title']) ? htmlspecialchars($props['title']) : 'Card Title';
$description = $props['description'] ?? 'Card description goes here.';
$buttonProps = $props['buttonProps'] ?? null;
$variant = $buttonProps['variant'] ?? 'secondary';

$bgColor = '6c757d'; 
if ($variant === 'pact') $bgColor = '005A5A'; 
if ($variant === 'axiom') $bgColor = 'A8491A';
$textColor = 'FFFFFF';
$placeholderUrl = "https://placehold.co/600x400/{$bgColor}/{$textColor}?text=" . urlencode($fallbackText);
?>

<wa-card style="height: 100%; display: flex; flex-direction: column;">
  <?php if ($imgSrc): ?>
    <img slot="media" 
         src="<?php echo htmlspecialchars($imgSrc); ?>"
         alt="<?php echo htmlspecialchars($imgAlt); ?>"
         onerror="this.onerror=null;this.src='<?php echo $placeholderUrl; ?>';"
         style="width: 100%; height: auto; object-fit: cover;">
  <?php else: ?>
     <img slot="media" src="<?php echo $placeholderUrl; ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" style="width: 100%; height: auto; object-fit: cover;">
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
