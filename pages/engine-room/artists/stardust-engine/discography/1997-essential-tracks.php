<?php
// Page data
$pageTitle = "Essential Tracks (1987-1997) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1997-essential-tracks';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Essential Tracks Album Art',
            'variant' => 'pact' // A mix of past and present
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Essential Tracks
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                1987 &ndash; 1997
            </p>
            <p class="lead text-secondary">
                The definitive chronicle of the band's escape velocity. A single-disc compilation capturing the true sound of the Engine.
            </p>
            <p class="text-muted">
                From the gilded cage of their studio-mandated pop hits under Apex Records to the raw, uncompromised rock anthems of their independent "Freedom Era," this 14-track collection documents one of the most violent and victorious sonic pivots in music history. It is the sound of a band breaking their own chains.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">The Eras</h3>
        
        <div class="list-group list-group-flush bg-transparent mb-5">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">Act I: The Apex Years (Tracks 1-4)</strong>
                    <span class="badge bg-primary">The Gilded Cage</span>
                </div>
                <p class="mb-0">
                    Opening with their massive 1987 hit <em>Electric Color</em>, this section documents the polished, studio-mandated synth-pop that made them famous. It ends with the first crack in the armor: Cassidy's fierce arena-rock rejection of her own persona in <em>Not Your Doll</em>.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-info fs-5">Act II: The Live Rebellion (Tracks 5-6)</strong>
                    <span class="badge bg-info text-dark">The Transition</span>
                </div>
                <p class="mb-0">
                    Sourced from their 1990 <em>Live in Chicago</em> tour. <em>My Anchor Holds</em> transforms from a manufactured romance into a raw, desperate promise of survival between siblings on the road. The mix on their live self-titled anthem is famously "sabotaged" by the studio, burying the synths and revealing the roaring rock engine beneath.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">Act III: The Wilderness (Tracks 7-9)</strong>
                    <span class="badge bg-warning text-dark">Ironhead Anthems</span>
                </div>
                <p class="mb-0">
                    The shrieking feedback of <em>Static</em> violently announces the death of the Apex era. This section features the unpolished, independent fury of their warehouse years, culminating in the 5-minute "Radio Edit" of Cassidy's autobiography, <em>Escape Velocity (Ad Astra)</em>.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-danger fs-5">Act IV: The Comeback (Tracks 10-14)</strong>
                    <span class="badge bg-danger">The $13.99 War</span>
                </div>
                <p class="mb-0">
                    The massive, heavy-hitting anthems from their triumphant 1997 double album. The compilation closes with <em>Brand New Scene</em>, resolving the decade-long tension as the band wipes the slate clean and finally comes home.
                </p>
            </div>

        </div>
    </div>

    <div class="card bg-black border-danger border-2 mt-5 shadow-lg">
        <div class="card-header bg-danger text-white fw-bold text-uppercase letter-spacing-1">
            <i class="fa-duotone fa-file-shield me-2"></i>The Omission: An Authorized Statement
        </div>
        <div class="card-body p-4 text-white-75">
            <p>
                Noticeably absent from this "Greatest Hits" collection is the band's massive 1989 pop ballad, <em>If You Walked Away</em>. 
            </p>
            <p>
                During the Apex Records era, the studio marketed the track as a generic, romantic breakup song. In reality, the lyrics were a source of severe, recurring trauma for Cassidy O'Connell. As an autistic artist, singing those words night after night was not a performance; it triggered a terrifying, visceral "what-if" scenario of abandonment, specifically directed at her brother and bandmate, Ryan.
            </p>
            <p>
                The fear in her voice on the original recordings was entirely real. Ryan, who is also autistic, understood her need for absolute certainty better than anyone. He famously had to reassure her after <em>every single concert</em>—often holding her in deep-pressure hugs backstage for up to twenty minutes to ground her, repeating the phrase: <strong>"Family sticks together."</strong>
            </p>
            <p class="mb-0 text-white fst-italic border-start border-4 border-danger ps-3">
                Upon gaining their financial and creative independence in 1996, Cassidy authorized the full release of this story to explain her decision: The Stardust Engine permanently retired <em>If You Walked Away</em> from their active catalog. While it remains available on historical pressings (<em>Neon Hearts</em> and <em>Live in Chicago</em>) for the sake of archival integrity, they refuse to ever perform it live, press it on compilations, or actively monetize it again. In its place, the band now performs <em>Echoes in the Wire</em>—a power ballad about surviving the storm together.
            </p>
        </div>
    </div>

</div>