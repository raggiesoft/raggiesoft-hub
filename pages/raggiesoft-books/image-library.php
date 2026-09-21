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
        "title" => "Matt & Courtney (Crimson Node)",
        "description" => "A quiet moment in the hallway captured by Arthur Vance, Matt's one-on-one aide, with their permission."
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
        "description" => "Montréal, 2010. Alex and Megan look miserable while forced to wear Canada hockey gear after losing a bet to a very smug Chloé during the Winter Games."
    ]
];
?>
<div class="container-fluid py-5 mt-5" style="min-height: 100vh;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold ova-serif">Image Library</h1>
            <p class="lead text-muted">Browse the visual moments that define the Ocean View Archives.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($images as $index => $img): ?>
            <div class="col-md-6 mb-4">
                <wa-card class="h-100 shadow-sm border-0 w-100" style="cursor: pointer;" onclick="openImageModal(<?php echo $index; ?>)">
                    <img slot="media" src="<?php echo htmlspecialchars($img['url']); ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" style="object-fit: cover; height: 300px; width: 100%;">
                    <h4 class="fw-bold mb-2"><?php echo htmlspecialchars($img['title']); ?></h4>
                    <p class="mb-0 text-muted"><?php echo htmlspecialchars($img['description']); ?></p>
                </wa-card>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<wa-dialog id="image-modal" label="Image View" light-dismiss style="--width: 90vw; max-width: 1600px;">
    <div style="text-align: center; display: flex; justify-content: center; align-items: center;">
        <img id="image-modal-img" src="" alt="" style="max-width: 100%; max-height: 70vh; object-fit: contain; border-radius: 8px;">
    </div>
    <div slot="footer" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <div>
            <wa-button variant="neutral" onclick="prevImage()">
                <wa-icon slot="start" name="chevron-left"></wa-icon> Previous
            </wa-button>
            <wa-button variant="neutral" onclick="nextImage()">
                Next <wa-icon slot="end" name="chevron-right"></wa-icon>
            </wa-button>
        </div>
        <wa-button variant="primary" onclick="closeImageModal()">Close</wa-button>
    </div>
</wa-dialog>

<script>
const libraryImages = <?php echo json_encode($images, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
let currentImageIndex = 0;

function openImageModal(index) {
    currentImageIndex = index;
    updateModalContent();
    
    const dialog = document.getElementById('image-modal');
    if (typeof dialog.show === 'function') {
        dialog.show();
    } else {
        dialog.open = true;
    }
}

function closeImageModal() {
    const dialog = document.getElementById('image-modal');
    if (typeof dialog.hide === 'function') {
        dialog.hide();
    } else {
        dialog.open = false;
        dialog.removeAttribute('open');
    }
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % libraryImages.length;
    updateModalContent();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + libraryImages.length) % libraryImages.length;
    updateModalContent();
}

function updateModalContent() {
    const imgData = libraryImages[currentImageIndex];
    const dialog = document.getElementById('image-modal');
    const img = document.getElementById('image-modal-img');
    
    dialog.label = imgData.title;
    img.src = imgData.url;
    img.alt = imgData.title;
}
</script>
