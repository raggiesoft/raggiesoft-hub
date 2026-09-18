<?php
// pages/raggiesoft-books/books/crimson-node/book-01/overview.php
?>
<div class="container py-5">
    <div class="row mb-5 justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold" style="font-family: 'Impact', sans-serif; letter-spacing: 2px;">
                THE <span class="text-danger">ILLUSION</span>
            </h1>
            <p class="lead text-muted mt-3">
                Book 1 of the Crimson Node Archives. The story of Matt Miller\'s final months of high school.
            </p>
            <hr class="my-4 border-secondary opacity-50 w-50 mx-auto">
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Chapter 1 Card -->
        <div class="col-md-6 col-lg-4">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/engine-room-records/artists/crimson-node/2002-crimson-node/album-art.jpg',
                'imgAlt' => 'Chapter 1',
                'fallbackText' => '01',
                'title' => 'Chapter 1: The Approach',
                'description' => 'Friday, April 23, 1999. Courtney executes a calculated, highly visible approach on Matt in the crowded school Commons.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01/chapter-01',
                    'text' => 'Read Chapter 1',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-open',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
        
        <!-- Chapter 2 Card -->
        <div class="col-md-6 col-lg-4">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/shiloh/images/thumbnails/story/log-02-thumb.jpg',
                'imgAlt' => 'Chapter 2',
                'fallbackText' => '02',
                'title' => 'Chapter 2: The Core Ecosystem',
                'description' => 'Friday, April 30, 1999. A Friday evening gathering reveals the fierce protective layer of the Miller and Brooks family.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01/chapter-02',
                    'text' => 'Read Chapter 2',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-open',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>

        <!-- Chapter 3 Card -->
        <div class="col-md-6 col-lg-4">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/shiloh/images/thumbnails/story/log-03-thumb.jpg', 
                'imgAlt' => 'Chapter 3',
                'fallbackText' => '03',
                'title' => 'Chapter 3: The Triple Birthday',
                'description' => 'Sunday, May 2, 1999. The cousins celebrate a massive joint birthday, solidifying the strength of the phalanx before the week begins.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01/chapter-03',
                    'text' => 'Read Chapter 3',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-open',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>

        <!-- Chapter 4 Card -->
        <div class="col-md-6 col-lg-4">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/shiloh/images/story/courtney-principal-office.jpg',
                'imgAlt' => 'Chapter 4',
                'fallbackText' => '04',
                'title' => 'Chapter 4: The Failed Apology',
                'description' => 'Monday, May 3, 1999. Courtney\'s catastrophic attempt to corner Matt in the Band Room hallway results in a severe disciplinary response.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01/chapter-04',
                    'text' => 'Read Chapter 4',
                    'variant' => 'danger', 
                    'icon' => 'fa-duotone fa-book-open',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
        
        <!-- Chapter 5 Card -->
        <div class="col-md-6 col-lg-4">
            <?php
            $props = [
                'imgSrc' => 'https://assets.raggiesoft.com/common/patterns/noise-subtle.png',
                'imgAlt' => 'Chapter 5 Placeholder',
                'fallbackText' => '05',
                'title' => 'Chapter 5: Interlude',
                'description' => 'Currently drafting. A deep dive into Courtney\'s brutal reality as she serves her three-day Out-of-School Suspension.',
                'buttonProps' => [
                    'href' => '/raggiesoft-books/books/crimson-node/book-01/chapter-05',
                    'text' => 'Read Chapter 5',
                    'variant' => 'secondary', 
                    'icon' => 'fa-duotone fa-file-dashed-line',
                    'fullWidth' => true
                ]
            ];
            include ROOT_PATH . '/includes/components/card.php';
            ?>
        </div>
    </div>
</div>
