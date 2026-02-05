<?php
// pages/raggiesoft-books/knox/lore/overview.php
// The Lore Hub: Central gateway to World, Tech, and Factions.
// Theme: "Archive" - Clean, organized, but clearly written by the natives.

$heroImage = "https://assets.raggiesoft.com/knox/images/aerie-hold-atmospheric.jpg";
?>

<section class="position-relative py-5" style="background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center; min-height: 50vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-75"></div>
    <div class="container position-relative h-100 d-flex flex-column justify-content-center pt-5">
        <h1 class="display-3 fw-bold text-white text-uppercase" style="letter-spacing: -1px;">The Weave Database</h1>
        <p class="lead text-light font-monospace">
            <span class="text-success">NATIVE KNOWLEDGE</span> // <span class="text-white-50">SURVIVAL PROTOCOLS</span>
        </p>
        <p class="text-white-50" style="max-width: 600px;">
            To the Axiom, this planet is a "Green Hell" to be conquered. To us, it is a complex, living machine that provides everything we need—if you know where to look.
        </p>
    </div>
</section>

<div class="bg-body-tertiary py-5">
    <div class="container">
        
        <div class="row g-4 mb-4">
            
            <div class="col-lg-6">
                <div class="card h-100 border-success shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="fa-duotone fa-globe-stand fa-2x text-success"></i>
                            </div>
                            <h3 class="h4 card-title mb-0 font-monospace text-body">TELSUS MINOR</h3>
                        </div>
                        <p class="card-text text-body-secondary small">
                            A world defined by <strong>high gravity</strong> and extreme verticality. From the crushing dark of the Jungle Floor to the breathable "Weave" 1.5 kilometers up.
                        </p>
                        <ul class="list-unstyled small font-monospace text-muted mb-4">
                            <li><i class="fa-solid fa-arrow-up me-2 text-success"></i>The Canopy (1.5km - 3km)</li>
                            <li><i class="fa-solid fa-arrow-down me-2 text-warning"></i>The Jungle Floor (-3km)</li>
                            <li><i class="fa-solid fa-skull me-2 text-danger"></i>The Blight Zone</li>
                        </ul>
                        <a href="/raggiesoft-books/knox/lore/telsus-minor/overview" class="btn btn-outline-success w-100 rounded-0">
                            Explore the Planet
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-danger shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                                <i class="fa-duotone fa-industry-windows fa-2x text-danger"></i>
                            </div>
                            <h3 class="h4 card-title mb-0 font-monospace text-body">PORT TELSUS</h3>
                        </div>
                        <p class="card-text text-body-secondary small">
                            The "Civilized Wound." A 16-kilometer-high plateau occupied by the Axiom Corporation. It smells of ozone, rot, and oppression.
                        </p>
                        <div class="alert alert-danger p-2 small font-monospace rounded-0 mb-4">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i>Status: HOSTILE TERRITORY
                        </div>
                        <a href="/raggiesoft-books/knox/lore/telsus-minor/port-telsus" class="btn btn-outline-danger w-100 rounded-0">
                            Analyze the Threat
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-12">
                <div class="card border-primary shadow-lg overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-4 bg-glass-dark d-flex align-items-center justify-content-center p-4">
                            <i class="fa-duotone fa-toolbox fa-5x text-primary opacity-75"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h3 class="card-title font-monospace text-primary">THE TOY BOX</h3>
                                <p class="card-text text-body-secondary">
                                    <strong>Origin:</strong> Scavenged / Hand-Built<br>
                                    <strong>Designer:</strong> Kael Rostova (The Toymaker)<br>
                                    <strong>Primary Operator:</strong> Anya Rostova (The Ghost)
                                </p>
                                <p class="card-text small text-muted">
                                    The Axiom calls them "Anomalies." We call them Toys. Crude, primitive devices built from scrap electronics, chemically agitated moss, and sap. They are designed to do one thing: make the Axiom's high-tech occupation look like a series of unfortunate accidents.
                                </p>
                                <hr>
                                <div class="d-flex gap-2 flex-wrap mb-3">
                                    <span class="skill-pill border-secondary">The Flea</span>
                                    <span class="skill-pill border-secondary">Goo-Pot</span>
                                    <span class="skill-pill border-secondary">Stalker's Call</span>
                                    <span class="skill-pill border-secondary">Bio-Scrambler</span>
                                </div>
                                <a href="/raggiesoft-books/knox/lore/toys/overview" class="btn btn-primary w-100 rounded-0">
                                    Open the Arsenal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="row g-4 mt-1">
            <div class="col-md-4">
                <div class="p-3 border bg-body h-100">
                    <h5 class="text-success font-monospace">FLORA</h5>
                    <ul class="list-unstyled small text-body-secondary mb-0">
                        <li class="mb-2"><a href="#" class="text-reset text-decoration-none hover-underline">> Glassvines</a></li>
                        <li class="mb-2"><a href="#" class="text-reset text-decoration-none hover-underline">> Spore-Blossoms</a></li>
                        <li class="mb-0"><a href="#" class="text-reset text-decoration-none hover-underline">> Glimmer Moss</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border bg-body h-100">
                    <h5 class="text-warning font-monospace">FAUNA</h5>
                    <ul class="list-unstyled small text-body-secondary mb-0">
                        <li class="mb-2"><a href="#" class="text-reset text-decoration-none hover-underline">> Grave Stalkers</a></li>
                        <li class="mb-2"><a href="#" class="text-reset text-decoration-none hover-underline">> Clicker-Swarms</a></li>
                        <li class="mb-0"><a href="#" class="text-reset text-decoration-none hover-underline">> Sky-Rays</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border bg-body h-100">
                    <h5 class="text-primary font-monospace">CULTURE</h5>
                    <ul class="list-unstyled small text-body-secondary mb-0">
                        <li class="mb-2"><a href="/raggiesoft-books/knox/lore/telsus-minor/aerie-hold" class="text-reset text-decoration-none hover-underline">> Aerie-Hold Layout</a></li>
                        <li class="mb-2"><a href="#" class="text-reset text-decoration-none hover-underline">> The Sky-River</a></li>
                        <li class="mb-0"><a href="#" class="text-reset text-decoration-none hover-underline">> Trade & Barter</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>