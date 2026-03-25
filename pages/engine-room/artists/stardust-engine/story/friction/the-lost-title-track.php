```php
<?php
// pages/engine-room/artists/stardust-engine/story/friction/the-lost-title-track.php
// EVIDENCE ITEM #94-A: The Friction Photo Shoot
// Context: September 1992. The day the "Cold War" went nuclear.
// Note: Contains content warning for mature themes.

$pageTitle = "Evidence #94-A: The Friction Shoot - The Stardust Engine Lore";
?>
<style>
    /* CUSTOM RED PEN STRIKE - Adaptive */
    .red-pen-strike {
        position: relative;
        display: inline-block;
        text-decoration: none !important;
        color: var(--bs-body-color);
        opacity: 0.5; /* Fade out original text */
    }
    .red-pen-strike::after {
        content: "";
        position: absolute;
        left: -5%;
        top: 50%;
        width: 110%;
        height: 4px;
        background-color: #dc3545; /* Sharp red marker */
        transform: rotate(-3deg);
        border-radius: 2px;
        opacity: 1.0;
        box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }[data-bs-theme="dark"] .red-pen-strike::after {
        background-color: #ff6b6b; /* Brighter red on dark backgrounds */
    }

    /* NARRATIVE STYLING */
    .narrative-card {
        background-color: var(--bs-body-tertiary);
        border: 1px solid var(--bs-border-color);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
        font-size: 1.1rem;
        line-height: 1.7;
    }[data-bs-theme="dark"] .narrative-card {
        background-color: #15171e;
        border-color: #333;
    }

    .timestamp {
        font-family: 'Courier New', monospace;
        color: #dc3545; /* Red for Friction */
        font-size: 0.85rem;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        display: block;
        text-transform: uppercase;
    }

    /* Clipboard Styling */
    .clipboard-box {
        background-color: #f8f9fa;
        border-top: 15px solid #333; /* The clip */
        border-radius: 5px;
        padding: 20px;
        font-family: 'Courier New', monospace;
        color: #000;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
        transform: rotate(1deg);
    }[data-bs-theme="dark"] .clipboard-box {
        background-color: #e9ecef; /* Keep paper light */
        color: #000;
        border-top-color: #111;
    }
</style>

<div class="container py-5">

    <!-- CONTENT WARNING GATE -->
    <div id="content-gate" class="row justify-content-center min-vh-50 align-items-center">
        <div class="col-lg-8">
            <div class="card border-danger shadow-lg">
                <div class="card-header bg-danger text-white fw-bold text-uppercase">
                    <i class="fa-duotone fa-triangle-exclamation me-2"></i>Content Warning
                </div>
                <div class="card-body p-5 text-center">
                    <h2 class="h3 fw-bold text-danger mb-4">Restricted Access</h2>
                    <p class="lead mb-4 text-body-secondary">
                        The following historical archive contains mature themes describing 
                        <strong>sexual harassment, coercion, and severe psychological distress</strong>.
                    </p>
                    <div class="d-grid gap-3 d-md-flex justify-content-center">
                        <a href="/engine-room/artists/stardust-engine/story/friction" class="btn btn-outline-secondary btn-lg">
                            <i class="fa-duotone fa-arrow-left me-2"></i>Return to Safety
                        </a>
                        <button onclick="unlockContent()" class="btn btn-danger btn-lg">
                            <i class="fa-duotone fa-eye me-2"></i>I Understand & Wish to Proceed
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div id="restricted-content" class="d-none fade-in">
        
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 shadow-sm mb-3 border border-danger-subtle text-uppercase letter-spacing-1">
                    <i class="fa-duotone fa-camera-retro me-2"></i>Evidence Item #94-A
                </span>
                <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Impact', sans-serif;">
                    The Hostage Photo
                </h1>
                <p class="lead text-body-secondary mt-3 font-monospace">
                    The shoot that killed a track, voided a contract, and forced a family into war.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <div class="card border-0 narrative-card mb-5">
                    <div class="card-body p-4 p-md-5 text-body-secondary">
                        
                        <span class="timestamp">September 1992 // 3:45 PM PST // Soundstage 4, Los Angeles</span>
                        <h3 class="text-danger fw-bold text-uppercase mb-4 border-bottom border-danger-subtle pb-2">Part 1: The Warehouse</h3>

                        <p>
                            The warehouse was cold. 
                        </p>
                        <p>
                            It wasn't an "artistic" cold; it was a damp, miserable, concrete-and-steel cold. Rain hammered against the corrugated roof, a deafening drumline that drowned out the traffic from the L.A. street outside.
                        </p>
                        <p>
                            Ryan O'Connell sat in his wheelchair under a single, buzzing floodlight, his breath pluming in the air. He was wearing a stiff, brand-new leather jacket that smelled like dye. It felt cheap and wrong, like a costume. He hated it.
                        </p>
                        <p>
                            "Engine! More grit!" shouted Julian Vance, pacing behind the photographer. "Give me... primal! Prowl! Yes!"
                        </p>
                        <p>
                            Ryan prowled. He put his hands on the prop piano—a hollowed-out shell, painted black—and tried not to shatter the keys. He hated being called "Engine." It was Julian's lazy, reductive nickname for the raw, industrial power he'd been chasing his whole life.
                        </p>
                        <p>
                            Across the cavernous room, his sister Cassidy was shivering in a black slip dress. She was 5'9", "model-ready," and Julian's "asset." She was also a classical prodigy with martial arts training, and she looked miserable. She hated being called "Stardust"—Julian's cheap, misogynistic shorthand for the cosmos she'd built her music around.
                        </p>
                        <p>
                            The other two band members, the cousins Evan and Tyler, were sitting on an anvil case in the dark. They were "The Power," the rhythm section, and they just wanted to stay out of the way.
                        </p>
                        <p>
                            In the shadows, the fifth member of their unit, Holly O'Connell, watched. At 23, she was a 2L law student and the band's full-time manager. To Julian, she was the "plain," 5'4" "girl next door"—an unattractive, unmarketable "liability" he dismissed completely. He had no idea he was looking at "The Shark." She was timing the shoot. Every minute past 4:00 PM was overtime.
                        </p>
                        <p>
                            "Alright, that's a wrap on solos!" Kevin, the nervous Wishbook photographer, called out. "Let's... let's take five. We're setting up for the 'Intimacy' series next."
                        </p>

                    </div>
                </div>

                <div class="card border-0 shadow-lg bg-body-tertiary mb-5">
                    <div class="card-body p-4 p-md-5 text-body-secondary fs-5" style="line-height: 1.7;">
                        
                        <h3 class="text-danger fw-bold text-uppercase mb-4 border-bottom border-danger-subtle pb-2">Part 2: The "Dirty Mirror"</h3>

                        <p>
                            The four band members huddled together instantly, a single unit seeking warmth. Cassidy pressed her face into Ryan's shoulder, and he wrapped his arms around her, trying to chafe some warmth back into her arms. Holly joined them, pulling a thermos from her legal bag.
                        </p>
                        <p>
                            A production assistant scurried over, holding a silver tray. "Mr. Julian wanted to make sure you were... comfortable," the PA said, avoiding their eyes. On the tray was a bottle of champagne, flutes, and a small, ornate pocket mirror covered in a fine white powder, next to a rolled-up hundred-dollar bill.
                        </p>
                        <p>
                            The band stared at the tray in baffled silence. They were a practical, no-nonsense family. Their "fuel" was hot chocolate, with milk. They didn't understand the champagne, and the mirror was just... confusing.
                        </p>

                        <div class="p-4 bg-body border border-secondary border-opacity-25 rounded-3 my-4">
                            <p class="mb-3">
                                Ryan is a literal-minded "fixer." He saw a problem. "What is this?" he asked, genuinely confused, pointing at the mirror. "It's... filthy."
                            </p>
                            <p class="mb-3">
                                "Sir... the... this is..." the PA stammered.
                            </p>
                            <p class="mb-3">
                                "It's just dust," Ryan said, his voice flat with impatience. He was cold. This was a waste of time. He picked up a clean cocktail napkin from the tray.
                            </p>
                            <p class="mb-3 text-body-emphasis">
                                "Ryan, don't—" Holly started, but it was too late.
                            </p>
                            <p class="mb-0 fw-bold text-body-emphasis">
                                With a gentle, fastidious wipe, Ryan O'Connell cleaned the mirror. He swept the entire pile of "dust" into the napkin. The PA let out a small, terrified squeak.
                            </p>
                        </div>

                        <p>
                            Ryan, oblivious, tossed the dirty napkin into a nearby trash can. "There," he said, satisfied. "It's clean. Now, can we please get some hot chocolate? We're freezing."
                        </p>

                    </div>
                </div>

                <div class="card border-0 narrative-card mb-5">
                    <div class="card-body p-4 p-md-5 text-body-secondary">
                        
                        <h3 class="text-danger fw-bold text-uppercase mb-4 border-bottom border-danger-subtle pb-2">Part 3: The "System Crash"</h3>

                        <p>
                            Julian Vance stood over the trash can, staring into the abyss of his own humiliation.
                        </p>
                        <p>
                            Five hundred dollars of high-grade Peruvian flake—his "negotiating leverage"—was sitting in a pile of crumpled napkins, mixed with spit and coffee grounds. He looked up at the band. They weren't looking at him with fear or defiance. They were looking at him with pity. Ryan was actually holding out the thermos cup, offering him hot chocolate.
                        </p>
                        <p>
                            "You look cold, Mr. Vance," Ryan said earnestly.
                        </p>
                        <p>
                            It broke something inside Julian. If they had thrown the drugs in his face, he could have respected that. It would have been rock and roll. But this? This accidental, wholesome incompetence? It made him feel small. It made him feel like a child playing dress-up in a suit.
                        </p>
                        <p>
                            His face went a dangerous, mottled red. He slapped the cup out of Ryan’s hand. The hot liquid splashed across the concrete floor of the Los Angeles warehouse, steaming in the damp air.
                        </p>
                        <p class="fw-bold text-body-emphasis">
                            "Get the hell on set," Julian hissed, his voice trembling. "Now."
                        </p>
                        <p>
                            He spun around and stormed toward Kevin, the photographer. "Give me the list."
                        </p>
                        <p>
                            Kevin flinched, clutching the clipboard to his chest. "Mr. Vance, we haven't discussed lighting for the—"
                        </p>
                        <p>
                            "I said give it to me!" Julian ripped the clipboard from Kevin's hands. He uncapped a thick, black permanent marker. The cap clattered onto the floor.
                        </p>
                        <p>
                            He scanned the page until he found it. <strong>Shot 12.</strong> The concept shot he had designed to rival Cydele’s <em>Worship</em> video.
                        </p>

                        <div class="clipboard-box mx-auto my-4 w-100" style="max-width: 600px;">
                            <strong class="text-uppercase d-block mb-3 border-bottom border-dark pb-2">Apex Records - Shot List: 'Friction'</strong>
                            <p class="mb-0 fs-5">
                                <strong>SHOT 12:</strong> CASSIDY / RYAN. "THE LOVERS."<br><br>
                                <strong>ACTION:</strong> FULL <span class="red-pen-strike">SIMULATED</span> INTERCOURSE (RYAN ON TOP).<br><br>
                                <strong>NOTE:</strong> ATMOSPHERIC. HEAT. TENSION.
                            </p>
                        </div>

                        <p>
                            Julian looked at the word <span class="text-decoration-line-through text-body-tertiary text-uppercase">simulated</span>. It looked weak. It looked safe. It looked like the kind of word people who drank hot chocolate and watched cartoons would use.
                        </p>
                        <p>
                            With a violent, squeaking motion that echoed in the silent warehouse, Julian drew a thick black line through the word. He scrubbed it back and forth until the paper tore slightly, obliterating the safety net.
                        </p>
                        <p>
                            He marched over to Ryan.
                        </p>
                        <p>
                            Ryan was sitting in his manual wheelchair, wiping a spot of spilled cocoa off his fender. Julian stopped in front of him, looking down. His eyes tracked over Ryan’s paralyzed legs, then the wheel, then the frame. He sneered—a quick, curling lip of disgust.
                        </p>
                        <p class="fst-italic opacity-75">
                            Whatever, Julian thought. The plumbing still works. He can prop himself up. If he wants to be a rock star, he has to suffer for it.
                        </p>
                        <p>
                            He shoved the clipboard into Ryan’s chest.
                        </p>
                        <p>
                            "We're skipping the warm-up," Julian said, his voice deadly quiet. "You want to act like children? Fine. Now you're going to act like adults. Read the direction. Do it. Or you're in breach of contract."
                        </p>
                        
                        <hr class="border-secondary opacity-25 my-5">

                        <p>
                            Ryan looked down at the clipboard. He blinked, confused by the scribbled-out text. He read the line item.
                        </p>
                        <p class="text-center font-monospace fw-bold fs-5 my-4">
                            SHOT 12: CASSIDY / RYAN. THE LOVERS. FULL INTERCOURSE.
                        </p>
                        <p>
                            Ryan’s brain stopped. The "Engine" stalled. He looked at the words, trying to make them make sense. Maybe it was a metaphor? Like the rockets? Like the friction of the air?
                        </p>
                        <p>
                            Then he looked at Julian. He saw the sneer. He saw the cold, predatory expectancy in the executive's eyes. He looked over at Cassidy, who was shivering in her slip dress, hugging her own arms, completely unaware of what was being asked.
                        </p>
                        <p>
                            The realization hit Ryan with the force of a head-on collision. It wasn't a metaphor.
                        </p>
                        <p>
                            Ryan’s hand began to shake. The clipboard rattled against the armrest of his chair. The "Family Unit"—the fortress they had built to protect each other—was under direct fire, 2,500 miles from home.
                        </p>
                        <p>
                            He looked up at Julian, his eyes wide, the pupils blown with adrenaline.
                        </p>

                        <blockquote class="blockquote text-center my-5">
                            <p class="display-3 fw-bold fst-italic text-danger text-uppercase" style="font-family: 'Impact', sans-serif;">
                                "SHE'S! MY! SISTER!"
                            </p>
                            <footer class="blockquote-footer mt-2">Ryan O'Connell, yelling so loud it distorted the photographer's boom mic.</footer>
                        </blockquote>

                        <p>
                            The scream tore out of him, raw and guttural, echoing off the steel roof like a gunshot. It wasn't a protest; it was a biological rejection of the reality he was being presented with.
                        </p>
                        <p>
                            Behind the camera, Kevin Mitchell immediately reached out and placed the lens cap over his camera.
                        </p>
                        <p>
                            In the corner, Holly O’Connell clicked her pen shut.
                        </p>
                        <p>
                            She looked at the stopwatch on her clipboard. <strong>4:17 PM. Overtime.</strong>
                        </p>
                        <p>
                            She looked at Ryan, shaking in his chair. She looked at Cassidy, frozen in horror. Then she looked at the revised shot list Julian was forcing into her brother's hands.
                        </p>
                        <p>
                            Holly was twenty-three years old. She was a Second Year (2L) law student at CPI. She had flown across the country, missing a week of classes, to manage this shoot. She had not passed the Bar. She could not file a motion or represent a client in court.
                        </p>
                        <p>
                            But she had just aced Contracts I and Criminal Law. She knew exactly what <strong>"Duress"</strong> looked like. She knew what <strong>"Solicitation"</strong> looked like. And looking at the black marker scribbled over the word SIMULATED, she knew she was looking at <strong>Material Breach</strong>.
                        </p>
                        <p>
                            She didn't need a license to know they were done. She just needed the evidence.
                        </p>
                        <p>
                            She quietly picked up her legal bag. She didn't run to them—that would be panic. She walked. A steady, terrifyingly calm clicking of heels on concrete that cut through the silence following Ryan's scream.
                        </p>
                        <p class="fs-4 fw-bold text-body-emphasis mt-4 text-center fst-italic">
                            The "Girl Next Door" had left the building. The Shark had entered the water.
                        </p>

                    </div>
                </div>

                <div class="row g-4 mt-5">
                    <div class="col-12">
                        <h2 class="h3 text-center fw-bold text-uppercase border-bottom border-secondary pb-3 mb-4">
                            Chapter 2: The Subpoena
                        </h2>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 bg-dark text-white shadow-lg narrative-card">
                            <div class="card-header bg-black text-warning font-monospace small border-bottom border-secondary">
                                <i class="fa-duotone fa-building-police me-2"></i>LAPD Hollywood Precinct // 3:17 AM
                            </div>
                            <div class="card-body p-4">
                                <h4 class="text-white fw-bold mb-3">The "Wishbook" Conscience</h4>
                                <p class="text-white-50">
                                    Kevin, the Wishbook photographer, didn't go home. He couldn't. He was a dad. He'd just watched a man, in a fit of rage, order a brother and sister to commit a felony. He was not a "Shark." He was not a "Forger." He was just a decent man who knew what he saw. He'd been a witness. And he was terrified.
                                </p>
                                <p class="text-white-50">
                                    At 3:17 AM, he walked into the LAPD's Hollywood Precinct. He was shaking so badly he could barely hold his camera bag. He handed the desk sergeant his driver's license, his business card (the one with a "Summit Wishbook" logo on it), and a photocopy he'd made of the clipboard.
                                </p>
                                <p class="text-white">
                                    "My name is Kevin," he whispered, his voice cracking. "I... I was just a witness to a crime. A... a sex crime. A man... he tried to make a brother and sister... this..."
                                </p>
                                <p class="text-white-50 mb-4">
                                    He pointed to the photocopy. To the angry, vindictive scratch. <span class="text-decoration-line-through text-danger fw-bold">SIMULATED</span>
                                </p>
                                <p class="text-white mb-0 fst-italic border-start border-4 border-warning ps-3">
                                    The desk sergeant, who had seen everything, looked at the clipboard, looked at the Wishbook card, and felt his blood run cold. "Sir," he said, his voice suddenly very serious. "Please. Come with me. You need to talk to a detective. Right now."
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 bg-body-secondary text-body-emphasis shadow-lg narrative-card">
                            <div class="card-header bg-body-tertiary text-primary font-monospace small border-bottom border-secondary-subtle">
                                <i class="fa-duotone fa-scale-balanced me-2"></i>David Gideon's Office // 9:00 AM
                            </div>
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-3">The War Room</h4>
                                <p class="text-body-secondary">
                                    It was 9:00 AM. The band was in David Gideon's office, running on vending-machine hot chocolate and pure, cold fury. David Gideon was pacing, holding the original clipboard sheet that Holly had grabbed.
                                </p>
                                <p class="text-body-emphasis fw-bold">
                                    "It's a nuke, Holly," he was saying, his voice electric. "This is a one-phone-call execution. Marcus Thorne will have to give us the masters. He'll have to void the debt. It's a clean, private, perfect kill. I'm going to call him right now."
                                </p>
                                <p class="text-body-secondary">
                                    He reached for the phone. It rang before he could pick it up.
                                </p>
                                <p class="text-body-secondary">
                                    "David Gideon," he answered. He was silent. The "lawyer" confidence on his face drained away, replaced by pure, pale shock. "I... yes. Yes, I represent them....I... I see....A detective?...This morning?"
                                </p>
                                <p class="text-body-secondary">
                                    He hung up the phone. He looked at Holly, his face grim. "That," he said, "was not Marcus Thorne."
                                </p>
                                <p class="text-body-secondary">
                                    "Who was it, David?" Holly asked.
                                </p>
                                <p class="text-danger fw-bold fs-5">
                                    "That was the Los Angeles District Attorney's office. Sex Crimes Division."
                                </p>
                                <p class="text-body-secondary">
                                    Holly's blood froze. "What?"
                                </p>
                                <p class="text-body-secondary">
                                    "Someone else talked, Holly. Before we could." David's voice was heavy. "A photographer. A Mr. Kevin. He walked into a precinct at 3:00 AM. He's a whistleblower. He... he's their star witness."
                                </p>
                                <hr class="border-secondary opacity-25">
                                <p class="text-body-emphasis mb-0 fst-italic">
                                    The "nuke" wasn't in David's hand anymore. It had already detonated. The "Tabloid Hell"—the one, singular thing she had been trying to prevent—was now inevitable. They were no longer negotiating a contract; they were the victims in a high-profile, public, felony trial.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row mt-5 pt-4 border-top border-secondary opacity-75">
            <div class="col-12 text-center">
                <?php
                    $nav = [
                        'prev' =>['url' => '/engine-room/artists/stardust-engine/story/friction', 'label' => 'The Friction Catastrophe'],
                        'overview' =>['url' => '/engine-room/artists/stardust-engine/story', 'label' => 'The Lore Index'],
                        'next' =>['url' => '/engine-room/artists/stardust-engine/discography/1995-the-warehouse-tapes', 'label' => 'The Aftermath (1995)']
                    ];
                    include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
                ?>
            </div>
        </div>

    </div>

</div>

<script>
function unlockContent() {
    document.getElementById('content-gate').classList.add('d-none');
    const content = document.getElementById('restricted-content');
    content.classList.remove('d-none');
    content.classList.add('animate-fade-in'); 
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>