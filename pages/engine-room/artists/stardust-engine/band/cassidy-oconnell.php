<?php
// pages/engine-room/artists/stardust-engine/band/cassidy-oconnell.php
// The "Anchor" and the "Angel Investor".
// Context: The silent power behind the throne.

$pageTitle = "Cassidy O'Connell - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container position-relative z-1">

    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Cassidy O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Lead Vocals, Piano, Synthesizers</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/engine-room/artists/stardust-engine/band" class="text-info">The Band</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Cassidy O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-white-75">
                The "Anchor". Cassidy (Age 21 in 1987) is the emotional center of the band. Classically trained on piano, she brings the cinematic, orchestral texture that defines the band's "Space Rock" sound.
            </p>
            <p class="text-white-75">
                While Ryan provides the raw energy (The Engine), Cassidy provides the gravity. Her relationship with her brother is the core dynamic of the group; she is his "Safe Person," and he is hers. Their vocal harmonies—often described as "telepathic"—are the result of a lifetime of non-verbal communication.
            </p>

            <h3 class="fw-bold mt-5 mb-3 text-white">The "Friction" Survivor</h3>
            <p class="text-white-75">
                In 1992, Cassidy was the primary target of the "Friction" scandal. When Apex executives attempted to exploit her bond with Ryan for a marketing campaign, she didn't crumble—she went silent.
            </p>
            <p class="text-white-75">
                She famously refused to speak to *any* press for three years (1992-1995), communicating only through her lyrics on *The Warehouse Tapes*. Songs like "The Cage" and "Ad Astra" are her direct response to the trauma: a declaration that she would rather flee to the stars than sell her soul on Earth.
            </p>

            <div class="card bg-dark bg-opacity-75 border-success shadow-lg mt-5 overflow-hidden">
                <div class="card-header bg-success bg-opacity-25 text-white fw-bold border-bottom border-success">
                    <i class="fa-duotone fa-ticket me-2"></i>CONFIDENTIAL: The "Event" (1996)
                </div>
                <div class="card-body p-4">
                    <h4 class="text-success fw-bold">The Angel Investor</h4>
                    <p class="text-white-75">
                        In 1996, one year after the band went independent, Cassidy O'Connell purchased a lottery ticket at a gas station in Blacksburg. She won the <strong>$2.04 Billion</strong> Powerball jackpot.
                    </p>
                    <p class="text-white-75">
                        She never gave an interview. She never bought a yacht. Instead, she handed the ticket to her sister Holly and said, "Fix it so we never have to ask permission to make music again."
                    </p>
                    <p class="text-white-75">
                        This singular event transformed The Stardust Engine from a struggling indie band into a "Loss Leader" for a multi-billion dollar empire. They don't tour to pay the rent; they tour because it's who they are.
                    </p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Cassidy O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg',
                    'imgAlt' => 'Headshot of Cassidy O\'Connell',
                    'variant' => 'pact', // Pink/Violet
                    'description' => "<strong>Role:</strong> Vocals, Keys, Synths<br>
                                      <strong>Age (in 1987):</strong> 21<br>
                                      <strong>CPI Status:</strong> Alumna, Class of '89<br>
                                      <strong>Status:</strong> The Angel (Unbroken)",
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