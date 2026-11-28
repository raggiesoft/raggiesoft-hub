<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/about/ai-disclaimer/craft-vs-slop.php
 * Role: Part 2 of 4 — Human Craft vs. "AI Slop" (`/about/ai-disclaimer/craft-vs-slop`)
 * Route Manifest: `/data/routes/about.json` -> `"/about/ai-disclaimer/craft-vs-slop"`
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Addresses the "AI slop / go learn a real skill" accusation head-on in calm,
 * everyday consumer language:
 *   1. Separates actual low-effort spam ("slop") from human-directed craft,
 *      continuity, ear-verified lyrics, and accessible software engineering.
 *   2. Highlights Michael P. Ragsdale's pre-AI roots (building websites since
 *      1997, desktop utilities since 1998, and years of university source-code
 *      accessibility work before modern AI existed).
 *   3. Provides both a Full Standard Reply and a Compact Social Reply with
 *      one-click clipboard copy buttons (`[data-copy-target]`).
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic Light/Dark accessible article view + copyable standard replies.
 * ============================================================================
 */

$fullSlopReply = <<<'REPLY'
Thanks for sharing your perspective. To save us both a circular debate, here is where I stand.

I disclose my tools openly right on my front page and at https://raggiesoft.com/about/ai-disclaimer because I have nothing to hide. I am one working-class creator with zero studio budget—not a corporation laying off staff. Without modern AI tools alongside my own writing and code, I wasn't going to hire a band, illustrators, editors, and an engineering team, because I don't have that money. The alternative wasn't "freelancers get paid"; the alternative was that these worlds, songs, and tools stayed locked in my head. Instead, I build them and share my stories and music openly without a paywall under Creative Commons (CC BY-SA 4.0) and my code under the MIT License.

I have been building websites since 1997, writing desktop software since 1998, and doing university web accessibility work years before modern generative AI existed. "Slop" isn't defined by which tool someone uses—it's defined by whether a human actually cares, directs, edits, and verifies the work. People made the exact same "pushing a button isn't real craft" argument against cameras in the 1850s, synthesizers and drum machines in the 1980s, and digital art and home recording software in the 1990s.

You never have to enjoy AI-assisted work, and if it's a dealbreaker for you, my projects simply aren't for you—and that's completely fine. Every novel, album, and desktop app I build is free to inspect firsthand at https://raggiesoft.com. Judge the actual work, or pass it by; either way, no hard feelings, and I wish you well.

https://raggiesoft.com/about/ai-disclaimer/craft-vs-slop
REPLY;

$shortSlopReply = <<<'REPLY'
To save us both time: I disclose my AI tools upfront (https://raggiesoft.com/about/ai-disclaimer), and I'm one solo creator with a $0 budget—not a studio cutting jobs. I could never afford to hire a band, illustrators, editors, and a dev team; without modern tools alongside my own pre-AI coding and writing background, these projects simply wouldn't exist, and I share them free without paywalls under CC BY-SA 4.0 and MIT.

"Slop" is about a lack of human care and verification, not the tool—the same "button-pushing" argument was thrown at cameras in the 1800s, synthesizers in the 1980s, and digital illustration in the 1990s. If AI-assisted work isn't for you, no hard feelings at all—skip my stuff and have a good one.
REPLY;
?>
<div class="container py-4 ai-suite-shell">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <?php /* 1. Header */ ?>
            <div class="text-center mb-4">
                <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                    AI &amp; The Creative Process &bull; Part 2 of 4
                </p>
                <h1 class="fw-bold display-5 mb-3 text-body-emphasis">Human Craft vs. &ldquo;AI Slop&rdquo;</h1>
                <p class="lead text-body-secondary mx-auto" style="max-width: 740px;">
                    &ldquo;Slop&rdquo; is real&mdash;and it has nothing to do with which tool sits on a creator&rsquo;s desk, and everything to do with whether a human actually cares, directs, edits, and verifies the work.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. Pillar Breakdown */ ?>
            <div class="row g-4 mb-5">
                <div class="col-md-6 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body p-4">
                            <div class="text-uppercase small fw-bold text-error mb-2">
                                <i class="ph-duotone ph-warning-octagon me-1" aria-hidden="true"></i>What &ldquo;Slop&rdquo; Actually Means
                            </div>
                            <h2 class="h4 fw-bold text-body-emphasis mb-3">Absence of Care, Not Choice of Tool</h2>
                            <p class="text-body-secondary mb-3">
                                Everyone has seen genuine slop online: unread 40-page spam booklets uploaded by the dozen to chase quick royalties, unedited hallucinations, and broken apps nobody bothered to test. That kind of shovelware existed decades before AI&mdash;from 1990s bargain-bin CD-ROM flips to keyword-stuffed content mills.
                            </p>
                            <p class="text-body-secondary mb-0">
                                Calling <em>every</em> project that uses modern AI assistance &ldquo;slop&rdquo; confuses the paintbrush with the painter. A tool can generate raw material, or accelerate tedious scaffolding&mdash;only a human can supply lived meaning, continuity, restraint, and quality standards.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body p-4">
                            <div class="text-uppercase small fw-bold text-success mb-2">
                                <i class="ph-duotone ph-code me-1" aria-hidden="true"></i>Pre-AI Foundations (1997&ndash;Present)
                            </div>
                            <h2 class="h4 fw-bold text-body-emphasis mb-3">&ldquo;Go Learn a Real Skill First&rdquo;</h2>
                            <p class="text-body-secondary mb-3">
                                One of the loudest assumptions online is that anyone using AI coding or writing tools must not know how to build anything on their own. At RaggieSoft, the timeline runs the other way around: websites since <strong>1997</strong>, classic desktop utilities like <a href="https://storetrainer.raggiesoft.com" class="ai-suite-inline-link">StoreTrainer</a> since <strong>1998</strong>, narrative fiction since <strong>2007</strong>, and years of university web accessibility work before modern AI assistants existed.
                            </p>
                            <p class="text-body-secondary mb-0">
                                Knowing how software, accessible interfaces, and story structure work under the hood is <em>why</em> AI tools work well here: you can spot when a draft rings hollow, catch subtle bugs, and hold every page to a strict human bar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* 4. What Humans Care About That Machines Never Will */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h4 fw-bold text-body-emphasis mb-3">
                        <i class="ph-duotone ph-heart text-primary me-2" aria-hidden="true"></i>What a Model Never Wakes Up Caring About
                    </h2>
                    <p class="text-body-secondary mb-3">
                        A machine never grew up watching weeknight science-fiction television with family and looking up at the night sky&mdash;the memory preserved on our <a href="/in-memoriam" class="ai-suite-inline-link">In Memoriam</a> page that sparked <a href="https://stardust.raggiesoft.com" class="ai-suite-inline-link">The Stardust Engine</a>. A machine doesn&rsquo;t care whether sing-along lyrics in <a href="https://music.raggiesoft.com" class="ai-suite-inline-link">The Listening Room</a> match every vocal breath by ear, whether keyboard and screen-reader users can navigate every button cleanly, or whether disabled and autistic characters in <a href="https://books.raggiesoft.com" class="ai-suite-inline-link">Ocean View Archives</a> are written with everyday dignity instead of clichés.
                    </p>
                    <p class="text-body-secondary mb-0">
                        Every rule, boundary, edit, and late-night revision across RaggieSoft exists because a human cared enough to put it there&mdash;and cared enough to publish the finished work openly for anyone to inspect firsthand.
                    </p>
                </div>
            </div>

            <?php /* 5. Copyable Standard Replies (Full + Compact) */ ?>
            <section id="standard-reply" aria-labelledby="slop-reply-heading" class="mb-4">
                <div class="card bg-base-200 border border-primary shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            Standing Studio Reply &bull; Copy &amp; Share
                        </p>
                        <h2 id="slop-reply-heading" class="h4 fw-bold text-body-emphasis mb-3">
                            Standard Reply to &ldquo;AI Slop / Learn a Skill&rdquo; Comments
                        </h2>

                        <h3 class="h6 fw-bold text-uppercase text-body-secondary mb-2">Full Reply</h3>
                        <blockquote id="reply-slop-full" class="ai-reply-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($fullSlopReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                            <button type="button" class="btn btn-primary btn-sm rounded-full fw-bold px-3" data-copy-target="reply-slop-full" data-copy-status="status-slop-full">
                                <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Full Reply
                            </button>
                            <span id="status-slop-full" class="small ai-copy-status" role="status" aria-live="polite"></span>
                        </div>

                        <h3 class="h6 fw-bold text-uppercase text-body-secondary mb-2">Compact Social-Thread Reply</h3>
                        <blockquote id="reply-slop-short" class="ai-reply-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($shortSlopReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <button type="button" class="btn btn-neutral btn-outline btn-sm rounded-full fw-bold px-3" data-copy-target="reply-slop-short" data-copy-status="status-slop-short">
                                <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Compact Reply
                            </button>
                            <span id="status-slop-short" class="small ai-copy-status" role="status" aria-live="polite"></span>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $nav = [
                'prev'     => ['url' => '/about/ai-disclaimer', 'label' => 'AI Process Overview'],
                'overview' => ['url' => '/about/ai-disclaimer', 'label' => 'AI Process Hub'],
                'next'     => ['url' => '/about/ai-disclaimer/zero-budget-reality', 'label' => 'Zero-Budget Reality'],
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>
</div>
