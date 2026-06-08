<?php
// pages/engine-room/artists/fractured-prisms/story/1985-american-shores-tour.php
// The 1985 Stadium Tour Manifesto
// Archival Standard: Queen's English (Artist Artifacts)

$pageTitle = "1985 American Shores Tour Archive - Fractured Prisms Lore";
?>

<style>
    /* Fractured Prisms Theme Overrides */
    .gothic-font {
        font-family: 'Playfair Display', serif;
    }
    .text-glow-prism {
        text-shadow: 0 0 15px rgba(177, 156, 217, 0.4);
        color: #e6e6fa !important; 
    }
    .bg-prism-dark {
        background-color: #0b0914 !important; 
    }
    .border-prism {
        border-color: rgba(177, 156, 217, 0.3) !important;
    }
    
    /* Artifact Styling */
    .artifact-paper {
        background-color: var(--prism-artifact-bg, #dcdcd5);
        color: var(--prism-artifact-color, #111);
        font-family: 'Georgia', serif;
        border-left: 5px solid var(--prism-artifact-border, #6c757d);
        box-shadow: inset 0 0 20px rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
    }
    
    /* Archival Watermark */
    .artifact-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-30deg);
        font-size: 8rem;
        font-family: 'Courier New', monospace;
        color: rgba(0, 0, 0, 0.03);
        font-weight: bold;
        text-transform: uppercase;
        pointer-events: none;
        white-space: nowrap;
        user-select: none;
    }
    
    [data-bs-theme="dark"] .artifact-watermark {
        color: rgba(0, 0, 0, 0.05);
    }
</style>

<div class="bg-prism-dark min-vh-100 py-5">
    <div class="container">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge bg-transparent border border-secondary text-white-50 rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1">
                    <i class="fa-duotone fa-file-contract me-2"></i>Recovered Archive: Item 85-C
                </span>
                <h1 class="display-4 fw-bold text-glow-prism gothic-font mb-3">
                    The Independence Stadium Manifesto
                </h1>
                <p class="lead text-white-50 font-monospace">
                    Venue: Independence Stadium, Philadelphia, PA (Capacity: 90,000) <br>
                    Event: The Hollow Square Live Masterpiece (1985)
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card artifact-paper p-4 p-md-5 mb-5 rounded-0 border-0">
                    <div class="artifact-watermark">CONFIDENTIAL</div>
                    
                    <p class="fst-italic mb-5 fs-5" style="color: var(--prism-artifact-muted, #333); line-height: 1.8; position: relative; z-index: 1;">
                        Backed by immense generational wealth, Fractured Prisms completely bypassed the traditional club circuit. Their first-ever live performance was a sold-out stadium show with no opening act. To execute this while protecting Claire's autistic sensory needs and honouring their deceased siblings, Rhys engineered one of the most uncompromising, heavily restricted stage environments in rock history.
                    </p>

                    <div style="position: relative; z-index: 1;">
                        <h4 class="fw-bold text-uppercase mb-3" style="color: var(--prism-artifact-color, #111); font-family: 'Courier New', monospace;">1. The Stage Geometry & "The Session Ghosts"</h4>
                        <p class="small mb-4" style="color: var(--prism-artifact-muted, #333);">
                            The stage is sharply divided into two distinct zones, enforced by physical industrial red tape lines on the floor. <br><br>
                            <strong>The Vanguard:</strong> Rhys and his imposing fortress of mechanical synthesisers, alongside Claire, seated in her wheelchair at the centre of the stage.<br>
                            <strong>The Session Ghosts:</strong> The hired backing band. Positioned strictly in the shadows behind the red tape. They are compensated at the absolute top tier of the industry, but they are "ghosts"—they do not interact with the crowd, they do not cross the red line, and they are never fully illuminated.
                        </p>

                        <h4 class="fw-bold text-uppercase mb-3" style="color: var(--prism-artifact-color, #111); font-family: 'Courier New', monospace;">2. Rule Number 1: The Sacred Perimeter</h4>
                        <p class="small mb-4" style="color: var(--prism-artifact-muted, #333);">
                            The family’s original acoustic and electronic instruments are not tools; they are headstones and memorials to the deceased family members. <br><br>
                            <strong>Zero Exceptions:</strong> NO ONE but Rhys or Claire may touch the family's original instruments.<br>
                            <strong>Gwen's Flute:</strong> The most sacred artifact on the tour is Gwen's wooden flute. Claire is its sole custodian. <br>
                            <strong>The Consequence:</strong> If any stagehand, tech, or session player touches the original instruments or bumps the flute stand, it is a "Fired on the Spot" offence.
                        </p>

                        <h4 class="fw-bold text-uppercase mb-3" style="color: var(--prism-artifact-color, #111); font-family: 'Courier New', monospace;">3. Acoustic Rigidity & Stage Accommodations</h4>
                        <p class="small mb-4" style="color: var(--prism-artifact-muted, #333);">
                            Because of Claire's autistic needs, the sensory environment must be absolutely predictable.<br><br>
                            <strong>Play the Ink:</strong> The "Session Ghosts" are strictly briefed to play the music exactly as written and rehearsed. There are no unapproved jam sessions, no improvised solos, and no sudden deviations.<br>
                            <strong>The "Hold the Line" Contingency:</strong> If the stadium environment becomes overwhelming, Rhys triggers a specific, repeating synthesiser drone. The band immediately fades to silence, the lights drop to a static blue wash, and everyone holds the line until Rhys gives the visual cue that Claire has recalibrated.
                        </p>

                        <h4 class="fw-bold text-uppercase mb-3" style="color: var(--prism-artifact-color, #111); font-family: 'Courier New', monospace;">4. The Sanctum Protocol</h4>
                        <p class="small mb-4" style="color: var(--prism-artifact-muted, #333);">
                            The dressing room and immediate backstage corridor are classified as "The Sanctum." Rhys violently rejects the chaotic VIP rockstar culture to build a fortress around his sister.<br><br>
                            <strong>The "Rhys Only" Directive:</strong> No venue staff or crew members are permitted to assist Claire. Rhys exclusively handles all wheelchair transfers and physical assistance.<br>
                            <strong>Recalibration:</strong> Claire relies entirely on deep pressure hugs from Rhys to stave off sensory meltdowns. If she is overwhelmed, venue staff are instructed to turn away, secure the perimeter, and give the siblings absolute privacy.
                        </p>

                        <h4 class="fw-bold text-uppercase mb-3" style="color: var(--prism-artifact-color, #111); font-family: 'Courier New', monospace;">5. The Extraction Protocol</h4>
                        <p class="small mb-0" style="color: var(--prism-artifact-muted, #333);">
                            The lack of wheelchair accessibility in the city's municipal subway, the post-concert mob of 90,000 screaming fans, and the risk to Gwen's flute make standard transport impossible.<br><br>
                            <strong>The Armoured Coach:</strong> A custom-outfitted, heavily armoured, soundproofed conversion van waits deep in the concrete tunnels under the stadium, featuring dim amber lighting and a flat ramp deployment to mimic the sensory safety of a train carriage.<br>
                            <strong>The Route Home:</strong> Their private transport takes a secured, police-escorted route out of the complex, hitting the interstate corridor to begin the quiet journey back to their 1960s ranch house sanctuary in Williamsport, Maryland.
                        </p>
                    </div>
                </div>

                <div class="alert bg-black border border-prism p-4 shadow-lg">
                    <div class="d-flex align-items-center mb-4 border-bottom border-secondary pb-3">
                        <i class="fa-duotone fa-sliders-up fs-2 text-secondary me-3"></i>
                        <div>
                            <h5 class="fw-bold text-uppercase text-light mb-1 font-monospace">The Cue Sheet</h5>
                            <span class="text-white-50 small font-monospace">Track: The Hollow Square (Encore)</span>
                        </div>
                    </div>
                    <ul class="list-unstyled text-white-75 font-monospace small mb-0" style="line-height: 2.2;">
                        <li class="mb-2"><strong class="text-primary">0:00 [The Misdirection]:</strong> Total blackout. A single white strobe hits Rhys's primary drum sequencer as a slow, unfamiliar synthesiser vamp begins.</li>
                        <li class="mb-2"><strong class="text-primary">0:13 [The Phantom Melody]:</strong> Claire introduces a haunting, unrecognisable melody on Gwen's wooden flute. The audience is captivated but entirely disoriented—there is no flute on the studio version of the song. The misdirection holds.</li>
                        <li class="mb-2"><strong class="text-primary">0:24 [The Anchor Drop]:</strong> Rhys drops the massive, iconic gated reverb snare rhythm. Stadium blinders flash the crowd. The audience instantly recognises the beat—it is the song they paid to hear. The stadium erupts in a deafening roar.</li>
                        <li class="mb-2"><strong class="text-primary">0:32 [The Convergence]:</strong> Claire plays the flute alongside the Session Ghost's guitar, perfectly mirroring the familiar intro melody of the studio master.</li>
                        <li class="mb-2"><strong class="text-primary">0:46 [The Breath]:</strong> Claire delivers a sweeping, wordless vocalisation, letting her voice fill the arena before the verse begins.</li>
                        <li class="mb-2"><strong class="text-primary">1:05 [The Reverence]:</strong> Rhys sings the first line. The 90,000-seat stadium instantly drops into a pin-drop, reverent silence, acknowledging the profound memorial weight of the song. Claire joins him, and the siblings trade lines in the dark.</li>
                        <li><strong class="text-primary">5:24 [The Secure Decay]:</strong> Final note. Complete stage blackout. House lights do not come up until Claire has securely returned Gwen's flute to its reinforced case.</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row mt-5 pt-4 border-top border-prism">
            <div class="col-12 text-center">
                <a href="/engine-room/artists/fractured-prisms/story" class="btn btn-outline-light rounded-pill px-4 font-monospace small text-uppercase">
                    <i class="fa-duotone fa-arrow-left me-2"></i>Return to The Lore
                </a>
            </div>
        </div>

    </div>
</div>