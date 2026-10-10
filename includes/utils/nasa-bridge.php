<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: NASA Exoplanet API Bridge
 * ============================================================================
 * ROLE: Fetches live exoplanet data directly from the NASA/Caltech Exoplanet 
 *       Archive (TAP sync). Used dynamically within the Stardust Engine and 
 *       related sci-fi properties to root narratives in actual astrophysical data.
 * 
 * INTEGRATION: Uses a simple stream context wrapper to avoid cURL dependencies.
 *              Results are converted on-the-fly from Parsecs to Light Years,
 *              providing round-trip communication times for lore context.
 * 
 * MAINTENANCE: Ensure the TAP query syntax remains valid if Caltech updates their
 *              database schemas (e.g., the `ps` table or `sy_dist` column). The 
 *              timeout (3s) prevents the hub from stalling if NASA is offline.
 * ============================================================================
 */
// includes/utils/nasa-bridge.php

function fetch_nasa_distance() {
    // 1. Define the Stars we want to check (adding more is easy)
    $targets = "'Kepler-452 b', 'Proxima Cen b', 'TRAPPIST-1 e', 'Kepler-186 f'";
    
    // 2. Build the API Query
    // 'ps' = Planetary Systems table
    // 'sy_dist' = System Distance in Parsecs
    $query = "select pl_name, sy_dist from ps where pl_name in ($targets)";
    $url = "https://exoplanetarchive.ipac.caltech.edu/TAP/sync?query=" . urlencode($query) . "&format=json";

    // 3. Fetch Data (with a timeout so your site doesn't hang if NASA is down)
    $context = stream_context_create(['http' => ['timeout' => 3]]);
    $json = @file_get_contents($url, false, $context);

    if ($json === false) return [];

    $data = json_decode($json, true);
    
    // 4. Process & Convert (The Physics Part)
    // [LOGIC] Convert astronomical Parsecs to Light Years and calculate signal latency
    $results = [];
    foreach ($data as $star) {
        $parsecs = floatval($star['sy_dist']);
        $lightYears = $parsecs * 3.26156; // High-precision conversion
        
        $results[] = [
            'name' => $star['pl_name'],
            'distance_pc' => round($parsecs, 2),
            'distance_ly' => round($lightYears, 2),
            'round_trip_time' => round($lightYears * 2) // Signal there + Signal back
        ];
    }
    
    return $results;
}
?>