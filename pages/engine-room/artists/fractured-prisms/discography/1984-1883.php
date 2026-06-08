<?php
// pages/engine-room/artists/fractured-prisms/discography/1984-1883.php
// Page data
$pageTitle = "1883 (The Rock Opera) - Fractured Prisms";
$album_path_web = '/engine-room-records/artists/fractured-prisms/1984-1883';

?>

<div class="container py-5 bg-prism-dark">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => '1883 Album Art - Victorian London',
            'variant' => 'neutral' 
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <div class="mb-3">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/band-logo.jpg" 
                     alt="Fractured Prisms Monochrome Logo" 
                     style="height: 40px; filter: invert(1) opacity(0.8);" 
                     class="mb-2">
            </div>
            <h1 class="display-3 fw-bold text-uppercase gothic-font text-glow-prism mb-0">
                1883
            </h1>
            <p class="h4 text-secondary fw-bold mb-3" style="font-family: var(--font-tech);">
                The 1984 Rock Opera (2-Disc Concept Album)
            </p>
            <p class="lead">
                A sprawling, gaslamp-lit descent into the psychological sanctuary of The Hollow Square.
            </p>
            <p class="text-muted">
                Following the massive, unexpected commercial success of <em>Carnaby Street</em>, Rhys and Claire Manning retreated entirely from the public eye. Instead of touring, they locked the doors of their Maryland studio and plunged into their shared hyper-fixation: Victorian London. In this narrative reality, the Shap Fell disaster never happened. The family is whole, and Claire is unburdened by her physical paralysis. It is a beautiful, haunting delusion pressed onto two discs of vinyl.
            </p>
        </div>
    </div>

    <hr class="border-prism opacity-50 mb-5">

    <?php 
    // The tracklist component will automatically render Disc 1 and Disc 2 
    // based on the 'disc' integer in your tracks.json file.
    include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; 
    ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-4 border-bottom border-prism pb-2" style="font-family: var(--font-tech);">
        <i class="fa-duotone fa-box-archive me-2 pulse-icon"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5 align-items-stretch">
        
        <div class="col-md-6">
            <div class="card h-100 lore-card rounded-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <i class="fa-duotone fa-microphone-stand fs-3 text-primary"></i>
                        <h5 class="card-title h6 fw-bold text-uppercase ms-3 mb-0 align-self-center" style="font-family: var(--font-tech);">The "Both Sides" Methodology</h5>
                    </div>
                    <p class="card-text small mb-3">
                        Despite the sweeping, orchestral sound of the album, there are zero hired session musicians credited on the liner notes. <em>1883</em> was recorded entirely in isolation by the two siblings. 
                    </p>
                    <p class="card-text small mb-0">
                        In a production style mirroring Phil Collins' <em>Both Sides</em>, Rhys and Claire physically played every single instrument on the record. If the arrangement called for strings, brass, or complex percussion, the siblings picked up the surviving instruments of their deceased family members and learned how to play them. The album is quite literally a séance performed through analog tape.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card h-100 artifact-paper rounded-0 p-4">
                <h5 class="h6 fw-bold text-uppercase mb-3">
                    <i class="fa-duotone fa-image-polaroid me-2"></i>The Monochrome Shift
                </h5>
                <p class="mb-0 small artifact-text-muted" style="line-height: 1.8;">
                    The vibrant colors of the 1983 debut were stripped away for this release. The band's logo, the album art, and all promotional materials were rendered in stark, Victorian monochrome. The cover art depicts Claire standing upright, holding Gwen's flute, staring down a fog-covered London street. It is a visual representation of the psychological "Safe Harbor" she built in her mind—a world defined by order, classical beauty, and the physical autonomy she was denied in the real world.
                </p>
            </div>
        </div>

    </div>
</div>