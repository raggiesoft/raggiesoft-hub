<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-autopsy.php
// EVIDENCE ITEM #02: The Counter-Attack
// Context: Holly commandeers the presentation hardware.
// Motivation: The "Tyler Email" Incident, The Merch Burn, & The Credentials.
// UPDATED: WCAG Contrast Fixes & DRY Code Cleanup

$pageTitle = "The Autopsy: Holly Takes Control - Evidence Item #02";
?>

<style>
    /* Dark Mode Overrides for High Contrast Elements */
    [data-bs-theme="dark"] .narrative-card {
        background-color: #1c1c1c;
        border: 1px solid #333;
    }
    
    [data-bs-theme="dark"] .kill-shot-box {
        background-color: #2c2c2c !important;
        border-color: #555 !important;
        color: #e0e0e0 !important;
    }

    /* Dark Mode Override for Logos */
    [data-bs-theme="dark"] .theme-invert {
        /* 1. Invert colors: Turns black pixels to white */
        filter: invert(1) grayscale(100%) !important; 
        
        /* 2. Reset Blend Mode: 'Multiply' hides white, so we must switch to 'Normal' or 'Screen' */
        mix-blend-mode: normal !important; 
        
        /* 3. Optional: Bump opacity slightly for better contrast on dark backgrounds */
        opacity: 0.9 !important; 
    }

    /* CUSTOM EMAIL STYLE - Adaptive */
    .email-evidence {
        font-family: 'Courier New', monospace;
        background-color: var(--bs-body-tertiary);
        color: var(--bs-body-color);
        border: 1px solid var(--bs-border-color);
        padding: 20px;
        font-size: 0.9rem;
    }

    /* CUSTOM CREDENTIAL BOX - Adaptive */
    .credential-box {
        background-color: var(--bs-body-tertiary);
        color: var(--bs-body-color);
        border-left: 4px solid #0d6efd; /* Primary Blue */
    }

    /* THE TWIN WALL STYLE - Forced Dark for Atmosphere */
    .wall-card {
        border-left: 4px solid #d63384; /* Narrative Pink */
        background: linear-gradient(to right, #1a1a1a, #000000); /* Darker, high contrast gradient */
        color: #ffffff;
    }

    /* Force a component to stay dark regardless of the global theme */
    .forced-dark-card {
        background-color: #212529 !important; /* Hardcoded Hex for Dark Gray */
        color: #ffffff !important;
        border-color: #495057 !important;
    }

    /* Ensure muted text stays visible (light gray) instead of turning dark gray */
    .forced-dark-card .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important; 
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-warning">
                <i class="fa-duotone fa-laptop-code me-2"></i>The Turn
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                THE LIVE AUTOPSY
            </h1>
            <p class="lead text-body-secondary font-monospace">
                She didn't come to sell. She came to teach him a lesson about competence.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="card forced-dark-card border-secondary shadow-lg mb-4">
                <div class="card-body p-4 text-light font-monospace small">
                    <div class="row">
                        <div class="col-md-3 fw-bold text-uppercase text-white-50">Timestamp:</div>
                        <div class="col-md-9">10:21 AM (2 Minutes Post-Meltdown)</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 fw-bold text-uppercase text-white-50">Context:</div>
                        <div class="col-md-9">Scheduled during family vacation (Santa Monica). Meeting intended as final rejection.</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 fw-bold text-uppercase text-white-50">Weapon:</div>
                        <div class="col-md-9">SEC Public Filings (Form 10-Q) & "The Tyler Email"</div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-lg bg-body-tertiary narrative-card mb-5">
                <div class="card-body p-5 text-body-secondary">
                    
                    <h5 class="text-danger fw-bold text-uppercase mb-4 letter-spacing-2">The Narrative Log</h5>

                    <p>
                        The room was vibrating with tension. Cassidy was on the floor, shielded by Ryan's wheelchair. Evan and Tyler stood like bouncers, blocking the executives from the family.
                    </p>
                    <p>
                        Jameson Frost, however, was pacing. He looked at the huddled family with undisguised disgust.
                    </p>
                    <p>
                        "This... this is unbelievable," Jameson sputtered, looking at Holly. "We are talking about a nine-figure deal, and she’s having a tantrum over a remix? This is exactly why you need professional management. You are emotionally unstable."
                    </p>
                    <p>
                        Holly O'Connell hadn't moved.
                    </p>
                    <p>
                        She sat at the head of the mahogany table, her pen resting on her notebook. She thought about why she was here. She wasn't here for the money. She was on vacation. She was supposed to be at the Santa Monica Pier.
                    </p>
                    <p class="text-body-emphasis fw-bold">
                        She had taken this meeting for one reason: Disrespect.
                    </p>
                    <p>
                        "Jameson," Holly said. The voice cut through the chaos like a razor blade.
                    </p>
                    <p>
                        Jameson turned to her. "What?"
                    </p>
                    <p>
                        "Sit down," Holly commanded.
                    </p>
                    <p>
                        "Excuse me? I am the Vice President of—"
                    </p>
                    <p class="text-body-emphasis fw-bold">
                        "I said sit down."
                    </p>
                    <p>
                        It wasn't a request. It was the tone of a CEO addressing a subordinate. Frost, bewildered by the sudden shift in gravity, sank into his chair.
                    </p>
                    <p>
                        "Do you know why we're here, Jameson?" Holly asked, opening her laptop.
                    </p>

                    <div class="card bg-body-tertiary border-danger mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-3 mb-md-0 border-end border-secondary border-opacity-25">
                                    <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
                                        class="img-fluid opacity-75 theme-invert" 
                                            alt="Engine Room Records Text inside a Stylized Gear"
                                            style="max-height: 100px; filter: grayscale(100%); mix-blend-mode: multiply;">
                                    <div class="small font-monospace text-danger mt-2">EXHIBIT A: Slide 14 Detail</div>
                                </div>
                                <div class="col-md-9">
                                    <p class="mb-2 fw-bold text-body-emphasis">
                                        "That logo," Holly said, tapping the projection screen. "The Gear. The Spark. Do you know who drew that?"
                                    </p>
                                    <p class="mb-2 text-body-secondary fst-italic border-start border-2 ps-3">
                                        Frost blinked, looking confused. "Marketing pulled it from your website. It's standard practice."
                                    </p>
                                    <div class="alert alert-danger bg-danger bg-opacity-10 border-danger border-opacity-25 text-danger mb-0">
                                        <p class="mb-0 fw-bold small">
                                            <i class="fa-solid fa-gavel me-2"></i>VIOLATION DETECTED
                                        </p>
                                        <p class="mb-2">
                                            "Cassidy drew it. Hand-inked in 1992, then she vectorized it herself on her machine using <strong>OpenVector</strong>. It is a registered trademark of The O'Connell Family Trust."
                                        </p>
                                        <p class="mb-0 border-top border-danger border-opacity-25 pt-2">
                                            "You do not have a license to display it. Using her own art on a document proposing the mutilation of her autobiography? That is <strong>Willful Infringement</strong>. Statutory damages start at $150,000 per instance."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="credential-box p-3 my-4 shadow-sm text-body-secondary bg-body-tertiary border-start border-4 border-primary">
                        <p class="mb-0 fst-italic">
                            Holly didn't ask for a cable. She opened her network settings and selected <strong>"Join Other Network..."</strong>
                            <br><br>
                            The IT Director, watching from the corner, frowned. There were no other networks. But Holly's fingers flew across the keys, manually typing a hidden SSID that didn't broadcast its existence: <code>PRP_MGT_VLAN_01</code>.
                            <br><br>
                            She hit <code>ENTER</code>. Connected.
                            <br><br>
                            She hit <code>CTRL+K</code> to open the <strong>Quantum Cast</strong> menu. The massive 85-inch monitor on the wall—hardware leased from Pacific Rim and sitting on that same hidden management VLAN—recognized the command immediately. Following its hard-coded protocols, the device prioritized the Landlord signal over the Tenant signal, dumping Frost's HDMI connection and instantly mirroring her screen.
                        </p>
                    </div>

                    <p>
                        The giant screen flickered black. Jameson's "Synergy" slide vanished, replaced instantly by Holly's desktop.
                    </p>
                    <p>
                        "What the hell?" Frost stood up, slapping the table. "Hopkins, we lost video. Wiggle the HDMI cable. It’s loose again."
                    </p>
                    
                    <p>
                        The IT Director, Hopkins, was in the corner, frantically tapping at his tablet. He didn't move toward the cable. His face had gone pale.
                    </p>

                    <p>
                        "It's... it's not the cable, sir," Hopkins stammered. "The display just forced a source switch. It went to Wireless Direct."
                    </p>

                    <p>
                        "So switch it back!" Jameson barked. "I have slides!"
                    </p>

                    <p>
                        "I can't!" Hopkins voice pitched up an octave. "I'm locked out. The panel says <code class="text-uppercase">Admin Override Active</code>. Sir, I don't understand... this command is coming from the Infrastructure Layer. It's pre-empting our entire subnet."
                    </p>

                    <p>
                        Jameson spun around to stare at Holly. "You're hacking us! Hopkins, cut the Guest Wifi!"
                    </p>

                    <p>
                        "She's not <em>on</em> the Wifi!" Hopkins yelled back, forgetting his rank. "I'm looking at the live logs—she doesn't exist! She's bypassing the firewall entirely. It's like the monitor is listening to a ghost!"
                    </p>

                    <p>
                        Holly didn't answer. She didn't even look up from her keyboard. She simply let the panic ripple through the room, a terrifying variable that neither the executive nor his tech support could solve.
                    </p>

                    <p>
                        "It's not your offer," she said calmly, watching the wireless handshake complete. "I deleted your offer."
                    </p>
                    <p>
                        A new window appeared on the giant screen. It wasn't a spreadsheet. It was an email client.
                    </p>
                    <p>
                        "We're here because last Tuesday, you bypassed my office. You sent an email directly to <code>tyler.wright@</code>."
                    </p>
                    <p>
                        Frost paled. "I... I was simply reaching out to key stakeholders."
                    </p>
                    <p>
                        "Tyler's email isn't public," Holly continued, her voice dangerously calm. "There is no 'admin@' catch-all. Evan has our <strong>Quantum Enterprise</strong> tenancy completely locked down. You can't search for us on <strong>Quantum Nexus</strong>. The server doesn't even confirm if a user exists."
                    </p>
                    <p>
                        She pointed at the screen, highlighting the email header.
                    </p>
                    <p>
                        "That means you looked at my email—<code>holly.oconnell@</code>—and you guessed the pattern. You sat there typing names from our Band Bio page—<code>tyler.wright@</code>—until one didn't bounce back."
                    </p>
                    <p>
                        She looked him dead in the eye.
                    </p>
                    <p>
                        "You assumed that because I'm a woman, I couldn't possibly be the decision maker. You assumed you had to hack your way through to 'the men' to get the real deal done."
                    </p>

                    <div class="email-evidence shadow-sm my-4 rounded position-relative">
                        <div class="border-bottom border-secondary pb-2 mb-3">
                            <strong>From:</strong> Frost, Jameson (VP Acquisitions)<br>
                            <strong>To:</strong> Wright, Tyler<br>
                            <strong>Subject:</strong> Let's talk business (Man to Man)
                        </div>
                        <p>Tyler,</p>
                        <p>I tried reaching out to your "Manager" (Holly?), but I haven't heard back. I assume she's overwhelmed with the day-to-day admin work. These deals can be complex.</p>
                        <p>Look, I tried to message your band on The Sprawl (@StardustEngine), but whoever runs that account just kept sending me pictures of space? Very confusing branding. You should really tell your social media girl to check her DMs.</p>
                        <p>Anyway, we're ready to make a serious offer. We're talking generational wealth here. I think it's time we get the key players in a room and hash this out—you, me, and Ryan. We can handle the numbers, <strong>let the girls handle the merch.</strong></p>
                        <p>Let me know when you're in LA.</p>
                        <p>- J. Frost</p>
                        
                        <div class="position-absolute top-0 end-0 p-3 opacity-25">
                            <i class="fa-solid fa-envelope-open-text fa-4x text-danger"></i>
                        </div>
                    </div>

                    <p>
                        The silence in the room was absolute. Even the junior analysts looked horrified.
                    </p>
                    <p>
                        "That account on The Sprawl?" Holly asked, her voice dry. "It belongs to an astronomy student in New Zealand. He posts photos of nebulas. I didn't sue him for trademark infringement because I happen to like the pictures. The fact that you couldn't tell the difference between a global media brand and a hobbyist telescope feed is... concerning."
                    </p>
                    <p>
                        She stood up and walked to the head of the table, pointing to the line in the email about "the girls."
                    </p>
                    <p>
                        "And this," Holly said, tapping the screen. "Let the girls handle the merch."
                    </p>
                    <p>
                        She smiled. It wasn't a nice smile.
                    </p>
                    <p>
                        "You're right, Jameson. 'The girls' <em>do</em> handle the merch. Cassidy designs it. I fulfill it."
                    </p>
                    
                    <div class="alert alert-warning border-start border-4 border-warning bg-warning-subtle shadow-sm text-body-emphasis">
                        <i class="fa-solid fa-chart-line-up me-2 text-warning-emphasis"></i>
                        <strong>"And in Q3 of this year, our Merchandise Division generated more net profit than your entire Global Syndication Department did in all of 2017."</strong>
                    </div>

                    <p>
                        "I handle the merch because it makes money," she said, leaning in. "Unlike your company."
                    </p>

                    <p>
                        "You see, Jameson, you assumed I was 'overwhelmed' with admin work. You didn't bother to check who you were actually negotiating with, did you?"
                    </p>

                    <p>
                        She tapped a key. The email vanished. Her professional CV appeared on the screen. She looked around the table at the room full of <strong>Gilded League</strong> MBAs and realized something that made her blood run cold: <strong>She was the only qualified person in the room.</strong>
                    </p>

                    <div class="credential-box p-3 shadow-sm my-4">
                        <p class="mb-2 small text-uppercase fw-bold text-body-secondary">Holly O'Connell - Professional Credentials</p>
                        <ul class="list-unstyled font-monospace small fw-bold mb-2 ps-3 text-body-emphasis">
                            <li><i class="fa-solid fa-check text-success me-2"></i>J.D. & LL.M. (Taxation). Bar: VA, NY, CA, DE.</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i>CFA Charterholder (Chartered Financial Analyst).</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i>Certified Forensic Accountant (Cr.FA).</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i>Masters in Quantitative Finance.</li>
                        </ul>
                        <p class="mb-0 text-body-secondary">
                            She leaned forward, her voice dropping to a whisper. "But the one you should be most worried about right now is my **CIRA** certification."
                        </p>
                        <p class="mb-0 mt-1 text-danger small fst-italic">
                            "Certified Insolvency & Restructuring Advisor. It means I'm qualified to manage your bankruptcy. Which, by my math, starts in about 48 hours."
                        </p>
                    </div>
                    
                    <div class="alert alert-secondary border-0 small fst-italic mb-4 text-body-secondary">
                        <strong>Context:</strong> Jameson Frost holds an MBA from <strong>Sterling-Hale University</strong>. His juniors hold Bachelor's degrees. The corporate Controller (a CPA) was not invited to the meeting. Holly O'Connell was technically the only person in the room qualified to audit a public company.
                    </div>

                    <p>
                        She hit <code>ALT + TAB</code>. The screen shifted from her CV to the SEC database. <strong>OMNI-GLOBAL MEDIA CORP.</strong>
                    </p>
                    <p>
                        "So I decided to use those credentials to see who exactly was disrespecting me. I thought I'd find a shark. Instead... I found a corpse."
                    </p>

                    <hr class="my-4 border-secondary opacity-25">

                    <h5 class="fw-bold text-uppercase mb-3 text-danger"><i class="fa-solid fa-skull me-2"></i>The Autopsy</h5>
                    <p>
                        Holly scrolled to the Balance Sheet. She pointed the mouse cursor at the lines, narrating in plain English for the entire room to hear.
                    </p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-12">
                            <div class="p-3 bg-body-secondary border border-secondary kill-shot-box text-body-emphasis font-monospace">
                                <strong class="text-danger">1. THE CASH:</strong><br>
                                "You claim you have $150 million. The SEC says you have $22 million. Your payroll is $18 million. You are living paycheck to paycheck."
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="p-3 bg-body-secondary border border-secondary kill-shot-box text-body-emphasis font-monospace">
                                <strong class="text-danger">2. THE ASSETS:</strong><br>
                                "You list $900 million in 'Goodwill.' That's accounting code for 'Mistakes We Haven't Admitted Yet.' It's fake value."
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="p-3 bg-body-secondary border border-secondary kill-shot-box text-body-emphasis font-monospace">
                                <strong class="text-danger">3. THE CREDIT CARD:</strong><br>
                                "Page 42, Note 8. Your Revolving Credit Facility has a limit of $350 million. You have drawn $348.5 million. You have $1.5 million left. You can't even afford to buy us lunch."
                            </div>
                        </div>
                    </div>

                    <p>
                        Holly started to close her laptop, then stopped. She turned to look at the glass wall of the conference room, overlooking Century City.
                    </p>

                    <p>
                        "One last thing, Jameson. Nice office. <strong>Pacific Rim Properties</strong> manages this building, correct?"
                    </p>
                    <p>
                        Frost blinked, confused by the sudden change in topic. "Yes. They are the landlord. We have a standard lease."
                    </p>
                    <p>
                        "Do you know who owns Pacific Rim Properties?"
                    </p>
                    <p>
                        "Some holding company. What does that matter?"
                    </p>
                    <p>
                        Holly pulled a piece of paper from her folder and slid it across the mahogany table. It wasn't a legal brief. It was a Tenant Ledger.
                    </p>
                    <p>
                        "Pacific Rim is a wholly owned subsidiary of the <strong>O'Connell Family Trust</strong>. I am Pacific Rim."
                    </p>
                    <p>
                        "You asked earlier how I connected to your screen? I didn't hack it. I authenticated as the Owner."
                    </p>
                    <p>
                        She watched the realization dawn on him. It was slow, painful, and absolutely total.
                    </p>
                    <p>
                        "You never made the connection, did you?" she said, her voice dropping to a conversational tone. "You saw 'Holly O'Connell' on the band roster and thought 'manager.' You saw 'H. O'Connell' on your rent invoices and thought 'landlord.' It never occurred to you that we might be the same person because your worldview doesn't allow for a band manager to own a skyscraper."
                    </p>
                    <p>
                        She gestured around the room.
                    </p>
                    <p>
                        "I've never been to this building before today, Jameson. I manage Pacific Rim remotely from Virginia. I let Elena run the day-to-day. But make no mistake: I own the chair you're sitting in. And according to my records, your July and August rent checks bounced."
                    </p>

                    <p>
                        She leaned forward, her eyes narrowing.
                    </p>

                    <div class="alert alert-dark border-start border-4 border-danger bg-black text-white p-4 my-4 shadow-lg">
                        <i class="fa-solid fa-coins text-warning me-2"></i>
                        <strong class="text-uppercase text-danger me-2">The Demand</strong>
                        <p class="mb-0 mt-2 text-white-50 fst-italic">
                            "But that's not why I flew across the country. I flew here because last Thursday, my mail carrier asked me for two quarters. You sent a fraudulent prospectus to my home using a bulk permit number—Permit 4021—on a single piece of mail. It arrived with 'Postage Due'."
                        </p>
                        <p class="mb-0 mt-3 text-white-50">
                            "I had to pay fifty cents to receive your death threat, Jameson. I call it petty. The USPIS calls that mail fraud."
                        </p>
                        <p class="mb-0 mt-3 text-white fw-bold fs-5">
                            "I want my fifty cents back."
                        </p>
                    </div>

                    <div class="col-md-12 mb-4">
                         <div class="p-3 bg-black border border-danger text-white font-monospace">
                            <strong class="text-danger">4. THE LANDLORD (The Kill Shot):</strong><br>
                            "You didn't try to acquire us for our talent. You tried to acquire us to raid our treasury so you could pay the rent you owe <strong>me</strong>. Consider this your Notice to Quit."
                        </div>
                    </div>

                    <p>
                        Silence hung in the air for exactly three seconds. Then, Jameson Frost started to laugh.
                    </p>
                    <p>
                        It was a dry, condescending chuckle. He looked at his Junior Counsel, a young man in a tailored suit named Bradford.
                    </p>
                    <p>
                        "She's bluffing," Frost said, shaking his head. "Bradford, tell her."
                    </p>
                    <p>
                        Bradford cleared his throat, looking nervous but eager to please. "Actually, Ms. O'Connell... under California Code of Civil Procedure Section 1161, a verbal Notice to Quit is not legally binding. It must be served in writing, stating the precise amount due, and providing a three-day cure period."
                    </p>
                    <p>
                        Frost smirked, leaning back in his chair. "See? You can't just declare eviction by saying the word. You're not a magician. You need paperwork, honey."
                    </p>
                    <p>
                        Holly looked at Bradford. "You're right. Section 1161(2). In writing. Three days to pay or quit."
                    </p>
                    <p>
                        She reached down to her <strong>pristine leather briefcase</strong>. 
                    </p>
                    <p>
                        "Funny you should mention that."
                    </p>
                    <p>
                        <em>Click. Click.</em>
                    </p>
                    <p>
                        She opened the case. From the front pocket, she pulled a single, crisp sheet of heavy cream-colored linen stock paper. The logo at the top—a stylized column—was embossed in silver foil.
                    </p>
                    <p>
                        She didn't hand it to Bradford. She slid it across the mahogany table directly to Jameson Frost.
                    </p>
                    <p>
                        It was pure reflex. Jameson reached out and snatched the document before it slid off the edge. He held it up, blinking at the embossed silver logo, his brain struggling to process the heavy, expensive texture of the linen stock. <em>What is this?</em>
                    </p>
                    
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            
                            <?php
                            // CONFIGURATION FOR LETTERHEAD
                            $brand = 'pacific-rim'; // Triggers the Landlord styling
                            $letter_date = "September 14, 2018";
                            
                            // UPDATED ADDRESS: Suite 4000 (Penthouse)
                            $letter_to = "<strong>Omni-Global Media Corp.</strong><br>Attn: Registered Agent<br>2000 Avenue of the Stars, Suite 4000<br>Los Angeles, CA 90067";
                            
                            $letter_stamp = "SERVED"; 
                            $stamp_color = "danger";

                            // LETTER BODY CONTENT
                            $letter_body = '
                                <div class="text-center border-bottom border-dark pb-3 mb-4">
                                    <h5 class="fw-bold text-uppercase text-decoration-underline mb-1">3-DAY NOTICE TO PAY RENT OR QUIT</h5>
                                    <p class="small mb-0 fst-italic">(California Code of Civil Procedure § 1161)</p>
                                </div>

                                <p><strong>TO:</strong> Omni-Global Media Corp., AND ALL OTHERS IN POSSESSION<br>
                                <strong>PREMISES:</strong> 2000 Avenue of the Stars, <strong>Suite 4000 (Penthouse)</strong>, including the entire 38th, 39th, and 40th Floors.</p>

                                <p><strong>PLEASE TAKE NOTICE</strong> that you are rightfully indebted to the Landlord, <strong>Pacific Rim Properties, LLC</strong>, in the sum of <strong>$450,000.00</strong> for rent and possession of the premises described above, as follows:</p>

                                <table class="table table-bordered border-dark mb-4 small" style="font-family: Courier New, monospace;">
                                    <thead class="bg-light">
                                        <tr><th>Period</th><th class="text-end">Amount Due</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>July 1 - July 31, 2018</td><td class="text-end">$150,000.00</td></tr>
                                        <tr><td>August 1 - August 31, 2018</td><td class="text-end">$150,000.00</td></tr>
                                        <tr><td>September 1 - September 30, 2018</td><td class="text-end">$150,000.00</td></tr>
                                        <tr class="fw-bold bg-light"><td class="text-end">TOTAL:</td><td class="text-end">$450,000.00</td></tr>
                                    </tbody>
                                </table>

                                <p><strong>WITHIN THREE (3) DAYS</strong> after service of this notice upon you, you are required to either:</p>
                                <ol>
                                    <li>Pay the total amount of <strong>$450,000.00</strong> to the Landlord; OR</li>
                                    <li>Quit and surrender possession of the premises.</li>
                                </ol>

                                <p class="fw-bold text-danger">IF YOU FAIL TO PAY OR QUIT within the three (3) day period, legal proceedings will be instituted against you to recover possession, treble damages, and legal fees.</p>

                                <div class="border border-secondary p-3 bg-light small mb-3">
                                    <strong>Make Payment To:</strong><br>
                                    Pacific Rim Properties, LLC<br>
                                    c/o Engine Room Records (Managing Agent)<br>
                                    Attn: H. O\'Connell, Esq.
                                </div>
                            ';

                            include ROOT_PATH . '/includes/components/corporate/letterhead.php';
                            ?>

                        </div>
                    </div>

                    <p class="mt-4">
                        "I stopped by the Pacific Rim office on Monday when we landed," Holly said softly. "Printed on 32lb linen stock. Served to a corporate officer. Witnesses present."
                    </p>
                    <p>
                        Frost looked down at the paper. The laughter died in his throat.
                    </p>
                    <p>
                        "You have seventy-two hours, Jameson," she said, finally snapping her briefcase shut. "Clock started when you touched that paper."
                    </p>
                    <p>
                        Holly reached over and snapped her laptop shut, severing the connection to the giant screen. The room plunged back into silence.
                    </p>
                    <p>
                        "You aren't a savior, Jameson. You're a squatter. You're trying to use our credit score to refinance your bad decisions. And you were arrogant enough to insult the most qualified person in this room."
                    </p>
                    <p>
                        She picked up her notebook, standing up to her full height. She didn't look back at the pale, sweating Vice President who was still staring at his own eviction notice.
                    </p>
                    <p>
                        "Ryan, get Cassidy. We're done here."
                    </p>
                    <p>
                        She walked to the door, pausing only once to look back.
                    </p>
                    <p>
                        "Update your resume, Jameson. And next time... check the org chart."
                    </p>

                </div>
            </div>

            <div class="card wall-card shadow-lg mb-5">
                <div class="card-body p-5">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa-duotone fa-shield-halved text-danger fs-2 me-3"></i>
                        <h5 class="text-white text-uppercase letter-spacing-2 mb-0">Simultaneous Event: The World Behind the Wall</h5>
                    </div>
                    
                    <p class="text-light fs-5 mb-4">
                        While Holly waged war with words and documents, the other half of the room existed in a different dimension.
                    </p>
                    
                    <p class="text-light">
                        <strong>Evan and Tyler Wright</strong> stood shoulder-to-shoulder, their broad backs forming a physical wall between the conference table and the floor. They didn't look at Frost. They didn't look at the screen. They watched the door, ensuring no one entered or left without permission.
                    </p>
                    
                    <p class="text-light">
                        Behind that wall, <strong>Ryan O'Connell</strong> had locked the brakes of his wheelchair. He leaned precariously over the side, wrapping his arms around his sister on the floor in a desperate "deep pressure" hold.
                    </p>
                    
                    <div class="row align-items-center bg-black rounded p-3 border border-secondary mt-4">
                        <div class="col-md-2 text-center">
                            <i class="fa-duotone fa-ear-muffs text-secondary fs-1 opacity-50"></i>
                        </div>
                        <div class="col-md-10">
                            <p class="small text-light font-monospace mb-0">
                                <strong>Sensory Protocol:</strong> Ryan hummed a low, steady B-flat against her ear—the "Safe Harbor" note. He squeezed her as tightly as he could, trying to manually regulate her nervous system.
                                <br><br>
                                <span class="text-danger">STATUS: FAILED.</span> She was too far gone. The pressure wasn't grounding her; she was vibrating apart.
                            </p>
                        </div>
                    </div>

                    <p class="text-light mt-4 mb-0 fst-italic">
                        Holly fought the corporation so Ryan could fight the panic. Two wars. One family.
                    </p>
                </div>
            </div>

            <div class="alert alert-dark bg-dark border-success d-flex align-items-center mt-4 shadow-lg">
                <i class="fa-duotone fa-check-circle text-success fs-1 me-4"></i>
                <div>
                    <h5 class="alert-heading text-white fw-bold">The Aftermath</h5>
                    <p class="mb-0 text-white-50">
                        Holly left the SEC filing up on the giant screen. As the family exited, the junior analysts in the room—who had been cc'd on the sexist email thread—quietly took out their phones and started looking for new jobs.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-trigger', 'label' => 'The Trigger'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-extraction', 'label' => 'The Extraction']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>