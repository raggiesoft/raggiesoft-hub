<?php
// includes/components/sidebars/sidebar-discography.php
// v2.1 - Fixed Variable Name Mismatch & Data Structure Access

// 1. Ensure Data exists
include_once ROOT_PATH . '/includes/components/arrays/_discography.php';

// 2. Get Current Context
$current_req = $_SERVER['REQUEST_URI'];
?>

<nav class="nav flex-column mb-4">
    <div class="accordion accordion-flush" id="discographyAccordion">
        
        <?php 
        // SAFETY: Check if the variable exists from the include
        $library = $discographyLibrary ?? [];
        
        $eraIndex = 0;
        foreach ($library as $eraKey => $eraData): 
            $eraIndex++;
            
            // EXTRACT V2.0 DATA
            // The sidebar loop was breaking because it didn't know about the new structure
            $eraTitle = $eraData['label']; 
            $albums   = $eraData['albums'];
            
            // Skip eras with no albums (like Modern Era currently)
            if (empty($albums)) continue;

            // Generate IDs
            $collapseId = 'collapse-era-' . $eraIndex;
            $headingId  = 'heading-era-' . $eraIndex;
            
            // Determine Open State
            $isOpen = false;
            foreach ($albums as $album) {
                // Check if current URL matches this album URL
                if (str_contains($current_req, $album['url'])) {
                    $isOpen = true;
                    break;
                }
            }
            
            // Default open the first one if on root discography page
            if ($current_req === '/discography' && $eraIndex === 1) {
                $isOpen = true;
            }
        ?>

            <div class="accordion-item bg-transparent border-0">
                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                    <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isOpen ? '' : 'collapsed'; ?>" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#<?php echo $collapseId; ?>" 
                            aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>" 
                            aria-controls="<?php echo $collapseId; ?>">
                        <?php 
                            // Flavor Icons based on Era Key
                            if ($eraKey === 'apex') echo '<i class="fa-duotone fa-building me-2"></i>';
                            elseif ($eraKey === 'freedom') echo '<i class="fa-duotone fa-warehouse me-2"></i>';
                            elseif ($eraKey === 'reignition') echo '<i class="fa-duotone fa-fire-burner me-2"></i>';
                            else echo '<i class="fa-duotone fa-compact-disc me-2"></i>';
                        ?>
                        <?php echo $eraTitle; ?>
                    </button>
                </h2>
                
                <div id="<?php echo $collapseId; ?>" 
                     class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" 
                     aria-labelledby="<?php echo $headingId; ?>" 
                     data-bs-parent="#discographyAccordion">
                    
                    <div class="accordion-body p-0 ps-3">
                        <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                            
                            <?php foreach ($albums as $album): 
                                $isActive = ($current_req === $album['url']);
                                $title = $album['title'];
                                $year = $album['year'];
                                $url = $album['url'];
                                $extra = $album['extra'] ?? ''; 
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary py-1 <?php echo $isActive ? 'active fw-bold text-light' : ''; ?>" 
                                       href="<?php echo $url; ?>">
                                        <small><?php echo $title; ?> (<?php echo $year; ?>)</small>
                                        <?php echo $extra; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</nav>