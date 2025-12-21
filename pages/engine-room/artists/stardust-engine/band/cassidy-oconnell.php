<?php
// pages/band/cassidy-oconnell.php
// The Voice. The Dreamer. The Secret Billionaire.

$pageTitle = "Cassidy O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Cassidy O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Lead Vocals, Piano, Synthesizers</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cassidy O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The classical heart of the band, Cassidy (Age 20 in 1987) is the voice of its most emotional synth-pop anthems. Her musical sophistication provides the complex melodies and atmospheric pads that balance Ryan's raw guitar.
            </p>
            
            <div class="alert alert-dark border-primary bg-opacity-10 d-flex align-items-center" role="alert">
                <i class="fa-duotone fa-stars text-primary fs-2 me-3"></i>
                <div class="small text-muted">
                    <strong>Archivist Note:</strong> While the industry tried to drag them into the dirt, Cassidy refused to look down. Her eyes were always cast <strong class="text-info text-uppercase">Up</strong>. Always <strong class="text-info text-uppercase">Up</strong>.
                </div>
            </div>

            <h3 class="fw-bold mt-5 mb-3">The Crash of '90: "The Anchor"</h3>
            <p class="text-muted">
                Following Ryan's catastrophic injury in December 1990, Cassidy's role in the band—and the family—transformed. Already close as siblings, they became inseparable.
            </p>
            <p class="text-muted">
                Both Ryan and Cassidy are <strong>autistic</strong>. They share a hidden language of sensory processing and non-verbal cues that no one else fully understands. After the crash, Cassidy became Ryan's "Safe Person" and primary aide. She is his "Spotter" on stage, watching for signs of overstimulation or physical distress (like dysreflexia) that others might miss.
            </p>

            <div class="card bg-dark border-info shadow-lg mt-5 mb-5 overflow-hidden">
                <div class="card-header bg-info bg-opacity-25 text-white fw-bold border-bottom border-info">
                    <i class="fa-duotone fa-ticket me-2"></i>CONFIDENTIAL: The "Dream Number" Event (2012)
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="text-info fw-bold">The Accidental Billionaire</h4>
                            <p class="text-light small">
                                For years, fans wondered how the band could afford to reject millions in licensing deals. The answer wasn't record sales. It was Cassidy.
                            </p>
                            <p class="text-light small">
                                In 2012, while stopping for gas in Daleville, VA, Cassidy bought a single lottery ticket. She didn't buy it to get rich; she bought it because she liked the visual pattern the numbers made on the scantron sheet.
                            </p>
                            <p class="text-light small fst-italic border-start border-2 border-info ps-3 my-3">
                                "The numbers looked like a constellation. I just wanted to hold the paper."
                            </p>
                            <p class="text-light small mb-0">
                                That ticket won the <strong>$2.04 Billion</strong> "American Dream" jackpot. Overwhelmed by the scale of the wealth, she famously handed the winning ticket to her sister Holly and asked for only one thing in return: <em>"Buy us a castle where no one can ever hurt us again."</em> (Holly bought "The Fortress" instead).
                            </p>
                        </div>
                        <div class="col-md-3 text-center d-none d-md-block">
                            <i class="fa-duotone fa-sparkles fa-5x text-info opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="fw-bold mt-5 mb-3">The "Friction" Aftermath</h3>
            <p class="text-muted">
                During the 1992 "Friction" scandal, Cassidy was the target of Julian Vance's depraved "Worship" book knockoff scheme. The subsequent "Tabloid Hell" of the 1994 trial painted her as a "Victim-Saint." She responded on 1995's <strong>The Warehouse Tapes</strong> with the "rage" track "Not Your Saint" and the transcendent 4-part prog-rock epic "Escape Velocity (Ad Astra)," which detailed her escape from the trauma and her rebirth as an artist.
            </p>

        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Cassidy O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg',
                    'imgAlt' => 'Headshot of Cassidy O\'Connell',
                    'variant' => 'pact', // Maps to Pink
                    'description' => "<strong>Role:</strong> Lead Vocals, Piano, Synths<br>
                                      <strong>Age (in 1987):</strong> 20<br>
                                      <strong>Status:</strong> The Stardust (Unbroken)<br>
                                      <strong>Net Worth:</strong> Classified (Winner)",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>