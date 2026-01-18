<?php
// pages/raggiesoft-books/knox/overview.php
$pageTitle = "Knox | Kinetic Null Operative: X";
$pageDesc  = "To the Axiom Corporation, Knox is a phantom super-soldier. In reality, they are two twins trying to save their home.";
// Assuming theme supports dark/light mode via data-bs-theme on body/html
$heroImage = "/raggiesoft-assets/knox/images/aerie-hold-atmospheric.jpg"; 

// 1. Include Book Header 
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header-book.php'); 
?>

<section class="position-relative py-5" style="background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center; min-height: 65vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-75"></div>
    
    <div class="container position-relative h-100 d-flex flex-column justify-content-center pt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-1 fw-bold text-white text-uppercase" style="letter-spacing: -2px;">K.N.O.X.</h1>
                <p class="lead text-light font-monospace mb-4">
                    <span class="text-danger">K</span>INETIC. <span class="text-danger">N</span>ULL. <span class="text-danger">O</span>PERATIVE: <span class="text-danger">X</span>.
                </p>
                <div class="d-flex gap-3">
                    <a href="/raggiesoft-books/knox/chapters/book-1/chapter-1" class="btn btn-danger btn-lg rounded-0 px-4">
                        <i class="fa-duotone fa-book-open me-2"></i>Start Reading
                    </a>
                    <a href="#dossier" class="btn btn-outline-light btn-lg rounded-0 px-4">
                        View Dossier
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5" id="dossier">
    <div class="row align-items-center g-5">
        
        <div class="col-lg-7">
            <h2 class="fw-bold mb-3 text-body">The Axiom's Nightmare</h2>
            <p class="lead text-body">
                To the Axiom Corporation, <strong>Subject K.N.O.X.</strong> is a Tier-1 threat: a rogue Republic super-soldier, likely male, heavy build, with extensive combat scarring. He is a phantom capable of leveling fuel depots and vanishing without a trace.
            </p>
            <hr class="my-4 text-danger opacity-100" style="width: 50px; border-width: 3px;">
            <h3 class="h4 text-body">The Reality</h3>
            <p class="text-body">
                The Axiom is wrong. There is no soldier. There is no Knox.
            </p>
            <p class="text-body">
                There is only <strong>Anya</strong>, a 4'11" woman often mistaken for a child, and her brother <strong>Kael</strong>, a nearsighted technician. They possess no military training and not a single scar on their bodies. Their invisibility isn't tech—it's the Axiom's arrogance. They are looking for a monster; they simply don't see the "children" standing right in front of them.
            </p>
        </div>

        <div class="col-lg-5">
            <div class="card border-danger shadow-lg rounded-0">
                <div class="card-header bg-danger text-white text-uppercase fw-bold rounded-0 d-flex justify-content-between align-items-center">
                    <span><i class="fa-solid fa-shield-exclamation me-2"></i>Threat Profile</span>
                    <span class="badge bg-black text-danger border border-danger">ALPHA-PRIME</span>
                </div>
                
                <div class="card-body" id="axiom-profile">
                    <h5 class="card-title text-danger font-monospace">SUBJECT: K.N.O.X.</h5>
                    <ul class="list-unstyled small font-monospace text-body-secondary mb-3">
                        <li><strong>Designation:</strong> Kinetic Null Operative: X</li>
                        <li><strong>Est. Height:</strong> 1.9m - 2.0m</li>
                        <li><strong>Est. Build:</strong> Heavy / Muscular</li>
                        <li><strong>Distinguishing Marks:</strong> Extensive combat scarring (Assumed)</li>
                        <li><strong>Origin:</strong> Republic Special Forces (Assumed)</li>
                    </ul>
                    <div class="alert alert-danger d-flex align-items-center p-2 small mb-0 rounded-0" role="alert">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i>
                        <div><strong>Warning:</strong> Target utilizes military-grade ordnance. Do not engage alone.</div>
                    </div>
                </div>

                <div class="card-body d-none" id="reality-profile">
                    <h5 class="card-title text-success font-monospace">REALITY: THE ROSTOVA TWINS</h5>
                    <ul class="list-unstyled small font-monospace text-body mb-3">
                        <li><strong>Operative A:</strong> Anya (1.5m / 4'11")</li>
                        <li><strong>Operative K:</strong> Kael (1.7m / 5'7")</li>
                        <li><strong>Marks:</strong> None. Zero scarring.</li>
                        <li><strong>Origin:</strong> Aerie-Hold (Native)</li>
                        <li><strong>Status:</strong> GHOSTS (Unidentified)</li>
                    </ul>
                    <div class="alert alert-success d-flex align-items-center p-2 small mb-0 rounded-0" role="alert">
                        <i class="fa-solid fa-leaf me-2"></i>
                        <div><strong>Note:</strong> Target utilizes chemistry and environment. You will not see them coming.</div>
                    </div>
                </div>
                
                <div class="card-footer bg-body-tertiary border-secondary-subtle text-center">
                    <button class="btn btn-sm btn-outline-danger rounded-0 w-100" onclick="toggleProfile()">
                        <i class="fa-duotone fa-key me-2"></i>Decryption Key: ROOK
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-body-tertiary py-5 border-top border-bottom">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="fw-bold text-body">The Telsan Gap</h2>
                <p class="text-body-secondary">A patch of unaligned dark space. A navigational hazard. A home.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-body border h-100 shadow-sm">
                    <i class="fa-duotone fa-industry-windows fa-3x text-body-secondary mb-3"></i>
                    <h4 class="text-body">The Spire</h4>
                    <p class="small text-body-secondary">
                        A 10-mile high obsidian tower piercing the sky. The seat of the Axiom Corporation's power, built on the industrial rot of Port Telsus.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-body border h-100 shadow-sm">
                    <i class="fa-duotone fa-trees fa-3x text-success mb-3"></i>
                    <h4 class="text-body">The Weave</h4>
                    <p class="small text-body-secondary">
                        A vertical jungle of miles-high trees. To the Axiom, it is the "Green Hell." To the natives, it is a symbiotic ecosystem that provides life.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-body border h-100 shadow-sm">
                    <i class="fa-duotone fa-gem fa-3x text-primary mb-3"></i>
                    <h4 class="text-body">The Moss</h4>
                    <p class="small text-body-secondary">
                        Glimmer Moss. Rare. Bioluminescent. Capable of quantum entanglement. The only thing valuable enough to keep the twins alive.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleProfile() {
    const axiom = document.getElementById('axiom-profile');
    const reality = document.getElementById('reality-profile');
    const card = axiom.closest('.card');
    const header = card.querySelector('.card-header');
    const btn = card.querySelector('button');

    if (axiom.classList.contains('d-none')) {
        // Switch to Axiom View (Red)
        axiom.classList.remove('d-none');
        reality.classList.add('d-none');
        
        // Reset Styles
        card.classList.replace('border-success', 'border-danger');
        header.classList.replace('bg-success', 'bg-danger');
        btn.classList.replace('btn-outline-success', 'btn-outline-danger');
        
    } else {
        // Switch to Reality View (Green)
        axiom.classList.add('d-none');
        reality.classList.remove('d-none');
        
        // Update Styles for Reality
        card.classList.replace('border-danger', 'border-success');
        header.classList.replace('bg-danger', 'bg-success');
        btn.classList.replace('btn-outline-danger', 'btn-outline-success');
    }
}
</script>

<?php
// 3. Include Footer
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/components/footers/raggiesoft-books/footer-knox.php');
?>