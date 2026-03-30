<?php
// includes/footer.php
// v8.3 - Fixed Double-Script Invocation & Turbo Conflict

// 1. Resolve Visual Footer
if (isset($pageConfig['footer'])) {
    $footerFile = $pageConfig['footer'];
} else {
    $footerMap = $settings['footerMap'] ?? [];
    $footerFile = resolveAsset($footerMap, $request_uri) ?? 'footer-default';
}

$currentFooter = ROOT_PATH . '/includes/components/footers/' . $footerFile . '.php';
if (!file_exists($currentFooter)) {
    $currentFooter = ROOT_PATH . '/includes/components/footers/footer-default.php';
}
?>

<div id="visual-footer-container">
    <?php include $currentFooter; ?>
</div>

<div id="global-legal-band" class="bg-body-secondary border-top py-3 position-relative z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-body-secondary mb-2 mb-md-0">
                <span class="fw-bold">&copy; 2008 &ndash; <?php echo date("Y"); ?> Michael Ragsdale.</span>
                <span class="mx-2 opacity-50">|</span>
                <span class="opacity-75" style="font-size: 0.9em;">
                    Content: <a href="/about/license" class="text-reset text-decoration-none border-bottom">CC BY-SA 4.0</a> &bull; 
                    Code: <a href="/about/license" class="text-reset text-decoration-none border-bottom">MIT</a>
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end small text-body-secondary">
                <a href="/about/privacy" class="text-decoration-none text-reset me-3 hover-opacity">Privacy</a>
                <a href="/about/terms" class="text-decoration-none text-reset me-3 hover-opacity">Terms</a>
                <a href="/about/license" class="text-decoration-none text-reset me-3 hover-opacity">Licenses</a>
                <a href="/about/ai-disclaimer" class="text-decoration-none text-primary-emphasis fw-bold text-uppercase letter-spacing-1" style="font-size: 0.9em;">
                    <i class="fa-duotone fa-robot-astromech me-1"></i>AI Disclaimer
                </a>
            </div>
        </div>
    </div>
</div>

<div id="global-player-zone" class="fixed-bottom" style="z-index: 1050;" data-turbo-permanent="true">
    
    <?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

    <script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>
    
    <script>
        // Initialize global registry if not exists
        window.STARDUST_PLAYLIST = window.STARDUST_PLAYLIST || [];
    </script>
</div>

<script src="<?php echo $cdn_root; ?>/common/js/bootstrap.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Check if the user has a saved store preference
    const savedPlatform = localStorage.getItem('preferredMusicStore');
    
    // 2. Function to visually update a specific button group
    function updateButtonGroup(group, platformData) {
        const mainBtn = group.querySelector('.main-store-btn');
        const toggleBtn = group.querySelector('.toggle-store-btn');
        const icon = group.querySelector('.main-store-icon');
        const textSpan = group.querySelector('.main-store-text');
        
        // Update Colors
        mainBtn.className = mainBtn.className.replace(/btn-\w+/, platformData.color);
        toggleBtn.className = toggleBtn.className.replace(/btn-\w+/, platformData.color);
        
        // Update URL, Icon, and Text
        mainBtn.href = platformData.url;
        icon.className = `main-store-icon ${platformData.icon} me-2`;
        textSpan.textContent = `${mainBtn.dataset.defaultText} ${platformData.name}`;
    }

    // 3. Apply saved preference on page load
    if (savedPlatform) {
        document.querySelectorAll('.dynamic-store-group').forEach(group => {
            // Find the dropdown link that matches the saved platform to steal its data attributes
            const targetLink = group.querySelector(`.store-selector-link[data-platform="${savedPlatform}"]`);
            
            if (targetLink) {
                updateButtonGroup(group, targetLink.dataset);
            }
        });
    }

    // 4. Save preference when a user clicks a dropdown link
    document.querySelectorAll('.store-selector-link').forEach(link => {
        link.addEventListener('click', function(e) {
            // Save the newly selected platform to the browser
            localStorage.setItem('preferredMusicStore', this.dataset.platform);
            
            // Note: We don't preventDefault() here because we actually want the browser 
            // to follow the link and take them to Apple/Spotify/etc right after saving.
        });
    });
});
</script>

<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>