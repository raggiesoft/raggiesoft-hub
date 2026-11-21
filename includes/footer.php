<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/footer.php
 * Role: Global Master `<footer id="elara-master-footer">`, Legal/Fictitious Band & SPA JS Hooks
 * Domain: https://raggiesoft.com (Included at the bottom of `amanda/elara.php` & standalone errors)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Closes out every HTML document on `raggiesoft.com` in four layers:
 *   1. Dynamic HQ Location Lookup: Reads `/portfolio/json/locations.json` from
 *      `$cdnBaseUrl` to expose `$hq_location` to child footers.
 *   2. Visual Section Footer (`#visual-footer-container`): Resolves and includes
 *      the active visual footer (`footer-default.php` or `case-studies/footer-case-studies.php`)
 *      via `$pageConfig['footer']` or `settings.json`'s `footerMap`.
 *   3. Mandatory Global Legal & Fictitious Disclaimer Band (`#global-legal-band`):
 *      Displays dynamic copyright (`2008 – date("Y")`), MIT / CC BY-SA 4.0 dual
 *      licensing links, trademark claims, the network-wide **Fictitious Persons &
 *      Entities Disclaimer**, and governance links (Official Store, RaggieSoft Media,
 *      Careers Fraud Alert, Privacy, Terms, Licenses, Contact, AI Disclaimer).
 *   4. Global Modals & Client-Side Lifecycle Scripts:
 *      - Injects `modals/encyclopedia-modal.php` (`<dialog id="encyclopedia-modal">`).
 *      - Loads `piper-sullivan.js` and `encyclopedia.js`.
 *      - Defines `initializeStorePreferences()` to remember a visitor's preferred
 *        music streaming platform (`apple`, `youtube`, or `spotify`) in `localStorage`
 *        and re-binds both store buttons and GA4 virtual pageviews on `elara:loaded`.
 *      - Closes `</body>` and `</html>`.
 *
 * INPUTS:
 * - `$cdnBaseUrl`, `$pageConfig`, `$settings`, `$request_uri`, `$currentPageTheme`, `ROOT_PATH`.
 * ============================================================================
 */
// includes/footer.php
// v8.5 - Integrated Global Trademark Claims
// Updated: Dynamic Location Logic

/**
 * ARCHITECTURE & MAINTENANCE NOTES:
 * 
 * Component: Global Master Footer
 * Purpose: Houses the global legal band, trademark claims, audio player wrapper, and script injection at the end of the DOM.
 * 
 * Strategy & Implementation:
 * - Dynamically fetches the primary "HQ Location" from the CDN's `locations.json` to reflect in the UI (if utilized by a child footer).
 * - Injects the `sticky-player.php` and `stardust-player.js` globally, ensuring persistent audio playback across SPA navigations.
 * - Manages user DSP (Digital Service Provider) preferences via `localStorage`, instantly swapping out "Listen on Spotify/Apple" 
 *   buttons across the entire DOM without a page refresh.
 * 
 * Maintenance Recommendations:
 * - The `initializeStorePreferences` function is critical. If the HTML structure of the DSP buttons changes, 
 *   ensure the `.main-store-btn`, `.toggle-store-btn`, and associated dataset attributes remain intact.
 * - The `elara:loaded` event listener must remain to re-bind the store selector buttons whenever the SPA replaces the `<main>` content block.
 */

// --- 1. DYNAMIC LOCATION LOGIC ---
// Retrieves physical headquarters location from the CDN to populate footer address blocks dynamically
$location_json_url = $cdnBaseUrl . '/portfolio/json/locations.json';
$hq_location = 'Location Classified'; // Fallback in case of network timeout or parse failure

// `@file_get_contents` suppresses warnings if the CDN is offline so the footer never breaks:
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
// Determine which specific visual footer component to render based on page config or URI inheritance map
// (`resolveAsset()` is defined in `amanda/elara.php` and walks up the URL path tree).
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

// Determine if the current theme demands a forced dark legal band
$isDarkTheme = (isset($currentPageTheme) && in_array($currentPageTheme, ['dark', 'ad-astra']));
?>

<?php /* Semantic `<footer>` landmark wrapping both the section-specific visual footer and the universal legal disclaimer band */ ?>
<footer id="elara-master-footer">
    <div id="visual-footer-container">
        <?php include $currentFooter; ?>
    </div>

    <?php /* Global Legal Band: Required on every RaggieSoft property for MIT/CC BY-SA 4.0 licensing and the Fictitious Persons & Entities Disclaimer */ ?>
    <div id="global-legal-band" class="bg-body-secondary border-top py-3 position-relative z-1" <?php echo $isDarkTheme ? 'data-bs-theme="dark"' : ''; ?>>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start small text-body mb-3 mb-lg-0">
                    <div>
                        <?php /* `date("Y")` prints the current 4-digit server year automatically (e.g., 2026) */ ?>
                        <span class="fw-bold">&copy; 2008 &ndash; <?php echo date("Y"); ?> Michael Ragsdale.</span>
                        <span class="mx-2 opacity-50 d-none d-lg-inline">|</span>
                        <span class="opacity-75 d-block d-lg-inline mt-1 mt-lg-0" style="font-size: 0.9em;">
                            Content: <a href="https://corporate.raggiesoft.com/licensing" class="text-decoration-none link-body-emphasis border-bottom">CC BY-SA 4.0</a> &bull; 
                            Code: <a href="https://corporate.raggiesoft.com/licensing" class="text-decoration-none link-body-emphasis border-bottom">MIT</a>
                        </span>
                    </div>
                    <div class="mt-2 text-body-secondary" style="font-size: 0.85em;">
                        RaggieSoft&trade;, RaggieSoft Story Crossroads&trade;, The Stardust Engine&trade;, Engine Room Records&trade;, and The Cosmic Tidal Lock Sound&trade; are trademarks of Michael P. Ragsdale.
                    </div>
                    <div class="mt-1 text-body-secondary" style="font-size: 0.8em;">
                        <strong>Fictitious Disclaimer:</strong> Unless explicitly marked as real-world portfolio credentials, all bands, characters, universities (including Commonwealth Polytechnic Institute / CPI, The Forgers, The Ironheads, The Crucible, Virginia Dominion University / VDU, Piedmont Virginia University / PVU, and Monongahela State University / MSU), corporations (including OmniCorp, Apex Records, Prairie Coachworks, and Sainte-Claire), transit agencies (Blue Ridge Transit), legal filings, and events depicted on this network are works of fiction. Any resemblance to actual persons, living or dead, institutions, or events is purely coincidental.
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end small mt-2 mt-lg-0">
                    <?php /* `rel="noopener"` prevents newly opened external tabs (`target="_blank"`) from accessing `window.opener` */ ?>
                    <a href="https://store.raggiesoft.com/" target="_blank" rel="noopener" class="text-decoration-none link-body-emphasis fw-bold me-3 hover-opacity">
                        <i class="ph-duotone ph-shopping-bag me-1" aria-hidden="true"></i>Official Store
                    </a>
                    
                    <a href="https://corporate.raggiesoft.com/" class="text-decoration-none link-body-emphasis me-3 hover-opacity fw-bold">RaggieSoft Media</a>
                    <a href="https://corporate.raggiesoft.com/careers" class="text-decoration-none text-danger fw-bold me-3 hover-opacity">
                        <i class="ph-duotone ph-shield-warning me-1" aria-hidden="true"></i>Careers (Fraud Alert)
                    </a>
                    <a href="/about/privacy" class="text-decoration-none link-body-emphasis me-3 hover-opacity">Privacy</a>
                    <a href="/about/terms" class="text-decoration-none link-body-emphasis me-3 hover-opacity">Terms</a>
                    <a href="https://corporate.raggiesoft.com/licensing" class="text-decoration-none link-body-emphasis me-3 hover-opacity">Licenses</a>
                    <a href="/contact" class="text-decoration-none link-body-emphasis me-3 hover-opacity">Contact</a>
                    <a href="/about/ai-disclaimer" class="text-decoration-none text-primary fw-bold text-uppercase letter-spacing-1 d-inline-block mt-2 mt-md-0" style="font-size: 0.9em;">
                        <i class="ph-duotone ph-robot me-1"></i>AI Disclaimer
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php /* Global native HTML5 `<dialog>` modal populated asynchronously by `encyclopedia.js` */ ?>
<?php include ROOT_PATH . '/includes/components/modals/encyclopedia-modal.php'; ?>


<script src="<?php echo $cdnBaseUrl; ?>/common/js/piper-sullivan.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $cdnBaseUrl; ?>/common/js/encyclopedia.js?v=1789647924"></script>
<script>
// 1. Wrap the Store UI logic into a reusable function:
// Detects the visitor's OS (`youtube` on Android/ChromeOS, `apple` on macOS/iOS,
// `spotify` elsewhere) unless overridden in `localStorage`, and updates any
// `.dynamic-store-group` split buttons on the page without a browser reload.
function initializeStorePreferences() {
    const combinedUa = (navigator.userAgent || '') + ' ' + (navigator.platform || '');
    const isAndroidOrChromeOs = /Android|CrOS/i.test(combinedUa);
    const isAppleDevice = /Macintosh|MacIntel|MacPPC|Mac68K|iPhone|iPad|iPod/i.test(combinedUa);
    const osDefault = isAndroidOrChromeOs ? 'youtube' : (isAppleDevice ? 'apple' : 'spotify');
    const savedPlatform =
        localStorage.getItem('user_preferred_dsp') ||
        localStorage.getItem('preferredMusicStore') ||
        osDefault;
    
    function updateButtonGroup(group, platformData) {
        const mainBtn = group.querySelector('.main-store-btn');
        const toggleBtn = group.querySelector('.toggle-store-btn');
        const icon = group.querySelector('.main-store-icon');
        const textSpan = group.querySelector('.main-store-text');
        
        if (!mainBtn || !toggleBtn) return; // Safety check
        
        // Safely remove old DSP classes
        Array.from(mainBtn.classList).forEach(c => { if (c.startsWith('dsp-')) mainBtn.classList.remove(c); });
        Array.from(toggleBtn.classList).forEach(c => { if (c.startsWith('dsp-')) toggleBtn.classList.remove(c); });
        
        // Add new DSP class
        if (platformData.class) {
            mainBtn.classList.add(platformData.class);
            toggleBtn.classList.add(platformData.class);
        }
        
        mainBtn.href = platformData.url;
        if(icon) icon.className = `main-store-icon ${platformData.icon}`;
        if(textSpan) textSpan.textContent = `${mainBtn.dataset.defaultText} ${platformData.name}`;
    }

    if (savedPlatform) {
        document.querySelectorAll('.dynamic-store-group').forEach(group => {
            const targetLink =
                group.querySelector(`.store-selector-link[data-platform="${savedPlatform}"]`) ||
                group.querySelector('.store-selector-link');
            if (targetLink) updateButtonGroup(group, targetLink.dataset);
        });
    }

    document.querySelectorAll('.store-selector-link').forEach(link => {
        if (link.dataset.listenerAttached) return;
        link.dataset.listenerAttached = 'true';
        
        link.addEventListener('click', function(e) {
            const platform = this.dataset.platform;
            localStorage.setItem('preferredMusicStore', platform);
            localStorage.setItem('user_preferred_dsp', platform);
            
            // Instantly visually swap all buttons on the page without needing a refresh
            document.querySelectorAll('.dynamic-store-group').forEach(group => {
                const targetLink = group.querySelector(`.store-selector-link[data-platform="${platform}"]`);
                if (targetLink) updateButtonGroup(group, targetLink.dataset);
            });
        });
    });
}

// 2. Run on initial hard load
document.addEventListener('DOMContentLoaded', initializeStorePreferences);

// 3. The Elara SPA Lifecycle Hook (`elara:loaded` fires after soft page swaps)
document.addEventListener('elara:loaded', function() {
    // Re-bind the store selector buttons in the new DOM
    initializeStorePreferences();

    // Ping Google Analytics to log the virtual pageview
    if (typeof gtag === 'function') {
        gtag('config', '<?php echo htmlspecialchars($settings['analytics']['trackingId'] ?? ''); ?>', {
            'page_path': window.location.pathname
        });
    }
});

</script>
<?php /* Optional per-route external `<script>` array defined in `data/routes/*.json` */ ?>
<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>