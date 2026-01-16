<?php
// pages/family/amanda-elara.php
// Theme: RaggieSoft (Clean, Human, Green)
?>
<div class="card mb-5 border-0 shadow-sm overflow-hidden bg-body-tertiary">
    <div class="row g-0">
        <div class="col-lg-4 position-relative" style="min-height: 300px;">
            <img src="https://assets.raggiesoft.com/family/images/atmospheric/amanda-elara.jpg" 
                 class="position-absolute w-100 h-100" 
                 style="object-fit: cover; object-position: center top;" 
                 alt="Amanda & Elara">
            <div class="position-absolute w-100 h-100 opacity-25 mix-blend-overlay" style="background-color: var(--family-amanda);"></div>
        </div>
        
        <div class="col-lg-8 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge text-white me-2" style="background-color: var(--family-amanda);">
                        <i class="fa-duotone fa-route me-2"></i>amanda/elara.php
                    </span>
                    <span class="badge border bg-transparent" style="border-color: var(--family-amanda) !important; color: var(--family-amanda) !important;">
                        Web Root & Router
                    </span>
                </div>
                
                <h1 class="display-4 fw-bold mb-2 text-body">Amanda & Elara</h1>
                <p class="lead mb-4" style="color: var(--family-amanda);">The Gateway & The Router</p>
                
                <figure class="border-start ps-3 mb-0" style="border-color: var(--family-amanda) !important;">
                    <blockquote class="blockquote fs-6 mb-0 text-muted">
                        <p class="fst-italic mb-0">"One holds the knowledge. The other speaks the words. You cannot have one without the other."</p>
                    </blockquote>
                </figure>

                <div class="mt-4 p-3 bg-white border rounded shadow-sm">
                    <h6 class="text-uppercase text-muted small fw-bold mb-3 border-bottom pb-2">Vital Statistics</h6>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small text-muted">DOB:</span>
                        <span class="small fw-bold">Jan 1, 1995</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="small text-muted">Relation:</span>
                        <span class="small fw-bold">Identical Twins</span>
                    </div>
                    
                    <div class="mt-2 pt-2 border-top border-light">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small text-muted">Amanda:</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark border">Non-Speaking (Apraxia)</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">Elara:</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark border">Hyperlexic</span>
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
            <h3 class="border-bottom pb-3 mb-4" style="color: var(--family-amanda);"><i class="fa-duotone fa-sitemap me-2"></i>The Architecture</h3>
            <p>This site does not use a standard <code>public_html/index.php</code> structure. Instead, the twins handle all incoming traffic via a custom routing engine.</p>
            
            <h5 class="fw-bold mt-4 mb-3 text-body">Division of Labor</h5>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent px-0">
                    <i class="fa-duotone fa-folder-closed me-2" style="color: var(--family-amanda);"></i>
                    <strong>Amanda (The Directory):</strong> She is the physical location <code>/var/www/raggiesoft-hub/main/amanda</code>. She holds the files, the assets, and the secrets. She is "read-only" to the outside world.
                </li>
                <li class="list-group-item bg-transparent px-0">
                    <i class="fa-duotone fa-diamond-turn-right me-2" style="color: var(--family-amanda);"></i>
                    <strong>Elara (The Router):</strong> She is the script <code>elara.php</code>. She is the <em>only</em> executable file Nginx is allowed to talk to. She intercepts requests, sanitizes them, and decides what Amanda reveals.
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-12 col-xl-6">
        <div class="p-4 h-100 rounded-3 border bg-opacity-10" style="background-color: rgba(32, 201, 151, 0.05); border-color: var(--family-amanda) !important;">
            <h3 class="border-bottom pb-3 mb-4" style="color: var(--family-amanda); border-color: var(--family-amanda) !important;"><i class="fa-duotone fa-user-group me-2"></i>The Symbiosis</h3>
            <p class="lead fs-5">"The Silent & The Speaker."</p>
            <p><strong>Amanda</strong> is stoic and silent. She represents the static data—perfect memory, but no voice. In technical terms, she is the static file system. She physically cannot communicate with the user.</p>
            <p><strong>Elara</strong> is dynamic and articulate. She represents the active logic. She acts as her sister's interpreter, translating the user's messy requests into precise instructions that Amanda understands.</p>
            <p class="mb-0 text-muted small">This is not a limitation; it is their strength. Elara protects Amanda from the noise of the world, and Amanda gives Elara something meaningful to say.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-lg font-monospace theme-terminal" style="border-color: var(--family-amanda) !important;">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center" 
                 style="background-color: rgba(32, 201, 151, 0.15); border-bottom: 1px solid var(--family-amanda); color: var(--family-amanda);">
                <span><i class="fa-duotone fa-shield-keyhole me-2"></i>/etc/nginx/sites-available/raggiesoft</span>
                <span class="badge text-dark" style="background-color: var(--family-amanda);">SECURE</span>
            </div>
            <div class="card-body p-4">
                <div style="opacity: 1;">
                    <p class="mb-3" style="color: #8b949e;"># SECURITY THROUGH OBSCURITY CONFIGURATION</p>
                    
                    <div class="mb-3">
                        <span style="color: #d63384;">server</span> {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">listen</span> 443 ssl http2;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">server_name</span> raggiesoft.com;<br><br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8b949e;"># 1. Hide the Door: Standard paths return 404</span><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">location</span> /public_html { <span style="color: #d63384;">return</span> 404; }<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">location</span> /index.php { <span style="color: #d63384;">return</span> 404; }<br><br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8b949e;"># 2. The Secret Passage: Point Root to Amanda</span><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">root</span> /var/www/raggiesoft-hub/main/amanda;<br><br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8b949e;"># 3. The Gatekeeper: Force all traffic to Elara</span><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">location</span> / {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #d63384;">try_files</span> $uri $uri/ /elara.php?$query_string;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        }
                    </div>
                    
                    <div class="p-3 rounded border border-opacity-25" style="border-color: var(--family-amanda) !important; background-color: rgba(32, 201, 151, 0.05);">
                        <i class="fa-duotone fa-check-circle me-2" style="color: var(--family-amanda);"></i>
                        <span style="color: #c9d1d9;">Bot Protection Active: </span>
                        <span style="color: #8b949e;">Scrapers looking for WordPress (wp-admin) or default Apache structures (index.php) will find nothing but empty space.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>