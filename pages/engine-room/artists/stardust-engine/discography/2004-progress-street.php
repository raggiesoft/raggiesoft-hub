<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/discography/2004-progress-street.php
 *
 * 1. Lore Context:
 *    - Main album lore and liner notes page for "Progress Street" (2004) by The Stardust Engine.
 *    - Recorded at the O'Connell family home on Progress Street NW in Blacksburg, Virginia,
 *      this album represents the full-blooded 1980s Album-Oriented Rock (AOR) and stadium
 *      synth-rock record that Apex Records never allowed the band to make in 1987.
 *    - Serves as the emotional capstone of the band's 2001-2004 creative sprint (three studio
 *      albums in under two years) before physical and emotional exhaustion prompted their
 *      2004-2014 Burnout Hiatus.
 *    - Features key in-universe documentary lore:
 *      a) Becoming the 2004 launch customer for Prairie Coachworks with a custom 30-foot
 *         RLFD30 low-floor ADA shuttle coach driven by CDL-licensed band members Holly,
 *         Evan, and Tyler.
 *      b) Holly O'Connell's 1986 "$1.00 Perpetual Mutual Cross-License" ("The Progress Street
 *         Redline") with Commonwealth Polytechnic Institute (CPI), granting the band perpetual
 *         rights to sing "CPI", "The Forgers", and "The Crucible" on Track 6.
 *      c) Full-band AOR resurrection of the 1990 post-crash acoustic demo "Empty Arenas".
 *      d) The closing farewell-for-now power ballad "Last Bus Home: Lights Out on Progress Street",
 *         promising Forger Nation that the family is staying together and will return once recharged.
 *
 * 2. Component Architecture:
 *    - Uses `_album-art-header.php` with the `'axiom'` (amber/orange) border variant.
 *    - Includes `_tracklist-downloader.php` to render Schema.org JSON-LD, Dual-Timeline badges,
 *      and direct gateway links to The Listening Room (`https://music.raggiesoft.com`).
 *    - Uses Web Awesome `<wa-accordion>` and `<wa-accordion-item>` components for interactive
 *      Track-by-Track Liner Notes and Studio Archive callout cards.
 *    - Includes `navigation/narrative-stepper.php` for sequential discography traversal.
 * ============================================================================
 */

$pageTitle = "Progress Street (2004) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2004-progress-street';
?>

<div class="container py-5">

    <!-- INLINE: Album Art Header & Overview Section -->
    <div class="row align-items-center mb-5">
        <?php
        $props = [
            'path' => $album_path_web,
            'alt' => 'Progress Street Album Art - The Stardust Engine',
            'variant' => 'axiom' // Warm amber border reflecting dusk streetlights on Progress Street NW
        ];
        include ROOT_PATH . '/includes/components/_album-art-header.php';
        ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Progress Street
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2004 Blacksburg Homecoming &amp; Pre-Hiatus Finale
            </p>
            <p class="lead text-body">
                Recorded at their family home on Progress Street NW in Blacksburg, Virginia, <em>Progress Street</em> is the unapologetic, full-blooded 1980s AOR and stadium synth-rock record that Apex Records never allowed The Stardust Engine to make in 1987.
            </p>
            <p class="text-muted">
                Following the intense psychological weight of the 2003 <em>Twin Moons</em> project (<em>Sanctuary: Zero-G</em> and <em>Mile Marker 98</em>), Ryan, Cassidy, Holly, Evan, and Tyler retreated to where their story began. Trading conceptual space metaphors for warm upright pianos, Cassidy's cherished second-hand 1984 six-voice analog synthesizer, roaring stadium guitars, and thunderous gated-reverb drums, the album is a love letter to their collegiate roots at Commonwealth Polytechnic Institute (CPI) and the unbreakable family unit that survived every storm.
            </p>
            <p class="text-muted mb-0">
                Immortalized on the cover alongside their brand-new custom 2004 <strong>Prairie Coachworks RLFD30</strong> low-floor shuttle bus, <em>Progress Street</em> marked the band's third full studio release in under two years—culminating in a heartfelt closing promise to Forger Nation that they were signing off for a little while to rest and recharge together as a family.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <!-- INLINE: Universal Metadata & Listening Room Gateway Component -->
    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <!-- INLINE: Track-by-Track Liner Notes & In-Universe Lore -->
    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">
            <i class="fa-duotone fa-book-open-cover me-2 text-primary"></i>Track-by-Track Liner Notes
        </h3>

        <wa-accordion>

            <!-- Track 1 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">1. Progress Street: Where the Fire Began</strong>
                    <wa-badge variant="brand" class="ms-3">Title Track</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    The triumphant 128 BPM 1980s AOR opener looking back to 1985 on Progress Street NW in Blacksburg—where Ryan, Cassidy, Evan, Tyler, and sixteen-year-old prodigy Holly forged their family unit. Driven by bright polyphonic analog synth-brass fanfares and a soaring brother-sister duet, the song sets the thesis of the entire record: before the stadium lights and label wars, their true power was built in a collegiate living room with cables taped across the hardwood floor.
                </p>
            </wa-accordion-item>

            <!-- Track 2 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">2. Route 1: Midnight Headlights</strong>
                    <wa-badge variant="info" class="ms-3">Fleet Lore</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    A nocturnal 134 BPM highway rocker paying tribute to riding <strong>Blue Ridge Transit's Route 1</strong> along Main Street and Progress Street during their CPI student years—and celebrating the band becoming <strong>Prairie Coachworks'</strong> very first launch customer in 2004 with their own custom 30-foot <strong>RLFD30</strong> low-floor shuttle coach. Unlike their 45-foot 2002 Sainte-Claire 45H3 interstate tour bus (which requires a 60-inch vertical hydraulic lift), the compact RLFD30 kneels right to the Blacksburg curb and unfolds a simple front flip-out ADA ramp so Ryan can roll straight aboard with his family.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-bus me-2"></i><strong>Explore the Fleet Archive &amp; Launch Press Release:</strong>
                    Inspect the technical specifications, CDL driver roster, and the framed <a href="/engine-room/corporate/strategic-assets/the-iron-horse#prairie-press-release" class="alert-link fw-bold text-decoration-underline">May 18, 2004 Prairie Coachworks Launch Customer Press Release (Serial #001)</a> in
                    <a href="/engine-room/corporate/strategic-assets/the-iron-horse" class="alert-link fw-bold text-decoration-underline">The Iron Horse &amp; Fleet Archive</a>.
                </div>
            </wa-accordion-item>

            <!-- Track 3 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">3. Seconds Into Forever</strong>
                </div>
                <p class="text-muted mb-0">
                    A lush, romantic 85 BPM 1980s arena power ballad written around the concept of a three-minute campus speed-dating bell (<em>"One hundred eighty seconds on a ticking clock / It only takes three minutes to believe!"</em>). Features warm analog synthesizer pads, ringing clean electric guitar arpeggios, and massive gated-reverb snare drums.
                </p>
            </wa-accordion-item>

            <!-- Track 4 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">4. Thunder in the Rain</strong>
                    <wa-badge variant="warning" class="ms-3">Chart Smash</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    Opening with a deceptive ten-second cinematic analog blade-synth swell before exploding into a blistering 150 BPM C-minor stadium rocker with orchestral hits and a screaming tapping guitar solo. In campus lore, this track was famously blasted by accident during an unsanctioned student speed-dating event when the flustered organizer fat-fingered the AudioStar Sound System skip button right past <em>"Seconds Into Forever."</em>
                </p>
            </wa-accordion-item>

            <!-- Track 5 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">5. Upright &amp; Amplifier</strong>
                </div>
                <p class="text-muted mb-0">
                    An emotional 82 BPM AOR power ballad sung by Cassidy that chronicles the exact chronology of the family's instruments: Cassidy sitting at the O'Connell family's upright acoustic piano with Ryan plugging his electric guitar into a small amplifier right beside her in 1983; maternal twin cousins Tyler and Evan Wright arriving in 1985 with Tyler's childhood drum kit and Evan's four-string bass; and their working-class family pooling every spare dollar in 1986 to buy Cassidy a second-hand 1984 six-voice polyphonic analog synthesizer—the exact keyboard that birthed the "Stardust" sound.
                </p>
            </wa-accordion-item>

            <!-- Track 6 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">6. Saturday Night Lights: The Crucible</strong>
                    <wa-badge variant="danger" class="ms-3">Stadium Classic</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    A roaring 130 BPM stadium rock companion to 1986's <em>"Ignition: The Forger's Call,"</em> celebrating the autumn night when a student contest turned a five-piece family band from Progress Street NW into the eternal Saturday night soundtrack of <strong>The Crucible</strong>—the loudest house in college sports.
                </p>
                <p class="text-muted mb-3">
                    <strong>The 1986 "$1.00 Perpetual Mutual Cross-License":</strong> When the CPI Student Government Association distributed the October 1986 anthem contest entry packet, it contained a buried boilerplate "Work Made for Hire" clause that would have signed away 100% of the band's master and publishing rights to the CPI Athletic Foundation. Sixteen-year-old prodigy <strong>Holly O'Connell</strong>—who was <strong>dual-enrolled at Blacksburg High School and CPI</strong>, taking afternoon undergraduate business and contract law electives on campus—redlined the agreement at the Progress Street kitchen table into a <strong>$1.00 Perpetual Mutual Cross-License</strong>. Under Holly's deal, CPI Athletics received a perpetual, royalty-free stadium and broadcast synchronization license to blast <em>"Ignition"</em> and future Stardust Engine anthems inside The Crucible, while CPI's Office of Trademarks &amp; Licensing granted the band (and any label they wholly owned) a perpetual, worldwide, royalty-free <strong>Co-Existence &amp; Artistic Reference License</strong> to sing and print <em>"CPI"</em>, <em>"Commonwealth Polytechnic Institute"</em>, <em>"The Forgers"</em>, and <em>"The Crucible"</em> across their commercial releases.
                </p>
                <p class="text-muted mb-3">
                    <strong>The October 8, 2004 Top-Secret Fourth-Quarter Debut ("BAH! BAH! BAH!"):</strong> With <em>Progress Street</em> scheduled to drop worldwide on <strong>Monday, October 10, 2004</strong>, Holly secretly invoked the 1986 Cross-License with the CPI Athletic Director two days early. On <strong>Saturday night, October 8, 2004</strong>, as the CPI Forgers held a gritty fourth-quarter lead over fierce Appalachian border rival <strong>#6 Monongahela State University (MSU Coalminers)</strong> in the <em>Coal &amp; Iron War</em>, the stadium press box blindsided 65,000 fans—and CPI's fanatical student section, <strong>The Ironheads</strong> (CPI football's answer to Buchanan University basketball's <em>Pavilion Lunatics</em>)—by premiering <em>"Saturday Night Lights: The Crucible"</em> at the start of the fourth quarter. Just as <strong>Boston Beacons</strong> fans belt the eighth-inning horn hook of <em>"Sweet Evangeline"</em> at <strong>Back Bay Park</strong>, The Ironheads immediately locked onto Cassidy's three-note analog synth-brass fanfare—roaring <strong><em>"BAH! BAH! BAH!"</em></strong> across the Blacksburg night sky as CPI closed out a <strong>19–13 victory</strong>, cementing the song as CPI's permanent fourth-quarter ritual.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-fire-flame-curved me-2"></i><strong>Historical Archive:</strong>
                    Read the full story of the 1986 student contest, Holly's kitchen-table legal redline, and the October 8, 2004 secret fourth-quarter debut in
                    <a href="/engine-room/artists/stardust-engine/story/crucible#saturday-night-lights-debut" class="alert-link fw-bold text-decoration-underline">The Crucible &amp; "Ignition" Archive</a>.
                </div>
            </wa-accordion-item>

            <!-- Track 7 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">7. Fifth Gear: The Architect's Shield</strong>
                </div>
                <p class="text-muted mb-3">
                    An upbeat 136 BPM melodic synth-rock tribute to younger sister, manager, and Engine Room Records CEO <strong>Holly O'Connell</strong>. Written by Ryan, Cassidy, Evan, and Tyler behind her back, the song honors the prodigy who was dual-enrolled at Blacksburg High School and CPI at sixteen, defused Ryan and Cassidy's fiercest studio arguments with mandatory three-way sibling hugs, earned her Class A Commercial Driver's License (with Passenger and Airbrake endorsements) alongside Evan and Tyler so no outsider would ever drive Ryan again, and built the financial and legal fortress that protected the family.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-scale-balanced me-2"></i><strong>Character Profile:</strong>
                    Explore Holly O'Connell's biography and legal victories on the
                    <a href="/engine-room/artists/stardust-engine/band/holly-oconnell" class="alert-link fw-bold text-decoration-underline">Holly O'Connell ("The Architect")</a>
                    profile page.
                </div>
            </wa-accordion-item>

            <!-- Track 8 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">8. Before the Distance</strong>
                    <wa-badge variant="brand" class="ms-3">Cross-Universe Canon</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    A dramatic, mid-tempo 1980s pop-rock power anthem (<em>"When the steel doors close and the platform clears / And the rain streaks down on the window glass..."</em>) about holding onto a promise across miles of steel and rain. In cross-universe RaggieSoft lore, this is the exact track playing in Jessica's headphones on her pre-release Quantum Zephyr media player during her devastating November 2006 commuter train ride from Kent to Seattle King Street Station.
                </p>
            </wa-accordion-item>

            <!-- Track 9 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">9. Running on Redline</strong>
                </div>
                <p class="text-muted mb-0">
                    A fiery 140 BPM D-minor arena rocker that captures the band pouring every last ounce of physical and emotional energy into completing their third full studio album in under two years. Ryan's raw vocal delivery directly foreshadows the exhaustion that forced the band to step away from the road immediately after the album wrapped.
                </p>
            </wa-accordion-item>

            <!-- Track 10 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">10. Empty Arenas</strong>
                    <wa-badge variant="success" class="ms-3">2004 Full-Band AOR Version</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    Originally tracked as a stripped-down, heartbroken acoustic sketch in late 1990 shortly after Ryan's paralyzing bus crash on I-81 (later released on 2007's <em>Lost Sounds</em>), the band resurrected <em>"Empty Arenas"</em> in 2004 and transformed it into a massive, full-band 1980s Album-Oriented Rock (AOR) triumph. Driven by Tyler's thunderous gated-reverb acoustic drum kit, Evan's locked-in eighth-note bass, Cassidy's 1984 analog synth swells, and Ryan's soaring electric guitar, the rewritten 2004 lyrics reframe the empty arena from a symbol of post-accident terror into a quiet monument of survival after a sold-out encore.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare Versions:</strong>
                    Hear the raw 1990 post-accident acoustic sketch on the
                    <a href="/engine-room/artists/stardust-engine/discography/2007-lost-sounds" class="alert-link fw-bold text-decoration-underline">Lost Sounds (2007)</a>
                    archival compilation page.
                </div>
            </wa-accordion-item>

            <!-- Track 11 -->
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">11. Last Bus Home: Lights Out on Progress Street</strong>
                    <wa-badge variant="warning" class="ms-3">The Hiatus Sign-Off</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    The grand 88 BPM 1980s stadium power-ballad finale of <em>Progress Street</em>—written as the band's direct, heartfelt message to Forger Nation that they are signing off for a little while. Completely burned out after pouring everything they had into three full studio albums in under two years, Ryan, Cassidy, Holly, Evan, and Tyler use this closing anthem to reassure the world that they are not breaking up. As their custom 2004 Prairie Coachworks RLFD30 kneels at the curb on Progress Street NW and the five of them head inside, they promise their fans that, as a family, they are staying together—and that once they have rested and recharged, they will turn the switches back on and return with more music.
                </p>
            </wa-accordion-item>

        </wa-accordion>
    </div>

    <!-- INLINE: Studio Archives & Engineering Lore Callouts -->
    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-3 border-bottom pb-2">
        <i class="fa-duotone fa-box-archive me-2"></i>Studio &amp; Fleet Archives
    </h3>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="alert alert-dark border-warning h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-bus text-warning fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-warning text-uppercase mb-1">Prairie Coachworks RLFD30 (Launch Customer)</h5>
                        <p class="mb-3 small text-muted">
                            Featured on the cover of <em>Progress Street</em> is the band's 2004 <strong>Prairie Coachworks RLFD30</strong>—making The Stardust Engine the very first launch customer for the restyled 30-foot low-floor coach. Engineered with a front-door-only executive layout, cosmic nebula wrap, and kneeling front ADA ramp, it is driven exclusively by CDL-licensed band members Holly O'Connell, Evan Wright, and Tyler Wright.
                        </p>
                        <a href="/engine-room/corporate/strategic-assets/the-iron-horse" class="btn btn-sm btn-outline-warning text-uppercase fw-bold">Explore the Fleet Roster</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-dark border-info h-100 mb-0 shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-duotone fa-file-contract text-info fs-3"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-info text-uppercase mb-1">The 1986 Progress Street Redline</h5>
                        <p class="mb-3 small text-muted">
                            How did The Stardust Engine legally clear CPI's institutional marks for Track 6? Sixteen-year-old Holly O'Connell redlined the 1986 student contest form into a perpetual $1.00 Mutual Cross-License—trading royalty-free stadium rights inside The Crucible for permanent artistic reference rights across the band's catalog.
                        </p>
                        <a href="/engine-room/artists/stardust-engine/story/crucible" class="btn btn-sm btn-outline-info text-uppercase fw-bold">Read the 1986 Contract Lore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $nav = [
        'prev' => ['url' => '/engine-room/artists/stardust-engine/discography/2003-moon-2-mile-marker-98', 'label' => 'Mile Marker 98 (2003)'],
        'overview' => ['url' => '/engine-room/artists/stardust-engine/discography', 'label' => 'Discography'],
        'next' => ['url' => '/engine-room/artists/stardust-engine/discography/2007-lost-sounds', 'label' => 'Lost Sounds (2007)']
    ];
    include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>
