<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/components/footers/case-studies/footer-case-studies.php
 * Role: Section-Scoped Visual Footer for `/case-studies/*` ("RaggieSoft Archives")
 * Domain: https://raggiesoft.com (Assigned via `data/routes/case-studies.json` `"common.footer"`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Demonstrates Elara's DRY route inheritance in action! In `data/routes/case-studies.json`,
 * `"common"` sets `"footer": "case-studies/footer-case-studies"`. Whenever a visitor
 * views `/case-studies`, `/case-studies/cascade-protocol`, `/case-studies/shenandoah-valley`,
 * or `/case-studies/phys-100-report`, `includes/footer.php` swaps out `footer-default.php`
 * and injects THIS specialized Operational Archives footer instead (while still
 * keeping the mandatory `#global-legal-band` right below it!).
 *
 * INPUTS:
 * - `$cdnBaseUrl` and `ROOT_PATH` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - 3-column RaggieSoft Archives visual footer + Archive-themed Konami `<dialog>`.
 * ============================================================================
 *
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/includes/components/footers/case-studies/footer-case-studies.php
 * Path: /includes/components/footers/case-studies/footer-case-studies.php
 * 
 * CORE RESPONSIBILITY:
 * Reusable UI Component: Case Studies Footer.
 * Renders the dedicated footer for the "RaggieSoft Archives" (Operational Case Studies) section.
 * Provides distinct branding, quick links, and legal/licensing notices.
 * 
 * LORE CONTEXT:
 * - Frames the case studies as professional DevOps/Architecture documentation.
 * - Injects the "Konami" easter egg component to simulate an "Admin Root Access" terminal override.
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Employs a standard Bootstrap 5 footer layout (`.mt-auto`, `.bg-body-tertiary`, `.py-5`).
 * - Uses responsive grid (`.row`, `.col-lg-5`, etc.) to organize brand info, links, and social icons.
 * - Relies on FontAwesome (`ph-linkedin-logo`, `ph-envelope`) for social connections.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Requires `$cdnBaseUrl` to load the RaggieSoft logo.
 * - Includes `/includes/components/easter-eggs/konami.php` passing in a specific `$konami_config` array.
 * - Relies on `ROOT_PATH` for the easter egg inclusion.
 * 
 * MAINTENANCE NOTES:
 * - The Easter Egg config (`$konami_config`) is hardcoded here to provide a unique "Admin" flavor
 *   different from the standard Konami modal. Do not overwrite `$konami_config` downstream.
 */
?>
<div class="mt-auto bg-body-tertiary border-top py-5">
    <div class="container">
        <div class="row gy-4">
            
            <?php /* Column 1: Operational Archives Identity */ ?>
            <div class="col-lg-5 col-md-6">
                <a href="/case-studies" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/images/logo/raggiesoft-logo.png" 
                         alt="RaggieSoft Logo" width="40" height="40" class="me-2 navbar-brand-raggiesoft">
                    <span class="fs-5 fw-bold text-uppercase brand-font">RaggieSoft Archives</span>
                </a>
                <p class="text-body-secondary small">
                    <strong>Operational Case Studies.</strong><br>
                    Documentation of Personified DevOps, Neurodivergent Systems Architecture, and Crisis Management protocols.
                </p>
            </div>

            <?php /* Column 2: Direct Navigation to Case Study Reports */ ?>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="/case-studies" class="nav-link p-0 text-body-secondary">Overview</a></li>
                    <li class="nav-item mb-2"><a href="/case-studies/cascade-protocol" class="nav-link p-0 text-body-secondary">Cascade Protocol</a></li>
                    <li class="nav-item mb-2"><a href="/case-studies/shenandoah-valley" class="nav-link p-0 text-body-secondary">Shenandoah Gauntlet</a></li>
                    <li class="nav-item mb-2"><a href="/case-studies/silent-exhaustion" class="nav-link p-0 text-body-secondary">Silent Exhaustion</a></li>
                </ul>
            </div>

            <?php /* Column 3: Accessible icon-only LinkedIn & Email links (`aria-label`) */ ?>
            <div class="col-lg-4 col-md-6 text-md-end">
                <h6 class="fw-bold mb-3">Connect</h6>
                <div class="d-flex justify-content-md-end gap-3">
                    <a href="https://linkedin.com/in/michael-ragsdale-raggiesoft" class="link-secondary fs-5" aria-label="LinkedIn"><i class="ph-duotone ph-linkedin-logo"></i></a>
                    <a href="mailto:hello@michaelpragsdale.com" class="link-secondary fs-5" aria-label="Email"><i class="ph-duotone ph-envelope"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <?php /* Bottom sub-row showing dynamic year (`date("Y")`), CC BY-SA 4.0 link, and return link to `/` */ ?>
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-body-secondary">
                <p class="mb-1">&copy; <?php echo date("Y"); ?> Michael Ragsdale.</p>
                <p class="mb-0">
                    <a href="https://corporate.raggiesoft.com/licensing" class="text-reset text-decoration-none border-bottom">CC BY-SA 4.0</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end small text-body-secondary mt-3 mt-md-0">
                <a href="/" class="text-decoration-none text-reset me-3">RaggieSoft Home</a>
            </div>
        </div>
    </div>
</div>

<?php
// Section-specific Konami Easter Egg configuration + `<dialog>` inclusion:
// Standard Admin Access Easter Egg
$konami_config = [
    'title'      => 'Archive Level Access',
    'icon'       => 'ph-duotone ph-database',
    'theme'      => '#dc3545', 
    'text_color' => '#ffffff',
    'image'      => '', 
    'body'       => '
        <h4 class="font-monospace text-white">> ROOT ACCESS GRANTED</h4>
        <p class="font-monospace text-warning mt-2">
            Restricted files are now visible.<br>
            Proceed with caution.
        </p>',
    'btn_text'   => 'View Logs',
    'btn_link'   => '/admin/logs',
    'btn_style'  => 'btn-outline-light'
];

include ROOT_PATH . '/includes/components/easter-eggs/konami.php';
?>