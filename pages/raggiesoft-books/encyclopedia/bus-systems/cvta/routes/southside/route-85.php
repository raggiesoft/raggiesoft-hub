<?php
// pages/raggiesoft-books/encyclopedia/bus-systems/cvta/routes/southside/route-85.php

$routeMeta = [
    'id' => '85',
    'name' => 'Town Point Road',
    'agency' => 'Coastal Virginia Transit Authority (CVTA)',
    'service' => 'Weekday Service Only',
    'alerts' => [
        // 1. The classic string format automatically gets an "info" icon
        'Holiday Schedule: A Sunday schedule will be observed on major holidays.',
        
        // 2. A specific "warning" for detours
        [
            'type' => 'warning',
            'text' => 'Detour: The stop at High St & Court St is closed due to a water main break. Please board at High St & Dinwiddie St.'
        ],

        // 3. A specific "stop" for major service disruptions
        [
            'type' => 'stop',
            'text' => 'Major Reroute: Due to the County Street Parking Garage construction project, buses will meet at Crawford Street & High Street instead of County Street & Court Street.'
        ]
    ],
    'transfers' => [
        'Churchland Square' => 'Route 47'
    ]
];

$schedules = [
    'Weekday' => [
        'inbound' => [
            'stops' => [
                "Community College of Hampton Roads",
                "Gateway Dr. & Twin Pines Rd.",
                "Churchland Square"
            ],
            'times' => [
                ["6:15a", "-", "6:30a"],
                ["-", "6:45a", "7:00a"],
                ["-", "7:15a", "7:30a"],
                ["7:45a", "-", "8:00a"],
                ["-", "8:15a", "8:30a"],
                ["8:45a", "-", "9:00a"],
                ["-", "9:15a", "9:30a"],
                ["9:45a", "-", "10:00a"],
                ["-", "10:15a", "10:30a"],
                ["10:45a", "-", "11:00a"],
                ["-", "11:15a", "11:30a"],
                ["11:45a", "-", "12:00p"],
                ["-", "12:15p", "12:30p"],
                ["12:45p", "-", "1:00p"],
                ["-", "1:15p", "1:30p"],
                ["1:45p", "-", "2:00p"],
                ["-", "2:15p", "2:30p"],
                ["2:45p", "-", "3:00p"],
                ["-", "3:15p", "3:30p"],
                ["3:45p", "-", "4:00p"],
                ["-", "4:15p", "4:30p"],
                ["4:45p", "-", "5:00p"],
                ["-", "5:15p", "5:30p"],
                ["5:45p", "-", "6:00p"],
                ["-", "6:15p", "6:30p"],
                ["6:45p", "-", "7:00p"],
            ]
        ],
        'outbound' => [
            'stops' => [
                "Churchland Square",
                "Gateway Dr. & Twin Pines Rd.",
                "Community College of Hampton Roads"
            ],
            'times' => [
                ["6:30a", "6:45a", "-"],
                ["7:00a", "7:15a", "-"],
                ["7:30a", "-", "7:45a"],
                ["8:00a", "8:15a", "-"],
                ["8:30a", "-", "8:45a"],
                ["9:00a", "9:15a", "-"],
                ["9:30a", "-", "9:45a"],
                ["10:00a", "10:15a", "-"],
                ["10:30a", "-", "10:45a"],
                ["11:00a", "11:15a", "-"],
                ["11:30a", "-", "11:45a"],
                ["12:00p", "12:15p", "-"],
                ["12:30p", "-", "12:45p"],
                ["1:00p", "1:15p", "-"],
                ["1:30p", "-", "1:45p"],
                ["2:00p", "2:15p", "-"],
                ["2:30p", "-", "2:45p"],
                ["3:00p", "3:15p", "-"],
                ["3:30p", "-", "3:45p"],
                ["4:00p", "4:15p", "-"],
                ["4:30p", "-", "4:45p"],
                ["5:00p", "5:15p", "-"],
                ["5:30p", "-", "5:45p"],
                ["6:00p", "6:15p", "-"],
                ["6:30p", "-", "6:45p"],
            ]
        ]
    ],
    
    // Example of how you would add a weekend schedule:
    /*
    'Saturday' => [
        'inbound' => [ 'stops' => [...], 'times' => [...] ],
        'outbound' => [ 'stops' => [...], 'times' => [...] ]
    ]
    */
];
?>

<div class="container pt-4 pb-0">
    <p class="lead">Route 85 is the primary campus connector for the Portsmouth Campus, offering rapid transit to the Churchland retail corridor.</p>
</div>

<?php
// RENDER THE COMPONENT
include ROOT_PATH . '/includes/components/bus-service/bus-timetable.php';
?>