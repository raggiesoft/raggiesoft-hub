<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/artists/stardust-engine/story/john-and-erin.php
 *
 * 1. Lore & Narrative Purpose:
 *    - Presents the official in-universe prose narrative published by The Stardust Engine
 *      in the liner booklet of "Progress Street" (2004) and completed in the archival
 *      booklet of "Lost Sounds" (2007): "Before the Distance: The Story of John & Erin".
 *    - Unifies the five-song mini story arc across two albums:
 *      * Part I:   "Seconds Into Forever" (Progress Street, Track 3)
 *      * Part II:  "Thunder in the Rain" (Progress Street, Track 4)
 *      * Part III: "Before the Distance" (Progress Street, Track 8)
 *      * Part IV:  "Sanctuary in the Storm" (Lost Sounds, Track 13)
 *      * Part V:   "Not Her" (Lost Sounds, Track 14)
 *    - Canon Note: The character "Megan" has been permanently retired from canon.
 *      John finds his "Sanctuary in the Storm" with his fraternal twin sister Erin
 *      after she blocks the front boarding door ramp of Valerie's southbound Blue Ridge
 *      Transit bus along the chaotic curbside bus lineup on Commonwealth Mall (beneath
 *      The Keystone Bridge) in "Before the Distance", establishes a locked perimeter on
 *      the sidewalk, and brings John the two blocks home to Progress Street NE. John later
 *      rescues Erin from a predator outside Kincaid Hall in "Not Her".
 *
 * 2. Cross-Universe Interconnectivity:
 *    - Because this narrative was published by The Stardust Engine inside the physical
 *      and digital liner booklets of "Progress Street" (2004), characters across the
 *      RaggieSoft universe (including Jessica & Michael in "The Rachel Narrative", and
 *      Freddie & Paige in "The Paige Narrative") have read the story of John and Erin.
 *    - When Jessica leaves Michael behind at Kent Station in November 2006 ("Jessica's
 *      Train Ride") and hears "Before the Distance" on her Quantum Zephyr media player,
 *      she realizes in horror that she and her brother are living out the exact story of
 *      John and Erin—except unlike Erin along Commonwealth Mall, Jessica let the steel
 *      doors close without pulling her brother aboard.
 *    - Likewise, when "Thunder in the Rain" surfaces around Freddie and Paige, having
 *      read the liner notes makes them wonder why they have heard "Thunder in the Rain"
 *      before and recognize the hidden warning beneath its stadium-rock adrenaline.
 *
 * 3. UI, Web Awesome (`llms-webawesome.txt`) & WCAG Contrast Architecture:
 *    - Built with Web Awesome 3 custom elements (`<wa-card>`, `<wa-callout>`,
 *      `<wa-badge>`, `<wa-button>`, `<wa-divider>`, `<wa-icon>`).
 *    - Strictly enforces WCAG 2.1 AA/AAA color contrast across both Light Mode
 *      (`data-bs-theme="light"`) and Dark Mode (`data-bs-theme="dark"`):
 *      * Avoids hardcoded `bg-dark` paired with `text-body` or `text-warning`/`btn-outline-light`
 *        on adaptive backgrounds.
 *      * Uses semantic adaptive text classes (`text-body-emphasis`, `text-body`,
 *        `text-body-secondary`) on theme-aware surfaces (`bg-body`, `bg-body-tertiary`)
 *        and Web Awesome `appearance="filled-outlined"` components.
 *    - Includes `navigation/narrative-stepper.php` for sequential archive navigation.
 * ============================================================================
 */

$pageTitle = "Before the Distance: The Story of John & Erin | The Stardust Engine";
?>

<style>
    /* ========================================================================
       WCAG-COMPLIANT ADAPTIVE STYLING FOR JOHN & ERIN NARRATIVE ARCHIVE
       ========================================================================
       Ensures all cards, track index tiles, and lyric callouts maintain >= 7:1
       (AAA) or >= 4.5:1 (AA) contrast in both Light Mode and Dark Mode.
    */
    .je-suite-tile {
        display: block;
        text-decoration: none;
        padding: 0.875rem 1rem;
        border-radius: 0.625rem;
        background-color: var(--bs-tertiary-bg);
        border: 1px solid var(--bs-border-color);
        transition: transform 0.15s ease, box-shadow 0.15s ease, border-color 0.15s ease;
    }

    .je-suite-tile:hover,
    .je-suite-tile:focus-visible {
        transform: translateY(-2px);
        border-color: var(--bs-primary);
        box-shadow: 0 0.35rem 0.85rem rgba(0, 0, 0, 0.12);
    }

    .je-prose p {
        font-size: 1.0625rem;
        line-height: 1.8;
        color: var(--bs-body-color);
    }
</style>

<div class="container py-5">

    <!-- ======================================================================
         HEADER: ARCHIVAL LINER BOOKLET PRESENTATION
         ====================================================================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <div class="mb-3">
                <wa-badge variant="brand" appearance="filled-outlined" class="text-uppercase letter-spacing-1 px-3 py-2">
                    <wa-icon slot="start" name="book-sparkles" family="duotone"></wa-icon>
                    Official Liner-Note Narrative (2004 / 2007)
                </wa-badge>
            </div>

            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                Before the Distance: The Story of John &amp; Erin
            </h1>

            <p class="h4 text-primary-emphasis fw-bold mb-4">
                A Five-Song Twin Narrative Published by Ryan &amp; Cassidy O'Connell
            </p>

            <p class="lead text-body-secondary mx-auto mb-4" style="max-width: 840px;">
                Originally conceived by Ryan and Cassidy O'Connell in 1986 and published in the liner booklet of 2004's <em>Progress Street</em> (with its concluding vault chapters restored on 2007's <em>Lost Sounds</em>), the story of fraternal twins <strong class="text-body-emphasis">John and Erin</strong>—both of whom use heavy-duty motorized power wheelchairs to navigate the steep, hilly Ironstone campus of Commonwealth Polytechnic Institute (CPI)—is one of The Stardust Engine's most famous pieces of in-universe fiction, portrayed visually by Ryan and Cassidy themselves.
            </p>

            <!-- Action Buttons using Web Awesome <wa-button> -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                <wa-button variant="brand" appearance="accent" size="medium" href="https://music.raggiesoft.com/playlists/john-and-erin" target="_blank">
                    <wa-icon slot="start" name="list-music" family="duotone"></wa-icon>
                    Stream the 5-Song Story Playlist
                    <wa-icon slot="end" name="arrow-up-right-from-square" family="classic" variant="solid"></wa-icon>
                </wa-button>

                <wa-button variant="neutral" appearance="filled-outlined" size="medium" href="https://books.raggiesoft.com/erin" target="_blank">
                    <wa-icon slot="start" name="book-open-reader" family="duotone"></wa-icon>
                    Read the Full Novel (Ocean View Archives)
                    <wa-icon slot="end" name="arrow-up-right-from-square" family="classic" variant="solid"></wa-icon>
                </wa-button>

                <wa-button variant="neutral" appearance="outlined" size="medium" href="/raggiesoft-books/books">
                    <wa-icon slot="start" name="books" family="duotone"></wa-icon>
                    Browse Contemporary Library
                </wa-button>
            </div>

            <div class="rounded-4 overflow-hidden border shadow-lg mx-auto mt-3" style="max-width: 920px;">
                <img src="https://assets.raggiesoft.com/engine-room-records/playlists/john-and-erin/social-preview.jpg"
                     alt="Before the Distance: The Story of John and Erin — Ryan and Cassidy O'Connell in motorized power wheelchairs holding hands at the front boarding door ramp of a Blue Ridge Transit low-floor bus along Commonwealth Mall"
                     class="img-fluid w-100 d-block"
                     loading="eager">
            </div>
        </div>
    </div>

    <!-- ======================================================================
         FIVE-SONG SUITE INDEX BAR (WEB AWESOME <wa-card>)
         ====================================================================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <wa-card class="shadow-sm">
                <div slot="header" class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="fw-bold text-uppercase text-body-emphasis small letter-spacing-1">
                        <wa-icon name="list-music" family="duotone" class="me-2 text-primary"></wa-icon>
                        The Five-Track Narrative Suite
                    </span>
                    <wa-badge variant="neutral" appearance="filled-outlined" class="font-monospace">
                        Progress Street (2004) &amp; Lost Sounds (2007)
                    </wa-badge>
                </div>

                <div class="row g-3 text-center">
                    <!-- Part I -->
                    <div class="col-12 col-md-4 col-lg">
                        <a href="#act-1" class="je-suite-tile h-100">
                            <div class="mb-1">
                                <wa-badge variant="warning" appearance="filled-outlined">Part I</wa-badge>
                            </div>
                            <div class="fw-bold text-body-emphasis">Seconds Into Forever</div>
                            <div class="small text-body-secondary">Progress Street • Track 3</div>
                        </a>
                    </div>
                    <!-- Part II -->
                    <div class="col-12 col-md-4 col-lg">
                        <a href="#act-2" class="je-suite-tile h-100">
                            <div class="mb-1">
                                <wa-badge variant="danger" appearance="filled-outlined">Part II</wa-badge>
                            </div>
                            <div class="fw-bold text-body-emphasis">Thunder in the Rain</div>
                            <div class="small text-body-secondary">Progress Street • Track 4</div>
                        </a>
                    </div>
                    <!-- Part III -->
                    <div class="col-12 col-md-4 col-lg">
                        <a href="#act-3" class="je-suite-tile h-100">
                            <div class="mb-1">
                                <wa-badge variant="brand" appearance="filled-outlined">Part III</wa-badge>
                            </div>
                            <div class="fw-bold text-body-emphasis">Before the Distance</div>
                            <div class="small text-body-secondary">Progress Street • Track 8</div>
                        </a>
                    </div>
                    <!-- Part IV -->
                    <div class="col-12 col-md-6 col-lg">
                        <a href="#act-4" class="je-suite-tile h-100">
                            <div class="mb-1">
                                <wa-badge variant="neutral" appearance="filled-outlined">Part IV</wa-badge>
                            </div>
                            <div class="fw-bold text-body-emphasis">Sanctuary in the Storm</div>
                            <div class="small text-body-secondary">Lost Sounds • Track 13</div>
                        </a>
                    </div>
                    <!-- Part V -->
                    <div class="col-12 col-md-6 col-lg">
                        <a href="#act-5" class="je-suite-tile h-100">
                            <div class="mb-1">
                                <wa-badge variant="success" appearance="filled-outlined">Part V</wa-badge>
                            </div>
                            <div class="fw-bold text-body-emphasis">Not Her</div>
                            <div class="small text-body-secondary">Lost Sounds • Track 14</div>
                        </a>
                    </div>
                </div>
            </wa-card>
        </div>
    </div>

    <!-- ======================================================================
         MAIN IN-UNIVERSE PUBLISHED LINER-NOTE STORY (WEB AWESOME <wa-card>)
         ====================================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <wa-card class="shadow-lg mb-5">
                <div slot="header" class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="fw-bold text-uppercase text-body-emphasis">
                        <wa-icon name="book-open-cover" family="duotone" class="me-2 text-primary"></wa-icon>
                        Excerpt from the Official Liner Booklet
                    </span>
                    <wa-badge variant="brand" appearance="filled-outlined">
                        Written by Ryan &amp; Cassidy O'Connell
                    </wa-badge>
                </div>

                <div class="p-2 p-lg-4 je-prose">

                    <!-- ACT I & II: SPEED DATING & THE SKIP BUTTON -->
                    <section id="act-1" class="mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-body-emphasis mb-0">
                                I &amp; II. The Skip Button at Kincaid Hall
                            </h2>
                            <div class="d-flex flex-wrap gap-2">
                                <wa-badge variant="warning" appearance="filled-outlined">Track 3: Seconds Into Forever</wa-badge>
                                <wa-badge variant="danger" appearance="filled-outlined">Track 4: Thunder in the Rain</wa-badge>
                            </div>
                        </div>

                        <p>
                            Fraternal twins <strong class="text-body-emphasis">John and Erin</strong> (portrayed in the liner-note photography by <strong class="text-body-emphasis">Ryan and Cassidy O'Connell</strong>) grew up sharing an unspoken frequency. Because the Blacksburg plateau and the Commonwealth Polytechnic Institute (CPI) campus are carved into steep Appalachian hills—from the sweeping oval of <strong class="text-body-emphasis">Commonwealth Green</strong> up to <strong class="text-body-emphasis">Faraday Hall</strong> on the Engineering Quad—both John and Erin use heavy-duty motorized power wheelchairs to navigate the five-percent campus grades. Where Erin was instinctive, fierce, and fiercely protective, John was quiet, analytical, and gentle—a CPI systems engineering undergraduate who trusted people at face value and assumed that everyone operated by the same honest rules he did.
                        </p>
                        <p>
                            In the autumn of their sophomore year in Blacksburg, Erin talked John into attending a Friday night campus speed-dating mixer in the <strong class="text-body-emphasis">Kincaid Hall Second-Floor Lounge</strong>. The rules were simple: each round lasted exactly three minutes. To time the rotations without a harsh buzzer, the student organizer had cued up a three-minute, 85-BPM romantic power ballad called <strong class="text-body-emphasis"><em>"Seconds Into Forever"</em></strong>—a gentle, shimmering song built around the promise that <em>"It only takes three minutes to believe!"</em>
                        </p>

                        <div id="act-2" class="my-4">
                            <wa-callout variant="danger" appearance="filled-outlined">
                                <wa-icon slot="icon" name="forward-step" family="classic" variant="solid"></wa-icon>
                                <div class="fw-bold text-uppercase small mb-1">
                                    The Fatal Track Skip: "Thunder in the Rain"
                                </div>
                                <p class="fst-italic mb-0">
                                    "The clock on the wall is a guillotine blade / Cutting down the promises we never made... The neon signs are flashing 'Danger' in red / But I'd rather be living than safe and dead / Hold on tight, baby, don't let go / We're dancing on the edge of the volcano!"
                                </p>
                            </wa-callout>
                        </div>

                        <p>
                            Just as a striking, charismatic graduate student named Valerie sat down at Table 4 across from John's power wheelchair, the flustered student running the sound system accidentally fat-fingered the skip button on the CD deck—bypassing Track 3 (<em>"Seconds Into Forever"</em>) and blasting Track 4: <strong class="text-body-emphasis"><em>"Thunder in the Rain."</em></strong>
                        </p>
                        <p class="mb-0">
                            For ten deceptive seconds, a lush, cinematic analog brass-synth swell filled the room. Then, at 150 BPM in C minor, the guitars and drums detonated. Instead of rotating or laughing off the mistake, Valerie leaned in, locking eyes with John over the roaring chorus and telling him that the universe had skipped the polite ballad because the two of them were meant for the storm. <strong class="text-body-emphasis">Crucially, John did not realize he was looking at his future abuser.</strong> Blinded by the pounding adrenaline of the song and the overwhelming intensity of her attention, he mistook a textbook predatory love-bombing ambush for destiny—completely missing that the lyrics blasting from the speakers were literally flashing <em>"Danger" in red</em>.
                        </p>
                    </section>

                    <wa-divider class="my-4"></wa-divider>

                    <!-- ACT III: COMMONWEALTH MALL (PRE-TRANSIT CENTER) -->
                    <section id="act-3" class="mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-body-emphasis mb-0">
                                III. The Executive Decision on Commonwealth Mall
                            </h2>
                            <wa-badge variant="brand" appearance="filled-outlined">Track 8: Before the Distance</wa-badge>
                        </div>

                        <p>
                            Once the trap closed, the isolation was surgical. Within weeks of that speed-dating mixer, Valerie moved into John's orbit and began systematically cutting every wire that connected him to safety. She made him feel guilty whenever he called Erin. She monitored his classes at Faraday Hall, degraded his confidence behind closed doors, and convinced him that her suffocating control was what adult romance required him to endure.
                        </p>
                        <p>
                            By late November 2004, John was a ghost of himself. Every <strong>Blue Ridge Transit</strong> bus on campus met in a chaotic, bumper-to-bumper curbside lineup along <strong class="text-body-emphasis">Commonwealth Mall</strong>, idling in a diesel-choked gauntlet between <strong class="text-body-emphasis">Kincaid Hall</strong>, <strong class="text-body-emphasis">Pendleton Library</strong>, and the vaulted Ironstone arches of <strong class="text-body-emphasis">The Keystone Bridge</strong>. When Erin finally managed to arrange a brief meetup with her brother on a freezing, rain-slicked evening beneath the stone arch of The Keystone Bridge, John didn't arrive alone. Valerie stood right beside his power wheelchair in the driving rain, her fingers dug possessively into his wet rain-jacket sleeve, answering questions on his behalf while John stared at the wet pavement with his hand limp beside his joystick controller.
                        </p>

                        <div class="my-4">
                            <wa-callout variant="brand" appearance="filled-outlined">
                                <wa-icon slot="icon" name="bus" family="classic" variant="solid"></wa-icon>
                                <div class="fw-bold text-uppercase small mb-1">
                                    Lyrics Excerpt: "Before the Distance" (Sung by Cassidy as Erin)
                                </div>
                                <p class="fst-italic mb-2">
                                    "I saw the shadow falling across your face / A quiet surrender in a crowded place / You wore a mask, but the edges were frayed / Lost in the rules of a game that we played..."
                                </p>
                                <p class="fst-italic mb-0">
                                    "When the steel doors close and the platform clears / You can hear the truth grinding in the gears... Logic is a cage when the danger is real / You can't code the panic, you can't fake what you feel / I'm turning around, I'm breaking the track / Whatever it costs me, I'm taking it back!"
                                </p>
                            </wa-callout>
                        </div>

                        <p>
                            Through the chaotic wall of idling buses, hazards, and rushing umbrellas along Commonwealth Mall, a southbound <strong class="text-body-emphasis">Blue Ridge Transit</strong> Route 1 low-floor city bus (<span class="font-monospace">1 FALLING BRANCH</span>) hissed to a stop at the boarding curb, its amber LED headboard reflecting off the puddles as the front pneumatic suspension kneeled and the yellow-bordered aluminum ADA wheelchair ramp deployed from the front boarding door onto the wet concrete. Because John and Erin shared a ground-floor accessible apartment on <strong class="text-body-emphasis">Progress Street NE</strong>—just two blocks from Commonwealth Mall—they never needed a bus to get home. Instead, Valerie was insisting that John board the southbound bus with her to spend the weekend isolated at her off-campus apartment down the Route 1 corridor in Christiansburg.
                        </p>
                        <p>
                            Seeing the terror and quiet surrender in her twin brother's eyes as Valerie tried to guide his power wheelchair toward the deployed front-door ramp, Erin realized with sudden, chilling clarity that if she let John board that bus and let those steel doors close—if she traded her courage for polite little lies and rolled the two blocks home to Progress Street NE alone—the distance would swallow him whole.
                        </p>
                        <p class="mb-0">
                            As Valerie stepped onto the bottom edge of the aluminum ramp and ordered John to roll aboard, <strong class="text-body-emphasis">Erin made an executive decision: John was coming home instead.</strong> Driving her power wheelchair forward across the wet bricks of the Commonwealth Mall sidewalk, Erin wedged her heavy steel frame directly between John's chair and the front boarding ramp, locking her brakes and covering John's cold hand on his joystick with her own. Refusing to yield the sidewalk despite Valerie's furious demands that John get on the bus, Erin held a locked perimeter on the curb until John reversed his chair away from the ramp and the steel doors hissed shut without him—then escorted her twin brother side by side the two blocks down the sidewalk to the safety of their apartment on Progress Street NE.
                        </p>
                    </section>

                    <wa-divider class="my-4"></wa-divider>

                    <!-- ACT IV: SANCTUARY IN THE STORM -->
                    <section id="act-4" class="mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-body-emphasis mb-0">
                                IV. The Twin's Safe Harbor
                            </h2>
                            <wa-badge variant="neutral" appearance="filled-outlined">Lost Sounds • Track 13: Sanctuary in the Storm</wa-badge>
                        </div>

                        <p>
                            Getting off the Commonwealth Mall sidewalk was only the physical extraction; surviving the aftermath required a sanctuary. Two blocks away, inside the warmth of their ground-floor accessible apartment on <strong class="text-body-emphasis">Progress Street NE</strong>—with their two power wheelchairs charging side by side in the hallway, John's buzzing flip phone powered off inside a ceramic cookie jar, and the deadbolt locked against the November storm—the psychological vault inside John's chest finally swung open.
                        </p>

                        <div class="my-4">
                            <wa-callout variant="neutral" appearance="filled-outlined">
                                <wa-icon slot="icon" name="house-heart" family="duotone"></wa-icon>
                                <div class="fw-bold text-uppercase small mb-1">
                                    Lyrics Excerpt: "Sanctuary in the Storm" (Duet: Ryan as John &amp; Cassidy as Erin)
                                </div>
                                <p class="fst-italic mb-2">
                                    <strong>[John]:</strong> "I was lost inside a silent scream / Living out a fractured dream / A ship without a sail, adrift at sea / Thought the darkness was a part of me..."
                                </p>
                                <p class="fst-italic mb-0">
                                    <strong>[Erin &amp; John]:</strong> "You are my sanctuary in the storm / A fire here to keep me safe and warm / When the thunder rolls and the cold winds blow / I'll never let you go / We are a sanctuary in the storm."
                                </p>
                            </wa-callout>
                        </div>

                        <p class="mb-0">
                            For weeks, as Valerie raged and tried every manipulative tactic to lure him back, Erin stood as an immovable firewall. In the quiet safety of his fraternal twin sister's home, John learned that love was never supposed to feel like a cage, and that he didn't have to endure darkness to deserve connection.
                        </p>
                    </section>

                    <wa-divider class="my-4"></wa-divider>

                    <!-- ACT V: NOT HER -->
                    <section id="act-5" class="mb-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-body-emphasis mb-0">
                                V. The Circle Completed
                            </h2>
                            <wa-badge variant="success" appearance="filled-outlined">Lost Sounds • Track 14: Not Her</wa-badge>
                        </div>

                        <p>
                            The following spring, the twins' roles reversed. Outside the <strong class="text-body-emphasis">Kincaid Hall Auditorium</strong> after an evening research symposium, a slick, practiced predator named Marcus cornered Erin's power wheelchair in a recessed Ironstone alcove—planting his boot on the base of the ramp to block her turning radius and deploying the exact same charming, isolating script that had once trapped John (<em>"A girl as brilliant as you shouldn't have to play caretaker just because you share a birthday..."</em>).
                        </p>

                        <div class="my-4">
                            <wa-callout variant="success" appearance="filled-outlined">
                                <wa-icon slot="icon" name="shield-halved" family="classic" variant="solid"></wa-icon>
                                <div class="fw-bold text-uppercase small mb-1">
                                    Lyrics Excerpt: "Not Her" (Duet: Ryan as John &amp; Cassidy as Erin)
                                </div>
                                <p class="fst-italic mb-2">
                                    <strong>[Erin]:</strong> "Brother, listen, something's wrong / We've been here for far too long / His eyes are cold, his words are cheap / A poisoned promise he can't keep / Just take my hand, let's turn and run / Before his wicked game is won!"
                                </p>
                                <p class="fst-italic mb-0">
                                    <strong>[John]:</strong> "I know your game, I know your kind / The little traps you leave behind... I've walked through fire, I've paid the cost / And I won't let another light be lost / Not her. Not today. Not ever again!"
                                </p>
                            </wa-callout>
                        </div>

                        <p class="mb-0">
                            Because John had walked through that fire and paid the cost, his analytical mind recognized the predator's routine in a fraction of a second. Thumb-shifting his power wheelchair into its highest outdoor climbing gear, John drove straight up the concrete incline and wedged two hundred and fifty pounds of rolling steel and battery torque directly between Marcus and Erin's chair. Dismantling Marcus's script to his face with surgical fury, John forced him to retreat into the rain—rescuing his twin sister outside Kincaid Hall just as she had rescued him along Commonwealth Mall.
                        </p>
                    </section>

                </div>
            </wa-card>

            <!-- ==================================================================
                 CROSS-UNIVERSE RESONANCE: READERS ACROSS THE RAGGIESOFT NARRATIVES
                 ================================================================== -->
            <h3 class="h4 fw-bold text-uppercase text-body-emphasis mb-3 border-bottom pb-2">
                <wa-icon name="diagram-project" family="duotone" class="text-primary me-2"></wa-icon>
                Cross-Universe Narrative Echoes
            </h3>
            <p class="text-body-secondary mb-4">
                Because Ryan and Cassidy O'Connell published the story of <strong class="text-body-emphasis">John and Erin</strong> inside the liner booklet of <em>Progress Street</em> in October 2004, fans of The Stardust Engine across the interconnected RaggieSoft universe read this exact story—turning these songs into a real-world warning flare when predators entered their own lives.
            </p>

            <div class="row g-4 mb-5">
                <!-- Callout 1: Jessica's Train Ride (Kent Station vs. Commonwealth Mall) -->
                <div class="col-md-6">
                    <wa-card class="h-100 shadow-sm">
                        <div slot="header" class="d-flex align-items-center justify-content-between gap-2">
                            <wa-badge variant="brand" appearance="filled-outlined">The Rachel Narrative • Nov 2006</wa-badge>
                            <wa-icon name="train-subway" family="duotone" class="text-primary fs-5"></wa-icon>
                        </div>
                        <h4 class="h5 fw-bold text-body-emphasis mb-2">
                            Jessica's Train Ride: Kent Station vs. Commonwealth Mall
                        </h4>
                        <p class="text-body small mb-3">
                            In November 2006, at <strong class="text-body-emphasis">Kent Station</strong> in Washington State, <strong class="text-body-emphasis">Jessica</strong> sees the frayed, exhausted shadow on her brother <strong class="text-body-emphasis">Michael's</strong> face as he stands on the platform beside his abuser, Delores. Unlike Erin along Commonwealth Mall, Jessica hesitates—boarding the commuter train to Seattle King Street Station alone and letting the pneumatic steel doors hiss shut without pulling Michael aboard.
                        </p>
                        <p class="text-body small mb-0">
                            Moments later, when <strong class="text-body-emphasis"><em>"Before the Distance"</em></strong> comes on shuffle on her pre-release <strong class="text-body-emphasis">Quantum Zephyr</strong> media player, Jessica remembers reading The Stardust Engine's story of <strong class="text-body-emphasis">John and Erin</strong>. Realizing in horror that she and Michael are living out the exact same story—except she failed to make Erin's executive decision before the doors closed—Jessica weeps openly in her wheelchair bay all the way to Seattle and immediately dispatches Andromeda to try to extract him.
                        </p>
                    </wa-card>
                </div>

                <!-- Callout 2: Freddie & Paige (Why They've Heard "Thunder in the Rain" Before) -->
                <div class="col-md-6">
                    <wa-card class="h-100 shadow-sm">
                        <div slot="header" class="d-flex align-items-center justify-content-between gap-2">
                            <wa-badge variant="warning" appearance="filled-outlined">CPI Campus Lore • Freddie &amp; Paige</wa-badge>
                            <wa-icon name="bolt-lightning" family="duotone" class="text-warning-emphasis fs-5"></wa-icon>
                        </div>
                        <h4 class="h5 fw-bold text-body-emphasis mb-2">
                            Freddie &amp; Paige: The Warning Inside <em>"Thunder in the Rain"</em>
                        </h4>
                        <p class="text-body small mb-3">
                            After seeing Ryan and Cassidy O'Connell perform live in <strong class="text-body-emphasis">Kincaid Hall</strong> during their CPI freshman orientation, <strong class="text-body-emphasis">Freddie</strong> and <strong class="text-body-emphasis">Paige</strong> devoured The Stardust Engine's discography and liner notes—including the published booklet story of how John met his abuser at a Kincaid Hall speed-dating event when the organizer accidentally skipped past <em>"Seconds Into Forever"</em> and played <strong class="text-body-emphasis"><em>"Thunder in the Rain"</em></strong> instead.
                        </p>
                        <p class="text-body small mb-0">
                            When <em>"Thunder in the Rain"</em> later echoes across campus, Freddie and Paige find themselves wondering why they have heard that exact song before—before connecting the 150-BPM stadium anthem to the liner-note story of John's speed-dating ambush and recognizing how predators use chaos and noise to mask their approach.
                        </p>
                    </wa-card>
                </div>
            </div>

            <!-- ==================================================================
                 GATEWAY LINKS TO PLAYLIST, NOVEL & ALBUMS (<wa-callout>)
                 ================================================================== -->
            <div class="mb-5">
                <wa-callout variant="brand" appearance="filled-outlined">
                    <wa-icon slot="icon" name="headphones" family="duotone"></wa-icon>
                    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
                        <div>
                            <div class="fw-bold text-uppercase mb-1">
                                Experience the Complete Story &amp; Soundtrack
                            </div>
                            <p class="small mb-0">
                                Stream the official 5-song narrative playlist on <em>The Listening Room</em> or read the full four-chapter adaptation in <em>The Ocean View Archives</em>.
                            </p>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <wa-button size="small" variant="brand" appearance="accent" href="https://music.raggiesoft.com/playlists/john-and-erin" target="_blank">
                                <wa-icon slot="start" name="list-music" family="duotone"></wa-icon>
                                Story Playlist
                                <wa-icon slot="end" name="arrow-up-right-from-square" family="classic" variant="solid"></wa-icon>
                            </wa-button>
                            <wa-button size="small" variant="neutral" appearance="filled-outlined" href="https://books.raggiesoft.com/erin" target="_blank">
                                <wa-icon slot="start" name="book-open-reader" family="duotone"></wa-icon>
                                Read Novel
                                <wa-icon slot="end" name="arrow-up-right-from-square" family="classic" variant="solid"></wa-icon>
                            </wa-button>
                            <wa-button size="small" variant="neutral" appearance="outlined" href="/engine-room/artists/stardust-engine/discography/2004-progress-street">
                                Progress Street (2004)
                            </wa-button>
                            <wa-button size="small" variant="neutral" appearance="outlined" href="/engine-room/artists/stardust-engine/discography/2007-lost-sounds">
                                Lost Sounds (2007)
                            </wa-button>
                        </div>
                    </div>
                </wa-callout>
            </div>

            <?php
            $nav = [
                'prev' => ['url' => '/engine-room/artists/stardust-engine/story/crucible', 'label' => 'CPI & The Crucible'],
                'overview' => ['url' => '/engine-room/artists/stardust-engine/story', 'label' => 'The Archives'],
                'next' => ['url' => '/engine-room/artists/stardust-engine/story/our-own-frequency', 'label' => 'The Burnout Hiatus']
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>

</div>
