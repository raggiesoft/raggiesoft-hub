<?php
/**
 * RaggieSoft Hub - Universal Discography Sidebar
 * 
 * ARCHITECTURAL OVERVIEW:
 * This complex sidebar dynamically generates a Bootstrap 5 accordion menu based on 
 * data provided by the `_discography.php` array. It categorizes albums into "Eras" 
 * and automatically handles active state and accordion-open logic based on the 
 * current URI.
 * 
 * LOGIC & CONSTRAINTS:
 * - Data Source: `includes/components/arrays/_discography.php`. The structure of 
 *   this array ($discographyLibrary) dictates the rendering.
 * - Auto-Open Logic: Iterates through albums in an era; if any album's URL matches 
 *   the current URI, that specific era's accordion is set to open (`$isOpen = true`).
 * - Icons are hardcoded based on `$eraKey` (e.g., 'apex', 'freedom'). If new eras are
 *   added to the data array, they will receive a fallback generic disc icon.
 * 
 * File Info: includes/components/sidebars/sidebar-discography.php
 * v2.1 - Fixed Variable Name Mismatch & Data Structure Access
 */

// 1. Ensure Data exists
include_once ROOT_PATH . '/includes/components/arrays/_discography.php';

// 2. Get Current Context
$current_req = $_SERVER['REQUEST_URI'];
?>

<nav class="d-flex flex-column gap-2 mb-4" aria-label="Discography Eras">
    <?php 
    // SAFETY: Check if the variable exists from the include
    $library = $discographyLibrary ?? [];
    
    $eraIndex = 0;
    foreach ($library as $eraKey => $eraData): 
        $eraIndex++;
        
        $eraTitle = $eraData['label']; 
        $albums   = $eraData['albums'];
        
        // Skip eras with no albums
        if (empty($albums)) continue;

        // Determine Open State
        $isOpen = false;
        foreach ($albums as $album) {
            $albumSlug = basename($album['url']);
            if (!empty($albumSlug) && str_contains($current_req, $albumSlug)) {
                $isOpen = true;
                break;
            }
        }
        
        // Default open the first one if on root discography page
        if ((str_ends_with(rtrim($current_req, '/'), '/discography')) && $eraIndex === 1) {
            $isOpen = true;
        }
    ?>
        <wa-details appearance="plain" <?php echo $isOpen ? 'open' : ''; ?> class="border-bottom border-secondary-subtle pb-1">
            <span slot="summary" class="fw-bold small text-uppercase">
                <?php 
                    if ($eraKey === 'apex') echo '<i class="fa-duotone fa-building me-2"></i>';
                    elseif ($eraKey === 'freedom') echo '<i class="fa-duotone fa-warehouse me-2"></i>';
                    elseif ($eraKey === 'err-planetarium') echo '<i class="fa-duotone fa-planet-ringed me-2"></i>';
                    elseif ($eraKey === 'burnout-hiatus') echo '<i class="fa-duotone fa-satellite me-2"></i>';
                    elseif ($eraKey === 'reignition') echo '<i class="fa-duotone fa-fire-burner me-2"></i>';
                    else echo '<i class="fa-duotone fa-compact-disc me-2"></i>';
                ?>
                <?php echo htmlspecialchars($eraTitle); ?>
            </span>
            <div class="d-flex flex-column gap-1 ps-2 pt-1">
                <?php foreach ($albums as $album): 
                    $albumSlug = basename($album['url']);
                    $isActive = (!empty($albumSlug) && str_contains($current_req, $albumSlug));
                    $title = $album['title'];
                    $year = $album['year'];
                    // Route to internal lore page if viewing inside raggiesoft-hub
                    $url = str_starts_with($album['url'], 'https://music.raggiesoft.com/the-stardust-engine/')
                        ? '/engine-room/artists/stardust-engine/discography/' . $albumSlug
                        : $album['url'];
                    $extra = $album['extra'] ?? ''; 
                ?>
                    <wa-button appearance="<?php echo $isActive ? 'filled-outlined' : 'plain'; ?>" variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>" size="small" href="<?php echo htmlspecialchars($url); ?>" class="w-100 text-start justify-content-start" style="text-align: left;">
                        <?php echo htmlspecialchars($title); ?> (<?php echo htmlspecialchars($year); ?>) <?php echo $extra; ?>
                    </wa-button>
                <?php endforeach; ?>
            </div>
        </wa-details>
    <?php endforeach; ?>
</nav>