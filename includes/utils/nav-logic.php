<?php
// includes/utils/nav-logic.php
// v3.0 - Universal Narrative Engine (Function-Based)

/**
 * Loads book data and calculates navigation links.
 * * @param string $jsonUrl The URL to the book's JSON manifest.
 * @return array The navigation data (prev, next, up, structure).
 */
function getBookNavigation($jsonUrl) {
    // 1. Fetch Data
    // Use @ to suppress errors if file fetch fails
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
            'currentPartId' => ''
        ];
    }

    $bookData = json_decode($jsonData, true);

    // 2. Analyze Current URL to determine context
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // We define the base path to strip away based on the JSON config
    $basePath = $bookData['base_path'] ?? '/'; 
    
    // Safety check: ensure we don't replace if base path isn't found
    $relativePath = str_replace($basePath, '', $currentPath);
    $pathSegments = explode('/', trim($relativePath, '/'));

    // IDs based on the v2 Hierarchy (Book -> Chapter -> Part)
    $currentBookId = $pathSegments[0] ?? '';
    $currentChapId = $pathSegments[1] ?? '';
    $currentPartId = $pathSegments[2] ?? '';

    // 3. Flatten Structure for Linear Navigation
    $flatList = [];

    if (!empty($bookData['structure'])) {
        foreach ($bookData['structure'] as $book) {
            // Handle cases where chapters might be empty
            if (!empty($book['chapters'])) {
                foreach ($book['chapters'] as $chapter) {
                    if (!empty($chapter['parts'])) {
                        foreach ($chapter['parts'] as $part) {
                            $flatList[] = [
                                'url' => "{$basePath}/{$book['id']}/{$chapter['id']}/{$part['id']}",
                                'title' => $part['title'],
                                'book_id' => $book['id'],
                                'chapter_id' => $chapter['id'],
                                'part_id' => $part['id']
                            ];
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
            $item['part_id'] === $currentPartId) {
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

    // Up
    $upLink = $basePath; // Default to root

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
        'currentPartId' => $currentPartId
    ];
}
?>