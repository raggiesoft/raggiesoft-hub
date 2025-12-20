<?php
// includes/components/carousel.php
// v3.3 - "Cinema Mode" Layout (Fixes cropping of square album art)
// Uses a blurred background fill + centered containment for the main art.

// 1. Configuration
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/albums.json';
$carousel_albums = [];

// 2. Fetch Data (Timeout Context)
$context = stream_context_create([
    'http' => ['timeout' => 3] 
]);

$jsonData = @file_get_contents($jsonUrl, false, $context);
$discographyData = $jsonData ? json_decode($jsonData, true) : null;

// 3. Process Data
if ($discographyData) {
    foreach ($discographyData as $era) {
        if (!empty($era['albums'])) {
            foreach ($era['albums'] as $album) {
                
                $isSeized = (isset($album['extra']) && str_contains($album['extra'], 'CANCELED'));

                $carousel_albums[] = [
                    'title'       => $album['title'],
                    'year'        => $album['year'],
                    'link'        => $album['url'],
                    'img_src'     => $album['img'] ?? 'https://assets.raggiesoft.com/common/images/defaults/vinyl-placeholder.jpg', 
                    'description' => $album['description'] ?? "Released in {$album['year']}.",
                    'is_seized'   => $isSeized,
                    'btn_class'   => $isSeized ? 'btn-danger' : 'btn-primary',
                    'btn_text'    => $isSeized ? 'View Case File' : 'View Album',
                    'btn_icon'    => $isSeized ? 'fa-duotone fa-file-contract' : 'fa-duotone fa-circle-info'
                ];
            }
        }
    }
}

if (!empty($carousel_albums)):
?>

<div id="discographyCarousel" class="carousel slide carousel-fade shadow-lg rounded-3 overflow-hidden mb-5" data-bs-ride="carousel">
    
    <div class="carousel-indicators" style="z-index: 10;">
        <?php foreach ($carousel_albums as $index => $album): ?>
            <button type="button" 
                    data-bs-target="#discographyCarousel" 
                    data-bs-slide-to="<?php echo $index; ?>" 
                    class="<?php echo $index === 0 ? 'active' : ''; ?>" 
                    aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>">
            </button>
        <?php endforeach; ?>
    </div>

    <div class="carousel-inner bg-black">
        <?php foreach ($carousel_albums as $index => $album): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="5000">
                
                <div style="height: 500px; position: relative; overflow: hidden;">
                    
                    <div style="
                        position: absolute;
                        top: -10%; left: -10%; width: 120%; height: 120%;
                        background-image: url('<?php echo htmlspecialchars($album['img_src']); ?>');
                        background-size: cover;
                        background-position: center;
                        filter: blur(30px) brightness(0.4) <?php echo $album['is_seized'] ? 'grayscale(100%)' : ''; ?>;
                        z-index: 1;
                    "></div>

                    <?php if ($album['is_seized']): ?>
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                             style="z-index: 3; pointer-events: none;">
                            <div class="bg-danger text-dark fw-bold display-1 text-uppercase px-5 py-2" 
                                 style="transform: rotate(-15deg); border: 5px dashed #000; opacity: 0.8; font-family: 'Impact', sans-serif; box-shadow: 0 0 30px #000;">
                                Evidence
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center" style="z-index: 2;">
                        <a href="<?php echo htmlspecialchars($album['link']); ?>" class="d-block h-100 py-4 text-center">
                            <img src="<?php echo htmlspecialchars($album['img_src']); ?>" 
                                 alt="<?php echo htmlspecialchars($album['title']); ?> Album Art"
                                 class="img-fluid shadow-lg rounded border border-secondary border-opacity-25"
                                 style="
                                    height: 100%; 
                                    width: auto; 
                                    aspect-ratio: 1/1; 
                                    object-fit: contain;
                                    <?php echo $album['is_seized'] ? 'filter: blur(5px) grayscale(100%); opacity: 0.7;' : ''; ?>
                                 "
                                 onerror="this.onerror=null; this.src='https://placehold.co/800x800/050508/FF2A6D?text=Image+Missing';">
                        </a>
                    </div>
                    
                    <div class="carousel-caption d-none d-md-block" style="z-index: 4; bottom: 40px;">
                        <div class="bg-black bg-opacity-75 p-3 rounded-pill d-inline-block border border-secondary border-opacity-50 px-5 backdrop-blur">
                            <h5 class="fw-bold text-white mb-0 text-uppercase letter-spacing-1">
                                <?php echo htmlspecialchars($album['title']); ?> 
                                <span class="text-primary mx-2">//</span> 
                                <span class="fw-light"><?php echo $album['year']; ?></span>
                            </h5>
                        </div>
                        
                        <div class="mt-3">
                            <a href="<?php echo htmlspecialchars($album['link']); ?>" class="btn <?php echo $album['btn_class']; ?> btn-sm rounded-pill px-4 fw-bold shadow-lg">
                                <i class="<?php echo $album['btn_icon']; ?> me-2" aria-hidden="true"></i> <?php echo $album['btn_text']; ?>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#discographyCarousel" data-bs-slide="prev" style="z-index: 5;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#discographyCarousel" data-bs-slide="next" style="z-index: 5;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

<?php else: ?>
    <div class="alert alert-warning text-center">
        <i class="fa-duotone fa-triangle-exclamation me-2"></i> 
        Unable to load discography data.
    </div>
<?php endif; ?>