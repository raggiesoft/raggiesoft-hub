<?php
/**
 * ARCHITECTURE: fare-table.php
 * 
 * Context: RaggieSoft Hub - Bus Service Component.
 * Narrative/Purpose: A highly adaptable, data-driven fare table component designed for regional 
 * transit agencies (like the fictional Piedmont Regional Transit). It renders dynamic pricing, 
 * transfer policies, and perk banners based on structured PHP arrays passed to it.
 * 
 * Mechanics:
 * - Expects specific data structures: $systemMeta, $fares, $fareProducts, and $transferPolicy.
 * - Supports two `$fares['type']` rendering modes: 'flat' (simple list) and 'comparison' (table).
 * - Utilizes Bootstrap 5 utility classes extensively for responsive typography (e.g., 'font-monospace') 
 *   and thematic coloring.
 */
// includes/components/fare-table.php
// A highly adaptable, data-driven fare table component for regional transit agencies.
// Expects: $systemMeta, $fares, $fareProducts (optional), $transferPolicy
?>

<!-- START: Fare Table Component Container -->
<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
            <?php echo htmlspecialchars($systemMeta['name'] ?? 'Transit Fares'); ?>
        </h1>
        <p class="lead text-body-secondary font-monospace">
            <?php echo htmlspecialchars($systemMeta['subtitle'] ?? 'Fare Information'); ?>
        </p>
        <wa-badge variant="neutral" appearance="filled-outlined" pill class="px-3 py-2 mt-2 font-monospace">
            <i class="fa-duotone fa-calendar-check me-2"></i><?php echo htmlspecialchars($systemMeta['effective_date'] ?? 'Current'); ?>
        </wa-badge>
    </div>

    <?php if (!empty($systemMeta['perk_banner'])): ?>
    <!-- START: Perk Banner Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <wa-card class="border-0 shadow-lg" style="--wa-panel-background-color: #3a001c; border-left: 5px solid #ffc107 !important;">
                <div class="p-2 p-md-3 d-flex align-items-center">
                    <i class="fa-solid fa-id-card fa-3x text-warning me-4 d-none d-md-block"></i>
                    <div>
                        <h3 class="h5 fw-bold text-warning text-uppercase mb-2">
                            <?php echo htmlspecialchars($systemMeta['perk_banner']['title']); ?>
                        </h3>
                        <p class="text-white opacity-75 mb-0 small" style="line-height: 1.6;">
                            <?php echo htmlspecialchars($systemMeta['perk_banner']['text']); ?>
                        </p>
                    </div>
                </div>
            </wa-card>
        </div>
    </div>
    <?php endif; ?>

    <!-- START: Fares Table/List Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <wa-card class="shadow-sm">
                <div slot="header" class="fw-bold text-uppercase d-flex justify-content-between align-items-center w-100">
                    <span><i class="fa-duotone fa-coins me-2 text-warning"></i>Standard Fares</span>
                </div>
                
                <?php if (($fares['type'] ?? 'flat') === 'flat'): ?>
                    <div class="d-flex flex-column font-monospace">
                        <?php foreach($fares['rates'] as $passenger => $price): ?>
                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom border-secondary-subtle">
                                <span class="text-body-emphasis fw-bold text-uppercase"><?php echo htmlspecialchars($passenger); ?></span>
                                <wa-badge variant="success" appearance="filled-outlined" pill class="fs-6 px-3">
                                    <?php echo htmlspecialchars($price); ?>
                                </wa-badge>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php elseif (($fares['type'] ?? '') === 'comparison'): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0 font-monospace">
                            <thead class="table-secondary border-bottom border-secondary-subtle">
                                <tr>
                                    <?php foreach($fares['columns'] as $col): ?>
                                        <th scope="col" class="py-3 px-3 text-body-emphasis fw-bold text-uppercase"><?php echo htmlspecialchars($col); ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fares['rates'] as $service => $prices): ?>
                                    <tr>
                                        <td class="py-3 px-3 text-body-emphasis fw-bold"><?php echo htmlspecialchars($service); ?></td>
                                        <td class="py-3 px-3 bg-success bg-opacity-10 border-start border-success border-opacity-25 fw-bold text-success-emphasis">
                                            <?php echo $prices['card']; // Allowing HTML for small subtext ?>
                                        </td>
                                        <td class="py-3 px-3 border-start border-danger border-opacity-25">
                                            <?php echo $prices['cash']; // Allowing HTML for danger spans ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </wa-card>
            
            <?php if (!empty($systemMeta['fare_media'])): ?>
                <wa-callout variant="neutral" appearance="filled-outlined" class="mt-3 small">
                    <i slot="icon" class="fa-solid fa-circle-info"></i>
                    <?php echo htmlspecialchars($systemMeta['fare_media']); ?>
                </wa-callout>
            <?php endif; ?>
        </div>
    </div>

    <!-- START: Fare Products & Policies -->
    <div class="row justify-content-center g-4">
        
        <?php if (!empty($fareProducts)): ?>
        <div class="col-lg-5">
            <wa-card class="h-100 shadow-sm">
                <div slot="header">
                    <h5 class="fw-bold text-body-emphasis text-uppercase mb-0">
                        <i class="fa-duotone <?php echo htmlspecialchars($fareProducts['icon'] ?? 'fa-ticket'); ?> me-2 text-primary"></i>
                        <?php echo htmlspecialchars($fareProducts['title']); ?>
                    </h5>
                </div>
                <div>
                    <p class="small text-body-secondary mb-4"><?php echo htmlspecialchars($fareProducts['description']); ?></p>
                    <div class="d-flex flex-column rounded border border-secondary-subtle font-monospace small p-3 gap-2">
                        <?php foreach($fareProducts['caps'] as $passName => $passPrice): ?>
                            <div class="d-flex justify-content-between align-items-center py-1 border-bottom border-secondary-subtle">
                                <span class="text-body-emphasis"><?php echo htmlspecialchars($passName); ?></span>
                                <span class="fw-bold text-primary"><?php echo htmlspecialchars($passPrice); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </wa-card>
        </div>
        <?php endif; ?>

        <?php if (!empty($transferPolicy)): ?>
        <div class="col-lg-5">
            <wa-card class="h-100 border-warning shadow-sm">
                <div slot="header" class="text-warning-emphasis fw-bold text-uppercase d-flex justify-content-between align-items-center w-100">
                    <span><i class="fa-duotone fa-shuffle me-2"></i><?php echo htmlspecialchars($transferPolicy['title']); ?></span>
                    <?php if(!empty($transferPolicy['cost'])): ?>
                        <wa-badge variant="warning" appearance="accent"><?php echo htmlspecialchars($transferPolicy['cost']); ?></wa-badge>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if(!empty($transferPolicy['mode'])): ?>
                        <wa-badge variant="neutral" appearance="accent" class="mb-3 font-monospace"><?php echo htmlspecialchars($transferPolicy['mode']); ?></wa-badge>
                    <?php endif; ?>
                    
                    <ul class="list-unstyled small text-body-secondary mb-0" style="line-height: 1.6;">
                        <?php foreach($transferPolicy['rules'] as $rule): ?>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-warning mt-1 me-2"></i>
                                <span><?php echo $rule; // Allowing HTML for bolding critical warnings ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </wa-card>
        </div>
        <?php endif; ?>

    </div>
</div>