<?php
// Page data
$pageTitle = "Live in Chicago (1990) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/1990-live-in-chicago';
?>

<div class="container py-5">
    <?php
        // Include the reusable live album disclaimer
        include ROOT_PATH . '/includes/components/_disclaimer-live-album.php';
    ?>
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Live in Chicago Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Live in Chicago
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1990 "Stop-Gap" EP
            </p>
            <p class="lead text-secondary">
                Released in 1990 to capitalize on the <em>Neon Hearts</em> tour, this live EP is a snapshot of the band at the height of their "cold war" with Apex Records.
            </p>
            <p class="text-muted">
                The 26-minute runtime features a strictly studio-mandated setlist. While the performance captures the band's raw talent, the release is infamous for its <strong>engineering sabotage</strong>. Apex engineers intentionally altered the board feed to erase Cassidy's contributions, attempting to rebrand the band as a male-fronted rock act.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="row g-4 mt-4">
        
        <div class="col-lg-4">
            <div class="card border-danger bg-transparent h-100">
                <div class="card-body">
                    <h5 class="card-title text-danger fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-gavel me-2"></i>Exhibit A: The Intro
                    </h5>
                    <p class="card-text text-muted small">
                        Track 1 ("The Stardust Engine") became the central piece of evidence in the 1994 <em>Friction</em> trial. In the intro, Ryan explicitly introduces Cassidy as <strong>"my sister, Cassidy!"</strong>
                    </p>
                    <p class="card-text text-muted small mb-0">
                        This 10-second clip proved definitively that executive Julian Vance's defense—that he "didn't know" they were siblings—was a lie.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-warning bg-transparent h-100">
                <div class="card-body">
                    <h5 class="card-title text-warning fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-sliders-simple me-2"></i>Forensic Audio Note
                    </h5>
                    <p class="card-text text-muted small">
                        <strong>Subject:</strong> Track 1 - "The Stardust Engine"
                    </p>
                    <p class="card-text text-muted small">
                        Cassidy performed the leitmotif live. She heard it in her monitors. However, forensic analysis of the master tapes reveals her synth channel was <strong>muted at the board</strong>.
                    </p>
                    <p class="card-text text-muted small mb-0">
                        The result is a "Ghost Track." The song has holes where the melody should be, leaving Ryan's guitar to call out to a silence that never answers.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-info bg-transparent h-100">
                <div class="card-body">
                    <h5 class="card-title text-info fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-microphone-slash me-2"></i>The "Phantom" Vocal
                    </h5>
                    <p class="card-text text-muted small">
                        Like the synth, Cassidy's vocal mic was cut from the main mix. She is only audible due to <strong>microphone bleed</strong>.
                    </p>
                    <p class="card-text text-muted small mb-0">
                        You only hear her voice when Ryan physically moves stage-left to stand next to her. Her vocals are being picked up <em>by his microphone</em>, creating a distant, haunting harmony that fans—and Cassidy—wouldn't discover until the album was released.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
             <div class="card border-secondary bg-transparent">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                         <i class="fa-duotone fa-heart-crack fs-2 text-secondary me-3"></i>
                         <div>
                            <h5 class="card-title text-secondary fw-bold text-uppercase mb-2">
                                Performance Log: "If You Walked Away"
                            </h5>
                            <p class="card-text text-muted small">
                                Cassidy fought to cut this song from the setlist. Singing about abandonment while the label was actively trying to separate her from her brother was psychologically devastating.
                            </p>
                            <p class="card-text text-muted small mb-0">
                                <strong>Aftermath:</strong> Immediately following the show, Cassidy suffered a severe breakdown backstage. Ryan had to hold her in a deep-pressure hug for twenty minutes to bring her back to baseline.
                            </p>
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>