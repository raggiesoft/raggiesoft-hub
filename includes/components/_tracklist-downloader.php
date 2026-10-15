<?php
/**
 * COMPONENT: _tracklist-downloader.php
 * VERSION: 11.0 (The Listening Room Gateway & OS-Aware DSP Routing)
 *
 * LICENSE:
 * The architecture and code of this file are licensed under the MIT License.
 * Copyright (c) 2026 Michael P. Ragsdale / RaggieSoft
 * The underlying narrative, lore, and music metadata delivered by this component 
 * are licensed under Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0),
 * except where commercial distribution exemptions apply (e.g., DSP streaming links).
 */

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Universal Album Metadata & Listening Room Gateway
 * Purpose: Dynamically renders album historical metadata, dual-timeline badges, DSP streaming buttons,
 *          and direct routing to The Listening Room (`https://music.raggiesoft.com`) while preserving
 *          the surrounding Studio Archives & Liner Notes lore on each Hub album page.
 * 
 * Strategy & Implementation:
 * - Fetches `tracks.json` and `album.json` from the CDN path (derived from `$album_path_web`).
 * - Employs robust fallback logic to translate `schema.org` native types into human-friendly strings 
 *   (`$release_map`, `$production_map`).
 * - Resolves DSP streaming links by matching the current album against the artist's `albums.json`.
 * - Maps legacy Hub artist/album slugs to their canonical `music.raggiesoft.com` routes so that all
 *   music listening, tracklists, and interactive lyrics are centralized on `music.raggiesoft.com`.
 * - Retires legacy 128kbps MP3 direct playback/downloads in favor of The Listening Room and official DSPs.
 */

// Resolve CDN endpoint dynamically using the injected $album_path_web variable
$base_web_path = $cdnBaseUrl . $album_path_web;
$tracks_json_url = $base_web_path . '/tracks.json?v=' . time();
$album_json_url = $base_web_path . '/album.json?v=' . time();

$tracks_json_content = @file_get_contents($tracks_json_url);
$album_json_content = @file_get_contents($album_json_url);

// Derive raw artist and album slugs from $album_path_web even if CDN JSON is migrating
$raw_album_slug = basename($album_path_web);
$raw_artist_slug = basename(dirname($album_path_web));

// Map legacy Hub artist directory names to canonical music.raggiesoft.com artist slugs
$artist_slug_map = [
    'stardust-engine'    => 'the-stardust-engine',
    'mirage'             => 'the-paper-wall',
    'the-winter-palace'  => 'the-arctic-symphony-project',
    'firelight'          => 'mana-canvas',
    'crystal-canvas'     => 'mana-canvas'
];
$canonical_artist_slug = $artist_slug_map[$raw_artist_slug] ?? $raw_artist_slug;

// Map legacy Hub album directory names to canonical music.raggiesoft.com album slugs
$album_slug_map = [
    '2001-static-and-silence'        => '2001-static-and-silence-book-1',
    'tales-of-the-solstice'          => '2007-tales-from-the-solstice',
    '2007-tales-of-the-solstace'     => '2007-tales-from-the-solstice',
    '1995-ad-astra-single'           => '1996-ad-astra-single',
    '1987-aethel-theatrical'         => '1992-runebreaker-ost',
    '2017-aethel-leviathan-cut'      => '1993-chronicles-of-the-prism',
    '2025-silver-gauntlet-of-aethel' => '1993-chronicles-of-the-prism'
];
$canonical_album_slug = $album_slug_map[$raw_album_slug] ?? $raw_album_slug;

$listening_room_album_url = "https://music.raggiesoft.com/{$canonical_artist_slug}/{$canonical_album_slug}";
$listening_room_artist_url = "https://music.raggiesoft.com/{$canonical_artist_slug}";

// If the legacy CDN path was renamed to a canonical artist/album path, attempt fallback fetch from canonical CDN path
if ($tracks_json_content === false || $album_json_content === false) {
    $canonical_web_path = $cdnBaseUrl . "/engine-room-records/artists/{$canonical_artist_slug}/{$canonical_album_slug}";
    $tracks_json_content = @file_get_contents($canonical_web_path . '/tracks.json?v=' . time());
    $album_json_content = @file_get_contents($canonical_web_path . '/album.json?v=' . time());
}

$tracks_data = $tracks_json_content ? json_decode($tracks_json_content, true) : [];
$album_data = $album_json_content ? json_decode($album_json_content, true) : [];
$raw_tracks = $tracks_data['tracks'] ?? [];
$track_count = is_array($raw_tracks) ? count($raw_tracks) : 0;

// --- TIMELINE LOGIC (SCHEMA.ORG INTEGRATION) ---
$narrative_date = !empty($album_data['temporalCoverage']) ? $album_data['temporalCoverage'] : '1900-01-01';
$real_release_date = !empty($album_data['datePublished']) ? $album_data['datePublished'] : 'TBA';

$narrative_year = substr($narrative_date, 0, 4);
$album_name = isset($album_data['name']) ? $album_data['name'] : 'Archival Release';

// Evaluate Schema.org 'byArtist' property; default to the Label entity if artist metadata is omitted
$display_artist = !empty($album_data['byArtist']['name']) ? $album_data['byArtist']['name'] : 'Engine Room Records';

// --- METADATA TRANSLATION (SCHEMA.ORG INTEGRATION) ---
$raw_release_type = isset($album_data['albumReleaseType']) ? basename($album_data['albumReleaseType']) : 'AlbumRelease';
$raw_production_type = isset($album_data['albumProductionType']) ? basename($album_data['albumProductionType']) : 'StudioAlbum';
$album_upc = !empty($album_data['gtin12']) ? $album_data['gtin12'] : (!empty($album_data['identifier']) ? $album_data['identifier'] : null);

$release_map = [
    'EPRelease'        => 'EP',
    'SingleRelease'    => 'Single',
    'BroadcastRelease' => 'Broadcast',
    'AlbumRelease'     => 'Full Length'
];

$production_map = [
    'LiveAlbum'        => 'Live Album',
    'CompilationAlbum' => 'Compilation',
    'SoundtrackAlbum'  => 'Soundtrack',
    'MixtapeAlbum'     => 'Mixtape',
    'RemixAlbum'       => 'Remix Album',
    'StudioAlbum'      => 'Studio Album'
];

$friendly_release = isset($release_map[$raw_release_type]) ? $release_map[$raw_release_type] : 'Full Length';
$friendly_production = isset($production_map[$raw_production_type]) ? $production_map[$raw_production_type] : 'Studio Album';

// --- DSP STREAMING IDS & STORE LINKS (SINGLE SOURCE OF TRUTH) ---
$stream_spotify_id    = '';
$stream_apple_id      = '';
$stream_amazon_id     = '';
$stream_youtube_id    = '';
$store_standard_url   = '';
$store_audiophile_url = '';
$dsp_exempt           = false;
$dsp_notice           = '';

// Query the canonical artist's albums.json for DSP IDs and storefront links
$albums_master_url = $cdnBaseUrl . "/engine-room-records/artists/{$canonical_artist_slug}/albums.json?v=" . time();
$albums_master_content = @file_get_contents($albums_master_url);

if ($albums_master_content !== false) {
    $master_data = json_decode($albums_master_content, true);
    if (is_array($master_data)) {
        foreach ($master_data as $era) {
            if (!empty($era['albums'])) {
                foreach ($era['albums'] as $master_album) {
                    $check_slug = isset($master_album['folder']) ? $master_album['folder'] : basename($master_album['url'] ?? '');
                    if ($check_slug === $canonical_album_slug || $check_slug === $raw_album_slug || ($master_album['title'] ?? '') === $album_name) {
                        $stream_spotify_id    = $master_album['spotifyId'] ?? '';
                        $stream_apple_id      = $master_album['appleId'] ?? '';
                        $stream_amazon_id     = $master_album['amazonId'] ?? '';
                        $stream_youtube_id    = $master_album['youtubeId'] ?? '';
                        $store_standard_url   = $master_album['storeStandardUrl'] ?? '';
                        $store_audiophile_url = $master_album['storeAudiophileUrl'] ?? '';
                        $dsp_exempt           = $master_album['dspExempt'] ?? false;
                        $dsp_notice           = $master_album['dspNotice'] ?? 'This release is intentionally withheld from commercial streaming algorithms.';
                        break 2;
                    }
                }
            }
        }
    }
}

$has_active_streams = !empty($stream_spotify_id) || !empty($stream_apple_id) || !empty($stream_amazon_id) || !empty($stream_youtube_id);
?>

<?php if ($album_json_content !== false): ?>
<script type="application/ld+json">
    <?php echo $album_json_content; ?>
</script>
<?php endif; ?>

<?php if (!empty($album_data)): ?>
<wa-card class="mb-4 w-100">
    <div class="p-3">
        <div class="row g-2 align-items-center border-bottom border-secondary-subtle pb-3 mb-3">
            <div class="col-12 col-md-6">
                <div class="text-body fs-6 mb-2">
                    <i class="fa-solid fa-timeline me-2 text-info"></i> <strong>Narrative Era:</strong> <wa-badge variant="brand" class="ms-1"><?php echo htmlspecialchars($narrative_year); ?></wa-badge>
                </div>
                <div class="text-body fs-6">
                    <i class="fa-solid fa-record-vinyl me-2 text-warning"></i> <strong>Format:</strong> <wa-badge variant="warning" appearance="outline" class="ms-1"><?php echo htmlspecialchars($friendly_production); ?></wa-badge>
                </div>
            </div>
            
            <div class="col-12 col-md-6 text-md-end">
                <div class="text-body fs-6 mb-2">
                    <i class="fa-solid fa-calendar-check me-2 text-success"></i> <strong>DSP Release:</strong> <wa-badge variant="success" class="ms-1"><?php echo htmlspecialchars($real_release_date); ?></wa-badge>
                </div>
                <div class="text-body fs-6">
                    <i class="fa-solid fa-music me-2 text-primary"></i> <strong>Length:</strong> <wa-badge variant="primary" class="ms-1 me-2"><?php echo htmlspecialchars($friendly_release); ?></wa-badge>
                    <?php if ($album_upc): ?>
                        <wa-badge variant="neutral" title="Universal Product Code">UPC: <?php echo htmlspecialchars($album_upc); ?></wa-badge>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <?php if (!empty($album_data['description'])): ?>
        <div class="mt-3 mb-2 px-3 py-2 border-start border-3 border-primary bg-body rounded-end">
            <p class="mb-0 fst-italic text-body-secondary small">
                <?php echo htmlspecialchars($album_data['description']); ?>
            </p>
        </div>
        <?php endif; ?>

        <div class="d-flex align-items-start mt-3">
            <i class="fa-solid fa-circle-info text-secondary mt-1 me-3 fs-5"></i>
            <p class="small text-body-secondary mb-0 lh-sm">
                <strong>ARCHIVIST NOTE:</strong> <em><?php echo htmlspecialchars($display_artist); ?></em> is a narrative-driven musical universe. The <strong>Narrative Era</strong> denotes when the album was recorded within the fictional history of the band. The <strong>DSP Release</strong> reflects the legal copyright date when the audio files were officially pressed and distributed to global streaming platforms.
            </p>
        </div>
    </div>
</wa-card>
<?php endif; ?>

<!-- THE LISTENING ROOM & GLOBAL STREAMING GATEWAY CARD -->
<wa-card class="mb-5 w-100 border border-primary">
    <div slot="header" class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h5 class="mb-0 text-uppercase fw-bold">
            <i class="fa-duotone fa-headphones-simple me-2 text-primary"></i>The Listening Room &amp; Global Streaming
        </h5>
        <?php if ($track_count > 0): ?>
            <wa-badge variant="brand" class="font-monospace"><?php echo (int)$track_count; ?> Tracks + Lyrics</wa-badge>
        <?php endif; ?>
    </div>

    <div class="p-2">
        <p class="text-body-secondary mb-4">
            Complete tracklists, interactive synchronized lyrics, Legacy Tier annotations, and official streaming links for <strong><?php echo htmlspecialchars($album_name); ?></strong> are hosted in <strong>The Listening Room</strong> (<code>music.raggiesoft.com</code>).
        </p>

        <?php if ($dsp_exempt): ?>
            <wa-alert variant="warning" open class="mb-4">
                <i class="fa-solid fa-triangle-exclamation me-2"></i><strong>VAULT EXCLUSIVE:</strong> <?php echo htmlspecialchars($dsp_notice); ?>
            </wa-alert>
        <?php endif; ?>

        <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="<?php echo htmlspecialchars($listening_room_album_url); ?>" class="btn btn-primary btn-lg rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center">
                <i class="fa-duotone fa-turntable me-2"></i>Explore Tracklist &amp; Lyrics in The Listening Room
                <i class="fa-solid fa-arrow-up-right-from-square ms-2 small opacity-75"></i>
            </a>

            <?php if (!$dsp_exempt && $has_active_streams): ?>
                <div class="d-inline-block">
                    <?php
                    $storeProps = [
                        'type'    => 'album',
                        'size'    => 'large',
                        'spotify' => $stream_spotify_id,
                        'apple'   => $stream_apple_id,
                        'amazon'  => $stream_amazon_id,
                        'youtube' => $stream_youtube_id
                    ];
                    include ROOT_PATH . '/includes/components/store-button.php';
                    ?>
                </div>
            <?php endif; ?>

            <a href="<?php echo htmlspecialchars($listening_room_artist_url); ?>" class="btn btn-outline-secondary rounded-pill px-4 fw-bold d-inline-flex align-items-center">
                <i class="fa-duotone fa-compact-disc me-2"></i>Full Artist Catalog
            </a>
        </div>

        <?php if (!empty($store_standard_url) || !empty($store_audiophile_url)): ?>
            <hr class="border-secondary opacity-25 my-4">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                <span class="small text-body-secondary">
                    <i class="fa-duotone fa-vault me-2 text-warning"></i><strong>Digital Studio Masters:</strong> Own the uncompromised archival payloads from the Engine Room Storefront.
                </span>
                <div class="d-flex gap-2 flex-wrap">
                    <?php if (!empty($store_standard_url)): ?>
                        <wa-button href="<?php echo htmlspecialchars($store_standard_url); ?>" variant="brand" appearance="outline" size="small" target="_blank">
                            <i slot="start" class="fa-solid fa-compact-disc me-2"></i>Standard Archive (V0 MP3/OGG)
                        </wa-button>
                    <?php endif; ?>
                    <?php if (!empty($store_audiophile_url)): ?>
                        <wa-button href="<?php echo htmlspecialchars($store_audiophile_url); ?>" variant="warning" appearance="outline" size="small" target="_blank">
                            <i slot="start" class="fa-solid fa-waveform-lines me-2"></i>Audiophile Vault (FLAC/WAV)
                        </wa-button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</wa-card>