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
                        <i class="fa-duotone fa-eye me-2"></i>Ewell, Virginia (Dec 1996) &amp; Williamsburg (Jan 2007)
                    </small>
                </div>
            </div>
        </div>
        
        <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
            <span class="badge border border-secondary text-secondary rounded-pill mb-3 px-3">
                <i class="fa-duotone fa-box-archive me-2"></i>Safe Harbor Catalog // 3-Disc Rock Opera
            </span>
            <h1 class="display-3 fw-bold text-light text-uppercase mb-1" style="font-family: 'Impact', sans-serif;">
                Upon This Winter's Night
            </h1>
            <h2 class="h4 text-info font-monospace mb-4">
                The Arctic Symphony Project <span class="text-secondary small">(Tales from the Solstice)</span>
            </h2>
            
            <p class="lead text-white-50">
                Two survivors. Ten years apart. One unyielding rescue beacon.
            </p>
            <p class="text-secondary">
                Originally forged on December 11, 1996 in Ewell, Virginia, <em>&ldquo;Upon This Winter's Night&rdquo;</em> was recorded in a spare bedroom by eighteen-year-old twins <strong>Gabriel and Gwendolyn Rowlands</strong> and fourteen-year-old identical twins <strong>Maria and Clara Harrison</strong> when their non-verbal, autistic brother <strong>Julian &ldquo;Julep&rdquo; Rowlands</strong> was abducted by his estranged father. Built around Julian's wind-up Brahms <em>Wiegenlied</em> music box and Maria's silver glockenspiel, the track was hijacked across the Shenandoah FM broadcast repeaters by Richard Harrison—reaching Julian in a speeding car in West Virginia and giving him the strength to trigger a silent alarm at a gas station in Athens County, Ohio.
            </p>
            <p class="text-secondary">
                When Vanguard Horizon signed the family band in December 1996, executive Elias Thorne locked their Cymraeg (<em>Ar Noson y Gaeaf Hon</em>), Québécois French (<em>En Cette Nuit d'Hiver</em>), and Trilingual (<em>The Family Mix</em>) recordings in the corporate vault, releasing only the English single in 1997. Years later, that 1997 recording became the &ldquo;Sonic Armor&rdquo; that grounded nineteen-year-old <strong>Matthew</strong> during his rescue from a cross-country abduction to Seattle. In January 2007, at The Crown &amp; Hound on Duke of Gloucester Street in Williamsburg, <strong>Samantha</strong> and <strong>Jyn</strong> handed the Vanguard Horizon masters back to Julian and his family—commissioning the 3-disc symphonic rock opera <strong>Tales from the Solstice</strong> to tell Matthew's story and finally liberating Julian's vaulted Trilingual <em>&ldquo;Family Mix&rdquo;</em> for the world.
            </p>

            <div class="card border-info bg-dark bg-opacity-50 mt-4 shadow-glow">
                <div class="card-body p-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                    <div>
                        <span class="badge bg-info text-dark font-monospace text-uppercase mb-1">The Listening Room &amp; Ocean View Archives</span>
                        <h5 class="text-light fw-bold mb-1">Tales from the Solstice</h5>
                        <div class="text-secondary small font-monospace">Stream the 3-disc rock opera or read the 5-Era novel of Julian Rowlands</div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://music.raggiesoft.com/the-arctic-symphony-project/2007-tales-from-the-solstice" target="_blank" rel="noopener" class="btn btn-info rounded-pill px-4 py-2 fw-bold text-nowrap">
                            <i class="fa-duotone fa-headphones me-2"></i>Listen Now
                        </a>
                        <a href="https://books.raggiesoft.com/books/julian" target="_blank" rel="noopener" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-nowrap">
                            <i class="fa-duotone fa-books me-2"></i>Read the Novel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>