<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/story/cpi/falling-branch-transit.php
 * Route: /engine-room/artists/stardust-engine/story/crucible/falling-branch-transit
 *
 * 1. Lore & Modular Chapter Context:
 *    - Serves as Chapter 4 of the 5-part CPI, The Crucible, & Blue Ridge
 *      Transit (BRT) interconnected universe archive.
 *    - Documents the physical transit & highway engineering of the New River
 *      Valley across all RaggieSoft narratives:
 *      a) Blue Ridge Transit (BRT), the PolyPass fare system, and the 60-foot
 *         Prairie Coachworks low-floor articulated fleet ("The Mountain Mist &
 *         River Ribbon" livery).
 *      b) The Christiansburg Transit Center at Falling Branch (I-81 Exit 118):
 *         VDOT's 8-level, 6,000-space concrete intercept garage (~12,000 to
 *         14,400 game-day fans) and integrated 8-bay BRT terminal.
 *      c) WSDOT-Style Asymmetric Freeway Geometry: Direct I-81 flyover ramps
 *         for all vehicles ($0 FREE parking), paired with grade-separated
 *         "BUSES ONLY" flyover ramps onto US-460 Bypass and the Virginia State
 *         Police-enforced Southgate Drive Bus-Only Priority Corridor.
 *      d) The Great CPI Parking Paradox ("The $150 Arrogance Tax"): Why paying
 *         $150 to park beside The Crucible buys a short walk to the gate but a
 *         90-minute motionless trap after 0:00, outbound police metering onto
 *         Prices Fork Road, and the South Main Street (Business 460) trap.
 *      e) Cross-Universe Connections: Exit 98 (NRVRC / Justin's Station & the
 *         Wall of 20 on the Maroon Express), Pepper Street (Summer Session
 *         PolyPass loophole), and Progress Street NW (The Stardust Engine's
 *         2004 Prairie Coachworks RLFD30 private coach).
 * ============================================================================
 */
$pageTitle = "Christiansburg Transit Center at Falling Branch & The $150 Parking Paradox - CPI Lore";

// [NAVIGATION] Configure sequential Narrative Stepper for Chapter 4 of 5
$nav = [
    'prev' => [
        'url' => '/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline',
        'label' => 'Ch 3: Anthems & 1986 Redline'
    ],
    'overview' => [
        'url' => '/engine-room/artists/stardust-engine/story/cpi',
        'label' => 'CPI Archive Hub'
    ],
    'next' => [
        'url' => '/engine-room/artists/stardust-engine/story/crucible/rivalries',
        'label' => 'Ch 5: Rivalries & VDU War'
    ]
];
?>

<div class="container py-5">

    <!-- [HERO HEADER] Chapter 4 Title & Subtitle -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-9 text-center">
            <span class="badge bg-info text-dark rounded-pill px-3 py-2 shadow-sm mb-3 text-uppercase fw-bold">
                <i class="fa-duotone fa-bus me-2"></i>Chapter 4 of 5 // Transit &amp; Infrastructure Lore
            </span>
            <h1 class="display-3 fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Impact', sans-serif;">
                Falling Branch &amp; The $150 Parking Paradox
            </h1>
            <p class="lead text-body-secondary font-monospace mt-2">
                I-81 Exit 118 <span aria-hidden="true" class="mx-1 opacity-50">//</span><span class="visually-hidden">,</span> 8 Levels &amp; 6,000 Spaces <span aria-hidden="true" class="mx-1 opacity-50">//</span><span class="visually-hidden">,</span> Blue Ridge Transit Priority
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- [SECTION 1] Blue Ridge Transit & The New River Valley Multi-Agency Grid -->
            <div class="mb-5">
                <h2 class="h3 fw-bold border-bottom pb-2 mb-3" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-route me-2"></i>1. The New River Valley Transit Grid &amp; The PolyPass Ecosystem
                </h2>
                <p class="fs-5 text-body mb-3">
                    In Blacksburg, Christiansburg, Radford, Carroll County, and the Roanoke Valley, public transit is not an afterthought—it is the circulatory system of the entire region. Anchored by <strong>Blue Ridge Transit (BT / BRT)</strong>, the network is unified by the <strong>CPI PolyPass</strong>: every active CPI student and faculty ID card doubles as an unlimited, fare-free (`$0.00`) transit pass across <strong>four interconnected regional bus agencies</strong> (Blue Ridge Transit, Bluewater Transit, Roanoke Valley Transit, and Radford Transit).
                </p>
                <p class="text-body mb-4">
                    Blue Ridge Transit's workhorse fleet consists of 29-foot, 35-foot, and 40-foot rigid coaches alongside <strong>60-foot low-floor articulated transit buses</strong> manufactured by <strong>Prairie Coachworks</strong>, painted in the agency's signature <em>"Mountain Mist &amp; River Ribbon"</em> livery (Arctic Fleet White upper bodies, Appalachian Pine Green lower skirts, and dual sweeping ribbons of New River Slate-Teal and Mountain Mist Sky Blue arcing across the black rubber center accordion bellows, with the flip-out aluminum ADA wheelchair ramp always deployed from the <strong>front passenger boarding door</strong>).
                </p>

                <!-- 6-Card Regional Agency & Route Directory -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-primary font-monospace">BT ROUTE 1</span>
                                    <span class="small text-body-secondary font-monospace">Every 15 Min (60' Artics)</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">The Spine (45 Min Full-Length)</h3>
                                <p class="small text-body-secondary mb-0">
                                    Never short-turns: leaves <strong>Christiansburg Transit Center / Falling Branch (Exit 118)</strong>, follows <strong>US-11</strong> into downtown Christiansburg to <strong>Pepper Plaza Transit Center</strong> (next door to the <strong>Montgomery County Courthouse</strong>, across from <code>105 Pepper Street</code> &amp; Valu-Mart; 15 min), then follows <strong>South Main Street (Business US-460)</strong> and <strong>Progress Street NW</strong> into Blacksburg to <strong>Commonwealth Mall</strong> (2003–2015) or the <strong>CPI Transit Center</strong> (2016+; 30 min from Pepper Plaza).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-info text-dark font-monospace">BT ROUTES 3 &amp; 8</span>
                                    <span class="small text-body-secondary font-monospace">$1.00 / PolyPass $0</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">Pepper Plaza Branches</h3>
                                <p class="small text-body-secondary mb-0">
                                    From <strong>Pepper Plaza Transit Center</strong>, <strong>Route 3 (The Radford Link)</strong> follows US-11 west across the New River to Radford's <strong>McConnell Transit Center</strong> (every 30 min Mon–Fri, 60 min Sat–Sun), while <strong>Route 8 (The Riner Run)</strong> follows SR-8 south to Riner (hourly Mon–Fri, 7 AM–6 PM; used by Jessica and Paige for OB/GYN appointments).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-danger font-monospace">BLUEWATER ("OTHER BT")</span>
                                    <span class="small text-body-secondary font-monospace">$5 Express / $1 Local</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">The Maroon Express (90 Min)</h3>
                                <p class="small text-body-secondary mb-0">
                                    Pulses from <strong>Bluewater Transit Center</strong> (across from Bluewater High School in Bluewater, VA—hometown of Madison Elizabeth Scott; local <strong>Purple Line</strong> serves Galax CC hourly). Hourly 45' coaches run via <strong>Exit 14 P&amp;R</strong>, <strong>Max Meadows (Exit 84)</strong>, <strong>Dublin / NRVRC Justin's Station (Exit 98)</strong>, <strong>Falling Branch (Exit 118B)</strong>, and <strong>New River Mall (Christiansburg Mall)</strong> to CPI. Free with CPI PolyPass, Galax CC ID, or Carroll County Schools ID.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-success font-monospace">RVT EXPRESS &amp; RAIL</span>
                                    <span class="small text-body-secondary font-monospace">$3 Express / $2 Local</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">Roanoke Express &amp; ARTS Thruway</h3>
                                <p class="small text-body-secondary mb-0">
                                    Links Roanoke's <strong>Third Street Station</strong> (Mon–Sat) to <strong>Falling Branch</strong>, <strong>New River Mall (Christiansburg Mall)</strong>, and <strong>CPI</strong>—offset 30 minutes from Bluewater's <em>Maroon Express</em> for <strong>30-minute combined express headways</strong>. On <strong>Oct 31, 2017</strong>, RVT launched the 7-day <strong>ARTS Train Connector</strong> meeting <strong>ARTS <em>Coastal Service / The Patriot</em></strong> (Northeast Regional) trains in Roanoke with guaranteed delayed-train holds.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-secondary font-monospace">RADFORD TRANSIT</span>
                                    <span class="small text-body-secondary font-monospace">29' Buses • $0.50 &rarr; $0</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">McConnell Hub &amp; School ID Rule</h3>
                                <p class="small text-body-secondary mb-0">
                                    Operates 29-foot buses from <strong>McConnell Transit Center</strong> (<code>$0.50</code> no-transfer fare pre-COVID; <strong>permanently 100% fare-free post-COVID</strong>). Free with CPI PolyPass, RU ID, Dublin CC ID, and Radford Public Schools ID (officially RHS only, though identical badge templates let middle and elementary kids ride free). Local routes (*Plumb Creek*, *Dublin CC*) run Mon–Fri; <strong>Radford Connector</strong> to CPI runs 7 days/week.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-body-tertiary border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-warning text-dark font-monospace">VALLEY FLYER</span>
                                    <span class="small text-danger fw-bold font-monospace">NO POLYPASS ($15.99+)</span>
                                </div>
                                <h3 class="h6 fw-bold mb-1">D.C. Intercity Coach vs. 2003 MCI</h3>
                                <p class="small text-body-secondary mb-0">
                                    State-sponsored intercity coach to <strong>Washington, D.C. Union Station</strong> (`$49.99` to D.C.; `$15.99` local hop between CPI and Falling Branch; skips New River Mall &amp; downtown Roanoke; <strong>no PolyPass or Go-Card accepted</strong>). Contrast with the <strong>2003 Supplemental Commuter Coaches</strong> (45' MCI coaches running <code>Falling Branch &harr; New River Mall &harr; Commonwealth Mall</code> every 30 min, free with PolyPass).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4-Era Chronological Evolution Callout (Flash Pass -> CPI Transit Center -> ARTS Rail -> Blue Ridge Go-Card) -->
                <div class="card bg-body-tertiary border-warning border-start border-5 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-3" style="color: var(--cpi-maroon, #630031);">
                            <i class="fa-duotone fa-timeline-arrow me-2 text-warning"></i>Chronological Evolution: From Flashing the PolyPass to the Blue Ridge Go-Card
                        </h3>
                        <div class="row g-3 small text-body">
                            <div class="col-md-6">
                                <div class="p-3 bg-body rounded border h-100">
                                    <span class="badge bg-secondary font-monospace mb-1">ERA 1 // 2003–2015</span>
                                    <h4 class="h6 fw-bold mb-1">Commonwealth Mall Curbside &amp; "Flash Pass" Boarding</h4>
                                    <p class="mb-0 text-body-secondary">
                                        Prior to 2016, all five bus agencies converged curbside along <strong>Commonwealth Mall</strong> beneath <strong>The Keystone Bridge</strong> outside <strong>Kincaid Hall</strong> (headsign: <code>1 COMMONWEALTH MALL</code>). There were no smart cards: CPI, Galax CC, Carroll County, RU, Dublin CC, and Radford students simply <strong>flashed their physical school ID cards</strong> to the bus operator at the front door.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-body rounded border h-100">
                                    <span class="badge bg-primary font-monospace mb-1">ERA 2 // 2016 &amp; OCT 31, 2017</span>
                                    <h4 class="h6 fw-bold mb-1">CPI Transit Center &amp; ARTS Roanoke Rail Extension</h4>
                                    <p class="mb-0 text-body-secondary">
                                        In <strong>2016</strong>, the off-street multi-bay <strong>CPI Transit Center</strong> opened (`1 CPI TRANS CTR`), ending the Commonwealth Mall curbside bottleneck. On <strong>October 31, 2017</strong>, <strong>ARTS</strong> (<em>American Rail Transit Service</em>) extended its <strong><em>Coastal Service / The Patriot</em></strong> (Northeast Regional) train to Roanoke's <strong>Third Street Station</strong>, launching RVT's 7-day <em>Train Connector</em> Thruway service.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-body rounded border h-100">
                                    <span class="badge bg-success font-monospace mb-1">ERA 3 // POST-COVID (2020–2021+)</span>
                                    <h4 class="h6 fw-bold mb-1">The Blue Ridge Go-Card, MagnaByte Express Mode, &amp; POP</h4>
                                    <p class="mb-0 text-body-secondary">
                                        Following the COVID-19 pandemic, Blue Ridge Transit, Bluewater Transit, and RVT retired visual ID flashing and launched the contactless <strong>Blue Ridge Go-Card</strong> (while Radford Transit went permanently 100% fare-free). Embedded directly into new <strong>CPI PolyPasses</strong>, Galax CC IDs, and Carroll County IDs—and supporting <strong>MagnaPhone / MagnaWatch Express Transit Mode</strong> (tap without waking) and open-loop bank cards—the Go-Card automates daily/30-day fare capping, upgrade pricing, and <strong>GPS + Tap-Off zone billing</strong> on the northbound <em>Maroon Express</em> (charging `$1.00` for local Exit 14 hops vs. `$5.00` interstate). One year later, BT installed rear-door validators on 40'/60' buses for all-door <strong>Proof of Payment (POP)</strong> boarding.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-body rounded border h-100">
                                    <span class="badge bg-info text-dark font-monospace mb-1">ERA 4 // FUTURE RAIL EXTENSION</span>
                                    <h4 class="h6 fw-bold mb-1">ARTS Rail Reaches Christiansburg Transit Center</h4>
                                    <p class="mb-0 text-body-secondary">
                                        When <strong>ARTS</strong> extends passenger rail south from Roanoke toward Bristol, the <strong>Christiansburg Transit Center</strong> (with its multi-level VDOT garage, bus bays, and passenger rail station) is completed on the footprint of the <strong>Falling Branch Park &amp; Ride (Exit 118)</strong>. With trains stopping directly at Christiansburg Transit Center, RVT's special Thruway <em>Train Connector</em> is retired while regular Mon–Sat <em>Roanoke Express</em> service continues.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [SECTION 2] The Christiansburg Transit Center at Falling Branch (Exit 118) -->
            <div class="mb-5" id="christiansburg-transit-center">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 border-bottom pb-2 mb-3">
                    <h2 class="h3 fw-bold mb-0" style="color: var(--cpi-maroon, #630031);">
                        <i class="fa-duotone fa-warehouse-full me-2"></i>2. The Christiansburg Transit Center at Falling Branch (Exit 118)
                    </h2>
                    <span class="badge bg-warning text-dark font-monospace">VDOT OWNED &amp; OPERATED</span>
                </div>

                <p class="text-body mb-3">
                    Monday through Friday, the <strong>Christiansburg Transit Center at Falling Branch</strong> (located directly at <strong>I-81 Exit 118</strong>) functions as a high-volume regional park-and-ride and commuter transfer hub. On Forgers Football Saturdays, however, it reveals its true engineering purpose: a massive, purpose-built <strong>freeway intercept terminal</strong> designed to absorb up to <strong>14,400 spectators</strong> before their automobiles ever enter the Town of Blacksburg.
                </p>

                <!-- Key Facility Metrics -->
                <div class="row g-3 my-3 text-center">
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body-tertiary rounded border shadow-sm h-100">
                            <div class="display-6 fw-bold font-monospace" style="color: var(--cpi-maroon, #630031);">8</div>
                            <div class="small fw-bold text-uppercase text-body-secondary">Garage Levels</div>
                            <div class="small text-muted" style="font-size: 0.75rem;">Level 1 Transit Concourse + 7 Upper Decks</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body-tertiary rounded border shadow-sm h-100">
                            <div class="display-6 fw-bold font-monospace" style="color: var(--cpi-maroon, #630031);">6,000</div>
                            <div class="small fw-bold text-uppercase text-body-secondary">Parking Spaces</div>
                            <div class="small text-muted" style="font-size: 0.75rem;">~12,000–14,400 Fans (@ 2.4/car)</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body-tertiary rounded border shadow-sm h-100">
                            <div class="display-6 fw-bold font-monospace text-success">$0</div>
                            <div class="small fw-bold text-uppercase text-body-secondary">Parking &amp; Shuttle</div>
                            <div class="small text-muted" style="font-size: 0.75rem;">100% Free on Game Days ("Load &amp; GO!")</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body-tertiary rounded border shadow-sm h-100">
                            <div class="display-6 fw-bold font-monospace text-warning">8 Bays</div>
                            <div class="small fw-bold text-uppercase text-body-secondary">60' Artic Loading</div>
                            <div class="small text-muted" style="font-size: 0.75rem;">Simultaneous Boarding + Staging Yard</div>
                        </div>
                    </div>
                </div>

                <!-- Asymmetric WSDOT-Style Ramp Architecture -->
                <div class="card bg-body-tertiary shadow-sm my-4 border-start border-5 border-info">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-2">
                            <i class="fa-duotone fa-bridge-suspension me-2 text-info"></i>WSDOT-Style Asymmetric Freeway Geometry: Why the Bus Beats the Car
                        </h3>
                        <p class="mb-3">
                            Inspired by Pacific Northwest transit-priority freeway interchanges, VDOT and CPI engineered the Christiansburg Transit Center with <strong>intentionally asymmetric highway ramps</strong> to answer a simple question: <em>"Why should I park here at Exit 118 instead of driving another few miles into Blacksburg?"</em>
                        </p>
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <ul class="mb-0 small text-body" style="line-height: 1.7;">
                                    <li class="mb-2">
                                        <strong>Direct I-81 Ramps (All Vehicles):</strong> High-capacity flyover ramps lead directly from <strong>I-81 North and South</strong> straight into the 8-level, 6,000-space garage. Motorists exit the interstate and park without hitting a single surface traffic light—and after the game, discharge directly back onto I-81 North or South.
                                    </li>
                                    <li class="mb-2">
                                        <strong>Direct US-460 Transit Flyover (<code>BUSES ONLY</code>):</strong> If a driver decides to keep driving toward Blacksburg, they cannot use the facility's direct high-speed connector. The grade-separated flyover ramp linking the ground-floor <strong>8-bay BRT Terminal</strong> to the <strong>US-460 Bypass</strong> is strictly restricted to <strong>Blue Ridge Transit</strong> and regional partner coaches.
                                    </li>
                                    <li class="mb-0">
                                        <strong>The Southgate Drive Golden Road:</strong> Where US-460 meets the CPI campus, <strong>Virginia State Police</strong> physically close <strong>Southgate Drive</strong> to private automobiles on game days—turning the entire arterial into an exclusive, signal-prioritized expressway for 60-foot BRT articulated shuttles straight to the gates of <strong>The Crucible</strong>.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <pre class="bg-dark text-light p-3 rounded font-monospace small mb-0 shadow-inner" style="font-size: 0.75rem; line-height: 1.35; overflow-x: auto;">
                 I-81 (NORTH ↕ SOUTH)
                          │
         ┌────────────────┴────────────────┐
         │   DIRECT FREEWAY FLYOVER RAMPS  │
         │    ALL VEHICLES ($0 FREE PARK)  │
         ▼                                 ▲
┌───────────────────────────────────────────────────┐
│  CHRISTIANSBURG TRANSIT CENTER AT FALLING BRANCH  │
│      VDOT 8-Level Garage  •  6,000 Car Spaces     │
└─────────────────────────┬─────────────────────────┘
                          │ Pedestrian Concourse
                          ▼
┌───────────────────────────────────────────────────┐
│        BLUE RIDGE TRANSIT (BRT) 8-BAY HUB         │
│   Bays 1–8: 60' Prairie Coachworks Artics + Yard  │
│    Signs: "FALLING BRANCH P&amp;R" ↔ "GO FORGERS!"    │
└─────────────────────────┬─────────────────────────┘
                          │
                 BUSES ONLY FLYOVER
             (No Private Cars Permitted)
                          │
                          ▼
                   US-460 BYPASS
                          │
                          ▼
                  SOUTHGATE DRIVE
       (State Police: BRT Artics Straight Thru)
                          │
                          ▼
                    THE CRUCIBLE</pre>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="h5 fw-bold mt-4 mb-2" style="color: var(--cpi-maroon, #630031);">
                    <i class="fa-duotone fa-bolt-lightning me-2"></i>Game-Day "Load and GO!" Operations
                </h3>
                <p class="text-body mb-0">
                    For a marquee Saturday night clash like the <em>Coal &amp; Iron War</em>, VDOT overhead matrix signs on I-81 begin flashing <code>CHRISTIANSBURG TRANSIT CENTER: GARAGE 82% FULL</code> by mid-afternoon, and <code>GARAGE FULL / USE ALTERNATE LOT</code> hours before kickoff. Down on Level 1, the bus terminal operates completely separated from automobile circulation. Eight 60-foot Prairie Coachworks articulated buses stage across Bays 1–8 with their overhead amber LED signs flipping between <code>CRUCIBLE SHUTTLE</code> / <code>FALLING BRANCH P&amp;R</code> and <code>GO FORGERS!</code>. There are no fareboxes, no PolyPass taps, and no paper tickets—just <strong>Load and GO!</strong> As soon as ~100 fans crush-load an artic, the doors close, the dispatcher releases it onto the bus-only US-460 ramp, and the next 60-footer rolls immediately into the bay.
                </p>
            </div>

            <!-- [SECTION 3] The Great CPI Parking Paradox ("The $150 Arrogance Tax") -->
            <div class="mb-5" id="parking-paradox">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 border-bottom pb-2 mb-3">
                    <h2 class="h3 fw-bold mb-0" style="color: var(--cpi-maroon, #630031);">
                        <i class="fa-duotone fa-traffic-cone me-2"></i>3. The Great CPI Parking Paradox ("The $150 Arrogance Tax")
                    </h2>
                    <span class="badge bg-danger text-white font-monospace">POSTGAME EVACUATION PHYSICS</span>
                </div>

                <p class="fs-5 text-body mb-3">
                    Every season, an arrogant visiting fan or first-time VIP scoffs at the idea of parking at Falling Branch—declaring <em>"I'm not riding a bus with the riffraff; we're parking right by the stadium"</em>—and happily pays <strong>$150</strong> for a single-game pass beside The Crucible.
                </p>
                <p class="text-body mb-4">
                    What that visitor fails to read is the fine print on the back of every CPI Athletics hangtag—a clause that CPI's Parking &amp; Transportation office cheerfully points to when angry emails arrive on Monday morning:
                </p>

                <!-- Official CPI Parking Disclaimer Callout -->
                <div class="alert alert-warning shadow-sm border-start border-5 border-warning p-4 mb-4 font-monospace">
                    <div class="fw-bold text-uppercase small mb-1">
                        <i class="fa-solid fa-gavel me-2"></i>Commonwealth Polytechnic Institute — Game-Day Parking Terms &amp; Conditions
                    </div>
                    <p class="mb-0 fst-italic">
                        "Game-day parking fees reserve a vehicle parking space only. Parking location near The Crucible does not provide, guarantee, or imply priority departure from campus following athletic events."
                    </p>
                </div>

                <p class="text-body mb-4">
                    In short: <strong>$150 buys a 500-yard walk to your car—and places your automobile at the exact geographic center of a 65,000-person pedestrian and vehicular bottleneck.</strong> When the game clock hits <code>0:00</code>, the Commonwealth treats postgame traffic like an industrial evacuation grid:
                </p>

                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 bg-body-tertiary border-danger border-top border-4 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase text-danger mb-2">
                                    <i class="fa-solid fa-ban me-2"></i>1. The $150 Stadium Lot Trap
                                </h3>
                                <p class="small text-body mb-0">
                                    Mr. $150 reaches his luxury SUV in three minutes, starts the engine, and backs out—only to sit motionless for 90 minutes close enough to The Crucible to hear the empty bleachers being pressure-washed. Every intersection around the stadium is converted to outbound-only police control. When his GPS says <em>"Turn left toward Southgate,"</em> a Virginia State Trooper points at a barricade and waves him north toward <strong>Prices Fork Road</strong>, where central campus lots are slowly metered into the outbound funnel.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 bg-body-tertiary border-warning border-top border-4 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase text-warning-emphasis mb-2">
                                    <i class="fa-solid fa-traffic-light-stop me-2"></i>2. The "South Main Street" Illusion
                                </h3>
                                <p class="small text-body mb-0">
                                    Inevitably, thousands of motorists think: <em>"US-460 Bypass is going to be jammed; I'll outsmart everybody and take South Main Street (Business 460) through town to Christiansburg!"</em> Unfortunately, 20,000 other motorists attended the same seminar on clever shortcuts. Unlike limited-access US-460, South Main Street is a municipal arterial with traffic signals, side streets, businesses, and pedestrian crosswalks—turning a "shortcut" into a bumper-to-bumper crawl.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 bg-body-tertiary border-success border-top border-4 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-uppercase text-success mb-2">
                                    <i class="fa-solid fa-bus-simple me-2"></i>3. The Falling Branch Advantage
                                </h3>
                                <p class="small text-body mb-0">
                                    Transit riders experience <em>passenger</em> queuing at the stadium barriers rather than <em>vehicle</em> gridlock. Four 60-foot artics pull up simultaneously (`FALLING BRANCH P&amp;R` / `GO FORGERS!`), swallow 400 fans at a time, and are waved straight down bus-only <strong>Southgate Drive</strong> by State Troopers onto US-460 and the bus-only ramp into the Christiansburg Transit Center—moving 12,000+ people <em>outside</em> the Blacksburg traffic zone before turning them back into motorists right beside I-81.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4-Tier CPI Game-Day Parking Comparison Table -->
                <div class="table-responsive shadow-sm rounded border mb-4">
                    <table class="table table-hover align-middle mb-0">
                        <thead style="background-color: var(--cpi-maroon, #630031); color: #fff;">
                            <tr>
                                <th scope="col" class="py-3 ps-3">Game-Day Option</th>
                                <th scope="col" class="py-3">Fee</th>
                                <th scope="col" class="py-3">Walk to Stadium</th>
                                <th scope="col" class="py-3 pe-3">Postgame Departure Reality</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold ps-3">Close CPI Stadium Lot</td>
                                <td class="font-monospace text-danger fw-bold">$150</td>
                                <td>Very short (~500 yds)</td>
                                <td class="small pe-3"><strong>Horrendous vehicle queue:</strong> Barricaded from Southgate Drive; metered slowly north toward Prices Fork Rd while BRT buses sail past.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold ps-3">General CPI Campus Lot</td>
                                <td class="font-monospace text-warning-emphasis fw-bold">$100</td>
                                <td>Moderate</td>
                                <td class="small pe-3"><strong>Heavy automobile congestion:</strong> Subject to mandatory police outbound corridors and intersection metering.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold ps-3">Outer CPI Perimeter Lot</td>
                                <td class="font-monospace fw-bold">$75</td>
                                <td>Longer (15–20 min)</td>
                                <td class="small pe-3"><strong>Better positioned, still congested:</strong> Closer to outer arterials, but merges into heavy US-460 automobile volume.</td>
                            </tr>
                            <tr class="table-success">
                                <td class="fw-bold ps-3">
                                    Christiansburg Transit Center<br>
                                    <span class="badge bg-dark font-monospace mt-1">FALLING BRANCH — EXIT 118</span>
                                </td>
                                <td class="font-monospace text-success fw-bold">FREE ($0)</td>
                                <td><strong>FREE Crucible Shuttle</strong></td>
                                <td class="small pe-3"><strong>High-capacity passenger queue &rarr; Priority Escape:</strong> 60' BRT artics bypass car traffic via bus-only Southgate Dr &rarr; US-460 &rarr; Bus-Only Ramp &rarr; 6,000-car garage &rarr; Direct I-81 North/South ramps.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Comedic Dialogue Vignette -->
                <div class="card bg-body-tertiary border-0 shadow-sm p-4">
                    <h3 class="h6 fw-bold text-uppercase mb-3 font-monospace" style="color: var(--cpi-maroon, #630031);">
                        <i class="fa-duotone fa-comments me-2"></i>Overheard in the 4th Quarter: The Veteran vs. The $150 Visitor
                    </h3>
                    <div class="row g-3 align-items-center small font-monospace">
                        <div class="col-md-6 border-end-md">
                            <p class="mb-1"><strong>Veteran Forger Fan:</strong> "Where'd you park?"</p>
                            <p class="mb-1"><strong>Visiting Fan:</strong> "Right beside The Crucible. Paid a hundred and fifty bucks. I don't do buses."</p>
                            <p class="mb-1"><strong>Veteran Forger Fan:</strong> "Oof."</p>
                            <p class="mb-1"><strong>Visiting Fan:</strong> "What do you mean, <em>'oof'</em>?"</p>
                            <p class="mb-0"><strong>Veteran Forger Fan:</strong> "Nothing. Go Forgers."</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2 text-body-secondary fst-italic">Ninety minutes later, in a motionless line of brake lights near Prices Fork Road, as a fourth consecutive 60-foot Prairie Coachworks articulated bus sails past with its amber LED sign flipping from <code>FALLING BRANCH P&amp;R</code> to <code>GO FORGERS!</code>:</p>
                            <p class="mb-0 fw-bold text-danger"><strong>Visiting Fan:</strong> "WHY ARE THOSE BUSES MOVING AND WE AREN'T?!"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [SECTION 4] Cross-Universe Transit Connections -->
            <div class="alert alert-info border-info-subtle text-info-emphasis shadow-sm p-4 mb-4">
                <h3 class="h6 fw-bold text-uppercase mb-2">
                    <i class="fa-duotone fa-book-sparkles me-2"></i>Cross-Universe Narrative Connections: From Exit 98 to Progress Street
                </h3>
                <ul class="small mb-0" style="line-height: 1.7;">
                    <li class="mb-1">
                        <strong><em>Amaya, Justin, &amp; Meredith Hayes (Exit 98 / Justin's Station):</em></strong> Twenty miles south of Falling Branch at <strong>I-81 Exit 98</strong> sits the 566-acre <em>New River Vocational Rehabilitation Center</em> and the cashless <strong>Justin's Station</strong> convenience store. When Justin Hayes and his 20-woman protective phalanx (<em>The Wall of 20</em>) board the 6:30 AM <strong>Bluewater Transit Maroon Express</strong> at Exit 98's sawtooth bays, they consume 21 of the 49 coach seats plus the ADA securement bay—creating a legendary morning bottleneck downstream at Falling Branch that forces late-arriving CPI students onto the 45-minute local Route 1 articulated buses.
                    </li>
                    <li class="mb-1">
                        <strong><em>Paige, Freddie, &amp; Jessica (105 Pepper Street):</em></strong> Living along the Pepper Street corridor in Blacksburg, the trio utilizes CPI's <strong>Summer Session II</strong> enrollment loophole (`HPE 204`) to activate their <strong>PolyPass</strong> IDs two months ahead of the Fall semester, giving them fare-free access to BRT's air-conditioned low-floor buses all summer long.
                    </li>
                    <li class="mb-0">
                        <strong><em>The Stardust Engine (<a href="/engine-room/artists/stardust-engine/discography/2003-mile-marker-98" class="alert-link">Mile Marker 98</a> &amp; <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="alert-link">Progress Street</a>):</em></strong> After spending their college years loading gear onto Blue Ridge Transit Route 1—and after Ryan's 1990 paralysis made low-floor ADA transit ramps a sacred lifeline—the band commissioned their own custom 30-foot <strong>2004 Prairie Coachworks RLFD30</strong> low-floor shuttle bus for the cover of 2004's <em>Progress Street</em>.
                    </li>
                </ul>
            </div>

            <!-- [NAVIGATION] Sequential Chapter Stepper -->
            <?php include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php'; ?>

        </div>
    </div>

</div>

