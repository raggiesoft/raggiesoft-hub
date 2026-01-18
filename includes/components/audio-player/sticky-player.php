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

<div class="modal fade" 
     id="lyricsModal" 
     tabindex="-1" 
     aria-hidden="true" 
     style="z-index: 1100;" 
     data-turbo-permanent="true">
     
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title">
            <i class="fa-duotone fa-music me-2 text-primary" aria-hidden="true"></i>
            <span id="lyricsModalTitle" class="text-glow-primary">Track Title</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="lyricsContent" class="font-monospace small text-body opacity-75"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Archive</button>
      </div>
    </div>
  </div>
</div>

<script>
    // Self-Inject Logic (Moves modal to Body to fix Z-Order stacking context issues)
    (function() {
        const player = document.getElementById('sticky-audio-player');
        const modal = document.getElementById('lyricsModal');
        // Move elements to body to escape any CSS formatting contexts of the footer/container
        if (player && !document.body.contains(player)) document.body.appendChild(player);
        if (modal && !document.body.contains(modal)) document.body.appendChild(modal);
    })();
</script>