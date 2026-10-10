<?php
/**
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This class (`StardustLoreParser`) is responsible for parsing custom Markdown files used in the Stardust Hub lore sections.
 * 
 * DESIGN INTENT:
 * - Separates YAML frontmatter metadata from Markdown content before processing.
 * - Instantiates `StardustParsedown` (a custom Parsedown extension) to convert Markdown to HTML with specific Web Awesome component integrations.
 * - Dynamically generates a Table of Contents (TOC) by regex-parsing H2 and H3 tags from the generated HTML and injecting URL-safe IDs.
 * 
 * MAINTENANCE NOTES:
 * - The YAML parser is extremely basic and only supports single-depth `key: value` pairs. Complex YAML structures will break.
 * - The ID generation regex (`preg_replace('/[^a-zA-Z0-9]+/', '-', ...)`) is aggressive. Ensure headers don't rely on special characters for uniqueness.
 */
require_once __DIR__ . '/stardust-parsedown.php';

class StardustLoreParser {
    
    public static function parse($filePath) {
        if (!file_exists($filePath)) {
            return null;
        }

        $content = file_get_contents($filePath);
        $metadata = [];
        $markdown = $content;

        // LEGACY PARSER NOTE: Custom implementation of frontmatter extraction since Parsedown does not natively support YAML.
        // Extract YAML frontmatter
        if (preg_match('/^---\s*(.*?)\s*---\s*(.*)/s', $content, $matches)) {
            $yaml = $matches[1];
            $markdown = $matches[2];

            // Parse simple YAML key-value pairs (supports 'key: value' or 'key: "value"')
            $lines = explode("\n", $yaml);
            foreach ($lines as $line) {
                if (preg_match('/^([a-zA-Z0-9_-]+):\s*(.*)$/', trim($line), $kv)) {
                    $key = $kv[1];
                    $val = trim($kv[2]);
                    // Strip surrounding quotes if present
                    if (preg_match('/^["\'](.*)["\']$/', $val, $valMatches)) {
                        $val = $valMatches[1];
                    }
                    $metadata[$key] = $val;
                }
            }
        }

        // LEGACY DEPENDENCY: Relies on the custom `StardustParsedown` class to handle specific shortcodes and component conversions.
        $parsedown = new StardustParsedown();
        $html = $parsedown->text($markdown);

        // Extract TOC and inject IDs into H2 and H3 tags
        $toc = [];
        $html = preg_replace_callback('/<(h[23])>(.*?)<\/\1>/i', function($matches) use (&$toc) {
            $tag = strtolower($matches[1]);
            $text = strip_tags($matches[2]);
            // Create a URL-safe ID
            $id = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $text));
            $id = trim($id, '-');
            
            $toc[] = [
                'level' => ($tag === 'h2') ? 2 : 3,
                'id' => $id,
                'title' => trim($text)
            ];

            return "<{$tag} id=\"{$id}\">{$matches[2]}</{$tag}>";
        }, $html);

        return [
            'metadata' => $metadata,
            'html' => $html,
            'toc' => $toc
        ];
    }
}
