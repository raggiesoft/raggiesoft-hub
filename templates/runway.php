<?php
/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Basic Runway Skeleton Template
 * Purpose: A starting snippet for creating new horizontal scrolling runways across the application.
 * 
 * Strategy & Implementation:
 * - Provides the structural HTML classes (`horizontal-scroll-wrapper`, `d-flex justify-content-between`) 
 *   necessary to hook into the global CSS layout for swipeable card rows.
 * - Serves purely as a copy-paste boilerplate.
 * 
 * Maintenance Recommendations:
 * - Do not include this file directly via PHP. It is meant to be copied and populated with `scroll-card` elements 
 *   and `card.php` includes.
 */
?>
<!-- Runway Wrapper: Maintain bottom margin to separate stacked runways -->
<div class="mb-5">
    <div class="d-flex justify-content-between align-items-end mb-3 px-4 px-xxl-5">
        <h3 class="h5 fw-bold text-uppercase text-secondary mb-0">
            [Insert Category Title]
        </h3>
        <a href="[Insert Category Hub URL]" class="text-decoration-none text-muted small text-uppercase font-monospace fw-bold hover-primary">
            View All <i class="fa-solid fa-arrow-right ms-1"></i>
        </a>
    </div>
    
    <div class="horizontal-scroll-wrapper">
        </div>
</div>