<?php
// includes/header.php
// v7.2.0 - RaggieSoft Production (SEO Schema Engine Active)
// Updated: Added Animated Hamburger Menu & JSON-LD Structured Data

// 1. Resolve Context
$site  = $currentSite ?? 'raggiesoft';
$theme = $currentPageTheme ?? $site;

// Ensure CDN Root exists
$cdn_root = $cdnBaseUrl ?? $cdnBaseUrl; 

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
$path_bootstrap = $cdn_root . "/common/css/raggiesoft-grid.css";

if ($theme === 'corporate' || $theme === $site || $theme === 'light') {
    $path_theme_base = $cdn_root . "/{$site}/css/webawesome";
} else {
    $path_theme_base = $cdn_root . "/{$site}/css/webawesome/{$theme}";
}

// 4. Build CSS Queue
$css_load_queue = [
    $path_bootstrap,
    $cdn_root . "/common/css/raggiesoft-logo.css",                    
    $path_theme_base . '/root.css',     
    $path_theme_base . '/extras.css',   
    $path_theme_base . '/header.css',   
    $path_theme_base . '/footer.css',   
    $path_theme_base . '/safety-net.css'
];

// 5. Critical Images
$critical_images = [];
if (!empty($navbarBrandLogo)) $critical_images[] = $navbarBrandLogo;

if (!empty($pageConfig['navbarBrandLogoDark'])) $critical_images[] = $cdnBaseUrl . $pageConfig['navbarBrandLogoDark'];

if (isset($customPageAssets) && is_array($customPageAssets)) {
    $critical_images = array_merge($critical_images, $customPageAssets);
}
?>
<!doctype html>
<html lang="en" class="h-100 <?php echo $force_dark_mode ? 'wa-theme-dark' : ''; ?>" data-fa-kit-code="ec060982d4" <?php echo $force_dark_mode ? 'data-bs-theme="dark"' : ''; ?>>
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

    <link rel="canonical" href="<?php echo htmlspecialchars($ogUrl ?? "https://" . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>">

    <?php
    // Default Schema for standard pages
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "name" => $pageTitle ?? 'RaggieSoft',
        "url" => $ogUrl ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
    ];

    // 1. MUSIC GROUP (Band Profile Pages)
    if (isset($pageConfig['schemaType']) && $pageConfig['schemaType'] === 'MusicGroup') {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "MusicGroup",
            "name" => "The Stardust Engine",
            "genre" => "80s Arena Rock / Progressive Pop",
            "url" => "https://thestardustengine.com/",
            "image" => $ogImage ?? "",
            "description" => $ogDescription ?? "The official portal for The Stardust Engine.",
            "sameAs" => [
                "https://music.apple.com/us/artist/the-stardust-engine/1889194363",
                "https://open.spotify.com/artist/7Lr6o5qOo1OgVQGumUjFFT",
                "https://music.youtube.com/channel/UCqtJNbYErxJ7ivveQXVS2mg"
            ]
        ];
    }
    
    // 2. MUSIC ALBUM (Discography Pages w/ ISRC Track Looping)
    elseif (isset($pageConfig['schemaType']) && $pageConfig['schemaType'] === 'MusicAlbum' && !empty($pageConfig['albumFilter'])) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "MusicAlbum",
            "name" => $pageConfig['albumFilter'],
            "byArtist" => [
                "@type" => "MusicGroup",
                "name" => "The Stardust Engine"
            ],
            "albumReleaseType" => "CompilationAlbum",
            "datePublished" => $pageConfig['realReleaseDate'] ?? "", 
            "url" => $ogUrl ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
            "image" => $ogImage ?? ""
        ];
        
        // Attach the global UPC identifier 
        if (!empty($pageConfig['upc'])) {
            $schema["gtin12"] = $pageConfig['upc']; 
        }

        // Fallback load master data if file exists to query the catalog
        $catalogFile = ROOT_PATH . '/master-catalog.json';
        if (file_exists($catalogFile)) {
            $catalogData = json_decode(file_get_contents($catalogFile), true);
            if (is_array($catalogData)) {
                $trackNum = 1;
                foreach ($catalogData as $item) {
                    // Match the tracks to the current album
                    if (isset($item['albumTitle']) && $item['albumTitle'] === $pageConfig['albumFilter']) {
                        $recording = [
                            "@type" => "MusicRecording",
                            "name" => $item['trackTitle'],
                            "position" => $trackNum++
                        ];
                        // Inject the specific ISRC code for this track
                        if (!empty($item['isrc'])) {
                            $recording["isrcCode"] = $item['isrc'];
                        }
                        $schema['track'][] = $recording;
                    }
                }
            }
        }
    }
    
    // 3. LORE / STORY PAGES & SEQUENCES
    elseif (isset($pageConfig['schemaType']) && ($pageConfig['schemaType'] === 'CreativeWork' || $pageConfig['schemaType'] === 'CreativeWorkSequence')) {
         $schema = [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $pageTitle,
            "url" => $ogUrl ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
         ];
         
         if ($pageConfig['schemaType'] === 'CreativeWorkSequence') {
             $schema['position'] = $pageConfig['sequenceIndex'];
             $schema['partOfSeries'] = [
                 "@type" => "CreativeWorkSeries",
                 "name" => $pageConfig['sequenceName']
             ];
         } else {
             $schema['author'] = [
                 "@type" => "Person",
                 "name" => "Cassidy O'Connell"
             ];
         }
    }
    ?>
    <script type="application/ld+json">
        <?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>

    <?php if (!empty($pageConfig['prevUrl'])): ?>
    <link rel="prev" href="https://<?php echo $_SERVER['HTTP_HOST'] . $pageConfig['prevUrl']; ?>">
    <?php endif; ?>
    <?php if (!empty($pageConfig['nextUrl'])): ?>
    <link rel="next" href="https://<?php echo $_SERVER['HTTP_HOST'] . $pageConfig['nextUrl']; ?>">
    <?php endif; ?>

    <!-- Web Awesome Pro Kit (Load FIRST so custom CSS can override) -->
    <link rel="stylesheet" href="https://ka-p.webawesome.com/kit/bb765cf132c5414e/webawesome@3.10.0/styles/themes/default.css">
    <link rel="stylesheet" href="https://ka-p.webawesome.com/kit/bb765cf132c5414e/webawesome@3.10.0/styles/themes/dark.css">
    <link rel="stylesheet" href="https://ka-p.webawesome.com/kit/bb765cf132c5414e/webawesome@3.10.0/styles/utilities.css">
    <link rel="stylesheet" href="https://ka-p.webawesome.com/kit/bb765cf132c5414e/webawesome@3.10.0/styles/native.css">
    <script type="module" src="https://ka-p.webawesome.com/kit/bb765cf132c5414e/webawesome@3.10.0/webawesome.loader.js"></script>

    <?php foreach ($css_load_queue as $cssUrl): ?>
        <link href="<?php echo $cssUrl . '?v=' . time(); ?>" rel="stylesheet">
    <?php endforeach; ?>    

    <link rel="stylesheet" href="https://kit.fontawesome.com/ec060982d4.css" crossorigin="anonymous">

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
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@400;700&family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">

<script src="<?php echo $cdnBaseUrl; ?>/common/js/elara-spa.js?v=<?php echo time(); ?>" defer></script>    
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
        
        @media (max-width: 767.98px) {
            #navbarCollapse .d-flex {
                flex-direction: column !important;
                align-items: flex-start !important;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }
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

        /* --- Global Theme Image Toggling --- */
        /* 1. Default State (Light) */
        .theme-img-light { display: inline-block !important; }
        .theme-img-dark { display: none !important; }

        /* 2. Explicit Dark Mode (Data Attribute) */
        [data-bs-theme="dark"] .theme-img-light { display: none !important; }
        [data-bs-theme="dark"] .theme-img-dark { display: inline-block !important; }

        /* 3. Native OS Dark Mode (Fires before JS sets the attribute) */
        @media (prefers-color-scheme: dark) {
            html:not([data-bs-theme="light"]) .theme-img-light { display: none !important; }
            html:not([data-bs-theme="light"]) .theme-img-dark { display: inline-block !important; }
        }
    </style>

    <script>
    (function() {
        // Check if PHP already forced a theme before JS takes over
        const isForcedByServer = document.documentElement.hasAttribute('data-bs-theme');
        
        const getPreferredTheme = () => {
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        
        const setTheme = theme => {
            // Only apply the dynamic theme if the server didn't explicitly force one
            if (!isForcedByServer) {
                document.documentElement.setAttribute('data-bs-theme', theme);
                document.documentElement.setAttribute('data-theme', theme);
                if (theme === 'dark') {
                    document.documentElement.classList.add('wa-theme-dark');
                } else {
                    document.documentElement.classList.remove('wa-theme-dark');
                }
            }
        };
        
        setTheme(getPreferredTheme());
        
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            setTheme(getPreferredTheme());
        });
    })();
    </script>
      <script src="<?php echo $cdnBaseUrl; ?>/common/js/cinema-carousel.js?v=2"></script>

    <style>
    

    wa-menu {
        --wa-panel-background-color: var(--bs-body-bg);
        background-color: var(--bs-body-bg);
    }

    /* Clean up Web Awesome buttons inside mobile nav */
    @media (max-width: 767.98px) {
        .mobile-nav-menu wa-button::part(base) {
            justify-content: flex-start !important;
            text-align: left !important;
        }
        .mobile-nav-menu wa-dropdown, .mobile-nav-menu wa-dropdown wa-button {
            width: 100%;
        }
    }

    /* Missing responsive flex utilities from custom grid */
    @media (min-width: 768px) {
        .flex-md-row {
            flex-direction: row !important;
        }
        .align-items-md-center {
            align-items: center !important;
        }
        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .mobile-nav-menu {
            width: auto !important; /* Undo w-100 on desktop */
        }
    }

        
        /* Ensure navbar collapse breaks to a new line on mobile */
        @media (max-width: 767.98px) {
            #navbarCollapse {
                flex-basis: 100% !important;
                flex-grow: 1;
            }
        }
    </style>
</head>
  
  <body class="d-flex flex-column h-100">
    <?php if (isset($pageConfig["enableGalaxyBg"]) && $pageConfig["enableGalaxyBg"] === true): ?>
        <div id="stardust-labs-bg" class="position-fixed w-100 h-100" style="z-index: -1; top: 0; left: 0;"></div>
        <script src="<?php echo $cdn_root; ?>/common/js/glowing-galaxy.js"></script>
    <?php endif; ?>
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

        // --- 3. ELARA SPA INTEGRATION ---
        document.addEventListener('elara:navigating', () => {
            if(loader) {
                loader.classList.remove('loader-hidden');
                if(text) text.innerText = "> INITIALIZING JUMP...";
                startHeartbeat();
            }
        });

        document.addEventListener('elara:loaded', () => {
            finishLoad();
        });

        // --- 4. BFCache Fix (Browser Back Button) ---
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
        <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
          
          <div class="d-flex align-items-center">
            <?php if (isset($showSidebar) && $showSidebar): ?>
            <button class="btn btn-link text-body-emphasis border-0 shadow-none d-block d-md-none me-2 p-0" type="button" onclick="const drawer = document.getElementById('mobileSidebarDrawer'); if (drawer) drawer.show();">
                <i class="fa-solid fa-bars-staggered fs-4"></i>
            </button>
            <?php endif; ?>
            
            <a class="navbar-brand d-flex align-items-center" href="<?php echo htmlspecialchars($pageConfig['navbarBrandLink'] ?? $navbarBrandLink ?? '/'); ?>">
                
                <?php 
                // Directly query the array where we know the data lives
                $logoLight = $navbarBrandLogo ?? '';
                $logoDark  = (isset($pageConfig['navbarBrandLogoDark']) && !str_starts_with($pageConfig['navbarBrandLogoDark'], 'http') && $pageConfig['navbarBrandLogoDark'] !== '') ? $cdnBaseUrl . $pageConfig['navbarBrandLogoDark'] : ($pageConfig['navbarBrandLogoDark'] ?? '');
                ?>

                <?php if (!empty($logoLight) && !empty($logoDark)): ?>
                    <img src="<?php echo htmlspecialchars($logoLight); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo'); ?>" 
                        height="30" width="30"
                        class="theme-img-light me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                    
                    <img src="<?php echo htmlspecialchars($logoDark); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo Dark'); ?>" 
                        height="30" width="30"
                        class="theme-img-dark me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                        
                <?php elseif (!empty($logoLight)): ?>
                    <img src="<?php echo htmlspecialchars($logoLight); ?>" 
                        alt="<?php echo htmlspecialchars($pageConfig['navbarBrandAlt'] ?? 'Logo'); ?>" 
                        height="30" width="30"
                        class="me-2 align-text-top <?php echo htmlspecialchars($pageConfig['navbarBrandClass'] ?? ''); ?>">
                <?php endif; ?>
                
                <span class="fw-bold text-uppercase brand-font">
                <?php echo strip_tags($pageConfig['navbarBrandText'] ?? $settings['siteName'] ?? 'Elara Site', '<span>'); ?>
                </span>
            </a>
          </div>
                    
          <button class="navbar-toggler border-0 shadow-none d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fs-3 text-body-emphasis"></i>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
          <script>
            // Vanilla JS fallback for Mobile Hamburger Menu
            document.addEventListener('DOMContentLoaded', function() {
                const toggler = document.querySelector('.navbar-toggler');
                const target = document.getElementById('navbarCollapse');
                if (toggler && target) {
                    toggler.addEventListener('click', function() {
                        target.classList.toggle('show');
                        toggler.setAttribute('aria-expanded', target.classList.contains('show'));
                    });
                }
            });
            // Re-bind for Elara SPA
            document.addEventListener('elara:loaded', function() {
                const toggler = document.querySelector('.navbar-toggler');
                const target = document.getElementById('navbarCollapse');
                if (toggler && target && !toggler.dataset.listenerAttached) {
                    toggler.dataset.listenerAttached = 'true';
                    toggler.addEventListener('click', function() {
                        target.classList.toggle('show');
                        toggler.setAttribute('aria-expanded', target.classList.contains('show'));
                    });
                }
            });
          </script>

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