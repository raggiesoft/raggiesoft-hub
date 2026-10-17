<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/discography/overview.php
 * 
 * 1. Architecture Context:
 *    - This is the master discography routing page for The Stardust Engine.
 *    - Dynamically builds a Schema.org `MusicGroup` and `MusicAlbum` JSON-LD index 
 *      for SEO optimization.
 * 
 * 2. Data Processing:
 *    - Fetches the band-specific `albums.json` manifest from the CDN.
 *    - Automatically parses eras and albums, strategically ignoring "CANCELED" 
 *      (lore-seized/evidence) records from the Schema output.
 *    - Applies visual flags for `dspExempt` (Vault Exclusives).
 * 
 * 3. Component Architecture:
 *    - Renders responsive Bootstrap 5 grids utilizing custom `glass-card` styling.
 *    - Dynamically includes the DSP `store-button.php` component for valid albums.
 * 
 * 4. Maintenance Rule:
 *    - DO NOT alter the HTML DOM, custom UI classes, or the JSON parsing logic.
 *    - Ensure Schema.org strictly omits "CANCELED" evidence records.
 * ============================================================================
 */
// pages/discography/overview.php
// v4.1 - Added Fourthwall Store Routing, DSP Exemption Logic & Schema.org Updates

$pageTitle = "Discography Overview - The Stardust Engine";
$bandName = "The Stardust Engine";
$baseUrl = "https://raggiesoft.com"; // Adjust to your actual production domain

// Fetch the albums.json file directly from the CDN (with cache busting so new albums appear immediately)
$jsonUrl = $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/albums.json?v=' . time();
$jsonData = @file_get_contents($jsonUrl);

$discographyLibrary = [];
$schemaAlbums = [];

// Decode the JSON into an associative array
if ($jsonData !== false) {
    $discographyLibrary = json_decode($jsonData, true);
    
    // Build the Schema.org array dynamically
    if (is_array($discographyLibrary)) {
        foreach ($discographyLibrary as $eraData) {
            if (empty($eraData['albums'])) continue;
            
            foreach ($eraData['albums'] as $album) {
                // Skip the 1992 seized evidence from the official schema index
                $isSeized = (isset($album['extra']) && str_contains($album['extra'], 'CANCELED'));
                if ($isSeized) continue;

                $schemaAlbums[] = [
                    "@type" => "MusicAlbum",
                    "name" => $album['title'],
                    "datePublished" => (string)$album['year'],
                    "url" => $baseUrl . $album['url']
                ];
            }
        }
    }
}

// Construct the final MusicGroup Schema
$musicGroupSchema = [
    "@context" => "https://schema.org",
    "@type" => "MusicGroup",
    "name" => $bandName,
    "album" => $schemaAlbums
];
?>

<script type="application/ld+json">
<?php echo json_encode($musicGroupSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            Discography
        </h1>
        <p class="lead text-secondary mx-auto mb-3" style="max-width: 800px;">
            The complete official history, from the studio-mandated pop of the 80s 
            to the independent rock anthems of their rebirth.
        </p>
        <wa-button href="https://music.raggiesoft.com/the-stardust-engine" target="_blank" rel="noopener" variant="brand" pill class="px-4 fw-bold shadow-sm">
            <i slot="start" class="fa-duotone fa-headphones"></i>Stream &amp; Read Lyrics in The Listening Room
        </wa-button>
    </div>

    <?php foreach ($discographyLibrary as $eraKey => $eraData): ?>
        
        <?php if (empty($eraData['albums'])) continue; ?>

        <section id="<?php echo htmlspecialchars($eraKey); ?>" class="mb-5">
            
            <h2 class="display-6 fw-bold text-secondary text-uppercase border-bottom border-secondary pb-2 mb-3">
                <?php echo htmlspecialchars($eraData['heading']); ?>
            </h2>
            
            <div class="row mb-4">
                <div class="col-lg-8">
                    <p class="fs-5 text-body-secondary">
                        <?php echo htmlspecialchars($eraData['description']); ?>
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($eraData['albums'] as $album): 
                    // Metadata Extraction
                    $isSeized = (isset($album['extra']) && str_contains($album['extra'], 'CANCELED'));
                    $dspExempt = $album['dspExempt'] ?? false;
                    $storeStandardUrl = $album['storeStandardUrl'] ?? '';
                    $storeAudiophileUrl = $album['storeAudiophileUrl'] ?? '';
                    $albumFolder = $album['folder'] ?? (!empty($album['url']) ? basename($album['url']) : '');
                    $listeningRoomUrl = !empty($albumFolder)
                        ? "https://music.raggiesoft.com/the-stardust-engine/{$albumFolder}"
                        : "https://music.raggiesoft.com/the-stardust-engine";
                    $hasHubLore = !empty($album['url']) && file_exists(ROOT_PATH . '/pages' . $album['url'] . '.php');
                ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <wa-card class="h-100 bg-transparent border-secondary glass-card shadow-sm overflow-hidden d-flex flex-column">
                            <div slot="media" class="position-relative">
                                
                                <?php if ($isSeized): ?>
                                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                                         style="z-index: 2; background: rgba(0,0,0,0.5); pointer-events: none;">
                                        <div class="bg-danger text-dark fw-bold h2 text-uppercase px-3 py-1" 
                                             style="transform: rotate(-15deg); border: 3px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 10px #000;">
                                            Evidence
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($dspExempt && !$isSeized): ?>
                                    <div class="position-absolute top-0 end-0 m-2" style="z-index: 3;">
                                        <wa-badge variant="warning" class="shadow-sm"><i class="fa-solid fa-vault me-1"></i> Vault Exclusive</wa-badge>
                                    </div>
                                <?php endif; ?>

                                <img src="<?php echo htmlspecialchars($album['img'] ?? $cdnBaseUrl . '/common/images/defaults/vinyl-placeholder.jpg'); ?>" 
                                     class="w-100 border-bottom border-secondary" 
                                     alt="<?php echo htmlspecialchars($album['title']); ?>"
                                     style="aspect-ratio: 1/1; object-fit: cover; <?php echo $isSeized ? 'filter: blur(5px) grayscale(100%);' : ''; ?>">
                                
                            </div>

                            <div class="d-flex flex-column h-100">
                                <h5 class="text-body fw-bold mb-1">
                                    <?php echo htmlspecialchars($album['title']); ?>
                                </h5>
                                <p class="small text-body-secondary mb-3">
                                    Released: <?php echo htmlspecialchars($album['year']); ?>
                                </p>
                                
                                <div class="mt-auto d-flex flex-column gap-2">
                                    <?php if (!$isSeized): ?>
                                        <wa-button href="<?php echo htmlspecialchars($listeningRoomUrl); ?>" target="_blank" rel="noopener" variant="brand" size="small" class="w-100">
                                            <i slot="start" class="fa-duotone fa-headphones"></i>Listening Room &amp; Lyrics
                                        </wa-button>
                                    <?php endif; ?>

                                    <?php if ($hasHubLore): ?>
                                        <wa-button href="<?php echo htmlspecialchars($album['url']); ?>" variant="<?php echo $isSeized ? 'danger' : 'neutral'; ?>" appearance="outlined" size="small" class="w-100 mb-1">
                                            <?php if ($isSeized): ?>
                                                <i slot="start" class="fa-duotone fa-gavel"></i>View Case File
                                            <?php else: ?>
                                                <i slot="start" class="fa-duotone fa-book-open-cover"></i>Studio Lore &amp; Liner Notes
                                            <?php endif; ?>
                                        </wa-button>
                                    <?php endif; ?>

                                    <?php if ($storeStandardUrl || $storeAudiophileUrl): ?>
                                        <div class="d-flex gap-2 w-100 mb-1">
                                            <?php if ($storeStandardUrl): ?>
                                                <wa-button href="<?php echo htmlspecialchars($storeStandardUrl); ?>" target="_blank" variant="brand" appearance="filled-outlined" size="small" class="flex-grow-1" title="Standard Digital Archive">
                                                    <i slot="start" class="fa-solid fa-bag-shopping"></i> Standard
                                                </wa-button>
                                            <?php endif; ?>
                                            <?php if ($storeAudiophileUrl): ?>
                                                <wa-button href="<?php echo htmlspecialchars($storeAudiophileUrl); ?>" target="_blank" variant="warning" appearance="filled-outlined" size="small" class="flex-grow-1" title="Audiophile Master Vault">
                                                    <i slot="start" class="fa-solid fa-waveform-lines"></i> WAV
                                                </wa-button>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php 
                                    // DYNAMIC DSP BUTTONS
                                    if (!$dspExempt) {
                                        $hasStores = !empty($album['spotifyId']) || !empty($album['appleId']) || !empty($album['amazonId']) || !empty($album['youtubeId']);
                                        
                                        if ($hasStores) {
                                            echo '<div class="d-flex flex-wrap gap-2 justify-content-center mt-1">';
                                            $storeProps = [
                                                'type'    => 'album',
                                                'size'    => 'small', 
                                                'spotify' => $album['spotifyId'] ?? '',
                                                'apple'   => $album['appleId'] ?? '',
                                                'amazon'  => $album['amazonId'] ?? '',
                                                'youtube' => $album['youtubeId'] ?? ''
                                            ];
                                            include ROOT_PATH . '/includes/components/store-button.php';
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </wa-card>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    <?php endforeach; ?>

</div>