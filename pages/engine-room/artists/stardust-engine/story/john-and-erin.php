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
 *      after she pulls him onto the Blue Ridge Transit bus at the CPI Transit Center
 *      in "Before the Distance", and John later rescues Erin from a predator in "Not Her".
 *
 * 2. Cross-Universe Interconnectivity:
 *    - Because this narrative was published by The Stardust Engine inside the physical
 *      and digital liner booklets of "Progress Street" (2004), characters across the
 *      RaggieSoft universe (including Jessica & Michael in "The Rachel Narrative", and
 *      Freddie & Paige in "The Paige Narrative") have read the story of John and Erin.
 *    - When Jessica leaves Michael behind at Kent Station in November 2006 ("Jessica's
 *      Train Ride") and hears "Before the Distance" on her Quantum Zephyr media player,
 *      she realizes in horror that she and her brother are living out the exact story of
 *      John and Erin—except unlike Erin at the CPI Transit Center, Jessica let the steel
 *      doors close without pulling her brother aboard.
 *    - Likewise, when "Thunder in the Rain" surfaces around Freddie and Paige, having
 *      read the liner notes makes them wonder why they have heard "Thunder in the Rain"
 *      before and recognize the hidden warning beneath its stadium-rock adrenaline.
 *
 * 3. UI & Component Dependencies:
 *    - Bootstrap 5 dark-mode layout integrated with Web Awesome (<wa-card>, <wa-badge>,
 *      <wa-button>) and Font Awesome 6 Duotone icons.
 *    - Includes `navigation/narrative-stepper.php` for sequential archive navigation.
 * ============================================================================
 */

$pageTitle = "Before the Distance: The Story of John & Erin | The Stardust Engine";
?>

<div class="container py-5">

    <!-- ======================================================================
         HEADER: ARCHIVAL LINER BOOKLET PRESENTATION
         ====================================================================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <wa-badge variant="brand" class="mb-3 text-uppercase letter-spacing-1">
                <i class="fa-duotone fa-book-sparkles me-2"></i>Official Liner-Note Narrative (2004 / 2007)
            </wa-badge>
            <h1 class="display-4 fw-bold text-uppercase text-primary mb-2" style="font-family: 'Impact', sans-serif;">
                Before the Distance: The Story of John &amp; Erin
            </h1>
            <p class="h4 text-warning fw-bold mb-4">
                A Five-Song Twin Narrative Published by Ryan &amp; Cassidy O'Connell
            </p>
            <p class="lead text-muted mx-auto mb-4" style="max-width: 820px;">
                Originally conceived by Ryan and Cassidy O'Connell in 1986 and published in the liner booklet of 2004's <em>Progress Street</em> (with its concluding vault chapters restored on 2007's <em>Lost Sounds</em>), the story of fraternal twins <strong>John and Erin</strong>—both of whom use heavy-duty motorized power wheelchairs to navigate the steep, hilly limestone campus of Commonwealth Polytechnic Institute (CPI)—is one of The Stardust Engine's most famous pieces of in-universe fiction, portrayed visually by Ryan and Cassidy themselves.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                <a href="https://music.raggiesoft.com/playlists/john-and-erin" target="_blank" rel="noopener" class="btn btn-primary fw-bold text-uppercase px-4 py-2 shadow-sm">
                    <i class="fa-duotone fa-list-music me-2"></i>Stream the 5-Song Story Playlist
                </a>
                <a href="/raggiesoft-books/books/erin" class="btn btn-warning text-dark fw-bold text-uppercase px-4 py-2 shadow-sm">
                    <i class="fa-duotone fa-book-open-reader me-2"></i>Read the Full Novel (Ocean View Archives)
                </a>
                <a href="https://books.raggiesoft.com/erin" target="_blank" rel="noopener" class="btn btn-outline-light fw-bold text-uppercase px-4 py-2">
                    <i class="fa-duotone fa-books me-2"></i>Open in Book Library <i class="fa-solid fa-arrow-up-right-from-square ms-1 small"></i>
                </a>
            </div>
            <div class="rounded-4 overflow-hidden border border-secondary shadow-lg mx-auto mt-3" style="max-width: 920px;">
                <img src="https://assets.raggiesoft.com/engine-room-records/playlists/john-and-erin/social-preview.jpg"
                     alt="Before the Distance: The Story of John and Erin — Ryan and Cassidy O'Connell in motorized power wheelchairs holding hands in front of a Blue Ridge Transit bus at the CPI Transit Center"
                     class="img-fluid w-100 d-block"
                     loading="eager">
            </div>
        </div>
    </div>

    <!-- ======================================================================
         FIVE-SONG SUITE INDEX BAR
         ====================================================================== -->
    <div class="card bg-dark border-secondary shadow-sm mb-5">
        <div class="card-header bg-black bg-opacity-50 border-secondary py-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <span class="fw-bold text-uppercase text-light small letter-spacing-1">
                <i class="fa-duotone fa-list-music text-warning me-2"></i>The Five-Track Narrative Suite
            </span>
            <span class="small text-muted font-monospace">
                Progress Street (2004) &amp; Lost Sounds (2007)
            </span>
        </div>
        <div class="card-body p-3">
            <div class="row g-2 text-center">
                <!-- Part I -->
                <div class="col-12 col-md-4 col-lg">
                    <a href="#act-1" class="text-decoration-none d-block p-2 rounded border border-secondary border-opacity-50 bg-black bg-opacity-25 h-100">
                        <div class="small text-warning fw-bold text-uppercase">Part I</div>
                        <div class="fw-bold text-light">Seconds Into Forever</div>
                        <div class="small text-muted">Progress Street • Track 3</div>
                    </a>
                </div>
                <!-- Part II -->
                <div class="col-12 col-md-4 col-lg">
                    <a href="#act-2" class="text-decoration-none d-block p-2 rounded border border-danger border-opacity-50 bg-black bg-opacity-25 h-100">
                        <div class="small text-danger fw-bold text-uppercase">Part II</div>
                        <div class="fw-bold text-light">Thunder in the Rain</div>
                        <div class="small text-muted">Progress Street • Track 4</div>
                    </a>
                </div>
                <!-- Part III -->
                <div class="col-12 col-md-4 col-lg">
                    <a href="#act-3" class="text-decoration-none d-block p-2 rounded border border-info border-opacity-50 bg-black bg-opacity-25 h-100">
                        <div class="small text-info fw-bold text-uppercase">Part III</div>
                        <div class="fw-bold text-light">Before the Distance</div>
                        <div class="small text-muted">Progress Street • Track 8</div>
                    </a>
                </div>
                <!-- Part IV -->
                <div class="col-12 col-md-6 col-lg">
                    <a href="#act-4" class="text-decoration-none d-block p-2 rounded border border-primary border-opacity-50 bg-black bg-opacity-25 h-100">
                        <div class="small text-primary fw-bold text-uppercase">Part IV</div>
                        <div class="fw-bold text-light">Sanctuary in the Storm</div>
                        <div class="small text-muted">Lost Sounds • Track 13</div>
                    </a>
                </div>
                <!-- Part V -->
                <div class="col-12 col-md-6 col-lg">
                    <a href="#act-5" class="text-decoration-none d-block p-2 rounded border border-success border-opacity-50 bg-black bg-opacity-25 h-100">
                        <div class="small text-success fw-bold text-uppercase">Part V</div>
                        <div class="fw-bold text-light">Not Her</div>
                        <div class="small text-muted">Lost Sounds • Track 14</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================================================
         MAIN IN-UNIVERSE PUBLISHED LINER-NOTE STORY
         ====================================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card bg-dark border-primary shadow-lg mb-5">
                <div class="card-header bg-primary bg-opacity-10 border-primary py-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="fw-bold text-uppercase text-primary">
                        <i class="fa-duotone fa-book-open-cover me-2"></i>Excerpt from the Official Liner Booklet
                    </span>
                    <span class="badge bg-primary text-uppercase">Written by Ryan &amp; Cassidy O'Connell</span>
                </div>

                <div class="card-body p-4 p-lg-5 text-body leading-relaxed">

                    <!-- ACT I & II: SPEED DATING & THE SKIP BUTTON -->
                    <section id="act-1" class="mb-5 pb-4 border-bottom border-secondary border-opacity-25">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-warning mb-0">
                                I &amp; II. The Skip Button at the Mixer
                            </h2>
                            <div class="d-flex gap-2">
                                <span class="badge bg-warning text-dark">Track 3: Seconds Into Forever</span>
                                <span class="badge bg-danger">Track 4: Thunder in the Rain</span>
                            </div>
                        </div>

                        <p>
                            Fraternal twins <strong>John and Erin</strong> (portrayed in the liner-note photography by <strong>Ryan and Cassidy O'Connell</strong>) grew up sharing an unspoken frequency. Because the Blacksburg plateau and the Commonwealth Polytechnic Institute (CPI) campus are carved into steep Appalachian hills, both John and Erin use heavy-duty motorized power wheelchairs to navigate the five-percent campus grades. Where Erin was instinctive, fierce, and fiercely protective, John was quiet, analytical, and gentle—a CPI systems engineering undergraduate who trusted people at face value and assumed that everyone operated by the same honest rules he did.
                        </p>
                        <p>
                            In the autumn of their sophomore year in Blacksburg, Erin talked John into attending a Friday night campus speed-dating mixer in the Newman Hall Second-Floor Lounge. The rules were simple: each round lasted exactly three minutes. To time the rotations without a harsh buzzer, the student organizer had cued up a three-minute, 85-BPM romantic power ballad called <strong><em>"Seconds Into Forever"</em></strong>—a gentle, shimmering song built around the promise that <em>"It only takes three minutes to believe!"</em>
                        </p>

                        <div id="act-2" class="my-4 p-4 rounded bg-black bg-opacity-50 border-start border-4 border-danger">
                            <p class="fw-bold text-danger text-uppercase small mb-2">
                                <i class="fa-solid fa-forward-step me-2"></i>The Fatal Track Skip: "Thunder in the Rain"
                            </p>
                            <p class="fst-italic text-muted mb-0">
                                "The clock on the wall is a guillotine blade / Cutting down the promises we never made... The neon signs are flashing 'Danger' in red / But I'd rather be living than safe and dead / Hold on tight, baby, don't let go / We're dancing on the edge of the volcano!"
                            </p>
                        </div>

                        <p>
                            Just as a striking, charismatic graduate student named Valerie sat down at Table 4 across from John's power wheelchair, the flustered student running the sound system accidentally fat-fingered the skip button on the CD deck—bypassing Track 3 (<em>"Seconds Into Forever"</em>) and blasting Track 4: <strong><em>"Thunder in the Rain."</em></strong>
                        </p>
                        <p class="mb-0">
                            For ten deceptive seconds, a lush Vangelis-style synthesizer swell filled the room. Then, at 150 BPM in C minor, the guitars and drums detonated. Instead of rotating or laughing off the mistake, Valerie leaned in, locking eyes with John over the roaring chorus and telling him that the universe had skipped the polite ballad because the two of them were meant for the storm. <strong>Crucially, John did not realize he was looking at his future abuser.</strong> Blinded by the pounding adrenaline of the song and the overwhelming intensity of her attention, he mistook a textbook predatory love-bombing ambush for destiny—completely missing that the lyrics blasting from the speakers were literally flashing <em>"Danger" in red</em>.
                        </p>
                    </section>

                    <!-- ACT III: THE CPI TRANSIT CENTER -->
                    <section id="act-3" class="mb-5 pb-4 border-bottom border-secondary border-opacity-25">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-info mb-0">
                                III. The Executive Decision at the CPI Transit Center
                            </h2>
                            <span class="badge bg-info text-dark">Track 8: Before the Distance</span>
                        </div>

                        <p>
                            Once the trap closed, the isolation was surgical. Within weeks of that speed-dating mixer, Valerie moved into John's orbit and began systematically cutting every wire that connected him to safety. She made him feel guilty whenever he called Erin. She monitored his classes, degraded his confidence behind closed doors, and convinced him that her suffocating control was what adult romance required him to endure.
                        </p>
                        <p>
                            By late November, John was a ghost of himself. When Erin finally managed to arrange a brief meetup with him on a freezing, rain-slicked evening at the <strong>CPI Transit Center</strong> (Bay 1), John didn't arrive alone. Valerie stood right beside his power wheelchair under the concrete canopy, her fingers dug possessively into his wet rain-jacket sleeve, answering questions on his behalf while John stared at the wet pavement with his hand limp beside his joystick controller.
                        </p>

                        <div class="my-4 p-4 rounded bg-black bg-opacity-50 border-start border-4 border-info">
                            <p class="fw-bold text-info text-uppercase small mb-2">
                                <i class="fa-solid fa-bus me-2"></i>Lyrics Excerpt: "Before the Distance" (Sung by Cassidy as Erin)
                            </p>
                            <p class="fst-italic text-muted mb-2">
                                "I saw the shadow falling across your face / A quiet surrender in a crowded place / You wore a mask, but the edges were frayed / Lost in the rules of a game that we played..."
                            </p>
                            <p class="fst-italic text-muted mb-0">
                                "When the steel doors close and the platform clears / You can hear the truth grinding in the gears... Logic is a cage when the danger is real / You can't code the panic, you can't fake what you feel / I'm turning around, I'm breaking the track / Whatever it costs me, I'm taking it back!"
                            </p>
                        </div>

                        <p>
                            A <strong>Blue Ridge Transit</strong> low-floor city bus hissed to a stop at the boarding curb, its amber LED headboard reflecting off the puddles as the pneumatic suspension kneeled and the yellow-bordered aluminum ADA wheelchair ramp deployed onto the concrete. Erin was supposed to roll onto that bus alone and ride back to her accessible apartment on Progress Street while John went home with Valerie.
                        </p>
                        <p>
                            Erin guided her power wheelchair up the ramp into the forward securement bay and looked back through the rain-streaked glass of the open doorway. Seeing the terror and quiet surrender in her twin brother's eyes as Valerie pivoted him toward the parking lot, Erin realized with sudden, chilling clarity that if she let those steel doors close—if she traded her courage for polite little lies and rode away while John stayed on that platform—the distance would swallow him whole.
                        </p>
                        <p class="mb-0">
                            As the hydraulic warning pump whined to raise the ramp, <strong>Erin made an executive decision: John was coming with her.</strong> Calling out to the driver to hold the ramp, Erin pulled her joystick back, reversed her power wheelchair straight down the wet aluminum incline onto the platform, and positioned her steel frame directly between Valerie and her brother. Reaching across their armrests to cover John's cold hand with her own, Erin told him to put his chair in gear. Breaking free of Valerie's grasp, John engaged his motors and rolled up the ramp right behind his twin sister just as the aluminum ramp folded up and the steel doors hissed shut—leaving his furious abuser stranded on the platform.
                        </p>
                    </section>

                    <!-- ACT IV: SANCTUARY IN THE STORM -->
                    <section id="act-4" class="mb-5 pb-4 border-bottom border-secondary border-opacity-25">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-primary mb-0">
                                IV. The Twin's Safe Harbor
                            </h2>
                            <span class="badge bg-primary">Lost Sounds • Track 13: Sanctuary in the Storm</span>
                        </div>

                        <p>
                            Getting off the platform was only the physical extraction; surviving the aftermath required a sanctuary. Back inside the warmth of Erin's ground-floor accessible apartment on Progress Street NW—with their two power wheelchairs charging side by side in the hallway, John's buzzing flip phone powered off inside a ceramic cookie jar, and the deadbolt locked against the November storm—the psychological vault inside John's chest finally swung open.
                        </p>

                        <div class="my-4 p-4 rounded bg-black bg-opacity-50 border-start border-4 border-primary">
                            <p class="fw-bold text-primary text-uppercase small mb-2">
                                <i class="fa-solid fa-house-heart me-2"></i>Lyrics Excerpt: "Sanctuary in the Storm" (Duet: Ryan as John &amp; Cassidy as Erin)
                            </p>
                            <p class="fst-italic text-muted mb-2">
                                <strong>[John]:</strong> "I was lost inside a silent scream / Living out a fractured dream / A ship without a sail, adrift at sea / Thought the darkness was a part of me..."
                            </p>
                            <p class="fst-italic text-muted mb-0">
                                <strong>[Erin &amp; John]:</strong> "You are my sanctuary in the storm / A fire here to keep me safe and warm / When the thunder rolls and the cold winds blow / I'll never let you go / We are a sanctuary in the storm."
                            </p>
                        </div>

                        <p class="mb-0">
                            For weeks, as Valerie raged and tried every manipulative tactic to lure him back, Erin stood as an immovable firewall. In the quiet safety of his fraternal twin sister's home, John learned that love was never supposed to feel like a cage, and that he didn't have to endure darkness to deserve connection.
                        </p>
                    </section>

                    <!-- ACT V: NOT HER -->
                    <section id="act-5" class="mb-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h2 class="h3 fw-bold text-success mb-0">
                                V. The Circle Completed
                            </h2>
                            <span class="badge bg-success">Lost Sounds • Track 14: Not Her</span>
                        </div>

                        <p>
                            The following spring, the twins' roles reversed. Outside the Newman Hall auditorium after an evening research symposium, a slick, practiced predator named Marcus cornered Erin's power wheelchair in a recessed limestone alcove—planting his boot on the base of the ramp to block her turning radius and deploying the exact same charming, isolating script that had once trapped John (<em>"A girl as brilliant as you shouldn't have to play caretaker just because you share a birthday..."</em>).
                        </p>

                        <div class="my-4 p-4 rounded bg-black bg-opacity-50 border-start border-4 border-success">
                            <p class="fw-bold text-success text-uppercase small mb-2">
                                <i class="fa-solid fa-shield-halved me-2"></i>Lyrics Excerpt: "Not Her" (Duet: Ryan as John &amp; Cassidy as Erin)
                            </p>
                            <p class="fst-italic text-muted mb-2">
                                <strong>[Erin]:</strong> "Brother, listen, something's wrong / We've been here for far too long / His eyes are cold, his words are cheap / A poisoned promise he can't keep / Just take my hand, let's turn and run / Before his wicked game is won!"
                            </p>
                            <p class="fst-italic text-muted mb-0">
                                <strong>[John]:</strong> "I know your game, I know your kind / The little traps you leave behind... I've walked through fire, I've paid the cost / And I won't let another light be lost / Not her. Not today. Not ever again!"
                            </p>
                        </div>

                        <p class="mb-0">
                            Because John had walked through that fire and paid the cost, his analytical mind recognized the predator's routine in a fraction of a second. Thumb-shifting his power wheelchair into its highest outdoor climbing gear, John drove straight up the concrete incline and wedged two hundred and fifty pounds of rolling steel and battery torque directly between Marcus and Erin's chair. Dismantling Marcus's script to his face with surgical fury, John forced him to retreat into the rain—rescuing his twin sister just as she had rescued him at the CPI Transit Center.
                        </p>
                    </section>

                </div>
            </div>

            <!-- ==================================================================
                 CROSS-UNIVERSE RESONANCE: READERS ACROSS THE RAGGIESOFT NARRATIVES
                 ================================================================== -->
            <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">
                <i class="fa-duotone fa-diagram-project text-info me-2"></i>Cross-Universe Narrative Echoes
            </h3>
            <p class="text-muted mb-4">
                Because Ryan and Cassidy O'Connell published the story of <strong>John and Erin</strong> inside the liner booklet of <em>Progress Street</em> in October 2004, fans of The Stardust Engine across the interconnected RaggieSoft universe read this exact story—turning these songs into a real-world warning flare when predators entered their own lives.
            </p>

            <div class="row g-4 mb-5">
                <!-- Callout 1: Jessica's Train Ride (Kent Station vs. CPI Transit Center) -->
                <div class="col-md-6">
                    <div class="card bg-dark border-info h-100 shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-info text-dark text-uppercase fw-bold">The Rachel Narrative • Nov 2006</span>
                                <i class="fa-duotone fa-train-subway text-info fs-4"></i>
                            </div>
                            <h4 class="h5 fw-bold text-light mb-2">
                                Jessica's Train Ride: Kent Station vs. The CPI Transit Center
                            </h4>
                            <p class="text-muted small mb-3">
                                In November 2006, at <strong>Kent Station</strong> in Washington State, <strong>Jessica</strong> sees the frayed, exhausted shadow on her brother <strong>Michael's</strong> face as he stands on the platform beside his abuser, Delores. Unlike Erin at the CPI Transit Center, Jessica hesitates—boarding the commuter train to Seattle King Street Station alone and letting the pneumatic steel doors hiss shut without pulling Michael aboard.
                            </p>
                            <p class="text-muted small mb-0">
                                Moments later, when <strong><em>"Before the Distance"</em></strong> comes on shuffle on her pre-release <strong>Quantum Zephyr</strong> media player, Jessica remembers reading The Stardust Engine's story of <strong>John and Erin</strong>. Realizing in horror that she and Michael are living out the exact same story—except she failed to make Erin's executive decision before the doors closed—Jessica weeps openly in her wheelchair bay all the way to Seattle and immediately dispatches Andromeda to try to extract him.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Callout 2: Freddie & Paige (Why They've Heard "Thunder in the Rain" Before) -->
                <div class="col-md-6">
                    <div class="card bg-dark border-warning h-100 shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-warning text-dark text-uppercase fw-bold">CPI Campus Lore • Freddie &amp; Paige</span>
                                <i class="fa-duotone fa-bolt-lightning text-warning fs-4"></i>
                            </div>
                            <h4 class="h5 fw-bold text-light mb-2">
                                Freddie &amp; Paige: The Warning Inside <em>"Thunder in the Rain"</em>
                            </h4>
                            <p class="text-muted small mb-3">
                                After seeing Ryan and Cassidy O'Connell perform live in Newman Hall during their CPI freshman orientation, <strong>Freddie</strong> and <strong>Paige</strong> devoured The Stardust Engine's discography and liner notes—including the published booklet story of how John met his abuser at a campus speed-dating event when the organizer accidentally skipped past <em>"Seconds Into Forever"</em> and played <strong><em>"Thunder in the Rain"</em></strong> instead.
                            </p>
                            <p class="text-muted small mb-0">
                                When <em>"Thunder in the Rain"</em> later echoes across campus, Freddie and Paige find themselves wondering why they have heard that exact song before—before connecting the 150-BPM stadium anthem to the liner-note story of John's speed-dating ambush and recognizing how predators use chaos and noise to mask their approach.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==================================================================
                 GATEWAY LINKS TO PLAYLIST, NOVEL & ALBUMS
                 ================================================================== -->
            <div class="alert alert-dark border-secondary p-4 mb-5 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h5 class="h6 fw-bold text-uppercase text-light mb-1">
                        <i class="fa-duotone fa-headphones me-2 text-primary"></i>Experience the Complete Story &amp; Soundtrack
                    </h5>
                    <p class="small text-muted mb-0">
                        Stream the official 5-song narrative playlist on <em>The Listening Room</em> or read the full four-chapter adaptation in <em>The Ocean View Archives</em>.
                    </p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://music.raggiesoft.com/playlists/john-and-erin" target="_blank" rel="noopener" class="btn btn-sm btn-primary text-uppercase fw-bold">
                        <i class="fa-duotone fa-list-music me-1"></i>Story Playlist <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                    </a>
                    <a href="/raggiesoft-books/books/erin" class="btn btn-sm btn-warning text-dark text-uppercase fw-bold">
                        <i class="fa-duotone fa-book-open-reader me-1"></i>Read Novel
                    </a>
                    <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="btn btn-sm btn-outline-warning text-uppercase fw-bold">
                        Progress Street (2004)
                    </a>
                    <a href="/engine-room/artists/stardust-engine/discography/2007-lost-sounds" class="btn btn-sm btn-outline-info text-uppercase fw-bold">
                        Lost Sounds (2007)
                    </a>
                </div>
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

