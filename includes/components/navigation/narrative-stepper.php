<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Narrative Stepper Navigation (DaisyUI 5 + Phosphor)
 * ============================================================================
 * ROLE: Standardizes horizontal "Back / Hub / Next" pagination across multi-page
 *       narrative sequences (e.g., historical timelines or story chapters).
 * 
 * INTEGRATION: Relies on an expected `$nav` array payload configured in the 
 *              parent template before inclusion. Gracefully falls back to disabled
 *              states or placeholder UI elements if `prev` or `next` are missing.
 * 
 * MAINTENANCE: The grid is composed of a rigid 3-column (`col-4`) structure. 
 *              The labels collapse intelligently on mobile (`d-md-none` vs `d-none d-md-inline`)
 *              to prevent overflowing the viewport. Keep these breakpoint constraints intact.
 * ============================================================================
 */

// Defaults
$prev = $nav['prev'] ?? null;
$next = $nav['next'] ?? null;
$overview = $nav['overview'] ?? ['url' => '/engine-room/history', 'label' => 'History Hub'];
?>

<!-- [LAYOUT] Main Stepper Wrapper: Horizontal 3-column navigation grid -->
<div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
    
    <div class="col-4">
        <?php if ($prev): ?>
            <a href="<?php echo htmlspecialchars($prev['url']); ?>" class="btn btn-neutral btn-outline rounded-full">
                <i class="ph-duotone ph-arrow-left" aria-hidden="true"></i>
                <span class="d-none d-md-inline"><?php echo htmlspecialchars($prev['label']); ?></span>
                <span class="d-md-none">Back</span>
            </a>
        <?php else: ?>
            <button class="btn btn-neutral btn-outline rounded-full opacity-0" type="button" disabled>
                <i class="ph-duotone ph-arrow-left" aria-hidden="true"></i>Placeholder
            </button>
        <?php endif; ?>
    </div>

    <!-- [UI COMPONENT] Overview Hub Button: Central anchor back to the main directory -->
    <div class="col-4 text-center">
        <a href="<?php echo htmlspecialchars($overview['url']); ?>" class="btn btn-primary btn-outline rounded-full">
            <i class="ph-duotone ph-tree-structure" aria-hidden="true"></i>
            <span class="d-none d-md-inline"><?php echo htmlspecialchars($overview['label']); ?></span>
            <span class="d-md-none">Hub</span>
        </a>
    </div>

    <div class="col-4 text-end">
        <?php if ($next): ?>
            <a href="<?php echo htmlspecialchars($next['url']); ?>" class="btn btn-primary rounded-full shadow-sm">
                <span class="d-none d-md-inline"><?php echo htmlspecialchars($next['label']); ?></span>
                <span class="d-md-none">Next</span>
                <i class="ph-duotone ph-arrow-right" aria-hidden="true"></i>
            </a>
        <?php else: ?>
            <button class="btn btn-neutral btn-outline rounded-full" type="button" disabled>
                End <i class="ph-duotone ph-stop" aria-hidden="true"></i>
            </button>
        <?php endif; ?>
    </div>

</div>
