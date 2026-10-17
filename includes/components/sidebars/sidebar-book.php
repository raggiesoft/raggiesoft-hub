<?php 
/**
 * ARCHITECTURE: sidebar-book.php
 * 
 * Context: RaggieSoft Hub - Book Navigation Sidebar.
 * Narrative/Purpose: This component is responsible for displaying a hierarchical navigation structure
 * for a specific "book" entity. It parses structured JSON data containing books, chapters, parts, and scenes,
 * rendering them into a collapsible accordion layout.
 * 
 * Mechanics:
 * - Requires `nav-logic.php` for fetching and parsing the book structure.
 * - Extracts navigation state variables (e.g., $currentChapId, $currentBookId) to control accordion expansion.
 * - Uses Bootstrap 5 accordion components for interactive folding.
 * - Highlights the currently active scene based on URL parameters.
 */
require_once __DIR__ . '/../../utils/nav-logic.php'; 

$sourceUrl = $bookJsonUrl ?? ''; 
$navData = getBookNavigation($sourceUrl);
extract($navData);
?>

<!-- START: Book Navigation Wrapper -->
<div class="pt-3">
    <?php if (!empty($bookData['title'])): ?>
    <h5 class="mb-3 pb-2 border-bottom border-secondary text-uppercase" style="font-family: 'Cinzel', serif;">
        <?php echo $bookData['title']; ?>
    </h5>
    <?php endif; ?>

    <!-- START: Collapsible Hierarchy Accordion -->
    <div class="d-flex flex-column gap-2" id="bookAccordion">
        
        <?php if (!empty($bookData['structure'])): ?>
            <?php foreach ($bookData['structure'] as $book): ?>
                
                <!-- START: Book Section Wrapper -->
                <div class="mb-3">
                    <h6 class="text-primary fw-bold mb-2 ps-2 border-start border-3 border-primary bg-body-tertiary py-1">
                        <?php echo htmlspecialchars($book['title']); ?>
                    </h6>
                    
                    <?php if (!empty($book['chapters'])): ?>
                        <?php foreach ($book['chapters'] as $chapter): 
                            // Expand if active
                            $isChapterActive = ($chapter['id'] === $currentChapId && $book['id'] === $currentBookId);
                        ?>
                            <!-- START: Chapter Details Item -->
                            <wa-details appearance="plain" <?php echo $isChapterActive ? 'open' : ''; ?> class="mb-1">
                                <span slot="summary" class="small fw-bold text-uppercase" style="letter-spacing: 0.5px; color: var(--bs-body-color);">
                                    <?php echo htmlspecialchars(str_replace("Chapter ", "", $chapter['title'])); ?>
                                </span>
                                
                                <!-- START: Chapter Content Body -->
                                <div class="ps-2 pt-1">
                                    <ul class="list-unstyled border-start border-secondary ps-2 mb-0">
                                        
                                        <?php if (!empty($chapter['parts'])): ?>
                                            <?php foreach ($chapter['parts'] as $part): ?>
                                                
                                                <?php if (count($part['scenes']) > 1): ?>
                                                    <li class="mb-2 mt-2">
                                                        <div class="small fw-bold text-uppercase ps-2 mb-1" style="font-size: 0.75rem;">
                                                            <?php echo htmlspecialchars($part['title']); ?>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1 ps-2 border-start border-secondary border-opacity-10">
                                                            <?php foreach ($part['scenes'] as $scene): 
                                                                $isSceneActive = ($scene['id'] === $currentSceneId && $part['id'] === $currentPartId);
                                                                $sceneUrl = "{$bookData['base_path']}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}";
                                                            ?>
                                                                <wa-button appearance="<?php echo $isSceneActive ? 'filled-outlined' : 'plain'; ?>" variant="<?php echo $isSceneActive ? 'brand' : 'neutral'; ?>" size="small" href="<?php echo htmlspecialchars($sceneUrl); ?>" class="w-100 text-start justify-content-start" style="text-align: left;">
                                                                    <?php echo htmlspecialchars($scene['title']); ?>
                                                                </wa-button>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </li>

                                                <?php else: ?>
                                                    <?php 
                                                        $scene = $part['scenes'][0];
                                                        $isSceneActive = ($scene['id'] === $currentSceneId && $part['id'] === $currentPartId);
                                                        $sceneUrl = "{$bookData['base_path']}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}";
                                                    ?>
                                                    <li class="mb-1">
                                                        <wa-button appearance="<?php echo $isSceneActive ? 'filled-outlined' : 'plain'; ?>" variant="<?php echo $isSceneActive ? 'brand' : 'neutral'; ?>" size="small" href="<?php echo htmlspecialchars($sceneUrl); ?>" class="w-100 text-start justify-content-start" style="text-align: left;">
                                                            <?php echo htmlspecialchars($part['title']); ?>
                                                        </wa-button>
                                                    </li>
                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        
                                    </ul>
                                </div>
                            </wa-details>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>