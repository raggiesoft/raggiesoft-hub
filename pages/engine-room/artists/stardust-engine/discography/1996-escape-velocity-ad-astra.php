<?php
// Page data
$pageTitle = "Escape Velocity (Ad Astra) EP (1996) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1996-ad-astra-single';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Ad Astra Single Album Art',
            'variant' => 'success' // Green representing the financial "Green Light" of 1996
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Escape Velocity (Ad Astra)
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1996 Breakthrough Maxi-Single
            </p>
            <p class="lead text-secondary">
                The 15-minute progressive rock magnum opus that officially ended the "Wilderness Years."
            </p>
            <p class="text-muted">
                Originally conceptualized as the B-Side of <em>The Warehouse Tapes</em>, this suite was elevated to a monumental A-Side EP release in 1996. Financed by their newfound independence, the release serves as Cassidy O'Connell's visceral autobiography, charting her escape from the trauma of the 1992 'Friction' trial into total artistic freedom. Paired with a strategic radio edit and a collection of powerful B-sides, this EP was the rocket that launched their "Freedom Era."
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-3 border-bottom pb-2">
        <i class="fa-duotone fa-rocket-launch me-2"></i>Mission Logs & Lore
    </h3>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="alert alert-dark border-success h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-radio text-success fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-success text-uppercase mb-1">The "Trojan Horse" Edit</h5>
                        <p class="mb-0 small text-muted">
                            Knowing mainstream radio would never play a 15-minute prog-rock suite, Manager Holly O'Connell insisted on cutting a condensed 5-minute version. By stripping away the ambient transitions and focusing on the core narrative arc, this "Trojan Horse" edit successfully charted, introducing millions of new fans to the band's independent sound.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="alert alert-dark border-warning h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-plug-circle-xmark text-warning fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-warning text-uppercase mb-1">The Mechanical Cutoff</h5>
                        <p class="mb-0 small text-muted">
                            Between Part II and Part III of the full suite, there is a jarring, absolute silence. This wasn't achieved with a studio fader; Ryan O'Connell physically pulled the plug on his guitar amplifier mid-recording to authentically simulate the violent silence of a rocket's Main Engine Cutoff (MECO).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-dark border-info h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-anchor text-info fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-info text-uppercase mb-1">Local Gravity (B-Side)</h5>
                        <p class="mb-0 small text-muted">
                            The booming B-Side <em>No Hidden Gravity</em> rejects standard 80s "fatal attraction" tropes. It was directly inspired by a true story of two opposite gender best friends from the historic Ghent neighborhood right here in Norfolk, celebrating the unbreakable, purely platonic bond between an autistic individual and their "safe person."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>