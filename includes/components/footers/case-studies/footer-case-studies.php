<?php
// includes/components/footers/case-studies/footer-case-studies.php
?>
<footer class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-5 col-md-6">
                <a href="/case-studies" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                         alt="RaggieSoft Logo" width="40" height="40" class="me-2 navbar-brand-raggiesoft">
                    <span class="fs-5 fw-bold text-uppercase brand-font">RaggieSoft Archives</span>
                </a>
                <p class="text-body-secondary small">
                    <strong>Operational Case Studies.</strong><br>
                    Documentation of Personified DevOps, Neurodivergent Systems Architecture, and Crisis Management protocols.
                </p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="/case-studies" class="nav-link p-0 text-body-secondary">Overview</a></li>
                    <li class="nav-item mb-2"><a href="/case-studies/cascade-protocol" class="nav-link p-0 text-body-secondary">Cascade Protocol</a></li>
                    <li class="nav-item mb-2"><a href="/case-studies/shenandoah-valley" class="nav-link p-0 text-body-secondary">Shenandoah Gauntlet</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 text-md-end">
                <h6 class="fw-bold mb-3">Connect</h6>
                <div class="d-flex justify-content-md-end gap-3">
                    <a href="https://linkedin.com/in/michael-ragsdale-raggiesoft" class="link-secondary fs-5" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="mailto:hireme@michaelpragsdale.com" class="link-secondary fs-5" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-body-secondary">
                <p class="mb-1">&copy; <?php echo date("Y"); ?> Michael Ragsdale.</p>
                <p class="mb-0 text-muted opacity-75">
                    <a href="/about/license" class="text-reset text-decoration-none border-bottom">CC BY-SA 4.0</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end small text-body-secondary mt-3 mt-md-0">
                <a href="/" class="text-decoration-none text-reset me-3">RaggieSoft Home</a>
            </div>
        </div>
    </div>
</footer>

<?php
// Standard Admin Access Easter Egg
$konami_config = [
    'title'      => 'Archive Level Access',
    'icon'       => 'fa-solid fa-database',
    'theme'      => '#dc3545', 
    'text_color' => '#ffffff',
    'image'      => '', 
    'body'       => '
        <h4 class="font-monospace text-white">> ROOT ACCESS GRANTED</h4>
        <p class="font-monospace text-warning mt-2">
            Restricted files are now visible.<br>
            Proceed with caution.
        </p>',
    'btn_text'   => 'View Logs',
    'btn_link'   => '/admin/logs',
    'btn_style'  => 'btn-outline-light'
];

include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>