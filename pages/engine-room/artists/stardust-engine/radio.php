<?php
// pages/radio.php
// "Engine Room Radio" - Multi-Artist Broadcast Console
// v8.0 - The "Station" Update (Random Shuffle Default)

$pageTitle = "Engine Room Radio - The Console";

// 1. CONFIGURATION
if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__)); 
$cdn_root = "https://assets.raggiesoft.com/engine-room-records"; 

// Define the artists we want to broadcast
// In the future, this could scan a directory, but for now, we list them.
$station_roster = [
    'the-stardust-engine', 
    'origin',
    'mirage' 
];

$master_playlist = []; 
$global_track_index = 0;

// 2. AGGREGATOR LOGIC
foreach ($station_roster as $artist_slug) {
    
    // A. Load the Artist's specific Discography file
    // We assume a naming convention: includes/components/arrays/artists/{slug}.php
    // Fallback: If not found, we skip (allows us to add 'mirage' to the list before the file exists)
    $discog_path = ROOT_PATH . "/includes/components/arrays/artists/{$artist_slug}.php";
    
    // *Special Case for Stardust Engine (Legacy Path compatibility)*
    if ($artist_slug === 'the-stardust-engine') {
        $discog_path = ROOT_PATH . '/includes/components/arrays/_discography.php';
    }

    if (file_exists($discog_path)) {
        include $discog_path; // This should populate a variable like $discographyLibrary
        
        // B. Process the Library
        if (!empty($discographyLibrary)) {
            foreach ($discographyLibrary as $era) {
                if (!empty($era['albums'])) {
                    foreach ($era['albums'] as $album) {
                        
                        // Skip Canceled
                        if (isset($album['extra']) && strpos($album['extra'], 'CANCELED') !== false) continue;

                        // Fetch Album Metadata from CDN
                        // Note: We pass the artist_slug here to build the correct URL
                        $album_folder = $album['folder'] ?? basename($album['url']);
                        $base_path = "{$cdn_root}/artists/{$artist_slug}/{$album_folder}";
                        
                        $tracks_json = @file_get_contents("{$base_path}/tracks.json");
                        $album_json = @file_get_contents("{$base_path}/album.json");

                        if ($tracks_json && $album_json) {
                            $tracks_data = json_decode($tracks_json, true);
                            $meta_data = json_decode($album_json, true);
                            $raw_tracks = $tracks_data['tracks'] ?? $tracks_data;
                            
                            $artist_name = $meta_data['artist'] ?? ($meta_data['albumArtist'] ?? 'Engine Room Artist');
                            $album_title = $meta_data['title'] ?? ($meta_data['albumName'] ?? 'Unknown Album');

                            foreach ($raw_tracks as $track) {
                                $fn = $track['fileName'] ?? ($track['filename'] ?? null);
                                if (!$fn) continue;

                                $master_playlist[] = [
                                    'title' => $track['title'],
                                    'artist' => $artist_name,
                                    'album' => $album_title,
                                    'artwork' => "{$base_path}/album-art.jpg",
                                    'src' => "{$base_path}/ogg/{$fn}.ogg",
                                    'lyrics' => "{$base_path}/lyrics/{$fn}.md",
                                    // 'global_index' will be reassigned after shuffle
                                ];
                            }
                        }
                    }
                }
            }
        }
        // Reset library variable for next loop iteration to prevent bleeding
        unset($discographyLibrary);
    }
}

// 3. THE RADIO SHUFFLE
// This is the "Real Radio" logic. We randomize the array before sending it to JS.
shuffle($master_playlist);

// Re-index the playlist for the JS player (0, 1, 2...)
$master_playlist = array_values($master_playlist);
?>

<div class="container-fluid p-0">
    <div class="p-5 text-center bg-dark border-bottom border-secondary" 
         style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg'); background-size: cover;">
        
        <h1 class="display-2 fw-bold text-uppercase text-warning mb-2" style="font-family: 'Audiowide', sans-serif;">
            <i class="fa-duotone fa-signal-stream me-3"></i>Engine Room Radio
        </h1>
        <p class="lead text-secondary font-monospace">Broadcasting from The Fortress // <span class="text-success">LIVE</span></p>
        
        <div class="mt-4">
            <button id="btn-start-radio" class="btn btn-lg btn-outline-warning rounded-pill px-5 shadow-glow" onclick="loadTrack(0)">
                <i class="fa-solid fa-play me-2"></i>TUNE IN
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card glass-card border-0 shadow-lg">
                    <div class="card-header bg-transparent border-bottom border-secondary p-3 d-flex justify-content-between align-items-center">
                        <h5 class="text-light mb-0 text-uppercase"><i class="fa-duotone fa-list-music me-2"></i>Coming Up Next</h5>
                        <span class="badge bg-secondary"><?php echo count($master_playlist); ?> Tracks Queued</span>
                    </div>
                    <div class="card-body p-0" style="max-height: 600px; overflow-y: auto;">
                        <div class="list-group list-group-flush">
                            <?php foreach ($master_playlist as $index => $track): ?>
                                <button type="button" 
                                        class="list-group-item list-group-item-action bg-transparent border-secondary track-row d-flex align-items-center p-3"
                                        id="track-row-<?php echo $index; ?>"
                                        data-index="<?php echo $index; ?>">
                                    
                                    <div class="me-3 text-secondary font-monospace" style="width: 30px;">
                                        <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                    </div>
                                    
                                    <img src="<?php echo $track['artwork']; ?>" class="rounded shadow-sm me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                    
                                    <div class="flex-grow-1 text-start">
                                        <div class="text-light fw-bold"><?php echo $track['title']; ?></div>
                                        <div class="small text-info text-uppercase"><?php echo $track['artist']; ?></div>
                                    </div>

                                    <div class="ms-3">
                                        <i class="play-indicator fa-duotone fa-play-circle fs-4 text-secondary opacity-50"></i>
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

<?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

<script>
    window.STARDUST_PLAYLIST = <?php echo json_encode($master_playlist); ?>;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.track-row').forEach(row => {
            row.addEventListener('click', (e) => {
                const index = parseInt(row.getAttribute('data-index'));
                if (typeof window.loadTrack === 'function') window.loadTrack(index);
            });
        });
    });
</script>

<script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>