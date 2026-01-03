<?php
// includes/sidebars/sidebar-nine-figure-refusal.php
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
            '/engine-room/history/nine-figure-refusal/the-approach' => ['icon' => 'fa-solid fa-plane-arrival', 'label' => 'The Approach'],
            '/engine-room/history/nine-figure-refusal/target-profile' => ['icon' => 'fa-solid fa-crosshairs', 'label' => 'Target Profile'],
            '/engine-room/history/nine-figure-refusal/ucc-search-report' => ['icon' => 'fa-solid fa-file-certificate', 'label' => 'UCC Search Report'],
            '/engine-room/history/nine-figure-refusal/the-bus-memo' => ['icon' => 'fa-solid fa-envelope-open-text', 'label' => 'The Bus Memo'],
        ]
    ],
    'ch2' => [
        'title' => 'Ch 2: The Trap',
        'pages' => [
            '/engine-room/history/nine-figure-refusal/forensic-audit' => ['icon' => 'fa-solid fa-magnifying-glass-dollar text-primary', 'label' => 'Holly\'s Homework'],
            '/engine-room/history/nine-figure-refusal/the-smoking-gun' => ['icon' => 'fa-solid fa-envelope-open-text text-danger', 'label' => 'The Smoking Gun'],
            '/engine-room/history/nine-figure-refusal/the-offer-letter' => ['icon' => 'fa-solid fa-file-contract', 'label' => 'The Offer Letter'],
            '/engine-room/history/nine-figure-refusal/the-counter-offer' => ['icon' => 'fa-solid fa-envelope-circle-check text-warning', 'label' => 'The Counter-Offer'],
        ]
    ],
    'ch3' => [
        'title' => 'Ch 3: The Event',
        'pages' => [
            '/engine-room/history/nine-figure-refusal/the-trigger' => ['icon' => 'fa-solid fa-bolt text-danger', 'label' => 'The Trigger (Slide 14)'],
            '/engine-room/history/nine-figure-refusal/the-autopsy' => ['icon' => 'fa-solid fa-laptop-code text-success', 'label' => 'The Autopsy'],
            '/engine-room/history/nine-figure-refusal/the-extraction' => ['icon' => 'fa-solid fa-person-to-door text-info', 'label' => 'The Extraction'],
        ]
    ],
    'ch4' => [
        'title' => 'Ch 4: The Fallout',
        'pages' => [
            '/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11' => ['icon' => 'fa-solid fa-newspaper', 'label' => 'Market Alert: Ch. 11'],
            '/engine-room/history/nine-figure-refusal/liquidation-auction' => ['icon' => 'fa-duotone fa-gavel', 'label' => 'The Liquidation Auction'],
            '/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride' => ['icon' => 'fa-solid fa-bus', 'label' => 'Bus Ride Article'],
        ]
    ],
    'ch5' => [
        'title' => 'Ch 5: The Legacy',
        'pages' => [
            '/engine-room/history/nine-figure-refusal/the-jessica-miller-center' => ['icon' => 'fa-solid fa-building', 'label' => 'The Jessica Miller Center'],
            '/engine-room/history/nine-figure-refusal/the-non-profit-model' => ['icon' => 'fa-solid fa-hand-holding-heart', 'label' => 'The Non-Profit Model'],
        ]
    ],
    'epilogue' => [
        'title' => 'Epilogue',
        'pages' => [
            '/engine-room/history/nine-figure-refusal/frost-interview' => ['icon' => 'fa-solid fa-clipboard-question', 'label' => 'The Frost Interview'],
        ]
    ],
];
?>

<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1 text-body-secondary">
    <i class="fa-duotone fa-folder-open me-2 text-warning-emphasis"></i>Case File: OGM-2018
</h5>

<ul class="nav flex-column mb-3">
    <li class="nav-item">
        <a class="nav-link link-secondary" href="/engine-room/history">
            <i class="fa-duotone fa-arrow-turn-up me-2"></i>Back to History
        </a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link <?php echo ($currentUri === '/engine-room/history/nine-figure-refusal') ? 'active fw-bold text-body-emphasis' : 'text-body-secondary'; ?>" 
           href="/engine-room/history/nine-figure-refusal">
            <i class="fa-duotone fa-chart-network me-2"></i>Overview
        </a>
    </li>
</ul>

<div class="accordion accordion-flush" id="historyAccordion">
    
    <?php foreach ($chapters as $id => $data): 
        $isActive = isChapterActive($data['pages'], $currentUri);
        $collapseId = 'collapse' . ucfirst($id);
    ?>
    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="heading<?php echo $id; ?>">
            <button class="accordion-button <?php echo $isActive ? 'fw-bold text-body-emphasis bg-body-tertiary' : 'collapsed text-body-secondary bg-transparent'; ?> shadow-none py-2 px-3 rounded" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#<?php echo $collapseId; ?>" 
                    aria-expanded="<?php echo $isActive ? 'true' : 'false'; ?>" 
                    aria-controls="<?php echo $collapseId; ?>">
                <span class="small text-uppercase"><?php echo $data['title']; ?></span>
            </button>
        </h2>
        <div id="<?php echo $collapseId; ?>" 
             class="accordion-collapse collapse <?php echo $isActive ? 'show' : ''; ?>" 
             aria-labelledby="heading<?php echo $id; ?>" 
             data-bs-parent="#historyAccordion">
            <div class="accordion-body p-0 ps-3 mb-3">
                <ul class="nav flex-column border-start border-2 border-secondary border-opacity-10 ms-2">
                    <?php foreach ($data['pages'] as $url => $linkData): 
                        $isLinkActive = ($currentUri === $url);
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $isLinkActive ? 'active fw-bold text-warning-emphasis bg-warning-subtle rounded-end' : 'text-body-secondary'; ?> py-1 ms-1 ps-2" href="<?php echo $url; ?>">
                            <i class="<?php echo $linkData['icon']; ?> me-2" style="width: 20px;"></i><?php echo $linkData['label']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<div class="mt-4 p-3 bg-body-tertiary border border-secondary-subtle rounded">
    <h6 class="text-body-emphasis text-uppercase small fw-bold mb-2">Status Update</h6>
    <div class="d-flex align-items-center mb-2">
        <span class="badge bg-success me-2 text-uppercase">Closed</span>
        <small class="text-body-secondary font-monospace">Jan 15, 2019</small>
    </div>
    <p class="text-body-secondary small mb-0">
        Omni-Global Media is now a wholly-owned subsidiary of Engine Room Records, LLC.
    </p>
</div>