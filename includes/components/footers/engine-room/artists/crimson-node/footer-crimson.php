<?php
/**
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/includes/components/footers/engine-room/artists/crimson-node/footer-crimson.php
 * Path: /includes/components/footers/engine-room/artists/crimson-node/footer-crimson.php
 * 
 * CORE RESPONSIBILITY:
 * Reusable UI Component: Artist Footer (Crimson Node).
 * Renders the dedicated footer for the "Crimson Node" artist section under Engine Room Records.
 * 
 * LORE CONTEXT:
 * - Highlights the collaborative 1980s pop/rock and synth-prog project engineered within
 *   the "Albemarle County Kids House."
 * - Injects a custom Konami easter egg tailored to "Matt" (a character/persona linked to the project).
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Utilizes a standard Bootstrap 5 footer layout (`.bg-body-tertiary`).
 * - Employs FontAwesome icons (`fa-waveform-lines`, `fa-location-dot`) for thematic branding.
 * - Uses responsive typography and spacing utilities to organize navigation, management, and
 *   social media (Listen) links.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Includes the generic `/includes/components/easter-eggs/konami.php` component.
 * - Overrides the default Konami config with a Crimson Node specific payload (`$konami_config`)
 *   simulating a "Vanguard LogicPad" with bandwidth throttling logic.
 * 
 * MAINTENANCE NOTES:
 * - The social media links ("Listen" column) currently use placeholder hashes (`#`) and a
 *   "Coming Soon" title attribute. Update these when actual external DSP links are available.
 * - The `$konami_config` is intentionally hardcoded to provide a unique response distinct from
 *   the global site easter egg.
 */
?>
<footer class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-4 col-md-6">
                <a href="/engine-room/artists/crimson-node" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <i class="fa-duotone fa-waveform-lines me-2 fs-3 text-primary"></i>
                    <span class="fs-5 fw-bold text-uppercase brand-font">Crimson Node</span>
                </a>
                <p class="text-body-secondary small">
                    A collaborative 1980s pop/rock and synth-prog project engineered entirely within the Albemarle County Kids House.
                </p>
                <div class="small  mt-3 font-monospace">
                    <i class="fa-solid fa-location-dot me-1"></i> Albemarle County, VA &bull; Est. 2000
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase brand-font">Navigation</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="/engine-room/artists/crimson-node/discography" class="nav-link p-0 text-body-secondary">Discography</a></li>
                    <li class="nav-item mb-2"><a href="/engine-room/artists/crimson-node/family" class="nav-link p-0 text-body-secondary">The Phalanx</a></li>
                    <li class="nav-item mb-2"><a href="/engine-room/artists/crimson-node/story" class="nav-link p-0 text-body-secondary">The Lore</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase brand-font">Management</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="/engine-room" class="nav-link p-0 text-body-secondary">Engine Room Records</a></li>
                    <li class="nav-item mb-2"><span class="nav-link p-0 text-body-secondary">Blacksburg, VA</span></li>
                    <li class="nav-item mb-2"><a href="https://store.raggiesoft.com" target="_blank" class="nav-link p-0 text-body-secondary">Official Storefront</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 text-md-end">
                <h6 class="fw-bold mb-3 text-uppercase brand-font">Listen</h6>
                <div class="d-flex justify-content-md-end gap-3">
                    <a href="#" class="link-secondary fs-5" aria-label="Spotify" title="Coming Soon"><i class="fa-brands fa-spotify"></i></a>
                    <a href="#" class="link-secondary fs-5" aria-label="Apple Music" title="Coming Soon"><i class="fa-brands fa-apple"></i></a>
                    <a href="#" class="link-secondary fs-5" aria-label="Amazon Music" title="Coming Soon"><i class="fa-brands fa-amazon"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
// Custom Konami Code Reward for Crimson Node
$konami_config = [
    'title'      => 'Vanguard LogicPad Engaged',
    'icon'       => 'fa-solid fa-laptop-code',
    'theme'      => '#FF3333', // Crimson Node Glowing Red
    'text_color' => '#ffffff',
    'image'      => '',        
    'body'       => '
        <h4 class="font-monospace text-white">> QUALITY OF SERVICE: ACTIVE</h4>
        <p class="font-monospace text-danger mt-2">
            Bandwidth throttling initiated.<br>
            Priority connection established for Matt.
        </p>',
    'btn_text'   => 'Close Terminal',
    'btn_link'   => '#',
    'btn_style'  => 'btn-outline-light'
];

include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>