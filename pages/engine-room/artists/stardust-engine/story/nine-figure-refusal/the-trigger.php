<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-trigger.php
// The Event That Started The War: Slide 14 & The Fallout
// UPDATED: WCAG Compliance, Narrative Stepper, and Expanded Lore Context.

$pageTitle = "The Trigger: Slide 14 - Evidence Item #1";
?>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-sm border border-danger-subtle">
                <i class="fa-duotone fa-bolt me-2"></i>The Inciting Incident
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                The Trigger: Slide 14
            </h1>
            <p class="lead text-body-secondary font-monospace">
                The moment the negotiation ended and the war began.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-secondary shadow-lg overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5">
                        <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1995-ad-astra-single/album-art.jpg" 
                             class="img-fluid w-100 h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Album Art for Ad Astra: A cockpit view looking out at a monolithic structure in deep space. A single bright light pierces the darkness.">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4 p-md-5">
                            <h5 class="text-body-emphasis fw-bold text-uppercase border-bottom border-secondary pb-2 mb-3">
                                <i class="fa-solid fa-compact-disc me-2 text-primary"></i>The Subject: "Ad Astra"
                            </h5>
                            <p class="text-body-secondary small mb-2">
                                <strong>Format:</strong> 15-Minute Progressive Rock Suite<br>
                                <strong>Significance:</strong> Cassidy's Autobiography
                            </p>
                            
                            <div class="alert alert-light border-start border-4 border-primary small fst-italic text-body-secondary my-3">
                                "She wrote every word. She wrote every note. She is the composer, the conductor, and the vocalist. This isn't just a song; it is the sonic representation of the safe harbor where she hides when the world gets too loud."
                            </div>
                            
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <a href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-outline-primary btn-sm rounded-pill fw-bold px-3">
                                    <i class="fa-solid fa-play me-2"></i>Listen to the Track
                                </a>
                                <div class="small font-monospace text-body-secondary">
                                    <span class="badge bg-primary me-2">LORE</span>
                                    <em>Tracks her escape from the "Cage" to the "Cosmos."</em>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-dark border-danger shadow-lg overflow-hidden position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-to-b-black opacity-50" style="pointer-events: none;"></div>

                <div class="card-header bg-danger bg-opacity-25 border-bottom border-danger py-3 position-relative">
                    <h5 class="mb-0 text-white text-uppercase fw-bold"><i class="fa-solid fa-waveform-lines me-2"></i>The Proposal: "The Velocity Edit"</h5>
                </div>
                <div class="card-body p-5 position-relative">
                    <p class="fs-5 text-white">
                        At 10:15 AM, the Omni-Global pitch team presented <strong>Slide 14</strong>. They proposed using an algorithm to slice the 15-minute masterpiece <em>Ad Astra</em> into four 3-minute fragments for "playlist optimization."
                    </p>
                    <p class="text-white-50">
                        They unknowingly targeted <strong>Part III: The Cosmos</strong>—the quiet, ethereal section Cassidy wrote to ground herself during panic attacks. They proposed adding a generic "Trap Beat" overlay to make it perform better on the Streaming Giants' algorithms.
                    </p>

                    <div class="alert bg-black border-start border-danger border-4 p-4 my-4">
                        <div class="d-flex">
                            <i class="fa-duotone fa-triangle-exclamation text-danger fs-1 me-4"></i>
                            <div>
                                <h5 class="text-white fw-bold">The Reaction</h5>
                                <p class="mb-2 text-white-50 fst-italic display-6">
                                    "They are going to rip my baby apart!"
                                </p>
                                <p class="text-white-50 small mb-0">
                                    Cassidy spiraled into a Level 5 Autistic Meltdown. <strong>Ryan O'Connell</strong> immediately turned his back on the executives to physically ground his sister. <strong>Evan & Tyler Wright</strong> formed the "Ironhead Wall," blocking the executives from viewing the distress. 
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="text-white small font-monospace text-end mb-0 text-uppercase">
                        Status: Meeting Terminated &ndash; 10:19 AM 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-counter-offer', 'label' => 'The Counter-Offer'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-autopsy', 'label' => 'The Autopsy']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>