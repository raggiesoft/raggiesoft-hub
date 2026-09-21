<?php
// pages/raggiesoft-books/image-library.php

$images = [
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/1.jpg",
        "title" => "Ocean View Archives",
        "description" => "A glimpse into the vast collection of narratives within the Ocean View Archives."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/2.jpg",
        "title" => "Contemporary Fiction",
        "description" => "Moments captured from the contemporary, grounded stories of the RaggieSoft universe."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/3.jpg",
        "title" => "Lifelong Bonds",
        "description" => "Friendships and connections that stand the test of time."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/4.jpg",
        "title" => "The Journey",
        "description" => "Characters embarking on deeply personal and transformative journeys."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/5.jpg",
        "title" => "Shared Memories",
        "description" => "Nostalgic moments reflecting on past summers and shared experiences."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/6.jpg",
        "title" => "Challenges and Triumphs",
        "description" => "Navigating the complexities of life and celebrating the victories, big and small."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/7.jpg",
        "title" => "Aethel Bound",
        "description" => "Glimpses of worlds beyond our own, hinting at the expansive lore."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/8.jpg",
        "title" => "The Quantum Era",
        "description" => "The intense, high-stakes environment of the late 90s tech boom."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/9.jpg",
        "title" => "Summer of Discovery",
        "description" => "Alex Miller and Chloé Mason sharing their signature 'big squeeze' hug in the front yard of Lisa Court under the shade of the old oak tree."
    ],
    [
        "url" => $cdnBaseUrl . "/raggiesoft-books/images/library-hero/10.jpg",
        "title" => "The Golden Goal Bet",
        "description" => "Montréal, 2010. Alex and Megan look miserable while forced to wear Canada hockey gear after losing a bet to a very smug Chloé during the Winter Olympics."
    ]
];
?>
<div class="container-fluid py-5 mt-5 bg-dark text-light" data-bs-theme="dark" style="min-height: 100vh;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold ova-serif text-light">Image Library</h1>
            <p class="lead text-light opacity-75">Browse the visual moments that define the Ocean View Archives.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($images as $index => $img): ?>
            <div class="col-md-6 mb-4">
                <wa-card class="h-100 shadow-sm border-0 w-100">
                    <img slot="media" src="<?php echo htmlspecialchars($img['url']); ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" style="object-fit: cover; height: 300px; width: 100%;">
                    <h4 class="fw-bold mb-2"><?php echo htmlspecialchars($img['title']); ?></h4>
                    <p class="mb-0 text-muted"><?php echo htmlspecialchars($img['description']); ?></p>
                </wa-card>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
