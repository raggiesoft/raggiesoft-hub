<?php
// Page data
/*
 * ARCHITECTURE & LORE:
 * Archival compilation page for "Lost Sounds" (2007).
 * Utilizes standard album header and tracklist components.
 * Features a custom "Track-by-Track Lore" list group highlighting key lost tracks.
 */
$pageTitle = "Lost Sounds (2007) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2007-lost-sounds';

?>

<div class="container py-5">
    
    <!-- INLINE: Neutral variant used for archival release header -->
    <div class="row align-items-center mb-5">
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Lost Sounds Album Art',
            'variant' => 'neutral' // Grey border for archival release
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-secondary mb-0" style="font-family: 'Impact', sans-serif;">
                Lost Sounds
            </h1>
            <p class="h4 text-muted fw-bold mb-3">
                The 2007 Archival Compilation
            </p>
            <p class="lead text-body">
                Released during the band's "Burnout Hiatus" (2008-2014), this collection was a gift to the fans who had kept the flame alive.
            </p>
            <p class="text-muted">
                It collects the "Lost Gems" of the Apex era—polished demos, B-sides, and controversial tracks that the studio buried. For decades, these songs existed only as bootlegs traded by the "Forger Nation." Now, they are officially part of the canon.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <!-- INLINE: Track-by-Track Lore - Lists out detailed backstories for specific songs -->
    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Track-by-Track Lore</h3>

        <wa-accordion>
            
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">1. The Stardust Engine (The Rejected Mix)</strong>
                </div>
                <p class="text-muted mb-3">
                    This alternate version of "The Stardust Engine" was one of the original demos shopped around to record companies when the band formed in 1986. Apex Records signed them but rejected this version, burying the final studio version as track 13 on 1987's <em>Electric Color</em>. The band famously despises Apex for what happened to them during the 1992 label dispute. For this vault release, they officially retitled this early cut "(The Rejected Mix)" instead of naming Apex Records directly, serving as a quiet nod to their lingering resentment.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare versions:</strong> 
                    Hear the buried studio version of this song on the 
                    <a href="/engine-room/artists/stardust-engine/discography/1987-electric-color" class="alert-link fw-bold text-decoration-underline">Electric Color (1987)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">2. Midnight Drivers (Basement Demo)</strong>
                </div>
                <p class="text-muted mb-3">
                    This is an early, raw basement recording of what would eventually become the title track of their 2001 retro-engineered album. Recorded in 1987 before the track was polished in the studio (which Apex Records ultimately deemed too dark and shelved), this gritty demo captures the isolating, moody energy the band originally envisioned before the label interference.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare versions:</strong> 
                    Hear how this shelved track finally found its conceptual home on the 
                    <a href="/engine-room/artists/stardust-engine/discography/2001-midnight-drivers" class="alert-link fw-bold text-decoration-underline">Midnight Drivers (2001)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">3. Radio Silence</strong>
                </div>
                <p class="text-muted mb-0">
                    A 1986 deep cut demo that Apex Records threw out during the <em>Electric Color</em> selection process because it was deemed "too heavy on the synths and too light on the pop". It remained a fan-favorite myth among diehards who traded bootleg cassette tapes, finally getting an official release on this vault compilation.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">4. Empty Arenas</strong>
                </div>
                <p class="text-muted mb-3">
                    Recorded in 1990 shortly after Ryan's life-altering accident, this solemn, stripped-down track reflects the band's fear that they would never be able to play live again. It was ultimately deemed too depressing for the <em>Friction</em> era and was kept locked away. Its inclusion on <em>Lost Sounds</em> is a poignant reminder of the darkest period in the band's history.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-book-open-cover me-2"></i><strong>Historical Archive:</strong> 
                    Read the detailed lore regarding the tragic event that inspired this song in 
                    <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="alert-link fw-bold text-decoration-underline">The Crash of '90</a> 
                    archive.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">5. The Contract</strong>
                    <wa-badge variant="danger" class="ms-3">Vent Track</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    The legendary 1992 punk-rock vent track. Recorded entirely in secret during their bitter legal dispute with Apex Records, the band absolutely shreds their former label for their suffocating creative control. The sheer anger in Ryan's guitar work makes this a standout deep cut. It was never intended for public release, serving strictly as a therapeutic middle finger to the studio executives.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-book-open-cover me-2"></i><strong>Historical Archive:</strong> 
                    Explore the full breakdown of the band's bitter legal and creative dispute with Apex Records in 
                    <a href="/engine-room/artists/stardust-engine/story/friction" class="alert-link fw-bold text-decoration-underline">The Friction Catastrophe</a> 
                    archive.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">6. Neon Hearts (Acoustic Sketch)</strong>
                </div>
                <p class="text-muted mb-3">
                    This is the raw, acoustic sketch of what would become their heavily manufactured 1989 hit, "Neon Hearts." Without the glossy, heavy studio synths imposed by Apex Records, this early draft reveals the song to be a surprisingly tender, intimate ballad rather than a club-ready pop anthem.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare versions:</strong> 
                    Hear the heavily-produced final studio version of this song on the 
                    <a href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="alert-link fw-bold text-decoration-underline">Neon Hearts (1989)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">7. Sanctuary: Zero G (Rough Mix)</strong>
                </div>
                <p class="text-muted mb-3">
                    An outtake from the 2003 <em>Sanctuary: Zero-G</em> sessions. While the band loved the atmospheric, floating vibe of the track, they felt it disrupted the pacing of the final album, which they wanted to keep more grounded in its rock elements. It remained a beloved studio jam in the vault until this compilation.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Explore the Album:</strong> 
                    Hear the final versions of the songs that made the cut on the 
                    <a href="/engine-room/artists/stardust-engine/discography/2003-moon-1-sanctuary-zero-g" class="alert-link fw-bold text-decoration-underline">Sanctuary: Zero G (2003)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">8. Steel and Synthetics</strong>
                </div>
                <p class="text-muted mb-3">
                    Originally written during the 1997 <em>Hard Reset</em> sessions, it serves as a love letter to the band's dual identities—the "Steel" of rock and the "Synthetics" of electronic music. It was cut simply due to runtime constraints on the double album, but remains a fan favorite.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Explore the Album:</strong> 
                    Hear the groundbreaking 1997 double album this track was cut from on the 
                    <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="alert-link fw-bold text-decoration-underline">Hard Reset (1997)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">9. Our Own Frequency</strong>
                    <wa-badge variant="success" class="ms-3">New Recording</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    A brand new track recorded specifically for the 2007 <em>Lost Sounds</em> compilation, intentionally designed to simulate the stripped-down, acoustic music Ryan and Cassidy were making together back in 1985 (before their cousins Evan and Tyler joined to form The Stardust Engine). After digging through years of painful, heavily-manufactured Apex Records history, they wanted to return to their roots. Written and recorded in a single afternoon with just an acoustic guitar and a piano, "Our Own Frequency" is a triumphant, intimate declaration of their bond as brother and sister. It is the exact kind of acoustic scratch track they always wanted to make, completely free of label interference.
                </p>
            </wa-accordion-item>
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">10. The Promise (Corporate Demo)</strong>
                    <wa-badge variant="danger" class="ms-3">Banned</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    The exact sound Apex wanted: safe, sterile, and ready for a televangelist broadcast. Scrapped after the "Worship" video controversy.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare versions:</strong> 
                    Hear the heavily-produced pop version that ultimately made the record on the 
                    <a href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="alert-link fw-bold text-decoration-underline">Neon Hearts (1989)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">11. The Promise (Sabotage Demo)</strong>
                    <wa-badge variant="danger" class="ms-3">Banned</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    Ryan's malicious compliance. He played the synth-gospel track but snuck a blistering, unholy rock solo into the bridge, terrifying the executives.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Compare versions:</strong> 
                    Hear the sanitized version Apex Records ultimately forced onto the 
                    <a href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="alert-link fw-bold text-decoration-underline">Neon Hearts (1989)</a> 
                    album page.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">12. Atmosphere (Warehouse Demo)</strong>
                </div>
                <p class="text-muted mb-3">
                    The "Lost Gem" from the canceled 1992 Friction sessions. Julian Vance's misinterpretation of these literal space-shuttle lyrics caused the catastrophic contract fallout.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-book-open-cover me-2"></i><strong>Historical Archive:</strong> 
                    Read exactly how this song destroyed the band's relationship with Apex Records in 
                    <a href="/engine-room/artists/stardust-engine/story/friction" class="alert-link fw-bold text-decoration-underline">The Friction Catastrophe</a> 
                    archive.
                    
                    <hr class="border-info-subtle opacity-50 my-2">
                    
                    <i class="fa-solid fa-compact-disc me-2"></i><strong>Explore the Album:</strong> 
                    Hear the massive, heavy industrial version of this song that the band eventually self-released on 
                    <a href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes" class="alert-link fw-bold text-decoration-underline">The Warehouse Tapes (1995)</a>.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">13. Sanctuary in the Storm</strong>
                    <wa-badge variant="warning" class="ms-3">John &amp; Erin: Part IV • Unreleased</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    An epic 1980s power ballad duet about finding unconditional safety and healing after surviving an abusive relationship. Featuring Ryan and Cassidy O'Connell on male and female lead vocals, a powerful piano intro, massive gated-reverb drums, and a soaring electric guitar solo, the song was originally written in 1986 as Part IV of the band's narrative arc of fraternal twins <strong>John and Erin</strong> (and shopped on their early demo cassette before Apex Records rejected it). Picking up directly after Erin blocks the Blue Ridge Transit bus ramp on the <strong>Commonwealth Mall</strong> sidewalk and brings John the two blocks home to <strong>Progress Street NE</strong> in <em>"Before the Distance"</em> (<em>Progress Street</em>, Track 8), <em>"Sanctuary in the Storm"</em> captures John healing from his trauma inside the safe harbor of his twin sister Erin's sanctuary.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-book-sparkles me-2"></i><strong>Liner-Note Narrative:</strong>
                    Read the complete five-song story of John and Erin across <em>Progress Street</em> and <em>Lost Sounds</em> in
                    <a href="/engine-room/artists/stardust-engine/story/john-and-erin#act-4" class="alert-link fw-bold text-decoration-underline">Before the Distance: The Story of John &amp; Erin</a>.
                </div>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">14. Not Her</strong>
                    <wa-badge variant="warning" class="ms-3">John &amp; Erin: Part V • Unreleased</wa-badge>
                </div>
                <p class="text-muted mb-3">
                    A powerful, defiant 1980s rock anthem and duet serving as the fifth and final chapter of The Stardust Engine's published narrative arc of fraternal twins <strong>John and Erin</strong>. After Erin rescued John from his abuser along Commonwealth Mall (<em>"Before the Distance"</em>) and sheltered him through his recovery (<em>"Sanctuary in the Storm"</em>), a slick male predator (<em>"that easy charm, that practiced smile"</em>) corners Erin outside <strong>Kincaid Hall</strong> and tries to isolate her. When Erin signals her brother in the bridge (<em>"Brother, listen, something's wrong... Just take my hand, let's turn and run"</em>), John immediately recognizes the predator's manipulative playbook from his own past abuse and unleashes his analytical fury—roaring <em>"Not her. Not today. Not ever again!"</em> and rescuing Erin just as she rescued him.
                </p>
                <div class="alert alert-info border-info-subtle text-info-emphasis mb-0 p-3">
                    <i class="fa-solid fa-book-sparkles me-2"></i><strong>Liner-Note Narrative:</strong>
                    Read the finale of the twins' story in
                    <a href="/engine-room/artists/stardust-engine/story/john-and-erin#act-5" class="alert-link fw-bold text-decoration-underline">Part V: The Circle Completed</a>.
                </div>
            </wa-accordion-item>

        </wa-accordion>
    </div>
    
    <?php
    $nav = [
        'prev' => ['url' => '/engine-room/artists/stardust-engine/discography/2004-progress-street', 'label' => 'Progress Street (2004)'],
        'overview' => ['url' => '/engine-room/artists/stardust-engine/discography', 'label' => 'Discography'],
        'next' => ['url' => '/engine-room/artists/stardust-engine/discography/2008-our-own-frequency', 'label' => 'Our Own Frequency (2008)']
    ];
    include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>


</div>
