<?php
// --- Component: store-button.php ---
// V2: DSP Streaming + Physical Merch Routing
// Updated: Web Awesome Components

$type = $storeProps['type'] ?? 'album'; 
$size = $storeProps['size'] ?? 'medium';

// 1. The IDs for each streaming platform
$ids = [
    'spotify' => $storeProps['spotify'] ?? '',
    'apple'   => $storeProps['apple'] ?? '',
    'amazon'  => $storeProps['amazon'] ?? '',
    'youtube' => $storeProps['youtube'] ?? ''
];

// 2. The URLs for Physical Merchandise (Cloudflare Subdomains)
$physical = [
    'vinyl'   => $storeProps['vinyl'] ?? '',
    'cd'      => $storeProps['cd'] ?? '',
    'apparel' => $storeProps['apparel'] ?? ''
];

// Configuration array for streaming platforms
$platforms = [
    'spotify' => ['color' => 'success', 'icon' => 'fa-brands fa-spotify', 'text' => 'Spotify'],
    'apple'   => ['color' => 'danger',  'icon' => 'fa-brands fa-apple',   'text' => 'Apple Music'],
    'amazon'  => ['color' => 'brand',    'icon' => 'fa-brands fa-amazon',  'text' => 'Amazon Music'],
    'youtube' => ['color' => 'danger',  'icon' => 'fa-brands fa-youtube', 'text' => 'YouTube']
];

// Configuration array for physical merchandise
$merchConfig = [
    'vinyl'   => ['color' => 'warning', 'icon' => 'fa-solid fa-record-vinyl', 'text' => '12" Vinyl LP'],
    'cd'      => ['color' => 'neutral', 'icon' => 'fa-solid fa-compact-disc', 'text' => 'CD / Box Set'],
    'apparel' => ['color' => 'brand', 'icon' => 'fa-solid fa-shirt', 'text' => 'Apparel & Gear']
];

// Build the specific URLs based on type
$urls = [
    'spotify' => $type === 'artist' ? "https://open.spotify.com/artist/{$ids['spotify']}" : "https://open.spotify.com/album/{$ids['spotify']}",
    'apple'   => $type === 'artist' ? "https://music.apple.com/us/artist/{$ids['apple']}" : "https://music.apple.com/us/album/{$ids['apple']}",
    'amazon'  => $type === 'artist' ? "https://music.amazon.com/artists/{$ids['amazon']}" : "https://music.amazon.com/albums/{$ids['amazon']}",
    'youtube' => $type === 'artist' ? "https://music.youtube.com/channel/{$ids['youtube']}" : "https://music.youtube.com/playlist?list={$ids['youtube']}"
];

$default = 'spotify'; 
$hasMerch = !empty($physical['vinyl']) || !empty($physical['cd']) || !empty($physical['apparel']);
?>

<div class="d-flex flex-wrap gap-2">
    
    <wa-button-group class="dynamic-store-group">
        <wa-button href="<?php echo $urls[$default]; ?>" 
           target="_blank"
           size="<?php echo htmlspecialchars($size); ?>"
           variant="<?php echo $platforms[$default]['color']; ?>"
           class="main-store-btn fw-bold"
           data-default-text="<?php echo $type === 'artist' ? 'Artist on' : 'Listen on'; ?>">
            <i slot="start" class="main-store-icon <?php echo $platforms[$default]['icon']; ?>"></i>
            <span class="main-store-text"><?php echo $type === 'artist' ? 'Artist on ' : 'Listen on '; echo $platforms[$default]['text']; ?></span>
        </wa-button>
        
        <wa-dropdown placement="bottom-end">
            <wa-button slot="trigger" size="<?php echo htmlspecialchars($size); ?>" variant="<?php echo $platforms[$default]['color']; ?>" class="toggle-store-btn px-2">
                <i class="fa-solid fa-chevron-down"></i>
            </wa-button>
            <wa-menu style="background-color: #1a1a1a; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.5); padding: 0; overflow: hidden;">
                <div class="px-3 py-2 bg-body-tertiary border-bottom border-secondary-subtle mb-2">
                    <span class="d-block fw-bold text-primary mb-1"><i class="fa-solid fa-memory me-1"></i> Set Global Default</span>
                    <span class="d-block small text-white-50 lh-sm" style="font-size: 0.8em;">Select your preferred app. We will remember it for all future albums.</span>
                </div>
                <?php foreach ($platforms as $key => $data): ?>
                    <?php if (!empty($ids[$key])): ?>
                        <wa-menu-item class="store-selector-link"
                           value="<?php echo $key; ?>"
                           data-platform="<?php echo $key; ?>"
                           data-color="<?php echo $data['color']; ?>"
                           data-icon="<?php echo $data['icon']; ?>"
                           data-name="<?php echo $data['text']; ?>"
                           data-url="<?php echo $urls[$key]; ?>">
                            <i slot="prefix" class="<?php echo $data['icon']; ?> text-<?php echo $data['color']; ?>"></i> 
                            <a href="<?php echo $urls[$key]; ?>" target="_blank" class="text-decoration-none text-white fw-bold stretched-link">
                                <?php echo $data['text']; ?>
                            </a>
                        </wa-menu-item>
                    <?php endif; ?>
                <?php endforeach; ?>
            </wa-menu>
        </wa-dropdown>
    </wa-button-group>

    <?php if ($hasMerch): ?>
    <wa-dropdown placement="bottom-end">
        <wa-button slot="trigger" size="<?php echo htmlspecialchars($size); ?>" variant="warning" appearance="outlined" class="fw-bold">
            <i slot="start" class="fa-solid fa-cart-shopping"></i> Buy Physical
            <i slot="suffix" class="fa-solid fa-chevron-down ms-2"></i>
        </wa-button>
        <wa-menu style="background-color: #1a1a1a; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.5); padding: 0; overflow: hidden;">
            <div class="px-3 py-2 bg-body-tertiary border-bottom border-warning-subtle mb-2">
                <span class="d-block fw-bold text-warning-emphasis mb-1"><i class="fa-solid fa-box-open me-1"></i> Official Merchandise</span>
                <span class="d-block small text-white-50 lh-sm" style="font-size: 0.8em;">Orders fulfilled via our on-demand partners.</span>
            </div>
            <?php foreach ($physical as $key => $url): ?>
                <?php if (!empty($url)): ?>
                    <wa-menu-item>
                        <i slot="prefix" class="<?php echo $merchConfig[$key]['icon']; ?> text-<?php echo $merchConfig[$key]['color']; ?>"></i> 
                        <a href="<?php echo htmlspecialchars($url); ?>" target="_blank" class="text-decoration-none text-white fw-bold stretched-link">
                            <?php echo $merchConfig[$key]['text']; ?>
                        </a>
                    </wa-menu-item>
                <?php endif; ?>
            <?php endforeach; ?>
        </wa-menu>
    </wa-dropdown>
    <?php endif; ?>

</div>
