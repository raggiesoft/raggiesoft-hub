<?php
/**
 * @license MIT
 * ============================================================================
 * RaggieSoft Global Privacy Policy
 * File: pages/about/privacy.php (https://raggiesoft.com/about/privacy)
 * ============================================================================
 * ARCHITECTURE & LEGAL CONTEXT:
 * Renders the master Privacy Policy governing RaggieSoft.com, all
 * *.raggiesoft.com subdomains (music, books, engineroom, stardust, corporate,
 * lore, nebulae, storetrainer, backstage), and michaelpragsdale.com.
 *
 * KEY DISCLOSURES:
 * 1. Natural-Person Data Controller: Identifies Michael P. Ragsdale (operating
 *    under the unincorporated creative imprints RaggieSoft, RaggieSoft Media,
 *    Engine Room Records, and Ocean View Archives in Norfolk, Virginia) as the
 *    sole operator.
 * 2. Hardcoded Git-Verifiable Dates: Uses explicit static Effective & Last
 *    Updated dates + public changelog instead of dynamic PHP date("F Y").
 * 3. Zero-Database / Zero-Account Architecture: Confirms that the Network has
 *    no SQL/NoSQL user databases, no login walls, and never sells or brokers
 *    personal information.
 * 4. Complete Inventory of Active Data & Third-Party Processors:
 *    - On-Device Local Browser Storage (localStorage & Service Worker cache)
 *    - Cloudflare (Edge CDN, reverse proxy, DDoS protection, security cookies)
 *    - DigitalOcean NYC1 ("Jessica" Nginx access logs & Spaces asset CDN)
 *    - Google Analytics 4 (G-P9RG9JVYB6 anonymous traffic telemetry & opt-out)
 *    - Microsoft Bookings & Microsoft 365 (voluntary meeting/email contact)
 *    - Fourthwall Inc. (Merchant of Record for store.raggiesoft.com) &
 *      external DSPs (Spotify, Apple Music, Amazon Music, YouTube Music).
 * ============================================================================
 */
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- HEADER & HARDCODED GIT-VERIFIABLE TIMESTAMPS -->
            <div class="mb-5 text-center">
                <span class="badge bg-primary-subtle text-primary-emphasis border border-primary-subtle px-3 py-2 rounded-pill mb-3 fw-bold text-uppercase">
                    Privacy-First Static Architecture &bull; Zero User Databases
                </span>
                <h1 class="fw-bold mb-2">Privacy Policy</h1>
                <p class="text-body-secondary mb-1">
                    <strong>Effective Date:</strong> March 29, 2026 &bull; <strong>Last Updated:</strong> October 26, 2026
                </p>
                <p class="small text-body-secondary mb-0">
                    Governing <code>raggiesoft.com</code>, all <code>*.raggiesoft.com</code> subdomains, <code>michaelpragsdale.com</code>, and official vanity domains
                </p>
            </div>

            <div class="card bg-base-200 border border-base-300 shadow-sm mb-4 w-100">
                <div class="card-body p-4 p-lg-5">

                    <!-- 1. INTRODUCTION & OPERATOR IDENTITY -->
                    <section class="mb-5" aria-labelledby="priv-intro-heading">
                        <h2 id="priv-intro-heading" class="h4 fw-bold mb-3">1. Operator Identity &amp; Zero-Database Architecture</h2>
                        <p>
                            Welcome to the <strong>RaggieSoft</strong> network (including <code>raggiesoft.com</code>, <code>music.raggiesoft.com</code>, <code>books.raggiesoft.com</code>, <code>engineroom.raggiesoft.com</code>, <code>stardust.raggiesoft.com</code>, <code>corporate.raggiesoft.com</code>, <code>lore.raggiesoft.com</code>, <code>nebulae.raggiesoft.com</code>, <code>storetrainer.raggiesoft.com</code>, <code>backstage.raggiesoft.com</code>, and <code>michaelpragsdale.com</code>, collectively the <strong>&ldquo;Network&rdquo;</strong>).
                        </p>
                        <p>
                            The Network is owned and operated by <strong>Michael P. Ragsdale</strong>, an individual residing in Norfolk, Virginia, operating under the unincorporated creative imprints <strong>RaggieSoft</strong>, <strong>RaggieSoft Media</strong>, <strong>Engine Room Records</strong> (music imprint), and <strong>Ocean View Archives</strong> (literary/book publishing imprint)—each strictly without &ldquo;LLC,&rdquo; &ldquo;Inc.,&rdquo; or &ldquo;Corp.&rdquo; All websites in the Network are engineered using a <strong>100% static, flat-file, Zero-Database Architecture</strong>. There are no user registration accounts, no password databases, no comment sections, and no behavioral ad-broker profiles anywhere on the Network.
                        </p>
                    </section>

                    <hr class="my-4 opacity-25">

                    <!-- 2. INFORMATION COLLECTED & STORED -->
                    <section class="mb-5" aria-labelledby="priv-data-heading">
                        <h2 id="priv-data-heading" class="h4 fw-bold mb-4">2. Categories of Data &amp; Active Third-Party Services</h2>

                        <!-- A. Local Browser Storage -->
                        <div class="p-4 rounded bg-body-tertiary border mb-3">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-browser me-2" aria-hidden="true"></i>A. On-Device Browser Storage (<code>localStorage</code> &amp; PWA Cache — Never Sent to Server)
                            </h3>
                            <p class="small text-body mb-2">
                                To remember your accessibility and playback preferences without requiring an account or tracking cookie, our web applications store preference keys strictly inside your own browser&rsquo;s <code>localStorage</code> and Progressive Web App Service Worker cache, including:
                            </p>
                            <ul class="small text-body-secondary mb-0">
                                <li><strong>Theme &amp; Motion Accessibility Settings:</strong> Light/Dark mode overrides (<code>color-scheme</code>, <code>engine_room_settings</code>) and reduced-motion preferences (<code>cosmic-motion</code>).</li>
                                <li><strong>Audio Player &amp; Book Reader Progress:</strong> Your last played track, queue, and timestamp on <code>music.raggiesoft.com</code> (<code>raggiesoft_music_session_v1</code>), preferred streaming service (<code>raggiesoft_preferred_dsp</code>), and reading position on <code>books.raggiesoft.com</code>.</li>
                            </ul>
                        </div>

                        <!-- B. Cloudflare -->
                        <div class="p-4 rounded bg-body-tertiary border mb-3">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-shield-checkered me-2" aria-hidden="true"></i>B. Edge CDN &amp; DDoS Security Perimeter (Cloudflare, Inc.)
                            </h3>
                            <p class="small text-body mb-0">
                                All traffic to the Network passes through <strong>Cloudflare</strong> as a reverse-proxy Content Delivery Network (CDN) and Web Application Firewall (WAF). Cloudflare processes network metadata (including your IP address, Autonomous System Number, and HTTP request headers) to mitigate DDoS attacks, block malicious bots, and serve cached static assets. Cloudflare may place strictly necessary security cookies (such as <code>__cf_bm</code> or <code>cf_clearance</code>) to distinguish human visitors from automated abuse. See <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener noreferrer">Cloudflare&rsquo;s Privacy Policy ↗</a>.
                            </p>
                        </div>

                        <!-- C. DigitalOcean Server Logs -->
                        <div class="p-4 rounded bg-body-tertiary border mb-3">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-hard-drives me-2" aria-hidden="true"></i>C. Origin Web Server (&ldquo;Jessica&rdquo;) &amp; Asset CDN Logs (DigitalOcean NYC1)
                            </h3>
                            <p class="small text-body mb-0">
                                Our origin server hosted in DigitalOcean&rsquo;s NYC1 datacenter and our static media bucket (<code>assets.raggiesoft.com</code> on DigitalOcean Spaces) record standard HTTP access logs (<code>/var/log/nginx/access.log</code>) containing the requesting IP address, date/time stamp, requested URI, HTTP status code, bytes transferred, referrer, and User-Agent string. These logs are used strictly for security auditing, uptime monitoring, and debugging, are rotated automatically, and are never sold or shared with third-party marketers.
                            </p>
                        </div>

                        <!-- D. Google Analytics -->
                        <div class="p-4 rounded bg-body-tertiary border mb-3">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-chart-line-up me-2" aria-hidden="true"></i>D. Aggregate Traffic Telemetry (Google Analytics 4)
                            </h3>
                            <p class="small text-body mb-0">
                                Select properties on the Network utilize <strong>Google Analytics 4</strong> (Measurement ID <code>G-P9RG9JVYB6</code>) to measure aggregate readership and page performance (such as which engineering case studies, novels, or discography pages are visited most frequently). Google Analytics sets first-party cookies (<code>_ga</code>, <code>_ga_*</code>) to compile anonymous statistical reports. I do not enable Google Signals advertising features, do not link analytics to personally identifiable information, and fully respect browser ad-blockers, script blockers, and the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-Out Browser Add-on ↗</a>.
                            </p>
                        </div>

                        <!-- E. Microsoft Bookings & Microsoft 365 -->
                        <div class="p-4 rounded bg-body-tertiary border mb-3">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-calendar-check me-2" aria-hidden="true"></i>E. Voluntary Scheduling &amp; Direct Email Correspondence (Microsoft 365 &amp; Microsoft Bookings)
                            </h3>
                            <p class="small text-body mb-0">
                                I do not collect your name, email address, or telephone number unless you voluntarily provide it by booking a meeting through our <strong>Microsoft Bookings</strong> scheduling page or sending an email directly to an official <code>@raggiesoft.com</code> or <code>@engineroom-records.com</code> address. Voluntary correspondence is processed through <strong>Microsoft 365</strong> enterprise mail infrastructure and is used solely by Michael P. Ragsdale to respond to your inquiry or scheduled appointment.
                            </p>
                        </div>

                        <!-- F. Fourthwall Merchant of Record & External DSPs -->
                        <div class="p-4 rounded bg-body-tertiary border border-start border-5 border-primary">
                            <h3 class="h5 h6 fw-bold text-primary mb-2">
                                <i class="ph-duotone ph-shopping-bag me-2" aria-hidden="true"></i>F. E-Commerce Merchant of Record (Fourthwall) &amp; External Streaming Platforms (DSPs)
                            </h3>
                            <p class="small text-body mb-2">
                                Our official merchandise and digital album storefront at <code>store.raggiesoft.com</code> is hosted and operated by <strong>Fourthwall Inc.</strong> as the legal <strong>Merchant of Record</strong>. When you purchase physical merchandise or digital audio archives on <code>store.raggiesoft.com</code>, Fourthwall collects and processes your payment card details, billing/shipping address, and order fulfillment data directly. <strong>Michael P. Ragsdale never collects, views, processes, or stores your credit card or payment instrument numbers on RaggieSoft servers.</strong>
                            </p>
                            <p class="small text-body mb-3">
                                Similarly, when you click outbound links to stream our music on <strong>Spotify</strong>, <strong>Apple Music</strong>, <strong>Amazon Music</strong>, or <strong>YouTube Music</strong>, or view repositories on <strong>GitHub</strong> or profiles on <strong>LinkedIn</strong>, your activity on those external platforms is governed by their respective privacy policies.
                            </p>
                            <a href="https://store.raggiesoft.com/pages/privacy-policy" class="btn btn-primary btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Read Fourthwall&rsquo;s Privacy Policy ↗</a>
                        </div>
                    </section>

                    <hr class="my-4 opacity-25">

                    <!-- 3. DO NOT SELL / PRIVACY RIGHTS & CHILDREN'S PRIVACY -->
                    <section class="mb-5" aria-labelledby="priv-rights-heading">
                        <h2 id="priv-rights-heading" class="h4 fw-bold mb-3">3. No Sale of Personal Data, Privacy Rights (VCDPA / CCPA / GDPR) &amp; Children&rsquo;s Privacy</h2>
                        <ul class="small text-body d-grid gap-2 mb-0">
                            <li>
                                <strong>Zero Sale or Sharing of Personal Information:</strong> Michael P. Ragsdale does not sell, rent, lease, or trade personal information or visitor logs to third parties or data brokers for monetary or other valuable consideration, and does not engage in cross-context behavioral advertising.
                            </li>
                            <li>
                                <strong>Exercising Access or Deletion Requests:</strong> Although Michael P. Ragsdale operates as an individual creator far below the statutory applicability thresholds of the Virginia Consumer Data Protection Act (VCDPA), CCPA/CPRA, and GDPR, if you have voluntarily submitted your contact information via email or Microsoft Bookings and wish to request its deletion, you may contact me at any time and I will promptly delete the correspondence (subject only to any legal recordkeeping obligations).
                            </li>
                            <li>
                                <strong>Children&rsquo;s Privacy (COPPA):</strong> The Network does not knowingly solicit or collect personal information from children under the age of 13.
                            </li>
                        </ul>
                    </section>

                    <hr class="my-4 opacity-25">

                    <!-- 4. CONTACT & REVISION LEDGER -->
                    <section aria-labelledby="priv-contact-heading">
                        <h2 id="priv-contact-heading" class="h4 fw-bold mb-3">4. Contact Information &amp; Public Revision Ledger</h2>
                        <p class="small text-body mb-4">
                            For any questions regarding this Privacy Policy or our data practices, please reach out via the official contact methods on <a href="/contact">raggiesoft.com/contact</a> or email <a href="mailto:dsp.operations@engineroom-records.com">dsp.operations@engineroom-records.com</a>.
                        </p>

                        <div class="p-3 rounded bg-body-tertiary border small">
                            <strong class="d-block mb-1 text-uppercase font-monospace">Public Revision &amp; Audit Ledger</strong>
                            <ul class="mb-0 text-body-secondary">
                                <li><strong>October 26, 2026:</strong> Replaced dynamic month/year timestamp with hardcoded git-verifiable Effective Date (March 29, 2026) and Last Updated date (October 26, 2026); unified disclosures across all subdomains covering on-device <code>localStorage</code> keys, Cloudflare WAF/CDN, DigitalOcean NYC1 server logs, Google Analytics 4 (<code>G-P9RG9JVYB6</code>), Microsoft Bookings / Microsoft 365, and Fourthwall Merchant-of-Record separation.</li>
                                <li><strong>March 29, 2026:</strong> Initial publication of RaggieSoft network Privacy Policy.</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>
</div>
