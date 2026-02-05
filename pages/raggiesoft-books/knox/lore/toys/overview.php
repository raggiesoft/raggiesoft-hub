<?php
// pages/raggiesoft-books/knox/lore/toys/overview.php
// The Toy Box: A catalog of improvised ordnance.
// Context: "Crude, primitive, and totally effective."

// Hero: Close up of a circuit board or wire (Abstract)
$heroImage = "/raggiesoft-assets/knox/images/macro-circuit-green.jpg"; // Placeholder path
?>

<section class="position-relative py-5" style="background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center; min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-75"></div>
    <div class="container position-relative h-100 d-flex flex-column justify-content-center pt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold text-white text-uppercase font-monospace">The Toy Box</h1>
                <p class="lead text-light font-monospace">
                    <span class="text-primary">DESIGNER:</span> KAEL ROSTOVA // <span class="text-success">STATUS:</span> ACTIVE ARSENAL
                </p>
                <p class="text-white-50">
                    "The Axiom expects military-grade ordnance. They scan for thermal detonators and plasma charges. They don't scan for tree sap, chemically agitated moss, or rusted repulsor coils. That is why they lose."
                </p>
            </div>
        </div>
    </div>
</section>

<div class="bg-body-tertiary py-5">
    <div class="container">
        
        <div class="row mb-5">
            <div class="col-12">
                <div class="p-4 border bg-body">
                    <h4 class="font-monospace text-body mb-3">OPERATIONAL DOCTRINE</h4>
                    <p class="text-body-secondary small mb-0">
                        All devices ("Toys") must meet three criteria:<br>
                        1. <strong>Scavenged:</strong> Components must be sourced from Axiom trash or the Jungle.<br>
                        2. <strong>Deniable:</strong> Damage must look like "environmental hazard" or "pilot error."<br>
                        3. <strong>Portable:</strong> Must fit in Anya's pack (Max weight: 0.5kg per unit).
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-secondary">
                    <div class="card-header bg-body border-bottom border-secondary d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold">The Flea</span>
                        <i class="fa-duotone fa-microchip text-secondary"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-danger text-danger mb-3">KINETIC / SABOTAGE</span>
                        <p class="card-text small text-body-secondary">
                            A small limpet mine with a chemical timer. Designed to attach magnetically to engine housings.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Detonates with a sharp <em>crack</em>, shattering delicate repulsor fins. Causes vehicles to crash due to "mechanical failure."
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-sm btn-outline-secondary w-100 rounded-0 disabled" aria-disabled="true">Schematic Offline</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-danger">
                    <div class="card-header bg-body border-bottom border-danger d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold text-danger">Methane Catalyst</span>
                        <i class="fa-duotone fa-fire text-danger"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-danger text-danger mb-3">HIGH YIELD / AREA DENIAL</span>
                        <p class="card-text small text-body-secondary">
                            A canister that bonds with ambient swamp methane to create a hyper-volatile fuel-air explosive.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Turns a foggy ravine into a thermobaric bomb. Vaporizes convoys. Leaves no bomb fragments, only gas residue.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-sm btn-outline-danger w-100 rounded-0 disabled" aria-disabled="true">Restricted Data</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-success">
                    <div class="card-header bg-body border-bottom border-success d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold text-success">The Goo-Pot</span>
                        <i class="fa-duotone fa-flask text-success"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-success text-success mb-3">CHEMICAL / NON-LETHAL</span>
                        <p class="card-text small text-body-secondary">
                            Expanding resin bomb derived from tree sap and accelerants.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Gums up powered armor joints and filter masks. Panic-inducing but harmless. Ideal for non-violent takedowns.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-sm btn-outline-success w-100 rounded-0 disabled" aria-disabled="true">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-header bg-body border-bottom border-primary d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold text-primary">Stalker's Call</span>
                        <i class="fa-duotone fa-waveform-lines text-primary"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-primary text-primary mb-3">PSYCH / AUDIO</span>
                        <p class="card-text small text-body-secondary">
                            A reprogrammed acoustic emitter playing the hunting scream of a Grave Stalker.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Terror. Causes patrols to waste ammunition firing at shadows. Useful for area clearance without engagement.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-sm btn-outline-primary w-100 rounded-0 disabled" aria-disabled="true">Audio File Corrupted</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-warning">
                    <div class="card-header bg-body border-bottom border-warning d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold text-warning">The Leech</span>
                        <i class="fa-duotone fa-battery-slash text-warning"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-warning text-warning mb-3">ELECTRONIC / DRAIN</span>
                        <p class="card-text small text-body-secondary">
                            A parasitic power shunt mimicking a battery fault.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Silently drains power cells in equipment or perimeter fences. Looks like standard equipment failure.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="small text-muted font-monospace">Designer: Pip</span>
                            <a href="#" class="btn btn-sm btn-outline-warning rounded-0 disabled" aria-disabled="true">Protoype</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-secondary">
                    <div class="card-header bg-body border-bottom border-secondary d-flex justify-content-between align-items-center">
                        <span class="font-monospace text-uppercase fw-bold">Bio-Scrambler</span>
                        <i class="fa-duotone fa-radar text-secondary"></i>
                    </div>
                    <div class="card-body">
                        <span class="skill-pill border-secondary text-secondary mb-3">ECM / STEALTH</span>
                        <p class="card-text small text-body-secondary">
                            Emits frequencies that flood bio-scanners with nonsensical data.
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="small font-monospace mb-0 text-muted">
                            <strong>Effect:</strong> Masks the presence of Glimmer Moss (or people) from Axiom sensors. Essential for smuggling.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-sm btn-outline-secondary w-100 rounded-0 disabled" aria-disabled="true">Encrypted</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>