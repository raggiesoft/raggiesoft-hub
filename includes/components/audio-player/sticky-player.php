<div id="sticky-audio-player" 
     class="fixed-bottom border-top border-secondary-subtle p-3 shadow-lg d-none" 
     style="z-index: 1050; background-color: #050508 !important; color: #E0E0FF !important;" 
     data-turbo-permanent="true" 
     data-bs-theme="dark">
     
    <div class="container">
        <div class="row align-items-center" role="region" aria-label="Audio Player">
            
            <div class="col-12 col-md-5 mb-2 mb-md-0 d-flex align-items-center">
                
                <div class="btn-group me-3">
                    <button type="button" class="btn btn-outline-light btn-sm" id="player-prev" aria-label="Previous Track">
                        <i class="fa-solid fa-backward-step" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-outline-light btn-sm" id="player-next" aria-label="Next Track">
                        <i class="fa-solid fa-forward-step" aria-hidden="true"></i>
                    </button>
                    
                    <button type="button" class="btn btn-outline-light btn-sm" id="player-repeat" aria-label="Toggle Repeat Mode">
                        <i class="fa-duotone fa-repeat" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light btn-sm" id="player-shuffle" aria-label="Toggle Shuffle">
                        <i class="fa-duotone fa-shuffle" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="btn btn-outline-info btn-sm" id="player-lyrics" aria-label="View Lyrics and Lore">
                        <i class="fa-duotone fa-book-open" aria-hidden="true"></i>
                    </button>
                </div>
                
                <img id="player-album-art" src="" alt="" class="rounded shadow-sm me-3 border border-secondary" style="height: 40px; width: 40px; object-fit: cover;">
                
                <div class="text-truncate" style="line-height: 1.2;">
                    <strong id="player-track-title" class="text-light d-block text-truncate">Select a track...</strong>
                    
                    <span id="player-track-artist" class="text-light opacity-75 small text-uppercase fw-bold text-truncate">Engine Room Radio</span>
                </div>
            </div>
            
            <div class="col-10 col-md-6">
                <audio id="main-audio-element" controls class="w-100" style="height: 36px; border-radius: 20px;" aria-label="Audio Playback Controls">
                    Your browser does not support OGG audio.
                </audio>
            </div>

            <div class="col-2 col-md-1 text-end">
                <button type="button" class="btn btn-sm btn-outline-light rounded-circle" id="btn-close-player" aria-label="Close Player">
                    <i class="fa-duotone fa-xmark" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Native HTML5 Dialog Styling */
    dialog#lyricsModal {
        width: 90vw;
        max-width: 800px;
        border: 1px solid var(--wa-color-primary, #42AADB);
        border-radius: 8px;
        background-color: var(--bs-body-bg, #121212);
        color: var(--bs-body-color, #e0e0e0);
        padding: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }
    
    dialog#lyricsModal::backdrop {
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(4px);
    }
</style>

<dialog id="lyricsModal" data-turbo-permanent="true">
    <div class="w-100 h-100 d-flex flex-column" style="padding: 1.5rem; max-height: 85vh; overflow-y: auto;">
        
        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom border-secondary pb-3">
            <div>
                <i class="fa-duotone fa-music me-2" style="color: var(--wa-color-primary);"></i>
                <strong id="lyricsModalTitle" class="text-glow-primary fs-5">Track Title</strong>
            </div>
            <wa-button appearance="plain" variant="neutral" onclick="document.getElementById('lyricsModal').close()" aria-label="Close">
                <i class="fa-solid fa-xmark fs-4"></i>
            </wa-button>
        </div>
        
        <div id="lyricsContent" class="font-monospace small flex-grow-1" style="opacity: 0.85;"></div>
        
        <div class="mt-4 pt-3 border-top border-secondary text-end">
            <wa-button variant="primary" onclick="document.getElementById('lyricsModal').close()">
                Close Archive
            </wa-button>
        </div>
        
    </div>
</dialog>

<script>
    // Self-Inject Logic
    (function() {
        const player = document.getElementById('sticky-audio-player');
        const modal = document.getElementById('lyricsModal');

        if (player && player.parentNode !== document.body) {
            document.body.appendChild(player);
        }
        
        if (modal && modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    })();
</script>
