<?php
/**
 * ARCHITECTURE: accessibility.php
 * 
 * Context: RaggieSoft Hub - Policy & Accessibility.
 * Narrative/Purpose: The public accessibility statement for RaggieSoft platforms. It outlines the 
 * platform's commitment to native accessibility integration rather than relying on external overlays.
 * 
 * Mechanics:
 * - Inherits the "Stardust Reader Theme" (if set in localStorage) or falls back to OS-level 
 *   color scheme preferences (prefers-color-scheme).
 * - Utilizes inline CSS variables to fluidly adapt the page colors without jarring flashes.
 * - Communicates reliance on OS-level settings like 'prefers-reduced-motion'.
 */
// accessibility.php
require_once __DIR__ . '/includes/header.php';
?>

<style>
/* START: Adaptive Theme Styles */
/* Respect Stardust Reader Theme or Fallback to System Preference */
:root {
    --page-bg: #ffffff;
    --page-text: #212529;
    --page-surface: #f8f9fa;
    --page-border: #dee2e6;
}

body.theme-light {
    --page-bg: #ffffff;
    --page-text: #212529;
    --page-surface: #f8f9fa;
    --page-border: #dee2e6;
}

body.theme-dark {
    --page-bg: #212529;
    --page-text: #f8f9fa;
    --page-surface: #343a40;
    --page-border: #495057;
}

body.theme-sepia {
    --page-bg: #fdf6e3;
    --page-text: #5c4a2f;
    --page-surface: #eee8d5;
    --page-border: #dcd4b6;
}

body.theme-dark-sepia {
    --page-bg: #2d261e;
    --page-text: #d4c4a8;
    --page-surface: #3e362d;
    --page-border: #524739;
}

@media (prefers-color-scheme: dark) {
    body:not([class*="theme-"]) {
        --page-bg: #212529;
        --page-text: #f8f9fa;
        --page-surface: #343a40;
        --page-border: #495057;
    }
}

.a11y-container {
    background-color: var(--page-bg);
    color: var(--page-text);
    padding: 3rem 1.5rem;
    min-height: 80vh;
}
.a11y-card {
    background-color: var(--page-surface);
    border: 1px solid var(--page-border);
    border-radius: 8px;
    padding: 2rem;
    margin-bottom: 2rem;
}
</style>

<script>
// START: Stardust Theme Hydration
// Apply Stardust Engine Reader settings if they exist
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('stardust-reader-theme') || 'auto';
    if (savedTheme !== 'auto') {
        document.body.classList.add(`theme-${savedTheme}`);
    }
});
</script>

<!-- START: Accessibility Content Container -->
<main class="a11y-container">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h1 class="mb-4 fw-bold">Accessibility Statement</h1>
        <p class="lead mb-5">At RaggieSoft, we believe digital experiences should be accessible, comfortable, and safe for everyone.</p>

        <!-- START: A11y Topic Card: Motion -->
        <div class="a11y-card">
            <h3 class="fw-bold mb-3"><i class="fa-solid fa-person-running me-2"></i> Native Accessibility & Motion</h3>
            <p>
                RaggieSoft respects the accessibility preferences you have already configured on your own device. 
                We do not use intrusive custom toggle switches that force you to re-configure your needs on our site.
            </p>
            <p>
                If you have <strong>"Reduce Motion"</strong> enabled in your operating system settings (Windows, macOS, iOS, or Android), 
                our platform—including the Stardust Engine—will automatically detect this. 
            </p>
            <p class="mb-0">
                All immersive background animations, rapid weather effects (like rain or lightning), and heavy UI transitions 
                will be instantly disabled or reduced to static textures, ensuring a safe and comfortable reading experience for 
                users with vestibular disorders, photosensitive epilepsy, or sensory sensitivities.
            </p>
        </div>

        <!-- START: A11y Topic Card: Color -->
        <div class="a11y-card">
            <h3 class="fw-bold mb-3"><i class="fa-solid fa-circle-half-stroke me-2"></i> Color & Contrast</h3>
            <p>
                This page natively respects your device's <strong>Color Scheme</strong> settings (Light or Dark Mode). 
                If you have configured a specific reading theme inside the Stardust Engine Reader, this page will 
                automatically inherit that theme (Light, Dark, Sepia, or Dark Sepia) to prevent sudden, jarring changes in brightness.
            </p>
        </div>
        
        <!-- START: A11y Topic Card: Keyboard -->
        <div class="a11y-card">
            <h3 class="fw-bold mb-3"><i class="fa-solid fa-keyboard me-2"></i> Keyboard Navigation</h3>
            <p class="mb-0">
                Our reading interfaces and hubs are designed to be fully navigable via keyboard, ensuring that users who rely 
                on assistive technologies or cannot use a mouse can fully interact with the narrative.
            </p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
