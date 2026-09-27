<!-- Site Settings Dialog -->
<wa-dialog id="site-settings-dialog" class="site-settings-dialog" label="Accessibility Settings" light-dismiss>
    
    <div class="mb-4">
        <h6 class="fw-bold mb-2">Display Contrast</h6>
        <wa-radio-group class="site-setting-input" data-setting="theme" value="auto">
            <wa-radio value="auto">System Default</wa-radio>
            <wa-radio value="light">Light Mode</wa-radio>
            <wa-radio value="dark">Dark Mode</wa-radio>
            <wa-radio value="sepia">High Contrast (Sepia)</wa-radio>
        </wa-radio-group>
    </div>

    <div slot="footer">
        <wa-button variant="neutral" class="close-settings-btn">Close</wa-button>
        <wa-button variant="brand" outline class="reset-settings-btn">Reset to Default</wa-button>
    </div>
</wa-dialog>

<script>
(function() {
    const dialogs = document.querySelectorAll('.site-settings-dialog');
    const dialog = dialogs[dialogs.length - 1];
    
    const btnOpens = document.querySelectorAll('#open-site-settings-btn');
    const btnOpen = btnOpens[btnOpens.length - 1];
    
    const defaults = {
        theme: 'auto'
    };

    let currentSettings = { ...defaults };
    try {
        const stored = localStorage.getItem('raggiesoft-site-settings');
        if (stored) {
            currentSettings = { ...defaults, ...JSON.parse(stored) };
        }
    } catch (e) {
        console.error("Could not load site settings", e);
    }

    const isForcedByServer = document.documentElement.hasAttribute('data-bs-theme');

    const applySetting = (key, value) => {
        if (key === 'theme') {
            const html = document.documentElement;
            html.classList.remove('wa-theme-light', 'wa-theme-dark', 'wa-theme-sepia', 'theme-auto');
            html.removeAttribute('data-bs-theme'); 
            
            if (value === 'auto') {
                html.classList.add('theme-auto');
            } else if (value === 'sepia') {
                html.classList.add('wa-theme-sepia');
                html.setAttribute('data-bs-theme', 'dark'); 
            } else if (value === 'dark') {
                html.classList.add('wa-theme-dark');
                html.setAttribute('data-bs-theme', 'dark');
            } else if (value === 'light') {
                html.classList.add('wa-theme-light');
                html.setAttribute('data-bs-theme', 'light');
            }
        }
    };

    applySetting('theme', currentSettings.theme);

    if (dialog) {
        const inputs = dialog.querySelectorAll('.site-setting-input');

        inputs.forEach(input => {
            const settingKey = input.getAttribute('data-setting');
            const val = currentSettings[settingKey];
            
            setTimeout(() => { input.value = val; }, 0);
            
            if(input.tagName.toLowerCase() === 'wa-radio-group') {
                input.addEventListener('wa-change', (e) => {
                    const newValue = e.target.value;
                    currentSettings[settingKey] = newValue;
                    applySetting(settingKey, newValue);
                    localStorage.setItem('raggiesoft-site-settings', JSON.stringify(currentSettings));
                });
            }
        });

        const closeBtns = dialog.querySelectorAll('.close-settings-btn');
        closeBtns.forEach(btn => btn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            dialog.open = false;
            try { dialog.hide(); } catch(err) {}
        }));

        const resetBtns = dialog.querySelectorAll('.reset-settings-btn');
        resetBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                localStorage.removeItem('raggiesoft-site-settings');
                currentSettings = { ...defaults };
                
                inputs.forEach(input => {
                    const settingKey = input.getAttribute('data-setting');
                    input.value = defaults[settingKey];
                    applySetting(settingKey, defaults[settingKey]);
                });
            });
        });
    }
    
    if (btnOpen && dialog) {
        btnOpen.addEventListener('click', (e) => {
            e.preventDefault();
            dialog.open = true;
            try { dialog.show(); } catch(err) {}
        });
    }
})();
</script>

<style>
/* Sepia Theme Variables */
html.wa-theme-sepia {
    --wa-color-neutral-50: #fbf0e4;
    --wa-color-neutral-100: #f3e4d3;
    --wa-color-neutral-200: #e8d3bc;
    --wa-color-neutral-800: #5c4b3a;
    --wa-color-neutral-900: #433527;
    --wa-color-neutral-950: #2b2118;
    
    --wa-panel-background-color: var(--wa-color-neutral-50);
    --wa-page-background-color: var(--wa-color-neutral-100);
    --wa-color-text: var(--wa-color-neutral-900);
    --wa-color-text-paragraph: var(--wa-color-neutral-900);
    --wa-color-text-heading: var(--wa-color-neutral-950);
}
</style>
