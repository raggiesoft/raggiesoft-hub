<?php
// includes/header.php
// v10.0 - "Safe Mode" Separation
// Standard: Static Block (Pushes content down).
// Immersive: Fixed Overlay (Floats on top).

// --- 1. CONTEXT & CONFIGURATION ---
$site  = $currentSite ?? 'raggiesoft';
$theme = $currentPageTheme ?? $site;
$cdn_root = $cdnBaseUrl ?? 'https://assets.raggiesoft.com'; 

// Route Overrides
if (isset($pageConfig['siteName'])) {
    $settings['siteName'] = $pageConfig['siteName'];
}
$project_slug = $pageConfig['project-slug'] ?? $site;

// Theme Reset
if ($site !== 'raggiesoft' && $theme === 'raggiesoft') {
    $theme = $site;
}

// Dark Mode
$force_dark_mode = ($theme === 'dark' || $theme === 'ad-astra' || str_contains($theme, 'gloom') || str_contains($theme, 'night'));

// Fonts
$font_stack = $pageConfig['brandFont'] ?? $settings['brandFont'] ?? ['sans-serif'];
$brand_font_family = implode(', ', $font_stack);

// --- 2. IMMERSIVE MODE LOGIC ---
// Default is FALSE. Only becomes true if JSON explicitly says "transparentHeader": true
$isImmersive = $pageConfig['transparentHeader'] ?? false;

if ($isImmersive) {
    // MODE A: IMMERSIVE (Movie Poster)
    // Fixed: Floats ON TOP of content.
    // Transparent: No background initially.
    $navWrapperClass = 'fixed-top transition-all'; 
    $navBaseClass    = "navbar navbar-expand-lg navbar-dark"; 
} else {
    // MODE B: STANDARD (Corporate/Regular)
    // Relative: Sits IN FLOW of document (Pushes content down).
    // Bg-Body: Has a solid background color.
    $navWrapperClass = 'position-relative'; 
    $navBaseClass    = "navbar navbar-expand-lg bg-body border-bottom border-secondary border-opacity-25";
}
?>

<!doctype html>
<html lang="en" data-bs-theme="<?php echo $force_dark_mode ? 'dark' : 'light'; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo htmlspecialchars($pageTitle ?? 'RaggieSoft'); ?></title>

    <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle ?? $pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription ?? ''); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? ''); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl ?? ''); ?>">
    <meta property="og:type" content="website">

    <link href="<?php echo $cdn_root; ?>/common/css/bootstrap.css" rel="stylesheet">
    
    <?php
    $cssPath = "/{$project_slug}/css/bootstrap/";
    if ($force_dark_mode && $theme !== 'dark') {
        $cssPath .= "{$theme}/"; 
    }
    
    $css_files = ['root.css', 'header.css', 'footer.css', 'extras.css', 'safety-net.css'];
    foreach ($css_files as $css) {
        echo '<link href="' . $cdn_root . $cssPath . $css . '?v=' . time() . '" rel="stylesheet">' . "\n";
    }
    ?>

    <style>
        :root { --bs-body-font-family: <?php echo $brand_font_family; ?>; }
        .brand-font { font-family: <?php echo $brand_font_family; ?> !important; }

        /* LOADER CSS */
        #page-loader {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: var(--bs-body-bg); z-index: 9999;
            display: flex; flex-direction: column; justify-content: center; align-items: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .loader-hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        .progress-bar-tech { height: 4px; background-color: var(--bs-primary); transition: width 0.1s ease; }

        /* IMMERSIVE HEADER STYLES (Only injected if active) */
        <?php if ($isImmersive): ?>
            header.transition-all {
                transition: background-color 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
            }
            header.fixed-top {
                background-color: transparent;
                padding-top: 1rem; padding-bottom: 1rem;
            }
            header.fixed-top.scrolled {
                background-color: var(--bs-body-bg, #000) !important;
                padding-top: 0.5rem; padding-bottom: 0.5rem;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                border-bottom: 1px solid var(--bs-border-color);
            }
            /* Text Color Overrides for Dark Heroes */
            header.fixed-top:not(.scrolled) .navbar-brand,
            header.fixed-top:not(.scrolled) .nav-link {
                text-shadow: 0 2px 4px rgba(0,0,0,0.8);
                color: #fff !important; 
            }
            header.fixed-top:not(.scrolled) .navbar-toggler { border-color: rgba(255,255,255,0.5); }
            header.fixed-top:not(.scrolled) .navbar-toggler-icon { filter: invert(1) grayscale(100%) brightness(200%); }
        <?php endif; ?>
    </style>
  </head>
  
  <body class="d-flex flex-column min-vh-100">
      
      <div id="page-loader">
          <div class="text-center" style="width: 300px;">
              <div id="loader-text" class="font-monospace small mb-2 text-uppercase text-secondary">> INITIALIZING...</div>
              <div class="progress" style="height: 4px; background-color: rgba(127,127,127,0.2);">
                  <div id="loader-bar" class="progress-bar-tech" style="width: 0%"></div>
              </div>
          </div>
      </div>

      <header id="main-header" class="<?php echo $navWrapperClass; ?>">
          <nav class="<?php echo $navBaseClass; ?>">
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
                <span class="navbar-toggler-icon"></span>
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

      <?php if ($isImmersive): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.getElementById("main-header");
            const threshold = 50; 
            function checkScroll() {
                if (window.scrollY > threshold) { header.classList.add("scrolled"); } 
                else { header.classList.remove("scrolled"); }
            }
            checkScroll();
            window.addEventListener("scroll", checkScroll);
        });
      </script>
      <?php endif; ?>

      <script>
        (function() {
            const loader = document.getElementById('page-loader');
            const bar = document.getElementById('loader-bar');
            const text = document.getElementById('loader-text');
            let progress = 0; let progressInterval;

            function startHeartbeat() {
                if (progressInterval) clearInterval(progressInterval);
                progress = 10; if(bar) bar.style.width = '10%';
                progressInterval = setInterval(() => {
                    let step = (95 - progress) / 80; if (step < 0.1) step = 0.1; 
                    progress += step; if (progress > 95) progress = 95; 
                    if(bar) bar.style.width = progress + '%';
                    if(text) {
                        if (progress < 30) text.innerText = "> ESTABLISHING UPLINK...";
                        else if (progress < 50) text.innerText = "> RECEIVING DATA...";
                        else if (progress < 70) text.innerText = "> ALLOCATING MEMORY...";
                        else text.innerText = "> PROCESSING...";
                    }
                }, 50);
            }

            document.addEventListener('readystatechange', () => {
                if (document.readyState === 'interactive') {
                    progress = 75; if(bar) bar.style.width = '75%';
                    if(text) text.innerText = "> ASSEMBLING LAYOUT...";
                }
            });

            function finishLoad() {
                if (progressInterval) clearInterval(progressInterval);
                if(bar) bar.style.width = '100%';
                if(text) text.innerText = "> SYSTEM READY.";
                setTimeout(() => { if(loader) loader.classList.add('loader-hidden'); }, 500);
            }

            startHeartbeat(); 
            window.addEventListener('load', finishLoad);
            
            document.addEventListener('click', (e) => {
                const link = e.target.closest('a');
                if (!link) return;
                const href = link.getAttribute('href');
                const target = link.getAttribute('target');
                if (link.classList.contains('dropdown-toggle') || link.getAttribute('role') === 'button') return;
                if (!href || href === '#' || href.startsWith('#')) return;
                if (target === '_blank') return;
                if (link.href && link.href.indexOf(window.location.hostname) === -1) return;
                if (link.hasAttribute('download')) return;

                if(loader) {
                    text.innerText = "> NAVIGATING...";
                    bar.style.width = '0%'; loader.classList.remove('loader-hidden');
                    startHeartbeat(); 
                }
            });

            window.addEventListener('pageshow', (event) => {
                if (event.persisted && loader) loader.classList.add('loader-hidden');
            });
        })();
      </script>