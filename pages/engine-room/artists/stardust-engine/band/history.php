<?php
/**
 * Stardust Engine - Official Band History Template
 * 
 * ARCHITECTURAL OVERVIEW:
 * This file presents the chronological timeline of "The Stardust Engine", organized
 * into distinct eras (Origins, Independence, Lottery, Fortress). It acts as the 
 * core lore repository for the band's narrative arc.
 * 
 * DATA & SCHEMA:
 * - Implements Schema.org AboutPage structured data. This connects the page content
 *   to both the 'MusicGroup' (The Stardust Engine) and the 'Organization' (Engine Room Records).
 * 
 * LAYOUT STRUCTURE:
 * - Uses a centralized Bootstrap 5 container with glassmorphism UI treatments.
 * - Content is broken down into semantic <section> elements, each representing a specific era.
 * - Incorporates varied UI treatments (e.g., standard text columns, bordered cards, 
 *   and alert boxes) to visually distinguish key historical milestones.
 * - Utilizes themed border and text colors (primary, warning, success, info) to create
 *   a visual rhythm down the page.
 * 
 * DEPENDENCIES:
 * - No custom component includes, entirely standard Bootstrap/HTML markup.
 * - FontAwesome icons used for thematic flair (e.g., fa-graduation-cap, fa-ticket).
 * 
 * MAINTENANCE NOTES:
 * - When adding new historical sections, follow the established pattern:
 *   <section id="..."> with a thematic heading and matching border colors.
 * - Ensure timeline logic remains consistent (e.g., verify dates like 1992 Independence).
 */

// pages/engine-room/artists/stardust-engine/band/history.php
// The Official Timeline
// UPDATED: Corrected 1992 Independence & 1996 Lottery Logic

$pageTitle = "Our History - The Stardust Engine";
?>

<?php
$historySchema = [
    "@context" => "https://schema.org",
    "@type" => "AboutPage",
    "name" => "Our History - The Stardust Engine",
    "about" => [
        "@type" => "MusicGroup",
        "name" => "The Stardust Engine"
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Engine Room Records"
    ]
];
?>
<!-- BEGIN: AboutPage Schema.org Definition -->
<script type="application/ld+json">
<?php echo json_encode($historySchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<!-- END: AboutPage Schema.org Definition -->

<!-- BEGIN: Thematic Background FX Layer -->
<div class="starfield-container"><div class="starfield-twinkling"></div></div>
<!-- END: Thematic Background FX Layer -->

<!-- BEGIN: Main Chronological Content Container -->
<div class="container py-5 glass-container position-relative z-1">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            The History
        </h1>
        <p class="lead mx-auto text-white-75" style="max-width: 800px;">
            From the dorm rooms of CPI to the "American Dream" jackpot.
            The story of a family who fought the industry and won.
        </p>
    </div>

    <!-- ERA 1: Origins -->
    <section id="origins" class="mb-5">
        <h2 class="text-primary border-bottom border-primary pb-2 mb-4">
            1985-1992: The Ironheads & The Cold War
        </h2>
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="fs-5 text-white-75">
                    The story begins at <strong>Commonwealth Polytechnic Institute (CPI)</strong> in Blacksburg. The five members (O'Connells and Wrights) formed a protective, insular unit—a "fortress"—to survive the academic and social pressures of the Class of '89.
                </p>
                <p class="text-white-75">
                    Their early success attracted <strong>Apex Records</strong>, leading to a five-year "Cold War" over the band's identity. Apex wanted a pop band; The Stardust Engine wanted to be industrial rockers. This era was defined by "malicious compliance," hiding dark lyrics inside polished pop songs.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-duotone fa-graduation-cap fa-5x text-white opacity-25"></i>
            </div>
        </div>
    </section>

    <section id="independence" class="mb-5">
        <h2 class="text-warning border-bottom border-warning pb-2 mb-4">
            1992: The "Friction" Catastrophe
        </h2>
        <div class="card border-warning bg-transparent">
            <div class="card-body">
                <h3 class="h5 fw-bold text-warning">The Day The Contract Ended</h3>
                <p class="text-white-75">
                    In 1992, an Apex executive attempted to exploit the sibling bond between Ryan and Cassidy for a sexualized marketing campaign. The resulting confrontation—the "Dirty Mirror" incident—ended with Holly O'Connell (then a law student) forcing the label to void the contract.
                </p>
                <p class="mb-0 text-white-75">
                    The band was free, but they were blacklisted and broke. This marked the beginning of "The Wilderness Years."
                </p>
            </div>
        </div>
    </section>

    <section id="lottery" class="mb-5">
        <h2 class="text-success border-bottom border-success pb-2 mb-4">
            1996: The "American Dream" Event
        </h2>
        <div class="alert alert-dark bg-opacity-25 border-success d-flex align-items-start">
            <i class="fa-duotone fa-ticket text-success fs-1 me-4"></i>
            <div>
                <h4 class="h5 fw-bold text-success">Daleville, VA (The Gas Station)</h4>
                <p class="text-white-75">
                    Late one night, returning from a gig in Lexington, the band stopped at a gas station in Daleville for snacks. <strong>Cassidy O'Connell</strong> bought a "Quick Pick" lottery ticket on a whim. She liked the visual pattern of the numbers.
                </p>
                <p class="text-white-75">
                    The next morning, reading the newspaper over breakfast, she realized she had matched every single number for the <strong>American Dream Jackpot</strong>.
                </p>
                <p class="text-white-75 fst-italic">
                    "She didn't scream. She just handed the ticket to Holly and said, 'Build us a fortress.'"
                </p>
                <p class="mb-0 fw-bold text-success">
                    Jackpot Total: $2.04 Billion.
                </p>
            </div>
        </div>
    </section>

    <section id="fortress" class="mb-5">
        <h2 class="text-info border-bottom border-info pb-2 mb-4">
            1997-Present: The "Loss Leader" Era
        </h2>
        <p class="fs-5 text-white-75">
            With the trust fund secured, the band ceased to be a commercial entity and became a "Loss Leader" for the family empire.
        </p>
        <ul class="text-white-75">
            <li class="mb-2"><strong>1997:</strong> Released <em>Hard Reset</em>, their first album with an "infinite budget."</li>
            <li class="mb-2"><strong>2000:</strong> Founded <strong>Mirage</strong> (their own subsidiary label).</li>
            <li class="mb-2"><strong>Today:</strong> They tour when they want, record what they want, and answer to no one.</li>
        </ul>
    </section>

    </div>