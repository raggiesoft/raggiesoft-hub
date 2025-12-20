<?php
// includes/components/sidebars/sidebar-stories.php
// Navigation for the Lore & History Section
// Updated: v2.1 (Fixed Active State Visibility for Corporate Theme)

$current_req = $_SERVER['REQUEST_URI'];

// Define the menu structure
$storyLinks = [
    'history' => [
        'title' => 'Full History',
        'url' => '/story/overview', // Acts as the section home
        'icon' => 'fa-duotone fa-book-open'
    ],
    'cpi' => [
        'title' => 'CPI & The Forgers',
        'url' => '/story/cpi',
        'icon' => 'fa-duotone fa-school'
    ],
    'crash-of-90' => [
        'title' => 'The Crash of \'90',
        'url' => '/story/crash-of-90',
        'icon' => 'fa-duotone fa-car-crash'
    ],
    'friction' => [
        'title' => 'The Friction Catastrophe',
        'url' => '/story/friction',
        'icon' => 'fa-duotone fa-fire'
    ],
    'refusal' => [
        'title' => 'The $150M Refusal',
        'url' => '/story/nine-figure-refusal',
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
        <span class="text-uppercase text-secondary fw-bold small letter-spacing-1">
            The Lore
        </span>
    </div>

    <ul class="nav flex-column border-start border-secondary ms-3 ps-2">
        <?php foreach ($storyLinks as $key => $link): 
            // LOGIC UPDATE: 
            // 1. Exact Match (Standard behavior)
            // 2. Sub-page Match (If we are at /story/friction/sub-page, keep /story/friction active)
            $isExactMatch = ($current_req === $link['url']);
            $isSubPage = (str_starts_with($current_req, $link['url'] . '/'));
            
            $isActive = ($isExactMatch || $isSubPage);
        ?>
            <li class="nav-item">
                <a class="nav-link py-2 <?php echo $isActive ? 'active fw-bold text-body-emphasis' : 'link-secondary'; ?>" 
                   href="<?php echo $link['url']; ?>">
                    <i class="<?php echo $link['icon']; ?> me-2" style="width: 20px; text-align: center;"></i>
                    <?php echo $link['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="mt-4 px-3 text-muted small fst-italic opacity-75">
        <hr class="border-secondary">
        <i class="fa-duotone fa-info-circle me-1"></i>
        <small>These archives document the key historical turning points of the Engine Room.</small>
    </div>

</nav>