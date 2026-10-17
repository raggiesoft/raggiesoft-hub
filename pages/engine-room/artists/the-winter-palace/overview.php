<?php
/**
 * @file overview.php
 * @description Landing page for the artist 'The Winter Palace'.
 * @context Explains the lore behind Holly O'Connell's acquisition of the band's catalog to save a specific track ("Upon This Winter's Night") for Julian. Uses the "ad-astra" page theme.
 * @architecture Static HTML/PHP template detailing band lore, utilizing Bootstrap grid and styled cards.
 * @maintenance The content is static lore. Ensure that paths to the legacy release images are correct.
 */
// INLINE: Set page title and define the 'ad-astra' theme for global layout
$pageTitle = "The Arctic Symphony Project - Engine Room Records";
$pageTheme = "ad-astra"; 
?>

<!-- INLINE: Main container for The Arctic Symphony Project overview -->
<div class="container py-5">
    
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/engine-room" class="text-decoration-none">Engine Room Records</a></li>
            <li class="breadcrumb-item"><a href="/engine-room/artists" class="text-decoration-none">Artists</a></li>
            <li class="breadcrumb-item active" aria-current="page">The Arctic Symphony Project</li>
        </ol>
    </nav>

    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="display-3 fw-bold text-light mb-2 text-uppercase" style="font-family: 'Audiowide', sans-serif;">
                The Arctic Symphony Project
            </h1>
            <p class="h4 text-info fw-light mb-1">
                "Symphonies for the Solstice"
            </p>
            <p class="small text-secondary font-monospace mb-0">
                Formerly archived under Solstice Records / The Winter Palace
            </p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
             <div class="p-3 bg-dark border border-info rounded text-center shadow-glow">
                 <wa-badge variant="brand" appearance="accent" class="text-uppercase mb-2">Active Roster // ERR-005</wa-badge>
                 <p class="small text-muted mb-2">Signed: 2003 (Asset Acquisition)</p>
                 <wa-button variant="brand" appearance="accent" size="small" pill href="https://music.raggiesoft.com/the-arctic-symphony-project" target="_blank" rel="noopener" class="px-3 fw-bold">
                     <i slot="start" class="fa-duotone fa-headphones"></i>The Listening Room
                 </wa-button>
             </div>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-4">
            <wa-card class="card border-0 shadow-sm bg-dark bg-opacity-50 mb-4 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-light mb-3">Artist Profile</h5>
                    <ul class="list-unstyled small text-secondary mb-0">
                        <li class="mb-2"><strong>Genre:</strong> Symphonic Rock / Neoclassical Rock Opera</li>
                        <li class="mb-2"><strong>Active:</strong> 1996–Present</li>
                        <li class="mb-2"><strong>Origin:</strong> Ewell (Williamsburg), VA &amp; Llanfair PG, Anglesey, Wales</li>
                        <li class="mb-2"><strong>Core Ensemble:</strong> Gabriel Rowlands, Gwendolyn Rowlands, Maria Harrison-Rowlands, Clara Harrison, Marcus, Sarah &amp; Julian &ldquo;Julep&rdquo; Rowlands</li>
                        <li><strong>Key Sound:</strong> Heavy Cello, Distorted Guitars, Silver Glockenspiel, Trilingual Choir (Cymraeg / Québécois / English)</li>
                    </ul>
                </div>
            </wa-card>

            <wa-callout variant="brand" appearance="accent" class="d-block">
                <strong class="text-info">The Liberation of the Vault:</strong><br>
                <span class="small text-muted">
                    Originally formed in December 1996 as <em>The Winter Palace</em> when Gabriel and Gwendolyn Rowlands and twins Maria and Clara Harrison turned their Ewell living room into a war room to broadcast <em>&ldquo;Upon This Winter's Night&rdquo;</em> across the Appalachian radio towers and bring fourteen-year-old Julian home from his abduction to Ohio.
                </span>
                <hr class="border-secondary opacity-25 my-2">
                <span class="small text-muted">
                    After Vanguard Horizon locked the family's Cymraeg, Québécois French, and Trilingual masters in a corporate vault in 1996, Samantha intervened a decade later—buying out Vanguard Horizon in 2007 to return the masters to the Rowlands family, liberate the Trilingual <em>&ldquo;Family Mix,&rdquo;</em> and commission the 3-disc rock opera <strong>Tales from the Solstice</strong> uniting Julian's beacon with Matthew's survival.
                </span>
            </wa-callout>
        </div>

        <div class="col-lg-8">
            
            <h2 class="h4 fw-bold text-light border-bottom border-secondary pb-2 mb-4">Featured Release</h2>
            
            <!-- INLINE: Featured release showcase -->
            <wa-card class="card glass-card border-secondary mb-4 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-arctic-symphony-project/2007-tales-from-the-solstice/album-art.jpg" 
                             class="img-fluid rounded-start h-100 object-fit-cover" 
                             alt="Tales from the Solstice Album Art - A figure in a wheelchair looking out an arched Gothic window toward the Northern Star.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-light">Tales from the Solstice (3-Disc Rock Opera)</h3>
                            <p class="card-text text-secondary small">
                                A sweeping 3-disc symphonic holiday rock opera uniting Julian Rowlands' 1996 Appalachian rescue beacon with Matthew's cross-country abduction from Norfolk to Seattle and rescue by Jyn—culminating in the liberated 5-minute Trilingual &ldquo;Family Mix&rdquo; of <em>&ldquo;Upon This Winter's Night.&rdquo;</em>
                            </p>
                            <p class="card-text text-info small fst-italic">
                                <i class="fa-duotone fa-star me-2"></i>Includes both the US English Studio Master &amp; the Trilingual &ldquo;Family Mix&rdquo; (Cymraeg / Québécois / English)
                            </p>
                            
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                <wa-button variant="brand" appearance="accent" size="small" pill href="https://music.raggiesoft.com/the-arctic-symphony-project/2007-tales-from-the-solstice" target="_blank" rel="noopener" class="px-4 fw-bold">
                                    <i slot="start" class="fa-duotone fa-headphones"></i>Stream &amp; Read Lyrics
                                </wa-button>
                                <wa-button variant="brand" appearance="outlined" size="small" pill href="/engine-room/artists/the-arctic-symphony-project/tales-of-the-solstice" class="px-4">
                                    <i slot="start" class="fa-duotone fa-book-open-cover"></i>Safe Harbor Lore
                                </wa-button>
                                <wa-button variant="neutral" appearance="outlined" size="small" pill href="https://books.raggiesoft.com/books/julian" target="_blank" rel="noopener" class="px-4">
                                    <i slot="start" class="fa-duotone fa-books"></i>Read Julian's Novel
                                </wa-button>
                            </div>
                        </div>
                    </div>
                </div>
            </wa-card>

        </div>
    </div>
</div>