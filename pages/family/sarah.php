<?php
// pages/family/sarah.php
// Theme: Sarah (Guardian, Yellow, Bash)
?>
<div class="card mb-5 border-0 shadow-sm overflow-hidden bg-body-tertiary">
    <div class="row g-0">
        <div class="col-lg-4 position-relative" style="min-height: 300px;">
            <img src="https://assets.raggiesoft.com/family/images/atmospheric/sarah.jpg" 
                 class="position-absolute w-100 h-100" 
                 style="object-fit: cover; object-position: center top;" 
                 alt="Sarah">
            <div class="position-absolute w-100 h-100 bg-warning opacity-25 mix-blend-overlay"></div>
        </div>
        
        <div class="col-lg-8 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge text-bg-warning me-2">
                        <i class="fa-duotone fa-shield-check me-2"></i>sarah-deploy.sh
                    </span>
                    <span class="badge border border-warning text-warning bg-transparent">
                        Bash / Cron
                    </span>
                </div>
                
                <h1 class="display-4 fw-bold mb-2 text-body">Sarah</h1>
                <p class="lead text-warning mb-4">The Guardian & Deployment Manager</p>
                
                <figure class="border-start border-warning ps-3 mb-0">
                    <blockquote class="blockquote fs-6 mb-0 text-muted">
                        <p class="fst-italic mb-0">"I watch the perimeter. When the code changes, I verify it. Then, I make it real."</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">
    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-body-tertiary">
            <h3 class="border-bottom pb-3 mb-4 text-warning-emphasis"><i class="fa-duotone fa-gears me-2"></i>The Deployer</h3>
            <p>Sarah is an automated Bash script running on a <strong>5-minute heartbeat (Cron)</strong>. She eliminates the anxiety of manual deployments by handling the process autonomously.</p>
            
            <h5 class="fw-bold mt-4 mb-3 text-body">Atomic Workflow</h5>
            <ol class="list-group list-group-numbered list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent">Checks remote GitHub origin for new commits.</li>
                <li class="list-group-item bg-transparent">Compares remote hash against local production hash.</li>
                <li class="list-group-item bg-transparent">If different, executes an <strong>Atomic Update</strong> (zero-downtime swap).</li>
            </ol>
            
            <div class="d-flex align-items-center p-3 rounded bg-warning bg-opacity-10 border border-warning text-dark mb-4">
                <i class="fa-duotone fa-lock-keyhole fa-2x me-3 opacity-50"></i>
                <div class="small lh-sm">
                    <strong>Sudo-less Security:</strong><br>
                    Sarah runs with SetGID permissions, allowing her to update web files without needing full Root access.
                </div>
            </div>

            <div class="mt-4 p-3 bg-white border rounded shadow-sm">
                <h6 class="text-uppercase text-muted small fw-bold mb-3 border-bottom pb-2">Vital Statistics</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">DOB:</span>
                    <span class="small fw-bold">Jun 21, 1989</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Relation:</span>
                    <span class="small fw-bold">Twin A (Elder)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="small text-muted">Neurotype:</span>
                    <span class="badge bg-warning bg-opacity-10 text-dark border border-warning">OCD (Check/Verify)</span>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border border-warning bg-warning bg-opacity-10">
            <h3 class="border-bottom border-warning pb-3 mb-4 text-warning-emphasis"><i class="fa-duotone fa-user-nurse me-2"></i>The Guardian</h3>
            <p class="lead fs-5">"The compulsion to protect."</p>
            
            <p>Sarah is Jenna's older fraternal twin. While Jenna represents chaotic creation, Sarah represents <strong>Rigid Verification</strong>.</p>
            
            <p>Her <strong>OCD</strong> is her superpower in this environment. She physically cannot proceed until the checksums match. She doesn't just "check" the code; she feels a deep compulsion to ensure the integrity of the system before letting it go live.</p>
            
            <p>This trait allows Michael to sleep at night. He knows that Sarah will never cut a corner, never skip a validation step, and never deploy a broken build. She is the vigilant protector who stands watch while the others rest.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-lg font-monospace" style="background-color: #0d1117; color: #c9d1d9; border: 1px solid #d29922;">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center" 
                 style="background-color: rgba(210, 153, 34, 0.15); border-bottom: 1px solid #d29922; color: #f1e05a;">
                <span><i class="fa-duotone fa-list-check me-2"></i>/var/log/sarah-deploy.log</span>
                <span class="badge text-bg-warning">WATCHING</span>
            </div>
            <div class="card-body p-4">
                <div style="opacity: 1;">
                    <div class="mb-1">
                        <span style="color: #8b949e;">[23:55:00]</span> 
                        <span style="color: #f1e05a;">sarah@guard:</span> 
                        Checking remote origin/main...
                    </div>
                    <div class="mb-1">
                        <span style="color: #8b949e;">[23:55:01]</span> 
                        <span style="color: #79c0ff;">STATUS:</span> 
                        Local hash matches remote (a1b2c3d). No changes.
                    </div>
                    <div class="mb-1">
                        <span style="color: #8b949e;">[00:00:00]</span> 
                        <span style="color: #f1e05a;">sarah@guard:</span> 
                        Heartbeat active. Scanning...
                    </div>
                    <div class="mb-1">
                        <span style="color: #8b949e;">[00:00:02]</span> 
                        <span style="color: #79c0ff;">UPDATE DETECTED:</span> 
                        New commit found (e4f5g6h).
                    </div>
                    <div class="mb-1 ps-3 border-start border-warning border-opacity-25" style="color: #c9d1d9;">
                        > Fetching updates... <span style="color: #3fb950;">OK</span><br>
                        > Verifying integrity... <span style="color: #3fb950;">OK</span><br>
                        > Swapping symlinks... <span style="color: #3fb950;">DONE</span>
                    </div>
                    <div class="mb-0">
                        <span style="color: #8b949e;">[00:00:05]</span> 
                        <span style="color: #3fb950;">SUCCESS:</span> 
                        Deployment complete. Logged to /var/log/nginx/access.log
                    </div>
                    <p class="mb-0 mt-3"><span style="color: #f1e05a;">sarah@guard:~$</span> <span class="blink-cursor">_</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Local blink animation specifically for Sarah's terminal */
    .blink-cursor {
        animation: blink 1s step-end infinite;
        color: #f1e05a; /* Yellow cursor */
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>