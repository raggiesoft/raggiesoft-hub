<?php
// pages/engine-room/jessica-miller-center/destination-dispatch-elevators.php
// Public Guide: Destination Dispatch & Accessibility Features
// Context: Universal Design standard for JMC vertical transport.
// WCAG STATUS: AAA Compliant (Adaptive Bootstrap 5.3)

$pageTitle = "Destination Dispatch Elevators - The Jessica Miller Center";
?>

<style>
    /* Large step numbers - Adaptive Watermark Style */
    .step-number {
        font-family: 'Audiowide', sans-serif;
        font-size: 2rem;
        color: var(--bs-tertiary-color); /* Subtle text in both Light/Dark */
        line-height: 1;
        opacity: 0.5;
    }
    
    /* Icon Containers - Adaptive */
    .guide-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: var(--bs-tertiary-bg);
        border: 1px solid var(--bs-border-color);
        color: var(--bs-body-color);
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1">
                <i class="fa-duotone fa-elevator me-2"></i>Vertical Transport Systems
            </span>
            <h1 class="display-4 fw-light text-body-emphasis mb-3" style="font-family: 'Helvetica Neue', sans-serif;">
                Destination Dispatch
            </h1>
            <p class="lead text-body-secondary font-monospace">
                Smart Grouping. Reduced Wait Times. Universal Access.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow bg-body-tertiary border-0">
                <div class="card-body p-5">
                    <div class="d-flex align-items-start">
                        <i class="fa-duotone fa-circle-info text-info fs-3 me-4 mt-1"></i>
                        <div>
                            <h3 class="h5 text-body-emphasis fw-bold mb-3">How it Works</h3>
                            <p class="text-body-secondary mb-0">
                                Unlike traditional elevators where you press a button <em>inside</em> the car, Destination Dispatch asks you to select your floor at a kiosk <strong>before</strong> you board. The system groups passengers going to the same floors together, reducing the number of stops and making your ride faster.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h3 class="h5 text-uppercase text-body-secondary border-bottom pb-2 mb-4">Standard Operation</h3>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 bg-body-tertiary shadow-sm">
                        <div class="card-body p-4 position-relative">
                            <div class="position-absolute top-0 end-0 p-3 step-number">01</div>
                            <h5 class="text-body-emphasis fw-bold mb-3"><i class="fa-solid fa-tablet-screen-button text-primary me-2"></i>Select</h5>
                            <p class="small text-body-secondary mb-0">
                                Approach the touchscreen kiosk in the lobby. Type your floor number manually OR tap your building badge.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 bg-body-tertiary shadow-sm">
                        <div class="card-body p-4 position-relative">
                            <div class="position-absolute top-0 end-0 p-3 step-number">02</div>
                            <h5 class="text-body-emphasis fw-bold mb-3"><i class="fa-solid fa-signs-post text-warning me-2"></i>Assign</h5>
                            <p class="small text-body-secondary mb-0">
                                The screen will display a letter (e.g., <strong>"A"</strong>, <strong>"B"</strong>). This is your assigned elevator.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 bg-body-tertiary shadow-sm">
                        <div class="card-body p-4 position-relative">
                            <div class="position-absolute top-0 end-0 p-3 step-number">03</div>
                            <h5 class="text-body-emphasis fw-bold mb-3"><i class="fa-solid fa-person-to-door text-success me-2"></i>Board</h5>
                            <p class="small text-body-secondary mb-0">
                                Walk to the door labeled with your letter. There are <strong>no floor buttons</strong> inside the car. It will take you automatically.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card border-info shadow overflow-hidden">
                <div class="card-header bg-info-subtle border-bottom border-info-subtle py-3">
                    <h5 class="text-info-emphasis fw-bold text-uppercase mb-0">
                        <i class="fa-duotone fa-id-badge me-2"></i>Smart Badge Integration
                    </h5>
                </div>
                <div class="card-body p-5">
                    <p class="text-body-secondary mb-4">
                        For employees and frequent visitors, we offer a "Home Floor" programming feature. This allows for a predictable, nearly touchless experience while maintaining flexibility for neurodivergent needs.
                    </p>

                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <i class="fa-duotone fa-nfc-symbol fa-5x text-body-tertiary"></i>
                            <p class="small text-body-tertiary mt-2 font-monospace">NFC TAP & WAIT</p>
                        </div>
                        <div class="col-md-7">
                            <h6 class="text-body-emphasis fw-bold text-uppercase mb-3">The "Decision Window" Workflow</h6>
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item text-body-secondary border-secondary-subtle">
                                    <strong>Tap Your Badge:</strong> Hold your card to the reader.
                                </li>
                                <li class="list-group-item text-body-secondary border-secondary-subtle">
                                    <strong>The Pause:</strong> The screen displays your name and default floor (e.g., Floor 39). The system pauses for <strong>3–5 seconds</strong>.
                                </li>
                                <li class="list-group-item text-body-secondary border-secondary-subtle">
                                    <strong>Automatic Selection:</strong> If you do nothing, it confirms your home floor and assigns a car.
                                </li>
                                <li class="list-group-item text-body-secondary border-secondary-subtle">
                                    <strong>The Pivot:</strong> During the pause, you can manually tap a different floor (e.g., <strong>Floor 40 - Quiet Floor</strong>) if you need a sensory break instead of going to your office.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h3 class="h5 text-uppercase text-body-secondary border-bottom pb-2 mb-4">Accessibility & Neuro-Inclusion</h3>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="guide-icon me-3"><i class="fa-solid fa-wheelchair"></i></div>
                                <h5 class="text-body-emphasis fw-bold mb-0">The Accessibility Button</h5>
                            </div>
                            <p class="text-body-secondary small mb-3">
                                Located on every kiosk. Pressing this physical button activates <strong>"ADA Mode,"</strong> which triggers:
                            </p>
                            <ul class="text-body-secondary small mb-0">
                                <li><strong>Audio Guidance:</strong> Voice instructions for visually impaired users.</li>
                                <li><strong>Extended Dwell:</strong> Doors stay open longer for safe boarding.</li>
                                <li><strong>Priority Assignment:</strong> Assigns an elevator with more space/fewer passengers.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="guide-icon me-3"><i class="fa-solid fa-brain"></i></div>
                                <h5 class="text-body-emphasis fw-bold mb-0">Cognitive Safety</h5>
                            </div>
                            <p class="text-body-secondary small mb-3">
                                Destination Dispatch reduces social anxiety and sensory overload by design:
                            </p>
                            <ul class="text-body-secondary small mb-0">
                                <li><strong>Predictability:</strong> You know your car assignment <em>before</em> you board. No rushing to find buttons in a crowd.</li>
                                <li><strong>Reduced Crowding:</strong> Smart grouping means fewer stops and a quieter ride.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="accordion accordion-flush" id="faqAccordion">
                
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button collapsed bg-transparent text-body-emphasis shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                            <i class="fa-duotone fa-circle-question me-2 text-body-secondary"></i> What if I get on the wrong elevator?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-body-secondary small">
                            If you board the wrong car, do not panic. Simply exit at the next available stop. Every lobby has a kiosk where you can re-enter your destination.
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed bg-transparent text-body-emphasis shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            <i class="fa-duotone fa-hand-holding me-2 text-body-secondary"></i> Can I hold the door?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-body-secondary small">
                            Please do not hold the doors. The system calculates weight and timing precisely to optimize flow. Blocking the sensor may cause the elevator to go out of service. Another car will be assigned immediately.
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed bg-transparent text-body-emphasis shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                            <i class="fa-duotone fa-gear me-2 text-body-secondary"></i> How do I program my badge?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-body-secondary small">
                            Submit a ticket to the <strong>Security Operations Center (SOC)</strong> or visit the security desk in the main lobby (Floor 1). Request "Destination Dispatch Home Floor Assignment."
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>