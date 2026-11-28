<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/about/ai-disclaimer/history-of-tools.php
 * Role: Part 4 of 4 — 2,400 Years of Creative Tools (`/about/ai-disclaimer/history-of-tools`)
 * Route Manifest: `/data/routes/about.json` -> `"/about/ai-disclaimer/history-of-tools"`
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Places generative AI in the documented 2,400-year historical record of creative
 * tool panics—from Socrates criticizing writing in Plato's Phaedrus (~370 BCE),
 * Abbot Johannes Trithemius defending parchment scribes against printing presses
 * (1492), and Paul Delaroche / Charles Baudelaire attacking photography (1839–1859),
 * to John Philip Sousa warning the U.S. Congress against recorded music (1906),
 * Grace Hopper's first compiler (1952), Newport '65, the May 1982 UK Musicians'
 * Union London branch motion against synthesizers & TRON's Oscar snub (1982),
 * and 1990s resistance to digital darkrooms, computer illustration, and home studios:
 *   1. Accessible semantic data table (`<th scope="col">` / `<th scope="row">`)
 *      with bidirectional superscript footnote anchors (`#cite-ref-N` -> `#source-N`).
 *   2. Calm "Why We Don't Argue in Circles" closing note acknowledging that
 *      nobody is ever obligated to enjoy AI-assisted projects.
 *   3. One-click copyable Standard Reply built around verified historical records.
 *   4. Complete 10-entry "Primary Sources & Historical Bibliography" section
 *      (`#sources`) with return-to-text links for keyboard and screen-reader users.
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic Light/Dark accessible historical timeline, copyable standard reply,
 *   and primary-source bibliography.
 * ============================================================================
 */

/* ----------------------------------------------------------------------------
 * STEP 1: DEFINE THE SEVEN HISTORICAL MILESTONES & THEIR FOOTNOTE NUMBERS
 * Each row stores safe plain-text strings for the Era, New Tool, and Verdict,
 * plus an array of `$citations` segments so every claim links directly to its
 * exact numbered entry in `$historicalSources` below (`#source-1` .. `#source-10`).
 * ---------------------------------------------------------------------------- */
$historyMilestones = [
    [
        'era'     => '~370 BCE',
        'tool'    => 'Writing Itself (Plato’s Phaedrus)',
        'claims'  => [
            [
                'text' => 'In Plato’s Phaedrus, Socrates recounts Egyptian King Thamus warning that writing is an external mechanical crutch—“an elixir not of memory, but of reminding”—that offers pupils “the appearance of wisdom, not true wisdom.”',
                'refs' => [1],
            ],
        ],
        'verdict' => 'Became the foundation of literature, science, law, and preserved human memory.',
    ],
    [
        'era'     => '1492',
        'tool'    => 'Movable-Type Printing Press',
        'claims'  => [
            [
                'text' => 'Benedictine abbot Johannes Trithemius urged monks in De laude scriptorum (In Praise of Scribes) not to abandon hand-lettered parchment for printed paper books, arguing machine printing lacked spiritual discipline and would decay within two centuries.',
                'refs' => [2],
            ],
        ],
        'verdict' => 'Opened literacy, novels, and scholarship to everyday people outside aristocratic courts.',
    ],
    [
        'era'     => '1839–1859',
        'tool'    => 'Photography & Cameras',
        'claims'  => [
            [
                'text' => 'Upon seeing early daguerreotypes in 1839, academic painter Paul Delaroche reportedly declared, “From today, painting is dead!”',
                'refs' => [3],
            ],
            [
                'text' => 'Twenty years later, poet and art critic Charles Baudelaire condemned photography at the Salon of 1859 as “the refuge of all failed painters with too little talent, or too lazy to complete their studies.”',
                'refs' => [4],
            ],
        ],
        'verdict' => 'Recognized worldwide as its own expressive art form—while freeing painters to invent Impressionism and modern art.',
    ],
    [
        'era'     => '1906',
        'tool'    => 'Recorded Music & Player Pianos',
        'claims'  => [
            [
                'text' => 'Composer John Philip Sousa warned the U.S. Congress and magazine readers against “The Menace of Mechanical Music,” predicting that “canned music” from phonographs and player pianos would silence amateur singing and cause human vocal cords to shrivel from disuse.',
                'refs' => [5],
            ],
        ],
        'verdict' => 'Brought music into every home and sparked a century of global musical cross-pollination.',
    ],
    [
        'era'     => '1952–1965',
        'tool'    => 'Software Compilers & Amplified Instruments',
        'claims'  => [
            [
                'text' => 'Computer pioneer Rear Admiral Grace Hopper recalled that when she completed her first A-0 compiler in 1952, “nobody would touch it because, they carefully told me, computers could only do arithmetic; they could not do programs.”',
                'refs' => [6],
            ],
            [
                'text' => 'At the Newport Folk Festival on July 25, 1965, traditionalist purists booed Bob Dylan’s electric band as a commercial betrayal of authentic folk craft.',
                'refs' => [7],
            ],
        ],
        'verdict' => 'High-level software languages built the modern digital world, and amplified rock reshaped popular culture.',
    ],
    [
        'era'     => '1982',
        'tool'    => 'Synthesizers, Drum Machines & Computer Graphics',
        'claims'  => [
            [
                'text' => 'On May 23, 1982, the Central London Branch of the UK Musicians’ Union passed a motion seeking to ban synthesizers and drum machines that imitated acoustic instruments.',
                'refs' => [8],
            ],
            [
                'text' => 'That same year, the pioneering sci-fi film TRON was passed over for a Visual Effects Oscar nomination because Academy voters viewed generating imagery on computers as “cheating.”',
                'refs' => [9],
            ],
        ],
        'verdict' => 'Defined the iconic 1980s synth-rock sound (celebrated across RaggieSoft’s own The Stardust Engine) and modern cinema.',
    ],
    [
        'era'     => '1990s–2000s',
        'tool'    => 'Digital Darkrooms, Computer Illustration & Home Studios',
        'claims'  => [
            [
                'text' => 'Following the February 1990 debut of Adobe Photoshop 1.0 and affordable desktop recording software, critics and traditionalists warned that undo buttons, digital layers, and computer editing compromised authentic craft and reduced artistry to mechanical “trickery.”',
                'refs' => [10],
            ],
        ],
        'verdict' => 'Digital illustration and home studio production became everyday tools of independent creators worldwide.',
    ],
];

/* ----------------------------------------------------------------------------
 * STEP 2: DEFINE THE TEN VERIFIED PRIMARY & ARCHIVAL SOURCES
 * Every entry includes the author, historical date, exact work/publication,
 * page or Stephanus section numbers, historical context, and an optional
 * archival reference URL (`url` + `urlLabel`) when a stable scholarly archive exists.
 * ---------------------------------------------------------------------------- */
$historicalSources = [
    1 => [
        'author'   => 'Plato (c. 370 BCE)',
        'title'    => 'Phaedrus, Stephanus sections 274c–275b',
        'pub'      => 'Translated by Harold North Fowler in Plato in Twelve Volumes, Vol. 9 (Cambridge, MA: Harvard University Press / Loeb Classical Library, 1925).',
        'note'     => 'Records Socrates’ dialogue with Phaedrus recounting King Thamus’ rebuke of the god Theuth: writing is “an elixir not of memory, but of reminding; and you offer your pupils the appearance of wisdom, not true wisdom.”',
        'url'      => 'https://www.perseus.tufts.edu/hopper/text?doc=Plat.+Phaedrus+275a',
        'urlLabel' => 'Perseus Digital Library (Tufts University)',
    ],
    2 => [
        'author'   => 'Trithemius, Johannes (1492; first printed Mainz, 1494)',
        'title'    => 'De laude scriptorum (In Praise of Scribes), Chapter 7',
        'pub'      => 'Edited by Klaus Arnold; English translation by Roland Behrendt (Lawrence, KS: Coronado Press, 1974).',
        'note'     => 'Written at Sponheim Abbey to persuade monks to continue copying manuscripts by hand despite movable type—ironically printed on a press two years later so Trithemius could distribute his argument more widely.',
        'url'      => null,
        'urlLabel' => null,
    ],
    3 => [
        'author'   => 'Delaroche, Paul (c. 1839), documented in Gaston Tissandier (1874)',
        'title'    => 'Les Merveilles de la photographie (A History and Handbook of Photography)',
        'pub'      => 'Paris: Hachette, 1874; English translation edited by John Thomson (London: Sampson Low, Marston, Low, & Searle, 1876).',
        'note'     => 'Documents French academic painter Paul Delaroche’s famous exclamation—“From today, painting is dead!”—upon inspecting Louis Daguerre’s early daguerreotype plates in 1839.',
        'url'      => null,
        'urlLabel' => null,
    ],
    4 => [
        'author'   => 'Baudelaire, Charles (1859)',
        'title'    => '“Le Public moderne et la photographie” (“The Modern Public and Photography”), in Salon de 1859',
        'pub'      => 'Originally published in Revue Française (June–July 1859); English translation by Jonathan Mayne in Art in Paris, 1845–1862: Salons and Other Exhibitions Reviewed by Charles Baudelaire (London: Phaidon Press, 1965), pp. 149–155.',
        'note'     => 'Dismissed photography as a purely mechanical industrial servant that could never enter the sphere of intangible imagination without corrupting fine art.',
        'url'      => null,
        'urlLabel' => null,
    ],
    5 => [
        'author'   => 'Sousa, John Philip (1906)',
        'title'    => '“The Menace of Mechanical Music” & U.S. Congressional Patent Committee Testimony',
        'pub'      => 'Appleton’s Magazine, Vol. 8, No. 3 (September 1906), pp. 278–284; paired with Arguments Before the Committees on Patents of the Senate and House of Representatives, Conjointly, on the Bills S. 6330 and H.R. 19853, 59th U.S. Congress, 1st Session (June 1906), pp. 23–25.',
        'note'     => 'Coined the derisive phrase “canned music” and warned lawmakers that mechanical talking machines would sweep town bands, parlor pianos, and amateur human singing into extinction.',
        'url'      => 'https://archive.org/details/argumentsbeforec00unit',
        'urlLabel' => 'Internet Archive (1906 Congressional Record)',
    ],
    6 => [
        'author'   => 'Hopper, Rear Admiral Grace Murray (1978 / 1981)',
        'title'    => '“Keynote Address,” ACM SIGPLAN History of Programming Languages (HOPL) Conference (June 1, 1978)',
        'pub'      => 'Published in Richard L. Wexelblat (ed.), History of Programming Languages (New York: Academic Press / ACM Monograph Series, 1981), pp. 7–20; and Charlene W. Billings, Grace Hopper: Navy Admiral and Computer Pioneer (Hillside, NJ: Enslow Publishers, 1989), p. 74.',
        'note'     => 'Recounts how early 1950s programmers initially refused to use her 1952 A-0 compiler because automating machine-code assembly was viewed as something a computer could not legitimately do.',
        'url'      => 'https://doi.org/10.1145/800025.1198341',
        'urlLabel' => 'ACM Digital Library (DOI: 10.1145/800025.1198341)',
    ],
    7 => [
        'author'   => 'Wald, Elijah (2015)',
        'title'    => 'Dylan Goes Electric! Newport, Seeger, Dylan, and the Night That Split the Sixties',
        'pub'      => 'New York: Dey Street Books / HarperCollins, 2015.',
        'note'     => 'Archival history of July 25, 1965 at the Newport Folk Festival in Newport, Rhode Island, examining why folk revival gatekeepers heard electric amplification as a betrayal of human authenticity.',
        'url'      => null,
        'urlLabel' => null,
    ],
    8 => [
        'author'   => 'UK Musicians’ Union, Central London Branch Motion (May 23, 1982) & Paul Théberge (1997)',
        'title'    => 'Any Sound You Can Imagine: Making Music / Consuming Technology',
        'pub'      => 'Central London Branch resolution reported across the 1982 British music press (Melody Maker and Musician, Autumn 1982); historical analysis in Paul Théberge, Any Sound You Can Imagine (Hanover, NH: Wesleyan University Press, 1997).',
        'note'     => 'While the Central London Branch voted on May 23, 1982 to seek a ban on synthesizers and drum machines used in place of acoustic session players, the national union ultimately declined to enforce a blanket prohibition as 1980s synth-pop and synth-rock flourished.',
        'url'      => null,
        'urlLabel' => null,
    ],
    9 => [
        'author'   => 'Lisberger, Steven (1982 / 2011)',
        'title'    => 'Retrospective Accounts of TRON (1982) and the 55th Academy Awards Visual Effects Branch',
        'pub'      => 'Documented in Academy of Motion Picture Arts and Sciences (AMPAS) retrospectives and The Making of TRON (Walt Disney Studios Home Entertainment, 2011).',
        'note'     => 'Clarifies a common retelling: TRON (released July 9, 1982) was not barred by a written rulebook clause, rather voters in the Academy’s visual effects branch declined to nominate it because, as director Steven Lisberger recounted, “The Academy thought we cheated by using computers.”',
        'url'      => null,
        'urlLabel' => null,
    ],
    10 => [
        'author'   => 'Ritchin, Fred (1990) & Computer History Museum Photoshop Oral History',
        'title'    => 'In Our Own Image: The Coming Revolution in Photography',
        'pub'      => 'New York: Aperture, 1990; alongside John Knoll and Thomas Knoll’s Adobe Photoshop 1.0 release history (February 19, 1990, Computer History Museum, Mountain View, CA).',
        'note'     => 'Captures early-1990s alarm across photography, commercial illustration, and publishing as computerized darkrooms, undo stacks, and desktop tools moved image-making onto personal computers.',
        'url'      => 'https://computerhistory.org/blog/adobe-photoshop-source-code/',
        'urlLabel' => 'Computer History Museum Archive',
    ],
];

/* ----------------------------------------------------------------------------
 * STEP 3: COPYABLE STANDARD REPLY (USING PHP NOWDOC `<<<'REPLY'` WITH LITERAL `$0`)
 * Remember: NEVER escape `$` inside a PHP NOWDOC or HTML block—plain `$0`
 * renders cleanly as `$0` on screen and copies cleanly to the user's clipboard!
 * ---------------------------------------------------------------------------- */
$historyReply = <<<'REPLY'
Thanks for weighing in. To save us both a debate that has been replayed for centuries, here is how I look at it.

Every time a new tool lets one person create what previously required a studio budget, gatekeepers call it "button-pushing" and "not real craft." Around 370 BCE, Plato's Phaedrus warned that writing itself offered "the appearance of wisdom, not true wisdom." In 1859, Baudelaire called photography "the refuge of all failed painters, too lazy to complete their studies." In 1906, Sousa warned Congress against "the menace of mechanical music." In 1982, the Central London branch of the UK Musicians' Union voted to try to ban synthesizers and drum machines while Oscar voters snubbed TRON because using computers felt like "cheating"—and in the 1990s digital illustrators and home-studio producers heard the exact same "the computer did it for you" dismissal.

History always lands in the same place: lazy, unverified work is forgotten, and work shaped with real human care, direction, and meaning endures. I disclose my tools openly at https://raggiesoft.com/about/ai-disclaimer, build on a $0 budget, and share my books, music, and software free without paywalls under CC BY-SA 4.0 and MIT.

I know some folks will never warm up to AI-assisted work, and I'm not trying to talk anyone into liking what they don't like. If it's a dealbreaker for you, skip my work with zero hard feelings—I wish you well.

Full historical timeline & primary sources: https://raggiesoft.com/about/ai-disclaimer/history-of-tools
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
                <p class="lead text-body-secondary mx-auto" style="max-width: 760px;">
                    From writing and 1800s cameras to 1980s synthesizers and 1990s computer art, every tool that lets solo creators build bigger worlds has faced the exact same script&mdash;documented below with primary historical sources.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. Accessible Historical Timeline Table (`scope="col"` & `scope="row"` + `#cite-ref-N` Footnotes) */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <h2 class="h4 fw-bold text-body-emphasis mb-0">
                            <i class="ph-duotone ph-clock-counter-clockwise text-warning me-2" aria-hidden="true"></i>The Gatekeeper Script Across Seven Eras
                        </h2>
                        <a href="#sources" class="small ai-suite-inline-link">
                            <i class="ph-duotone ph-books me-1" aria-hidden="true"></i>Jump to 10 Primary Sources &darr;
                        </a>
                    </div>
                    <p class="text-body-secondary mb-4">
                        Look closely at the documented objections across twenty-four centuries below&mdash;swap out the name of the tool, and the sentences read as if they were posted on social media ten minutes ago. Select any numbered bracket (such as <strong>[1]</strong>) to inspect the exact historical record.
                    </p>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-uppercase small fw-bold" style="min-width: 115px;">Era</th>
                                    <th scope="col" class="text-uppercase small fw-bold" style="min-width: 200px;">New Tool</th>
                                    <th scope="col" class="text-uppercase small fw-bold">Documented Criticism at the Time</th>
                                    <th scope="col" class="text-uppercase small fw-bold">History&rsquo;s Verdict</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($historyMilestones as $row): ?>
                                    <tr>
                                        <th scope="row" class="fw-bold text-primary"><?php echo htmlspecialchars($row['era'], ENT_QUOTES, 'UTF-8'); ?></th>
                                        <td class="fw-semibold text-body-emphasis"><?php echo htmlspecialchars($row['tool'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td class="small text-body-secondary">
                                            <?php foreach ($row['claims'] as $claimIdx => $claim): ?>
                                                <?php if ($claimIdx > 0): ?> <?php endif; ?>
                                                <?php echo htmlspecialchars($claim['text'], ENT_QUOTES, 'UTF-8'); ?>
                                                <?php foreach ($claim['refs'] as $refNum): ?>
                                                    <sup class="ai-cite-sup">
                                                        <a href="#source-<?php echo (int) $refNum; ?>"
                                                           id="cite-ref-<?php echo (int) $refNum; ?>"
                                                           class="ai-cite-ref"
                                                           aria-label="Jump to primary source <?php echo (int) $refNum; ?>">[<?php echo (int) $refNum; ?>]</a>
                                                    </sup>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td class="small text-body-emphasis"><?php echo htmlspecialchars($row['verdict'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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

            <?php /* 6. Primary Sources & Historical Bibliography (`#sources` with bidirectional `#cite-ref-N` return links) */ ?>
            <section id="sources" aria-labelledby="sources-heading" class="mb-4">
                <div class="card bg-base-200 border border-base-300 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            Verified Historical Record &bull; Primary Texts &amp; Archives
                        </p>
                        <h2 id="sources-heading" class="h4 fw-bold text-body-emphasis mb-3">
                            <i class="ph-duotone ph-books text-primary me-2" aria-hidden="true"></i>Primary Sources &amp; Historical Bibliography
                        </h2>
                        <p class="small text-body-secondary mb-4">
                            Every historical claim on this page is anchored to published primary texts, parliamentary/congressional proceedings, or oral-history archives so readers can verify the original context directly.
                        </p>

                        <ol class="ai-sources-list small text-body-secondary">
                            <?php foreach ($historicalSources as $num => $src): ?>
                                <li id="source-<?php echo (int) $num; ?>">
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
                                           aria-label="Back to table row for source <?php echo (int) $num; ?>">&#8617; Back to text</a>
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
