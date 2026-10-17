<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Engine Room Records Global Footer
 * ============================================================================
 * ROLE: The primary footer for the "Engine Room Records" narrative property.
 *       Engine Room Records represents the musical heartbeat of the RaggieSoft
 *       universe. Founded by Michael Ragsdale as an independent label within
 *       RaggieSoft Media, the platform provides sanctuary for independent artists
 *       reclaiming their masters, creating concept rock operas, and preserving
 *       memories across four decades of storytelling.
 * 
 * POLICY & SECURITY (CLOSED-SYSTEM INFRASTRUCTURE):
 *       Engine Room Records is an artistic closed system and does NOT sign any
 *       outside artists—every artist on the roster is an AI Persona.
 *       Any attempts to submit unsolicited material to Engine Room Records or
 *       its associated addresses are automatically dropped and permanently deleted
 *       without human review at the Microsoft Exchange Transport Rule level.
 * 
 * ACCESSIBILITY & WCAG COMPLIANCE:
 *       The unsolicited submission disclaimer utilizes Web Awesome (<wa-callout>)
 *       with an accent danger appearance to guarantee full WCAG AA/AAA color
 *       contrast compliance across both Light ("The Day Shift") and Dark
 *       ("The Night Shift / The Vault") themes, eliminating contrast failures
 *       inherent in legacy Bootstrap alerts on dark backgrounds.
 * 
 * INTEGRATION: Injected via the router when the `engine-room` theme/site is 
 *              active. Requires `$cdnBaseUrl` and optionally `$hq_location` 
 *              to be set by the routing scope.
 * 
 * MAINTENANCE: Changes to the Grid Layout must account for tablet and mobile
 *              stacking. The "No Submissions" alert is a critical piece of 
 *              in-universe narrative identity and real-world security—do not remove.
 * ============================================================================
 */
?>
<!-- [LAYOUT] Main Imprint Footer: 4-column responsive grid handling branding, business ops, and catalog links -->
<footer class="mt-auto border-top border-secondary py-5">
    <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/images/logos/engine-room-records-logo.png" 
                     alt="Engine Room Records" 
                     width="120" 
                     class="navbar-brand-corporate-img mb-3"> 
                
                <div class="text-uppercase fw-bold fs-5" style="font-family: 'Courier New', monospace; letter-spacing: -1px;">
                    Loud. Raw. Real.
                </div>
                <p class="small text-body-secondary mt-2 mb-0">
                    The musical heartbeat of the RaggieSoft universe. Founded by Michael Ragsdale within RaggieSoft Media as an independent sanctuary for concept rock operas and preserving memories across four decades of storytelling.
                </p>
            </div>

            <!-- [UI COMPONENT] Business Operations Column: Direct links to DSP and legal contacts -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-3">Business & Licensing</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/raggiesoft-media/licensing/commercial" class="text-decoration-none text-body-secondary hover-text-primary">
                            <i class="fa-solid fa-handshake me-2 text-primary "></i>Commercial Portal
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="mailto:licensing@engineroom-records.com" class="text-decoration-none text-body-secondary hover-text-primary">
                            <i class="fa-solid fa-file-audio me-2  "></i>Sync & Performance
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="mailto:dsp.operations@engineroom-records.com" class="text-decoration-none text-body-secondary hover-text-primary">
                            <i class="fa-solid fa-tower-broadcast me-2 text-success "></i>DSP Operations
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="mailto:legal@engineroom-records.com" class="text-decoration-none text-body-secondary hover-text-warning">
                            <i class="fa-solid fa-scale-balanced me-2 text-warning "></i>Legal & Copyright
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-3">The Catalog</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">
                        <a href="/engine-room/artists" class="text-decoration-none text-body-secondary hover-text-danger">
                            <i class="fa-solid fa-users me-2 text-danger "></i>Active Roster
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/engine-room/history" class="text-decoration-none text-body-secondary hover-text-danger">
                            <i class="fa-solid fa-clock-rotate-left me-2  "></i>Historical Timeline
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="/about/engine-room" class="text-decoration-none text-body-secondary hover-text-danger">
                            <i class="fa-solid fa-industry me-2  "></i>About The Fortress
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h6 class="text-uppercase fw-bold border-bottom border-secondary-subtle pb-2 mb-3">Location & Contact</h6>
                
                <!-- Dynamic Location Rendered Here -->
                <p class="small text-body-secondary mb-2" style="font-family: var(--bs-font-monospace);">
                    <i class="fa-solid fa-location-dot me-2"></i>HQ: <?php echo htmlspecialchars($hq_location ?? 'Location Classified'); ?>
                </p>
                
                <p class="small text-body-secondary mb-3">
                    <i class="fa-solid fa-envelope me-2"></i><a href="mailto:inquiries@engineroom-records.com" class="text-decoration-none text-body-secondary hover-text-primary">inquiries@engineroom-records.com</a>
                </p>
                
                <!-- 
                    [UI COMPONENT] Closed-System & Narrative Security Disclaimer:
                    Built with Web Awesome (<wa-callout>) to guarantee WCAG AA/AAA color contrast
                    compliance in both light and dark themes. Discloses AI Persona roster 
                    and Microsoft Exchange transport-level automated deletion of unsolicited work.
                -->
                <wa-callout variant="danger" appearance="accent" size="small" class="text-start shadow-sm mb-0">
                    <wa-icon slot="icon" name="shield-xmark" variant="solid"></wa-icon>
                    <strong class="d-block mb-1">Closed System &bull; No Submissions</strong>
                    <div class="small">
                        Engine Room Records does not sign artists—every artist on this label is an AI Persona. Any attempts to submit material are deleted unread at the Microsoft Exchange Transport level.
                    </div>
                </wa-callout>
            </div>

        </div>
    </div>
</footer>

<style>
    /* Utility classes for smooth hover states in the footer */
    .hover-text-primary:hover { color: var(--bs-primary) !important; }
    .hover-text-danger:hover { color: var(--bs-danger) !important; }
    .hover-text-warning:hover { color: var(--bs-warning) !important; }
</style>