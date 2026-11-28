<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/about/ai-disclaimer.php
 * Role: Public AI Transparency & Creative Workflow Hub (`/about/ai-disclaimer`)
 * Route Manifest: `/data/routes/about.json` -> `"/about/ai-disclaimer"` (`showSidebar: true`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Serves as the hub of RaggieSoft's 4-page AI & Creative Process family:
 *   1. Shared 4-Tab Section Bar (`includes/components/navigation/ai-disclaimer-subnav.php`).
 *   2. 3-Column Responsibility Breakdown:
 *      - "The Writer" — Michael (Human): Concept, novel prose, lyric concepts,
 *        and final executive/editorial sign-off.
 *      - "The Co-Writer" — Google Antigravity (Powered by Gemini): Continuity,
 *        meter/rhyme polishing, and arrangement notes.
 *      - "The Studio" — Suno (AI): Commercial-tier audio and vocal synthesis.
 *   3. The Prompt Engineering Philosophy (zero copyrighted triggers, diacritical
 *      precision like Uluṟu/Québec/Montréal, phonetic control, visual blueprinting).
 *   4. Deep-Dive Companion Guide Cards linking to our three standing-reply pages:
 *      - `/about/ai-disclaimer/craft-vs-slop`
 *      - `/about/ai-disclaimer/zero-budget-reality`
 *      - `/about/ai-disclaimer/history-of-tools`
 *   5. Network-wide Work of Fiction Disclaimer + Narrative Stepper pagination.
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic, Light/Dark accessible HTML partial rendered inside `<main id="main-content">`.
 * ============================================================================
 */
?>
<div class="container py-4 ai-suite-shell">
    <div class="row justify-content-center">
        <div class="col-lg-12">

            <?php /* 1. Page Header */ ?>
            <div class="text-center mb-4">
                <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                    Open Disclosure &bull; Part 1 of 4
                </p>
                <h1 class="fw-bold display-5 mb-3 text-body-emphasis">AI &amp; The Creative Process</h1>
                <p class="lead text-body-secondary mx-auto" style="max-width: 740px;">
                    Transparency is the baseline. The novels, music, lore, and desktop applications across RaggieSoft are built through a collaborative workflow combining human authorship, decades of hands-on coding, and modern generative AI tools.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. Three-Column Responsibility Breakdown */ ?>
            <div class="row g-4 mb-5">

                <div class="col-md-4 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="ai-role-banner--writer p-3 rounded-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-duotone ph-user-gear ph-2x me-3" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h5 mb-0 fw-bold ai-role-title">The Writer &amp; Builder</h2>
                                        <small class="ai-role-sub fw-semibold">Michael P. Ragsdale (Human)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-uppercase small fw-bold mb-2 text-success">
                                <i class="ph-duotone ph-pen-nib me-1" aria-hidden="true"></i>Concept, Code &amp; Final Cut
                            </div>
                            <p class="text-body-emphasis">
                                The architect of the universe. Every RaggieSoft project starts and ends with human intention, personal lived experience, and final editorial judgment.
                            </p>
                            <ul class="list-unstyled small text-body-secondary flex-grow-1 mb-0">
                                <li class="mb-2"><i class="ph-duotone ph-check text-success me-2" aria-hidden="true"></i>Develops overarching storylines, characters, and software architecture.</li>
                                <li class="mb-2"><i class="ph-duotone ph-check text-success me-2" aria-hidden="true"></i>Drafts lyric themes, emotional arcs, and world-building rules.</li>
                                <li><i class="ph-duotone ph-check text-success me-2" aria-hidden="true"></i>Reviews, edits, verifies by ear and eye, and signs off on every release.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="ai-role-banner--cowriter p-3 rounded-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-duotone ph-chats-circle ph-2x me-3" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h5 mb-0 fw-bold ai-role-title">The Co-Writer</h2>
                                        <small class="ai-role-sub fw-semibold">Google Antigravity &amp; Coding Assistants</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-uppercase small fw-bold mb-2 text-primary">
                                <i class="ph-duotone ph-note-pencil me-1" aria-hidden="true"></i>Sounding Board &amp; Accelerator
                            </div>
                            <p class="text-body-emphasis">
                                Collaborative partner for drafting, refactoring, continuity cross-checks, lyrical meter polishing, and musical arrangement notes.
                            </p>
                            <ul class="list-unstyled small text-body-secondary flex-grow-1 mb-0">
                                <li class="mb-2"><i class="ph-duotone ph-check text-primary me-2" aria-hidden="true"></i>Helps organize multi-book timelines, reading guides, and application code.</li>
                                <li class="mb-2"><i class="ph-duotone ph-check text-primary me-2" aria-hidden="true"></i>Refines meter, rhyme structure, and singable phrasing.</li>
                                <li><i class="ph-duotone ph-check text-primary me-2" aria-hidden="true"></i>Translates sonic concepts into structured instrumentation blueprints.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="ai-role-banner--studio p-3 rounded-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-duotone ph-music-notes ph-2x me-3" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h5 mb-0 fw-bold ai-role-title">The Studio</h2>
                                        <small class="ai-role-sub fw-semibold">Suno (Commercial Tier)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-uppercase small fw-bold mb-2 text-warning">
                                <i class="ph-duotone ph-waveform me-1" aria-hidden="true"></i>Audio &amp; Vocal Synthesis
                            </div>
                            <p class="text-body-emphasis">
                                The virtual booth. Suno takes our finalized lyrics and custom arrangement prompts and synthesizes full-band instrumentation and vocals.
                            </p>
                            <ul class="list-unstyled small text-body-secondary flex-grow-1 mb-0">
                                <li class="mb-2"><i class="ph-duotone ph-check text-warning me-2" aria-hidden="true"></i>Renders original melodies, arrangements, and vocal performances.</li>
                                <li class="mb-2"><i class="ph-duotone ph-check text-warning me-2" aria-hidden="true"></i>Paired with ear-verified synchronized sing-along lyrics in The Listening Room.</li>
                                <li><i class="ph-duotone ph-check text-warning me-2" aria-hidden="true"></i>Produced under commercial-tier licensing and shared freely with listeners.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <?php /* 4. Prompt Engineering & Quality Gates */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm w-100 mb-5">
                <div class="card-body p-4 p-lg-5">
                    <div class="text-center mb-4">
                        <h2 class="h4 fw-bold text-body-emphasis">Our Creative Quality Bar</h2>
                        <p class="text-body-secondary mb-0">Thoughtful AI-assisted work isn&rsquo;t pushing a single button&mdash;it requires strict creative rules, verification, and taste.</p>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Zero Real-Artist Triggers:</strong> We never prompt real band names, living vocalists, or copyrighted song titles, keeping every band&rsquo;s sound and world self-contained.
                                </li>
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Clean Era &amp; Instrument Direction:</strong> Every track uses detailed arrangement notes specifying tempo, era, dynamics, and instrumentation.
                                </li>
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Diacritical &amp; Cultural Precision:</strong> Proper indigenous and regional names keep their authentic orthography&mdash;such as <strong>Uluṟu</strong> (never the colonial name or unaccented spelling),<sup class="ai-cite-sup"><a href="#source-1" id="cite-ref-1" class="ai-cite-ref" aria-label="Jump to source 1">[1]</a></sup> <strong>Québec</strong>, and <strong>Montréal</strong>.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Phonetic &amp; Ear-Verified Lyrics:</strong> Fictional acronyms and regional place names are guided phonetically, and every sing-along lyric line is checked by human ear.
                                </li>
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Visual Continuity &amp; Inspection:</strong> Every scene illustration is checked against character references, North American right-hand road rules, and crisp deterministic typography.
                                </li>
                                <li class="list-group-item bg-transparent border-0 text-body-emphasis">
                                    <i class="ph-duotone ph-caret-right text-primary me-2" aria-hidden="true"></i>
                                    <strong>Open Culture by Default:</strong> Creative works are published free without paywalls under <strong>CC BY-SA 4.0</strong>,<sup class="ai-cite-sup"><a href="#source-2" id="cite-ref-2" class="ai-cite-ref" aria-label="Jump to source 2">[2]</a></sup> and software source code under the <strong>MIT License</strong>.<sup class="ai-cite-sup"><a href="#source-3" id="cite-ref-3" class="ai-cite-ref" aria-label="Jump to source 3">[3]</a></sup>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* 5. Deep-Dive Companion Pages: Addressing Criticisms & Standing Replies */ ?>
            <section aria-labelledby="deep-dive-series-heading" class="mb-5">
                <div class="text-center mb-4">
                    <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                        Why We Build Openly &bull; Standing Replies to Common Criticisms
                    </p>
                    <h2 id="deep-dive-series-heading" class="h3 fw-bold text-body-emphasis mb-2">
                        Addressing &ldquo;AI Slop,&rdquo; Studio Budgets, and Creative History
                    </h2>
                    <p class="text-body-secondary mx-auto mb-0" style="max-width: 720px;">
                        Each companion page below examines one of the three common arguments aimed at independent creators who use AI tools&mdash;along with our copyable standing reply.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4 d-flex">
                        <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2 text-primary">
                                    <i class="ph-duotone ph-sliders ph-2x" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-body-emphasis mb-2">1. Human Craft vs. &ldquo;AI Slop&rdquo;</h3>
                                <p class="small text-body-secondary flex-grow-1">
                                    Why &ldquo;slop&rdquo; is defined by the absence of human care, verification, and lived direction&mdash;not by which tool touched the file&mdash;plus how pre-AI coding roots shape everything we ship.
                                </p>
                                <a href="/about/ai-disclaimer/craft-vs-slop" class="btn btn-primary btn-sm rounded-full fw-bold mt-2">
                                    Read Part 2: Craft vs. Slop <i class="ph-bold ph-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2 text-success">
                                    <i class="ph-duotone ph-piggy-bank ph-2x" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-body-emphasis mb-2">2. The Zero-Budget Reality</h3>
                                <p class="small text-body-secondary flex-grow-1">
                                    Why telling a working-class solo creator with a $0 budget to &ldquo;just hire a band, illustrators, editors, and developers&rdquo; is a false choice&mdash;and why free open-culture art displaces nobody.
                                </p>
                                <a href="/about/ai-disclaimer/zero-budget-reality" class="btn btn-primary btn-sm rounded-full fw-bold mt-2">
                                    Read Part 3: Zero-Budget Reality <i class="ph-bold ph-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2 text-warning">
                                    <i class="ph-duotone ph-clock-counter-clockwise ph-2x" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-body-emphasis mb-2">3. 2,400 Years of New Tools</h3>
                                <p class="small text-body-secondary flex-grow-1">
                                    From Plato&rsquo;s warning against writing and 1850s attacks on cameras to the 1982 vote to ban synthesizers and 1990s digital-art gatekeeping: why every new medium gets called &ldquo;cheating.&rdquo;
                                </p>
                                <a href="/about/ai-disclaimer/history-of-tools" class="btn btn-primary btn-sm rounded-full fw-bold mt-2">
                                    Read Part 4: History of Tools <i class="ph-bold ph-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php /* 6. Standards & Reference Notes (`#sources`) */ ?>
            <section id="sources" aria-labelledby="hub-sources-heading" class="mb-5">
                <div class="card bg-base-200 border border-base-300 shadow-sm w-100">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            Cultural Orthography &amp; Open-License Standards
                        </p>
                        <h2 id="hub-sources-heading" class="h5 fw-bold text-body-emphasis mb-3">
                            <i class="ph-duotone ph-books text-primary me-2" aria-hidden="true"></i>Standards &amp; Reference Notes
                        </h2>
                        <ol class="ai-sources-list small text-body-secondary">
                            <li id="source-1">
                                <strong class="text-body-emphasis">Parks Australia &amp; Uluṟu-Kata Tjuṯa National Park.</strong>
                                <em>Traditional Pitjantjatjara / Yankunytjatjara (Aṉangu) Orthography for Uluṟu.</em>
                                <span class="d-block mt-1">
                                    Preserves the traditional Aṉangu spelling with the retroflex <em>ṟ</em> underdot rather than colonial or unaccented spellings.
                                    <a href="https://parksaustralia.gov.au/uluru/" class="ai-suite-inline-link ms-1" target="_blank" rel="noopener noreferrer">Parks Australia Official Guide &#8599;</a>
                                    <a href="#cite-ref-1" class="ai-cite-backlink" aria-label="Back to text for source 1">&#8617; Back to text</a>
                                </span>
                            </li>
                            <li id="source-2">
                                <strong class="text-body-emphasis">Creative Commons Corporation (2013).</strong>
                                <em>Attribution-ShareAlike 4.0 International Public License (CC BY-SA 4.0).</em>
                                <span class="d-block mt-1">
                                    Governs free open-culture reading and sharing across RaggieSoft narratives and music alongside our <a href="https://corporate.raggiesoft.com/licensing" class="ai-suite-inline-link">Licensing Overview</a>.
                                    <a href="https://creativecommons.org/licenses/by-sa/4.0/" class="ai-suite-inline-link ms-1" target="_blank" rel="noopener noreferrer">Creative Commons License Deed &#8599;</a>
                                    <a href="#cite-ref-2" class="ai-cite-backlink" aria-label="Back to text for source 2">&#8617; Back to text</a>
                                </span>
                            </li>
                            <li id="source-3">
                                <strong class="text-body-emphasis">Open Source Initiative.</strong>
                                <em>The MIT License (MIT).</em>
                                <span class="d-block mt-1">
                                    Permissive open-source software license governing RaggieSoft source code repositories.
                                    <a href="https://opensource.org/license/mit" class="ai-suite-inline-link ms-1" target="_blank" rel="noopener noreferrer">Open Source Initiative &#8599;</a>
                                    <a href="#cite-ref-3" class="ai-cite-backlink" aria-label="Back to text for source 3">&#8617; Back to text</a>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <?php /* 7. Work of Fiction & Fictitious Entities Disclaimer */ ?>
            <div class="card bg-base-200 border border-warning shadow-sm w-100">
                <div class="card-body p-4 p-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <i class="ph-duotone ph-scales ph-2x text-warning me-3" aria-hidden="true"></i>
                        <div>
                            <h2 class="h5 fw-bold text-body-emphasis mb-0">Work of Fiction Disclaimer (All Persons, Bands &amp; Institutions Fictitious)</h2>
                            <small class="text-body-secondary">Creative World-Building &amp; Narrative Lore</small>
                        </div>
                    </div>
                    <p class="text-body-emphasis mb-0">
                        Aside from Michael P. Ragsdale&rsquo;s real-world software engineering portfolio, everything presented across <strong>RaggieSoft.com</strong>, <strong>The Listening Room (music.raggiesoft.com)</strong>, <strong>Ocean View Archives (books.raggiesoft.com)</strong>, and <strong>RaggieSoft Story Crossroads (crossroads.raggiesoft.com)</strong> is a work of creative fiction. All bands (including <em>The Stardust Engine, Fractured Prisms, The Paper Wall, Crimson Node, Mana Canvas, The Hoshizora Ensemble,</em> and <em>The Arctic Symphony Project</em>), characters, biographies, universities (including <strong>Commonwealth Polytechnic Institute / CPI</strong>, <strong>Virginia Dominion University / VDU</strong>, <strong>The Forgers</strong>, and <strong>The Crucible</strong>), corporations (including <strong>OmniCorp</strong>, <strong>Apex Records</strong>, <strong>Prairie Coachworks</strong>, and <strong>Sainte-Claire</strong>), transit agencies (<strong>Blue Ridge Transit</strong>, <strong>CVTA</strong>), legal filings, and events are fictitious. Any resemblance to actual persons (living or dead), businesses, academic institutions, or events is purely coincidental.
                    </p>
                </div>
            </div>

            <?php
            $nav = [
                'prev'     => null,
                'overview' => ['url' => '/about', 'label' => 'Mission Profile'],
                'next'     => ['url' => '/about/ai-disclaimer/craft-vs-slop', 'label' => 'Craft vs. “AI Slop”'],
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>
</div>
