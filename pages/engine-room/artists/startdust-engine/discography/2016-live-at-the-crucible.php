<?php
// Page data
$pageTitle = "Live at The Crucible (2016) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible';
$pageTheme = 'crucible'; // Triggers the Maroon/Orange "Ironhead" theme
?>

<div class="container py-5">
    <?php include ROOT_PATH . '/includes/components/_disclaimer-live-album.php'; ?>
    
    <div class="row align-items-center mb-5">
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Live at The Crucible Album Art',
            'variant' => 'warning' 
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Live at The Crucible
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2016 Homecoming Finale
            </p>
            <p class="lead text-secondary">
                Recorded live before 66,000 "Ironheads" at their alma mater's stadium. This isn't just a concert; it's a victory lap.
            </p>
            <p class="text-muted">
                Featuring the <strong>CPI Marching Forgers</strong> (the university marching band), this album captures the band at their absolute peak. It includes the "Sacred Anthem" ("Ignition") finally performed on home turf, and the legendary 13-minute performance of "Ad Astra."
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <h2 class="display-5 fw-bold text-uppercase border-bottom pb-2 mb-4">The Setlist</h2>
    
    <table class="table table-borderless table-hover fs-5 align-middle">
        <thead>
            <tr class="text-secondary text-uppercase small">
                <th style="width: 50px;">#</th>
                <th>Title</th>
                <th class="text-end">Length</th>
            </tr>
        </thead>
        <tbody class="border-top border-secondary">

            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">
                    <i class="fa-duotone fa-fire me-2"></i>Set 1: The Homecoming
                </td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">1.</td>
                <td>
                    <strong class="text-primary">Ignition (The Forger's Call)</strong>
                    <span class="badge bg-warning text-dark ms-2">feat. CPI Marching Band</span>
                    <small class="d-block text-muted">The sacred entrance anthem. The stadium registers on the Richter scale.</small>
                </td>
                <td class="text-end text-muted">7:05</td>
            </tr>
            
            <tr>
                <td class="text-muted fw-bold">2.</td>
                <td>
                    <strong class="text-primary">Re-Ignition</strong>
                    <small class="d-block text-muted">The 2015 reunion single. The "Engine" is back online.</small>
                </td>
                <td class="text-end text-muted">4:45</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">3.</td>
                <td>
                    <strong class="text-primary">The Stardust Engine</strong>
                    <small class="d-block text-muted">The "Lost #1." Performed with the original 1987 synth patch.</small>
                </td>
                <td class="text-end text-muted">5:12</td>
            </tr>

            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">
                    <i class="fa-duotone fa-dove me-2"></i>Set 2: The Freedom Era
                </td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">4.</td>
                <td>
                    <strong class="text-primary">Hard Reset</strong>
                    <small class="d-block text-muted">The song that launched their independent label.</small>
                </td>
                <td class="text-end text-muted">4:55</td>
            </tr>
            
            <tr>
                <td class="text-muted fw-bold">5.</td>
                <td>
                    <strong class="text-primary">Garbage</strong>
                    <small class="d-block text-muted">Ryan's "Jangle-Rage" anthem. Dedicated to "Julian."</small>
                </td>
                <td class="text-end text-muted">3:15</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">6.</td>
                <td>
                    <strong class="text-primary">Not Your Saint</strong>
                    <small class="d-block text-muted">Cassidy's arena-rock rejection of the "Victim" narrative.</small>
                </td>
                <td class="text-end text-muted">4:20</td>
            </tr>

            <tr class="table-group-divider">
                <td colspan="3" class="text-center py-3">
                    <i class="fa-duotone fa-stars text-info fs-4"></i>
                </td>
            </tr>

            <tr class="bg-dark bg-opacity-25 border-start border-4 border-info">
                <td class="text-info fw-bold">7.</td>
                <td>
                    <strong class="text-info">Escape Velocity (Ad Astra)</strong>
                    <span class="badge bg-info text-dark ms-2">Full Suite</span>
                    <small class="d-block text-light opacity-75">
                        The Magnum Opus. The stadium goes dark. 60,000 lights.
                        <br>
                        <em>I. The Cage / II. Ignition / III. The Cosmos / IV. Re-entry</em>
                    </small>
                </td>
                <td class="text-end text-info fw-bold">13:10</td>
            </tr>

            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">
                    <i class="fa-duotone fa-flag-checkered me-2"></i>Encore
                </td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">8.</td>
                <td>
                    <strong class="text-primary">Electric Color (The Crucible Suite)</strong>
                    <small class="d-block text-muted">The 1987 hit, extended into a 10-minute stadium singalong.</small>
                </td>
                <td class="text-end text-muted">10:24</td>
            </tr>

        </tbody>
    </table>
</div>