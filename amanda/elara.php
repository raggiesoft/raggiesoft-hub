<?php
ob_start(); 
// RaggieSoft Elara Router v6.0
// Upgrade: Powered by Emily (Compiled Single-File JSON Routing) & Native 301 Redirects

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize trailing slashes
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 1. WAKE UP EMILY ---
$settingsFile = ROOT_PATH . '/data/settings.json';
$emilyFile    = ROOT_PATH . '/data/emily.json';

if (!file_exists($settingsFile) || !file_exists($emilyFile)) {
    die('Critical Error: settings.json or emily.json is missing. Run Jenna to compile the routing engine.');
}

// Read and decode the payloads
$settings = json_decode(file_get_contents($settingsFile), true);
$emily    = json_decode(file_get_contents($emilyFile), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Critical Error: Emily suffered a catastrophic failure (Invalid JSON).');
}

// Unpack Emily's Namespaces (Supports if emily.json has a routes wrapper)
$routes = $emily['routes'] ?? $emily;

// Extract Core Globals
$siteName = $settings['siteName'] ?? 'RaggieSoft';
$projectSlug = $settings['projectSlug'] ?? 'raggiesoft'; 
$cdnBaseUrl = $settings['cdnBaseUrl'] ?? '';
$defaultTheme = $settings['defaultTheme'] ?? 'light'; 

// Build Defaults Array
$defaults = array_merge($settings['defaults'] ?? [], [
    'title' => $siteName, 
    'theme' => $defaultTheme,
    'site' => $projectSlug,
    'ogImage' => $cdnBaseUrl . ($settings['defaults']['ogImage'] ?? ''),
    'ogUrl' => "https://" . $_SERVER['HTTP_HOST'] . $request_uri,
    'navbarBrandLogo' => $cdnBaseUrl . ($settings['defaults']['navbarBrandLogo'] ?? '')
]);

// --- HELPER: RESOLVE ASSET INHERITANCE ---
function resolveAsset($map, $currentUri) {
    $path = rtrim(parse_url($currentUri, PHP_URL_PATH), '/');
    while ($path !== '' && $path !== '.' && $path !== '/') {
        if (isset($map[$path])) return $map[$path];
        $path = dirname($path);
        $path = str_replace('\\', '/', $path);
    }
    if (isset($map['/'])) return $map['/'];
    return null;
}

// --- 2. MATCH ROUTE ---
$pageConfig = [];
if (isset($routes[$request_uri])) {
    $pageConfig = $routes[$request_uri];
} else {
    // Auto-Discovery Logic for unmapped pages
    $potentialPath = 'pages' . $request_uri;
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } elseif (is_dir(ROOT_PATH . '/' . $potentialPath)) {
        if (file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
            $pageConfig['view'] = $potentialPath . '/overview';
            $isIndexPage = true;
        } elseif (file_exists(ROOT_PATH . '/' . $potentialPath . '/home.php')) {
            $pageConfig['view'] = $potentialPath . '/home';
            $isIndexPage = true;
        }
    }
}

// Handle 404 early if no route matches and no file exists
if (empty($pageConfig)) {
    http_response_code(404);
    if(file_exists(ROOT_PATH . '/pages/errors/404.php')) {
        require_once ROOT_PATH . '/pages/errors/404.php';
    } else {
        echo "404 Not Found";
    }
    ob_end_flush();
    exit;
}

// --- 3. REDIRECT INTERCEPTOR ---
// If the route JSON contains a "redirect" key, fire a 301 and halt immediately
if (isset($pageConfig['redirect'])) {
    header('Location: ' . $pageConfig['redirect'], true, 301);
    ob_end_flush();
    exit;
}

// C. Sidebar Intelligence & Auto-Titles
if (isset($pageConfig['view'])) {
    $sidebarMap = $settings['sidebarMap'] ?? [];
    
    if (!isset($pageConfig['sidebar'])) {
        $resolvedSidebar = resolveAsset($sidebarMap, $request_uri);
        if ($resolvedSidebar) $pageConfig['sidebar'] = $resolvedSidebar;
    }

    if (!isset($pageConfig['showSidebar'])) {
        if (isset($pageConfig['sidebar']) && $pageConfig['sidebar'] !== 'sidebar-default') {
             $pageConfig['showSidebar'] = true;
        } elseif (isset($isIndexPage) && $isIndexPage) {
            $pageConfig['showSidebar'] = false;
        }
    }

    // Auto-Title Generation
    if (!isset($pageConfig['title'])) {
        $slug = basename($request_uri);
        $pageConfig['title'] = ($slug === '' || $slug === 'index.php') ? 'Home - ' . $siteName : ucwords(str_replace('-', ' ', $slug)) . ' - ' . $siteName;
    }
}

// --- 4. RENDER PREPARATION ---
$config = array_merge($defaults, $pageConfig);

if (isset($config['view']) && $config['view'] === 'errors/500') {
    http_response_code(500);
} elseif (isset($config['view']) && $config['view'] === 'errors/404') {
    http_response_code(404);
}

// Extract variables for the View and Header
$pageTitle = $config['title'] ?? $siteName;
$currentPageTheme = $config['theme'] ?? $defaultTheme;
$showSidebar = $config['showSidebar'] ?? false;
$currentSite = $config['site'] ?? $projectSlug;
$ogTitle = $config['ogTitle'] ?? '';
$ogDescription = $config['ogDescription'] ?? '';
$ogImage = $config['ogImage'] ?? '';
$ogUrl = $config['ogUrl'] ?? '';
$navbarBrandLogo = $config['navbarBrandLogo'] ?? '';
$navbarBrandText = $config['navbarBrandText'] ?? '';
$navbarBrandLink = $config['navbarBrandLink'] ?? '';
$navbarBrandAlt = $config['navbarBrandAlt'] ?? '';
$navbarBrandClass = $config['navbarBrandClass'] ?? '';

// --- HEADER RESOLUTION ---
if (isset($pageConfig['headerMenu'])) {
    $headerFile = $pageConfig['headerMenu'];
} else {
    $headerMap = $settings['headerMap'] ?? [];
    $headerFile = resolveAsset($headerMap, $request_uri) ?? 'header-default';
}
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/' . $headerFile . '.php';

// --- SIDEBAR RESOLUTION ---
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . ($config['sidebar'] ?? 'sidebar-default') . '.php';

// --- OUTPUT ---
require_once ROOT_PATH . '/includes/header.php';

// Wrapper for the SPA or standard layout
echo '<div id="elara-layout-wrapper" class="container-fluid flex-grow-1 d-flex p-0">';
echo '  <div class="row flex-grow-1 m-0 w-100">';

if ($showSidebar && file_exists($currentSidebar)) {
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4" tabindex="-1" style="outline:none;">';
} else {
    echo '    <main id="main-content" class="col-12 p-0" tabindex="-1" style="outline:none;">'; 
}

// Require the actual view content
if (isset($config['view']) && file_exists(ROOT_PATH . '/' . $config['view'] . '.php')) {
    require_once ROOT_PATH . '/' . $config['view'] . '.php';
} else {
    http_response_code(404);
    if(file_exists(ROOT_PATH . '/pages/errors/404.php')) {
        require_once ROOT_PATH . '/pages/errors/404.php';
    } else {
        echo "404 Not Found";
    }
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush();
?>