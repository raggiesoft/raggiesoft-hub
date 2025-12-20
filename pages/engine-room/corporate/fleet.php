<?php
// pages/engine-room/corporate/fleet.php
// The Logistics Monitor.
// Managed by: Justin Miller.
// Note: Unit 02 is now a Museum Piece (Commonwealth Coach & Trolley).
// Updates: "Ground-Up" Commission status and Québec Origin data added.

$pageTitle = "Fleet Command // T-Logistics";
?>

<style>
    /* THEME: "BIOS / TUI" (Text User Interface) */
    .fleet-terminal {
        background-color: #000000;
        color: #cccccc;
        font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
        min-height: 100vh;
        overflow-x: hidden;
        border: 2px solid #555;
    }

    .tui-window {
        border: 1px solid #aaaaaa;
        background: #111;
        box-shadow: 10px 10px 0px rgba(50, 50, 50, 0.5);
        margin-bottom: 2rem;
    }

    .tui-header {
        background-color: #aaaaaa;
        color: #000000;
        padding: 2px 10px;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .tui-body {
        padding: 15px;
    }

    .stat-label { color: #55ffff; } /* Cyan */
    .stat-ok    { color: #55ff55; } /* Green */
    .stat-warn  { color: #ffff55; } /* Yellow */
    .stat-off   { color: #cd7f32; } /* Bronze (Historical/Museum) */
    .stat-ext   { color: #ff55ff; } /* Magenta (External Assets) */
    .stat-info  { color: #ffffff; }

    .ascii-bar { color: #55ff55; font-weight: bold; }
</style>

<div class="fleet-terminal p-3">
    
    <div class="d-flex justify-content-between border-bottom border-white pb-1 mb-4 text-uppercase small">
        <div>
            <span>LOGISTICS_DAEMON_V2.7</span>
        </div>
        <div>
            USER: J_MILLER [ADMIN]
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row g-4">
            
            <div class="col-lg-6">
                <div class="tui-window">
                    <div class="tui-header">[ INTERNAL_FLEET (CUSTOM COMMISSION) ]</div>
                    <div class="tui-body">
                        
                        <div class="row mb-3 border-bottom border-secondary pb-3">
                            <div class="col-12 mb-1"><strong class="text-white">UNIT_01: THE SOVEREIGN</strong></div>
                            <div class="col-md-6">
                                <span class="stat-label">TYPE:</span> 2019 Prevost H3-45<br>
                                <span class="stat-label">BUILD:</span> Ground-Up Custom
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="stat-ok">STATUS: ACTIVE</span><br>
                                <span class="small text-muted">LOC: Blacksburg HQ</span>
                            </div>
                            <div class="col-12 mt-2 small text-muted">
                                > SPECS: Integrated Hydraulic Lift (Factory Install). Wide-aisle chassis config.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-1">
                                <strong class="text-muted">UNIT_02: THE IRON HORSE</strong>
                                <span class="badge bg-secondary float-end">MUSEUM ARTIFACT</span>
                            </div>
                            <div class="col-md-6">
                                <span class="stat-label" style="color: #aaa;">TYPE:</span> 2002 Prevost H3-45<br>
                                <span class="stat-label" style="color: #aaa;">BUILD:</span> The Prototype (Custom)
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="stat-off">STATUS: DONATED</span><br>
                                <span class="small text-muted">LOC: Cwlth. Coach & Trolley (Roanoke)</span>
                            </div>
                            <div class="col-12 mt-2 small text-muted font-monospace border-top border-secondary pt-2">
                                <span class="text-white">HISTORICAL NOTE:</span> Commissioned NEW in 2002. Not a retrofit. 
                                <br>> <span class="stat-off">Exhibit:</span> "The First Accessible Tour Bus."
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tui-window">
                    <div class="tui-header">[ FACTORY_DATA // SAINTE-CLAIRE, QC ]</div>
                    <div class="tui-body small font-monospace">
                        <div class="row">
                            <div class="col-12 mb-2 text-white">
                                <i class="fa-solid fa-handshake me-2"></i>CONTRACT NEGOTIATION LOGS
                            </div>
                            <div class="col-md-6">
                                <span class="stat-label">LOCATION:</span> Prevost Car, Inc.<br>
                                <span class="stat-label">LANGUAGE:</span> <span class="stat-info">Français (Québécois)</span>
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="stat-label">TRANSLATOR:</span> <span class="stat-warn">NONE (Not Required)</span>
                            </div>
                            <div class="col-12 mt-2 pt-2 border-top border-secondary text-muted">
                                > NOTE: Client (The Stardust Engine) conducted all engineering reviews in local dialect.
                                <br>> <span class="stat-ok">TEFAQ LEVEL:</span> C2 (Mastery) - All 5 Members.
                                <br>> RESULT: Mutual respect established with floor crew. Build priority: HIGHEST.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="tui-window" style="border-color: #ff55ff;">
                    <div class="tui-header" style="background-color: #ff55ff;">[ CIVIC-LINK INTEGRATION (PUBLIC) ]</div>
                    <div class="tui-body">
                        
                        <div class="alert alert-dark border-0 p-2 mb-3 small font-monospace text-muted">
                            > API_LINK: CIVIC-TRANSIT_LA (LIVE)<br>
                            > FILTER: ACCESSIBILITY_MODE = TRUE<br>
                            > NOTE: "The city manages the fleet; we just manage the schedule."
                        </div>

                        <div class="row mb-3 border-bottom border-secondary pb-3">
                            <div class="col-12 mb-1">
                                <strong class="stat-ext">ROUTE_720 (The Rapid)</strong>
                                <span class="badge bg-secondary float-end">BUS</span>
                            </div>
                            <div class="col-md-6">
                                <span class="stat-label">NEXT ARRIVAL:</span> <span class="text-white">2 MINS</span><br>
                                <span class="stat-label">STOP:</span> Wilshire / Westwood
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="stat-ok">LIFT: OPERATIONAL</span><br>
                                <span class="ascii-bar">[||||......] CAP: 40%</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-1">
                                <strong class="stat-ext">EXPO_LINE (The Rail)</strong>
                                <span class="badge bg-secondary float-end">TRAIN</span>
                            </div>
                            <div class="col-md-6">
                                <span class="stat-label">NEXT ARRIVAL:</span> <span class="text-white">ON TIME</span><br>
                                <span class="stat-label">STATION:</span> Culver City
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="stat-ok">ELEVATORS: OK</span><br>
                                <span class="ascii-bar">[|||.......] CAP: 30%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="fixed-bottom bg-secondary text-black p-1 font-monospace small">
        TERMINAL: TTY1 | CIVIC-API: CONNECTED | <span class="fw-bold">ACTIVE ASSETS: 1 (OWNED) + 2,400 (VIRTUAL)</span>
    </div>

</div>