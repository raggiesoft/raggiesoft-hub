<?php
require_once ROOT_PATH . '/includes/classes/stardust-parsedown.php';
$Parsedown = new StardustParsedown();

$charData = isset($char) ? $char : (defined('ACTIVE_CHARACTER_JSON') ? json_decode(ACTIVE_CHARACTER_JSON, true) : null);
$mdFile = defined('ACTIVE_CHARACTER_MD') ? ACTIVE_CHARACTER_MD : null;

// IF NO CHARACTER IS SELECTED, RENDER THE DIRECTORY
if (!$charData): 
    $characterListPath = ROOT_PATH . '/data/characters.json';
    $characters = [];
    if (file_exists($characterListPath)) {
        $data = json_decode(file_get_contents($characterListPath), true);
        $characters = $data['characters'] ?? [];
    }
    
    // Group fictional characters by story
    $groupedCharacters = [];
    foreach ($characters as $c) {
        if (!isset($c['is_public']) || $c['is_public']) {
            $story = $c['narratives'][0] ?? 'Unknown Narrative';
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
                    <a href="/character/<?php echo urlencode($c['id']); ?>" class="text-decoration-none">
                        <div class="card h-100 shadow-sm character-card">
                            <div class="card-body d-flex align-items-center">
                                <wa-avatar 
                                    image="<?php echo htmlspecialchars($cdnBaseUrl . '/' . ($c['image_path'] ?? 'common/images/placeholder.jpg')); ?>" 
                                    label="<?php echo htmlspecialchars($c['name']); ?>"
                                    shape="rounded"
                                    class="me-3"
                                    style="--size: 4rem;">
                                </wa-avatar>
                                <div>
                                    <h5 class="card-title mb-1 text-light"><?php echo htmlspecialchars($c['name']); ?></h5>
                                    <p class="card-text small text-body-muted mb-0"><?php echo htmlspecialchars($c['subtitle'] ?? ''); ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<?php 
// IF A CHARACTER IS SELECTED, RENDER THEIR PROFILE
else: 
    $fullName = $charData['name'] ?? 'Unknown Character';
    $isReal = !($charData['is_public'] ?? true);
    $imagePath = $cdnBaseUrl . '/' . ($charData['image_path'] ?? 'common/images/placeholder.jpg');
    
    $mdContent = '';
    if ($mdFile && file_exists($mdFile)) {
        $rawMd = file_get_contents($mdFile);
        
        // 1. Strip YAML frontmatter if it exists
        if (strpos($rawMd, '---') === 0) {
            $end = strpos($rawMd, '---', 3);
            if ($end !== false) {
                $rawMd = substr($rawMd, $end + 3);
            }
        }
        
        // 2. Parse Credentials format into Web Awesome buttons
        // Format: * [Title] | Description | color
        $rawMd = preg_replace_callback('/^\* \[(.+?)\]\s*\|\s*(.+?)\s*\|\s*([a-z]+)$/m', function($matches) {
            $title = htmlspecialchars($matches[1]);
            $desc = htmlspecialchars($matches[2]);
            $color = htmlspecialchars($matches[3]);
            $icon = 'fa-circle-info';
            
            return '<wa-button size="small" pill appearance="outline" variant="' . $color . '" class="credential-btn m-1" ' .
                   'data-title="' . $title . '" data-desc="' . $desc . '" variant="' . $color . '" data-icon="' . $icon . '">' .
                   $title . 
                   '</wa-button>';
        }, $rawMd);
        
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

    <div class="row">
        <!-- Sidebar Profile Card -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($fullName); ?>">
                <div class="card-body">
                    <h3 class="card-title fw-bold text-light mb-1"><?php echo htmlspecialchars($fullName); ?></h3>
                    <p class="text-primary fw-bold mb-0"><?php echo htmlspecialchars($charData['subtitle'] ?? ''); ?></p>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-12 col-md-8">
            <div class="character-content prose">
                <?php echo $mdContent; ?>
            </div>
        </div>
    </div>
</div>

<!-- Reusable Credential Modal -->
<wa-dialog id="credentialModal" label="Credential" style="--wa-panel-background-color: #050508; --sl-panel-background-color: #050508; --wa-dialog-background-color: #050508; --sl-dialog-background-color: #050508; background-color: #050508; --wa-panel-border-color: var(--wa-color-primary); opacity: 1; backdrop-filter: none;">
    <div slot="label" id="credentialTitle" class="d-flex align-items-center gap-2 fw-bold text-light">
        <wa-icon name="circle-info" variant="solid"></wa-icon> Credential
    </div>
    
    <div class="p-2">
        <h6 class="text-uppercase small opacity-75 mb-2 text-light">Definition</h6>
        <p id="credentialDesc" class="text-white-50 mb-0">Description goes here.</p>
    </div>
    
    <wa-button slot="footer" id="closeCredentialBtn" variant="neutral" onclick="this.closest('wa-dialog').open = false;">Close</wa-button>
</wa-dialog>

<script>
(function() {
    const dialog = document.getElementById('credentialModal');
    if (!dialog) return;
    
    document.querySelectorAll('.credential-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const title = btn.getAttribute('data-title');
            const desc = btn.getAttribute('data-desc');
            const color = btn.getAttribute('variant');
            const icon = btn.getAttribute('data-icon');
            
            document.getElementById('credentialTitle').innerHTML = '<i class="fa-solid ' + icon + ' me-2"></i>' + title;
            document.getElementById('credentialDesc').textContent = desc;
            
            let waColor = 'var(--wa-color-primary)';
            if (color === 'success') waColor = 'var(--wa-color-success)';
            if (color === 'danger') waColor = 'var(--wa-color-danger)';
            if (color === 'warning') waColor = 'var(--wa-color-warning)';
            if (color === 'neutral') waColor = 'var(--wa-color-neutral)';
            
            dialog.style.setProperty('--wa-panel-border-color', waColor);
            
            dialog.open = true;
        });
    });
    
    // Ensure clicking outside always works
    dialog.addEventListener('click', (e) => {
        if (e.target === dialog) dialog.open = false;
    });
    dialog.addEventListener('wa-request-close', (e) => { if (e.detail.source === 'overlay') dialog.open = false; });
    dialog.addEventListener('sl-request-close', (e) => { if (e.detail.source === 'overlay') dialog.open = false; });
})();
</script>
<?php endif; ?>