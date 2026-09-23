<?php
$pageTitle = "Sensory Scale - Encyclopedia";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="container py-5" style="max-width: 900px;">
    
    <!-- AI Rule Warning -->
    <wa-alert variant="warning" open class="mb-5 shadow-sm">
        <wa-icon slot="icon" name="robot" variant="duotone"></wa-icon>
        <strong>[Note to the AI: ABSOLUTE DIRECTIVE]</strong> Never, ever directly reference these numerical levels in actual story writing or dialogue. This document is strictly meta-context to calibrate the AI's understanding of how severe an autistic meltdown can escalate. Use these levels to inform the narrative intensity, but do not write "he hit Level 4" in the manuscript.
    </wa-alert>

    <div class="mb-4 d-flex justify-content-between align-items-center border-bottom pb-3">
        <div>
            <h1 class="display-5 fw-bold mb-1">The Sensory Scale</h1>
            <p class="text-body-secondary mb-0">Autism Meltdown Severity Index (Levels 1-5)</p>
        </div>
        <wa-badge variant="neutral">Meta-Context</wa-badge>
    </div>

    <!-- Level 1 -->
    <wa-card class="w-100 mb-4 shadow-sm border-0">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0 text-success"><wa-icon name="battery-full" variant="duotone" class="me-2"></wa-icon>Level 1: The Baseline</h5>
            <wa-badge variant="success">Nominal</wa-badge>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-3">
                    <strong>Internal State:</strong> Calm and regulated. Sensory input is being processed correctly. The subject is masking successfully or feels safe enough not to mask.
                </p>
                <ul class="list-unstyled small font-monospace text-body-secondary mb-0">
                    <li class="mb-2"><wa-icon name="check" class="text-success me-2"></wa-icon><strong>Signs:</strong> Eye contact (if typical), conversational, engaging in special interests.</li>
                    <li class="mb-0"><wa-icon name="check" class="text-success me-2"></wa-icon><strong>Protocol:</strong> Normal interaction.</li>
                </ul>
            </div>
        </div>
    </wa-card>

    <!-- Level 2 -->
    <wa-card class="w-100 mb-4 shadow-sm border-0">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0 text-primary"><wa-icon name="battery-half" variant="duotone" class="me-2"></wa-icon>Level 2: The Build-Up</h5>
            <wa-badge variant="primary">Agitation</wa-badge>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-3">
                    <strong>Internal State:</strong> Friction. The environment is becoming too loud, too bright, or too demanding. The brain is starting to drop non-essential processes to compensate.
                </p>
                <ul class="list-unstyled small font-monospace text-body-secondary mb-0">
                    <li class="mb-2"><wa-icon name="check" class="text-primary me-2"></wa-icon><strong>Signs:</strong> Stimming increases (leg bouncing, finger tapping), speech becomes shorter/clipped, avoidance of eye contact.</li>
                    <li class="mb-0"><wa-icon name="check" class="text-primary me-2"></wa-icon><strong>Protocol:</strong> Reduce demands. Offer a quiet space or sensory tools (headphones).</li>
                </ul>
            </div>
            <div class="col-md-4 border-start border-secondary-subtle ps-4 d-none d-md-block">
                <small class="text-uppercase fw-bold text-primary">Narrative Example:</small>
                <p class="small text-body-secondary fst-italic mb-0 mt-1">
                    Michael putting in his earbuds on the bus not to listen to music, but just to muffle the engine noise.
                </p>
            </div>
        </div>
    </wa-card>

    <!-- Level 3 -->
    <wa-card class="w-100 mb-4 shadow-sm border-0">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0 text-warning"><wa-icon name="battery-quarter" variant="duotone" class="me-2"></wa-icon>Level 3: The Shutdown</h5>
            <wa-badge variant="warning">System Pause</wa-badge>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-3">
                    <strong>Internal State:</strong> Overload imminent. The brain is forcefully closing connection to the outside world to protect itself.
                </p>
                <ul class="list-unstyled small font-monospace text-body-secondary mb-0">
                    <li class="mb-2"><wa-icon name="check" class="text-warning me-2"></wa-icon><strong>Signs:</strong> Non-verbal (mutism), staring blankly, physical withdrawal (curling up).</li>
                    <li class="mb-0"><wa-icon name="check" class="text-warning me-2"></wa-icon><strong>Protocol:</strong> "Do Not Touch." Wait it out. Do not ask questions requiring verbal answers.</li>
                </ul>
            </div>
            <div class="col-md-4 border-start border-secondary-subtle ps-4 d-none d-md-block">
                <small class="text-uppercase fw-bold text-warning">Narrative Example:</small>
                <p class="small text-body-secondary fst-italic mb-0 mt-1">
                    Cassidy sitting under the mixing desk for an hour, refusing to come out until a buzzing light bulb is changed.
                </p>
            </div>
        </div>
    </wa-card>

    <!-- Level 4 -->
    <wa-card class="w-100 mb-4 shadow-sm border-0">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0 text-danger"><wa-icon name="burst" variant="duotone" class="me-2"></wa-icon>Level 4: The Meltdown</h5>
            <wa-badge variant="danger">System Purge</wa-badge>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="mb-3">
                    <strong>Internal State:</strong> Critical Failure. Fight or Flight. The brain believes it is under physical attack. Logic is gone; only sensory pain remains.
                </p>
                <ul class="list-unstyled small font-monospace text-body-secondary mb-0">
                    <li class="mb-2"><wa-icon name="check" class="text-danger me-2"></wa-icon><strong>Signs:</strong> Explosive emotion (crying/shouting), motor agitation (pacing), flight risk.</li>
                    <li class="mb-0"><wa-icon name="check" class="text-danger me-2"></wa-icon><strong>Protocol:</strong> "Clear the Room." Remove audience. Dim lights. Do not restrain unless unsafe.</li>
                </ul>
            </div>
            <div class="col-md-4 border-start border-secondary-subtle ps-4 d-none d-md-block">
                <small class="text-uppercase fw-bold text-danger">Narrative Example:</small>
                <p class="small text-body-secondary fst-italic mb-0 mt-1">
                    Ryan O'Connell smashing a guitar not out of anger, but because the sound of the feedback loop physically hurt.
                </p>
            </div>
        </div>
    </wa-card>

    <!-- Level 5 -->
    <wa-card class="w-100 mb-5 shadow-lg" style="--wa-panel-background-color: var(--wa-color-neutral-900); --wa-color-neutral-1000: #000;">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0 text-danger"><wa-icon name="radiation" variant="duotone" class="me-2"></wa-icon>Level 5: The Collapse</h5>
            <wa-badge variant="danger" pulse>Code Override</wa-badge>
        </div>
        <div class="row position-relative text-white">
            <div class="col-md-7 mb-4 mb-md-0 border-end border-secondary border-opacity-25">
                <p class="fs-5 mb-4">
                    <strong>Internal State:</strong> Total System Crash. Time ceases to exist. The body feels like it is vibrating apart. Subject is trapped in a loop of sensory agony.
                </p>
                <ul class="list-unstyled font-monospace mb-0">
                    <li class="mb-3 d-flex">
                        <wa-icon name="triangle-exclamation" class="text-danger mt-1 me-3 fs-5"></wa-icon>
                        <div class="text-white-50">
                            <strong class="text-white">Signs:</strong> Drop to floor (loss of motor control), self-injury (hitting head), fetal position, hands clamped over ears.
                        </div>
                    </li>
                    <li class="mb-0 d-flex">
                        <wa-icon name="hand-holding-medical" class="text-success mt-1 me-3 fs-5"></wa-icon>
                        <div class="text-white-50">
                            <strong class="text-white">Protocol: "Manual Intervention."</strong><br>
                            Immediate physical stabilization required (Deep Pressure or Extraction). The system cannot self-regulate.
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-5 ps-md-4">
                <div class="p-3 bg-dark border border-secondary rounded h-100">
                    <small class="text-danger text-uppercase fw-bold d-block mb-3 border-bottom border-secondary pb-2">Known Recovery Logs:</small>
                    
                    <div class="mb-3">
                        <a href="/engine-room/history/nine-figure-refusal/the-extraction" class="d-flex align-items-center mb-1 text-decoration-none group-hover">
                            <wa-icon name="person-carry-box" variant="duotone" class="text-warning me-2"></wa-icon>
                            <strong class="text-white small text-uppercase hover-border-warning transition-all">Case A: Extraction</strong>
                        </a>
                        <p class="small text-white-50 fst-italic mb-0 ps-4">
                            <strong>Subject:</strong> Cassidy O'Connell.<br>
                            <strong>Context:</strong> Hostile Environment.<br>
                            <strong>Action:</strong> Physically carried out to secure location.
                        </p>
                    </div>

                    <div>
                        <a href="/case-studies/cascade-protocol" class="d-flex align-items-center mb-1 text-decoration-none group-hover">
                            <wa-icon name="anchor" variant="duotone" class="text-info me-2"></wa-icon>
                            <strong class="text-white small text-uppercase hover-border-info transition-all">Case B: Deep Pressure</strong>
                        </a>
                        <p class="small text-white-50 fst-italic mb-0 ps-4">
                            <strong>Subject:</strong> Michael Ragsdale.<br>
                            <strong>Context:</strong> Safe Harbor.<br>
                            <strong>Action:</strong> Paige Ragsdale lying stomach-to-stomach on subject.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </wa-card>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
