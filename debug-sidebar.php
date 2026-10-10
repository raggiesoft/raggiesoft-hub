<?php
/**
 * ARCHITECTURAL DOCBLOCK
 * 
 * File: raggiesoft-hub/debug-sidebar.php
 * Path: /raggiesoft-hub/debug-sidebar.php
 * 
 * CORE RESPONSIBILITY:
 * A standalone debugging script used to isolate and test the Table of Contents (TOC) rendering logic
 * for the WebAwesome tree component (`<wa-tree>`). It simulates a specific request context to
 * verify that the correct books and chapters are expanded based on the current URI.
 * 
 * LORE CONTEXT:
 * - N/A. Operates within the `raggiesoft-narratives` domain (e.g., the 'Rachel' series).
 * 
 * UI/UX & STYLING ARCHITECTURE:
 * - Utilizes WebAwesome Web Components (`<wa-tree>`, `<wa-tree-item>`) to render a 
 *   hierarchical navigational list.
 * - Employs Bootstrap utility classes (`bg-transparent`, `fw-semibold`, `text-body-emphasis`)
 *   for styling.
 * 
 * DEPENDENCIES & INCLUSIONS:
 * - Hardcodes dependencies for debugging: `$request_uri`, `$cdnBaseUrl`, and a static file read
 *   from an absolute path pointing to `katie.json`.
 * - Assumes the WebAwesome library is loaded in the environment where this is executed.
 * 
 * MAINTENANCE NOTES:
 * - This is a diagnostic tool, not production code. The hardcoded absolute path to `katie.json`
 *   will break if executed on a different machine or environment.
 * - The logic iteratively checks `$request_uri` against regex-cleaned file paths to determine
 *   the `expanded="true"` state of the `<wa-tree-item>` components.
 */

$request_uri = '/raggiesoft-books/books/rachel/b015/c003/p001';
$cdnBaseUrl = 'https://assets.raggiesoft.com';
$config = ['sequenceName' => 'Test'];
$seriesSlug = 'rachel';
$katie = json_decode(file_get_contents('/Users/michael/Library/CloudStorage/OneDrive-raggiesoft.com/raggiesoft-servers/raggiesoft-narratives/books/rachel/katie.json'), true);

$books = $katie['books'] ?? $katie;
$seriesTitle = $katie['series_title'] ?? $config['sequenceName'] ?? 'Narrative Table of Contents';
?>
<div class="book-toc">
    <wa-tree class="w-100 bg-transparent">
    <?php foreach ($books as $bIndex => $book): ?>
        <?php 
            $bookTitle = $book['book_title'] ?? 'Book ' . ($bIndex + 1); 
            $chapters = $book['chapters'] ?? [];
            
            $isBookActive = false;
            foreach ($chapters as $ch) {
                foreach (($ch['parts'] ?? []) as $p) {
                    $cPath = preg_replace('/\.md$/i', '', $p['file_path']);
                    if ($request_uri === '/raggiesoft-books/books/' . $seriesSlug . '/' . $cPath) {
                        $isBookActive = true;
                        break 2;
                    }
                }
            }
            $isBookExpanded = (count($books) === 1 || $isBookActive) ? 'expanded="true"' : ''; 
        ?>
        <wa-tree-item <?php echo $isBookExpanded; ?>>
            <span class="fw-semibold text-body-emphasis d-block"><?php echo htmlspecialchars($bookTitle); ?></span>
            
            <?php foreach ($chapters as $cIndex => $chapter): ?>
                <?php 
                    $chapTitle = $chapter['chap_title'] ?? 'Chapter ' . ($cIndex + 1); 
                    $parts = $chapter['parts'] ?? [];
                    
                    $isChapterActive = false;
                    foreach ($parts as $p) {
                        $cPath = preg_replace('/\.md$/i', '', $p['file_path']);
                        if ($request_uri === '/raggiesoft-books/books/' . $seriesSlug . '/' . $cPath) {
                            $isChapterActive = true;
                            break;
                        }
                    }
                ?>
                <wa-tree-item <?php echo $isChapterActive ? 'expanded="true"' : ''; ?>>
                    <span class="text-body fw-medium d-block"><?php echo htmlspecialchars($chapTitle); ?></span>
                </wa-tree-item>
            <?php endforeach; ?>
        </wa-tree-item>
    <?php endforeach; ?>
    </wa-tree>
</div>
