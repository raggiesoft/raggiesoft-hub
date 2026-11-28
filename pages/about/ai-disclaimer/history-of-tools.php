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
 * Places generative AI in the 2,400-year historical timeline of creative tool
 * panics—from Socrates criticizing writing (~370 BCE), monastic scribes
 * criticizing printing presses (1492), and Charles Baudelaire attacking
 * photography (1859), to John Philip Sousa warning Congress against recorded
 * music (1906), the 1982 vote to ban synthesizers & drum machines, and 1990s
 * attacks on digital illustration and home recording software:
 *   1. Accessible semantic data table (`<th scope="col">` / `<th scope="row">`)
 *      comparing each era's gatekeeper objection to history's verdict.
 *   2. Calm "Live and Let Live" closing note acknowledging that nobody is
 *      obligated to enjoy AI-assisted projects.
 *   3. One-click copyable Standard Reply built around the camera / 1980s
 *      synthesizer / digital-illustration parallel.
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic Light/Dark accessible historical timeline + copyable standard reply.
 * ============================================================================
 */

$historyMilestones = [
    [
        'era'       => '~370 BCE',
        'tool'      => 'Writing Itself (Plato’s Phaedrus)',
        'objection' => 'Socrates warned that writing was an external mechanical crutch that would weaken human memory and offer only “the semblance of wisdom, not true wisdom.”',
        'verdict'   => 'Became the foundation of literature, science, law, and preserved human memory.',
    ],
    [
        'era'       => '1450s–1492',
        'tool'      => 'Movable-Type Printing Press',
        'objection' => 'Monastic scribes (including Johannes Trithemius in In Praise of Scribes) argued machine-printed books lacked soul and cheapened real manuscript craft.',
        'verdict'   => 'Opened literacy, novels, and scholarship to everyday people outside aristocratic courts.',
    ],
    [
        'era'       => '1839–1859',
        'tool'      => 'Photography & Cameras',
        'objection' => 'Critics declared painting dead; poet Charles Baudelaire called photography “the refuge of every failed painter, too talentless or lazy to finish their studies.”',
        'verdict'   => 'Recognized worldwide as its own expressive art form—while freeing painters to invent Impressionism and modern art.',
    ],
    [
        'era'       => '1906',
        'tool'      => 'Recorded Music & Phonographs',
        'objection' => 'Composer John Philip Sousa testified to Congress against “The Menace of Mechanical Music,” warning recordings would silence human musicianship.',
        'verdict'   => 'Brought music into every home and sparked a century of global musical cross-pollination.',
    ],
    [
        'era'       => '1950s–1965',
        'tool'      => 'Software Compilers & Amplified Instruments',
        'objection' => 'Early machine-code programmers dismissed compilers as “not real programming,” while folk purists booed electric guitars at Newport in 1965 as a betrayal of authenticity.',
        'verdict'   => 'High-level software languages built the modern digital world, and amplified rock reshaped popular culture.',
    ],
    [
        'era'       => '1982',
        'tool'      => 'Synthesizers, Drum Machines & Computer Graphics',
        'objection' => 'The UK Musicians’ Union voted to try to ban synthesizers and drum machines for “replacing musicians,” and early computer-assisted film visuals were dismissed as “cheating.”',
        'verdict'   => 'Defined the iconic 1980s synth-rock sound (celebrated across RaggieSoft’s own The Stardust Engine) and modern cinema.',
    ],
    [
        'era'       => 'Late 1980s–2000s',
        'tool'      => 'Computer Illustration, Digital Darkrooms & Home Studios',
        'objection' => 'Traditional paste-up and airbrush artists mocked digital illustrators as “button-pushers” hunting for a “Make Art” button; studio gatekeepers dismissed home computer recordings as fake.',
        'verdict'   => 'Digital illustration and home studio production became everyday tools of independent creators worldwide.',
    ],
];

$historyReply = implode("\n\n", [
    "Thanks for weighing in. To save us both a debate that has been replayed for centuries, here is how I look at it.",
    "Every time a new tool lets one person create what previously required a studio budget, gatekeepers call it \"button-pushing\" and \"not real craft.\" In 1859, Baudelaire called cameras \"the refuge of every failed painter, too lazy to finish their studies.\" In 1906, Sousa warned Congress against \"mechanical music.\" In 1982, the UK Musicians' Union literally voted to ban synthesizers and drum machines, and in the late 1980s and 1990s digital illustrators and home-studio producers heard the exact same \"the computer did it for you\" dismissal.",
    "History always lands in the same place: lazy, unverified work is forgotten, and work shaped with real human care, direction, and meaning endures. I disclose my tools openly at https://raggiesoft.com/about/ai-disclaimer, build on a \$0 budget, and share my books, music, and software free without paywalls under CC BY-SA 4.0 and MIT.",
    "I know some folks will never warm up to AI-assisted work, and I'm not trying to talk anyone into liking what they don't like. If it's a dealbreaker for you, skip my work with zero hard feelings—I wish you well.",
    "https://raggiesoft.com/about/ai-disclaimer/history-of-tools"
]);
?>
<div class="container py-4 ai-suite-shell">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <?php /* 1. Header */ ?>
            <div class="text-center mb-4">
                <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                    AI &amp; The Creative Process &bull; Part 4 of 4
                </p>
                <h1 class="fw-bold display-5 mb-3 text-body-emphasis">2,400 Years of &ldquo;That&rsquo;s Cheating!&rdquo;</h1>
                <p class="lead text-body-secondary mx-auto" style="max-width: 760px;">
                    From writing and 1800s cameras to 1980s synthesizers and 1990s computer art, every tool that lets solo creators build bigger worlds has faced the exact same script.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. Accessible Historical Timeline Table (`scope="col"` & `scope="row"`) */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h4 fw-bold text-body-emphasis mb-3">
                        <i class="ph-duotone ph-clock-counter-clockwise text-warning me-2" aria-hidden="true"></i>The Gatekeeper Script Across Seven Eras
                    </h2>
                    <p class="text-body-secondary mb-4">
                        Look closely at the objections raised across twenty-four centuries below&mdash;swap out the name of the tool, and the sentences sound as if they were posted on social media ten minutes ago.
                    </p>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-uppercase small fw-bold" style="min-width: 115px;">Era</th>
                                    <th scope="col" class="text-uppercase small fw-bold" style="min-width: 200px;">New Tool</th>
                                    <th scope="col" class="text-uppercase small fw-bold">What Critics Said at the Time</th>
                                    <th scope="col" class="text-uppercase small fw-bold">History&rsquo;s Verdict</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($historyMilestones as $row): ?>
                                    <tr>
                                        <th scope="row" class="fw-bold text-primary"><?php echo htmlspecialchars($row['era'], ENT_QUOTES, 'UTF-8'); ?></th>
                                        <td class="fw-semibold text-body-emphasis"><?php echo htmlspecialchars($row['tool'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td class="small text-body-secondary"><?php echo htmlspecialchars($row['objection'], ENT_QUOTES, 'UTF-8'); ?></td>
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
                        We know from experience that some critics treat tool choice as an absolute purity test, and no essay or code repository will ever change their minds. That&rsquo;s okay&mdash;we aren&rsquo;t asking for permission to create, and nobody is ever required to read our books, stream our albums, or install our apps.
                    </p>
                    <p class="text-body-secondary mb-0">
                        That&rsquo;s why we label our workflow openly right on the front door of <a href="/" class="ai-suite-inline-link">RaggieSoft.com</a>: so curious readers, listeners, and fellow builders know exactly how everything is made, and anyone who prefers strictly traditional media can pass it by right away with zero hard feelings.
                    </p>
                </div>
            </div>

            <?php /* 5. Copyable Standard Reply */ ?>
            <section id="standard-reply" aria-labelledby="history-reply-heading" class="mb-4">
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

            <?php
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
