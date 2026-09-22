<?php
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
