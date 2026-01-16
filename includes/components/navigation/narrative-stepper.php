<?php
/**
 * COMPONENT: Narrative Stepper (History Navigation)
 * PURPOSE: Standardizes the "Back / Up / Next" footer navigation for story chapters.
 * * USAGE:
 * $nav = [
 * 'prev' => ['url' => '/path', 'label' => 'Previous'],
 * 'overview' => ['url' => '/path/root', 'label' => 'Overview'],
 * 'next' => ['url' => '/path/next', 'label' => 'Next Chapter']
 * ];
 * include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
 */

// Defaults
$prev = $nav['prev'] ?? null;
$next = $nav['next'] ?? null;
$overview = $nav['overview'] ?? ['url' => '/engine-room/history', 'label' => 'History Hub'];
?>

<div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
    
    <div class="col-4">
        <?php if ($prev): ?>
            <a href="<?php echo $prev['url']; ?>" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>
                <span class="d-none d-md-inline"><?php echo $prev['label']; ?></span>
                <span class="d-md-none">Back</span>
            </a>
        <?php else: ?>
            <span class="btn btn-outline-secondary rounded-pill disabled opacity-0">
                <i class="fa-solid fa-arrow-left me-2"></i>Placeholder
            </span>
        <?php endif; ?>
    </div>

    <div class="col-4 text-center">
        <a href="<?php echo $overview['url']; ?>" class="btn btn-outline-primary rounded-pill">
            <i class="fa-duotone fa-list-tree me-2"></i>
            <span class="d-none d-md-inline"><?php echo $overview['label']; ?></span>
            <span class="d-md-none">Hub</span>
        </a>
    </div>

    <div class="col-4 text-end">
        <?php if ($next): ?>
            <a href="<?php echo $next['url']; ?>" class="btn btn-primary rounded-pill shadow-sm">
                <span class="d-none d-md-inline"><?php echo $next['label']; ?></span>
                <span class="d-md-none">Next</span>
                <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        <?php else: ?>
            <a href="<?php echo $overview['url']; ?>" class="btn btn-outline-light rounded-pill disabled" aria-disabled="true">
                End <i class="fa-solid fa-stop ms-2"></i>
            </a>
        <?php endif; ?>
    </div>

</div>