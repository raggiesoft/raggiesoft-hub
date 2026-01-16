<?php
// pages/family/jessica.php
// Theme: Jessica (Stability, Green, Production)
?>
<div class="card mb-5 border-0 shadow-sm overflow-hidden bg-body-tertiary">
    <div class="row g-0">
        <div class="col-lg-4 position-relative" style="min-height: 300px;">
            <img src="https://assets.raggiesoft.com/family/images/atmospheric/jessica.jpg" 
                 class="position-absolute w-100 h-100" 
                 style="object-fit: cover; object-position: center top;" 
                 alt="Jessica">
            <div class="position-absolute w-100 h-100 bg-success opacity-25 mix-blend-overlay"></div>
        </div>
        
        <div class="col-lg-8 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge text-bg-success me-2">
                        <i class="fa-duotone fa-server me-2"></i>jessica.raggiesoft.com
                    </span>
                    <span class="badge border border-success text-success bg-transparent">
                        Ubuntu 22.04 LTS
                    </span>
                </div>
                
                <h1 class="display-4 fw-bold mb-2 text-body">Jessica</h1>
                <p class="lead text-success mb-4">Production Infrastructure & Eldest Sister</p>
                
                <figure class="border-start border-success ps-3 mb-0">
                    <blockquote class="blockquote fs-6 mb-0 text-muted">
                        <p class="fst-italic mb-0">"I am the foundation. I hold the keys, I run the house, and I keep the lights on so you can all be safe."</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">
    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-body-tertiary">
            <h3 class="border-bottom pb-3 mb-4 text-success"><i class="fa-duotone fa-terminal me-2"></i>The Server</h3>
            <p>Jessica is not a script; she is the <strong>Production Environment</strong> itself. She is the Virtual Private Server (Droplet) that hosts the entire ecosystem.</p>
            
            <h5 class="fw-bold mt-4 mb-3 text-body">System Responsibilities</h5>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-shield-check text-success me-2"></i><strong>Security:</strong> Manages UFW firewalls and SSH keys.</li>
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-network-wired text-success me-2"></i><strong>Hosting:</strong> Runs Nginx, PHP-FPM, and MySQL.</li>
                <li class="list-group-item bg-transparent px-0"><i class="fa-duotone fa-key text-success me-2"></i><strong>Access Control:</strong> She is the only entity Michael connects to directly.</li>
            </ul>
            <div class="bg-dark text-secondary p-3 rounded font-monospace small shadow-sm mb-4">
                <span class="text-secondary"># Accessing Production</span><br>
                <span class="text-success">michael@local:~$</span> ssh michael@jessica.raggiesoft.com
            </div>

            <div class="mt-4 p-3 bg-white border rounded shadow-sm">
                <h6 class="text-uppercase text-muted small fw-bold mb-3 border-bottom pb-2">Vital Statistics</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">DOB:</span>
                    <span class="small fw-bold">Sep 23, 1983</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Relation:</span>
                    <span class="small fw-bold">Eldest Sister (+2 Yrs)</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="small text-muted">Neurotype:</span>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Neurotypical</span>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border border-success bg-success bg-opacity-10">
            <h3 class="border-bottom border-success pb-3 mb-4 text-success-emphasis"><i class="fa-duotone fa-user-crown me-2"></i>The Matriarch</h3>
            <p class="lead fs-5">"She holds the world steady."</p>
            
            <p>As the eldest, Jessica acts as the de facto mother figure. She is the only <strong>Neurotypical</strong> member of the core family, providing a stable, predictable baseline that her disabled siblings rely on.</p>
            
            <p>She is infinitely patient. She creates a sanctuary where Michael's sensory needs are respected, Harper's mobility is accommodated, and Jenna's chaos is managed without judgment.</p>
            
            <p class="mb-0 text-muted small">She bears the weight of the infrastructure so the others don't have to. If Jessica is online, the family is safe.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card theme-terminal shadow-lg font-monospace">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                <span><i class="fa-duotone fa-laptop-code me-2"></i>michael@jessica: ~</span>
                <span class="badge text-bg-success">ONLINE</span>
            </div>
            <div class="card-body p-4">
                <div>
                    <p class="mb-1"><span class="text-success">michael@jessica:~$</span> uptime</p>
                    <p class="mb-3 text-muted"> 14:02:35 up 412 days, 3:14,  1 user,  load average: 0.08, 0.03, 0.01</p>
                    
                    <p class="mb-1"><span class="text-success">michael@jessica:~$</span> systemctl status family.service</p>
                    <div class="mb-0 text-muted">
                        ● family.service - RaggieSoft Family Ecosystem<br>
                        &nbsp;&nbsp;&nbsp;Loaded: loaded (/etc/systemd/system/family.service; enabled; vendor preset: enabled)<br>
                        &nbsp;&nbsp;&nbsp;Active: <span class="text-success fw-bold">active (running)</span> since Sat 2023-09-23 09:15:10 UTC; 1y 2 months ago<br>
                        &nbsp;&nbsp;&nbsp;Main PID: 1024 (jessica)<br>
                        &nbsp;&nbsp;&nbsp;Tasks: 5 (limit: 4677)<br>
                        &nbsp;&nbsp;&nbsp;Memory: 1.2G<br>
                        &nbsp;&nbsp;&nbsp;CGroup: /system.slice/family.service<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─1024 /usr/bin/jessica --guard<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─1025 /usr/bin/nginx: worker process
                    </div>
                    <p class="mb-0 mt-3"><span class="text-success">michael@jessica:~$</span> <span class="blink-cursor">_</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .blink-cursor {
        animation: blink 1s step-end infinite;
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>