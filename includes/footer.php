<?php
// includes/footer.php
// v8.2 - Stardust Player SPA Integration & Path Fix

// 1. Resolve Visual Footer (The "Skin")
if (isset($pageConfig['footer'])) {
    $footerFile = $pageConfig['footer'];
} else {
    $footerMap = $settings['footerMap'] ?? [];
    // FIX: Fallback must NOT include 'footers/' because line 14 adds it.
    $footerFile = resolveAsset($footerMap, $request_uri) ?? 'footer-default';
}

// UPDATE: We now auto-prepend "footers/" so JSON doesn't need to include it
$currentFooter = ROOT_PATH . '/includes/components/footers/' . $footerFile . '.php';

if (!file_exists($currentFooter)) {
    // Fallback if the specific file is missing
    $currentFooter = ROOT_PATH . '/includes/components/footers/footer-default.php';
}

// 2. Prepare Playlist Data
// If the current route defines a playlist, use it. Otherwise, empty array.
$activePlaylist = $pageConfig['playlist'] ?? [];
?>

<div id="visual-footer-container">
    <?php include $currentFooter; ?>
</div>


<div id="global-player-zone" class="fixed-bottom" style="z-index: 1050; pointer-events: none;" data-turbo-permanent>
    
    <rs-audio-player id="stardust-player-instance" class="d-none"></rs-audio-player>

    <script>
        // If a playlist is already playing, we don't want to overwrite it 
        // with an empty one just because the user clicked "Home".
        // This logic can be refined in JS, but for now we define the global.
        if (!window.GLOBAL_PLAYLIST) {
            window.GLOBAL_PLAYLIST = <?php echo json_encode($activePlaylist); ?>;
        }
    </script>
</div>


<script src="<?php echo $cdn_root; ?>/common/js/bootstrap.js"></script>

<script src="<?php echo $cdn_root; ?>/common/js/components/stardust-player.js" type="module"></script>

<script type="module">
  import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>

<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>