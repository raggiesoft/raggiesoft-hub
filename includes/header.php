<?php
// includes/header.php
// v7.1.2 - RaggieSoft Production
// Updated: Added Animated Hamburger Menu (The "X" Transform)

// 1. Resolve Context
$site  = $currentSite ?? 'raggiesoft';
$theme = $currentPageTheme ?? $site;

// Ensure CDN Root exists
$cdn_root = $cdnBaseUrl ?? 'https://assets.raggiesoft.com'; 

// Theme Reset Logic
if ($site !== 'raggiesoft' && $theme === 'raggiesoft') {
    $theme = $site;
}

// --- FORCE DARK MODE LOGIC ---
$force_dark_mode = ($theme === 'dark' || $theme === 'ad-astra' || $theme === 'industrial');

// --- 2. BRAND FONT LOGIC ---
$font_stack = $pageConfig['brandFont'] ?? $settings['brandFont'] ?? ['sans-serif'];
if (!is_array($font_stack) || empty($font_stack)) { $font_stack = ['sans-serif']; }

$css_font_parts = array_map(function($font) {
    $generics = ['serif', 'sans-serif', 'monospace', 'cursive', 'fantasy', 'system-ui'];
    return in_array(strtolower($font), $generics) ? $font : "'$font'";
}, $font_stack);

$brand_font_css = implode(', ', $css_font_parts);

// 3. Path Definitions
$path_bootstrap = $cdn_root . "/common/css/bootstrap.css";

if ($theme === 'corporate' || $theme === $site || $theme === 'light') {
    $path_theme_base = $cdn_root . "/{$site}/css/bootstrap";
} else {
    $path_theme_base = $cdn_root . "/{$site}/css/bootstrap/{$theme}";
}

// 4. Build CSS Queue
$css_load_queue = [
    $path_bootstrap,                    
    $path_theme_base . '/root.css',     
    $path_theme_base . '/extras.css',   
    $path_theme_base . '/header.css',   
    $path_theme_base . '/footer.css',   
    $path_theme_base . '/safety-net.css'
];

// 5. Critical Images
$critical_images = [ $navbarBrandLogo ?? '' ];
if (isset($customPageAssets) && is_array($customPageAssets)) {
    $critical_images = array_merge($critical_images, $customPageAssets);
}
?>
<!doctype html>
<html lang="en" class="h-100" <?php echo $force_dark_mode ? 'data-bs-theme="dark"' : ''; ?>>
  <head>
    
    <?php 
    if (
        isset($settings['analytics']['enabled']) && 
        $settings['analytics']['enabled'] === true &&
        !empty($settings['analytics']['trackingId'])
    ): 
    ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>');
        </script>
    <?php endif; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo htmlspecialchars($pageTitle ?? 'RaggieSoft'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($ogDescription ?? ''); ?>">
    
    <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle ?? $pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription ?? ''); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? ''); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>">

    <?php foreach ($css_load_queue as $cssUrl): ?>
        <link href="<?php echo $cssUrl . '?v=' . time(); ?>" rel="stylesheet">
    <?php endforeach; ?>    

    <script src="https://kit.fontawesome.com/ec060982d4.js" crossorigin="anonymous"></script>

    <?php foreach ($critical_images as $imgUrl): ?>
        <?php if($imgUrl): ?><link rel="preload" as="image" href="<?php echo $imgUrl; ?>"><?php endif; ?>
    <?php endforeach; ?>
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $cdn_root; ?>/common/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $cdn_root; ?>/common/images/favicons/site.webmanifest">
    
    <link rel="mask-icon" href="<?php echo $cdn_root; ?>/common/images/favicons/safari-pinned-tab.svg" color="#0d6efd">
    
    <link rel="shortcut icon" href="<?php echo $cdn_root; ?>/common/images/favicons/favicon.ico">
    
    <meta name="msapplication-TileColor" content="#0d6efd">
    <meta name="msapplication-config" content="<?php echo $cdn_root; ?>/common/images/favicons/browserconfig.xml">
    
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#121212" media="(prefers-color-scheme: dark)">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet">

    <script type="module">
        import "https://cdn.skypack.dev/@hotwired/turbo";
    </script>
    
    <style>
        .brand-font { font-family: <?php echo $brand_font_css; ?> !important; }
        
        #page-loader {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: var(--bs-body-bg); color: var(--bs-body-color);
            z-index: 99999; display: flex; flex-direction: column; justify-content: center; align-items: center;
            opacity: 1; visibility: visible; transition: opacity 0.5s ease-in-out, visibility 0s 0s;
        }
        #page-loader.loader-hidden {
            opacity: 0; visibility: hidden; transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
        }
        .loader-progress-container {
            width: 300px; height: 4px; margin-top: 20px; position: relative; overflow: hidden;
            background-color: rgba(var(--bs-secondary-rgb), 0.2); 
        }
        .loader-progress-bar {
            height: 100%; width: 0%; transition: width 0.2s ease;
            background-color: var(--bs-primary); box-shadow: 0 0 10px var(--bs-primary);
        }
        
        /* Logo Filters */
        .navbar-brand-corporate-img { mix-blend-mode: multiply; }
        [data-bs-theme="dark"] .navbar-brand-corporate-img {
            filter: invert(1) grayscale(100%); mix-blend-mode: screen;
        }

        /* --- HAMBURGER MENU ANIMATION --- */
        .navbar-toggler { border: none; padding: 0.5rem; }
        .navbar-toggler:focus { box-shadow: none; }
        
        .hamburger-icon {
            width: 28px;
            height: 20px;
            position: relative;
            transform: rotate(0deg);
            transition: .5s ease-in-out;
            cursor: pointer;
        }

        .hamburger-icon span {
            display: block;
            position: absolute;
            height: 2px;
            width: 100%;
            background: var(--bs-navbar-color); /* Matches theme text color */
            border-radius: 9px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        /* Bar Positions */
        .hamburger-icon span:nth-child(1) { top: 0px; }
        .hamburger-icon span:nth-child(2) { top: 9px; }
        .hamburger-icon span:nth-child(3) { top: 18px; }

        /* Transform to X when Open (aria-expanded="true") */
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(1) {
            top: 9px;
            transform: rotate(135deg);
        }
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }
        .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(3) {
            top: 9px;
            transform: rotate(-135deg);
        }
    </style>

    <script>
    (function() {
        const getPreferredTheme = () => {
            const storedTheme = localStorage.getItem('theme');
            if (storedTheme) return storedTheme;
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        const setTheme = theme => document.documentElement.setAttribute('data-bs-theme', theme);
        setTheme(getPreferredTheme());
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const storedTheme = localStorage.getItem('theme');
            if (storedTheme !== 'light' && storedTheme !== 'dark') setTheme(getPreferredTheme());
        });
    })();
    </script>
  </head>
  
  <body class="d-flex flex-column h-100">
    <a href="#main-content" class="visually-hidden-focusable p-3 m-2 bg-primary text-white rounded position-absolute start-0 top-0 z-3 text-decoration-none fw-bold">
        Skip to Main Content
    </a>
    
    <div id="page-loader">
        <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h4 class="text-uppercase fw-bold brand-font" style="letter-spacing: 2px;">
            <?php 
                echo htmlspecialchars($pageConfig['siteName'] ?? $settings['siteName'] ?? 'Loading'); 
            ?>
        </h4>
        <div class="loader-progress-container">
            <div class="loader-progress-bar" id="loader-bar"></div>
        </div>
        <div class="text-secondary font-monospace small mt-2" id="loader-text">> INITIALIZING...</div>
    </div>
    
    <script>
    (function() {
        const loader = document.getElementById('page-loader');
        const bar = document.getElementById('loader-bar');
        const text = document.getElementById('loader-text');
        let progress = 0; let progressInterval;

        // 1. The Animation Loop
        function startHeartbeat() {
            if (progressInterval) clearInterval(progressInterval);
            progress = 10; 
            if(bar) { bar.style.width = '10%'; bar.style.opacity = '1'; }
            
            progressInterval = setInterval(() => {
                let step = (95 - progress) / 80; 
                if (step < 0.1) step = 0.1; 
                progress += step; 
                if (progress > 95) progress = 95; 
                
                if(bar) bar.style.width = progress + '%';
                
                if(text) {
                    if (progress < 30) text.innerText = "> ESTABLISHING UPLINK...";
                    else if (progress < 50) text.innerText = "> HANDSHAKING...";
                    else if (progress < 70) text.innerText = "> DECRYPTING STREAM...";
                    else text.innerText = "> AWAITING RESPONSE...";
                }
            }, 50);
        }

        function finishLoad() {
            if (progressInterval) clearInterval(progressInterval);
            if(bar) bar.style.width = '100%';
            if(text) text.innerText = "> CONNECTION ESTABLISHED.";
            
            setTimeout(() => { 
                if(loader) loader.classList.add('loader-hidden'); 
                
                setTimeout(() => { 
                    if(bar) { bar.style.width = '0%'; bar.style.opacity = '0'; }
                }, 500);
            }, 500);
        }

        // --- 3. TURBO INTEGRATION (The "SPA" Engine) ---
        document.addEventListener('turbo:visit', () => {
            if(loader) {
                loader.classList.remove('loader-hidden');
                if(text) text.innerText = "> INITIALIZING JUMP...";
                startHeartbeat();
            }
        });

        // FIX: Ensure loader is hidden before caching, so the "Snapshot" 
        // doesn't have the loader visible when the user clicks Back.
        document.addEventListener('turbo:before-cache', () => {
            if(loader) loader.classList.add('loader-hidden');
        });

        document.addEventListener('turbo:load', () => {
            finishLoad();
        });

        // --- 4. CLICK INTERCEPTOR (The "Instant" Feel) ---
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a');
            if (!link) return; 
            if (link.target === '_blank') return; 
            if (e.ctrlKey || e.metaKey || e.shiftKey) return; 
            
            const href = link.getAttribute('href');
            if (!href || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:')) return; 

            if (href.startsWith('#')) return; 
            
            const currentUrl = new URL(window.location.href);
            const targetUrl = new URL(link.href, window.location.href); 

            if (targetUrl.origin !== currentUrl.origin) return; 
            if (targetUrl.pathname === currentUrl.pathname && targetUrl.hash !== '') return;

            if(loader) {
                loader.classList.remove('loader-hidden');
                if(text) text.innerText = "> NAVIGATING..."; 
                startHeartbeat();
            }
        });

        // --- 5. BFCache Fix (Browser Back Button) ---
        // Handles cases where the browser restores the page state from memory
        window.addEventListener('pageshow', (event) => {
            if (event.persisted) {
                if(loader) loader.classList.add('loader-hidden');
            }
        });

        // Fallback for hard refreshes
        document.addEventListener('DOMContentLoaded', () => {
            if (!loader.classList.contains('loader-hidden')) {
                startHeartbeat();
            }
        });
        
        window.addEventListener('load', finishLoad);

    })();
    </script>
    
    <header>
      <nav class="navbar navbar-expand-md sticky-top border-bottom border-primary border-opacity-50 bg-body">
        <div class="container-fluid">
          
          <a class="navbar-brand d-flex align-items-center" href="<?php echo htmlspecialchars($navbarBrandLink ?? '/'); ?>">
            <?php if (!empty($navbarBrandLogo)): ?>
            <img src="<?php echo htmlspecialchars($navbarBrandLogo); ?>" 
                 alt="<?php echo htmlspecialchars($navbarBrandAlt ?? 'Logo'); ?>" 
                 height="30" 
                 class="me-2 d-inline-block align-text-top <?php echo htmlspecialchars($navbarBrandClass ?? ''); ?>">
            <?php endif; ?>
            <span class="fw-bold text-uppercase brand-font">
              <?php echo strip_tags($navbarBrandText ?? $settings['siteName'] ?? 'Elara Site', '<span>'); ?>
            </span>
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php 
                if (isset($currentHeaderMenu) && file_exists($currentHeaderMenu)) {
                    include $currentHeaderMenu;
                } else {
                    include ROOT_PATH . '/includes/components/headers/header-default.php';
                }
            ?>
          </div>
        </div>
      </nav>
    </header>