<?php
// pages/engine-room/artists/mirage.php
// Artist Profile: Mirage (The First Signing)
// "We're going to build an engine, too."

$pageTitle = "Mirage - Engine Room Records Roster";

// --- CRITICAL CONFIGURATION ---
// This variable tells _tracklist-downloader.php where to find tracks.json/album.json
$album_path_web = '/engine-room-records/artists/mirage/2001-static-and-silence';
?>

<style>
    .industrial-header {
        background-color: #fff;
        background-image: radial-gradient(circle at 50% 50%, #f8f8f8 0%, #e9ecef 100%);
        border-bottom: 4px solid #000;
        color: #000;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .industrial-header {
        background-color: #111;
        background-image: radial-gradient(circle at 50% 50%, #222 0%, #000 100%);
        border-bottom: 4px solid #333;
        color: #fff;
    }
    .text-stenciled {
        font-family: 'Impact', 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .card-industrial {
        border: 2px solid #333;
        background-color: #f4f4f4;
        color: #000;
        transition: all 0.3s ease;
    }
    [data-bs-theme="dark"] .card-industrial {
        background-color: #1a1a1a;
        border-color: #555;
        color: #e0e0e0;
    }
    .badge-industrial {
        background-color: #000;
        color: #fff;
        border-radius: 0;
    }
    [data-bs-theme="dark"] .badge-industrial {
        background-color: #fff;
        color: #000;
    }
</style>

<div class="container-fluid p-0">
    
    <div class="industrial-header py-5">
        <div class="container py-5">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <span class="badge badge-industrial mb-3 p-2">ROSTER ID: ERR-002</span>
                    <h1 class="display-1 fw-bold text-stenciled mb-0">MIRAGE</h1>
                    <p class="lead font-monospace opacity-75 mt-2">
                        <i class="fa-solid fa-location-dot me-2"></i>ORIGIN: BLACKSBURG, VA
                        <span class="mx-3">|</span>
                        <i class="fa-solid fa-calendar me-2"></i>SIGNED: 2001
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="p-3 border border-2 border-dark d-inline-block bg-body">
                        <h6 class="text-uppercase fw-bold mb-1">Status:</h6>
                        <span class="text-success fw-bold font-monospace">
                            <i class="fa-solid fa-circle me-2 small"></i>ACTIVE / TOURING
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-7">
                    <h2 class="h3 fw-bold text-uppercase text-stenciled mb-4 border-bottom border-secondary pb-2">
                        The Mission Profile
                    </h2>
                    
                    <p class="lead">
                        Mirage is not just a band; it is a survival mechanism. Formed by <strong>Julian Croft</strong> and <strong>Maya Sterling</strong>, the collective blends the scale of cinematic rock opera with the raw grit of industrial metal.
                    </p>
                    
                    <div class="card card-industrial mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger text-uppercase mb-3">
                                <i class="fa-solid fa-file-contract me-2"></i>The "Paper Wall"
                            </h5>
                            <p class="card-text small">
                                Julian Croft ("Leo") and Maya Sterling ("Olivia") live as a married couple but remain legally single. [cite_start]Under current disability laws, marriage would strip Julian of his SSI and Medicaid—a death sentence for his care [cite: 14-16].
                            </p>
                            <p class="card-text small fw-bold mb-0">
                                Engine Room Records does not just distribute their music. We fund the "Paper Wall" legal trust that protects their assets and independence.
                            </p>
                        </div>
                    </div>

                    <h3 class="h5 fw-bold text-uppercase mt-5 mb-3">The "Safe Harbor" Lineup</h3>
                    <ul class="list-group rounded-0">
                        <li class="list-group-item bg-transparent border-secondary d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Julian Croft ("Leo")</strong>
                                <br><small class="opacity-75">Lead Vocals / Composition</small>
                            </div>
                            <i class="fa-solid fa-wheelchair text-muted"></i>
                        </li>
                        <li class="list-group-item bg-transparent border-secondary d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Maya Sterling ("Olivia")</strong>
                                <br><small class="opacity-75">Percussion / Vocals / Care Partner</small>
                            </div>
                            <i class="fa-solid fa-heart text-danger"></i>
                        </li>
                        <li class="list-group-item bg-transparent border-secondary">
                            <strong>The Sisters (The Croft Line):</strong> 
                            <span class="opacity-75">Izzy ("Luna"), Bea ("Stella"), Charlotte</span>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-5">
                    <div class="p-4 bg-body-tertiary border border-secondary h-100">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-database fa-2x me-3 text-secondary"></i>
                            <h3 class="h4 fw-bold text-uppercase mb-0">Archive: The Meeting</h3>
                        </div>
                        <p class="font-monospace small text-muted mb-4">
                            DATE: OCTOBER 2000<br>
                            LOC: CPI CAMPUS / NEWMAN HALL
                        </p>
                        
                        <p>
                            Julian Croft was 19, attempting to restart his life after escaping his abuser. [cite_start]He rolled into the back of Newman Hall during a CPI Orientation event [cite: 55-57].
                        </p>
                        <p>
                            On stage, <strong>Ryan O'Connell</strong> was strapped into his chair, screaming <em>Ignition (The Forger's Call)</em>. Julian watched Ryan command 60,000 "Ironheads" without standing up.
                        </p>
                        <p class="fst-italic border-start border-4 border-danger ps-3 my-4">
                            He turned to Maya and said:<br>
                            <strong class="text-danger">"We're going to build an engine, too."</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-tertiary py-5 border-top border-secondary">
        <div class="container">
            <div class="row align-items-center mb-5">
                
                <div class="col-md-5">
                    <div class="position-relative shadow-lg border border-4 border-white">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/mirage/2001-static-and-silence/album-art.jpg" 
                             class="img-fluid w-100" alt="Static & Silence Cover Art">
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 fw-bold text-uppercase small">
                            New Release (2001)
                        </div>
                    </div>
                </div>
                
                <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="display-4 fw-bold text-stenciled mb-2 text-body-emphasis">Static & Silence</h2>
                            <p class="lead opacity-75 mb-4">Released: 2001 // Rock Opera // Industrial</p>
                        </div>
                        <div class="text-end d-none d-lg-block">
                             <span class="badge badge-industrial p-2">CATALOG: ERR-004</span>
                        </div>
                    </div>
                    
                    <p class="lead mb-4">
                        The defining masterpiece of the post-grunge era. A harrowing, autobiographical concept album detailing "Leo's" (Julian's) survival of abuse, his cross-country escape on a Greyhound bus, and his return to the "Safe Harbor."
                    </p>
                    
                    <div class="alert alert-dark border-secondary d-flex align-items-center" role="alert">
                        <i class="fa-duotone fa-info-circle fs-3 me-3"></i>
                        <div>
                            <strong>Note for Listeners:</strong> This is a Double Album (2xCD). The player below will load both discs sequentially.
                        </div>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
            
        </div>
    </div>

    <div class="bg-body-tertiary py-4 text-center border-top border-secondary">
        <a href="/engine-room" class="btn btn-link text-decoration-none text-uppercase fw-bold text-body">
            <i class="fa-solid fa-arrow-left me-2"></i>Return to Roster
        </a>
    </div>

</div>