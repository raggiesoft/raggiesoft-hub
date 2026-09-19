<?php
// includes/components/easter-eggs/konami.php
// A reusable "Loot Box" modal triggered by the Konami Code.

// 1. Set Defaults (Safety Net)
$k_title     = $konami_config['title']     ?? 'Secret Unlocked';
$k_icon      = $konami_config['icon']      ?? 'fa-duotone fa-unlock';
$k_theme     = $konami_config['theme']     ?? '#0d6efd'; // Default Blue
$k_text_clr  = $konami_config['text_color']?? '#FFD700'; // Gold default
$k_image     = $konami_config['image']     ?? '';
$k_body      = $konami_config['body']      ?? 'You have found a secret area.';
$k_btn_text  = $konami_config['btn_text']  ?? 'Proceed';
$k_btn_link  = $konami_config['btn_link']  ?? '#';
$k_btn_style = $konami_config['btn_style'] ?? 'primary'; // mapped to wa-button variant
?>

<wa-dialog id="konamiModal" label="<?php echo $k_title; ?>" style="--width: 50vw; border: 2px solid <?php echo $k_theme; ?>;">
    
    <div slot="label" style="color: <?php echo $k_text_clr; ?>;">
        <i class="<?php echo $k_icon; ?> me-2"></i><?php echo $k_title; ?>
    </div>

    <div class="text-center p-4">
        
        <?php if($k_image): ?>
        <img src="<?php echo $k_image; ?>" 
             class="img-fluid rounded shadow-lg mb-4 border border-secondary" 
             alt="Secret Reward"
             style="max-height: 300px;">
        <?php endif; ?>
        
        <div class="mb-4 text-muted">
            <?php echo $k_body; ?>
        </div>
        
    </div>

    <wa-button slot="footer" variant="primary" href="<?php echo $k_btn_link; ?>" style="--wa-color-primary-fill: <?php echo $k_theme; ?>; --wa-color-primary-border: <?php echo $k_theme; ?>;">
        <?php echo $k_btn_text; ?>
    </wa-button>

</wa-dialog>

<script src="https://assets.raggiesoft.com/common/js/konami.js"></script>
