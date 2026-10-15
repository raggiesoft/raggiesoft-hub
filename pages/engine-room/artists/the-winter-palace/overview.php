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
                 <span class="badge bg-info text-dark text-uppercase mb-2">Active Roster // ERR-005</span>
                 <p class="small text-muted mb-2">Signed: 2003 (Asset Acquisition)</p>
                 <a href="https://music.raggiesoft.com/the-arctic-symphony-project" target="_blank" rel="noopener" class="btn btn-sm btn-info rounded-pill px-3 fw-bold">
                     <i class="fa-duotone fa-headphones me-1"></i>The Listening Room
                 </a>
             </div>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm bg-dark bg-opacity-50 mb-4">
                <div class="card-body">
                    <h5 class="fw-bold text-light mb-3">Artist Profile</h5>
                    <ul class="list-unstyled small text-secondary mb-0">
                        <li class="mb-2"><strong>Genre:</strong> Symphonic Rock / Neoclassical</li>
                        <li class="mb-2"><strong>Active:</strong> 1994–Present</li>
                        <li class="mb-2"><strong>Origin:</strong> New York, NY</li>
                        <li><strong>Key Sound:</strong> Heavy Cello, Distorted Guitars, Choral Vocals</li>
                    </ul>
                </div>
            </div>

            <div class="alert alert-dark border-start border-info border-4 bg-transparent">
                <strong class="text-info">The Rescue:</strong><br>
                <span class="small text-muted">
                    In 2003, the band's original label (Solstice Records) declared bankruptcy. Fearing their catalog would be locked in legal limbo or sold for scraps, Holly O'Connell intervened. She purchased everything—masters, copyrights, and existing contracts.
                </span>
                <hr class="border-secondary opacity-25 my-2">
                <span class="small text-muted">
                    She did it to save <em>"Upon This Winter's Night"</em> for Julian Croft, and offered the ensemble a permanent home at The Fortress under their full banner, <strong>The Arctic Symphony Project</strong>.
                </span>
            </div>
        </div>

        <div class="col-lg-8">
            
            <h2 class="h4 fw-bold text-light border-bottom border-secondary pb-2 mb-4">Featured Release</h2>
            
            <!-- INLINE: Featured release showcase -->
            <div class="card glass-card border-secondary mb-4">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-arctic-symphony-project/2007-tales-from-the-solstice/album-art.jpg" 
                             class="img-fluid rounded-start h-100 object-fit-cover" 
                             alt="Tales from the Solstice Album Art - A figure in a wheelchair looking out an arched Gothic window toward the Northern Star.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="h5 fw-bold text-light">Tales from the Solstice</h3>
                            <p class="card-text text-secondary small">
                                A cult classic of symphonic holiday rock blending heavy metal instrumentation with classical composition and winter atmospheric storytelling.
                            </p>
                            <p class="card-text text-info small fst-italic">
                                <i class="fa-duotone fa-star me-2"></i>Includes the Safe Harbor anthem "Upon This Winter's Night"
                            </p>
                            
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                <a href="https://music.raggiesoft.com/the-arctic-symphony-project/2007-tales-from-the-solstice" target="_blank" rel="noopener" class="btn btn-info rounded-pill btn-sm px-4 fw-bold">
                                    <i class="fa-duotone fa-headphones me-2"></i>Stream &amp; Read Lyrics
                                </a>
                                <a href="/engine-room/artists/the-arctic-symphony-project/tales-of-the-solstice" class="btn btn-outline-info rounded-pill btn-sm px-4">
                                    <i class="fa-duotone fa-book-open-cover me-2"></i>Safe Harbor Lore
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>