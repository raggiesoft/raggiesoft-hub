<?php
/**
 * @file overview.php
 * @description The main landing page for "The Stardust Engine" artist profile.
 * @context Serves as the central hub for the band, linking to their lore, discography, and official storefront. Includes the AI Transparency disclaimer.
 * @architecture Standalone PHP page utilizing Bootstrap grid and custom CSS animations (.pulse-icon). Fetches the `albums.json` from the CDN to potentially populate dynamic elements.
 * @maintenance The DSP links (Spotify, Apple, etc.) in the `store-button.php` include must be updated if the band's official URIs change. Keep the transparency notice prominent.
 */
// pages/engine-room/artists/stardust-engine/overview.php
// The Band's "Home" Page

// INLINE: Define the root URL path for the Stardust Engine sub-site
$root = '/engine-room/artists/stardust-engine';

// INLINE: Retrieve the master album data to dynamically generate carousels or grids
// Fetch and decode the Albums JSON
$jsonUrl = $cdnBaseUrl . '/engine-room-records/artists/the-stardust-engine/albums.json?v=' . time();
$jsonData = @file_get_contents($jsonUrl); // @ suppresses warnings if the fetch fails
$eras = $jsonData ? json_decode($jsonData, true) : [];

// Flatten the albums into a single array for the carousel
$allAlbums = [];
if ($eras) {
    foreach ($eras as $eraKey => $eraData) {
        foreach ($eraData['albums'] as $album) {
            $album['era_label'] = $eraData['label'];
            $allAlbums[] = $album;
        }
    }
}
?>

<!-- INLINE: Hero section featuring the band's logo and aesthetic background -->
<div class="border-bottom border-primary border-opacity-50" style="
    position: relative;
    background-image: linear-gradient(rgba(13, 6, 26, 0.7), rgba(13, 6, 26, 0.7)), 
                      url('<?php echo $cdnBaseUrl; ?>/stardust-engine/images/stardust-engine-hero.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
">
    <div class="container-fluid text-center pt-5 pb-5">
        <div class="container pt-5 pb-4">
            <h1 class="display-2 text-uppercase text-glow-primary text-white" 
                style="font-family: 'Audiowide', sans-serif; letter-spacing: 2px;">
                <i class="fa-solid fa-rocket me-3"></i>The Stardust Engine
            </h1>
            <p class="lead fs-3 text-uppercase text-white" 
               style="font-family: 'Exo 2', sans-serif; font-weight: 300; letter-spacing: 4px; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                A musical universe forged in the fires of CPI.
            </p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <wa-callout variant="neutral" appearance="accent" class="shadow-sm d-block">
        <i slot="icon" class="fa-duotone fa-robot-astromech fa-3x text-info d-none d-md-block"></i>
        <div>
            <h4 class="alert-heading h6 fw-bold mb-1 text-uppercase letter-spacing-1"><i class="fa-duotone fa-robot-astromech me-2 text-info d-inline-block d-md-none"></i>Transparency & Timeline Notice</h4>
            <p class="mb-2 small text-body-secondary border-bottom border-secondary-subtle pb-2">
                <strong>The Stardust Engine</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
            </p>
            <p class="mb-0 small text-body-secondary">
                <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 1987) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
                <a href="/about/ai-disclaimer" class="alert-link fw-bold text-info border-bottom border-info text-decoration-none ms-1">Read the full AI Disclaimer.</a>
            </p>
        </div>
    </wa-callout>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="bg-body-tertiary rounded shadow-sm border border-secondary border-opacity-50">
        <div class="row g-0 align-items-center">
            
            <div class="col-lg-6 d-none d-lg-block">
                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/band-members/family-portraits/artist-header-oconnell.jpg" 
                     alt="Ryan, Cassidy, and Holly O'Connell in the studio" 
                     class="img-fluid h-100 object-fit-cover rounded-start"
                     style="min-height: 400px;">
            </div>

            <div class="col-lg-6 p-4 p-md-5 text-center text-lg-start">
                <wa-badge variant="success" appearance="filled" class="text-success-emphasis mb-3 px-3 py-2 text-uppercase letter-spacing-1" style="border: 1px solid var(--bs-success-border-subtle);">
                    <i class="fa-solid fa-satellite-dish me-2 pulse-icon"></i>Now Streaming
                </wa-badge>
                <h2 class="display-5 fw-bold text-uppercase mb-3" style="font-family: 'Impact', sans-serif;">The Engine is Live</h2>
                <p class="lead text-body-secondary mb-4">
                    The complete, uncompromised discography of The Stardust Engine has officially cleared the global distribution network. Support the family and stream their entire catalog.
                </p>
                
                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/band-members/family-portraits/artist-header-oconnell.jpg" 
                     alt="The O'Connell Family" 
                     class="img-fluid rounded mb-4 d-block d-lg-none shadow-sm border border-secondary">

                <style>
                    /* Official Meta Brand Colors */
                    .btn-facebook {
                        background-color: #1877F2;
                        color: #ffffff;
                        border: 1px solid #1877F2;
                        transition: all 0.2s ease-in-out;
                    }
                    .btn-facebook:hover, .btn-facebook:focus {
                        background-color: #166FE5;
                        color: #ffffff;
                        border-color: #166FE5;
                    }
                    /* Ensure the SVG icon scales correctly */
                    .btn-facebook svg {
                        width: 1.25rem;
                        height: 1.25rem;
                    }
                </style>

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <wa-button variant="brand" appearance="accent" size="large" href="https://music.raggiesoft.com/the-stardust-engine" target="_blank" rel="noopener" class="shadow-sm px-4 fw-bold d-inline-flex align-items-center">
                            <i slot="start" class="fa-duotone fa-headphones"></i>The Listening Room
                        </wa-button>

                        <?php
                            $storeProps = [
                                'type' => 'artist', 
                                'size' => 'large',
                                'spotify' => '7Lr6o5qOo1OgVQGumUjFFT', 
                                'apple'   => '1889194363',
                                'amazon'  => 'B0GVGL5RS7',
                                'youtube' => 'UCqtJNbYErxJ7ivveQXVS2mg'
                            ];
                            include ROOT_PATH . '/includes/components/store-button.php';
                        ?>

                        <wa-button variant="neutral" appearance="accent" size="large" href="https://facebook.com/TheStardustEngine" target="_blank" class="btn-facebook shadow-sm px-4 fw-bold d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                            Find us on Facebook
                        </wa-button>
                    </div>
                    <p class="small text-muted mt-3 mb-0">
                        <i class="fa-duotone fa-sliders-up me-1 text-secondary"></i> <strong>Pro Tip:</strong> Click the arrow next to the streaming button to set your default app, or visit <a href="https://music.raggiesoft.com/the-stardust-engine" target="_blank" rel="noopener" class="text-info text-decoration-none fw-bold">music.raggiesoft.com</a> for full lyrics and liner notes.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <wa-card class="card bg-transparent border-primary shadow-glow overflow-hidden w-100" style="border-width: 2px; --body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
        <div class="row g-0">
            <div class="col-md-5 d-flex align-items-center justify-content-center p-4 position-relative" style="background: radial-gradient(circle at center, rgba(13, 202, 240, 0.15) 0%, rgba(0,0,0,0) 70%);">
                <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/fw/engineroom-records/stardust-engine/err-fw-stardust-store.jpg" 
                     alt="The Stardust Engine Official Merchandise" 
                     class="img-fluid rounded shadow-lg"
                     style="max-height: 300px;">
                
                <div class="position-absolute top-0 start-0 m-3">
                    <wa-badge variant="brand" appearance="accent" class="shadow-sm px-3 py-2 text-uppercase letter-spacing-1">
                        <i class="fa-solid fa-store me-2 pulse-icon"></i>Now Open
                    </wa-badge>
                </div>
            </div>

            <div class="col-md-7 p-4 p-md-5 d-flex flex-column justify-content-center">
                <h2 class="display-6 fw-bold text-uppercase text-info mb-3" style="font-family: 'Impact', sans-serif;">
                    The Official Storefront
                </h2>
                <p class="lead text-body-secondary mb-4">
                    Step into the Engine Room. We've officially launched the centralized hub for The Stardust Engine's physical hardware and digital master tapes. 
                </p>
                
                <ul class="list-unstyled text-body-secondary mb-4">
                    <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>Physical Hardware:</strong> Heavyweight apparel, clear mobile shells, and premium decals.</li>
                    <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> <strong>The Audiophile Vault:</strong> Pure, uncompressed WAV master files (LZMA2 compressed).</li>
                    <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Standard Archives:</strong> Highly compatible MP3/OGG payloads with digital lore booklets.</li>
                </ul>

                <div>
                    <wa-button variant="brand" appearance="accent" size="large" pill href="https://store.raggiesoft.com/pages/the-stardust-engine" target="_blank" rel="noopener" class="px-5 fw-bold shadow-lg hover-lift">
                        <i slot="start" class="fa-solid fa-bag-shopping"></i>Shop the Collection
                    </wa-button>
                </div>
            </div>
        </div>
    </wa-card>
</div>
<!-- INLINE: Featured New Release Spotlight — Starfield Calibration (2011) & The Burnout Hiatus Empire -->
<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <wa-card with-header class="w-100 shadow-lg border-info overflow-hidden" style="--header-padding: 0; --body-padding: 0; --wa-panel-bg: var(--bs-tertiary-bg);">
        <div slot="header" class="bg-dark text-white border-bottom border-info p-3 px-4 d-flex flex-wrap justify-content-between align-items-center gap-2 w-100">
            <div class="d-flex align-items-center gap-2">
                <i class="fa-duotone fa-satellite text-info fs-5"></i>
                <span class="fw-bold text-uppercase letter-spacing-1 font-monospace">Featured Release &amp; Lore Spotlight // October 18, 2011</span>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <wa-badge variant="warning" appearance="accent" pill>
                    <i slot="start" class="fa-duotone fa-fire-flame-curved"></i>25 Years of "Ignition" (1986&ndash;2011)
                </wa-badge>
                <wa-badge variant="brand" appearance="filled" pill>
                    <i slot="start" class="fa-duotone fa-stars"></i>The Cosmic Tidal Lock Sound&trade;
                </wa-badge>
            </div>
        </div>

        <div class="p-4 p-lg-5">
            <div class="row align-items-center justify-content-center g-5 mb-4">
                <!-- Album Cover Art -->
                <div class="col-md-5 col-lg-4 text-center">
                    <a href="https://music.raggiesoft.com/the-stardust-engine/2011-starfield-calibration" target="_blank" rel="noopener" class="text-decoration-none d-inline-block">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2011-starfield-calibration/album-art.jpg" 
                             class="img-fluid rounded shadow-lg border border-info hover-lift" 
                             alt="Starfield Calibration Album Art — The Stardust Engine"
                             style="transition: transform 0.3s ease;">
                    </a>
                </div>

                <!-- Album Narrative & Burnout Hiatus Context -->
                <div class="col-md-7 col-lg-8">
                    <h2 class="display-5 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                        Starfield Calibration
                    </h2>
                    <p class="text-info font-monospace small text-uppercase mb-3 fw-bold">
                        <i class="fa-solid fa-calendar-star me-1"></i>Released Oct 18, 2011 &bull; 25th Anniversary of <em>"Ignition (The Forger's Call)"</em> &bull; 80s Cosmic Pop
                    </p>
                    <p class="lead text-body-secondary mb-3">
                        Released on <strong>Tuesday, October 18, 2011</strong>—twenty-five years to the exact day after <em>"Ignition (The Forger's Call)"</em> first detonated inside <strong>The Crucible</strong> on Homecoming Saturday, October 18, 1986—<strong>Starfield Calibration</strong> is the band's silver-anniversary gift to Forger Nation while recharging from their exhausting 2004 post-<em>Progress Street</em> burnout.
                    </p>
                    <p class="text-body mb-4">
                        Rather than rushing back onto a high-friction stadium tour before Ryan and Cassidy were ready, Chief Audio Architect <strong>Cassidy O'Connell</strong> retreated to the family's private Blacksburg studio to rebuild fourteen foundational tracks (1987&ndash;2001) entirely within <a href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" class="fw-bold text-info text-decoration-underline">The Cosmic Tidal Lock Sound&trade;</a>—including retrospective lyric updates celebrating their liberation from Apex Records' <em>"Plastic Sky"</em> and the <strong>first-ever finalized studio master of <em>"Atmosphere"</em></strong> (rescuing the song from its rough 1992 early-90s <em>Friction</em> demo and bringing it back to the lush 1980s sound the band loves so much).
                    </p>

                    <!-- Primary Streaming CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3">
                        <wa-button variant="brand" appearance="accent" size="large" href="https://music.raggiesoft.com/the-stardust-engine/2011-starfield-calibration" target="_blank">
                            <i slot="start" class="fa-duotone fa-headphones"></i>Listen to Starfield Calibration
                        </wa-button>
                        <wa-button variant="warning" appearance="outlined" size="large" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound">
                            <i slot="start" class="fa-duotone fa-satellite"></i>The Cosmic Tidal Lock Sound&trade; Explainer
                        </wa-button>
                    </div>
                </div>
            </div>

            <wa-divider class="my-4"></wa-divider>

            <!-- Behind the Curtain: Holly's 1997-2015 Empire Buildout During the Hiatus -->
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7 d-flex">
                    <wa-callout variant="neutral" appearance="filled-outlined" class="w-100 mb-0">
                        <i slot="icon" class="fa-duotone fa-chess-queen text-warning fs-4"></i>
                        <div class="fw-bold text-uppercase mb-2 text-body-emphasis">
                            While the Band Recharges, Holly Builds an Empire (1997 &rarr; 2011 &rarr; 2015)
                        </div>
                        <p class="small text-body-secondary mb-2">
                            To the outside world, the 2004&ndash;2014 Burnout Hiatus looked like a quiet retreat. Behind closed doors, CEO <strong>Holly O'Connell</strong> was executing an <strong>18-year institutional wealth and liability blueprint</strong> she first conceived in <strong>1997 during <em>Hard Reset</em></strong>—when the <em>"$13.99 War"</em> and the 1996 <em>"American Dream"</em> Jackpot taught her that the family's capital and master catalog had to be ruthlessly siloed and diversified.
                        </p>
                        <p class="small text-body-secondary mb-0">
                            By the time <em>Starfield Calibration</em> dropped in <strong>October 2011</strong>, Holly had already stripped all operational liabilities out of <strong>Engine Room Records, LLC</strong> (2005), spun off <strong>Artists First Management, LLC</strong> and <strong>Stardust Strategic Assets, LLC</strong> (2005), built CPI barrier-free housing via <strong>Stardust Blacksburg, LLC</strong> (2007), and used the 2008&ndash;2010 financial crash to acquire Class-A Century City office towers for cash through <strong>Pacific Rim Properties, LLC</strong> (2009&ndash;2011)—laying the final bricks for <strong>The O'Connell Family Revocable Trust</strong> (2012) and the <strong>August 2015 Delaware Migration</strong> ($2.4B+ AUM).
                        </p>
                    </wa-callout>
                </div>

                <!-- Deep-Dive Lore Navigation Box -->
                <div class="col-lg-5 d-flex">
                    <div class="p-4 rounded border border-secondary border-opacity-50 bg-body w-100 d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="h6 fw-bold text-uppercase font-monospace text-info mb-3">
                                <i class="fa-duotone fa-book-atlas me-2"></i>Deep-Dive Lore Archives
                            </h3>
                            <p class="small text-body-secondary mb-3">
                                Explore the sonic engineering, stadium history, and corporate architecture behind the 2011 hiatus era:
                            </p>
                        </div>
                        <div class="d-grid gap-2">
                            <wa-button variant="brand" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound">
                                <i slot="start" class="fa-duotone fa-wave-sine"></i>The Cosmic Tidal Lock Sound&trade; vs. 80s Cosmic Pop
                            </wa-button>
                            <wa-button variant="warning" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/story/crucible/anthems-and-redline">
                                <i slot="start" class="fa-duotone fa-fire-flame-curved"></i>Oct 18, 1986: Debut of "Ignition" at The Crucible
                            </wa-button>
                            <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/corporate/structure">
                                <i slot="start" class="fa-duotone fa-sitemap"></i>Holly's $2.4B Corporate Web (2015 Org Chart)
                            </wa-button>
                            <wa-button variant="success" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/story/2015-delaware-migration">
                                <i slot="start" class="fa-duotone fa-file-signature"></i>The 2015 Delaware Migration Archive
                            </wa-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </wa-card>
</div>

<!-- INLINE: Featured Album Spotlight — Progress Street (2004) -->
<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="row align-items-center justify-content-center g-5">
        
        <div class="col-md-5 col-lg-4 text-center">
            <a href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="text-decoration-none">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/2004-progress-street/album-art.jpg" 
                     class="img-fluid rounded shadow-lg border border-warning hover-lift" 
                     alt="Progress Street Album Art - The Stardust Engine standing beside their 2004 Prairie Coachworks RLFD30 bus at dusk"
                     style="transition: transform 0.3s ease;">
            </a>
        </div>
        
        <div class="col-md-7 col-lg-6">
            <wa-badge variant="warning" appearance="accent" class="px-3 py-2 text-uppercase letter-spacing-1 shadow-glow mb-3 fw-bold">
                <i class="fa-duotone fa-compact-disc me-2 pulse-icon"></i>2004 Pre-Hiatus Studio Milestone
            </wa-badge>
            <h2 class="display-5 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
                Progress Street
            </h2>
            <p class="text-warning font-monospace small text-uppercase mb-3">
                <i class="fa-solid fa-location-dot me-1"></i>1985 Origins &bull; 2004 Studio Release &bull; Blacksburg, VA
            </p>
            <p class="lead text-body-secondary mb-3">
                A roaring eleven-track 1980s AOR and stadium synth-rock homecoming. Named after Progress Street NE in Blacksburg—where Ryan, Cassidy, Holly, Evan, and Tyler lived in an off-campus rental house while attending <strong>Commonwealth Polytechnic Institute (CPI)</strong>—this record celebrates the unbreakable family bond that carried them from a basement upright piano to sold-out arenas.
            </p>
            <p class="text-body mb-4">
                Featuring the Fourth Quarter stadium stomper <em>"Saturday Night Lights: The Crucible"</em> (cleared under Holly's legendary 1986 <strong>$1.00 Perpetual Mutual Cross-License</strong> with CPI), the full-band AOR resurrection of <em>"Empty Arenas,"</em> and their heartfelt pre-hiatus promise to Forger Nation, <em>"Last Bus Home: Lights Out on Progress Street."</em>
            </p>
            <div class="d-flex flex-wrap gap-3">
                <wa-button variant="warning" appearance="accent" size="large" pill href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="px-4 fw-bold text-dark shadow-glow hover-lift">
                    <i slot="start" class="fa-solid fa-play"></i>Explore Progress Street
                </wa-button>
                <wa-button variant="brand" appearance="outlined" size="large" pill href="https://music.raggiesoft.com/the-stardust-engine/2004-progress-street" target="_blank" rel="noopener" class="px-4 fw-bold hover-lift">
                    <i slot="start" class="fa-duotone fa-headphones"></i>Stream &amp; Read Lyrics
                </wa-button>
            </div>
        </div>
        
    </div>
</div>

<!-- INLINE: The Stardust Fleet Section — Showcasing both custom accessible coaches and linking to the Fleet Roster -->
<div class="container py-5 border-bottom border-secondary border-opacity-25 position-relative" style="z-index: 1050;">
    <div class="text-center mb-5">
        <wa-badge variant="brand" appearance="filled-outlined" pill class="text-info-emphasis px-3 py-2 text-uppercase letter-spacing-1 mb-2">
            <i class="fa-duotone fa-bus me-2"></i>Driven Exclusively by Family &bull; Class A CDL Certified
        </wa-badge>
        <h2 class="display-5 fw-bold text-uppercase text-body-emphasis mb-2" style="font-family: 'Impact', sans-serif;">
            The Stardust Fleet: Rolling Sanctuary
        </h2>
        <p class="lead text-body-secondary mx-auto" style="max-width: 820px;">
            For The Stardust Engine, accessibility and privacy are non-negotiable. Rather than leasing third-party tour buses or hiring outside drivers, <strong>Tyler Wright, Evan Wright, and Holly O'Connell</strong> all earned their <strong>Class A Commercial Driver's Licenses</strong> (with Passenger and Airbrake endorsements)—and the band commissioned two custom-engineered coaches built around Ryan's wheelchair.
        </p>
    </div>

    <div class="row g-4 align-items-stretch">
        <!-- Coach 1: 2002 Sainte-Claire 45H3 ("The Iron Horse") -->
        <div class="col-lg-6 d-flex">
            <wa-card class="card bg-body-tertiary border-info border-opacity-50 shadow-sm w-100 overflow-hidden hover-lift d-flex flex-column" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="position-relative">
                    <a href="/engine-room/corporate/strategic-assets/the-iron-horse">
                        <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/fleet/2002-sainte-claire-45h3-iron-horse.jpg" 
                             class="img-fluid w-100 object-fit-cover border-bottom border-info border-opacity-25" 
                             style="max-height: 280px;"
                             alt="2002 Sainte-Claire 45H3 The Iron Horse 45-foot high-deck luxury tour bus with mid-ship hydraulic wheelchair lift deployed">
                    </a>
                    <wa-badge variant="brand" appearance="outlined" class="text-info position-absolute top-0 end-0 m-3 px-3 py-2 font-monospace">
                        45-FT INTERSTATE FLAGSHIP
                    </wa-badge>
                </div>
                <div class="card-body p-4 d-flex flex-column flex-grow-1">
                    <div class="small text-info font-monospace text-uppercase mb-1">2002 Custom High-Deck Motorcoach &bull; Sainte-Claire, QC</div>
                    <h3 class="h4 fw-bold text-body-emphasis mb-2">Sainte-Claire 45H3 (<em>"The Iron Horse"</em>)</h3>
                    <p class="text-body-secondary small mb-3">
                        Forged in Québec stainless steel with a bespoke Cosmic Nebula exterior wrap, <strong>The Iron Horse</strong> is the family's 54,000-lb coast-to-coast touring fortress. Engineered with a mid-ship <strong>60-inch vertical hydraulic cassette lift</strong>, zero-threshold 38-inch interior corridors, five private family berths, and an onboard acoustic isolation lounge.
                    </p>
                    <div class="mt-auto pt-2 d-flex flex-wrap gap-2">
                        <wa-button variant="brand" appearance="accent" size="small" href="/engine-room/corporate/strategic-assets/the-iron-horse" class="fw-bold text-uppercase text-dark">
                            <i slot="start" class="fa-solid fa-bus"></i>View Fleet Roster &amp; Specs
                        </wa-button>
                        <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/assets/iron-horse/negotiation" class="text-uppercase">
                            <i slot="start" class="fa-solid fa-handshake"></i>2001 Québec Deal
                        </wa-button>
                        <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/assets/iron-horse/delivery" class="text-uppercase">
                            <i slot="start" class="fa-solid fa-truck-ramp-box"></i>2002 Delivery
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- Coach 2: 2004 Prairie Coachworks RLFD30 ("Progress Street Shuttle") -->
        <div class="col-lg-6 d-flex">
            <wa-card class="card bg-body-tertiary border-warning border-opacity-50 shadow-sm w-100 overflow-hidden hover-lift d-flex flex-column" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                <div class="position-relative">
                    <a href="/engine-room/corporate/strategic-assets/the-iron-horse">
                        <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/fleet/2004-prairie-coachworks-rlfd30.jpg" 
                             class="img-fluid w-100 object-fit-cover border-bottom border-warning border-opacity-25" 
                             style="max-height: 280px;"
                             alt="2004 Prairie Coachworks RLFD30 30-foot restyled low-floor shuttle bus with kneeling front ADA ramp and PROGRESS STREET amber LED sign">
                    </a>
                    <wa-badge variant="warning" appearance="outlined" class="text-warning position-absolute top-0 end-0 m-3 px-3 py-2 font-monospace">
                        30-FT LOW-FLOOR LAUNCH UNIT
                    </wa-badge>
                </div>
                <div class="card-body p-4 d-flex flex-column flex-grow-1">
                    <div class="small text-warning font-monospace text-uppercase mb-1">2004 Restyled Low-Floor Diesel &bull; Launch Customer</div>
                    <h3 class="h4 fw-bold text-body-emphasis mb-2">Prairie Coachworks RLFD30 (<em>"Progress Street"</em>)</h3>
                    <p class="text-body-secondary small mb-3">
                        Immortalized on the cover of <em>Progress Street</em>, The Stardust Engine became <strong>Prairie Coachworks' very first launch customer</strong> for the restyled 30-foot low-floor coach. Built with a front-door-only executive layout and pneumatic kneeling suspension, it unfolds a simple <strong>1:6 front flip-out ADA ramp</strong> right onto the Blacksburg curb so Ryan can roll aboard in seconds.
                    </p>
                    <div class="mt-auto pt-2 d-flex flex-wrap gap-2">
                        <wa-button variant="warning" appearance="accent" size="small" href="/engine-room/corporate/strategic-assets/the-iron-horse" class="fw-bold text-uppercase text-dark">
                            <i slot="start" class="fa-solid fa-bus"></i>Explore the Fleet Archive
                        </wa-button>
                        <wa-button variant="neutral" appearance="outlined" size="small" href="/engine-room/artists/stardust-engine/discography/2004-progress-street" class="text-uppercase">
                            <i slot="start" class="fa-solid fa-compact-disc"></i>Progress Street Lore
                        </wa-button>
                    </div>
                </div>
            </wa-card>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <wa-card class="h-100 hover-lift w-100">
                <div class="d-flex flex-column text-center p-2">
                    <div class="mb-3 text-primary"><i class="fa-duotone fa-users fa-3x"></i></div>
                    <h3 class="fw-bold text-primary">The Band</h3>
                    <p class="text-secondary small">
                        Meet the five family members who started it all: Cassidy, Ryan, Holly, Evan, and Tyler.
                    </p>
                    <wa-button href="<?php echo $root; ?>/band" variant="brand" appearance="outlined" class="mt-auto">View Bios</wa-button>
                </div>
            </wa-card>
        </div>
        <div class="col-lg-4">
            <wa-card class="h-100 hover-lift w-100">
                <div class="d-flex flex-column text-center p-2">
                    <div class="mb-3 text-danger"><i class="fa-duotone fa-book-atlas fa-3x"></i></div>
                    <h3 class="fw-bold text-danger">The Lore</h3>
                    <p class="text-secondary small">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of independence.
                    </p>
                    <wa-button href="<?php echo $root; ?>/story" variant="danger" appearance="outlined" class="mt-auto">Read History</wa-button>
                </div>
            </wa-card>
        </div>
        <div class="col-lg-4">
            <wa-card class="h-100 hover-lift w-100">
                <div class="d-flex flex-column text-center p-2">
                    <div class="mb-3 text-success"><i class="fa-duotone fa-compact-disc fa-3x"></i></div>
                    <h3 class="fw-bold text-success">The Discography</h3>
                    <p class="text-secondary small">
                        Explore the full catalog, from the polished 80s pop to the raw, independent rock of their rebirth.
                    </p>
                    <wa-button href="<?php echo $root; ?>/discography" variant="success" appearance="outlined" class="mt-auto">View Albums</wa-button>
                </div>
            </wa-card>
        </div>
    </div>
</div>

<style>
.hover-lift { transition: transform 0.2s; }
.hover-lift:hover { transform: translateY(-5px); }

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.4; }
    100% { opacity: 1; }
}
.pulse-icon {
    animation: pulse 2s infinite;
}


</style>
