<?php
// Page data
/*
 * ARCHITECTURE & LORE:
 * Main album page for "Our Own Frequency" (2008).
 * Utilizes standard album header and tracklist components.
 */
$pageTitle = "Our Own Frequency (2008) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2008-our-own-frequency';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Our Own Frequency Album Art'
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase mb-0" style="font-family: 'Impact', sans-serif;">
                Our Own Frequency
            </h1>
            <p class="h4 text-muted fw-bold mb-3">
                The 2008 Acoustic Reset
            </p>
            <p class="lead text-body">
                Recorded entirely with an acoustic guitar, a piano, and raw vocals, this deeply intimate album peels back the stadium-rock personas to reveal the emotional core of the band's tight-knit family.
            </p>
            <p class="text-muted">
                Created during their "Burnout Hiatus" when the band was pushed to the absolute edge by industry pressures and exhaustion, they returned to their roots. Ryan, Cassidy, and Holly O'Connell, along with their cousins Evan and Tyler Wright, locked themselves in the studio together. The result is a raw, stripped-down confession of their shared trauma and codependence, offering a sanctuary of quiet connection amidst the noise.
            </p>
            <div class="mt-4">
                <a href="/engine-room/artists/stardust-engine/story/our-own-frequency" class="btn btn-outline-primary shadow-sm">
                    <i class="fa-solid fa-book-open me-2"></i>Read the Story of the Album
                </a>
            </div>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <?php
    $nav = [
        'prev' => ['url' => '/engine-room/artists/stardust-engine/discography/2007-lost-sounds', 'label' => 'Lost Sounds (2007)'],
        'overview' => ['url' => '/engine-room/artists/stardust-engine/discography', 'label' => 'Discography']
    ];
    include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>

