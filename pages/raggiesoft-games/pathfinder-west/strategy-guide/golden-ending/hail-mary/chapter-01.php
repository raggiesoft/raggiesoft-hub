<?php
// /pages/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary-pasco/chapter-1.php

$pageTitle = "Chapter 1: The False Start | Pathfinder West";
$metaDescription = "Chapter 1 of the Pathfinder West strategy guide. Roxy, Allison, and Alanna discover Jason is missing and navigate the Newport decoy.";

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
?>

<main class="container my-5 strategy-guide-chapter">
    <header class="mb-5 pb-3 border-bottom">
        <h1 class="display-4 fw-bold">Chapter 1: The False Start</h1>
        <p class="text-muted fs-5">Saturday, April 1, 2006 — Virginia Beach to Island 1</p>
    </header>

    <article class="narrative-prose fs-5 lh-lg">
        <p>The silence in the Virginia Beach duplex was deafening. Roxy stared at the empty drum throne, her drumsticks tapping a frantic, anxious rhythm against her thigh. Jason was <em>nevah</em> late. The three of them operated like a synchronized clock, and for her twin to pull a no-call, no-show ahead of their summer tour was fundamentally impossible.</p>

        <p>Allison leaned against the doorframe, her arms crossed and a deep frown etched onto her face. Roxy didn't even need to ask; leaving Allison behind wasn't an option. Alanna, standing near the amps, quickly grabbed her jacket. The rhythm section wasn't splitting up today. The three of them bolted for Roxy's sedan.</p>

        <p>The drive across the water to Portsmouth was a blur of mounting panic. When Roxy shoved her spare key into the lock of Tanya’s apartment, the door swung open to reveal a pristine, eerily quiet living space. Jason and Tanya were both gone.</p>

        <p>"Check the bedroom," Roxy ordered, moving toward the kitchen counter.</p>

        <p>Sitting perfectly squared on the island was a stack of glossy tourist brochures for Newport, Rhode Island. Roxy stared at them, her heart hammering against her ribs. She and Jason were from Newport. It made complete, logical sense that if Tanya was taking him anywhere to isolate him, she would weaponize his own nostalgia.</p>

        <p>"Rhody?" Roxy yelled down the hallway, her thick New England accent clipping her words. "Why the hell are they goin' to Rhody?"</p>

        <p>In the bedroom, Alanna and Allison were searching the nightstands. Sitting on the dresser was a double-disc CD set: <em>Static & Silence</em> by The Paper Wall.</p>

        <div class="row my-4">
            <div class="col-md-6 text-center">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-paper-wall/2001-static-and-silence-book-1/album-art.jpg" alt="Static & Silence Book 1" class="img-fluid rounded shadow-sm">
                <p class="text-muted small mt-2">Book 1: The Long Road West</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-paper-wall/2001-static-and-silence-book-2/album-art.jpg" alt="Static & Silence Book 2" class="img-fluid rounded shadow-sm">
                <p class="text-muted small mt-2">Book 2: The Journey Home</p>
            </div>
        </div>

        <p>Roxy picked up the jewel case. It was heavy, containing both <em>Book 1: The Long Road West</em> and <em>Book 2: The Journey Home</em>. Something to listen to in case they got bored of the radio, she figured. She shoved it into her jacket pocket. They had to get moving. If Jason was heading up the East Coast, they needed to hit the road immediately.</p>

        <p>The trio piled back into the sedan, sailing through Portsmouth, down through the Downtown Tunnel, merging onto I-64, and finally pulling onto US-13 Northbound. Tolls were a miserable reality of coastal travel, and Roxy groaned as she pulled up to the plaza, handing over a crisp $12 bill to the attendant.</p>

        <p>The tires hummed as they rolled onto Trestle 1, the vast expanse of the Atlantic Ocean opening up around them. From the backseat, Alanna tapped Roxy's shoulder. She needed to use the restroom.</p>

        <p>Roxy sighed but nodded, pulling the sedan off the highway and into the parking lot of the restaurant and gift shop on Island 1. While Alanna hurried inside, she used the time to call her father—the band's manager—to let him know the tour prep was officially on hold.</p>

        <p>Alanna returned a few minutes later, holding her silver flip-phone, her face completely pale. "I just had my dad check the band’s joint account online. There’s a pending bank charge from this morning for Pathfinder Bus Lines."</p>

        <p>Roxy’s stomach dropped. "For Rhody?"</p>

        <p>"No," Alanna said quietly. "He checked the Pathfinder schedules. The only thing departing Norfolk at that time was the 6:30 AM to Richmond."</p>

        <p>"Richmond?!" Roxy slammed her hand against the steering wheel. "We're goin' the wrong way!"</p>

        <p>They rushed into the restaurant to quickly use the restroom, then sprinted back to the car. Roxy threw the sedan into reverse, utilizing the turnaround lane on the man-made island to get onto Trestle 4. They were heading back south into Virginia Beach, preparing to merge back onto I-64 West toward Richmond. Tanya had planted a decoy, and they had almost fallen for it. As they approached the Hampton Roads Bridge-Tunnel, the familiar glow of red taillights signaled a massive traffic snarl, and the invisible clock kept ticking.</p>
    </article>

    <!-- STRATEGY GUIDE NOTES -->
    <div class="card bg-dark text-light my-5 border-0 shadow">
        <div class="card-header bg-primary text-white text-uppercase fw-bold tracking-wider">
            <i class="fa-solid fa-gamepad me-2"></i> Guide Notes
        </div>
        <div class="card-body">
            <ul class="mb-0 lh-lg">
                <li><strong>The Audio Cipher:</strong> If you do not pick up <em>Static & Silence</em> here (where it is completely free), you will be forced to buy it at a truck stop later for a costly $25.</li>
                <li><strong>The Mystery Track:</strong> If you examine the CD case, you might notice that track 15, "A Night in Kent", is circled. I wonder why that specific song is highlighted? Could it mean something?</li>
                <li><strong>The Island 1 Turnaround:</strong> By choosing to stop and turn around at Island 1, the girls successfully avoid paying the punishing $5 return trip toll that triggers if you cross the entire span to the Eastern Shore.</li>
            </ul>
        </div>
    </div>

    <?php 
    // SETUP THE NARRATIVE STEPPER
    $nav = [
        
        'overview' => [
            'url' => '/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/', 
            'label' => 'Table of Contents'
        ],
        'next' => [
            'url' => '/raggiesoft-games/pathfinder-west/strategy-guide/golden-ending/hail-mary/chapter-02', 
            'label' => 'Chapter 2: The Cipher'
        ]
    ];
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/navigation/narrative-stepper.php'; 
    ?>
</main>

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; 
?>