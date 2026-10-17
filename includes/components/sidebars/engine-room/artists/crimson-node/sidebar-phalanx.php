<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Crimson Node - The Phalanx Sidebar
 * ============================================================================
 * File: raggiesoft-hub/includes/components/sidebars/engine-room/artists/crimson-node/sidebar-phalanx.php
 *
 * ROLE:
 * Primary sidebar navigation for the core protagonist faction ("The Phalanx")
 * within the Crimson Node narrative. Links to the overview and all 10 character
 * profiles (including both the unified Pelletier Twins dossier and individual
 * Elise & Elodie Pelletier profiles).
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 (<wa-card>, <wa-button>, <wa-divider>)
 *   in compliance with llms-webawesome.txt.
 * ============================================================================
 */

$sidebar_uri = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');

if (!function_exists('is_active_phalanx')) {
    function is_active_phalanx($path, $current_uri) {
        return str_contains($current_uri, $path);
    }
}

$phalanxMembers = [
    ['url' => '/engine-room/artists/crimson-node/characters/family/matt-miller',         'slug' => '/matt-miller',         'icon' => 'fa-solid fa-microchip',     'label' => 'Matt Miller'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/sarah-miller',        'slug' => '/sarah-miller',        'icon' => 'fa-solid fa-shield-halved', 'label' => 'Sarah Miller'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/emily-miller',        'slug' => '/emily-miller',        'icon' => 'fa-solid fa-microphone',    'label' => 'Emily Miller'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/jessica-brooks',      'slug' => '/jessica-brooks',      'icon' => 'fa-solid fa-wave-square',   'label' => 'Jessica Brooks'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/rachel-miller',       'slug' => '/rachel-miller',       'icon' => 'fa-solid fa-drum',          'label' => 'Rachel Miller'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/shiloh-brooks',       'slug' => '/shiloh-brooks',       'icon' => 'fa-solid fa-guitar',        'label' => 'Shiloh Brooks'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/chloe-brooks',        'slug' => '/chloe-brooks',        'icon' => 'fa-solid fa-chess-knight',  'label' => 'Chloe Brooks'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/the-pelletier-twins', 'slug' => '/the-pelletier-twins', 'icon' => 'fa-solid fa-user-group',    'label' => 'The Pelletier Twins'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/elise-pelletier',     'slug' => '/elise-pelletier',     'icon' => 'fa-solid fa-compass',       'label' => 'Elise Pelletier'],
    ['url' => '/engine-room/artists/crimson-node/characters/family/elodie-pelletier',    'slug' => '/elodie-pelletier',    'icon' => 'fa-solid fa-feather-pointed','label' => 'Elodie Pelletier'],
];
?>

<nav aria-label="The Phalanx Character Dossiers" class="mb-4">
    <wa-card class="shadow-sm">
        <div slot="header" class="d-flex align-items-center justify-content-between">
            <span class="fw-bold text-uppercase small letter-spacing-1">
                <i class="fa-solid fa-shield-halved me-2 text-danger" aria-hidden="true"></i>The Phalanx
            </span>
            <wa-badge variant="danger" pill>Inner Circle</wa-badge>
        </div>

        <div class="d-flex flex-column gap-1">
            <?php $isOverview = ($sidebar_uri === '/engine-room/artists/crimson-node/characters/family'); ?>
            <wa-button
                appearance="<?php echo $isOverview ? 'filled' : 'plain'; ?>"
                variant="<?php echo $isOverview ? 'brand' : 'neutral'; ?>"
                size="small"
                href="/engine-room/artists/crimson-node/characters/family"
                class="w-100 text-start justify-content-start"
                style="text-align: left;">
                <i slot="start" class="fa-solid fa-users" aria-hidden="true"></i>
                Phalanx Overview
            </wa-button>

            <wa-divider class="my-2"></wa-divider>

            <?php foreach ($phalanxMembers as $member):
                $active = is_active_phalanx($member['slug'], $sidebar_uri);
            ?>
                <wa-button
                    appearance="<?php echo $active ? 'filled' : 'plain'; ?>"
                    variant="<?php echo $active ? 'brand' : 'neutral'; ?>"
                    size="small"
                    href="<?php echo htmlspecialchars($member['url']); ?>"
                    class="w-100 text-start justify-content-start"
                    style="text-align: left;">
                    <i slot="start" class="<?php echo htmlspecialchars($member['icon']); ?>" aria-hidden="true"></i>
                    <?php echo htmlspecialchars($member['label']); ?>
                </wa-button>
            <?php endforeach; ?>
        </div>
    </wa-card>
</nav>
