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
    /* Ensure Konami dialog also has an opaque background */
    #konamiModal::part(panel) {
        --wa-panel-background-color: var(--bs-body-bg, #ffffff) !important;
        background-color: var(--bs-body-bg, #ffffff) !important;
        color: var(--bs-body-color, #000000) !important;
        border: 2px solid <?php echo $k_theme; ?>;
    }
    
    [data-bs-theme="dark"] #konamiModal::part(panel) {
        --wa-panel-background-color: var(--bs-body-bg, #121212) !important;
        background-color: var(--bs-body-bg, #121212) !important;
        color: var(--bs-body-color, #e0e0e0) !important;
    }
</style>

<wa-dialog id="konamiModal" label="System Override" style="--width: 600px; --wa-panel-background-color: var(--bs-body-bg, #121212) !important;" data-turbo-permanent="true">
    <div slot="label" class="fw-bold" style="color: <?php echo $k_theme; ?>;">
        <i class="fa-duotone fa-user-secret me-2"></i> System Override Authorized
    </div>
    
    <div class="text-center p-3">
        <i class="fa-duotone fa-gamepad-modern fa-4x mb-3" style="color: <?php echo $k_theme; ?>;"></i>
        <h4 class="mb-3">Konami Code Accepted</h4>
        <p class="lead mb-4">
            You've unlocked the developer access terminal. 
            <br>
            <span class="small text-muted">Just kidding. But you did find a secret!</span>
        </p>
        
        <div class="alert alert-secondary small text-start font-monospace mb-0 border border-secondary-subtle">
            > INITIALIZING STARDUST ENGINE...<br>
            > BYPASSING MAINFRAME SECURITY...<br>
            > ACCESS GRANTED.<br>
            > WELCOME, ADMIN.
        </div>
    </div>
    
    <wa-button slot="footer" variant="primary" onclick="document.getElementById('konamiModal').hide()">
        Close Terminal
    </wa-button>
</wa-dialog>

<script>
    // Self-Inject Logic (Moves modal to Body to fix Z-Order stacking context issues)
    (function() {
        const modal = document.getElementById('konamiModal');
        if (modal && modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    })();
</script>

<script>
    // Brute force shadow DOM background injection for wa-dialog
    document.addEventListener('wa-show', (e) => {
        if (e.target.tagName === 'WA-DIALOG') {
            const panel = e.target.shadowRoot.querySelector('[part="panel"]');
            if (panel) {
                // Get current body bg or fallback to dark/light
                const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
                panel.style.backgroundColor = isDark ? '#121212' : '#ffffff';
                panel.style.color = isDark ? '#e0e0e0' : '#000000';
            }
        }
    });
</script>
