<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /pages/apps/cipher/overview.php
 * Role: Interactive "Signal Decryptor" Game UI (`https://raggiesoft.com/apps/cipher`)
 * Route Manifest: `/data/routes/apps/cipher.json` -> `"/apps/cipher"`
 *                 (Clean folder URL—never linked as `/apps/cipher/overview`!)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * Renders the interactive frontend for RaggieSoft's Bulls-and-Cows / Mastermind
 * code-breaking game (`Signal Decryptor`), working hand-in-hand with two companion
 * files:
 *   - Client-Side Controller: `$cdnBaseUrl/raggiesoft-corporate/apps/cipher/js/cipher.js`
 *     (loaded at the bottom of this template with a `?v=time()` cache-buster).
 *   - Server-Side Scoring API: `/includes/components/apps/cipher/logic.php`
 *     (which receives JSON `POST` payloads and returns `+` / `-` match symbols).
 *
 * KEY ACCESSIBILITY & MOBILE UX PATTERNS DEMONSTRATED HERE:
 *   1. Custom Card-Radio Controls (`.card-radio`): Visually hides native radio
 *      dots with `opacity: 0` (NOT `display: none`, so keyboard `Tab` / Arrow
 *      navigation still works!) and styles `input:checked + label` with CSS.
 *   2. Mobile Numeric Keypads: `inputmode="numeric"` and `pattern="[0-9]*"`
 *      pop up a large numeric keypad on iOS/Android phones without ugly desktop
 *      `<input type="number">` up/down spinner arrows.
 *   3. ARIA Live Announcements: `#resultBox` (`role="alert"`) and `#stealthToast`
 *      (`role="alert" aria-live="assertive" aria-atomic="true"`) announce score
 *      updates and Stealth Protocol toggles automatically to screen readers.
 *
 * INPUTS:
 * - `$cdnBaseUrl` from `amanda/elara.php`.
 *
 * OUTPUT PRODUCED:
 * - Interactive Mission Configuration bar + 2-column Controls / Decryption Log
 *   layout + Toast notification container + `cipher.js` script tag.
 * ============================================================================
 *
 * Signal Decryptor (Cipher App Overview)
 *
 * This file serves as the main user interface for the "Signal Decryptor" game, a modern
 * interpretation of the classic "Bulls and Cows" / Mastermind logic puzzle.
 *
 * Architecture Notes:
 * - Implements a form-driven interface for configuring game difficulty (Calibration, Orbital, Deep Space, Horizon).
 * - Includes a "Stealth Protocol" toggle that interacts with the frontend JS to obscure codes and logs.
 * - Relies heavily on `apps/cipher/js/cipher.js` for the client-side game loop and validation.
 * - Future UI updates should ensure the difficulty inputs (`diffCalibration`, etc.) remain in sync with the JS constants.
 */
?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold border-bottom pb-2 text-primary">
                <i class="ph-duotone ph-broadcast me-2"></i>Signal Decryptor
            </h1>
            <p class="lead text-body-secondary">
                Configure the transmitter and intercept the signal.
            </p>
        </div>
    </div>

    <?php /* Mission Configuration Card: Radio buttons (`value="calibration|orbital|deep|horizon"`) match the exact `switch ($difficulty)` cases inside `includes/components/apps/cipher/logic.php`! */ ?>
    <div class="card bg-base-200 border border-base-300 shadow-sm border-0 bg-body-tertiary mb-5 w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">

        <div class="card-header bg-dark text-white d-flex align-items-center p-3">
            <i class="ph-duotone ph-sliders me-2"></i>
            <strong class="text-uppercase">Mission Configuration</strong>
        </div>
        <div class="card-body p-4">
            <form id="configForm">
                <div class="row g-4">
                    <div class="col-12 col-lg-8 border-end-lg">
                        <label class="form-label fw-bold text-uppercase small text-body-secondary mb-3">Signal Difficulty Tier</label>
                        <div class="d-flex flex-wrap gap-3">
                            
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="difficulty" id="diffCalibration" value="calibration" checked>
                                <label class="form-check-label" for="diffCalibration">
                                    <span class="d-block fw-bold text-success"><i class="ph-duotone ph-gauge me-1"></i> Calibration</span>
                                    <small class="text-body-secondary" style="font-size: 0.75rem;">1-5 • Unique</small>
                                </label>
                            </div>

                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="difficulty" id="diffOrbital" value="orbital">
                                <label class="form-check-label" for="diffOrbital">
                                    <span class="d-block fw-bold text-info"><i class="ph-duotone ph-broadcast me-1"></i> Orbital</span>
                                    <small class="text-body-secondary" style="font-size: 0.75rem;">1-6 • Repeats</small>
                                </label>
                            </div>

                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="difficulty" id="diffDeep" value="deep">
                                <label class="form-check-label" for="diffDeep">
                                    <span class="d-block fw-bold text-warning"><i class="ph-duotone ph-planet me-1"></i> Deep Space</span>
                                    <small class="text-body-secondary" style="font-size: 0.75rem;">0-9 • Unique</small>
                                </label>
                            </div>

                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="difficulty" id="diffHorizon" value="horizon">
                                <label class="form-check-label" for="diffHorizon">
                                    <span class="d-block fw-bold text-danger"><i class="ph-duotone ph-planet me-1"></i> Horizon</span>
                                    <small class="text-body-secondary" style="font-size: 0.75rem;">0-9 • Repeats</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 d-flex align-items-center">
                        <div class="d-flex align-items-center p-3 bg-body rounded border w-100">
                            
                            <div class="form-check form-switch m-0 min-w-auto">
                                <input class="form-check-input fs-4 m-0" type="checkbox" role="switch" id="stealthMode">
                            </div>

                            <label class="form-check-label ms-3 cursor-pointer" for="stealthMode">
                                <strong class="d-block text-body-emphasis">Stealth Protocol</strong>
                                <small class="text-body-secondary">Hide Code &amp; Explain Logs</small>
                            </label>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    
</div>

    <div class="row g-5">
        <div class="col-md-5">
            <div class="card bg-base-200 border border-base-300 shadow-sm border-0 bg-body-tertiary w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">

                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center p-3">
                    <h5 class="mb-0">
                        <i class="ph-duotone ph-game-controller me-2"></i>Controls
                    </h5>
                    <span id="rulesBadge" class="badge badge-primary text-primary">1-5 • Unique</span>
                </div>
                <div class="card-body p-4">
                    <form id="cipherForm">
                        
                        <?php /* Secret Code input: `type="password"` masks digits for 2-player "Hot Seat" mode until `#toggleSecretVisibility` toggles it to `type="text"` in `cipher.js`; `inputmode="numeric"` triggers mobile number pads */ ?>
                        <div class="mb-4">
                            <label for="secretCode" class="form-label fw-bold text-uppercase small text-body-secondary">Target Signal (Secret Code)</label>
                            <div class="input-group">
                                <input type="password" 
                                       class="form-control form-control-lg font-monospace text-center letter-spacing-2" 
                                       id="secretCode" 
                                       placeholder="Wait..." 
                                       maxlength="4" 
                                       inputmode="numeric"
                                       pattern="[0-9]*"
                                       required 
                                       autocomplete="off">
                                <button class="btn btn-neutral btn-outline" id="toggleSecretVisibility" type="button">
                                    <i class="ph-duotone ph-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                            <div class="form-text text-body-secondary" id="secretHint">Enter 4 unique digits (1-5).</div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="mb-3">
                            <label for="guessInput" class="form-label fw-bold text-uppercase small text-body-secondary">Incoming Frequency (Guess)</label>
                            <input type="tel" 
                                   class="form-control form-control-lg font-monospace text-center letter-spacing-2" 
                                   id="guessInput" 
                                   placeholder="----" 
                                   maxlength="4" 
                                   inputmode="numeric"
                                   pattern="[0-9]*"
                                   required
                                   autocomplete="off">
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="submit">
                                <i  class="ph-duotone ph-magnifying-glass"></i>Analyze Signal
                            </button>
                            <button class="btn btn-neutral btn-outline" id="resetBtn" type="button">
                                <i  class="ph-duotone fa-rotate-left"></i>Reset Transmission
                            </button>
                        </div>
                        
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="/apps/cipher/rules" class="text-decoration-none text-body-secondary small">
                                <i class="ph-duotone ph-book-open me-1"></i>Protocols
                            </a>
                            <span class="text-body-secondary small opacity-50">•</span>
                            <a href="/apps/cipher/history" class="text-decoration-none text-body-secondary small">
                                <i class="ph-duotone ph-scroll me-1"></i>Origins
                            </a>
                        </div>

                    </form>
                </div>
            
</div>
        </div>

        <?php /* Right Column (`col-md-7`): Dynamic Decryption Result (`role="alert"`) + Step-by-Step Logic Analysis Log populated by `cipher.js` */ ?>
        <div class="col-md-7">
            <div id="resultBox" role="alert" class="alert shadow-sm text-center py-4 d-none mb-4 d-block">

                <h6 class="text-uppercase text-body-secondary letter-spacing-1 mb-3">Decryption Result</h6>
                <div class="display-1 fw-bold text-body-emphasis" id="resultSymbols" style="letter-spacing: 0.2em;">
                    </div>
            
</div>

            <div id="explanationBox" class="card bg-base-200 border border-base-300 border-primary d-none w-100" style="--body-padding: 0; --header-padding: 0;">

                <div class="card-header bg-primary text-white p-3">
                    <strong class="small text-uppercase">
                        <i class="ph-duotone ph-cpu me-2"></i>Logic Analysis Log
                    </strong>
                </div>
                <div class="card-body bg-body-tertiary p-4">
                    <ul id="logList" class="list-group list-group-flush bg-transparent">
                        </ul>
                </div>
            
</div>

            <div id="placeholderState" class="text-center text-body-secondary py-5">
                <i class="ph-duotone ph-shield ph-4x opacity-50 mb-3"></i>
                <p>Waiting for input...</p>
            </div>
        </div>
    </div>
</div>

<?php /* Accessible Toast Notification (`aria-live="assertive" aria-atomic="true"`) announcing Stealth Protocol state changes */ ?>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="stealthToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-dark text-white">
            <i class="ph-duotone ph-detective me-2"></i>
            <strong class="me-auto">System Notification</strong>
            <small class="text-white-50">Just now</small>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body bg-body-tertiary">
            Stealth Protocol updated. <br>
            <span class="text-body-secondary small">Changes will apply on next analysis.</span>
        </div>
    </div>
</div>

<script src="<?php echo $cdnBaseUrl; ?>/raggiesoft-corporate/apps/cipher/js/cipher.js?v=<?php echo time(); ?>"></script>

<style>
.card-radio {
    position: relative;
    padding-left: 0;
}
.card-radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.card-radio label {
    display: block;
    padding: 0.75rem 1rem;
    border: 2px solid var(--bs-border-color);
    border-radius: 0.5rem;
    cursor: pointer;
    transition: all 0.2s;
    background: var(--bs-body-bg); 
    color: var(--bs-body-color);    
}
.card-radio input:checked + label {
    border-color: var(--bs-primary);
    background-color: var(--bs-primary-bg-subtle);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
</style>