<?php
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