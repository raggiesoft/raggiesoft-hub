<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Fractured Prisms Sidebar Navigation
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/artists/fractured-prisms/sidebar-prisms.php
 *
 * ROLE:
 * Contextual sidebar navigation for the Fractured Prisms artist archive
 * ("The Fragile Fortress"), connecting the band overview, discography,
 * Claire & Rhys Manning personnel profiles, and historical lore documents.
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 components (<wa-card>, <wa-button>,
 *   <wa-badge>, <wa-divider>) per llms-webawesome.txt.
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

$prismSections = [
    'The Sanctuary' => [
        [
            'label' => 'Artist Overview',
            'url'   => '/engine-room/artists/fractured-prisms',
            'icon'  => 'fa-duotone fa-prism'
        ],
        [
            'label' => 'Album Lore & Catalog',
            'url'   => '/engine-room/artists/fractured-prisms/discography',
            'icon'  => 'fa-duotone fa-compact-disc'
        ]
    ],
    'The Residents (Personnel)' => [
        [
            'label' => 'Claire Manning',
            'url'   => '/engine-room/artists/fractured-prisms/band/claire-manning',
            'icon'  => 'fa-duotone fa-flute'
        ],
        [
            'label' => 'Rhys Manning',
            'url'   => '/engine-room/artists/fractured-prisms/band/rhys-manning',
            'icon'  => 'fa-duotone fa-sliders'
        ]
    ],
    'Historical Archives' => [
        [
            'label' => 'The Hollow Square',
            'url'   => '/engine-room/artists/fractured-prisms/story/the-hollow-square',
            'icon'  => 'fa-duotone fa-chess-rook'
        ],
        [
            'label' => '1985 American Shores Tour',
            'url'   => '/engine-room/artists/fractured-prisms/story/1985-american-shores-tour',
            'icon'  => 'fa-duotone fa-globe-americas'
        ],
        [
            'label' => 'The Colonial Theatre (1985)',
            'url'   => '/engine-room/artists/fractured-prisms/lore/colonial-theatre',
            'icon'  => 'fa-duotone fa-masks-theater'
        ],
        [
            'label' => '1999 London Discovery',
            'url'   => '/engine-room/artists/stardust-engine/story/hard-reset/hard-reset-tour/london-discovery',
            'icon'  => 'fa-duotone fa-box-open-full'
        ]
    ]
];
?>

<nav aria-label="Fractured Prisms Archive Navigation" class="mb-4">
    <wa-card class="shadow-sm">
        <div slot="header" class="d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase small letter-spacing-1">
                <i class="fa-duotone fa-prism me-2 text-info" aria-hidden="true"></i>The Fragile Fortress
            </span>
            <wa-badge variant="brand" pill>1983–1985</wa-badge>
        </div>

        <?php
        $sectionIdx = 0;
        foreach ($prismSections as $heading => $links):
            if ($sectionIdx > 0):
        ?>
            <wa-divider class="my-3"></wa-divider>
        <?php endif; ?>

            <div class="px-2 mb-2">
                <span class="text-uppercase text-body-secondary fw-bold" style="font-size: 0.72rem; letter-spacing: 0.08em;">
                    <?php echo htmlspecialchars($heading); ?>
                </span>
            </div>

            <div class="d-flex flex-column gap-1">
                <?php foreach ($links as $link):
                    $isActive = ($currentPath === $link['url']);
                ?>
                    <wa-button
                        appearance="<?php echo $isActive ? 'filled' : 'plain'; ?>"
                        variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>"
                        size="small"
                        href="<?php echo htmlspecialchars($link['url']); ?>"
                        class="w-100 text-start justify-content-start"
                        style="text-align: left;">
                        <i slot="start" class="<?php echo htmlspecialchars($link['icon']); ?>" aria-hidden="true"></i>
                        <?php echo htmlspecialchars($link['label']); ?>
                    </wa-button>
                <?php endforeach; ?>
            </div>
        <?php
            $sectionIdx++;
        endforeach;
        ?>

        <div slot="footer" class="w-100">
            <wa-button appearance="outlined" variant="warning" size="small" href="https://music.raggiesoft.com/fractured-prisms" target="_blank" class="w-100">
                <i slot="start" class="fa-duotone fa-headphones" aria-hidden="true"></i>
                Stream in Listening Room
                <i slot="end" class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
            </wa-button>
        </div>
    </wa-card>
</nav>

