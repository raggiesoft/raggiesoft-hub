<?php
// pages/engine-room/artists/stardust-engine/story/nine-figure-refusal/frost-interview.php
// EPILOGUE: The "Cultural Fit" Assessment
// Context: February 14, 2019. The "Eye of the Storm."
// Location: Floor 38 (The New Lobby Level).
// UPDATED: Final Polish (WCAG, Visitor Protocol, Wide-Angle Image).

$pageTitle = "The Interview - Epilogue";
?>

<style>
    /* Dark Mode Overrides to ensure text visibility */
    [data-bs-theme="dark"] .text-dark {
        color: #e0e0e0 !important;
    }
    
    [data-bs-theme="dark"] .border-dark {
        border-color: #6c757d !important;
    }

    /* Stamp Rotation for the Forms */
    .stamp-rotate {
        transform: rotate(-15deg);
        opacity: 0.9;
        mix-blend-mode: multiply;
    }
    [data-bs-theme="dark"] .stamp-rotate {
        mix-blend-mode: normal;
        color: #ff6b6b !important; /* Lighter red for dark mode contrast */
        border-color: #ff6b6b !important;
    }
    
    /* FORM STYLING - SKEUOMORPHIC (Paper-like) */
    .federal-form {
        background-color: #f8f9fa;
        color: #000;
        transition: transform 0.3s ease;
        border: 1px solid #dee2e6;
    }
    .federal-form .card-header {
        background-color: #ffffff;
        border-bottom: 2px solid #000;
        color: #000;
    }
    
    /* Dark Mode Specifics for Forms */
    [data-bs-theme="dark"] .federal-form {
        background-color: #e9ecef; /* Dimmed White */
        color: #000000; /* Strict Black text on paper */
        border-color: #495057;
    }
    [data-bs-theme="dark"] .federal-form .card-header {
        background-color: #dee2e6;
        color: #000000;
        border-bottom-color: #000000;
    }
    [data-bs-theme="dark"] .federal-form .text-dark,
    [data-bs-theme="dark"] .federal-form h4,
    [data-bs-theme="dark"] .federal-form h5,
    [data-bs-theme="dark"] .federal-form span {
        color: #000000 !important;
    }

    .federal-form:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.175) !important;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-info text-dark rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-glow border border-info">
                <i class="fa-duotone fa-user-clock me-2"></i>Epilogue: February 14, 2019
            </span>
            <h1 class="display-4 fw-bold text-body-emphasis mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                The Interview: The "Cultural Fit" Assessment
            </h1>
            <p class="lead text-body-secondary font-monospace">
                "We don't hire people with your... future availability issues."
            </p>
        </div>
    </div>

    <div class="position-relative mt-2 mb-5">
        <div class="text-center mb-5">
            <h2 class="h4 text-body-emphasis text-uppercase fw-bold border-bottom border-secondary d-inline-block pb-2">
                <i class="fa-solid fa-gavel me-2 text-warning"></i>The Triple Tap
            </h2>
            <p class="text-body-secondary small mt-2 mx-auto" style="max-width: 600px;">
                Holly knew a lawsuit would take years. So she called the agencies that don't need a warrant to freeze your assets. She submitted three forms at 5:01 PM.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Times New Roman', serif;">
                    <div class="card-header py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-building-columns fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">Securities & Exchange Commission</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM TCR</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">B. Subject of Complaint</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Entity:</span> Omni-Global Media Corp.
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Allegation:</span> <span class="text-danger">Material Misstatement of Financials (Ponzi Scheme)</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small text-dark" style="min-height: 80px;">
                            <p class="mb-0"><strong>Details:</strong> Registrant is using "OGM Capital Partners IV" (SPV) to conceal $400M in toxic debt from shareholders. Insolvency imminent.</p>
                        </div>
                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-danger text-danger p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace;">
                                 RECEIVED<br>SEC ENFORCEMENT
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Helvetica', sans-serif;">
                    <div class="card-header py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-scale-balanced fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">Dept of the Treasury - IRS</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM 3949-A</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">1. Taxpayer Information</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Name:</span> Omni-Global Media Corp.
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Violation:</span> <span class="text-danger">False Documents / Failure to Pay Tax</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small text-dark" style="min-height: 80px;">
                            <p class="mb-0"><strong>Comments:</strong> Taxpayer has claimed depreciation on assets (Real Estate) they do not legally own. See Lease Agreement "Exhibit B."</p>
                        </div>
                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-primary text-primary p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace;">
                                 IRS-CI<br>REFERRAL ACTIVE
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="federal-form shadow-lg mx-auto h-100 position-relative" style="font-family: 'Courier New', monospace;">
                    <div class="card-header py-3">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <i class="fa-solid fa-envelopes-bulk fa-2x text-secondary opacity-50"></i>
                            </div>
                            <div class="col-10 text-end">
                                <h5 class="fw-bold text-uppercase mb-0" style="font-size: 0.8rem;">U.S. Postal Inspection Service</h5>
                                <h4 class="fw-bold mt-0 mb-0">FORM 8165</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h6 class="bg-dark text-white px-2 py-1 small fw-bold text-uppercase">Nature of Complaint</h6>
                            <div class="border-bottom border-secondary pb-1 small">
                                <span class="fw-bold">Type:</span> 18 U.S.C. § 1341 (Mail Fraud)
                            </div>
                            <div class="border-bottom border-secondary pb-1 mt-2 small">
                                <span class="fw-bold">Method:</span> <span class="text-danger">USPS First Class Mail</span>
                            </div>
                        </div>
                        <div class="p-2 border border-secondary bg-white small text-dark" style="min-height: 80px;">
                            <p class="mb-0"><strong>Narrative:</strong> Subject mailed a Prospectus for "OGM Capital" to my Virginia residence. The document contains proven material lies. Using the US Mail to execute a swindle is a federal felony.</p>
                        </div>
                        <div class="position-absolute bottom-0 end-0 p-3" style="pointer-events: none;">
                             <div class="border border-4 border-dark text-dark p-1 fw-bold text-uppercase fs-6 text-center stamp-rotate" 
                                  style="font-family: 'Courier New', monospace; border-style: double !important;">
                                 USPIS<br>CASE OPENED
                             </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="card border-0 shadow-lg bg-body-tertiary">
                <div class="card-body p-5 font-serif text-body-secondary">
                    
                    <h5 class="text-uppercase text-body-secondary fw-bold mb-4 border-bottom pb-2">
                        Location: The Jessica Miller Center (Floor 38 - Intake Level)
                    </h5>

                    <div class="p-4 bg-warning-subtle text-warning-emphasis border-start border-4 border-warning mb-4 small">
                        <i class="fa-solid fa-hourglass-half me-2"></i>
                        <strong>Timeline Note:</strong> This interview takes place 5 months after the "Triple Tap" filings. The SEC has frozen Omni-Global's assets, but the Department of Justice has not yet unsealed the criminal indictments against individual executives. Jameson Frost believes he is still a free man. Jessica Miller knows better.
                    </div>

                    <p>
                        Jameson Frost walked into the main lobby of 2000 Avenue of the Stars. He adjusted his silk tie, confident. He still had the muscle memory of an owner. He marched toward the secure turnstiles, ready to breeze through to the executive elevators.
                    </p>
                    
                    <p>
                        He reached for his hip... and his hand brushed against empty air.
                    </p>
                    
                    <p>
                        He froze. The memory hit him like a physical blow. <em>Holly O'Connell standing in his office doorway. Her hand outstretched. The quiet, terrifying authority in her voice when she said, "The badge, Jameson. And the key to the executive washroom. Now."</em>
                    </p>

                    <p>
                        He shook off the memory. He was Jameson Frost. He didn't need a piece of plastic to enter a building he practically built.
                    </p>

                    <p>
                        He stepped toward the turnstile, looking for the guard. "Alvarez," he barked, giving a curt nod. "Open it up."
                    </p>

                    <p>
                        Alvarez didn't move. He stood behind the console, his arms crossed. He wasn't smiling.
                    </p>

                    <p>
                        "I can't do that, Mr. Frost," Alvarez said, his voice flat.
                    </p>

                    <p>
                        "Don't be ridiculous," Frost snapped. "I have a meeting with the Director. I'm running late."
                    </p>

                    <p>
                        "Non-tenants need to sign in at the Visitor Kiosk," Alvarez said, pointing to the iPad stand used by delivery drivers and catering staff. "Name, photo ID, and signature. Policy."
                    </p>

                    <p>
                        Frost felt the heat rising in his neck. "I am not a visitor, Alvarez. I am the—"
                    </p>

                    <p>
                        "You are a visitor, sir," Alvarez interrupted, his tone final. "And you'll need an escort."
                    </p>

                    <p>
                        Frost gritted his teeth. He walked to the iPad kiosk. He typed his name. He held up his driver's license for the camera. He waited for the printer to spit out a flimsy paper sticker that said <strong class="text-uppercase">VISITOR</strong>.
                    </p>

                    <p>
                        "Excellent," Alvarez said, peeling the sticker off and slapping it onto the lapel of Frost's $3,000 suit. "Now, follow me."
                    </p>

                    <p>
                        Frost seethed as he was marched to the elevator bank like a delinquent schoolboy.
                    </p>

                    <p>
                        "Press 40," Frost snapped as the doors opened.
                    </p>

                    <p>
                        "Can't do that, sir," Alvarez said. He pointed to the destination dispatch panel <em>outside</em> the car. "We're on Destination Dispatch now. The car knows where you're going. You don't get to choose."
                    </p>

                    <p>
                        Alvarez tapped his own master badge against the panel. The screen lit up: <strong class="text-primary">FLOOR 38.</strong>
                    </p>

                    <p>
                        "38?" Frost balked. "That's the lower level. The Executive Office is on 40."
                    </p>

                    <p>
                        "Not anymore," Alvarez said, stepping back as the doors slid shut, leaving Frost alone in the buttonless metal box. "Enjoy your ride."
                    </p>

                    <hr class="my-5 border-secondary opacity-25">

                    <p>
                        The doors opened on 38. Frost stepped out, expecting the high-gloss marble he had installed two years ago. Instead, his Italian loafers sank slightly into a matte, sound-dampening cork floor. The aggressive blue lighting was gone, replaced by a warm, golden glow.
                    </p>

                    <p>
                        "Mr. Frost?"
                    </p>

                    <p>
                        Frost turned. A young man was standing there, holding a tablet in a rugged case. He was wearing faded jeans and a black t-shirt featuring a neon blue rocket. He was heavy-set, his breathing audible, but he stood with the solidity of a bouncer.
                    </p>

                    <p>
                        "I'm here to see the Executive Director, son," Frost said, straightening his tie. "Is she upstairs?" He pointed a thumb toward the ceiling.
                    </p>

                    <p>
                        <strong>Justin Miller</strong> didn't smile back. He simply pointed to a glass-walled office right there in the lobby.
                    </p>

                    <p>
                        "She. Is. There."
                    </p>

                    <p>
                        Frost blinked. "Down here? In the... fishbowl?"
                    </p>

                    <p>
                        Justin tapped an icon on his screen. <strong class="text-primary">"Follow. Me."</strong>
                    </p>
                    
                    <p>
                        Frost followed him into the office. It was modest. Functional. But the view of the Hollywood Hills was just as majestic as he remembered.
                    </p>

                    <div class="card border-0 shadow-lg mb-5 bg-black overflow-hidden">
                        <img src="https://assets.raggiesoft.com/engine-room-records/images/omni-global/frost-interview.jpg" 
                             class="card-img-top" 
                             alt="Wide angle photograph of Jessica Miller in her wheelchair behind a desk eating a taco, alongside her twin brother Justin holding a tablet. Jameson Frost sits in a chair far across the room, looking terrified. The Hollywood Hills are visible through floor-to-ceiling windows."
                             style="object-fit: cover;">
                        <div class="card-footer bg-dark text-white-50 fst-italic small text-center">
                            The Cultural Fit Assessment. Floor 38 overlooking the Hollywood Hills. Note the distance between the applicant and the Executive Director.
                        </div>
                    </div>

                    <p>
                        Sitting behind the desk was a girl. A heavy-set girl with curly hair and thick glasses. She was wearing blue jeans and a black t-shirt with the logo <strong class="text-uppercase">The Stardust Engine</strong> emblazoned on the front. On her feet were comfortable, worn sneakers—not the pinched heels he used to mandate for female staff.
                    </p>

                    <p>
                        She was holding a half-eaten taco. She didn't put it down when he entered.
                    </p>

                    <p>
                        "Excuse me," Frost said, his tone dripping with impatience. "I'm looking for Ms. Miller. The Director."
                    </p>

                    <p>
                        The girl took a slow bite of her lunch. She chewed, swallowed, and wiped her hands on a napkin. Then she looked up.
                    </p>

                    <p>
                        "You're looking at her, Jameson."
                    </p>

                    <p>
                        Frost froze. He squinted. The face was familiar... but the context was wrong. This wasn't an executive. This was...
                    </p>

                    <p>
                        "The intern?" Frost blurted out. "The one with the... the wheels?"
                    </p>

                    <p>
                        <strong>Jessica</strong> (Age 20) smiled. It wasn't a warm smile.
                    </p>

                    <p>
                        "The one you forced to wear heels even though I can't walk," she corrected him. "The one you called 'pathetic' in the Bus Memo because I used my wheelchair as a walker."
                    </p>

                    <p>
                        She pressed a button on the desk. With a quiet hum, the surface rose slightly, adjusting perfectly to her posture.
                    </p>

                    <p>
                        "Sit down, Jameson."
                    </p>

                    <p>
                        Frost sat. The visitor chair was lower than he remembered. He felt small. He looked up at the ceiling, thinking of his old office two floors above.
                    </p>

                    <p>
                        "I assume you're renovating the 40th floor?" Frost asked, trying to regain control. "That explains why I couldn't get up there. My old office... it had great bones. I assume you kept the marble?"
                    </p>

                    <p>
                        Jessica chuckled softly. "Actually, we gutted it. The marble caused too much acoustic reverb."
                    </p>

                    <p>
                        "Gutted it?" Frost looked horrified. "What did you put in its place?"
                    </p>

                    <p>
                        "Moss," Jessica said simply. "Ferns. Living walls. Your old office is now <strong>Zone C of the Quiet Floor</strong>. It's a biophilic atrium where people go to decompress from stress. It's very popular."
                    </p>

                    <p>
                        Frost stared at her. "You filled my office... with moss?"
                    </p>

                    <p>
                        "It smells much better now," Justin added from the doorway, his synthesized voice devoid of sarcasm yet stinging all the same.
                    </p>

                    <p>
                        Frost cleared his throat, his face flushing. "Right. Well. Let's be honest, Jessica. You're swimming in deep waters now. You're managing a $2 billion endowment. You need someone who knows where the bodies are buried."
                    </p>

                    <p>
                        "We know where the bodies are buried, Jameson," Jessica said calmly. "We have the audit. Holly filed it."
                    </p>

                    <p>
                        Frost waved a hand dismissively. "Accounting errors. Technicalities. The SEC will slap us with a fine and we'll move on. That's how the game is played. And that's why you need me. I can make those problems... disappear."
                    </p>
                    
                    <p>
                        He leaned forward, dropping his voice to a conspiratorial whisper.
                    </p>

                    <p>
                        "I can protect you. The market is going to come for you. The sharks are circling. You need a killer at the gate."
                    </p>

                    <p>
                        Jessica glanced at Justin. "Mr. Frost," she said softly. "We aren't worried about the market sharks."
                    </p>

                    <p>
                        She tapped a blue folder on her desk.
                    </p>

                    <p>
                        "We're worried about your... schedule."
                    </p>

                    <p>
                        "My schedule is wide open," Frost said quickly. "I can start Monday."
                    </p>

                    <p>
                        "Monday might work," Jessica agreed. "But what about six months from now? When the USPIS finishes their review of the 'OGM Capital' mailers?"
                    </p>

                    <p>
                        Frost froze. The color drained from his face. "The... who?"
                    </p>

                    <p>
                        "The Postal Inspectors," Jessica clarified. "Holly filed Form 8165 in September. Mail Fraud isn't a 'technicality,' Jameson. It's a felony. And unlike the SEC, they don't issue fines."
                    </p>

                    <p>
                        Justin stepped forward. He turned his tablet screen toward Frost. It wasn't a job offer. It was a calendar.
                    </p>

                    <div class="alert alert-dark border-start border-4 border-danger bg-black text-white p-4 my-4 shadow-sm">
                        <i class="fa-solid fa-calendar-xmark me-2 text-danger"></i>
                        <span class="font-monospace fw-bold text-uppercase" style="letter-spacing: 2px;">
                            "We. Do. Not. Hire. Employees. Who. Are. About. To. Go. To. Federal. Prison."
                        </span>
                    </div>

                    <p>
                        The silence in the room was absolute.
                    </p>

                    <p>
                        "You... you can't know that," Frost whispered. "No indictments have been unsealed."
                    </p>

                    <p>
                        "We have a very good lawyer," Jessica replied, picking up her taco again. "She says the sentencing guidelines for $400 million in fraud start at fifteen years. Minimum."
                    </p>

                    <p>
                        She pointed to the door with her free hand.
                    </p>

                    <p>
                        "The interview is over, Jameson. Go home. Spend time with your family. While you still can."
                    </p>

                    <p>
                        Jameson Frost stood up. His legs felt weak. He looked at the girl he had bullied—comfortable in her jeans, her band t-shirt, and her power. She wasn't scared anymore. She was the one holding the gavel.
                    </p>

                    <p>
                        He walked out of the office, past the Jessica Miller Center logo, and back to the elevator. He stepped into a waiting car, the doors closing before he could even look for a button to press. He was just cargo now.
                    </p>

                </div>
            </div>

        </div>
    </div>

    <?php
        $nav = [
            'prev' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal/the-non-profit-model', 'label' => 'The Non-Profit Model'],
            'overview' => ['url' => '/engine-room/artists/stardust-engine/story/nine-figure-refusal', 'label' => 'Overview'],
            'next' => ['url' => '/engine-room', 'label' => 'Return to HQ']
        ];
        include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
    ?>

</div>