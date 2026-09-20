<?php
// pages/raggiesoft-books/books/overview.php
// Contemporary Fiction Library

$heroImages = [
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/1.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/2.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/3.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/4.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/5.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/6.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/7.jpg",
    $cdnBaseUrl . "/raggiesoft-books/images/library-hero/8.jpg"
];
$startImage = !empty($heroImages) 
    ? $heroImages[array_rand($heroImages)] 
    : $cdnBaseUrl . "/common/patterns/stars-transparent.png";
$imagesJson = htmlspecialchars(json_encode($heroImages), ENT_QUOTES, 'UTF-8');
?>
<style>
    /* =====================================================================
       BRUTE FORCE READABILITY ARMOR
       These classes ensure the hero section text, backgrounds, and borders
       remain highly visible over the rotating background images
       ===================================================================== */
    .force-text-light { color: #ffffff !important; }
    .force-text-muted { color: rgba(255, 255, 255, 0.75) !important; }
    
    .force-glass-bg {
        background-color: rgba(0, 0, 0, 0.65) !important;
        backdrop-filter: blur(8px) !important;
    }

    .force-border-default { border: 1px solid rgba(255, 255, 255, 0.1) !important; }

    .force-shadow-heavy {
        text-shadow: 0px 4px 15px rgba(0,0,0,0.9), 0px 1px 3px rgba(0,0,0,1) !important;
    }
    .force-shadow-medium {
        text-shadow: 0px 2px 8px rgba(0,0,0,0.9) !important;
    }

    .immersive-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        background-color: #000;
        min-height: 100vh;
        padding-bottom: 50px;
    }

    .hero-bg-layer {
        position: absolute;
        background-attachment: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: opacity 2s ease-in-out; 
        z-index: 0;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.8));
    }
    
    .content-wrapper {
        position: relative;
        z-index: 2;
    }
</style>


<div class="immersive-container hero-rotator-container mb-5" data-images="<?php echo $imagesJson; ?>">
    <div class="hero-bg-layer hero-bg-layer-1" style="background-image: url('<?php echo $startImage; ?>');"></div>
    <div class="hero-bg-layer hero-bg-layer-2" style="background-image: url(''); opacity: 0;"></div>
    <div class="hero-overlay"></div>

    <div class="content-wrapper container py-5 mt-5">
        <div class="text-center d-flex justify-content-center">
            <div class="force-glass-bg force-border-default p-4 rounded-4 shadow-lg">
                <h1 class="display-3 fw-bold text-uppercase force-text-light force-shadow-heavy mb-2" style="font-family: 'Audiowide', cursive;">
                    Contemporary Library
                </h1>
                <p class="lead force-text-light fw-semibold force-shadow-medium mx-auto mb-0" style="max-width: 700px;">
                    The grounded, real-world archives of RaggieSoft Media.
                </p>
            </div>
        </div>

        <!-- Move cards inside content-wrapper -->
        <div class="container pb-5 mt-5">

    <div class="row g-4 justify-content-center">
        <?php
        // Fetch the master catalog directly from the CDN
        $catalogUrl = $cdnBaseUrl . '/raggiesoft-books/books/catalog.json';
        $catalogData = @file_get_contents($catalogUrl);
        $books = [];
        
        if ($catalogData) {
            $books = json_decode($catalogData, true) ?? [];
        }

        if (empty($books)):
        ?>
            <div class="col-12 text-center py-5">
                <wa-icon name="books" style="font-size: 3rem; color: var(--bs-secondary);"></wa-icon>
                <h3 class="mt-3 text-muted">Library Catalog Offline</h3>
                <p>The system is currently compiling the archives. Please check back later.</p>
            </div>
        <?php
        else:
            foreach ($books as $book):
                $slug = $book['slug'] ?? '';
                $title = $book['title'] ?? 'Unknown Archive';
                $desc = $book['description'] ?? '';
                
                // Construct initials for fallback
                $words = explode(' ', str_replace('The ', '', $title));
                $fallback = '';
                foreach ($words as $w) {
                    if (!empty($w)) $fallback .= strtoupper($w[0]);
                }
                $fallback = substr($fallback, 0, 2);
                if (empty($fallback)) $fallback = '??';
                
                // Determine cover art
                $imgSrc = $cdnBaseUrl . '/raggiesoft-books/images/book-placeholder.jpg';
                if (!empty($book['image'])) {
                    $imgSrc = $cdnBaseUrl . $book['image'];
                }
        ?>
            <div class="col-md-6 col-lg-4">
                <?php
                $props = [
                    'imgSrc' => $imgSrc,
                    'imgAlt' => $title,
                    'fallbackText' => $fallback,
                    'title' => $title,
                    'description' => $desc,
                    'buttonProps' => [
                        'href' => !empty($book['first_route']) ? $book['first_route'] : '/raggiesoft-books/books/' . $slug,
                        'text' => 'Read Series',
                        'variant' => 'primary', 
                        'icon' => 'fa-duotone fa-book-open-cover',
                        'fullWidth' => true
                    ]
                ];
                include ROOT_PATH . '/includes/components/card.php';
                ?>
            </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div> <!-- End content-wrapper -->
</div> <!-- End immersive-container -->
<script src="<?php echo $cdnBaseUrl; ?>/common/js/hero-image.js"></script>
