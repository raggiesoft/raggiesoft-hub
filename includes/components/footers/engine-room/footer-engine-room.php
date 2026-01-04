<footer class="mt-auto bg-black text-white border-top border-secondary py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            
            <div class="col-md-4 text-center text-md-start">
                <img src="https://assets.raggiesoft.com/common/images/logos/engine-room-records.png" 
                     alt="Engine Room Records" 
                     width="120" 
                     class="navbar-brand-corporate-img mb-3"> 
                
                <div class="text-uppercase fw-bold" style="font-family: 'Courier New', monospace; letter-spacing: -1px;">
                    Loud. Raw. Real.
                </div>
            </div>

            <div class="col-md-4 text-center">
                <ul class="list-unstyled mb-0" style="font-family: 'Courier New', monospace;">
                    <li class="mb-2">
                        <a href="/engine-room/artists" class="text-white text-decoration-none hover-underline">
                            > ROSTER
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/engine-room/history" class="text-white text-decoration-none hover-underline">
                            > HISTORY
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="/engine-room/about" class="text-white text-decoration-none hover-underline">
                            > THE FORTRESS
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 text-center text-md-end text-light small">
                <p class="mb-1">EST. 1992</p>
                <p class="mb-0">Norfolk, VA</p>
                <div class="mt-3">
                    <a href="#" class="text-white me-3 hover-text-primary" aria-label="Visit our Instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white hover-text-primary" aria-label="Visit our Bandcamp"><i class="fa-brands fa-bandcamp fa-lg"></i></a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 pt-3 border-top border-secondary border-opacity-25">
            <div class="col-md-6 text-center text-md-start text-white-50 small">
                &copy; 1992-<?php echo date("Y"); ?> Engine Room Records. A RaggieSoft Company.
            </div>
            <div class="col-md-6 text-center text-md-end text-white-50 small">
                 <a href="/about/privacy" class="text-reset text-decoration-underline hover-text-white">Privacy</a> &bull; 
                 <a href="/about/terms" class="text-reset text-decoration-underline hover-text-white">Terms</a> &bull; 
                 <a href="/about/license" class="text-reset text-decoration-underline hover-text-white">MIT / CC BY-SA 4.0</a>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Local Override: Ensure links turn white on hover when on black background */
    .hover-text-white:hover { color: #fff !important; }
    
    /* Ensure the logo behaves in Dark Mode if the page switches */
    [data-bs-theme="dark"] .navbar-brand-corporate-img {
        filter: invert(1) grayscale(100%);
    }
</style>