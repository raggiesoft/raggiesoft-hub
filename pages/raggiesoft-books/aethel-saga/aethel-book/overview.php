<?php
/**
 * ============================================================================
 * ARCHITECTURE & AETHEL SAGA INDEX:
 * This file serves as the Table of Contents / Index for "The Silver Gauntlet of Aethel".
 * It consumes the book structure ($bookData) loaded by `nav-logic.php` and renders
 * a nested directory of Parts and Chapters.
 * 
 * Future Maintenance:
 * - The UI relies on Bootstrap 5 cards and custom classes (.aethel-theme, .tome-container).
 * - Ensure the CDN asset path for the cover art remains valid.
 * - The dynamically generated URLs must match the Elara SPA routing format:
 *   /library/aethel/aethel-book/{bookId}/{partId}/{chapterId}
 * ============================================================================
 */
// Context: Book Index / Table of Contents
$currentSite = 'aethel';
$pageTitle = "Table of Contents - The Silver Gauntlet";

// ARCHITECTURE: Fetch JSON manifest containing the structural hierarchy of the book
// Load the book data (reusing the logic we built for the sidebar)
require_once ROOT_PATH . '/includes/utils/nav-logic.php';
?>

<div class="aethel-theme min-vh-100 py-5">
    <div class="container tome-container">
        
        <div class="text-center mb-5">
            <img src="<?php echo $cdnBaseUrl; ?>/engine-room-records/artists/silver-gauntlet-of-aethel/2017-the-aethel-saga/album-art.jpg" 
                 alt="Cover Art" 
                 class="img-fluid border border-warning shadow-sm mb-4" 
                 style="max-width: 200px; transform: rotate(-2deg);">

            <h1 class="display-4" style="font-family: 'Cinzel', serif;">The Silver Gauntlet of Aethel</h1>
            <p class="lead text-muted fst-italic">The 30th Anniversary "Aethel Saga"</p>
            <div class="d-inline-block border-bottom border-warning w-25 my-3"></div>
        </div>

        <?php if (empty($bookData['structure'])): ?>
            <wa-callout variant="danger" appearance="accent" class="text-center d-block">
                <i slot="icon" class="fa-duotone fa-book-dead"></i>
                The archives appear to be empty. (Unable to load Book Data)
            </wa-callout>
        <?php else: ?>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <!-- ARCHITECTURE: Iterate through the top-level book manifest -->
                    <?php foreach ($bookData['structure'] as $book): ?>
                        <div class="mb-5">
                            
                            <div class="text-center mb-4">
                                <h2 class="text-primary d-inline-block px-4 py-2 border-top border-bottom border-primary border-opacity-25" 
                                    style="font-family: 'Cinzel', serif; border-bottom: none;">
                                    <?php echo $book['title']; ?>
                                </h2>
                            </div>

                            <?php foreach ($book['parts'] as $part): ?>
                                <wa-card class="card bg-transparent border-secondary mb-4 shadow-sm w-100" style="border-color: rgba(139, 69, 19, 0.3) !important; --body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
                                    
                                    <!-- ARCHITECTURE: Render Part headers (e.g., Part I, Part II) -->
                                    <div class="card-header bg-transparent border-secondary border-opacity-25 text-center py-3" 
                                         style="background-color: rgba(139, 69, 19, 0.05);">
                                        <h3 class="h5 m-0 text-uppercase fw-bold" style="color: var(--aethel-rust); letter-spacing: 1px;">
                                            <?php echo $part['title']; ?>
                                        </h3>
                                    </div>
                                    
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            <?php foreach ($part['chapters'] as $chapter): 
                                                // Construct URL: /library/aethel/aethel-book/{bookId}/{partId}/{chapterId}
                                                $url = "/library/aethel/aethel-book/{$book['id']}/{$part['id']}/{$chapter['id']}";
                                            ?>
                                                <a href="<?php echo $url; ?>" 
                                                   class="list-group-item list-group-item-action bg-transparent border-secondary border-opacity-25 d-flex justify-content-between align-items-center py-3 px-4">
                                                    <span class="fs-5" style="font-family: 'Crimson Text', serif; color: var(--aethel-ink);">
                                                        <?php echo $chapter['title']; ?>
                                                    </span>
                                                    
                                                    <i class="fa-duotone fa-feather-pointed text-warning opacity-50"></i>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                </wa-card>
                            <?php endforeach; ?>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        <?php endif; ?>

        <div class="text-center mt-5 pt-4 border-top border-secondary border-opacity-25">
            <wa-button variant="neutral" appearance="outlined" href="/raggiesoft-books/aethel-saga">
                <i slot="start" class="fa-duotone fa-arrow-left"></i>Return to Aethel Home
            </wa-button>
            <wa-button variant="brand" appearance="outlined" href="/raggiesoft-books/aethel-saga/lore/characters" class="ms-2">
                <i slot="start" class="fa-duotone fa-users-crown"></i>Characters
            </wa-button>
            <wa-button variant="success" appearance="outlined" href="/raggiesoft-books/aethel-saga/lore/locations" class="ms-2">
                <i slot="start" class="fa-duotone fa-map-location-dot"></i>Locations
            </wa-button>
        </div>

    </div>
</div>