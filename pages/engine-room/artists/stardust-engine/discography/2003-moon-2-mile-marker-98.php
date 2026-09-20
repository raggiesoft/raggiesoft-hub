<?php
// pages/engine-room/artists/stardust-engine/discography/2003-moon-2-mile-marker-98.php
$pageTitle = "Mile Marker 98 [Moon 2] - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2003-mile-marker-98';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Mile Marker 98 Album Art',
            'variant' => 'danger' // Danger border for Moon 2
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-danger mb-0" style="font-family: 'Impact', sans-serif;">
                Mile Marker 98
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                MOON 2
            </p>
            <p class="lead text-secondary">
                Blistering, distorted electric guitars and aggressive rock energy. A visceral, high-friction confrontation with the trauma of The Crash of '90. Ryan transposed the trauma of his real-life T-10 paralysis into the dark cosmos of space, fighting the crushing gravity of his reality through blistering rock anthems.
            </p>
            <p class="text-muted">
                Driven by Ryan O'Connell, this record represents the raw, chaotic energy and unresolved anger of The Stardust Engine. It serves as the explosive, high-friction counterweight to its atmospheric sibling, Sanctuary (Zero-G). Thematically, this is a show being put on by the Engine Room Records Planetarium.
            </p>
            
            <wa-card class="bg-body border-danger shadow-sm mt-4 p-0 overflow-hidden w-100">
                <div class="d-flex flex-column flex-md-row align-items-center">
                    <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/story/crash-of-1990.jpg" 
                        alt="Ryan O'Connell in his wheelchair at Star City General Hospital" 
                        class="img-fluid border-end border-danger" 
                        style="max-width: 200px; aspect-ratio: 1/1; object-fit: cover; filter: sepia(20%) contrast(1.1);">
                    <div class="p-4 w-100">
                        <wa-badge variant="danger" class="mb-2">Historical Archive</wa-badge>
                        <h5 class="fw-bold text-danger mb-2 text-uppercase">The Crash of '90</h5>
                        <p class="text-body-secondary small mb-3">
                            Ryan absolutely loathed his new wheelchair, but he would do anything for his sisters when they asked him to go for a walk in the ward. Read the historical archive detailing the real-world events of December 10, 1990, that served as the harrowing inspiration for this album.
                        </p>
                        <wa-button variant="danger" outline href="/engine-room/artists/stardust-engine/story/crash-of-90">
                            <i class="fa-duotone fa-book-open me-2"></i>Read the Archive
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
</div>
