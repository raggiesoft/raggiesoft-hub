<?php
// pages/family/harper.php
// Theme: Harper (High Energy, Purple, Studio)
?>
<div class="card mb-5 border-0 shadow-sm overflow-hidden bg-body-tertiary">
    <div class="row g-0">
        <div class="col-lg-4 position-relative" style="min-height: 300px;">
            <img src="https://assets.raggiesoft.com/family/images/atmospheric/harper.jpg" 
                 class="position-absolute w-100 h-100" 
                 style="object-fit: cover; object-position: center top;" 
                 alt="Harper">
            <div class="position-absolute w-100 h-100 opacity-25 mix-blend-overlay" style="background-color: #6610f2;"></div>
        </div>
        
        <div class="col-lg-8 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge me-2 text-white" style="background-color: #6610f2;">
                        <i class="fa-duotone fa-file-audio me-2"></i>_workspace/harper.sh
                    </span>
                    <span class="badge border bg-transparent" style="border-color: var(--family-harper) !important; color: var(--family-harper) !important;">
                        FFmpeg / LAME
                    </span>
                </div>
                
                <h1 class="display-4 fw-bold mb-2 text-body">Harper</h1>
                <p class="lead mb-4" style="color: var(--family-harper);">The Studio Engineer</p>
                
                <figure class="border-start ps-3 mb-0" style="border-color: var(--family-harper) !important;">
                    <blockquote class="blockquote fs-6 mb-0 text-muted">
                        <p class="fst-italic mb-0">"LOUD IS GOOD. But optimized bitrate is better. Let's make some noise!"</p>
                    </blockquote>
                </figure>

                <div class="mt-4 p-3 bg-white border rounded shadow-sm">
                    <h6 class="text-uppercase text-muted small fw-bold mb-3 border-bottom pb-2">Vital Statistics</h6>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small text-muted">DOB:</span>
                        <span class="small fw-bold">Oct 30, 1992</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small text-muted">Role:</span>
                        <span class="small fw-bold">The Middle Child</span>
                    </div>
                    
                    <div class="mt-2 pt-2 border-top border-light">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small text-muted">Neurotype:</span>
                            <span class="badge text-white border" style="background-color: #6610f2; border-color: #6610f2 !important;">Sensory Seeker (SPD)</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">Mobility:</span>
                            <span class="badge bg-light text-dark border">Ambulatory Wheelchair User</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">
    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-body-tertiary">
            <h3 class="border-bottom pb-3 mb-4" style="color: var(--family-harper);"><i class="fa-duotone fa-waveform-lines me-2"></i>The Transcoder</h3>
            <p>Harper is a recursive audio processing script living in the studio directory. She is responsible for the entire <strong>Engine Room Records</strong> archival pipeline.</p>
            
            <h5 class="fw-bold mt-4 mb-3 text-body">Audio Pipeline</h5>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-magnifying-glass-waveform me-2" style="color: var(--family-harper);"></i><strong>Discovery:</strong> Recursively scans the workspace for fresh Master WAV files.</li>
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-file-mp3 me-2" style="color: var(--family-harper);"></i><strong>Transcoding:</strong> Uses FFmpeg to generate web-optimized MP3 (320kbps) and OGG mirrors.</li>
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-box-archive me-2" style="color: var(--family-harper);"></i><strong>Archival:</strong> Auto-generates ZIP archives for licensing deliverables.</li>
            </ul>
            <div class="bg-dark text-light p-3 rounded font-monospace small shadow-sm">
                <span class="text-secondary"># The "Make it Loud" Command</span><br>
                <span class="text-success">michael@studio:~$</span> ./harper.sh --process "The Stardust Engine"
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-opacity-10" style="background-color: rgba(102, 16, 242, 0.05); border-color: var(--family-harper) !important;">
            <h3 class="border-bottom pb-3 mb-4" style="color: var(--family-harper); border-color: var(--family-harper) !important;"><i class="fa-duotone fa-headphones-simple me-2"></i>The Audiophile</h3>
            <p class="lead fs-5">"High-energy and optimized."</p>
            <p>Harper ensures the creative flow isn't interrupted by technical limitations. She is the reason the "Stardust Player" works seamlessly across all browsers.</p>
            <p>Her studio environment is built for accessibility. As an ambulatory wheelchair user, she has designed her workflow to minimize physical strain—everything is scripted, automated, and within reach. This efficiency translates directly to her code: fast, precise, and highly optimized.</p>
            <p class="mb-0 text-muted small">She proves that accessibility isn't just about accommodation; it's about superior engineering.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-lg font-monospace" style="background-color: #0d1117; color: #c9d1d9; border: 1px solid var(--family-harper);">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center" 
                 style="background-color: rgba(102, 16, 242, 0.15); border-bottom: 1px solid var(--family-harper); color: #d0bfff;">
                <span><i class="fa-duotone fa-sliders-up me-2"></i>harper.sh --process</span>
                <span class="badge text-white" style="background-color: #6610f2;">PROCESSING</span>
            </div>
            <div class="card-body p-4">
                <div style="opacity: 1;">
                    <p class="mb-2"><span style="color: #3fb950;">michael@studio:~$</span> ./harper.sh</p>
                    
                    <div class="mb-3 ps-3 border-start border-opacity-25" style="border-color: var(--family-harper) !important; color: #c9d1d9;">
                        <span style="color: #d0bfff;">🎧 HARPER:</span> Alright! Firing up the mixing board (v18)... Let's make some noise!<br>
                        <span style="color: #8b949e;">🎚️ Targeting Studio Archives: ../engine-room-records/artists</span><br><br>
                        
                        <span style="color: #d0bfff;">[1/3] Processing: "Neon Hearts (1989)"</span><br>
                        &nbsp;&nbsp;&nbsp;> Found Master: <span style="color: #a277ff;">01-Neon-Hearts.wav</span> (24-bit / 48kHz)<br>
                        &nbsp;&nbsp;&nbsp;> FFmpeg: WAV -> MP3 (320k) ... <span style="color: #3fb950;">DONE</span><br>
                        &nbsp;&nbsp;&nbsp;> FFmpeg: WAV -> OGG (q5) ..... <span style="color: #3fb950;">DONE</span><br>
                        &nbsp;&nbsp;&nbsp;> Tags: ID3v2 wrote "The Stardust Engine"<br><br>
                        
                        <span style="color: #d0bfff;">[2/3] Processing: "Electric Color (1987)"</span><br>
                        &nbsp;&nbsp;&nbsp;> Found Master: <span style="color: #a277ff;">07-Light-Up-The-Night.wav</span><br>
                        &nbsp;&nbsp;&nbsp;> FFmpeg: Encoding... [====================] 100%<br>
                        &nbsp;&nbsp;&nbsp;<span style="color: #3fb950;">✓ Track ready for streaming.</span><br><br>
                        
                        <span style="color: #d0bfff;">[3/3] Creating License Packs (7-Zip)</span><br>
                        &nbsp;&nbsp;&nbsp;> Compressing: archives/electric-color-wav.7z ... <span style="color: #3fb950;">OK</span>
                    </div>
                    
                    <p class="mb-0 mt-3">
                        <span style="color: #d0bfff;">🎧 HARPER:</span> Mixdown complete! That sounded awesome.<br>
                        <span style="color: #3fb950;">michael@studio:~$</span> <span class="blink-cursor">_</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Local blink animation specifically for Harper's terminal */
    .blink-cursor {
        animation: blink 1s step-end infinite;
        color: #d0bfff; /* Light Purple cursor */
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>