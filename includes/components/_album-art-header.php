<?php
// --- Component: _album-art-header.php ---
// Standardizes the album art display on discography pages.

// 1. Get Data
$path = $props['path'] ?? '';
$alt = $props['alt'] ?? 'Album Art';
$variant = $props['variant'] ?? 'primary'; 

// 2. Map Narrative Variants to Bootstrap Colors
$borderColor = $variant;
if ($variant === 'pact') $borderColor = 'primary';   // Pink/Teal
if ($variant === 'axiom') $borderColor = 'warning';  // Cyan/Orange
if ($variant === 'neutral') $borderColor = 'secondary';

// 3. Build URL with NUCLEAR CACHE BUSTING
// We append time() so the URL changes every second. Chrome CANNOT cache this.
$imgSrc = "https://assets.raggiesoft.com" . $path . "/album-art.jpg?v=" . time();
?>

<div class="col-md-5 text-center text-md-start">
    <img src="<?php echo htmlspecialchars($imgSrc); ?>" 
         alt="<?php echo htmlspecialchars($alt); ?>" 
         class="img-fluid shadow-lg rounded border border-4 border-<?php echo $borderColor; ?>">
</div>