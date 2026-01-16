<?php
// pages/about/michael-ragsdale/education.php
// Academic Timeline & Certifications
// Data Source: https://assets.raggiesoft.com/portfolio/json/education.json

require_once ROOT_PATH . '/includes/utils/json-reader.php';
$educationData = fetch_asset_json('portfolio/json/education.json');
?>

<div class="container py-5" style="max-width: 50rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Education</h1>
            <p class="text-secondary mb-0">Academic history and certifications.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <?php if (empty($educationData)): ?>
        <div class="alert alert-warning">
            <i class="fa-solid fa-triangle-exclamation me-2"></i>
            Unable to load education data from the archives.
        </div>
    <?php else: ?>
        
        <div class="timeline-container">
            <?php foreach ($educationData as $edu): ?>
                <div class="card mb-4 border-0 shadow-sm bg-body-tertiary">
                    <div class="card-body p-4">
                        
                        <div class="d-md-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h2 class="h4 fw-bold mb-0 text-primary">
                                    <i class="fa-solid fa-building-columns me-2 opacity-50"></i>
                                    <?php echo htmlspecialchars($edu['institution']); ?>
                                </h2>
                                <div class="text-secondary small">
                                    <i class="fa-solid fa-map-pin me-1"></i> <?php echo htmlspecialchars($edu['location']); ?>
                                </div>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <?php if ($edu['period'] === 'In Progress'): ?>
                                    <span class="badge bg-success-subtle text-success-emphasis border border-success-subtle">
                                        Active Student
                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-secondary-subtle text-secondary-emphasis">
                                        <?php echo htmlspecialchars($edu['period']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php foreach ($edu['roles'] as $role): ?>
                            <div class="ps-md-4 border-start border-3 border-primary-subtle ms-1">
                                <h3 class="h5 fw-bold text-body-emphasis mb-1">
                                    <?php echo htmlspecialchars($role['title']); ?>
                                </h3>
                                <div class="text-muted font-monospace small mb-3">
                                    <?php echo htmlspecialchars($role['period']); ?>
                                </div>

                                <?php if (!empty($role['description'])): ?>
                                    <ul class="mb-0 text-secondary">
                                        <?php foreach ($role['description'] as $point): ?>
                                            <li class="mb-1"><?php echo htmlspecialchars($point); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
    
    <div class="text-center mt-5">
        <p class="text-muted small">
            <i class="fa-solid fa-graduation-cap me-1"></i>
            Proof of enrollment and official transcripts available upon request.
        </p>
    </div>

</div>