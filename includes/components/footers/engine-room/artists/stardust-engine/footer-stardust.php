<?php
// includes/components/footers/engine-room/artists/stardust-engine/footer-stardust.php
// The dedicated footer for The Stardust Engine
?>
<footer class="py-5 bg-black text-white-50 border-top border-secondary" style="border-top-color: #4DB8FF !important;">
    <div class="container">
        <div class="row gy-5">
            
            <div class="col-lg-4 text-center text-lg-start">
                <a href="/engine-room/artists/stardust-engine" class="d-inline-block mb-3">
                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/band-logo.png" 
                         alt="The Stardust Engine" 
                         class="img-fluid drop-shadow-neon" 
                         style="max-height: 80px;">
                </a>
                <p class="small text-white-75 pe-lg-4" style="line-height: 1.6;">
                    Pushing the boundaries of the digital frontier. 80s Synth-Pop and Progressive Rock fueled by nostalgia, narrative, and electric color.
                </p>
            </div>

            <div class="col-lg-3 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3" style="color: #E699FF; letter-spacing: 1px;">Terminal / Audio</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="/engine-room/artists/stardust-engine/discography/electric-color" class="text-decoration-none text-white-50 hover-neon-blue">Electric Color</a></li>
                    <li><a href="/engine-room/artists/stardust-engine/discography/carnaby-street" class="text-decoration-none text-white-50 hover-neon-blue">Carnaby Street</a></li>
                    <li><a href="/engine-room/artists/stardust-engine/discography/hard-reset" class="text-decoration-none text-white-50 hover-neon-blue">Hard Reset</a></li>
                    <li class="mt-2 pt-2 border-top border-secondary border-opacity-50">
                        <a href="/engine-room/artists/stardust-engine/discography" class="text-decoration-none text-white fw-bold hover-neon-purple">
                            View Full Catalog <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3" style="color: #4DB8FF; letter-spacing: 1px;">The Network</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="/engine-room/artists/stardust-engine/history" class="text-decoration-none text-white-50 hover-neon-blue">Band History</a></li>
                    <li><a href="/raggiesoft-books/knox" class="text-decoration-none text-white-50 hover-neon-blue">Project: KNOX Lore</a></li>
                    <li><a href="/engine-room/artists/stardust-engine/forger-nation" class="text-decoration-none text-white-50 hover-neon-blue">Forger Nation Hub</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 text-center text-md-start">
                <h6 class="text-uppercase fw-bold mb-3 text-secondary" style="letter-spacing: 1px;">Management</h6>
                <a href="/engine-room" class="d-inline-block mb-2 theme-invert">
                    <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.png" 
                         alt="Engine Room Records" 
                         style="height: 35px; opacity: 0.7;">
                </a>
                <p class="small text-white-50 mb-0 mt-2">
                    The Stardust Engine is an independent project published exclusively via Engine Room Records.
                </p>
            </div>

        </div>

        <div class="row mt-5 pt-4 border-top border-secondary border-opacity-50 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="small text-white-50 mb-0 font-monospace">
                    &copy; <?php echo date('Y'); ?> RaggieSoft Media / Engine Room Records. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="/raggiesoft-media/licensing" class="text-decoration-none text-white-50 small hover-neon-purple me-3">Licensing</a>
                <a href="/about/terms" class="text-decoration-none text-white-50 small hover-neon-purple">Terms of Broadcast</a>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Stardust Engine Footer Hover Effects */
    .hover-neon-blue:hover {
        color: #4DB8FF !important;
        text-shadow: 0 0 8px rgba(77, 184, 255, 0.5);
    }
    .hover-neon-purple:hover {
        color: #E699FF !important;
        text-shadow: 0 0 8px rgba(230, 153, 255, 0.5);
    }
    .drop-shadow-neon {
        filter: drop-shadow(0 0 10px rgba(77, 184, 255, 0.3));
    }
</style>