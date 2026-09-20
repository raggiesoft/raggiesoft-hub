<?php
// pages/raggiesoft-books/books/crimson-node/overview.php
// Crimson Node Series Library Hub
?>
<div class="container py-5">
    <div class="row mb-5 justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold" style="font-family: 'Impact', sans-serif; letter-spacing: 2px;">
                THE <span class="text-danger">ARCHIVES</span>
            </h1>
            <p class="lead text-muted mt-3">
                Welcome to the Albemarle County Kids House. This is the complete narrative documenting the formation of the Miller and Brooks family phalanx and the rise of Crimson Node.
            </p>
            <hr class="my-4 border-secondary opacity-50 w-50 mx-auto">
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Book 1 Card -->
        <div class="col-md-6 col-lg-5">
            <?php
            $props = [
                'imgSrc' => $cdnBaseUrl . '/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg',
                'imgAlt' => 'Crimson Node: The Illusion',
                'fallbackText' => 'B1',
                'title' => 'Book 1: The Illusion',
                'description' => 'The story of Matt Miller\'s final months of high school. As the reality of post-graduate life approaches, a shattered illusion forces Matt and Sarah to confront a vicious social hierarchy.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01',
                    'text' => 'Read Book 1',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-open',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
        
        <!-- Book 2 Placeholder -->
        <div class="col-md-6 col-lg-5">
            <?php
            $props = [
                'imgSrc' => $cdnBaseUrl . '/common/patterns/noise-subtle.png',
                'imgAlt' => 'Encrypted File',
                'fallbackText' => 'B2',
                'title' => 'Book 2: The Foundation',
                'description' => 'Currently under typesetting. The narrative continues as the cousins establish the Kids House in Charlottesville and navigate their first year away from home.',
                'buttonProps' => [
                    'href' => '#',
                    'text' => 'Classified',
                    'variant' => 'secondary', 
                    'icon' => 'fa-solid fa-lock',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
    </div>
</div>
