<?php
/**
 * @file 2007-tales-of-the-solstace.php
 * @description Dedicated page for the track/album "Tales of the Solstice" ("Upon This Winter's Night").
 * @context Details the specific lore of why this track was so important to Julian Croft. Features a localized audio player script snippet. Uses the "ad-astra" page theme.
 * @architecture Static PHP/HTML with localized JS function `playExternalTrack()` to interface with the global Stardust player.
 * @maintenance If the global `window.stardustPlayer` API changes, the `playExternalTrack()` function will need to be updated to ensure the track still plays.
 */
// INLINE: Set page title and theme
$pageTitle = "Tales from the Solstice - The Arctic Symphony Project";
$pageTheme = "ad-astra"; 

// INLINE: Define CDN asset paths for imagery
$hero_art = $cdnBaseUrl . '/engine-room-records/artists/the-arctic-symphony-project/2007-tales-from-the-solstice/album-art.jpg';
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-5 text-center">
            <div class="card bg-transparent border-info shadow-lg p-2 transform-rotate-minus-1">
                <img src="<?php echo $hero_art; ?>" 
                     class="img-fluid rounded border border-secondary" 
                     alt="A figure in a wheelchair looking out a Gothic cathedral window toward the Northern Star.">
                <div class="card-footer bg-transparent border-0 text-center pt-2">
                    <small class="font-monospace text-info opacity-75">
                        <i class="fa-duotone fa-eye me-2"></i>Subjective Memory Render: Nov 1998
                    </small>
                </div>
            </div>
        </div>
        
        <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
            <span class="badge border border-secondary text-secondary rounded-pill mb-3 px-3">
                <i class="fa-duotone fa-box-archive me-2"></i>Safe Harbor Catalog
            </span>
            <h1 class="display-3 fw-bold text-light text-uppercase mb-1" style="font-family: 'Impact', sans-serif;">
                Upon This Winter's Night
            </h1>
            <h2 class="h4 text-info font-monospace mb-4">
                The Arctic Symphony Project <span class="text-secondary small">(Tales from the Solstice)</span>
            </h2>
            
            <p class="lead text-white-50">
                The song that built the shield. 
            </p>
            <p class="text-secondary">
                Originally recorded in 1996 and remastered for the 2007 Engine Room archival edition, this track is canonized in Engine Room history as the "Sonic Armor" that saved <strong>Julian Croft</strong> (frontman of <strong>The Paper Wall</strong>). Julian lived next door to The Fortress, and his survival story was deeply intertwined with the O'Connell family.
            </p>
            <p class="text-secondary">
                When Holly learned that this out-of-print song was the specific frequency that grounded him during his escape from Seattle in 1998, she didn't just buy a copy—she bought the company. She acquired the bankrupt Solstice Records catalog to ensure the song that saved her friend would never be deleted.
            </p>

            <div class="card border-info bg-dark bg-opacity-50 mt-4 shadow-glow">
                <div class="card-body p-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                    <div>
                        <span class="badge bg-info text-dark font-monospace text-uppercase mb-1">The Listening Room</span>
                        <h5 class="text-light fw-bold mb-1">Tales from the Solstice</h5>
                        <div class="text-secondary small font-monospace">Stream "Upon This Winter's Night" &amp; read the complete lyrics</div>
                    </div>
                    <a href="https://music.raggiesoft.com/the-arctic-symphony-project/2007-tales-from-the-solstice" target="_blank" rel="noopener" class="btn btn-info rounded-pill px-4 py-2 fw-bold text-nowrap">
                        <i class="fa-duotone fa-headphones me-2"></i>Listen Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>