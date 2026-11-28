<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/about/ai-disclaimer/history-of-tools.php
 * Role: Part 4 of 4 — 2,400 Years of Creative & Technical Tools (`/about/ai-disclaimer/history-of-tools`)
 * Route Manifest: `/data/routes/about.json` -> `"/about/ai-disclaimer/history-of-tools"`
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Traces 2,400 years of recurring anxieties over memory, skill, authenticity,
 * livelihood, copyright, and artistic legitimacy whenever new tools automate or
 * broaden human capability—from Plato's Phaedrus (~370 BCE), Johannes Trithemius's
 * De laude scriptorum (1492), and Charles Baudelaire's Salon de 1859 critique of
 * photography, to John Philip Sousa's 1906 campaign against mechanical music,
 * Grace Hopper's 1952 compiler, Bob Dylan's 1965 electric set at Newport, the
 * May 1982 UK Musicians' Union Central London Branch synthesizer motion, TRON's
 * 1982 Visual Effects Oscar omission, and 1990s digital-imaging debates:
 *   1. Mobile-first responsive Era Timeline Cards (`<ol>`) that stack cleanly
 *      at 100% width on phones (`< 768px`) without horizontal scrolling and
 *      align into 3 columns on desktops (`>= 992px`), with bidirectional
 *      superscript footnote anchors (`#cite-ref-N` -> `#source-N`).
 *   2. Nuanced historical scholarship distinguishing primary texts, disputed
 *      attributions (such as the 1839 Paul Delaroche legend), mixed audience
 *      motives (Newport 1965), economic/copyright motives (Sousa 1906), and
 *      retrospective oral history (Lisberger on TRON).
 *   3. Calm "Why We Don't Argue in Circles" note + one-click copyable Standard
 *      Reply + 10-entry "Historical Sources, Archival Records & Bibliography".
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic Light/Dark accessible historical timeline cards, copyable reply,
 *   and categorized historical bibliography.
 * ============================================================================
 */

/* ----------------------------------------------------------------------------
 * STEP 1: DEFINE THE SEVEN HISTORICAL ERAS & THEIR FOOTNOTE NUMBERS
 * Every entry states the documented historical context accurately—preserving
 * nuances around authorship, economic/copyright motives, disputed folklore,
 * and retrospective recollections—and links to `$historicalSources` (`#source-1`..`#source-10`).
 * ---------------------------------------------------------------------------- */
$historyMilestones = [
    [
        'era'     => '~370 BCE',
        'tool'    => 'Writing Itself (Plato’s Phaedrus)',
        'claims'  => [
            [
                'text' => 'Around 370 BCE, Plato’s Phaedrus presented a famous philosophical critique of writing: in an origin story told by Socrates, Egyptian King Thamus warns that written words can weaken practiced memory—“an elixir not of memory, but of reminding”—and offer pupils “the appearance of wisdom, not true wisdom.”',
                'refs' => [1],
            ],
        ],
        'verdict' => 'Became the foundation of literature, science, law, and preserved human memory.',
    ],
    [
        'era'     => '1492',
        'tool'    => 'Critique of Replacing Scribes with Print',
        'claims'  => [
            [
                'text' => 'Benedictine abbot Johannes Trithemius acknowledged printing’s usefulness—and had his own treatise printed in Mainz two years later—yet argued in De laude scriptorum (In Praise of Scribes) that monks should not abandon manual copying, which he valued as spiritual discipline and a safeguard for texts commercial printers might overlook. He also predicted that paper books would endure no more than about two centuries, unlike thousand-year parchment manuscripts.',
                'refs' => [2],
            ],
        ],
        'verdict' => 'Printed books proved durable for centuries and opened literacy, novels, and scholarship far beyond monastic and aristocratic libraries.',
    ],
    [
        'era'     => '1839–1859',
        'tool'    => 'Photography & The Salon of 1859',
        'claims'  => [
            [
                'text' => 'Although the oft-repeated legend that painter Paul Delaroche exclaimed “From today, painting is dead!” in 1839 is disputed and lacks a known contemporary record—his documented 1839 assessment actually praised Daguerre’s process as “an immense service rendered to the arts”',
                'refs' => [3],
            ],
            [
                'text' => '—poet and critic Charles Baudelaire delivered a fierce documented attack at the Salon of 1859: conceding cameras had documentary and scientific value, he warned photography would “supplant or corrupt” art if treated as imaginative creation, calling the industry “the refuge of all failed painters with too little talent, or too lazy to complete their studies.”',
                'refs' => [4],
            ],
        ],
        'verdict' => 'Photography became recognized worldwide as its own expressive art form—while freeing painters to invent Impressionism and modern art.',
    ],
    [
        'era'     => '1906',
        'tool'    => 'Recorded Music & Player Pianos',
        'claims'  => [
            [
                'text' => 'Composer John Philip Sousa published “The Menace of Mechanical Music” and testified before Congress warning that recordings and player pianos substituted machinery for “human skill, intelligence, and soul,” predicting declining amateur music-making and weakened human vocal cords. Sousa’s campaign also had an important copyright dimension: composers were not yet receiving mechanical reproduction royalties comparable to the rights later recognized under the U.S. Copyright Act of 1909.',
                'refs' => [5],
            ],
        ],
        'verdict' => 'Recorded audio brought music into every home, established modern composer royalties, and sparked a century of global musical cross-pollination.',
    ],
    [
        'era'     => '1952–1965',
        'tool'    => 'Software Compilers & Amplified Folk Music',
        'claims'  => [
            [
                'text' => 'Computer pioneer Rear Admiral Grace Hopper recalled that when she completed her A-0 compiler in 1952, “nobody would touch it because, they carefully told me, computers could only do arithmetic; they could not do programs.”',
                'refs' => [6],
            ],
            [
                'text' => 'When Bob Dylan performed an electric set at the Newport Folk Festival on July 25, 1965, portions of the audience booed—though historians and eyewitnesses disagree on the exact mixture of motives, including poor sound quality, the set’s brevity, and the belief among some folk traditionalists that electric rock represented a commercial betrayal of folk authenticity.',
                'refs' => [7],
            ],
        ],
        'verdict' => 'High-level compilers unlocked modern software engineering, and amplified folk-rock reshaped twentieth-century songwriting.',
    ],
    [
        'era'     => '1982',
        'tool'    => 'Synthesizers, Drum Machines & Computer Graphics',
        'claims'  => [
            [
                'text' => 'On May 23, 1982, the Central London Branch of the UK Musicians’ Union passed a motion seeking restrictions against synthesizers, drum machines, and electronic devices used to replace working acoustic musicians, though the effort did not become a national blanket ban.',
                'refs' => [8],
            ],
            [
                'text' => 'That same year, Disney’s TRON received no Visual Effects Oscar nomination; director Steven Lisberger later recalled that Academy voters regarded the use of computers as “cheating,” although no official Academy record has been identified stating this as the formal reason.',
                'refs' => [9],
            ],
        ],
        'verdict' => 'Synthesizers defined the iconic 1980s synth-rock sound (celebrated across RaggieSoft’s own The Stardust Engine), and computer graphics became standard across modern cinema.',
    ],
    [
        'era'     => '1990s–2000s',
        'tool'    => 'Digital Darkrooms, Computer Illustration & Home Studios',
        'claims'  => [
            [
                'text' => 'Following the February 1990 debut of Adobe Photoshop 1.0 and affordable desktop recording tools, critics, photojournalists, and traditional practitioners raised recurring concerns over authorship, automation, digital manipulation, creative livelihoods, and whether computer-assisted visuals and home-studio productions represented authentic artistic craft.',
                'refs' => [10],
            ],
        ],
        'verdict' => 'Digital illustration, non-linear editing, and home studio production became everyday instruments of independent creators worldwide.',
    ],
];

/* ----------------------------------------------------------------------------
 * STEP 2: DEFINE THE TEN HISTORICAL SOURCES, ARCHIVAL RECORDS & BIBLIOGRAPHY
 * Explicitly categorizes each entry's evidentiary basis (`type` badge: Primary
 * Text, Congressional Record, Oral History, Archival Scholarship, etc.) so
 * primary texts and secondary historical scholarship are never conflated.
 * ---------------------------------------------------------------------------- */
$historicalSources = [
    1 => [
        'type'     => 'Primary Philosophical Text',
        'author'   => 'Plato (c. 370 BCE)',
        'title'    => 'Phaedrus, Stephanus sections 274c–275b',
        'pub'      => 'Translated by Harold North Fowler in Plato in Twelve Volumes, Vol. 9 (Cambridge, MA: Harvard University Press / Loeb Classical Library, 1925).',
        'note'     => 'Presents Socrates narrating an Egyptian origin tale in which King Thamus rebukes the god Theuth: written characters are “an elixir not of memory, but of reminding; and you offer your pupils the appearance of wisdom, not true wisdom.” Used by Plato to examine the limits of written discourse relative to live dialectic.',
        'url'      => 'https://www.perseus.tufts.edu/hopper/text?doc=Plat.+Phaedrus+275a',
        'urlLabel' => 'Perseus Digital Library (Tufts University)',
    ],
    2 => [
        'type'     => 'Primary Monastic Treatise',
        'author'   => 'Trithemius, Johannes (composed 1492; printed Mainz, 1494)',
        'title'    => 'De laude scriptorum (In Praise of Scribes), Chapter 7',
        'pub'      => 'Edited by Klaus Arnold; English translation by Roland Behrendt (Lawrence, KS: Coronado Press, 1974).',
        'note'     => 'While Trithemius actively collected printed books at Sponheim Abbey and used Peter Friedberg’s Mainz press to circulate this treatise in 1494, he defended manual copying on parchment as irreplaceable monastic discipline, a safeguard for texts printers neglected, and more durable than paper (estimating 1,000 years for parchment vs. 200 years for paper).',
        'url'      => null,
        'urlLabel' => null,
    ],
    3 => [
        'type'     => '1839 Primary Report & Disputed 1874 Attribution',
        'author'   => 'Arago, Dominique François (July 3, 1839) & Gaston Tissandier (1874)',
        'title'    => 'Rapport de M. Arago sur le daguerréotype (1839) vs. Les Merveilles de la photographie (1874)',
        'pub'      => 'Arago’s report to the French Chamber of Deputies (Paris: Bachelier, 1839) preserves Paul Delaroche’s favorable contemporary evaluation calling Daguerre’s invention “an immense service rendered to the arts”; Tissandier’s Les Merveilles de la photographie (Paris: Hachette, 1874) popularized the unverified later anecdote “From today, painting is dead!” See also Stephen Bann, Paul Delaroche: History Painted (Princeton University Press, 1997).',
        'note'     => 'Included here specifically to separate an unverified nineteenth-century legend from Delaroche’s documented 1839 praise.',
        'url'      => null,
        'urlLabel' => null,
    ],
    4 => [
        'type'     => 'Primary Critical Essay',
        'author'   => 'Baudelaire, Charles (1859)',
        'title'    => '“Le Public moderne et la photographie” (“The Modern Public and Photography”), in Salon de 1859',
        'pub'      => 'Originally published in Revue Française (June–July 1859); English translation by Jonathan Mayne in Art in Paris, 1845–1862: Salons and Other Exhibitions Reviewed by Charles Baudelaire (London: Phaidon Press, 1965), pp. 149–155.',
        'note'     => 'Concedes legitimate archival, scientific, and documentary uses for cameras as a “humble servant” of the arts and sciences, while condemning claims that mechanical photography belonged inside the domain of imaginative fine art.',
        'url'      => null,
        'urlLabel' => null,
    ],
    5 => [
        'type'     => 'Primary Essay, Congressional Record & Archival Context',
        'author'   => 'Sousa, John Philip (1906)',
        'title'    => '“The Menace of Mechanical Music” & Joint Patent Committee Testimony',
        'pub'      => 'Appleton’s Magazine, Vol. 8, No. 3 (September 1906), pp. 278–284; paired with Arguments Before the Committees on Patents of the Senate and House of Representatives, Conjointly, on the Bills S. 6330 and H.R. 19853, 59th U.S. Congress, 1st Session (June 1906), pp. 23–25.',
        'note'     => 'Intertwined cultural anxieties over “canned music” replacing amateur musicianship with advocacy for composer mechanical royalties ahead of the U.S. Copyright Act of 1909.',
        'url'      => 'https://blogs.loc.gov/now-see-hear/2020/05/sousa-and-the-talking-machine/',
        'urlLabel' => 'Library of Congress Historical Analysis',
    ],
    6 => [
        'type'     => 'Oral History & Conference Proceedings',
        'author'   => 'Hopper, Rear Admiral Grace Murray (1978 / 1981)',
        'title'    => '“Keynote Address,” ACM SIGPLAN History of Programming Languages (HOPL) Conference (June 1, 1978)',
        'pub'      => 'Published in Richard L. Wexelblat (ed.), History of Programming Languages (New York: Academic Press / ACM Monograph Series, 1981), pp. 7–20; see also Charlene W. Billings, Grace Hopper: Navy Admiral and Computer Pioneer (Hillside, NJ: Enslow Publishers, 1989), p. 74.',
        'note'     => 'Documents institutional skepticism toward early software automation when Hopper introduced her 1952 A-0 compiler.',
        'url'      => 'https://doi.org/10.1145/800025.1198341',
        'urlLabel' => 'ACM Digital Library (DOI: 10.1145/800025.1198341)',
    ],
    7 => [
        'type'     => 'Archival Music History',
        'author'   => 'Wald, Elijah (2015)',
        'title'    => 'Dylan Goes Electric! Newport, Seeger, Dylan, and the Night That Split the Sixties',
        'pub'      => 'New York: Dey Street Books / HarperCollins, 2015.',
        'note'     => 'Examines competing eyewitness and historical explanations for the July 25, 1965 Newport Folk Festival booing—weighing purist objections to electric rock and perceived commercialism alongside live sound-mix problems and the brief three-song electric set.',
        'url'      => 'https://www.britannica.com/story/when-dylan-went-electric',
        'urlLabel' => 'Encyclopaedia Britannica Historical Summary',
    ],
    8 => [
        'type'     => 'Contemporaneous Reporting & Historical Scholarship',
        'author'   => 'UK Musicians’ Union Central London Branch (May 23, 1982) & Paul Théberge (1997)',
        'title'    => '1982 Synthesizer & Drum-Machine Motion; analyzed in Any Sound You Can Imagine: Making Music / Consuming Technology',
        'pub'      => 'Contemporaneous reporting in the 1982 British music press (Melody Maker and Musician, Autumn 1982); scholarly labor and studio history in Paul Théberge, Any Sound You Can Imagine (Hanover, NH: Wesleyan University Press, 1997).',
        'note'     => 'Documents the Central London Branch’s labor-protection effort to curb electronic instruments replacing hired acoustic players, which did not become a national union prohibition.',
        'url'      => null,
        'urlLabel' => null,
    ],
    9 => [
        'type'     => 'Retrospective Filmmaker Oral History',
        'author'   => 'Lisberger, Steven (1982 / 2011)',
        'title'    => 'Retrospective Accounts of TRON (1982) and the 55th Academy Awards Visual Effects Branch',
        'pub'      => 'Recounted in director Steven Lisberger’s retrospective interviews, including The Making of TRON (Walt Disney Studios Home Entertainment, 2011) and Academy oral-history retrospectives.',
        'note'     => 'TRON (released July 9, 1982) was neither disqualified from the Oscars as a whole (it received Costume Design and Sound nominations) nor barred by a known published anti-CGI rule; rather, it received no Visual Effects nomination, which Lisberger attributed in later recollections to voters viewing computer imagery as “cheating.”',
        'url'      => null,
        'urlLabel' => null,
    ],
    10 => [
        'type'     => 'Contemporary Criticism & Museum Scholarship',
        'author'   => 'Ritchin, Fred (1990); Britt Salvesen & Staci Steinberger, eds. (2024)',
        'title'    => 'In Our Own Image: The Coming Revolution in Photography (1990) & Digital Witness: Revolutions in Design, Photography, and Film (2024)',
        'pub'      => 'New York: Aperture, 1990; and Los Angeles County Museum of Art (LACMA) / DelMonico Books, 2024, alongside the Computer History Museum’s February 19, 1990 Adobe Photoshop 1.0 archive.',
        'note'     => 'Documents 1990s debates across photography, graphic design, illustration, and cinema over computerized image manipulation, authorship, automation, and creative-industry disruption.',
        'url'      => 'https://computerhistory.org/blog/adobe-photoshop-source-code/',
        'urlLabel' => 'Computer History Museum Archive',
    ],
];

/* ----------------------------------------------------------------------------
 * STEP 3: COPYABLE STANDARD REPLY (USING PHP NOWDOC `<<<'REPLY'` WITH LITERAL `$0`)
 * Matches all historical nuances on this page with zero unattributed quote marks.
 * ---------------------------------------------------------------------------- */
$historyReply = <<<'REPLY'
Thanks for weighing in. To save us both a circular debate, here is how I look at it.

For twenty-four centuries, nearly every tool that automated or broadened creative work has sparked recurring anxieties over skill, authenticity, livelihood, and authorship. Around 370 BCE, Plato's Phaedrus recounted King Thamus warning that writing offered "the appearance of wisdom, not true wisdom." In 1859, Baudelaire conceded cameras had documentary uses while calling photography "the refuge of all failed painters, too lazy to complete their studies." In 1906, Sousa warned Congress against "the menace of mechanical music" during early battles over recordings and mechanical royalties. In 1982, the Central London branch of the UK Musicians' Union passed a motion seeking restrictions on synthesizers and drum machines while TRON went un-nominated for Visual Effects amid skepticism that using computers was "cheating"—followed in the 1990s by fierce debates over whether digital darkrooms and desktop software counted as authentic craft.

History keeps landing in the same place: unreviewed spam is forgotten, and work shaped with real human care, direction, and meaning endures. I disclose my tools openly at https://raggiesoft.com/about/ai-disclaimer, build on a $0 budget, and share my books, music, and software free without paywalls under CC BY-SA 4.0 and MIT.

I know some folks will never warm up to AI-assisted work, and I'm not trying to talk anyone into liking what they don't like. If it's a dealbreaker for you, skip my work with zero hard feelings—I wish you well.

Historical timeline & bibliography: https://raggiesoft.com/about/ai-disclaimer/history-of-tools
REPLY;
?>
<div class="container py-4 ai-suite-shell">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <?php /* 1. Page Header */ ?>
            <div class="text-center mb-4">
                <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                    AI &amp; The Creative Process &bull; Part 4 of 4
                </p>
                <h1 class="fw-bold display-5 mb-3 text-body-emphasis">2,400 Years of &ldquo;That&rsquo;s Cheating!&rdquo;</h1>
                <p class="lead text-body-secondary mx-auto" style="max-width: 780px;">
                    Across twenty-four centuries, recurring anxieties over memory, skill, authenticity, livelihood, and authorship have greeted nearly every tool that automated or broadened human capability&mdash;documented below with historical sources and archival context.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. Mobile-First Responsive Era Timeline Cards (`<ol>` + `#cite-ref-N` Footnotes) */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-3 p-sm-4 p-lg-5">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <h2 class="h4 fw-bold text-body-emphasis mb-0">
                            <i class="ph-duotone ph-clock-counter-clockwise text-warning me-2" aria-hidden="true"></i>Recurring Objections to New Creative &amp; Technical Tools
                        </h2>
                        <a href="#sources" class="small ai-suite-inline-link">
                            <i class="ph-duotone ph-books me-1" aria-hidden="true"></i>Jump to 10 Historical Sources &amp; Archival References &darr;
                        </a>
                    </div>
                    <p class="text-body-secondary mb-4">
                        These historical debates are not identical&mdash;Plato examined externalized memory, Trithemius defended monastic labor and parchment durability, Sousa combined aesthetic alarm with composer copyright advocacy, and Hopper faced skepticism over machine capability&mdash;yet the underlying fears of automation eroding human craft rhyme unmistakably across eras. Select any numbered bracket (such as <strong>[1]</strong>) to inspect its source record.
                    </p>

                    <ol class="list-unstyled mb-0">
                        <?php foreach ($historyMilestones as $idx => $row):
                            $isLastEra = ($idx === count($historyMilestones) - 1);
                        ?>
                            <li class="ai-era-card p-3 p-md-4 rounded-3 border border-base-300 shadow-sm <?php echo $isLastEra ? 'mb-0' : 'mb-3'; ?>">
                                <div class="row g-3 align-items-start">
                                    <?php /* Column 1: Era Pill + Tool Name (100% width on mobile, 3/12 on desktop) */ ?>
                                    <div class="col-12 col-lg-3">
                                        <span class="ai-era-badge mb-2"><?php echo htmlspecialchars($row['era'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        <h3 class="h6 fw-bold text-body-emphasis mb-0">
                                            <?php echo htmlspecialchars($row['tool'], ENT_QUOTES, 'UTF-8'); ?>
                                        </h3>
                                    </div>

                                    <?php /* Column 2: Documented Criticism & Context + Inline `[N]` Footnotes */ ?>
                                    <div class="col-12 col-md-7 col-lg-5">
                                        <div class="text-uppercase fw-bold text-body-secondary mb-1" style="font-size: 0.72rem; letter-spacing: 0.06em;">
                                            <i class="ph-duotone ph-quotes me-1 text-warning" aria-hidden="true"></i>Documented Objection &amp; Historical Context
                                        </div>
                                        <p class="small text-body-secondary mb-0">
                                            <?php foreach ($row['claims'] as $claimIdx => $claim): ?>
                                                <?php if ($claimIdx > 0): ?> <?php endif; ?>
                                                <?php echo htmlspecialchars($claim['text'], ENT_QUOTES, 'UTF-8'); ?>
                                                <?php foreach ($claim['refs'] as $refNum): ?>
                                                    <sup class="ai-cite-sup">
                                                        <a href="#source-<?php echo (int) $refNum; ?>"
                                                           id="cite-ref-<?php echo (int) $refNum; ?>"
                                                           class="ai-cite-ref"
                                                           aria-label="Jump to historical source <?php echo (int) $refNum; ?>">[<?php echo (int) $refNum; ?>]</a>
                                                    </sup>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        </p>
                                    </div>

                                    <?php /* Column 3: History's Verdict Callout Box */ ?>
                                    <div class="col-12 col-md-5 col-lg-4">
                                        <div class="ai-era-verdict p-3 rounded-3">
                                            <div class="text-uppercase fw-bold ai-era-verdict-label mb-1" style="font-size: 0.72rem; letter-spacing: 0.06em;">
                                                <i class="ph-duotone ph-check-circle me-1" aria-hidden="true"></i>Long-Term Outcome
                                            </div>
                                            <p class="small mb-0 fw-medium">
                                                <?php echo htmlspecialchars($row['verdict'], ENT_QUOTES, 'UTF-8'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>

            <?php /* 4. Live and Let Live Note */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h4 fw-bold text-body-emphasis mb-3">
                        <i class="ph-duotone ph-handshake text-success me-2" aria-hidden="true"></i>Why We Don&rsquo;t Argue in Circles
                    </h2>
                    <p class="text-body-secondary mb-3">
                        We know from experience that some critics treat tool choice as an absolute purity test, and no essay, citation, or source repository will ever change their minds. That&rsquo;s okay&mdash;we aren&rsquo;t asking for permission to create, and nobody is ever required to read our books, stream our albums, or install our apps.
                    </p>
                    <p class="text-body-secondary mb-0">
                        That&rsquo;s why we label our workflow openly right on the front door of <a href="/" class="ai-suite-inline-link">RaggieSoft.com</a>: so curious readers, listeners, and fellow builders know exactly how everything is made, and anyone who prefers strictly traditional media can pass it by right away with zero hard feelings.
                    </p>
                </div>
            </div>

            <?php /* 5. Copyable Standard Reply */ ?>
            <section id="standard-reply" aria-labelledby="history-reply-heading" class="mb-5">
                <div class="card bg-base-200 border border-primary shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            Standing Studio Reply &bull; Copy &amp; Share
                        </p>
                        <h2 id="history-reply-heading" class="h4 fw-bold text-body-emphasis mb-3">
                            Standard Reply on Cameras, 1980s Synthesizers, Computer Art &amp; AI
                        </h2>
                        <blockquote id="reply-history-tools" class="ai-reply-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($historyReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <button type="button" class="btn btn-primary btn-sm rounded-full fw-bold px-3" data-copy-target="reply-history-tools" data-copy-status="status-history-tools">
                                <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Standard Reply
                            </button>
                            <span id="status-history-tools" class="small ai-copy-status" role="status" aria-live="polite"></span>
                        </div>
                    </div>
                </div>
            </section>

            <?php /* 6. Historical Sources, Archival Records & Bibliography (`#sources`) */ ?>
            <section id="sources" aria-labelledby="sources-heading" class="mb-4">
                <div class="card bg-base-200 border border-base-300 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            10 Historical Sources &amp; Archival References
                        </p>
                        <h2 id="sources-heading" class="h4 fw-bold text-body-emphasis mb-3">
                            <i class="ph-duotone ph-books text-primary me-2" aria-hidden="true"></i>Historical Sources, Archival Records &amp; Bibliography
                        </h2>
                        <p class="small text-body-secondary mb-4">
                            Each reference below identifies whether the record is a primary text, congressional proceeding, retrospective oral history, or modern archival scholarship&mdash;including notes where popular retellings are disputed or incomplete.
                        </p>

                        <ol class="ai-sources-list small text-body-secondary">
                            <?php foreach ($historicalSources as $num => $src): ?>
                                <li id="source-<?php echo (int) $num; ?>">
                                    <span class="d-inline-block text-uppercase fw-bold text-primary mb-1" style="font-size: 0.7rem; letter-spacing: 0.05em;">
                                        <?php echo htmlspecialchars($src['type'], ENT_QUOTES, 'UTF-8'); ?>
                                    </span><br>
                                    <strong class="text-body-emphasis"><?php echo htmlspecialchars($src['author'], ENT_QUOTES, 'UTF-8'); ?>.</strong>
                                    <em><?php echo htmlspecialchars($src['title'], ENT_QUOTES, 'UTF-8'); ?>.</em>
                                    <?php echo htmlspecialchars($src['pub'], ENT_QUOTES, 'UTF-8'); ?>
                                    <span class="d-block mt-1">
                                        <?php echo htmlspecialchars($src['note'], ENT_QUOTES, 'UTF-8'); ?>
                                        <?php if (!empty($src['url']) && !empty($src['urlLabel'])): ?>
                                            <a href="<?php echo htmlspecialchars($src['url'], ENT_QUOTES, 'UTF-8'); ?>"
                                               class="ai-suite-inline-link ms-1"
                                               target="_blank"
                                               rel="noopener noreferrer"><?php echo htmlspecialchars($src['urlLabel'], ENT_QUOTES, 'UTF-8'); ?> &#8599;</a>
                                        <?php endif; ?>
                                        <a href="#cite-ref-<?php echo (int) $num; ?>"
                                           class="ai-cite-backlink"
                                           aria-label="Back to timeline entry for source <?php echo (int) $num; ?>">&#8617; Back to text</a>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </section>

            <?php
            /* 7. Bottom Sequential Stepper Navigation */
            $nav = [
                'prev'     => ['url' => '/about/ai-disclaimer/zero-budget-reality', 'label' => 'Zero-Budget Reality'],
                'overview' => ['url' => '/about/ai-disclaimer', 'label' => 'AI Process Hub'],
                'next'     => null,
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>
</div>
