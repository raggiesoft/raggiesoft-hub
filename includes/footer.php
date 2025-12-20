<?php
// includes/footer.php
// v7.3 - Dynamic Footer Loader

// Ensure we have a footer to load
if (!isset($currentFooter) || !file_exists($currentFooter)) {
    $currentFooter = __DIR__ . '/components/footers/footer-default.php';
}
?>

<footer class="mt-auto">
    <?php include $currentFooter; ?>
</footer>
<script src="<?php echo $cdn_root; ?>/common/js/bootstrap.bundle.min.js"></script>

<?php if (isset($pageConfig['scripts']) && is_array($pageConfig['scripts'])): ?>
    <?php foreach ($pageConfig['scripts'] as $script): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>