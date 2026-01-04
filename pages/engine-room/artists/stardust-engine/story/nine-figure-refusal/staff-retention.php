<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/staff-retention.php
// EVIDENCE ITEM #101: The "Bridge" Letter
// Context: Holly hires the staff that Frost abandoned.
// UPDATED: WCAG Compliance & Narrative Stepper.

$pageTitle = "The Retention Offer - Engine Room History";
?>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-success-subtle text-success-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-success-subtle">
                <i class="fa-duotone fa-handshake me-2"></i>Personnel Action
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                THE "BRIDGE" OFFER
            </h1>
            <p class="lead text-body-secondary font-monospace">
                "The ship sank. But the crew is worth saving."
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="card bg-body-tertiary border-secondary shadow-lg mb-5">
                <div class="card-body p-4">
                    <h5 class="text-uppercase text-body-emphasis border-bottom border-secondary pb-3 mb-3">
                        <i class="fa-solid fa-users me-2"></i>Status Update: The Workforce
                    </h5>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-danger-subtle text-danger-emphasis border border-danger rounded h-100">
                                <strong class="d-block text-uppercase small mb-2">Previous Status (Omni-Global)</strong>
                                <ul class="list-unstyled mb-0 small">
                                    <li><i class="fa-solid fa-xmark me-2"></i>Terminated (Chapter 7)</li>
                                    <li><i class="fa-solid fa-xmark me-2"></i>Unpaid Wages (2 Pay Periods)</li>
                                    <li><i class="fa-solid fa-xmark me-2"></i>Healthcare Cancelled</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-success-subtle text-success-emphasis border border-success rounded h-100">
                                <strong class="d-block text-uppercase small mb-2">New Status (Jessica Miller Center)</strong>
                                <ul class="list-unstyled mb-0 small">
                                    <li><i class="fa-solid fa-check me-2"></i>Hired Immediately</li>
                                    <li><i class="fa-solid fa-check me-2"></i>Signing Bonus (= Lost Wages + 10%)</li>
                                    <li><i class="fa-solid fa-check me-2"></i>Paid Furlough (During Renovation)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                /**
                 * LETTERHEAD COMPONENT
                 * Context: The Offer Letter sent to all 150 non-executive employees.
                 */
                $letter_date = "December 15, 2018";
                $letter_to = "The Staff of the Former Omni-Global Media Corp.<br>(Excluding Executive Management)";
                
                $brand = 'engine-room'; 
                $letter_stamp = "HIRED"; 
                $stamp_color = "success"; 
                $letter_rotation = 1.0; 

                $letter_body = '
                <p>To the Crew,</p>
                
                <p>By now, you have been notified by the Bankruptcy Trustee that your employment with Omni-Global Media has been terminated. You have also likely discovered that your last two paychecks have bounced. I am sorry. You deserved better leaders.</p>

                <p>However, while the corporation is dead, the work you did was real. You know how to run this building. You know the logistics. You know the clients. <strong>You are not the problem. You are the infrastructure.</strong></p>

                <p>Engine Room Records has signed a long-term lease for Floors 38, 39, and 40. We are establishing a new West Coast headquarters: <strong>The Jessica Miller Center</strong>.</p>

                <p>We are not bringing in a new team. We want you.</p>

                <h5 class="fw-bold text-uppercase mt-4 mb-3 text-decoration-underline" style="font-family: \'Arial\', sans-serif; font-size: 1rem;">The Offer</h5>

                <ol class="mb-4">
                    <li class="mb-3"><strong>Immediate Employment:</strong> Effective today, you are employees of <em>The Jessica Miller Center, LLC</em>. Your seniority and benefits bridge over intact.</li>
                    <li class="mb-3"><strong>The "Frost Tax" Bonus:</strong> We cannot legally pay Omni-Global\'s debts. However, we are offering a <strong>Signing Bonus</strong> equivalent to 110% of your unpaid back wages. This check clears today.</li>
                    <li class="mb-3"><strong>Paid Renovation Leave:</strong> We are gutting the executive floor to remove the... toxicity. Construction will take 6 weeks. During this time, you are on <strong>Full Paid Furlough</strong>. Go home. Rest. Spend the holidays with your families.</li>
                </ol>

                <p><strong>One Condition:</strong> The culture changes today. We do not yell. We do not demand overtime without consent. And we do not look down on anyone. If you liked the old way, do not sign this letter.</p>

                <p>For everyone else: Welcome to the Engine Room.</p>

                <p class="mt-4">See you in January,</p>
                ';

                include ROOT_PATH . '/includes/components/corporate/letterhead.php'; 
            ?>

        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="alert alert-dark bg-body-tertiary border-primary text-body-secondary d-flex align-items-center shadow-sm">
                <i class="fa-solid fa-heart-pulse fs-2 me-4 text-primary"></i>
                <div>
                    <h5 class="alert-heading fw-bold text-primary">The Retention Rate</h5>
                    <p class="mb-0 small">
                        Of the 142 eligible employees (support staff, logistics, IT, janitorial), <strong>138 accepted the offer</strong>. The only four who declined were mid-level managers who refused to report to a 20-year-old Executive Director (Jessica). They were not missed.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/chapter-7-conversion-order', 'label' => 'The Death Warrant'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction', 'label' => 'The Liquidation']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>