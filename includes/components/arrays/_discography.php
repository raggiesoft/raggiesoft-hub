<?php
// includes/components/arrays/_discography.php
// v2.0 - Enhanced Metadata Structure (Era Descriptions & Timelines)

$discographyLibrary = [
    'apex' => [
        'label' => 'Apex "Cold War" Era', // Sidebar / Radio Label
        'heading' => '1987-1992: The Apex "Cold War"',
        'description' => 'The band\'s first releases were defined by a "cold war" with their label, Apex Records, who suppressed their rock sound to push a marketable synth-pop image.',
        'albums' => [
            // READY
            ['title' => 'Electric Color', 'year' => '1987', 'url' => '/engine-room/artists/stardust-engine/discography/1987-electric-color', 'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1987-electric-color/album-art.jpg'],
            // READY
            ['title' => 'Neon Hearts', 'year' => '1989', 'url' => '/engine-room/artists/stardust-engine/discography/1989-neon-hearts', 'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1989-neon-hearts/album-art.jpg'],
            // READY
            ['title' => 'Live in Chicago', 'year' => '1990', 'url' => '/engine-room/artists/stardust-engine/discography/1990-live-in-chicago', 'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1990-live-in-chicago/album-art.jpg'],
            // CANCELED
            ['title' => 'Friction', 'year' => '1992', 'url' => '/engine-room/artists/stardust-engine/discography/1992-friction', 'extra' => '<span class="badge bg-danger ms-2" style="font-size: 0.6em;">CANCELED</span>', 'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1992-friction/album-art.jpg'],
        ]
    ],
    'freedom' => [
        'label' => 'The "Freedom" Era',
        'heading' => '1995-2007: The "Freedom" Era',
        'description' => 'After the contract was voided, the band retreated to "The Fortress"—a warehouse studio where they finally forged the industrial-rock sound they always heard in their heads.',
        'albums' => [
            // READY
            ['title' => 'The Warehouse Tapes', 'year' => '1995', 'url' => '/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes', 'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1995-the-warehouse-tapes/album-art.jpg'],
            // READY (With Folder Override)
            [
                'title' => 'Ad Astra (Single)', 
                'year' => '1995', 
                'url' => '/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra',
                'folder' => '1995-ad-astra-single',
                'img' => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1995-ad-astra-single/album-art.jpg'
            ],
            // NOT READY
            // ['title' => 'Hard Reset', 'year' => '1997', 'url' => '/engine-room/artists/stardust-engine/discography/1997-hard-reset', 'img' => '...'],
        ]
    ],
    'reignition' => [
        'label' => 'The "Re-Ignition" Era',
        'heading' => '2015-2016: Homecoming',
        'description' => 'Following an eight-year hiatus to focus on family, the band returned with a polished, powerful sound that reconciled their pop history with their rock identity.',
        'albums' => [
            // NOT READY
            // ['title' => 'Re-Ignition', 'year' => '2015', 'url' => '/engine-room/artists/stardust-engine/discography/2015-re-ignition', 'img' => '...'],
        ]
    ],
    'modern' => [
        'label' => 'Modern Era & Soundtracks',
        'heading' => '2017-Present: The Transmission',
        'description' => 'The band no longer tours for profit. They operate as a musical collective, releasing atmospheric soundtracks and concept albums broadcast from the Engine Room.',
        'albums' => [
            // NOT READY
            // ['title' => 'Knox (O.S.T.)', 'year' => '2017', 'url' => '/engine-room/artists/stardust-engine/discography/2017-knox-ost', 'img' => '...'],
        ]
    ]
];
?>