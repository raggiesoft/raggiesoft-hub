<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/case-studies/phys-100-report.php
 * Role: Live NASA Exoplanet Signal Latency Simulation (`/case-studies/phys-100-report`)
 * Route Manifest: `/data/routes/case-studies.json` -> `"/case-studies/phys-100-report"`
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Demonstrates live external scientific API consumption in PHP server-side
 * rendering! When a visitor opens `/case-studies/phys-100-report`:
 *   1. Includes `includes/utils/nasa-bridge.php` and calls `fetch_nasa_distance()`,
 *      which queries Caltech/NASA's Exoplanet Archive TAP API (`Kepler-452 b`,
 *      `Proxima Cen b`, `TRAPPIST-1 e`, `Kepler-186 f`).
 *   2. Reads the current 4-digit year via `date("Y")` (e.g., `2026`).
 *   3. Loops through `$alienTargets` (`foreach`) to compute `$replyYear`
 *      (`$currentYear + $target['round_trip_time']`—the earliest calendar year
 *      a speed-of-light radio reply could return to Earth!) and renders a
 *      visual `.progress-bar` row for each exoplanet.
 *
 * INPUTS:
 * - `includes/utils/nasa-bridge.php` -> `fetch_nasa_distance()` array.
 *
 * OUTPUT PRODUCED:
 * - Dynamic `.card` list of real-time exoplanet light-speed round-trip calculations.
 * ============================================================================
 *
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

<div class="card bg-base-200 border border-base-300 border-primary mb-4 w-100" style="--body-padding: 0; --header-padding: 0;">

    <div class="card-header bg-primary text-white p-3">
        Live Signal Simulation (Data Source: NASA Exoplanet Archive)
    </div>
    <div class="list-group list-group-flush">
        <?php /* Iterate over each exoplanet record returned by `fetch_nasa_distance()` (gracefully renders 0 rows if NASA timed out and returned `[]`) */ ?>
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
                <?php /* Inverse distance visualization (`role="progressbar"`) where closer star systems fill a larger bar percentage */ ?>
                <div class="progress" style="height: 5px;">
                    <?php $percent = (100 / $target['distance_ly']) * 100; ?>
                    <div class="progress-bar bg-warning" role="progressbar" 
                         style="width: <?php echo $percent; ?>%"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>