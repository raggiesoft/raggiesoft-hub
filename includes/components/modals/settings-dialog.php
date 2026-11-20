<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/modals/settings-dialog.php
 * Role: Accessibility Display Contrast & Theme Switcher Modal (`<dialog>`)
 * Domain: https://raggiesoft.com (Reusable Accessibility Preferences Component)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Provides a native HTML5 `<dialog id="site-settings-dialog">` modal with four
 * radio-button display contrast options (`System Default`, `Light Mode`,
 * `Dark Mode`, and `High Contrast (Sepia)`), paired with a self-contained
 * JavaScript IIFE (Immediately Invoked Function Expression `(function() { ... })();`)
 * that persists the visitor's choice inside `localStorage` (`raggiesoft-site-settings`)
 * and updates `document.documentElement`'s `data-theme` and `data-bs-theme`
 * attributes live without requiring a user account or server database!
 *
 * INPUTS:
 * - Browser `localStorage['raggiesoft-site-settings']` & `window.matchMedia('(prefers-color-scheme: dark)')`.
 *
 * OUTPUT PRODUCED:
 * - Native `<dialog>` markup + client-side theme persistence script.
 * ============================================================================
 *
 * ARCHITECTURAL DOCBLOCK: Accessibility Settings Modal (DaisyUI 5 + <dialog>)
 * ============================================================================
 * File: includes/components/modals/settings-dialog.php
 * Purpose:
 *     Renders a native HTML5 `<dialog>` modal styled with DaisyUI 5 allowing
 *     visitors to override global theme preferences (Auto, Light, Dark, Sepia).
 * ============================================================================
 */
?>
<!-- Site Settings Dialog -->
<dialog id="site-settings-dialog" class="modal site-settings-dialog">
    <div class="modal-box">
        <h3 class="fw-bold fs-5 mb-3">Accessibility Settings</h3>
        <div class="mb-4">
            <h6 class="fw-bold mb-2">Display Contrast</h6>
            <?php /* Grouping `<input type="radio" name="rs-site-theme">` inside `<label>` makes the entire row clickable and screen-reader accessible */ ?>
            <div class="d-flex flex-column gap-2 site-setting-input" data-setting="theme">
                <label class="label cursor-pointer justify-content-start gap-2">
                    <input type="radio" name="rs-site-theme" class="radio radio-primary" value="auto" checked>
                    <span class="label-text">System Default</span>
                </label>
                <label class="label cursor-pointer justify-content-start gap-2">
                    <input type="radio" name="rs-site-theme" class="radio radio-primary" value="light">
                    <span class="label-text">Light Mode</span>
                </label>
                <label class="label cursor-pointer justify-content-start gap-2">
                    <input type="radio" name="rs-site-theme" class="radio radio-primary" value="dark">
                    <span class="label-text">Dark Mode</span>
                </label>
                <label class="label cursor-pointer justify-content-start gap-2">
                    <input type="radio" name="rs-site-theme" class="radio radio-primary" value="sepia">
                    <span class="label-text">High Contrast (Sepia)</span>
                </label>
            </div>
        </div>

        <div class="modal-action d-flex gap-2 justify-content-end">
            <button type="button" class="btn btn-neutral btn-sm close-settings-btn">Close</button>
            <button type="button" class="btn btn-outline btn-primary btn-sm reset-settings-btn">Reset to Default</button>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<script>
// Wrapped in an IIFE `(function() { ... })();` so local variables (`dialog`, `defaults`)
// never pollute the global `window` namespace:
(function() {
    const dialogs = document.querySelectorAll('.site-settings-dialog');
    const dialog = dialogs[dialogs.length - 1];
    const btnOpens = document.querySelectorAll('#open-site-settings-btn');
    const btnOpen = btnOpens[btnOpens.length - 1];
    const defaults = { theme: 'auto' };

    // Read any previously saved theme preference from on-device `localStorage`
    // inside `try / catch` (in case a strict browser privacy mode blocks storage):
    let currentSettings = { ...defaults };
    try {
        const stored = localStorage.getItem('raggiesoft-site-settings');
        if (stored) {
            currentSettings = { ...defaults, ...JSON.parse(stored) };
        }
    } catch (e) {}

    // Stamp both `data-theme` (used by DaisyUI 5) and `data-bs-theme` (used by
    // RaggieSoft custom CSS rules) onto `<html>` (`document.documentElement`):
    const applySetting = (key, value) => {
        if (key === 'theme') {
            const html = document.documentElement;
            html.classList.remove('theme-auto', 'theme-sepia');
            if (value === 'auto') {
                const sys = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                html.classList.add('theme-auto');
                html.setAttribute('data-theme', sys);
                html.setAttribute('data-bs-theme', sys);
            } else if (value === 'sepia') {
                html.classList.add('theme-sepia');
                html.setAttribute('data-theme', 'retro');
                html.setAttribute('data-bs-theme', 'dark');
            } else if (value === 'dark') {
                html.setAttribute('data-theme', 'dark');
                html.setAttribute('data-bs-theme', 'dark');
            } else if (value === 'light') {
                html.setAttribute('data-theme', 'light');
                html.setAttribute('data-bs-theme', 'light');
            }
        }
    };

    applySetting('theme', currentSettings.theme);

    // Sync radio inputs and attach change / close / reset / open event listeners:
    if (dialog) {
        const radios = dialog.querySelectorAll('input[name="rs-site-theme"]');
        radios.forEach(radio => {
            radio.checked = (radio.value === currentSettings.theme);
            radio.addEventListener('change', () => {
                if (radio.checked) {
                    currentSettings.theme = radio.value;
                    applySetting('theme', radio.value);
                    localStorage.setItem('raggiesoft-site-settings', JSON.stringify(currentSettings));
                }
            });
        });

        dialog.querySelectorAll('.close-settings-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                try { dialog.close(); } catch (err) { dialog.open = false; }
            });
        });

        dialog.querySelectorAll('.reset-settings-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentSettings = { ...defaults };
                localStorage.removeItem('raggiesoft-site-settings');
                applySetting('theme', 'auto');
                radios.forEach(r => { r.checked = (r.value === 'auto'); });
            });
        });

        if (btnOpen) {
            btnOpen.addEventListener('click', (e) => {
                e.preventDefault();
                try { dialog.showModal(); } catch (err) { dialog.open = true; }
            });
        }
    }
})();
</script>
