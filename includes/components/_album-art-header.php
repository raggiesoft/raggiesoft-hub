<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file standardizes the presentation of Album Art across all Engine Room discography pages.
 * 
 * DESIGN INTENT:
 * - Uses `$props['variant']` to map lore-specific themes (e.g., 'pact', 'axiom') to corresponding Web Awesome utility border colors.
 * - Implements aggressive cache busting (`?v=time()`) to ensure the user always sees the latest iteration of the generated artwork.
 * 
 * MAINTENANCE NOTES:
 * - The cache busting is "nuclear" (changes every second). This forces a fresh download on every page load. While necessary during active development/art generation, it should be replaced with a build-time hash in production to save bandwidth.
 */
// --- Component: _album-art-header.php ---
// Standardizes the album art display on discography pages.

// 1. Get Data
$path = $props['path'] ?? '';
$alt = $props['alt'] ?? 'Album Art';
$variant = $props['variant'] ?? 'primary'; 

// LEGACY LORE MAPPING: Translates narrative concepts into standard CSS class suffixes for border styling.
// 2. Map Narrative Variants to Web Awesome Pro Colors
$borderColor = $variant;
if ($variant === 'pact') $borderColor = 'primary';   // Pink/Teal
if ($variant === 'axiom') $borderColor = 'warning';  // Cyan/Orange
if ($variant === 'neutral') $borderColor = 'secondary';

// LEGACY PERFORMANCE WARNING: Appending `time()` breaks CDN caching entirely.
// 3. Build URL with NUCLEAR CACHE BUSTING
// We append time() so the URL changes every second. Chrome CANNOT cache this.
$imgSrc = $cdnBaseUrl . "" . $path . "/album-art.jpg?v=" . time();
?>

<div class="col-md-5 text-center text-md-start">
    <img src="<?php echo htmlspecialchars($imgSrc); ?>" 
         alt="<?php echo htmlspecialchars($alt); ?>" 
         class="img-fluid shadow-lg rounded border border-4 border-<?php echo $borderColor; ?>">
</div>