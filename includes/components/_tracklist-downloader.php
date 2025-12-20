<?php
/**
 * COMPONENT: _tracklist-downloader.php
 * VERSION: 7.0 (v12 JSON Logic Update)
 * PURPOSE:
 * 1. Reads album metadata (tracks.json, album.json) from the CDN.
 * 2. Builds the Master Playlist array for the JavaScript player.
 * 3. Renders the visual tracklist (HTML).
 * 4. Includes the shared "Sticky Player" UI component.
 * 5. Initializes the shared "Stardust Player" JavaScript engine.
 */

// ==============================================================================
//  SECTION 1: DATA INGESTION & VALIDATION
// ==============================================================================

// Construct CDN URLs dynamically based on the parent page's configuration
$base_web_path = 'https://assets.raggiesoft.com' . $album_path_web;

// Cache Busting for JSON to prevent stale data issues
$tracks_json_url = $base_web_path . '/tracks.json?v=' . time();
$album_json_url = $base_web_path . '/album.json?v=' . time();

// Fetch JSON content (using @ to suppress PHP warnings)
$tracks_json_content = @file_get_contents($tracks_json_url);
$album_json_content = @file_get_contents($album_json_url);

// Safety Check
if ($tracks_json_content === false || $album_json_content === false) {
    echo '<div class="alert alert-danger"><strong>Error:</strong> Tracklist data not found on CDN. Check paths in album folder.</div>';
    return;
}

// Decode JSON
$tracks_data = json_decode($tracks_json_content, true);
$album_data = json_decode($album_json_content, true);
$raw_tracks = $tracks_data['tracks'];

// ==============================================================================
//  SECTION 2: HELPER FUNCTIONS
// ==============================================================================

if (!function_exists('get_web_safe_title')) {
    function get_web_safe_title($title) {
        $title = strtolower($title);
        $title = preg_replace('/[^\w\s-]/', '', $title);
        $title = preg_replace('/[\s_]+/', '-', $title);
        return preg_replace('/-+/', '-', $title);
    }
}

if (!function_exists('get_archive_name')) {
    function get_archive_name($album_name, $year) {
        $safe_name = get_web_safe_title($album_name);
        return $year . '-' . $safe_name;
    }
}

// ==============================================================================
//  SECTION 3: DATA PREPARATION
// ==============================================================================

$archive_base_name = get_archive_name($album_data['albumName'], $album_data['narrativeReleaseDate']);
$album_art_url = "https://assets.raggiesoft.com" . $album_path_web . "/album-art.jpg?v=" . time();
$js_playlist = []; // The Master Array for JS

?>

<div class="card border-secondary mb-5 bg-transparent">
    <div class="card-header bg-body-tertiary border-secondary d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-uppercase"><i class="fa-duotone fa-compact-disc me-2"></i>Full Album Archives</h5>
        <span class="badge bg-secondary">CC BY-SA 4.0</span>
    </div>
    <div class="card-body">
        <div class="d-flex gap-2 flex-wrap">
            <a href="<?php echo $base_web_path . '/archives/' . $archive_base_name . '-mp3.zip'; ?>" class="btn btn-outline-primary license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>MP3 (ZIP)
            </a>
            <a href="<?php echo $base_web_path . '/archives/' . $archive_base_name . '-ogg.zip'; ?>" class="btn btn-outline-success license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>OGG (ZIP)
            </a>
            <a href="<?php echo $base_web_path . '/archives/' . $archive_base_name . '-wav.7z'; ?>" class="btn btn-outline-warning license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>WAV (7z)
            </a>
        </div>
    </div>
</div>

<h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">
    <i class="fa-duotone fa-list-music me-2"></i>Tracklist & Lyrics
</h3>

<div class="list-group list-group-flush bg-transparent mb-5">
    <?php foreach ($raw_tracks as $index => $track): ?>
        <?php
            // --- UPDATED V12 LOGIC ---
            // We no longer calculate slugs. We trust the 'fileName' field from JSON.
            // This field typically looks like: "1-01-static" (no extension)
            
            $base_name = $track['fileName'];
            $version_string = "?v=" . time(); // Force fresh load for audio/lyrics
            
            // Build URLs
            $wav_url = $base_web_path . '/wav/' . $base_name . '.wav'; 
            $mp3_url = $base_web_path . '/mp3/' . $base_name . '.mp3' . $version_string;
            $ogg_url = $base_web_path . '/ogg/' . $base_name . '.ogg' . $version_string;
            $lyrics_url = $base_web_path . '/lyrics/' . $base_name . '.md' . $version_string;

            // --- B. Build JS Playlist Item ---
            $js_playlist[] = [
                'title' => $track['title'],
                'artist' => $album_data['albumArtist'],
                'album' => $album_data['albumName'],
                'src' => $ogg_url, 
                'artwork' => $album_art_url,
                'lyrics' => $lyrics_url 
            ];
        ?>
        
        <div class="list-group-item bg-transparent border-secondary text-muted py-3 track-row" id="track-row-<?php echo $index; ?>">
            <div class="row align-items-center">
                
                <div class="col-md-6 mb-2 mb-md-0">
                    <div class="d-flex align-items-center">
                        <span class="text-secondary fw-bold me-3" style="width: 25px;"><?php echo $track['track']; ?>.</span>
                        <div>
                            <strong class="text-body d-block fs-5"><?php echo htmlspecialchars($track['title']); ?></strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-end">
                    <div class="btn-group" role="group">
                        
                        <button type="button" 
                                class="btn btn-sm btn-primary btn-play-index" 
                                data-index="<?php echo $index; ?>">
                            <i class="fa-duotone fa-play me-2"></i>Play
                        </button>

                        <button type="button" class="btn btn-sm btn-outline-info btn-view-lyrics" 
                                data-title="<?php echo htmlspecialchars($track['title']); ?>" 
                                data-url="<?php echo $lyrics_url; ?>">
                            <i class="fa-duotone fa-book-open me-2"></i>Lyrics
                        </button>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa-duotone fa-download"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark border-secondary">
                                <li><a class="dropdown-item text-light license-gate" href="<?php echo $mp3_url; ?>">MP3</a></li>
                                <li><a class="dropdown-item text-light license-gate" href="<?php echo $ogg_url; ?>">OGG</a></li>
                                <li><hr class="dropdown-divider border-secondary"></li>
                                <li><a class="dropdown-item text-light license-gate" href="<?php echo $wav_url; ?>">WAV (Master)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
// ==============================================================================
//  SECTION 4: UI & PLAYER INITIALIZATION
// ==============================================================================
?>

<?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

<script>
    // Pass the PHP playlist to the Global Window scope
    window.STARDUST_PLAYLIST = <?php echo json_encode($js_playlist); ?>;
</script>

<script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>