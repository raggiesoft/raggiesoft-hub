<?php
// includes/sidebars/artists/stardust-engine/story/sidebar-nine-figure-refusal.php
// Dedicated navigation for the "Accidental Empire" Saga
// UPDATED: Added "The Approach" to Chapter 1

$currentUri = $_SERVER['REQUEST_URI'] ?? '';

// Helper function to check if a chapter is active
function isChapterActive($pages, $uri) {
    foreach ($pages as $url => $data) {
        if (str_contains($uri, $url)) return true;
    }
    return false;
}

// Chapter Data Structure
$chapters = [
    'ch1' => [
        'title' => 'Ch 1: The Setup',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-approach' => ['icon' => 'fa-solid fa-plane-arrival', 'label' => 'The Approach'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile' => ['icon' => 'fa-solid fa-crosshairs', 'label' => 'Target Profile'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report' => ['icon' => 'fa-solid fa-file-certificate', 'label' => 'UCC Search Report'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo' => ['icon' => 'fa-solid fa-envelope-open-text', 'label' => 'The Bus Memo'],
        ]
    ],
    'ch2' => [
        'title' => 'Ch 2: The Trap',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/forensic-audit' => ['icon' => 'fa-solid fa-magnifying-glass-dollar text-primary', 'label' => 'Holly\'s Homework'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-smoking-gun' => ['icon' => 'fa-solid fa-envelope-open-text text-danger', 'label' => 'The Smoking Gun'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-offer-letter' => ['icon' => 'fa-solid fa-file-contract', 'label' => 'The Offer Letter'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-counter-offer' => ['icon' => 'fa-solid fa-envelope-circle-check text-warning', 'label' => 'The Counter-Offer'],
        ]
    ],
    'ch3' => [
        'title' => 'Ch 3: The Event',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-trigger' => ['icon' => 'fa-solid fa-bolt text-danger', 'label' => 'The Trigger (Slide 14)'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-autopsy' => ['icon' => 'fa-solid fa-laptop-code text-success', 'label' => 'The Autopsy'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-extraction' => ['icon' => 'fa-solid fa-person-to-door text-info', 'label' => 'The Extraction'],
        ]
    ],
    'ch4' => [
        'title' => 'Ch 4: The Fallout',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/omni-global-chapter-11' => ['icon' => 'fa-solid fa-newspaper', 'label' => 'Market Alert: Ch. 11'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction' => ['icon' => 'fa-duotone fa-gavel', 'label' => 'The Liquidation Auction'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/stardust-bus-ride' => ['icon' => 'fa-solid fa-bus', 'label' => 'Bus Ride Article'],
        ]
    ],
    'ch5' => [
        'title' => 'Ch 5: The Legacy',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-jessica-miller-center' => ['icon' => 'fa-solid fa-building', 'label' => 'The Jessica Miller Center'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-non-profit-model' => ['icon' => 'fa-solid fa-hand-holding-heart', 'label' => 'The Non-Profit Model'],
        ]
    ],
    'epilogue' => [
        'title' => 'Epilogue',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/frost-interview' => ['icon' => 'fa-solid fa-clipboard-question', 'label' => 'The Frost Interview'],
        ]
    ],
];
?>

<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1 text-body-secondary">
    <i slot="start" class="fa-duotone fa-folder-open"></i> Case File: OGM-2018
</h5>

<div class="d-flex flex-column gap-1">
    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-arrow-turn-up me-2"></i> Back to Story
        </wa-button>
    
    
        <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="w-100 text-start justify-content-start <?php echo ($currentUri === '/engine-room/artists/stardust-engine/story/nine-figure-refusal') ? 'text-primary fw-bold' : 'text-body'; ?>" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-chart-network"></i> Overview
        </wa-button>
    
</div>


<div class="mt-2 d-flex flex-column gap-1">
    <?php foreach ($chapters as $id => $data): 
        $isActive = isChapterActive($data['pages'], $currentUri);
    ?>
    <wa-details summary="<?php echo $data['title']; ?>" <?php echo $isActive ? 'open' : ''; ?> class="border-0 bg-transparent">
        <div class="d-flex flex-column gap-1 ps-2 pb-2">
            <?php foreach ($data['pages'] as $url => $linkData): 
                $isLinkActive = ($currentUri === $url);
            ?>
                <wa-button appearance="plain" href="<?php echo $url; ?>" class="w-100 text-start justify-content-start <?php echo $isLinkActive ? 'text-primary fw-bold' : 'text-body'; ?>" style="text-align: left; font-size: 0.9em;">
                    <i slot="start" class="<?php echo $linkData['icon']; ?> me-2"></i> <?php echo $linkData['label']; ?>
                </wa-button>
            <?php endforeach; ?>
        </div>
    </wa-details>
    <?php endforeach; ?>
</div>


<div class="mt-4 p-3 bg-body-tertiary border border-secondary-subtle rounded">
    <h6 class="text-body-emphasis text-uppercase small fw-bold mb-2">Status Update</h6>
    <div class="d-flex align-items-center mb-2">
        <wa-badge variant="success" class="me-2 font-monospace">Closed</wa-badge>
        <small class="text-body-secondary font-monospace">Jan 15, 2019</small>
    </div>
    <p class="text-body-secondary small mb-0">
        Omni-Global Media is now a wholly-owned subsidiary of Engine Room Records, LLC.
    </p>
</div>