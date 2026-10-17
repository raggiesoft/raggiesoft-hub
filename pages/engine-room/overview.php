<?php
/**
 * Engine Room Records - Overview Hub
 *
 * This file serves as the main fan-centric landing page for the Engine Room Records collective.
 * It dynamically fetches and displays the master catalog and roster data from the CDN JSON records.
 *
 * Architecture Notes:
 * - Employs robust PHP error suppression (`@file_get_contents`) when fetching remote JSON data to handle CDN hiccups.
 * - Utilizes custom CSS, tailored for both light and dark mode toggling (`[data-bs-theme="light"]`).
 * - Includes structured schema.org JSON-LD data for SEO and organization identification.
 * - Uses Web Components (`wa-card`, `wa-button`) and Bootstrap 5 utilities for layout.
 *
 * Maintainer Note: If adding new artists or albums, ensure the underlying CDN JSON structures
 * (`master-catalog.json`, `albums.json`) conform to the expected format here, or this page will not display them.
 */

// pages/engine-room/overview.php
// The Fan-Centric Hub of Engine Room Records.

$pageTitle = "Engine Room Records™ | Loud. Raw. Real.";

// Fetch the latest albums dynamically from the master catalog via CDN
$masterCatalogPath = $cdnBaseUrl . '/engine-room-records/json/master-catalog.json';
$masterCatalogData = @file_get_contents($masterCatalogPath);
$masterCatalog = $masterCatalogData ? json_decode($masterCatalogData, true) : [];

$artistsMap = [];
if (is_array($masterCatalog)) {
    foreach ($masterCatalog as $track) {
        $slug = $track['artistSlug'] ?? '';
        $persona = $track['artistPersona'] ?? '';
        if (!empty($slug) && !empty($persona)) {
            $artistsMap[$slug] = $persona;
        }
    }
}

$latestAlbums = [];
foreach ($artistsMap as $slug => $persona) {
    $albumsPath = $cdnBaseUrl . "/engine-room-records/artists/{$slug}/albums.json";
    $albumsDataRaw = @file_get_contents($albumsPath);
    if ($albumsDataRaw) {
        $albumsData = json_decode($albumsDataRaw, true);
        
        $allAlbums = [];
        foreach ($albumsData as $eraKey => $eraData) {
            if (isset($eraData['albums'])) {
                foreach ($eraData['albums'] as $album) {
                    $allAlbums[] = $album;
                }
            }
        }
        
        usort($allAlbums, function($a, $b) {
            $yearA = intval($a['year'] ?? 0);
            $yearB = intval($b['year'] ?? 0);
            return $yearB - $yearA;
        });
        
        if (count($allAlbums) > 0) {
            $latest = $allAlbums[0];
            $latest['artistPersona'] = $persona;
            $latest['artistSlug'] = $slug;
            $latestAlbums[] = $latest;
        }
    }
}

// Sort latest albums by narrative year descending
usort($latestAlbums, function($a, $b) {
    $yearA = intval($a['year'] ?? 0);
    $yearB = intval($b['year'] ?? 0);
    return $yearB - $yearA;
});
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Engine Room Records™",
      "parentOrganization": {
        "@type": "Organization",
        "name": "RaggieSoft Media™"
      },
      "description": "An independent creative collective dedicated to narrative-driven rock, industrial soundscapes, and symphonic metal. Note: Engine Room Records is a closed private label; unsolicited submissions are not accepted."
    },
    {
      "@type": "CollectionPage",
      "name": "Engine Room Records Roster",
      "description": "Directory of active musical projects including The Stardust Engine™, Fractured Prisms™, The Paper Wall™, Crimson Node™, Mana Canvas™, and The Arctic Symphony Project™."
    }
  ]
}
</script>

<style>
    /* FAN HUB STYLING */
    .engine-hero {
        /* background removed in favor of full-width img tag */ ?>/stardust-engine/images/studio-rack.jpg') center/cover;
        background-color: #0d1117; /* Fallback */
        border-bottom: 4px solid var(--bs-primary);
    }
    
    /* Force black logos to white on permanently dark backgrounds */
    .logo-invert {
        filter: invert(1) grayscale(100%) brightness(100%);
    }

    /* Responsive Hero Logo */
    .hero-logo {
        height: 110px; /* Base size for mobile */
        opacity: 0.85;
        transition: height 0.3s ease-in-out;
    }

    @media (min-width: 768px) {
        .hero-logo {
            height: 150px; /* Tablet */
        }
    }

    @media (min-width: 992px) {
        .hero-logo {
            height: 190px; /* Desktop */
        }
    }

    .roster-card {
        background-color: #15181c;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    /* Used for disabled roster cards */
    .roster-card.inactive {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .roster-card:hover:not(.inactive) {
        transform: translateY(-5px);
        border-color: var(--bs-primary); 
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); 
    }
    
    [data-bs-theme="light"] .roster-card {
        background-color: #ffffff;
        border: 1px solid var(--bs-border-color);
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    [data-bs-theme="light"] .roster-card:hover:not(.inactive) {
        box-shadow: 0 10px 20px rgba(0,0,0,0.1); 
    }

    .b2b-routing-bar {
        background: repeating-linear-gradient(
            45deg,
            var(--bs-dark),
            var(--bs-dark) 10px,
            #1a1d20 10px,
            #1a1d20 20px
        );
        border-top: 2px solid var(--bs-secondary);
        border-bottom: 2px solid var(--bs-secondary);
    }
    
    /* Hover Helper */
    .hover-primary:hover {
        color: var(--bs-primary) !important;
    }
</style>

<div class="engine-hero mb-5 shadow-lg text-white wa-theme-dark w-100" data-bs-theme="dark" style="background-color: #0d1117;">
    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/images/err-hero.jpg" 
         alt="Engine Room Records - A cinematic ensemble cast across genres" 
         class="w-100 object-fit-cover border-bottom border-primary" style="aspect-ratio: 16/9; max-height: 60vh;">
         
    <div class="container text-center py-5">
        <h1 class="visually-hidden">Engine Room Records</h1>
        <p class="lead tech-font opacity-75 mb-4 mx-auto" style="max-width: 700px;">
            Loud. Raw. Real. An independent creative collective dedicated to narrative-driven rock, industrial soundscapes, and symphonic metal.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <wa-button href="https://music.raggiesoft.com" target="_blank" variant="brand" appearance="accent" pill class="fw-bold text-uppercase tech-font shadow">
                <i class="fa-duotone fa-headphones" slot="start" aria-hidden="true"></i>Enter The Listening Room
            </wa-button>
            <wa-button href="#latest-transmissions" variant="brand" appearance="outlined" pill class="fw-bold text-uppercase tech-font">
                <i class="fa-solid fa-compact-disc" slot="start" aria-hidden="true"></i>Latest Transmissions
            </wa-button>
            <wa-button href="#roster" variant="neutral" appearance="outlined" pill class="fw-bold text-uppercase tech-font">
                <i class="fa-solid fa-users" slot="start" aria-hidden="true"></i>The Roster
            </wa-button>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <wa-callout variant="neutral" appearance="accent" class="shadow-sm">
        <i slot="icon" class="fa-duotone fa-robot-astromech fa-2x text-info"></i>
        <h4 class="h6 fw-bold mb-1 text-uppercase letter-spacing-1">Transparency &amp; Timeline Notice</h4>
        <p class="mb-2 small text-body-secondary border-bottom border-secondary-subtle pb-2">
            <strong>Engine Room Records</strong> is a multimedia storytelling and world-building project. The music is generated using a commercial Suno license, with conceptual lore, characters, and lyrics co-written by human direction and Gemini.
        </p>
        <p class="mb-0 small text-body-secondary">
            <strong>Dual Timelines:</strong> To maintain our immersive fictional universe while strictly complying with modern digital distribution standards, our catalog features two timelines: a fictional <strong>Narrative Era</strong> (e.g., 1987) tied to the band's lore, and a real-world <strong>Actual Release Date</strong> (e.g., 2026) reflecting when the audio was officially distributed to streaming platforms.
            <a href="/about/ai-disclaimer" class="fw-bold text-info border-bottom border-info text-decoration-none ms-1">Read the full AI Disclaimer.</a>
        </p>
    </wa-callout>
</div>

<div class="container pb-5">
    
        <div class="row mb-4" id="latest-transmissions">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h4 text-uppercase fw-bold mb-0 text-body-emphasis">
                <i class="fa-duotone fa-satellite-dish me-2 text-primary"></i>Now Spinning
            </h2>
            <a href="https://music.raggiesoft.com" target="_blank" rel="noopener" class="small text-primary text-decoration-none fw-bold font-monospace">
                Full Catalog on music.raggiesoft.com <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
            </a>
        </div>
    </div>

    <style>
        wa-card::part(base) { height: 100%; display: flex; flex-direction: column; }
        wa-card::part(body) { flex: 1 1 auto; display: flex; flex-direction: column; }
    </style>

    
        <div class="row g-4 mb-5 justify-content-center">
        <?php foreach ($latestAlbums as $album):
            $albumFolder = $album['folder'] ?? (!empty($album['url']) ? basename($album['url']) : '');
            $listeningRoomUrl = !empty($albumFolder)
                ? "https://music.raggiesoft.com/{$album['artistSlug']}/{$albumFolder}"
                : "https://music.raggiesoft.com/{$album['artistSlug']}";
            $hasHubLore = !empty($album['url']) && file_exists(ROOT_PATH . '/pages' . $album['url'] . '.php');
        ?>
        <div class="col-12 col-xl-6 d-flex align-items-stretch">
            <wa-card class="h-100 border border-secondary shadow-sm bg-transparent w-100 p-0 hover-card overflow-hidden" style="--wa-panel-bg: transparent; --body-padding: 0; --header-padding: 0;">
                <div class="row g-0 h-100">
                    <div class="col-sm-5 col-md-4 col-xl-5">
                        <?php if (!empty($album['img'])): ?>
                            <img src="<?php echo htmlspecialchars($album['img']); ?>" class="img-fluid h-100 object-fit-cover border-end border-secondary-subtle" alt="<?php echo htmlspecialchars($album['title']); ?> Album Art" style="min-height: 100%;">
                        <?php else: ?>
                            <div class="bg-dark d-flex align-items-center justify-content-center border-end border-secondary-subtle h-100" style="min-height: 250px;">
                                <i class="fa-duotone fa-waveform-lines fa-4x text-danger opacity-50"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-7 col-md-8 col-xl-7 d-flex flex-column bg-body-tertiary">
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <wa-badge variant="warning" appearance="filled" class="mb-2 font-monospace" style="align-self: flex-start;"><?php echo htmlspecialchars($album['year'] ?? 'TBA'); ?> RELEASE</wa-badge>
                            <h3 class="h5 fw-bold text-uppercase mb-1"><?php echo htmlspecialchars($album['title']); ?></h3>
                            <p class="text-primary small fw-bold text-uppercase mb-3"><?php echo htmlspecialchars($album['artistPersona']); ?>&trade;</p>
                            <p class="small text-body-secondary mb-0">
                                <?php echo htmlspecialchars($album['description'] ?? ''); ?>
                            </p>
                        </div>
                        <div class="px-4 pb-4 mt-auto d-flex flex-column gap-2">
                            <wa-button href="<?php echo htmlspecialchars($listeningRoomUrl); ?>" target="_blank" variant="brand" pill class="w-100">
                                <i class="fa-duotone fa-headphones" slot="start"></i> Listen &amp; Read Lyrics
                            </wa-button>
                            <?php if ($hasHubLore): ?>
                                <wa-button href="<?php echo htmlspecialchars($album['url']); ?>" variant="neutral" appearance="outlined" pill class="w-100">
                                    <i class="fa-duotone fa-book-open-cover" slot="start"></i> Studio Lore &amp; Liner Notes
                                </wa-button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </wa-card>
        </div>
        <?php endforeach; ?>
    </div>

<div class="row mb-4 mt-5" id="roster">
        <div class="col-12 d-flex justify-content-between align-items-end border-bottom border-secondary-subtle pb-2">
            <h2 class="h4 text-uppercase fw-bold mb-0 text-body-emphasis">
                <i class="fa-duotone fa-users me-2 text-info"></i>The Collective
            </h2>
            <a href="/engine-room/artists" class="small text-info text-decoration-none fw-bold font-monospace">
                View Full Artist Directory <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>

    
    <div class="row g-4 mb-5">

        <!-- ERR-001: The Stardust Engine -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                             alt="The Stardust Engine" style="height: 80px; object-fit: contain;">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">The Stardust Engine&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        80s Synth-Pop / Progressive Rock. The founding family unit that built the fortress.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/engine-room/artists/stardust-engine" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Lore Archive</wa-button>
                        <wa-button href="https://music.raggiesoft.com/the-stardust-engine" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-002: Fractured Prisms -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/fractured-prisms/band-logo.jpg" 
                             alt="Fractured Prisms" style="height: 80px; object-fit: contain;" class="rounded">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">Fractured Prisms&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        British Synth-Pop and gaslamp-lit 1980s progressive rock operas from the Maryland sanctuary.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/engine-room/artists/fractured-prisms" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Lore Archive</wa-button>
                        <wa-button href="https://music.raggiesoft.com/fractured-prisms" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-003: The Paper Wall -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-paper-wall/band-logo.jpg" 
                             alt="The Paper Wall" style="height: 80px; object-fit: contain;" class="rounded">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">The Paper Wall&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        Narrative-driven Literary Rock Operas. The architects of <em>Static &amp; Silence</em> and the Safe Harbor trust.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/engine-room/artists/the-paper-wall" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Lore Archive</wa-button>
                        <wa-button href="https://music.raggiesoft.com/the-paper-wall" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-004: Crimson Node -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/crimson-node/band-logo.jpg" 
                             alt="Crimson Node" style="height: 80px; object-fit: contain;" class="rounded">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">Crimson Node&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        Stadium synth-pop and heavy progressive rock fueled by the Albemarle County DevOps family phalanx.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/engine-room/artists/crimson-node" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Lore Archive</wa-button>
                        <wa-button href="https://music.raggiesoft.com/crimson-node" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-005: Mana Canvas -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/mana-canvas/band-logo.jpg" 
                             alt="Mana Canvas" style="height: 80px; object-fit: contain;" class="rounded">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">Mana Canvas&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        Symphonic Fantasy Rock &amp; 16-bit Acoustic Alchemy. The musical voice of the <em>Aethel Saga</em>.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/raggiesoft-books/aethel-saga" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Saga Lore</wa-button>
                        <wa-button href="https://music.raggiesoft.com/mana-canvas" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

        <!-- ERR-006: The Arctic Symphony Project -->
        <div class="col-md-6 col-xl-4">
            <wa-card class="roster-card h-100 w-100 text-center">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/the-arctic-symphony-project/band-logo.jpg" 
                             alt="The Arctic Symphony Project" style="height: 80px; object-fit: contain;" class="rounded">
                    </div>
                    <h3 class="h6 fw-bold text-body-emphasis text-uppercase mb-2">The Arctic Symphony Project&trade;</h3>
                    <p class="text-body-secondary small mb-3 flex-grow-1">
                        Holiday Symphonic Rock &amp; Neoclassical Metal. Sweeping orchestral strings meet heavy distortion.
                    </p>
                    <div class="d-flex gap-2 justify-content-center mt-auto mb-2">
                        <wa-button href="/engine-room/artists/the-arctic-symphony-project" size="small" variant="brand" appearance="outlined" pill class="font-monospace">Lore Archive</wa-button>
                        <wa-button href="https://music.raggiesoft.com/the-arctic-symphony-project" target="_blank" size="small" variant="brand" appearance="accent" pill class="font-monospace"><i class="fa-duotone fa-headphones" slot="start"></i>Listen</wa-button>
                    </div>
                    <div class="mt-1">
                        <wa-badge variant="success" appearance="filled-outlined" class="font-monospace"><i class="fa-solid fa-signal-stream me-1"></i> Live on DSPs</wa-badge>
                    </div>
                </div>
            </wa-card>
        </div>

    </div>

</div>

<div class="b2b-routing-bar py-5 text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h3 class="h4 fw-bold text-uppercase text-warning mb-2">
                    <i class="fa-solid fa-briefcase me-2"></i>Industry &amp; Licensing
                </h3>
                <p class="small text-white-75 mb-3" style="line-height: 1.6;">
                    Looking to clear a track for a film, game, or commercial broadcast? All commercial synchronization, master use clearances, and DSP verification operations are handled centrally by <strong>RaggieSoft Media&trade;</strong>. 
                </p>
                <div class="d-flex align-items-center bg-black bg-opacity-50 p-2 rounded border border-secondary border-opacity-50 d-inline-flex">
                    <i class="fa-solid fa-circle-info text-info me-2"></i>
                    <span class="small font-monospace text-white-50">Note: All commercial licenses are strictly <strong>Non-Exclusive</strong> due to AI-assisted audio generation guidelines.</span>
                </div>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="d-flex flex-column gap-3 align-items-lg-end">
                    <wa-button href="/raggiesoft-media/licensing" variant="warning" appearance="accent" class="fw-bold text-uppercase">
                        Master Licensing Portal <i class="fa-solid fa-arrow-right" slot="end"></i>
                    </wa-button>
                    <wa-button href="/engine-room/dsp-verification" variant="neutral" appearance="outlined" class="fw-bold text-uppercase">
                        DSP Verification Desk <i class="fa-solid fa-shield-check" slot="end"></i>
                    </wa-button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <wa-callout variant="neutral" appearance="accent" class="shadow-sm py-3">
                <i slot="icon" class="fa-duotone fa-hand-palm text-secondary fs-3"></i>
                <h5 class="fw-bold text-uppercase mb-2 text-body-emphasis">A Closed Collective</h5>
                <p class="small text-body-secondary mb-0">
                    Engine Room Records is a private, self-publishing imprint created by Michael P. Ragsdale to manage his generative AI music portfolio. <strong>We do not sign outside artists and we do not accept unsolicited demos or submissions.</strong> Any unsolicited media sent to our servers is automatically and permanently deleted unread.
                </p>
            </wa-callout>
        </div>
    </div>
</div>