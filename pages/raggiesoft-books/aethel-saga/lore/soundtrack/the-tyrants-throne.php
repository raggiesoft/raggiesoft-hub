<?php
// pages/raggiesoft-books/aethel-saga/soundtrack/the-tyrants-throne.php
// THE OST PAGE: "The Tyrant's Throne (Shadow's Heart)"
// Design: 1980s Deluxe Edition / Director's Cut Script Comparison

$pageTitle = "The Tyrant's Throne - The Silver Gauntlet of Aethel";
$poster_bg = 'https://assets.raggiesoft.com/aethel/images/aethel-hero.jpg'; 
?>

<style>
    /* PAGE SPECIFIC TYPOGRAPHY & LAYOUT */
    .cinzel-font { font-family: 'Cinzel', serif; }
    
    /* Screenplay Formatting */
    .script-dialogue {
        font-family: 'Courier New', monospace;
        margin-left: 15%;
        margin-right: 15%;
        margin-bottom: 1.5rem;
    }
    
    .script-action {
        font-family: 'Courier New', monospace;
        font-style: italic;
        margin-bottom: 1.5rem;
        color: var(--bs-secondary);
    }

    .record-scratch {
        border-top: 3px jagged #dc3545;
        background: repeating-linear-gradient(
            45deg,
            #212529,
            #212529 10px,
            #dc3545 10px,
            #dc3545 20px
        );
        color: white;
        padding: 10px;
        text-align: center;
        font-weight: bold;
        transform: rotate(-1deg);
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
    }
</style>

<div class="aethel-theme bg-black min-vh-100 pb-5">
    
    <!-- HERO HEADER -->
    <div class="py-5 text-center d-flex align-items-center border-bottom border-warning border-3" 
         style="min-height: 40vh; 
                background: linear-gradient(to bottom, rgba(0,0,0,0.6), #000000 100%), url('<?php echo $poster_bg; ?>'); 
                background-size: cover; 
                background-position: center top;">
        
        <div class="container position-relative z-1">
            <span class="badge bg-transparent border border-warning text-warning rounded-pill px-3 py-2 text-uppercase letter-spacing-2 mb-3">
                <i class="fa-duotone fa-compact-disc me-2"></i>Track 6 // The Leviathan Cut
            </span>
            <h1 class="display-3 fw-bold text-white mb-2 cinzel-font text-shadow-lg">
                The Tyrant's Throne
            </h1>
            <h2 class="h4 text-warning mb-4 cinzel-font opacity-90 letter-spacing-2">
                (Shadow's Heart)
            </h2>
            <p class="text-white-50 font-monospace mb-0">
                ARTIST: JARETH BLADE &bull; COMPOSER: JARETH BLADE &bull; BPM: 110
            </p>
        </div>
    </div>

    <div class="container py-5">
        
        <!-- AUDIO PLAYER PLACEHOLDER -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="card bg-dark border-secondary shadow-lg">
                    <div class="card-body p-4 d-flex align-items-center">
                        <button class="btn btn-warning rounded-circle p-3 me-4 shadow-glow">
                            <i class="fa-solid fa-play fa-2x text-dark ps-1"></i>
                        </button>
                        <div class="flex-grow-1">
                            <h5 class="text-light fw-bold mb-0 cinzel-font">The Tyrant's Throne (O.S.T.)</h5>
                            <div class="text-secondary small font-monospace">Jareth Blade &bull; Engine Room Records</div>
                            <div class="progress mt-3" style="height: 6px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DIRECTOR'S COMMENTARY -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="alert alert-dark bg-body-tertiary border-start border-4 border-warning shadow-sm p-4">
                    <h5 class="alert-heading text-warning cinzel-font fw-bold mb-3">
                        <i class="fa-duotone fa-clapperboard-play me-2"></i>Director's Notes: The Ratigan Homage
                    </h5>
                    <p class="text-body-secondary mb-2">
                        <em>The Tyrant's Throne</em> is the quintessential 1980s theatrical "villain song." It was designed as a dark, powerful rock opera where the charismatic Lord Malakor lays out his chillingly logical philosophy of absolute order. 
                    </p>
                    <p class="text-body-secondary mb-0">
                        The film version contains one of the most famous comedic breaks in fantasy cinema. Paying direct homage to Professor Ratigan in <em>The Great Mouse Detective</em>, Malakor's grand musical number is completely derailed when an ignorant minion uses the "C-Word" (Chaos). The resulting meltdown perfectly highlights the villain's fragile, egotistical obsession with control.
                    </p>
                </div>
            </div>
        </div>

        <!-- THE SPLIT SCRIPT / LYRICS -->
        <div class="row g-5">
            
            <!-- LEFT COLUMN: OST LYRICS -->
            <div class="col-lg-6">
                <h3 class="h4 text-white border-bottom border-secondary pb-2 mb-4 cinzel-font">
                    Original Soundtrack (Liner Notes)
                </h3>
                
                <div class="text-white-75" style="line-height: 1.8;">
                    <p class="text-info small fst-italic mb-4">[Track begins low and atmospheric. A full minute of instrumental build-up. A single, pulsing synthesizer note and a deep, ominous piano chord ring out before the vocals begin.]
                    </p>

                    <p>
                        My child, you stand in hallowed halls of grey<br>
                        And dream of some nostalgic, sun-drenched day<br>
                        You see this world, so flawed and incomplete<br>
                        A chaotic dance of triumph and defeat<br>
                        The golden sun, a rash and fiery breath<br>
                        The silver one, a whisper soft as death<br>
                        They flicker, fade, a fickle, cosmic game<br>
                        But I have come to conquer and to tame...
                    </p>

                    <p class="text-info small fst-italic my-4">[The rhythm kicks in—a steady, powerful drum beat and a chugging, distorted guitar riff. The music begins to build.]
                    </p>

                    <p class="fw-bold text-warning">
                        This broken world is crying for a guide!<br>
                        A single will, with nothing left to hide!<br>
                        To snuff the stars and tear the skies apart!<br>
                        From the Tyrant's Throne, with a Shadow's Heart!<br>
                        I'll give them order, I'll provide the spark!<br>
                        One perfect dawn, born of unending dark!
                    </p>

                    <p>
                        They called it heresy, my grand design<br>
                        To make the suns' chaotic power mine<br>
                        Those fearful fools who sat upon the throne<br>
                        They cast me out to wander all alone<br>
                        But in the wastes, the endless, silent night<br>
                        I found a truth more pure than any light<br>
                        The Gloom provides a focus, sharp and true<br>
                        A gift I've brought to mortals... and to you.
                    </p>

                    <p class="text-info small fst-italic my-4">
                        [The music intensifies, drums hitting harder, guitar more prominent.]
                    </p>

                    <p class="fw-bold text-warning">
                        This broken world is crying for a guide!<br>
                        A single will, with nothing left to hide!<br>
                        To snuff the stars and tear the skies apart!<br>
                        From the Tyrant's Throne, with a Shadow's Heart!<br>
                        I'll give them order, I'll provide the spark!<br>
                        One perfect dawn, born of unending dark!
                    </p>
                </div>
            </div>

            <!-- RIGHT COLUMN: THE MOVIE SCRIPT -->
            <div class="col-lg-6">
                <h3 class="h4 text-white border-bottom border-danger pb-2 mb-4 cinzel-font">
                    The Leviathan Cut (Scene Script)
                </h3>
                
                <div class="bg-body-tertiary p-4 border border-secondary rounded">
                    
                    <p class="script-action">
                        Setting: The throne room of the Shadowspire. Lord Malakor is in the middle of his epic rock opera number, singing to the captive Kaela while his Gloomwraiths look on. The music is swelling to its second chorus.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong><br>
                        <span class="small text-muted">(Singing)</span>
                    </div>
                    <p class="script-dialogue text-white">
                        ...The Gloom provides a focus, sharp and true! A gift I've brought to mortals... and to you!
                    </p>

                    <p class="script-action">
                        One of the Gloomwraiths, a hulking figure caught up in the anthem's power, steps forward, raising a gauntleted fist in a sycophantic salute.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-secondary">Gloomwraith</strong>
                    </div>
                    <p class="script-dialogue text-white">
                        It is a brilliant vision, my Lord! Truly! The world will tremble before the beautiful, glorious chaos you will unleash upon them!
                    </p>

                    <!-- THE RECORD SCRATCH -->
                    <div class="record-scratch my-4 font-monospace text-uppercase">
                        <i class="fa-duotone fa-bolt-slash me-2"></i>
                        SCREEEEEEECH. Music cuts to a dead halt.
                    </div>

                    <p class="script-action">
                        The epic rock music cuts out with the sound of a needle scratching across a record. The only sound is a low, ominous synthesizer drone. The entire throne room holds its breath. Malakor's smile vanishes. He turns his head slowly, his gaze locking onto the offending Gloomwraith.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong><br>
                        <span class="small text-muted">(A low, dangerous whisper)</span>
                    </div>
                    <p class="script-dialogue text-white">
                        What was that? What did you call my design?
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-secondary">Gloomwraith</strong><br>
                        <span class="small text-muted">(Oblivious, still beaming)</span>
                    </div>
                    <p class="script-dialogue text-white">
                        Uh... glorious, my Lord? Glorious chaos!
                    </p>

                    <p class="script-action">
                        A second Gloomwraith, sensing the immense danger, quickly takes a half-step forward, hands slightly raised in a placating gesture.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-secondary">Second Gloomwraith</strong><br>
                        <span class="small text-muted">(Voice trembling)</span>
                    </div>
                    <p class="script-dialogue text-white">
                        My Lord, he... he did say "glorious"...
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong><br>
                        <span class="small text-danger">(A sharp, sudden roar)</span>
                    </div>
                    <p class="script-dialogue text-danger fw-bold fs-5">
                        DID YOU SAY... CHAOS?!
                    </p>

                    <p class="script-action">
                        Before the terrified Gloomwraith can even react, Malakor raises a single, armored finger. The shadows that make up the Gloomwraith's own form suddenly writhe and twist, turning inward on themselves. The soldier lets out a muffled, agonizing scream as he implodes into a wisp of dark, silent smoke.
                    </p>
                    
                    <p class="script-action">
                        Malakor slowly lowers his hand, his composure perfect once more. He sweeps his gaze across his remaining, now utterly terrified, minions.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong><br>
                        <span class="small text-muted">(Smooth, chilling purr)</span>
                    </div>
                    <p class="script-dialogue text-white">
                        I trust... there will be no further interruptions. My new world will be one of Order.
                    </p>

                    <p class="script-action">
                        He turns back towards Kaela with a theatrical flourish, as if nothing happened.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong>
                    </div>
                    <p class="script-dialogue text-white">
                        Now... where was I?
                    </p>

                    <p class="script-action">
                        With a sharp nod, the epic music CRASHES back in at full volume, picking up exactly where it left off in the chorus, but now with even more intensity.
                    </p>

                    <div class="text-center mb-3">
                        <strong class="text-uppercase text-info">Malakor</strong><br>
                        <span class="small text-muted">(Singing with triumphant fury)</span>
                    </div>
                    <p class="script-dialogue text-warning fw-bold">
                        To snuff the stars and tear the skies apart!<br>
                        From the Tyrant's Throne, with a Shadow's Heart!<br>
                        I'll give them order, I'll provide the spark!<br>
                        One perfect dawn, born of unending dark!
                    </p>

                </div>
            </div>
            
        </div>

        <div class="text-center mt-5 pt-4 border-top border-secondary opacity-75">
            <a href="/raggiesoft-books/aethel-saga/soundtrack" class="btn btn-outline-secondary rounded-pill px-4">
                <i class="fa-duotone fa-arrow-left me-2"></i>Back to Soundtrack
            </a>
        </div>

    </div>
</div>