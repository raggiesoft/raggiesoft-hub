<?php
/**
 * RaggieSoft Architecture - Page Component
 * 
 * File: pages/engine-room/corporate/fleet.php
 * Component: Fleet Command // T-Logistics Terminal
 * Type: Interactive Lore / Dashboard
 * 
 * Description:
 * Renders a mock "BIOS/TUI" (Text User Interface) terminal displaying the
 * logistics status of the fictional "Ironhead" fleet. Managed narratively
 * by Justin Miller. Highlights protocols for the character Ryan O'Connell.
 *
 * Maintenance Notes:
 * - Uses custom CSS classes (.fleet-terminal, .tui-window) to force a dark 
 *   terminal theme regardless of the user's OS dark/light mode settings.
 * - Dynamic system time injected via PHP date().
 * - Static HTML layout; no actual database connections.
 */
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
                    <span>UNIT_01: "The Iron Horse" (2002 Sainte-Claire 45H3)</span>
                    <span>STATUS: ACTIVE // INTERSTATE FLAGSHIP</span>
                </div>
                <div class="p-3 small">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center border-end border-secondary mb-3 mb-md-0">
                            <a href="/engine-room/corporate/strategic-assets/the-iron-horse">
                                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/fleet/2002-sainte-claire-45h3-iron-horse.jpg"
                                     class="img-fluid border border-secondary mb-2"
                                     alt="2002 Sainte-Claire 45H3 The Iron Horse luxury accessible tour bus">
                            </a>
                            <br><strong>2002 SAINTE-CLAIRE 45H3</strong>
                            <br><span class="badge bg-info text-dark rounded-0 mt-1">INTERSTATE CRUISER (45 FT)</span>
                        </div>
                        <div class="col-md-8 ps-md-4">
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">CHASSIS:</div>
                                <div class="col-8 col-sm-9">2002 Sainte-Claire 45H3 High-Deck Tri-Axle VIP (Sainte-Claire, QC)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">ADA SYSTEM:</div>
                                <div class="col-8 col-sm-9 text-info">Mid-Ship 60" Vertical Hydraulic Cassette Platform Lift</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">LOCATION:</div>
                                <div class="col-8 col-sm-9 text-warning">STARDUST STUDIOS BAY 1 (Blacksburg, VA)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">CDL CREW:</div>
                                <div class="col-8 col-sm-9">Tyler Wright, Evan Wright, Holly O'Connell (Class A CDL + P / Airbrake)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">SPECS:</div>
                                <div class="col-8 col-sm-9">
                                    Twin-Generator (24kW) // Zero-Threshold 38" Corridor // Mobile Studio Lounge
                                </div>
                            </div>
                            <hr class="border-secondary">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <div>
                                    <span class="stat-ok">[SYSTEM OK]</span> Engine
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> HVAC
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> 60" Hydraulic Lift
                                </div>
                                <a href="/engine-room/corporate/strategic-assets/the-iron-horse#sainte-claire-45h3" class="btn btn-sm btn-outline-info font-monospace">
                                    [OPEN FULL DOSSIER]
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tui-window">
                <div class="tui-header">
                    <span>UNIT_02: "Progress Street Shuttle" (2004 Prairie Coachworks RLFD30)</span>
                    <span>STATUS: ACTIVE // LAUNCH CUSTOMER #001</span>
                </div>
                <div class="p-3 small">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center border-end border-secondary mb-3 mb-md-0">
                            <a href="/engine-room/corporate/strategic-assets/the-iron-horse#prairie-coachworks-rlfd30">
                                <img src="<?php echo $cdnBaseUrl; ?>/stardust-engine/images/fleet/2004-prairie-coachworks-rlfd30.jpg"
                                     class="img-fluid border border-secondary mb-2"
                                     alt="2004 Prairie Coachworks RLFD30 30-foot low-floor shuttle coach">
                            </a>
                            <br><strong>2004 PRAIRIE COACHWORKS RLFD30</strong>
                            <br><span class="badge bg-warning text-dark rounded-0 mt-1">LOW-FLOOR SHUTTLE (30 FT)</span>
                        </div>
                        <div class="col-md-8 ps-md-4">
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">CHASSIS:</div>
                                <div class="col-8 col-sm-9">2004 Restyled Low-Floor Diesel 30-Foot (Front-Door-Only Executive Spec)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">ADA SYSTEM:</div>
                                <div class="col-8 col-sm-9 text-warning">Pneumatic Curb-Kneeling Air Suspension + 1:6 Flip-Out Front ADA Ramp</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">HEADSIGNS:</div>
                                <div class="col-8 col-sm-9">Luminator Amber LED Matrix (PROGRESS STREET // THE STARDUST ENGINE)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 col-sm-3 text-secondary">LORE NOTE:</div>
                                <div class="col-8 col-sm-9">Launch Customer #001 for Prairie Coachworks; featured on the 2004 <em>Progress Street</em> album cover.</div>
                            </div>
                            <hr class="border-secondary">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <div>
                                    <span class="stat-ok">[SYSTEM OK]</span> Cummins ISL
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> Kneeling Airbags
                                    <span class="stat-ok ms-3">[SYSTEM OK]</span> Front ADA Ramp
                                </div>
                                <a href="/engine-room/corporate/strategic-assets/the-iron-horse#prairie-coachworks-rlfd30" class="btn btn-sm btn-outline-warning font-monospace">
                                    [OPEN FULL DOSSIER]
                                </a>
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