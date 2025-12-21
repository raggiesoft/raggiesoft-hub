<?php
// pages/discography/1992-friction.php
// Theme: Default (Stark/Dark) - NO Ad Astra space background
// Context: "Unavailable For Legal Reasons" / Seized Evidence

$pageTitle = "CASE 94-CIV-404: Seized Assets - The Stardust Engine";
// $pageTheme is intentionally omitted to use the default dark industrial background

// 1. Asset Setup
$seized_art = 'https://assets.raggiesoft.com/stardust-engine/music/1992-friction/album-art.jpg';
?>

<div class="container py-5 min-vh-100 d-flex flex-column justify-content-center">
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <div class="text-center mb-5">
                <div class="d-inline-block border border-danger text-danger px-3 py-1 mb-3 font-monospace fw-bold" 
                     style="letter-spacing: 3px;">
                    <i class="fa-duotone fa-gavel me-2"></i>SUPERIOR COURT OF CALIFORNIA
                </div>
                <h1 class="display-4 fw-bold text-uppercase text-light mb-0" style="font-family: 'Impact', sans-serif;">
                    Asset Seized
                </h1>
                <p class="lead text-secondary font-monospace mt-2">
                    Case No. 94-CIV-8821 // O'Connell v. Apex Records
                </p>
            </div>

            <div class="card bg-dark border-danger shadow-lg mb-5 position-relative overflow-hidden">
                
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                     style="z-index: 2; background: rgba(0,0,0,0.6); pointer-events: none;">
                    <div class="bg-danger text-dark fw-bold display-1 text-uppercase px-5 py-2" 
                         style="transform: rotate(-15deg); border: 4px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 20px #000;">
                        Evidence
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?php echo $seized_art; ?>" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="filter: blur(15px) grayscale(100%); opacity: 0.5;"
                             alt="Seized Evidence">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5">
                            <h2 class="h4 text-danger fw-bold text-uppercase mb-3">
                                <i class="fa-duotone fa-ban me-2"></i>Access Denied
                            </h2>
                            <p class="text-secondary small font-monospace mb-4">
                                <strong>COURT ORDER 114-B:</strong> The master recordings, artwork, and distribution rights for the project designated "FRICTION" (1992) have been permanently sealed under the terms of the 1994 settlement agreement.
                            </p>
                            <p class="text-secondary small font-monospace mb-0">
                                Any attempt to distribute, broadcast, or perform this material is a violation of the copyright held by <strong>Engine Room Records, LLC</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p class="text-secondary mb-4">
                    To understand why this album was destroyed, review the unsealed court transcripts.
                </p>
                <a href="/engine-room/artists/stardust-engine/lore/friction" class="btn btn-outline-danger rounded-pill px-5 py-3 shadow-glow">
                    <i class="fa-duotone fa-file-contract me-2"></i>Open Case File
                </a>
            </div>

        </div>
    </div>

</div>