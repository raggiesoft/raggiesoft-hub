<?php
// pages/engine-room/artists/stardust-engine/story/friction/kevin-deposition.php
// EVIDENCE ITEM #94-C: The Deposition of Kevin Mitchell
// Context: The Mall Santa photographer breaks the case wide open.

$pageTitle = "Evidence #94-C: The Mitchell Deposition - The Stardust Engine Lore";
?>

<style>
    /* LEGAL TRANSCRIPT STYLING */
    .transcript-paper {
        background-color: #fdfdfc;
        color: #212529;
        font-family: 'Courier New', Courier, monospace;
        padding: 3rem 4rem;
        box-shadow: var(--bs-box-shadow-lg);
        position: relative;
        border-radius: 2px;
        border-left: 2px solid #dc3545; /* The legal binding line */
        font-size: 1.05rem;
        line-height: 1.8;
    }

    .transcript-header {
        border-bottom: 2px solid #212529;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        text-align: center;
    }

    .line-number-col {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3rem;
        background-color: rgba(220, 53, 69, 0.05); /* Faint red tint */
        border-right: 1px solid rgba(220, 53, 69, 0.2);
    }

    .speaker-label {
        font-weight: 700;
        margin-right: 10px;
    }

    /* Dark Mode Adaptation for the paper */[data-bs-theme="dark"] .transcript-paper {
        background-color: #dcdcd5; 
        color: #000; 
    }

    /* Post-It Note for David Gideon */
    .gideon-note {
        font-family: 'Kalam', cursive;
        color: #052c65; /* Ink Blue */
        background-color: #cff4fc; /* Light Cyan Note */
        font-size: 1.1rem;
        transform: rotate(2deg);
        display: block;
        padding: 15px;
        box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
        border: 1px solid #9eeaf9;
        position: absolute;
        top: -20px;
        right: -30px;
        width: 250px;
        z-index: 10;
    }

    @media (max-width: 992px) {
        .transcript-paper { padding: 2rem 1.5rem; }
        .line-number-col { display: none; }
        .gideon-note {
            position: relative;
            top: 0;
            right: 0;
            width: 100%;
            margin-bottom: 20px;
            transform: rotate(0);
        }
    }
</style>

<div class="container py-5">

    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 shadow-sm mb-3 border border-danger-subtle text-uppercase letter-spacing-1">
                <i class="fa-duotone fa-gavel me-2"></i>Evidence Item #94-C
            </span>
            <h1 class="display-4 fw-bold text-uppercase text-body-emphasis mb-0" style="font-family: 'Impact', sans-serif;">
                The Mitchell Deposition
            </h1>
            <p class="lead text-body-secondary mt-3 font-monospace">
                The star witness wasn't a Hollywood insider. He was a dad with a camera.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="card bg-body-tertiary border-secondary shadow-sm mb-5">
                <div class="card-body p-4">
                    <h4 class="h5 fw-bold text-uppercase text-danger mb-3 border-bottom border-secondary-subtle pb-2">
                        <i class="fa-solid fa-microphone-lines me-2"></i>Context Brief
                    </h4>
                    <p class="text-body-secondary small mb-0">
                        In preparation for the 1994 breach of contract trial, Apex Records' high-powered defense firm deposed <strong>Kevin Mitchell</strong>, the photographer hired by Julian Vance for the infamous <em>Friction</em> shoot. The defense strategy was simple: paint Mitchell as a provocative, edgy artist who was fully complicit in Vance's "boundary-pushing" artistic vision, thereby proving the band overreacted. 
                        <br><br>
                        They vastly underestimated who they were talking to.
                    </p>
                </div>
            </div>

            <div class="transcript-paper">
                <div class="line-number-col"></div>

                <div class="gideon-note">
                    <i class="fa-solid fa-thumbtack text-primary position-absolute top-0 start-50 translate-middle"></i>
                    <strong>Holly,</strong><br>
                    Read page 14 of the transcript. Their lawyer practically hands us the case. The guy shoots toddlers for a living. They are going to settle.<br>
                    - David G.
                </div>

                <div class="transcript-header">
                    <h4 class="fw-bold mb-1 text-uppercase">Superior Court of the State of California</h4>
                    <h5 class="fw-bold mb-3 text-uppercase">For the County of Los Angeles</h5>
                    <p class="mb-0"><strong>DEPONENT:</strong> Kevin Mitchell</p>
                    <p class="mb-0"><strong>EXAMINING ATTORNEY:</strong> Richard Sterling, Esq. (For the Defense)</p>
                    <p class="mb-0"><strong>DATE:</strong> April 12, 1994</p>
                </div>

                <div class="transcript-body">
                    
                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> Let the record show we are resuming the deposition of Mr. Kevin Mitchell. Mr. Mitchell, prior to the break, we were discussing your portfolio. You consider yourself an avant-garde photographer, correct? You specialize in pushing boundaries?
                    </p>
                    
                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> No, sir. I wouldn't say that. 
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> But Mr. Vance hired you specifically for a highly stylized, provocative, adult-oriented rock and roll shoot. He sought out your specific creative vision to compete with Cydele's latest project.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> Sir, with respect, I don't know who Cydele is. My primary client is the Summit Holiday Catalog.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> The... the Wishbook?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> Yes, sir. I specialize in soft-focus portraiture. Mostly toddlers in flannel pajamas holding teddy bears. During the winter, I am the lead photographer for the Santa's Village installation at the Glendale Galleria. My agent booked this gig because it’s September. It’s my off-season. I was told it was a "wholesome family band promo." 
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> <span class="fst-italic">[Pause]</span> I see. Let's move on to the events of the afternoon. You claim Mr. Vance exhibited erratic behavior. Did you witness him consuming illicit narcotics?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> I saw him bring a silver tray into the room. It had champagne, a mirror, and a pile of white powder on it.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> And did you see my client ingest this powder?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> No, sir. He never got the chance.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> Why is that?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> The young man in the wheelchair... Ryan. He thought the mirror was dirty. He said it was drywall dust from the ceiling. He wiped the entire pile into a cocktail napkin and threw it in the trash can. Then he asked Mr. Vance if he wanted some hot chocolate.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> He... he threw the cocaine in the trash?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> Yes, sir. He seemed very concerned about the sanitation of the set. 
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> Let us turn our attention to Plaintiff's Exhibit A, the clipboard containing the shot list. You testified earlier that Mr. Vance altered this document in front of the band.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> Yes. He was furious about the... the dust. He took a black permanent marker and violently crossed out a word on the shot list. Then he shoved it into Ryan's chest.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> Mr. Mitchell, isn't it true that in the fast-paced environment of a high-end fashion shoot, creative directors frequently use hyperbole and exaggerated language to elicit a performance? When he crossed out the word "SIMULATED," he was merely asking for more passion, correct? A metaphor for the music?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> Sir, I photograph Golden Retrievers wearing reindeer antlers. I know what a metaphor is. Mr. Vance was not using a metaphor. He looked at a paralyzed young man and his sister, and he demanded they perform a sex act on my set.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> Objection. Calls for speculation regarding my client's state of mind.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> I don't need to speculate, sir. The boy in the wheelchair started screaming. A horrible, terrifying scream. His sister looked like she was going to faint. I capped my lens, I packed my bag, and I drove straight to the Hollywood Police Precinct. I didn't even pack my lighting umbrellas. I left them there.
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> You went to the LAPD at three o'clock in the afternoon?
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Mitchell:</span> No, sir. I waited in my car down the street to make sure the family got out safely. Once I saw the young woman with the briefcase wheel her brother out, I drove to the police station. It was 3:17 AM by the time I finished giving my statement to the Sex Crimes Division. 
                    </p>

                    <p>
                        <span class="speaker-label text-uppercase">Sterling:</span> <span class="fst-italic">[Extended Pause. Papers shuffling.]</span> I have no further questions for this witness at this time.
                    </p>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-dark bg-black border-success border-2 shadow-lg d-flex align-items-center p-4">
                        <i class="fa-duotone fa-flag-checkered fs-1 text-success me-4"></i>
                        <div>
                            <h4 class="text-success text-uppercase fw-bold mb-2">The Fallout</h4>
                            <p class="text-white-75 small mb-0">
                                Richard Sterling (the defense attorney) ended the deposition immediately after that exchange. Two hours later, Apex Records contacted David Gideon (the band's lawyer) to offer a full surrender. 
                                <br><br>
                                They voided the contract, surrendered the master tapes, and paid an undisclosed sum in punitive damages just to keep Kevin Mitchell off the witness stand. The band was free, and Holly O'Connell used the settlement money to found Engine Room Records.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- NARRATIVE STEPPER -->
    <div class="row mt-5 pt-4 border-top border-secondary opacity-75">
        <div class="col-12 text-center">
            <?php
                $nav = [
                    'prev' =>['url' => '/engine-room/artists/stardust-engine/story/friction/atmosphere', 'label' => 'The Atmosphere Demo'],
                    'overview' =>['url' => '/engine-room/artists/stardust-engine/story/friction', 'label' => 'Friction Overview'],
                    'next' =>['url' => '/engine-room/artists/stardust-engine/story', 'label' => 'The Lore Index']
                ];
                include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>
        </div>
    </div>

</div>