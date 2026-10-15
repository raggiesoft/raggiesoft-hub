<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: CPI, The Crucible, & Blue Ridge Transit Lore Sidebar
 * ============================================================================
 * File: includes/components/sidebars/engine-room/artists/stardust-engine/story/sidebar-crucible.php
 *
 * ROLE:
 * - Provides dedicated multi-chapter navigation for the expanded Commonwealth
 *   Polytechnic Institute (CPI), The Crucible, and Blue Ridge Transit (BRT)
 *   interconnected universe archive.
 * - Highlights the currently active chapter based on `parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)`.
 *
 * CHAPTER STRUCTURE:
 *   1. `/engine-room/artists/stardust-engine/story/cpi`
 *      -> CPI & The Forgers (Campus, Dual Enrollment, Class of '89, & Interconnected Lore)
 *   2. `/engine-room/artists/stardust-engine/story/crucible`
 *      -> The Crucible & The 1995 Ironhead Covenant ($100M Vance Endowment & The Anvil)
 *   3. `/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline`
 *      -> Stadium Anthems & The 1986 Redline ("Ignition", The 1989 Stomp, & Oct 8, 2004 "Saturday Night Lights")
 *   4. `/engine-room/artists/stardust-engine/story/crucible/falling-branch-transit`
 *      -> Falling Branch & The $150 Parking Paradox (VDOT 8-Level / 6,000-Space Garage & BRT Priority)
 *   5. `/engine-room/artists/stardust-engine/story/crucible/rivalries`
 *      -> Historic Rivalries (VPU, MSU Coal & Iron War, & 2014-2015 VDU Homecoming Shutout War)
 * ============================================================================
 */

$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/');

$crucibleChapters = [
    '/engine-room/artists/stardust-engine/story/cpi' => [
        'icon' => 'fa-duotone fa-school',
        'label' => '1. CPI & The Forgers'
    ],
    '/engine-room/artists/stardust-engine/story/crucible' => [
        'icon' => 'fa-duotone fa-file-contract',
        'label' => '2. The Ironhead Covenant'
    ],
    '/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline' => [
        'icon' => 'fa-duotone fa-bullhorn',
        'label' => '3. Anthems & 1986 Redline'
    ],
    '/engine-room/artists/stardust-engine/story/crucible/falling-branch-transit' => [
        'icon' => 'fa-duotone fa-bus',
        'label' => '4. Falling Branch & Transit'
    ],
    '/engine-room/artists/stardust-engine/story/crucible/rivalries' => [
        'icon' => 'fa-duotone fa-helmet-battle',
        'label' => '5. Rivalries & VDU War'
    ],
];
?>

<!-- [LAYOUT] Primary CPI & Crucible Archive Navigation -->
<h5 class="pt-3 pb-2 mb-3 border-bottom text-uppercase letter-spacing-1" style="color: var(--cpi-orange, #CF4420);">
    <i slot="start" class="fa-duotone fa-stadium me-1"></i> CPI &amp; Crucible Archive
</h5>

<div class="d-flex flex-column gap-1">
    <?php foreach ($crucibleChapters as $url => $item):
        // Exact path match so `/story/crucible` does not falsely highlight on subpages
        $isActive = ($currentPath === $url);
    ?>
        <a class="nav-link py-2 px-2 rounded <?php echo $isActive ? 'active fw-bold text-warning bg-body-tertiary border-start border-3 border-warning' : 'link-secondary'; ?>"
           href="<?php echo htmlspecialchars($url); ?>">
            <i class="<?php echo htmlspecialchars($item['icon']); ?> me-2"></i><?php echo htmlspecialchars($item['label']); ?>
        </a>
    <?php endforeach; ?>
</div>

<!-- [UI COMPONENT] Related Blacksburg & Discography Links -->
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-4 mb-2 text-uppercase text-body-secondary" style="font-size: 0.75rem; letter-spacing: 1px;">
    <span>Blacksburg &amp; Soundtracks</span>
</h6>

<div class="d-flex flex-column gap-1">
    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-compact-disc me-2"></i> 2004: Progress Street
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/2003-mile-marker-98" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-road me-2"></i> 2003: Mile Marker 98
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/artists/stardust-engine/discography/1997-forger-nation-war-chest" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-box-archive me-2"></i> 1997: Forger War Chest
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/corporate/stardust-blacksburg" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-building-columns me-2"></i> The Ironwood Collective
    </wa-button>

    <wa-button appearance="plain" href="/engine-room/corporate/stardust-blacksburg/location" class="text-body w-100 text-start justify-content-start" style="text-align: left;">
        <i slot="start" class="fa-duotone fa-route me-2"></i> BRT Route 1 ("The Spine")
    </wa-button>
</div>

<!-- [UI COMPONENT] Environmental Storytelling: VDOT / BRT Game-Day Advisory -->
<div class="mt-4 p-3 bg-body-tertiary border border-warning rounded">
    <h6 class="text-warning text-uppercase small fw-bold mb-1 font-monospace">
        <i class="fa-solid fa-triangle-exclamation me-1"></i> VDOT / BRT Advisory
    </h6>
    <p class="small text-body-secondary mb-0" style="font-size: 0.8rem;">
        <strong>Exit 118 (Christiansburg Transit Center):</strong> 6,000-space garage &amp; Crucible Shuttle are <strong>FREE</strong> on game days. Southgate Drive is strictly restricted to <strong>Blue Ridge Transit</strong> articulated coaches after <code>0:00</code>.
    </p>
</div>

<div class="mt-auto pt-4 border-top">
    <a href="/engine-room/artists/stardust-engine/story" class="nav-link link-secondary">
        <i class="fa-duotone fa-arrow-left me-2"></i> Back to Full Lore Hub
    </a>
</div>

