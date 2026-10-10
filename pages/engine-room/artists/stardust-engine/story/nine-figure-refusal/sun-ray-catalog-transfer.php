<?php
/**
 * Stardust Engine - Lore/Story Template: The Repatriation (Lot 200)
 * 
 * ARCHITECTURAL OVERVIEW:
 * This template visually represents the legal disposition of the Stardust Engine's
 * master recordings following the Omni-Global bankruptcy. It acts as the triumphant
 * conclusion to the "Nine Figure Refusal" arc.
 * 
 * LAYOUT STRUCTURE:
 * - Uses a standard Bootstrap 5 container grid.
 * - Custom CSS: Contains inline styles to force high-contrast black-and-white
 *   rendering for the physical invoice simulation, overriding dark mode where necessary.
 * - Chain of Title Diagram: A vertical flow-chart using Bootstrap flex utilities
 *   and FontAwesome icons to track the legal transfer of the assets.
 * - Invoice Simulation: A custom styled .physical-invoice component that mimics
 *   a printed legal bill of sale, including a transparent signature image overlay.
 * - Narrative Stepper: Included at the bottom to continue/conclude the story sequence.
 * 
 * DEPENDENCIES:
 * - Expects $cdnBaseUrl for resolving the signature image asset.
 * - Uses FontAwesome for thematic iconography (fa-building-columns, fa-shield-halved).
 * 
 * MAINTENANCE NOTES:
 * - The .physical-invoice class includes !important tags in the <style> block to
 *   prevent Bootstrap's dark mode variables from inverting the invoice colors.
 * - If you update the table structure of the invoice, ensure the $1.00 consideration
 *   remains clear, as it is a critical plot point.
 */

// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/sun-ray-catalog-transfer.php
// EVIDENCE ITEM #200-FINAL: The Repatriation
// Context: The journey from "Toxic Asset" to "Artist Owned."
// UPDATED: WCAG Color Compliance & Removed Opacity Fades.

$pageTitle = "Lot 200: The Sun-Ray Repatriation";
?>

<!-- BEGIN: Page-Specific Styles (Invoice overrides) -->
<style>
    /* Force high contrast for the physical invoice simulation */
    .physical-invoice {
        background-color: #ffffff !important;
        color: #000000 !important;
        border: 1px solid #dee2e6;
    }
    
    .physical-invoice .table {
        color: #000000 !important;
        border-color: #000000 !important;
    }
    
    .physical-invoice .border-dark {
        border-color: #000000 !important;
    }

    /* Dark Mode specific overrides for the Chain of Title Diagram */
    [data-bs-theme="dark"] .bg-body-tertiary {
        background-color: #212529 !important;
    }
</style>
<!-- END: Page-Specific Styles -->

<!-- BEGIN: Main Page Container -->
<div class="container py-5">
    
    <!-- BEGIN: Header Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-success-subtle text-success-emphasis rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-success-subtle">
                <i class="fa-duotone fa-file-signature me-2"></i>Final Disposition
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                LOT 200: THE JOURNEY
            </h1>
            <p class="lead text-body-secondary font-monospace">
                How $100 Million in debt became a $1.00 freedom payment.
            </p>
        </div>
    </div>
    <!-- END: Header Section -->

    <!-- BEGIN: Chain of Title Diagram -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-secondary shadow-lg">
                <div class="card-body p-5">
                    <h5 class="text-uppercase text-body-emphasis border-bottom border-secondary pb-3 mb-4">
                        <i class="fa-solid fa-route me-2"></i>Chain of Title (2018-2019)
                    </h5>

                    <!-- Step 1: Omni-Global -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 text-center" style="width: 80px;">
                            <i class="fa-duotone fa-building-columns fa-2x text-body-secondary"></i>
                        </div>
                        <div class="flex-grow-1 border-start border-4 border-secondary ps-4 py-2">
                            <h6 class="fw-bold text-body-secondary mb-0 text-decoration-line-through">1. Omni-Global Media (Debtor)</h6>
                            <p class="small text-body-secondary mb-0">Held Masters as collateral for toxic loans.</p>
                        </div>
                        <div class="flex-shrink-0 text-end fw-bold text-danger font-monospace">
                            BANKRUPT
                        </div>
                    </div>

                    <div class="text-center text-body-secondary mb-4">
                        <i class="fa-solid fa-arrow-down fa-xl"></i>
                    </div>

                    <!-- Step 2: Aethelgard Holdings -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 text-center" style="width: 80px;">
                            <i class="fa-duotone fa-shield-halved fa-2x text-primary"></i>
                        </div>
                        <div class="flex-grow-1 border-start border-4 border-primary ps-4 py-2 bg-primary-subtle rounded-end">
                            <h6 class="fw-bold text-primary-emphasis mb-0">2. Aethelgard Holdings (Secured Creditor)</h6>
                            <p class="small text-primary-emphasis mb-0">
                                <span class="badge bg-primary text-white me-2">CREDIT BID</span>
                                Acquired Lot 200 via §363(k) using acquired debt.
                            </p>
                        </div>
                        <div class="flex-shrink-0 text-end fw-bold text-primary font-monospace">
                            TRANSIT
                        </div>
                    </div>

                    <div class="text-center text-body-secondary mb-4">
                        <i class="fa-solid fa-arrow-down fa-xl"></i>
                    </div>

                    <!-- Step 3: The Artist -->
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 text-center" style="width: 80px;">
                            <i class="fa-duotone fa-guitar-electric fa-2x text-success"></i>
                        </div>
                        <div class="flex-grow-1 border-start border-4 border-success ps-4 py-2 bg-success-subtle rounded-end">
                            <h6 class="fw-bold text-success-emphasis mb-0">3. The Artist (Owner)</h6>
                            <p class="small text-success-emphasis mb-0">
                                Purchased for <strong>$1.00</strong> (Legal Consideration).
                            </p>
                        </div>
                        <div class="flex-shrink-0 text-end fw-bold text-success font-monospace">
                            LIBERATED
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Chain of Title Diagram -->

    <!-- BEGIN: Physical Invoice Simulation -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg physical-invoice" style="font-family: 'Courier New', monospace;">
                <div class="card-body p-5 position-relative">
                    
                    <div class="row mb-4 border-bottom border-dark pb-3">
                        <div class="col-6">
                            <strong>SELLER:</strong><br>
                            Engine Room Archives, LLC<br>
                            Wilmington, DE
                        </div>
                        <div class="col-6 text-end">
                            <strong>INVOICE #</strong> ER-2019-001<br>
                            <strong>DATE:</strong> Feb 15, 2019
                        </div>
                    </div>

                    <p class="mb-4"><strong>SOLD TO:</strong> Cassidy O'Connell</p>

                    <table class="table table-bordered border-dark mb-4">
                        <thead class="bg-light text-dark border-dark">
                            <tr>
                                <th>ITEM DESCRIPTION</th>
                                <th class="text-end">AMOUNT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Master Recordings (1994-2018)</strong><br>
                                    Includes all physical reels, digital assets, and copyright registrations previously held by Omni-Global Media.
                                </td>
                                <td class="text-end align-top">$1.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-end fw-bold">TOTAL DUE:</td>
                                <td class="text-end fw-bold">$1.00</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="text-center mt-5">
                        <div class="d-inline-block border-bottom border-dark px-5 pb-1 mb-2">
                            <img src="<?php echo $cdnBaseUrl; ?>/signatures/holly-oconnell.png" style="height: 40px; opacity: 1.0;" alt="Holly O'Connell Signature">
                        </div>
                        <div class="small">HOLLY O'CONNELL, TRUSTEE</div>
                    </div>

                    <div class="position-absolute top-50 start-50 translate-middle" style="opacity: 0.15; transform: rotate(-30deg); pointer-events: none;">
                        <i class="fa-solid fa-file-invoice-dollar fa-10x text-success"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Physical Invoice Simulation -->
    
    <!-- BEGIN: Narrative Stepper -->
    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/liquidation-auction', 'label' => 'The Liquidation Auction'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room', 'label' => 'Return to HQ']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>
    <!-- END: Narrative Stepper -->

</div>