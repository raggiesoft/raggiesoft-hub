<?php
/**
 * ============================================================================
 * ARCHITECTURE & LORE SYSTEM
 * ============================================================================
 * File: pages/engine-room/corporate/strategic-assets/the-iron-horse.php
 * Entity: Stardust Strategic Assets, LLC (Wholly-owned subsidiary of Stardust Properties, LLC)
 * Component Type: Corporate Infrastructure & Band Lore Archive
 *
 * 1. Lore Context:
 *    - Documents the accessible touring and regional shuttle fleet of The Stardust Engine:
 *      a) 2002 Sainte-Claire 45H3 ("The Iron Horse") — 45-foot high-deck tri-axle interstate
 *         motorcoach built in Sainte-Claire, Québec, featuring a custom mid-ship 60-inch
 *         vertical hydraulic wheelchair lift.
 *      b) 2004 Prairie Coachworks RLFD30 ("Progress Street Launch Coach") — 30-foot Restyled
 *         Low-Floor Diesel single-unit shuttle bus (for which the band served as the 2004
 *         launch customer), featuring a front-door-only executive layout, kneeling air
 *         suspension, and a front flip-out ADA ramp for curb-level boarding in Blacksburg.
 *    - Explains the CDL Family Protocol: Following the December 1990 I-81 van crash that
 *      paralyzed Ryan O'Connell (T10), Holly O'Connell, Evan Wright, and Tyler Wright all
 *      earned Class A Commercial Driver's Licenses (CDL) with Passenger (P) and Airbrake
 *      endorsements so no outside driver would ever transport Ryan again.
 *    - Details the 2004–2015 Corporate Diversification: Both coaches were originally
 *      purchased cash-in-full by Engine Room Records, LLC (2002 and 2004). When the band
 *      signed off after 2004's "Progress Street" to recover from burnout, Holly O'Connell
 *      systematically spun off the physical real estate and heavy fleet into "Stardust
 *      Strategic Assets, LLC" (completed by the 2015 Delaware Migration) to firewall the
 *      master recordings from highway and operational liability.
 *
 * 2. UI/UX & Component Architecture:
 *    - Uses adaptive Bootstrap 5 cards and tables for WCAG-compliant light/dark rendering.
 *    - Links directly to the 2002 Sainte-Claire negotiation/delivery sub-archives, the
 *      2004 "Progress Street" album archive, the 2015 Corporate Structure map, and
 *      Justin Miller's Fleet Command T-Logistics terminal.
 * ============================================================================
 */

$pageTitle = "The Iron Horse & Fleet Archive - Stardust Strategic Assets, LLC";
?>

<style>
    /* Scoped styling for Fleet Dossier cards and specification tables */
    .fleet-card {
        background-color: var(--bs-body-tertiary);
        border: 1px solid var(--bs-border-color);
        transition: transform 0.2s ease, border-color 0.2s ease;
    }

    @media (prefers-reduced-motion: no-preference) {
        .fleet-card:hover {
            transform: translateY(-4px);
            border-color: var(--bs-primary);
        }
    }

    .fleet-spec-table th {
        font-family: 'Courier New', monospace;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--bs-secondary-color);
        width: 38%;
    }

    .fleet-spec-table td {
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
    }
</style>

<div class="container py-5">

    <!-- =====================================================================
         SECTION 1: PAGE HEADER & CORPORATE PROVENANCE BANNER
         ===================================================================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                <span class="badge bg-secondary text-white border border-secondary-subtle rounded-pill px-3 py-2">
                    <i class="fa-duotone fa-chess-rook me-2"></i>Stardust Strategic Assets, LLC
                </span>
                <span class="badge bg-info text-dark border border-info-subtle rounded-pill px-3 py-2">
                    <i class="fa-duotone fa-bus me-2"></i>Heavy Touring &amp; Shuttle Division
                </span>
                <span class="badge bg-success text-white rounded-pill px-3 py-2">
                    <i class="fa-solid fa-check-double me-2"></i>Titles Clear // 100% Debt-Free
                </span>
            </div>

            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                The Iron Horse &amp; Fleet Archive
            </h1>
            <p class="lead text-body-secondary font-monospace mb-4">
                Engineered for Autonomy // Driven by Family // Firewalled by Law
            </p>

            <!-- Corporate Provenance Alert (2004-2015 Restructuring Lore) -->
            <div class="card border-primary border-start border-4 bg-body-tertiary shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <i class="fa-duotone fa-sitemap text-primary fs-2 me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold text-uppercase text-primary mb-2">
                                Corporate Provenance: The 2004&ndash;2015 Diversification
                            </h5>
                            <p class="text-body-secondary small mb-2">
                                When <strong>The Stardust Engine</strong> commissioned their 2002 <em>Sainte-Claire 45H3</em> and 2004 <em>Prairie Coachworks RLFD30</em>, both coaches were originally purchased cash-in-full by <strong>Engine Room Records, LLC</strong>—which at the time served as the family's single all-purpose operating company.
                            </p>
                            <p class="text-body-secondary small mb-3">
                                After the band signed off at the conclusion of 2004's <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="fw-bold">Progress Street</a> to recover from severe touring burnout, CEO <a href="/engine-room/artists/stardust-engine/band/holly-oconnell" class="fw-bold">Holly O'Connell</a> spent the 2004&ndash;2015 hiatus systematically unbundling the label into a fortress of specialized entities. Realizing that a single highway accident involving a 45,000-pound motorcoach could expose the band's master recordings to catastrophic litigation, Holly spun off the physical properties and heavy fleet into <strong>Stardust Strategic Assets, LLC</strong> (a subsidiary of <strong>Stardust Properties, LLC</strong>), completing the anonymous corporate web in the <a href="/engine-room/artists/stardust-engine/story/2015-delaware-migration" class="fw-bold">2015 Delaware Migration</a>.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="/engine-room/corporate/structure" class="btn btn-sm btn-outline-primary text-uppercase fw-bold font-monospace">
                                    <i class="fa-duotone fa-sitemap me-1"></i>View 2015 Corporate Structure Map
                                </a>
                                <a href="/engine-room/corporate/strategic-assets" class="btn btn-sm btn-outline-secondary text-uppercase fw-bold font-monospace">
                                    <i class="fa-duotone fa-chess-rook me-1"></i>Stardust Strategic Assets HQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================================
         SECTION 2: UNIT SE-01 — 2002 SAINTE-CLAIRE 45H3 ("THE IRON HORSE")
         ===================================================================== -->
    <div class="row justify-content-center mb-5" id="sainte-claire-45h3">
        <div class="col-lg-10">
            <div class="card fleet-card shadow-lg overflow-hidden border-top border-4 border-info">
                <div class="card-header bg-dark text-white d-flex flex-wrap justify-content-between align-items-center py-3 px-4">
                    <div>
                        <span class="badge bg-info text-dark font-monospace me-2">INTERSTATE FLAGSHIP</span>
                        <strong class="text-uppercase letter-spacing-1">2002 Sainte-Claire 45H3 &mdash; "The Iron Horse"</strong>
                    </div>
                    <span class="font-monospace small text-info">ORIGIN: SAINTE-CLAIRE, QU&Eacute;BEC</span>
                </div>

                <!-- High-Resolution Vehicle Reference Image -->
                <div class="bg-black text-center border-bottom border-secondary">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/fleet/2002-sainte-claire-45h3-iron-horse.jpg"
                         class="img-fluid w-100 object-fit-cover"
                         style="max-height: 540px;"
                         alt="2002 Sainte-Claire 45H3 'The Iron Horse' 45-foot tri-axle luxury tour bus in Obsidian Midnight with Cosmic Nebula side wrap, Rocket-and-Gear crest, and mid-ship vertical hydraulic wheelchair lift deployed to the pavement.">
                </div>

                <div class="card-body p-4 p-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <h2 class="h3 fw-bold text-uppercase text-body-emphasis mb-3">
                                The Interstate Fortress (60-Inch Vertical Hydraulic Lift)
                            </h2>
                            <p class="text-body-secondary">
                                Commissioned on March 14, 2002, during the band's sold-out <em>Trans-Canada Tour</em> in Montréal, <strong>"The Iron Horse"</strong> is a ground-up custom 45-foot high-deck tri-axle entertainer coach built by <strong>Sainte-Claire Coachworks</strong> in Québec.
                            </p>
                            <p class="text-body-secondary">
                                Because a high-deck interstate cruiser places the main living floor 60 inches above the pavement to accommodate massive underfloor luggage and equipment bays, Ryan O'Connell could not board via a conventional ramp. Holly O'Connell presented the Québécois engineering team—in flawless French—with structural schematics for a 400-pound commercial hydraulic cassette platform lift integrated directly into a full-height mid-ship accessibility door.
                            </p>
                            <p class="text-body-secondary mb-4">
                                Impressed by the family's humility and engineering rigor (and disgusted by an American pop star demanding a rooftop Jacuzzi that compromised frame rigidity), Sainte-Claire's VP of Sales moved The Stardust Engine to Bay 1. Wrapped in the band's signature <strong>Cosmic Nebula</strong> violet, cyan, and amber stardust livery over Obsidian Midnight paint, <em>The Iron Horse</em> gave Ryan total autonomy across North America's interstates.
                            </p>

                            <!-- Links to the 2002 Sainte-Claire Lore Chapters -->
                            <div class="d-flex flex-wrap gap-2">
                                <a href="/engine-room/assets/iron-horse/negotiation" class="btn btn-info text-dark fw-bold text-uppercase small">
                                    <i class="fa-duotone fa-handshake me-2"></i>Part I: The Sainte-Claire Protocol (Mar 2002)
                                </a>
                                <a href="/engine-room/assets/iron-horse/delivery" class="btn btn-outline-info fw-bold text-uppercase small">
                                    <i class="fa-duotone fa-elevator me-2"></i>Part II: The First Lift &amp; Delivery (Jun 2002)
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="p-3 bg-body rounded border border-secondary-subtle h-100">
                                <h6 class="fw-bold text-uppercase font-monospace border-bottom pb-2 mb-3 text-info">
                                    <i class="fa-duotone fa-clipboard-list me-2"></i>Technical Dossier: 45H3
                                </h6>
                                <table class="table table-sm table-borderless fleet-spec-table mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Manufacturer</th>
                                            <td>Sainte-Claire Coachworks (QC)</td>
                                        </tr>
                                        <tr>
                                            <th>Model / Platform</th>
                                            <td>2002 45H3 High-Deck VIP (45 ft)</td>
                                        </tr>
                                        <tr>
                                            <th>Axle Config</th>
                                            <td>Tri-Axle (Steer + Drive + Tag)</td>
                                        </tr>
                                        <tr>
                                            <th>ADA Boarding</th>
                                            <td>Mid-Ship 60" Vertical Hydraulic Lift</td>
                                        </tr>
                                        <tr>
                                            <th>Interior Layout</th>
                                            <td>Zero-Threshold 36" Corridor + Mobile Studio</td>
                                        </tr>
                                        <tr>
                                            <th>Livery</th>
                                            <td>Obsidian Midnight / Cosmic Nebula</td>
                                        </tr>
                                        <tr>
                                            <th>Acquisition</th>
                                            <td>Paid Cash (June 2, 2002)</td>
                                        </tr>
                                        <tr>
                                            <th>Holding Entity</th>
                                            <td>Stardust Strategic Assets, LLC</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================================
         SECTION 3: UNIT SE-02 — 2004 PRAIRIE COACHWORKS RLFD30
         ===================================================================== -->
    <div class="row justify-content-center mb-5" id="prairie-coachworks-rlfd30">
        <div class="col-lg-10">
            <div class="card fleet-card shadow-lg overflow-hidden border-top border-4 border-warning">
                <div class="card-header bg-dark text-white d-flex flex-wrap justify-content-between align-items-center py-3 px-4">
                    <div>
                        <span class="badge bg-warning text-dark font-monospace me-2">2004 LAUNCH CUSTOMER</span>
                        <strong class="text-uppercase letter-spacing-1">2004 Prairie Coachworks RLFD30 &mdash; "Progress Street Shuttle"</strong>
                    </div>
                    <span class="font-monospace small text-warning">HEADSIGN: PROGRESS STREET // THE STARDUST ENGINE</span>
                </div>

                <!-- High-Resolution Vehicle Reference Image -->
                <div class="bg-black text-center border-bottom border-secondary">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/fleet/2004-prairie-coachworks-rlfd30.jpg"
                         class="img-fluid w-100 object-fit-cover"
                         style="max-height: 540px;"
                         alt="2004 Prairie Coachworks RLFD30 30-foot Restyled Low-Floor shuttle bus parked on Progress Street NW with open front doors, deployed aluminum low-floor ADA wheelchair ramp, Cosmic Nebula side wrap, and glowing amber LED destination signs reading PROGRESS STREET and THE STARDUST ENGINE.">
                </div>

                <div class="card-body p-4 p-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <h2 class="h3 fw-bold text-uppercase text-body-emphasis mb-3">
                                The Low-Floor Blacksburg Cruiser (Kneeling Curb Ramp)
                            </h2>
                            <p class="text-body-secondary">
                                While the 45-foot <em>Sainte-Claire 45H3</em> was built to cross continents, maneuvering a towering tri-axle highway liner down tight residential streets like <strong>Progress Street NW</strong> or through the campus turns of <strong>Commonwealth Polytechnic Institute (CPI)</strong>—and waiting several minutes to deploy a heavy 60-inch vertical hydraulic lift for a quick local trip—was impractical.
                            </p>
                            <p class="text-body-secondary">
                                In early 2004, while recording their homecoming album <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="fw-bold">Progress Street</a>, The Stardust Engine became the very first <strong>launch customer</strong> for <strong>Prairie Coachworks'</strong> newly restyled 30-foot low-floor platform: the <strong>2004 RLFD30</strong> (Restyled Low-Floor Diesel, 30-Foot).
                            </p>
                            <p class="text-body-secondary mb-4">
                                Built as a single-door executive day-coach (deleting the rear transit exit door in favor of continuous dark-tinted acoustic lounge glass), the RLFD30 uses pneumatic kneeling suspension and a simple front flip-out aluminum ADA ramp. Inspired by the family's fond memories of riding <strong>Blue Ridge Transit's Route 1</strong> along Main Street and Progress Street during their CPI student years, Ryan can roll straight off the Blacksburg sidewalk and into the cabin in five seconds flat.
                            </p>

                            <div class="d-flex flex-wrap gap-2">
                                <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="btn btn-warning text-dark fw-bold text-uppercase small">
                                    <i class="fa-duotone fa-compact-disc me-2"></i>View Progress Street (2004) Album Lore
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="p-3 bg-body rounded border border-secondary-subtle h-100">
                                <h6 class="fw-bold text-uppercase font-monospace border-bottom pb-2 mb-3 text-warning">
                                    <i class="fa-duotone fa-clipboard-list me-2"></i>Technical Dossier: RLFD30
                                </h6>
                                <table class="table table-sm table-borderless fleet-spec-table mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Manufacturer</th>
                                            <td>Prairie Coachworks</td>
                                        </tr>
                                        <tr>
                                            <th>Model / Platform</th>
                                            <td>2004 RLFD30 (30 ft Low-Floor)</td>
                                        </tr>
                                        <tr>
                                            <th>Production Note</th>
                                            <td>Launch Customer #001 (2004)</td>
                                        </tr>
                                        <tr>
                                            <th>Door Config</th>
                                            <td>Front Boarding Only (No Rear Door)</td>
                                        </tr>
                                        <tr>
                                            <th>ADA Boarding</th>
                                            <td>Pneumatic Kneel + Flip-Out Front Ramp</td>
                                        </tr>
                                        <tr>
                                            <th>LED Headsigns</th>
                                            <td>Luminator Amber Matrix (PROGRESS STREET)</td>
                                        </tr>
                                        <tr>
                                            <th>Album Appearances</th>
                                            <td><em>Progress Street</em> (2004 Cover &amp; Tracks 2, 11)</td>
                                        </tr>
                                        <tr>
                                            <th>Holding Entity</th>
                                            <td>Stardust Strategic Assets, LLC</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================================
         SECTION 4: THE CLASS A CDL FAMILY PROTOCOL
         ===================================================================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-body-tertiary border-danger border-start border-4 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <span class="badge bg-danger text-white text-uppercase font-monospace mb-2">
                                <i class="fa-solid fa-id-card me-1"></i>Post-1990 Security &amp; Safety Mandate
                            </span>
                            <h3 class="h4 fw-bold text-uppercase text-body-emphasis mb-3">
                                The CDL Protocol: Why No Outsider Ever Drives the Bus
                            </h3>
                            <p class="text-body-secondary">
                                Following the <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="fw-bold">December 10, 1990 crash on Interstate 81</a> that left Ryan O'Connell with a complete T10 spinal cord injury, the family instituted an unbreakable operational rule: <strong>no hired commercial driver would ever hold their lives in their hands again.</strong>
                            </p>
                            <p class="text-body-secondary mb-0">
                                Before taking delivery of heavy coaches, <strong>Holly O'Connell</strong>, <strong>Evan Wright</strong>, and <strong>Tyler Wright</strong> all completed commercial heavy-vehicle training and earned their <strong>Class A Commercial Driver's Licenses (CDL)</strong> with full <strong>Passenger (P)</strong> and <strong>Airbrake</strong> endorsements. Whether piloting the 45-foot <em>Sainte-Claire 45H3</em> across Canada or kneeling the 30-foot <em>Prairie Coachworks RLFD30</em> at the curb on Progress Street NW, a member of the family is always in the driver's seat.
                            </p>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="p-3 bg-dark text-white rounded border border-secondary font-monospace small">
                                <div class="text-warning fw-bold text-uppercase border-bottom border-secondary pb-2 mb-2">
                                    <i class="fa-duotone fa-steering-wheel me-2"></i>Authorized CDL Operators
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i><strong>Tyler Wright:</strong> Class A CDL (P, Airbrake) &mdash; Primary Interstate Operator
                                    </li>
                                    <li class="mb-2">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i><strong>Evan Wright:</strong> Class A CDL (P, Airbrake) &mdash; Co-Captain / Night Shift
                                    </li>
                                    <li class="mb-0">
                                        <i class="fa-solid fa-circle-check text-success me-2"></i><strong>Holly O'Connell:</strong> Class A CDL (P, Airbrake) &mdash; Relief &amp; Tactical Operator
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================================================================
         SECTION 5: CROSS-LINKS TO LIVE FLEET TERMINAL & ARCHIVES
         ===================================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex flex-wrap justify-content-between align-items-center p-4 bg-dark text-white rounded shadow-sm border border-secondary">
                <div class="mb-3 mb-md-0">
                    <h5 class="fw-bold text-uppercase text-info mb-1">
                        <i class="fa-solid fa-terminal me-2"></i>Stardust Logistics // T-Net Live Terminal
                    </h5>
                    <p class="small text-white-50 mb-0 font-monospace">
                        View real-time telemetry, 2018 "Sovereign" flagship status, and POV security bulletins managed by Justin Miller.
                    </p>
                </div>
                <div class="d-flex gap-2">
                    <a href="/engine-room/corporate/fleet" class="btn btn-info text-dark fw-bold text-uppercase font-monospace small">
                        <i class="fa-solid fa-satellite-dish me-2"></i>Launch Fleet Command TUI
                    </a>
                    <a href="/engine-room/corporate/structure" class="btn btn-outline-light text-uppercase font-monospace small">
                        <i class="fa-duotone fa-sitemap me-2"></i>Return to Org Chart
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

