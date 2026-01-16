<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold border-bottom pb-2 text-primary">
                <i class="fa-duotone fa-tower-broadcast me-2"></i>Signal Decryptor
            </h1>
            <p class="lead text-muted">
                Intercept and decode the transmission.
            </p>
            <p>
                <strong>Protocol:</strong> The signal consists of 4 digits. Each digit is between 1 and 5. No digits are repeated.
            </p>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 bg-light">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fa-duotone fa-gamepad-modern me-2"></i>Controls
                    </h5>
                    <span class="badge bg-danger">LIVE</span>
                </div>
                <div class="card-body">
                    <form id="cipherForm">
                        <div class="mb-4">
                            <label for="secretCode" class="form-label fw-bold text-uppercase small text-secondary">Target Signal (Secret Code)</label>
                            <input type="text" 
                                   class="form-control form-control-lg font-monospace text-center letter-spacing-2" 
                                   id="secretCode" 
                                   placeholder="e.g. 4523" 
                                   maxlength="4" 
                                   pattern="[1-5]{4}"
                                   required 
                                   autocomplete="off">
                            <div class="form-text">Enter 4 unique digits (1-5). Keep this hidden.</div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="mb-3">
                            <label for="guessInput" class="form-label fw-bold text-uppercase small text-secondary">Incoming Frequency (Guess)</label>
                            <input type="text" 
                                   class="form-control form-control-lg font-monospace text-center letter-spacing-2" 
                                   id="guessInput" 
                                   placeholder="e.g. 5243" 
                                   maxlength="4" 
                                   pattern="[1-5]{4}"
                                   required
                                   autocomplete="off">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa-duotone fa-magnifying-glass me-2"></i>Analyze Signal
                            </button>
                            <button type="button" id="resetBtn" class="btn btn-outline-secondary">
                                <i class="fa-duotone fa-rotate-left me-2"></i>Reset Transmission
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div id="resultBox" class="alert alert-dark text-center py-4 d-none mb-4 border-2">
                <h6 class="text-uppercase text-muted letter-spacing-1 mb-3">Decryption Result</h6>
                <div class="display-1 fw-bold text-dark" id="resultSymbols" style="letter-spacing: 0.2em;">
                    </div>
            </div>

            <div id="explanationBox" class="card border-primary d-none">
                <div class="card-header bg-primary text-white">
                    <strong class="small text-uppercase">
                        <i class="fa-duotone fa-microchip me-2"></i>Logic Analysis Log
                    </strong>
                </div>
                <div class="card-body bg-light">
                    <ul id="logList" class="list-group list-group-flush bg-transparent">
                        </ul>
                </div>
            </div>

            <div id="placeholderState" class="text-center text-muted py-5">
                <i class="fa-duotone fa-shield-keyhole fa-4x opacity-25 mb-3"></i>
                <p>Waiting for input...</p>
            </div>
        </div>
    </div>
</div>

<script src="https://assets.raggiesoft.com/apps/cipher/js/cipher.js"></script>