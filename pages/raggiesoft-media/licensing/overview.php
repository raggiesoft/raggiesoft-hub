<?php
/**
 * RaggieSoft Master Licensing Portal
 *
 * ARCHITECTURE & CONTEXT:
 * This page serves as the master gateway outlining the hybrid licensing model 
 * for RaggieSoft Media. It explains the dual-license approach:
 * 1. MIT License for code, scripts (Elara CMS), and web architecture.
 * 2. CC BY-SA 4.0 for narrative IP, lore (The Stardust Engine, Knox, Aethel), and worldbuilding.
 * 
 * It also acts as a funnel to the Commercial Licensing portal for B2B synchronization requests.
 *
 * UI/UX ARCHITECTURE:
 * - Employs a Frutiger Aero / Dark Aero Glass design language.
 * - Uses Web Awesome (<wa-card>, <wa-button>, <wa-details>) for semantic, interactive components.
 * - Features custom CSS for glassmorphism effects (`btn-glass-info`, `aero-modal-content`) 
 *   and keyboard accessibility (WCAG focus outlines).
 * - Implements a responsive grid layout mapping the licensing structures clearly.
 *
 * MAINTENANCE NOTES:
 * - Update the copyright year logic `date("Y")` if licensing terms change, but it auto-updates currently.
 * - Ensure links to external licenses (e.g., CC BY-SA deed) remain active.
 * - Do NOT alter the DOM structure of the Web Awesome components as they are integral 
 *   to the design system.
 */

// pages/raggiesoft-media/licensing/overview.php
// Master gateway for MIT, CC BY-SA 4.0, and Commercial clearances.
// Updated: Frutiger Aero / Dark Aero Glass Architecture

$pageTitle = "Master Licensing Portal | RaggieSoft Media";
?>

<style>
    /* WCAG: Focus Outline for Keyboard Navigators */
    a:focus-visible, button:focus-visible {
        outline: 3px solid var(--bs-primary) !important;
        outline-offset: 4px;
        border-radius: 50rem; /* Matches pill shapes */
    }

    /* Custom Glass Buttons for Secondary Actions */
    .btn-glass-info {
        background: rgba(0, 195, 255, 0.1);
        border: 1px solid rgba(0, 195, 255, 0.4);
        color: var(--bs-info) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-info:hover, .btn-glass-info:focus {
        background: rgba(0, 195, 255, 0.2);
        box-shadow: 0 0 12px rgba(0, 195, 255, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }

    .btn-glass-warning {
        background: rgba(255, 179, 0, 0.1);
        border: 1px solid rgba(255, 179, 0, 0.4);
        color: var(--bs-warning) !important;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .btn-glass-warning:hover, .btn-glass-warning:focus {
        background: rgba(255, 179, 0, 0.2);
        box-shadow: 0 0 12px rgba(255, 179, 0, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transform: translateY(-1px);
    }

    /* Aero Modal Window */
    .aero-modal-content {
        background-color: var(--raggie-glass-bg) !important;
        backdrop-filter: blur(24px) saturate(150%);
        -webkit-backdrop-filter: blur(24px) saturate(150%);
        border: 1px solid var(--raggie-glass-border) !important;
        border-radius: 12px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.3), inset 0 1px 0 var(--raggie-gloss-highlight);
        color: var(--bs-body-color) !important;
    }

    [data-bs-theme="dark"] .aero-modal-content {
        box-shadow: 0 16px 48px rgba(0, 0, 0, 0.5), inset 0 1px 0 var(--raggie-gloss-highlight), 0 0 20px rgba(0, 229, 255, 0.15);
    }
</style>

<div class="border-bottom border-secondary-subtle pb-4 mb-5 pt-3 text-center text-md-start">
    <h1 class="display-5 fw-bold brand-font text-uppercase mb-3 text-glow-primary" style="letter-spacing: 2px;">Licensing & Copyright</h1>
    <p class="lead text-body-secondary tech-font" style="max-width: 800px;">
        RaggieSoft Media operates under a hybrid licensing model. We enforce open-source software and shared creative culture for independent use, while offering streamlined commercial clearances for enterprise productions.
    </p>
</div>

<div class="row g-4 mb-5">
    
    <div class="col-md-6">
        <wa-card class="bg-hud-blue h-100 w-100 shadow-sm transition-base hover-lift" style="--border-color: var(--raggie-glass-border);">
            <div slot="header" class="p-4 border-bottom" style="border-color: var(--raggie-glass-border) !important;">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-osi fa-2x me-3 text-primary" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,130,230,0.4));"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-uppercase text-body-emphasis">The Architecture</h2>
                        <span class="d-block text-secondary font-monospace small">Code, Scripts, & Systems</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column h-100 p-4">
                <div class="text-uppercase small fw-bold mb-3 text-primary"><i class="fa-solid fa-code-commit me-2"></i>MIT License</div>
                <p class="text-body-emphasis mb-3">
                    All source code, proprietary routing scripts (Elara CMS), and web architecture patterns developed by RaggieSoft are distributed open-source.
                </p>
                <p class="small text-body-secondary flex-grow-1">
                    You are free to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the software, provided the original copyright notice is included.
                </p>
                <wa-details summary="Read Full MIT License" class="mt-auto pt-3 border-top border-secondary-subtle">
                    <div class="font-monospace small text-body-secondary mt-3">
                        <p class="fw-bold text-body-emphasis">Copyright &copy; <?php echo date("Y"); ?> Michael P. Ragsdale / RaggieSoft Media</p>
        <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
        <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
        <div class="p-3 mt-4 rounded-3" style="background: rgba(220, 53, 69, 0.1); border: 1px solid rgba(220, 53, 69, 0.2);">
            <p class="text-uppercase fw-bold text-danger mb-0 text-center" style="letter-spacing: 0.5px;">
                The Software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement.
            </p>
                    </div>
                </div>
                </wa-details>
            </div>
        </wa-card>
    </div>

    <div class="col-md-6">
        <wa-card class="bg-hud-warning h-100 w-100 shadow-sm transition-base hover-lift" style="--border-color: var(--raggie-glass-border);">
            <div slot="header" class="p-4 border-bottom" style="border-color: var(--raggie-glass-border) !important;">
                <div class="d-flex align-items-center">
                    <i class="fa-brands fa-creative-commons fa-2x me-3 text-warning" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(255,179,0,0.4));"></i>
                    <div>
                        <h2 class="h5 mb-0 fw-bold text-uppercase text-body-emphasis">The Narrative</h2>
                        <span class="d-block text-secondary font-monospace small">Stories, Music, & Worldbuilding</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column h-100 p-4">
                <div class="text-uppercase small fw-bold mb-3 text-warning"><i class="fa-brands fa-creative-commons me-2"></i>CC BY-SA 4.0</div>
                <p class="text-body-emphasis mb-3">
                    All creative writing, fictional universes (<em>The Stardust Engine, Knox, Aethel</em>), and lore documentation are licensed under Creative Commons.
                </p>
                <ul class="list-unstyled small text-body-secondary mb-4 flex-grow-1">
                    <li class="mb-2"><i class="fa-solid fa-check text-success me-2" aria-hidden="true"></i><strong>Share & Adapt:</strong> You may redistribute and remix the material.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>Attribution:</strong> You must explicitly credit <em>RaggieSoft Media</em>.</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-exclamation text-warning me-2" aria-hidden="true"></i><strong>ShareAlike:</strong> Derivative works must use the same license.</li>
                </ul>
                <wa-button href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" variant="warning" size="small" class="mt-auto fw-bold">
                    <i slot="start" class="fa-solid fa-external-link" aria-hidden="true"></i>View CC BY-SA 4.0 Deed
                </wa-button>
            </div>
        </wa-card>
    </div>

</div>

<wa-card id="trademarks" class="bg-hud-base w-100 shadow-sm mb-5 p-2" style="--border-color: var(--raggie-glass-border);">
    <div class="p-4 p-lg-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3 border-bottom border-secondary-subtle pb-3">
            <div>
                <h2 class="h4 fw-bold mb-1 text-uppercase text-glow-primary">
                    <i class="fa-duotone fa-satellite me-2 text-info" aria-hidden="true"></i>Trademarks &amp; Sonic Nomenclature
                </h2>
                <span class="font-monospace small text-body-secondary">Proprietary Brand Identifiers (&trade;) vs. Open Generic Genre Terms</span>
            </div>
            <wa-badge variant="brand" appearance="accent" pill class="font-monospace">MICHAEL P. RAGSDALE / RAGGIESOFT MEDIA</wa-badge>
        </div>
        <p class="text-body-secondary small mb-4">
            While RaggieSoft Media's code is MIT-licensed and our narrative lore is shared under CC BY-SA 4.0, <strong>trademarks</strong> are maintained separately to distinguish official <strong>Michael P. Ragsdale / RaggieSoft Media / Engine Room Records&trade;</strong> releases from third-party works. We pair our audio trademark with an open, generic genre term that anyone in the community is free to use:
        </p>
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="p-3 rounded-3 h-100 border border-warning border-opacity-50" style="background: rgba(255, 179, 0, 0.06);">
                    <div class="text-uppercase small fw-bold text-warning mb-2">
                        <i class="fa-solid fa-shield-halved me-2" aria-hidden="true"></i>Proprietary Trademark: "The Cosmic Tidal Lock Sound&trade;"
                    </div>
                    <p class="small text-body-secondary mb-0">
                        <strong>The Cosmic Tidal Lock Sound&trade;</strong> (and <strong>Cosmic Tidal Lock Sound&trade;</strong>) is a common-law trademark claimed by <strong>Michael P. Ragsdale</strong> (d/b/a <strong>RaggieSoft Media</strong> and <strong>Engine Room Records&trade;</strong>) to identify official RaggieSoft audio releases engineered using our zero-gravity synth-pop production profile (such as <em>Hard Reset</em>, <em>Moon 1: Sanctuary (Zero-G)</em>, and <em>Starfield Calibration</em>).
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 h-100 border border-success border-opacity-50" style="background: rgba(25, 135, 84, 0.08);">
                    <div class="text-uppercase small fw-bold text-success mb-2">
                        <i class="fa-solid fa-check-circle me-2" aria-hidden="true"></i>Open Generic Genre Name: "80s Cosmic Pop"
                    </div>
                    <p class="small text-body-secondary mb-0">
                        <strong>80s Cosmic Pop</strong> (as well as descriptive phrases like <em>"Zero-G Synth-Pop"</em> or <em>"Cosmic Synth-Rock"</em>) is the <strong>generic, open genre name</strong> that Michael P. Ragsdale explicitly welcomes and encourages fellow musicians, prompt engineers, playlist curators, and fans to use freely for their own tracks and projects without restriction.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center text-md-end">
            <wa-button href="/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound" variant="brand" appearance="accent" size="small" class="fw-bold text-uppercase">
                <i slot="start" class="fa-duotone fa-book-atlas" aria-hidden="true"></i>Read Full Cosmic Tidal Lock Sound&trade; Explainer &amp; Suno Guide
            </wa-button>
        </div>
    </div>
</wa-card>

<!-- [AUDIO TRI-LICENSE FRAMEWORK & ZERO CONTENT-ID AMBUSH POLICY] -->
<wa-card id="tri-license-audio" class="bg-hud-base w-100 shadow-sm mb-5 p-2" style="--border-color: var(--raggie-glass-border);">
    <div class="p-4 p-lg-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3 border-bottom border-secondary-subtle pb-3">
            <div>
                <h2 class="h4 fw-bold mb-1 text-uppercase text-glow-primary">
                    <i class="fa-duotone fa-compact-disc me-2 text-warning" aria-hidden="true"></i>Engine Room Records&trade; Audio Tri-License Model
                </h2>
                <span class="font-monospace small text-body-secondary">CC BY-SA 4.0 &bull; Standard DSP Consumer License &bull; Direct Commercial Non-Exclusive Sync</span>
            </div>
            <wa-badge variant="success" appearance="accent" pill class="font-monospace">
                <i slot="start" class="fa-solid fa-shield-check" aria-hidden="true"></i>ZERO CONTENT-ID AMBUSH GUARANTEE
            </wa-badge>
        </div>

        <p class="text-body-secondary small mb-4">
            Every musical recording released by <strong>Engine Room Records&trade;</strong> (including <em>The Stardust Engine</em>, <em>Fractured Prisms</em>, <em>The Paper Wall</em>, <em>Crimson Node</em>, <em>Mana Canvas</em>, and <em>The Arctic Symphony Project</em>) is <strong>tri-licensed</strong> so listeners, independent video creators, and commercial studios each have a frictionless legal pathway:
        </p>

        <div class="row g-4 mb-4">
            <!-- Prong 1: CC BY-SA 4.0 -->
            <div class="col-md-4">
                <div class="p-3 rounded-3 h-100 border border-warning border-opacity-50" style="background: rgba(255, 179, 0, 0.06);">
                    <div class="text-uppercase small fw-bold text-warning mb-2">
                        <i class="fa-brands fa-creative-commons me-2" aria-hidden="true"></i>1. CC BY-SA 4.0 (Open Culture)
                    </div>
                    <p class="small text-body-secondary mb-0">
                        Use, share, remix, and feature our music in independent YouTube videos, Twitch streams, podcasts, and community projects for free—simply credit the artist &amp; <em>Engine Room Records / RaggieSoft Media</em> and share adaptations under <strong>CC BY-SA 4.0</strong>.
                    </p>
                </div>
            </div>

            <!-- Prong 2: Standard DSP License -->
            <div class="col-md-4">
                <div class="p-3 rounded-3 h-100 border border-info border-opacity-50" style="background: rgba(0, 195, 255, 0.06);">
                    <div class="text-uppercase small fw-bold text-info mb-2">
                        <i class="fa-solid fa-headphones me-2" aria-hidden="true"></i>2. Standard DSP License
                    </div>
                    <p class="small text-body-secondary mb-0">
                        Stream and enjoy the official masters across global Digital Service Providers (Apple Music, Spotify, YouTube Music, Amazon Music, TIDAL, Pandora, and Qobuz) or gratis via <a href="https://music.raggiesoft.com" target="_blank" rel="noopener" class="text-info fw-bold">The Listening Room</a> under standard consumer streaming terms.
                    </p>
                </div>
            </div>

            <!-- Prong 3: Commercial Non-Exclusive License -->
            <div class="col-md-4">
                <div class="p-3 rounded-3 h-100 border border-success border-opacity-50" style="background: rgba(25, 135, 84, 0.08);">
                    <div class="text-uppercase small fw-bold text-success mb-2">
                        <i class="fa-solid fa-file-contract me-2" aria-hidden="true"></i>3. Commercial Non-Exclusive
                    </div>
                    <p class="small text-body-secondary mb-0">
                        Need to synchronize our music into a proprietary film, commercial broadcast, or closed-source video game <strong>without</strong> CC BY-SA 4.0 <em>ShareAlike</em> copyleft obligations? Obtain a direct <strong>Commercial Non-Exclusive Sync License</strong> from RaggieSoft Media.
                    </p>
                </div>
            </div>
        </div>

        <!-- Zero Content-ID Ambush Callout -->
        <div class="p-3 p-lg-4 rounded-3 border border-success border-opacity-50" style="background: rgba(25, 135, 84, 0.06);">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <div class="text-uppercase small fw-bold text-success mb-1">
                        <i class="fa-solid fa-ban me-2" aria-hidden="true"></i>Why We Never Opt Into YouTube Content ID or Meta Rights Manager ("Social Media Pack")
                    </div>
                    <p class="small text-body-secondary mb-0">
                        Automated audio-fingerprinting bots (such as DistroKid's <em>Social Media Pack</em>, YouTube Content ID, and Meta Rights Manager) cannot read Creative Commons attributions or verify direct commercial sync licenses—they blindly demonetize and claim every video that matches a waveform. Because our catalog is tri-licensed, <strong>RaggieSoft Media strictly opts out of automated Content ID / Rights Manager monetization</strong> so creators using our music under <strong>CC BY-SA 4.0</strong> or a <strong>Commercial Non-Exclusive License</strong> are never ambushed by automated copyright claims.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <wa-button href="/raggiesoft-media/licensing/commercial" variant="brand" appearance="accent" size="small" class="fw-bold text-uppercase shadow">
                        <i slot="start" class="fa-duotone fa-briefcase" aria-hidden="true"></i>Request Commercial License
                    </wa-button>
                </div>
            </div>
        </div>
    </div>
</wa-card>

<wa-card class="bg-hud-base w-100 shadow-sm mb-5 p-2" style="--border-color: transparent;">
    <div class="p-4 p-lg-5 text-center text-md-start d-md-flex align-items-center justify-content-between">
        <div class="mb-4 mb-md-0 me-md-4">
            <h2 class="h4 fw-bold mb-2 text-uppercase text-glow-primary">Commercial Media Clearances</h2>
            <p class="text-body-secondary mb-0 small" style="max-width: 700px;">
                Require Engine Room Records audio for a commercial film? Adapting RaggieSoft narrative IP for a monetized product without ShareAlike restrictions? Commercial synchronization and clearance waivers are negotiated directly via our B2B portal.
            </p>
        </div>
        <div class="flex-shrink-0 mt-3 mt-md-0">
            <wa-button href="/raggiesoft-media/licensing/commercial" variant="brand" appearance="accent" class="fw-bold text-uppercase shadow">
                <i slot="start" class="fa-duotone fa-briefcase" aria-hidden="true"></i>Commercial Portal
            </wa-button>
        </div>
    </div>
</wa-card>