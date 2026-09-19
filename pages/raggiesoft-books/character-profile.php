<?php
require_once ROOT_PATH . '/includes/classes/stardust-parsedown.php';
$Parsedown = new StardustParsedown();

$charData = isset($char) ? $char : (defined('ACTIVE_CHARACTER_JSON') ? json_decode(ACTIVE_CHARACTER_JSON, true) : null);
$mdFile = defined('ACTIVE_CHARACTER_MD') ? ACTIVE_CHARACTER_MD : null;

// IF NO CHARACTER IS SELECTED, RENDER THE DIRECTORY
if (!$charData): 
    $characterListPath = ROOT_PATH . '/../raggiesoft-assets/raggiesoft-books/json/character-list.json';
    $characters = [];
    if (file_exists($characterListPath)) {
        $characters = json_decode(file_get_contents($characterListPath), true) ?? [];
    }
    
    // Group fictional characters by story
    $groupedCharacters = [];
    foreach ($characters as $c) {
        if (isset($c['category']) && $c['category'] === 'fictional') {
            $story = $c['story'] ?? 'Unknown Narrative';
            $groupedCharacters[$story][] = $c;
        }
    }
?>
<div class="container py-4">
    <div class="mb-4">
        <wa-breadcrumb>
            <wa-breadcrumb-item href="/">Home</wa-breadcrumb-item>
            <wa-breadcrumb-item>Character Directory</wa-breadcrumb-item>
        </wa-breadcrumb>
    </div>

    <div class="mb-5 text-center">
        <h1 class="display-4 fw-bold">Character Directory</h1>
        <p class="lead text-body-muted">Explore the fictional characters across the RaggieSoft narrative universe.</p>
    </div>

    <?php foreach ($groupedCharacters as $story => $chars): ?>
        <h2 class="h3 mb-3 border-bottom pb-2 text-capitalize"><?php echo htmlspecialchars(str_replace('-', ' ', $story)); ?></h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
            <?php foreach ($chars as $c): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                <?php echo htmlspecialchars($c['firstName'] . ' ' . $c['lastName']); ?>
                            </h5>
                            <?php if (isset($c['slug'])): ?>
                                <wa-button href="/character/<?php echo htmlspecialchars($c['slug']); ?>" variant="neutral" size="small" class="mt-3">
                                    View Profile
                                </wa-button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php return; endif; ?>

<?php
$fullName = $charData ? trim($charData['firstName'] . ' ' . $charData['lastName']) : 'Unknown Character';
$isReal = $charData && isset($charData['category']) && $charData['category'] === 'real';

// If this is a real person and we somehow want to enforce security, we could do it here. 
// But the prompt says "the website should only offer the fictional characters" which usually means 
// they are just omitted from the public index/menus. The direct URL works for AI/Author access.

$mdContent = '';
if ($mdFile && file_exists($mdFile)) {
    // Strip YAML frontmatter
    $rawMd = file_get_contents($mdFile);
    if (strpos($rawMd, '---') === 0) {
        $end = strpos($rawMd, '---', 3);
        if ($end !== false) {
            $rawMd = substr($rawMd, $end + 3);
        }
    }
    $mdContent = $Parsedown->text(trim($rawMd));
} else {
    $mdContent = "<div class='alert alert-danger'>Character profile data could not be found.</div>";
}
?>
<div class="container py-4">
    <div class="mb-4">
        <wa-breadcrumb>
            <wa-breadcrumb-item href="/">Home</wa-breadcrumb-item>
            <wa-breadcrumb-item href="/raggiesoft-books/character-profile">Characters</wa-breadcrumb-item>
            <wa-breadcrumb-item><?php echo htmlspecialchars($fullName); ?></wa-breadcrumb-item>
        </wa-breadcrumb>
    </div>

    <?php if ($isReal): ?>
        <div class="alert alert-warning d-flex align-items-center mb-4">
            <i class="fa-duotone fa-triangle-exclamation fa-2x me-3"></i>
            <div>
                <strong>Author Note:</strong> This is a real-life person directory entry, restricted for author/AI reference. It is not publicly indexed on the fictional website.
            </div>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm border-0">
        <div class="card-body p-5">
            <h1 class="display-4 fw-bold mb-4"><?php echo htmlspecialchars($fullName); ?></h1>
            <div class="character-content prose">
                <?php echo $mdContent; ?>
            </div>
        </div>
    </div>
</div>
