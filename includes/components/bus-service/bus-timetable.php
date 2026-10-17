<?php
// includes/components/bus-timetable.php
// Reusable component for rendering transit schedules.
// Expects: $routeMeta, $schedules

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Universal Bus Transit Timetable
 * Purpose: Renders complex transit schedules, service alerts, and transfer points from injected metadata and schedule arrays.
 * 
 * Strategy & Implementation:
 * - Completely agnostic to specific transit routes; relies entirely on the structure of `$routeMeta` and `$schedules`.
 * - Employs a custom `formatTransitTime` helper function to normalize and style raw time strings (AM/PM formatting).
 * - Utilizes Bootstrap Nav Tabs to separate schedules by day (e.g., Weekday, Saturday, Sunday) if multiple exist.
 * - Analyzes service alerts to determine the visual "severity level" (Info, Warning, Stop) and themes the component accordingly.
 * 
 * Maintenance Recommendations:
 * - If the upstream `$schedules` array structure changes (e.g., adding a new direction other than 'inbound'/'outbound'), 
 *   the rendering loop inside the tab content must be updated.
 * - Ensure `formatTransitTime` remains resilient against malformed data (e.g., empty strings, nulls, invalid formats) 
 *   as transit GTFS feeds can be notoriously dirty.
 */

// Helper to parse and stylize dirty transit time strings (AM/PM visual differentiation)
if (!function_exists('formatTransitTime')) {
    function formatTransitTime($timeStr) {
        $timeStr = trim($timeStr);
        if ($timeStr === '-' || empty($timeStr) || $timeStr === '&nbsp;') {
            return '<span class="text-muted opacity-25">-</span>';
        }

        $isPm = (strpos(strtolower($timeStr), 'p') !== false);
        $cleanTime = trim(str_replace(['a', 'p', 'A', 'P', 'm', 'M'], '', $timeStr));

        if ($isPm) {
            return '<wa-badge variant="neutral" appearance="accent" class="shadow-sm fw-bold"><i class="fa-solid fa-moon me-1 text-info opacity-75"></i>' . htmlspecialchars($cleanTime) . ' PM</wa-badge>';
        } else {
            return '<wa-badge variant="neutral" appearance="filled-outlined" class="fw-normal"><i class="fa-solid fa-sun me-1 text-warning opacity-75"></i>' . htmlspecialchars($cleanTime) . ' AM</wa-badge>';
        }
    }
}
?>

<div class="container py-5">
    
    <div class="d-flex align-items-center mb-4 border-bottom border-secondary-subtle pb-3">
        <div class="bg-primary-subtle text-primary-emphasis border border-primary-subtle rounded p-3 me-4 text-center shadow-sm" style="min-width: 90px;">
            <h2 class="display-5 fw-bold mb-0"><?php echo htmlspecialchars($routeMeta['id'] ?? ''); ?></h2>
        </div>
        <div>
            <wa-badge variant="brand" appearance="filled-outlined" class="text-uppercase letter-spacing-1 mb-2">
                <i class="fa-duotone fa-bus me-1"></i> <?php echo htmlspecialchars($routeMeta['agency'] ?? 'Transit Authority'); ?>
            </wa-badge>
            <h1 class="h2 fw-bold text-body-emphasis mb-1"><?php echo htmlspecialchars($routeMeta['name'] ?? 'Route Name'); ?></h1>
            <p class="text-body-secondary mb-0 fw-bold font-monospace small">
                <i class="fa-solid fa-calendar-days me-2 text-warning"></i><?php echo htmlspecialchars($routeMeta['service'] ?? 'Daily Service'); ?>
            </p>
        </div>
    </div>
    
    <div class="row g-4 mb-5">
        <?php if (!empty($routeMeta['alerts'])): 
            // 1. Severity Scanner: Determine main card styling based on highest alert level
            // Aggregates alert types to ensure the UI visually communicates the most critical issue
            $severityLevel = 1; // 1 = info, 2 = warning, 3 = stop
            $formattedAlerts = [];
            
            foreach($routeMeta['alerts'] as $alertItem) {
                // If the data is just a string, default to 'info'
                $alertText = is_string($alertItem) ? $alertItem : ($alertItem['text'] ?? '');
                $alertType = is_string($alertItem) ? 'info' : strtolower($alertItem['type'] ?? 'info');
                
                if ($alertType === 'stop') $severityLevel = 3;
                elseif ($alertType === 'warning' && $severityLevel < 3) $severityLevel = 2;
                
                $formattedAlerts[] = ['text' => $alertText, 'type' => $alertType];
            }

            // 2. Set main container color scheme
            $cardBorderColor = ($severityLevel === 3) ? 'border-danger' : (($severityLevel === 2) ? 'border-warning' : 'border-info');
            $headerIcon = ($severityLevel === 3) ? 'fa-circle-xmark text-danger' : (($severityLevel === 2) ? 'fa-triangle-exclamation text-warning' : 'fa-circle-info text-info');
        ?>
        <div class="col-md-8">
            <wa-card class="h-100 shadow-sm border-start border-4 <?php echo $cardBorderColor; ?>">
                <div slot="header" class="fw-bold text-uppercase small">
                    <i class="fa-duotone <?php echo $headerIcon; ?> me-2"></i>Service Alerts
                </div>
                <div class="d-flex flex-column gap-2 small font-monospace">
                    <?php foreach($formattedAlerts as $alert): 
                        // 3. Set individual line-item icons
                        $iconClass = 'fa-circle-info text-secondary opacity-50'; // default info
                        if ($alert['type'] === 'warning') {
                            $iconClass = 'fa-triangle-exclamation text-warning';
                        } elseif ($alert['type'] === 'stop') {
                            $iconClass = 'fa-circle-xmark text-danger'; 
                        }
                    ?>
                        <div class="d-flex align-items-start text-body-secondary py-2 border-bottom border-secondary-subtle">
                            <i class="fa-solid <?php echo $iconClass; ?> mt-1 me-3"></i>
                            <span><?php echo htmlspecialchars($alert['text']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </wa-card>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($routeMeta['transfers'])): ?>
        <div class="col-md-4">
            <wa-card class="h-100 shadow-sm">
                <div slot="header" class="fw-bold text-uppercase small">
                    <i class="fa-duotone fa-shuffle me-2 text-primary"></i>Transfer Points
                </div>
                <div class="d-flex flex-column gap-2 small font-monospace">
                    <?php foreach($routeMeta['transfers'] as $location => $routes): ?>
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-2 border-bottom border-secondary-subtle">
                            <span class="text-body-emphasis mb-2 mb-sm-0 pe-2"><?php echo htmlspecialchars($location); ?></span>
                            <div class="d-flex flex-wrap gap-1 justify-content-sm-end">
                                <?php 
                                $routeArray = is_array($routes) ? $routes : [$routes];
                                foreach ($routeArray as $r): 
                                ?>
                                    <wa-badge variant="brand" appearance="filled-outlined" pill>
                                        <?php echo htmlspecialchars($r); ?>
                                    </wa-badge>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </wa-card>
        </div>
        <?php endif; ?>
    </div>

    <?php if (!empty($schedules)): ?>
    <wa-tab-group>
        <?php if (count($schedules) > 1): ?>
            <?php foreach ($schedules as $dayName => $dayData): 
                $tabId = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $dayName));
            ?>
                <wa-tab slot="nav" panel="<?php echo $tabId; ?>" class="fw-bold">
                    <?php echo htmlspecialchars($dayName); ?>
                </wa-tab>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php foreach ($schedules as $dayName => $dayData): 
            $paneId = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $dayName));
        ?>
            <wa-tab-panel name="<?php echo $paneId; ?>">
                <div class="row g-5 pt-3">
                    
                    <?php if (!empty($dayData['inbound'])): ?>
                    <div class="col-lg-6">
                        <wa-card class="shadow-sm">
                            <div slot="header" class="d-flex justify-content-between align-items-center w-100">
                                <h3 class="h5 fw-bold mb-0 text-uppercase letter-spacing-1">
                                    <i class="fa-solid fa-arrow-down-to-line me-2 text-success"></i>Inbound
                                </h3>
                                <span class="small font-monospace text-body-secondary">To <?php echo htmlspecialchars(end($dayData['inbound']['stops'])); ?></span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center font-monospace small mb-0">
                                    <thead class="bg-body-secondary border-bottom border-secondary-subtle">
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
                        </wa-card>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($dayData['outbound'])): ?>
                    <div class="col-lg-6">
                        <wa-card class="shadow-sm">
                            <div slot="header" class="d-flex justify-content-between align-items-center w-100">
                                <h3 class="h5 fw-bold mb-0 text-uppercase letter-spacing-1">
                                    <i class="fa-solid fa-arrow-up-from-line me-2 text-info"></i>Outbound
                                </h3>
                                <span class="small font-monospace text-body-secondary">To <?php echo htmlspecialchars(end($dayData['outbound']['stops'])); ?></span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center font-monospace small mb-0">
                                    <thead class="bg-body-secondary border-bottom border-secondary-subtle">
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
                        </wa-card>
                    </div>
                    <?php endif; ?>

                </div>
            </wa-tab-panel>
        <?php endforeach; ?>
    </wa-tab-group>
    <?php endif; ?>
</div>