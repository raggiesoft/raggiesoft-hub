

<?php
/**
 * ============================================================================
 * ARCHITECTURE & DESIGN: Family Mode Footer Supplement
 * ============================================================================
 * ROLE: Acts as a localized override/supplement for the default footer when 
 *       users are within the "/family" directory. Specifically, it configures
 *       and injects a unique "Konami Code" easter egg payload.
 * 
 * INTEGRATION: Called natively at the end of page renders when the router 
 *              detects a family-scoped context.
 * 
 * MAINTENANCE: Ensure the `$konami_config` array structure exactly matches the
 *              expected payload in `konami.php`. Changes to image paths should
 *              rely on `$cdnBaseUrl`.
 * ============================================================================
 */
// Custom "Family Mode" Konami Code
// [LOGIC] Configure the narrative payload for the Konami code easter egg, specific to the Family hub
$konami_config = [
    'title'      => 'Elara Diagnostic Mode',
    'icon'       => 'fa-duotone fa-microchip-ai',
    'theme'      => '#20c997', 
    'text_color' => '#ffffff',
    'image'      => $cdnBaseUrl . '/family/images/atmospheric/amanda-elara.jpg',
    'body'       => '
        <h4 class="font-monospace text-white">> DIAGNOSTIC ACTIVE</h4>
        <p class="font-monospace text-light mt-2">
            Elara has recognized your signature.<br>
            Routing tables exposed. Latency: 0ms.
        </p>',
    'btn_text'   => 'View Routing Table',
    'btn_link'   => '/family/amanda-elara'
];
include ROOT_PATH . '/includes/components/easter-eggs/konami.php'; 
?>