

<?php
// Custom "Family Mode" Konami Code
$konami_config = [
    'title'      => 'Elara Diagnostic Mode',
    'icon'       => 'fa-duotone fa-microchip-ai',
    'theme'      => '#20c997', 
    'text_color' => '#ffffff',
    'image'      => 'https://assets.raggiesoft.com/family/images/atmospheric/amanda-elara.jpg',
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