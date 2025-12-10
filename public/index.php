<?php
ob_start(); 
// RaggieSoft Elara Router v4.0 (Aethel Update)

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 1. GLOBAL DEFAULTS ---
$siteName = 'RaggieSoft'; 
$projectSlug = 'raggiesoft-corporate'; 
$cdnBaseUrl = 'https://assets.raggiesoft.com';
$defaultTheme = 'corporate'; 

$defaults = [
    'view' => 'errors/404',
    'title' => $siteName, 
    'theme' => $defaultTheme,
    'showSidebar' => false, 
    'sidebar' => 'sidebar-default',
    'header' => 'header-default', // NEW: Allows switching headers
    'site' => $projectSlug,
    'ogTitle' => 'The Stardust Engine - Official Band Archive',
    'ogDescription' => "The official archive of the fictional 80s band 'The Stardust Engine.' A narrative universe and AI art project forged in the fires of CPI.",
    'ogImage' => $cdnBaseUrl . "/stardust-engine/images/stardust-engine-logo-social.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION ---
$routes = [

   // *** THE SILVER GAUNTLET OF AETHEL (HUB) ***
    '/library/aethel' => [
        'title' => 'The Silver Gauntlet of Aethel - RaggieSoft Library',
        'site' => 'aethel',
        'theme' => null, 
        'showSidebar' => true,         // FORCE SIDEBAR
        'sidebar' => 'sidebar-book',   // USE BOOK NAV
        'header' => 'header-book',     // USE BOOK HEADER
        'ogDescription' => 'A 1980s Fantasy Adventure. "You cannot extinguish a sun..."',
        'view' => 'pages/library/aethel/overview',
    ],

    '/library/aethel/lore' => [
        'title' => 'Lore: The Cosmology of Aethel',
        'site' => 'aethel',
        'theme' => null,
        'showSidebar' => true,
        'sidebar' => 'sidebar-book',
        'header' => 'header-book',
        'view' => 'pages/library/aethel/lore/overview',
    ],
    
    '/library/aethel/lore/characters' => [
        'title' => 'Figures of Legend - Aethel Lore',
        'site' => 'aethel',
        'theme' => null,
        'showSidebar' => true,
        'sidebar' => 'sidebar-book',
        'header' => 'header-book',
        'view' => 'pages/library/aethel/lore/characters',
    ],
];

// ... [Existing Stardust routes] ...

   // *** THE SAGA: DYNAMIC BOOK READER (v3.0) ***
    if (strpos($request_uri, '/library/aethel/aethel-book') === 0) {
        
        // 1. CONFIGURATION: Define the Book Source
        // This is the only line you change to load a different book for a different route
        $pageConfig['bookJsonUrl'] = 'https://assets.raggiesoft.com/aethel/json/aethel-book.json';
        
        // 2. Define Paths
        $base_book_path = 'pages/library/aethel/aethel-book';
        $relative_path = str_replace('/library/aethel/aethel-book', '', $request_uri);
        
        // 3. View Resolution
        if ($relative_path === '' || $relative_path === '/') {
            $pageConfig['view'] = $base_book_path . '/overview';
            $pageConfig['title'] = 'The Silver Gauntlet of Aethel';
        } 
        else {
            $pageConfig['view'] = $base_book_path . $relative_path;
        }

        // 4. Component Settings
        $pageConfig['site'] = 'aethel';
        $pageConfig['showSidebar'] = true;
        $pageConfig['sidebar'] = 'sidebar-book'; // Generic Book Sidebar
        $pageConfig['header'] = 'header-book';   // Generic Book Header
        
        // 5. Theme Logic (Context-Aware)
        $path_parts = explode('/', trim($relative_path, '/'));
        
        if (count($path_parts) >= 3) {
            $book_id = $path_parts[0];
            $chap_id = $path_parts[1];
            $part_id = $path_parts[2];
            $context_key = "{$book_id}/{$chap_id}/{$part_id}";
        } else {
            $context_key = 'overview';
        }

        switch ($context_key) {
            case 'book-1/chapter-1/part-1':
            case 'book-1/chapter-1/part-2':
                $pageConfig['theme'] = 'gloom'; 
                break;
            default:
                $pageConfig['theme'] = null;
                break;
        }
    }

// --- 3. SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration
if (isset($routes[$request_uri])) {
    $pageConfig = array_merge($pageConfig ?? [], $routes[$request_uri]);
}

// B. Auto-Discovery Logic (Only if view not yet set)
if (!isset($pageConfig['view'])) {
    $potentialPath = 'pages' . $request_uri;
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } elseif (is_dir(ROOT_PATH . '/' . $potentialPath)) {
        if (file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
            $pageConfig['view'] = $potentialPath . '/overview';
        } elseif (file_exists(ROOT_PATH . '/' . $potentialPath . '/home.php')) {
            $pageConfig['view'] = $potentialPath . '/home';
        }
    }
}

// --- 4. MERGE & RENDER ---
$config = array_merge($defaults, $pageConfig ?? []);

if ($config['view'] === 'errors/404' || !file_exists(ROOT_PATH . '/' . $config['view'] . '.php')) {
    http_response_code(404);
    $config['view'] = 'errors/404';
    if (!isset($config['theme'])) { $config['theme'] = 'ad-astra'; }
}

// Extract variables for View
$pageTitle = $config['title'];
$currentPageTheme = $config['theme'];
$showSidebar = $config['showSidebar'];
$currentSite = $config['site'];
$ogTitle = $config['ogTitle'];
$ogDescription = $config['ogDescription'];
$ogImage = $config['ogImage'];
$ogUrl = $config['ogUrl'];

// DYNAMIC COMPONENT LOADING
// This looks at the $config array to decide which file to load
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/' . $config['header'] . '.php';
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . $config['sidebar'] . '.php';

require_once ROOT_PATH . '/includes/header.php';

echo '<div class="container-fluid flex-grow-1 d-flex">';
echo '  <div class="row flex-grow-1">';

if ($showSidebar && file_exists($currentSidebar)) {
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4">';
} else {
    echo '    <main id="main-content" class="col-12 p-0">'; 
}

require_once ROOT_PATH . '/' . $config['view'] . '.php';

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush();
?>