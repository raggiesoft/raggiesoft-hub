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
                <p class="text-muted mb-0">
                    This alternate version of "The Stardust Engine" was one of the original demos shopped around to record companies when the band formed in 1986. Apex Records signed them but rejected this version, burying the final studio version as track 13 on 1987's <em>Electric Color</em>. The band famously despises Apex for what happened to them during the 1992 label dispute. For this vault release, they officially retitled this early cut "(The Rejected Mix)" instead of naming Apex Records directly, serving as a quiet nod to their lingering resentment.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">2. Midnight Drivers (Basement Demo)</strong>
                </div>
                <p class="text-muted mb-0">
                    This is an early, raw basement recording of what would eventually become the title track of their 2001 retro-engineered album. Recorded in 1987 before the track was polished in the studio (which Apex Records ultimately deemed too dark and shelved), this gritty demo captures the isolating, moody energy the band originally envisioned before the label interference.
                </p>
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
                <p class="text-muted mb-0">
                    Recorded in 1990 shortly after Ryan's life-altering accident, this solemn, stripped-down track reflects the band's fear that they would never be able to play live again. It was ultimately deemed too depressing for the <em>Friction</em> era and was kept locked away. Its inclusion on <em>Lost Sounds</em> is a poignant reminder of the darkest period in the band's history.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">5. The Contract</strong>
                    <wa-badge variant="danger" class="ms-3">Vent Track</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    The legendary 1992 punk-rock vent track. Recorded entirely in secret during their bitter legal dispute with Apex Records, the band absolutely shreds their former label for their suffocating creative control. The sheer anger in Ryan's guitar work makes this a standout deep cut. It was never intended for public release, serving strictly as a therapeutic middle finger to the studio executives.
                </p>
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
                    <strong class="text-primary fs-5">7. Zero-G Sanctuary</strong>
                </div>
                <p class="text-muted mb-0">
                    An outtake from the 2003 <em>Sanctuary: Zero-G</em> sessions. While the band loved the atmospheric, floating vibe of the track, they felt it disrupted the pacing of the final album, which they wanted to keep more grounded in its rock elements. It remained a beloved studio jam in the vault until this compilation.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">8. Steel and Synthetics</strong>
                </div>
                <p class="text-muted mb-0">
                    Originally written during the 1997 <em>Hard Reset</em> sessions, it serves as a love letter to the band's dual identities—the "Steel" of rock and the "Synthetics" of electronic music. It was cut simply due to runtime constraints on the double album, but remains a fan favorite.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">9. Our Own Frequency</strong>
                    <wa-badge variant="success" class="ms-3">New Recording</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    A brand new track recorded specifically for the 2007 <em>Lost Sounds</em> compilation, intentionally designed to simulate the stripped-down, acoustic music Ryan and Cassidy were making together back in 1985 (before their cousins Evan and Tyler joined to form The Stardust Engine). After digging through years of painful, heavily-manufactured Apex Records history, they wanted to close the album by returning to their roots. Written and recorded in a single afternoon with just an acoustic guitar and a piano, "Our Own Frequency" is a triumphant, intimate declaration of their bond as brother and sister. It is the exact kind of acoustic scratch track they always wanted to make, completely free of label interference.
                </p>
            </wa-accordion-item>
            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">10. The Promise (Corporate Demo)</strong>
                    <wa-badge variant="danger" class="ms-3">Banned</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    The exact sound Apex wanted: safe, sterile, and ready for a televangelist broadcast. Scrapped after the "Worship" video controversy.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">11. The Promise (Sabotage Demo)</strong>
                    <wa-badge variant="danger" class="ms-3">Banned</wa-badge>
                </div>
                <p class="text-muted mb-0">
                    Ryan's malicious compliance. He played the synth-gospel track but snuck a blistering, unholy rock solo into the bridge, terrifying the executives.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">12. Atmosphere (Warehouse Demo)</strong>
                </div>
                <p class="text-muted mb-0">
                    The "Lost Gem" from the canceled 1992 Friction sessions. Julian Vance's misinterpretation of these literal space-shuttle lyrics caused the catastrophic contract fallout.
                </p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">13. Sanctuary in the Storm</strong>
                    <wa-badge variant="warning" class="ms-3">Unreleased</wa-badge>
<p class="text-muted mb-0">
    An epic 80s power ballad duet about finding love and safety after a difficult past. Features a male and female vocalist, a powerful piano intro, massive drums with gated reverb, and a soaring electric guitar solo. The song builds from gentle verses to a huge, heartfelt, and dramatic chorus. It is the signature song for John and Megan (characters the band created in 1986). It represents John finding a safe harbor with his wife Megan after suffering and finally breaking free from an abusive past relationship. It was put on their early demo cassette to shop around, but no studio wanted it.
</p>
            </wa-accordion-item>

            <wa-accordion-item>
                <div slot="label" class="d-flex w-100 justify-content-between align-items-center m-0">
                    <strong class="text-primary fs-5">14. Not Her</strong>
                    <wa-badge variant="warning" class="ms-3">Unreleased</wa-badge>
<p class="text-muted mb-0">
    A powerful, defiant 80s rock anthem and duet showing the protective bond between John and his fraternal twin sister, Erin. It captures the moment a predator starts making the wrong moves on Erin. John recognizes the predator's manipulative tactics because of his own past trauma and abuse, unleashing his analytical fury to shut it down. Erin's bridge is a fierce and assertive plea to escape, delivered with raw rock energy. The final chorus is their unified, protective roar—John declaring "Not Her, NEVER AGAIN!" to ensure his sister doesn't suffer what he did.
</p>
            </wa-accordion-item>

        </wa-accordion>
    </div>

</div>
