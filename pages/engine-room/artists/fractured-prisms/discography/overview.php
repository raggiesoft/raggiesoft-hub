<?php
// pages/engine-room/artists/fractured-prisms/discography/overview.php
// v1.0 - Fractured Prisms Discography Archive

$pageTitle = "Discography Overview - Fractured Prisms";
$bandName = "Fractured Prisms";
$baseUrl = "https://raggiesoft.com"; // Adjust to your actual production domain

// Fetch the albums.json file directly from the CDN
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/albums.json';
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
        <h1 class="display-3 fw-bold text-uppercase text-glow-prism gothic-font mb-3">
            The Archives
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px; font-family: var(--font-tech);">
            The complete discography of Fractured Prisms, from the mechanical isolation of the Maryland sanctuary to their sprawling, gaslamp-lit rock operas.
        </p>
    </div>

    <?php foreach ($discographyLibrary as $eraKey => $eraData): ?>
        
        <?php if (empty($eraData['albums'])) continue; ?>

        <section id="<?php echo htmlspecialchars($eraKey); ?>" class="mb-5">
            
            <h2 class="display-6 fw-bold text-secondary text-uppercase border-bottom border-prism pb-2 mb-3 gothic-font">
                <?php echo htmlspecialchars($eraData['heading']); ?>
            </h2>
            
            <div class="row mb-4">
                <div class="col-lg-8">
                    <p class="fs-5 text-muted" style="font-family: var(--font-tech);">
                        <?php echo htmlspecialchars($eraData['description']); ?>
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($eraData['albums'] as $album): ?>
                    <div class="col">
                        <div class="card h-100 lore-card rounded-0 shadow-sm overflow-hidden border-top-0 border-end-0 border-bottom-0">
                            
                            <div class="position-relative">
                                <img src="<?php echo htmlspecialchars($album['img'] ?? 'https://assets.raggiesoft.com/common/images/defaults/vinyl-placeholder.jpg'); ?>" 
                                     class="card-img-top border-bottom border-prism" 
                                     alt="<?php echo htmlspecialchars($album['title']); ?>"
                                     style="aspect-ratio: 1/1; object-fit: cover;">
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold mb-1 gothic-font" style="color: var(--bs-body-color);">
                                    <?php echo htmlspecialchars($album['title']); ?>
                                </h5>
                                <p class="card-text small text-muted mb-3" style="font-family: var(--font-tech);">
                                    Released: <?php echo htmlspecialchars($album['year']); ?>
                                </p>
                                
                                <div class="mt-auto d-flex flex-column gap-2">
                                    <a href="<?php echo htmlspecialchars($album['url']); ?>" class="btn btn-sm btn-outline-primary w-100 rounded-0" style="font-family: var(--font-tech); text-transform: uppercase;">
                                        <i class="fa-duotone fa-compact-disc me-2"></i>Open Archive
                                    </a>

                                    <?php 
                                    // DYNAMIC DSP BUTTONS
                                    $hasStores = !empty($album['spotifyId']) || !empty($album['appleId']) || !empty($album['amazonId']) || !empty($album['youtubeId']);
                                    
                                    if ($hasStores) {
                                        echo '<div class="d-flex flex-wrap gap-2 justify-content-center mt-1 pt-2 border-top border-prism border-opacity-50">';
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