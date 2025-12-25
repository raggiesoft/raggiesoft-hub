<?php
// pages/family/jenna.php
// Theme: Jenna (Creative Chaos, Orange, Sync)
?>
<div class="card mb-5 border-0 shadow-sm overflow-hidden bg-body-tertiary">
    <div class="row g-0">
        <div class="col-lg-4 position-relative" style="min-height: 300px;">
            <img src="https://assets.raggiesoft.com/family/images/atmospheric/jenna.jpg" 
                 class="position-absolute w-100 h-100" 
                 style="object-fit: cover; object-position: center top;" 
                 alt="Jenna">
            <div class="position-absolute w-100 h-100 opacity-25 mix-blend-overlay" style="background-color: #fd7e14;"></div>
        </div>
        
        <div class="col-lg-8 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge me-2 text-dark" style="background-color: #fd7e14;">
                        <i class="fa-duotone fa-rotate me-2"></i>jenna-sync.sh
                    </span>
                    <span class="badge border border-warning text-warning-emphasis bg-transparent">
                        Rclone / Git
                    </span>
                </div>
                
                <h1 class="display-4 fw-bold mb-2 text-body">Jenna</h1>
                <p class="lead mb-4" style="color: #fd7e14;">The Dev Twin & Sync Manager</p>
                
                <figure class="border-start border-warning ps-3 mb-0">
                    <blockquote class="blockquote fs-6 mb-0 text-muted">
                        <p class="fst-italic mb-0">"Create whatever you want. Break things. Make a mess. I'll make sure none of it gets lost."</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">
    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-body-tertiary">
            <h3 class="border-bottom pb-3 mb-4" style="color: #fd7e14;"><i class="fa-duotone fa-cloud-arrow-up me-2"></i>The Sync Engine</h3>
            <p>While Sarah manages the code, Jenna manages the <strong>Assets</strong>. She lives in the chaotic <code>_workspace</code> directory on the development machine.</p>
            
            <h5 class="fw-bold mt-4 mb-3 text-body">Hybrid Workflow</h5>
            <p>Jenna solves the "Large File" problem by splitting the project into two streams:</p>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent px-0"><i class="fa-brands fa-git-alt text-warning me-2"></i><strong>Source Code:</strong> Lightweight text files are pushed to GitHub.</li>
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-hard-drive text-warning me-2"></i><strong>Binary Assets:</strong> Gigabytes of PSDs, WAVs, and raw footage are beamed to DigitalOcean Spaces via <code>rclone</code>.</li>
            </ul>
            <div class="bg-dark text-secondary p-3 rounded font-monospace small shadow-sm mb-4">
                <span class="text-secondary"># The "Save Game" Command</span><br>
                <span class="text-success">michael@dev:~$</span> ./jenna-sync.sh --push "Update homepage assets"
            </div>

            <div class="mt-4 p-3 bg-white border rounded shadow-sm">
                <h6 class="text-uppercase text-muted small fw-bold mb-3 border-bottom pb-2">Vital Statistics</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">DOB:</span>
                    <span class="small fw-bold">Jun 21, 1989</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Relation:</span>
                    <span class="small fw-bold">Twin B (Younger)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="small text-muted">Neurotype:</span>
                    <span class="badge text-dark border" style="background-color: #ffe5d0; border-color: #fd7e14 !important;">ADHD (Hyperactive)</span>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border border-warning bg-warning bg-opacity-10">
            <h3 class="border-bottom border-warning pb-3 mb-4 text-warning-emphasis"><i class="fa-duotone fa-user-hair-long me-2"></i>The Dev Twin</h3>
            <p class="lead fs-5">"Sarah's chaotic mirror."</p>
            <p>Jenna is the "Development" counterpart to Sarah's "Production." Where Sarah is strict and cautious (OCD), Jenna is comfortable with the messiness of creation (ADHD).</p>
            <p>She allows Michael to work fearlessly. She doesn't care if the code compiles or if the image is the wrong aspect ratio; her only job is to <strong>secure the data</strong> off-site immediately. She is the safety net that catches ideas before they vanish.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-lg font-monospace" style="background-color: #0d1117; color: #c9d1d9; border: 1px solid #fd7e14;">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center" 
                 style="background-color: rgba(253, 126, 20, 0.15); border-bottom: 1px solid #fd7e14; color: #fd7e14;">
                <span><i class="fa-duotone fa-arrows-rotate me-2"></i>jenna-sync.sh --push</span>
                <span class="badge text-dark" style="background-color: #fd7e14;">RUNNING</span>
            </div>
            <div class="card-body p-4">
                <div style="opacity: 1;">
                    <p class="mb-2"><span style="color: #3fb950;">michael@dev:~$</span> ./jenna-sync.sh --push</p>
                    
                    <div class="mb-3 ps-3 border-start border-warning border-opacity-25" style="color: #c9d1d9;">
                        <span style="color: #fd7e14;">👱‍♀️ JENNA:</span> Alright, let's ship this! Sending it up...<br><br>
                        
                        <span style="color: #8b949e;">1. Packaging the Code (Hub)...</span><br>
                        &nbsp;&nbsp;&nbsp;> git add .<br>
                        &nbsp;&nbsp;&nbsp;> git commit -m "Jenna: Automated sync commit"<br>
                        &nbsp;&nbsp;&nbsp;<span style="color: #3fb950;">✓ Code sent to GitHub.</span><br><br>
                        
                        <span style="color: #8b949e;">2. Packaging the Workspace (Assets)...</span><br>
                        &nbsp;&nbsp;&nbsp;> Scanning for new media...<br>
                        &nbsp;&nbsp;&nbsp;<span style="color: #3fb950;">✓ Workspace synced to GitHub.</span><br><br>
                        
                        <span style="color: #8b949e;">3. Beaming heavy assets to the CDN...</span><br>
                        &nbsp;&nbsp;&nbsp;> Transferred: 2.4 GB / 2.4 GB, 100%, 120 MBytes/s, ETA 0s<br>
                        &nbsp;&nbsp;&nbsp;> Checks: 450/450, 100%<br>
                        &nbsp;&nbsp;&nbsp;<span style="color: #3fb950;">✓ Rclone sync complete.</span>
                    </div>
                    
                    <p class="mb-0 mt-3">
                        <span style="color: #fd7e14;">👱‍♀️ JENNA:</span> All done! Your local files are perfectly synced.<br>
                        <span style="color: #3fb950;">michael@dev:~$</span> <span class="blink-cursor">_</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Local blink animation specifically for Jenna's terminal */
    .blink-cursor {
        animation: blink 1s step-end infinite;
        color: #fd7e14; /* Orange cursor */
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>