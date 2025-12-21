<?php
// Page data
$pageTitle = "Hard Reset (1997) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1997-hard-reset';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Hard Reset Album Art',
            'variant' => 'axiom' // Orange border for Freedom era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Hard Reset
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1997 Commercial Comeback
            </p>
            <p class="lead text-secondary">
                This wasn't a mail-order cassette; it was a gamble. The band's first retail release on their own label, <strong>Engine Room Records, LLC</strong>.
            </p>
            <p class="text-muted">
                While <em>The Warehouse Tapes</em> (1995) was a raw "bat signal" to the fans, <em>Hard Reset</em> was a professional statement. It sounds crisp, confident, and terrified. The "energy" of this album is fueled by the high-stakes gamble of a family betting their entire future on a single purchase order.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>
        
        <div class="list-group list-group-flush bg-transparent">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. Hard Reset</strong>
                    <span class="badge bg-warning text-dark">The Anthem</span>
                </div>
                <p class="mb-0">
                    "We're wiping the slate clean." The opening statement of their professional career. It establishes the new "Freedom Era" sound: polished, powerful 80s rock that ignores the 90s grunge trend entirely.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. Brand New Scene</strong></div>
                <p class="mb-0">
                    An upbeat duet that directly addresses their past. Ryan sings, "You were the 'Stardust,' I was the 'Engine' / A story told by someone else's invention." It is a declaration that they are finally defining themselves.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">3. My Anchor (The Sail)</strong>
                    <span class="badge bg-secondary">The Rewrite</span>
                </div>
                <p class="mb-0">
                    A rewriting of their 1987 hit "My Anchor Holds." In the original, they were clinging to each other for survival. In this version, they are equals: "I'm not the anchor, you're not the sail / We're just a ship that will prevail."
                </p>
            </div>

        </div>
    </div>

    <div class="alert alert-dark border-warning mt-5">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-file-signature text-warning fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-warning text-uppercase mb-1">Holly's 50,000 Unit Gamble</h5>
                <p class="mb-0 small text-muted">
                    For <em>The Warehouse Tapes</em>, the band burned CDs one at a time. For <em>Hard Reset</em>, Holly O'Connell (CEO) had to sign a contract for <strong>50,000 stamped CDs</strong> and 20,000 cassettes, paid for upfront with the fans' money. If this album failed, the band wouldn't just be dropped; they would be bankrupt. The tension of that "First-Time Jitter" is audible in the tightness of the rhythm section.
                </p>
            </div>
        </div>
    </div>

</div>