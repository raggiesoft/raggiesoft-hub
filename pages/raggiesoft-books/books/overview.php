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
        <!-- Crimson Node Card -->
        <div class="col-lg-5">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg',
                'imgAlt' => 'Crimson Node',
                'fallbackText' => 'CN',
                'title' => 'Crimson Node: The Archives',
                'description' => 'The complete, grounded narrative of Matt Miller and the chaotic, fiercely protective ecosystem of the Albemarle compound.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node',
                    'text' => 'Read Series',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-atlas',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
        
        <!-- Future Series Placeholder -->
        <div class="col-lg-5">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/common/patterns/noise-subtle.png',
                'imgAlt' => 'Encrypted File',
                'fallbackText' => '???',
                'title' => 'Encrypted File',
                'description' => 'Further contemporary manuscripts are currently undergoing typesetting and review. Check back later for more archives.',
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
