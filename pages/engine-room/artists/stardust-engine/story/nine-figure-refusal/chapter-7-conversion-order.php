<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/chapter-7-conversion-order.php
// The Death Certificate.
// Context: The Bankruptcy Court orders Omni-Global to cease operations immediately.
// UPDATED: WCAG Compliance & Narrative Stepper.

$pageTitle = "Order Converting Case to Chapter 7 - Case 18-11492";
?>

<style>
    /* COURT DOCUMENT STYLE */
    .court-document {
        font-family: 'Times New Roman', serif;
        background-color: #ffffff;
        color: #000000;
        border: 1px solid #ccc;
        box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.1);
        position: relative;
    }
    
    /* Pleading Line Numbers */
    .line-numbers {
        color: #666;
        font-family: 'Courier New', monospace;
        font-size: 0.8rem;
        line-height: 2; /* Matches double spacing of legal text */
        border-right: 1px solid #000;
        padding-right: 10px;
        margin-right: 15px;
        text-align: right;
        user-select: none;
    }

    /* Force Light Mode for the Document */
    .force-light-mode {
        background-color: #ffffff !important;
        color: #000000 !important;
    }
    .force-light-mode table, .force-light-mode th, .force-light-mode td {
        border-color: #000000 !important;
        color: #000000 !important;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-danger-subtle">
                <i class="fa-duotone fa-gavel me-2"></i>Final Judgment
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis text-uppercase mb-2" style="font-family: 'Impact', sans-serif;">
                The Death Warrant
            </h1>
            <p class="lead text-body-secondary font-monospace">
                Order Granting Motion to Convert Case to Chapter 7.
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card border-0 court-document force-light-mode p-5 mx-auto" style="max-width: 900px;">
                
                <div class="text-center fw-bold mb-4">
                    UNITED STATES BANKRUPTCY COURT<br>
                    DISTRICT OF DELAWARE
                </div>

                <div class="row border border-dark mb-4">
                    <div class="col-6 border-end border-dark p-3">
                        In re:<br><br>
                        <strong>OMNI-GLOBAL MEDIA CORP., et al.</strong>,<br><br>
                        Debtors.
                    </div>
                    <div class="col-6 p-3">
                        Case No. 18-11492 (CSS)<br>
                        Chapter 11<br>
                        (Jointly Administered)<br><br>
                        <strong>Ref Docket No. 412 (Motion to Convert)</strong>
                    </div>
                </div>

                <div class="text-center fw-bold text-uppercase text-decoration-underline mb-4">
                    ORDER CONVERTING CASE TO CHAPTER 7 AND APPOINTING TRUSTEE
                </div>

                <div class="d-flex">
                    <div class="line-numbers">
                        1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14
                    </div>

                    <div class="flex-grow-1" style="line-height: 2;">
                        <p class="mb-0">
                            Upon consideration of the Motion filed by the Official Committee of Unsecured Creditors (the "Committee") seeking conversion of these cases to Chapter 7 pursuant to 11 U.S.C. § 1112(b); and upon finding that <strong>cause exists</strong> including (i) gross mismanagement of the estate, (ii) substantial and continuing loss to the estate, and (iii) absence of a reasonable likelihood of rehabilitation; it is hereby:
                        </p>
                        <p class="mb-0">
                            <strong>ORDERED</strong> that the Motion is GRANTED. These cases are hereby converted to cases under <strong>Chapter 7</strong> of the Bankruptcy Code.
                        </p>
                        <p class="mb-0">
                            <strong>ORDERED</strong> that the appointment of the Chapter 7 Trustee is effective immediately. The Debtor's current management is hereby removed from all operational authority.
                        </p>
                        <p class="mb-0">
                            <strong>ORDERED</strong> that the Debtor shall immediately surrender all property of the estate, including physical premises at 2000 Avenue of the Stars, to the Trustee.
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        Dated: December 14, 2018<br>
                        Wilmington, Delaware
                    </div>
                    <div class="col-6 text-end">
                        <div class="border-top border-dark d-inline-block pt-2 text-center" style="width: 250px;">
                            <span class="fst-italic" style="font-family: 'Mrs Saint Delafield', cursive; font-size: 1.5rem;">Christopher S. Sontchi</span><br>
                            <strong>UNITED STATES BANKRUPTCY JUDGE</strong>
                        </div>
                    </div>
                </div>

                <div class="position-absolute top-0 end-0 p-4">
                    <div class="border border-3 border-primary text-primary p-2 text-center fw-bold text-uppercase opacity-75" 
                         style="font-family: 'Courier New', monospace; transform: rotate(15deg); font-size: 0.9rem;">
                        FILED<br>
                        DEC 14 2018<br>
                        US BANKRUPTCY COURT
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="alert alert-dark bg-body-tertiary border-secondary text-body-secondary d-flex align-items-center shadow-sm">
                <i class="fa-solid fa-skull-crossbones fs-2 me-4"></i>
                <div>
                    <h5 class="alert-heading fw-bold">The End of the Line</h5>
                    <p class="mb-0 small">
                        At the moment this order was signed (Dec 14, 2018), Omni-Global Media Corp ceased to exist as an operating business. The Trustee arrived at the offices within 4 hours to change the locks. The "Liquidation Auction" (Lot 200) followed shortly after.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-bus-memo', 'label' => 'The Bus Memo'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction', 'label' => 'The Liquidation']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>