<?php
/**
 * REUSABLE COMPONENT: Org Chart (The Iceberg Model)
 * -------------------------------------------------
 * Renders a hierarchical tree structure for corporate lore.
 * Updated: Now supports 'description' field.
 */

// Recursive function to render the tree
if (!function_exists('renderOrgNode')) {
    function renderOrgNode($node, $level = 1) {
        // Map levels to specific border colors if not explicitly set
        $defaultColor = match($level) {
            1 => 'primary',
            2 => 'warning',
            3 => 'danger',
            default => 'secondary'
        };
        
        $color = $node['color'] ?? $defaultColor;
        $hasChildren = !empty($node['children']);
        
        echo "<li>";
        
        // Render the Card
        $tag = isset($node['link']) ? 'a' : 'div';
        $href = isset($node['link']) ? 'href="' . $node['link'] . '"' : '';
        
        echo "<$tag $href class=\"org-card org-level-$level border-top-$color\">";
        
            if (!empty($node['icon'])) {
                echo "<i class=\"{$node['icon']} fa-2x mb-2 text-$color\"></i>";
            }
            
            echo "<span class=\"org-card-title\">{$node['title']}</span>";
            
            if (!empty($node['role'])) {
                echo "<span class=\"org-card-role\">{$node['role']}</span>";
            }
            
            if (!empty($node['meta'])) {
                echo "<div class=\"mt-2 small text-muted border-top border-secondary pt-1\">{$node['meta']}</div>";
            }

            // --- NEW: DESCRIPTION FIELD ---
            if (!empty($node['description'])) {
                echo "<div class=\"mt-2 small fst-italic opacity-75\">{$node['description']}</div>";
            }
            
        echo "</$tag>";

        // Recursive Children
        if ($hasChildren) {
            echo "<ul>";
            foreach ($node['children'] as $child) {
                renderOrgNode($child, $level + 1);
            }
            echo "</ul>";
        }
        
        echo "</li>";
    }
}
?>

<style>
    /* ORG CHART STYLING */
    .org-tree ul {
        padding-top: 20px; 
        position: relative;
        transition: all 0.5s;
        display: flex;
        justify-content: center;
    }
    
    /* THE PARENT CONNECTOR (Vertical Line) */
    .org-tree ul ul::before {
        content: '';
        position: absolute; 
        top: 0; 
        left: 50%;
        border-left: 1px solid #555;
        width: 0; 
        height: 20px;
    }

    .org-tree li {
        float: left; text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        transition: all 0.5s;
    }

    /* Sibling Connectors (Horizontal Bar) */
    .org-tree li::before, .org-tree li::after {
        content: '';
        position: absolute; top: 0; right: 50%;
        border-top: 1px solid #555;
        width: 50%; height: 20px;
    }
    .org-tree li::after {
        right: auto; left: 50%;
        border-left: 1px solid #555;
    }

    /* Remove connectors from single children */
    .org-tree li:only-child::after, .org-tree li:only-child::before {
        display: none;
    }
    .org-tree li:only-child { padding-top: 0; }

    /* Remove left connector from first child and right from last */
    .org-tree li:first-child::before, .org-tree li:last-child::after {
        border: 0 none;
    }
    /* Adding back the vertical connector to the last nodes */
    .org-tree li:last-child::before{
        border-right: 1px solid #555;
        border-radius: 0 5px 0 0;
    }
    .org-tree li:first-child::after{
        border-radius: 5px 0 0 0;
    }

    /* THE CARDS */
    .org-card {
        background: #fff; 
        color: #212529;   
        border: 1px solid rgba(0,0,0,0.1);
        padding: 15px;
        border-radius: 8px;
        display: inline-block;
        min-width: 180px;
        max-width: 250px; /* Constrain width for long descriptions */
        text-decoration: none;
        transition: all 0.3s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        border-top-width: 4px;
        border-top-style: solid;
        z-index: 10;
        position: relative;
        white-space: normal; /* Allow text wrapping for descriptions */
    }
    
    .org-card-title {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
        margin-bottom: 5px;
        display: block;
        color: #212529;
    }
    
    .org-card-role {
        font-size: 0.75rem;
        font-family: monospace;
        color: #6c757d; 
    }

    .org-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        background-color: #f8f9fa;
        color: #212529;
    }

    /* DARK MODE OVERRIDES */
    [data-bs-theme="dark"] .org-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
        backdrop-filter: blur(5px);
        box-shadow: none;
    }

    [data-bs-theme="dark"] .org-card:hover {
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 10px 20px rgba(0,0,0,0.5);
        color: #fff;
    }
    
    [data-bs-theme="dark"] .org-card-title { color: #fff; }
    [data-bs-theme="dark"] .org-card-role { color: #aaa; }

    /* Border Colors */
    .border-top-primary { border-top-color: #0d6efd; }
    .border-top-warning { border-top-color: #ffc107; }
    .border-top-danger { border-top-color: #dc3545; }
    .border-top-success { border-top-color: #198754; }
    .border-top-info { border-top-color: #0dcaf0; }
    .border-top-secondary { border-top-color: #6c757d; }
    .border-top-dark { border-top-color: #212529; }
</style>

<div class="row justify-content-center overflow-auto">
    <div class="col-12 text-center">
        <div class="org-tree d-inline-block text-nowrap">
            <ul>
                <?php 
                if (isset($rootNode) && is_array($rootNode)) {
                    renderOrgNode($rootNode); 
                } else {
                    echo '<li class="text-danger">Error: Missing or Invalid Organization Data ($rootNode)</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>