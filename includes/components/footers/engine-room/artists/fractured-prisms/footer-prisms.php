<?php
/**
 * ============================================================================
 * ARCHITECTURAL DOCBLOCK: Fractured Prisms Footer
 * ============================================================================
 * File: raggiesoft-hub/includes/components/footers/engine-room/artists/fractured-prisms/footer-prisms.php
 *
 * CORE RESPONSIBILITY:
 * Renders the dedicated footer for the "Fractured Prisms" artist section under
 * Engine Room Records, linking to all valid discography, lore, and personnel routes.
 * ============================================================================
 */
?>
<footer class="py-5 border-top border-prism" style="background-color: var(--bs-bg-prism); transition: all var(--transition-speed) ease-in-out;">
    <div class="container">
        <div class="row gy-5">
            
            <div class="col-lg-4 text-center text-lg-start">
                <a href="/engine-room/artists/fractured-prisms" class="d-inline-block mb-3">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/fractured-prisms/band-logo.jpg" 
                         alt="Fractured Prisms" 
                         class="img-fluid prism-footer-logo" 
                         style="max-height: 80px;">
                </a>
                <p class="small pe-lg-4" style="line-height: 1.6; color: var(--bs-body-color); font-family: var(--font-tech);">
                    Architects of the progressive art-rock landscape. Atmospheric synth-rock and classical flute born from the Fragile Fortress.
                </p>
            </div>

            <div class="col-lg-3 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3 gothic-font" style="color: var(--bs-primary); letter-spacing: 1px;">The Catalog</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2" style="font-family: var(--font-tech);">
                    <li><a href="https://music.raggiesoft.com/fractured-prisms/1983-carnaby-street" class="text-decoration-none prism-footer-link">Carnaby Street (1983)</a></li>
                    <li><a href="https://music.raggiesoft.com/fractured-prisms/1985-live-at-independence-stadium" class="text-decoration-none prism-footer-link">Live at Independence Stadium (1985)</a></li>
                    <li class="mt-2 pt-2 border-top border-prism">
                        <a href="/engine-room/artists/fractured-prisms/discography" class="text-decoration-none fw-bold prism-footer-link-active">
                            View Album Lore <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3 gothic-font" style="color: var(--bs-primary); letter-spacing: 1px;">The Sanctuary</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2" style="font-family: var(--font-tech);">
                    <li><a href="/engine-room/artists/fractured-prisms" class="text-decoration-none prism-footer-link">The Square</a></li>
                    <li><a href="/engine-room/artists/fractured-prisms/story/the-hollow-square" class="text-decoration-none prism-footer-link">The Hollow Square</a></li>
                    <li><a href="/engine-room/artists/fractured-prisms/story/1985-american-shores-tour" class="text-decoration-none prism-footer-link">1985 American Tour</a></li>
                    <li><a href="/engine-room/artists/fractured-prisms/lore/colonial-theatre" class="text-decoration-none prism-footer-link">Colonial Theatre (1985)</a></li>
                    <li><a href="/engine-room/artists/fractured-prisms/band/claire-manning" class="text-decoration-none prism-footer-link">Claire &amp; Rhys Manning</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3 gothic-font" style="color: var(--bs-secondary); letter-spacing: 1px;">Management</h6>
                <a href="/engine-room" class="d-inline-block mb-2">
                    <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/images/logos/engine-room-records-logo.png" 
                        alt="Engine Room Records" 
                        class="engine-room-logo"
                        style="height: 35px; opacity: 0.7; transition: opacity var(--transition-speed) ease, filter var(--transition-speed) ease;">
                </a>
                <p class="small mb-0 mt-2" style="color: var(--bs-secondary); font-family: var(--font-tech);">
                    Master tapes rescued in the 1999 London Discovery and published exclusively via Engine Room Records.
                </p>
            </div>

        </div>
    </div>
</footer>

<style>
    .prism-footer-link {
        color: var(--bs-secondary);
        transition: color var(--transition-speed) ease;
    }
    .prism-footer-link:hover {
        color: var(--bs-primary);
        text-decoration: underline !important;
    }
    .prism-footer-link-active {
        color: var(--bs-body-color);
        transition: color var(--transition-speed) ease;
    }
    .prism-footer-link-active:hover {
        color: var(--bs-primary);
    }
    [data-bs-theme="dark"] .engine-room-logo {
        filter: invert(1) grayscale(100%) brightness(100%);
    }
    [data-bs-theme="light"] .engine-room-logo {
        filter: invert(0) grayscale(100%) brightness(20%);
    }
    [data-bs-theme="dark"] .prism-footer-logo {
        mix-blend-mode: screen;
    }
    [data-bs-theme="light"] .prism-footer-logo {
        mix-blend-mode: multiply;
    }
</style>