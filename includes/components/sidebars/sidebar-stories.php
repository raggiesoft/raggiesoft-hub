<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the secondary sidebar navigation for the Engine Room "Lore & History" section.
 * 
 * DESIGN INTENT:
 * - Dynamically determines the `active` state of sidebar links by comparing the current `REQUEST_URI` against an array of predefined routes.
 * - Handles both exact matches (for index pages) and sub-page matches (so a child page keeps the parent's nav item active).
 * 
 * MAINTENANCE NOTES:
 * - The `$current_req` matching is fragile. If URL parameters (`?v=1`) are present, `str_starts_with` or exact matching might fail. Consider parsing the URL path explicitly via `parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)`.
 * - The `history` key is treated as an edge case root and excluded from partial sub-page matching to prevent it from always being active.
 */
// includes/components/sidebars/sidebar-stories.php
// Navigation for the Lore & History Section
// Updated: v2.1 (Fixed Active State Visibility for Corporate Theme)

$current_req = $_SERVER['REQUEST_URI'];

// Define the menu structure
$storyLinks = [
    'history' => [
        'title' => 'Full History',
        'url' => '/engine-room/artists/stardust-engine/story', // Acts as the section home
        'icon' => 'fa-duotone fa-book-open'
    ],
    'cpi' => [
        'title' => 'CPI & The Forgers',
        'url' => '/engine-room/artists/stardust-engine/story/cpi',
        'icon' => 'fa-duotone fa-school'
    ],
    'crash-of-90' => [
        'title' => 'The Crash of \'90',
        'url' => '/engine-room/artists/stardust-engine/story/crash-of-90',
        'icon' => 'fa-duotone fa-car-crash'
    ],
    'friction' => [
        'title' => 'The Friction Catastrophe',
        'url' => '/engine-room/artists/stardust-engine/story/friction',
        'icon' => 'fa-duotone fa-fire'
    ],
    'refusal' => [
        'title' => 'The $150M Refusal',
        'url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal',
        'icon' => 'fa-duotone fa-file-invoice-dollar'
    ],
    'ad-astra' => [
        'title' => 'Ad Astra: The Mission',
        'url' => '/story/ad-astra',
        'icon' => 'fa-duotone fa-rocket-launch'
    ]
];
?>

<nav class="nav flex-column mb-4">
    
    <div class="px-3 mb-2">
        <span class="text-uppercase  fw-bold small letter-spacing-1">
            The Lore
        </span>
    </div>

    <div class="d-flex flex-column gap-1">
        <?php foreach ($storyLinks as $key => $link): 
            // LEGACY ROUTING LOGIC: Checks for explicit route equality to handle index pages accurately.
            // 1. Exact Match (Account for optional trailing slash)
            $isExactMatch = ($current_req === $link['url'] || $current_req === $link['url'] . '/');
            
            // 2. Sub-page Match (Exclude the root 'history' link from this check)
            $isSubPage = false;
            if ($key !== 'history') {
                $isSubPage = (str_starts_with($current_req, $link['url'] . '/'));
            }
            
            $isActive = ($isExactMatch || $isSubPage);
        ?>
            
                <a class="nav-link py-2 <?php echo $isActive ? 'active fw-bold text-body-emphasis' : 'link-secondary'; ?>" 
                   href="<?php echo $link['url']; ?>">
                    <i slot="start" class="<?php echo $link['icon']; ?>"></i> <?php echo $link['title']; ?>
                </a>
            
        <?php endforeach; ?>
    </div>

    <!-- LEGACY UI COMPONENT: Contextual helper text for the sidebar. -->
    <div class="mt-4 px-3  small fst-italic ">
        <hr class="border-secondary">
        <i class="fa-duotone fa-info-circle me-1"></i>
        <small>These archives document the key historical turning points of the Engine Room.</small>
    </div>

</nav>