<?php
// includes/components/bus-timetable.php
// Reusable component for rendering transit schedules.
// Expects: $routeMeta, $schedules

if (!function_exists('formatTransitTime')) {
    function formatTransitTime($timeStr) {
        $timeStr = trim($timeStr);
        if ($timeStr === '-' || empty($timeStr) || $timeStr === '&nbsp;') {
            return '<span class="text-muted opacity-25">-</span>';
        }

        $isPm = (strpos(strtolower($timeStr), 'p') !== false);
        $cleanTime = trim(str_replace(['a', 'p', 'A', 'P', 'm', 'M'], '', $timeStr));

        if ($isPm) {
            return '<span class="badge bg-dark text-white border border-secondary shadow-sm px-2 py-1 fw-bold"><i class="fa-solid fa-moon me-1 text-info opacity-75"></i>' . htmlspecialchars($cleanTime) . ' PM</span>';
        } else {
            return '<span class="badge bg-body-tertiary text-body-emphasis border border-secondary-subtle px-2 py-1 fw-normal"><i class="fa-solid fa-sun me-1 text-warning opacity-75"></i>' . htmlspecialchars($cleanTime) . ' AM</span>';
        }
    }
}
?>

<div class="container py-5">
    
    <div class="d-flex align-items-center mb-4 border-bottom border-secondary-subtle pb-3">
        <div class="bg-primary text-white rounded p-3 me-4 text-center shadow-sm" style="min-width: 90px;">
            <h2 class="display-5 fw-bold mb-0"><?php echo htmlspecialchars($routeMeta['id'] ?? ''); ?></h2>
        </div>
        <div>
            <span class="badge bg-primary-subtle text-primary-emphasis text-uppercase letter-spacing-1 mb-2">
                <i class="fa-duotone fa-bus me-1"></i> <?php echo htmlspecialchars($routeMeta['agency'] ?? 'Transit Authority'); ?>
            </span>
            <h1 class="h2 fw-bold text-body-emphasis mb-1"><?php echo htmlspecialchars($routeMeta['name'] ?? 'Route Name'); ?></h1>
            <p class="text-body-secondary mb-0 fw-bold font-monospace small">
                <i class="fa-solid fa-calendar-days me-2 text-warning"></i><?php echo htmlspecialchars($routeMeta['service'] ?? 'Daily Service'); ?>
            </p>
        </div>
    </div>
    
    <div class="row g-4 mb-5">
        <?php if (!empty($routeMeta['alerts'])): ?>
        <div class="col-md-8">
            <div class="alert alert-secondary bg-body-tertiary border-start border-4 border-secondary shadow-sm d-flex h-100 mb-0">
                <i class="fa-duotone fa-triangle-exclamation fs-3 text-secondary me-3 mt-1"></i>
                <div>
                    <h5 class="alert-heading h6 fw-bold text-uppercase">Service Alerts</h5>
                    <?php foreach($routeMeta['alerts'] as $alert): ?>
                        <p class="small text-body-secondary mb-1"><?php echo htmlspecialchars($alert); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($routeMeta['transfers'])): ?>
        <div class="col-md-4">
            <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                <div class="card-header bg-transparent border-bottom border-secondary-subtle fw-bold text-uppercase small">
                    <i class="fa-duotone fa-shuffle me-2 text-primary"></i>Transfer Points
                </div>
                <div class="card-body p-3">
                    <ul class="list-group list-group-flush bg-transparent small font-monospace">
                        <?php foreach($routeMeta['transfers'] as $location => $route): ?>
                            <li class="list-group-item bg-transparent px-0 d-flex justify-content-between align-items-center">
                                <span class="text-body-emphasis"><?php echo htmlspecialchars($location); ?></span>
                                <span class="badge bg-primary rounded-pill"><?php echo htmlspecialchars($route); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <?php if (!empty($schedules) && count($schedules) > 1): ?>
        <ul class="nav nav-pills mb-4" id="scheduleTabs" role="tablist">
            <?php 
            $tabIndex = 0;
            foreach ($schedules as $dayName => $dayData): 
                $tabId = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $dayName));
                $isActive = ($tabIndex === 0) ? 'active' : '';
            ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo $isActive; ?> fw-bold" id="<?php echo $tabId; ?>-tab" data-bs-toggle="pill" data-bs-target="#<?php echo $tabId; ?>-pane" type="button" role="tab" aria-controls="<?php echo $tabId; ?>-pane" aria-selected="<?php echo ($tabIndex === 0) ? 'true' : 'false'; ?>">
                        <?php echo htmlspecialchars($dayName); ?>
                    </button>
                </li>
            <?php 
                $tabIndex++;
            endforeach; 
            ?>
        </ul>
    <?php endif; ?>

    <div class="tab-content" id="scheduleTabsContent">
        <?php 
        $paneIndex = 0;
        foreach ($schedules as $dayName => $dayData): 
            $paneId = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $dayName));
            $isActivePane = ($paneIndex === 0) ? 'show active' : '';
        ?>
            <div class="tab-pane fade <?php echo $isActivePane; ?>" id="<?php echo $paneId; ?>-pane" role="tabpanel" aria-labelledby="<?php echo $paneId; ?>-tab" tabindex="0">
                <div class="row g-5">
                    
                    <?php if (!empty($dayData['inbound'])): ?>
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-dark text-white py-3 d-flex justify-content-between align-items-center">
                                <h3 class="h5 fw-bold mb-0 text-uppercase letter-spacing-1">
                                    <i class="fa-solid fa-arrow-down-to-line me-2 text-success"></i>Inbound
                                </h3>
                                <span class="small font-monospace text-white-50">To <?php echo htmlspecialchars(end($dayData['inbound']['stops'])); ?></span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center font-monospace small mb-0">
                                    <thead class="table-secondary border-bottom border-secondary-subtle">
                                        <tr>
                                            <?php foreach($dayData['inbound']['stops'] as $stop): ?>
                                                <th scope="col" class="py-3 px-2 text-body-emphasis fw-bold" style="width: <?php echo 100/count($dayData['inbound']['stops']); ?>%"><?php echo htmlspecialchars($stop); ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dayData['inbound']['times'] as $row): ?>
                                            <tr>
                                                <?php foreach($row as $time): ?>
                                                    <td class="py-2"><?php echo formatTransitTime($time); ?></td>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($dayData['outbound'])): ?>
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-dark text-white py-3 d-flex justify-content-between align-items-center">
                                <h3 class="h5 fw-bold mb-0 text-uppercase letter-spacing-1">
                                    <i class="fa-solid fa-arrow-up-from-line me-2 text-info"></i>Outbound
                                </h3>
                                <span class="small font-monospace text-white-50">To <?php echo htmlspecialchars(end($dayData['outbound']['stops'])); ?></span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center font-monospace small mb-0">
                                    <thead class="table-secondary border-bottom border-secondary-subtle">
                                        <tr>
                                            <?php foreach($dayData['outbound']['stops'] as $stop): ?>
                                                <th scope="col" class="py-3 px-2 text-body-emphasis fw-bold" style="width: <?php echo 100/count($dayData['outbound']['stops']); ?>%"><?php echo htmlspecialchars($stop); ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dayData['outbound']['times'] as $row): ?>
                                            <tr>
                                                <?php foreach($row as $time): ?>
                                                    <td class="py-2"><?php echo formatTransitTime($time); ?></td>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php 
            $paneIndex++;
        endforeach; 
        ?>
    </div>
</div>