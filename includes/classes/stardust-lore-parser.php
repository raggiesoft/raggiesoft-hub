<?php
/**
 * ============================================================================
 * READ-ALONG TEACHING GUIDE (100-LEVEL COURSE EDITION)
 * ============================================================================
 * File: /includes/classes/stardust-lore-parser.php
 * Role: Markdown + YAML Frontmatter + Table-of-Contents Parser (`StardustLoreParser`)
 * Domain: https://raggiesoft.com (Used by `/pages/api/lore-fetcher.php` -> `/api/lore`)
 *
 * WHAT THIS FILE DOES (PLAIN-ENGLISH OVERVIEW):
 * RaggieSoft stores encyclopedia lore entries as plain-text `.md` (Markdown)
 * files inside `raggiesoft-assets/raggiesoft-books/encyclopedia/`. Each `.md`
 * file has two parts:
 *   1. A metadata header at the top fenced between `---` lines ("YAML Frontmatter",
 *      such as `title: "Ashley Raybourn"`).
 *   2. The article body written in Markdown (`## Heading`, `**bold**`, etc.).
 *
 * `StardustLoreParser::parse($filePath)` reads a `.md` file from disk, splits
 * off its YAML frontmatter into a `$metadata` array, converts the Markdown body
 * into HTML using `StardustParsedown`, and automatically injects `id="..."`
 * anchors into every `<h2>` and `<h3>` heading while building a structured
 * Table of Contents (`$toc`) array.
 *
 * INPUTS:
 * - `$filePath` (string): Validated absolute path to a `.md` file on disk.
 * - Depends on `includes/classes/stardust-parsedown.php` (which extends Parsedown).
 *
 * OUTPUT PRODUCED:
 * - Returns `null` if `$filePath` does not exist, OR an associative array:
 *   `['metadata' => [...], 'html' => '...', 'toc' => [['level' => 2, 'id' => '...', 'title' => '...'], ...]]`
 *   ready to be serialized into JSON by `pages/api/lore-fetcher.php`.
 * ============================================================================
 *
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

// Load the custom `StardustParsedown` Markdown-to-HTML engine located in the same folder (`__DIR__`):
require_once __DIR__ . '/stardust-parsedown.php';

class StardustLoreParser {
    
    /**
     * `public static function` means callers can invoke `StardustLoreParser::parse($path)`
     * directly without needing to instantiate `new StardustLoreParser()` first.
     */
    public static function parse($filePath) {
        // Guard clause: return `null` immediately if the requested Markdown file isn't on disk.
        if (!file_exists($filePath)) {
            return null;
        }

        // Read the entire `.md` file into a string:
        $content = file_get_contents($filePath);
        $metadata = [];
        $markdown = $content;

        // STEP 1: EXTRACT YAML FRONTMATTER
        // LEGACY PARSER NOTE: Custom implementation of frontmatter extraction since Parsedown does not natively support YAML.
        // Regex breakdown `/^---\s*(.*?)\s*---\s*(.*)/s`:
        // - `^---` matches `---` at the very start of the file.
        // - `(.*?)` (Capture Group 1 -> `$matches[1]`) lazily captures the YAML block up to the closing `---`.
        // - `(.*)`  (Capture Group 2 -> `$matches[2]`) captures the remaining Markdown body.
        // - The `/s` ("dotall") modifier allows `.` to match newline characters across multiple lines.
        if (preg_match('/^---\s*(.*?)\s*---\s*(.*)/s', $content, $matches)) {
            $yaml = $matches[1];
            $markdown = $matches[2];

            // Parse simple YAML key-value pairs line by line (supports `key: value` or `key: "value"`)
            $lines = explode("\n", $yaml);
            foreach ($lines as $line) {
                if (preg_match('/^([a-zA-Z0-9_-]+):\s*(.*)$/', trim($line), $kv)) {
                    $key = $kv[1];
                    $val = trim($kv[2]);
                    // Strip surrounding single or double quotes if present (e.g., `"Character"` -> `Character`)
                    if (preg_match('/^["\'](.*)["\']$/', $val, $valMatches)) {
                        $val = $valMatches[1];
                    }
                    $metadata[$key] = $val;
                }
            }
        }

        // STEP 2: CONVERT MARKDOWN BODY TO HTML
        // LEGACY DEPENDENCY: Relies on the custom `StardustParsedown` class to handle specific shortcodes and component conversions.
        $parsedown = new StardustParsedown();
        $html = $parsedown->text($markdown);

        // STEP 3: BUILD TABLE OF CONTENTS (`$toc`) & INJECT ANCHOR IDS INTO `<h2>` / `<h3>`
        // `preg_replace_callback` scans every `<h2>...</h2>` and `<h3>...</h3>` tag in `$html`.
        // Notice `use (&$toc)`: the `&` passes `$toc` BY REFERENCE into the anonymous callback
        // function so each heading matched inside the callback appends an item to `$toc`!
        $toc = [];
        $html = preg_replace_callback('/<(h[23])>(.*?)<\/\1>/i', function($matches) use (&$toc) {
            $tag = strtolower($matches[1]);
            // `strip_tags()` removes nested `<em>` or `<code>` tags so the TOC label and slug are clean plain text:
            $text = strip_tags($matches[2]);
            // Create a URL-safe `id` attribute (e.g., `"Early Life & CPI"` -> `"early-life-cpi"`)
            $id = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $text));
            $id = trim($id, '-');
            
            $toc[] = [
                'level' => ($tag === 'h2') ? 2 : 3,
                'id' => $id,
                'title' => trim($text)
            ];

            // Return the heading with `id="..."` added so anchor links (`#early-life-cpi`) scroll directly to it:
            return "<{$tag} id=\"{$id}\">{$matches[2]}</{$tag}>";
        }, $html);

        // Return the structured payload for JSON serialization or template rendering:
        return [
            'metadata' => $metadata,
            'html' => $html,
            'toc' => $toc
        ];
    }
}
