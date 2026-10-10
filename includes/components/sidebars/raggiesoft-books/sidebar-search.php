<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the "Deep Search / Navigation" sidebar specifically tailored for the RaggieSoft Books index and search pages.
 * 
 * DESIGN INTENT:
 * - Implements a strict dark-mode-only aesthetic using `text-light` and `text-white-50` regardless of the global light/dark theme toggle.
 * - Groups major literary silos (Contemporary Library, KNOX, Aethel Saga) into a quick-access vertical menu.
 * 
 * MAINTENANCE NOTES:
 * - The `sidebar-wrapper` class implies an expected context. Ensure this component is included within a layout that provides appropriate padding/backgrounds (likely a dark offcanvas or side column).
 */
// sidebar-search.php
?>
<div class="sidebar-wrapper">
    <div class="mb-4 pb-3 border-bottom px-2 border-secondary">
        <h5 class="fw-bold mb-1 font-heading text-light">Deep Search</h5>
        <div class="small text-white-50 text-uppercase tracking-wider">Navigation</div>
    </div>
    
    <!-- LEGACY LAYOUT: Vertical flex container utilizing gap for spacing instead of margins on individual items. -->
    <div class="d-flex flex-column gap-1">
        <wa-button appearance="plain" href="/raggiesoft-books" class="text-light w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-house"></i> Archive Home
        </wa-button>
        <wa-button appearance="plain" href="/raggiesoft-books/books" class="text-light w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-books"></i> Contemporary Library
        </wa-button>
        <wa-button appearance="plain" href="/raggiesoft-books/knox" class="text-light w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-file-shield"></i> Project: KNOX
        </wa-button>
        <wa-button appearance="plain" href="/raggiesoft-books/aethel-saga" class="text-light w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-sword"></i> Aethel Saga
        </wa-button>
        <wa-button appearance="plain" href="/raggiesoft-books/image-library" class="text-light w-100 text-start justify-content-start" style="text-align: left;">
            <i slot="start" class="fa-duotone fa-images"></i> Image Library
        </wa-button>
    </div>
</div>

