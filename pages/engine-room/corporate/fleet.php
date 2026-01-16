<?php
// pages/engine-room/corporate/fleet.php
// The Logistics Monitor.
// Managed by: Justin Miller.
// Context: The movement of the "Ironhead" assets.
// Protocol: Ryan O'Connell travels ONLY via heavy fleet.

$pageTitle = "Fleet Command // T-Logistics";
?>

<style>
    /* THEME: "BIOS / TUI" (Text User Interface) */
    /* We force a dark terminal look regardless of system theme */
    .fleet-terminal {
        background-color: #0f0f0f; /* Deep Black */
        color: #e0e0e0; /* High Contrast Grey */
        font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
        min-height: 100vh;
        overflow-x: hidden;
        border: 2px solid #333;
        padding-bottom: 4rem;
    }

    .tui-window {
        border: 1px solid #555;
        background: #1a1a1a;
        margin-bottom: 2rem;
    }

    .tui-header {
        background-color: #333;
        color: #fff;
        padding: 5px 15px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-bottom: 1px solid #555;
        display: flex;
        justify-content: space-between;
    }

    /* Status Indicators */
    .stat-ok { color: #198754; font-weight: bold; } /* Green */
    .stat-warn { color: #ffc107; font-weight: bold; } /* Yellow */
    .stat-crit { color: #dc3545; font-weight: bold; } /* Red */
    .stat-idle { color: #6c757d; } /* Grey */

    .ascii-bar { font-family: monospace; letter-spacing: -1px; }
</style>

<div class="fleet-terminal container-fluid py-4">
    
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h1 class="h3 text-uppercase fw-bold mb-0">Stardust Logistics // T-Net</h1>
            <p class="small text-secondary mb-0">System Time: <?php echo date('H:i:s T'); ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="tui-window">
                <div class="tui-header">
                    <span>UNIT_01: "The Sovereign"</span>
                    <span>STATUS: ACTIVE</span>
                </div>
                <div class="p-3 small">
                    <div class="row">
                        <div class="col-md-3 text-center border-end border-secondary">
                            <i class="fa-solid fa-bus fa-4x text-white mb-2"></i>
                            <br><strong>SAINTE-CLAIRE H3-CUSTOM</strong>
                            <br><span class="badge bg-success text-white rounded-0 mt-2">FLEET COMMAND</span>
                        </div>
                        <div class="col-md-9 ps-md-4">
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">CHASSIS:</div>
                                <div class="col-9">Custom "Ground-Up" Commission (2018)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">LOCATION:</div>
                                <div class="col-9 text-warning">STARDUST STUDIOS (Blacksburg, VA)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">ODOMETER:</div>
                                <div class="col-9">142,891 MI</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">SPECS:</div>
                                <div class="col-9">
                                    Twin-Generator (24kW) // Hydraulic Leveling // Secure Comms Array
                                </div>
                            </div>
                            <hr class="border-secondary">
                            <div class="row">
                                <div class="col-12">
                                    <span class="stat-ok">[SYSTEM OK]</span> Engine
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> HVAC
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> Hydraulics
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tui-window">
                <div class="tui-header">
                    <span>UNIT_03: "The Interceptor"</span>
                    <span>STATUS: STANDBY</span>
                </div>
                <div class="p-3 small">
                    <div class="row">
                        <div class="col-md-3 text-center border-end border-secondary">
                            <i class="fa-solid fa-van-shuttle fa-4x text-white mb-2"></i>
                            <br><strong>CUSTOM LWB TRANSPORT</strong>
                            <br><span class="badge bg-secondary rounded-0 mt-2 text-white">TACTICAL</span>
                        </div>
                        <div class="col-md-9 ps-md-4">
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">TYPE:</div>
                                <div class="col-9">Modified High-Roof Logistics Van</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 text-secondary">ROLE:</div>
                                <div class="col-9">Short-Range Extraction // Medical Support</div>
                            </div>
                            <div class="alert alert-dark border-secondary p-2 mb-0 mt-3">
                                <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>
                                <strong>PROTOCOL NOTE:</strong> This vehicle is the only approved "Light Transport" for Ryan O'Connell.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tui-window border-danger">
                <div class="tui-header bg-danger text-white">
                    <span><i class="fa-solid fa-shield-check me-2"></i>SECURITY BULLETIN</span>
                    <span>PRIORITY: HIGH</span>
                </div>
                <div class="p-3 font-monospace small">
                    <p class="mb-2 text-danger fw-bold">SUBJECT: POV (Personal Owned Vehicle) DISINFORMATION</p>
                    <p class="mb-2">
                        <strong>CONTEXT:</strong> Recent social media reports (Google Reviews) allege sighting "Ryan's Car" at 1200 Industrial Park Rd.
                    </p>
                    <p class="mb-3">
                        <strong>CORRECTION:</strong> Ryan O'Connell does not own, operate, or travel in a standard passenger sedan. Due to T-10 paralysis and security protocols, he travels exclusively in:
                        <br>1. <strong>Unit 01</strong> (Heavy Coach)
                        <br>2. <strong>Unit 03</strong> (Accessible Van)
                    </p>
                    <p class="mb-0 text-white-50">
                        <em>Any report of a sports car or sedan belonging to the Principal is false.</em>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="fixed-bottom bg-dark text-white border-top border-secondary p-2 font-monospace small">
        <div class="container-fluid d-flex justify-content-between">
            <span>TERMINAL: TTY1 (SECURE)</span>
            <span>FLEET STATUS: <span class="text-success">READY</span></span>
        </div>
    </div>

</div>