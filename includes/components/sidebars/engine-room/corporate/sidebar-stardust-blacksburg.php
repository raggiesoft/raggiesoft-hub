<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: The Stardust Blacksburg Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/corporate/sidebar-stardust-blacksburg.php
 *
 * ROLE:
 * Dedicated contextual sidebar navigation for "The Stardust Blacksburg"
 * accessible student housing complex (800 Progress Street NW, Blacksburg, VA),
 * owned by Pacific Rim Properties, LLC and operated by Ironstone Property
 * Management, LLC under the O'Connell Family Revocable Living Trust.
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 components (<wa-card>, <wa-button>,
 *   <wa-badge>, <wa-divider>) in compliance with llms-webawesome.txt.
 * - Uses parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) to highlight the
 *   currently active route across both /engine-room/corporate/stardust-blacksburg
 *   and /stardust-blacksburg alias paths.
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

$communityLinks = [
    [
        'label' => 'Property Overview',
        'url'   => '/engine-room/corporate/stardust-blacksburg',
        'alias' => '/stardust-blacksburg',
        'icon'  => 'fa-duotone fa-building-user'
    ],
    [
        'label' => 'Community Amenities',
        'url'   => '/engine-room/corporate/stardust-blacksburg/amenities',
        'alias' => '/stardust-blacksburg/amenities',
        'icon'  => 'fa-duotone fa-sparkles'
    ],
    [
        'label' => 'Leasing & Floor Plans',
        'url'   => '/engine-room/corporate/stardust-blacksburg/leasing',
        'alias' => '/stardust-blacksburg/leasing',
        'icon'  => 'fa-duotone fa-file-signature'
    ],
    [
        'label' => 'Location & Transit',
        'url'   => '/engine-room/corporate/stardust-blacksburg/location',
        'alias' => '/stardust-blacksburg/location',
        'icon'  => 'fa-duotone fa-bus'
    ]
];

$documentLinks = [
    [
        'label' => 'Resident Welcome Letter',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/welcome-letter',
        'alias' => '/stardust-blacksburg/documents/welcome-letter',
        'icon'  => 'fa-duotone fa-envelope-open-text'
    ],
    [
        'label' => 'Accessibility Standards',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/accessibility',
        'alias' => '/stardust-blacksburg/documents/accessibility',
        'icon'  => 'fa-duotone fa-universal-access'
    ],
    [
        'label' => 'Apartment Specifications',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/apartment-amenities',
        'alias' => '/stardust-blacksburg/documents/apartment-amenities',
        'icon'  => 'fa-duotone fa-kitchen-set'
    ],
    [
        'label' => 'Solid Oak Furniture Spec',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/furniture-philosophy',
        'alias' => '/stardust-blacksburg/documents/furniture-philosophy',
        'icon'  => 'fa-duotone fa-chair'
    ],
    [
        'label' => 'Policies & Bill of Rights',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/policies',
        'alias' => '/stardust-blacksburg/documents/policies',
        'icon'  => 'fa-duotone fa-scale-balanced'
    ],
    [
        'label' => 'Blacksburg Market Audit',
        'url'   => '/engine-room/corporate/stardust-blacksburg/documents/competitor-analysis',
        'alias' => '/stardust-blacksburg/documents/competitor-analysis',
        'icon'  => 'fa-duotone fa-chart-mixed'
    ]
];
?>

<nav aria-label="The Stardust Blacksburg Navigation" class="mb-4">
    <wa-card class="shadow-sm mb-4">
        <div slot="header" class="d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase small letter-spacing-1">
                <i class="fa-duotone fa-building-shield me-2 text-primary" aria-hidden="true"></i>800 Progress St NW
            </span>
            <wa-badge variant="success" pill>ADA / UFAS</wa-badge>
        </div>

        <div class="d-flex flex-column gap-1">
            <?php foreach ($communityLinks as $item):
                $isActive = ($currentPath === $item['url'] || $currentPath === $item['alias']);
            ?>
                <wa-button
                    appearance="<?php echo $isActive ? 'filled' : 'plain'; ?>"
                    variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>"
                    size="small"
                    href="<?php echo htmlspecialchars($item['url']); ?>"
                    class="w-100 text-start justify-content-start"
                    style="text-align: left;">
                    <i slot="start" class="<?php echo htmlspecialchars($item['icon']); ?>" aria-hidden="true"></i>
                    <?php echo htmlspecialchars($item['label']); ?>
                </wa-button>
            <?php endforeach; ?>
        </div>

        <wa-divider class="my-3"></wa-divider>

        <div class="px-2 mb-2">
            <span class="text-uppercase text-body-secondary fw-bold" style="font-size: 0.72rem; letter-spacing: 0.08em;">
                Resident Dossier &amp; Filings
            </span>
        </div>

        <div class="d-flex flex-column gap-1">
            <?php foreach ($documentLinks as $doc):
                $isActive = ($currentPath === $doc['url'] || $currentPath === $doc['alias']);
            ?>
                <wa-button
                    appearance="<?php echo $isActive ? 'filled' : 'plain'; ?>"
                    variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>"
                    size="small"
                    href="<?php echo htmlspecialchars($doc['url']); ?>"
                    class="w-100 text-start justify-content-start"
                    style="text-align: left;">
                    <i slot="start" class="<?php echo htmlspecialchars($doc['icon']); ?>" aria-hidden="true"></i>
                    <?php echo htmlspecialchars($doc['label']); ?>
                </wa-button>
            <?php endforeach; ?>
        </div>

        <div slot="footer" class="w-100">
            <wa-button appearance="outlined" variant="neutral" size="small" href="/engine-room/corporate/structure" class="w-100">
                <i slot="start" class="fa-duotone fa-sitemap" aria-hidden="true"></i>
                Parent Trust Structure
            </wa-button>
        </div>
    </wa-card>
</nav>

