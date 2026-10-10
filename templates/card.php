<?php
/**
 * ARCHITECTURE: card.php (Template)
 * 
 * Context: RaggieSoft Hub - UI Component Templates.
 * Narrative/Purpose: A boilerplate implementation template showing developers how to correctly 
 * instantiate the `card.php` component using the required `$props` array structure.
 * 
 * Mechanics:
 * - Defines mock data for imagery, text, and nested button properties.
 * - Designed to be copied/pasted into actual view files, not executed directly.
 */
?>
<!-- START: Scroll Card Template Wrapper -->
<div class="scroll-card">
        <?php
          // START: Component Properties Definition
          $props = [
            'imgSrc' => '[Image URL]',
            'imgAlt' => '[Image Alt Text]',
            'fallbackText' => '[Short Text if Image Fails]',
            'title' => '[Item Title]',
            'description' => '[Brief Description]',
            'buttonProps' => [
              'href' => '[Destination URL]',
              'text' => '[Button Text]',
              'variant' => 'primary', /* options: primary, secondary, success, danger, warning, info, light, dark */
              'icon' => 'fa-duotone fa-star', /* FontAwesome Icon */
              'fullWidth' => true
            ]
          ];
          include __DIR__ . '/../includes/components/card.php';
        ?>
      </div>