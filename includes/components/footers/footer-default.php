<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/footers/footer-default.php
 * Role: Default Visual Sitemap Footer for `raggiesoft.com`
 * Domain: https://raggiesoft.com (Injected inside `#visual-footer-container` by `includes/footer.php`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the 4-column visual sitemap band right above `#global-legal-band` on
 * every route that uses the default `"/"` entry in `data/settings.json`'s
 * `footerMap`:
 *   - Column 1: RaggieSoft brand emblem, consumer tagline, and Norfolk, VA origin.
 *   - Column 2 ("Constellations"): Links to Stardust, Engine Room, RaggieSoft
 *     Media, Nebulae, The Studio Family, and the permanent `/in-memoriam` page.
 *   - Column 3 ("Explore"): Direct consumer links to `books.raggiesoft.com`,
 *     `music.raggiesoft.com`, `lore.raggiesoft.com`, and Accessibility.
 *   - Column 4 ("Connect"): Accessible icon-only links (`aria-label="GitHub"`,
 *     `aria-label="LinkedIn"`, `aria-label="Email"`).
 *   - Finally, configures `$konami_config` and includes `easter-eggs/konami.php`.
 *
 * INPUTS:
 * - `$cdnBaseUrl` and `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Responsive 4-column HTML sitemap block + Konami `<dialog>` partial.
 * ============================================================================
 *
 * ARCHITECTURE & DESIGN: Default Global Footer
 * ============================================================================
 * ROLE: The standard site-wide footer providing overarching navigation, brand 
 *       identity, and standard disclaimers. 
 * 
 * INTEGRATION: This is the fallback footer injected by `includes/footer.php` 
 *              if a specific route does not define a custom footer override.
 * 
 * MAINTENANCE: Structural changes here affect the vast majority of the site.
 *              The included Konami Code easter egg at the bottom defines the 
 *              global default payload ("System Admin Access").
 * ============================================================================
 */
// includes/components/footers/footer-default.php
?>
<!-- [LAYOUT] Main Global Footer: Standard corporate branding and global sitemap -->
<div class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4">
            
            <?php /* Column 1: Brand mark and consumer-friendly studio summary */ ?>
            <div class="col-lg-4 col-md-6">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                         alt="RaggieSoft Logo" width="40" height="40" class="me-2 navbar-brand-raggiesoft">
                    <span class="fs-5 fw-bold text-uppercase brand-font">RaggieSoft<sup>&trade;</sup></span>
                </a>
                <p class="text-body-secondary small">
                    Original stories, interactive worlds, and music since 1997.<br> Home of Ocean View Archives, RaggieSoft Story Crossroads, and Engine Room Records.
                </p>
                <div class="small  mt-3">
                    <i class="ph-duotone ph-map-pin me-1"></i> Norfolk, VA &bull; Est. 2008
                </div>
            </div>

            <?php /* Column 2: Ecosystem Constellations (Subdomains, Studio Family & Permanent Memorial) */ ?>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Constellations</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="https://stardust.raggiesoft.com/" class="nav-link p-0 text-body-secondary">The Stardust Engine</a></li>
                    <li class="nav-item mb-2"><a href="https://engineroom.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Engine Room Records</a></li>
                    <li class="nav-item mb-2"><a href="https://corporate.raggiesoft.com/" class="nav-link p-0 text-body-secondary">RaggieSoft Media</a></li>
                    <li class="nav-item mb-2"><a href="https://nebulae.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Nebulae Observatory</a></li>
                    <li class="nav-item mb-2"><a href="https://waystation.raggiesoft.com/" class="nav-link p-0 text-body-secondary">The Uncharted Waystation</a></li>
                    <li class="nav-item mb-2"><a href="https://jessica.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Jessica (Keeper of the House)</a></li>
                    <li class="nav-item mb-2"><a href="/about/family" class="nav-link p-0 text-body-secondary">The Studio Family</a></li>
                    <li class="nav-item mb-2"><a href="/in-memoriam" class="nav-link p-0 text-body-secondary"><i class="ph-duotone ph-shooting-star me-1" aria-hidden="true"></i>In Memoriam (Ad Astra)</a></li>
                </ul>
            </div>

            <!-- [UI COMPONENT] Explore: Direct consumer links to reading, interactive novels, music, lore, and accessibility -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Explore</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="https://books.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Ocean View Archives</a></li>
                    <li class="nav-item mb-2"><a href="https://crossroads.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Story Crossroads</a></li>
                    <li class="nav-item mb-2"><a href="https://cedarrun.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Cedar Run</a></li>
                    <li class="nav-item mb-2"><a href="https://backstage.raggiesoft.com/" class="nav-link p-0 text-body-secondary">RaggieSoft Backstage</a></li>
                    <li class="nav-item mb-2"><a href="https://music.raggiesoft.com/" class="nav-link p-0 text-body-secondary">The Listening Room</a></li>
                    <li class="nav-item mb-2"><a href="https://lore.raggiesoft.com/" class="nav-link p-0 text-body-secondary">Lore Encyclopedia</a></li>
                    <li class="nav-item mt-3"><a href="https://engineroom.raggiesoft.com/jessica-miller-center" class="nav-link p-0 text-primary fw-bold"><i class="ph-duotone ph-person-arms-spread me-1"></i> Accessibility</a></li>
                </ul>
            </div>

            <?php /* Column 4: Social/Contact icon links — WCAG 2.1 AA requires `aria-label` whenever an `<a>` contains only an icon without visible text */ ?>
            <div class="col-lg-4 col-md-6 text-md-end">
                <h6 class="fw-bold mb-3">Connect</h6>
                <div class="d-flex justify-content-md-end gap-3">
                    <a href="https://github.com/raggiesoft" class="link-secondary fs-5" aria-label="GitHub"><i class="ph-duotone ph-github-logo"></i></a>
                    <a href="https://linkedin.com/in/michael-ragsdale-raggiesoft" class="link-secondary fs-5" aria-label="LinkedIn"><i class="ph-duotone ph-linkedin-logo"></i></a>
                    <a href="mailto:hello@michaelpragsdale.com" class="link-secondary fs-5" aria-label="Email"><i class="ph-duotone ph-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// [LOGIC] Global Konami Code Payload: Triggers "System Admin Access" popup
// Different reward for the main site!
$konami_config = [
    'title'      => 'System Admin Access',
    'icon'       => 'ph-duotone ph-terminal',
    'theme'      => '#0d6efd', // Web Awesome Pro Blue
    'text_color' => '#ffffff',
    'image'      => '',        // No image for this one, just text
    'body'       => '
        <h4 class="font-monospace text-white">> ACCESS GRANTED</h4>
        <p class="font-monospace text-success mt-2">
            Debug privileges have been elevated.<br>
            Welcome back, Administrator.
        </p>',
    'btn_text'   => 'Enter Dashboard',
    'btn_link'   => '/admin/dashboard',
    'btn_style'  => 'btn-outline-light'
];

include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>