<?php
// includes/components/easter-eggs/konami-modal.php
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
$k_btn_style = $konami_config['btn_style'] ?? 'btn-primary';
?>

<div class="modal fade" id="konamiModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-black text-light shadow-lg" style="border: 2px solid <?php echo $k_theme; ?>;">
            
            <div class="modal-header border-secondary">
                <h5 class="modal-title" style="color: <?php echo $k_text_clr; ?>;">
                    <i class="<?php echo $k_icon; ?> me-2"></i><?php echo $k_title; ?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-center p-4">
                
                <?php if($k_image): ?>
                <img src="<?php echo $k_image; ?>" 
                     class="img-fluid rounded shadow-lg mb-4 border border-secondary" 
                     alt="Secret Reward"
                     style="max-height: 300px;">
                <?php endif; ?>
                
                <div class="mb-4 text-muted">
                    <?php echo $k_body; ?>
                </div>
                
                <div class="d-grid">
                    <a href="<?php echo $k_btn_link; ?>" class="btn <?php echo $k_btn_style; ?> btn-lg" 
                       style="background-color: <?php echo $k_theme; ?>; border-color: <?php echo $k_theme; ?>;">
                        <?php echo $k_btn_text; ?>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://assets.raggiesoft.com/common/js/konami.js"></script>