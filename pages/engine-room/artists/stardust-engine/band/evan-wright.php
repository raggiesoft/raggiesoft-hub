<?php
// pages/engine-room/artists/stardust-engine/band/evan-wright.php
// The "Texture" and "The Human Ramp".
// Context: The steady hand of the rhythm section.

$pageTitle = "Evan Wright - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container position-relative z-1">
    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Evan Wright</h1>
            <p class="h4 text-warning fw-bold mb-4">Bass Guitar, Rhythm Guitar, Backing Vocals</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band" class="text-info">The Band</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Evan Wright</li>
                </ol>
            </nav>

            <p class="fs-5 text-white-75">
                The "Texture" of the band, Evan (Age 20 in 1987) is the secret weapon that makes their sound so full. He and his identical twin brother, <strong>Tyler Wright</strong>, are cousins to the O'Connell siblings. Together, the five of them form the tight-knit family unit that defines the group.
            </p>
            <p class="text-white-75">
                Evan is the quiet, steady presence in the "engine room," providing the rich, melodic basslines and atmospheric rhythm guitar that form the foundation for Ryan's solos. His bond with his twin brother is legendary; on tour during the Apex era, the twins were inseparable, famously taking one of the two cramped motel beds while the three O'Connell siblings piled into the other.
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The Crash of '90: "The Human Ramp"</h3>
            <p class="text-white-75">
                After his cousin Ryan's injury in 1990, the reality of touring changed instantly. While Holly and Cassidy handled the private medical logistics, it was Evan and Tyler who handled the brute force required to navigate a world built without ramps.
            </p>
            <p class="text-white-75">
                In 1991, venues rarely had elevators. If the band had to play a second-floor club, or if the "accessible ramp" was a dangerous piece of plywood, Evan and Tyler became the <strong>"Human Ramp."</strong> The twins developed a silent, synchronized lifting technique—Tyler on the back handles, Evan gripping the frame by the knees—to carry Ryan and his chair up fire escapes, loading docks, and stairwells.
            </p>
            <p class="text-white-75">
                To Evan, this wasn't a burden; it was the job. Just as the bass carries the melody, the bassist carries the singer.
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">Post-Apex Freedom</h3>
            <p class="text-white-75">
                During the "Freedom Era" (post-1992), Evan's contributions became even more pronounced. His driving basslines on tracks like "Garbage" (from *The Warehouse Tapes*) and his ability to lock in with his brother's "Human Metronome" timing allowed the band to finally explore the raw, unpolished 80s rock sound that Apex Records had suppressed.
            </p>
            <p class="text-white-75 fs-5">
                <strong>Wardrobe:</strong> This rejection of their old label defines his modern stage presence. After the 'Friction' scandal, Evan shed the polished 'Apex look' for good. On stage, he now proudly wears what he always has: jeans, sneakers, and a CPI Alumni t-shirt or hoodie, looking less like a rock star and more like the proud 'Forger' he is.
            </p>

        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Evan Wright',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/evan.jpg',
                    'imgAlt' => 'Headshot of Evan Wright with his bass',
                    'variant' => 'neutral',
                    // FIX: Wrapped content in a div with text-white-75 to force readability
                    'description' => "<div class='text-white-75'>
                                        <strong>Role:</strong> Bass, Rhythm Guitar, Vocals<br>
                                        <strong>Age (in 1987):</strong> 20<br>
                                        <strong>CPI Status:</strong> Alumnus, Class of '89<br>
                                        <strong>Status:</strong> The Human Ramp (Unbroken)
                                      </div>",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/engine-room/artists/stardust-engine/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>