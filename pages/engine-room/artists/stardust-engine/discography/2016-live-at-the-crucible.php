<?php
// pages/engine-room/artists/stardust-engine/discography/2016-live-at-the-crucible.php
// Context: The 2016 Homecoming / 30th Anniversary of Ignition
// Theme: Stadium Red, Epic, Triumphant

$pageTitle = "Live at The Crucible (2016) - The Stardust Engine";
$album_path_web = '/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible';
$album_art = $album_path_web . '/album-art.jpg?v=' . time();

$albumSchema = [
    "@context" => "https://schema.org",
    "@type" => "MusicAlbum",
    "name" => "Live at The Crucible",
    "byArtist" => [
        "@type" => "MusicGroup",
        "name" => "The Stardust Engine"
    ],
    "albumReleaseType" => "LiveAlbum",
    "datePublished" => "2016",
    "description" => "The sold-out homecoming show at Commonwealth Polytechnic Institute (CPI), featuring the only official commercial release of the stadium anthem 'Ignition (The Forger's Call)'.",
    "publisher" => [
        "@type" => "Organization",
        "name" => "Engine Room Records"
    ]
];
?>

<script type="application/ld+json">
<?php echo json_encode($albumSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<div class="container py-5">
    
    <?php include ROOT_PATH . '/includes/components/_disclaimer-live-album.php'; ?>

    <div class="row align-items-center my-5">
        
        <div class="col-md-5 mb-4 mb-md-0 position-relative">
            <img src="https://assets.raggiesoft.com<?php echo $album_art; ?>" 
                 class="img-fluid rounded shadow-lg border border-danger border-3" 
                 alt="Live at The Crucible Album Art">
            <div class="position-absolute bottom-0 end-0 m-3">
                 <span class="badge bg-danger text-white shadow fs-6 border border-white">
                    <i class="fa-solid fa-fire-flame-curved me-2"></i>SOLD OUT
                 </span>
            </div>
        </div>

        <div class="col-md-7 ps-md-4">
            <h1 class="display-3 fw-bold text-uppercase text-danger mb-0" style="font-family: 'Impact', sans-serif;">
                Live at The Crucible
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The Electric Color Tour Finale (2016)
            </p>
            <p class="lead text-body-secondary">
                Thirty years after forming in a dorm room at Commonwealth Polytechnic Institute (CPI), the "Family Unit" finally came home. 
            </p>
            <p class="text-body-secondary">
                This monumental live album documents the band's sold-out performance at their home stadium. Backed by the thunderous power of the <strong>CPI Marching Forgers</strong>, this album is a celebration of absolute independence, survival, and the unbreakable loyalty of "Forger Nation."
            </p>
        </div>
    </div>

    <hr class="border-danger opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <div class="text-center mb-5">
            <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 shadow-sm mb-3 border border-danger-subtle text-uppercase letter-spacing-1">
                <i class="fa-solid fa-football-helmet me-2"></i>Stadium Lore
            </span>
            <h2 class="display-5 fw-bold text-uppercase text-body-emphasis" style="font-family: 'Impact', sans-serif;">
                Ignition (The Forger's Call)
            </h2>
            <p class="lead text-body-secondary mx-auto" style="max-width: 800px;">
                The most terrifying sound in college football.
            </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="card border-danger bg-body-tertiary shadow-sm h-100">
                    <div class="card-header bg-danger bg-opacity-10 text-danger-emphasis fw-bold text-uppercase">
                        <i class="fa-duotone fa-file-music me-2"></i>The 1986 Contest
                    </div>
                    <div class="card-body">
                        <p class="card-text text-body-secondary">
                            In 1986, long before they had a record deal, the five members of The Stardust Engine entered a student contest to replace the dated, traditional marching band song used for the CPI football team's field entrance.
                        </p>
                        <p class="card-text text-body-secondary">
                            They didn't write a fight song; they wrote a weapon. <em>"Ignition"</em> was designed as a heavy, industrial rock anthem meant to strike fear into opposing teams. It won by a landslide.
                        </p>
                        <p class="card-text text-body-secondary fw-bold text-danger border-start border-danger border-4 ps-3 mb-0">
                            ARCHIVAL NOTE: This 2016 live album is the ONE and ONLY place you can find a commercially released recording of this track. Otherwise, you must physically attend a Saturday home game at The Crucible to hear it.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-warning bg-body-tertiary shadow-sm h-100">
                    <div class="card-header bg-warning bg-opacity-10 text-warning-emphasis fw-bold text-uppercase">
                        <i class="fa-duotone fa-shoe-prints me-2"></i>The Stomp
                    </div>
                    <div class="card-body">
                        <p class="card-text text-body-secondary">
                            <em>The Stomp</em> was never part of the original 1986 sheet music. It started organically in the student section (specifically among the engineering students in the endzone) who began rhythmically stomping their feet on the concrete bleachers to keep time during the song's slow, building intro.
                        </p>
                        <p class="card-text text-body-secondary mb-0">
                            Over the decades, it blossomed into a terrifying 60,000-person synchronized ritual. Today, "The Stomp" is so loud and aggressive that it registers on the geology department's local seismographs. You cannot imagine the song without it.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-secondary bg-dark text-light shadow-lg mt-5">
            <div class="card-header bg-black text-danger fw-bold text-center text-uppercase letter-spacing-1 p-3">
                <i class="fa-solid fa-microphone-stand me-2"></i>Live Transcript: Track 01
            </div>
            
            <div class="card-body p-4 p-lg-5">
                <div class="lyrics-container mx-auto" style="max-width: 700px; line-height: 1.8; font-size: 1.1rem;">
                    
                    <p class="fst-italic text-secondary small mb-4 text-center">
                        [Ambient Sound: Massive Crowd Roar, Wind, Feedback]
                    </p>

                    <div class="p-4 bg-black border border-secondary rounded mb-4">
                        <span class="text-danger small fw-bold text-uppercase d-block mb-2">[Spoken Intro - Ryan O'Connell]</span>
                        <p class="text-white-75 mb-3 fst-italic">
                            (Gravelly voice, intimate, over a faint synth pad)
                        </p>
                        <p class="mb-3">
                            "Thirty years ago... We were just five kids in a garage on Progress Street. We didn't have a record deal... We didn't have a tour bus... All we had was a cassette tape... and an idea."
                        </p>
                        <p class="mb-3">
                            <em>(Voice gets louder, commanding)</em><br>
                            "We entered a contest to write a song for this stadium. We wanted to make something loud enough... To scare the HELL out of anyone who dared to come into our house!"
                        </p>
                        <p class="mb-0">
                            <em>(Crowd cheers swell)</em><br>
                            "For thirty years... you guys have been stomping your feet to our song every single Saturday. So tonight... for the 30th Anniversary... Let's see if we can break the seismographs!"
                        </p>
                    </div>

                    <p class="fst-italic text-danger fw-bold text-center mb-4">
                        [Drum Fill: Massive, Thundering]<br>
                        [Ryan Screams] IGNITION!
                    </p>

                    <p class="text-center mb-4">
                        <span class="text-warning small fw-bold text-uppercase d-block mb-1">[Crowd Response: 60,000 People]</span>
                        <span class="display-6 fw-bold">IGNITION!</span>
                    </p>

                    <p class="fst-italic text-secondary small mb-4 text-center">
                        [Music Starts: Heavy Industrial Riff, Slow and Stomping]<br>
                        [Sound Effect: Rhythmic Metallic Clang and 60,000 person foot-stomp]<br>
                        (TING... BOOM!) (TING... BOOM!)
                    </p>

                    <p class="mb-4 text-center">
                        <span class="text-info small fw-bold text-uppercase d-block mb-1">[Verse 1]</span>
                        The lights go dark... the tension builds...<br>
                        A single pounding heavy sound...<br>
                        The hammer striking on the steel...<br>
                        It shakes the air... it shakes the ground!<br>
                        The pressure's on... the time is now...<br>
                        We're here to forge our name!<br>
                        The spark is lit... the fire burns...<br>
                        <span class="text-warning fw-bold mt-2 d-block">
                            [Ryan Ad-Lib - Shouted]<br>
                            "We're taking the Anchor BACK to the Mountains!"
                        </span>
                    </p>

                    <p class="mb-4 text-center fw-bold fs-4">
                        <span class="text-danger small fw-bold text-uppercase d-block mb-1">[Chorus]</span>
                        <span class="text-white">IGNITION!</span> <span class="text-warning">(IGNITION!)</span><br>
                        <span class="text-white">This is the Forger's Call!</span><br>
                        <span class="text-white">IGNITION!</span> <span class="text-warning">(IGNITION!)</span><br>
                        <span class="text-white">We're standing ten feet tall!</span><br>
                        <span class="text-white">We are the hammer, we're the flame</span><br>
                        <span class="text-white">This is our house, this is our game!</span>
                    </p>

                    <p class="mb-0 text-center fw-bold fs-3">
                        <span class="text-danger small fw-bold text-uppercase d-block mb-1">[Outro]</span>
                        <span class="text-white">IGNITION!</span> <span class="text-warning">(IGNITION!)</span><br>
                        <span class="fst-italic text-secondary small d-block mt-3">
                            (Massive Explosion and Guitar Feedback)
                        </span>
                    </p>

                </div>
            </div>
        </div>

        <div class="card border-success bg-dark shadow-sm mt-5">
            <div class="card-header bg-success bg-opacity-10 border-success text-success fw-bold text-uppercase letter-spacing-1 p-3 d-flex align-items-center">
                <i class="fa-duotone fa-sliders-simple me-2"></i>Archivist Note: The Suno Engineering Guide
            </div>
            <div class="card-body p-4 text-light">
                <p class="mb-3 text-white-75 small">
                    To capture the immense, aggressive scale of a live stadium recording with crowd interaction, the following Suno Style Prompt was used for "Ignition (The Forger's Call)".
                </p>
                <div class="bg-black border border-success border-opacity-50 rounded p-3 font-monospace small text-success">
                    Massive Stadium Rock, Live Industrial Metal, Spoken Word Intro, Heavy Guitar Riff, Thundering Stadium Drums, Rhythmic Foot Stomping, Heavy Percussive Stomp, Call and Response, 60,000 Person Crowd Chant, Arena Ambience, Wall of Sound, Huge Concrete Reverb, Thunderous Low-End, Gravelly Male Vocal, Epic, Aggressive, Cathartic
                </div>
            </div>
        </div>

    </div>
</div>