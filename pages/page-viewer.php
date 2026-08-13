<?php
// Prevent direct access if Elara didn't route this
if (!defined('ACTIVE_MD_FILE')) {
    die("No narrative file specified.");
}

$markdownPath = ROOT_PATH . '/books/' . ACTIVE_MD_FILE;
$katiePath = ROOT_PATH . '/books/katie.json';

if (!file_exists($markdownPath)) {
    echo "<h1>Error: Narrative segment not found.</h1>";
    echo "<p>System attempted to load: <code>" . htmlspecialchars(ACTIVE_MD_FILE) . "</code></p>";
} else {
    // 1. Ingest the raw Markdown from the file system
    $rawMarkdown = file_get_contents($markdownPath);
    
    // 2. Load the JSON manifest for link resolution
    $katie = [];
    if (file_exists($katiePath)) {
        $katie = json_decode(file_get_contents($katiePath), true);
    }
    
    // 3. The Obsidian Link Intercept
    // Searches for [[Target]] or [[Target|Display Text]]
    $processedMarkdown = preg_replace_callback(
        '/\[\[(.*?)\]\]/',
        function ($matches) use ($katie) {
            // Split the internal link by the pipe character (if it exists)
            $parts = explode('|', $matches[1]);
            $target = trim($parts[0]);
            $display_text = isset($parts[1]) ? trim($parts[1]) : $target;
            
            // Normalize the target by removing the .md extension if you typed it in Obsidian
            $cleanTarget = str_replace('.md', '', $target);
            $resolvedUrl = '#'; // Fallback link if the route can't be resolved
            
            // Scan katie.json to find where this file lives in the SEO routing structure
            if (!empty($katie)) {
                foreach ($katie as $book) {
                    $bookSlug = slugify($book['book_title']);
                    
                    foreach ($book['chapters'] as $chapter) {
                        $chapSlug = slugify($chapter['chap_title']);
                        
                        foreach ($chapter['parts'] as $part) {
                            $partSlug = slugify($part['part_title']);
                            $cleanFilePath = str_replace('.md', '', $part['file_path']);
                            
                            // If the Obsidian link matches the file path in the manifest
                            if (str_ends_with($cleanFilePath, $cleanTarget) || $cleanFilePath === $cleanTarget) {
                                $resolvedUrl = "/{$bookSlug}/{$chapSlug}/{$partSlug}";
                                break 3; // Break out of all three loops immediately to save memory
                            }
                        }
                    }
                }
            }
            
            // Return the standard HTML5 anchor tag
            return "<a href=\"{$resolvedUrl}\" class=\"internal-narrative-link\">{$display_text}</a>";
        },
        $rawMarkdown
    );
    
    // 4. Initialize Parsedown and Render the HTML
    require_once ROOT_PATH . '/includes/components/3rdparty/parsedown/parsedown.php';
    $Parsedown = new Parsedown();
    
    // Output the final formatted view
    echo "<article class=\"narrative-content\">";
    echo $Parsedown->text($processedMarkdown);
    echo "</article>";
}
?>