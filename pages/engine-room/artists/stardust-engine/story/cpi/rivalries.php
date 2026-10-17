<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/story/cpi/rivalries.php
 * Route: /engine-room/artists/stardust-engine/story/crucible/rivalries
 *
 * 1. Lore & Modular Chapter Context:
 *    - Serves as Chapter 5 (final chapter) of the 5-part CPI, The Crucible,
 *      & Blue Ridge Transit interconnected universe archive.
 *    - Documents CPI's three historic collegiate football rivalries:
 *      a) Virginia Piedmont University (VPU Cavaliers — Charlottesville, VA):
 *         "The Commonwealth Cup" (traditional in-state rivalry; the freezing
 *         November 1989 game inside The Crucible that birthed "The Stomp").
 *      b) Monongahela State University (MSU Coalminers — Morgantown, WV):
 *         "The Black Anvil Trophy" ("The Coal & Iron Border War"; highlighted
 *         by the October 8, 2004 19-13 win over #6 MSU during the secret 4th-
 *         quarter debut of "Saturday Night Lights: The Crucible").
 *      c) Virginia Dominion University (VDU Monarchs — Norfolk, VA):
 *         "The Hammer vs. The Crown" (The 2014-2015 Homecoming Shutout War:
 *         unranked VDU's 38-0 shutout of #3 CPI at CPI's 2014 Homecoming,
 *         followed by CPI's merciless 52-0 retaliatory shutout at VDU's 2015
 *         Homecoming in Norfolk, plus the cross-universe link to Jordan Shawn
 *         Kelly in The Aubrie Chronicles and the May 21, 2016 Live at The
 *         Crucible concert).
 * ============================================================================
 */
$pageTitle = "Blood Feuds of the Commonwealth: VPU, Monongahela State, & The VDU Shutout War - CPI Lore";

// [NAVIGATION] Configure sequential Narrative Stepper for Chapter 5 of 5
$nav = [
    'prev' => [
        'url' => '/engine-room/artists/stardust-engine/story/crucible/falling-branch-transit',
        'label' => 'Ch 4: Falling Branch & Transit'
    ],
    'overview' => [
        'url' => '/engine-room/artists/stardust-engine/story/cpi',
        'label' => 'CPI Archive Hub'
    ],
    'next' => null
];
?>

<div class="container py-5">

    <!-- [HERO HEADER] Chapter 5 Title & Subtitle -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <wa-badge variant="brand" appearance="accent" pill class="px-3 py-2 shadow-sm mb-3 text-uppercase fw-bold">
                <i class="fa-duotone fa-helmet-battle me-2"></i>Chapter 5 of 5 // Athletic Rivalries Archive
            </wa-badge>
            <h1 class="display-3 fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Impact', sans-serif;">
                Blood Feuds of the Commonwealth
            </h1>
            <p class="lead text-body-secondary font-monospace mt-2">
                VPU (1989) <span aria-hidden="true" class="mx-1 opacity-50">//</span><span class="visually-hidden">,</span> #6 Monongahela State (2004) <span aria-hidden="true" class="mx-1 opacity-50">//</span><span class="visually-hidden">,</span> Virginia Dominion (2014–2015)
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- [SECTION 1] Overview Matrix of CPI's Three Great Rivalries -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-trophy-star me-2"></i>1. The Three Pillars of Forger Rivalry Lore
                </h2>
                <p class="text-body mb-4">
                    In the RaggieSoft universe, every autumn Saturday in Blacksburg is measured against three opponent institutions—each representing a distinct cultural, geographic, and historical clash with <strong>Commonwealth Polytechnic Institute (CPI)</strong>:
                </p>

                <div class="row g-3">
                    <!-- Rivalry 1: VPU -->
                    <div class="col-md-4">
                        <wa-card class="card h-100 bg-body-tertiary shadow-sm border-top border-4 border-secondary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <wa-badge variant="neutral" appearance="accent" class="font-monospace">THE OLD GUARD</wa-badge>
                                    <span class="small text-muted font-monospace">EST. 1895</span>
                                </div>
                                <h3 class="h5 fw-bold mb-1">Virginia Piedmont Univ. (VPU)</h3>
                                <p class="small text-muted font-monospace mb-2">Charlottesville, VA // The Commonwealth Cup</p>
                                <p class="small text-body mb-0">
                                    Blue-collar Appalachian engineering versus Charlottesville patrician tradition. During a freezing November 1989 clash against VPU, students stomping heavy winter boots on <strong>The Anvil's</strong> steel bleachers birthed <strong>"The Stomp"</strong> and the deafening <strong>"IGNITION!"</strong> crowd chant.
                                </p>
                            </div>
                        </wa-card>
                    </div>

                    <!-- Rivalry 2: MSU -->
                    <div class="col-md-4">
                        <wa-card class="card h-100 bg-body-tertiary shadow-sm border-top border-4 border-warning w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <wa-badge variant="warning" appearance="accent" class="font-monospace">BORDER WAR</wa-badge>
                                    <span class="small text-muted font-monospace">BLACK ANVIL</span>
                                </div>
                                <h3 class="h5 fw-bold mb-1">Monongahela State (MSU)</h3>
                                <p class="small text-muted font-monospace mb-2">Morgantown, WV // The Coalminers</p>
                                <p class="small text-body mb-0">
                                    <strong>"The Coal &amp; Iron War."</strong> A bruising Appalachian border blood feud. On <strong>Saturday, October 8, 2004</strong>, CPI upset <strong>#6 MSU (19–13)</strong> on the night <a href="/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline#saturday-night-lights-debut"><em>"Saturday Night Lights: The Crucible"</em></a> secretly premiered at the start of the 4th quarter.
                                </p>
                            </div>
                        </wa-card>
                    </div>

                    <!-- Rivalry 3: VDU -->
                    <div class="col-md-4">
                        <wa-card class="card h-100 bg-body-tertiary shadow-sm border-top border-4 border-danger w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <wa-badge variant="danger" appearance="accent" class="font-monospace">THE BLOOD FEUD</wa-badge>
                                    <span class="small text-muted font-monospace">2014 – 2015</span>
                                </div>
                                <h3 class="h5 fw-bold mb-1">Virginia Dominion (VDU)</h3>
                                <p class="small text-muted font-monospace mb-2">Norfolk, VA // The Monarchs ("Norfolk")</p>
                                <p class="small text-body mb-0">
                                    <strong>"The Hammer vs. The Crown."</strong> Back-to-back Homecoming shutouts in 2014 (<code>38–0 VDU</code>) and 2015 (<code>52–0 CPI</code>) turned the upstart Monarchs from Hampton Roads into a personal blood feud that eclipsed the century-old VPU series.
                                </p>
                            </div>
                        </wa-card>
                    </div>
                </div>
            </div>

            <!-- [SECTION 2] The 2014-2015 CPI vs. VDU Homecoming Shutout War -->
            <div class="mb-5" id="vdu-rivalry">
                <div class="mb-4">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 border-bottom pb-2">
                        <h2 class="h3 fw-bold mb-0" style="color: var(--cpi-maroon, #630031);">
                            <i class="fa-duotone fa-helmet-battle me-2"></i>2. The Hammer vs. The Crown: The 2014–2015 VDU Homecoming Shutout War
                        </h2>
                        <wa-badge variant="danger" appearance="accent" class="font-monospace">2014 – 2015 ARCHIVE</wa-badge>
                    </div>
                    <p class="lead mt-2 mb-0">
                        How back-to-back Homecoming shutouts turned <strong>Virginia Dominion University ("Norfolk")</strong> into the most combustible rivalry in Commonwealth sports history.
                    </p>
                </div>

                <p>
                    For decades, every CPI student and alumnus considered <strong>Virginia Piedmont University (VPU)</strong> to be the Forgers' undisputed arch-rival. That changed forever across twelve months in <strong>2014 and 2015</strong>, when CPI scheduled a home-and-home non-conference series against <strong>Virginia Dominion University (VDU)</strong>—the upstart <strong>Monarchs</strong> out of Norfolk, Virginia. Because both schools weaponized their respective <strong>Homecoming Saturdays</strong> to stage the matchups—and both games ended in shocking, lopsided shutouts—the collision between the Blue Ridge Mountains (<em>"Blacksburg"</em>) and Hampton Roads (<em>"Norfolk"</em>) became an unforgettable chapter in CPI lore.
                </p>

                <div class="row g-4 my-3">
                    <!-- Act I: 2014 CPI Homecoming -->
                    <div class="col-md-6">
                        <wa-card class="card h-100 bg-body-tertiary shadow-sm border-danger border-2 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                            <div class="card-header bg-danger text-white fw-bold d-flex justify-content-between align-items-center p-3">
                                <span><i class="fa-solid fa-crown me-2"></i>Act I: "The Homecoming Humiliation"</span>
                                <wa-badge variant="neutral" appearance="accent" class="font-monospace">SEPT 27, 2014</wa-badge>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center bg-body p-3 rounded border mb-3 font-monospace">
                                    <div>
                                        <div class="small text-muted">VISITOR (UNRANKED)</div>
                                        <div class="fw-bold fs-5">VDU Monarchs</div>
                                    </div>
                                    <div class="text-end">
                                        <wa-badge variant="danger" appearance="accent" class="fs-5 px-3 py-2">38</wa-badge>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center bg-body p-3 rounded border mb-3 font-monospace">
                                    <div>
                                        <div class="small text-muted">HOME (#3 IN NATION — CPI HOMECOMING)</div>
                                        <div class="fw-bold fs-5">CPI Forgers</div>
                                    </div>
                                    <div class="text-end">
                                        <wa-badge variant="neutral" appearance="accent" class="fs-5 px-3 py-2">0</wa-badge>
                                    </div>
                                </div>
                                <p class="small text-body mb-2">
                                    <strong>The Hubris:</strong> On Saturday, September 27, 2014, CPI hosted VDU inside The Crucible for the very first time. Ranked <strong>#3 in the nation</strong> with a <strong>Gridiron Trophy</strong>-candidate quarterback, CPI Athletics had scheduled unranked VDU as what everyone assumed would be effortless Homecoming "target practice." All week long, dorm doors across Bennett Hall and chalk murals on The Commonwealth Green depicted the CPI Forger's Hammer smashing the VDU Monarch's Crown under banners reading <em>"BEAT NORFOLK!"</em>
                                </p>
                                <p class="small text-body mb-0">
                                    <strong>The Collapse:</strong> After CPI marched down the field on the opening drive only to push a chip-shot field goal wide left, VDU's unflashy, brute-force rushing attack systematically ground down the #3 Forgers. Eating the clock 4 and 5 yards at a time, VDU stunned the 65,000-strong crowd to lead <strong>7–0</strong> after the first quarter and <strong>24–0 at halftime</strong> (after recovering a CPI fumble inside the final minute of the half). Thousands of stunned fans streamed for the exits as the Marching Forgers took the field, and VDU poured it on in the second half to seal a historic <strong>38–0 shutout</strong> inside The Crucible.
                                </p>
                            </div>
                        </wa-card>
                    </div>

                    <!-- Act II: 2015 VDU Homecoming -->
                    <div class="col-md-6">
                        <wa-card class="card h-100 bg-body-tertiary shadow-sm border-warning border-2 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                            <div class="card-header fw-bold d-flex justify-content-between align-items-center p-3" style="background-color: var(--cpi-maroon, #630031); color: #fff;">
                                <span><i class="fa-solid fa-hammer me-2 text-warning"></i>Act II: "The Norfolk Reckoning"</span>
                                <wa-badge variant="warning" appearance="accent" class="font-monospace">OCT 2015</wa-badge>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center bg-body p-3 rounded border mb-3 font-monospace">
                                    <div>
                                        <div class="small text-muted">VISITOR (THE RECEIPTS)</div>
                                        <div class="fw-bold fs-5">CPI Forgers</div>
                                    </div>
                                    <div class="text-end">
                                        <wa-badge variant="success" appearance="accent" class="fs-5 px-3 py-2">52</wa-badge>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center bg-body p-3 rounded border mb-3 font-monospace">
                                    <div>
                                        <div class="small text-muted">HOME (VDU HOMECOMING — NORFOLK, VA)</div>
                                        <div class="fw-bold fs-5">VDU Monarchs</div>
                                    </div>
                                    <div class="text-end">
                                        <wa-badge variant="neutral" appearance="accent" class="fs-5 px-3 py-2">0</wa-badge>
                                    </div>
                                </div>
                                <p class="small text-body mb-2">
                                    <strong>The Arrogance:</strong> Intoxicated by their 2014 upset in Blacksburg, VDU's administration made the fateful decision to schedule the 2015 return leg in Norfolk as <strong>VDU's own Homecoming Game</strong>. Student groups in Norfolk printed thousands of commemorative <em>"38–0"</em> t-shirts, convinced they would humiliate CPI a second time in front of their own alumni.
                                </p>
                                <p class="small text-body mb-0">
                                    <strong>The Receipts:</strong> CPI's players and coaching staff had spent 365 days staring at the <code>0–38</code> scoreboard stenciled onto every weight-room mirror in Blacksburg. Refusing to take their foot off the gas for sixty minutes, the Forgers walked into VDU's Homecoming party in Norfolk and delivered a merciless, retaliatory <strong>52–0 shutout blowout</strong>—refusing to kick field goals, keeping their starting defense on the field until the final whistle to preserve the goose egg, and handing VDU an even larger Homecoming shutout humiliation on their own turf.
                                </p>
                            </div>
                        </wa-card>
                    </div>
                </div>

                <!-- Cross-Universe Narrative Connection: The Aubrie Chronicles & Live at The Crucible (2016) -->
                <wa-callout variant="brand" appearance="accent" class="shadow-sm mt-3 mb-0 p-4 d-block">
                    <h3 class="h6 fw-bold text-uppercase mb-2">
                        <i class="fa-duotone fa-book-sparkles me-2"></i>Cross-Universe Narrative Connection: <em>The Aubrie Chronicles</em> &amp; Reclaiming The Crucible (2016)
                    </h3>
                    <p class="small mb-0">
                        In RaggieSoft's literary canon (<em>The Aubrie Chronicles</em>), the <strong>September 27, 2014 Homecoming Humiliation (38–0)</strong> was the traumatic freshman-year game where Jordan Shawn Kelly—watching his new Blacksburg sanctuary get dismantled by the team from his abusive mother's Hampton Roads backyard—suffered a devastating halftime meltdown and fled back to Bennett Hall Suite 214 with the Group of 8. Jordan did not set foot inside The Crucible again for nearly two years—until <strong>Saturday, May 21, 2016</strong>, when <strong>The Stardust Engine</strong> returned home to Blacksburg to film and record <strong><em>Live at The Crucible</em></strong>, overwriting the ghost of the <code>38–0</code> scoreboard beneath a tidal wave of 65,000 fans singing <em>"Electric Color"</em> in unison.
                    </p>
                </wa-callout>
            </div>

            <!-- [NAVIGATION] Sequential Chapter Stepper -->
            <?php include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php'; ?>

        </div>
    </div>

</div>

