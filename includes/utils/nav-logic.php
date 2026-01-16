<?php
// includes/utils/nav-logic.php
// v4.0 - Universal Narrative Engine (Scene-Aware)

function getBookNavigation($jsonUrl) {
    // 1. Fetch Data
    $jsonData = @file_get_contents($jsonUrl);

    if ($jsonData === false) {
        return [
            'error' => true,
            'bookData' => ['structure' => [], 'base_path' => ''],
            'prevLink' => '#',
            'nextLink' => '#',
            'upLink' => '#',
            'currentBookId' => '',
            'currentChapId' => '',
            'currentPartId' => '',
            'currentSceneId' => '',
            'flatList' => []
        ];
    }

    $bookData = json_decode($jsonData, true);

    // 2. Analyze Current URL (4 Levels Deep)
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $basePath = $bookData['base_path'] ?? '/'; 
    $relativePath = str_replace($basePath, '', $currentPath);
    $pathSegments = explode('/', trim($relativePath, '/'));

    // IDs based on v4 Hierarchy
    $currentBookId = $pathSegments[0] ?? '';
    $currentChapId = $pathSegments[1] ?? '';
    $currentPartId = $pathSegments[2] ?? '';
    $currentSceneId = $pathSegments[3] ?? '';

    // 3. Flatten Structure for Linear Navigation
    $flatList = [];

    if (!empty($bookData['structure'])) {
        foreach ($bookData['structure'] as $book) {
            if (!empty($book['chapters'])) {
                foreach ($book['chapters'] as $chapter) {
                    if (!empty($chapter['parts'])) {
                        foreach ($chapter['parts'] as $part) {
                            if (!empty($part['scenes'])) {
                                foreach ($part['scenes'] as $scene) {
                                    $flatList[] = [
                                        // URL: .../book/chap/part/scene
                                        'url' => "{$basePath}/{$book['id']}/{$chapter['id']}/{$part['id']}/{$scene['id']}",
                                        'title' => $scene['title'],
                                        // Context helps in search/debug: "The Weaver's Lesson - Scene 1"
                                        'context_title' => "{$part['title']} - {$scene['title']}", 
                                        'book_id' => $book['id'],
                                        'chapter_id' => $chapter['id'],
                                        'part_id' => $part['id'],
                                        'scene_id' => $scene['id'],
                                        'theme' => $scene['theme'] ?? null 
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    // 4. Find Current Position
    $currentIndex = -1;
    foreach ($flatList as $index => $item) {
        if ($item['book_id'] === $currentBookId && 
            $item['chapter_id'] === $currentChapId && 
            $item['part_id'] === $currentPartId &&
            $item['scene_id'] === $currentSceneId) {
            $currentIndex = $index;
            break;
        }
    }

    // 5. Calculate Links
    // Previous
    if ($currentIndex > 0) {
        $prevLink = $flatList[$currentIndex - 1]['url'];
    } else {
        $prevLink = $basePath; // Fallback to Index
    }

    // Next
    if ($currentIndex > -1 && $currentIndex < count($flatList) - 1) {
        $nextLink = $flatList[$currentIndex + 1]['url'];
    } else {
        $nextLink = '#'; // End of Book
    }

    // Up - Return to the Book Index
    $upLink = $basePath; 

    return [
        'error' => false,
        'bookData' => $bookData,
        'flatList' => $flatList,
        'currentIndex' => $currentIndex,
        'prevLink' => $prevLink,
        'nextLink' => $nextLink,
        'upLink' => $upLink,
        'currentBookId' => $currentBookId,
        'currentChapId' => $currentChapId,
        'currentPartId' => $currentPartId,
        'currentSceneId' => $currentSceneId
    ];
}
?>