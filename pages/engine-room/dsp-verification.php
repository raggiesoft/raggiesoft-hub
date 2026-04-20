<?php
// pages/engine-room/dsp-verification.php
// Internal Administrative Portal for DSP Identity & Copyright Verification
// Context: Independent Artist Verification. No corporate jargon.

// 1. Fetch the Master Catalog using the CMS utility
require_once ROOT_PATH . '/includes/utils/json-reader.php';
$catalog = fetch_asset_json('engine-room-records/json/master-catalog.json');

// 2. Determine Request State
$requested_artist_slug = isset($_GET['artist']) ? htmlspecialchars(strip_tags($_GET['artist'])) : '';
$is_artist_view = !empty($requested_artist_slug);

// 3. Filter Data (If Artist View)
$artist_tracks = [];
$artist_persona = '';

if ($is_artist_view && is_array($catalog)) {
    foreach ($catalog as $track) {
        if (isset($track['artistSlug']) && $track['artistSlug'] === $requested_artist_slug) {
            $artist_tracks[] = $track;
            if (empty($artist_persona)) {
                $artist_persona = $track['artistPersona']; 
            }
        }
    }
}

// 4. Verification Check
$not_found = ($is_artist_view && empty($artist_tracks));
?>

<style>
    /* Strictly Corporate / Legal Styling - LIGHT MODE (Default) */
    .dsp-portal {
        background-color: #ffffff !important;
        color: #212529 !important;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .dsp-header {
        border-bottom: 4px solid #000;
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
    }
    .dsp-table th {
        background-color: #f8f9fa !important;
        color: #000 !important;
        font-size: 0.85rem;
        text-transform: uppercase;
        border-bottom: 2px solid #000 !important;
    }
    .dsp-table td {
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
        vertical-align: middle;
    }

    /* Override Elara Dark Mode - TRUE WCAG COMPLIANT DARK MODE */
    [data-bs-theme="dark"] .dsp-portal {
        background-color: #121212 !important; /* Deep dark background */
        color: #e0e0e0 !important; /* High contrast light text */
        border-color: #444 !important;
    }
    [data-bs-theme="dark"] .dsp-header {
        border-bottom-color: #666 !important; /* Visible border */
    }
    [data-bs-theme="dark"] .dsp-header h1 {
        color: #ffffff !important;
    }
    /* Enhance contrast for utility classes against dark backgrounds */
    [data-bs-theme="dark"] .text-muted {
        color: #adb5bd !important; 
    }
    [data-bs-theme="dark"] .text-primary {
        color: #66b2ff !important; /* Accessible Blue */
    }
    [data-bs-theme="dark"] .text-info {
        color: #33d9b2 !important; 
    }
    [data-bs-theme="dark"] .text-danger {
        color: #ff6b6b !important; /* Accessible Red */
    }
    [data-bs-theme="dark"] .text-success {
        color: #51cf66 !important; /* Accessible Green */
    }
    /* Invert the Corporate Table & Information Blocks */
    [data-bs-theme="dark"] .dsp-table th {
        background-color: #1a1a1a !important;
        color: #ffffff !important;
        border-bottom-color: #666 !important;
        border-color: #444 !important;
    }
    [data-bs-theme="dark"] .dsp-table td, 
    [data-bs-theme="dark"] .dsp-table {
        border-color: #444 !important;
        color: #e0e0e0 !important;
    }
    [data-bs-theme="dark"] .bg-light {
        background-color: #1a1a1a !important; /* Replace Bootstrap bg-light */
        border-color: #444 !important;
        color: #e0e0e0 !important;
    }
    [data-bs-theme="dark"] .alert-secondary {
        background-color: #1a1a1a !important;
        color: #e0e0e0 !important;
        border-color: #666 !important;
    }
    [data-bs-theme="dark"] .alert-info {
        background-color: #0b1a26 !important;
        color: #e0e0e0 !important;
        border-color: #1f4068 !important;
    }
</style>

<div class="container py-5 dsp-portal shadow-lg my-4 rounded border border-secondary">
    
    <div class="dsp-header d-flex justify-content-between align-items-end">
        <div>
            <h1 class="h3 fw-bold text-uppercase mb-1" style="letter-spacing: -0.5px;">Independent Artist Verification</h1>
            <h2 class="h5 text-muted mb-0">Direct Ownership & Chain of Custody Portal</h2>
        </div>
        <div class="text-end font-monospace small">
            <strong>Date of Record:</strong> <?php echo date('F j, Y'); ?><br>
            <strong>Status:</strong> OFFICIAL
        </div>
    </div>

    <?php if ($not_found): ?>
        <div class="alert alert-danger border-danger border-2 p-4">
            <h4 class="alert-heading fw-bold"><i class="fa-solid fa-triangle-exclamation me-2"></i>Verification Failed</h4>
            <p class="mb-0">No records found for the requested artist identifier: <code><?php echo $requested_artist_slug; ?></code></p>
        </div>
        <a href="/engine-room/dsp-verification" class="btn btn-outline-dark mt-3">Return to Master Catalog</a>
    <?php else: ?>

        <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">1. Primary Creator & Ownership</h3>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-1"><strong>Primary Artist / Creator:</strong> Michael P. Ragsdale</li>
                    <li class="mb-1"><strong>Project / Persona:</strong> <?php echo htmlspecialchars($artist_persona ?: 'Various Artists'); ?></li>
                    <li class="mb-1"><strong>Self-Publishing Alias:</strong> Engine Room Records (Sole Proprietorship)</li>
                    <li class="mb-1"><strong>Official Web Domain:</strong> <a href="/engine-room">engineroom-records.com</a></li>
                    <li class="mb-0"><strong>Primary Contact:</strong> <a href="mailto:dsp.operations@engineroom-records.com">dsp.operations@engineroom-records.com</a></li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">2. Production Workflow & AI Clearance</h3>
                <div class="p-3 bg-light border border-secondary rounded small">
                    <p class="mb-2"><strong>Workflow:</strong> This catalog is entirely produced by Michael P. Ragsdale operating as a solo creator, utilizing <strong>Google Gemini</strong> for lyricism/editing and <strong>Suno AI (Commercial Premium License)</strong> for audio generation.</p>
                    <p class="mb-2"><strong>Rights Granted:</strong> Pursuant to the Suno Commercial Terms of Service, the creator (Michael P. Ragsdale) retains full, perpetual commercial exploitation rights, including but not limited to distribution, monetization, and synchronization.</p>
                    <p class="mb-0 text-danger fw-bold">No vocal cloning or deepfakes of real-world artists are utilized in this catalog.</p>
                </div>
            </div>
        </div>

        <?php if (!$is_artist_view): ?>
            <div class="alert alert-secondary border-dark border-2 p-4 text-center">
                <i class="fa-solid fa-folder-open fa-3x mb-3 text-secondary"></i>
                <h4 class="fw-bold">Master Catalog Directory</h4>
                <p class="mb-0">This portal verifies the independent ownership of the catalog. To view the ISRC records and chain of custody for a specific artist persona, please access this portal via the artist's specific verification URL.</p>
            </div>

        <?php else: ?>
            <div class="mb-4">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">3. Artist Profile & Direct Claim: <span class="text-primary"><?php echo htmlspecialchars($artist_persona); ?></span></h3>
                
                <div class="alert alert-info border-info p-3 small mb-4 shadow-sm">
                    <strong><i class="fa-solid fa-circle-info me-1"></i> Notice to DSP Reviewers:</strong> I, Michael P. Ragsdale, am the 100% independent solo artist behind the project <strong><?php echo htmlspecialchars($artist_persona); ?></strong>. "Engine Room Records" is NOT a third-party record label; it is strictly my personal self-publishing alias used for DistroKid metadata. I am claiming my own artist profile.
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped dsp-table">
                        <thead>
                            <tr>
                                <th scope="col">ERR-ID</th>
                                <th scope="col">ISRC</th>
                                <th scope="col">Track Title</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">AI Clearance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($artist_tracks as $track): ?>
                                <?php 
                                    // Determine if this is a web-only lore track
                                    $is_vault = (isset($track['distributor']) && $track['distributor'] === 'Internal Vault');
                                ?>
                                <tr>
                                    <td class="fw-bold <?php echo $is_vault ? 'text-muted' : ''; ?>">
                                        <?php echo htmlspecialchars($track['err_id'] ?? 'N/A'); ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($track['isrc']) && $track['isrc'] !== 'null'): ?>
                                            <?php echo htmlspecialchars($track['isrc']); ?>
                                        <?php elseif ($is_vault): ?>
                                            <span class="badge bg-secondary text-light border border-dark"><i class="fa-solid fa-lock me-1"></i>Vault Archive</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning text-dark border border-dark">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="<?php echo $is_vault ? 'text-muted' : ''; ?>">
                                        <?php echo htmlspecialchars($track['trackTitle']); ?>
                                    </td>
                                    <td class="<?php echo $is_vault ? 'text-muted' : ''; ?>">
                                        <?php echo htmlspecialchars($track['realReleaseDate']); ?>
                                    </td>
                                    <td>
                                        <?php if ($is_vault): ?>
                                            <span class="small text-muted fw-bold">Web Stream Only (No DSP)</span>
                                        <?php else: ?>
                                            <span class="small text-success fw-bold">Cleared (Commercial)</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

    <?php endif; ?>
    
    <div class="mt-5 text-center border-top border-dark pt-3 small text-muted">
        <p class="mb-0">This page is automatically generated from the Master Catalog.</p>
        <p class="font-monospace">Authorized by Michael P. Ragsdale</p>
    </div>
</div>