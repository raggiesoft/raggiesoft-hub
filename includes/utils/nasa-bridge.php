<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/utils/nasa-bridge.php
 * Role: Live NASA/Caltech Exoplanet Archive API Client (`fetch_nasa_distance()`)
 * Domain: https://raggiesoft.com (Used by `/pages/case-studies/phys-100-report.php`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Queries NASA & Caltech's public Exoplanet Archive Table Access Protocol (TAP)
 * API in real time for four known exoplanets (`Kepler-452 b`, `Proxima Cen b`,
 * `TRAPPIST-1 e`, and `Kepler-186 f`), converts their measured distances from
 * astronomical parsecs (`sy_dist`) into light-years ($1\text{ pc} \approx 3.26156\text{ ly}$),
 * and computes the round-trip radio-signal latency (`lightYears * 2`).
 *
 * INPUTS:
 * - External HTTPS GET request to `exoplanetarchive.ipac.caltech.edu/TAP/sync`
 *   with an ADQL/SQL-like `SELECT` query URL-encoded via `urlencode()`.
 *
 * OUTPUT PRODUCED:
 * - Returns an indexed array of associative arrays (`name`, `distance_pc`,
 *   `distance_ly`, `round_trip_time`), or `[]` if NASA's API times out after 3s.
 * ============================================================================
 *
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
    // 1. Define the Stars/Exoplanets we want to check (adding more is easy)
    $targets = "'Kepler-452 b', 'Proxima Cen b', 'TRAPPIST-1 e', 'Kepler-186 f'";
    
    // 2. Build the ADQL (Astronomical Data Query Language) API Query
    // 'ps' = Planetary Systems table
    // 'sy_dist' = System Distance from Earth in Parsecs
    // `urlencode()` safely escapes spaces, quotes, and commas for an HTTP URL query string.
    $query = "select pl_name, sy_dist from ps where pl_name in ($targets)";
    $url = "https://exoplanetarchive.ipac.caltech.edu/TAP/sync?query=" . urlencode($query) . "&format=json";

    // 3. Fetch Data (with a 3-second stream timeout so the page never hangs if NASA is down)
    $context = stream_context_create(['http' => ['timeout' => 3]]);
    $json = @file_get_contents($url, false, $context);

    // Fail gracefully with an empty list if NASA's endpoint is unreachable:
    if ($json === false) return [];

    // Decode NASA's JSON array into a PHP associative array:
    $data = json_decode($json, true);
    
    // 4. Process & Convert (The Physics Part)
    // [LOGIC] Convert astronomical Parsecs to Light Years and calculate two-way signal latency
    $results = [];
    foreach ($data as $star) {
        // `floatval()` converts the string/numeric field from JSON into a floating-point number:
        $parsecs = floatval($star['sy_dist']);
        $lightYears = $parsecs * 3.26156; // High-precision conversion (1 parsec = 3.26156 light-years)
        
        $results[] = [
            'name' => $star['pl_name'],
            'distance_pc' => round($parsecs, 2),
            'distance_ly' => round($lightYears, 2),
            'round_trip_time' => round($lightYears * 2) // Years for radio signal there + reply back at speed of light
        ];
    }
    
    return $results;
}
?>