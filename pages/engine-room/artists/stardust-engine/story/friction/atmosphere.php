<?php
// pages/engine-room/artists/stardust-engine/story/friction/atmosphere.php
// EVIDENCE ITEM #94-B: The "Atmosphere" Demo
// Context: The scientific lyrics that Julian Vance misinterpreted as sexual innuendo.

$pageTitle = "Evidence #94-B: Atmosphere (Demo) - The Stardust Engine Lore";
$cover_art = 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1992-friction/album-art.jpg';
?>

<style>
    /* DEMO SHEET STYLING (Typewriter/Studio aesthetic) */
    /* Integrated with custom RaggieSoft CSS variables */
    .demo-sheet {
        background-color: #f4f4f0; /* Studio paper base */
        color: #222;
        font-family: var(--bs-font-monospace);
        padding: 3rem;
        box-shadow: var(--bs-box-shadow-lg);
        position: relative;
        border-radius: var(--bs-border-radius);
    }
    
    .demo-header {
        border-bottom: 2px dashed var(--bs-secondary);
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }

    /* Highlight marks from the "Executive" */
    .vance-highlight {
        background-color: rgba(var(--bs-warning-rgb), 0.4);
        border-radius: var(--bs-border-radius-sm);
        padding: 0 4px;
        position: relative;
        cursor: help;
    }

    /* Red Pen Notes from Holly */
    .holly-note {
        font-family: 'Kalam', cursive;
        color: var(--bs-danger);
        font-size: 1.1rem;
        transform: rotate(-2deg);
        display: block;
        margin-top: 5px;
        border-left: 2px solid var(--bs-danger);
        padding-left: 10px;
    }

    /* Dark Mode Overrides for the paper */
    /* Retains the physical paper illusion while dimming slightly for eye safety */[data-bs-theme="dark"] .demo-sheet {
        background-color: #dcdcd5; 
        color: #000; 
    }
</style>

<div class="container py-5">

    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <span class="badge bg-info-subtle text-info-emphasis rounded-pill px-3 py-2 shadow-sm mb-3 border border-info-subtle text-uppercase letter-spacing-1">
                <i class="fa-duotone fa-file-audio me-2"></i>Evidence Item #94-B
            </span>
            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-0">
                The "Atmosphere" Demo
            </h1>
            <p class="lead text-body-secondary mt-3 font-monospace">
                The literal science they wrote, and the sleaze the label heard.
            </p>
        </div>
    </div>

    <div class="row g-5 justify-content-center">
        
        <!-- Cassidy's Concept Art -->
        <div class="col-lg-5">
            <div class="sticky-top" style="top: 100px;">
                <div class="card bg-dark border-secondary shadow-lg">
                    <div class="card-header bg-black text-white-50 font-monospace small border-bottom border-secondary d-flex justify-content-between text-uppercase">
                        <span>Exhibit C: Visual Concept</span>
                        <span>Date: Aug 1992</span>
                    </div>
                    <div class="p-3">
                        <img src="<?php echo $cover_art; ?>" 
                             class="img-fluid border border-secondary shadow-sm w-100" 
                             alt="Cassidy's concept art of a space shuttle enveloped in the bright pink and orange flames of atmospheric re-entry.">
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <h5 class="fw-bold text-body-emphasis">"Thermal Friction"</h5>
                        <p class="small text-body-secondary mb-0">
                            Cassidy O'Connell drafted this concept art to accompany the track. It clearly depicts a spacecraft enveloped in the superheated plasma of atmospheric re-entry. 
                        </p>
                        <hr class="opacity-25">
                        <p class="small text-danger fw-bold fst-italic mb-0">
                            Julian Vance rejected this artwork, calling it "childish," proving he never understood the band's core identity.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Demo Lyric Sheet -->
        <div class="col-lg-7">
            <div class="demo-sheet">
                
                <div class="demo-header">
                    <div class="row fw-bold text-uppercase">
                        <div class="col-6">
                            Studio: Apex West<br>
                            Artist: The Stardust Engine<br>
                            Track: "Atmosphere" (Working Title: Friction)
                        </div>
                        <div class="col-6 text-end">
                            Take: 03 (Rough Vocal)<br>
                            Date: Sep 02, 1992<br>
                            Producer: J. Vance
                        </div>
                    </div>
                </div>

                <div class="fs-5" style="line-height: 1.8;">
                    
                    <p>
                        (Verse 1)<br>
                        Black velvet, a million lights<br>
                        Floating silent through the endless night<br>
                        The world below, a sleeping blue<br>
                        I'm holding my breath, I'm thinking of you
                    </p>

                    <p>
                        (Verse 2)<br>
                        The signal's given, the turn is made<br>
                        The point of no return, the price is paid<br>
                        <span class="vance-highlight" title="Vance interpreted this as physical intimacy.">The fragile hull begins to shake</span><br>
                        <span class="holly-note">>> He thought 'hull' meant her body. It literally means a spaceship, Julian. -H</span>
                        A promise that we're bound to make
                    </p>

                    <p class="fw-bold">
                        (Chorus)<br>
                        <span class="vance-highlight" title="Vance saw this as pure sexual tension.">Here comes the friction, feel the fire</span><br>
                        <span class="vance-highlight" title="Vance's hook for the marketing campaign.">Burning up with our desire</span><br>
                        A sheet of flame, a crimson glow<br>
                        The only way we know to go<br>
                        We're coming home, we're breaking through<br>
                        This atmosphere... with you
                    </p>
                    <span class="holly-note mb-4">>> "Desire" meant the desire to survive the drop and get home to gravity. The "crimson glow" is the plasma shield.</span>

                    <p>
                        (Verse 3)<br>
                        <span class="vance-highlight" title="Again, Vance read this as escalating intimacy.">The pressure builds, the gauges scream</span><br>
                        This is the violence of the dream<br>
                        <span class="vance-highlight" title="Vance completely misunderstood this metaphor.">A single tear in the metal skin</span><br>
                        Is all it takes to let the outside in
                    </p>

                    <p class="fw-bold">
                        (Bridge)<br>
                        We're losing control, the edges blur<br>
                        A terror and a beauty...<br>
                        Burning up!
                    </p>

                    <p class="fst-italic text-muted">[Guitar Solo - Heavy Distortion / "Engine" Roar]
                    </p>

                    <p class="fw-bold">
                        (Chorus)<br>
                        Here comes the friction, feel the fire<br>
                        Burning up with our desire<br>
                        A sheet of flame, a crimson glow<br>
                        The only way we know to go<br>
                        We're coming home, we're breaking through<br>
                        This atmosphere... with you
                    </p>

                    <p>
                        (Outro)<br>
                        Burning up...<br>
                        Friction...<br>
                        Coming home...<br>
                        <span class="fst-italic text-muted">(fades into static)</span>
                    </p>

                </div>
            </div>

            <!-- Court Record Context -->
            <div class="card bg-dark text-white border-secondary mt-5 shadow-lg">
                <div class="card-body p-4">
                    <h4 class="h5 text-warning fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-scale-balanced me-2"></i>The Deposition Reality
                    </h4>
                    <p class="small text-white-75 mb-3">
                        During the 1994 breach of contract trial, Apex Records' defense team attempted to argue that Julian Vance was merely following the band's creative lead. They presented these lyrics as evidence that the band <em>wanted</em> a highly sexualized campaign to compete with Cydele.
                    </p>
                    <p class="small text-white-75 mb-0">
                        Holly O'Connell destroyed their argument by placing Cassidy's concept art on the projector, followed by an expert witness from the <strong>Jet Propulsion Laboratory</strong> who testified that every metaphor in the song perfectly described the physics of the Space Shuttle <em>Discovery</em>. The jury took less than three hours to side with the band.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- NARRATIVE STEPPER -->
    <div class="row mt-5 pt-4 border-top border-secondary opacity-75">
        <div class="col-12 text-center">
            <?php
                $nav = [
                    'prev' =>['url' => '/engine-room/artists/stardust-engine/story/friction/the-lost-title-track', 'label' => 'The Lost Title Track'],
                    'overview' =>['url' => '/engine-room/artists/stardust-engine/story/friction', 'label' => 'Friction Overview'],
                    'next' =>['url' => '/engine-room/artists/stardust-engine/story', 'label' => 'The Lore Index']
                ];
                include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>
        </div>
    </div>

</div>