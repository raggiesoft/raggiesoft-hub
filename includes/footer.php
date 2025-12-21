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


<div id="global-player-zone" class="fixed-bottom" style="z-index: 1050;" data-turbo-permanent>
    <?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

    <script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>
    
    <script>
        // Initialize global registry if not exists
        window.STARDUST_PLAYLIST = window.STARDUST_PLAYLIST || [];
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