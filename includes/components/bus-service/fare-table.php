<?php
// includes/components/fare-table.php
// A highly adaptable, data-driven fare table component for regional transit agencies.
// Expects: $systemMeta, $fares, $fareProducts (optional), $transferPolicy
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
            <?php echo htmlspecialchars($systemMeta['name'] ?? 'Transit Fares'); ?>
        </h1>
        <p class="lead text-body-secondary font-monospace">
            <?php echo htmlspecialchars($systemMeta['subtitle'] ?? 'Fare Information'); ?>
        </p>
        <div class="badge bg-secondary-subtle text-secondary-emphasis border border-secondary-subtle rounded-pill px-3 py-2 mt-2 font-monospace">
            <i class="fa-duotone fa-calendar-check me-2"></i><?php echo htmlspecialchars($systemMeta['effective_date'] ?? 'Current'); ?>
        </div>
    </div>

    <?php if (!empty($systemMeta['perk_banner'])): ?>
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #630031 0%, #1a050d 100%); border-left: 5px solid #ffc107 !important;">
                <div class="card-body p-4 p-md-5 d-flex align-items-center">
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
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-secondary shadow-sm">
                <div class="card-header bg-dark text-white fw-bold text-uppercase d-flex justify-content-between align-items-center py-3">
                    <span><i class="fa-duotone fa-coins me-2 text-warning"></i>Standard Fares</span>
                </div>
                
                <?php if (($fares['type'] ?? 'flat') === 'flat'): ?>
                    <ul class="list-group list-group-flush bg-transparent font-monospace">
                        <?php foreach($fares['rates'] as $passenger => $price): ?>
                            <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center py-3">
                                <span class="text-body-emphasis fw-bold text-uppercase"><?php echo htmlspecialchars($passenger); ?></span>
                                <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle fs-6 rounded-pill px-3">
                                    <?php echo htmlspecialchars($price); ?>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
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
            </div>
            
            <?php if (!empty($systemMeta['fare_media'])): ?>
                <div class="alert alert-secondary mt-3 small text-body-secondary d-flex align-items-center">
                    <i class="fa-solid fa-circle-info me-2 text-secondary"></i>
                    <?php echo htmlspecialchars($systemMeta['fare_media']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row justify-content-center g-4">
        
        <?php if (!empty($fareProducts)): ?>
        <div class="col-lg-5">
            <div class="card h-100 border-0 bg-body-tertiary shadow-sm">
                <div class="card-header bg-transparent border-bottom border-secondary-subtle py-3">
                    <h5 class="fw-bold text-body-emphasis text-uppercase mb-0">
                        <i class="fa-duotone <?php echo htmlspecialchars($fareProducts['icon'] ?? 'fa-ticket'); ?> me-2 text-primary"></i>
                        <?php echo htmlspecialchars($fareProducts['title']); ?>
                    </h5>
                </div>
                <div class="card-body p-4">
                    <p class="small text-body-secondary mb-4"><?php echo htmlspecialchars($fareProducts['description']); ?></p>
                    <ul class="list-group list-group-flush rounded border border-secondary-subtle font-monospace small">
                        <?php foreach($fareProducts['caps'] as $passName => $passPrice): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-body">
                                <span class="text-body-emphasis"><?php echo htmlspecialchars($passName); ?></span>
                                <span class="fw-bold text-primary"><?php echo htmlspecialchars($passPrice); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($transferPolicy)): ?>
        <div class="col-lg-5">
            <div class="card h-100 border-warning shadow-sm">
                <div class="card-header bg-warning bg-opacity-10 border-bottom border-warning text-warning-emphasis fw-bold text-uppercase py-3 d-flex justify-content-between align-items-center">
                    <span><i class="fa-duotone fa-shuffle me-2"></i><?php echo htmlspecialchars($transferPolicy['title']); ?></span>
                    <?php if(!empty($transferPolicy['cost'])): ?>
                        <span class="badge bg-warning text-dark"><?php echo htmlspecialchars($transferPolicy['cost']); ?></span>
                    <?php endif; ?>
                </div>
                <div class="card-body p-4 bg-body">
                    <?php if(!empty($transferPolicy['mode'])): ?>
                        <span class="badge bg-dark text-white mb-3 font-monospace"><?php echo htmlspecialchars($transferPolicy['mode']); ?></span>
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
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>