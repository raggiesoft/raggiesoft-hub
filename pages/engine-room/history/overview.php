<?php
// pages/engine-room/history/overview.php
// Dual-purpose page: Real-world portfolio disclosure + Fictional Universe Timeline.

$pageTitle = "Company History - Engine Room Records";

// Define the root path for album art
$album_web_path = "https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine";
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase industrial-font mb-3">The History</h1>
        <p class="lead text-muted" style="max-width: 800px; margin: 0 auto;">
            Two distinct timelines. One shared architecture.
        </p>
    </div>

    <!-- REAL WORLD DISCLAIMER -->
    <div class="card bg-dark text-white border-secondary mb-5 shadow-lg">
        <div class="card-header bg-black border-secondary d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0 text-uppercase font-monospace text-info">
                <i class="fa-duotone fa-server me-2"></i>Real-World Infrastructure
            </h5>
            <span class="badge bg-secondary font-monospace">EST. 2026</span>
        </div>
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="h4 fw-bold text-white mb-3">The RaggieSoft Audio Initiative</h3>
                    <p class="text-white-75">
                        In the real world, <strong>Engine Room Records</strong> is a digital portfolio and publishing entity created by Michael P. Ragsdale[cite: 18]. Launched in 2026, it serves as the organizational hub for a massive, multi-band generative music project[cite: 18]. 
                    </p>
                    <div class="alert alert-info bg-black border-info mb-4">
                        <strong><i class="fa-solid fa-timeline me-2"></i>Timeline Notice:</strong> While the narrative lore spans decades (e.g., 1983, 1992, 1997), <strong>all music across this entire catalog was produced in 2025 and 2026</strong>, and officially distributed to streaming platforms via DistroKid in 2026[cite: 18].
                    </div>
                    <ul class="text-white-75 mb-4">
                        <li class="mb-2"><strong>Audio Generation:</strong> All instrumentation, synthetic vocals, and musical compositions are generated utilizing a commercial-tier <span class="text-warning">Suno Premium</span> license[cite: 18].</li>
                        <li class="mb-2"><strong>Lore & Lyrics:</strong> The overarching narrative, fictional corporate structures, and original lyrics are human-directed, with <span class="text-info">Gemini</span> acting as a co-producer for style refinement and worldbuilding organization[cite: 18].</li>
                        <li><strong>Distribution:</strong> The catalog is distributed to global streaming platforms (Spotify, Apple Music, etc.) while remaining freely available on this platform under a <strong>CC BY-SA 4.0</strong> license[cite: 18].</li>
                    </ul>
                    <a href="/about/ai-disclaimer" class="btn btn-outline-info btn-sm text-uppercase fw-bold font-monospace">
                        <i class="fa-duotone fa-robot-astromech me-2"></i>Read Full AI Disclaimer
                    </a>
                </div>
                <div class="col-md-4 text-center mt-4 mt-md-0">
                    <i class="fa-duotone fa-microchip fa-5x text-secondary opacity-50"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- THE NARRATIVE LORE -->
    <div class="position-relative mt-5 pt-5">
        
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-uppercase mb-3">The Narrative Timeline</h2>
            <p class="text-muted">The fictional history of Engine Room Records.</p>
            <hr class="w-25 mx-auto border-danger opacity-50 border-2">
        </div>

        <div class="timeline-container position-relative border-start border-danger border-3 ms-md-4 ps-4">
            
            <!-- 1987: Electric Color -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-info rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-info text-uppercase mb-1">1987: Electric Color</h3>
                <p class="text-body-secondary font-monospace small mb-3">APEX RECORDS // THE GILDED CAGE</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1987-electric-color/album-art.jpg" alt="Electric Color Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    The Stardust Engine exploded into the mainstream with their 1987 debut, <em>Electric Color</em>. The title track was a massive, studio-mandated synth-pop hit, sitting at the #2 spot for six weeks[cite: 19]. While fans embraced it, the band viewed this era as the beginning of a "Cold War" with Apex Records[cite: 27].
                                </p>
                                <p class="text-body-secondary">
                                    The studio constantly prioritized polished, radio-friendly production over the band's authentic rock roots[cite: 19]. Tracks like "Dancing in the Neon" kept the lights on, but Ryan began hiding angsty, anti-corporate lyrics inside the safe pop wrappers ("Plastic Sky") in an act of malicious compliance[cite: 19]. Even "My Anchor Holds," marketed heavily by Apex as a romance, was actually the siblings' desperate love letter to their own unbreakable family bond under the suffocating pressure of the pop machine[cite: 19].
                                </p>
                                <p class="text-body-secondary mb-4">
                                    The true heart of the band was buried at the end of the album. The uncompromised synth-rock anthem "The Stardust Engine" could have spent 11 weeks at #1 if the label had trusted it as the lead single[cite: 19]. 
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1987-electric-color" class="btn btn-outline-info text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Electric Color album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1989: Neon Hearts -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-primary rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-primary text-uppercase mb-1">1989: Neon Hearts</h3>
                <p class="text-body-secondary font-monospace small mb-3">APEX RECORDS // THE SIDE B REBELLION</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center flex-lg-row-reverse">
                             <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1989-neon-hearts/album-art.jpg" alt="Neon Hearts Album Art" class="img-fluid rounded border border-secondary shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-white-75">
                                    For their 1989 sophomore album, <em>Neon Hearts</em>, Apex Records demanded pure brand consistency[cite: 22]. The label even forced the band to include a lyrical callback to their first hit ("It's an electric-colored feeling") on the title track[cite: 22]. However, the tension in the studio had become unbearable.
                                </p>
                                <p class="text-white-75">
                                    Ryan ramped up his malicious compliance, delivering "Hollow Sound"—a 5:31 protest track that explicitly called out the studio's panic over the canceled "Promise" single[cite: 22]. In a furious overcorrection, the executives demanded an absurdly short, manic 1:54 bubblegum pop track ("Side by Side") to fix the album's pacing[cite: 22]. They also forced the band to record "The Promise," a cynical, synth-gospel cash grab that was scrapped after Ryan snuck a face-melting, unholy rock guitar solo into the bridge[cite: 22, 28].
                                </p>
                                <p class="text-white-75 mb-4">
                                    But the fans were catching on. When Apex begrudgingly allowed a "one-two punch" of pure rock on Side B ("Chain Reaction" and "Not Your Doll"), the tracks became immediate fan-favorites[cite: 22]. It was definitive proof that the heavier "Engine" sound was exactly what the audience wanted, setting the stage for the coming war[cite: 22].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1989-neon-hearts" class="btn btn-outline-primary btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Neon Hearts album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1990: Live in Chicago -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-warning rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-warning text-uppercase mb-1">1990: Live in Chicago</h3>
                <p class="text-body-secondary font-monospace small mb-3">APEX RECORDS // THE SABOTAGED SHOW</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1990-live-in-chicago/album-art.jpg" alt="Live in Chicago Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    During the Neon Hearts tour, the band was squeezed into a strict 30-minute opening slot, forcing them to rush through hits at a frantic tempo[cite: 26, 29]. The resulting live album is a source of fury for the band; the mix was actively sabotaged by Apex Records, maliciously burying Cassidy's "Stardust" synth leitmotif deep into the background to rebrand them as a male-fronted rock act[cite: 26, 29].
                                </p>
                                <p class="text-body-secondary">
                                    However, the recording serves as the historical "Smoking Gun" that later dismantled the label's corporate narrative[cite: 26, 29]. During the opening, Ryan explicitly introduces Cassidy to the crowd as "my sister," publicly disproving the studio executive's assumption that they were a married couple—years before that exact misunderstanding caused the <em>Friction</em> disaster[cite: 26, 29]. 
                                </p>
                                <p class="text-body-secondary mb-4">
                                    The performance was agonizing behind the scenes[cite: 26]. Cassidy experienced genuine terror while performing the abandonment-themed "If You Walked Away," leading to a backstage breakdown where Ryan had to ground her in a deep pressure hug for twenty minutes[cite: 26, 29]. But they fought through it together; their performance of "My Anchor Holds" wasn't a romantic duet, but a public promise of protection to each other that the hardcore Ironheads in the crowd fully understood[cite: 26].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1990-live-in-chicago" class="btn btn-outline-warning text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Live in Chicago album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1990: The Crash of '90 -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-danger rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-danger text-uppercase mb-1">1990: The Crash of '90</h3>
                <p class="text-body-secondary font-monospace small mb-3">INTERSTATE 81 // THE NIGHT THE ENGINE BROKE</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center flex-lg-row-reverse">
                             <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <i class="fa-duotone fa-car-crash fa-5x text-danger opacity-75"></i>
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-white-75">
                                    On December 10, 1990, the trajectory of the band and the O'Connell family changed forever[cite: 23]. Racing a winter storm back to Blacksburg on Interstate 81, their Holt Freighter touring van was clipped by a speeding sedan[cite: 23]. The van spun off the icy road and rolled into the embankment[cite: 23]. 
                                </p>
                                <p class="text-white-75">
                                    While the rest of the family sustained minor injuries, Ryan O'Connell, who was driving, was pinned[cite: 23]. He suffered a complete T10 spinal cord injury, losing all function and sensation below the waist[cite: 23]. 
                                </p>
                                <p class="text-white-75 mb-4">
                                    The subsequent year (1991) was deemed the "Stalemate Year"—a brutal hiatus focused entirely on survival[cite: 23]. The family had to adapt to a new, inflexible reality, establishing strict protocols for Ryan's health (the "Iron Dome" morning routine, the 4-Hour Hydration clock, and rigorous pressure shifts)[cite: 23]. Because venues in the early 90s were largely inaccessible, the Wright twins developed a synchronized two-man lift to haul Ryan up fire escapes to the stage, becoming his "legs" as the band prepared for their eventual, defiant return[cite: 23].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/story/crash-of-90" class="btn btn-outline-danger btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Crash of 1990 story archive">
                                    <i class="fa-duotone fa-folder-open me-2" aria-hidden="true"></i>Access Full Declassified Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1992: Friction -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-danger rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-danger text-uppercase mb-1">1992: The "Friction" Catastrophe</h3>
                <p class="text-body-secondary font-monospace small mb-3">LOS ANGELES, CA // THE DECLARATION OF INDEPENDENCE</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <i class="fa-duotone fa-file-contract fa-5x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    In September 1992, The Stardust Engine was locked in a bitter "Cold War" with Apex Records over their creative identity[cite: 18]. This culminated in a disastrous Los Angeles photo shoot for their canceled sophomore album, <em>Friction</em>[cite: 18]. An Apex executive fundamentally misunderstood the band's sci-fi aesthetic, attempting to coerce the band members into a highly inappropriate, shock-value marketing campaign to compete with industry trends[cite: 18].
                                </p>
                                <p class="text-body-secondary">
                                    The band's 23-year-old manager and law student, Holly O'Connell, immediately recognized the executive's demands as a severe material breach of contract[cite: 18]. However, before she could even file the civil paperwork, the hired photographer blew the whistle to the LAPD, turning a contract dispute into an active criminal investigation[cite: 18].
                                </p>
                                <p class="text-body-secondary mb-4">
                                    Cornered by the impending legal scandal, Apex Records completely surrendered[cite: 18]. They voided the band's contract, returned all master tapes, and paid a substantial punitive settlement to avoid a public trial[cite: 18]. Holly O'Connell used this exact settlement capital to establish <strong>Engine Room Records</strong>, permanently transforming the family band from label employees into a sovereign, independent entity[cite: 18].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/story/friction" class="btn btn-outline-danger text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the full 1992 Friction Catastrophe archive">
                                    <i class="fa-duotone fa-folder-open me-2" aria-hidden="true"></i>Access Full Declassified Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1992-1994: The Blacksburg Exile -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-secondary rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-body-emphasis text-uppercase mb-1">1992-1994: The Blacksburg Exile</h3>
                <p class="text-body-secondary font-monospace small mb-3">BLACKSBURG, VA // LOS ANGELES, CA</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5" style="line-height: 1.7;">
                        <p class="text-white-75">
                            Following the collapse of the <em>Friction</em> project, the band immediately evacuated Los Angeles, retreating 2,500 miles back to their sanctuary in Blacksburg, Virginia[cite: 18]. As proud alumni of the Commonwealth Polytechnic Institute (CPI), the tight-knit college town offered them a quiet, fiercely protective community far removed from the tabloid fallout of the music industry[cite: 18].
                        </p>
                        <p class="text-white-75">
                            However, the "Cold War" was not over; it had merely moved into the courtroom[cite: 18]. While Holly O'Connell and her legal team dismantled Apex Records on the West Coast, the prolonged legal spectacle took a massive personal toll on the band[cite: 18]. The grueling requirement to provide cross-country testimony and endure hostile depositions was deeply distressing[cite: 18]. This was particularly traumatic for Ryan and Cassidy, both of whom are autistic, compounded by the severe logistical and physical exhaustion Ryan faced navigating an inaccessible 1990s legal system as a T10 paraplegic[cite: 18].
                        </p>
                        <p class="text-white-75 mb-0">
                            By late 1994, the legal war officially concluded with a total victory for the O'Connell family[cite: 18]. The trauma and isolation of these "Wilderness Years" in their Blacksburg warehouse became a creative crucible[cite: 18]. Free from corporate oversight, they channeled the exhaustion of the trials into their instruments, laying the raw, unpolished groundwork for their independent 1995 comeback album, <em>The Warehouse Tapes</em>[cite: 18].
                        </p>
                    </div>
                </div>
            </div>

            <!-- 1995: The Warehouse Tapes -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-info rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-info text-uppercase mb-1">1995: The Warehouse Tapes</h3>
                <p class="text-body-secondary font-monospace small mb-3">BLACKSBURG, VA // THE INDEPENDENT ERA BEGINS</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1995-the-warehouse-tapes/album-art.jpg" alt="The Warehouse Tapes Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    In 1995, Engine Room Records launched its first official release: <em>The Warehouse Tapes</em>[cite: 30]. Operating entirely outside the traditional music industry ecosystem, the label functioned as a direct-to-consumer operation[cite: 18]. The family fulfilled mail-orders directly to their loyal "Ironhead" fanbase, manually dubbing every cassette and burning early CD-Rs one at a time using expensive, bleeding-edge hardware installed in their Blacksburg rehearsal space[cite: 18].
                                </p>
                                <p class="text-body-secondary">
                                    The album itself was a sonic exorcism[cite: 18]. Side A featured raw, unpolished rock tracks (such as "Static" and "Garbage") that explicitly rejected the manufactured synth-pop forced upon them by Apex Records, while simultaneously tearing down the exhausting "victim" narrative pushed by the tabloid media during the 1994 trials[cite: 18].
                                </p>
                                <p class="text-body-secondary mb-4">
                                    However, the defining achievement of the album—and the early label—was Side B[cite: 18]. Consisting entirely of a single 15-minute-and-33-second progressive rock epic titled <strong>"Escape Velocity (Ad Astra),"</strong> the track served as Cassidy O'Connell's musical autobiography[cite: 18]. Cassidy wrote the lyrics, composed the complex score, and conducted the band through a sweeping journey from trauma to artistic transcendence[cite: 18]. To this day, she considers it her most important professional work[cite: 18].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes" class="btn btn-outline-info text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access The Warehouse Tapes album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1996: The American Dream -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-success rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-success text-uppercase mb-1">1996: The "American Dream"</h3>
                <p class="text-body-secondary font-monospace small mb-3">DALEVILLE, VA // THE BILLION-DOLLAR PARADIGM SHIFT</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5" style="line-height: 1.7;">
                        <p class="text-white-75">
                            Engine Room Records had proven it could survive independently, but in 1996, a completely random event transformed the label from a self-sustaining warehouse operation into an unassailable financial juggernaut[cite: 18]. 
                        </p>
                        <p class="text-white-75">
                            During a transit stop at a gas station in Daleville, Virginia, Cassidy O'Connell purchased a "Quick Pick" ticket for the <em>Mega Millions</em> lottery. She allowed the machine to select the numbers, keeping the ticket simply because she liked the geometric pattern the numbers formed on the printed slip—a visual harmony that deeply appealed to her autistic mind[cite: 18].
                        </p>
                        <p class="text-white-75">
                            That single ticket was the sole winner of a historic <strong>$2.04 Billion</strong> annuitized jackpot[cite: 18]. 
                        </p>
                        <p class="text-white-75">
                            Cassidy did not go to the press[cite: 18]. She simply handed the winning ticket to her sister, Holly, with a single directive: <em>"Build us a fortress so we never have to be hurt again."</em>[cite: 18]
                        </p>
                        <p class="text-white-75 mb-0">
                            The family opted for the lump-sum payout in absolute privacy[cite: 18]. Armed with her J.D. and her newly minted 1996 credential as a federally authorized Enrolled Agent, Holly personally navigated the IRS payout[cite: 18]. She immediately established the <strong>Forger Nation Trust</strong> to manage the wealth, weaponizing the capital to purchase state-of-the-art logistics fleets and infrastructure for Engine Room Records, permanently insulating the band from the rest of the music industry[cite: 18].
                        </p>
                    </div>
                </div>
            </div>

            <!-- 1996: Escape Velocity (Ad Astra) Single -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-info rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-info text-uppercase mb-1">1996: Escape Velocity (Ad Astra)</h3>
                <p class="text-body-secondary font-monospace small mb-3">GLOBAL RETAIL // THE BREAKTHROUGH SINGLE</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center flex-lg-row-reverse">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1996-ad-astra-single/album-art.jpg" alt="Ad Astra Single Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    Originally conceptualized as the B-Side of <em>The Warehouse Tapes</em>, this 15-minute progressive rock magnum opus was elevated to a monumental A-Side EP release in 1996[cite: 31]. Financed by their newly secured independence, this release officially ended their "Wilderness Years."[cite: 31]
                                </p>
                                <p class="text-body-secondary mb-4">
                                    Knowing mainstream radio would never play a 15-minute suite, Manager Holly O'Connell cut a condensed 5-minute "Trojan Horse" edit[cite: 31]. By stripping away the ambient transitions and focusing on the core narrative arc, this strategic edit successfully charted, introducing millions of new fans to the band's independent sound and acting as the rocket that launched their "Freedom Era."[cite: 31]
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1996-ad-astra-single" class="btn btn-outline-info text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Ad Astra EP archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1997: Hard Reset -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-primary rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-primary text-uppercase mb-1">1997: The "Hard Reset" Price War</h3>
                <p class="text-body-secondary font-monospace small mb-3">GLOBAL RETAIL // THE $13.99 OFFENSIVE</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1997-hard-reset/album-art.jpg" alt="Hard Reset Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-white-75">
                                    In 1997, The Stardust Engine released <em>Hard Reset</em>[cite: 18]. This massive, two-disc progressive rock epic was Engine Room Records' first foray into traditional commercial distribution[cite: 18]. Stepping out of the warehouse, Holly O'Connell signed sweeping contracts for professional CD stamping, cassette duplication, and global retail placement[cite: 18]. However, it was her pricing strategy that triggered an industry-wide panic[cite: 18].
                                </p>
                                <p class="text-white-75">
                                    At the time, double-disc albums retailed for $24.99[cite: 18]. Holly set the retail price for <em>Hard Reset</em> at a staggering $13.99—the standard cost of a single-disc album[cite: 18]. She accomplished this by weaponizing the Forger Nation Trust's massive, risk-free U.S. Treasury yields[cite: 18]. She used the monthly interest generated by the 1996 lottery windfall to personally subsidize the manufacturing costs of the second disc, ensuring the pressing plants and distributors still received their full, premium cut[cite: 18]. 
                                </p>
                                <p class="text-white-75">
                                    Terrified by this unassailable market disruption, a coalition of major labels—led by their former captors, <strong>Apex Records</strong>, and the conglomerate <strong>Omni-Global Media Corporation</strong>—filed a massive antitrust injunction to halt the album's release, accusing Engine Room Records of predatory pricing[cite: 18].
                                </p>
                                <p class="text-white-75 mb-4">
                                    Acting as lead counsel, Holly dismantled their coalition in federal court[cite: 18]. She successfully proved that because she was paying all vendors their full market rate out of her own pocket, there was no illegal market manipulation—just a superior, privately funded business model they couldn't compete with[cite: 18]. The injunction was dismissed, and <em>Hard Reset</em> dominated the global charts[cite: 18]. Realizing she needed the power to strike back at the conglomerates on their home turf, this battle prompted Holly to sit for the New York State Bar the following year[cite: 18].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1997-hard-reset" class="btn btn-outline-primary btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Hard Reset album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1997: Cosmic Tidal Lock Sound -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-warning rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-warning text-uppercase mb-1">1997: The Cosmic Tidal Lock Sound&reg;</h3>
                <p class="text-body-secondary font-monospace small mb-3">THE STUDIO ARCHITECTURE // INTELLECTUAL PROPERTY</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5" style="line-height: 1.7;">
                        <p class="text-body-secondary">
                            While <em>Hard Reset</em> was a commercial triumph, its most enduring legacy was the perfection of the band's signature sonic architecture[cite: 18]. On the track "Moon 1 (Tidal Lock)", Cassidy O'Connell finally realized the exact atmospheric "Space Rock" sound she had envisioned in 1987—a sound Apex Records had rejected in favor of safe dance-pop[cite: 18].
                        </p>
                        <p class="text-body-secondary">
                            The fans and music press quickly dubbed this new genre <strong>"80s Cosmic Pop."</strong>[cite: 18] However, Holly O'Connell recognized the immense value of Cassidy's engineering genius[cite: 18]. Through Engine Room Records, Holly immediately weaponized the sound, officially registering it with the USPTO as <strong>The Cosmic Tidal Lock Sound&reg;</strong>[cite: 18]. This impenetrable legal armor allowed Holly to issue immediate cease-and-desist orders to any rival studio or corporate entity attempting to replicate Cassidy's proprietary synth-layering techniques[cite: 18].
                        </p>

                        <div class="alert bg-black border border-secondary mt-4 mb-0 shadow-sm text-white">
                            <h5 class="text-uppercase fw-bold text-info mb-3">
                                <i class="fa-duotone fa-sliders-up me-2" aria-hidden="true"></i>Audio Engineering (2026 Reality)
                            </h5>
                            <p class="text-white-75 small mb-3">
                                In the real world, "The Cosmic Tidal Lock Sound&reg;" is a fictional trademark[cite: 18]. It serves as the narrative wrapper for the proprietary prompt architecture used within a commercial <strong>Suno Premium</strong> workspace to generate the band's music[cite: 18].
                            </p>
                            <ul class="text-white-75 small mb-0">
                                <li class="mb-2">
                                    <strong>The Studio Master:</strong> Tracks are generated using a highly specific Style Prompt to honor Cassidy's solo architecture: <em>"1980s synth-pop, mid-tempo space-rock, driving 4/4 gated drum beat, shimmering analog synthesizers, melodic fretless bassline, crystal clear female vocals, lush spatial reverb, celestial atmosphere."</em>[cite: 18]
                                </li>
                                <li>
                                    <strong>The Live Engineering:</strong> To simulate the band's stadium tours, environmental tags (e.g., <em>live stadium concert, massive crowd cheering, echoing stadium acoustics</em>) are directly appended to the base Studio Master prompt[cite: 18]. Utilizing Suno's "Cover" function (Audio Influence: 73%, Weirdness: 0%) alongside bracketed lyric cues like <code>[Low Synth Drone Intro]</code> or <code>[Seamless Transition]</code>, the engine physically alters the acoustic space to replicate a massive live performance[cite: 18].
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- 1997: Forger Nation War Chest -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-secondary rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-secondary text-uppercase mb-1">1997: Forger Nation War Chest</h3>
                <p class="text-body-secondary font-monospace small mb-3">GLOBAL RETAIL // THE DEFINITIVE CHRONICLE</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center flex-lg-row-reverse">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/1997-forger-nation-war-chest/album-art.jpg" alt="Forger Nation War Chest Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-white-75">
                                    Capitalizing on the massive global momentum of <em>Hard Reset</em>, Engine Room Records closed out 1997 by releasing the band's first retrospective compilation: <em>Forger Nation War Chest</em>[cite: 18, 32]. 
                                </p>
                                <p class="text-white-75">
                                    Because Holly O'Connell successfully forced Apex Records to surrender the band's master tapes during the 1992 <em>Friction</em> settlement, Engine Room Records held total control over their back catalog[cite: 18]. This allowed the band to curate a single-disc, 17-track compilation that actively told the story of their "escape velocity."[cite: 18] 
                                </p>
                                <p class="text-white-75 mb-4">
                                    The album was divided into distinct narrative acts[cite: 18]. It forced the pristine, studio-mandated pop hits of their "gilded cage" era (like <em>Electric Color</em> and <em>Dancing in the Neon</em>) to sit side-by-side with the furious, unpolished guitar rock of their warehouse years[cite: 18]. It wasn't just a collection of hits; it was a carefully weaponized timeline, proving to the world that The Stardust Engine had successfully outmaneuvered the corporate machine and reclaimed their true sound[cite: 18].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/1997-forger-nation-war-chest" class="btn btn-outline-secondary btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Forger Nation War Chest album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1998: Fractured Prisms Signing -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-info rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-info text-uppercase mb-1">1998: The First Signing</h3>
                <p class="text-body-secondary font-monospace small mb-3">ENGINE ROOM RECORDS // FRACTURED PRISMS</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5" style="line-height: 1.7;">
                        <p class="text-body-secondary">
                            With The Stardust Engine securely established as a self-sustaining entity, Holly O'Connell began expanding the fortress. In 1998, Engine Room Records signed their very first external act: a reclusive British synth-pop duo named <strong>Fractured Prisms</strong>.
                        </p>
                        <p class="text-body-secondary mb-4">
                            The signing wasn't a standard corporate scouting operation; it was personal. "Kaleidoscope Sun" was Ryan and Cassidy's favorite song, but the band had been dropped by their old label and their back catalog was out of print. Using her immense financial leverage, Holly ruthlessly acquired Fractured Prisms's entire catalog from their former label and offered the siblings a secure, uncompromising place to land and record music again.
                        </p>
                        
                        <a href="/engine-room/artists/fractured-prisms" class="btn btn-outline-info text-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Fractured Prisms Artist Profile">
                            <i class="fa-duotone fa-gem me-2" aria-hidden="true"></i>Access Artist Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- 1999: Fractured Prisms Debut -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-primary rounded-circle border border-dark border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-primary text-uppercase mb-1">1999: Fractured Prisms Debut</h3>
                <p class="text-body-secondary font-monospace small mb-3">ENGINE ROOM RECORDS // CARNABY STREET</p>

                <div class="card border-secondary bg-dark text-white shadow-sm">
                    <div class="card-body p-4 p-md-5" style="line-height: 1.7;">
                        <p class="text-white-75">
                            In 1999, Engine Room Records proudly re-released Fractured Prisms's self-titled debut album (unofficially known to fans as <em>Carnaby Street</em> due to its iconic album art). The re-release resurrected the "lost" masterpiece of 1983, allowing a new generation to discover the haunting, atmospheric synth-pop that had defined an era.
                        </p>
                        <p class="text-white-75 mb-4">
                            Under the protective banner of Engine Room Records, Rhys and Claire were finally given the creative freedom and financial backing to begin work on their massive concept album, a rock opera detailing their intricate 1883 narrative lore.
                        </p>
                        
                        <a href="/engine-room/artists/fractured-prisms/discography/1983-fractured-prisms" class="btn btn-outline-primary btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Fractured Prisms debut album archive">
                            <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2001: Midnight Drivers -->
            <div class="timeline-node mb-5 position-relative">
                <div class="node-marker position-absolute bg-dark rounded-circle border border-secondary border-3" style="width: 20px; height: 20px; left: -36px; top: 0;" aria-hidden="true"></div>
                
                <h3 class="fw-bold text-body-emphasis text-uppercase mb-1">2001: Midnight Drivers</h3>
                <p class="text-body-secondary font-monospace small mb-3">THE VAULT // THE LOST 1987 SESSIONS</p>

                <div class="card border-secondary bg-body-tertiary shadow-sm">
                    <div class="card-body p-4 p-md-5">
                         <div class="row align-items-center">
                            <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                                <img src="<?php echo $album_web_path; ?>/2001-midnight-drivers/album-art.jpg" alt="Midnight Drivers Album Art" class="img-fluid rounded border border-dark shadow-sm" style="max-width: 200px;">
                            </div>
                            <div class="col-lg-9" style="line-height: 1.7;">
                                <p class="text-body-secondary">
                                    In 2001, Engine Room Records independently resurrected and released <em>Midnight Drivers</em>, the lost 1987 sophomore concept album[cite: 18]. Originally rejected by Apex Records for its moody, atmospheric Darkwave tone, the master tapes sat locked in the vault for over a decade[cite: 18, 34].
                                </p>
                                <p class="text-body-secondary">
                                    Because the title track, "Midnight Drivers," was the only song actually written during the fraught 1987 sessions, the band had to build an entire retro-engineered album around it from scratch in 2001[cite: 18, 34]. The resulting album finally bridges the gap between the vibrant city lights of Side A and the isolating sanctuary of Side B[cite: 18, 34].
                                </p>
                                <p class="text-body-secondary mb-4">
                                    Side A acts as an explosive, high-speed synth-pop prologue[cite: 18]. This brilliant pacing sets the stage for a vibrant night out in the city[cite: 18, 34], allowing the raw, untouched 1987 master of the title track to open Side B with maximum impact[cite: 18, 34]. It pulls the listener out of the bright lights and directly into the dark, finding sanctuary in a moving car at night[cite: 18].
                                </p>
                                
                                <a href="/engine-room/artists/stardust-engine/discography/2001-midnight-drivers" class="btn btn-outline-dark btn-sm text-uppercase fw-bold font-monospace" aria-label="Access the Midnight Drivers album archive">
                                    <i class="fa-duotone fa-compact-disc me-2" aria-hidden="true"></i>Access Album Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-dark border-secondary border-opacity-50 text-center" role="alert">
                <em class="text-body-secondary">[ Awaiting the next transmission from the Archives... ]</em>
            </div>

        </div>
    </div>

</div>