<?php
// Page data
$pageTitle = "Midnight Drivers (2001) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2001-midnight-drivers';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Midnight Drivers Album Art',
            'variant' => 'info' // Blue/Neon border for Synthwave/Darkwave era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Midnight Drivers
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2001 Retro-Engineered Concept Album
            </p>
            <p class="lead text-secondary">
                The album that was never meant to be, built entirely to house a single, abandoned track. A masterclass in retro-engineering and narrative storytelling.
            </p>
            <p class="text-muted">
                In 1987, Apex Records shelved the dark, moody title track "Midnight Drivers" for being too atmospheric. Fourteen years later, operating with absolute creative control, The Stardust Engine built an entire 1980s New Wave album from scratch to give the song the conceptual home it always deserved. Side A captures the bright, high-speed synth-pop of the city lights—a deliberate "before" picture—while Side B plunges into the isolating sanctuary of the night shift, anchored by the raw, untouched 1987 master recording.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-3 border-bottom pb-2">
        <i class="fa-duotone fa-box-archive me-2"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="alert alert-dark border-info h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-cassette-tape text-info fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-info text-uppercase mb-1">The 1987 Anchor</h5>
                        <p class="mb-0 small text-muted">
                            Because the title track was recorded in 1987—three years prior to the crash that caused Ryan's T-10 paralysis—the band explicitly chose not to rework or re-record any of the original stems in 2001. The album uses the raw, untouched 1987 master, preserving the exact Darkwave energy of that era.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="alert alert-dark border-primary h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-compact-disc text-primary fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-primary text-uppercase mb-1">The Archival Illusion</h5>
                        <p class="mb-0 small text-muted">
                            To fully sell the illusion of a "lost" commercial 1987 release, Engine Room Records padded the 2001 CD reissue with era-accurate bonus tracks. This includes a 1986 lo-fi cassette basement demo, a hypnotic 12-inch extended club mix of "Neon Pulse," and a closed-door rhythm section studio jam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>