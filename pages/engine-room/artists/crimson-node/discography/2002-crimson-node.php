<?php
// pages/engine-room/artists/crimson-node/discography/2002-crimson-node.php
// Page data
$pageTitle = "Crimson Node (2002) - Crimson Node";
$album_path_web = '/engine-room-records/artists/crimson-node/2002-crimson-node';

?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Crimson Node Album Art',
            'variant' => 'node'
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0 brand-font">
                Crimson Node
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2002 Debut Album
            </p>
            <p class="lead text-secondary">
                Recorded entirely in the heavily modified, sound-dampened Garage Studio of the Kids House, <em>Crimson Node</em> is the self-titled debut album of the family's collaborative 1980s pop/rock project.
            </p>
            <p class="text-muted">
                Driven by heavy MIDI synth bass lines, artillery-strike drumming, and clinical rhythm guitar, the album introduces the band's signature "Rotating Vocalist" protocol. Managed and produced entirely by Matt Miller from his central wheelchair-accessible command station, this record bridges the chaotic precision of Albemarle County with the heavy, industrial legacy of Engine Room Records.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <!-- Injects the tracklist, lyrics, and streaming links from tracks.json -->
    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-3 border-bottom pb-2">
        <i class="fa-duotone fa-box-archive me-2"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <!-- Utilizing the bg-hud-red and border-glow utility classes from extras.css -->
            <div class="alert alert-dark border-glow bg-hud-red h-100 mb-0 shadow-glow">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-warehouse fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-uppercase mb-1">The Garage Studio</h5>
                        <p class="mb-0 small text-muted">
                            Engineered in the Kids House attached garage, the space was entirely repurposed from vehicle storage into a sound-dampened rehearsal room. Matt oversaw all audio production from his custom Vanguard LogicPad rig, utilizing a strict "Rotating Vocalist" protocol for his sister and cousins to seamlessly trade off lead duties depending on the track's required energy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <!-- Utilizing the bg-hud-blue utility class from extras.css -->
            <div class="alert alert-dark border-secondary bg-hud-blue h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-file-signature fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-uppercase mb-1">The Engine Room Signing</h5>
                        <p class="mb-0 small text-muted">
                            Discovered by <a href="/engine-room/artists/stardust-engine/band/ryan-oconnell">Ryan O'Connell</a> during a Commonwealth Polytechnic Institute (CPI) open house, the burned CD-R demo tape was passed to Engine Room Records CEO Holly O'Connell. Recognizing a shared ethos of independence, fierce family loyalty, and blue-collar musical integrity, the label officially signed <em>Crimson Node</em> to their Blacksburg-based roster.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>