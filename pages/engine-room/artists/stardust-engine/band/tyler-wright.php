<?php
// pages/engine-room/artists/stardust-engine/band/tyler-wright.php
// The "Power" and "The Human Metronome".
// Context: The engine room's heartbeat.

$pageTitle = "Tyler Wright - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container position-relative z-1">

    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Tyler Wright</h1>
            <p class="h4 text-warning fw-bold mb-4">Drums, Percussion</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band" class="text-info">The Band</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Tyler Wright</li>
                </ol>
            </nav>

            <p class="fs-5 text-white-75">
                The "Power." Tyler (Age 20 in 1987) is a percussion legend, renowned in the industry as "The Human Metronome" for his superhuman, clock-like timing. He is the identical twin brother of bassist <strong>Evan Wright</strong> and cousin to the O'Connell siblings, completing the family unit.
            </p>
            <p class="text-white-75">
                His custom-built drum kit is a famous piece of rock lore, a massive 360-degree setup that dwarfs even the most extravagant kits of the prog-rock era. He is the source of the band's iconic, explosive, massive 80s gated reverb snare sound that defined their anthems. As Evan's twin, he shares a near-psychic connection with his brother, forming the tightest rhythm section in 80s rock.
            </p>
            
            <h3 class="fw-bold mt-5 mb-3 text-white">The Crash of '90: "The Human Ramp"</h3>
            <p class="text-white-75">
                Following his cousin Ryan's paralysis in 1990, the twins' role in the band went beyond music. in the early 90s, "accessibility" was a legal theory, not a reality. Venues often lacked ramps, elevators, or basic accommodations.
            </p>
            <p class="text-white-75">
                Tyler and Evan became Ryan's <strong>"Human Ramp."</strong> They developed a synchronized lifting technique to carry Ryan and his manual chair up fire escapes, loading docks, and narrow stairwells. While Holly and Cassidy handled the medical logistics, Tyler provided the brute strength required to physically move the tour. To this day, he is one of the few people Ryan trusts to lift him.
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The "Ironhead" Connection</h3>
            <p class="text-white-75">
                Tyler is arguably the most passionate "Ironhead" in the group. His ability to replicate the sound of a full marching band drumline was the key to the success of the "Forgers' Fight Song" on the *Live at The Crucible* album.
            </p>
            <p class="text-white-75 fs-5">
                <strong>Wardrobe:</strong> This rejection of their old label defines his modern stage presence. After the 'Friction' scandal, Tyler shed the polished 'Apex look' for good. On stage, he now proudly wears what he always has: jeans, sneakers, and a CPI Alumni t-shirt or hoodie, looking less like a rock star and more like the proud 'Ironhead' he is.
            </p>
        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Tyler Wright',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/tyler.jpg',
                    'imgAlt' => 'Headshot of Tyler Wright',
                    'variant' => 'neutral',
                    // FIX: Wrapped content in a div with text-white-75 to force readability
                    'description' => "<div class='text-white-75'>
                                        <strong>Role:</strong> Drums, Percussion<br>
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