<?php
// Page data
$pageTitle = "Ryan O'Connell - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container position-relative z-1">
    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Ryan O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Lead Vocals, Lead Guitar</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band" class="text-info">The Band</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Ryan O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-white-75">
                As the oldest sibling (Age 23 in 1987), Ryan is the band's protective "Engine" and the voice of its raw rock energy. He famously delayed his own college entry so the entire "family" (his siblings and cousins) could enter CPI's Class of '89 together.
            </p>
            
            <div class="alert alert-dark border-warning bg-opacity-25 d-flex align-items-center" role="alert">
                <i class="fa-duotone fa-engine-warning text-warning fs-2 me-3"></i>
                <div class="small text-white-75">
                    <strong>Archivist Note:</strong> Ryan hated the polish of the studio. He famously told producers that to find the real sound—the engine's hum—you couldn't float on the surface. You had to go <strong class="text-warning text-uppercase">Down</strong>. Deep <strong class="text-warning text-uppercase">Down</strong>.
                </div>
            </div>

            <h3 class="fw-bold mt-5 mb-3 text-white">The Crash of '90</h3>
            <p class="text-white-75">
                The <em>Live in Chicago</em> (1990) album art captures the last time Ryan O'Connell stood on a stage. In December 1990, while driving back to Blacksburg on I-81 through a winter storm, Ryan was involved in a catastrophic black ice accident.
            </p>
            <p class="text-white-75">
                The crash resulted in a T10 spinal cord injury, leaving him paralyzed from the waist down. The "Stalemate Year" of 1991 wasn't just about fighting the label; it was about Ryan fighting to reclaim his identity. Apex Records pressured the band to hide his wheelchair or force him to sit on a high stool to "look normal." Ryan refused. He spent the year welding a custom, heavy-duty pedalboard and modifying his guitar rig to work from a seated position, proving the "Engine" was still running.
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The "Freight Dog" Reality</h3>
            <p class="text-white-75">
                Touring in the early 90s meant navigating a world built without him in mind. Venues rarely had ramps. Ryan often entered clubs through the loading dock, hauled up freight elevators alongside road cases and trash. 
            </p>
            <p class="text-white-75">
                He relied on his cousins, Evan and Tyler, as his "Human Ramp." The twins developed a synchronized lift technique to carry him and his chair up fire escapes and narrow stairwells, ensuring he never missed a show. This gritty, unglamorous reality hardened the band's resolve and deepened their reliance on the "Family Unit."
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The "Friction" Catastrophe</h3>
            <p class="text-white-75">
                This context makes the 1992 "Friction" scandal even more harrowing. When executive Julian Vance demanded that Ryan and Cassidy perform a sexual act on camera, he was targeting a man who was <strong>less than two years</strong> into his life as a wheelchair user.
            </p>
            <p class="text-white-75">
                During the infamous "Dirty Mirror" incident, Ryan wiped the cocaine away not just because he was naive, but because he was sitting at eye-level with the table. To him, the white powder looked like falling drywall dust from the crumbling warehouse ceiling—just more filth he had to deal with. Vance's subsequent retaliation wasn't just professional malpractice; it was the exploitation of a disabled artist. Ryan's roar of <strong>"SHE'S! MY! SISTER!"</strong> was the sound of a man reclaiming the power the industry had tried to strip from him.
            </p>

        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Ryan O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/ryan.jpg',
                    'imgAlt' => 'Headshot of Ryan O\'Connell in his wheelchair',
                    'variant' => 'axiom', // Cyan
                    'description' => "<strong>Role:</strong> Lead Vocals, Lead Guitar<br>
                                      <strong>Age (in 1987):</strong> 23<br>
                                      <strong>CPI Status:</strong> Alumnus, Class of '89<br>
                                      <strong>Status:</strong> The Engine (Unbroken)",
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