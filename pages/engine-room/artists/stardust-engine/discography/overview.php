<?php
// pages/discography/overview.php
// v3.2 - Switched to Dynamic JSON Fetch for CDN syncing

$pageTitle = "Discography Overview - The Stardust Engine";

// Fetch the albums.json file directly from the CDN
$jsonUrl = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/albums.json';
$jsonData = @file_get_contents($jsonUrl);

// Decode the JSON into an associative array so the HTML loop below can read it
if ($jsonData !== false) {
    $discographyLibrary = json_decode($jsonData, true);
} else {
    // Failsafe in case the CDN is unreachable
    $discographyLibrary = [];
}
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            Discography
        </h1>