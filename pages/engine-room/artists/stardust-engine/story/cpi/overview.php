<?php
/**
 * Stardust Engine - Lore/Story Template: CPI & The Forgers Overview
 * 
 * ARCHITECTURAL OVERVIEW:
 * This template acts as an informational lore page documenting the band's origins at
 * Commonwealth Polytechnic Institute (CPI) and their relationship with the "Ironheads" fanbase.
 * 
 * LAYOUT STRUCTURE:
 * - Utilizes a standard Bootstrap 5 container.
 * - Header Row: A simple centered title and lead paragraph.
 * - Hero Image: A figure component displaying "The Crucible" stadium.
 * - Narrative Sections: A single column (col-lg-10) containing sequentially arranged
 *   headings and paragraphs documenting lore (The Class of '89, "Ignition", War Chest).
 * - Callout Box: A styled Bootstrap alert emphasizing the marching band drill for "Ignition".
 * 
 * DEPENDENCIES:
 * - Expects $cdnBaseUrl for resolving the stadium image path.
 * - Utilizes FontAwesome (fa-drum) for the callout box.
 * 
 * MAINTENANCE NOTES:
 * - This page does not currently utilize the narrative-stepper component, as it acts more
 *   like an encyclopedia entry than a linear chapter.
 * - If additional CPI lore is written (e.g., specific football games, dorm room formations),
 *   consider linking them from this overview page as sub-articles.
 */

// Page data
$pageTitle = "About CPI & The Forgers - The Stardust Engine";
?>

<!-- BEGIN: Main Page Container -->
<div class="container py-5">
    
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            Commonwealth Polytechnic Institute
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The Forge of Genius. The Home of the "Ironheads".
        </p>
    </div>

    <!-- BEGIN: Hero Image -->
    <div class="text-center mb-5">
        <figure class="figure">
            <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible/album-art.jpg" 
                 class="figure-img img-fluid rounded shadow-lg border-glow" 
                 alt="The Crucible stadium at night, packed with fans.">
            <figcaption class="figure-caption text-muted fst-italic mt-2">
                The Crucible (the in-universe Lane Stadium) during the 2016 Homecoming.
            </figcaption>
        </figure>
    </div>
    <!-- END: Hero Image -->

    <!-- BEGIN: Main Narrative Content Column -->
    <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto">
            
            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3">
                The "Forger" Identity
            </h2>
            <p class="fs-5 text-muted mb-4">
                Commonwealth Polytechnic Institute (CPI) is a premier polytechnic university located in Blacksburg, Virginia. Its students and alumni are known as <strong>"Forgers,"</strong> a nod to the school's deep roots in engineering and industrial arts.
            </p>
            <p class="fs-5 text-muted mb-4">
                This identity extends to their famously passionate football fanbase, the <strong>"Ironheads."</strong> Known as the "Cameron Crazies of college football," the Ironheads have earned their home stadium, <strong>The Crucible</strong>, a nationwide reputation as the "LOUDEST stadium in all of college football."
            </p>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                The Class of '89: A Family Affair
            </h2>
            <p class="fs-5 text-muted mb-4">
                CPI is the literal and spiritual home of The Stardust Engine. All five members are proud alumni who graduated together as the <strong>Class of '89</strong>.
            </p>
            <p class="text-muted mb-4">
                This was only possible because Ryan (the oldest) delayed his entry to age 21, while Holly (the youngest) was a child prodigy who accelerated her education to start at 16. This allowed all five family members—Ryan, Cassidy, Holly, Evan, and Tyler—to begin their CPI journey together in the Fall of 1985, solidifying the bond that would define their future.
            </p>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                The Sacred Anthem: "Ignition"
            </h2>
            <p class="fs-5 text-muted mb-4">
                In 1986, while still students, the band wrote and donated the industrial-rock anthem <strong>"Ignition (The Forger's Call)"</strong> to the university. 
            </p>
            
            <!-- BEGIN: Highlight Alert Box -->
            <div class="alert alert-dark border-secondary bg-opacity-10 d-flex align-items-center mb-4" role="alert">
                <i class="fa-duotone fa-drum text-secondary fs-2 me-3"></i>
                <div class="small text-muted">
                    <strong>The Marching Drill:</strong> The song was designed for the marching band. The bridge features a relentless, shifting cadence that the student section mimics: they sway <strong class="text-primary">Left</strong>, then <strong class="text-primary">Right</strong>, then <strong class="text-primary">Left</strong>, then <strong class="text-primary">Right</strong>, shaking the entire stadium to its foundations.
                </div>
            </div>
            <!-- END: Highlight Alert Box -->

            <p class="text-muted mb-4">
                This song was adopted by the football team as their sacred entrance music, creating an "Enter Sandman-style" tradition where the entire stadium erupts as the team takes the field. This act cemented the band's status as legends on campus, long before they had a record deal.
            </p>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                The "Forger Nation War Chest"
            </h2>
            <p class="fs-5 text-muted mb-4">
                This deep, authentic bond with the fanbase is the key to the band's survival. After the 1992 "Friction" scandal, when the band was freed from Apex Records but left with no money, it was the "Forger Nation" that came to their rescue.
            </p>
            <p class="text-muted mb-4">
                An underground, mail-order fundraiser (the "Forger Nation War Chest") raised enough capital for Holly O'Connell to found <strong>Engine Room Records, LLC</strong>. This fan-funded label allowed the band to record 1995's <strong>The Warehouse Tapes</strong> and build their independent career on their own terms, forever linking their freedom to the loyalty of their fellow CPI alumni.
            </p>

        </div>
    </div>
    <!-- END: Main Narrative Content Column -->
</div>
<!-- END: Main Page Container -->