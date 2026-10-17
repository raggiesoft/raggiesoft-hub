<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE: The Stardust Engine Lore & History Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/sidebar-stories.php
 *
 * DESIGN INTENT:
 * - Provides the secondary sidebar navigation for The Stardust Engine "Lore & History"
 *   section across all eras (1985 CPI through the 2015 Delaware Migration and
 *   The $150M Refusal).
 * - Built with Web Awesome v3.13.0 (<wa-button>, <wa-divider>) per llms-webawesome.txt.
 * - Uses parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) to cleanly evaluate active
 *   states even when query strings are present.
 * ============================================================================
 */

$current_req = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

$storyLinks = [
    'history' => [
        'title' => 'Story Hub Overview',
        'url'   => '/engine-room/artists/stardust-engine/story',
        'icon'  => 'fa-duotone fa-book-open'
    ],
    'cpi' => [
        'title' => 'CPI & The Forgers (1985)',
        'url'   => '/engine-room/artists/stardust-engine/story/cpi',
        'icon'  => 'fa-duotone fa-school'
    ],
    'crucible' => [
        'title' => 'The Crucible & Ignition (1986)',
        'url'   => '/engine-room/artists/stardust-engine/story/crucible',
        'icon'  => 'fa-duotone fa-fire-flame-curved'
    ],
    'noise-floor' => [
        'title' => 'The Noise Floor (1987)',
        'url'   => '/engine-room/artists/stardust-engine/story/analogue-heart/the-noise-floor',
        'icon'  => 'fa-duotone fa-wave-sine'
    ],
    'crash-of-90' => [
        'title' => 'The Crash of \'90 (1990)',
        'url'   => '/engine-room/artists/stardust-engine/story/crash-of-90',
        'icon'  => 'fa-duotone fa-car-crash'
    ],
    'friction' => [
        'title' => 'The Friction Catastrophe (1992)',
        'url'   => '/engine-room/artists/stardust-engine/story/friction',
        'icon'  => 'fa-duotone fa-fire'
    ],
    'ad-astra' => [
        'title' => 'Ad Astra: The Mission (1995)',
        'url'   => '/engine-room/artists/stardust-engine/story/ad-astra',
        'icon'  => 'fa-duotone fa-rocket-launch'
    ],
    'war-1399' => [
        'title' => 'The $13.99 War (1997)',
        'url'   => '/engine-room/artists/stardust-engine/story/hard-reset/the-album/the-1399-war',
        'icon'  => 'fa-duotone fa-tags'
    ],
    'london-discovery' => [
        'title' => 'The London Discovery (1999)',
        'url'   => '/engine-room/artists/stardust-engine/story/hard-reset/hard-reset-tour/london-discovery',
        'icon'  => 'fa-duotone fa-box-open-full'
    ],
    'paternoster' => [
        'title' => 'Paternoster Incident (1999)',
        'url'   => '/engine-room/artists/stardust-engine/story/hard-reset/hard-reset-tour/paternoster-incident',
        'icon'  => 'fa-duotone fa-elevator'
    ],
    'iron-horse' => [
        'title' => 'The Iron Horse & Fleet (2002–04)',
        'url'   => '/engine-room/corporate/strategic-assets/the-iron-horse',
        'icon'  => 'fa-duotone fa-bus'
    ],
    'john-and-erin' => [
        'title' => 'Story of John & Erin (2004–07)',
        'url'   => '/engine-room/artists/stardust-engine/story/john-and-erin',
        'icon'  => 'fa-duotone fa-book-sparkles'
    ],
    'cosmic-tidal-lock-sound' => [
        'title' => 'Cosmic Tidal Lock Sound™ (2011)',
        'url'   => '/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound',
        'icon'  => 'fa-duotone fa-satellite'
    ],
    'delaware-migration' => [
        'title' => '2015 Delaware Migration',
        'url'   => '/engine-room/artists/stardust-engine/story/2015-delaware-migration',
        'icon'  => 'fa-duotone fa-file-signature'
    ],
    'corporate-structure' => [
        'title' => '2015 Corporate Web',
        'url'   => '/engine-room/corporate/structure',
        'icon'  => 'fa-duotone fa-sitemap'
    ],
    'refusal' => [
        'title' => 'The $150M Refusal (2018)',
        'url'   => '/engine-room/artists/stardust-engine/story/nine-figure-refusal',
        'icon'  => 'fa-duotone fa-file-invoice-dollar'
    ]
];
?>

<nav aria-label="The Stardust Engine Lore Archives" class="d-flex flex-column mb-4">
    <div class="px-2 mb-2">
        <span class="text-uppercase fw-bold small letter-spacing-1 text-body-secondary">
            The Lore Archives
        </span>
    </div>

    <div class="d-flex flex-column gap-1">
        <?php foreach ($storyLinks as $key => $link):
            $isExactMatch = ($current_req === $link['url']);
            $isSubPage = ($key !== 'history') && str_starts_with($current_req, $link['url'] . '/');
            $isActive = ($isExactMatch || $isSubPage);
        ?>
            <wa-button
                appearance="<?php echo $isActive ? 'filled' : 'plain'; ?>"
                variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>"
                size="small"
                href="<?php echo htmlspecialchars($link['url']); ?>"
                class="w-100 text-start justify-content-start"
                style="text-align: left;">
                <i slot="start" class="<?php echo htmlspecialchars($link['icon']); ?>" aria-hidden="true"></i>
                <?php echo htmlspecialchars($link['title']); ?>
            </wa-button>
        <?php endforeach; ?>
    </div>

    <div class="mt-3 px-2 small fst-italic text-body-secondary">
        <wa-divider class="my-2"></wa-divider>
        <i class="fa-duotone fa-circle-info me-1" aria-hidden="true"></i>
        <small>Chronological turning points of The Stardust Engine &amp; Engine Room Records.</small>
    </div>
</nav>