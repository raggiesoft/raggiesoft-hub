<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/story/cpi/overview.php
 * Route: /engine-room/artists/stardust-engine/story/cpi
 *
 * 1. Lore & Interconnected Universe Context:
 *    - Serves as Chapter 1 (the central hub overview) of the 5-part
 *      Commonwealth Polytechnic Institute (CPI), The Crucible, & Blue Ridge
 *      Transit (BRT) archive.
 *    - Establishes CPI as a shared geographical and institutional anchor across
 *      multiple RaggieSoft narratives:
 *      a) The Stardust Engine (The Class of '89, Progress Street NW, Holly's
 *         1985-1987 Dual Enrollment at Blacksburg High School & CPI, and the
 *         1993-1995 Forger Nation War Chest).
 *      b) The Aubrie Chronicles (Jordan Shawn Kelly, Aubrie, and the Group of 8
 *         in Bennett Hall Suite 214 during the 2014-2016 timeline).
 *      c) Paige, Freddie, & Jessica (105 Pepper Street, Pepper Plaza, and the
 *         Summer Session 2 PolyPass transit activation loophole).
 *      d) Amaya, Justin, & Meredith Hayes (The NRVRC Compound & Justin's Station
 *         at I-81 Exit 98 feeding the Bluewater Transit Maroon Express into
 *         Falling Branch and CPI).
 *
 * 2. Copyright & Trademark Hygiene:
 *    - All real-world collegiate, stadium, and transit trademarks have been
 *      replaced with canonical RaggieSoft equivalents (CPI, The Forgers, The
 *      Crucible, The Anvil, The Ironheads, Buchanan University's Pavilion
 *      Lunatics, and Blue Ridge Transit).
 * ============================================================================
 */
$pageTitle = "Commonwealth Polytechnic Institute (CPI) & The Forgers - Lore Hub";

// [NAVIGATION] Configure sequential Narrative Stepper for Chapter 1 of 5
$nav = [
    'prev' => null,
    'overview' => [
        'url' => '/engine-room/artists/stardust-engine/story',
        'label' => 'Lore Hub'
    ],
    'next' => [
        'url' => '/engine-room/artists/stardust-engine/story/crucible',
        'label' => 'Ch 2: The Ironhead Covenant'
    ]
];
?>

<!-- BEGIN: Main Page Container -->
<div class="container py-5">

    <!-- [HERO HEADER] Institutional Crest & Title -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <span class="badge rounded-pill px-3 py-2 shadow-sm mb-3 text-uppercase fw-bold" style="background-color: var(--cpi-maroon, #630031); color: #fff;">
                <i class="fa-duotone fa-school me-2 text-warning"></i>Chapter 1 of 5 // Interconnected Universe Hub
            </span>
            <h1 class="display-3 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                Commonwealth Polytechnic Institute
            </h1>
            <p class="lead text-body-secondary font-monospace mb-0">
                Blacksburg, Virginia <span aria-hidden="true" class="mx-1 opacity-50">//</span><span class="visually-hidden">,</span> Home of the <strong>Forgers</strong> &amp; <strong>The Ironheads</strong>
            </p>
        </div>
    </div>

    <!-- [HERO FIGURE] Stadium Panorama -->
    <div class="text-center mb-5">
        <figure class="figure">
            <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible/album-art.jpg"
                 class="figure-img img-fluid rounded shadow-lg border"
                 alt="The Crucible stadium at night in Blacksburg, Virginia, packed with 65,000 CPI fans.">
            <figcaption class="figure-caption text-body-secondary fst-italic mt-2">
                <strong>The Crucible</strong> under the Saturday night lights in Blacksburg, Virginia—where 65,000 maroon-and-orange-clad fans turn the New River Valley into a seismic zone.
            </figcaption>
        </figure>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto">

            <!-- [SECTION 1] The Forger Identity & The Ironheads -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-hammer me-2"></i>The "Forger" Identity &amp; The Ironheads
                </h2>
                <p class="fs-5 text-body mb-3">
                    Nestled high in the Blue Ridge Mountains of Southwest Virginia, <strong>Commonwealth Polytechnic Institute (CPI)</strong> is the Commonwealth's premier land-grant polytechnic research university. Its students, faculty, and alumni are known worldwide as <strong>"The Forgers"</strong>—a tribute to the institute's 19th-century origins in metallurgy, heavy foundry engineering, and industrial mechanics.
                </p>
                <p class="text-body mb-0">
                    Inside <strong>The Crucible</strong>, CPI's 65,000-seat concrete-and-steel football stadium, that blue-collar identity is personified by <strong>The Ironheads</strong>. Just as <strong>Buchanan University</strong> basketball is famous far and wide for <strong><em>The Pavilion Lunatics</em></strong> inside Buchanan Indoor Pavilion, CPI football is renowned across collegiate athletics for The Ironheads—the 20,000 fanatical students packed shoulder-to-shoulder onto the unpadded galvanized metal bleachers of the North End Zone (<strong>The Anvil</strong>). Wearing painted maroon-and-orange steel-mill hard hats and denim overalls, The Ironheads refuse to sit from kickoff to <code>0:00</code> and treat sideline decibel meters as a personal scoreboard.
                </p>
            </div>

            <!-- [SECTION 2] Campus Geography & Landmarks (Official CPI Gazetteer) -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-map-location-dot me-2"></i>Blacksburg &amp; CPI Campus Gazetteer
                </h2>
                <p class="text-body-secondary mb-4">
                    Built from locally quarried grey-and-pink dolomitic limestone known universally as <strong>Ironstone</strong>, the CPI campus and the Town of Blacksburg operate as a living, interconnected grid where characters across eras and book series cross paths along the same quadrangles, halls, and transit corridors:
                </p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: var(--cpi-maroon, #630031);">
                                    <i class="fa-solid fa-landmark me-2 text-warning"></i>Commonwealth Green, Preston Hall, &amp; Commonwealth Mall
                                </h3>
                                <p class="small text-body mb-0">
                                    <strong>Commonwealth Green</strong> is the vast central oval lawn at the heart of campus, ringed by neo-Gothic <strong>Ironstone</strong> academic halls and anchored on its northern rim by <strong>Preston Hall</strong> (the towering administrative headquarters housing the President's Office, Bursar, and 3,000-seat Preston Auditorium). Feeding the Green from the east is <strong>Commonwealth Mall</strong>, spanned by the iconic Ironstone arches of <strong>The Keystone Bridge</strong> (linking <strong>Keystone Hall</strong> to <strong>Pendleton Memorial Library</strong>). Before the dedicated multi-bay <strong>CPI Transit Center</strong> was constructed, every <strong>Blue Ridge Transit (BRT)</strong> route staged bumper-to-bumper along the curb of Commonwealth Mall beneath The Keystone Bridge in an infamous, diesel-choked nightmare—the exact curbside gauntlet where Erin rescued her twin brother John in November 2004.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: var(--cpi-maroon, #630031);">
                                    <i class="fa-solid fa-compass-drafting me-2 text-warning"></i>Kincaid Hall, Callahan Hall, &amp; The Engineering Quad
                                </h3>
                                <p class="small text-body mb-0">
                                    Along Commonwealth Mall sits <strong>Kincaid Hall</strong> (the bustling student union housing the Kincaid Ballroom, Kincaid Auditorium, and Second-Floor Lounge) and <strong>Callahan Hall</strong> (home to Services for Students with Disabilities / SSD). Directly northwest of Commonwealth Green rises the <strong>Engineering Quad</strong>—anchored by <strong>Faraday Hall</strong> (Electrical &amp; Systems Engineering), <strong>Joule Hall</strong> (Mechanical &amp; Materials Engineering), <strong>Kelvin Hall</strong> (Computer Science), and <strong>Archer Hall</strong> (General Lecture Hall)—while the Residential Quad is served by <strong>The Foundry</strong>, CPI's massive two-story rotunda dining hall.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: var(--cpi-maroon, #630031);">
                                    <i class="fa-solid fa-building me-2 text-warning"></i>Eleanor Bennett Commonwealth Hall ("The Old Lady") &amp; Pepper Street
                                </h3>
                                <p class="small text-body mb-0">
                                    On campus, <strong>Eleanor Bennett Commonwealth Hall</strong>—known universally as <strong>Bennett Hall</strong>, <em>"The Old Lady,"</em> or <em>"The Old Lady on the Hill"</em>—is a historic Ironstone residence hall whose <strong>Suite 214</strong> serves as the sanctuary for Jordan Shawn Kelly, Aubrie, and the Group of 8 in <em>The Aubrie Chronicles</em>. Off campus, <strong>Progress Street NW</strong> is home to The Stardust Engine's <a href="/engine-room/corporate/stardust-blacksburg" class="fw-bold">Ironwood Collective</a>, while the <strong>Pepper Street / Pepper Plaza</strong> corridor (anchored by <strong>Valu-Mart</strong>) houses Paige, Freddie, and Jessica at <code>105 Pepper Street</code>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: var(--cpi-maroon, #630031);">
                                    <i class="fa-solid fa-highway me-2 text-warning"></i>The Crucible, The Furnace, &amp; The I-81 Spine (Exits 118 &amp; 98)
                                </h3>
                                <p class="small text-body mb-0">
                                    At the southern edge of campus stand <strong>The Crucible</strong> (65,000-seat football stadium) and <strong>The Furnace</strong> (10,000-seat basketball coliseum), both protected in perpetuity by the 1995 Ironhead Covenant. The university's reach extends down I-81 from the 8-level, 6,000-space <strong>Christiansburg Transit Center at Falling Branch (Exit 118)</strong> to the 566-acre <strong>New River Vocational Rehabilitation Center &amp; Justin's Station (Exit 98)</strong> in Pulaski County.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [SECTION 3] The Class of '89, Dual Enrollment, & The Summer Session Loophole -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-user-graduate me-2"></i>The Class of '89 &amp; Academic Precedents
                </h2>
                <p class="text-body mb-3">
                    CPI is the literal and spiritual birthplace of <strong>The Stardust Engine</strong>. All five members—<a href="/engine-room/artists/stardust-engine/band/ryan-oconnell">Ryan O'Connell</a>, <a href="/engine-room/artists/stardust-engine/band/cassidy-oconnell">Cassidy O'Connell</a>, <a href="/engine-room/artists/stardust-engine/band/holly-oconnell">Holly O'Connell</a>, <a href="/engine-room/artists/stardust-engine/band/evan-wright">Evan Wright</a>, and <a href="/engine-room/artists/stardust-engine/band/tyler-wright">Tyler Wright</a>—walked across the stage together on The Commonwealth Green as proud graduates of the <strong>CPI Class of 1989</strong>.
                </p>

                <div class="row g-4 my-2">
                    <div class="col-md-6">
                        <div class="card h-100 border-warning border-start border-4 bg-body-tertiary shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2">
                                    <i class="fa-duotone fa-bus-simple me-2 text-warning"></i>1. The Dual-Enrollment Bridge (1985–1987)
                                </h3>
                                <p class="small text-body mb-0">
                                    When Ryan (21), Cassidy (19), and twins Evan and Tyler (18) matriculated as CPI freshmen in Fall 1985, youngest sister <strong>Holly O'Connell</strong> was only 16. Through CPI's joint <strong>High School Dual Enrollment</strong> partnership with <strong>Blacksburg High School</strong>, Holly attended morning high-school classes and rode <strong>Blue Ridge Transit Route 1</strong> to the CPI campus every afternoon to take 200- and 300-level undergraduate Business Administration and Commercial Contract Law courses. By simultaneously satisfying her Virginia Advanced Studies Diploma and earning two full years of CPI credit, Holly entered CPI full-time as a Junior in Fall 1987 and graduated alongside her siblings and cousins in May 1989.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-info border-start border-4 bg-body-tertiary shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase mb-2">
                                    <i class="fa-duotone fa-id-card me-2 text-info"></i>2. The Summer Session PolyPass Loophole
                                </h3>
                                <p class="small text-body mb-0">
                                    Under CPI regulations, a student's <strong>PolyPass</strong> (which turns a CPI student ID into a fare-free unlimited transit pass across Blue Ridge Transit and regional partners) does not normally activate for incoming freshmen until the Fall Semester begins in late August. However, savvy Blacksburg residents—like Jessica, Paige, and Freddie on Pepper Street—discovered that enrolling in a single accelerated <strong>Summer Session</strong> course (such as <em>Session II: July–August</em>) immediately activates the student's PolyPass upon tuition payment, unlocking two months of free summer mobility across the New River Valley.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [SECTION 4] The Forger Nation War Chest -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-box-heart me-2"></i>The "Forger Nation War Chest" (1992–1995)
                </h2>
                <p class="text-body mb-0">
                    The unbreakable bond between CPI alumni and The Stardust Engine saved the band's career after the 1990 highway crash and the 1992 <a href="/engine-room/artists/stardust-engine/story/friction"><em>Friction</em> catastrophe</a>. When the family escaped Apex Records with their master tapes intact but their bank accounts drained, CPI students and alumni organized an underground, mail-order grassroots relief drive known as the <strong>"Forger Nation War Chest."</strong> Tens of thousands of five- and ten-dollar checks mailed in maroon-and-orange envelopes raised the seed capital Holly O'Connell used to incorporate <strong>Engine Room Records, LLC</strong> and record 1995's <a href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes"><em>The Warehouse Tapes</em></a>—forever linking the band's independence to the loyalty of Forger Nation.
                </p>
            </div>

            <!-- [SECTION 5] 5-Chapter Interactive Archive Directory -->
            <div class="mb-4">
                <h2 class="h4 fw-bold text-uppercase border-bottom pb-2 mb-4" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-books me-2"></i>Explore the CPI &amp; Crucible Archive
                </h2>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary shadow-sm border-start border-4 border-warning">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <span class="badge bg-warning text-dark font-monospace mb-2">CHAPTER 2</span>
                                    <h3 class="h5 fw-bold">The Crucible, The Furnace, &amp; The 1995 Ironhead Covenant</h3>
                                    <p class="small text-body-secondary mb-3">
                                        Read the full legal text of alumnus Jeremiah "Ironhead" Vance's (Class of '52) <strong>$100,000,000 Deed of Gift</strong>—mandating permanent naming rights for both <strong>The Crucible</strong> and <strong>The Furnace</strong>, the Acoustic Mandate, and the galvanized metal bleachers of <strong>The Anvil</strong>.
                                    </p>
                                </div>
                                <a href="/engine-room/artists/stardust-engine/story/crucible" class="btn btn-sm btn-outline-warning text-uppercase fw-bold align-self-start">
                                    Read Chapter 2 <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary shadow-sm border-start border-4 border-danger">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <span class="badge bg-danger text-white font-monospace mb-2">CHAPTER 3</span>
                                    <h3 class="h5 fw-bold">Stadium Anthems &amp; The 1986 Redline</h3>
                                    <p class="small text-body-secondary mb-3">
                                        How dual-enrolled 16-year-old Holly O'Connell negotiated the <strong>$1.00 Perpetual Mutual Cross-License</strong>, how the 1989 VPU game birthed <strong>"The Stomp,"</strong> and how the October 8, 2004 secret 4th-quarter premiere of <em>"Saturday Night Lights"</em> unleashed the <strong><em>"BAH! BAH! BAH!"</em></strong> tradition.
                                    </p>
                                </div>
                                <a href="/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline" class="btn btn-sm btn-outline-danger text-uppercase fw-bold align-self-start">
                                    Read Chapter 3 <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary shadow-sm border-start border-4 border-info">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <span class="badge bg-info text-dark font-monospace mb-2">CHAPTER 4</span>
                                    <h3 class="h5 fw-bold">Falling Branch &amp; The $150 Parking Paradox</h3>
                                    <p class="small text-body-secondary mb-3">
                                        Inside VDOT's <strong>8-level, 6,000-space Christiansburg Transit Center at Falling Branch (Exit 118)</strong>, WSDOT-style bus-only flyovers to US-460, State Police priority on Southgate Drive, and why paying $150 to park beside The Crucible is a 90-minute trap.
                                    </p>
                                </div>
                                <a href="/engine-room/artists/stardust-engine/story/crucible/falling-branch-transit" class="btn btn-sm btn-outline-info text-uppercase fw-bold align-self-start">
                                    Read Chapter 4 <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 bg-body-tertiary shadow-sm border-start border-4 border-primary">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <span class="badge bg-primary text-white font-monospace mb-2">CHAPTER 5</span>
                                    <h3 class="h5 fw-bold">Blood Feuds: VPU, MSU, &amp; The VDU Shutout War</h3>
                                    <p class="small text-body-secondary mb-3">
                                        From the <em>Commonwealth Cup</em> (VPU) and the <em>Coal &amp; Iron Border War</em> (#6 MSU) to the 2014–2015 <strong>Virginia Dominion University (VDU)</strong> Homecoming Shutout War (<code>38–0</code> and <code>52–0</code>) and Jordan Shawn Kelly's 2016 return.
                                    </p>
                                </div>
                                <a href="/engine-room/artists/stardust-engine/story/crucible/rivalries" class="btn btn-sm btn-outline-primary text-uppercase fw-bold align-self-start">
                                    Read Chapter 5 <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [NAVIGATION] Sequential Chapter Stepper -->
            <?php include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php'; ?>

        </div>
    </div>

</div>
<!-- END: Main Page Container -->