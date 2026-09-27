<?php
require_once __DIR__ . '/stardust-parsedown.php';

class StardustLoreParser {
    
    public static function parse($filePath) {
        if (!file_exists($filePath)) {
            return null;
        }

        $content = file_get_contents($filePath);
        $metadata = [];
        $markdown = $content;

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
