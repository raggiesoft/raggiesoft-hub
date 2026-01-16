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

<div id="global-player-zone" class="fixed-bottom" style="z-index: 1050;" data-turbo-permanent="true">
    
    <?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

    <script src="https://assets.raggiesoft.com/engine-room-records/js/stardust-player.js?v=<?php echo time(); ?>"></script>
    
    <script>
        // Initialize global registry if not exists
        window.STARDUST_PLAYLIST = window.STARDUST_PLAYLIST || [];
    </script>
</div>

<script src="<?php echo $cdn_root; ?>/common/js/bootstrap.js"></script>

<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>