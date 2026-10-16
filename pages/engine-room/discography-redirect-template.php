<?php
/**
 * ============================================================================
 * ARCHITECTURE & MAINTENANCE NOTES
 * ============================================================================
 * File: pages/engine-room/discography-redirect-template.php
 *
 * Purpose:
 * - Universal redirect view template for Engine Room Records discography routes
 *   that have been consolidated into The Listening Room (music.raggiesoft.com).
 * - While `amanda/elara.php` intercepts routes with a `redirect` property and
 *   issues an HTTP 301 Moved Permanently header before rendering HTML, this
 *   template serves two critical architectural roles:
 *     1. Satisfies `jenna-sync.sh` QA integrity checks (`view` file existence)
 *        and orphan audits (`template` in filename is exempt even if unreferenced).
 *     2. Provides an immediate client-side `<script>window.location.replace(...)`
 *        and accessible fallback link if ever rendered inside a buffered or
 *        client-side router context.
 * ============================================================================
 */

// Resolve target redirect URL from route configuration or fallback to The Listening Room root
$redirectTarget = $config['redirect'] ?? 'https://music.raggiesoft.com';

// Issue HTTP 301 redirect if headers have not yet been sent
if (!headers_sent()) {
    header('Location: ' . $redirectTarget, true, 301);
    exit;
}
?>
<div class="container py-5 text-center">
    <h1 class="display-5 fw-bold mb-3">Redirecting to The Listening Room...</h1>
    <p class="lead text-secondary mb-4">
        Album liner notes, studio lore, and synchronized lyrics are now unified inside The Listening Room.
    </p>
    <a href="<?php echo htmlspecialchars($redirectTarget, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary rounded-pill px-4 fw-bold">
        Continue to The Listening Room
    </a>
</div>
<script>
    // Perform immediate client-side location replacement if headers were already flushed
    window.location.replace(<?php echo json_encode($redirectTarget, JSON_UNESCAPED_SLASHES); ?>);
</script>

