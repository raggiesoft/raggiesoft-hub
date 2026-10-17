<?php
// pages/engine-room/artists/stardust-engine/story/hard-reset-tour/london-discovery.php
// Lore Entry: The Signing of Origin.
// Context: Camden Town, 1998. The "Safe Harbor" recognition.

/*
 * ARCHITECTURE & LORE:
 * Lore entry chronicling the discovery and signing of the band "Origin" in London, 1998.
 * Focuses on shared neurodivergence (autism/stimming signals) and the organic growth of the Engine Room Records roster.
 * Layout uses standard Bootstrap cards and alerts to segment the narrative.
 */
$pageTitle = "The London Discovery - The Stardust Engine Lore";
?>

<div class="container py-5">
    
    <!-- INLINE: Main narrative header establishing the date, location, and historical significance -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <wa-badge variant="warning" appearance="accent" pill class="px-3 py-2 shadow-sm mb-3 text-uppercase">
                <i class="fa-duotone fa-handshake me-2"></i>Engine Room Records History
            </wa-badge>
            <h1 class="display-3 fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Impact', sans-serif;">
                The Discovery
            </h1>
            <p class="lead text-body-secondary font-monospace mt-2">
                October 22, 1998 // Camden Town, London // "The Underworld"
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
            
            <wa-card class="card border-0 shadow-sm bg-body-tertiary p-4 mb-5 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-body p-4">
                    <h3 class="h5 fw-bold text-body-emphasis border-bottom pb-2 mb-3">The Wake in the Bar</h3>
                    <p class="text-body-secondary">
                        It was sheer chance. Ryan O'Connell and Evan Wright had ducked into the basement club just to escape the London rain.
                    </p>
                    <p class="text-body-secondary">
                        On stage, it wasn't a reunion; it was a ghost story. <strong>Origin</strong> had once been a massive six-piece art-rock orchestra. Now, only two remained: the singer and the flautist. Brother and sister.
                    </p>
                    
                    <wa-callout variant="brand" appearance="accent" class="mt-4 d-block">
                        <i slot="icon" class="fa-duotone fa-music text-primary"></i>
                        <div>
                            <strong class="text-primary-emphasis d-block">The Signal</strong> 
                            <span class="text-body-secondary small">The flautist stepped up to the mic and played seven notes. Ryan froze. It was the "Safe Harbor" melody—the exact tune Cassidy used to hum to him over the phone during his paralysis rehab in 1991.</span>
                        </div>
                    </wa-callout>
                </div>
            </wa-card>

            <wa-card class="card bg-body-tertiary border-info p-4 mb-5 shadow-lg w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="text-info fw-bold text-uppercase mb-2">The Phone Call</h4>
                        <p class="text-body-secondary mb-0 fst-italic font-monospace">
                            "Cass. You're not going to believe who is on stage. Get Holly. Come to Camden. Now."
                        </p>
                    </div>
                    <div class="col-md-4 text-end">
                        <i class="fa-duotone fa-mobile-signal fa-4x text-info opacity-25"></i>
                    </div>
                </div>
            </wa-card>

            <h3 class="h4 fw-bold text-body-emphasis mb-4">The Approach: "The Common Language"</h3>
            <p class="text-body-secondary fs-5 mb-4">
                In the music industry, deals are made over whisky and cocaine. Holly O'Connell walked into the pub and broke every rule.
            </p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <wa-card class="card h-100 bg-body-secondary border-0 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                        <div class="card-body p-4">
                            <h5 class="text-body-emphasis fw-bold"><i class="fa-duotone fa-glass-water me-2"></i>The Order</h5>
                            <p class="small text-body-secondary mb-0">
                                Holly walked up to the band's table. "Five pints of Cola. And a round of chips."
                                <br><br>
                                The lead singer stared at the sodas, then at her. "Are you taking the mickey?" He assumed she was mocking them.
                            </p>
                        </div>
                    </wa-card>
                </div>
                <div class="col-md-6">
                    <wa-card class="card h-100 bg-body-secondary border-0 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                        <div class="card-body p-4">
                            <h5 class="text-body-emphasis fw-bold"><i class="fa-duotone fa-hand-heart me-2"></i>The Truth</h5>
                            <p class="small text-body-secondary mb-0">
                                "We don't drink," Holly said simply. "We're a dry tour."
                                <br><br>
                                The singer's defensiveness vanished. He looked at his sister. "Neither do we. Not after what the London scene did to the rest of us."
                            </p>
                        </div>
                    </wa-card>
                </div>
            </div>

            <!-- INLINE: The "Mirror Image" alert highlights the crucial neurodivergent connection between the two bands -->
            <wa-callout variant="warning" appearance="accent" class="mt-5 shadow-sm d-block">
                <div class="d-flex align-items-start">
                    <i class="fa-duotone fa-dna text-warning fs-2 me-3 mt-1"></i>
                    <div>
                        <h4 class="alert-heading h6 fw-bold text-warning-emphasis text-uppercase">The "Mirror Image"</h4>
                        <p class="mb-2 small text-body-secondary">
                            As they talked, the pieces fell into place. Like Ryan and Cassidy, the Origin siblings were <strong>autistic</strong>. The "Safe Harbor" flute melody wasn't just a hook; it was a <strong>Stimming Signal</strong> they had written to ground each other during sensory overload.
                        </p>
                        <p class="mb-0 small text-body-secondary border-top border-secondary border-opacity-25 pt-2 mt-2 fst-italic">
                            "I didn't just hear a song," Ryan told Holly later. "I heard family."
                        </p>
                    </div>
                </div>
            </wa-callout>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h3 class="h5 text-uppercase text-body-secondary fw-bold mb-3">The Deal</h3>
            <wa-card class="card bg-body-tertiary shadow-lg transform-rotate-1 p-4 w-100" style="font-family: 'Caveat', cursive; --body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <p class="fs-3 text-body-emphasis mb-2">The "Napkin" Deal</p>
                <ul class="list-unstyled fs-5 text-body-secondary text-start mx-auto" style="max-width: 400px;">
                    <li class="mb-2">1. You un-retire.</li>
                    <li class="mb-2">2. Record at The Fortress (Blacksburg).</li>
                    <li class="mb-2">3. You keep the masters (Clause 88).</li>
                    <li class="mb-0">4. No Grunge. Only Art Rock.</li>
                </ul>
                <div class="mt-3 border-top pt-2">
                    <span class="text-primary">Signed: H. O'Connell / Origin</span>
                </div>
            </wa-card>
            <p class="small text-body-secondary mt-4">
                The singer laughed. <strong>"Luv, we live in Williamsport, Maryland. Just down the I-81."</strong>
                <br>They were at The Fortress three weeks later.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <wa-button variant="neutral" appearance="outlined" pill href="/engine-room/artists/stardust-engine/story/hard-reset-tour/paternoster-incident" class="px-4">
                <i slot="start" class="fa-duotone fa-backward"></i>Back to Prague
            </wa-button>
            <wa-button variant="brand" appearance="outlined" pill href="/engine-room/artists/stardust-engine/band/history" class="px-4 ms-2">
                <i slot="start" class="fa-duotone fa-timeline"></i>Return to Timeline
            </wa-button>
        </div>
    </div>

</div>