<?php
/**
 * COMPONENT: _tracklist-downloader.php
 * VERSION: 9.6 (Radio Edit Fix & Dual-Date Edition)
 *
 * LICENSE:
 * The architecture and code of this file are licensed under the MIT License.
 * Copyright (c) 2026 Michael P. Ragsdale / RaggieSoft
 * * The underlying narrative, lore, and music tracks delivered by this component 
 * are licensed under Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0),
 * except where commercial distribution exemptions apply (e.g., DSP streaming links).
 */

// ==============================================================================
//  FEATURE FLAG: THE VAULT PAYWALL
// ==============================================================================
$vault_active = false; 
$vault_under_construction = true; // Set to TRUE to hide ONLY the massive master files temporarily
// ==============================================================================

$base_web_path = 'https://assets.raggiesoft.com' . $album_path_web;
$tracks_json_url = $base_web_path . '/tracks.json?v=' . time();
$album_json_url = $base_web_path . '/album.json?v=' . time();

$tracks_json_content = @file_get_contents($tracks_json_url);
$album_json_content = @file_get_contents($album_json_url);

if ($tracks_json_content === false || $album_json_content === false) {
    echo '<div class="alert alert-danger"><strong>Error:</strong> Tracklist data not found on CDN.</div>';
    return;
}

$tracks_data = json_decode($tracks_json_content, true);
$album_data = json_decode($album_json_content, true);
$raw_tracks = $tracks_data['tracks'];

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

// --- TIMELINE LOGIC ---
$narrative_date = isset($album_data['narrativeReleaseDate']) ? $album_data['narrativeReleaseDate'] : '1900-01-01';
$real_release_date = isset($album_data['realReleaseDate']) ? $album_data['realReleaseDate'] : date('Y-m-d');

$narrative_year = substr($narrative_date, 0, 4);
// Use regex or string extraction if the real release date isn't standard YYYY-MM-DD format
// Since we are formatting it as "March 14, 2026" in the JSON, we extract the last 4 characters for the year.
$real_release_year = substr(trim($real_release_date), -4);

$archive_base_name = get_archive_name($album_data['albumName'], $narrative_year);
// ----------------------

$album_art_url = $base_web_path . "/album-art.jpg?v=" . time();
$js_playlist = []; 

$stream_spotify_id = isset($id_spotify) ? $id_spotify : '';
$stream_apple_id   = isset($id_apple) ? $id_apple : '';
$stream_amazon_id  = isset($id_amazon) ? $id_amazon : '';
$stream_youtube_id = isset($id_youtube) ? $id_youtube : '';

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
                <a href="https://open.spotify.com/album/<?php echo htmlspecialchars($stream_spotify_id); ?>" target="_blank" class="btn btn-outline-success"><i class="fa-brands fa-spotify me-2"></i>Spotify</a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-success disabled"><i class="fa-brands fa-spotify me-2"></i>Spotify</a>
            <?php endif; ?>
            
            <?php if (!empty($stream_apple_id)): ?>
                <a href="https://music.apple.com/us/album/<?php echo htmlspecialchars($stream_apple_id); ?>" target="_blank" class="btn btn-outline-danger"><i class="fa-brands fa-apple me-2"></i>Apple Music</a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-danger disabled"><i class="fa-brands fa-apple me-2"></i>Apple Music</a>
            <?php endif; ?>

            <?php if (!empty($stream_amazon_id)): ?>
                <a href="https://music.amazon.com/albums/<?php echo htmlspecialchars($stream_amazon_id); ?>" target="_blank" class="btn btn-outline-info"><i class="fa-brands fa-amazon me-2"></i>Amazon Music</a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-info disabled"><i class="fa-brands fa-amazon me-2"></i>Amazon Music</a>
            <?php endif; ?>

            <?php if (!empty($stream_youtube_id)): ?>
                <a href="https://music.youtube.com/playlist?list=<?php echo htmlspecialchars($stream_youtube_id); ?>" target="_blank" class="btn btn-outline-danger"><i class="fa-brands fa-youtube me-2"></i>YouTube Music</a>
            <?php else: ?>
                <a href="#" class="btn btn-outline-danger disabled"><i class="fa-brands fa-youtube me-2"></i>YouTube Music</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="card border-secondary mb-5 bg-transparent">
    <div class="card-header bg-body-tertiary border-secondary d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-uppercase"><i class="fa-duotone fa-vault me-2"></i>Premium Archives</h5>
        <div>
            <span class="badge bg-secondary me-2" title="Creative Commons Attribution-ShareAlike 4.0 International">CC BY-SA 4.0</span>
            <?php if ($vault_under_construction): ?>
                <span class="badge bg-info text-dark"><i class="fa-solid fa-person-digging me-1"></i> Syncing Master Tapes</span>
            <?php elseif ($vault_active): ?>
                <span class="badge bg-warning text-dark"><i class="fa-solid fa-lock me-1"></i> VIP Access</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">
        <?php if ($vault_under_construction): ?>
            <p class="text-muted small mb-0">We are currently syncing the high-fidelity master files (WAV, FLAC, V0 MP3) to the Engine Room Vault. They will be available here soon!</p>
        <?php else: ?>
            <?php if ($vault_active): ?>
                <p class="text-muted small mb-3">Download the pristine master tapes directly from the Engine Room Vault.</p>
            <?php endif; ?>
            <div class="d-flex gap-2 flex-wrap">
                <?php
                    if ($vault_active) {
                        $arc_mp3 = "/engine-room/api/download.php?album=" . $archive_base_name . "&format=zip-mp3";
                        $arc_ogg = "/engine-room/api/download.php?album=" . $archive_base_name . "&format=zip-ogg";
                        $arc_wav = "/engine-room/api/download.php?album=" . $archive_base_name . "&format=zip-wav";
                    } else {
                        $arc_mp3 = $base_web_path . '/vault/archives/' . $archive_base_name . '-mp3.zip';
                        $arc_ogg = $base_web_path . '/vault/archives/' . $archive_base_name . '-ogg.zip';
                        $arc_wav = $base_web_path . '/vault/archives/' . $archive_base_name . '-wav.7z';
                    }
                ?>
                <a href="<?php echo $arc_mp3; ?>" class="btn btn-outline-primary license-gate"><i class="fa-solid fa-file-zipper me-2"></i>MP3 (ZIP)</a>
                <a href="<?php echo $arc_ogg; ?>" class="btn btn-outline-success license-gate"><i class="fa-solid fa-file-zipper me-2"></i>OGG (ZIP)</a>
                <a href="<?php echo $arc_wav; ?>" class="btn btn-outline-warning license-gate"><i class="fa-solid fa-file-zipper me-2"></i>WAV (7z)</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<h3 class="h4 fw-bold text-uppercase text-muted mb-3">
    <i class="fa-duotone fa-list-music me-2"></i>Tracklist & Lyrics
</h3>

<div class="card bg-dark border-secondary mb-5 shadow-sm">
    <div class="card-body p-3">
        <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom border-secondary pb-2 mb-2">
            <div class="text-light fs-6">
                <i class="fa-solid fa-timeline me-2 text-info"></i> <strong>Narrative Era:</strong> <span class="badge bg-info text-dark ms-1" style="font-size: 0.9em;"><?php echo htmlspecialchars($narrative_year); ?></span>
            </div>
            <div class="text-light fs-6 mt-2 mt-md-0">
                <i class="fa-solid fa-calendar-check me-2 text-success"></i> <strong>DSP / Real-World Release:</strong> <span class="badge bg-success ms-1" style="font-size: 0.9em;"><?php echo htmlspecialchars($real_release_date); ?></span>
            </div>
        </div>
        <div class="d-flex align-items-start mt-3">
            <i class="fa-solid fa-circle-info text-secondary mt-1 me-3 fs-5"></i>
            <p class="small text-muted mb-0 lh-sm">
                <strong>ARCHIVIST NOTE:</strong> <em>The Stardust Engine</em> is a narrative-driven musical universe. The <strong>Narrative Era</strong> denotes when the album was recorded by Ryan and Cassidy within the fictional history of the band. The <strong>DSP / Real-World Release</strong> reflects the legal copyright date when the audio files were officially pressed and distributed to global streaming platforms.
            </p>
        </div>
    </div>
</div>

<div class="list-group list-group-flush bg-transparent mb-5">
    <?php foreach ($raw_tracks as $index => $track): ?>
        <?php
            $base_name = $track['fileName'];
            $version_string = "?v=" . time(); 
            
            $lyrics_url = $base_web_path . '/lyrics/' . $base_name . '.md' . $version_string;

            // --- THE RADIO EDIT DOWNLOAD LINK ---
            $dl_web_mp3 = $base_web_path . '/web-mp3/' . $base_name . '.mp3' . $version_string;

            // URL Routing based on Feature Flag
            if ($vault_active) {
                $player_src = $dl_web_mp3;
                $gateway_base = "/engine-room/api/download.php?album=" . $archive_base_name . "&track=" . $base_name;
                $dl_mp3 = $gateway_base . "&format=mp3";
                $dl_ogg = $gateway_base . "&format=ogg";
                $dl_wav = $gateway_base . "&format=wav";
            } else {
                $player_src = $dl_web_mp3;
                $dl_mp3 = $base_web_path . '/vault/mp3/' . $base_name . '.mp3' . $version_string;
                $dl_ogg = $base_web_path . '/vault/ogg/' . $base_name . '.ogg' . $version_string;
                $dl_wav = $base_web_path . '/vault/wav/' . $base_name . '.wav'; // Fixed to match Harper routing if needed
            }

            $legacy_tier = isset($track['legacyTier']) ? $track['legacyTier'] : null;
            $lore_note = isset($track['loreNote']) ? $track['loreNote'] : '';

            $js_playlist[] = [
                'title' => $track['title'],
                'artist' => $album_data['albumArtist'],
                'album' => $album_data['albumName'],
                'src' => $player_src,
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
                            if ($legacy_tier): 
                                $badge_class = 'bg-secondary-subtle text-secondary-emphasis'; 
                                if ($legacy_tier === 'Chart Smash') $badge_class = 'bg-success-subtle text-success-emphasis';
                                if ($legacy_tier === 'Fan Anthem') $badge_class = 'bg-warning-subtle text-warning-emphasis';
                                if ($legacy_tier === 'Deep Cut') $badge_class = 'bg-info-subtle text-info-emphasis';
                                if ($legacy_tier === 'The Dud' || $legacy_tier === 'Studio Filler') $badge_class = 'bg-danger-subtle text-danger-emphasis';
                                if ($legacy_tier === 'Vault Track') $badge_class = 'bg-dark text-warning border border-warning';
                                
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
                        <button type="button" class="btn btn-sm btn-primary btn-play-index" data-index="<?php echo $index; ?>"><i class="fa-duotone fa-play me-2"></i>Play</button>
                        <button type="button" class="btn btn-sm btn-outline-info btn-view-lyrics" data-title="<?php echo htmlspecialchars($track['title']); ?>" data-url="<?php echo $lyrics_url; ?>"><i class="fa-duotone fa-book-open me-2"></i>Lyrics</button>
                        
                        <div class="btn-group" role="group">
                            <?php if ($vault_active): ?>
                                <button type="button" class="btn btn-sm btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" title="Vault Access Required"><i class="fa-solid fa-lock"></i></button>
                            <?php else: ?>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-duotone fa-download"></i></button>
                            <?php endif; ?>
                            
                            <ul class="dropdown-menu dropdown-menu-end bg-dark border-secondary shadow">
                                <li><h6 class="dropdown-header text-secondary"><i class="fa-solid fa-broadcast-tower me-1"></i> Public Stream</h6></li>
                                <li><a class="dropdown-item text-light license-gate" download href="<?php echo $dl_web_mp3; ?>">MP3 (128kbps)</a></li>
                                
                                <?php if (!$vault_under_construction): ?>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><h6 class="dropdown-header <?php echo $vault_active ? 'text-warning' : 'text-white'; ?>"><i class="fa-solid <?php echo $vault_active ? 'fa-vault' : 'fa-compact-disc'; ?> me-1"></i> <?php echo $vault_active ? 'Premium Vault' : 'Master Tapes'; ?></h6></li>
                                    <li><a class="dropdown-item text-light license-gate" href="<?php echo $dl_mp3; ?>">MP3 <?php echo $vault_active ? '(V0)' : '(V0)'; ?></a></li>
                                    <li><a class="dropdown-item text-light license-gate" href="<?php echo $dl_ogg; ?>">OGG <?php echo $vault_active ? '(Q9)' : '(Q9)'; ?></a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-light license-gate" href="<?php echo $dl_wav; ?>">WAV (Lossless)</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    (function() {
        const newPlaylist = <?php echo json_encode($js_playlist); ?>;
        window.STARDUST_PLAYLIST = newPlaylist;
        const event = new CustomEvent('stardust:playlist-update', { detail: { playlist: newPlaylist } });
        document.dispatchEvent(event);
    })();
</script>