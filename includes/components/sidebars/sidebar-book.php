<?php 
require_once __DIR__ . '/../../utils/nav-logic.php'; 

// Initialize using the variable from index.php
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
                            // Expand if we are inside this chapter
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
                                                <?php foreach ($chapter['parts'] as $part): 
                                                    $isPartActive = ($part['id'] === $currentPartId && $isChapterActive);
                                                    $partUrl = "{$bookData['base_path']}/{$book['id']}/{$chapter['id']}/{$part['id']}";
                                                ?>
                                                    <li class="mb-1">
                                                        <a href="<?php echo $partUrl; ?>" 
                                                           class="text-decoration-none d-block py-1 px-2 rounded-1 <?php echo $isPartActive ? 'bg-primary text-white' : 'text-body-secondary hover-bg-light'; ?>"
                                                           style="font-size: 0.85rem; transition: all 0.2s;">
                                                            <?php echo $part['title']; ?>
                                                        </a>
                                                    </li>
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