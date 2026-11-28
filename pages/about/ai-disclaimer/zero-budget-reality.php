<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/about/ai-disclaimer/zero-budget-reality.php
 * Role: Part 3 of 4 — The Zero-Budget Solo Creator (`/about/ai-disclaimer/zero-budget-reality`)
 * Route Manifest: `/data/routes/about.json` -> `"/about/ai-disclaimer/zero-budget-reality"`
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Explains the real-world economics of a working-class solo creator and why
 * the "just hire writers, illustrators, session musicians, and developers!"
 * demand rests on a false premise:
 *   1. A $0 budget hires zero contractors either way—the true alternative to
 *      modern tools wasn't paid freelance gigs, it was silence.
 *   2. Zero real-artist prompt triggers + 100% free open-culture distribution
 *      (CC BY-SA 4.0 & MIT License) with no paywalls or ads.
 *   3. Includes a one-click copyable Standard Reply specifically addressing
 *      "you're stealing jobs / hire artists" comments.
 *
 * INPUTS:
 * - `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Semantic Light/Dark accessible article view + copyable standard reply.
 * ============================================================================
 */

$zeroBudgetReply = implode("\n\n", [
    "Thanks for chiming in. To save us both time, here is the honest math behind my work.",
    "I am one working-class solo creator with a \$0 studio budget—not a media conglomerate laying off staff to pad quarterly margins. Telling me to \"hire a writer, an illustrator, session musicians, and a dev team\" assumes there was a pile of money sitting on my desk that I chose not to spend. A \$0 budget hires zero people either way.",
    "Without modern AI tools alongside my own writing and software engineering, nobody was getting a freelance check from me—these books, albums, and desktop apps simply never would have existed outside my head. Instead, they do exist, I never prompt real artist or band names, and I publish my stories and music completely free without paywalls or ads under Creative Commons (CC BY-SA 4.0) and my code under the MIT License.",
    "Creative worlds shouldn't be gated behind personal wealth, a record label, or a corporate budget. If AI-assisted projects aren't your thing, pass mine by—no hard feelings, and I wish you well.",
    "https://raggiesoft.com/about/ai-disclaimer/zero-budget-reality"
]);
?>
<div class="container py-4 ai-suite-shell">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <?php /* 1. Header */ ?>
            <div class="text-center mb-4">
                <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                    AI &amp; The Creative Process &bull; Part 3 of 4
                </p>
                <h1 class="fw-bold display-5 mb-3 text-body-emphasis">The Zero-Budget Solo Creator</h1>
                <p class="lead text-body-secondary mx-auto" style="max-width: 760px;">
                    Why &ldquo;just hire a band, illustrators, editors, and developers&rdquo; mistakes a working-class solo studio for a corporation&mdash;and why a \$0 budget displaces nobody.
                </p>
            </div>

            <?php /* 2. Shared 4-Tab AI Suite Navigation Bar */ ?>
            <?php include ROOT_PATH . '/includes/components/navigation/ai-disclaimer-subnav.php'; ?>

            <?php /* 3. The False Counterfactual */ ?>
            <div class="row g-4 mb-5">
                <div class="col-md-6 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body p-4">
                            <div class="text-uppercase small fw-bold text-warning mb-2">
                                <i class="ph-duotone ph-calculator me-1" aria-hidden="true"></i>The &ldquo;Lost Hire&rdquo; Myth
                            </div>
                            <h2 class="h4 fw-bold text-body-emphasis mb-3">A \$0 Budget Hires Zero People Either Way</h2>
                            <p class="text-body-secondary mb-3">
                                In the early 2000s, major record labels famously claimed that every free song download equaled a lost \$18 CD sale&mdash;assuming the listener would have bought every single album at retail price otherwise.
                            </p>
                            <p class="text-body-secondary mb-0">
                                Telling an independent creator with no outside budget to <em>&ldquo;hire studio musicians, vocalists, audio engineers, cover artists, editors, and programmers&rdquo;</em> makes the exact same error. Commissioning dozens of albums, full-length novels, and multi-platform apps commercially would cost hundreds of thousands of dollars that simply do not exist here.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="card bg-base-200 border border-base-300 shadow-sm h-100 w-100">
                        <div class="card-body p-4">
                            <div class="text-uppercase small fw-bold text-success mb-2">
                                <i class="ph-duotone ph-books me-1" aria-hidden="true"></i>The Real Alternative
                            </div>
                            <h2 class="h4 fw-bold text-body-emphasis mb-3">Existence vs. Silence</h2>
                            <p class="text-body-secondary mb-3">
                                Without modern tools acting as a force multiplier alongside one person&rsquo;s writing, editing, and programming, the alternative was never <em>&ldquo;fifteen freelancers get paid.&rdquo;</em> The real alternative was that <strong>none of these stories, songs, or tools ever got to exist outside one person&rsquo;s head.</strong>
                            </p>
                            <p class="text-body-secondary mb-0">
                                Building an ambitious world shouldn&rsquo;t require independent wealth, a major-label advance, or venture funding. Lowering barriers so working-class and neurodivergent solo builders can bring whole worlds to life adds to culture rather than subtracting from anyone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* 4. Open Culture & Ethical Boundaries */ ?>
            <div class="card bg-base-200 border border-base-300 shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h4 fw-bold text-body-emphasis mb-3">
                        <i class="ph-duotone ph-scales text-primary me-2" aria-hidden="true"></i>Shared Freely Without Paywalls (CC BY-SA 4.0 &amp; MIT)
                    </h2>
                    <p class="text-body-secondary mb-3">
                        Critics often lump solo hobbyists and open-source creators together with corporations replacing paid departments or impersonating living artists. At RaggieSoft, two lines are absolute:
                    </p>
                    <ul class="text-body-secondary mb-0">
                        <li class="mb-2"><strong>Zero Impersonation:</strong> We never prompt real artist names, real band names, or copyrighted song titles, and every character and band across RaggieSoft is an original work of fiction.</li>
                        <li><strong>Zero Paywalls:</strong> Every novel on <a href="https://books.raggiesoft.com" class="ai-suite-inline-link">RaggieSoft Book Reader</a>, every interactive story on <a href="https://crossroads.raggiesoft.com" class="ai-suite-inline-link">Story Crossroads</a>, every album in <a href="https://music.raggiesoft.com" class="ai-suite-inline-link">The Listening Room</a>, and every desktop app on <a href="https://launcher.raggiesoft.com" class="ai-suite-inline-link">RaggieSoft Launcher</a> is free to read, stream, and enjoy under <a href="https://corporate.raggiesoft.com/licensing" class="ai-suite-inline-link">Creative Commons (CC BY-SA 4.0) and MIT open licenses</a>.</li>
                    </ul>
                </div>
            </div>

            <?php /* 5. Copyable Standard Reply */ ?>
            <section id="standard-reply" aria-labelledby="budget-reply-heading" class="mb-4">
                <div class="card bg-base-200 border border-primary shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <p class="small text-uppercase fw-bold text-primary mb-1" style="letter-spacing: 0.08em;">
                            Standing Studio Reply &bull; Copy &amp; Share
                        </p>
                        <h2 id="budget-reply-heading" class="h4 fw-bold text-body-emphasis mb-3">
                            Standard Reply to &ldquo;Hire Real Artists / Musicians / Writers&rdquo; Comments
                        </h2>
                        <blockquote id="reply-zero-budget" class="ai-reply-quote p-3 p-md-4 rounded-3 mb-3"><?php echo htmlspecialchars($zeroBudgetReply, ENT_QUOTES, 'UTF-8'); ?></blockquote>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <button type="button" class="btn btn-primary btn-sm rounded-full fw-bold px-3" data-copy-target="reply-zero-budget" data-copy-status="status-zero-budget">
                                <i class="ph-duotone ph-copy me-1" aria-hidden="true"></i>Copy Standard Reply
                            </button>
                            <span id="status-zero-budget" class="small ai-copy-status" role="status" aria-live="polite"></span>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $nav = [
                'prev'     => ['url' => '/about/ai-disclaimer/craft-vs-slop', 'label' => 'Craft vs. “AI Slop”'],
                'overview' => ['url' => '/about/ai-disclaimer', 'label' => 'AI Process Hub'],
                'next'     => ['url' => '/about/ai-disclaimer/history-of-tools', 'label' => '2,400 Years of Tools'],
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>

        </div>
    </div>
</div>
