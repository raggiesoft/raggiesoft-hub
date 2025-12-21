<?php
// pages/about/michael-ragsdale/resume.php
// The Detailed CV
// Accessed via: raggiesoft.com/about/michael-ragsdale/resume

require_once ROOT_PATH . '/includes/utils/json-reader.php';

// Fetch Data
$experience = fetch_asset_json('portfolio/json/employment.json');
$education  = fetch_asset_json('portfolio/json/education.json');

global $cdn_root;
$pathImgEdu  = $cdn_root . '/portfolio/images/education/';
$pathImgEmp  = $cdn_root . '/portfolio/images/employment/';

?>

<div class="container py-5" style="max-width: 50rem;">
    
    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-5">
        <div>
            <h1 class="display-5 fw-bold mb-0">Professional Experience</h1>
            <p class="text-secondary mb-0">The chronological history.</p>
        </div>
        <a href="/about/michael-ragsdale" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Hub
        </a>
    </div>

    <div class="vstack gap-5 mb-5">
        <?php foreach ($experience as $job): ?>
        <?php if (isset($job['is_public']) && $job['is_public']): ?>
            <div class="row">
                <div class="col-md-3 text-md-end">
                    <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill px-3 py-2 mb-2">
                        <?php echo $job['period']; ?>
                    </span>
                    <div class="small text-muted mt-1"><?php echo $job['location']; ?></div>
                    
                    <img src="<?php echo $pathImgEmp . $job['logo']; ?>" 
                         alt="Company Logo"
                         class="d-none d-md-block ms-auto mt-3 rounded shadow-sm"
                         width="60" height="60"
                         style="object-fit: contain; background: white; padding: 5px;"
                         onerror="this.style.display='none'">
                </div>
                
                <div class="col-md-9 border-start border-3 ps-4 position-relative" style="border-color: var(--bs-gray-300) !important;">
                    <div class="position-absolute top-0 start-0 translate-middle bg-white border border-secondary rounded-circle" 
                         style="width: 1rem; height: 1rem; margin-top: 0.25rem;"></div>

                    <?php foreach ($job['roles'] as $role): ?>
                        <h3 class="h5 fw-bold mb-1"><?php echo $role['title']; ?></h3>
                        <h4 class="h6 text-primary fw-bold mb-3"><?php echo $job['company']; ?></h4>
                        
                        <ul class="text-secondary mb-4">
                            <?php if (is_array($role['description'])):
                                foreach ($role['description'] as $bullet): ?>
                                    <li><?php echo $bullet; ?></li>
                                <?php endforeach; 
                            endif; ?>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <h2 class="h3 fw-bold border-bottom pb-2 mb-4">Education</h2>
    
    <div class="row g-4">
        <?php foreach ($education as $edu): ?>
        <div class="col-md-12">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-start">
                    <img src="<?php echo $pathImgEdu . $edu['logo']; ?>" 
                         alt="School Logo" 
                         width="64" height="64"
                         class="me-3 rounded flex-shrink-0"
                         style="object-fit: contain;"
                         onerror="this.src='https://placehold.co/64?text=EDU'">
                    <div>
                        <h4 class="h5 fw-bold mb-1"><?php echo $edu['institution']; ?></h4>
                        <div class="text-primary small fw-bold mb-2">
                            <?php echo $edu['period']; ?>
                        </div>
                        <?php foreach ($edu['roles'] as $degree): ?>
                            <h5 class="h6 fw-bold text-body-emphasis"><?php echo $degree['title']; ?></h5>
                            <div class="small text-secondary fst-italic mb-2"><?php echo $degree['period']; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>