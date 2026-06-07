<?php
// pages/discography/overview.php
// v4.0 - Added Dynamic DSP Streaming Buttons & MusicGroup Schema.org JSON-LD

$pageTitle = "Discography Overview - The Stardust Engine";
$bandName = "The Stardust Engine";
$baseUrl = "https://raggiesoft.com"; // Adjust to your actual production domain

// Fetch the albums.json file directly from the CDN
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/albums.json';
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
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The complete official history, from the studio-mandated pop of the 80s 
            to the independent rock anthems of their rebirth.
        </p>
    </div>

    <?php foreach ($discographyLibrary as $eraKey => $eraData): ?>
        
        <?php if (empty($eraData['albums'])) continue; ?>

        <section id="<?php echo htmlspecialchars($eraKey); ?>" class="mb-5">
            
            <h2 class="display-6 fw-bold text-secondary text-uppercase border-bottom border-secondary pb-2 mb-3">
                <?php echo htmlspecialchars($eraData['heading']); ?>
            </h2>
            
            <div class="row mb-4">
                <div class="col-lg-8">
                    <p class="fs-5 text-muted">
                        <?php echo htmlspecialchars($eraData['description']); ?>
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($eraData['albums'] as $album): 
                    // Check if this is a seized asset
                    $isSeized = (isset($album['extra']) && str_contains($album['extra'], 'CANCELED'));
                ?>
                    <div class="col">
                        <div class="card h-100 bg-transparent border-secondary glass-card shadow-sm overflow-hidden">
                            <div class="position-relative">
                                
                                <?php if ($isSeized): ?>
                                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                                         style="z-index: 2; background: rgba(0,0,0,0.5); pointer-events: none;">
                                        <div class="bg-danger text-dark fw-bold h2 text-uppercase px-3 py-1" 
                                             style="transform: rotate(-15deg); border: 3px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 10px #000;">
                                            Evidence
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <img src="<?php echo htmlspecialchars($album['img'] ?? 'https://assets.raggiesoft.com/common/images/defaults/vinyl-placeholder.jpg'); ?>" 
                                     class="card-img-top border-bottom border-secondary" 
                                     alt="<?php echo htmlspecialchars($album['title']); ?>"
                                     style="aspect-ratio: 1/1; object-fit: cover; <?php echo $isSeized ? 'filter: blur(5px) grayscale(100%);' : ''; ?>">
                                
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-body fw-bold mb-1">
                                    <?php echo htmlspecialchars($album['title']); ?>
                                </h5>
                                <p class="card-text small text-muted mb-3">
                                    Released: <?php echo htmlspecialchars($album['year']); ?>
                                </p>
                                
                                <div class="mt-auto d-flex flex-column gap-2">
                                    <a href="<?php echo htmlspecialchars($album['url']); ?>" class="btn btn-sm <?php echo $isSeized ? 'btn-outline-danger' : 'btn-outline-primary'; ?> w-100">
                                        <?php if ($isSeized): ?>
                                            <i class="fa-duotone fa-gavel me-2"></i>View Case File
                                        <?php else: ?>
                                            <i class="fa-duotone fa-compact-disc me-2"></i>View Album
                                        <?php endif; ?>
                                    </a>

                                    <?php 
                                    // DYNAMIC DSP BUTTONS
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
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    <?php endforeach; ?>

</div>