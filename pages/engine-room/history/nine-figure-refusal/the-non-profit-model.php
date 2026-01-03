<?php
// pages/engine-room/history/nine-figure-refusal/the-non-profit-model.php
// The "Service Over Sovereignty" Pivot
// UPDATED: WCAG Compliance & Narrative Stepper

$pageTitle = "The Non-Profit Model - Engine Room History";
?>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-sm border border-primary-subtle">
                <i class="fa-duotone fa-hand-holding-box me-2"></i>Operational Pivot: Feb 2019
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                The "Zero Extraction" Model
            </h1>
            <p class="lead text-body-secondary font-monospace">
                How Holly O'Connell dismantled the "360 Deal" and turned a corporate predator into a public utility for artists.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="row g-0">
                    
                    <div class="col-md-6 bg-body-tertiary border-end border-secondary-subtle">
                        <div class="p-5">
                            <h4 class="text-uppercase text-danger mb-4"><i class="fa-solid fa-skull-crossbones me-2"></i>The Omni Model (Old)</h4>
                            <p class="text-body-secondary small mb-3 text-uppercase fw-bold letter-spacing-1">The "360 Deal"</p>
                            <ul class="list-unstyled text-body-secondary font-monospace">
                                <li class="mb-3 d-flex"><i class="fa-solid fa-xmark text-danger mt-1 me-3"></i> <div><strong>Ownership:</strong> Label owns 100% of Masters in perpetuity.</div></li>
                                <li class="mb-3 d-flex"><i class="fa-solid fa-xmark text-danger mt-1 me-3"></i> <div><strong>Revenue:</strong> Label takes 85% of streaming, 50% of touring, 50% of merch.</div></li>
                                <li class="mb-3 d-flex"><i class="fa-solid fa-xmark text-danger mt-1 me-3"></i> <div><strong>Debt:</strong> Artist pays for recording, marketing, and travel (Recoupable Debt).</div></li>
                                <li class="mb-0 d-flex"><i class="fa-solid fa-xmark text-danger mt-1 me-3"></i> <div><strong>Goal:</strong> Extract maximum value before the artist burns out.</div></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 bg-body-secondary">
                        <div class="p-5">
                            <h4 class="text-uppercase text-success mb-4"><i class="fa-solid fa-seedling me-2"></i>The Engine Model (New)</h4>
                            <p class="text-body-secondary small mb-3 text-uppercase fw-bold letter-spacing-1">Logistics As A Service (LaaS)</p>
                            <ul class="list-unstyled text-body-emphasis font-monospace">
                                <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <div><strong>Ownership:</strong> Artist owns 100% of Masters. Always.</div></li>
                                <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <div><strong>Revenue:</strong> Artist keeps 100%. They pay a flat monthly fee for services used.</div></li>
                                <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <div><strong>Debt:</strong> Zero. Services are pay-as-you-go (Cost + 5%).</div></li>
                                <li class="mb-0 d-flex"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <div><strong>Goal:</strong> Provide infrastructure so the artist survives forever.</div></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h3 class="h4 fw-bold text-body-emphasis border-bottom border-secondary pb-2 mb-4">
                The Philosophy: "Service Over Sovereignty"
            </h3>
            
            <?php 
            $letter_date = "February 1, 2019";
            $letter_to = "All Employees of the Reorganized Entity";
            
            $letter_body = '
                <p>To the Staff,</p>
                <p>Many of you are worried that I am going to fire you. I am not. You are good at your jobs. You know how to ship vinyl to Tokyo. You know how to route a tour through the Midwest. You know how to clear a sample in 24 hours.</p>
                <p>The problem wasn\'t <em>you</em>. The problem was who you were doing it <em>for</em>.</p>
                <p>Effective immediately, we are no longer a "Record Label." We do not sign artists. We do not own copyright. We are a <strong>Logistics Utility</strong>.</p>
                <p>We are going to use this massive infrastructure—the trucks, the warehouses, the legal teams—to support independent artists who cannot afford to build it themselves. We will charge them exactly what it costs us to run the lights, plus 5% to keep the trucks fixed.</p>
                <p>We aren\'t here to make a billion dollars anymore. We are here to make sure the music doesn\'t stop.</p>
                <p>Get back to work.</p>
            ';

            $brand = 'engine-room'; // Use standard Engine Room letterhead
            $letter_stamp = "MISSION UPDATE"; 
            $stamp_color = "primary"; 
            $letter_rotation = -0.5; 

            include ROOT_PATH . '/includes/components/corporate/letterhead.php'; 
            ?>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <h3 class="h4 fw-bold text-success border-bottom border-success pb-2 mb-4">
                The New Menu: "A La Carte" Infrastructure
            </h3>
            <p class="text-body-secondary mb-4">
                Instead of signing a life-binding contract, artists simply access the services they need via the <strong>Jessica Miller Portal</strong>.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card bg-body-tertiary border-0 h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                <i class="fa-duotone fa-truck-container fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold text-body-emphasis">Physical Distribution</h5>
                            <p class="small text-body-secondary mb-3">Warehousing and shipping for vinyl/merch.</p>
                            <div class="badge bg-body-secondary text-primary border border-primary font-monospace p-2">
                                COST + 5%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-body-tertiary border-0 h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-success bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                <i class="fa-duotone fa-scale-balanced fa-2x text-success"></i>
                            </div>
                            <h5 class="fw-bold text-body-emphasis">Legal Defense Fund</h5>
                            <p class="small text-body-secondary mb-3">Copyright protection and contract review.</p>
                            <div class="badge bg-body-secondary text-success border border-success font-monospace p-2 text-uppercase">
                                Pro Bono
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-body-tertiary border-0 h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-warning bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                <i class="fa-duotone fa-server fa-2x text-warning-emphasis"></i>
                            </div>
                            <h5 class="fw-bold text-body-emphasis">Digital Payouts</h5>
                            <p class="small text-body-secondary mb-3">Direct-to-bank royalty collection (No holding).</p>
                            <div class="badge bg-body-secondary text-warning-emphasis border border-warning font-monospace p-2 text-uppercase">
                                0% Fee
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="alert alert-light bg-body-tertiary border-primary d-flex align-items-center shadow-lg" role="alert">
                <i class="fa-duotone fa-face-smile-wink text-primary fs-1 me-4"></i>
                <div>
                    <h5 class="alert-heading text-body-emphasis fw-bold">The Irony of Success</h5>
                    <p class="mb-0 text-body-secondary">
                        By stopping the theft of royalties, the reorganized company actually became <strong>more profitable</strong> than the old Omni-Global. Why? Volume. 
                        <br><br>
                        Independent artists flocked to the "Jessica Miller Center" in the thousands because it was the only major infrastructure that didn't ask them to sell their souls. Holly proved that <strong>trust scales better than fear.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Narrative Stepper Configuration
        $nav = [
            'prev' => ['url' => '/engine-room/history/nine-figure-refusal/the-jessica-miller-center', 'label' => 'The Jessica Miller Center'],
            'overview' => ['url' => '/engine-room/history/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/history/nine-figure-refusal/frost-interview', 'label' => 'Epilogue: The Frost Interview']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>