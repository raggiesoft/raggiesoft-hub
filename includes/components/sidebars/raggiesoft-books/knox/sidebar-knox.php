<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Project K.N.O.X. Sidebar Navigation
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/raggiesoft-books/knox/sidebar-knox.php
 *
 * ROLE:
 * Contextual sidebar navigation for Project: K.N.O.X. under Ocean View Archives,
 * linking the main dossier, Telsus Minor world database, commercial action-figure
 * propaganda archive, and full operative chapters.
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 components (<wa-card>, <wa-button>,
 *   <wa-badge>, <wa-divider>) per llms-webawesome.txt.
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

$knoxLinks = [
    [
        'label' => 'Dossier Overview',
        'url'   => '/raggiesoft-books/knox',
        'icon'  => 'fa-duotone fa-crosshairs'
    ],
    [
        'label' => 'Read the Novel (Series)',
        'url'   => '/raggiesoft-books/books/knox',
        'icon'  => 'fa-duotone fa-book-open-reader'
    ],
    [
        'label' => 'World Data: Telsus Minor',
        'url'   => '/raggiesoft-books/knox/lore',
        'icon'  => 'fa-duotone fa-planet-ringed'
    ],
    [
        'label' => 'Merchandising vs. Reality',
        'url'   => '/raggiesoft-books/knox/lore/toys',
        'icon'  => 'fa-duotone fa-box-dollar'
    ]
];
?>

<nav aria-label="Project K.N.O.X. Navigation" class="mb-4">
    <wa-card class="shadow-sm">
        <div slot="header" class="d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase small font-monospace">
                <i class="fa-duotone fa-terminal me-2 text-success" aria-hidden="true"></i>AXIOM // K.N.O.X.
            </span>
            <wa-badge variant="danger" pill>CLASSIFIED</wa-badge>
        </div>

        <div class="d-flex flex-column gap-1">
            <?php foreach ($knoxLinks as $link):
                $isActive = ($currentPath === $link['url']);
            ?>
                <wa-button
                    appearance="<?php echo $isActive ? 'filled' : 'plain'; ?>"
                    variant="<?php echo $isActive ? 'brand' : 'neutral'; ?>"
                    size="small"
                    href="<?php echo htmlspecialchars($link['url']); ?>"
                    class="w-100 text-start justify-content-start font-monospace"
                    style="text-align: left;">
                    <i slot="start" class="<?php echo htmlspecialchars($link['icon']); ?>" aria-hidden="true"></i>
                    <?php echo htmlspecialchars($link['label']); ?>
                </wa-button>
            <?php endforeach; ?>
        </div>

        <div slot="footer" class="w-100">
            <wa-button appearance="outlined" variant="neutral" size="small" href="/raggiesoft-books" class="w-100">
                <i slot="start" class="fa-duotone fa-books" aria-hidden="true"></i>
                Ocean View Archives
            </wa-button>
        </div>
    </wa-card>
</nav>

