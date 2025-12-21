<?php
// includes/header.php
// v8.0 - Added "Immersive Mode" (Transparent Overlay Header)

// 1. Resolve Context
$site  = $currentSite ?? 'raggiesoft';
$theme = $currentPageTheme ?? $site;

// Ensure CDN Root exists
$cdn_root = $cdnBaseUrl ?? 'https://assets.raggiesoft.com'; 

// --- ROUTE OVERRIDES ---
if (isset($pageConfig['siteName'])) {
    $settings['siteName'] = $pageConfig['siteName'];
}
$project_slug = $pageConfig['project-slug'] ?? $site;

// Theme Reset Logic
if ($site !== 'raggiesoft' && $theme === 'raggiesoft') {
    $theme = $site;
}

$force_dark_mode = ($theme === 'dark' || $theme === 'ad-astra' || str_contains($theme, 'gloom') || str_contains($theme, 'night'));

// --- IMMERSIVE MODE LOGIC ---
// If 'transparentHeader' is set in JSON, we float the header over the hero.
$isImmersive = $pageConfig['transparentHeader'] ?? false;

if ($isImmersive) {
    // Cinematic Mode: Fixed to top, transparent background, no border
    $navClass = "navbar navbar-expand-lg fixed-top"; 
    $navStyle = "background-color: transparent !important; border-bottom: none !important; backdrop-filter: none;";
} else {
    // Standard Mode: Sticky, solid background, bottom border
    $navClass = "navbar navbar-expand-lg sticky-top bg-body";
    $navStyle = "border-bottom: 1px solid var(--bs-border-color);";
}

// --- BRAND FONT LOGIC ---
$font_stack = $pageConfig['brandFont'] ?? $settings['brandFont'] ?? ['sans-serif'];
$brand_font_family = implode(', ', $font_stack);
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
    // Load Site-Specific CSS
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
        
        /* If Immersive, we might need to ensure the text is readable */
        <?php if ($isImmersive): ?>
            /* Force navbar links to be white/bright in immersive mode if needed */
            .navbar-brand, .nav-link { text-shadow: 0 2px 4px rgba(0,0,0,0.8); }
        <?php endif; ?>
    </style>
  </head>
  
  <body class="d-flex flex-column min-vh-100">
      
      <nav class="<?php echo $navClass; ?>" style="<?php echo $navStyle; ?>">
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