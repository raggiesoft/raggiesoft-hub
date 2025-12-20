<footer class="mt-auto py-5 border-top border-primary bg-dark text-light">
    <div class="container text-center">
        <h2 class="h4 fw-bold text-uppercase" style="font-family: 'Audiowide', cursive; color: #0dcaf0; text-shadow: 0 0 10px rgba(13, 202, 240, 0.5);">
            The Stardust Engine
        </h2>
        
        <p class="mt-2 text-secondary">
            A musical universe by Michael Ragsdale, created with Gemini, Suno, and DALL-E.
        </p>
        
        <p class="mt-4 small text-secondary">
            Narrative Content licensed under
            <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener noreferrer" class="link-info text-decoration-none">CC BY-SA 4.0</a>.
            <br class="d-sm-none">
            <span class="d-none d-sm-inline"> | </span>
            Source Code licensed under
            <a href="https://opensource.org/licenses/MIT" target="_blank" rel="noopener noreferrer" class="link-info text-decoration-none">MIT</a>.
        </p>
        
        <div class="mt-4 d-flex justify-content-center gap-4">
            <a href="https://github.com/raggiesoft" aria-label="GitHub" target="_blank" rel="noopener noreferrer" class="link-secondary fs-4 hover-white">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://michaelpragsdale.com" aria-label="Michael Ragsdale's Portfolio" target="_blank" rel="noopener noreferrer" class="link-secondary fs-4 hover-white">
                <i class="fa-duotone fa-briefcase"></i>
            </a>
        </div>
    </div>
</footer>

<?php
$konami_config = [
    'title'      => 'Hidden Signal Detected',
    'icon'       => 'fa-duotone fa-stars',
    'theme'      => '#7000FF',         // Stardust Purple
    'text_color' => '#FFD700',         // Gold Title
    'image'      => 'https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1995-ad-astra-single/album-art.jpg',
    'body'       => '
        <h4 class="fw-bold text-white text-uppercase" style="font-family: \'Audiowide\';">Ad Astra (The Single)</h4>
        <p class="mt-2">
            You have unlocked the 1995 Promo CD.<br>
            <span class="small text-info">"A map for the lost."</span>
        </p>',
    'btn_text'   => '<i class="fa-duotone fa-rocket-launch me-2"></i>Launch Mission',
    'btn_link'   => '/discography/1995-the-warehouse-tapes/ad-astra',
    'btn_style'  => 'btn-primary'
];

// Load the Component
include ROOT_PATH . '/includes/components/easter-eggs/konami-modal.php';
?>