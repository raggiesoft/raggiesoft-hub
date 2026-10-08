<?php
// pages/raggiesoft-books/search.php

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if (!empty($query)) {
    // Local path to search index
    $indexPath = ROOT_PATH . '/../raggiesoft-assets/raggiesoft-books/json/search-index.json';
    $indexData = null;
    
    if (file_exists($indexPath)) {
        $indexData = json_decode(file_get_contents($indexPath), true);
    } else {
        // Production fallback: fetch from CDN
        global $cdnBaseUrl;
        $cdnUrl = ($cdnBaseUrl ?? 'https://assets.raggiesoft.com') . '/raggiesoft-books/json/search-index.json';
        
        // Use stream context to handle redirects and timeouts gracefully
        $context = stream_context_create(['http' => ['timeout' => 5]]);
        $json = @file_get_contents($cdnUrl, false, $context);
        if ($json) {
            $indexData = json_decode($json, true);
        }
    }
    
    if ($indexData) {
        $lowerQuery = strtolower($query);
            $queryLen = strlen($lowerQuery);
            
            foreach ($indexData as $item) {
                // Determine if query is in title, chapter, book, series, or content
                $matchFound = false;
                $snippet = '';
                
                // Check metadata fields first
                $searchableMeta = [
                    'title' => $item['title'] ?? '',
                    'chapter' => $item['chapter'] ?? '',
                    'book' => $item['book'] ?? '',
                    'series' => $item['series'] ?? ''
                ];
                
                foreach ($searchableMeta as $metaField) {
                    if (stripos($metaField, $query) !== false) {
                        $matchFound = true;
                    }
                }
                
                // Check content
                $content = $item['content'] ?? '';
                $contentMatchPos = stripos($content, $query);
                
                if ($contentMatchPos !== false) {
                    $matchFound = true;
                    
                    // Generate a snippet around the first match
                    $snippetLength = 150; // Total snippet length
                    $startPos = max(0, $contentMatchPos - 50);
                    
                    // Adjust to not cut off words if possible
                    if ($startPos > 0) {
                        $spacePos = strpos($content, ' ', $startPos);
                        if ($spacePos !== false && $spacePos < $contentMatchPos) {
                            $startPos = $spacePos + 1;
                        }
                    }
                    
                    $endPos = min(strlen($content), $contentMatchPos + $queryLen + 50);
                    
                    $rawSnippet = substr($content, $startPos, $endPos - $startPos);
                    
                    // Highlight the query in the snippet using simple regex for case-insensitive exact substring replace
                    // We escape the query for regex
                    $escapedQuery = preg_quote($query, '/');
                    $highlightedSnippet = preg_replace("/($escapedQuery)/i", "<strong>$1</strong>", htmlspecialchars($rawSnippet));
                    
                    $snippet = ($startPos > 0 ? '&hellip;' : '') . $highlightedSnippet . ($endPos < strlen($content) ? '&hellip;' : '');
                } else if ($matchFound) {
                    // Match was in metadata, generate a generic snippet from the start of the content
                    $rawSnippet = substr($content, 0, 100);
                    $snippet = htmlspecialchars($rawSnippet) . (strlen($content) > 100 ? '&hellip;' : '');
                }
                
                if ($matchFound) {
                    $item['snippet'] = $snippet;
                    // Highlight title if match is there
                    $item['highlightedTitle'] = htmlspecialchars($item['title']);
                    if (stripos($item['title'], $query) !== false) {
                        $item['highlightedTitle'] = preg_replace("/(" . preg_quote($query, '/') . ")/i", "<strong>$1</strong>", htmlspecialchars($item['title']));
                    }
                    $results[] = $item;
                }
            }
        }
    }
?>

<div class="container py-5 mt-5" style="min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="search-header mb-4 border-bottom pb-4">
                <h1 class="display-5 fw-bold ova-serif text-primary mb-3">Deep Search</h1>
                <form action="/raggiesoft-books/search" method="GET" class="d-flex w-100 shadow-sm rounded-pill overflow-hidden border">
                    <input type="text" name="q" class="form-control border-0 px-4 py-3 bg-light" 
                           placeholder="Search characters, quotes, or lore..." 
                           value="<?php echo htmlspecialchars($query); ?>" 
                           style="box-shadow: none; outline: none; font-size: 1.1rem;">
                    <button type="submit" class="btn btn-primary px-4 fw-bold">
                        Search
                    </button>
                </form>
            </div>

            <div class="search-results-container">
                <?php if (empty($query)): ?>
                    <div class="text-center py-5 mt-4 bg-white rounded-4 border shadow-sm">
                        <i class="fa-duotone fa-magnifying-glass fa-3x mb-3" style="color: #6c757d;"></i>
                        <h4 class="fw-bold text-dark">Enter a search term</h4>
                        <p style="color: #495057;">Search across the entire Ocean View Archives textual content.</p>
                    </div>
                <?php else: ?>
                    <p class="text-light mb-4 fw-bold">
                        Found <?php echo count($results); ?> result(s) for "<?php echo htmlspecialchars($query); ?>"
                    </p>

                    <?php if (empty($results)): ?>
                        <div class="text-center py-5 mt-4 bg-white rounded-4 border shadow-sm">
                            <i class="fa-duotone fa-folder-open fa-3x mb-3" style="color: #6c757d;"></i>
                            <h4 class="fw-bold text-dark">No records found</h4>
                            <p style="color: #495057; font-weight: 500;">No documents match your query in the archives.</p>
                        </div>
                    <?php else: ?>
                        <ul class="list-unstyled">
                            <?php foreach ($results as $result): ?>
                                <li class="mb-4 bg-white p-4 rounded-4 shadow-sm border search-result-item" style="transition: transform 0.2s ease, box-shadow 0.2s ease;">
                                    <div class="d-flex flex-column">
                                        <div class="mb-1 text-uppercase fw-bold" style="color: #495057; font-size: 0.8rem; letter-spacing: 0.5px;">
                                            <?php echo htmlspecialchars($result['series']); ?> 
                                            &rsaquo; <?php echo htmlspecialchars($result['book']); ?> 
                                            &rsaquo; <?php echo htmlspecialchars($result['chapter']); ?>
                                        </div>
                                        <h3 class="h5 fw-bold mb-2">
                                            <?php $booksUrl = str_replace('/raggiesoft-books/books/', 'https://books.raggiesoft.com/', $result['url']); ?>
                                            <a href="<?php echo htmlspecialchars($booksUrl); ?>" class="text-decoration-none" style="color: #0056b3;">
                                                <?php echo $result['highlightedTitle'] ?? htmlspecialchars($result['title']); ?>
                                            </a>
                                        </h3>
                                        <p class="mb-0" style="color: #343a40; line-height: 1.6; font-size: 0.95rem;">
                                            <?php echo $result['snippet']; ?>
                                        </p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
    /* Classic Search Results Styling with CSS Variables */
    :root {
        --search-highlight-bg: #fff3cd;
        --search-highlight-text: #856404;
    }

    .search-result-item strong {
        background-color: var(--search-highlight-bg);
        color: var(--search-highlight-text);
        padding: 0 0.15rem;
        border-radius: 3px;
        font-weight: 700;
    }

    .search-result-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.08) !important;
    }
    
    .ova-serif {
        font-family: 'Playfair Display', serif; /* or whichever serif is used in the site */
    }
</style>
