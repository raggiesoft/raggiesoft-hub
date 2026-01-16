<?php
// includes/components/footers/footer-default.php
?>
<footer class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-4 col-md-6">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                         alt="RaggieSoft Logo" width="40" height="40" class="me-2 navbar-brand-raggiesoft">
                    <span class="fs-5 fw-bold text-uppercase brand-font">RaggieSoft</span>
                </a>
                <p class="text-body-secondary small">
                    Digital craftsmanship since 1997.<br> Specializing in narrative-driven experiences and systems architecture.
                </p>
                <div class="small text-muted mt-3">
                    <i class="fa-solid fa-location-dot me-1"></i> Norfolk, VA &bull; Est. 2008
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Projects</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="/engine-room" class="nav-link p-0 text-body-secondary">Engine Room Records</a></li>
                    <li class="nav-item mb-2"><a href="/family" class="nav-link p-0 text-body-secondary">Family</a></li>
                    <li class="nav-item mb-2"><a href="/raggiesoft-books/aethel" class="nav-link p-0 text-body-secondary">Silver Gauntlet of Aethel</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Built With</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><span class="nav-link p-0 text-body-secondary">PHP 8.4</span></li>
                    <li class="nav-item mb-2"><span class="nav-link p-0 text-body-secondary">Bootstrap 5.3</span></li>
                    <li class="nav-item mb-2"><span class="nav-link p-0 text-body-secondary">FontAwesome Pro</span></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 text-md-end">
                <h6 class="fw-bold mb-3">Connect</h6>
                <div class="d-flex justify-content-md-end gap-3">
                    <a href="https://github.com/raggiesoft" class="link-secondary fs-5" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com/in/michael-ragsdale-raggiesoft" class="link-secondary fs-5" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="mailto:hireme@michaelpragsdale.com" class="link-secondary fs-5" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-body-secondary">
                <p class="mb-1">&copy; 2008 &ndash; <?php echo date("Y"); ?> Michael Ragsdale.</p>
                <p class="mb-0 text-muted opacity-75" style="font-size: 0.85em;">
                    Content: <a href="/about/license" class="text-reset text-decoration-none border-bottom">CC BY-SA 4.0</a> &bull; 
                    Code: <a href="/about/license" class="text-reset text-decoration-none border-bottom">MIT License</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end small text-body-secondary mt-3 mt-md-0">
                <a href="/about/privacy" class="text-decoration-none text-reset me-3">Privacy</a>
                <a href="/about/terms" class="text-decoration-none text-reset me-3">Terms</a>
                <a href="/about/license" class="text-decoration-none text-reset">Licenses</a>
            </div>
        </div>
    </div>
</footer>

<?php
// Different reward for the main site!
$konami_config = [
    'title'      => 'System Admin Access',
    'icon'       => 'fa-solid fa-terminal',
    'theme'      => '#0d6efd', // Bootstrap Blue
    'text_color' => '#ffffff',
    'image'      => '',        // No image for this one, just text
    'body'       => '
        <h4 class="font-monospace text-white">> ACCESS GRANTED</h4>
        <p class="font-monospace text-success mt-2">
            Debug privileges have been elevated.<br>
            Welcome back, Administrator.
        </p>',
    'btn_text'   => 'Enter Dashboard',
    'btn_link'   => '/admin/dashboard',
    'btn_style'  => 'btn-outline-light'
];

include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>