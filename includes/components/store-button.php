<?php
// --- Component: store-button.php ---

$type = $storeProps['type'] ?? 'album'; 
$size = $storeProps['size'] ?? 'medium';

// The IDs for each platform
$ids = [
    'spotify' => $storeProps['spotify'] ?? '',
    'apple'   => $storeProps['apple'] ?? '',
    'amazon'  => $storeProps['amazon'] ?? '',
    'youtube' => $storeProps['youtube'] ?? ''
];

// Configuration array for platforms
$platforms = [
    'spotify' => ['color' => 'success', 'icon' => 'fa-brands fa-spotify', 'text' => 'Spotify'],
    'apple'   => ['color' => 'danger',  'icon' => 'fa-brands fa-apple',   'text' => 'Apple Music'],
    'amazon'  => ['color' => 'info',    'icon' => 'fa-brands fa-amazon',  'text' => 'Amazon Music'],
    'youtube' => ['color' => 'danger',  'icon' => 'fa-brands fa-youtube', 'text' => 'YouTube']
];

// Build the specific URLs based on type (Album vs Artist)
$urls = [
    'spotify' => $type === 'artist' ? "https://open.spotify.com/artist/{$ids['spotify']}" : "https://open.spotify.com/album/{$ids['spotify']}",
    'apple'   => $type === 'artist' ? "https://music.apple.com/us/artist/{$ids['apple']}" : "https://music.apple.com/us/album/{$ids['apple']}",
    'amazon'  => $type === 'artist' ? "https://music.amazon.com/artists/{$ids['amazon']}" : "https://music.amazon.com/albums/{$ids['amazon']}",
    'youtube' => $type === 'artist' ? "https://music.youtube.com/channel/{$ids['youtube']}" : "https://music.youtube.com/playlist?list={$ids['youtube']}"
];

// Size formatting
$btnSize = ($size === 'large') ? 'btn-lg' : (($size === 'small') ? 'btn-sm' : '');

// Set the initial default (this will be overwritten by JS if the user has a saved preference)
$default = 'spotify'; 
?>

<div class="btn-group dynamic-store-group shadow-sm" role="group">
    <a href="<?php echo $urls[$default]; ?>" 
       class="btn btn-<?php echo $platforms[$default]['color']; ?> <?php echo $btnSize; ?> main-store-btn fw-bold px-4"
       data-default-text="<?php echo $type === 'artist' ? 'Artist on' : 'Listen on'; ?>" target="_blank">
        <i class="main-store-icon <?php echo $platforms[$default]['icon']; ?> me-2"></i>
        <span class="main-store-text"><?php echo $type === 'artist' ? 'Artist on ' : 'Listen on '; echo $platforms[$default]['text']; ?></span>
    </a>
    
    <button type="button" class="btn btn-<?php echo $platforms[$default]['color']; ?> <?php echo $btnSize; ?> dropdown-toggle dropdown-toggle-split toggle-store-btn" data-bs-toggle="dropdown" aria-expanded="false" title="Set Default Music App">
        <span class="visually-hidden">Choose Default Music Store</span>
    </button>
    
    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-secondary pb-1">
        <li>
            <div class="px-3 py-2 bg-body-tertiary border-bottom border-secondary-subtle mb-2">
                <span class="d-block fw-bold text-primary mb-1"><i class="fa-solid fa-memory me-1"></i> Set Global Default</span>
                <span class="d-block small text-muted lh-sm" style="font-size: 0.8em;">Select your preferred app. We will remember it for all future albums.</span>
            </div>
        </li>
        <?php foreach ($platforms as $key => $data): ?>
            <?php if (!empty($ids[$key])): // Only show if we have an ID for this platform ?>
                <li>
                    <a class="dropdown-item store-selector-link py-2" 
                       href="<?php echo $urls[$key]; ?>" 
                       target="_blank"
                       data-platform="<?php echo $key; ?>"
                       data-color="btn-<?php echo $data['color']; ?>"
                       data-icon="<?php echo $data['icon']; ?>"
                       data-name="<?php echo $data['text']; ?>"
                       data-url="<?php echo $urls[$key]; ?>">
                        <i class="<?php echo $data['icon']; ?> me-2 text-<?php echo $data['color']; ?>"></i> <?php echo $data['text']; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>