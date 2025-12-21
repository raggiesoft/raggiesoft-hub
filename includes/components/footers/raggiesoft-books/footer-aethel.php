<?php
// includes/components/footers/raggiesoft-books/footer-aethel.php
// THE SAGA FOOTER: Immersive "Back Cover" Design
// Theme: Onyx, Gold, and Cinzel
?>
<footer class="mt-auto bg-black text-white border-top border-warning border-opacity-50 py-5" style="border-width: 2px !important;">
    <div class="container">
        <div class="row gy-5">
            
            <div class="col-lg-5 col-md-12">
                <a href="/raggiesoft-books/aethel-saga" class="d-flex align-items-center mb-3 text-decoration-none group-hover">
                    <img src="https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png" 
                         alt="The Silver Gauntlet Logo" 
                         width="60" 
                         class="me-3 opacity-90">
                    <div>
                        <span class="d-block cinzel-font fs-4 text-warning fw-bold letter-spacing-1">The Silver Gauntlet</span>
                        <span class="d-block cinzel-font fs-6 text-secondary opacity-75">Of Aethel</span>
                    </div>
                </a>
                <p class="text-secondary small fst-italic" style="max-width: 400px; font-family: 'Georgia', serif;">
                    "Two twins. One broken world. And a debt that must be paid in fire."
                </p>
                <div class="mt-4">
                    <span class="badge bg-dark border border-secondary text-secondary me-2">Fantasy Adventure</span>
                    <span class="badge bg-dark border border-secondary text-secondary">Est. 1989 (In Spirit)</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="cinzel-font text-warning mb-4 border-bottom border-secondary d-inline-block pb-1">The Tome</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/raggiesoft-books/aethel-saga" class="nav-link p-0 text-secondary hover-text-white">
                            <i class="fa-duotone fa-book-sparkles me-2"></i>Saga Overview
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/raggiesoft-books/aethel-saga/lore/characters" class="nav-link p-0 text-secondary hover-text-white">
                            <i class="fa-duotone fa-users-crown me-2"></i>Dramatis Personae
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/raggiesoft-books/aethel-saga/soundtrack" class="nav-link p-0 text-secondary hover-text-white">
                            <i class="fa-duotone fa-compact-disc me-2"></i>Original Soundtrack
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/raggiesoft-books/aethel-saga/map" class="nav-link p-0 text-secondary hover-text-white text-decoration-line-through opacity-50" title="Coming Soon">
                            <i class="fa-duotone fa-map-location-dot me-2"></i>Map of Aethel
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 text-lg-end">
                <h5 class="cinzel-font text-warning mb-4 border-bottom border-secondary d-inline-block pb-1">Production</h5>
                
                <ul class="list-unstyled text-secondary small mb-4">
                    <li class="mb-2">
                        <strong class="text-white">Written By:</strong> Michael Ragsdale
                    </li>
                    <li class="mb-2">
                        <strong class="text-white">Music By:</strong> Firelight (Engine Room Records)
                    </li>
                    <li>
                        <strong class="text-white">Location:</strong> Norfolk, VA
                    </li>
                </ul>

                <a href="/" class="d-inline-flex align-items-center text-decoration-none bg-dark border border-secondary rounded px-3 py-2 text-secondary hover-border-warning transition-all">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" width="20" class="me-2 opacity-50" style="filter: grayscale(100%);">
                    <span class="small text-uppercase letter-spacing-1">A RaggieSoft Production</span>
                </a>
            </div>
        </div>

        <hr class="border-secondary opacity-25 my-5">

        <div class="row align-items-center small text-secondary">
            <div class="col-md-6 text-center text-md-start font-monospace">
                &copy; <?php echo date("Y"); ?> RaggieSoft Publishing. All Rights Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <span class="opacity-50 me-3">V.<?php echo date("y.m"); ?> (Iron Era Build)</span>
                <a href="#" class="text-secondary text-decoration-none hover-text-warning"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php
// EASTER EGG: The Architect's Cheat Code
// This overrides the default Konami code with a theme-specific reward.
$konami_config = [
    'title'      => 'The Architect\'s Vault',
    'icon'       => 'fa-duotone fa-dungeon',
    'theme'      => '#d4af37', // Sunstead Gold
    'text_color' => '#000000',
    'image'      => 'https://assets.raggiesoft.com/aethel/images/logos/silver-gauntlet-of-aethel-logo.png',
    'body'       => '
        <h4 class="cinzel-font fw-bold">You have unlocked the Hidden Path.</h4>
        <p class="mt-2" style="font-family: Georgia, serif;">
            "Only those who know the old ways may enter the Solar Garden without burning."
        </p>
        <hr class="border-dark opacity-25">
        <p class="small fst-italic mb-0">Debug Mode: <strong>ACTIVE</strong></p>',
    'btn_text'   => 'Enter The Vault',
    'btn_link'   => '/raggiesoft-books/aethel-saga/vault' // Future hidden page?
];

// Include the logic to make the code work
include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>

<style>
    /* Footer Specific Micro-Interactions */
    .hover-text-white:hover { color: #fff !important; transition: color 0.3s ease; }
    .hover-text-warning:hover { color: #d4af37 !important; transition: color 0.3s ease; }
    .hover-border-warning:hover { border-color: #d4af37 !important; color: #fff !important; }
    .transition-all { transition: all 0.3s ease; }
</style>