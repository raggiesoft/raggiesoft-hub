<?php
// pages/radio.php
// "Engine Room Radio" - Multi-Artist Broadcast Console
// v10.0 - Schema.org & Track Length Integration

$pageTitle = "Engine Room Radio - The Console";

// 1. CONFIGURATION
if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__)); 
$cdn_root = "https://assets.raggiesoft.com/engine-room-records"; 

// Define the exact slugs for the artists currently in the catalog
$station_roster = [
    'the-stardust-engine', 
    'fractured-prisms',
    'firelight',
    'the-paper-wall'
];

$master_playlist = []; 

// 2. AGGREGATOR LOGIC
$seen_isrcs = []; // Initialize our deduplication tracker

foreach ($station_roster as $artist_slug) {
    
    // Fetch the master albums.json for the artist directly from the CDN
    $albums_json_url = "{$cdn_root}/artists/{$artist_slug}/albums.json";
    $albums_json_content = @file_get_contents($albums_json_url);
    
    if ($albums_json_content) {
        $master_data = json_decode($albums_json_content, true);
        
        if (is_array($master_data)) {
            foreach ($master_data as $era) {
                if (!empty($era['albums'])) {
                    foreach ($era['albums'] as $album) {
                        
                        // Skip Canceled Releases
                        if (isset($album['extra']) && strpos($album['extra'], 'CANCELED') !== false) continue;

                        $album_folder = $album['folder'] ?? basename($album['url']);
                        $base_path = "{$cdn_root}/artists/{$artist_slug}/{$album_folder}";
                        
                        $tracks_json = @file_get_contents("{$base_path}/tracks.json");
                        $album_json = @file_get_contents("{$base_path}/album.json");

                        if ($tracks_json && $album_json) {
                            $tracks_data = json_decode($tracks_json, true);
                            $meta_data = json_decode($album_json, true);
                            $raw_tracks = $tracks_data['tracks'] ?? $tracks_data;
                            
                            // Schema.org Standard parsing with legacy fallback
                            $artist_name = $meta_data['byArtist']['name'] ?? ($meta_data['albumArtist'] ?? 'Engine Room Artist');
                            $album_title = $meta_data['name'] ?? ($meta_data['albumName'] ?? 'Unknown Album');

                            foreach ($raw_tracks as $track) {
                                $fn = $track['fileName'] ?? ($track['filename'] ?? null);
                                if (!$fn) continue;

                                // --- ISRC DEDUPLICATION LOGIC ---
                                $isrc = $track['isrc'] ?? '';
                                
                                if (!empty($isrc)) {
                                    if (in_array($isrc, $seen_isrcs)) {
                                        continue; // We already have this exact recording. Skip it.
                                    }
                                    $seen_isrcs[] = $isrc; // Add it to the tracker so we don't play it again.
                                }
                                // If the ISRC is empty, it bypasses the tracker and gets added.
                                // --------------------------------

                                $legacy_tier = isset($track['legacyTier']) ? $track['legacyTier'] : null;
                                $lore_note = isset($track['loreNote']) ? $track['loreNote'] : '';
                                $duration = isset($track['duration']) ? $track['duration'] : '';

                                $master_playlist[] = [
                                    'title' => $track['title'],
                                    'artist' => $artist_name,
                                    'album' => $album_title,
                                    'artwork' => "{$base_path}/album-art.jpg?v=" . time(),
                                    'src' => "{$base_path}/web-mp3/{$fn}.mp3?v=" . time(),
                                    'lyrics' => "{$base_path}/lyrics/{$fn}.md?v=" . time(),
                                    'legacyTier' => $legacy_tier,
                                    'loreNote' => $lore_note,
                                    'duration' => $duration
                                ];
                            }
                        }
                    }
                }
            }
        }
    }
}

// 3. THE RADIO SHUFFLE
shuffle($master_playlist);
$master_playlist = array_values($master_playlist); // Re-index for JS
?>

<div class="container-fluid p-0">
    <div class="p-5 text-center border-bottom border-secondary" 
         style="background: linear-gradient(rgba(13, 17, 23, 0.8), rgba(13, 17, 23, 0.95)), url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg'); background-size: cover; background-position: center;">
        
        <h1 class="display-2 fw-bold text-uppercase text-warning mb-2" style="font-family: 'Audiowide', sans-serif;">
            <i class="fa-duotone fa-signal-stream me-3"></i>Engine Room Radio
        </h1>
        <p class="lead text-secondary font-monospace">Broadcasting from The Fortress // <span class="text-success fw-bold"><i class="fa-solid fa-circle text-danger blink-me fs-6 pb-1"></i> LIVE</span></p>
        
        <div class="mt-4">
            <button class="btn btn-lg btn-outline-warning rounded-pill px-5 shadow-glow btn-play-index" data-index="0">
                <i class="fa-solid fa-play me-2"></i>TUNE IN
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-body-tertiary border-secondary shadow-lg">
                    <div class="card-header bg-transparent border-bottom border-secondary p-3 d-flex justify-content-between align-items-center">
                        <h5 class="text-body-emphasis mb-0 text-uppercase"><i class="fa-duotone fa-list-music me-2"></i>The Broadcast Queue</h5>
                        <span class="badge bg-primary text-light font-monospace"><?php echo count($master_playlist); ?> Tracks</span>
                    </div>
                    
                    <div class="card-body p-0" style="max-height: 700px; overflow-y: auto;">
                        <div class="list-group list-group-flush bg-transparent">
                            <?php foreach ($master_playlist as $index => $track): ?>
                                <button type="button" 
                                        class="list-group-item list-group-item-action bg-transparent border-secondary track-row d-flex align-items-center p-3 btn-play-index"
                                        id="track-row-<?php echo $index; ?>"
                                        data-index="<?php echo $index; ?>">
                                    
                                    <div class="me-3 text-secondary font-monospace fw-bold" style="width: 30px;">
                                        <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                    </div>
                                    
                                    <img src="<?php echo $track['artwork']; ?>" class="rounded shadow-sm me-3 border border-secondary" style="width: 50px; height: 50px; object-fit: cover;">
                                    
                                    <div class="flex-grow-1 text-start">
                                        <div class="text-body-emphasis fs-5 mb-1"><strong><?php echo $track['title']; ?></strong></div>
                                        <div class="small text-info text-uppercase fw-semibold"><i class="fa-solid fa-microphone-lines me-1"></i><?php echo $track['artist']; ?></div>
                                    </div>

                                    <div class="ms-3 ms-md-5 text-end d-none d-sm-block">
                                        <div class="small text-body-secondary font-monospace mb-1"><i class="fa-duotone fa-compact-disc me-1"></i><?php echo $track['album']; ?></div>
                                        <?php if (!empty($track['duration'])): ?>
                                            <div class="small text-secondary fw-semibold">
                                                <i class="fa-duotone fa-clock me-1" style="--fa-primary-opacity: 0.4;"></i><?php echo $track['duration']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="ms-4 ps-3 border-start border-secondary">
                                        <i class="play-indicator fa-duotone fa-play-circle fs-3 text-secondary opacity-50"></i>
                                    </div>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Radio UI Overrides */
    .blink-me {
        animation: blinker 1.5s linear infinite;
    }
    @keyframes blinker {
        50% { opacity: 0; }
    }
    .track-row:hover .play-indicator {
        color: var(--bs-warning) !important;
        opacity: 1;
    }
</style>

<script>
    // 1. Assign it directly to the window object as a hard fallback
    window.STARDUST_PLAYLIST = <?php echo json_encode($master_playlist); ?>;
    
    // 2. Dispatch the payload for Elara's listener
    setTimeout(() => {
        const event = new CustomEvent('stardust:playlist-update', { detail: { playlist: window.STARDUST_PLAYLIST } });
        document.dispatchEvent(event);
    }, 50);
</script>