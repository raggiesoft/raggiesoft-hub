<footer class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4 align-items-center">
            
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                    <img src="https://assets.raggiesoft.com/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                         alt="RaggieSoft" width="30" height="30" class="me-2 grayscale opacity-50">
                    <span class="fw-bold text-uppercase small letter-spacing-2">RaggieSoft // Family</span>
                </div>
                <p class="text-muted small mb-0">
                    &copy; 2008-<?php echo date("Y"); ?> Michael Ragsdale.<br>
                    <span class="opacity-75">Content: CC BY-SA 4.0 | Code: MIT</span>
                </p>
            </div>

            <div class="col-md-6 text-md-end">
                <ul class="list-inline mb-2 small">
                    <li class="list-inline-item"><a href="/family/michael" class="text-decoration-none text-muted">The Architect</a></li>
                    <li class="list-inline-item border-start ps-3 ms-2"><a href="/family/paige" class="text-decoration-none text-muted">Safe Person</a></li>
                    <li class="list-inline-item border-start ps-3 ms-2"><a href="/engine-room" class="text-decoration-none text-muted">Engine Room</a></li>
                </ul>
                <div class="small text-muted">
                    <a href="/about/privacy" class="text-reset text-decoration-none me-2">Privacy</a> &bull; 
                    <a href="/about/terms" class="text-reset text-decoration-none mx-2">Terms</a> &bull; 
                    <a href="/about/license" class="text-reset text-decoration-none ms-2">License</a>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php
// Custom "Family Mode" Konami Code
$konami_config = [
    'title'      => 'Elara Diagnostic Mode',
    'icon'       => 'fa-duotone fa-microchip-ai',
    'theme'      => '#20c997', 
    'text_color' => '#ffffff',
    'image'      => 'https://assets.raggiesoft.com/family/images/atmospheric/amanda-elara.jpg',
    'body'       => '
        <h4 class="font-monospace text-white">> DIAGNOSTIC ACTIVE</h4>
        <p class="font-monospace text-light mt-2">
            Elara has recognized your signature.<br>
            Routing tables exposed. Latency: 0ms.
        </p>',
    'btn_text'   => 'View Routing Table',
    'btn_link'   => '/family/amanda-elara'
];
include ROOT_PATH . '/includes/components/easter-eggs/konami.php'; 
?>