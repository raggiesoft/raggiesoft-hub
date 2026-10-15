<?php
// includes/components/arrays/_discography.php
// v2.0 - Enhanced Metadata Structure (Era Descriptions & Timelines)

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Discography Configuration Array
 * Purpose: Defines the central data structure for The Stardust Engine's discography, organized by narrative "Eras".
 * 
 * Strategy & Implementation:
 * - This file acts as a pseudo-database (Data Layer) that feeds into the UI components.
 * - Structured as a multi-dimensional associative array. Each key represents an Era containing metadata 
 *   and an array of Album definitions.
 * - Heavily utilizes `$cdnBaseUrl` to dynamically resolve static assets (album art) based on the environment.
 * 
 * Maintenance Recommendations:
 * - When adding new albums, uncomment the "NOT READY" lines and verify the paths exist within the CDN and server routing.
 * - Always maintain the exact key structure (`title`, `year`, `url`, `img`) so that upstream components (e.g., `_tracklist-downloader.php`) 
 *   do not break. The optional `folder` key is used to override path matching if the folder differs from the URL slug.
 */

// Master Discography Array: Feeds data to the front-end timeline and album routing engine.
$discographyLibrary = [
    'apex' => [
        'label' => 'Apex "Cold War" Era', // Sidebar / Radio Label
        'heading' => '1987-1992: The Apex "Cold War"',
        'description' => 'The band\'s first releases were defined by a "cold war" with their label, Apex Records, who suppressed their rock sound to push a marketable synth-pop image.',
        'albums' => [
            // READY
            ['title' => 'Electric Color', 'year' => '1987', 'url' => '/engine-room/artists/stardust-engine/discography/1987-electric-color', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1987-electric-color/album-art.jpg'],
            // READY
            ['title' => 'Neon Hearts', 'year' => '1989', 'url' => '/engine-room/artists/stardust-engine/discography/1989-neon-hearts', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1989-neon-hearts/album-art.jpg'],
            // READY
            ['title' => 'Live in Chicago', 'year' => '1990', 'url' => '/engine-room/artists/stardust-engine/discography/1990-live-in-chicago', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1990-live-in-chicago/album-art.jpg'],
            // CANCELED
            ['title' => 'Friction', 'year' => '1992', 'url' => '/engine-room/artists/stardust-engine/discography/1992-friction', 'extra' => '<span class="badge bg-danger ms-2" style="font-size: 0.6em;">CANCELED</span>', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1992-friction/album-art.jpg'],
        ]
    ],
    'freedom' => [
        'label' => 'The "Freedom" Era',
        'heading' => '1995-2001: The "Freedom" Era',
        'description' => 'After the contract was voided, the band retreated to "The Fortress"—a warehouse studio where they finally forged the industrial-rock sound they always heard in their heads.',
        'albums' => [
            ['title' => 'The Warehouse Tapes', 'year' => '1995', 'url' => '/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1995-the-warehouse-tapes/album-art.jpg'],
            [
                'title' => 'Ad Astra (Single)', 
                'year' => '1996', 
                'url' => '/engine-room/artists/stardust-engine/discography/1996-escape-velocity-ad-astra',
                'folder' => '1996-ad-astra-single',
                'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1996-ad-astra-single/album-art.jpg'
            ],
            ['title' => 'Hard Reset', 'year' => '1997', 'url' => '/engine-room/artists/stardust-engine/discography/1997-hard-reset', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1997-hard-reset/album-art.jpg'],
            ['title' => 'Forger Nation War Chest', 'year' => '1997', 'url' => '/engine-room/artists/stardust-engine/discography/1997-forger-nation-war-chest', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/1997-forger-nation-war-chest/album-art.jpg'],
            ['title' => 'Midnight Drivers', 'year' => '2001', 'url' => '/engine-room/artists/stardust-engine/discography/2001-midnight-drivers', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2001-midnight-drivers/album-art.jpg'],
        ]
    ],
    'err-planetarium' => [
        'label' => 'The Twin Moons & Progress Street',
        'heading' => '2003-2004: The Twin Moons Project & Blacksburg Homecoming',
        'description' => 'An ambitious dual-release planetarium project confronting the trauma of The Crash of \'90, followed immediately by a nostalgic 2004 homecoming to Progress Street NW in Blacksburg.',
        'albums' => [
            ['title' => 'Sanctuary (Zero-G)', 'year' => '2003', 'url' => '/engine-room/artists/stardust-engine/discography/2003-moon-1-sanctuary-zero-g', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2003-sanctuary-zero-g/album-art.jpg'],
            ['title' => 'Mile Marker 98', 'year' => '2003', 'url' => '/engine-room/artists/stardust-engine/discography/2003-moon-2-mile-marker-98', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2003-mile-marker-98/album-art.jpg'],
            ['title' => 'Progress Street', 'year' => '2004', 'url' => '/engine-room/artists/stardust-engine/discography/2004-progress-street', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2004-progress-street/album-art.jpg'],
        ]
    ],
    'burnout-hiatus' => [
        'label' => 'The Burnout Hiatus',
        'heading' => '2007-2008: The Burnout Hiatus & Archival Releases',
        'description' => 'After releasing three full studio albums in under two years—culminating in 2004\'s Progress Street—exhaustion pushed the band into their "Burnout Hiatus" (2004-2014).',
        'albums' => [
            ['title' => 'Lost Sounds', 'year' => '2007', 'url' => '/engine-room/artists/stardust-engine/discography/2007-lost-sounds', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2007-lost-sounds/album-art.jpg'],
            ['title' => 'Our Own Frequency', 'year' => '2008', 'url' => '/engine-room/artists/stardust-engine/discography/2008-our-own-frequency', 'img' => $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/2008-our-own-frequency/album-art.jpg'],
        ]
    ]
];
?>