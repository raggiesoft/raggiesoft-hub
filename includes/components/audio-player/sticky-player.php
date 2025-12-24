<div id="sticky-audio-player" 
     class="fixed-bottom border-top border-primary p-3 shadow-lg d-none" 
     style="z-index: 1050; background-color: #050508 !important; color: #E0E0FF !important;" 
     data-turbo-permanent="true"
     data-bs-theme="dark">
     
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-12 col-md-5 mb-2 mb-md-0 d-flex align-items-center">
                
                <div class="btn-group me-3">
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="player-prev" title="Previous Track">
                        <i class="fa-solid fa-backward-step"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="player-next" title="Next Track">
                        <i class="fa-solid fa-forward-step"></i>
                    </button>
                    
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="player-repeat" title="Toggle Repeat Mode">
                        <i class="fa-duotone fa-repeat"></i>
                    </button>

                    <button type="button" class="btn btn-outline-secondary btn-sm" id="player-shuffle" title="Toggle Shuffle">
                        <i class="fa-duotone fa-shuffle"></i>
                    </button>

                    <button type="button" class="btn btn-outline-info btn-sm" id="player-lyrics" title="View Lyrics & Lore">
                        <i class="fa-duotone fa-book-open"></i>
                    </button>
                </div>
                
                <img id="player-album-art" src="" alt="Art" class="rounded shadow-sm me-3 border border-secondary" style="height: 40px; width: 40px; object-fit: cover;">
                
                <div class="text-truncate" style="line-height: 1.2;">
                    <strong id="player-track-title" class="text-light d-block text-truncate">Select a track...</strong>
                    <span id="player-track-artist" class="text-secondary small text-uppercase fw-bold text-truncate">Engine Room Radio</span>
                </div>
            </div>
            
            <div class="col-10 col-md-6">
                <audio id="main-audio-element" controls class="w-100" style="height: 36px; border-radius: 20px;">
                    Your browser does not support OGG audio.
                </audio>
            </div>

            <div class="col-2 col-md-1 text-end">
                <button type="button" class="btn btn-sm btn-outline-secondary rounded-circle" id="btn-close-player">
                    <i class="fa-duotone fa-xmark"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lyricsModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title">
            <i class="fa-duotone fa-music me-2 text-primary"></i>
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
    (function() {
        const player = document.getElementById('sticky-audio-player');
        const modal = document.getElementById('lyricsModal');
        if (player) document.body.appendChild(player);
        if (modal) document.body.appendChild(modal);
    })();
</script>