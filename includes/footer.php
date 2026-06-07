<?php
// includes/footer.php
// v8.3 - Fixed Double-Script Invocation & Turbo Conflict
// Updated: Added Dynamic Location Logic

// --- 1. DYNAMIC LOCATION LOGIC ---
$location_json_url = 'https://assets.raggiesoft.com/portfolio/json/locations.json';
$hq_location = 'Location Classified'; // Fallback in case of failure

$location_json = @file_get_contents($location_json_url);
if ($location_json !== false) {
    $location_data = json_decode($location_json, true);
    if (is_array($location_data)) {
        foreach ($location_data as $loc) {
            if (isset($loc['is_home']) && $loc['is_home'] === true) {
                // Strip out "In-Office: " and trim any whitespace
                $hq_location = trim(str_replace('In-Office:', '', $loc['label']));
                break;
            }
        }
    }
}

// --- 2. RESOLVE VISUAL FOOTER ---
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
            <div class="col-lg-5 text-center text-lg-start small text-body-secondary mb-2 mb-lg-0">
                <span class="fw-bold">&copy; 2008 &ndash; <?php echo date("Y"); ?> Michael Ragsdale.</span>
                <span class="mx-2 opacity-50 d-none d-lg-inline">|</span>
                <span class="opacity-75 d-block d-lg-inline mt-1 mt-lg-0" style="font-size: 0.9em;">
                    Content: <a href="/raggiesoft-media/licensing" class="text-reset text-decoration-none border-bottom">CC BY-SA 4.0</a> &bull; 
                    Code: <a href="/raggiesoft-media/licensing" class="text-reset text-decoration-none border-bottom">MIT</a>
                </span>
            </div>
            <div class="col-lg-7 text-center text-lg-end small text-body-secondary mt-2 mt-lg-0">
                <a href="/raggiesoft-media" class="text-decoration-none text-reset me-3 hover-opacity fw-bold">RaggieSoft Media</a>
                <a href="/raggiesoft-media/careers" class="text-decoration-none text-danger fw-bold me-3 hover-opacity">
                    <i class="fa-solid fa-shield-exclamation me-1" aria-hidden="true"></i>Careers (Fraud Alert)
                </a>
                <a href="/about/privacy" class="text-decoration-none text-reset me-3 hover-opacity">Privacy</a>
                <a href="/about/terms" class="text-decoration-none text-reset me-3 hover-opacity">Terms</a>
                <a href="/raggiesoft-media/licensing" class="text-decoration-none text-reset me-3 hover-opacity">Licenses</a>
                <a href="/contact" class="text-decoration-none text-reset me-3 hover-opacity">Contact</a>
                <a href="/about/ai-disclaimer" class="text-decoration-none text-primary-emphasis fw-bold text-uppercase letter-spacing-1 d-inline-block mt-2 mt-md-0" style="font-size: 0.9em;">
                    <i class="fa-duotone fa-robot-astromech me-1"></i>AI Disclaimer
                </a>
            </div>
        </div>
    </div>
</div>

<div id="global-player-zone" class="fixed-bottom" style="z-index: 1050;">
    
    <?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

    <script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>
    
    <script>
        // Initialize global registry if not exists
        window.STARDUST_PLAYLIST = window.STARDUST_PLAYLIST || [];
    </script>
</div>

<script src="<?php echo $cdn_root; ?>/common/js/bootstrap.js"></script>
<script>
// 1. Wrap the Store UI logic into a reusable function
function initializeStorePreferences() {
    const savedPlatform = localStorage.getItem('preferredMusicStore');
    
    function updateButtonGroup(group, platformData) {
        const mainBtn = group.querySelector('.main-store-btn');
        const toggleBtn = group.querySelector('.toggle-store-btn');
        const icon = group.querySelector('.main-store-icon');
        const textSpan = group.querySelector('.main-store-text');
        
        if (!mainBtn || !toggleBtn) return; // Safety check
        
        mainBtn.className = mainBtn.className.replace(/btn-\w+/, platformData.color);
        toggleBtn.className = toggleBtn.className.replace(/btn-\w+/, platformData.color);
        mainBtn.href = platformData.url;
        if(icon) icon.className = `main-store-icon ${platformData.icon} me-2`;
        if(textSpan) textSpan.textContent = `${mainBtn.dataset.defaultText} ${platformData.name}`;
    }

    if (savedPlatform) {
        document.querySelectorAll('.dynamic-store-group').forEach(group => {
            const targetLink = group.querySelector(`.store-selector-link[data-platform="${savedPlatform}"]`);
            if (targetLink) updateButtonGroup(group, targetLink.dataset);
        });
    }

    document.querySelectorAll('.store-selector-link').forEach(link => {
        // Remove old listeners to prevent duplicates on SPA load
        const newLink = link.cloneNode(true);
        link.parentNode.replaceChild(newLink, link);
        
        newLink.addEventListener('click', function(e) {
            localStorage.setItem('preferredMusicStore', this.dataset.platform);
        });
    });
}

// 2. Run on initial hard load
document.addEventListener('DOMContentLoaded', initializeStorePreferences);

// 3. The Elara SPA Lifecycle Hook
document.addEventListener('elara:loaded', function() {
    // Re-bind the store selector buttons in the new DOM
    initializeStorePreferences();

    // Re-bind the Stardust Engine tracklist buttons so music keeps playing
    if (typeof bindTracklistButtons === 'function') {
        bindTracklistButtons(); 
    }

    // Ping Google Analytics to log the virtual pageview
    if (typeof gtag === 'function') {
        gtag('config', '<?php echo htmlspecialchars($settings['analytics']['trackingId'] ?? ''); ?>', {
            'page_path': window.location.pathname
        });
    }
});
</script>
<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>