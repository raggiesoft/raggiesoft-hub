<?php
// pages/engine-room/dsp-verification.php
// Internal Administrative Portal for DSP Identity & Copyright Verification
// Context: Bland, corporate, strictly legal. No lore.

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
    /* Strictly Corporate / Legal Styling */
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
    /* Override Elara Dark Mode to keep this page looking like a legal document */
    [data-bs-theme="dark"] .dsp-portal {
        background-color: #e9ecef !important;
    }
</style>

<div class="container py-5 dsp-portal shadow-lg my-4 rounded border border-secondary">
    
    <div class="dsp-header d-flex justify-content-between align-items-end">
        <div>
            <h1 class="h3 fw-bold text-uppercase mb-1" style="letter-spacing: -0.5px;">Engine Room Records</h1>
            <h2 class="h5 text-muted mb-0">DSP Verification & Chain of Custody Portal</h2>
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
        <a href="/engine-room/dsp-verification" class="btn btn-outline-dark mt-3">Return to Master Imprint</a>
    <?php else: ?>

        <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">1. Label & Corporate Entity</h3>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-1"><strong>Operating Imprint:</strong> Engine Room Records</li>
                    <li class="mb-1"><strong>Parent Company/Tenant:</strong> RaggieSoft</li>
                    <li class="mb-1"><strong>Official Web Domain:</strong> engineroom-records.com</li>
                    <li class="mb-0"><strong>Primary Contact:</strong> dsp.operations@engineroom-records.com</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">2. Generative AI & Licensing Disclosure</h3>
                <div class="p-3 bg-light border border-secondary rounded small">
                    <p class="mb-2"><strong>Platform:</strong> Suno AI (Commercial Premium License)</p>
                    <p class="mb-2"><strong>Rights Granted:</strong> Pursuant to the Suno Commercial Terms of Service, the creator (RaggieSoft) retains full, perpetual commercial exploitation rights, including but not limited to distribution, monetization, and synchronization.</p>
                    <p class="mb-0 text-danger fw-bold">No vocal cloning or deepfakes of real-world artists are utilized in this catalog.</p>
                </div>
            </div>
        </div>

        <?php if (!$is_artist_view): ?>
            <div class="alert alert-secondary border-dark border-2 p-4 text-center">
                <i class="fa-solid fa-folder-open fa-3x mb-3 text-secondary"></i>
                <h4 class="fw-bold">Master Imprint Directory</h4>
                <p class="mb-0">This portal verifies the corporate ownership of the Engine Room Records imprint. To view the ISRC catalog and chain of custody for a specific artist, please access this portal via the artist's specific verification URL.</p>
            </div>

        <?php else: ?>
            <div class="mb-4">
                <h3 class="h6 fw-bold text-uppercase border-bottom border-dark pb-2 mb-3">3. Artist Profile Claim: <span class="text-primary"><?php echo htmlspecialchars($artist_persona); ?></span></h3>
                <p class="small mb-4">
                    If you are a representative of a Digital Service Provider (DSP) reviewing an artist profile claim, this page confirms that the user requesting access is the sole authorized administrator and rights-holder for the catalog below. All tracks are distributed via <strong>DistroKid</strong>.
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped dsp-table">
                        <thead>
                            <tr>
                                <th>ERR-ID</th>
                                <th>ISRC</th>
                                <th>Track Title</th>
                                <th>Release Date</th>
                                <th>AI Clearance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($artist_tracks as $track): ?>
                                <tr>
                                    <td class="fw-bold"><?php echo htmlspecialchars($track['err_id'] ?? 'N/A'); ?></td>
                                    <td>
                                        <?php if (!empty($track['isrc']) && $track['isrc'] !== 'null'): ?>
                                            <?php echo htmlspecialchars($track['isrc']); ?>
                                        <?php else: ?>
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($track['trackTitle']); ?></td>
                                    <td><?php echo htmlspecialchars($track['realReleaseDate']); ?></td>
                                    <td class="small text-success fw-bold">Cleared (Commercial)</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

    <?php endif; ?>
    
    <div class="mt-5 text-center border-top border-dark pt-3 small text-muted">
        <p class="mb-0">This page is automatically generated from the RaggieSoft Master Catalog.</p>
        <p class="font-monospace">Authorized by Michael P. Ragsdale / RaggieSoft</p>
    </div>
</div>