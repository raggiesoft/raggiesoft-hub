<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Narrative Stepper Navigation
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

<!-- [LAYOUT] Main Stepper Wrapper: Horizontal 3-column navigation grid -->
<div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
    
    <div class="col-4">
        <?php if ($prev): ?>
            <wa-button href="<?php echo htmlspecialchars($prev['url']); ?>" appearance="outlined" variant="neutral" pill>
                <i slot="start" class="fa-solid fa-arrow-left"></i>
                <span class="d-none d-md-inline"><?php echo htmlspecialchars($prev['label']); ?></span>
                <span class="d-md-none">Back</span>
            </wa-button>
        <?php else: ?>
            <wa-button appearance="outlined" variant="neutral" pill disabled class="opacity-0">
                <i slot="start" class="fa-solid fa-arrow-left"></i>Placeholder
            </wa-button>
        <?php endif; ?>
    </div>

    <!-- [UI COMPONENT] Overview Hub Button: Central anchor back to the main directory -->
    <div class="col-4 text-center">
        <wa-button href="<?php echo htmlspecialchars($overview['url']); ?>" appearance="outlined" variant="brand" pill>
            <i slot="start" class="fa-duotone fa-list-tree"></i>
            <span class="d-none d-md-inline"><?php echo htmlspecialchars($overview['label']); ?></span>
            <span class="d-md-none">Hub</span>
        </wa-button>
    </div>

    <div class="col-4 text-end">
        <?php if ($next): ?>
            <wa-button href="<?php echo htmlspecialchars($next['url']); ?>" appearance="accent" variant="brand" pill class="shadow-sm">
                <span class="d-none d-md-inline"><?php echo htmlspecialchars($next['label']); ?></span>
                <span class="d-md-none">Next</span>
                <i slot="end" class="fa-solid fa-arrow-right"></i>
            </wa-button>
        <?php else: ?>
            <wa-button href="<?php echo htmlspecialchars($overview['url']); ?>" appearance="outlined" variant="neutral" pill disabled>
                End <i slot="end" class="fa-solid fa-stop"></i>
            </wa-button>
        <?php endif; ?>
    </div>

</div>