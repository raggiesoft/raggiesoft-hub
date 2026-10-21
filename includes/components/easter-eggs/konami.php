<?php
/**
 * ============================================================================
 * ARCHITECTURAL DOCBLOCK: Konami Code Easter Egg Modal (DaisyUI 5 + <dialog>)
 * ============================================================================
 * File: includes/components/easter-eggs/konami.php
 * Purpose:
 *     Renders a hidden native `<dialog>` styled with DaisyUI 5 that acts as a
 *     Developer Access Terminal when triggered by `konami.js`.
 * ============================================================================
 */
$k_theme = "var(--bs-primary, #42AADB)"; 
if (isset($theme)) {
    if ($theme === 'ad-astra') $k_theme = "var(--bs-warning, #ffc107)";
    if ($theme === 'crucible') $k_theme = "var(--bs-danger, #dc3545)";
}
?>

<dialog id="konamiModal" class="modal" data-turbo-permanent="true">
    <div class="modal-box p-0 overflow-hidden" style="max-width: 600px; border: 2px solid <?php echo $k_theme; ?>;">
        <div class="w-100 h-100 d-flex flex-column" style="background-color: var(--bs-body-bg, #121212) !important; color: var(--bs-body-color, #e0e0e0) !important; padding: 1.5rem;">
            <div class="d-flex align-items-center justify-content-between mb-4 border-bottom border-secondary pb-3">
                <div class="fw-bold" style="color: <?php echo $k_theme; ?>;">
                    <i class="ph-duotone ph-detective me-2" aria-hidden="true"></i> System Override Authorized
                </div>
                <button type="button" class="btn btn-ghost btn-sm btn-circle" onclick="document.getElementById('konamiModal').close()" aria-label="Close">
                    <i class="ph-duotone ph-x fs-4" aria-hidden="true"></i>
                </button>
            </div>

            <div class="text-center p-3 flex-grow-1">
                <i class="ph-duotone ph-game-controller ph-4x mb-3" style="color: <?php echo $k_theme; ?>;" aria-hidden="true"></i>
                <h4 class="mb-3">Konami Code Accepted</h4>
                <p class="lead mb-4">
                    You've unlocked the developer access terminal.
                    <br>
                    <span class="small opacity-75">Just kidding. But you did find a secret!</span>
                </p>

                <div role="alert" class="alert alert-neutral small text-start font-monospace mb-0">
                    <i class="ph-duotone ph-terminal fs-4" aria-hidden="true"></i>
                    <div>
                        &gt; INITIALIZING STARDUST ENGINE...<br>
                        &gt; BYPASSING MAINFRAME SECURITY...<br>
                        &gt; ACCESS GRANTED.<br>
                        &gt; WELCOME, ADMIN.
                    </div>
                </div>
            </div>

            <div class="mt-4 pt-3 border-top border-secondary text-end">
                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('konamiModal').close()">
                    Close Terminal
                </button>
            </div>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<script>
    (function() {
        const modal = document.getElementById('konamiModal');
        if (modal && modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    })();
</script>
