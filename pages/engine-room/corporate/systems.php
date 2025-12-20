<?php
// pages/engine-room/corporate/systems.php
// The Digital Brain of Aethelgard Holdings.
// Managed by: Justin Miller, Chief Systems Architect.

$pageTitle = "Systems Architecture - Aethelgard Intranet";
?>

<style>
    /* THEME: The "mPad" Interface (Clean, Data-Driven, High Contrast) */
    .system-console {
        background-color: #0f172a; /* Deep Slate */
        color: #94a3b8;
        font-family: 'JetBrains Mono', 'Fira Code', monospace;
        min-height: 100vh;
        border-top: 4px solid #38bdf8; /* Cyan Data Line */
    }
    
    .data-card {
        background-color: #1e293b;
        border: 1px solid #334155;
        border-radius: 4px;
        margin-bottom: 1rem;
    }
    
    .data-header {
        background-color: #0f172a;
        padding: 10px 15px;
        border-bottom: 1px solid #334155;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: flex;
        justify-content: space-between;
    }
    
    .data-value {
        color: #e2e8f0;
        font-weight: bold;
    }
    
    .status-ok { color: #4ade80; } /* Green */
    .status-warn { color: #facc15; } /* Yellow */
    .status-err { color: #f87171; } /* Red */
    .status-blue { color: #38bdf8; } /* Cyan */

    .blink-cursor {
        animation: blink 1s step-end infinite;
    }
    @keyframes blink { 50% { opacity: 0; } }
    
    .chat-bubble {
        background: #334155;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 8px;
        border-left: 3px solid #38bdf8;
    }
</style>

<div class="system-console p-4">
    
    <div class="container-fluid">
        
        <div class="row mb-4 align-items-center border-bottom border-secondary pb-3">
            <div class="col-md-6">
                <h1 class="h4 text-white mb-0">
                    <i class="fa-duotone fa-server me-2 status-blue"></i>SYS_ARCHITECT // DASHBOARD_V4
                </h1>
                <small class="font-monospace">USER: J_MILLER [ADMIN] | UPTIME: 412 DAYS</small>
            </div>
            <div class="col-md-6 text-end">
                <span class="badge bg-secondary font-monospace"><i class="fa-solid fa-satellite-dish me-2"></i>LINK: J_MILLER_CENTER_MAIN</span>
                <span class="badge bg-success font-monospace ms-2"><i class="fa-solid fa-lock me-2"></i>SECURE</span>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-3">
                
                <div class="data-card">
                    <div class="data-header">
                        <span><i class="fa-solid fa-id-card me-2"></i>OPERATOR PROFILE</span>
                        <span class="status-ok">ACTIVE</span>
                    </div>
                    <div class="p-3 text-center">
                        <div class="mb-3 position-relative d-inline-block">
                            <img src="https://assets.raggiesoft.com/stardust-engine/images/characters/justin-miller.jpg" 
                                 class="rounded-circle border border-2 border-info" 
                                 style="width: 100px; height: 100px; object-fit: cover; filter: grayscale(20%);"
                                 alt="Justin Miller">
                            <span class="position-absolute bottom-0 end-0 p-1 bg-black rounded-circle border border-secondary">
                                <i class="fa-solid fa-keyboard text-info small"></i>
                            </span>
                        </div>
                        <h5 class="text-white mb-0">Justin Miller</h5>
                        <small class="text-info font-monospace">Chief Systems Architect</small>
                        
                        <div class="mt-3 text-start small border-top border-secondary pt-2">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Clearance:</span>
                                <span class="text-white">LEVEL 5 (ROOT)</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span>Role:</span>
                                <span class="text-white">Logistics / Database</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Protocol:</span>
                                <span class="text-warning">AAC / TEXT ONLY</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="data-card">
                    <div class="data-header text-info">
                        <span><i class="fa-duotone fa-link me-2"></i>TWIN_PROTOCOL_LINK</span>
                        <i class="fa-solid fa-signal status-ok"></i>
                    </div>
                    <div class="p-3 small">
                        <div class="d-flex justify-content-between mb-2">
                            <span>LINKED USER:</span>
                            <strong class="text-white">JESSICA_MILLER (EXEC_DIR)</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>LOCATION:</span>
                            <span class="text-white">FLOOR 39 (OFFICE)</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>STATUS:</span>
                            <span class="status-ok">REGULATED</span>
                        </div>
                        
                        <div class="mt-3 p-2 bg-black rounded border border-secondary">
                            <i class="fa-solid fa-terminal me-2 text-secondary"></i>
                            <span class="text-white">Justin:</span> <span class="text-info">Meeting in 5. Do you have the Sun-Ray files?</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                
                <div class="data-card">
                    <div class="data-header">
                        <span><i class="fa-solid fa-box-archive me-2"></i>PROJECT: THE_VAULT (VAN NUYS RECOVERY)</span>
                        <span class="text-warning">IN PROGRESS</span>
                    </div>
                    <div class="p-3">
                        <p class="small mb-3">
                            <span class="text-white fw-bold">MISSION:</span> Catalog and digitize the 5,000+ analog tapes acquired from Omni-Global ("The Dumpster").
                        </p>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Physical Intake</span>
                                <span class="text-white">100%</span>
                            </div>
                            <div class="progress" style="height: 6px; background: #334155;">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Metadata Digitization</span>
                                <span class="text-white">84%</span>
                            </div>
                            <div class="progress" style="height: 6px; background: #334155;">
                                <div class="progress-bar bg-info" style="width: 84%"></div>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Rightful Owner Repatriation</span>
                                <span class="text-white">42%</span>
                            </div>
                            <div class="progress" style="height: 6px; background: #334155;">
                                <div class="progress-bar bg-warning" style="width: 42%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 border-top border-secondary bg-black small font-monospace text-center">
                        CURRENT TASK: Sorting "Mirage" B-Sides (1998-2000)
                    </div>
                </div>

                <div class="data-card">
                    <div class="data-header">
                        <span><i class="fa-solid fa-map-location-dot me-2"></i>FLEET LOGISTICS // BLACKSBURG HQ</span>
                        <span class="status-blue">LIVE MAP</span>
                    </div>
                    <div class="p-0 position-relative">
                        <div style="height: 200px; background: url('https://assets.raggiesoft.com/common/patterns/grid.png'); opacity: 0.5;"></div>
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <div class="d-inline-block bg-black border border-info p-2 rounded text-info mb-2 shadow-lg">
                                <i class="fa-solid fa-bus me-2"></i>UNIT 1 (The Sovereign)
                                <br><small class="text-white">LOC: I-81 NB // ETA 14:00</small>
                            </div>
                            <br>
                            <div class="d-inline-block bg-black border border-secondary p-2 rounded text-secondary shadow-lg">
                                <i class="fa-solid fa-truck me-2"></i>UNIT 4 (Merch)
                                <br><small class="text-white">LOC: DOCK B</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="data-card h-100">
                    <div class="data-header">
                        <span><i class="fa-solid fa-bell me-2"></i>SYSTEM LOG</span>
                        <span class="text-muted">REAL-TIME</span>
                    </div>
                    <div class="p-3 font-monospace small" style="max-height: 500px; overflow-y: auto;">
                        
                        <div class="mb-3 border-bottom border-secondary pb-2">
                            <span class="text-info">[10:42]</span> <span class="text-white">Asset ID #4492 (Tape)</span><br>
                            <span class="text-muted">Status: Degraded. Scheduled for baking/restoration.</span>
                        </div>

                        <div class="mb-3 border-bottom border-secondary pb-2">
                            <span class="text-success">[09:15]</span> <span class="text-white">Legal Alert</span><br>
                            <span class="text-muted">Copyright transfer complete for Artist: "Origin". Files moved to Secure Archive.</span>
                        </div>

                        <div class="mb-3 border-bottom border-secondary pb-2">
                            <span class="text-warning">[08:30]</span> <span class="text-white">Fleet Maint.</span><br>
                            <span class="text-muted">Unit 2 (The Iron Horse) requires hydraulic lift service. Scheduled for Tuesday.</span>
                        </div>

                        <div class="mb-3">
                            <span class="text-info">[08:00]</span> <span class="text-white">H. O'Connell</span><br>
                            <span class="text-muted">"Justin, check the royalty payout script. It's running too fast. The banks might flag it."</span>
                            <div class="mt-1 ps-2 border-left border-info text-info">
                                >> REPLY: "It is efficient. The banks will adjust."
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
        <div class="row mt-4 pt-3 border-top border-secondary text-muted small font-monospace">
            <div class="col-6">
                SYSTEM: NOMINAL // ENCRYPTION: AES-256
            </div>
            <div class="col-6 text-end">
                TERMINAL ID: JM_01
            </div>
        </div>

    </div>
</div>