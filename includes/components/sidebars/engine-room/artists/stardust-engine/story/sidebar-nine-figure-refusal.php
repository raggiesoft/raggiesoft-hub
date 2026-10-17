<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE: The $150M Refusal Sidebar Navigation
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/artists/stardust-engine/story/sidebar-nine-figure-refusal.php
 *
 * DESIGN INTENT:
 * - Dedicated chapter-by-chapter navigation for "The $150M Refusal" (Case File OGM-2018).
 * - Uses Web Awesome v3.13.0 (<wa-details>, <wa-button>, <wa-badge>, <wa-card>)
 *   per llms-webawesome.txt.
 * - Includes all 21 chapters and court exhibits (including Chapter 7 Conversion Order,
 *   Sun-Ray Catalog Transfer Deed, and Staff Retention Protocol).
 * ============================================================================
 */

$currentUri = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

if (!function_exists('isChapterActive')) {
    function isChapterActive($pages, $uri) {
        foreach ($pages as $url => $data) {
            if ($uri === $url || str_starts_with($uri, $url . '/')) return true;
        }
        return false;
    }
}

$chapters = [
    'ch1' => [
        'title' => 'Ch 1: The Setup',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-approach'      => ['icon' => 'fa-solid fa-plane-arrival', 'label' => 'The Approach'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile'    => ['icon' => 'fa-solid fa-crosshairs', 'label' => 'Target Profile'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report' => ['icon' => 'fa-solid fa-file-certificate', 'label' => 'UCC Search Report'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo'      => ['icon' => 'fa-solid fa-envelope-open-text', 'label' => 'The Bus Memo'],
        ]
    ],
    'ch2' => [
        'title' => 'Ch 2: The Trap',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/forensic-audit'    => ['icon' => 'fa-solid fa-magnifying-glass-dollar text-primary', 'label' => 'Holly\'s Homework'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-smoking-gun'   => ['icon' => 'fa-solid fa-envelope-open-text text-danger', 'label' => 'The Smoking Gun'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-offer-letter'  => ['icon' => 'fa-solid fa-file-contract', 'label' => 'The Offer Letter'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-counter-offer' => ['icon' => 'fa-solid fa-envelope-circle-check text-warning', 'label' => 'The Counter-Offer'],
        ]
    ],
    'ch3' => [
        'title' => 'Ch 3: The Event',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-trigger'       => ['icon' => 'fa-solid fa-bolt text-danger', 'label' => 'The Trigger (Slide 14)'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-autopsy'       => ['icon' => 'fa-solid fa-laptop-code text-success', 'label' => 'The Autopsy'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-extraction'    => ['icon' => 'fa-solid fa-person-to-door text-info', 'label' => 'The Extraction'],
        ]
    ],
    'ch4' => [
        'title' => 'Ch 4: The Fallout & Exhibits',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/omni-global-chapter-11' => ['icon' => 'fa-solid fa-newspaper', 'label' => 'Market Alert: Ch. 11'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/chapter-7-conversion-order'           => ['icon' => 'fa-solid fa-scale-balanced text-danger', 'label' => 'Ch. 7 Conversion Order'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction'                  => ['icon' => 'fa-duotone fa-gavel', 'label' => 'The Liquidation Auction'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/sun-ray-catalog-transfer'             => ['icon' => 'fa-solid fa-compact-disc text-warning', 'label' => 'Sun-Ray Catalog Deed'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/staff-retention'                      => ['icon' => 'fa-solid fa-users-gear text-success', 'label' => 'Staff Retention Directive'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/zenith-report/stardust-bus-ride'      => ['icon' => 'fa-solid fa-bus', 'label' => 'Bus Ride Article'],
        ]
    ],
    'ch5' => [
        'title' => 'Ch 5: The Legacy',
        'pages' => [
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-jessica-miller-center' => ['icon' => 'fa-solid fa-building', 'label' => 'The Jessica Miller Center'],
            '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-non-profit-model'      => ['icon' => 'fa-solid fa-hand-holding-heart', 'label' => 'The Non-Profit Model'],
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
    <i class="fa-duotone fa-folder-open me-2" aria-hidden="true"></i>Case File: OGM-2018
</h5>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" variant="neutral" size="small" href="/engine-room/artists/stardust-engine/story" class="w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-arrow-turn-up" aria-hidden="true"></i>Back to Story Hub
    </wa-button>

    <wa-button
        appearance="<?php echo ($currentUri === '/engine-room/artists/stardust-engine/story/nine-figure-refusal') ? 'filled' : 'plain'; ?>"
        variant="<?php echo ($currentUri === '/engine-room/artists/stardust-engine/story/nine-figure-refusal') ? 'brand' : 'neutral'; ?>"
        size="small"
        href="/engine-room/artists/stardust-engine/story/nine-figure-refusal"
        class="w-100 text-start justify-content-start"
        style="text-align: left;">
        <i slot="start" class="fa-duotone fa-chart-network" aria-hidden="true"></i>01. Case Overview
    </wa-button>
</div>

<div class="mt-2 d-flex flex-column gap-1">
    <?php foreach ($chapters as $id => $data):
        $isActive = isChapterActive($data['pages'], $currentUri);
    ?>
    <wa-details summary="<?php echo htmlspecialchars($data['title']); ?>" <?php echo $isActive ? 'open' : ''; ?> class="border-0 bg-transparent">
        <div class="d-flex flex-column gap-1 ps-2 pb-2">
            <?php foreach ($data['pages'] as $url => $linkData):
                $isLinkActive = ($currentUri === $url);
            ?>
                <wa-button
                    appearance="<?php echo $isLinkActive ? 'filled' : 'plain'; ?>"
                    variant="<?php echo $isLinkActive ? 'brand' : 'neutral'; ?>"
                    size="small"
                    href="<?php echo htmlspecialchars($url); ?>"
                    class="w-100 text-start justify-content-start"
                    style="text-align: left;">
                    <i slot="start" class="<?php echo htmlspecialchars($linkData['icon']); ?>" aria-hidden="true"></i>
                    <?php echo htmlspecialchars($linkData['label']); ?>
                </wa-button>
            <?php endforeach; ?>
        </div>
    </wa-details>
    <?php endforeach; ?>
</div>

<wa-card class="mt-4 shadow-sm">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-body-emphasis text-uppercase small fw-bold">Status Update</span>
        <wa-badge variant="success" pill class="font-monospace">CLOSED</wa-badge>
    </div>
    <p class="text-body-secondary small font-monospace mb-2">Filed: Jan 15, 2019</p>
    <p class="text-body-secondary small mb-0">
        Omni-Global Media’s distressed assets and the Sun-Ray master catalog are now wholly owned by the O'Connell Family Trust and Engine Room Records, LLC.
    </p>
</wa-card>