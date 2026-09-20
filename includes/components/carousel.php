<?php
// includes/components/carousel.php
// v3.4 - "Cinema Mode" Layout with Storefront Routing & Vault Exclusive Logic

// 1. Configuration
$jsonUrl = $carouselJsonUrl ?? $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/albums.json';
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
                
                // Prioritize Standard Store URL for general "Shop Archives" link, fallback to Audiophile
                $store_link = $album['storeStandardUrl'] ?? ($album['storeAudiophileUrl'] ?? '');

                $carousel_albums[] = [
                    'storeProps'  => [
                         'type' => 'album',
                         'size' => 'medium',
                         'spotify' => $album['spotifyId'] ?? '',
                         'apple'   => $album['appleId'] ?? '',
                         'amazon'  => $album['amazonId'] ?? '',
                         'youtube' => $album['youtubeId'] ?? '',
                         'vinyl'   => $album['vinylUrl'] ?? '',
                         'cd'      => $album['cdUrl'] ?? '',
                         'apparel' => $album['apparelUrl'] ?? ''
                    ],
                    'title'       => $album['title'],
                    'year'        => $album['year'],
                    'realRelease' => $album['realRelease'] ?? '',
                    'genre'       => $album['genre'] ?? 'Rock',
                    'link'        => $album['url'],
                    'img_src'     => $album['img'] ?? $cdnBaseUrl . '/common/images/defaults/vinyl-placeholder.jpg', 
                    'description' => $album['description'] ?? "Released in {$album['year']}.",
                    'is_seized'   => $isSeized,
                    'btn_class'   => $isSeized ? 'btn-danger' : 'btn-primary',
                    'btn_text'    => $isSeized ? 'View Case File' : 'View Album',
                    'btn_icon'    => $isSeized ? 'fa-duotone fa-file-contract' : 'fa-duotone fa-circle-info',
                    'store_link'  => $store_link,
                    'dsp_exempt'  => $album['dspExempt'] ?? false
                ];
            }
        }
    }
}

if (!empty($carousel_albums)):
?>

<div class="position-relative shadow-lg rounded-4 mb-5 overflow-hidden" style="background: #0a0a0a; border: 1px solid rgba(255,255,255,0.1);">
    <div id="cinemaCarousel" class="d-flex overflow-auto w-100" style="scroll-snap-type: x mandatory; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none;">
        <style>#cinemaCarousel::-webkit-scrollbar { display: none; }</style>
        
        <?php foreach ($carousel_albums as $index => $album): ?>
            <div class="w-100 flex-shrink-0 position-relative d-flex align-items-center" style="scroll-snap-align: start; min-height: 500px;">
                
                <!-- Blurred Background -->
                <div class="position-absolute top-0 start-0 w-100 h-100" style="
                    background-image: url('<?php echo htmlspecialchars($album['img_src']); ?>');
                    background-size: cover;
                    background-position: center;
                    filter: blur(40px) brightness(0.3) <?php echo $album['is_seized'] ? 'grayscale(100%)' : ''; ?>;
                    transform: scale(1.1);
                    z-index: 1;
                "></div>

                <div class="container position-relative py-5" style="z-index: 2;">
                    <div class="row align-items-center justify-content-center">
                        <!-- Left Column: Album Art -->
                        <div class="col-md-5 col-lg-4 mb-4 mb-md-0 text-center position-relative">
                            <?php if ($album['is_seized']): ?>
                                <div class="position-absolute top-50 start-50 translate-middle w-100" style="z-index: 3; pointer-events: none;">
                                    <div class="bg-danger text-dark fw-bold display-4 text-uppercase px-3 py-1" 
                                         style="transform: rotate(-15deg); border: 4px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 20px #000;">
                                        Evidence
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($album['dsp_exempt'] && !$album['is_seized']): ?>
                                <div class="position-absolute top-0 end-0 mt-3 me-3" style="z-index: 4;">
                                    <span class="badge bg-warning text-dark shadow-sm border border-dark px-2 py-1"><i class="fa-solid fa-vault me-1"></i> Vault Exclusive</span>
                                </div>
                            <?php endif; ?>

                            <a href="<?php echo htmlspecialchars($album['link']); ?>">
                                <img src="<?php echo htmlspecialchars($album['img_src']); ?>" 
                                     alt="<?php echo htmlspecialchars($album['title']); ?> Album Art"
                                     class="img-fluid shadow-lg rounded-3 border border-secondary border-opacity-50"
                                     style="max-height: 400px; <?php echo $album['is_seized'] ? 'filter: blur(4px) grayscale(100%); opacity: 0.7;' : ''; ?>">
                            </a>
                        </div>
                        
                        <!-- Right Column: Album Info & Buttons -->
                        <div class="col-md-7 col-lg-6 text-center text-md-start">
                            <h2 class="fw-bold text-white display-5 text-uppercase mb-1" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8), 0 4px 15px rgba(0,0,0,0.6);">
                                <?php echo htmlspecialchars($album['title']); ?>
                            </h2>
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start mb-4">
                                <span class="badge bg-black bg-opacity-50 border border-secondary border-opacity-25 fs-6 fw-normal px-3 py-2 text-white" style="backdrop-filter: blur(5px);">
                                    <i class="fa-solid fa-compact-disc text-info me-2"></i><?php echo htmlspecialchars($album['genre']); ?>
                                </span>
                                <span class="badge bg-black bg-opacity-50 border border-secondary border-opacity-25 fs-6 fw-normal px-3 py-2 text-white" style="backdrop-filter: blur(5px);">
                                    <i class="fa-regular fa-clock text-warning me-2"></i>Narrative: <?php echo htmlspecialchars($album['year']); ?>
                                </span>
                                <?php if (!empty($album['realRelease'])): ?>
                                <span class="badge bg-black bg-opacity-50 border border-secondary border-opacity-25 fs-6 fw-normal px-3 py-2 text-white" style="backdrop-filter: blur(5px);">
                                    <i class="fa-solid fa-calendar-check text-success me-2"></i>World: <?php echo htmlspecialchars($album['realRelease']); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                            
                            <p class="lead mb-5 fw-medium" style="color: rgba(255, 255, 255, 0.95); text-shadow: 0 1px 5px rgba(0,0,0,0.9); max-width: 600px; line-height: 1.6;">
                                <?php echo htmlspecialchars($album['description']); ?>
                            </p>
                            
                            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start">
                                <wa-button href="<?php echo htmlspecialchars($album['link']); ?>" variant="<?php echo $album['is_seized'] ? 'danger' : 'brand'; ?>">
                                    <i slot="start" class="<?php echo $album['btn_icon']; ?>"></i> <?php echo $album['btn_text']; ?>
                                </wa-button>
                                
                                <?php 
                                $storeProps = $album['storeProps'];
                                $hasStores = !empty($storeProps['spotify']) || !empty($storeProps['apple']) || !empty($storeProps['amazon']) || !empty($storeProps['youtube']);
                                if ($hasStores && !$album['is_seized']) {
                                    include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/store-button.php';
                                }
                                ?>

                                <?php if (!empty($album['store_link'])): ?>
                                    <wa-button href="<?php echo htmlspecialchars($album['store_link']); ?>" target="_blank" variant="neutral" appearance="filled">
                                        <i slot="start" class="fa-solid fa-bag-shopping"></i> Shop Archives
                                    </wa-button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <!-- Navigation Buttons -->
    <div class="d-flex justify-content-between position-absolute w-100 px-3" style="top: 50%; left: 0; transform: translateY(-50%); pointer-events: none; z-index: 10;">
        <wa-button variant="neutral" appearance="filled" class="cinema-prev shadow-lg" onclick="window.scrollCinemaCarousel(-1)" style="pointer-events: auto; border: 2px solid rgba(255,255,255,0.2);" pill>
            <i class="fa-solid fa-chevron-left fs-5 text-body-emphasis"></i>
        </wa-button>
        <wa-button variant="neutral" appearance="filled" class="cinema-next shadow-lg" onclick="window.scrollCinemaCarousel(1)" style="pointer-events: auto; border: 2px solid rgba(255,255,255,0.2);" pill>
            <i class="fa-solid fa-chevron-right fs-5 text-body-emphasis"></i>
        </wa-button>
    </div>
</div>




<!-- Foolproof Carousel Script -->
<script>
(function() {
    // 1. Define global scroll function so onclick works perfectly
    window.scrollCinemaCarousel = function(direction) {
        const carousel = document.getElementById('cinemaCarousel');
        if (!carousel) return;
        
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const scrollBehavior = prefersReducedMotion ? 'auto' : 'smooth';
        
        if (direction === 1) { // Next
            if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 50) {
                carousel.scrollTo({ left: 0, behavior: scrollBehavior });
            } else {
                carousel.scrollTo({ left: carousel.scrollLeft + carousel.clientWidth, behavior: scrollBehavior });
            }
        } else { // Prev
            if (carousel.scrollLeft <= 50) {
                carousel.scrollTo({ left: carousel.scrollWidth, behavior: scrollBehavior });
            } else {
                carousel.scrollTo({ left: carousel.scrollLeft - carousel.clientWidth, behavior: scrollBehavior });
            }
        }
        
        // Reset autoplay when manually clicked
        if (window.cinemaAutoplayInterval) {
            clearInterval(window.cinemaAutoplayInterval);
            window.startCinemaAutoplay();
        }
    };

    // 2. Setup Autoplay
    window.startCinemaAutoplay = function() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        
        window.cinemaAutoplayInterval = setInterval(() => {
            window.scrollCinemaCarousel(1);
        }, 6000);
    };

    // Clear any existing interval from previous page loads
    if (window.cinemaAutoplayInterval) {
        clearInterval(window.cinemaAutoplayInterval);
    }
    
    // Start Autoplay
    window.startCinemaAutoplay();

    // 3. Pause on hover
    const carouselParent = document.getElementById('cinemaCarousel').parentElement;
    if (carouselParent) {
        carouselParent.addEventListener('mouseenter', () => clearInterval(window.cinemaAutoplayInterval));
        carouselParent.addEventListener('mouseleave', () => window.startCinemaAutoplay());
        carouselParent.addEventListener('touchstart', () => clearInterval(window.cinemaAutoplayInterval), {passive: true});
        carouselParent.addEventListener('touchend', () => window.startCinemaAutoplay(), {passive: true});
    }
})();
</script>

<?php else: ?>
    <div class="alert alert-warning text-center">
        <i class="fa-duotone fa-triangle-exclamation me-2"></i> 
        Unable to load discography data.
    </div>
<?php endif; ?>