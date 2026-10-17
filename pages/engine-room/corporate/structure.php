<?php
/**
 * Organizational Structure - The O'Connell Family Revocable Trust
 *
 * This file renders the "Iceberg" Model corporate hierarchy. It dynamically fetches 
 * organizational data from a JSON file and includes a component to render the org chart.
 *
 * Architecture Notes:
 * - Relies on `file_get_contents` to fetch `corporate-structure.json` from the CDN.
 * - Renders the UI using `org-chart.php` component.
 * - Contains custom CSS for the "waterline" and catalyst card elements.
 *
 * Maintainer Note: Changes to the organizational structure should be made in the JSON data file, 
 * not here. This file merely fetches and delegates rendering.
 */

// pages/engine-room/corporate/structure.php
// The Corporate Hierarchy (The "Iceberg" Model)
// Context: Visualizing how a $2.4B Trust hides behind a rock band.
// Theme: Corporate / Clean (No Starfield)

$pageTitle = "Organizational Structure - The O'Connell Family Revocable Trust";
?>

<style>
    /* WATERLINE (Page Specific) */
    .waterline {
        border-top: 2px dashed #0d6efd; /* Primary Blue for Trust */
        position: relative;
        margin: 50px 0;
        text-align: center;
    }
    .waterline span {
        background-color: var(--bs-body-bg); /* Matches theme bg */
        color: #0d6efd;
        padding: 0 15px;
        position: relative;
        top: -12px;
        font-family: 'Courier New', monospace;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
    }
    
    .catalyst-card {
        background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
        border-left: 5px solid #198754; /* Success Green for the Win */
    }
</style>

<div class="container py-5">

    <!-- PAGE HEADER -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <wa-badge variant="brand" appearance="filled-outlined" pill class="text-primary-emphasis px-3 py-2 mb-3 text-uppercase font-monospace">
                <i class="fa-duotone fa-calendar-check me-2"></i>Corporate Registry Snapshot: August 2015
            </wa-badge>
            <h6 class="text-uppercase text-body-secondary fw-bold letter-spacing-2 mb-2">Governance &amp; Oversight</h6>
            <h1 class="display-4 fw-bold text-primary mb-3" style="font-family: 'Playfair Display', serif;">
                The Architecture of Silence
            </h1>
            <p class="lead text-secondary">
                "We built a fortress so we could keep playing music."
            </p>
        </div>
    </div>

    <wa-card class="card border shadow-sm mb-5 w-100" style="--body-padding: 0; --header-padding: 0;">
        <div class="card-body overflow-auto bg-body-tertiary p-4">
            <?php
            // 1. DEFINE PATH TO JSON DATA (Prefer local monorepo asset file, fallback to CDN)
            $localJsonPath = dirname(ROOT_PATH) . '/raggiesoft-assets/engine-room-records/json/corporate-structure.json';
            $jsonUrl = $cdnBaseUrl . '/engine-room-records/json/corporate-structure.json';

            // 2. FETCH AND DECODE
            if (file_exists($localJsonPath)) {
                $jsonData = @file_get_contents($localJsonPath);
            } else {
                $jsonData = @file_get_contents($jsonUrl);
            }

            if ($jsonData === false) {
                 echo '<wa-callout variant="danger" appearance="accent" class="d-block"><i slot="icon" class="fa-solid fa-triangle-exclamation"></i><strong>System Error:</strong> Unable to retrieve Corporate Structure data from Archives.</wa-callout>';
            } else {
                $rootNode = json_decode($jsonData, true);
                if (json_last_error() !== JSON_ERROR_NONE || $rootNode === null) { 
                    echo '<wa-callout variant="warning" appearance="accent" class="d-block"><strong>Data Error:</strong> JSON Corruption Detected.</wa-callout>';
                } else {
                    // 3. RENDER THE CHART
                    include ROOT_PATH . '/includes/components/corporate/org-chart.php';
                }
            }
            ?>
        </div>
        <div class="card-footer bg-body-secondary text-center p-3">
            <small class="text-body-secondary fst-italic">
                <i class="fa-solid fa-lock me-2"></i>CONFIDENTIAL (AS OF AUGUST 2015 DELAWARE MIGRATION): Click any highlighted entity node above to inspect its dossier.
            </small>
        </div>
    </wa-card>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            
            <wa-card class="card catalyst-card mb-5 shadow-lg w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-3 mb-md-0">
                            <i class="fa-duotone fa-ticket fa-4x text-success"></i>
                        </div>
                        <div class="col-md-10">
                            <h4 class="text-white text-uppercase fw-bold mb-2">The 1996 Catalyst, The 1997 <em>Hard Reset</em> Blueprint &amp; The 2004 Pivot</h4>
                            <p class="text-white-50 mb-0">
                                The sophisticated structure above did not appear overnight—it is the result of an <strong>18-year institutional buildout (1997&ndash;2015)</strong>. Its capital originated in Daleville, VA with <strong>The "American Dream" Jackpot of 1996 ($2.04 Billion)</strong>, when Cassidy O'Connell handed the winning ticket to her younger sister Holly.
                            </p>
                            <p class="text-white-50 mt-3 mb-0">
                                During <strong>1997's <em>Hard Reset</em></strong> campaign (and the bruising retail distribution battle of the <em>"$13.99 War"</em>), CEO <a href="/engine-room/artists/stardust-engine/band/holly-oconnell" class="text-info fw-bold">Holly O'Connell</a> realized a critical legal truth: the band's liquid capital, touring liabilities, and master recordings needed to be ruthlessly <strong>siloed and diversified</strong> so no single lawsuit could ever pierce the family's wealth. After spending 1997&ndash;2003 preserving capital in U.S. Treasury ladders while the band completed its active studio run, Holly used the band's <strong>2004&ndash;2014 Burnout Hiatus</strong> (following 2004's <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="text-warning fw-bold">Progress Street</a>) to methodically unbundle <strong>Engine Room Records, LLC</strong> into an impenetrable $2.4B+ web of specialized entities.
                            </p>
                        </div>
                    </div>
                </div>
            </wa-card>

            <!-- 1997-2015 CORPORATE DIVERSIFICATION TIMELINE -->
            <wa-card class="card border-secondary border-opacity-25 bg-body-tertiary shadow-sm mb-5 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="card-header bg-dark text-white py-3 px-4 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold text-uppercase font-monospace">
                        <i class="fa-duotone fa-layer-group text-info me-2"></i>1997&ndash;2015: The 18-Year Empire Blueprint
                    </h5>
                    <wa-badge variant="brand" appearance="accent" class="font-monospace">HARD RESET TO DELAWARE MIGRATION</wa-badge>
                </div>
                <div class="card-body p-4 p-md-5">
                    <p class="text-body-secondary mb-4">
                        In real-world institutional wealth management and commercial real estate, building a multi-billion-dollar, liability-siloed family office takes between 15 and 20 years of legal seasoning, credentialing, and counter-cyclical acquisitions. Starting in 1997 during <em>Hard Reset</em> and accelerating when the lights went out on <em>Progress Street</em> in late 2004, Holly executed a four-phase, 18-year diversification strategy:
                    </p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-body rounded border-start border-4 border-warning h-100">
                                <wa-badge variant="warning" appearance="accent" class="font-monospace mb-2">PHASE I: 1997&ndash;2006</wa-badge>
                                <h6 class="fw-bold text-uppercase text-body-emphasis">The <em>Hard Reset</em> Blueprint &amp; Operational Ring-Fencing</h6>
                                <p class="small text-body-secondary mb-0">
                                    Beginning with her 1997 <em>Hard Reset</em> liability audit—when Holly first recognized that the band's money had to be siloed away from touring and distribution risk—she preserved the family's core capital in Treasury ladders until the 2004 hiatus began. In 2005, she stripped all operational and highway liabilities out of <strong>Engine Room Records, LLC</strong> (leaving it strictly as an IP vault for master recordings), formed <strong>Artists First Management, LLC</strong> (2005) to absorb talent and touring risk, and created <a href="/engine-room/corporate/strategic-assets" class="fw-bold">Stardust Strategic Assets, LLC</a> (2005) to hold title to <a href="/engine-room/corporate/strategic-assets/the-fortress" class="fw-bold">The Fortress</a> (512 Progress St) and <a href="/engine-room/corporate/strategic-assets/the-iron-horse" class="fw-bold">The Iron Horse &amp; Fleet Archive</a>.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 bg-body rounded border-start border-4 border-primary h-100">
                                <wa-badge variant="brand" appearance="accent" class="font-monospace mb-2">PHASE II: 2006&ndash;2011</wa-badge>
                                <h6 class="fw-bold text-uppercase text-body-emphasis">The Real Estate Engines &amp; <em>Starfield Calibration</em> Era</h6>
                                <p class="small text-body-secondary mb-0">
                                    After earning her CFA charter in 2006 and M.S. in Quantitative Finance in 2009, Holly formed <strong>Stardust Properties, LLC</strong> (2006) and <a href="/engine-room/corporate/stardust-blacksburg" class="fw-bold">Stardust Blacksburg, LLC</a> (2007) to build barrier-free CPI student housing (<em>The Ironwood Collective</em>). When the 2008&ndash;2010 financial crash hit, she formed <a href="/engine-room/corporate/pacific-rim" class="fw-bold">Pacific Rim Properties, LLC</a> (2009) and spent 2009&ndash;2011 quietly buying distressed Class-A office towers in Century City, Los Angeles for cash—closing her biggest acquisitions right as the band released 2011's <em>Starfield Calibration</em> to celebrate the 25th anniversary of <em>"Ignition."</em>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 bg-body rounded border-start border-4 border-danger h-100">
                                <wa-badge variant="danger" appearance="accent" class="font-monospace mb-2">PHASE III: 2012&ndash;2014</wa-badge>
                                <h6 class="fw-bold text-uppercase text-body-emphasis">The Trust, The Warehouse &amp; The Sword</h6>
                                <p class="small text-body-secondary mb-0">
                                    In 2012, Holly consolidated beneficial ownership into <strong>The O'Connell Family Revocable Trust</strong>, managed by the zero-asset <strong>The O'Connell Family, LLC</strong> (voting power held equally by Ryan, Cassidy, Holly, Evan, and Tyler). In 2013, commercial operations moved out of the Progress Street house into <a href="/engine-room/corporate/strategic-assets/stardust-studios" class="fw-bold">Stardust Studios</a> and <a href="/engine-room/corporate/strategic-assets/the-vault" class="fw-bold">The Vault</a>, followed by the 2014 creation of <a href="/engine-room/corporate/aethelgard" class="fw-bold">Aethelgard Holdings, LLC</a> for distressed-debt enforcement.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 bg-body rounded border-start border-4 border-success h-100">
                                <wa-badge variant="success" appearance="accent" class="font-monospace mb-2">PHASE IV: AUGUST 2015</wa-badge>
                                <h6 class="fw-bold text-uppercase text-body-emphasis">The Delaware Migration</h6>
                                <p class="small text-body-secondary mb-0">
                                    To sever the public paper trail in Virginia before the band's return to the stage, Holly passed the Delaware Bar in August 2015 and re-domiciled the entire corporate web into anonymous Delaware LLCs with herself as sole Registered Agent. By the time Omni-Global Media attempted its hostile buyout in the <a href="/engine-room/artists/stardust-engine/story/nine-figure-refusal" class="fw-bold">Nine-Figure Refusal</a> arc, they thought they were bullying a small indie label—unaware they were negotiating with their own commercial landlord.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top border-secondary-subtle d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <span class="small text-body-secondary font-monospace">
                            <i class="fa-duotone fa-file-signature text-success me-2"></i>Declassified Restructuring Log: August 12, 2015
                        </span>
                        <wa-button variant="success" appearance="accent" size="small" href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="text-uppercase fw-bold font-monospace">
                            <i slot="start" class="fa-duotone fa-book-open"></i>Read "The 2015 Delaware Migration" Lore
                        </wa-button>
                    </div>
                </div>
            </wa-card>

            <div class="waterline">
                <span>The Information Gap</span>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="h-100 p-4 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                        <h5 class="text-primary fw-bold mb-3">
                            <i class="fa-duotone fa-users-viewfinder me-2"></i>Public Perception
                        </h5>
                        <p class="text-muted small text-uppercase fw-bold mb-2">What the World Sees</p>
                        <p>
                            To the public, <strong>The Stardust Engine</strong> is simply a resilient legacy band that tours occasionally. 
                        </p>
                        <p>
                            Other entities like <strong>The Paper Wall</strong> or <strong>Fractured Prisms</strong> appear to be successful independent artists on a boutique Virginia imprint. <strong>Pacific Rim Properties</strong> appears to be a boring, faceless Delaware corporation that owns office buildings in Century City. There is no obvious connecting thread.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-4 border border-secondary border-opacity-25 rounded bg-body-tertiary">
                        <h5 class="text-danger fw-bold mb-3">
                            <i class="fa-duotone fa-file-contract me-2"></i>Legal Reality
                        </h5>
                        <p class="text-muted small text-uppercase fw-bold mb-2">What the IRS Sees</p>
                        <p>
                            Every entity flows up to <strong>The O'Connell Family Revocable Trust</strong>. The "Band" is legally a loss-leader asset, subsidized by the returns from the real estate portfolio and the liquidation arms (Aethelgard).
                        </p>
                        <p>
                            The separation is deliberate. A tenant renting Class-A office space in Los Angeles does not need to know their landlord is a drummer.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>