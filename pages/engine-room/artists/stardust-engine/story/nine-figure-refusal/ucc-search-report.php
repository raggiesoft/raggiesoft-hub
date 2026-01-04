<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/ucc-search-report.php
// EVIDENCE ITEM #12-C: The "Impossible" UCC Search
// Context: Proof of zero debt AND Proof of Frost's incompetence (Wrong Jurisdiction).
// UPDATED: Replaced manual navigation with Narrative Stepper component.

$pageTitle = "UCC Search Report: Engine Room Records - Evidence #12-C";
?>

<style>
    /* STATE DOCUMENT THEME - ADAPTIVE */
    .state-doc {
        font-family: 'Courier New', monospace;
        background-color: var(--bs-body-tertiary); /* Adaptive Paper */
        color: var(--bs-body-color);
        border: 4px double var(--bs-border-color);
        box-shadow: var(--bs-box-shadow);
        position: relative;
        overflow: hidden;
    }
    .state-header {
        text-align: center;
        border-bottom: 2px solid var(--bs-border-color);
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }
    .watermark-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: 8rem;
        color: var(--bs-secondary);
        opacity: 0.05; 
        font-weight: bold;
        text-transform: uppercase;
        pointer-events: none;
        white-space: nowrap;
        z-index: 0;
    }
    
    .doc-content {
        position: relative;
        z-index: 1;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="state-doc p-5">
                <div class="watermark-text">NO RECORDS FOUND</div>
                
                <div class="doc-content">
                    <div class="state-header">
                        <h2 class="h4 fw-bold text-uppercase mb-1">State Corporation Commission</h2>
                        <p class="small text-uppercase letter-spacing-2 mb-0">Uniform Commercial Code (UCC) Search Division</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Search Reference:</p>
                            <p class="font-monospace">REQ-2018-09-12-0044</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Date Processed:</p>
                            <p class="font-monospace">September 12, 2018</p>
                        </div>
                    </div>

                    <div class="border p-3 mb-4 bg-body border-secondary-subtle">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Entity Name:</p>
                                <p class="fw-bold fs-5 mb-0">ENGINE ROOM RECORDS, LLC</p>
                                <p class="small font-monospace mb-0 text-body-secondary">ID: S554920-9</p>
                            </div>
                            <div class="col-md-4 border-start border-secondary-subtle ps-4">
                                <p class="mb-1 small text-uppercase fw-bold text-body-secondary">Entity Type:</p>
                                <p class="font-monospace mb-0">Foreign LLC</p>
                                <p class="small fw-bold text-danger mb-0">Jurisdiction: DELAWARE</p>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold border-bottom border-secondary pb-2 mb-3">Search Results: Debtor Index (Virginia)</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless font-monospace small mb-0" style="color: inherit;">
                            <thead class="border-bottom border-secondary">
                                <tr>
                                    <th scope="col" class="text-uppercase">Filing Type</th>
                                    <th scope="col" class="text-uppercase">Filing Number</th>
                                    <th scope="col" class="text-uppercase">Date</th>
                                    <th scope="col" class="text-uppercase">Secured Party</th>
                                    <th scope="col" class="text-uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center py-4 fst-italic text-body-secondary">
                                        *** NO RECORDS FOUND ***<br>
                                        The search of the records of the Virginia Commission reflects no active UCC financing statements.<br>
                                        (Note: Secured debts for Foreign entities are typically filed in the Jurisdiction of Formation.)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-5 pt-4 border-top border-secondary text-center small text-body-secondary">
                        <p class="mb-0">CERTIFIED COPY - COMMONWEALTH OF VIRGINIA</p>
                        <p class="font-monospace">End of Report</p>
                    </div>
                </div>

                <div class="position-absolute bg-body shadow p-3 border border-danger border-2" 
                     style="top: 200px; right: -20px; width: 260px; transform: rotate(2deg); font-family: 'Kalam', cursive; z-index: 2;">
                    <strong class="text-danger text-uppercase border-bottom border-danger-subtle pb-1 mb-2 d-block">Analyst Note:</strong>
                    <p class="small mb-2 text-body-emphasis">
                        "Zero debt? Impossible. They have tour buses. This is a shell company.
                    </p>
                    <p class="small mb-2 text-body-emphasis">
                        <strong>Action:</strong> Frost says ignore the girl (Holly). She's just the gatekeeper.
                    </p>
                    <p class="small mb-0 text-body-emphasis fw-bold text-danger">
                        Send the package to the drummer (Tyler). He'll break."
                    </p>
                </div>

            </div>

        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/target-profile', 'label' => 'Target Profile'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo', 'label' => 'The "Bus Memo"']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>