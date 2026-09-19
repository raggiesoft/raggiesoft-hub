<?php
// includes/components/easter-eggs/konami.php
// Stardust Engine CMS

// Use the current theme color, default to primary
$k_theme = "var(--bs-primary, #42AADB)"; 
if (isset($theme)) {
    if ($theme === 'ad-astra') $k_theme = "var(--bs-warning, #ffc107)";
    if ($theme === 'crucible') $k_theme = "var(--bs-danger, #dc3545)";
}
?>

<style>
    /* Completely eliminate padding in wa-dialog so our wrapper fills it */
    #konamiModal {
        --body-spacing: 0 !important;
        --header-spacing: 0 !important;
        --footer-spacing: 0 !important;
        border: none !important;
    }
    #konamiModal::part(panel) {
        border: 2px solid <?php echo $k_theme; ?> !important;
    }
</style>

<wa-dialog id="konamiModal" no-header style="--width: 600px;" data-turbo-permanent="true">
    <div class="w-100 h-100 d-flex flex-column" style="background-color: var(--bs-body-bg, #121212) !important; color: var(--bs-body-color, #e0e0e0) !important; padding: 1.5rem;">
        
        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom border-secondary pb-3">
            <div class="fw-bold" style="color: <?php echo $k_theme; ?>;">
                <i class="fa-duotone fa-user-secret me-2"></i> System Override Authorized
            </div>
            <wa-button appearance="plain" variant="neutral" onclick="document.getElementById('konamiModal').hide()" aria-label="Close">
                <i class="fa-solid fa-xmark fs-4"></i>
            </wa-button>
        </div>
        
        <div class="text-center p-3 flex-grow-1">
            <i class="fa-duotone fa-gamepad-modern fa-4x mb-3" style="color: <?php echo $k_theme; ?>;"></i>
            <h4 class="mb-3">Konami Code Accepted</h4>
            <p class="lead mb-4">
                You've unlocked the developer access terminal. 
                <br>
                <span class="small opacity-75">Just kidding. But you did find a secret!</span>
            </p>
            
            <div class="alert alert-secondary small text-start font-monospace mb-0 border border-secondary-subtle">
                > INITIALIZING STARDUST ENGINE...<br>
                > BYPASSING MAINFRAME SECURITY...<br>
                > ACCESS GRANTED.<br>
                > WELCOME, ADMIN.
            </div>
        </div>
        
        <div class="mt-4 pt-3 border-top border-secondary text-end">
            <wa-button variant="primary" onclick="document.getElementById('konamiModal').hide()">
                Close Terminal
            </wa-button>
        </div>
        
    </div>
</wa-dialog>

<script>
    // Self-Inject Logic
    (function() {
        const modal = document.getElementById('konamiModal');
        if (modal && modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    })();
</script>
