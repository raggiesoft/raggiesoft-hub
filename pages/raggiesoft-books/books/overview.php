<?php
// pages/raggiesoft-books/books/overview.php
// Contemporary Fiction Library
?>
<div class="container py-5">
    <div class="row mb-5 text-center">
        <div class="col-12">
            <h1 class="display-4 fw-bold ova-serif ova-text-bronze mb-3">Contemporary Library</h1>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">
                The grounded, real-world archives of RaggieSoft Media.
            </p>
            <hr class="my-4 border-secondary opacity-50 w-50 mx-auto">
        </div>
    </div>

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
                
                // Specific cover art overrides
                $imgSrc = $cdnBaseUrl . '/raggiesoft-books/images/logos/oceanview-archives.svg';
                if ($slug === 'crimson-node') {
                    $imgSrc = $cdnBaseUrl . '/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg';
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
                        'href' => '/raggiesoft-books/books/' . $slug,
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
</div>