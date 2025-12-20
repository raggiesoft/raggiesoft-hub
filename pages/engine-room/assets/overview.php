<?php
// pages/engine-room/assets/overview.php
// The Hard Assets.
// "We own the bus. We own the studio. We own the masters."

$pageTitle = "Strategic Assets - Engine Room Records";
?>

<style>
    /* ASSET CARD STYLING */
    .asset-card {
        border: 2px solid #444;
        background-color: #1a1a1a;
        color: #fff;
        transition: all 0.3s ease;
    }
    .asset-card:hover {
        border-color: #dc3545; /* Red border on hover */
        transform: translateY(-5px);
    }
    .asset-icon {
        background-color: #000;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #555;
    }
    .spec-table td {
        background-color: transparent !important;
        color: #aaa;
        border-bottom: 1px solid #333;
        font-family: monospace;
        font-size: 0.9rem;
    }
    .spec-table th {
        background-color: transparent !important;
        color: #fff;
        text-transform: uppercase;
        font-size: 0.8rem;
        border-bottom: 2px solid #555;
    }
</style>

<div class="container-fluid p-0 bg-black text-white">
    
    <div class="py-5 text-center border-bottom border-secondary" 
         style="background: repeating-linear-gradient(45deg, #111, #111 10px, #1a1a1a 10px, #1a1a1a 20px);">
        <div class="container">
            <h1 class="display-3 fw-bold text-uppercase text-stenciled mb-2">Strategic Assets</h1>
            <p class="lead font-monospace opacity-75 mb-0">TANGIBLE HOLDINGS // FULLY OWNED // DEBT-FREE</p>
        </div>
    </div>

    <div class="container py-5">
        
        <div class="row align-items-center mb-5 pb-5 border-bottom border-secondary">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="asset-card p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="asset-icon me-3">
                            <i class="fa-solid fa-fort-awesome fa-2x text-warning"></i>
                        </div>
                        <h2 class="h4 fw-bold text-uppercase mb-0">The Fortress</h2>
                    </div>
                    <p class="text-secondary small mb-4">
                        The primary headquarters and recording facility. A converted industrial space designed for total acoustic isolation and self-sufficiency.
                    </p>
                    <table class="table spec-table">
                        <tr>
                            <td>Location</td>
                            <td class="text-end text-white">Blacksburg, VA</td>
                        </tr>
                        <tr>
                            <td>Function</td>
                            <td class="text-end text-white">HQ / Recording Studio</td>
                        </tr>
                        <tr>
                            <td>Capabilities</td>
                            <td class="text-end text-white">Analog/Digital / CD Mfg</td>
                        </tr>
                        <tr>
                            <td>Security</td>
                            <td class="text-end text-success">Perimeter Secured</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="p-5 border border-secondary text-center opacity-50" style="background-image: url('https://assets.raggiesoft.com/common/images/patterns/grid.png');">
                    <i class="fa-duotone fa-waveform-lines fa-5x mb-3"></i>
                    <h5 class="text-uppercase text-muted">Facility Schematic: Restricted</h5>
                </div>
            </div>
        </div>

        <div class="mb-5 pb-5 border-bottom border-secondary">
            <div class="d-flex align-items-center mb-4">
                <i class="fa-solid fa-truck-container fa-2x me-3 text-danger"></i>
                <h2 class="h3 fw-bold text-uppercase mb-0">Logistics Division (The Fleet)</h2>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="asset-card p-4">
                        <div class="badge bg-secondary mb-3">FLEET ID: SE-01</div>
                        <h3 class="h5 fw-bold text-uppercase">2002 Prevost H3-45 "The Iron Horse"</h3>
                        <p class="small text-secondary">
                            The workhorse of the early 2000s tours. Customized for accessibility and heavy equipment transport.
                        </p>
                        <ul class="list-unstyled font-monospace small text-muted mt-3">
                            <li><i class="fa-solid fa-check text-success me-2"></i>Title: Clear (Paid Cash)</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i>Lift: BraunAbility UVL</li>
                            <li><i class="fa-solid fa-id-card text-info me-2"></i>Primary Operator: Tyler Wright (Class A CDL)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="asset-card p-4 border-danger">
                        <div class="badge bg-danger mb-3">FLEET ID: SE-02</div>
                        <h3 class="h5 fw-bold text-uppercase">2019 Prevost H3-45 "The Sovereign"</h3>
                        <p class="small text-secondary">
                            Current flagship. Features advanced suspension for spinal injury comfort and mobile recording suite.
                        </p>
                        <ul class="list-unstyled font-monospace small text-muted mt-3">
                            <li><i class="fa-solid fa-check text-success me-2"></i>Title: Clear (Paid Cash)</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i>Livery: "Stardust" Matte Black</li>
                            <li><i class="fa-solid fa-id-card text-info me-2"></i>Primary Operator: Evan Wright (Class A CDL)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <div class="d-flex align-items-center mb-4">
                <i class="fa-solid fa-drum fa-2x me-3 text-info"></i>
                <h2 class="h3 fw-bold text-uppercase mb-0">The Armory</h2>
            </div>

            <div class="asset-card p-0 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-dark text-center d-flex align-items-center justify-content-center p-4">
                        <i class="fa-duotone fa-drum-steelpan fa-5x text-secondary opacity-25"></i>
                    </div>
                    <div class="col-md-8 p-4">
                        <h3 class="h4 fw-bold text-uppercase">Asset: The "Neil" Configuration</h3>
                        <p class="text-info small fw-bold text-uppercase letter-spacing-1">Assigned To: Tyler Wright</p>
                        
                        <p class="text-secondary small">
                            A custom-built percussion architecture inspired by Neil Peart. Designed for maximum polyrhythmic complexity and the "Human Metronome" playing style. Includes electronic integration for hybrid acoustic/electronic performances.
                        </p>

                        <div class="row mt-4 font-monospace small">
                            <div class="col-6">
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2"><strong>Shells:</strong> 9-Piece DW Collector's Series</li>
                                    <li class="mb-2"><strong>Cymbals:</strong> 14-Piece Sabian Paragon</li>
                                    <li class="mb-2"><strong>Electronics:</strong> Roland V-Drums Integration</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2"><strong>Hardware:</strong> 24k Gold Plated (Corrosion Resist)</li>
                                    [cite_start]<li class="mb-2"><strong>Snare:</strong> The "Gated Reverb" Custom [cite: 74]</li>
                                    <li class="mb-2"><strong>Status:</strong> Tour Ready</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-body-tertiary py-4 text-center border-top border-secondary">
        <a href="/engine-room" class="btn btn-link text-decoration-none text-uppercase fw-bold text-body">
            <i class="fa-solid fa-arrow-left me-2"></i>Return to Headquarters
        </a>
    </div>

</div>