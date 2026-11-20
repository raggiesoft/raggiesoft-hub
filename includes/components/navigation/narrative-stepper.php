<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/navigation/narrative-stepper.php
 * Role: Reusable 3-Column Chapter Pagination Bar ("Back / Hub / Next")
 * Domain: https://raggiesoft.com (Used by Pathfinder West Strategy Guide chapters)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Multi-chapter guides (`pages/raggiesoft-games/pathfinder-west/...`) define a
 * `$nav` associative array right before including this component:
 *   `$nav = ['prev' => ['url' => '...', 'label' => '...'], 'overview' => [...], 'next' => [...]];`
 * This component renders a balanced 3-column (`col-4` + `col-4` + `col-4`) row:
 *   - Left (`$prev`): Link to previous chapter, or an invisible disabled placeholder
 *     when on the first page so the center "Hub" button stays dead-center!
 *   - Center (`$overview`): Link back to the Table of Contents / Hub.
 *   - Right (`$next`): Link to next chapter, or a disabled "End" button on the last chapter.
 *
 * RESPONSIVE LABEL TRICK:
 * Full chapter titles (`d-none d-md-inline`) appear on desktop (`>= 768px`), while
 * compact labels (`Back`, `Hub`, `Next` via `d-md-none`) appear on mobile phones
 * so the 3 buttons never collide or overflow narrow screens!
 *
 * INPUTS:
 * - `$nav` (array): `prev` (`['url', 'label']|null`), `overview` (`['url', 'label']`), `next` (`['url', 'label']|null`).
 *
 * OUTPUT PRODUCED:
 * - XSS-escaped 3-column `.row` pagination bar.
 * ============================================================================
 *
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

// Defaults (`??` safely handles `null` or omitted keys in `$nav`)
$prev = $nav['prev'] ?? null;
$next = $nav['next'] ?? null;
$overview = $nav['overview'] ?? ['url' => '/engine-room/history', 'label' => 'History Hub'];
?>

<!-- [LAYOUT] Main Stepper Wrapper: Horizontal 3-column navigation grid -->
<div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
    
    <?php /* Left Column (`col-4`): Previous link, or `opacity-0` disabled button to preserve 3-column symmetry */ ?>
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

    <?php /* Right Column (`col-4 text-end`): Next chapter CTA, or disabled "End" indicator at sequence end */ ?>
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
