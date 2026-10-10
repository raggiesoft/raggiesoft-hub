<?php
/**
 * ============================================================================
 * ARCHITECTURE & EXTERNAL API INTEGRATION:
 * This file serves as a live signal simulation for the PHYS-100 case study.
 * It demonstrates the integration of the NASA Exoplanet Archive via a custom
 * data bridge to calculate interstellar communication latency.
 * 
 * Future Maintenance:
 * - Ensure the `nasa-bridge.php` include path remains valid.
 * - The `$alienTargets` array must provide 'round_trip_time', 'name', and 'distance_ly'.
 * - The UI relies on Bootstrap 5 progress bars to visualize distance dynamically.
 * ============================================================================
 */
// ARCHITECTURE: Engage the external API bridge to fetch live astronomical data
include('includes/utils/nasa-bridge.php');
$alienTargets = fetch_nasa_distance();
$currentYear = date("Y");
?>

<div class="card border-primary mb-4">
    <div class="card-header bg-primary text-white">
        Live Signal Simulation (Data Source: NASA Exoplanet Archive)
    </div>
    <div class="list-group list-group-flush">
        <?php foreach($alienTargets as $target): ?>
            <!-- ARCHITECTURE: Calculate real-time latency based on light-speed constraints -->
            <?php $replyYear = $currentYear + $target['round_trip_time']; ?>
            
            <div class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $target['name']; ?></h5>
                    <small class="text-muted"><?php echo $target['distance_ly']; ?> Light Years away</small>
                </div>
                <p class="mb-1">
                    If we broadcast "Hello" today, a reply cannot reach Earth until the year 
                    <strong><?php echo $replyYear; ?></strong>.
                </p>
                <div class="progress" style="height: 5px;">
                    <?php $percent = (100 / $target['distance_ly']) * 100; ?>
                    <div class="progress-bar bg-warning" role="progressbar" 
                         style="width: <?php echo $percent; ?>%"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>