<?php
/**
 * Stardust Engine - Lore/Story Template: Archives Overview
 * 
 * ARCHITECTURAL OVERVIEW:
 * This template serves as the main directory index for all Stardust Engine lore,
 * presenting historical events, narrative arcs, and contextual "Archives."
 * 
 * LAYOUT STRUCTURE:
 * - Built on Bootstrap 5 grid layout.
 * - Header Row: Introduction and title.
 * - Featured Entry (Ad Astra): A full-width (col-lg-12) custom card layout displaying
 *   the flagship lore entry. It uses Web Awesome (<wa-card>) components integrated
 *   with Bootstrap classes.
 * - Archive Grid: A responsive grid (col-12 col-md-6 col-lg-4) containing uniform
 *   <wa-card> elements for the remaining lore entries (Crash of '90, Friction, etc.).
 * - Force Height CSS: Includes an inline <style> block at the bottom to ensure
 *   Web Awesome cards stretch properly within the Bootstrap flex grid.
 * 
 * DEPENDENCIES:
 * - Uses Web Awesome components (<wa-card>, <wa-badge>, <wa-button>).
 * - Depends on $cdnBaseUrl for image assets.
 * - Uses ROOT_PATH button.php components for some links, while others use <wa-button>.
 * 
 * MAINTENANCE NOTES:
 * - When adding new lore entries, duplicate the HTML structure of an existing grid item
 *   to ensure uniform height and styling.
 * - The inline CSS at the bottom overriding `wa-card::part(base)` is critical for the
 *   masonry/grid layout to maintain equal heights; do not remove it.
 */

// Page data
$pageTitle = "The Lore - The Stardust Engine";
?>

<!-- BEGIN: Main Archives Container -->
<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            The Archives
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The Stardust Engine is more than a band; it's a survival story.
            Explore the history, the scandal, and the origins of the "Ironheads."
        </p>
    </div>

    <!-- BEGIN: Featured Hero Section (Ad Astra) -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <wa-card class="bg-dark border-info shadow-lg position-relative group-hover-scale p-0 w-100 wa-theme-dark" data-bs-theme="dark" style="--wa-panel-bg: #0d1117; --body-padding: 0;">
                <div class="row g-0">
                    <div class="col-lg-7 position-relative">
                        <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/story/ad-astra/band-ready.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             alt="A wide-angle shot captures Cassidy O'Connell singing into a microphone on stage, wearing a red t-shirt and jeans. To her right, her older brother Ryan O'Connell plays an electric guitar, seated in a wheelchair. In the background, their twin cousins, Evan (on bass guitar) and Tyler (on drums), perform. They are on a stage inside a spaceship, with a massive window behind them displaying a vibrant nebula in space. A banner with a rocket logo hangs on the right."
                             style="min-height: 350px;">
                        <!-- Gradient Overlay for text readability on mobile/desktop overlap -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" 
                             style="background: linear-gradient(90deg, transparent 50%, #0d1117 100%); opacity: 0.8;"></div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center" style="background-color: #0d1117;">
                        <div class="p-4 p-lg-5 position-relative z-1">
                            <wa-badge variant="brand" appearance="accent" class="mb-3 shadow-glow">
                                <i class="fa-duotone fa-star me-2"></i>Band Favorite
                            </wa-badge>
                            <h2 class="display-5 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif;">
                                Ad Astra
                            </h2>
                            <h3 class="h5 text-info font-monospace text-uppercase mb-4">The Maiden Voyage</h3>
                            <p class="text-secondary mb-4">
                                The definitive account of the star-cruiser <em>Aethelgard</em>. 
                                Read the in-universe narrative of the "Concert at the Edge of the World," presented as an excerpt from the band's official history book.
                            </p>
                            <wa-button variant="brand" appearance="outlined" size="large" pill href="/engine-room/artists/stardust-engine/story/ad-astra" class="px-4 shadow-glow">
                                <i slot="start" class="fa-duotone fa-rocket-launch"></i>Open Mission Log
                            </wa-button>
                        </div>
                    </div>
                </div>
            </wa-card>
        </div>
    </div>
    <!-- END: Featured Hero Section (Ad Astra) -->

    <!-- BEGIN: Standard Archive Grid -->
    <div class="row g-4">
        
        <!-- Grid Item: The Crash of '90 -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-danger shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/story/crash-of-1990.jpg" class="img-fluid border-bottom" alt="Ryan in a wheelchair in a hospital room with Holly and Cassidy by his side"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-danger">The Crash of '90</h3>
                    <p class="text-body-secondary small">
                        December 14, 1990. The night on I-81 that changed everything. Read the accident report and learn how the "Family Unit" adapted to Ryan's injury to keep the engine running.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="danger" appearance="outlined" href="/engine-room/artists/stardust-engine/story/crash-of-90" class="w-100">
                            <i slot="start" class="fa-duotone fa-file-medical-alt"></i>View Archive
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The Friction Catastrophe -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-primary shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                
                <div class="position-relative">
                    
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                         style="z-index: 2; background: rgba(0,0,0,0.5); pointer-events: none;">
                        <div class="bg-danger text-dark fw-bold h2 text-uppercase px-3 py-1" 
                             style="transform: rotate(-15deg); border: 3px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 10px #000;">
                            Evidence
                        </div>
                    </div>

                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/1992-friction/album-art.jpg" 
                         class="img-fluid border-bottom border-primary" 
                         alt="Abstract art representing the Friction scandal"
                         style="filter: grayscale(100%) brightness(0.8);">
                </div>

                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-primary">The Friction Catastrophe</h3>
                    <p class="text-body-secondary small">
                        The defining moment in the band's history. How a "fatal assumption" by a record executive and a disastrous photo shoot in 1992 led to the band's explosive departure from Apex Records.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/stardust-engine/story/friction" class="w-100">
                            <i slot="start" class="fa-duotone fa-book-open-cover"></i>Read The Full Story
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The Refusal -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-warning shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/images/omni-global/150-million-refusal.jpg" class="img-fluid border-bottom" alt="Cassidy O'Connell looking fierce in a corporate boardroom rejecting a contract offer"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-warning">The $150M Refusal</h3>
                    <p class="text-body-secondary small">
                        The day they said no. Discover how Cassidy O'Connell's meltdown in a corporate boardroom saved <em>Ad Astra</em> from being butchered by an algorithm.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="warning" appearance="outlined" href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="w-100">
                            <i slot="start" class="fa-duotone fa-shield-halved"></i>Read The Minutes
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The Noise Floor -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-info shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/1987-the-warehouse-tapes/album-art.jpg" class="img-fluid border-bottom" alt="The Noise Floor — Sensory Sanctuary & Accommodations"
                     style="filter: brightness(0.85);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-info">The Noise Floor (1985&ndash;1992)</h3>
                    <p class="text-body-secondary small">
                        How the family engineered sensory sanctuary on tour for Cassidy and Ryan—and how Apex Records systematically dismantled their accommodations.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/stardust-engine/story/the-noise-floor" class="w-100">
                            <i slot="start" class="fa-duotone fa-headphones"></i>Read Case File
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The $13.99 War -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-success shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/1995-hard-reset/album-art.jpg" class="img-fluid border-bottom" alt="The $13.99 War — Engine Room Records Direct Distribution"
                     style="filter: brightness(0.85);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-success">The $13.99 War (1992&ndash;1994)</h3>
                    <p class="text-body-secondary small">
                        When major-label distributors blacklisted Engine Room Records after the <em>Friction</em> walkout, Holly O'Connell bypassed the cartel and undercut the entire industry at $13.99.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="success" appearance="outlined" href="/engine-room/artists/stardust-engine/story/the-13-99-war" class="w-100">
                            <i slot="start" class="fa-duotone fa-compact-disc"></i>Read Economic File
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The London Discovery & Paternoster Incident -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-warning shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/fractured-prisms/1983-carnaby-street/album-art.jpg" class="img-fluid border-bottom" alt="London Chronicles — Fractured Prisms & The Paternoster Incident"
                     style="filter: brightness(0.85);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-warning">The London Chronicles (1989 &amp; 1994)</h3>
                    <p class="text-body-secondary small">
                        From Ryan and Cassidy discovering Claire and Rhys Manning in Soho (1989) to Holly O'Connell seizing Apex UK's master vault in Paternoster Square (1994).
                    </p>
                    <div class="mt-auto pt-3 d-flex flex-column gap-2">
                        <wa-button variant="warning" appearance="outlined" href="/engine-room/artists/stardust-engine/story/the-london-discovery" class="w-100">
                            <i slot="start" class="fa-duotone fa-compass"></i>1989: The London Discovery
                        </wa-button>
                        <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/story/the-paternoster-incident" class="w-100">
                            <i slot="start" class="fa-duotone fa-gavel"></i>1994: Paternoster Incident
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: Our Own Frequency -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-primary shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2008-our-own-frequency/album-art.jpg" class="img-fluid border-bottom" alt="Ryan and Cassidy in the studio"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-primary">The Burnout Hiatus</h3>
                    <p class="text-body-secondary small">
                        Pushed to the edge by industry pressure and exhaustion, Ryan and Cassidy retreated to the studio to record an intimate acoustic confession.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/stardust-engine/story/our-own-frequency" class="w-100">
                            <i slot="start" class="fa-duotone fa-guitar"></i>Read the Story
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: CPI & The Forgers -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-secondary shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible/album-art.jpg" class="img-fluid border-bottom" alt="The Crucible Stadium at night">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-light">CPI &amp; The Forgers</h3>
                    <p class="text-body-secondary small">
                        Before they were rock stars, they were "Ironheads." Discover the band's origins at Commonwealth Polytechnic Institute and the story behind their sacred anthem, "Ignition."
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="neutral" appearance="outlined" href="/engine-room/artists/stardust-engine/story/crucible" class="w-100">
                            <i slot="start" class="fa-duotone fa-school"></i>Enter The Crucible
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: KNOX -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-info shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg" class="img-fluid border-bottom" alt="The cover of KNOX"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-info">KNOX</h3>
                    <p class="text-body-secondary small">
                        The Stardust Engine writes a narrative story, and composes the music for it.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/raggiesoft-books/knox" class="w-100">
                            <i slot="start" class="fa-duotone fa-book-open"></i>Read The Story
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The Iron Horse & Fleet Archive -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-info shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/fleet/2002-sainte-claire-45h3-iron-horse.jpg" class="img-fluid border-bottom" alt="2002 Sainte-Claire 45H3 The Iron Horse luxury accessible tour bus"
                     style="filter: brightness(0.85);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-info">The Iron Horse &amp; Fleet Archive</h3>
                    <p class="text-body-secondary small">
                        Explore the 45-foot 2002 <strong>Sainte-Claire 45H3</strong> interstate cruiser and the 30-foot 2004 <strong>Prairie Coachworks RLFD30</strong> campus shuttle—and why three members of the family hold Class A CDLs.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/corporate/strategic-assets/the-iron-horse" class="w-100">
                            <i slot="start" class="fa-duotone fa-bus"></i>Inspect Fleet Archive
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The 2015 Delaware Migration -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-success shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2004-progress-street/album-art.jpg" class="img-fluid border-bottom" alt="Progress Street and the 2004-2015 Corporate Diversification"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-success">The 2015 Delaware Migration</h3>
                    <p class="text-body-secondary small">
                        After signing off on <em>Progress Street</em> in 2004, Holly O'Connell spent eleven years diversifying <strong>Engine Room Records, LLC</strong> into a $2.4B web of anonymous Delaware holdings.
                    </p>
                    <div class="mt-auto pt-3 d-flex flex-column gap-2">
                        <wa-button variant="success" appearance="outlined" href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="w-100">
                            <i slot="start" class="fa-duotone fa-file-signature"></i>Read The Migration
                        </wa-button>
                        <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/corporate/structure" class="w-100">
                            <i slot="start" class="fa-duotone fa-sitemap"></i>View 2015 Trust Map
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: Before the Distance: The Story of John & Erin -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-warning shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/playlists/john-and-erin/cover.jpg" class="img-fluid border-bottom" alt="Before the Distance: The Story of John & Erin — Ryan and Cassidy O'Connell in motorized power wheelchairs holding hands at the front boarding door ramp of a Blue Ridge Transit bus">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-warning">The Story of John &amp; Erin</h3>
                    <p class="text-body-secondary small">
                        Read the official five-song twin narrative published by The Stardust Engine across <em>Progress Street</em> and <em>Lost Sounds</em>—from a fatal speed-dating track skip at Kincaid Hall to a rainy rescue along Commonwealth Mall.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="warning" appearance="outlined" href="/engine-room/artists/stardust-engine/story/john-and-erin" class="w-100">
                            <i slot="start" class="fa-duotone fa-book-sparkles"></i>Read Liner Booklet
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: The Cosmic Tidal Lock Sound™ -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-info shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2003-sanctuary-zero-g/album-art.jpg" class="img-fluid border-bottom" alt="The Cosmic Tidal Lock Sound™ — Zero-Gravity Synth-Pop Architecture"
                     style="filter: brightness(0.85);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-info">The Cosmic Tidal Lock Sound&trade;</h3>
                    <p class="text-body-secondary small">
                        Discover Cassidy O'Connell's zero-gravity phase-array synthesizer architecture, our open-culture trademark guide (<strong>Cosmic Tidal Lock Sound&trade;</strong> vs. the public genre <strong>80s Cosmic Pop</strong>), and the Suno v6 engineering protocol.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="brand" appearance="outlined" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="w-100">
                            <i slot="start" class="fa-duotone fa-satellite"></i>Read Sonic Explainer
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Grid Item: Complete Timeline -->
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
            <wa-card class="h-100 border-secondary shadow-sm hover-card bg-transparent w-100 p-0" style="--wa-panel-bg: transparent; --body-padding: 0;">
                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/story/timeline.jpg" class="img-fluid border-bottom" alt="A stylized timeline graphic showing key events in the band's history"
                     style="filter: brightness(0.8);">
                <div class="d-flex flex-column h-100 p-3">
                    <h3 class="h5 fw-bold text-secondary">Complete Timeline</h3>
                    <p class="text-body-secondary small">
                        From the dorm rooms of 1985 to the reunion tour of 2015. A chronological look at every album, tour, and major event in the band's 30-year history.
                    </p>
                    <div class="mt-auto pt-3">
                        <wa-button variant="neutral" appearance="outlined" href="/engine-room/artists/stardust-engine/band/history" class="w-100">
                            <i slot="start" class="fa-duotone fa-clock-rotate-left"></i>View Timeline
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

    </div>
    <!-- END: Standard Archive Grid -->
</div>
<!-- END: Main Archives Container -->

<!-- BEGIN: Web Awesome Layout Fixes -->
<style>
    /* Force Web Awesome cards to stretch their internal body container */
    wa-card.hover-card::part(base) {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    wa-card.hover-card::part(body) {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }
</style>
<!-- END: Web Awesome Layout Fixes -->
