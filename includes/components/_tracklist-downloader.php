<?php
/**
 * COMPONENT: _tracklist-downloader.php
 * VERSION: 8.1 (Lore Engine & DRY Streaming IDs)
 * PURPOSE:
 * 1. Reads album metadata (tracks.json, album.json) from the CDN.
 * 2. Builds the Master Playlist array (including Lore Data) for the JavaScript player.
 * 3. Renders the visual tracklist with dynamic WCAG Lore Badges.
 * 4. Includes the dynamic Streaming Services card based on page-level IDs.
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
//  SECTION 3: DATA PREPARATION & UI RENDERING
// ==============================================================================

$archive_base_name = get_archive_name($album_data['albumName'], $album_data['narrativeReleaseDate']);
$album_art_url = "https://assets.raggiesoft.com" . $album_path_web . "/album-art.jpg?v=" . time();
$js_playlist = []; // The Master Array for JS

// Safely capture the streaming IDs from the parent page
$stream_spotify_id = isset($id_spotify) ? $id_spotify : '';
$stream_apple_id   = isset($id_apple) ? $id_apple : '';
$stream_amazon_id  = isset($id_amazon) ? $id_amazon : '';
$stream_youtube_id = isset($id_youtube) ? $id_youtube : '';

// Check if ANY IDs are active to change the prompt text
$has_active_streams = !empty($stream_spotify_id) || !empty($stream_apple_id) || !empty($stream_amazon_id) || !empty($stream_youtube_id);
?>

<div class="card border-secondary mb-4 bg-transparent">
    <div class="card-header bg-body-tertiary border-secondary d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-uppercase"><i class="fa-solid fa-headphones me-2"></i>Stream the Album</h5>
    </div>
    <div class="card-body">
        
        <?php if ($has_active_streams): ?>
            <p class="text-success small mb-3"><strong>Support the band!</strong> Listen to the official release on your favorite streaming platform below.</p>
        <?php else: ?>
            <p class="text-muted small mb-3">Links will become active once the album clears the global distribution network.</p>
        <?php endif; ?>

        <div class="d-flex gap-2 flex-wrap">
            <?php if (!empty($stream_spotify_id)): ?>
                <a href="https://open.spotify.com/album/<?php echo htmlspecialchars($stream_spotify_id); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success">
                    <i class="fa-brands fa-spotify me-2"></i>Spotify
                </a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-success disabled"><i class="fa-brands fa-spotify me-2"></i>Spotify</a>
            <?php endif; ?>

            <?php if (!empty($stream_apple_id)): ?>
                <a href="https://music.apple.com/us/album/<?php echo htmlspecialchars($stream_apple_id); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger">
                    <i class="fa-brands fa-apple me-2"></i>Apple Music
                </a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-danger disabled"><i class="fa-brands fa-apple me-2"></i>Apple Music</a>
            <?php endif; ?>

            <?php if (!empty($stream_amazon_id)): ?>
                <a href="https://music.amazon.com/albums/<?php echo htmlspecialchars($stream_amazon_id); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-info">
                    <i class="fa-brands fa-amazon me-2"></i>Amazon Music
                </a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-info disabled"><i class="fa-brands fa-amazon me-2"></i>Amazon Music</a>
            <?php endif; ?>

            <?php if (!empty($stream_youtube_id)): ?>
                <a href="https://music.youtube.com/playlist?list=<?php echo htmlspecialchars($stream_youtube_id); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger">
                    <i class="fa-brands fa-youtube me-2"></i>YouTube Music
                </a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-danger disabled"><i class="fa-brands fa-youtube me-2"></i>YouTube Music</a>
            <?php endif; ?>
        </div>
    </div>
</div>

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
            $base_name = $track['fileName'];
            $version_string = "?v=" . time(); // Force fresh load for audio/lyrics
            
            // Build URLs
            $wav_url = $base_web_path . '/wav/' . $base_name . '.wav'; 
            $mp3_url = $base_web_path . '/mp3/' . $base_name . '.mp3' . $version_string;
            $ogg_url = $base_web_path . '/ogg/' . $base_name . '.ogg' . $version_string;
            $lyrics_url = $base_web_path . '/lyrics/' . $base_name . '.md' . $version_string;

            // Extract Lore Data (Safe fallbacks)
            $legacy_tier = isset($track['legacyTier']) ? $track['legacyTier'] : null;
            $lore_note = isset($track['loreNote']) ? $track['loreNote'] : '';

            // --- B. Build JS Playlist Item ---
            $js_playlist[] = [
                'title' => $track['title'],
                'artist' => $album_data['albumArtist'],
                'album' => $album_data['albumName'],
                'src' => $ogg_url, 
                'artwork' => $album_art_url,
                'lyrics' => $lyrics_url,
                'legacyTier' => $legacy_tier,
                'loreNote' => $lore_note
            ];
        ?>
        
        <div class="list-group-item bg-transparent border-secondary text-muted py-3 track-row" id="track-row-<?php echo $index; ?>">
            <div class="row align-items-center">
                
                <div class="col-md-7 mb-2 mb-md-0">
                    <div class="d-flex align-items-center flex-wrap">
                        <span class="text-secondary fw-bold me-3" style="width: 25px;"><?php echo $track['track']; ?>.</span>
                        <div>
                            <strong class="text-body d-block fs-5 d-inline-block me-2"><?php echo htmlspecialchars($track['title']); ?></strong>
                            
                            <?php 
                            // Render WCAG-Compliant Lore Badge in the HTML list
                            if ($legacy_tier): 
                                $badge_class = 'bg-secondary text-white';
                                if ($legacy_tier === 'Chart Smash') $badge_class = 'bg-success-subtle text-success-emphasis';
                                if ($legacy_tier === 'Fan Anthem') $badge_class = 'bg-warning text-dark';
                                if ($legacy_tier === 'Deep Cut') $badge_class = 'bg-info text-dark';
                                if ($legacy_tier === 'Vault Track') $badge_class = 'bg-dark text-warning border border-warning';
                                if ($legacy_tier === 'The Dud' || $legacy_tier === 'Studio Filler') $badge_class = 'bg-danger text-white';
                                
                                $safe_lore_attr = htmlspecialchars($lore_note, ENT_QUOTES);
                                $wcag_attrs = $lore_note 
                                    ? 'title="' . $safe_lore_attr . '" aria-label="Legacy Tier: ' . htmlspecialchars($legacy_tier) . '. Lore Note: ' . $safe_lore_attr . '" tabindex="0"'
                                    : 'aria-label="Legacy Tier: ' . htmlspecialchars($legacy_tier) . '" tabindex="0"';
                            ?>
                                <span class="badge <?php echo $badge_class; ?> align-text-bottom" style="font-size: 0.55em; letter-spacing: 0.5px; cursor: help;" <?php echo $wcag_attrs; ?>>
                                    <span aria-hidden="true"><?php echo strtoupper($legacy_tier); ?></span>
                                </span>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 text-end mt-2 mt-md-0">
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
//  SECTION 4: PLAYER HANDOFF (TURBO EDITION)
// ==============================================================================
?>

<script>
    (function() {
        const newPlaylist = <?php echo json_encode($js_playlist); ?>;
        
        // 1. Update the Global Variable immediately
        window.STARDUST_PLAYLIST = newPlaylist;

        // 2. Dispatch Event for the Stardust Engine
        // This tells the persistent player: "Hey, I have new songs for you."
        const event = new CustomEvent('stardust:playlist-update', { 
            detail: { playlist: newPlaylist } 
        });
        document.dispatchEvent(event);
        
        console.log("Stardust: Playlist beam initiated.", newPlaylist.length + " tracks with Lore Data.");
    })();
</script>