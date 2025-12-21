<?php
// pages/raggiesoft-books/aethel-saga/soundtrack.php
// THE OST PAGE: "The Silver Gauntlet of Aethel"
// Design: 1980s Vinyl Liner Notes / High-Fidelity Audio / Pure Internal

$pageTitle = "Original Soundtrack - The Silver Gauntlet of Aethel";

// 1. ASSETS CONFIGURATION
$album_path_web = '/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel';
$poster_bg = 'https://assets.raggiesoft.com/aethel/images/aethel-hero.jpg';
$cover_art = 'https://assets.raggiesoft.com/engine-room-records/artists/firelight/2025-silver-gauntlet-of-aethel/album-art.jpg';
$label_logo = 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png';
?>

<div class="aethel-hero py-5 text-center d-flex align-items-center" 
     style="min-height: 60vh; 
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8) 80%, #000000 100%), url('<?php echo $poster_bg; ?>'); 
            background-size: cover; 
            background-position: center top;">
    
    <div class="container relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-3">
                    <span class="badge bg-black border border-warning text-warning rounded-pill px-3 py-2 text-uppercase letter-spacing-2 shadow-lg">
                        <i class="fa-duotone fa-compact-disc me-2"></i>Original Motion Picture Soundtrack
                    </span>
                </div>
                
                <h1 class="display-3 fw-bold text-white mb-2 cinzel-font text-shadow-lg">
                    THE SILVER GAUNTLET
                </h1>
                <h2 class="h3 text-warning mb-4 cinzel-font opacity-90 text-shadow-sm letter-spacing-2">
                    OF AETHEL
                </h2>
                
                <p class="lead text-light text-shadow-sm" style="font-family: 'Georgia', serif;">
                    Music Composed and Arranged by <strong class="text-white">Firelight</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-black text-white py-5 border-top border-warning border-3" style="min-height: 100vh;">
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="sticky-top" style="top: 100px; z-index: 1;">
                    
                    <div class="position-relative mb-4">
                        <img src="<?php echo $cover_art; ?>" 
                             alt="Soundtrack Cover" 
                             class="img-fluid rounded shadow-lg border border-secondary w-100">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded" 
                             style="background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 50%); pointer-events: none;">
                        </div>
                    </div>

                    <div class="card bg-dark border-secondary mb-4">
                        <div class="card-header bg-body-tertiary border-secondary">
                            <h5 class="mb-0 cinzel-font text-warning">Liner Notes</h5>
                        </div>
                        <div class="card-body text-secondary small" style="line-height: 1.7;">
                            <p>
                                <strong class="text-white">The Sound of Myth.</strong> 
                                This collection represents a journey not just through the four eras of Aethel, but through the sonic landscape of 1980s fantasy cinema.
                            </p>
                            <p>
                                From the soaring, brass-heavy fanfares of <em>"A Sister's Love"</em> to the cold, digital synths of the Iron Era, every track was crafted to be the invisible narrator of the saga.
                            </p>
                            <hr class="border-secondary opacity-25">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><strong class="text-white">Release Date:</strong> 2025</li>
                                <li class="mb-1"><strong class="text-white">Total Duration:</strong> 1 Hour 14 Minutes</li>
                                <li class="mb-1"><strong class="text-white">Format:</strong> High-Fidelity Stereo</li>
                                <li><strong class="text-white">Label:</strong> Engine Room Records</li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert alert-dark border-secondary d-flex align-items-center mb-4">
                        <i class="fa-duotone fa-headphones-simple fa-2x me-3 text-info"></i>
                        <div class="small text-secondary">
                            <strong class="text-white d-block">Best Experienced with Headphones</strong>
                            This album features wide stereo separation and deep orchestral dynamics.
                        </div>
                    </div>

                    <div class="text-center opacity-50 mt-4">
                        <img src="<?php echo $label_logo; ?>" 
                             alt="Engine Room Records" 
                             class="img-fluid" 
                             style="max-width: 120px; filter: invert(1) grayscale(100%); mix-blend-mode: screen;">
                    </div>

                </div>
            </div>

            <div class="col-lg-8 ps-lg-5">
                
                <div class="d-flex align-items-end justify-content-between mb-4 border-bottom border-secondary pb-3">
                    <div>
                        <h3 class="cinzel-font text-white mb-1">Tracklist</h3>
                        <span class="text-secondary small text-uppercase letter-spacing-1">Complete Recordings</span>
                    </div>
                    <div class="text-end">
                        <span class="badge bg-primary bg-opacity-25 text-primary border border-primary-subtle">
                            <i class="fa-solid fa-check me-1"></i> Mastered
                        </span>
                    </div>
                </div>

                <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

                <div class="mt-5 pt-4 border-top border-secondary opacity-50 text-center small font-monospace">
                    <p class="mb-1">Recorded at The Engine Room / Norfolk, VA</p>
                    <p class="mb-0">All Songs &copy; 2025 Firelight / RaggieSoft Publishing</p>
                </div>

            </div>
        </div>
    </div>
</div>