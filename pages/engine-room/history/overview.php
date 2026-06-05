<?php
// pages/engine-room/history/overview.php
// Dual-purpose page: Real-world portfolio disclosure + Fictional Universe Timeline.

$pageTitle = "Company History - Engine Room Records";

// Define the root path for all Engine Room artist assets
$base_path = "https://assets.raggiesoft.com/engine-room-records/artists";
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase industrial-font mb-3">The History</h1>
        <p class="lead text-muted" style="max-width: 800px; margin: 0 auto;">
            Two distinct timelines. One shared architecture.
        </p>
    </div>

    <!-- 1. REAL WORLD INFRASTRUCTURE -->
    <div class="card bg-dark text-white border-secondary mb-5 shadow-lg">
        <div class="card-header bg-black border-secondary d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0 text-uppercase font-monospace text-info">
                <i class="fa-duotone fa-server me-2" aria-hidden="true"></i>Real-World Infrastructure
            </h5>
            <span class="badge bg-secondary font-monospace">EST. 2026</span>
        </div>
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="h4 fw-bold text-white mb-3">The RaggieSoft Audio Initiative</h3>
                    <p class="text-light opacity-75">
                        In the real world, <strong>Engine Room Records</strong> is a digital portfolio and publishing entity created by Michael P. Ragsdale. Launched in 2026, it serves as the organizational hub for a massive, multi-band generative music project. 
                    </p>
                    <div class="alert alert-info bg-black border-info mb-4 text-info-emphasis">
                        <strong><i class="fa-solid fa-timeline me-2" aria-hidden="true"></i>Timeline Notice:</strong> While the narrative lore spans decades (e.g., 1983, 1992, 1997), <strong>all music across this entire catalog was produced in 2025 and 2026</strong>, and officially distributed to streaming platforms via DistroKid in 2026.
                    </div>
                    <ul class="text-light opacity-75 mb-4">
                        <li class="mb-2"><strong>Audio Generation:</strong> All instrumentation, synthetic vocals, and musical compositions are generated utilizing a commercial-tier <span class="text-warning">Suno Premium</span> license.</li>
                        <li class="mb-2"><strong>Lore & Lyrics:</strong> The overarching narrative, fictional corporate structures, and original lyrics are human-directed, with <span class="text-info">Gemini</span> acting as a co-producer for style refinement and worldbuilding organization.</li>
                        <li><strong>Distribution:</strong> The catalog is distributed to global streaming platforms (Spotify, Apple Music, etc.) while remaining freely available on this platform under a <strong>CC BY-SA 4.0</strong> license.</li>
                    </ul>
                    <a href="/about/ai-disclaimer" class="btn btn-outline-info btn-sm text-uppercase fw-bold font-monospace">
                        <i class="fa-duotone fa-robot-astromech me-2" aria-hidden="true"></i>Read Full AI Disclaimer
                    </a>
                </div>
                <div class="col-md-4 text-center mt-4 mt-md-0">
                    <i class="fa-duotone fa-microchip fa-5x text-secondary opacity-50" aria-hidden="true"></i>
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
            
            <?php
            // 2. 1987: Electric Color
            $props = [
                'color'    => 'info',
                'year'     => '1987',
                'title'    => 'Electric Color',
                'subtitle' => 'APEX RECORDS // THE GILDED CAGE',
                'image'    => $base_path . '/the-stardust-engine/1987-electric-color/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1987-electric-color',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>The Stardust Engine exploded into the mainstream with their 1987 debut, <em>Electric Color</em>. The title track was a massive, studio-mandated synth-pop hit, sitting at the #2 spot for six weeks. While fans embraced it, the band viewed this era as the beginning of a "Cold War" with Apex Records.</p>
                    <p class="mb-4">The studio constantly prioritized polished, radio-friendly production over the band\'s authentic rock roots. Tracks like "Dancing in the Neon" kept the lights on, but Ryan began hiding angsty, anti-corporate lyrics inside the safe pop wrappers ("Plastic Sky") in an act of malicious compliance.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 3. 1989: Neon Hearts
            $props = [
                'color'    => 'primary',
                'year'     => '1989',
                'title'    => 'Neon Hearts',
                'subtitle' => 'APEX RECORDS // THE SIDE B REBELLION',
                'image'    => $base_path . '/the-stardust-engine/1989-neon-hearts/album-art.jpg',
                'reverse'  => true,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1989-neon-hearts',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>For their 1989 sophomore album, <em>Neon Hearts</em>, Apex Records demanded pure brand consistency. Terrified by industry controversy, the executives demanded an absurdly short, manic 1:54 bubblegum pop track ("Side by Side") to ensure the album felt "safe."</p>
                    <p class="mb-4">But the fans were catching on. When Apex begrudgingly allowed a "one-two punch" of pure rock on Side B ("Chain Reaction" and "Not Your Doll"), the tracks became immediate fan-favorites. It was definitive proof that the heavier "Engine" sound was exactly what the audience wanted, setting the stage for the coming war.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 4. 1990: Live in Chicago
            $props = [
                'color'    => 'warning',
                'year'     => '1990',
                'title'    => 'Live in Chicago',
                'subtitle' => 'APEX RECORDS // THE SABOTAGED SHOW',
                'image'    => $base_path . '/the-stardust-engine/1990-live-in-chicago/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1990-live-in-chicago',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>During the <em>Neon Hearts</em> tour, the band was squeezed into a strict 30-minute opening slot. The resulting live album is a source of fury for the band; the mix was actively sabotaged by Apex Records, maliciously burying Cassidy\'s "Stardust" synth leitmotif deep into the background to rebrand them as a male-fronted rock act.</p>
                    <p class="mb-4">However, the recording serves as the historical "Smoking Gun" that later dismantled the label\'s corporate narrative. During the opening, Ryan explicitly introduces Cassidy to the crowd as "my sister," publicly disproving the studio executive\'s assumption that they were a married couple.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 5. 1990: The Crash of '90
            $props = [
                'color'    => 'danger',
                'year'     => '1990',
                'title'    => 'The Crash of \'90',
                'subtitle' => 'INTERSTATE 81 // THE NIGHT THE ENGINE BROKE',
                'icon'     => 'fa-duotone fa-car-crash',
                'reverse'  => true,
                'btnUrl'   => '/engine-room/artists/stardust-engine/story/crash-of-90',
                'btnText'  => 'Access Full Declassified Archive',
                'btnIcon'  => 'fa-duotone fa-folder-open',
                'content'  => '
                    <p>On December 10, 1990, racing a winter storm back to Blacksburg on Interstate 81, their Holt Freighter touring van was clipped by a speeding sedan. The van spun off the icy road and rolled into the embankment.</p>
                    <p class="mb-4">While the rest of the family sustained minor injuries, Ryan O\'Connell was pinned. He suffered a complete T10 spinal cord injury, losing all function and sensation below the waist. The subsequent year was a brutal hiatus focused entirely on survival, establishing strict medical protocols as the band prepared for their eventual, defiant return.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 6. 1992: The "Friction" Catastrophe
            $props = [
                'color'    => 'danger',
                'year'     => '1992',
                'title'    => 'The "Friction" Catastrophe',
                'subtitle' => 'LOS ANGELES, CA // THE DECLARATION OF INDEPENDENCE',
                'image'    => $base_path . '/the-stardust-engine/1992-friction/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/story/friction',
                'btnText'  => 'Access Full Declassified Archive',
                'btnIcon'  => 'fa-duotone fa-folder-open',
                'content'  => '
                    <p>In September 1992, the "Cold War" culminated in a disastrous Los Angeles photo shoot for their canceled sophomore album, <em>Friction</em>. Executive Julian Vance misinterpreted Cassidy\'s concept art (a space shuttle experiencing orbital friction) and assumed the siblings were a married couple, attempting to coerce them into a highly inappropriate marketing campaign.</p>
                    <p class="mb-4">The band\'s 23-year-old manager, Holly O\'Connell, recognized the demands as a severe breach of contract. A police intervention turned the dispute into a legal scandal. Apex Records completely surrendered, voided the contract, returned all master tapes, and paid a massive settlement. Holly used this capital to establish <strong>Engine Room Records</strong>.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 7. 1992-1994: The Blacksburg Exile
            $props = [
                'color'    => 'secondary',
                'year'     => '1992-1994',
                'title'    => 'The Blacksburg Exile',
                'subtitle' => 'BLACKSBURG, VA // LOS ANGELES, CA',
                'icon'     => 'fa-duotone fa-house-person-return',
                'reverse'  => true,
                'btnUrl'   => '#', // Usually no dedicated page for this era yet, can link to story overview
                'btnText'  => 'Era Documented in friction Archive',
                'btnIcon'  => 'fa-solid fa-link',
                'content'  => '
                    <p>Following the collapse of the <em>Friction</em> project, the band immediately evacuated Los Angeles, retreating 2,500 miles back to their sanctuary in Blacksburg, Virginia.</p>
                    <p class="mb-4">While Holly O\'Connell dismantled Apex Records on the West Coast, the prolonged legal spectacle took a massive personal toll on the band. The trauma and isolation of these "Wilderness Years" in their Blacksburg warehouse became a creative crucible. Free from corporate oversight, they channeled the exhaustion of the trials into their instruments.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 8. 1995: The Warehouse Tapes
            $props = [
                'color'    => 'info',
                'year'     => '1995',
                'title'    => 'The Warehouse Tapes',
                'subtitle' => 'BLACKSBURG, VA // THE INDEPENDENT ERA BEGINS',
                'image'    => $base_path . '/the-stardust-engine/1995-the-warehouse-tapes/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>In 1995, Engine Room Records launched its first official release. Operating entirely outside the traditional music industry ecosystem, the family fulfilled mail-orders directly to their loyal "Ironhead" fanbase.</p>
                    <p class="mb-4">The album itself was a sonic exorcism. Side A featured raw, unpolished rock tracks (such as "Static" and "Garbage") that explicitly rejected the manufactured synth-pop forced upon them by Apex Records, while simultaneously tearing down the exhausting "victim" narrative pushed by the tabloid media.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 9. 1996: The "American Dream"
            $props = [
                'color'    => 'success',
                'year'     => '1996',
                'title'    => 'The "American Dream"',
                'subtitle' => 'DALEVILLE, VA // THE BILLION-DOLLAR PARADIGM SHIFT',
                'icon'     => 'fa-duotone fa-ticket',
                'reverse'  => true,
                'btnUrl'   => '#', 
                'btnText'  => 'Classified Corporate Operations',
                'btnIcon'  => 'fa-solid fa-lock',
                'content'  => '
                    <p>Engine Room Records had proven it could survive independently, but in 1996, a completely random event transformed the label from a self-sustaining warehouse operation into an unassailable financial juggernaut.</p>
                    <p>Cassidy O\'Connell purchased a "Quick Pick" ticket for the <em>American Dream</em> lottery. She allowed the machine to select the numbers, keeping the ticket simply because she liked the geometric pattern they formed on the slip. That single ticket was the sole winner of a historic <strong>$2.04 Billion</strong> annuitized jackpot.</p>
                    <p class="mb-4">The family opted for the lump-sum payout in absolute privacy. Holly immediately established the <strong>Forger Nation Trust</strong> to manage the wealth, weaponizing the capital to purchase state-of-the-art logistics fleets and infrastructure for Engine Room Records.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 10. 1996: Escape Velocity (Ad Astra)
            $props = [
                'color'    => 'info',
                'year'     => '1996',
                'title'    => 'Escape Velocity (Ad Astra)',
                'subtitle' => 'GLOBAL RETAIL // THE BREAKTHROUGH SINGLE',
                'image'    => $base_path . '/the-stardust-engine/1996-ad-astra-single/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1996-ad-astra-single',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>Originally conceptualized as the B-Side of <em>The Warehouse Tapes</em>, this 15-minute progressive rock magnum opus was elevated to a monumental A-Side EP release in 1996. Financed by their newly secured independence, this release officially ended their "Wilderness Years."</p>
                    <p class="mb-4">Knowing mainstream radio would never play a 15-minute suite, Manager Holly O\'Connell cut a condensed 5-minute "Trojan Horse" edit. By stripping away the ambient transitions and focusing on the core narrative arc, this strategic edit successfully charted, introducing millions of new fans to the band\'s independent sound.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 11. 1997: Hard Reset
            $props = [
                'color'    => 'primary',
                'year'     => '1997',
                'title'    => 'Hard Reset',
                'subtitle' => 'GLOBAL RETAIL // THE $13.99 OFFENSIVE',
                'image'    => $base_path . '/the-stardust-engine/1997-hard-reset/album-art.jpg',
                'reverse'  => true,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/1997-hard-reset',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>In 1997, The Stardust Engine released <em>Hard Reset</em>. This massive, two-disc progressive rock epic was Engine Room Records\' first foray into traditional commercial distribution. Holly O\'Connell set the retail price for the double-album at a staggering $13.99, accomplishing this by weaponizing the Forger Nation Trust\'s risk-free U.S. Treasury yields to subsidize manufacturing.</p>
                    <p class="mb-4">Terrified by this market disruption, a coalition of major labels—led by Apex Records—filed a massive antitrust injunction. Holly dismantled their coalition in federal court, proving it was simply a superior, privately funded business model. The injunction was dismissed, and <em>Hard Reset</em> dominated the global charts.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 12. 1998: The First Signing
            $props = [
                'color'    => 'info',
                'year'     => '1998',
                'title'    => 'The First Signing',
                'subtitle' => 'ENGINE ROOM RECORDS // FRACTURED PRISMS',
                'icon'     => 'fa-duotone fa-file-signature',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/fractured-prisms',
                'btnText'  => 'Access Artist Profile',
                'btnIcon'  => 'fa-duotone fa-gem',
                'content'  => '
                    <p>With The Stardust Engine securely established as a self-sustaining entity, Holly O\'Connell began expanding the fortress. In 1998, Engine Room Records signed their very first external act: a reclusive British synth-pop duo named <strong>Fractured Prisms</strong>.</p>
                    <p class="mb-4">The band had been dropped by their old label and their back catalog was out of print. Using her immense financial leverage, Holly ruthlessly acquired Fractured Prisms\'s entire catalog and offered the siblings a secure, uncompromising place to land and record music again.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 13. 1999: Fractured Prisms Debut
            $props = [
                'color'    => 'primary',
                'year'     => '1999',
                'title'    => 'Fractured Prisms Debut',
                'subtitle' => 'ENGINE ROOM RECORDS // CARNABY STREET',
                'image'    => $base_path . '/fractured-prisms/1983-fractured-prisms/album-art.jpg',
                'reverse'  => true,
                'btnUrl'   => '/engine-room/artists/fractured-prisms/discography/1983-fractured-prisms',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>In 1999, Engine Room Records proudly re-released Fractured Prisms\'s self-titled debut album (unofficially known to fans as <em>Carnaby Street</em> due to its iconic album art). The re-release resurrected the "lost" masterpiece of 1983, allowing a new generation to discover the haunting, atmospheric synth-pop that had defined an era.</p>
                    <p class="mb-4">Under the protective banner of Engine Room Records, Rhys and Claire were finally given the creative freedom and financial backing to begin work on their massive concept album, a rock opera detailing their intricate 1883 narrative lore.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';

            // 14. 2001: Midnight Drivers
            $props = [
                'color'    => 'dark',
                'year'     => '2001',
                'title'    => 'Midnight Drivers',
                'subtitle' => 'THE VAULT // THE LOST 1987 SESSIONS',
                'image'    => $base_path . '/the-stardust-engine/2001-midnight-drivers/album-art.jpg',
                'reverse'  => false,
                'btnUrl'   => '/engine-room/artists/stardust-engine/discography/2001-midnight-drivers',
                'btnText'  => 'Access Album Archive',
                'btnIcon'  => 'fa-duotone fa-compact-disc',
                'content'  => '
                    <p>In 2001, Engine Room Records independently resurrected and released <em>Midnight Drivers</em>. Because the title track was the only song actually written during the fraught 1987 sessions, the band had to build an entire retro-engineered album around it from scratch in 2001.</p>
                    <p class="mb-4">Side A acts as an explosive, high-speed synth-pop prologue. This brilliant pacing sets the stage for a vibrant night out in the city, allowing the raw, untouched 1987 master of the title track to open Side B with maximum impact. It pulls the listener out of the bright lights and directly into the dark, finding sanctuary in a moving car at night.</p>
                '
            ];
            include ROOT_PATH . '/includes/components/_timeline-node.php';
            ?>

            <!-- 15. Awaiting Transmission -->
            <div class="alert alert-dark border-secondary border-opacity-50 text-center shadow-sm" role="alert">
                <em class="text-body-secondary"><i class="fa-duotone fa-satellite-dish me-2" aria-hidden="true"></i>[ Awaiting the next transmission from the Archives... ]</em>
            </div>

        </div>
    </div>
</div>