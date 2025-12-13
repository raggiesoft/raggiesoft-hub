<?php 
require_once __DIR__ . '/../../utils/nav-logic.php'; 

$sourceUrl = $bookJsonUrl ?? ''; 
$navData = getBookNavigation($sourceUrl);
extract($navData);
?>

<div class="pt-3">
    <?php if (!empty($bookData['title'])): ?>
    <h5 class="mb-3 pb-2 border-bottom border-secondary text-uppercase" style="font-family: 'Cinzel', serif;">
        <?php echo $bookData['title']; ?>
    </h5>
    <?php endif; ?>

    <div class="accordion accordion-flush" id="bookAccordion">
        
        <?php if (!empty($bookData['structure'])): ?>
            <?php foreach ($bookData['structure'] as $book): ?>
                
                <div class="mb-4">
                    <h6 class="text-primary fw-bold mb-2 ps-2 border-start border-3 border-primary bg-light py-1">
                        <?php echo $book['title']; ?>
                    </h6>
                    
                    <?php if (!empty($book['chapters'])): ?>
                        <?php foreach ($book['chapters'] as $chapter): 
                            // Expand if active
                            $isChapterActive = ($chapter['id'] === $currentChapId && $book['id'] === $currentBookId);
                        ?>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button <?php echo $isChapterActive ? '' : 'collapsed'; ?> bg-transparent shadow-none py-2 px-2" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapse-<?php echo $book['id'] . '-' . $chapter['id']; ?>" 
                                            aria-expanded="<?php echo $isChapterActive ? 'true' : 'false'; ?>">
                                        <span class="small fw-bold text-uppercase" style="letter-spacing: 0.5px; color: var(--bs-body-color);">
                                            <?php echo str_replace("Chapter ", "", $chapter['title']); ?>
                                        </span>
                                    </button>
                                </h2>
                                
                                <div id="collapse-<?php echo $book['id'] . '-' . $chapter['id']; ?>" 
                                     class="accordion-collapse collapse <?php echo $isChapterActive ? 'show' : ''; ?>" 
                                     data-bs-parent="#bookAccordion">
                                    <div class="accordion-body p-0 ps-3 pt-1">
                                        <ul class="list-unstyled border-start border-secondary border-opacity-25 ps-2">
                                            
                                            <?php if (!empty($chapter['parts'])): ?>
                                                <?php foreach ($chapter['parts'] as $part): ?>
                                                    
                                                    <?php if (count($part['scenes']) > 1): ?>
                                                        <li class="mb-2 mt-2">
                                                            <div class="text-muted small fw-bold text-uppercase ps-2 mb-1" style="font-size: 0.75rem;">
                                                                <?php echo $part['title']; ?>
                                                            </div>
                                                            <ul class="list-unstyled ps-3 border-start border-secondary border-opacity-10">
                                                                <?php foreach ($part['scenes'] as $scene): 
                                                                    $isSceneActive = ($scene['id'] === $currentSceneId && $part['id'] === $currentPartId);
                                                                    $sceneUrl = "{$bookData['base_path']}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}";
                                                                ?>
                                                                    <li class="mb-1">
                                                                        <a href="<?php echo $sceneUrl; ?>" 
                                                                           class="text-decoration-none d-block py-1 px-2 rounded-1 <?php echo $isSceneActive ? 'bg-primary text-white' : 'text-body-secondary hover-bg-light'; ?>"
                                                                           style="font-size: 0.85rem;">
                                                                            <?php echo $scene['title']; ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </li>

                                                    <?php else: ?>
                                                        <?php 
                                                            $scene = $part['scenes'][0];
                                                            $isSceneActive = ($scene['id'] === $currentSceneId && $part['id'] === $currentPartId);
                                                            $sceneUrl = "{$bookData['base_path']}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}";
                                                        ?>
                                                        <li class="mb-1">
                                                            <a href="<?php echo $sceneUrl; ?>" 
                                                               class="text-decoration-none d-block py-1 px-2 rounded-1 <?php echo $isSceneActive ? 'bg-primary text-white' : 'text-body-secondary hover-bg-light'; ?>"
                                                               style="font-size: 0.9rem;">
                                                                <?php echo $part['title']; ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>

                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>