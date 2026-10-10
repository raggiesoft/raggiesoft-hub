<?php
/**
 * RaggieSoft Hub - Cross-Network Websites Dictionary
 * 
 * ARCHITECTURAL OVERVIEW:
 * This data array acts as the central source of truth for top-level routing across the 
 * various distinct domains/applications within the RaggieSoft ecosystem (e.g., the 
 * corporate site, the Stardust Engine site, Knox, Portfolio).
 * 
 * LOGIC & CONSTRAINTS:
 * - This array ($raggiesoftSites) is typically consumed by global navigation components 
 *   (like a global footer or cross-site launcher).
 * - Modifying URLs here will affect outbound links globally where this array is used.
 * - Ensure icons exist in the FontAwesome library loaded by the consuming applications.
 * 
 * File Info: /includes/components/arrays/_raggiesoft-websites.php
 * Central source of truth for the RaggieSoft Network navigation.
 */
$raggiesoftSites = [
    'network_home' => [
        'title' => 'RaggieSoft.com',
        'url' => 'https://raggiesoft.com/',
        'icon' => 'fa-duotone fa-layer-group',
        'description' => 'The Main Hub'
    ],
    'stardust' => [
        'title' => 'The Stardust Engine',
        'url' => 'https://thestardustengine.com/',
        'icon' => 'fa-duotone fa-rocket-launch',
        'description' => 'Fictional 80s Synth-Rock Band'
    ],
    'knox' => [
        'title' => 'Project: KNOX',
        'url' => 'https://raggiesoftknox.com/',
        'icon' => 'fa-duotone fa-leaf', // Or fa-leaf depending on the vibe
        'description' => 'Sci-Fi Narrative Universe'
    ],
    'portfolio' => [
        'title' => 'MichaelPRagsdale.com',
        'url' => 'https://michaelpragsdale.com/',
        'icon' => 'fa-duotone fa-briefcase',
        'description' => 'Digital Portfolio & Resume'
    ]
];
?>